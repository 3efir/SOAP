<?php
require_once("client.php");
$obj = new Client();
require_once("templates/index.html");
if(isset($_POST['submit']))
{
	$team = $obj -> getTeam($_POST['search']);
	echo $obj -> parser($team);
}
?>