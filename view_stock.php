<?php
       require_once 'serverscripts\db_connect.php';

        error_reporting(E_ALL);
        ini_set('display_errors', '1');
        $category_id = isset($_GET['id'])  ?  $_GET['id'] : null;
        
       if($category_id==null){
           header('Location: index.php');
       }
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dezzyworld Multiservices | View Inventory</title>
</head>
<body>

    <?php
    include_once "pageHeader.php";
    ?>
    
    <br>
    <br>
    <div class="clear"></div>
    
    <div class="wrapper">
         <div class="container">
    <?php

            $db = mysqli_connect("localhost", "root", "", "dezzy") or die(mysqli_error($db));

         $sql = "SELECT * FROM product_table WHERE category_id = $category_id";
         $data = mysqli_query($db, $sql);
         $rows =  mysqli_num_rows($data);

        
             ?>
      
        
            <div class="container" style="display:-moz-inline-grid;">
            
            <div class="row">

            <?php
					
					?>
                
            <?php 
            if($rows<=0){
                echo'<div class="text-center"><h2>No results Found!</h2></div>';
            }
            while ($row = mysqli_fetch_assoc($data)):
            	$price = $row['price'];
                        $formatted_price = number_format($price);
                        ?>
                    
                      <div class="col-sm-6 col-md-4 col-lg-3" >
                         
						<div class="card">
							<img src="dashboard/<?=$row['thumbnail'];?>" alt="<?=$row['pname'];?>" style="width:100%">
							    <h4><?php echo $row['pname']; ?></h4>
							    <p class="price">N <?php echo $formatted_price ; ?></p>
                                <button>Add to Cart</button>
                               
                        </div>   
                </div>
                <?php
             endwhile;
        //  }
        ?>
            </div>
			

             </div>
            
        

             <div class="clear">

             </div>
       <br>
       <br>
       
    
            </div>
    </div>

    <!-- FOOTER AREA -->

    <div>
        <?php
        include_once "pageFooter.php";

        ?>

    </div>
            </div>
</body>
</html>