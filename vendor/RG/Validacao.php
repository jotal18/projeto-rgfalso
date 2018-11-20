<?php 

namespace APP;


class Validacao extends Model{

	public function validaNome($valor) {

		if (!isset($valor) || empty($valor)) {
			throw new Nome("Nome", 1);
			
		}
	}

	public function validaMae($valor) {

		if (!isset($valor) || empty($valor)) {
			throw new Mae("Mãe", 1);
		}
	}

}
	

 ?>