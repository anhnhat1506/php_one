<?php 
    $open = "admin";
    require_once __DIR__."/../../autoload/autoload.php";
    /**
     * Danh sách danh mục sản phẩm
     */
    $data = [
        "name"=>postInput('name'),
        "email"=>postInput('email'),
        "phone"=>postInput('phone'),
        "password"=>MD5(postInput('password')),
        "address"=>postInput('address'),
        "level"=>postInput('level'),
    ];    

    if ($_SERVER["REQUEST_METHOD"] == "POST") {   
                  
        $error = [];
        if (postInput('name') == '') {
            $error['name'] = "Bạn vui lòng nhập họ tên đầy đủ";
        }
        if (postInput('email') == '') {
            $error['email'] = "Bạn vui lòng nhập đúng email";
        }
        if (postInput('phone') == '') {
            $error['phone'] = "Bạn vui lòng nhập đúng số điện thoại";
        }
        if (postInput('password') == '') {
            $error['password'] = "Bạn vui lòng nhập mật khẩu";
        }
        if (postInput('address') == '') {
            $error['address'] = "Bạn vui lòng nhập vào địa chỉ của bạn";
        }
        if ($data['password'] != MD5(postInput('re_password'))) {
            $error['password'] = "Bạn nhập mật khẩu không khớp";
        }
        //erros trống có nghĩa là không có lỗi
        if (empty($error)) {
            $id_insert = $db->insert("admin",$data);
            if ($id_insert) {
                $_SESSION['success'] = "Thêm mới admin thành công";
                redirectAdmin("admin");
            }
            else {
                $_SESSION['error'] = "Thêm admin mới thất bại";
                redirectAdmin("admin");
            }
        } 
    }
?>
<?php require_once __DIR__."/../../layouts/header.php" ?>
    <!-- Page Heading Nội dung chính của trang -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Thêm mới admin
                <small>Subheading</small>
            </h1>
            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                </li>
                <li>
                    <i class=""></i>  <a href="#">Admin</a>
                </li>
                <li class="active">
                    <i class="fa fa-file"></i> Thêm mới
                </li>
            </ol>
            <div class="clearfix"></div>
            <!--Thông báo lỗi khi cần-->
            <?php require_once __DIR__."/../../../partials/notification.php" ?>  
        </div>
    </div>
    <!-- /.row -->
    <div class="col-md-12">
    <form method="post" action="">
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label"><strong>Họ và tên</strong></label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputEmail3" placeholder="Nhập họ tên đầy đủ" name="name" value="<?=$data['name'] ?>">
                <?php if (isset($error['name'])): ?>
                    <p class="text-danger"><?php echo $error['name'] ?> </p>
                <?php endif ?>               
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="inputEmail3" placeholder="ex@example.com" name="email" value="<?=$data['email']?>">
                <?php if (isset($error['email'])): ?>
                    <p class="text-danger"><?php echo $error['email'] ?> </p>
                <?php endif ?>               
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Phone</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" id="inputEmail3" placeholder="0345678912" name="phone" value="<?=$data['phone']?>">
                <?php if (isset($error['phone'])): ?>
                    <p class="text-danger"><?php echo $error['phone'] ?> </p>
                <?php endif ?>               
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="inputEmail3" placeholder="Vui lòng nhập vào password của bạn" name="password" >
                <?php if (isset($error['password'])): ?>
                    <p class="text-danger"><?php echo $error['password'] ?> </p>
                <?php endif ?>               
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Re-Password</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="inputEmail3" placeholder="Vui lòng nhập lại đúng password" name="re_password" required="">
                <?php if (isset($error['re_password'])): ?>
                    <p class="text-danger"><?php echo $error['re_password'] ?> </p>
                <?php endif ?>               
            </div>
        </div>
       
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Địa chỉ</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputEmail3" placeholder="Vui lòng nhập địa chỉ của bạn" name="address" value="<?=$data['address']?>">
                <?php if (isset($error['address'])): ?>
                    <p class="text-danger"><?php echo $error['address'] ?> </p>
                <?php endif ?>               
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Level</label>
            <div class="col-sm-10">
                <select class="form-control" name="level">
                    <option value="1" <?php echo isset($data['level']) && $data['level'] == 1 ? "selected = 'selected'" : "" ?>>CTV</option>
                    <option value="2" <?php echo isset($data['level']) && $data['level'] == 2 ? "selected = 'selected'" : "" ?>>Admin</option>
                </select>
                <?php if (isset($error['level'])): ?>
                    <p class="text-danger"><?php echo $error['level'] ?> </p>
                <?php endif ?>               
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary">Lưu</button>
            </div>
        </div>
    </form>
    </div>
<?php require_once __DIR__."/../../layouts/footer.php" ?>