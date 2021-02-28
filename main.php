<?php
#php
if ( (!$_GET['login']) or (!$_GET['pass'])  ) {
    echo "fall";
    exit;
}
else
     echo "sucess";
