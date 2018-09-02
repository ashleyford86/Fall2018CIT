


  <?php
 include 'includes/header.inc.php';

$myArray = array('myName'=>'Ashley','myColor'=>'Blue','myMovie'=>'The Notebook','myBook'=>'A Song of Ice and Fire','myWebsite'=>'Facebook');

$meWho = $myArray['myName'];

echo '<h1>' . "<br/>My name is $meWho" . '</h1>';


function my_function($myColor, $myMovie, $myBook, $myWebsite){


echo '<ul>' ;
echo '<li>' . " $myColor" . '</li>' ;
echo '<li>' . " $myMovie" . '</li>' ;
echo '<li>' . " $myBook" . '</li>' ;
echo '<li>' . " $myWebsite" . '</li>' ;
echo '</ul>';
}
my_function("Blue", "The Notebook", "A Song of Ice and Fire","Facebook");



  ?>


  <?php
  include 'includes/footer.inc.php';
   ?>
