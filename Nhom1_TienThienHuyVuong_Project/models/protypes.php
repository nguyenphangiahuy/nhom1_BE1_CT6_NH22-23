
?><?php
class Protype extends Db{
    public function getAllProtype()
{
    $sql = self::$connection->prepare("SELECT * FROM protypes");
    $sql->execute(); //return an object
    $items = array();
    $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
return $items; //return an array
} 
}
?>