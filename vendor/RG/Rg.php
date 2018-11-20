<?php 
namespace APP;

use APP\Sql;

class Rg extends Model{


	public static function listAll()
	{
		$sql = new Sql();

		return $sql->select("SELECT * FROM rg ORDER BY nome");
	}

	public function update()
	{
		$sql = new Sql();

		$sql->query("UPDATE rg SET nome = :nome, nome_mae = :nome_mae, dt_nascimento = :dt_nascimento, num_rg = :num_rg WHERE idrg = :idrg", array(
				":nome" => $this->getnome(),
				":nome_mae" => $this->getnome_mae(),
				":dt_nascimento" => $this->getdt_nascimento(),
				":num_rg" => $this->getnum_rg(),
				":idrg" => $this->getidrg()

		));

	}

	public function save()
	{
		$sql = new Sql();

		$results = $sql->query("INSERT INTO rg (nome, nome_mae, dt_nascimento, num_rg, oficio) VALUES(:nome, :nome_mae, :dt_nascimento, :num_rg, :oficio)", array(
				":nome" => $this->getnome(),
				":nome_mae" => $this->getnome_mae(),
				":dt_nascimento" => $this->getdt_nascimento(),
				":num_rg" => $this->getnum_rg(),
				":oficio" => $this->getname()
		));

		// $this->setData($results);

	}

	public function getId($idrg)
	{
		$sql = new Sql();

		$results = $sql->select("SELECT * FROM rg WHERE idrg = :idrg", [":idrg"=>$idrg
		]);

		$this->setData($results[0]);
	}

	public function delete()
	{
		$sql = new Sql();

		$sql->query("DELETE FROM tb_categories WHERE id = :idrg", 
			[":idrg"=>$this->getid()
		]);
	}

	public function pesquisa()
	{
		$sql = new Sql();

		$results = $sql->select("SELECT * FROM rg WHERE nome = :nome AND nome_mae = :nome_mae AND dt_nascimento = :dt_nascimento || num_rg = :num_rg" , array(
				":nome" => $this->getnome(),
				":nome_mae" => $this->getnome_mae(),
				":dt_nascimento" => $this->getdt_nascimento(),
				":num_rg" => $this->getnum_rg()
		));

		$this->setData($results);


		if (count($results) === 0) {

			throw new \Exception("Nenhum resultado encontrado.", 1);

		} else {

			return $results;

		}

	}

	public function upload() {

		$file = $_FILES['oficio'];
		
		date_default_timezone_set("Brazil/East");
		$ext = strtolower(substr($file['name'],-4));
		$new_name = date("dmyhis") . $ext;
		$dir = $_SERVER['DOCUMENT_ROOT'] .'/upload/';

		if (($file['size'] == 0) || ($file['type'] != 'application/pdf')) {

			echo 'Arquivo inválido.';
			throw new \Exception("Arquivo inválido.", 1);
			

		} else  {

			if (move_uploaded_file($file['tmp_name'], $dir.$new_name)) {
				echo 'Arquivo movido com sucesso.';
				$file['name'] = $new_name;
				$this->setData($file);
			} else {
				throw new \Exception("Arquivo inválido.", 1);
			}
			
		}

	}

}






 ?>