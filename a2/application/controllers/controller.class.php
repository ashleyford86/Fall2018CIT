<?php
class Controller {
    public $load;
    public $user;
    function __construct() {
        $this->load = new Load();
        $this->user = new User();
        $this->home();
    }
    function home() {
        $this->user->userID = 'aford';
        $this->user->firstname = 'Ashley';
        $this->user->lastname = 'Ford';
        $this->user->email = 'aford@iu.edu';
        $this->user->role = 'admin';
        $data = $this->user->getName();
        $this->load->view('view.php',$data);
    }
}
?>
