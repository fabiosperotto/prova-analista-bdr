<?php
namespace App;

/**
 * Este é o primeiro nível de refatoração. Pode ser facilmente melhorado e refatorado para 2 classes: DataBaseClass 
 * somente com dados do schema do banco (classe modelo como Singleton ou outros design patterns) e 
 * MyUserClass com a funcao getUserList + objeto de conexao injeção de dependência.
 */
class MyNewUserClass
{
	private $dbconn;

	/**
	 * Extraindo da classe as informações de acesso ao banco, pode ser colocado separado em um arquivo de configuração, por exemplo
	 * @param string $host 
	 * @param string $user 
	 * @param string $password 	 
	 */
	public function __construct($host, $user, $password)
	{
		$this->dbconn = new DatabaseConnection($host, $user, $password);
		if(!$this->dbconn) die('Não é possível conectar ao banco de dados'); //melhorar para try-catch ou outros
	}

	/**
	 * Recupera uma lista de nomes de usuarios ordenada alfabeticamente
	 * @return array|boolean conjunto com os nomes de usuarios ou false se nao for possivel concluir a consulta
	 */
	public function getUserList()
	{			
		$results = $this->dbconn->query('select name from user');
		if(!$results) return false;
		sort($results);
		return $results;
	}
}