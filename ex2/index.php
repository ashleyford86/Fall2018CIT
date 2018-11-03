
<?php error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
<?php
include_once("classes/user.class.php");
include_once("classes/regular.class.php");
include_once("classes/admin.class.php");

$regular = new regular('Regular User', 'asmote');
$admin = new admin('Administrator', 'aford');


$admin->first_name = 'Ashley';
$admin->last_name = 'Ford';
$admin->email_address = 'asmote@iupui.edu';

$regular->first_name = 'Ash';
$regular->last_name = 'Mote';
$regular->email_address = 'ashleymote86@gmail.com';
echo "User Level: " . $regular->user_level . "<br>" .
				"Registered User ID: " . $regular->user_id . "<br>" .
				"Registered User Type: " . $regular->user_type . "<br>" .
				"Registered First Name: " . $regular->first_name . "<br>" .
				"Registered Last Name: " . $regular->last_name . "<br>" .
				"Registered Email: " . $regular->email_address . "<br>";
echo "<hr>";
echo "User Level: " . $admin->user_level . "<br>" .
				"Admin User ID: " . $admin->user_id . "<br>" .
				"Admin User Type: " . $admin->user_type . "<br>" .
				"Admin First Name: " . $admin->first_name . "<br>" .
				"Admin Last Name: " . $admin->last_name . "<br>" .
				"Admin Email: " . $admin->email_address . "<br>";


?>
