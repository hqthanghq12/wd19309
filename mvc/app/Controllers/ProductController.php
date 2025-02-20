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
            // Kiểm tra và xử lý hình ảnh
            if(isset($_FILES['hinh_anh']) && $_FILES['hinh_anh']['error']== 0){
               // Lấy đường dẫn vào nơi trữ hình ảnh
               $targetDir =  __DIR__."/../../storage/uploads/";
               // Các định dạng mà cho upload
                $allowTypes = ['jpg','png','jpeg','gif']; 
                // Dung lượng tối đa cho phép
                $maxSize = 2 * 1024 *1024; // 2MB
                // Lấy thông tin hình ảnh
                $fileName = basename($_FILES['hinh_anh']['name']);
                $targetFilePath = $targetDir . $fileName;
                $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
                $fileTmpName = $_FILES['hinh_anh']['tmp_name'];
                // Kiểm tra định dạng hình ảnh
                if(!in_array($fileType, $allowTypes)){
                    $errors[] = 'Chỉ được upload các định dạng JPG, PNG, JPEG, GIF';
                }
                // Kiểm tra dung lượng hình ảnh
                if($_FILES['hinh_anh']['size'] > $maxSize){
                    $errors[] = 'Dung lượng hình ảnh không được vượt quá 2MB';
                }
                // Thực hiện upload hình ảnh
                $newFileName = time().'_'.$fileName; 
                $imagePath = $targetDir . $newFileName;
                // Tiến hành upload
                if(!move_uploaded_file($fileTmpName, $imagePath)){
                    $errors[] = 'Có lỗi xảy ra khi upload hình ảnh';
                }
                // Kiểm tra xem ảnh vừa upload có tồn tại không
                if(!file_exists($imagePath)){
                    $errors[] = 'Có lỗi xảy ra khi upload hình ảnh';
                }
            }
            // hiển thị lỗi
            if(count($errors)>0){
                flash('errors', $errors, 'product-add');
            }else{
                // Nếu không có lỗi thì thêm vào csdl
                $modelProduct = new Product();
                $result = $modelProduct->addProduct(
                    null,
                    $_POST['ten_san_pham'],
                    $_POST['gia'],
                    $newFileName,
                    $_POST['mo_ta']
                );
                if($result){
                    flash('success', 
                    'Thêm sản phẩm thành công', 
                    'product-add'
                );
                }else{
                    flash('errors', 
                    'Có lỗi xảy ra khi thêm sản phẩm', 
                    'product-add'
                );
                }
            }
    }
    // Sửa
    // Hiển thị form sửa
        public function edit($id){
            $title = 'Chỉnh sửa sản phẩm'; 
            $modelProduct = new Product();
            $data = $modelProduct->getIdProduct($id);
            return $this->view('product.edit',
            compact('title', 'data'));
        }
    // Xử lý sửa
}
?>