<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListController extends Controller
{
    public function maxSumList(Request $request){
        $list = $request->list;
        $current = 0;
        $max_sum = 0;

        foreach ($list as $v){
            $current = ($current + $v > 0) ? $current + $v : 0;
            $max_sum = ($current > $max_sum) ? $current : $max_sum; 
        }

        return ["result" => $max_sum];
    }
}
