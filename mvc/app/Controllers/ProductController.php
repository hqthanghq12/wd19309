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
    // Xử lý thêm
    public function store(){
       // validation
         $errors = []; // Mảng chứa lỗi
            if(empty($_POST['ten_san_pham'])){
                $errors[] = 'Tên không được để trống';
            }
            if(empty($_POST['gia'])){
                $errors[] = 'Giá không được để trống';
            }
            if(empty($_POST['mo_ta'])){
                $errors[] = 'Mô tả không được để trống';
            }
            if(empty($_FILES['hinh_anh']['name'])){
                $errors[] = 'Hình ảnh không được để trống';
            }
            // hiển thị lỗi
            if(count($errors)>0){
                flash('errors', $errors, 'product-add');
            }

    }
}
?>