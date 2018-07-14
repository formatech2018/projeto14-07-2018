<?php 
namespace Controller\control;

/**
* 
*/
class TurnoController extends CrudController
{
	
	public static function insert($table)
	{
		$requireds = $table->getRequireds();

		if (CrudController::isVerifyRequireds($table,$requireds)) {
			
			return parent::insert($table);
		}
		else{
			return array();
		}
	}
	public static function update($table)
	{
		$requireds = $table->getRequireds();

		if (CrudController::isVerifyRequireds($table,$requireds)) {
			
			return parent::update($table);
		}
		else{
			return array();
		}
	}
	public static function delete($table)
	{
		return parent::delete($table);
	}
}

 ?>