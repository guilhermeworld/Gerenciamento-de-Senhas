<?php

function __autoload($class){
	require_once"{$class}.php";
}

abstract class conBD
{
	private $conexao;

	private function setCon(){

		return
		is_null($this->conexao)? 
		$this->conexao = new PDO("mysql:host=localhost; dbname=gersenhas","admin","admin"):
		$this->conexao;
	}
	public function getCon(){
		return $this->setCon();
	}
}



