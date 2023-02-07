<?php
include_once 'models/Product.php';
include_once 'models/Trademark.php';
class ProductController extends Controller {
    // goi thoi trang danh sach
    public function index() {
        // goi model
        $objProduct = new Product();
        // Model thao tac voi CSDL, tra ve controller
        $items = $objProduct->all();
        // Truyen xuong view
        $params = [
            'items' => $items

        ];

        $this->view('products/index.php', $params);
    }
    // Goi toi trang them moi
    public function create(){
            // goi model
        $objCategory = new Trademark();
        // Model thao tac voi CSDL, tra ve controller
        $categories = $objCategory->all();
        // Truyen xuong view
        $params = [
            'categories' => $categories
        ];

        // Goi view
        $this->view('products/create.php',$params);
    }
    // Xu ly them moi
    public function store(){
        // echo '<pre>';
        // print_r($_REQUEST);
        // die();
        // Lay du lieu _REQUEST gan vao mang data
        $data = [
            'MAHANGSX_id' => $_REQUEST['MAHANGSX_id'],
            'TenSp' => $_REQUEST['TenSp'],
            'SoLuong' => $_REQUEST['SoLuong'],
            'GiaN' => $_REQUEST['GiaN'],
            'GiaB' => $_REQUEST['GiaB'],
            'mota' => $_REQUEST['mota']
        ];
        $Anh = "";
        // echo '<pre>';
        // print_r($_FILES);
        // die();
        if (isset($_FILES['Anh']) && !$_FILES['Anh']['error'])
        {
            move_uploaded_file($_FILES['Anh']['tmp_name'], 'public/uploads/'.$_FILES['Anh']['name']);
            $Anh = '/public/uploads/'.$_FILES['Anh']['name'];
        }
        $data["Anh"] = $Anh;
        
        // Goi model
        $objProduct = new Product();
        $objProduct->save($data);

        // Chuyen huong ve trang danh sach
        $this->redirect('index.php?controller=product&action=index.php');
        die();
    }

    // Goi toi trang chinh sua
    public function edit(){
        $id = $_REQUEST['id'];
        // Gọi model
        $objProduct = new Product();
        $item = $objProduct->find($id);

        $objCategory = new Trademark();
        $categories = $objCategory->all();
        // Truyen xuong view
        $params = [
            'categories' => $categories,
            'item' => $item,
            'id' => $id
        ];
        $this->view('products/edit.php',$params);

    }

    // Xử lý chỉnh sửa
    public function update(){
        // echo '<pre>';
        // print_r($_REQUEST);
        // die();

        $id = $_REQUEST['id'];
        // Lấy dữ liệu từ _REQUEST gán vào mảng data
        $data = [
            'MAHANGSX_id' => $_REQUEST['MAHANGSX_id'],
            'TenSp' => $_REQUEST['TenSp'],
            'SoLuong' => $_REQUEST['SoLuong'],
            'GiaN' => $_REQUEST['GiaN'],
            'GiaB' => $_REQUEST['GiaB'],
            'mota' => $_REQUEST['mota']
        ];
        $Anh = "";
        if (isset($_FILES['Anh']) && !$_FILES['Anh']['error'])
        {
            move_uploaded_file($_FILES['Anh']['tmp_name'], 'public/uploads/'.$_FILES['Anh']['name']);
            $Anh = '/public/uploads/'.$_FILES['Anh']['name'];
        }
        $data["Anh"] = $Anh;
        // Gọi model
        $objProduct = new Product();
        $objProduct->update($id,$data);

        // Chuyển hướng về trang danh sách
        $this->redirect('index.php?controller=product&action=index');
        die();
    }

    public function destroy(){
        $id = $_REQUEST['id'];
        // Gọi model
        $objProduct = new Product();
        $objProduct->delete($id);

        // Chuyển hướng về trang danh sách
        $this->redirect('index.php?controller=product&action=index');
        // die();
    }
}