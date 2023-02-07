<?php
include_once 'models/Staff.php';
class StaffController extends Controller {
    // goi thoi trang danh sach
    public function index() {
        // goi model
        $objStudent = new Staff();
        // Model thao tac voi CSDL, tra ve controller
        $items = $objStudent->all();

        // Truyen xuong view
        $params = [
            'items' => $items

        ];

        $this->view('staffs/index.php', $params);
    }
        // Goi toi trang them moi
        public function create(){
            // Goi view
            $this->view('staffs/create.php');
        }
        // Xu ly them moi
        public function store(){
            // echo '<pre>';
            // print_r($_REQUEST);
            // die();
            // Lay du lieu _REQUEST gan vao mang data
            $data = [
                'TenNV' => $_REQUEST['TenNV'],
                'GioiTinh' => $_REQUEST['GioiTinh'],
                'DiaChi' => $_REQUEST['DiaChi'],
                'Ngaysinh' => $_REQUEST['Ngaysinh'],
                'SDT' => $_REQUEST['SDT']
            ];
           
            // Goi model
            $objStudent = new Staff();
            $objStudent->save($data);

            // Chuyen huong ve trang danh sach
            $this->redirect('index.php?controller=staff&action=index');
            die();
        }

        // Goi toi trang chinh sua
        public function edit(){
            $id = $_REQUEST['id'];
            // Gọi model
            $objStudent = new Staff();
            $item = $objStudent->find($id);
            // truyen xuong view
            include_once 'views/staffs/edit.php';
        }
    
        // Xử lý chỉnh sửa
        public function update(){
            // echo '<pre>';
            // print_r($_REQUEST);
            // die();
    
            $id = $_REQUEST['id'];
            // Lấy dữ liệu từ _REQUEST gán vào mảng data
            $data = [
                'TenNV' => $_REQUEST['TenNV'],
                'GioiTinh' => $_REQUEST['GioiTinh'],
                'DiaChi' => $_REQUEST['DiaChi'],
                'Ngaysinh' => $_REQUEST['Ngaysinh'],
                'SDT' => $_REQUEST['SDT']
            ];
            // Gọi model
            $objStudent = new Staff();
            $objStudent->update($id,$data);
    
            // Chuyển hướng về trang danh sách
            $this->redirect('index.php?controller=staff&action=index');
            die();
        }
    
        public function destroy(){
            $id = $_REQUEST['id'];
            // Gọi model
            $objStudent = new Staff();
            $objStudent->delete($id);
    
            // Chuyển hướng về trang danh sách
            $this->redirect('index.php?controller=staff&action=index');
            die();
        }
}