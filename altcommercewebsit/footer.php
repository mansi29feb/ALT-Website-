
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

    <!--footer-->
    <!--mobile nav-->
    
    <div id="offcanvas-usage" uk-offcanvas>
        <div class="uk-offcanvas-bar menu-list">

            <button class="uk-offcanvas-close " type="button" uk-close></button>

            <h3>Menu</h3>

            
            <a href="<?php echo $filePath;?>">Home</a>
            <br>
            
                <button class="uk-button sub-togle">About Us</button>
                    <div class="drop-nav" uk-dropdown="mode: click" >
                      <ul class="uk-nav uk-navbar-dropdown-nav">
                        <li class="uk-active"><a href="<?php echo $filePath;?>about">WHAT WE DO</a></li>
                        <li class="uk-active"><a href="<?php echo $filePath;?>csr">COMMUNITY</a></li>
                        <li class="uk-active"><a href="<?php echo $filePath;?>contactus">CONTACT US</a></li>
                     </ul>
                  
                </div>
                
            
            <br>
            <a href="<?php echo $filePath;?>skill">Skills</a>
            <br>           
            <a href="<?php echo $filePath;?>service">Services</a>
            <br>
            <a href="<?php echo $filePath;?>resource">Resource</a>
            <br>
            <a href="<?php echo $filePath;?>careers">Careers</a>
            <br>

        </div>
    </div>
    <!--mobile nav end-->
    <script src="fontfaceobserver.standalone.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> -->
    <script  src="<?php echo $filePath;?>js/count.min.js" ></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lazysizes/5.1.0/lazysizes.min.js"></script>
    <script src="<?php echo $filePath;?>js/uikit.min.js" defer></script>
    <script src="<?php echo $filePath;?>js/uikit-icons.min.js" defer></script>
    <script src="<?php echo $filePath;?>js/modernizr-custom.js"></script>
<script>

        // var fPoppins = new FontFaceObserver("Poppins");
        // fPoppins.load().then(function () {
        //     var x = document.getElementsByClassName("mySpecialContent");
        //     for (i = 0; i < x.length; i++) {
        //     x[i].className += " fonts-loaded";
        //     }
        //     document.getElementById("myElement").className += " fonts-loaded";
        // });

    if ('loading' in HTMLImageElement.prototype) {
        const images = document.querySelectorAll("img.lazy");
        images.forEach(img => {
            img.src = img.dataset.src;
        });
    } else {
        // Dynamically import the LazySizes library
        let script = document.createElement("script");
        
        script.async = true;
        script.src =
        "https://cdnjs.cloudflare.com/ajax/libs/lazysizes/5.1.0/lazysizes.min.js";
        document.body.appendChild(script);
    }

    Modernizr.on('webp', function (result) {
        if (result) {
              //suported
              }
         else {
             //not-supported
              }
         });
        
</script> 
   
</body>

</html>
