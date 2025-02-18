<?php 
    function route($routeName, $params = []){
        // Kiểm tra xem có param truyền vào hay không
        if(count($params)>0){
            foreach ($params as $key => $value){
                $path = str_replace("{".$key."}", $value, $routeName);
            }
        }else{
            $path = $routeName;
        }
        return $path;
    }
    var_dump( route('product-list/{id}', ['id' => 1]));
?>