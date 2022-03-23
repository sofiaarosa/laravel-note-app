<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Carbon;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public static function createDate($str){
        return Carbon::create($str)->format('d/m/Y');
    }

    public static function isColorSelected($color, $colorClass){
        $flag = strpos($colorClass, $color);
        if($flag === false)
            return '';
        else return 'selected';
    }
}
