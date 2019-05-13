

<?php 
    require_once 'db_connect.php';?>

    <?php include('header.php'); 
    ?>

<?php
    if (!isset($_POST['add_new_product'])) {
        # code...
        // header('location:add_new_product.php');
    } else {
        $product_name = mysqli_real_escape_string($db, $_POST['productname']);
        $product_price = mysqli_real_escape_string($db, $_POST['price']);
        $description = mysqli_real_escape_string($db, $_POST['productdetails']);
        $categories_id = mysqli_real_escape_string($db, $_POST['categories']);
        $thumbnail = $_FILES['image_1']['name'];
        $thumbnail_text = mysqli_real_escape_string($db, $_POST['thumbnail_text']);
        
        $status = mysqli_real_escape_string($db, $_POST['status']);
      $file_ext=  explode('/',$_FILES['image_1']['type']);
        $file_name=time().'.'.$file_ext[1];
        $target = "stock_image/".$file_name;
        

        $sql = "INSERT INTO product_table (id, pname, price, details, category_id, thumbnail, thumbnail_text, available)
        VALUES ('', '$product_name', '$product_price', '$description', '$categories_id', '$target', '$thumbnail_text',
        '$status')";
       
        $query = mysqli_query($db, $sql);


        if(move_uploaded_file($_FILES['image_1']['tmp_name'], $target)  && ($query == true)){
            echo "<div class='alert alert-success'>Product successfully added to the database</div>";
            
        }else{


                echo "Error: " . $sql . "<br>" . mysqli_error($db);
            }
        
            mysqli_close($db);
        }
    
?>


<div>
    <ul class="breadcrumb">
        <li>
            <a href="index.php">Home</a>
        </li>
        <li>
            <a href="#">Add New Product</a>
        </li>
    </ul>
</div>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-star-empty"></i> Add New Product</h2>

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
                <form method="post" action="add_new_product.php" enctype="multipart/form-data">
                    <input type="hidden" name="size" value="1000000">

                <div class="form-group">
                    <label class="control-label" for="ProductName">Product Name</label>
                    <input type="text" name="productname" class="form-control" id="productName" placeholder="Product Name" required>
                </div>
                
                <div class="form-group">
                    <label class="control-label" for="ProductPrice">Product Price</label>
                    <input type="text" name="price" class="form-control" id="productName" placeholder="Product Price" required>
                </div>

                <div class="form-group">
                    <label class="control-label" for="ProductDetails">Short Descriptions</label>
                    <textarea type="text" name="productdetails" class="form-control" rows="5" col="20" id="productDetails" required></textarea>
                </div>

                <div class="form-group">
                    <label class="control-label" for="ProductCategories">Categories</label>
                        <div class="control">
                            <select data-placeholder="Select the Product Category from here" name="categories" class="form-control" required>
                                <?php 
                                    $sql = "SELECT * FROM category";
                                    $result = mysqli_query($db, $sql);

                                    while ($row = mysqli_fetch_assoc($result)):?>
                                      
                                <option value=<?php echo $row['category_id'] ;?>><?php echo $row['name'];?></option>
                                <?php
                                    endwhile;
                                ?>
                            </select>
                        </div>
                </div>

                <div class="form-group col-md-6">
                    <label class="control-label" for="image_1">Thumbnail</label>
                    <input type="file" name="image_1" class="form-control" id="image_1" required accept="image/*">
                </div>
                <div class="form-group col-md-6">
                    <label class="control-label" for="image_1_name">Thumbnail Text</label>
                    <input type="text" name="thumbnail_text" class="form-control" required>
                </div>
                <!-- <div class="form-group col-md-6">
                    <label class="control-label" for="image_2_name">Sample Picture</label>
                    <input type="file" name="image_2" class="form-control" id="image_2" accept="image/*"  multiple required>
                </div>
                <div class="form-group col-md-6">
                    <label class="control-label" for="image_1_name">Sample Image Text</label>
                    <input type="text" name="sample_image_text" class="form-control" required>
                </div>
                <div class="form-group col-md-6">
                <label class="control-label" for="image_3">Sample Picture 2</label>
                    <input type="file" name="image_3" class="form-control" id="image_3" accept="image/*" required>
                </div>
                <div class="form-group col-md-6">
                    <label class="control-label" for="image_1_name">Sample Image 2 Text</label>
                    <input type="text" name="sample_image_2_text" class="form-control" required>
                </div> -->
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="status" id="status_available" value="1" required>
                    <label class="form-check-label" for="status">Available</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="status" id="status_not_available" value="0">
                    <label class="form-check-label" for="status">Unavailable</label>
                </div>
                
                <div class="form-group">
                    <input type="submit" name="add_new_product" class="btn btn-success " value="Add New Product" id="status">
                </div>

                    

               
                </form>
                
                <script>
             $(function(){
                 $("input[type = 'submit']").click(function(){
                 var $fileUpload = $("input[type='file']");
               if (parseInt($fileUpload.get(0).files.length) > 3){
                  alert("You are only allowed to upload a maximum of 3 files");
               }
            });
         });
      </script>
            </div>
        </div>
    </div>
    <!-- WHAT I BROUGHT IN ENDED HERE -->
            </div>
        </div>
    </div>
</div><!--/row-->


<?php include('footer.php'); ?>
