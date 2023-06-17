<?php

//Delete Cookie
//setcookie("mode", "", time() -1 );

//Delete Session
session_start();
unset($_SESSION['theme']);