<?php
include_once 'models/Model.php';
class Product extends Model{

    public function all(){
        // Viet cau  
        $sql = "SELECT san_pham.*,hang_san_xuat.name AS category_name FROM `san_pham`
JOIN hang_san_xuat ON san_pham.MAHANGSX_id = hang_san_xuat.id order by san_pham.id desc";

        $stmt= $this->conn->query($sql);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);//array 
        $items = $stmt->fetchAll();
        
        return $items;
    }
    public function find($id){
          //lay du lieu theo ID
          $sql = "SELECT * FROM `san_pham` WHERE id = $id";
        
          $stmt = $this->conn->query($sql);
          $stmt->setFetchMode(PDO::FETCH_ASSOC);//array
  
          //Lấy về dữ liệu duy nhat
          $row = $stmt->fetch();
          return $row;
    }
    public function save($data){
        $MAHANGSX_id = $data['MAHANGSX_id'];
        $TenSp = $data['TenSp'];
        $SoLuong = $data['SoLuong'];
        $GiaN = $data['GiaN'];
        $GiaB = $data['GiaB'];
        $Anh = $data['Anh'];
        $mota = $data['mota'];
        $sql = "INSERT INTO `san_pham` ( `MAHANGSX_id`, `TenSp`, `SoLuong`, `GiaN`,`GiaB`,`Anh`,`mota`) VALUES ( '$MAHANGSX_id', '$TenSp', $SoLuong, '$GiaN', '$GiaB', '$Anh', '$mota' )";
        
        // var_dump($sql);
        // die();
        // echo '<pre>';
        // print_r($data);
        // die();
        //Thuc hien truy van
        $this->conn->exec($sql);
    }
    public function update($id,$data){
      


          $MAHANGSX_id = $data['MAHANGSX_id'];
        $TenSp = $data['TenSp'];
        $SoLuong = $data['SoLuong'];
        $GiaN = $data['GiaN'];
        $GiaB = $data['GiaB'];
        $Anh = $data['Anh'];
        $mota = $data['mota'];
  
          $sql = "UPDATE `san_pham` SET 
          `MAHANGSX_id` = '$MAHANGSX_id', 
        `TenSp` = '$TenSp', 
        `SoLuong` = $SoLuong, 
        `GiaN` = '$GiaN',
        `GiaB` = '$GiaB',
        `Anh` = '$Anh',
        `mota` = '$mota'
        WHERE `san_pham`.`id` = $id";
  
            // thuc hien truy van
            $this->conn->exec($sql);
    }
    public function delete($id){
        $sql = "DELETE FROM san_pham WHERE id = $id";
     
        //Thuc hien truy van
        $this->conn->exec($sql);
    }
}
