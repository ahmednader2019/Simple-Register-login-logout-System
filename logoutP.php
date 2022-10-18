<?php
session_start();
session_destroy();

header('LOCATION: loginP.php');