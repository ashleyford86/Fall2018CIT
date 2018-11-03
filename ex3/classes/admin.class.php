<<<<<<< HEAD
<?php
class admin extends user {
	public function __construct($userlevel, $userid) {
		parent::__construct();
		$this->user_id = $userid;
    $this->user_type = '2';
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

	static public function getCalc($a,$b)
	{
		return ($a+$b)*$a;
	}
}
?>
=======
<?php
class admin extends user {
	public function __construct($userlevel, $userid) {
		parent::__construct();
		$this->user_id = $userid;
    $this->user_type = '2';
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

	static public function getCalc($a,$b)
	{
		return ($a+$b)*$a;
	}
}
?>
>>>>>>> aaef7bf76dcffc998cfe556c525d32a5b9aab426
