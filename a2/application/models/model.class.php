<<<<<<< HEAD
<?php
abstract class Model {
    protected $userID;
    protected $firstname;
    protected $lastname;
    protected $email;
    protected $role;
    public function __construct() {
// Will revist this Per Assignment 2
    }
    public function __set($name,$value) {
        $this->$name = $value;
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
abstract class Model {
    protected $userID;
    protected $firstname;
    protected $lastname;
    protected $email;
    protected $role;
    public function __construct() {
// Will revist this Per Assignment 2
    }
    public function __set($name,$value) {
        $this->$name = $value;
    }
    public function __get($name) {
        return $this->$name;
    }
    public function __destruct() {

    }
}
?>
>>>>>>> aaef7bf76dcffc998cfe556c525d32a5b9aab426
