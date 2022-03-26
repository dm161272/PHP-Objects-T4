<?php
require_once ("bank.php");

unset ($_SESSION['array']);
//session_destroy();

header('Location: index.php');

exit;
