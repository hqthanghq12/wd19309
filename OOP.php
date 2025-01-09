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
// Ví dụ:
class SinhVien{
    // Khai báo đặc điểm (Thuộc tính == Biến)
    // Công thức: phạm_vi_truy_cập $tên_thuộc tính = giá_trị;
    // phạm_vi_truy_cập: public, protected, private (Học vào buổi tiếp theo)
    public $ten;
    public $maSV;
    public $ngaySinh;
    // Khai báo hành động (Phương thức == Hàm)
    // Công thức: phạm_vi_truy_cập function tên_hàm($tham_số){// code}
    public function an(){
        echo "Sinh viên đang ăn";
    }
    public function ngu(){
        echo "Sinh viên đang ngủ";
    }
}
?>