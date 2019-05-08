<?php
session_start();

if(!isset($_POST['userUid'])){
	header("Location: login.php")
}