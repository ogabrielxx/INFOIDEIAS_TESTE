<?php

namespace SRC;

class Funcoes
{
    /*

    Desenvolva uma função que receba como parâmetro o ano e retorne o século ao qual este ano faz parte. O primeiro século começa no ano 1 e termina no ano 100, o segundo século começa no ano 101 e termina no 200.

	Exemplos para teste:

	Ano 1905 = século 20
	Ano 1700 = século 17

     * */
    public function SeculoAno(int $ano): int {

        echo "Insira o ano: ";

        $valor = $ano / 100;
        $seculo = ceil($valor);

        return "Ano $ano = século $seculo";
    }	

	/*

    Desenvolva uma função que receba como parâmetro um número inteiro e retorne o numero primo imediatamente anterior ao número recebido

    Exemplo para teste:

    Numero = 10 resposta = 7
    Número = 29 resposta = 23

     * */
    public function PrimoAnterior(int $numero): int {

        $count = 2;
        $arr = array();
    
        while ($count <= $numero){
    
            $i = 2;
            $primo = 1;
    
            while($i < $count){
                if($count % $i == 0){
                    $primo = 0;
                    break;
                }
                $i++;
            }
            
            if($primo){
                array_push($arr,$count);
            }
    
            $count++;
        }
        
        if($primo){
            $maior = max($arr);
            unset($arr[array_search($maior, $arr)]);
            $SegundoMaior = max($arr);

            return "Numero = $numero resposta = $SegundoMaior";
        }else{
            $maior = max($arr);

            return "Numero = $numero resposta = $maior";
        }
    }

    /*

    Desenvolva uma função que receba como parâmetro um array multidimensional de números inteiros e retorne como resposta o segundo maior número.

    Exemplo para teste:

	Array multidimensional = array (
	array(25,22,18),
	array(10,15,13),
	array(24,5,2),
	array(80,17,15)
	);

	resposta = 25

     * */
    public function SegundoMaior(array $arr): int {

        foreach($arr as $key => $item){
            if($key == 0){
                $chave1 = $key;
                $valor1 = max($item);
            }
            else if($key == 1){
                $chave2 = $key;
                $valor2 = max($item);
            }
            else if($key == 2){
                $chave3 = $key;
                $valor3 = max($item);
            }
            else if($key == 3){
                $chave4 = $key;
                $valor4 = max($item);
            }
        }
    
        $valores = array($chave1 => $valor1, $chave2 => $valor2, $chave3 => $valor3, $chave4 => $valor4);
    
        $maior = max($valores);
    
        unset($valores[array_search($maior, $valores)]);
    
        $SegundoMaior = max($valores);
    
        return "resposta = $SegundoMaior";
    }
	
    /*
   Desenvolva uma função que receba como parâmetro um array de números inteiros e responda com TRUE or FALSE se é possível obter uma sequencia crescente removendo apenas um elemento do array.

	Exemplos para teste 

	Obs.:-  É Importante  realizar todos os testes abaixo para garantir o funcionamento correto.
         -  Sequencias com apenas um elemento são consideradas crescentes

    [1, 3, 2, 1]  false
    [1, 3, 2]  true
    [1, 2, 1, 2]  false
    [3, 6, 5, 8, 10, 20, 15] false
    [1, 1, 2, 3, 4, 4] false
    [1, 4, 10, 4, 2] false
    [10, 1, 2, 3, 4, 5] true
    [1, 1, 1, 2, 3] false
    [0, -2, 5, 6] true
    [1, 2, 3, 4, 5, 3, 5, 6] false
    [40, 50, 60, 10, 20, 30] false
    [1, 1] true
    [1, 2, 5, 3, 5] true
    [1, 2, 5, 5, 5] false
    [10, 1, 2, 3, 4, 5, 6, 1] false
    [1, 2, 3, 4, 3, 6] true
    [1, 2, 3, 4, 99, 5, 6] true
    [123, -17, -5, 1, 2, 3, 12, 43, 45] true
    [3, 5, 67, 98, 3] true

     * */
    
	public function SequenciaCrescente(array $arr): bool {
        
        return true; 
    }
}
