<?php 

namespace APP;

class Model{

	private $values = [];

	// Método GET e SET para atributo
	public function __call($name, $args)
	{
		$method = substr($name, 0, 3);
		$fildName = substr($name, 3, strlen($name));

		switch ($method) {
			case 'get':
				return (isset($this->values[$fildName])) ? $this->values[$fildName] : NULL;
				break;
			
			case 'set':
				$this->values[$fildName] = $args[0];
				break;
		}
	}

	// Método SET para array
	public function setData($data = array())
	{
		foreach ($data as $key => $value) {
			$this->{"set".$key}($value);
		}
	}

	// Método GET para array
	public function getValues()
	{
		return $this->values;
	}

}

 ?>