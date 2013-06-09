<?php session_start() ?>
<div class="header-wrapper">
	<div class="container">
    	<div class="row-fluid">
        	<div class="span4 logo-container">
					<a href="index-new.php" style="outline:none;border:0px">
						<div id="logo">
						</div>
					</a>
            </div>
        	<div class="span8">
            
                <div id="menu-wrapper">
                    <!-- menu that is displayed only on tablets and bigger screen resolutions
                    then is transformed into a dropdown menu for mobile devices -->
                    <ul id="rmenu-id" class="sf-menu sf-js-enabled">
                        <li><a href="index-new.php">Home</a></li>
                        <li><a href="#">Quick Links</a></li>                          
                        <li class=""><a href="#">Products</a>
                            <ul style="display: none; opacity: 1;">
                                <li><a href="#">Product 1</a></li>
                                <li><a href="#">Product 2</a></li>
                                <li><a href="#">Product 3</a></li>                                
		                        <li><a href="#">Product 4</a></li> 
		                        <li><a href="#">Product 5</a></li>
                                <li class=""><a href="#">More Products »</a>
                                    <ul style="display: none; opacity: 1;">
                                        <li><a href="#">Product 6</a></li>
                                        <li><a href="#">Product 7</a></li>                        
                                        <li><a href="#">Product 8</a></li>
                                    </ul>                            
                                </li>
                            </ul>
                        </li> 
                        <li><a href="#">Contact Us</a></li>
                        
                        <?php if(!(isset($_SESSION['vcare_user']) && !empty($_SESSION['vcare_user']))){ ?>
                        <li><a href="#showLoginForm" data-toggle="modal"><i class="icon-user"></i> Sign In</a></li>
                        
                        <?php }else{?>
                            <li style="word-wrap: break-word;padding:0;width:200px"><a href="logout2.php">Welcome | Sign Out</a></li>
                        <?php }?>
                    </ul>
                </div><!-- end of #menu-wrapper -->
                       	
            </div><!-- end of .span8 -->    
                 
        </div>

 
    </div><!-- end of .container -->   
    
</div><!-- end of .header-wrapper --> 

<div class="hdec-wrapper"></div>


<!-- #start content(body) section -->   
<div class="content-wrapper">
	<div class="container">