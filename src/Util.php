<?php
namespace App;

class Util
{

	/**
	 * Efetua processamento da brincadeira fizz-buzz ate um numero desejado
	 * @param null|int $maximo numero maximo para os calculos do fizz-buzz, default é 100
	 * @return array com os valores processados ou array vazio se nada processar
	 */
	public function fizzBuzz($maximo = 100)
	{
		$data = array();
		for($i=1; $i <= $maximo; $i++)
		{
			$mensagem = '';
			//utilizo praticas de object calisthenics para diminuir o uso de else
			if($i % 3 == 0) $mensagem .= 'Fizz';
			if($i % 5 == 0) $mensagem .= 'Buzz';
			if($i %3 != 0 && $i % 5 != 0) $mensagem = $i;			
			$data[] = $mensagem;
		}
		return $data;
	}
}