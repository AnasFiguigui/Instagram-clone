<?php

session_start();
$id = $_SESSION['user']['id'];
require_once 'include/database.php';

$sqlState = $pdo->prepare('DELETE FROM user WHERE id=?');
$sqlState->execute([$id]);
header('location:login.php');
