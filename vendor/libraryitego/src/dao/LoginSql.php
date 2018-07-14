<?php 
namespace Controller\dao;

use \Controller\dao\ControllerSql;

/**
* 
*/
class LoginSql extends ControllerSql
{
	

	public function is_exist($email = "", $senha = "")
	{
		$q = "SELECT * from usuario inner join senha on usuario.idusuario = senha.usuario_idusuario where senha_usuario = :SENHA and email = :EMAIL";

		$values = array(
			':EMAIL' => $email,
			':SENHA' => $senha
		);

		return $this->executeSql($q, $values);
				
	}
	public function getPasswords($idusuario)
	{
		$q = "SELECT senha_usuario from senha where usuario_idusuario = :ID
		order by senha.idsenha desc;";
		$values = array(
			'ID' => $idusuario
		);
		return $this->executeSql($q, $values);
	}

		public function getNivelFuncionario($idusuario)
		{
			$q = "SELECT nivel from funcionario INNER JOIN cargo on funcionario.cargo_idcargo = cargo.idcargo 
				WHERE usuario_idusuario = :ID;";
			$values = array(
				':ID' => $idusuario
			);
			$res = $this->executeSql($q, $values);
			return $res[0];
		}

}
?>