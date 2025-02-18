<?php 
namespace App\Controllers;
use App\Models\Product;
class ProductController extends Controller{
    // Phương thức
    // Hiện thị
    public function index(){
        $modelProduct = new Product();
        $title = 'Danh sách sản phẩm';
        $dataPro = $modelProduct->getAllProducts();
        // var_dump($dataPro);
        return $this->view('product.list', 
        compact('title', 'dataPro'));
    }
    // Thêm
    // Hiển thị form thêm
    public function create(){
        $title = 'Thêm sản phẩm'; 
        return $this->view('product.add', 
        compact('title'));
    }
}
?>