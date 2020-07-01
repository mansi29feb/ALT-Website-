
<?php 
    $url = $_SERVER["REQUEST_URI"];
	$explodeUrl	=	explode("/",$url);
	if($explodeUrl[2]!=''){$filePath	=	'../';}else{$filePath	=	'';}
?>

<!--footer start -->

    <div class="uk-child-width-expand@s footer" uk-grid>
        <div>
            <div class="footerbox uk-text-center uk-margin-small">
                <span class="uk-text-capitalize ">Copyrights © 2020 All Rights Reserved by <span class="uk-text-bold">ALT Commerce Pvt. Ltd.</span></span>
            </div>
        </div>
        <div>
            <div class=" uk-link-text uk-text-center uk-visible@s footermenu">
                <a href="<?php echo $filePath;?>">&nbsp;&nbsp;Home&nbsp;&nbsp;</a>/
                <a href="<?php echo $filePath;?>about">&nbsp;&nbsp;About Us&nbsp;&nbsp;</a>/
                <a href="<?php echo $filePath;?>service">&nbsp;&nbsp;Services&nbsp;&nbsp;</a>/
                <a href="<?php echo $filePath;?>skill">&nbsp;&nbsp;Skills&nbsp;&nbsp;</a>/
                <a href="<?php echo $filePath;?>resource">&nbsp;&nbsp;Resources&nbsp;&nbsp;</a>/
                <a href="<?php echo $filePath;?>careers">&nbsp;&nbsp;Careers&nbsp;&nbsp;</a>
            </div>

        </div>


    </div>
<!--footer end-->

<!--mobile nav-->
    <div id="offcanvas-usage" uk-offcanvas>
        <div class="uk-offcanvas-bar menu-list" style="box-shadow: 0 5px 15px rgba(0, 0, 0, .09);">

            <button class="close-icon uk-offcanvas-close" type="button" uk-close style="color:black;"></button>
            <ul class="menu-container">
            

               <li class="uk-active menu-itme"><a class="<?php if($currentPage =='home'){echo 'active_page';}?>" href="<?php echo $filePath;?>">Home</a></li>
                
                
                    <div class="sub-togle <?php if($currentPage =='about'){echo 'active_page';}?>">About Us</div>
                    <div class="sub-menu-container uk-margin-remove-top uk-padding-remove-bottom" 
                    uk-dropdown="animation: uk-animation-slide-left-small; duration: 1000" >
                        <ul class="uk-nav uk-navbar-dropdown-nav">
                            <li class="uk-active"><a href="<?php echo $filePath;?>about" style="color:#000;">WHAT WE DO</a></li>
                            <li class="uk-active menu-itm1"><a href="<?php echo $filePath;?>csr" style="color:#000;">COMMUNITY</a></li>
                            <li class="uk-active menu-itm1"><a href="<?php echo $filePath;?>contactus" style="color:#000;">CONTACT US</a></li>
                        </ul>
                    
                    </div>
                    
                
                <li class="uk-active menu-itm"><a class="<?php if($currentPage =='skill'){echo 'active_page';}?>" href="<?php echo $filePath;?>skill" style="color:#000;">Skills</a></li>
                        
                <li class="uk-active menu-itm" ><a class="<?php if($currentPage =='service'){echo 'active_page';}?>" href="<?php echo $filePath;?>service">Services</a></li>
                
               <li class="uk-active menu-itm"><a class="<?php if($currentPage =='resource'){echo 'active_page';}?>" href="<?php echo $filePath;?>resource">Resource</a></li>
               
                <li class="uk-active menu-itm"><a class="<?php if($currentPage =='career'){echo 'active_page';}?>"  href="<?php echo $filePath;?>careers">Careers</a></li>
                
            </ul>    

        </div>
    </div>
<!--mobile nav end-->

<script src="<?php echo $filePath;?>js/cssrelpreload.js"></script>
    <!-- <script src="<?php echo $filePath;?>js/modernizr-custom.js"></script>
    <script src="<?php echo $filePath;?>js/responsivelylazy.min.js"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script src="<?php echo $filePath;?>js/sweetalert.min.js" defer></script>
    <script src="<?php echo $filePath;?>js/count.min.js" defer></script>
    <script src="<?php echo $filePath;?>js/uikit.min.js" defer></script>
    <script src="<?php echo $filePath;?>js/uikit-icons.min.js" defer></script>
    
<script>
    Modernizr.on('webp', function (result) {
        if (result) {
              //suported
              }
         else {
             //not-supported
              }
         });
</script>

   
    
