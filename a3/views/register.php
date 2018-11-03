<<<<<<< HEAD
<?php include('elements/header.php');
require_once ('application/config.php');?>

<div class="container">
	<div class="page-header">
   <h1> Register </h1>
  </div>
  <?php if($message){?>
    <div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert">×</button>
    	<?php echo $message?>
    </div>
  <?php }?>
  <div class="row">
      <div class="span8">
        <form action="<?php echo BASE_URL?>register/<?php echo $task?>" method="post" onsubmit="editor.post()">
          <label>First Name</label>
          <input type="text" class="span6" name="first_name" required>
					<label>Last Name</label>
          <input type="text" class="span6" name="last_name" required>
					<label>Email Address</label>
          <input type="email" class="span6" name="email" required>
     			<label>Password</label>
          <input type="password" class="span6" name="password" required>
    			<br/>
          <input type="hidden" name="uID" value="<?php echo $uID?>"/>
          <button id="register" type="submit" class="btn btn-primary" >Sign Up!</button>
        </form>
      </div>
    </div>
</div>
<?php include('elements/admin_footer.php');?>
=======
<?php include('elements/header.php');
require_once ('application/config.php');?>

<div class="container">
	<div class="page-header">
   <h1> Register </h1>
  </div>
  <?php if($message){?>
    <div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert">×</button>
    	<?php echo $message?>
    </div>
  <?php }?>
  <div class="row">
      <div class="span8">
        <form action="<?php echo BASE_URL?>register/<?php echo $task?>" method="post" onsubmit="editor.post()">
          <label>First Name</label>
          <input type="text" class="span6" name="first_name" required>
					<label>Last Name</label>
          <input type="text" class="span6" name="last_name" required>
					<label>Email Address</label>
          <input type="email" class="span6" name="email" required>
     			<label>Password</label>
          <input type="password" class="span6" name="password" required>
    			<br/>
          <input type="hidden" name="uID" value="<?php echo $uID?>"/>
          <button id="register" type="submit" class="btn btn-primary" >Sign Up!</button>
        </form>
      </div>
    </div>
</div>
<?php include('elements/admin_footer.php');?>
>>>>>>> aaef7bf76dcffc998cfe556c525d32a5b9aab426
