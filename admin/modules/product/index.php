<?php 
    $open = "product";
    require_once __DIR__."/../../autoload/autoload.php";
    $product = $db->fetchAll("product");
    //var_dump($category);
?>
<?php require_once __DIR__."/../../layouts/header.php" ?>
    <!-- Page Heading Nội dung chính của trang -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Danh sách danh mục
                <a href="add.php" class="btn btn-primary">Thêm mới sản phẩm</a>
            </h1>
            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                </li>
                <li class="active">
                    <i class="fa fa-file"></i> Sản phẩm
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
                        <th>Category</th>
                        <th>Thunbar</th>
                        <th>Slug</th>                        
                        <th>Thông tin sản phẩm</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $stt=1;
                        foreach ($product as $item) : ?>
                            <tr>
                                <td><?=$stt?></td>
                                <td><?=$item['name']?></td>
                                <td><?=$item['category_id']?></td>
                                <td style="text-align:center">
                                  <img src="<?php echo uploads( ) ?>product/<?=$item['thunbar']?>" alt="" width="80px" height="80px"/>
                                </td>
                                <td><?=$item['slug']?></td>
                                
                                <td>
                                  <ul>
                                    <li>Giá: <?=number_format($item['price'])?> <sup>vnđ</sup></li>
                                    <li>Số lượng: <?=$item['number']?></li>
                                  </ul>
                                </td>
                                <td>
                                    <a href="edit.php?id=<?=$item['id']?>" class="btn btn-xs btn-success"><i class="fa fa-edit"> Sửa</i></a>
                                    <a href="delete.php?id=<?=$item['id']?>" class="btn btn-xs btn-danger"><i class="fa fa-times"> Xóa</i></a>
                                </td>
                            </tr>
                        <?php $stt++; endforeach?>
                    
                    
                </tbody>
            </table>
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