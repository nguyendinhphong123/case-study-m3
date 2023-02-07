<?php
include_once 'models/Model.php';
class Detail extends Model{

    public function all(){
        // Viet cau  
        $sql = "SELECT * FROM `chi_tiet_don_hang`";
        $stmt= $this->conn->query($sql);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);//array 
        $items = $stmt->fetchAll();
        
        return $items;
    }
    public function find($id){
          //lay du lieu theo ID
          $sql = "SELECT * FROM `chi_tiet_don_hang` WHERE id = $id";
          //Debug sql
          // var_dump($sql);
          $stmt = $this->conn->query($sql);
          $stmt->setFetchMode(PDO::FETCH_ASSOC);//array
  
          //Lấy về dữ liệu duy nhat
          $row = $stmt->fetch();
          return $row;
    }
    public function save($data){
        $MaSP  = $data['MaSP'];
        $MaKH  = $data['MaKH'];
        $SoLuong = $data['SoLuong'];
        $DonGia = $data['DonGia'];
        $GiamGia = $data['GiamGia'];
        $TongTien = $data['TongTien'];
        $ngaydat = $data['ngaydat'];
       
        $sql = "INSERT INTO `chi_tiet_don_hang` ( `MaSP`, `MaKH`, `SoLuong`, `DonGia`,`GiamGia`,`TongTien`,`ngaydat`) VALUES ( '$MaSP', '$MaKH', '$SoLuong', '$DonGia', '$GiamGia','$TongTien','$ngaydat')";
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


        $MaSP  = $data['MaSP'];
        $MaKH  = $data['MaKH'];
        $SoLuong = $data['SoLuong'];
        $DonGia = $data['DonGia'];
        $GiamGia = $data['GiamGia'];
        $TongTien = $data['TongTien'];
        $ngaydat = $data['ngaydat'];
  
          $sql = "UPDATE `chi_tiet_don_hang` SET 
          `MaSP` = '$MaSP', 
        `MaKH` = '$MaKH', 
        `SoLuong` = '$SoLuong', 
        `DonGia` = '$DonGia',
        `GiamGia` = '$GiamGia',
        `TongTien` = '$TongTien',
        `ngaydat` = '$ngaydat'
       
        WHERE `chi_tiet_don_hang`.`id` = $id";
  
            // thuc hien truy van
            $this->conn->exec($sql);
    }
    public function delete($id){
        $sql = "DELETE FROM chi_tiet_don_hang WHERE id = $id";
        //Debug sql
        // var_dump($sql);

        //Thuc hien truy van
        $this->conn->exec($sql);
    }
}