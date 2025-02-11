<?php 
namespace App\Controllers;
class CategroyController {
    // Phương thức 
    // Hiện thị
    public function index($id){
        var_dump($id);
        include __DIR__.'/../../resources/views/category/list.php';
    }
    // Thêm
    // Sửa 
    // Xóa
}
?>