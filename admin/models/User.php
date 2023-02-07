<?php
include_once 'models/Model.php';
class User extends Model{

    public function all(){
        // Viet cau  
        $sql = "SELECT * FROM `khach_hang`";
        $stmt= $this->conn->query($sql);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);//array 
        $items = $stmt->fetchAll();
        
        return $items;
    }
    public function find($id){
          //lay du lieu theo ID
          $sql = "SELECT * FROM `khach_hang` WHERE id = $id";
          //Debug sql
          // var_dump($sql);
          $stmt = $this->conn->query($sql);
          $stmt->setFetchMode(PDO::FETCH_ASSOC);//array
  
          //Lấy về dữ liệu duy nhat
          $row = $stmt->fetch();
          return $row;
    }
    public function save($data){
        $TenKH = $data['TenKH'];
        $DiaChi = $data['DiaChi'];
        $email = $data['email'];
        $SDT = $data['SDT'];
        $matkhau = $data['matkhau'];
       
        $sql = "INSERT INTO `khach_hang` ( `TenKH`, `DiaChi`, `email`, `SDT`,`matkhau`) VALUES ( '$TenKH', '$DiaChi', '$email', '$SDT', '$matkhau')";
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


          $TenKH = $data['TenKH'];
        $DiaChi = $data['DiaChi'];
        $email = $data['email'];
        $SDT = $data['SDT'];
        $matkhau = $data['matkhau'];
  
          $sql = "UPDATE `khach_hang` SET 
          `TenKH` = '$TenKH', 
        `DiaChi` = '$DiaChi', 
        `email` = '$email', 
        `SDT` = '$SDT',
        `matkhau` = '$matkhau'
       
        WHERE `khach_hang`.`id` = $id";
  
            // thuc hien truy van
            $this->conn->exec($sql);
    }
    public function delete($id){
        $sql = "DELETE FROM khach_hang WHERE id = $id";
        //Debug sql
        // var_dump($sql);

        //Thuc hien truy van
        $this->conn->exec($sql);
    }
}

  
    