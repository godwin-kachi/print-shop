<?php
session_start();

if (isset($_SESSION['username'])) {
    # code...
} else {
    session_destroy();
    header("location:../index.html");
}
?>
<?php
if (isset($_GET['logout'])) {
    session_destroy();
    header('location:../index.html');
}
?>
<?php require('header.php'); ?>
<div>
    <ul class="breadcrumb">
        <li>
            <a href="index.php">Home</a>
        </li>
        <li>
            <a href="#">View Stocks</a>
        </li>
    </ul>
</div>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-plus"></i>All Product List</h2>

                <div class="box-icon">
                    <a href="#" class="btn btn-setting btn-round btn-default"><i class="glyphicon glyphicon-cog"></i></a>
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i class="glyphicon glyphicon-chevron-up"></i></a>
                    <a href="#" class="btn btn-close btn-round btn-default"><i class="glyphicon glyphicon-remove"></i></a>
                </div>
            </div>
            <div class="box-content">
                <div class="control-group">
                    <label class="control-label" for="selectError">Welcome <?php echo $_SESSION['username']; ?>, You can view all the products from the table below</label>


                    <!-- <div class="controls">
                        <ul>
                            <li><a href="add_new_product.php">Add New Product</a></li>
                            <li><a href="update_product.php">Update Existing Product</a></li>
                        </ul>
                    </div> -->
                    <?php
                    require_once 'db_connect.php';

                    $sql = 'SELECT * FROM product_table, category WHERE product_table.category_id = category.category_id ORDER BY category.name';
                    $result = mysqli_query($db, $sql);
                    ?>


                    <!-- ======THE ENTIRE CODE THAT CONTROLS EVENT GOES IN HERE==== -->

                    <div class="modal-body">
                        <?php
                        if (isset($_GET['id'])) : ?>

                            <img src="dashboard/<?= $row['thumbnail'] ?>" alt="">
                        <?php endif; ?>
                    </div>
                    <div class="box-content">
                        <div class="alert alert-info">Expore with care please</div>
                        <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
                            <thead>


                                <tr>
                                    <th>S/No</th>
                                    <th>Product Name</th>
                                    <th>Price</th>
                                    <th>Category</th>
                                    <th>Image Link</th>
                                    <th>Date Added</th>
                                </tr>

                            </thead>
                            <?php
                            while ($row = $result->fetch_assoc()) : ?>
                                <tbody>
                                    <tr>
                                        <td><?= $row['id']; ?></td>
                                        <td><?= $row['pname']; ?></td>
                                        <td><?= $row['price']; ?></td>
                                        <td><?= $row['name']; ?></td>
                                        <td><a href="view-stocks.php?id=<?= $row['id']; ?>"><?= $row['thumbnail']; ?></a></td>
                                        <td><?= $row['created_at']; ?></td>
                                    </tr>
                                <?php
                            endwhile;
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!--/span-->
        </div>
        <!--/row-->


        <?php require('footer.php'); ?>