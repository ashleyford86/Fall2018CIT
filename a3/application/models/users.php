<<<<<<< HEAD
<?php
class Users extends Model{

  public function __construct(){
  		parent::__construct();
  		}

	public function getUsers($uID){
		$sql =  'SELECT uID, first_name, last_name, email, password FROM users WHERE uID = ?';
		// perform query
		$results = $this->db->getrow($sql, array($uID));
		$user = $results;
		return $user;
	}
	public function getAllUsers($limit = 0){
		if($limit > 0){
			$numusers = ' LIMIT '.$limit;
		}
		$sql =  'SELECT uID, first_name, last_name, email, password FROM users'.$numusers;
		// perform query
		$results = $this->db->execute($sql);
		while ($row=$results->fetchrow()) {
			$users[] = $row;
		}
		return $users;
	}
	public function addUser($data){
		$sql='INSERT INTO users (first_name, last_name, email, password) VALUES (?,?,?,?)';
		$this->db->execute($sql,$data);
		$message = 'User added.';
		return $message;
	}
}
?>
=======
<?php
class Users extends Model{

  public function __construct(){
  		parent::__construct();
  		}

	public function getUsers($uID){
		$sql =  'SELECT uID, first_name, last_name, email, password FROM users WHERE uID = ?';
		// perform query
		$results = $this->db->getrow($sql, array($uID));
		$user = $results;
		return $user;
	}
	public function getAllUsers($limit = 0){
		if($limit > 0){
			$numusers = ' LIMIT '.$limit;
		}
		$sql =  'SELECT uID, first_name, last_name, email, password FROM users'.$numusers;
		// perform query
		$results = $this->db->execute($sql);
		while ($row=$results->fetchrow()) {
			$users[] = $row;
		}
		return $users;
	}
	public function addUser($data){
		$sql='INSERT INTO users (first_name, last_name, email, password) VALUES (?,?,?,?)';
		$this->db->execute($sql,$data);
		$message = 'User added.';
		return $message;
	}
}
?>
>>>>>>> aaef7bf76dcffc998cfe556c525d32a5b9aab426
