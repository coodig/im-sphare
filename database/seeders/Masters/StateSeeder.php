<?php

namespace Database\Seeders\Masters;

use App\Models\Masters\Country;
use App\Models\Masters\State;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $globalStates = [
            'india' => [
                // 28 States
                ['name' => 'Andhra Pradesh', 'slug' => 'andhra-pradesh'],
                ['name' => 'Arunachal Pradesh', 'slug' => 'arunachal-pradesh'],
                ['name' => 'Assam', 'slug' => 'assam'],
                ['name' => 'Bihar', 'slug' => 'bihar'],
                ['name' => 'Chhattisgarh', 'slug' => 'chhattisgarh'],
                ['name' => 'Goa', 'slug' => 'goa'],
                ['name' => 'Gujarat', 'slug' => 'gujarat'],
                ['name' => 'Haryana', 'slug' => 'haryana'],
                ['name' => 'Himachal Pradesh', 'slug' => 'himachal-pradesh'],
                ['name' => 'Jharkhand', 'slug' => 'jharkhand'],
                ['name' => 'Karnataka', 'slug' => 'karnataka'],
                ['name' => 'Kerala', 'slug' => 'kerala'],
                ['name' => 'Madhya Pradesh', 'slug' => 'madhya-pradesh'],
                ['name' => 'Maharashtra', 'slug' => 'maharashtra'],
                ['name' => 'Manipur', 'slug' => 'manipur'],
                ['name' => 'Meghalaya', 'slug' => 'meghalaya'],
                ['name' => 'Mizoram', 'slug' => 'mizoram'],
                ['name' => 'Nagaland', 'slug' => 'nagaland'],
                ['name' => 'Odisha', 'slug' => 'odisha'],
                ['name' => 'Punjab', 'slug' => 'punjab'],
                ['name' => 'Rajasthan', 'slug' => 'rajasthan'],
                ['name' => 'Sikkim', 'slug' => 'sikkim'],
                ['name' => 'Tamil Nadu', 'slug' => 'tamil-nadu'],
                ['name' => 'Telangana', 'slug' => 'telangana'],
                ['name' => 'Tripura', 'slug' => 'tripura'],
                ['name' => 'Uttar Pradesh', 'slug' => 'uttar-pradesh'],
                ['name' => 'Uttarakhand', 'slug' => 'uttarakhand'],
                ['name' => 'West Bengal', 'slug' => 'west-bengal'],

                // 8 Union Territories
                ['name' => 'Andaman and Nicobar Islands', 'slug' => 'andaman-and-nicobar-islands'],
                ['name' => 'Chandigarh', 'slug' => 'chandigarh'],
                ['name' => 'Dadra and Nagar Haveli and Daman and Diu', 'slug' => 'dadra-and-nagar-haveli-and-daman-and-diu'],
                ['name' => 'Delhi', 'slug' => 'delhi'],
                ['name' => 'Jammu and Kashmir', 'slug' => 'jammu-and-kashmir'],
                ['name' => 'Ladakh', 'slug' => 'ladakh'],
                ['name' => 'Lakshadweep', 'slug' => 'lakshadweep'],
                ['name' => 'Puducherry', 'slug' => 'puducherry'],
            ],
            'china' => [
                // 4 Municipalities (Directly controlled by central government)
                ['name' => 'Beijing', 'slug' => 'beijing'],
                ['name' => 'Chongqing', 'slug' => 'chongqing'],
                ['name' => 'Shanghai', 'slug' => 'shanghai'],
                ['name' => 'Tianjin', 'slug' => 'tianjin'],

                // 22 Provinces
                ['name' => 'Anhui', 'slug' => 'anhui'],
                ['name' => 'Fujian', 'slug' => 'fujian'],
                ['name' => 'Gansu', 'slug' => 'gansu'],
                ['name' => 'Guangdong', 'slug' => 'guangdong'],
                ['name' => 'Guizhou', 'slug' => 'guizhou'],
                ['name' => 'Hainan', 'slug' => 'hainan'],
                ['name' => 'Hebei', 'slug' => 'hebei'],
                ['name' => 'Heilongjiang', 'slug' => 'heilongjiang'],
                ['name' => 'Henan', 'slug' => 'henan'],
                ['name' => 'Hubei', 'slug' => 'hubei'],
                ['name' => 'Hunan', 'slug' => 'hunan'],
                ['name' => 'Jiangsu', 'slug' => 'jiangsu'],
                ['name' => 'Jiangxi', 'slug' => 'jiangxi'],
                ['name' => 'Jilin', 'slug' => 'jilin'],
                ['name' => 'Liaoning', 'slug' => 'liaoning'],
                ['name' => 'Qinghai', 'slug' => 'qinghai'],
                ['name' => 'Shaanxi', 'slug' => 'shaanxi'],
                ['name' => 'Shandong', 'slug' => 'shandong'],
                ['name' => 'Shanxi', 'slug' => 'shanxi'],
                ['name' => 'Sichuan', 'slug' => 'sichuan'],
                ['name' => 'Yunnan', 'slug' => 'yunnan'],
                ['name' => 'Zhejiang', 'slug' => 'zhejiang'],

                // 5 Autonomous Regions
                ['name' => 'Guangxi', 'slug' => 'guangxi'],
                ['name' => 'Inner Mongolia', 'slug' => 'inner-mongolia'],
                ['name' => 'Ningxia', 'slug' => 'ningxia'],
                ['name' => 'Tibet', 'slug' => 'tibet'],
                ['name' => 'Xinjiang', 'slug' => 'xinjiang'],

                // 2 Special Administrative Regions (SARs)
                ['name' => 'Hong Kong', 'slug' => 'hong-kong'],
                ['name' => 'Macau', 'slug' => 'macau'],
            ],
        ];
        foreach($globalStates as $countrySlug=>$states){
                $country = Country::where('slug',$countrySlug)->first();

                if($country){
                    foreach($states as $state){
                        State::updateOrCreate([
                            'country_id'=>$country->id,'slug'=>$state['slug']
                        ],$state);
                    }
                }
        }
    }
}
