<?php 
namespace App\Controllers;
class CategroyController extends Controller{
    // Phương thức 
    // Hiện thị
    public function index(){
        // var_dump($id);
        return $this->view('category.list');
        // include __DIR__.'/../../resources/views/category/list.php';
    }
    // Thêm
    // Sửa 
    // Xóa
}
?>