<?php 
// Đặt namespaces
namespace App\Models;
use App\Models\Model;
// Kết nối, truy vấn và thao tác với CSDL
class Product extends Model{
    // // Thực hiện kết nối đến CSDL
    // // Thuộc tính kết nối
    // public $host = 'localhost'; // Địa chỉ IP của máy chủ CSDL
    // public $dbname = 'wd19309'; // Tên CSDL
    // public $username = 'root'; // Tên đăng nhập mysql
    // public $password = ''; // Mật khẩu đăng nhập mysql
    // public $table = 'products'; // Tên bảng
    // public $conn ; // Thuộc tính kết nối
    // // Tạo phương thức kết nối
    // public function getConnection(){
    //     try{
    //         $this->conn = new PDO("mysql:host=".$this->host.";dbname=".$this->dbname,
    //         $this->username, $this->password);
    //         // Thiết lập chế độ lỗi và chế độ warning
    //         $this->conn->setAttribute(PDO::ATTR_ERRMODE,
    //          PDO::ERRMODE_EXCEPTION);
    //         $this->conn->exec("set names utf8"); 
    //         echo "Kết nối thành công";
    //     }catch(Exception $e){

    //         echo "Lỗi: ".$e->getMessage();
    //     }
    // }
    // Tạo thuộc tinh tên bảng
    protected $table = 'products';
    // Thuộc tính kết nối cơ sở dữ liệu
    private $conection;
    // Phương thức khởi tạo kết nối CSDL thông qua Model
    public function __construct(){
        $this->conection = new Model();
    }
    // Truy vấn CSDL
    // Truy vấn lấy tất cả thông tin
    public function getAllProducts(){
        $sql = "SELECT * FROM {$this->table}"; // Mẹo là vào thực trước câu lệnh trong MySQL
        $this->conection->setSQL($sql);
        return $this->conection->all();
    }
    // Truy vân theo id
    public function getIdProduct($id){
        $sql = "SELECT * FROM {$this->table} WHERE id = ?";
        $this->conection->setSQL($sql);
        return $this->conection->first([$id]);
    }
    // Thao tác với CSDL 
    // Thêm
    public function addProduct($id, $tenSP, $gia, $hinh_anh, $moTa){
        $sql = "INSERT INTO {$this->table} VALUES (?,?,?,?,?)";
        $this->conection->setSQL($sql);
        return $this->conection->execute([$id, $tenSP, $gia, $hinh_anh, $moTa]);
    }
    // Sửa
    public function updateProduct($id, $tenSP, $gia, $hinh_anh, $moTa){
        $sql = "UPDATE {$this->table} SET ten_san_pham = ?, gia = ?, hinh_anh = ?, mo_ta = ? WHERE id = ?";
        $this->conection->setSQL($sql);
        return $this->conection->execute([$tenSP, $gia, $hinh_anh, $moTa, $id]);
    }
    // Xóa
    public function deleteProduct($id){
        $sql = "DELETE FROM {$this->table} WHERE id =?";
        $this->conection->setSQL($sql);
        return $this->conection->execute([$id]);
    }
}
?>