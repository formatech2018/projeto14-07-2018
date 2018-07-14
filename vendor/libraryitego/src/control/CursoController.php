<?php 
namespace Controller\control;
use Controller\dao\CursoSql;
/**
* 
*/
class CursoController extends CrudController
{
		
	public static function insert($table)
	{
		return parent::insert($table);
	}
	
	public function search_curso_like_name ($nome_curso, $tipo)
	{
		$cursosql = new CursoSql();
		return $cursosql->search_curso_like_name($nome_curso,$tipo);
	}
}

 ?>