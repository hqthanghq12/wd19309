<?php 
// include 'app/Models/Product.php';
// $conection = new Product();
// $conection->getConnection();
// include 'app/Models/Model.php';

include 'vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__.'/');
$dotenv->load();
// include 'app/Models/Product.php';
use App\Models\Product;
$pro = new Product();

// var_dump($pro->getAllProducts());
// var_dump($pro->getIdProduct(1));
// $pro->addProduct(null, 'Test1', 1000, 'Test 1 add');
// var_dump($pro->getAllProducts());
// $pro->updateProduct(1, 'Test123', 1000, 'Test 123 update');
// var_dump($pro->getAllProducts());
// $pro->deleteProduct(1);
var_dump($pro->getAllProducts());
// $conection = new Model();
// $sql = "SELECT * FROM products ";
// $conection->setSQL($sql);
// var_dump($conection->all());
// $sql = "SELECT * FROM products WHERE id = ?";
// $conection->setSQL($sql);
// var_dump($conection->first([1]));
// $sql = "INSERT INTO products VALUES (?,?,?,?)";
// $conection->setSQL($sql);
// $data = [null, "Test1", 1000, "Test Model"]; 
// $conection->execute($data);
// var_dump($conection);
// $conection -> getConnection();
?>