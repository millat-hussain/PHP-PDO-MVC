<?php 

class Database 
{

	private $dns='mysql:localhost,dbname:protfolio-dynamic';
	private $user='root';
	private $pass='';
	public $db;


	function __construct()
	{
		try {
			$this->db=new PDO($this->dns,$this->user,$this->pass);	
		} catch (PDOException $e) {
			echo "This Connection In Wrong".$e;
		}
	}


public function insert(){

$query ="INSERT into send_message(u_name,u_emile,u_subject,message)VALUES(:name,:emile,:subject,:message)";

$stmt = $this->db->prepare($query);

$stmt->execute([':name'=>'millat',':emile'=>'Hussain',':subject'=>'jafor',':message'=>'d']);

return true;

	}
}


$db = new Database();

$db->insert();




 ?>