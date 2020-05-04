<!DOCTYPE html>
<html lang="en">
	<head>
	    <meta charset="UTF-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	    <meta name="Digital Commerce with ALT Commerce" content="<?php echo $meta1; ?>">
        <meta name="Aboutus-digital commerce with alt commerce" content="<?php echo $meta2; ?>">
        <meta name="ContactUs - Digital Commerce with Alt Commerce" content="<?php echo $meta3; ?>">
        <meta name="Careers - Digital Commerce with Alt Commerce" content="<?php echo $meta4; ?>">
        <meta name="Resources-Digital Commerce with Alt Commerce" content="<?php echo $meta5; ?>">
        <meta name="Services - Digital Commerce with Alt Commerce" content="<?php echo $meta6; ?>">
        <meta name="Skills-Digital Commerce with Alt Commerce" content="<?php echo $meta7; ?>">
        <meta name="Community-Digital Commerce with Alt Commerce" content="<?php echo $meta8; ?>">
	    
	    <?php 
            $url = $_SERVER["REQUEST_URI"];
        	$explodeUrl	=	explode("/",$url);
        	if($explodeUrl[2]!=''){$filePath	=	'../';}else{$filePath	=	'';}
        ?>
	    
	    <title>Digital Commerce with ALT Commerce</title>
	    <link rel="shortcut icon" href="<?php echo $filePath;?>images/alt.png">
	    <link rel="stylesheet" href="<?php echo $filePath;?>css/uikit.min.css">
	  
	    <link rel="stylesheet" href="<?php echo $filePath;?>css/altcommerce-style.css">
	    <link rel="stylesheet" href="<?php echo $filePath;?>css/style-fixed.css">
	    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
	    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
	    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     
   
	</head>
	<body class=" uk-background-norepeat <?php if($explodeUrl[2]==''){echo "bg-img";} ?>" >
<!--topbar-->
    <div class="uk-container">
        <div class="uk-grid" uk-grid>
            <div class="uk-navbar-left nav-social uk-margin-small-top">
                <ul class=" uk-navbar-nav" >
                    <li>
                        <a href="https://www.facebook.com/altcommerce?_rdr=p" uk-icon="facebook" target="_blank" ></a>
                    </li>
                    <li>
                        <a href="https://twitter.com/altcommerce" uk-icon="twitter" target="_blank"></a>
                    </li>
                    <li>
                        <a href="https://www.linkedin.com/company/alt-commerce" uk-icon="linkedin" target="_blank"></a>
                    </li>
                    <li>
                        <a href="mailto:info@altcommerce.com" uk-icon="mail" target="_blank"></a>
                    </li>
                </ul>
            </div>

        </div>
    </div>
    <!--topbar ends-->
    <!-- navigation -->
    <div class="uk-container">

                
                
        <div class=" uk-child-width-expand@s nav-header" uk-grid  uk-sticky>
            
            <div class="clear-padd uk-width-auto@m">
                <div class="uk-navbar">
                    <div class="menu-toggle">
                        <button class="uk-margin-small-right mobile-navbutton" uk-toggle="target: #offcanvas-usage">
                           <img src="https://img.icons8.com/ios-filled/50/000000/menu.png" style="height: 27px; width: 22px;">
                        </button>
                    </div>
                    <div class="uk-flex uk-navbar-left logo-img">
                        <div class="uk-navbar-item  clear-padd brand-logo img">
                             <img class="image" src="<?php echo $filePath;?>images/alt.png" alt="">
                        </div>

                    </div>
                    
                </div>

            </div>


            <div class="uk-navbar mobile-nav uk-navbar-right uk-width-expand@m">
                
                    <ul class="uk-navbar-nav uk-text-bold nav-menu">
                        <li class="">
                            <a class="<?php if($currentPage =='home'){echo 'active_page';}?>" href="<?php echo $filePath;?>">Home</a>
                        </li>
                        <li >
                            <button class="uk-button sub-menu <?php if($currentPage =='about'){echo 'active_page';}?>">ABOUT US</button>
                                <div id="about_submenu"  class="drop-navbar" style="display:none;"  uk-dropdown="pos:top-center">
                                
                                    <ul class="uk-nav uk-navbar-dropdown-nav">
                                        <li class="sub"><a href="<?php echo $filePath;?>about">WHAT WE DO</a></li>
                                        <li class="sub"><a href="<?php echo $filePath;?>csr">COMMUNITY</a></li>
                                        <li class="sub"><a href="<?php echo $filePath;?>contactus">CONTACT US</a></li>
                                    </ul>
                              
                            </div>
                            
                        </li>
                        <li class="">
                            <a class="<?php if($currentPage =='skill'){echo 'active_page';}?>" href="<?php echo $filePath;?>skill">Skills</a>
                        </li>
                        <li >
                            <a class="<?php if($currentPage =='service'){echo 'active_page';}?>" href="<?php echo $filePath;?>service">Services</a>
                        </li>
                        <li >
                            <a class="<?php if($currentPage =='resource'){echo 'active_page';}?>" href="<?php echo $filePath;?>resource">Resources</a>
                        </li>
                        
                        <li >
                            <a class="<?php if($currentPage =='career'){echo 'active_page';}?>" href="<?php echo $filePath;?>careers">Careers</a>
                        </li>
                       
                    </ul>
                

            </div>

        </div>
    </div>
    <!-- navigation ends -->
	    <!-- navigation ends --> 

