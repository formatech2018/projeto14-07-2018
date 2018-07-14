<?php 
namespace Controller\control;
use Controller\dao\LivroSql;
/**
* 
*/
class LivroController extends CrudController
{
	
	public static function insert($table)
	{
		return parent::insert($table);
	}

	public static function update($table)
	{
		return parent::update($table);
	}
	public function search_livro_like_name ($nome_livro, $isbn)
	{
		$livrosql = new LivroSql();
		return $livrosql->search_livro_like_name($nome_livro,$isbn);
	}

}

 ?>