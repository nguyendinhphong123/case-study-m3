<?php
include_once 'models/Model.php';
class Trademark extends Model{

    public function all(){
        // Viet cau sql
        $sql = "SELECT * FROM `hang_san_xuat`";
        $stmt= $this->conn->query($sql);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);//array 
        $items = $stmt->fetchAll();
        
        return $items;
    }
    public function find($id){
          //lay du lieu theo ID
          $sql = "SELECT * FROM `hang_san_xuat` WHERE id = $id";
          //Debug sql
          // var_dump($sql);
          $stmt = $this->conn->query($sql);
          $stmt->setFetchMode(PDO::FETCH_ASSOC);//array
  
          //Lấy về dữ liệu duy nhat
          $row = $stmt->fetch();
          return $row;
    }
    public function save($data){
        $name = $data['name'];
        $sql = "INSERT INTO `hang_san_xuat` ( `name`) VALUES ( '$name')";
        // var_dump($sql);
        // echo '<pre>';
        // print_r($data);
        // die();
        //Thuc hien truy van
        $this->conn->exec($sql);
    }
    public function update($id,$data){
        // $category_id = $data['category_id'];
        // $name = $data['name'];
        // $price = $data['price'];
        // $description = $data['description'];

        // $sql = "UPDATE `books` SET 
        // `category_id` = $category_id, 
        // `name` = '$name', 
        // `price` = $price, 
        // `description` = '$description' 
        // WHERE `books`.`id` = $id";

        //   // thuc hien truy van
        //   $this->conn->exec($sql);


        $name = $data['name'];

          $sql = "UPDATE `hang_san_xuat` SET 
        `name` = '$name'  
        WHERE `hang_san_xuat`.`id` = $id";
  
            // thuc hien truy van
            $this->conn->exec($sql);
    }
    public function delete($id){
        $sql = "DELETE FROM hang_san_xuat WHERE id = $id";
        //Debug sql
        // var_dump($sql);

        //Thuc hien truy van
        $this->conn->exec($sql);
    }
}