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
                        <a class="brand" href="#">Online Ordering & Mobile System</a>

                        <!-- Everything you want hidden at 940px or less, place within here -->



                        <div class="nav-collapse collapse">
                            <!-- .nav, .navbar-search, .navbar-form, etc -->

                            <ul class="nav">
                               
                                <li class="active"><a href="orders.php"><i class="icon-truck"></i>&nbsp;Orders</a></li>
                               
                                <li> <a href="../logout.php"  data-role="button" rel="external">Logout</a></li>
                                
                                
                                
                            
                                
                                
                                
                                
                                
                                
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
                  
                    <div class="span12">

                        <div class="hero-unit-table"> 
							
                            <table cellpadding="0" cellspacing="0" border="0" class="table table-bordered table-condensed" id="example">
                                <div class="alert alert-info">
                                    <strong><i class="icon-user icon-large"></i>&nbsp;Order Table</strong>
                                </div>
								    <ul class="breadcrumb"> 
	<li>Orders<span class="divider">/</span></li>				
    <li  class="active">Pending Orders<span class="divider">/</span></li>
    <li><a href="delivered.php">Delivered</a> <span class="divider">/</span></li>
   
    </ul>
                                <thead>
                                    <tr>
                                        <th>Transction Code</th>
                                     
                                        <th>Transactiondate</th>
                                             <th>Customer name</th>
                                       
                                       <th>MOP</th>
                                        <th>Comment</th>
										
                                         <th>Status</th>
										<th>Time</th>
                                       
										<th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                     <?php
                                    $cart_table = mysql_query("select  * from myorder where status='Pending'") or die(mysql_error());
                                    $cart_count = mysql_num_rows($cart_table);
                                    while ($cart_row = mysql_fetch_array($cart_table)) {
                                       
                                      
                                      
                                       
    
                                        ?>

                                        <tr>
                                            <td><?php echo $cart_row['id']; ?></td>
                                            <td><?php echo $cart_row['Transactiondate']; ?></td>
                                            <td><?php echo $cart_row['First_Name']." ".$cart_row['Last_Name']; ?></td>
                                            <td><?php echo $cart_row['mop']; ?></td>
                                            
                                            <td><?php echo $cart_row['Message']; ?></td>
                                            <td><?php echo $cart_row['status']; ?></td>
										    <td><?php echo $cart_row['Time_Delivery']; ?></td>
										    <td width="140"><a href="update_status.php?id=<?php echo $cart_row['id']; ?>" class="btn btn-info"><i class="icon-pencil icon-large"></i>&nbsp;Update Status</a></td>
											
                                        </tr>
                                            
                                            
                                           
                                            <!-- product delete modal -->
                                  
                                    <!-- end delete modal -->

                                    </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>



            </div>
        </div>
    </div>



    <?php include('footer.php'); ?>


</body>
</html>


