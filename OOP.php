<?php 
// Lớp và đối tượng
// 1: Đối tượng
// Đối tượng là gì?
// Đối tượng chia là 2 phần: Đặc điểm và Hành động
// Đặc điểm: Là những thuộc tính của đối tượng
// Ví dụ:
// Đối tượng: Sinh viên
// Tên, Mã sinh viên, Ngày sinh, Địa chỉ, Số điện thoại, Email, ...
// Hành động: Là những phương thức của đối tượng (Thực hiện được)
// Ví dụ:
// Ăn, Ngủ, Học, Thi, Chơi(90%), ...
// Bài tập: Lấy ví dụ 3 đối tượng (Liệt kê đặc điểm và hành động)
// 2: Lớp
// Lớp là gì?
// Lớp (Class) là khuôn mẫu để tạo ra nhiều đối tượng có chung thuộc tính 
// và phương thức
// // Ví dụ:
// class SinhVien{
    // Khai báo đặc điểm (Thuộc tính == Biến)
    // Công thức: phạm_vi_truy_cập $tên_thuộc tính = giá_trị;
    // phạm_vi_truy_cập: public, protected, private (Học vào buổi tiếp theo)
    // public $ten;
    // public $maSV;
    // public $ngaySinh;
    // Khai báo hành động (Phương thức == Hàm)
    // Công thức: phạm_vi_truy_cập function tên_hàm($tham_số){// code}
//     public function an(){
//         echo "Sinh viên đang ăn";
//     }
//     public function ngu(){
//         echo "Sinh viên đang ngủ";
//     }
// }
// // Tạo đối tượng từ lớp
// $sv1 = new SinhVien();
// $sv1->ten = "Nguyễn Văn A";
// 4 tính chất của OOP: đóng gói, kế thừa, đa hình và trừu tượng
// 1: Đóng gói (Encapsulation)
// Đóng gói là gì?
// Đóng gói cho phép che giấu thông tin của đối tượng và chỉ phép truy cập thông
// các phương thức đã được định nghĩa trong các lớp đó mới có thể truy cập và sử dụng các
// thuộc tính và phương thức đó. Nó giúp che giấu thông tin và ngăn chặn truy cập trực tiếp
// từ bên ngoài. Điều này giúp giảm thiểu sự phụ thuộc giữa các đối tượng và tăng tính bảo mật.
// Thể hiện qua: public, protected, private
// Ví dụ:
// class SinhVien{
    // Thuộc tính 90% là private
    // private $ten = "Nguyễn Văn A"; // Chỉ được truy cập trực tiếp trong class
    // protected $maSV = "PH00001"; // Chỉ được truy cập trong class và class kế thừa
    // public $ngaySinh = "01/01/2000" ; // Có thể truy cập từ bên ngoài
    // Phương thức get và set
    // Get: Lấy giá trị của thuộc tính
//     // Set: Gán giá trị cho thuộc tính
//     public function getTen(){
//         return $this->ten;
//     }
//     public function setTen($ten){
//         $this->ten = $ten;
//     }
// }
// $sv1 = new SinhVien();
// $sv1->setTen("Nguyễn Văn B");
// echo $sv1->getTen();
//echo $sv1->ten; // "Nguyễn Văn A" 
// echo $sv1->ngaySinh; // 01/01/2000
// 2: Kế thừa (Inheritance)
// Kế thừa: Cho phép xây dựng các lớp mới dựa trên cơ sở của lớp đã tồn tại (Lớp cha). 
// Lớp mới (lớp con) sẽ được kế thừa 1 hoặc toàn bộ thuôc tính và phương thức của lớp cha.
// Ví dụ:
// class Animal{
//     private $name;
//     protected $color;
//     public $size;
//     public function eat(){
//         echo $this->name." is eating";
//     }
// }
// class Dog extends Animal{
//     const PI = 3.14;
//     public $leg;
//     public function eatDog(){
//         echo $this->eat(). $this->color;
//     }

// }
// Hằng trong OOP (Constant)
// Truy xuât hằng: Tên lớp::tên hằng
// echo Dog::PI;
// Đa hình (Polymorphism): interface không phải là class
// Vì thế chúng cũng không có thuộc tinh và phương thức
// Interface: Là một khuôn mẫu chứa các phương thức 
// mà các lớp khác phải triển khai
// Ví dụ:
interface DiChuyen{
    public function diChuyen();
}
class ConNguoi implements DiChuyen{
    public function diChuyen(){
        echo "Con người đang đi bộ";
    }
}
class OTo implements DiChuyen{
    public function diChuyen(){
        echo "Ô tô đang chạy";
    }
}
// interface và abstract đều là bản thiết kế của dự án phần mềm
// interface là bản thiết kết cho các class có chung hành động (Phương thức) 
// nhưng không bản chất
// abstract là bản thiết kế cho các class có chung đặc điểm về bản chất
// interface có khả năng mở rộng lơn hơn
// Trừu tượng
// Ví dụ: 
 abstract class Animal{
    abstract public function eat();
    abstract public function diChuyen();
 }
class Dog extends Animal{
        public function eat(){
            echo "Dog is eating";
        }
        public function diChuyen(){
            echo "Dog is running";
        }
}
    class Cat extends Animal{
        public function eat(){
            echo "Cat is eating";
        }
        public function diChuyen(){
            echo "Cat is running";
        }
    }
// Trait: 
// Trong php chỉ có đơn kế thừa
// Trait giúp giải quyết vấn đề này
// Trait là một tập hợp các phương thức có thể được sử dụng trong các class
// Ví dụ
trait TongHieu{
    public function tinhTong($a, $b){
        return $a + $b;
    }
    private function tinhHieu($a, $b){
        return $a - $b;
    }
}
trait TichThuong{
    protected function tinhTich($a, $b){
        return $a * $b;
    }
    public function tinhThuong($a, $b){
        return $a / $b;
    }
}
class TinhToan{
    use TongHieu, TichThuong; 
    public function tinhTongHieuTichThuong($a, $b){
        return $this->tinhTong($a, $b) + $this->tinhHieu($a, $b) 
        +$this->tinhTich($a , $b);
    }
}
$tt = new TinhToan();
?>