<?php
session_start();
session_destroy();
header("Refresh: 3; url=./index.php");
echo 'η»εΊζε';