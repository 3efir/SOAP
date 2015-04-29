<?php
require_once("client.php");
$obj = new Client();
$team = $obj -> getTeam();
echo "<pre>";
echo $obj -> parser($team);
?>