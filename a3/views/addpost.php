<?php include('elements/admin_header.php');?>

<div class="container">
	<div class="page-header">
   <h1> the Add Post View </h1>
  </div>
  <?php if($message){?>
    <div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert">×</button>
    	<?php echo $message?>
    </div>
  <?php }?>
  <div class="row">
      <div class="span8">
        <form action="<?php echo BASE_URL?>addpost/<?php echo $task?>" method="post" onsubmit="editor.post()">
          <label>Title</label>
<<<<<<< HEAD
          <input type="text" class="span6" name="post_title" value="<?php echo $title?>">
					<label>Date</label>
          <input type="date" class="span6" name="post_date" >
					<label>Category ID</label>
          <select class="span6" name="post_categoryID" >
						<option value="Techstuff">Techstuff</option>
    				<option value="Weather">Weather</option>
    				<option value="Sports">Sports</option>
=======
          <input type="text" class="span6" name="post_title" value="<?php echo $title?>">
					<label>Date</label>
          <input type="date" class="span6" name="post_date" >
					<label>Category ID</label>
          <select class="span6" name="post_categoryID" >
						<option value="Techstuff">Techstuff</option>
    				<option value="Weather">Weather</option>
    				<option value="Sports">Sports</option>
>>>>>>> aaef7bf76dcffc998cfe556c525d32a5b9aab426
					</select>
     			<label>Content</label>
          <textarea id="tinyeditor" name="post_content" style="width:556px;height: 200px"><?php echo $content?></textarea>
    			<br/>
          <input type="hidden" name="pID" value="<?php echo $pID?>"/>
          <button id="submit" type="submit" class="btn btn-primary" >Submit</button>
        </form>


      </div>
    </div>
</div>
<?php include('elements/admin_footer.php');?>
