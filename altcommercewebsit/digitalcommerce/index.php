<?php
    $pageTitle='Services-Digital Commerce with ALT Commerce';
    $pageDescription ="Customer satisfaction is our motto and we strive to provide the best solution to our clients.";
    $currentPage = 'service';    
    include_once '../header.php';
?>

<div class="uk-child-width-1-1" uk-grid>
    <div class="uk-h2 uk-text-center uk-text-bold uk-margin-medium-top services_mainheading">Digital Commerce</div>
    <p class="uk-text-center services_mainpara">Demand of time, customers and businesses.</p>
</div>

    <div class=" uk-grid uk-background-muted uk-grid-collapse uk-child-width-expand@s  uk-text-left uk-margin-large-top" uk-grid>
    
        <div>
        </div>
        <div>
            <div class="uk-padding uk-height-medium ">
                <div class="uk-h3">About Us</div> 
                <div class="uk-display-inline-block" uk-scrollspy="cls: uk-animation-slide-left-medium;">
                    <ul class="uk-list text">
                        <li><a href="<?php echo $filePath;?>about">What We Do</a></li>
                        <li><a href="<?php echo $filePath;?>csr">Community</a></li>
                        <li><a href="<?php echo $filePath;?>contactus">Contact Us</a></li>
                    </ul>
                </div>    
            </div>
        </div>
        <div>
            <div class="uk-padding uk-height-medium ">
                <div class="uk-h3">Services</div>
                <div class="uk-display-inline-block" uk-scrollspy="cls: uk-animation-slide-left-medium;">
                    <ul class="uk-list text ">
                        <li class=""><a href="<?php echo $filePath;?>DCX">DCX</a></li>
                        <li><a href="<?php echo $filePath;?>product">Product Engineering</a></li>
                        <li><a href="<?php echo $filePath;?>consulting">Consulting</a></li>
                    </ul>
                </div>
            </div>

        </div>
        <div>
            <div class=" uk-padding uk-height-medium ">
            <div class="uk-h3">Company</div> 
            </div>
        </div>
        <div>
            <div class="uk-padding uk-height-medium ">
                <div class="uk-h3">Contact Us</div> 
                <div class="uk-width-expand@s uk-text-left uk-flex  text" uk-scrollspy="cls: uk-animation-fade;">
                <div class="contact_box "><span uk-icon="receiver"></span>&nbsp;Call Us:</br>
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
       <div>
       </div>
    </div>    


<div class="uk-container-fluid uk-background-muted uk-grid-collapse uk-child-width-expand@s" uk-grid>
    <div class=" uk-text-center uk-padding uk-margin-small"><span class="uk-text-capitalize ">Copyrights © <script>document.write(new Date().getFullYear())</script> All Rights Reserved by <span class="uk-text-bold">ALT Commerce Pvt. Ltd.</span></div>
        <div class=" uk-padding uk-text-center uk-link-text">
                <a class="uk-icon-button uk-margin-small-right uk-text-secondary" href="https://www.facebook.com/altcommerce?_rdr=p" uk-icon="facebook" aria-label="Facebook" target="_blank" rel="noopener"></a>
                <a class="uk-icon-button uk-margin-small-right uk-text-secondary" href="https://twitter.com/altcommerce" uk-icon="twitter" aria-label="Twitter" target="_blank" rel="noopener"></a>
                <a  class="uk-icon-button uk-margin-small-right uk-text-secondary" href="https://www.linkedin.com/company/alt-commerce" uk-icon="linkedin" aria-label="LinkedIn" target="_blank" rel="noopener"></a>
                <a  class="uk-text-secondary uk-icon-button uk-margin-small-right" href="mailto:info@altcommerce.com" uk-icon="mail" aria-label="Mail" target="_blank" rel="noopener"></a>
        </div>    
</div>
<?php
include_once "../footer.php";
?> 
</body>

</html>