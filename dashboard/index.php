<?php
    session_start();

    if (isset($_SESSION['username'])) {
        # code...
    }else{
        session_destroy();
        header ("location:../index.php");
    }
?>
<?php
    if (isset($_GET['logout'])) {
        session_destroy();
        header('location:../index.php');
    }
?>

        <?php 
            require_once('db_connect.php');
            require('header.php');
        ?>
<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a>
        </li>
        <li>
            <a href="#">Dashboard</a>
        </li>
    </ul>
</div>
        <?php
            $staff_sql = 'SELECT * FROM admin';
            $staff_result = mysqli_query($db, $staff_sql);
            $notification = mysqli_num_rows($staff_result);

        ?>
<div class=" row">
    <div class="col-md-3 col-sm-3 col-xs-6">
        <a data-toggle="tooltip" title="6 new members." class="well top-block" href="#">
            <i class="glyphicon glyphicon-user blue"></i>

            <div>Total Staff</div>
            <div><?php echo $notification; ?></div>
            <span class="notification">6</span>
        </a>
    </div>
    <?php
        $product_sql ='SELECT * FROM product_table';
        $product_result = mysqli_query($db, $product_sql);
        $pro_notification = mysqli_num_rows($product_result);
    ?>

    <div class="col-md-3 col-sm-3 col-xs-6">
        <a data-toggle="tooltip" class="well top-block" href="#">
            <i class="glyphicon glyphicon-star green"></i>

            <div>Stocked Products</div>
            <div><?php echo $pro_notification; ?></div>
            <!-- <span class="notification green">*</span> -->
        </a>
    </div>

    <div class="col-md-3 col-sm-3 col-xs-6">
        <a data-toggle="tooltip" title="$34 new sales." class="well top-block" href="#">
            <i class="glyphicon glyphicon-shopping-cart yellow"></i>

            <div>Sales</div>
            <div>$13320</div>
            <span class="notification yellow">$34</span>
        </a>
    </div>

    <div class="col-md-3 col-sm-3 col-xs-6">
        <a data-toggle="tooltip" title="12 new messages." class="well top-block" href="#">
            <i class="glyphicon glyphicon-envelope red"></i>

            <div>Messages</div>
            <div>25</div>
            <span class="notification red">12</span>
        </a>
    </div>
</div>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well">
                <h2><i class="glyphicon glyphicon-info-sign"></i> Introduction</h2>

                <div class="box-icon">
                    <a href="#" class="btn btn-setting btn-round btn-default"><i
                            class="glyphicon glyphicon-cog"></i></a>
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-up"></i></a>
                    <a href="#" class="btn btn-close btn-round btn-default"><i
                            class="glyphicon glyphicon-remove"></i></a>
                </div>
            </div>
            <?php 
                $username = strtoupper($_SESSION['username']) ;
                include 'db_connect.php';

                $sql = 'SELECT * FROM admin WHERE username = $username ' ;
                $result = mysqli_query($db, $sql);
                // $resultCheck = mysqli_num_rows($result);
                // $row = mysqli_fetch_assoc($result);
                ?>

            <div class="box-content row">
                <div class="col-lg-7 col-md-12">
                    <h1>Welcome <?php echo $username ;?> <br>
        
                        <small>Please note that as a Store Manager with a User Priviledge</small>
                    </h1>
                    <p>There is limit to what you can do within this dashboard, however you will still find this app
                        quite handy to deliver a smooth managing experience while you work with us.</p>

                    <p><b>If there is any complaint you would like us to work on....</b></p>

                </div>

            </div>
        </div>
    </div>
</div>


<?php require('footer.php'); ?>
