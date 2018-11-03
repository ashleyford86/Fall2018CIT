<?php

class LoginController extends Controller{

   protected $userObject;

   public function do_login() {
	   // handle login
     //public function add($num1 = 0,$num2 = 0,$num3 = 0){
     //$sum = $num1+$num2+$num3;
    //$this->set('numbers',$sum);
    //}

       $this->userObject = new Users();

       if($this->userObject->checkUser($_POST['email'],$_POST['password'])) {

           $userInfo = $this->userObject->getUserFromEmail($_POST['email']);

           $_SESSION['uID'] = $userInfo['uID'];

           header('Location: '.BASE_URL);

       }
       else {
           $this->set('error','Check information entered.');
       }

   }

}
