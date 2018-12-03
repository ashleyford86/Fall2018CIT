<?php
include('views/elements/header.php');?>

<div class="container">
  <div class="row">
    <div class="well">
      <h3 class="text-center">Ashley's Final</h3>
    </div>
    <div class="span7">
      <img src="views\img\us.jpg" alt="img"  >
    </div>
    <div class="span5">
			<div class="well">

      <h3>Get your local weather</h3>
      <form method="post" action="<?php echo BASE_URL?>weather/getresults">

       <label for "zip">Enter Your Zip Code</label>
       <input type="text" name="zip" id="zip" required="zip" />
       <br/>
       <button type="submit" class="btn">Load Results</button>

   </form>
			</div>
		</div>
  </div>
</div>

<div class="container">
	<div class="page-header">
    <h3>Latest news from <?php echo $title;?></h3>
  </div>
    <?php
    echo $data;
    ?>
</div>
<?php include('views/elements/footer.php');?>
