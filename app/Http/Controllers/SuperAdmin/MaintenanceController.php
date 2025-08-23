<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
// use App\Models\MaintenanceLog;
use App\Models\Maintenance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

use function Laravel\Prompts\error;

class MaintenanceController extends Controller
{


    public function show()
    {
        $logs = Maintenance::with('user:id,username')->latest()->limit(20)->get();

        $laravelLogPath = storage_path('logs/laravel.log');
        $logPreview = File::exists($laravelLogPath) ? $this->tailFile($laravelLogPath, 60) : '(no laravel.log file found)';

        $isDown = app()->isDownForMaintenance();

        return view("superadmin.maintenance.show", compact('logs', 'logPreview', 'isDown'));
    }

     public function clearCaches(Request $request)
    {
        return $this->runAndLog(function () {
            Artisan::call('config:clear');
            Artisan::call('cache:clear');
            Artisan::call('route:clear');
            Artisan::call('view:clear');
            Artisan::call('optimize:clear'); // safe additive
        }, 'clear_caches', 'Cleared config, cache, route, view & optimize caches.');
    }


    public function queueRestart(Request $request){
        return $this->runAndLog(function(){
            Artisan::call('queue:restart');
        },'queue_restart','Queue Restarted successfully');
    }

    public function maintenanceToggle(Request $request){
        $mode = $request->validate([
            'mode'=>'required|in:up,down',
        ])['mode'];

        if($mode === 'down'){
            $secret = $request->input('secret') ?: bin2hex(random_bytes(8));
            Artisan::call('down',['--secret'=>$secret]);
            $msg = "App is down. Secret bypass ".url($secret);

            return $this->logAndBack('Maintenance down','success',$msg);
        }else{
            Artisan::call('up');
            return $this->logAndBack('Maintenance up','success','App is up');
        }
    }

    public function purgeLaravelLog(){
        $path = storage_path('logs/laravel.log');
        if(File::exists($path)){
            File::put($path,'');
        };

        return $this->logAndBack('purge_laravel_log','success','laravel.log cleared');

    }

    protected function runAndLog(\Closure $fn,string $action, string $successMsg){
        try{
            $fn();
            return $this->logAndback($action,'success',$successMsg);
        }catch(\Throwable $e){
            return $this->logAndBack($action ,'error',$e->getMessage());
        }
    }

    protected function logAndBack(string $action, string $status, string $message){
        Maintenance::create([
            'user_id'=>Auth::id(),
            'action'=>$action,
            'status'=>$status,
            'message'=>$message,
            'meta'=>[
                'ip'=>request()->ip(),
                'ua'=>request()->userAgent(),
            ]
            ]);

            return back()->with($status === 'success' ? 'status': 'error',$message);
    }


    protected function tailFile(string $file, int $lines = 100): string
    {
        if (!File::exists($file)) return '';
        $contents = File::get($file);
        $arr = preg_split('/\r\n|\r|\n/', $contents);
        $slice = array_slice($arr, max(0, count($arr) - $lines));

        return implode(PHP_EOL, $slice);
    }
}
