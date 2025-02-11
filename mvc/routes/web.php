<?php 
use Bramus\Router\Router;
$router = new Router();
// Viết router
// get = Hiển thị
// post = Thêm
// put = Sửa
// delete = Xóa
//$router->get('tên router', function (){
//  Khối lệnh})

$router->get('/admin/product', function (){
    echo 'Đây là trang chủ';
});
// Nhóm
$router->mount('/admin', function () use ($router){
    $router->get('/home', function (){
        echo 'Đây là trang chủ';
    });
});
// Tham chiếu sang controller
// $router->phương thức('tên router', 'namespace/tenclass@phương thức');
$router->get('categori-list', 'App\Controllers\CategroyController@index');
// Truyền id
// $router->get('categori-list/{id}', 'App\Controllers\CategroyController@index');
$router->run();
?>