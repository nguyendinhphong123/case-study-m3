<?php
include_once 'models/Model.php';
class Staff extends Model{

    public function all(){
        // Viet cau  
        $sql = "SELECT * FROM `nhan_vien`";
        $stmt= $this->conn->query($sql);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);//array 
        $items = $stmt->fetchAll();
        
        return $items;
    }
    public function find($id){
          //lay du lieu theo ID
          $sql = "SELECT * FROM `nhan_vien` WHERE id = $id";
          //Debug sql
          // var_dump($sql);
          $stmt = $this->conn->query($sql);
          $stmt->setFetchMode(PDO::FETCH_ASSOC);//array
  
          //Lấy về dữ liệu duy nhat
          $row = $stmt->fetch();
          return $row;
    }
    public function save($data){
        $TenNV = $data['TenNV'];
        $GioiTinh = $data['GioiTinh'];
        $DiaChi = $data['DiaChi'];
        $Ngaysinh = $data['Ngaysinh'];
        $SDT = $data['SDT'];
       
        $sql = "INSERT INTO `nhan_vien` ( `TenNV`, `GioiTinh`, `DiaChi`, `Ngaysinh`,`SDT`) VALUES ( '$TenNV', '$GioiTinh', '$DiaChi', '$Ngaysinh', '$SDT')";
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


        $TenNV = $data['TenNV'];
        $GioiTinh = $data['GioiTinh'];
        $DiaChi = $data['DiaChi'];
        $Ngaysinh = $data['Ngaysinh'];
        $SDT = $data['SDT'];
  
          $sql = "UPDATE `nhan_vien` SET 
          `TenNV` = '$TenNV', 
        `GioiTinh` = '$GioiTinh', 
        `DiaChi` = '$DiaChi', 
        `Ngaysinh` = '$Ngaysinh',
        `SDT` = '$SDT'
       
        WHERE `nhan_vien`.`id` = $id";
  
            // thuc hien truy van
            $this->conn->exec($sql);
    }
    public function delete($id){
        $sql = "DELETE FROM nhan_vien WHERE id = $id";
        //Debug sql
        // var_dump($sql);

        //Thuc hien truy van
        $this->conn->exec($sql);
    }
}