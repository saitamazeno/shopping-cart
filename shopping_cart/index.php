
<?php
session_start();
ob_start();
#dữ liệu
require 'data/pages.php';
require 'data/products.php';
#thư viện hàm
require 'lib/data.php';
require 'lib/url.php';
require 'lib/template.php';
require 'lib/number.php';
require 'lib/pages.php';
require 'lib/product.php';
require 'lib/cart.php';
?>
<?php
//$page=$_GET['page'];
$mod=!empty($_GET['mod'])?$_GET['mod']:'home';
$act=!empty($_GET['act'])?$_GET['act']:'main';
$path="modules/{$mod}/{$act}.php";
//echo $path;
if(file_exists($path)){
    require $path;
}else{
//    echo"Không tồn tại trang này";
     require 'inc/404.php';
}
?>



