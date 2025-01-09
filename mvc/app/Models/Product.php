<?php 
// Kết nối, truy vấn và thao tác với CSDL
class Product{
    // Thực hiện kết nối đến CSDL
    // Thuộc tính kết nối
    public $host = 'localhost'; // Địa chỉ IP của máy chủ CSDL
    public $dbname = 'wd19309'; // Tên CSDL
    public $username = 'root'; // Tên đăng nhập mysql
    public $password = ''; // Mật khẩu đăng nhập mysql
    public $table = 'products'; // Tên bảng
    public $conn ; // Thuộc tính kết nối
    // Tạo phương thức kết nối
    public function getConnection(){
        try{
            $this->conn = new PDO("mysql:host=".$this->host.";dbname=".$this->dbname,
            $this->username, $this->password);
            // Thiết lập chế độ lỗi và chế độ warning
            $this->conn->setAttribute(PDO::ATTR_ERRMODE,
             PDO::ERRMODE_EXCEPTION);
            $this->conn->exec("set names utf8"); 
            echo "Kết nối thành công";
        }catch(Exception $e){

            echo "Lỗi: ".$e->getMessage();
        }
    }
}
?>