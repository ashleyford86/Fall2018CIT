<<<<<<< HEAD
<?php
class regular extends user {
	public function __construct($userlevel, $userid) {
		parent::__construct();
		$this->user_id = $userid;
    $this->user_type = '1';
    $this->user_level = $userlevel;
	}
	public function __set($name, $value) {
		$this->$name = $value;
    return;
	}
	public function __get($name) {
		return $this->$name;
	}
	public function __destruct() {
	}
}
?>
=======
<?php
class regular extends user {
	public function __construct($userlevel, $userid) {
		parent::__construct();
		$this->user_id = $userid;
    $this->user_type = '1';
    $this->user_level = $userlevel;
	}
	public function __set($name, $value) {
		$this->$name = $value;
    return;
	}
	public function __get($name) {
		return $this->$name;
	}
	public function __destruct() {
	}
}
?>
>>>>>>> aaef7bf76dcffc998cfe556c525d32a5b9aab426
