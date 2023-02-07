<?php
include_once 'models/Trademark.php';
class TrademarkController extends Controller {
    // goi thoi trang danh sach
    public function index() {
        // goi model
        $objCategory = new Trademark();
        // Model thao tac voi CSDL, tra ve controller
        $items = $objCategory->all();

        // Truyen xuong view
        $params = [
            'items' => $items

        ];

        $this->view('trademarks/index.php', $params);
    }
        // Goi toi trang them moi
        public function create(){
            // Goi view
            $this->view('trademarks/create.php');
        }
        // Xu ly them moi
        public function store(){
            // echo '<pre>';
            // print_r($_REQUEST);
            // die();
            // Lay du lieu _REQUEST gan vao mang data
            $data = [
                'name' => $_REQUEST['name']
            ];
           
            // Goi model
            $objCategory = new Trademark();
            $objCategory->save($data);

            // Chuyen huong ve trang danh sach
            $this->redirect('index.php?controller=trademark&action=index');
            die();
        }

        // Goi toi trang chinh sua
        public function edit(){
            $id = $_REQUEST['id'];
            // Gọi model
            $objCategory = new Trademark();
            $item = $objCategory->find($id);
            // truyen xuong view
            include_once 'views/trademarks/edit.php';
        }
    
        // Xử lý chỉnh sửa
        public function update(){
            // echo '<pre>';
            // print_r($_REQUEST);
            // die();
    
            $id = $_REQUEST['id'];
            // Lấy dữ liệu từ _REQUEST gán vào mảng data
            $data = [
                'name' => $_REQUEST['name']
            ];
            // Gọi model
            $objCategory = new Trademark();
            $objCategory->update($id,$data);
    
            // Chuyển hướng về trang danh sách
            $this->redirect('index.php?controller=trademark&action=index');
            die();
        }
    
        public function destroy(){
            $id = $_REQUEST['id'];
            // Gọi model
            $objCategory = new Trademark();
            $objCategory->delete($id);
    
            // Chuyển hướng về trang danh sách
            $this->redirect('index.php?controller=trademark&action=index');
            die();
        }
}