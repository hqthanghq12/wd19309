<?php 
namespace App\Controllers;
use eftec\bladeone\BladeOne;
class Controller{
    // Tạo ra một phương thức giúp render
    // template balde và truyền dự liệu
    protected function view($viewFile, $data = []){
        // Xác định đường dẫn chứa file view
        $view = __DIR__.'/../../resources/views';
        // Xác định đường dẫn chứa file cache
        $cache = __DIR__.'/../../storage/cache';
        // Tạo đối tượng bladeOne
        $blade = new BladeOne($view, $cache, BladeOne::MODE_DEBUG);
        // Trả về nội dung của template
        echo $blade->run($viewFile, $data);
    }
}
?>