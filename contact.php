<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title> ONLINE ORDERING  SYSTEM</title>

<link rel="stylesheet" type="text/css" href="css/style1.css" />

<link type="text/css" href="css/styles.css" rel="stylesheet" media="all" />




<link rel="stylesheet" href="css/jquery.mobile-1.1.0.min.css" />
<link rel="stylesheet" href="css/11.css" />
<link rel="stylesheet" href="css/22.css" />
<link rel="stylesheet" type="text/css" href="cs/jquery.mobile.simpledialog.min.css" />
<script src="js/jquery-1.7.1.min.js"></script>
<script src="js/jquery.mobile-1.1.0.min.js"></script>
<script src="js/1.js"></script>
<script type="text/javascript" src="js/jquery.mobile.simpledialog2.min.js"></script>

<script type="text/javascript" src="scripts/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="scripts/2.js"></script>
<script type="text/javascript" src="scripts/jquery-ui-1.8rc3.custom.min.js"></script>
<link type="text/css" href="scripts/jquery-ui-1.8rc3.custom.css" rel="stylesheet" />
<link type="text/css" href="scripts/3.css" rel="stylesheet" />

<script type="text/javascript" src="scripts/11.js"></script>









</head>

<body>
<div id="wrapper">
<div data-role="page" id="localiza">
        <div data-role="header">
		 <a href="index.php"   rel="external", data-ajax="false" or target data-icon="delete">HOME</a>
		
		<h5> Online Order& Delivery System For Fresh Dairy</h5>
        </div>




	
    <div id="content">
    	<div id="gallerycontainer">
			
				
						 <table width="50%" align="center">
                <tr><td >
					<h3>Contact Form</h3>
					<?php
					include('config.php');
					$result = mysql_query("SELECT * FROM address");
					while($row = @mysql_fetch_array($result))
						{
							echo $row['address'];
						}
					?>
				</div><br>
				<div id="contactright">
                
               
					
					<form class="validate" action="messageexec.php "external", data-ajax="false"" method="POST">
                        <p>
                            <label for="name" class="required label">Name:</label><br>
                            <input id="name" class="contactform" type="text" name="name" required="required"/>
							
                        </p>
                        <p>
                            <label for="email" class="required label">Email:</label><br>
                            <input id="email" class="contactform" placeholder="Example: fresfdairy@gmail.com" type="text" name="email" class="required email" required="required"/>
                        </p>
                        <p>
                            <label for="subject" class="required label">Subject:</label><br>
                            <input id="subject" class="contactform" type="text" name="subject" required="required"/>
                        </p>
                        <p>
                            <label id="message-label" for="message" class="required label">Message:</label><br>
                            <textarea id="message" class="contactform" name="message" cols="28" rows="5" required="required"></textarea>
                        </p>
                        <p>
                            <label></label>
                            <input class="contactform" id="submit-button" type="submit" name="Submit" value="SUBMIT"  data-theme="e"/>
							<br>
							<br>
							<br>
							<br>
                        </p>
						<span data-role="button" data-theme="a" style="width:100%"; >Copy Right @ Online  Ordering 2014. All Rights Reserved. </a></span>

	
                    </form>
                       </tr></td></table>
				</div>
				
               	<div class="column-clear"></div>
            </div>
			<div class="clearfix"></div>
        </div>
    </div>
    

</div>

</div>


</body>
</html>
