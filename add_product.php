<?php include('header.php'); ?>
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
                                <li><a href="home.php"><i class="icon-home"></i>&nbsp;Home</a></li>
                                <li  class="active"><a href="product.php"><i class="icon-th"></i>&nbsp;Products</a></li>
                                <li><a href="member.php"><i class="icon-group"></i>&nbsp;Members</a></li>
                                <li><a href="orders.php"><i class="icon-truck"></i>&nbsp;Orders</a></li>
                                <li><a href="reports.php"><i class="icon-file"></i>&nbsp;Reports</a></li>
                                <li><a href="user.php"><i class="icon-user"></i>&nbsp;User</a></li>
                                <li><a  href="#myModal" role="button"  data-toggle="modal"><i class="icon-signout"></i>&nbsp;Logout</a></li>
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


                            <a href="product.php" class="btn btn-success"><i class="icon-arrow-left"></i>&nbsp;Back</a>

                            <!-- right nav -->
                        </div>
                    </div>
                    <div class="span10">

                        <div class="hero-unit-table">   


                            <form class="form-horizontal" method="post"  enctype="multipart/form-data">
                                <div class="alert alert-info"><strong>Add Product:</strong></div>
                                <hr>
                                <div class="control-group">
                                    <label class="control-label" for="inputEmail">Product Name:</label>
                                    <div class="controls">
                                        <input type="text" name="product" id="inputEmail" placeholder="Name">
                                    </div>
                                </div>
								
								 <div class="control-group">
                                    <label class="control-label" for="inputPassword">Status:</label>
                                    <div class="controls">
                                        <select type="text" name="status"  placeholder="Category" >

                                            <option>Available</option>
                                            <option>Unavailable</option>
                                            
                                        </select>
                                    </div>
                                </div>
								
								
								
								
                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">Description:</label>
                                    <div class="controls">
                                        <input type="text"  name="description"  placeholder="Description" >
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">Category:</label>
                                    <div class="controls">
                                        <select type="text" name="category"  placeholder="Category" >
                                             <option>cheese</option>
                                            <option>Yoghurt</option>
                                            <option>Butter</option>
                                            <option>Cream</option>
                                             <option>milk</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">Origin:</label>
                                    <div class="controls">
                                        <input type="text" name="originated"  placeholder="Origin">
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">Price:</label>
                                    <div class="controls">
                                        <input type="text" name="product_prize"  placeholder="Price" >
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">Quantity:</label>
                                    <div class="controls">
                                        <input type="text" name="quantity" placeholder="quantity"  >
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label" for="input01">Image:</label>
                                    <div class="controls">
                                        <input type="file" name="image" id="image"> 
                                    </div>
                                </div>


                                <div class="control-group">
                                    <div class="controls">

                                        <button type="submit" name="update" class="btn btn-success"><i class="icon-save"></i>&nbsp;Save</button>
                                    </div>
                                </div>
                            </form>

                            <?php
                            if (isset($_POST['update'])) {

                                $product = $_POST['product'];
                                $product_prize = $_POST['product_prize'];
                                $status = $_POST['status'];
								 $description = $_POST['description'];
							
								  $photo = $_FILES['image']['image'];
								
								  $originated = $_POST['originated'];
								    $category = $_POST['category'];
									$quantity = $_POST['quantity'];
								  

                         
                                $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
                                $image_name = addslashes($_FILES['image']['name']);
                                $image_size = getimagesize($_FILES['image']['tmp_name']);
//
                                move_uploaded_file($_FILES["image"]["tmp_name"], "upload/" . $_FILES["image"]["name"]);
                                $picture = "upload/" . $_FILES["image"]["name"];
								
							
							
							
							
					
								
								
								
								
								
								
								


                                mysql_query("insert into    reyansproduct (product,product_prize,status,description,picture,originated,category,quantity)
								
                            	values ('$product','$product_prize','$status', '$description', '$picture',  '$originated', '$category','$quantity')
                                ") or die(mysql_error());

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


