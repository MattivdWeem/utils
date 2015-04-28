<?php

class arrayStringify {

	private $array = [];
	private $string;

	public function __construct(array $array){
		if(is_array($array)):
			$this->array = $array;
			return true;
		endif;
		return false;
	}

	public function toString($input = NULL){

		if ($input == NULL):
			$input = $this->array;
		endif;
		$str = '';
		foreach($input as $key => $contents):
			if(is_array($contents)):
				$contents = "\r\n\t".$this->toString($contents)."\r\n\t";
			endif;
		$str = "'".$key."' \t" . '=>'. "\t'".$contents."'";
		endforeach;
		return "[\r\n\t".$str."\r\n]";

	}

	public function getString(){
		return $this->string;
	}

	public function setString($string){
		$this->string = $string;
	}

}

$stringify = new arrayStringify(['hallo' => 'mooieWereld','test' => ['awsome' => 'something']]);
$stringify->setString($stringify->toString());
echo $stringify->getString();

