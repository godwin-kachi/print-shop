

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
<?php require('header.php'); ?>
<div>
    <ul class="breadcrumb">
        <li>
            <a href="index.php">Home</a>
        </li>
        <li>
            <a href="#">Manage Users</a>
        </li>
    </ul>
</div>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> <?php echo $_SESSION['username'];?> Dashboard</h2>

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
                <div class="control-group">
                    <label class="control-label" for="selectError">Welcome <?php echo $_SESSION['username'];?>, Below are what you can do on this page.</label>

                    <div class="controls">
                        <ul>
                            <li><a href="#view"> View All Users</a></li>
                            <li><a href="">Edit Priviledges</a></li>
                            <li><a href="add_new_user.php">Add a New Manager</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit" id="view"></i> List of Active Store Managers</h2>

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
                <div class="control-group">
                    <label class="control-label" for="selectError">Welcome <?php echo $_SESSION['username'];?>, select below what you would like to do.</label>

                    <div class="controls">
    <?php
    require_once 'db_connect.php';

    $sql = 'SELECT * FROM admin';
    $result = mysqli_query($db, $sql);
    ?>

                        <!-- ======THE ENTIRE CODE THAT CONTROLS EVENT GOES IN HERE==== -->
                        <div class="box-content">
    <div class="alert alert-info">As the various Store Manager Logs in, A log is created for them which can only be viewed by a super user --- Store Owner</div>
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
    <!--/span-->

    </div><!--/row-->
        </div>
    </div>
</div>

                        <!-- ====== THIS SHOULD BE THE END OF USER DISPLAY FUNCTIONS=== -->


    <!--/span-->

</div><!--/row-->

<?php require('footer.php'); ?>

