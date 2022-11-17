<?php
class Products extends Db{
    //hàm lấy tất cả sản phẩm
    public function getAllProducts ()
{
    $sql = self::$connection->prepare("SELECT * FROM products ORDER BY `id` DESC");
    $sql->execute(); //return an object
    $items = array();
    $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
    return $items; //return an array
}

//hàm lấy sản phẩm theo id
public function getProductById($id)
{
    $sql = self::$connection->prepare("SELECT * FROM products WHERE id = ?");
    $sql->bind_param("i",$id);
    $sql->execute(); //return an object
    $items = array();
    $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
    return $items; //return an array
}

//Hàm lấy tất cả sản phẩm
public function getFeatureProducts()
{
    $sql = self::$connection->prepare("SELECT * FROM products WHERE feature = 1");
    $sql->execute(); //return an object
    $items = array();
    $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
return $items; //return an array
}

//hàm lấy sản phảm nổi bật theo loại
//laptop
public function getFeatureLaptp()
{
    $sql = self::$connection->prepare("SELECT * FROM products WHERE feature = 1 AND type_id = 2");
    $sql->execute(); //return an object
    $items = array();
    $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
return $items; //return an array
}

//laptop
public function getFeaturePhone()
{
    $sql = self::$connection->prepare("SELECT * FROM products WHERE feature = 1 AND type_id = 1");
    $sql->execute(); //return an object
    $items = array();
    $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
return $items; //return an array
}

//Loa
public function getFeatureLoa()
{
    $sql = self::$connection->prepare("SELECT * FROM products WHERE feature = 1 AND type_id = 3");
    $sql->execute(); //return an object
    $items = array();
    $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
return $items; //return an array
}

//Loa
public function getFeatureTaiNghe()
{
    $sql = self::$connection->prepare("SELECT * FROM products WHERE feature = 1 AND type_id = 4");
    $sql->execute(); //return an object
    $items = array();
    $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
return $items; //return an array
}

//đồng hồ
public function getFeatureDongHo()
{
    $sql = self::$connection->prepare("SELECT * FROM products WHERE feature = 1 AND type_id = 5");
    $sql->execute(); //return an object
    $items = array();
    $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
return $items; //return an array
}

}