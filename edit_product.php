<?php
include('header.php');
$get_id = $_GET['id'];
?>
<?php include('session.php'); ?>
<body>

    <div class="row-fluid">
        <div class="span12">


            <!-- navbar -->
            <div class="navbar navbar-fixed-top navbar-inverse">
                <div class="navbar-inner">
                    <div class="container">

                        <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
                        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </a>

                        <!-- Be sure to leave the brand out there if you want it shown -->
                        <a class="brand" href="#">Online Order& Delivery System For Fresh Dairy</a>

                        <!-- Everything you want hidden at 940px or less, place within here -->



                        <div class="nav-collapse collapse">
                            <!-- .nav, .navbar-search, .navbar-form, etc -->

                            <ul class="nav">
                           
                                <li  class="active"><a href="product.php icon-large icon-large"><i class="icon-th"></i>&nbsp;Products</a></li>
                            
                                <li><a href="orders.php"><i class="icon-truck icon-large"></i>&nbsp;Orders</a></li>
                                <li><a href="mess.php"><i class="icon-file icon-large"></i>&nbsp;Messages</a></li>
                                <li><a href="user.php"><i class="icon-user icon-large"></i>&nbsp;User</a></li>
                                <li><a  href="#myModal" role="button"  data-toggle="modal"><i class="icon-signout icon-large"></i>&nbsp;Logout</a></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
            <!--- end navbar -->
            <div class="hero-unit-header">
                    <?php include('user_name.php'); ?>
            </div>

            <div class="container">

                <div class="row-fluid">
                    <div class="span2">
                        <div class="hero-unit-table">
                            <!-- left nav -->


                            <a href="product.php" class="btn btn-success"><i class="icon-arrow-left icon-large"></i>&nbsp;Back</a>

                            <!-- right nav -->
                        </div>
                    </div>
                    <div class="span10">

                        <div class="hero-unit-table">   
                            <?php
                            $query = mysql_query("select * from reyansproduct where id='$get_id'") or die(mysql_error());
                            $row = mysql_fetch_array($query);
                            ?>

                            <form class="form-horizontal" method="post" enctype="multipart/form-data">
                                <div class="alert alert-info"><strong>Edit Product</strong></div>
                                <hr>
                                <div class="control-group">
                                    <label class="control-label" for="inputEmail">Name</label>
                                    <div class="controls">
                                        <input type="text" name="product" id="inputEmail" value="<?php echo $row['product']; ?>">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">Description</label>
                                    <div class="controls">
                                        <input type="text"  name="description"   value="<?php echo $row['description']; ?>">
                                    </div>
                                </div>
								
								 <div class="control-group">
                                    <label class="control-label" for="inputPassword">Status</label>
                                    <div class="controls">
                                        <select type="text" name="status" >
                                            <option><?php echo $row['status']; ?></option>
                                            <option>Available</option>
                                            <option>Unavailable</option>
                                            
                                        </select>
                                    </div>
                                </div>
								
								
                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">Category</label>
                                    <div class="controls">
                                        <select type="text" name="category" >
                                            <option><?php echo $row['category']; ?></option>
                                             <option>cheese</option>
                                            <option>Yoghurt</option>
                                            <option>Butter</option>
                                            <option>Cream</option>
                                             <option>milk</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">Origin</label>
                                    <div class="controls">
                                        <input type="text" name="originated"   value="<?php echo $row['originated']; ?>">
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">Price</label>
                                    <div class="controls">
                                        <input type="text" name="product_prize"   value="<?php echo $row['product_prize']; ?>">
                                    </div>
                                </div>
                                
                                 <div class="control-group">
                                    <label class="control-label" for="inputPassword">Quantity</label>
                                    <div class="controls">
                                        <input type="text" name="quantity"   value="<?php echo $row['quantity']; ?>">
                                    </div>
                                </div>

                                
                                <div class="control-group">
                                    <label class="control-label" for="input01">Image:</label>
                                    <div class="controls">
                                        <input type="file" name="image"> 
                                    </div>
                                </div>


                                <div class="control-group">
                                    <div class="controls">

                                        <button type="submit" name="update" class="btn btn-success"><i class="icon-save icon-large"></i>&nbsp;Update</button>
                                    </div>
                                </div>
                            </form>

                            <?php
                            if (isset($_POST['update'])) {

                                $product = $_POST['product'];
                                $description = $_POST['description'];
                                $category = $_POST['category'];
								 $status = $_POST['status'];
                                $originated = $_POST['originated'];
                                $product_prize = $_POST['product_prize'];
								  $quantity = $_POST['quantity'];
								 $photo = $_FILES['image']['image'];
							
                              

                                $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
                                $image_name = addslashes($_FILES['image']['name']);
                                $image_size = getimagesize($_FILES['image']['tmp_name']);
//
                                move_uploaded_file($_FILES["image"]["tmp_name"], "upload/" . $_FILES["image"]["name"]);
                                $picture = "upload/" . $_FILES["image"]["name"];

                                mysql_query("update reyansproduct set product='$product',description='$description', picture='$picture', status='$status',category='$category',originated='$originated',product_prize='$product_prize',quantity='$quantity'  where id='$get_id'") or die(mysql_query());
                                header('location:product.php');
                            }
                            ?>


                        </div>

                    </div>
                </div>

            

            </div>
        </div>
    </div>



    <?php include('footer.php'); ?>


</body>
</html>


