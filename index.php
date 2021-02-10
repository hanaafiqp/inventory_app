<?php 

$page = "daftar";

if (array_key_exists('page',$_GET)) {
    $page = $_GET['page'];
}

include('config/koneksi.php');

include("view/component/header.php");
include("view/component/navigation.php");
include("view/page/".$page.".php");
include("view/component/footer.php");


function base_url(){
    return "http://".$_SERVER['HTTP_HOST'].preg_replace('@/+$@','',dirname($_SERVER['SCRIPT_NAME'])=="\\"?"":dirname($_SERVER['SCRIPT_NAME'])).'/';
  }
?>