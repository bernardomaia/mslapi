<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class MaxsumTest extends TestCase
{

    public function testMaxSumEmptyList()
    {
        //Teste de lista vazia, deve retornar 0 
        $response = $this->postJson('/maxsum/', ['list' => []]);
        $this->assertEquals(0, $response["result"]);

    }

    public function testMaxSumAllPositives()
    {
        //Teste de lista toda positiva, deve retornar a soma de todos os números
        $response = $this->postJson('/maxsum/', ['list' => [5,6,2,8,10]]);
        $this->assertEquals(31, $response["result"]);

    }

    public function testMaxSumAllNegatives()
    {
        //Teste de lista toda negativa, deve retornar zero pois é o resultado esperado de uma
        //lista vazia e o subarray vazio é válido para qualquer array
        $response = $this->postJson('/maxsum/', ['list' => [-8,-4,-5,-6,-9]]);
        $this->assertEquals(0, $response["result"]);
    }

    public function testMaxSumSinglePositive()
    {
        //Teste de lista com um elemento positivo, deve retornar o valor do único elemento positivo
        $response = $this->postJson('/maxsum/', ['list' => [-8,-4,5,-6,-9]]);
        $this->assertEquals(5, $response["result"]);
    }

    public function testMaxSumLargeArrays()
    {
        //Teste de listas de 100 elementos gerados aleatoriamente, o valor de retorno foi
        // determinado utilizando uma ferramenta online
        $response = $this->postJson('/maxsum/', ['list' => [-85,-90,-39,63,-59,87,-66,-95,4,-68,-98,-32,84,39,-89,84,-81,-96,61,-35,65,-21,41,52,37,63,-13,0,-19,-88,76,87,-32,98,0,-10,90,84,38,-19,-45,53,41,-1,-3,67,65,42,-23,-65,-52,-41,85,65,2,30,-78,-75,-46,-55,36,18,5,2,70,68,-78,-1,-35,77,-51,-41,49,-59,-3,-99,83,62,-62,-47,-38,-43,75,-42,95,-84,-72,82,9,-31,44,46,-77,93,-15,74,36,-50,88,40]]);
        $this->assertEquals(775, $response["result"]);
        $response = $this->postJson('/maxsum/', ['list' => [-44,53,-96,72,-59,62,-56,-66,-56,17,48,80,-42,-24,100,54,72,9,92,-14,-24,21,12,-26,52,77,-92,28,43,-75,-6,-2,-16,46,-22,59,59,-50,60,15,-47,39,-11,15,22,-70,39,26,-46,-18,-49,-20,-49,-100,-54,-2,6,86,-17,57,-75,-18,86,81,-24,-76,-84,48,39,-31,24,73,-57,90,-55,-31,-12,-21,98,94,91,55,81,-18,-42,-29,28,-10,-33,-32,-76,21,-26,-65,-73,-15,8,80,6,1]]);
        $this->assertEquals(734, $response["result"]);
        $response = $this->postJson('/maxsum/', ['list' => [-62,-63,-9,97,-51,41,56,-41,54,-33,-15,-32,-100,82,36,-6,-44,-51,7,-20,-42,48,47,-38,57,93,-45,-85,74,49,71,61,25,46,-100,7,-28,-98,28,-51,36,-73,75,13,2,-93,-93,73,69,91,-4,-56,-23,47,84,-63,61,38,-86,44,55,39,32,88,51,-98,-93,-16,80,-14,-100,76,40,-81,87,62,6,-18,-19,98,-96,25,56,2,48,57,99,76,-23,92,27,-42,88,5,-94,-46,-15,10,-31,17]]);
        $this->assertEquals(992, $response["result"]);
        $response = $this->postJson('/maxsum/', ['list' => [-58,1,70,-13,-94,-79,43,-6,69,-41,54,-100,-99,44,45,77,80,57,-73,27,-43,-52,50,69,-47,-25,33,-25,-81,-90,-90,-49,59,50,77,92,-83,-62,-54,-36,-78,31,96,63,-30,21,-52,-59,-46,-25,71,95,-6,13,-1,40,-87,-55,51,66,-62,77,45,-23,-4,-48,-16,33,-3,-44,60,1,92,-32,-6,5,-70,-18,-81,98,91,82,83,94,-4,56,-32,-10,-35,-75,-54,60,49,-14,48,-29,86,-4,-67,3]]);
        $this->assertEquals(593, $response["result"]);
    }
    
}
