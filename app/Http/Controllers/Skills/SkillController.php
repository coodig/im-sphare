<?php

namespace App\Http\Controllers\Skills;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Psy\TabCompletion\Matcher\FunctionsMatcher;

use function PHPUnit\Framework\returnSelf;

class SkillController extends Controller
{



    public function show()
    {
        return view('skills.show');
    }

    public function edit()
    {
        return view('skills.edit');
    }
}
