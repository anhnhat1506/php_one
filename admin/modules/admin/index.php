<?php 
    $open = "admin";
    require_once __DIR__."/../../autoload/autoload.php";
    if (isset($_GET['page'])) {
      $p = $_GET['page'];
    } else {
      $p = 1;
    }
    $sql = "select admin.* from admin order by ID desc";
    //$product = $db->fetchAll("product");
    $admin = $db->fetchJone('admin',$sql,$p,3,true);
    //var_dump($category);
    //_debug($product);
    if(isset($admin['page'])) {
      $sotrang = $admin['page'];
      unset($admin['page']);
    }
?>
<?php require_once __DIR__."/../../layouts/header.php" ?>
    <!-- Page Heading Nội dung chính của trang -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Danh sách admin
                <a href="add.php" class="btn btn-primary">Thêm mới admin</a>
            </h1>
            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                </li>
                <li class="active">
                    <i class="fa fa-file"></i> Admin
                </li>
            </ol>
            <div class="clearfix">
            </div>
            <!--Thông báo lỗi khi cần-->
            <?php require_once __DIR__."/../../../partials/notification.php" ?>             
        </div>
    </div>
    <!-- /.row -->
    <div class="row">
      <div class="col-md-12">
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Tên</th>
                        <th>Email</th>
                        <th>SĐT</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $stt=1;
                        foreach ($admin as $item) : ?>
                            <tr>
                                <td><?=$stt?></td>
                                <td><?=$item['name']?></td>
                                <td><?=$item['email']?></td>
                                <td><?=$item['phone']?></td>

                                <td>
                                    <a href="edit.php?id=<?=$item['id']?>" class="btn btn-xs btn-success"><i class="fa fa-edit"> Sửa</i></a>
                                    <a href="delete.php?id=<?=$item['id']?>" class="btn btn-xs btn-danger"><i class="fa fa-times"> Xóa</i></a>
                                </td>
                            </tr>
                        <?php $stt++; endforeach?>
                    
                    
                </tbody>
            </table>
            <div class="pull-right">
                <nav aria-label="Page navigation example pull-right" class="clearfix">
                <ul class="pagination">
                    <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                    </li>
                    <?php 
                    for ($i=1; $i <=$sotrang ; $i++ ) : ?>
                        <?php 
                            if (isset($_GET['page'])) {
                            $p = $_GET['page'];
                            }
                            else {
                            $p = 1;
                            }
                        ?>
                        <li class="page-item <?php echo ($i == $p) ? 'active' : '' ?>"><a class="page-link" href="?page=<?=$i?>"><?=$i?></a></li>
                    <?php endfor ?>
                    <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                    </li>
                </ul>
                </nav>
            </div>
            <!--<div class="pull-right">
              <nav aria-label="Page navigation example pull-right">
                <ul class="pagination">
                  <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                      <span aria-hidden="true">&laquo;</span>
                    </a>
                  </li>
            
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">4</a></li>
                  <li class="page-item"><a class="page-link" href="#">5</a></li>
                  <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                      <span aria-hidden="true">&raquo;</span>
                    </a>
                  </li>
                </ul>
              </nav>
            </div>-->
        </div>
      </div>
    </div>
<?php require_once __DIR__."/../../layouts/footer.php" ?>