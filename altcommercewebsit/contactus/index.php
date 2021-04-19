<?php
    $pageTitle= 'Contact-Digital Commerce with ALT Digital Technologies';
    $pageDescription = 'At ALT Digital Technologies, Our goal is to deliver solutions that exactly meet the business objectives of our clients. We look forward to learning how we can help you.';
    $currentPage = 'about';
    include_once "../header.php";
    // include_once "../form.php"; 
    
?>

<div class="banner uk-position-relative  uk-light" tabindex="-1" uk-slideshow="ratio: 7:3; animation: push">
    <ul class="uk-slideshow-items uk-height-medium">
        <li>
        
            <img class="responsively-lazy about-ban" alt="contact"  src="<?php echo $filePath;?>images/banner/contact.jpg"
                data-srcset="<?php echo $filePath;?>images/banner/contact.jpg 400w, <?php echo $filePath;?>images/banner/contact.webp 400w, 
                <?php echo $filePath;?>images/banner/contact.jpg 600w, <?php echo $filePath;?>images/banner/contact.webp 600w,
                <?php echo $filePath;?>images/banner/contact.jpg 1000w <?php echo $filePath;?>images/banner/contact.webp 1000w" 
                srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" uk-cover />
            <div class="caption-text uk-position-cover uk-text-center uk-light">
            <div class="text-middle">
                <h1 class="main_heading uk-card-title slider-title" style="color:white !important; font-size:53 !important;">Get in Touch</h1>
                <p class="sub_para" >“ We do look forward to keeping in touch with you guys, because we'll always be connected in people's mind”</p>
                <p class="uk-text-center uk-margin-remove-top uk-margin-remove-bottom" style="color:white; font-size: 21px;">- Barry Zito</p>
           </div>
            </div>
        </li>
    </ul>
</div>  
<!--contact us start-->
<div class="uk-container uk-margin uk-margin-large-bottom uk-margin-large-top">
    <div class="uk-child-width-1-1@s uk-grid-small" uk-grid>    
        <div class="uk-child-width-1-2@m uk-grid-small uk-child-width-1-1@s uk-padding-small" uk-grid>
            <div class="uk-width-1-2@m">
                <div class="uk-margin-large-left">
                    <div class="uk-h2 uk-margin-small-top uk-text-bold">SEND US A MESSAGE</div>
                    <p class="">“At Alt Digital Technologies, our goal is to deliver solutions that exactly meet the business objectives of our clients. We look forward to learning how we can help you.”</p>
                
                    <div class="">
                        
                        <form class="uk-form-stacked" method="post" action="sendemail.php">
                            <div class="success"></div>
                            <div class="uk-margin-medium-top">
                                <label class="uk-form-label" for="name">NAME:<span  class="uk-text-danger">*</span></label>
                                <input style="border: 1px solid #ddd;border-radius: 4px;" class="uk-input uk-margin-small-bottom uk-padding-small"  placeholder="Your name" type="text"  name="name" >
                               
                            </div>
                            <div class="uk-margin-medium-top">
                                <label class="uk-form-label" for="email">EMAIL ADDRESS:<span class="uk-text-danger">*</span></label>
                                <input style="border: 1px solid #ddd;border-radius: 4px;" class="uk-input uk-padding-small uk-margin-small-bottom" placeholder="your e-mail"  type="email"   name="email" >
                                
                            </div>
                            <div class="uk-margin-medium-top">
                                <label class="uk-form-label" for="subject">SUBJECT:<span class="uk-text-danger">*</span></label>
                                <input style="border: 1px solid #ddd;border-radius: 4px;" class="uk-input uk-margin-small-bottom uk-padding-small" placeholder="subject"  type="text"   name="subject">
                                
                            </div>
                            <div class="uk-margin-medium-top">
                                <label class="uk-form-label" for="message">MESSAGE:<span class="uk-text-danger">*</span></label>
                                <textarea style="border: 1px solid #ddd;border-radius: 4px;" class="uk-textarea" name="message" rows="5"  type="text" placeholder="Message"></textarea>
                            </div>
                            
                             <div class="uk-margin-medium-top">
                                 <div class="g-recaptcha" data-sitekey="6Lc_z_wUAAAAADNo5AEbwi-a9amCkk2RqsMLC9Yb" ></div>
                            </div>
                           
                                <div class="uk-margin-medium-top"> 
                                <button class="uk-button uk-button-default form_submit"  type= "submit" value="send a mail" name="submit" >Submit</button>
                                
                            </div>    
                            
                        </form>
                    </div>  
                </div>  
            </div>
                <div class="uk-width-1-2@m">
                    <div class="uk-text-center">
                        <div class="uk-h2  uk-margin-small-top uk-text-bold"><span style="color:#ff7600;"> Our</span>&nbsp;Office</div>
                        <div class="uk-inline">
                            <div class="case_card uk-card uk-card-default uk-margin uk-card-hover uk-transition-toggle" tabindex="0" >
                            
                                <!-- <img class="uk-transition-scale-up" src="<?php echo $filePath;?>images/noida.jpg" alt="Noida Office" style="opacity: 0.9; width: 300px; height: 222px;">  -->
                                <img class="uk-transition-scale-up responsively-lazy" alt="Noida Office" width="300"  style="opacity:0.9; height:222px;"
                                     src="<?php echo $filePath;?>images/noida.jpg"
                                    data-srcset="<?php echo $filePath;?>images/noida.jpg 400w, <?php echo $filePath;?>images/noida.webp 400w, 
                                    <?php echo $filePath;?>images/noida.jpg 600w, <?php echo $filePath;?>images/noida.webp 600w,
                                    <?php echo $filePath;?>images/noida.jpg 1000w <?php echo $filePath;?>images/noida.webp 1000w" 
                                    srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" />
                                <div class="uk-overlay uk-position-center"><button type="button" class="uk-button uk-button-text" ><a  class="cases_btnlink" href="https://goo.gl/maps/yn6EXoLCaQzXEMEY9" style="color:white; text-decoration:none;" target="_blank">CORPORATE OFFICE </a></button>
                            </div>
             
                        </div>
                    </div>
                    <div class="uk-inline">

                        <div class="case_card uk-card uk-card-default uk-margin uk-card-hover uk-transition-toggle" tabindex="0" >
                        
                             <!-- <img class="uk-transition-scale-up" src="<?php echo $filePath;?>images/Bangalore.jpg" alt="Banglore office" style="opacity: 0.9; width: 300px; height: 222px;">  -->
                            <img class="uk-transition-scale-up responsively-lazy" alt="Banglore office" width="300" height="222" style="opacity:0.9"
                                     src="<?php echo $filePath;?>images/Bangalore.jpg"
                                    data-srcset="<?php echo $filePath;?>images/Bangalore.jpg 400w, <?php echo $filePath;?>images/Bangalore.webp 400w, 
                                    <?php echo $filePath;?>images/Bangalore.jpg 600w, <?php echo $filePath;?>images/Bangalore.webp 600w,
                                    <?php echo $filePath;?>images/Bangalore.jpg 1000w <?php echo $filePath;?>images/Bangalore.webp 1000w" 
                                    srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" />
                            <div class="uk-overlay uk-position-center"><button type="button" class="uk-button uk-button-text" ><a  class="cases_btnlink" href="https://goo.gl/maps/ycdkDSCKBfi7pqc76" style="color:white;text-decoration:none;" target="_blank">BANGALORE OFFICE </a></button>
                            </div>
            
                        </div>
                    </div>
                    
                    <div class="uk-text-center uk-margin-top">
                            <span uk-icon="receiver" class="uk-icon">
                            <svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="receiver"><path fill="none" stroke="#000" stroke-width="1.01" d="M6.189,13.611C8.134,15.525 11.097,18.239 13.867,18.257C16.47,18.275 18.2,16.241 18.2,16.241L14.509,12.551L11.539,13.639L6.189,8.29L7.313,5.355L3.76,1.8C3.76,1.8 1.732,3.537 1.7,6.092C1.667,8.809 4.347,11.738 6.189,13.611"></path></svg></span>&nbsp;Call Us:<br>
                            <div class="uk-text-bold uk-text-secondary contact_text" style="color:#ff7600;">
                            +91-120-4226757<br><br>
                             </div>
                        
                             <span uk-icon="mail" class="uk-icon"><svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="mail"><polyline fill="none" stroke="#000" points="1.4,6.5 10,11 18.6,6.5"></polyline><path d="M 1,4 1,16 19,16 19,4 1,4 Z M 18,15 2,15 2,5 18,5 18,15 Z"></path></svg></span>&nbsp;Email Us:<br> 
                           <div class="uk-text-bold uk-text-secondary contact_text">
                            info@altdigital.tech</div>
                    </div> 
                </div>
            </div>
        </div>
        
    </div>
</div>

<!--contact us end -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    
$( document ).ready(function() {
    $(".uk-form-stacked").validate({
			rules: {
				name: {
					required: true,
					minlength: 2
				},
				
				email: {
					required: true,
					email: true
				},
				
				subject: {
					required: true
				},
				
				message: {
				    required: true
				},
				agree: "required"
			},
			messages: {
			
				name: {
					required: "Please enter a name",
					minlength: "Your name must consist of at least 2 characters"
				},
				subject: {
					required: "Please enter a subject"
				},
			    message: {
					required: "Please enter a message"
				},
				email: "Please enter a valid email address"
			},
			submitHandler: function(form) {
                $.ajax({
                    type: 'POST',
                    url: 'sendemail.php',
                    data: $('.uk-form-stacked').serialize(),
                    dataType: 'json',
                    contentType: false,
                    cache: false,
                    processData:false,
                    success: function(response){ //console.log(response);
                        $("input,textarea").val("");
                        var successMsg='<div class="uk-margin-medium-top remove-success"><label class="uk-form-label" for="name" style="color: #008000;">'+response.message+'<span class="uk-text-danger">*</span></label></div>';
                        if(response.message){
                            $(".success").html(successMsg);
                            $('html, body').animate({ scrollTop: $(".uk-text-bold").offset().top }, 1500);
                            setTimeout(function(){$(".success").html("");}, 5000);
                            
                        }
                        
                        
                    }
                });
            }
		});
		
		
});


</script>

<?php
include_once "../footer.php"
?>
</body>
</html>
