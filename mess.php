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
                              
                                <li><a href="product.php"><i class="icon-th icon-large"></i>&nbsp;Products</a></li>
                             
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

                    <div class="span12">

                        <div class="hero-unit-table">   
                            <table cellpadding="0" cellspacing="0" border="0" class="table table-condensed table-striped table-bordered" id="example">
                                <div class="alert alert-info">
                                    <strong><i class="icon-user icon-large"></i>&nbsp;Message  Table</strong>
                                </div>
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Sender</th>
                                        <th>Email</th>
                                        <th>Subject</th>
                                        <th>Message</th>
                                  
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $query = mysql_query("select * from message") or die(mysql_error());
                                    while ($row = mysql_fetch_array($query)) {
                                        $message_id = $row['message_id'];
                                        ?>
                                        <tr class="odd gradeX">
                                         <td><?php echo $row['message_id']; ?></td> 
                                            <td><?php echo $row['name']; ?></td> 
                                            <td><?php echo $row['email']; ?></td> 
                                            <td><?php echo $row['subject']; ?></td> 
                                            <td><?php echo $row['message']; ?></td> 
                                           
                                                                               <td width="100">
                                                                               
                                                                               
                                                                               
                                                <a href="#userdel<?php echo $message_id; ?>" role="button"  data-toggle="modal" class="btn btn-danger"><i class="icon-trash icon-large"></i>&nbsp;Delete</a>

                                            </td>
                                            <!-- user delete modal -->
                                    <div id="userdel<?php echo $message_id; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-header">
                                        </div>
                                        <div class="modal-body">
                                            <div class="alert alert-danger">Are you Sure you Want to <strong>Delete&nbsp;</strong><?php echo $row['name'] . " " . $row['subject']; ?>?</div>
                                        </div>
                                        <div class="modal-footer">
                                            <a class="btn btn-danger" href="delete_mess.php<?php echo '?id=' . $message_id; ?>" ><i class="icon-check"></i>&nbsp;Yes</a>
                                            <button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i>&nbsp;No</button>

                                        </div>
                                    </div>
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


