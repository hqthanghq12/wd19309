<?php 
use Bramus\Router\Router;
use App\Controllers\ProductController;
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
$router->get('product-list', ProductController::class.'@index');
$router->get('product-add', ProductController::class.'@create');
$router->post('product-store', ProductController::class.'@store');
$router->get('product-edit/{id}', ProductController::class.'@edit');
$router->post('product-update/{id}', ProductController::class.'@update');
$router->get('product-delete/{id}', ProductController::class.'@delete');
$router->run();
?>