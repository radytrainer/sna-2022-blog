<?php

require_once('template/header.php');
require_once('template/navbar.php');
$page = "pages/home.php";
if (isset($_GET['page']))
{
    $file = "pages/" . $_GET['page'] . ".php";
    if (file_exists($file))
    {
        $page = $file;
    } 
}
require_once($page);
require_once('template/footer.php');