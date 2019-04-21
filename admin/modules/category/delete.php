<?php 
    $open = "category";
    require_once __DIR__."/../../autoload/autoload.php";
    $id = intval(getInput('id'));
    //_debug($id);
    //kiểm tra xem danh mục đó có id cần xóa chưa
    $EditCategory = $db->fetchID("category",$id);
    if(empty($EditCategory)){
        $_SESSION['error'] = "Dữ liệu cần sửa của bạn không tồn tại";
        redirectAdmin("category");
    }
    $num = $db->delete("category",$id);
    if ($num>0) {
        $_SESSION['success'] = "Xóa thành công";
        redirectAdmin("category");
    }
    else {
        $_SESSION['error'] = "Xóa thất bại";
        redirectAdmin("category");
    }
?>