<?php
session_start();
session_destroy();
// or...
header('Location: login.php');