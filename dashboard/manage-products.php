
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
            <a href="index.php">Home</a>
        </li>
        <li>
            <a href="#">Manage Stock Products</a>
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
           <!-- SOME TEXT GOES HERE THAT CONTROLS THE FLOW OF THE PAGE -->
           <div class="box-content">
                <div class="control-group">
                    <label class="control-label" for="selectError">Welcome <?php echo $_SESSION['username'];?>, select below what you would like to do.</label>
                    

                    <div class="controls">
                        <ul>
                            <li><a href="add_new_product.php">Add New Product</a></li>
                            <li><a href="update_product.php">Update Existing Product</a></li>
                        </ul>
                    </div>
    <?php
    require_once 'db_connect.php';

    $sql = 'SELECT * FROM admin';
    $result = mysqli_query($db, $sql);
    ?>
    

                        <!-- ======THE ENTIRE CODE THAT CONTROLS EVENT GOES IN HERE==== -->
                        <div class="box-content">
    <div class="alert alert-info">As the various Store Manager Logs in, A log is created for them which can only be viewed by a Super user --- Store Owner</div>
    <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
    <thead>
    <?php 
            while ($row = $result->fetch_assoc()): ?> 

    <tr>
        <th>Username</th>
        <th>Password</th>
        <th>Last Log Date</th>
        <th>Priviledges</th>
        <th>Actions</th>
    </tr>
    </thead>
   
    <tbody>
    <tr>
        <td><?php echo $row['username'];?></td>
        <td class="center"><?php echo $row['password'];?></td>
        <td class="center"><?php echo $row['last_log_date'];?></td>
        <td class="center">
            <span class="label-success label label-default"><?php echo $row['priviledges'];?></span>
        </td>
        <td class="center">
            <a class="btn btn-success" href="#">
                <i class="glyphicon glyphicon-zoom-in icon-white"></i>
                View
            </a>
            <a class="btn btn-info" href="#">
                <i class="glyphicon glyphicon-edit icon-white"></i>
                Edit
            </a>
            <a class="btn btn-danger" href="#">
                <i class="glyphicon glyphicon-trash icon-white"></i>
                Delete
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
           <!-- WHEN THE CONTROL IS DONE -->
            </div>
        </div>
    </div>
</div><!--/row-->


<?php include('footer.php'); ?>
