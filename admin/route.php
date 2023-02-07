<?php

// $data = [
//     'username' => 'Nguyen Van A',
//     'phone' => '94233333'
// ];

    // extract($data);
// $username = $data['username'];
// $phone = $data['phone'];
// echo $username;




// die();
// index.php?controller=product&action=index
// index.php?action=create
// echo '<pre>';
// print_r( $_REQUEST );
// die();
// Kiểm tra tồn tại chỉ số controller trong mảng $_REQUEST
if( isset( $_REQUEST['controller'] ) ){
    $controller = $_REQUEST['controller'];
}else{
    $controller = 'product';
}
// Kiểm tra tồn tại chỉ số action trong mảng $_REQUEST
if( isset( $_REQUEST['action'] ) ){
    $action = $_REQUEST['action'];
}else{
    $action = 'index';
}
include_once 'controllers/Controller.php';
// Quyết định gọi controller nào dựa vào biến controller
switch ($controller) {
    case 'product':
        include_once 'controllers/ProductController.php';
        $objController = new ProductController();
        break;
    case 'user':
        include_once 'controllers/UserController.php';
        $objController = new UserController();
        break;
    case 'staff':
        include_once 'controllers/StaffController.php';
        $objController = new StaffController();
        break;
    case 'trademark':
        include_once 'controllers/TrademarkController.php';
        $objController = new TrademarkController();
        break;
        case 'detail':
            include_once 'controllers/DetailController.php';
            $objController = new DetailController();
            break;
    default:
        # code...
        break;
}
// Quyết định gọi action nào dựa vào biến action
switch ($action) {
    // Hiển thị trang danh sách
    case 'index':
        $objController->index();
        break;
    // Hiển thị form thêm mới
    case 'create':
        $objController->create();
        break;
    // Xử lý thêm mới
    case 'store':
        $objController->store();
        break;
    // Hiển thị form chỉnh sửa
    case 'edit':
        $objController->edit();
        break;
    // Xử lý chỉnh sửa
    case 'update':
        $objController->update();
        break;
    // Hiển thị trang xóa
    case 'edit':
        $objController->edit();
        break;
     // Xử lý xóa
    case 'destroy':
        $objController->destroy();
        break;
      
    default:
        $objController->index();
        break;
}