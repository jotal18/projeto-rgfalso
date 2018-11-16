<?php 
namespace APP;

use APP\Sql;

class Rg extends Model{


	public static function listAll()
	{
		$sql = new Sql();

		return $sql->select("SELECT * FROM rg ORDER BY nome");
	}

	public function save()
	{
		$sql = new Sql();

		$results = $sql->query("INSERT INTO rg WHERE id= :idrg", array(
			":idrg" => $this->getid()
		));

		$this->setData($results[0]);

	}

	public function get($idrg)
	{
		$sql = new Sql();

		$results = $sql->select("SELECT * FROM rg WHERE id = :idcategory", [":idrg"=>$idrg
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

		$results = $sql->select("SELECT * FROM rg WHERE nome = :nome" , array(
				":nome" => $this->getnome()
		));

		$this->setData($results[0]);

		
	}
}






 ?>