<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListController extends Controller
{
    public function maxSumList(Request $request){
        $list = $request->list;
        $current = 0;//Soma do subarray atual
        $max_sum = 0;//Maior soma encontrada até o momento

        foreach ($list as $v){
            //Atualiza o valor da soma do subarray, adicionando o valor do elemento atual. 
            //Caso a soma seja negativa, a soma do subarray torna-se zero, pois são considerados 
            // apenas subarrays com somas positivas. 
            $current = ($current + $v > 0) ? $current + $v : 0;
            //Quando o subarray de soma positiva é maior que a soma máxima encontrada anteriormente,
            // a variável max-sum é atualizada. 
            $max_sum = ($current > $max_sum) ? $current : $max_sum; 
        }

        return ["result" => $max_sum];
    }
}
