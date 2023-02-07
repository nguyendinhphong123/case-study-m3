<?php
class Controller {
    // gọi view cho úng dụng
    public function view($viewName,$data = []) {
        /*
        // Demo data ddueocj truyen vao
        $data = [
            'item' => $item,
            'id' => 1
        ];
        */
        if(count($data)){
            extract($data);
        }
        /*
        sau khi goi extact, ta co 2 bien moi tu mang,
        ten bien la chi so, gia tri bien la value cua mang
        $item
        $id
        */
        include_once 'views/' . $viewName;
    }

    // Chuyen huong
    public function redirect($url){
        ?>
        <script>
            window.location.href = '<?= $url; ?>';
        </script>
        <?php
        // header("Location: $url");
        die();
    }
}