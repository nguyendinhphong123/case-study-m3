<?php
include_once 'models/Detail.php';
include_once 'models/Product.php';
include_once 'models/User.php';
class DetailController extends Controller {
    // goi thoi trang danh sach
    public function index() {
        // goi model
        $objStudent = new Detail();
        // Model thao tac voi CSDL, tra ve controller
        $items = $objStudent->all();
       
        $params = [
            'items' => $items,
        ];

        $this->view('details/index.php', $params);
    }
        // Goi toi trang them moi
        public function create(){
            // Goi view
             // goi model
        $objProduct = new Product();
        // Model thao tac voi CSDL, tra ve controller
        $products = $objProduct->all();
        $objStudent = new User();
        // Model thao tac voi CSDL, tra ve controller
        $user = $objStudent->all();
        $params = [
            'products'=>$products,
            'user' => $user

        ];
       

      
       
            // Truyen xuong view
            $this->view('details/create.php',$params);
        }
        // Xu ly them moi
        public function store(){
            // echo '<pre>';
            // print_r($_REQUEST);
            // die();
            // Lay du lieu _REQUEST gan vao mang data
            $data = [
                'MaSP' => $_REQUEST['MaSP'],
                'MaKH' => $_REQUEST['MaKH'],
                'SoLuong' => $_REQUEST['SoLuong'],
                'DonGia' => $_REQUEST['DonGia'],
                'GiamGia' => $_REQUEST['GiamGia'],
                'TongTien' => $_REQUEST['TongTien'],
                'ngaydat' => $_REQUEST['ngaydat']
            ];
           
            // Goi model
            $objStudent = new Detail();
            $objStudent->save($data);

            // Chuyen huong ve trang danh sach
            $this->redirect('index.php?controller=detail&action=index');
            die();
        }

        // Goi toi trang chinh sua
        public function edit(){
            $objProduct = new Product();
            // Model thao tac voi CSDL, tra ve controller
            $products = $objProduct->all();
            $objStudent = new User();
            // Model thao tac voi CSDL, tra ve controller
            $users = $objStudent->all();
            $params = [
                'products'=>$products,
                'users' => $users
    
            ];
            $id = $_REQUEST['id'];
            // G???i model
            $objStudent = new Detail();
            $item = $objStudent->find($id);
            // truyen xuong view
            include_once 'views/details/edit.php';
        }
    
        // X??? l?? ch???nh s???a
        public function update(){
            // echo '<pre>';
            // print_r($_REQUEST);
            // die();
    
            $id = $_REQUEST['id'];
            // L???y d??? li???u t??? _REQUEST g??n v??o m???ng data
            $data = [
                'MaSP' => $_REQUEST['MaSP'],
                'MaKH' => $_REQUEST['MaKH'],
                'SoLuong' => $_REQUEST['SoLuong'],
                'DonGia' => $_REQUEST['DonGia'],
                'GiamGia' => $_REQUEST['GiamGia'],
                'TongTien' => $_REQUEST['TongTien'],
                'ngaydat' => $_REQUEST['ngaydat']
            ];
            // G???i model
            $objStudent = new Detail();
            $objStudent->update($id,$data);
    
            // Chuy???n h?????ng v??? trang danh s??ch
            $this->redirect('index.php?controller=detail&action=index');
            die();
        }
    
        public function destroy(){
            $id = $_REQUEST['id'];
            // G???i model
            $objStudent = new Detail();
            $objStudent->delete($id);
    
            // Chuy???n h?????ng v??? trang danh s??ch
            $this->redirect('index.php?controller=detail&action=index');
            die();
        }
}