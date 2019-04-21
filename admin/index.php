<?php 
    require_once __DIR__."/autoload/autoload.php";
    $category = $db->fetchAll("category");
    //var_dump($category);
?>
<?php require_once __DIR__."/layouts/header.php" ?>
    <!-- Page Heading Nội dung chính của trang -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Xin chào bạn đến với trang quản trị của Admin
                <small>Subheading</small>
            </h1>
            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                </li>
                <li class="active">
                    <i class="fa fa-file"></i> Blank Page
                </li>
            </ol>
            <?php var_dump($category); ?>
        </div>
    </div>
    <!-- /.row -->
<?php require_once __DIR__."/layouts/footer.php" ?>