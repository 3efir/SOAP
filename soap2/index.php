<?php
require_once("client.php");
$obj = new Client();
require_once("templates/index.html");
if(isset($_POST['submit']))
{
	echo $obj -> getTeam($_POST['search']);
}
?>