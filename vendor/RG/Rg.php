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

	public function getId($idrg)
	{
		$sql = new Sql();

		$results = $sql->select("SELECT * FROM rg WHERE idrg = :idrg", [":idrg"=>$idrg
		]);

		$this->setData($results[0]);

		// echo '<pre>';
		// print_r($results);
		// echo '</pre>';

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
		
		// Mostra o resultado da pesquisa
		echo '<pre>';
		print_r($results);
		echo '</pre>';

	}

	public function getError($error) {

	}

}






 ?>