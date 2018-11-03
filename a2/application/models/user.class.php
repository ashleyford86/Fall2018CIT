<<<<<<< HEAD
<?php
class User extends Model {
    public function __construct() {
        parent::__construct();
    }
    public function __set($name,$value) {
        $this->$name = $value;
    }
    public function __get($name) {
        return $this->$name;
    }
    public function __destruct() {
    }
    public function getName() {
        return array (
            'userid' => $this->userID,
            'firstname' => $this->firstname,
            'lastname' => $this->lastname,
            'email' => $this->email,
            'role' => $this->role
        );
    }
}
?>
=======
<?php
class User extends Model {
    public function __construct() {
        parent::__construct();
    }
    public function __set($name,$value) {
        $this->$name = $value;
    }
    public function __get($name) {
        return $this->$name;
    }
    public function __destruct() {
    }
    public function getName() {
        return array (
            'userid' => $this->userID,
            'firstname' => $this->firstname,
            'lastname' => $this->lastname,
            'email' => $this->email,
            'role' => $this->role
        );
    }
}
?>
>>>>>>> aaef7bf76dcffc998cfe556c525d32a5b9aab426
