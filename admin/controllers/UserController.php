<?php
include_once 'models/User.php';
class UserController extends Controller {
    // goi thoi trang danh sach
    public function index() {
        // goi model
        $objStudent = new User();
        // Model thao tac voi CSDL, tra ve controller
        $items = $objStudent->all();

        // Truyen xuong view
        $params = [
            'items' => $items

        ];

        $this->view('users/index.php', $params);
    }
        // Goi toi trang them moi
        public function create(){
            // Goi view
            $this->view('users/create.php');
        }
        // Xu ly them moi
        public function store(){
            // echo '<pre>';
            // print_r($_REQUEST);
            // die();
            // Lay du lieu _REQUEST gan vao mang data
            $data = [
                'TenKH' => $_REQUEST['TenKH'],
                'DiaChi' => $_REQUEST['DiaChi'],
                'email' => $_REQUEST['email'],
                'SDT' => $_REQUEST['SDT'],
                'matkhau' => $_REQUEST['matkhau']
            ];
           
            // Goi model
            $objStudent = new User();
            $objStudent->save($data);

            // Chuyen huong ve trang danh sach
            $this->redirect('index.php?controller=user&action=index');
            die();
        }

        // Goi toi trang chinh sua
        public function edit(){
            $id = $_REQUEST['id'];
            // Gọi model
            $objStudent = new User();
            $item = $objStudent->find($id);
            // truyen xuong view
            include_once 'views/users/edit.php';
        }
    
        // Xử lý chỉnh sửa
        public function update(){
            // echo '<pre>';
            // print_r($_REQUEST);
            // die();
    
            $id = $_REQUEST['id'];
            // Lấy dữ liệu từ _REQUEST gán vào mảng data
            $data = [
                'TenKH' => $_REQUEST['TenKH'],
                'DiaChi' => $_REQUEST['DiaChi'],
                'email' => $_REQUEST['email'],
                'SDT' => $_REQUEST['SDT'],
                'matkhau' => $_REQUEST['matkhau']
            ];
            // Gọi model
            $objStudent = new User();
            $objStudent->update($id,$data);
    
            // Chuyển hướng về trang danh sách
            $this->redirect('index.php?controller=user&action=index');
            die();
        }
    
        public function destroy(){
            $id = $_REQUEST['id'];
            // Gọi model
            $objStudent = new User();
            $objStudent->delete($id);
    
            // Chuyển hướng về trang danh sách
            $this->redirect('index.php?controller=user&action=index');
            die();
        }
}