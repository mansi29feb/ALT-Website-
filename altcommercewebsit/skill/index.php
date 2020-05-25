<?php
$meta7 = 'The technology has made our lives better and so our best skills and services we are rendering.';
$currentPage = 'skill';
     include_once '../header.php';
?>



    <div class="uk-container uk-margin">
        <div class="uk-h2 uk-text-center uk-text-bold services_mainheading">Our Technical Expertise</div>
        <p class="uk-text-center services_mainpara"> Rendering the best services with the updated Technologies.
        </p>
        <div class=""> <img class=" uk-align-center" data-src="<?php echo $filePath;?>images/skill.jpg" alt="Skills tree" width="800" height="800" uk-img uk-scrollspy="cls: uk-animation-slide-bottom-small"></div>
       
    <div class="uk-text-center@s uk-text-bold services_subheading ">Our Skills</div>
    
    <div>
        <div class="uk-margin" uk-filter="target:.js-filter">

            <ul class=" uk-subnav uk-margin-medium-bottom uk-padding-small">
                <li class="" uk-filter-control><button class="uk-button  skills_btn uk-margin-small-right uk-margin-small-top active">All Skills</button></li>
                <li uk-filter-control=".server"><button class="uk-button skills_btn uk-margin-small-right uk-margin-small-top">APPLICATION SERVERS</button>
                </li>
                <li uk-filter-control=".cloud"><button class="uk-button skills_btn uk-margin-small-right uk-margin-small-top"> CLOUD PLATFORMS</button>
                </li>
                <li uk-filter-control=".database"><button class="uk-button skills_btn  uk-margin-small-right uk-margin-small-top ">DATABASE</button>
                </li>
                <li uk-filter-control=".devops"><button class="uk-button skills_btn uk-margin-small-right uk-margin-small-top">Development & Operations</button>
                </li>
                <li  uk-filter-control=".commerce"><button class="uk-button skills_btn  uk-margin-small-right uk-margin-small-top">Digital Commerce Platform</button>
                </li>
                <li  uk-filter-control=".hybrid"><button class="uk-button skills_btn  uk-margin-small-right uk-margin-small-top">Hybrid Mobile App Development</button>
                </li>
                <li uk-filter-control=".lang"><button class="uk-button skills_btn uk-margin-small-right uk-margin-small-top">LANGUAGES</button>
                </li>
                <li uk-filter-control=".micro"><button class="uk-button skills_btn uk-margin-small-right uk-margin-small-top">Microservices</button>
                </li>
                <li uk-filter-control=".payment"><button class="uk-button skills_btn uk-margin-small-right uk-margin-small-top">Payment Gateway</button>
                </li>
                <li uk-filter-control=".testing"><button class="uk-button skills_btn uk-margin-small-right uk-margin-small-top">QUALITY ENGINEERING</button>
                </li>
                <li uk-filter-control=".search"><button class="uk-button skills_btn uk-margin-small-right uk-margin-small-top">SEARCH</button>
                </li>
                <li uk-filter-control=".integration"><button class="uk-button skills_btn uk-margin-small-right uk-margin-small-top">Third Party integration</button>
                </li>
                <li uk-filter-control=".analytics"><button class="uk-button skills_btn uk-margin-small-right uk-margin-small-top">WEB ANALYTICS </button>
                </li>        
            </ul>
        
            
                <ul class="js-filter uk-child-width-1-1@s uk-child-width-1-3@m uk-text-center uk-grid-small" uk-grid uk-scrollspy="target: > li > .uk-card; cls:uk-animation-slide-bottom-medium; delay: 100;">
                    <li class="commerce">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-animation-toggle uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <!-- <img class="lazy uk-card"  data-src="<?php echo $filePath;?>images/skills-page/atg.png" alt="atg logo" height="250" width="250" uk-img> -->
                                    <img class="responsively-lazy uk-card" alt="ATG logo" width="250" height="250" src="<?php echo $filePath;?>images/skills-page/atg.png"
                                    data-srcset="<?php echo $filePath;?>images/skills-page/atg.png 400w, <?php echo $filePath;?>images/skills-page/atg.webp 400w, 
                                    <?php echo $filePath;?>images/skills-page/atg.png 600w, <?php echo $filePath;?>images/skills-page/atg.webp 600w,
                                    <?php echo $filePath;?>images/skills-page/atg.png 1000w <?php echo $filePath;?>images/skills-page/atg.webp 1000w" 
                                    srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" />
                                </div>
                                    
                            </div>
                                                     
    
                            
                        </div>
                    </li>

                    <li class="lang">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <!-- <img class="lazy uk-card " data-src="<?php echo $filePath;?>images/skills-page/java.png" alt="java logo" height="100" width="100" uk-img> -->
                                    <img class="responsively-lazy uk-card" alt="Java logo" width="100" height="100" src="<?php echo $filePath;?>images/skills-page/java.png"
                                    data-srcset="<?php echo $filePath;?>images/skills-page/java.png 400w, <?php echo $filePath;?>images/skills-page/java.webp 400w, 
                                    <?php echo $filePath;?>images/skills-page/java.png 600w, <?php echo $filePath;?>images/skills-page/java.webp 600w,
                                    <?php echo $filePath;?>images/skills-page/java.png 1000w <?php echo $filePath;?>images/skills-page/java.webp 1000w" 
                                    srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" />
                                </div>
                                    
                            </div>

                        </div>
                    </li>

                    <li class="payment">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <!-- <img class="lazy uk-card  " data-src="<?php echo $filePath;?>images/skills-page/paypal.png" alt="paypal logo" height="200" width="200" uk-img > -->
                                    <img class="responsively-lazy uk-card" alt="Paypal logo" width="200" height="200" src="<?php echo $filePath;?>images/skills-page/paypal.png"
                                    data-srcset="<?php echo $filePath;?>images/skills-page/paypal.png 400w, <?php echo $filePath;?>images/skills-page/paypal.webp 400w, 
                                    <?php echo $filePath;?>images/skills-page/paypal.png 600w, <?php echo $filePath;?>images/skills-page/paypal.webp 600w,
                                    <?php echo $filePath;?>images/skills-page/paypal.png 1000w <?php echo $filePath;?>images/skills-page/paypal.webp 1000w" 
                                    srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" />
                                </div>
                                    
                            </div>
                        </div> 
                        
                    </li>

                    <li class="server">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <!-- <img class="lazy uk-card" data-src="<?php echo $filePath;?>images/skills-page/tomcat.jpg" alt="tomcat logo" height="300" width="300" uk-img> -->
                                    <img class="responsively-lazy uk-card" alt="Tomcat logo" width="300" height="300" src="<?php echo $filePath;?>images/skills-page/tomcat.jpg"
                                    data-srcset="<?php echo $filePath;?>images/skills-page/tomcat.jpg 400w, <?php echo $filePath;?>images/skills-page/tomcat.webp 400w, 
                                    <?php echo $filePath;?>images/skills-page/tomcat.jpg 600w, <?php echo $filePath;?>images/skills-page/tomcat.webp 600w,
                                    <?php echo $filePath;?>images/skills-page/tomcat.jpg 1000w <?php echo $filePath;?>images/skills-page/tomcat.webp 1000w" 
                                    srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" />
                                </div>
                                    
                            </div>

                        </div>
                    </li>

                    <li class="integration">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <!-- <img class=" lazy uk-card  " data-src="<?php echo $filePath;?>images/skills-page/usps.svg" alt="usps logo" height="200" width="200" uk-img > -->
                                    <img class="responsively-lazy uk-card" alt="USPS logo" width="200" height="200" src="<?php echo $filePath;?>images/skills-page/usps.svg"
                                    data-srcset="<?php echo $filePath;?>images/skills-page/usps.svg 400w, <?php echo $filePath;?>images/skills-page/tomcat.webp 400w, 
                                    <?php echo $filePath;?>images/skills-page/usps.svg 600w, <?php echo $filePath;?>images/skills-page/usps.webp 600w,
                                    <?php echo $filePath;?>images/skills-page/usps.svg 1000w <?php echo $filePath;?>images/skills-page/usps.webp 1000w" 
                                    srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" />
                                </div>
                                    
                            </div>
                        </div> 
                        
                    </li>

                    <li class="server">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <!-- <img class="lazy uk-card" data-src="<?php echo $filePath;?>images/skills-page/websphere.png" alt="websphere logo" height="250" width="250" uk-img> -->
                                    <img class="responsively-lazy uk-card" alt="Websphere logo" width="250" height="250" src="<?php echo $filePath;?>images/skills-page/websphere.png"
                                    data-srcset="<?php echo $filePath;?>images/skills-page/websphere.png 400w, <?php echo $filePath;?>images/skills-page/tomcat.webp 400w, 
                                    <?php echo $filePath;?>images/skills-page/websphere.png 600w, <?php echo $filePath;?>images/skills-page/websphere.webp 600w,
                                    <?php echo $filePath;?>images/skills-page/websphere.png 1000w <?php echo $filePath;?>images/skills-page/websphere.webp 1000w" 
                                    srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /> 
                                </div>
                                    
                            </div>

                        </div>
                    </li>

                    <li class="testing">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <!-- <img class="lazy uk-card" data-src="<?php echo $filePath;?>images/skills-page/postman.png" alt="postman logo" height="250" width="250" uk-img> -->
                                    <img class="responsively-lazy uk-card" alt="Postman logo" width="250" height="250" src="<?php echo $filePath;?>images/skills-page/postman.png"
                                    data-srcset="<?php echo $filePath;?>images/skills-page/postman.png 400w, <?php echo $filePath;?>images/skills-page/postman.webp 400w, 
                                    <?php echo $filePath;?>images/skills-page/postman.png 600w, <?php echo $filePath;?>images/skills-page/postman.webp 600w,
                                    <?php echo $filePath;?>images/skills-page/postman.png 1000w <?php echo $filePath;?>images/skills-page/postman.webp 1000w" 
                                    srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /> 
                                </div>
                                    
                            </div>
    
                        </div>
                    </li>

                    <li class="hybrid">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <!-- <img class="lazy uk-card" data-src="<?php echo $filePath;?>images/skills-page/ionic.png" alt="ionic logo" height="200" width="200" uk-img> -->
                                    <img class="responsively-lazy uk-card" alt="Ionic logo" width="200" height="200" src="<?php echo $filePath;?>images/skills-page/ionic.png"
                                    data-srcset="<?php echo $filePath;?>images/skills-page/ionic.png 400w, <?php echo $filePath;?>images/skills-page/ionic.webp 400w, 
                                    <?php echo $filePath;?>images/skills-page/ionic.png 600w, <?php echo $filePath;?>images/skills-page/ionic.webp 600w,
                                    <?php echo $filePath;?>images/skills-page/ionic.png 1000w <?php echo $filePath;?>images/skills-page/ionic.webp 1000w" 
                                    srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" />
                                </div>
                                    
                            </div>
                        </div>
                    </li>

                    <li class="analytics">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <!-- <img class="lazy uk-card" data-src="<?php echo $filePath;?>images/skills-page/google_analytics.png" alt="google analytics logo" height="300" width="300" uk-img> -->
                                    <img class="responsively-lazy uk-card" alt="google analytics logo" width="300" height="300" src="<?php echo $filePath;?>images/skills-page/google_analytics.png"
                                    data-srcset="<?php echo $filePath;?>images/skills-page/google_analytics.png 400w, <?php echo $filePath;?>images/skills-page/google_analytics.webp 400w, 
                                    <?php echo $filePath;?>images/skills-page/google_analytics.png 600w, <?php echo $filePath;?>images/skills-page/google_analytics.webp 600w,
                                    <?php echo $filePath;?>images/skills-page/google_analytics.png 1000w <?php echo $filePath;?>images/skills-page/google_analytics.webp 1000w" 
                                    srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" />
                                </div>
                                    
                            </div>
                        </div>
                    </li>

                    <li class="devops">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <!-- <img class="lazy uk-card" data-src="<?php echo $filePath;?>images/skills-page/Jenkins.jpg" alt="jenkins logo" height="200" width="200" uk-img> -->
                                    <img class="responsively-lazy uk-card" alt="Jenkins logo" width="200" height="200" src="<?php echo $filePath;?>images/skills-page/Jenkins.jpg"
                                    data-srcset="<?php echo $filePath;?>images/skills-page/Jenkins.jpg 400w, <?php echo $filePath;?>images/skills-page/Jenkins.webp 400w, 
                                    <?php echo $filePath;?>images/skills-page/Jenkins.jpg 600w, <?php echo $filePath;?>images/skills-page/Jenkins.webp 600w,
                                    <?php echo $filePath;?>images/skills-page/Jenkins.jpg 1000w <?php echo $filePath;?>images/skills-page/Jenkins.webp 1000w" 
                                    srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" />
                                </div>
                                    
                            </div>
                        </div>
                    </li>

                    <li class="integration">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <!-- <img class="lazy uk-card  " data-src="<?php echo $filePath;?>images/skills-page/taxware.png" alt="taxware logo" height="200" width="200" uk-img > -->
                                    <img class="responsively-lazy uk-card" alt="taxware logo" width="200" height="200" src="<?php echo $filePath;?>images/skills-page/taxware.png"
                                    data-srcset="<?php echo $filePath;?>images/skills-page/taxware.png 400w, <?php echo $filePath;?>images/skills-page/taxware.webp 400w, 
                                    <?php echo $filePath;?>images/skills-page/taxware.png 600w, <?php echo $filePath;?>images/skills-page/taxware.webp 600w,
                                    <?php echo $filePath;?>images/skills-page/taxware.png 1000w <?php echo $filePath;?>images/skills-page/taxware.webp 1000w" 
                                    srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" />
                                </div>
                                    
                            </div>
                        </div> 
                        
                    </li>

                    <li class="commerce">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <!-- <img class="lazy uk-card" data-src="<?php echo $filePath;?>images/skills-page/hybris.png" alt="hybris logo" height="200" width="200" uk-img> -->
                                    <img class="responsively-lazy uk-card" alt="hybris logo" width="200" height="200" src="<?php echo $filePath;?>images/skills-page/hybris.png"
                                    data-srcset="<?php echo $filePath;?>images/skills-page/hybris.png 400w, <?php echo $filePath;?>images/skills-page/hybris.webp 400w, 
                                    <?php echo $filePath;?>images/skills-page/hybris.png 600w, <?php echo $filePath;?>images/skills-page/hybris.webp 600w,
                                    <?php echo $filePath;?>images/skills-page/hybris.png 1000w <?php echo $filePath;?>images/skills-page/hybris.webp 1000w" 
                                    srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" />
                                </div>
                                    
                            </div>
                        </div>
                    </li>
                   
                    <li class="hybrid">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <!-- <img class="lazy uk-card" data-src="<?php echo $filePath;?>images/skills-page/react_native.png" alt="react native logo" height="150" width="150" uk-img> -->
                                    <img class="responsively-lazy uk-card" alt="react native logo" width="150" height="150" src="<?php echo $filePath;?>images/skills-page/react_native.png"
                                    data-srcset="<?php echo $filePath;?>images/skills-page/react_native.png 400w, <?php echo $filePath;?>images/skills-page/react_native.webp 400w, 
                                    <?php echo $filePath;?>images/skills-page/react_native.png 600w, <?php echo $filePath;?>images/skills-page/react_native.webp 600w,
                                    <?php echo $filePath;?>images/skills-page/react_native.png 1000w <?php echo $filePath;?>images/skills-page/react_native.webp 1000w" 
                                    srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" />
                                </div>
                                    
                            </div>
                        </div>
                    </li>

                    <li class="testing">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <!-- <img class="lazy uk-card" data-src="<?php echo $filePath;?>images/skills-page/selenium.png" alt="selenium logo" height="200" width="200" uk-img> -->
                                    <img class="responsively-lazy uk-card" alt="selenium logo" width="200" height="200" src="<?php echo $filePath;?>images/skills-page/selenium.png"
                                    data-srcset="<?php echo $filePath;?>images/skills-page/selenium.png 400w, <?php echo $filePath;?>images/skills-page/selenium.webp 400w, 
                                    <?php echo $filePath;?>images/skills-page/selenium.png 600w, <?php echo $filePath;?>images/skills-page/selenium.webp 600w,
                                    <?php echo $filePath;?>images/skills-page/selenium.png 1000w <?php echo $filePath;?>images/skills-page/selenium.webp 1000w" 
                                    srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" />
                                </div>
                                    
                            </div>


                        </div>
                    </li>

                    <li class="integration">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <!-- <img class="lazy uk-card  " data-src="<?php echo $filePath;?>images/skills-page/Experian.svg" alt="experian Logo" height="200" width="200" uk-img > -->
                                    <img class="responsively-lazy uk-card" alt="Experian logo" width="200" height="200" src="<?php echo $filePath;?>images/skills-page/Experian.svg"
                                    data-srcset="<?php echo $filePath;?>images/skills-page/Experian.svg 400w, <?php echo $filePath;?>images/skills-page/Experian.webp 400w, 
                                    <?php echo $filePath;?>images/skills-page/Experian.svg 600w, <?php echo $filePath;?>images/skills-page/Experian.webp 600w,
                                    <?php echo $filePath;?>images/skills-page/Experian.svg 1000w <?php echo $filePath;?>images/skills-page/Experian.webp 1000w" 
                                    srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" />
                                </div>
                                    
                            </div>
                        </div> 
                        
                    </li>

                    <li class="analytics">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <!-- <img class="lazy uk-card" data-src="<?php echo $filePath;?>images/skills-page/adobe-analytics.png" alt="adobe-analytics Logo" height="180" width="180" uk-img> -->
                                    <img class="responsively-lazy uk-card" alt="adobe-analytics logo" width="180" height="180" src="<?php echo $filePath;?>images/skills-page/adobe-analytics.png"
                                    data-srcset="<?php echo $filePath;?>images/skills-page/adobe-analytics.png 400w, <?php echo $filePath;?>images/skills-page/adobe-analytics.webp 400w, 
                                    <?php echo $filePath;?>images/skills-page/adobe-analytics.png 600w, <?php echo $filePath;?>images/skills-page/adobe-analytics.webp 600w,
                                    <?php echo $filePath;?>images/skills-page/adobe-analytics.png 1000w <?php echo $filePath;?>images/skills-page/adobe-analytics.webp 1000w" 
                                    srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" />
                                </div>
                                    
                            </div>
                        </div>
                    </li>

                    <li class="payment">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <!-- <img class="lazy uk-card  " data-src="<?php echo $filePath;?>images/skills-page/Vantive.png" alt="vantive Logo" height="200" width="200" uk-img > -->
                                    <img class="responsively-lazy uk-card" alt="vantive logo" width="180" height="180" src="<?php echo $filePath;?>images/skills-page/vantive.png"
                                    data-srcset="<?php echo $filePath;?>images/skills-page/vantive.png 400w, <?php echo $filePath;?>images/skills-page/vantive.webp 400w, 
                                    <?php echo $filePath;?>images/skills-page/vantive.png 600w, <?php echo $filePath;?>images/skills-page/vantive.webp 600w,
                                    <?php echo $filePath;?>images/skills-page/vantive.png 1000w <?php echo $filePath;?>images/skills-page/vantive.webp 1000w" 
                                    srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" />
                                </div>
                                    
                            </div>
                        </div> 
                        
                    </li>

                    <li class="cloud">
                        
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <!-- <img class="lazy uk-card" data-src="<?php echo $filePath;?>images/skills-page/Google_Cloud.svg" alt="google cloud Logo" height="250" width="250" uk-img> -->
                                    <img class="responsively-lazy uk-card" alt="google cloud logo" width="250" height="250" src="<?php echo $filePath;?>images/skills-page/Google_Cloud.svg"
                                    data-srcset="<?php echo $filePath;?>images/skills-page/Google_Cloud.svg 400w, <?php echo $filePath;?>images/skills-page/Google_Cloud.webp 400w, 
                                    <?php echo $filePath;?>images/skills-page/Google_Cloud.svg 600w, <?php echo $filePath;?>images/skills-page/Google_Cloud.webp 600w,
                                    <?php echo $filePath;?>images/skills-page/Google_Cloud.svg 1000w <?php echo $filePath;?>images/skills-page/Google_Cloud.webp 1000w" 
                                    srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" />
                                </div>
                                    
                            </div>

                        </div>
                    </li>

                    <li class="integration">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <!-- <img class=" lazy uk-card" data-src="<?php echo $filePath;?>images/skills-page/Zendesk.png" alt="zendesk Logo" height="180" width="180" uk-img > -->
                                    <img class="responsively-lazy uk-card" alt="Zendesk logo" width="180" height="180" src="<?php echo $filePath;?>images/skills-page/Zendesk.png"
                                    data-srcset="<?php echo $filePath;?>images/skills-page/Zendesk.png 400w, <?php echo $filePath;?>images/skills-page/Zendesk.webp 400w, 
                                    <?php echo $filePath;?>images/skills-page/Zendesk.png 600w, <?php echo $filePath;?>images/skills-page/Zendesk.webp 600w,
                                    <?php echo $filePath;?>images/skills-page/Zendesk.png 1000w <?php echo $filePath;?>images/skills-page/Zendesk.webp 1000w" 
                                    srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" />
                                </div>
                                    
                            </div>
                        </div> 
                        
                    </li>
                 
                
                    <li class="devops">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <!-- <img class="lazy uk-card" data-src="<?php echo $filePath;?>images/skills-page/maven.png" alt="maven Logo" height="200" width="200" uk-img> -->
                                    <img class="responsively-lazy uk-card" alt="maven logo" width="200" height="200" src="<?php echo $filePath;?>images/skills-page/maven.png"
                                    data-srcset="<?php echo $filePath;?>images/skills-page/maven.png 400w, <?php echo $filePath;?>images/skills-page/maven.webp 400w, 
                                    <?php echo $filePath;?>images/skills-page/maven.png 600w, <?php echo $filePath;?>images/skills-page/maven.webp 600w,
                                    <?php echo $filePath;?>images/skills-page/maven.png 1000w <?php echo $filePath;?>images/skills-page/maven.webp 1000w" 
                                    srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" />
                                </div>
                                    
                            </div>
                        </div>
                    </li>

                    <li class="commerce">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <!-- <img class="lazy uk-card" data-src="<?php echo $filePath;?>images/skills-page/magento.png" alt="magento logo" height="200" width="200" uk-img> -->
                                    <img class="responsively-lazy uk-card" alt="magento logo" width="200" height="200" src="<?php echo $filePath;?>images/skills-page/magento.png"
                                    data-srcset="<?php echo $filePath;?>images/skills-page/magento.png 400w, <?php echo $filePath;?>images/skills-page/magento.webp 400w, 
                                    <?php echo $filePath;?>images/skills-page/magento.png 600w, <?php echo $filePath;?>images/skills-page/magento.webp 600w,
                                    <?php echo $filePath;?>images/skills-page/magento.png 1000w <?php echo $filePath;?>images/skills-page/magento.webp 1000w" 
                                    srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" />
                                </div>
                                    
                            </div>

                        </div>
                    </li>

                    <li class="cloud">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <!-- <img class="lazy uk-card" data-src="<?php echo $filePath;?>images/skills-page/aws.svg" alt="aws Logo" height="150" width="150" uk-img> -->
                                    <img class="responsively-lazy uk-card" alt="AWS logo" width="150" height="150" src="<?php echo $filePath;?>images/skills-page/aws.svg"
                                    data-srcset="<?php echo $filePath;?>images/skills-page/aws.svg 400w, <?php echo $filePath;?>images/skills-page/aws.webp 400w, 
                                    <?php echo $filePath;?>images/skills-page/aws.svg 600w, <?php echo $filePath;?>images/skills-page/aws.webp 600w,
                                    <?php echo $filePath;?>images/skills-page/aws.svg 1000w <?php echo $filePath;?>images/skills-page/aws.webp 1000w" 
                                    srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" />
                                </div>
                                    
                            </div>

                        </div>
                    </li>
                    
                    <li class="database">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <!-- <img class="lazy uk-card" data-src="<?php echo $filePath;?>images/skills-page/MSSQL.png" alt="mssql Logo" height="300" width="300" uk-img> -->
                                    <img class="responsively-lazy uk-card" alt="MSSQL logo" width="300" height="300" src="<?php echo $filePath;?>images/skills-page/MSSQL.png"
                                    data-srcset="<?php echo $filePath;?>images/skills-page/MSSQL.png 400w, <?php echo $filePath;?>images/skills-page/MSSQL.webp 400w, 
                                    <?php echo $filePath;?>images/skills-page/MSSQL.png 600w, <?php echo $filePath;?>images/skills-page/MSSQL.webp 600w,
                                    <?php echo $filePath;?>images/skills-page/MSSQL.png 1000w <?php echo $filePath;?>images/skills-page/MSSQL.webp 1000w" 
                                    srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" />
                                </div>
                                    
                            </div>

                        </div>
                    </li>
                    
                    <li class="micro">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <!-- <img class="lazy uk-card" data-src="<?php echo $filePath;?>images/skills-page/micronaut.svg" alt="micronaut Logo" height="300" width="300" uk-img> -->
                                    <img class="responsively-lazy uk-card" alt="micronaut logo" width="300" height="300" src="<?php echo $filePath;?>images/skills-page/micronaut.svg"
                                    data-srcset="<?php echo $filePath;?>images/skills-page/micronaut.svg 400w, <?php echo $filePath;?>images/skills-page/micronaut.webp 400w, 
                                    <?php echo $filePath;?>images/skills-page/micronaut.svg 600w, <?php echo $filePath;?>images/skills-page/micronaut.webp 600w,
                                    <?php echo $filePath;?>images/skills-page/micronaut.svg 1000w <?php echo $filePath;?>images/skills-page/micronaut.webp 1000w" 
                                    srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" />
                                </div>
                                    
                            </div>

                        </div>
                    </li>

                    <li class="commerce">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <!-- <img class="lazy uk-card" data-src="<?php echo $filePath;?>images/skills-page/commercetools.png" alt="commercetools Logo" height="250" width="250" uk-img> -->
                                    <img class="responsively-lazy uk-card" alt="commercetools logo" width="250" height="250" src="<?php echo $filePath;?>images/skills-page/commercetools.png"
                                    data-srcset="<?php echo $filePath;?>images/skills-page/commercetools.png 400w, <?php echo $filePath;?>images/skills-page/commercetools.webp 400w, 
                                    <?php echo $filePath;?>images/skills-page/commercetools.png 600w, <?php echo $filePath;?>images/skills-page/commercetools.webp 600w,
                                    <?php echo $filePath;?>images/skills-page/commercetools.png 1000w <?php echo $filePath;?>images/skills-page/commercetools.webp 1000w" 
                                    srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" />
                                </div>
                                    
                            </div>

                        </div>
                    </li>

                    <li class="testing">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <!-- <img class="lazy uk-card" data-src="<?php echo $filePath;?>images/skills-page/cucumber.png" alt="cucumber Logo" height="200" width="200" uk-img> -->
                                    <img class="responsively-lazy uk-card" alt="cucumber logo" width="200" height="200" src="<?php echo $filePath;?>images/skills-page/cucumber.png"
                                    data-srcset="<?php echo $filePath;?>images/skills-page/cucumber.png 400w, <?php echo $filePath;?>images/skills-page/cucumber.webp 400w, 
                                    <?php echo $filePath;?>images/skills-page/cucumber.png 600w, <?php echo $filePath;?>images/skills-page/cucumber.webp 600w,
                                    <?php echo $filePath;?>images/skills-page/cucumber.png 1000w <?php echo $filePath;?>images/skills-page/cucumber.webp 1000w" 
                                    srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" />
                                </div>
                                    
                            </div>

                        </div>
                    </li>

                    <li class="analytics">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <!-- <img class="lazy uk-card" data-src="<?php echo $filePath;?>images/skills-page/Omniture.png" alt="omniture Logo" height="200" width="200" uk-img> -->
                                    <img class="responsively-lazy uk-card" alt="Omniture logo" width="200" height="200" src="<?php echo $filePath;?>images/skills-page/Omniture.png"
                                    data-srcset="<?php echo $filePath;?>images/skills-page/Omniture.png 400w, <?php echo $filePath;?>images/skills-page/Omniture.webp 400w, 
                                    <?php echo $filePath;?>images/skills-page/Omniture.png 600w, <?php echo $filePath;?>images/skills-page/Omniture.webp 600w,
                                    <?php echo $filePath;?>images/skills-page/Omniture.png 1000w <?php echo $filePath;?>images/skills-page/Omniture.webp 1000w" 
                                    srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" />
                                </div>
                                    
                            </div>
                        </div>
                    </li>

                    <li class="cloud">
                        
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <!-- <img class="lazy uk-card" data-src="<?php echo $filePath;?>images/skills-page/Azure.svg" alt="azure Logo" height="200" width="200" uk-img> -->
                                    <img class="responsively-lazy uk-card" alt="Azure logo" width="200" height="200" src="<?php echo $filePath;?>images/skills-page/Azure.svg"
                                    data-srcset="<?php echo $filePath;?>images/skills-page/Azure.svg 400w, <?php echo $filePath;?>images/skills-page/Azure.webp 400w, 
                                    <?php echo $filePath;?>images/skills-page/Azure.svg 600w, <?php echo $filePath;?>images/skills-page/Azure.webp 600w,
                                    <?php echo $filePath;?>images/skills-page/Azure.svg 1000w <?php echo $filePath;?>images/skills-page/Azure.webp 1000w" 
                                    srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" />
                                </div>
                                    
                            </div>

                        </div>
                    </li>

                    <li class="micro">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <!-- <img class="lazy uk-card  " data-src="<?php echo $filePath;?>images/skills-page/spring.svg" alt="spring logo" height="200" width="200" uk-img> -->
                                    <img class="responsively-lazy uk-card" alt="spring logo" width="200" height="200" src="<?php echo $filePath;?>images/skills-page/spring.svg"
                                    data-srcset="<?php echo $filePath;?>images/skills-page/spring.svg 400w, <?php echo $filePath;?>images/skills-page/spring.webp 400w, 
                                    <?php echo $filePath;?>images/skills-page/spring.svg 600w, <?php echo $filePath;?>images/skills-page/spring.webp 600w,
                                    <?php echo $filePath;?>images/skills-page/spring.svg 1000w <?php echo $filePath;?>images/skills-page/spring.webp 1000w" 
                                    srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" />
                                </div>
                                    
                            </div>

                        </div>
                    </li>

                    <li class="commerce">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <!-- <img class="lazy uk-card" data-src="<?php echo $filePath;?>images/skills-page/salesforce.svg" alt="salesforce logo" height="200" width="200" uk-img> -->
                                    <img class="responsively-lazy uk-card" alt="salesforce logo" width="200" height="200" src="<?php echo $filePath;?>images/skills-page/salesforce.svg"
                                    data-srcset="<?php echo $filePath;?>images/skills-page/salesforce.svg 400w, <?php echo $filePath;?>images/skills-page/salesforce.webp 400w, 
                                    <?php echo $filePath;?>images/skills-page/salesforce.svg 600w, <?php echo $filePath;?>images/skills-page/salesforce.webp 600w,
                                    <?php echo $filePath;?>images/skills-page/salesforce.svg 1000w <?php echo $filePath;?>images/skills-page/salesforce.webp 1000w" 
                                    srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" />
                                </div>
                                    
                            </div>

                        </div>
                    </li>

                    <li class="devops">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <!-- <img class="uk-card" data-src="<?php echo $filePath;?>images/skills-page/git.jpg" alt="git logo" height="250" width="250" uk-img> -->
                                    <img class="responsively-lazy uk-card" alt="git logo" width="200" height="200" src="<?php echo $filePath;?>images/skills-page/git.svg"
                                    data-srcset="<?php echo $filePath;?>images/skills-page/git.jpg 400w, <?php echo $filePath;?>images/skills-page/git.webp 400w, 
                                    <?php echo $filePath;?>images/skills-page/git.jpg 600w, <?php echo $filePath;?>images/skills-page/git.webp 600w,
                                    <?php echo $filePath;?>images/skills-page/git.jpg 1000w <?php echo $filePath;?>images/skills-page/git.webp 1000w" 
                                    srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" />
                                </div>
                                    
                            </div>

                        </div>
                    </li>

                    <li class="lang">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <!-- <img class="lazy uk-card" data-src="<?php echo $filePath;?>images/skills-page/JavaScript.png" alt="javascript logo" height="150" width="150" uk-img> -->
                                    <img class="responsively-lazy uk-card" alt="JavaScript logo" width="150" height="150" src="<?php echo $filePath;?>images/skills-page/JavaScript.png"
                                    data-srcset="<?php echo $filePath;?>images/skills-page/JavaScript.png 400w, <?php echo $filePath;?>images/skills-page/JavaScript.webp 400w, 
                                    <?php echo $filePath;?>images/skills-page/JavaScript.png 600w, <?php echo $filePath;?>images/skills-page/JavaScript.webp 600w,
                                    <?php echo $filePath;?>images/skills-page/JavaScript.png 1000w <?php echo $filePath;?>images/skills-page/JavaScript.webp 1000w" 
                                    srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" />
                                </div>
                                    
                            </div>
    
                        </div>
                    </li>
                    
                    <li class="server">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <!-- <img class="lazy uk-card" data-src="<?php echo $filePath;?>images/skills-page/weblogic.png" alt="weblogic logo" height="200" width="200" uk-img> -->
                                    <img class="responsively-lazy uk-card" alt="weblogic logo" width="200" height="200" src="<?php echo $filePath;?>images/skills-page/weblogic.png"
                                    data-srcset="<?php echo $filePath;?>images/skills-page/weblogic.png 400w, <?php echo $filePath;?>images/skills-page/weblogic.webp 400w, 
                                    <?php echo $filePath;?>images/skills-page/weblogic.png 600w, <?php echo $filePath;?>images/skills-page/weblogic.webp 600w,
                                    <?php echo $filePath;?>images/skills-page/weblogic.png 1000w <?php echo $filePath;?>images/skills-page/weblogic.webp 1000w" 
                                    srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" />
                                </div>
                                    
                            </div>

                        </div>  
                    </li>

                    <li class="lang">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <!-- <img class="lazy uk-card" data-src="<?php echo $filePath;?>images/skills-page/Angular.png" alt="angular logo" height="200" width="200" uk-img> -->
                                    <img class="responsively-lazy uk-card" alt="Angular logo" width="200" height="200" src="<?php echo $filePath;?>images/skills-page/Angular.png"
                                    data-srcset="<?php echo $filePath;?>images/skills-page/Angular.png 400w, <?php echo $filePath;?>images/skills-page/Angular.webp 400w, 
                                    <?php echo $filePath;?>images/skills-page/Angular.png 600w, <?php echo $filePath;?>images/skills-page/Angular.webp 600w,
                                    <?php echo $filePath;?>images/skills-page/Angular.png 1000w <?php echo $filePath;?>images/skills-page/Angular.webp 1000w" 
                                    srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" />
                                </div>
                                    
                            </div>

                        </div>
                    </li>

                    <li class="testing">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <!-- <img class="lazy uk-card" data-src="<?php echo $filePath;?>images/skills-page/Jira.svg" alt="Jira Logo" height="250" width="250" uk-img> -->
                                    <img class="responsively-lazy uk-card" alt="Jira logo" width="250" height="250" src="<?php echo $filePath;?>images/skills-page/Jira.svg"
                                    data-srcset="<?php echo $filePath;?>images/skills-page/Jira.svg 400w, <?php echo $filePath;?>images/skills-page/Jira.webp 400w, 
                                    <?php echo $filePath;?>images/skills-page/Jira.svg 600w, <?php echo $filePath;?>images/skills-page/Jira.webp 600w,
                                    <?php echo $filePath;?>images/skills-page/Jira.svg 1000w <?php echo $filePath;?>images/skills-page/Jira.webp 1000w" 
                                    srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" />
                                </div>
                                    
                            </div>

                        </div>
                    </li>

                    <li class="micro">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <!-- <img class="lazy uk-card" data-src="<?php echo $filePath;?>images/skills-page/graphql.png" alt="Graphql logo" height="250" width="250" uk-img> -->
                                    <img class="responsively-lazy uk-card" alt="GraphQl logo" width="250" height="250" src="<?php echo $filePath;?>images/skills-page/graphql.png"
                                    data-srcset="<?php echo $filePath;?>images/skills-page/graphql.png 400w, <?php echo $filePath;?>images/skills-page/graphql.webp 400w, 
                                    <?php echo $filePath;?>images/skills-page/graphql.png 600w, <?php echo $filePath;?>images/skills-page/graphql.webp 600w,
                                    <?php echo $filePath;?>images/skills-page/graphql.png 1000w <?php echo $filePath;?>images/skills-page/graphql.webp 1000w" 
                                    srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" />
                                </div>
                                    
                            </div>

                        </div>
                    </li>

                    <li class="lang">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <!-- <img class=" lazy uk-card" data-src="<?php echo $filePath;?>images/skills-page/php.png" alt="Php Logo" height="180" width="180" uk-img> -->
                                    <img class="responsively-lazy uk-card" alt="PHP logo" width="180" height="180" src="<?php echo $filePath;?>images/skills-page/php.png"
                                    data-srcset="<?php echo $filePath;?>images/skills-page/php.png 400w, <?php echo $filePath;?>images/skills-page/php.webp 400w, 
                                    <?php echo $filePath;?>images/skills-page/php.png 600w, <?php echo $filePath;?>images/skills-page/php.webp 600w,
                                    <?php echo $filePath;?>images/skills-page/php.png 1000w <?php echo $filePath;?>images/skills-page/php.webp 1000w" 
                                    srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" />
                                </div>
                                    
                            </div>

                        </div>
                    </li>

                    <li class="search">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <!-- <img class="lazy uk-card" data-src="<?php echo $filePath;?>images/skills-page/endeca.bmp" alt="Endeca Logo" height="200" width="200" uk-img> -->
                                    <img class="responsively-lazy uk-card" alt="endeca logo" width="200" height="200" src="<?php echo $filePath;?>images/skills-page/endeca.bmp"
                                    data-srcset="<?php echo $filePath;?>images/skills-page/endeca.bmp 400w, <?php echo $filePath;?>images/skills-page/endeca.webp 400w, 
                                    <?php echo $filePath;?>images/skills-page/endeca.bmp 600w, <?php echo $filePath;?>images/skills-page/endeca.webp 600w,
                                    <?php echo $filePath;?>images/skills-page/endeca.bmp 1000w <?php echo $filePath;?>images/skills-page/endeca.webp 1000w" 
                                    srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" />
                                </div>
                                    
                            </div>

                        </div>
                    </li>  

                    <li class="devops">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <!-- <img class="lazy uk-card" data-src="<?php echo $filePath;?>images/skills-page/Bamboo.svg" alt="Bamboo Logo" height="200" width="200" uk-img> -->
                                    <img class="responsively-lazy uk-card" alt="Bamboo logo" width="200" height="200" src="<?php echo $filePath;?>images/skills-page/Bamboo.svg"
                                    data-srcset="<?php echo $filePath;?>images/skills-page/Bamboo.svg 400w, <?php echo $filePath;?>images/skills-page/Bamboo.webp 400w, 
                                    <?php echo $filePath;?>images/skills-page/Bamboo.svg 600w, <?php echo $filePath;?>images/skills-page/Bamboo.webp 600w,
                                    <?php echo $filePath;?>images/skills-page/Bamboo.svg 1000w <?php echo $filePath;?>images/skills-page/Bamboo.webp 1000w" 
                                    srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" />
                                </div>
                                    
                            </div>

                        </div>
                    </li>

                    <li class="payment">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <!-- <img class="lazy uk-card  " data-src="<?php echo $filePath;?>images/skills-page/paymetric.png" alt="Paymetric Logo" height="250" width="250" uk-img > -->
                                    <img class="responsively-lazy uk-card" alt="Paymetric logo" width="250" height="250" src="<?php echo $filePath;?>images/skills-page/paymetric.png"
                                    data-srcset="<?php echo $filePath;?>images/skills-page/paymetric.png 400w, <?php echo $filePath;?>images/skills-page/paymetric.webp 400w, 
                                    <?php echo $filePath;?>images/skills-page/paymetric.png 600w, <?php echo $filePath;?>images/skills-page/paymetric.webp 600w,
                                    <?php echo $filePath;?>images/skills-page/paymetric.png 1000w <?php echo $filePath;?>images/skills-page/paymetric.webp 1000w" 
                                    srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" />
                                </div>
                                    
                            </div>
                        </div> 
                        
                    </li>

                    <li class="lang">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <!-- <img class="lazy uk-card" data-src="<?php echo $filePath;?>images/skills-page/reactJs.png" alt="ReactJs Logo" height="300" width="300" uk-img> -->
                                    <img class="responsively-lazy uk-card" alt="ReactJs logo" width="300" height="300" src="<?php echo $filePath;?>images/skills-page/reactJs.png"
                                    data-srcset="<?php echo $filePath;?>images/skills-page/reactJs.png 400w, <?php echo $filePath;?>images/skills-page/reactJs.webp 400w, 
                                    <?php echo $filePath;?>images/skills-page/reactJs.png 600w, <?php echo $filePath;?>images/skills-page/reactJs.webp 600w,
                                    <?php echo $filePath;?>images/skills-page/reactJs.png 1000w <?php echo $filePath;?>images/skills-page/reactJs.webp 1000w" 
                                    srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" />
                                </div>
                                    
                            </div>

                        </div>
                    </li>

                    <li class="devops">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <!-- <img class="lazy uk-card" data-src="<?php echo $filePath;?>images/skills-page/gradle.png" alt="Gradle Logo" height="200" width="200" uk-img> -->
                                    <img class="responsively-lazy uk-card" alt="Gradle logo" width="200" height="200" src="<?php echo $filePath;?>images/skills-page/gradle.png"
                                    data-srcset="<?php echo $filePath;?>images/skills-page/gradle.png 400w, <?php echo $filePath;?>images/skills-page/gradle.webp 400w, 
                                    <?php echo $filePath;?>images/skills-page/gradle.png 600w, <?php echo $filePath;?>images/skills-page/gradle.webp 600w,
                                    <?php echo $filePath;?>images/skills-page/gradle.png 1000w <?php echo $filePath;?>images/skills-page/gradle.webp 1000w" 
                                    srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" />
                                </div>
                                    
                            </div>

                        </div>
                    </li> 
                     
                    <li class="database">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <!-- <img class="lazy uk-card" data-src="<?php echo $filePath;?>images/skills-page/MySQL.png" alt="MySql Logo" height="300" width="300" uk-img> -->
                                    <img class="responsively-lazy uk-card" alt="MySQL logo" width="300" height="300" src="<?php echo $filePath;?>images/skills-page/MySQL.png"
                                    data-srcset="<?php echo $filePath;?>images/skills-page/MySQL.png 400w, <?php echo $filePath;?>images/skills-page/MySQL.webp 400w, 
                                    <?php echo $filePath;?>images/skills-page/MySQL.png 600w, <?php echo $filePath;?>images/skills-page/MySQL.webp 600w,
                                    <?php echo $filePath;?>images/skills-page/MySQL.png 1000w <?php echo $filePath;?>images/skills-page/MySQL.webp 1000w" 
                                    srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" />
                                </div>
                                    
                            </div>

                        </div>
                    </li> 

                    <li class="devops">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <!-- <img class="lazy uk-card" data-src="<?php echo $filePath;?>images/skills-page/Bitbucket.svg" alt="BitBucket Logo" height="200" width="200" uk-img> -->
                                    <img class="responsively-lazy uk-card" alt="Bitbucket logo" width="200" height="200" src="<?php echo $filePath;?>images/skills-page/Bitbucket.svg"
                                    data-srcset="<?php echo $filePath;?>images/skills-page/Bitbucket.svg 400w, <?php echo $filePath;?>images/skills-page/Bitbucket.webp 400w, 
                                    <?php echo $filePath;?>images/skills-page/Bitbucket.svg 600w, <?php echo $filePath;?>images/skills-page/Bitbucket.webp 600w,
                                    <?php echo $filePath;?>images/skills-page/Bitbucket.svg 1000w <?php echo $filePath;?>images/skills-page/Bitbucket.webp 1000w" 
                                    srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" />
                                </div>
                                    
                            </div>
 
                        </div>
                    </li> 

                    <li class="testing">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <!-- <img class="lazy uk-card" data-src="<?php echo $filePath;?>images/skills-page/spock.png" alt="Spock Logo" height="300" width="300" uk-img> -->
                                    <img class="responsively-lazy uk-card" alt="Spock logo" width="300" height="300" src="<?php echo $filePath;?>images/skills-page/spock.png"
                                    data-srcset="<?php echo $filePath;?>images/skills-page/spock.png 400w, <?php echo $filePath;?>images/skills-page/spock.webp 400w, 
                                    <?php echo $filePath;?>images/skills-page/spock.png 600w, <?php echo $filePath;?>images/skills-page/spock.webp 600w,
                                    <?php echo $filePath;?>images/skills-page/spock.png 1000w <?php echo $filePath;?>images/skills-page/spock.webp 1000w" 
                                    srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" />
                                </div>
                                    
                            </div>

                        </div>
                    </li> 

                    <li class="lang">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <!-- <img class="lazy uk-card" data-src="<?php echo $filePath;?>images/skills-page/groovy.png" alt="Groovy Logo" height="250" width="250" uk-img> -->
                                    <img class="responsively-lazy uk-card" alt="Groovy logo" width="250" height="250" src="<?php echo $filePath;?>images/skills-page/groovy.png"
                                    data-srcset="<?php echo $filePath;?>images/skills-page/groovy.png 400w, <?php echo $filePath;?>images/skills-page/groovy.webp 400w, 
                                    <?php echo $filePath;?>images/skills-page/groovy.png 600w, <?php echo $filePath;?>images/skills-page/groovy.webp 600w,
                                    <?php echo $filePath;?>images/skills-page/groovy.png 1000w <?php echo $filePath;?>images/skills-page/groovy.webp 1000w" 
                                    srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" />
                                </div>
                                    
                            </div>

                        </div>
                    </li>

                    <li class="database">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <!-- <img class="lazy uk-card" data-src="<?php echo $filePath;?>images/skills-page/OracleDB.png" alt="OracleDB logo" height="300" width="300" uk-img> -->
                                    <img class="responsively-lazy uk-card" alt="OracleDB logo" width="300" height="300" src="<?php echo $filePath;?>images/skills-page/OracleDB.png"
                                    data-srcset="<?php echo $filePath;?>images/skills-page/OracleDB.png 400w, <?php echo $filePath;?>images/skills-page/OracleDB.webp 400w, 
                                    <?php echo $filePath;?>images/skills-page/OracleDB.png 600w, <?php echo $filePath;?>images/skills-page/OracleDB.webp 600w,
                                    <?php echo $filePath;?>images/skills-page/OracleDB.png 1000w <?php echo $filePath;?>images/skills-page/OracleDB.webp 1000w" 
                                    srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" />
                                </div>
                                    
                            </div>
                        </div>
                    </li>

                    <li class="server">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <!-- <img class=" lazy uk-card" data-src="<?php echo $filePath;?>images/skills-page/jboss.jpg" alt="Jboss Logo" height="200" width="200" uk-img> -->
                                    <img class="responsively-lazy uk-card" alt="Jboss logo" width="200" height="200" src="<?php echo $filePath;?>images/skills-page/jboss.jpg"
                                    data-srcset="<?php echo $filePath;?>images/skills-page/jboss.jpg 400w, <?php echo $filePath;?>images/skills-page/jboss.webp 400w, 
                                    <?php echo $filePath;?>images/skills-page/jboss.jpg 600w, <?php echo $filePath;?>images/skills-page/jboss.webp 600w,
                                    <?php echo $filePath;?>images/skills-page/jboss.jpg 1000w <?php echo $filePath;?>images/skills-page/jboss.webp 1000w" 
                                    srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" />
                                </div>
                                    
                            </div>

                        </div>
                    </li>

                    <li class="database">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <!-- <img class=" lazy uk-card" data-src="<?php echo $filePath;?>images/skills-page/ibm-db2.png" alt="ibm db2 logo" height="150" width="150" uk-img> -->
                                    <img class="responsively-lazy uk-card" alt="IBM DB2 logo" width="200" height="200" src="<?php echo $filePath;?>images/skills-page/ibm-db2.png"
                                    data-srcset="<?php echo $filePath;?>images/skills-page/ibm-db2.png 400w, <?php echo $filePath;?>images/skills-page/ibm-db2.webp 400w, 
                                    <?php echo $filePath;?>images/skills-page/ibm-db2.png 600w, <?php echo $filePath;?>images/skills-page/ibm-db2.webp 600w,
                                    <?php echo $filePath;?>images/skills-page/ibm-db2.png 1000w <?php echo $filePath;?>images/skills-page/ibm-db2.webp 1000w" 
                                    srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" />
                                </div>
                                    
                            </div>

                        </div>
                    </li>

                    <li class="lang">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <!-- <img class="lazy uk-card" data-src="<?php echo $filePath;?>images/skills-page/geb.png" alt="Geb Logo" height="200" width="200" uk-img> -->
                                    <img class="responsively-lazy uk-card" alt="Geb logo" width="200" height="200" src="<?php echo $filePath;?>images/skills-page/geb.png"
                                    data-srcset="<?php echo $filePath;?>images/skills-page/geb.png 400w, <?php echo $filePath;?>images/skills-page/geb.webp 400w, 
                                    <?php echo $filePath;?>images/skills-page/geb.png 600w, <?php echo $filePath;?>images/skills-page/geb.webp 600w,
                                    <?php echo $filePath;?>images/skills-page/geb.png 1000w <?php echo $filePath;?>images/skills-page/geb.webp 1000w" 
                                    srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" />
                                </div>
                                    
                            </div>

                        </div>
                    </li>
                  
                </ul>
        </div>
    </div>
        
    </div>    
    <?php
	 include_once '../footer.php';
    ?>
    
    <script>
        
        document.addEventListener('DOMContentLoaded', () => {

        let myBtns=document.querySelectorAll('.skills_btn');
        myBtns.forEach(function(btn) {

         btn.addEventListener('click', () => {
        myBtns.forEach(b => b.classList.remove('active'));
        btn.classList.add('active');
                });

            });

            });


    </script>

</body>

</html>
    

    
