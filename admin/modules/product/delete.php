<?php 
    $open = "product";
    require_once __DIR__."/../../autoload/autoload.php";
    $id = intval(getInput('id'));
    //_debug($id);
    //kiểm tra xem danh mục đó có id cần xóa chưa
    $Editproduct = $db->fetchID("product",$id);
    if(empty($Editproduct)){
        $_SESSION['error'] = "Dữ liệu cần sửa của bạn không tồn tại";
        redirectAdmin("product");
    }
    $num = $db->delete("product",$id);
    if ($num>0) {
        $_SESSION['success'] = "Xóa thành công";
        redirectAdmin("product");
    }
    else {
        $_SESSION['error'] = "Xóa thất bại";
        redirectAdmin("product");
    }
?>