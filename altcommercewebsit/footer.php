
<?php 
    $url = $_SERVER["REQUEST_URI"];
	$explodeUrl	=	explode("/",$url);
	if($explodeUrl[2]!=''){$filePath	=	'../';}else{$filePath	=	'';}
?>

<!--footer start -->

    <!-- <div class="uk-child-width-expand@s footer" uk-grid>
        <div>
            <div class="footerbox uk-text-center uk-margin-small">
                <span class="uk-text-capitalize ">Copyrights © <script>document.write(new Date().getFullYear())</script> All Rights Reserved by <span class="uk-text-bold">ALT Commerce Pvt. Ltd.</span></span>
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


    </div> -->
<div id="foo"> 
    <div class="uk-container">   
        <div class=" uk-grid  uk-grid-collapse uk-child-width-expand@s  uk-text-left uk-margin-medium-top" uk-grid>
        
            
            <div>
                <div class="uk-padding sm-screen">
                    <div class="uk-h3">About Us</div> 
                    <div class="uk-display-inline-block uk-text-secondary" uk-scrollspy="cls: uk-animation-slide-left-medium;">
                        <ul class="uk-list text">
                            <li><a  style="color: #222;"  href="<?php echo $filePath;?>about">What We Do</a></li>
                            <li><a  style="color: #222;"  href="<?php echo $filePath;?>csr">Community</a></li>
                            <li><a  style="color: #222;" href="<?php echo $filePath;?>contactus">Contact Us</a></li>
                        </ul>
                    </div>    
                </div>
            </div>
            <div>
                <div class="uk-padding sm-screen-srv">
                    <div class="uk-h3">Services</div>
                    <div class="uk-display-inline-block" uk-scrollspy="cls: uk-animation-slide-left-medium;">
                        <ul class="uk-list text">
                            <li><a style="color: #222;" href="<?php echo $filePath;?>DCX">DCX</a></li>
                            <li><a  style="color: #222;" href="<?php echo $filePath;?>product">Product Engineering</a></li>
                            <li><a  style="color: #222;" href="<?php echo $filePath;?>consulting">Consulting</a></li>
                        </ul>
                    </div>
                </div>

            </div>
            
            <div>
                <div class="uk-padding sm-screen-cont">
                    <div class="uk-h3 contact">Contact Us</div> 
                    <div class="uk-width-expand@s uk-text-left uk-flex  text" uk-scrollspy="cls: uk-animation-fade;">
                    <div class="contact_box ">
                    <span uk-icon="receiver"></span>&nbsp;Call Us:</br>
                    <div class="uk-text-bold uk-text-secondary contact_text " style="color:black;">
                    +91-120-4226757</br></br>
                    </div>
                                        
                    <span uk-icon="mail"></span>&nbsp;Email Us:</br> 
                    <div class="uk-text-bold uk-text-secondary contact_text ">
                    info@altcommerce.com
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div> 
    </div>    

    <hr/>
    <div class="uk-container">
       
        <div class=" uk-grid-collapse uk-child-width-expand@s" uk-grid>
            <div class=" uk-text-center uk-margin-small uk-padding-remove-right"><span class="uk-text-capitalize ">Copyrights © <script>document.write(new Date().getFullYear())</script> All Rights Reserved by <span class="uk-text-bold">ALT Commerce Pvt. Ltd.</span></div>
            <div class="  uk-text-right uk-link-text uk-visible@s" style="margin-top: -6px !important;">
                <a class="uk-icon-button uk-margin-small-right uk-text-secondary" href="https://www.facebook.com/altcommerce?_rdr=p" uk-icon="facebook" aria-label="Facebook" target="_blank" rel="noopener"></a>
                <a class="uk-icon-button uk-margin-small-right uk-text-secondary" href="https://twitter.com/altcommerce" uk-icon="twitter" aria-label="Twitter" target="_blank" rel="noopener"></a>
                <a  class="uk-icon-button uk-margin-small-right uk-text-secondary" href="https://www.linkedin.com/company/alt-commerce" uk-icon="linkedin" aria-label="LinkedIn" target="_blank" rel="noopener"></a>
                <a  class="uk-text-secondary uk-icon-button uk-margin-small-right" href="mailto:info@altcommerce.com" uk-icon="mail" aria-label="Mail" target="_blank" rel="noopener"></a>
            </div>    
        </div>
    </div>
    
</div>
<!--footer end-->

<!--mobile nav-->
  <div id="offcanvas-usage" uk-offcanvas>
        <div class="uk-offcanvas-bar menu-list" style="box-shadow: 0 5px 15px rgba(0, 0, 0, .09);">

            <button class="close-icon uk-offcanvas-close" type="button" uk-close style="color:black;"></button>
            <ul class="menu-container">
            

               <li class="uk-active menu-itme"><a class="<?php if($currentPage =='home'){echo 'active_page';}?>" href="<?php echo $filePath;?>" style="color:#000;" >Home</a></li>
                
                
                    <div class="sub-togle <?php if($currentPage =='about'){echo 'active_page';}?>">About Us</div>
                    <div class="sub-menu-container uk-margin-remove-top uk-padding-remove-bottom" 
                    uk-dropdown="animation: uk-animation-slide-left-small; duration: 1000" >
                        <ul class="uk-nav uk-navbar-dropdown-nav">
                            <li class="uk-active"><a href="<?php echo $filePath;?>about" style="color:#000;">WHAT WE DO</a></li>
                            <li class="uk-active"><a href="<?php echo $filePath;?>csr" style="color:#000;">COMMUNITY</a></li>
                            <li class="uk-active"><a href="<?php echo $filePath;?>contactus" style="color:#000;">CONTACT US</a></li>
                        </ul>
                    
                    </div>
                    
                
                <li class="uk-active"><a class="<?php if($currentPage =='skill'){echo 'active_page';}?>" href="<?php echo $filePath;?>skill" style="color:#000;">Skills</a></li>
                        
                
                <div class="sub-togle <?php if($currentPage =='service'){echo 'active_page';}?>">
                <li><a  href="<?php echo $filePath;?>service" style="text-decoration: none; color:#000;">Services</a></li></div>
                    <div class="sub-menu-container uk-margin-remove-top uk-padding-remove-bottom" 
                    uk-dropdown="animation: uk-animation-slide-left-small; duration: 1000" >
                        <ul class="uk-nav uk-navbar-dropdown-nav">
                            <li class="uk-active"><a href="<?php echo $filePath;?>DCX" style="color:#000;">DCX</a></li>
                            <li class="uk-active"><a href="<?php echo $filePath;?>product" style="color:#000;">Product Engineering</a></li>
                            <li class="uk-active"><a href="<?php echo $filePath;?>consulting" style="color:#000;">Consulting</a></li>
                        </ul>
                    
                    </div>
                
               <li class="uk-active "><a style="color:#000;" class="<?php if($currentPage =='resource'){echo 'active_page';}?>" href="<?php echo $filePath;?>resource">Resource</a></li>
               
                <li class="uk-active"><a style="color:#000;" class="<?php if($currentPage =='career'){echo 'active_page';}?>"  href="<?php echo $filePath;?>careers">Careers</a></li>
                
            </ul>    

        </div>
    </div> 
    
<!--mobile nav end-->

    <script src="<?php echo $filePath;?>js/cssrelpreload.js"></script>
    <script src="<?php echo $filePath;?>js/modernizr-custom.js"></script>
    <script src="<?php echo $filePath;?>js/responsivelylazy.min.js"></script>
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


   
    
