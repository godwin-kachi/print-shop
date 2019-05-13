
<?php
    session_start();

    if (isset($_SESSION['username'])) {
        # code...
    }else{
        session_destroy();
        header ("location:../index.html");
    }
?>
<?php
    if (isset($_GET['logout'])) {
        session_destroy();
        header('location:../index.html');
    }
?>

<?php include('header.php'); ?>




<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a>
        </li>
        <li>
            <a href="#">Update Product</a>
        </li>
    </ul>
</div>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-star-empty"></i> Blank</h2>

                <div class="box-icon">
                    <a href="#" class="btn btn-setting btn-round btn-default"><i
                            class="glyphicon glyphicon-cog"></i></a>
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-up"></i></a>
                    <a href="#" class="btn btn-close btn-round btn-default"><i
                            class="glyphicon glyphicon-remove"></i></a>
                </div>
            </div>
            <div class="box-content">
                <!-- put your content here -->
                <div class="box-content">
                <div class="control-group">
                    <label class="control-label" for="selectError">Welcome <?php echo strtoupper($_SESSION['username']);?>, select below what you would like to do.</label>
                    

                    <div class="controls">
                        <ul>
                            <li><a href="add_new_product.php">Add New Product</a></li>
                            <li><a href="">Update Existing Product</a></li>
                        </ul>
                    </div>
    <?php
    require_once 'db_connect.php';

    $sql = 'SELECT * FROM product_table, category WHERE product_table.category_id = category.category_id';
    $result = mysqli_query($db, $sql);
    ?>
    

                        <!-- ======THE ENTIRE CODE THAT CONTROLS EVENT GOES IN HERE==== -->
                        <div class="box-content">
    <div class="alert alert-info">As the Product grows, this table below tends to become larger, you can jump to the specific product by typing the name in the search box below.</div>
    <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
    <thead>
    <?php 
            while ($row = $result->fetch_assoc()): ?> 

            <?php
                $status_check = '';
                $status_check = $row['available'];
               if ($status_check == 1) {
                   $status_check = "In Stock";
               }else{
                   $status_check = "Not in Stock";
               }
            ?>

    <tr>
        <th>S/No</th>
        <th>Product Name</th>
        <th>Price</th>
        <th>Descrition</th>
        <th>Category</th>
        <th>Image_link</th>
        <th>Image Text</th>
        <th>In stock</th>
        <th>Action</th>

    </tr>
    </thead>
   
    <tbody>
    <tr>
        <td><?php echo $row['id'];?></td>
        <td><?php echo $row['pname'];?></td>
        <td class="center"><?php echo $row['price'];?></td>
        <td class="center"><?php echo $row['details'];?></td>
        <td class="center"><?php echo $row['name'];?></td>
        <td class="center"><?php echo $row['thumbnail'];?></td>
        <td class="center"><?php echo $row['thumbnail_text'];?></td>
        <td class="center"><?php echo "$status_check";?></td>
        
        <td class="center">
            <a class="btn btn-success" href="#">
                <i class="glyphicon glyphicon-zoom-in icon-white"></i>
                Preview
            </a>
            <a class="btn btn-info" href="#">
                <i class="glyphicon glyphicon-edit icon-white"></i>
                Update
            </a>
        </td>
    </tr>
   <?php
   endwhile;
   ?>
    </tbody>
    </table>                
    </div>
    </div>
    </div>
            </div>
        </div>
    </div>
</div><!--/row-->


<?php include('footer.php'); ?>
