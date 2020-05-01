<?php
$meta7 = 'The technology has made our lives better and so our best skills and services we are rendering.';
$currentPage = 'skill';
     include_once '../header.php';
?>



    <div class="uk-container uk-margin">
        <div class="uk-h2 uk-text-center uk-text-bold services_mainheading">Our Technical Expertise</div>
        <p class="uk-text-center services_mainpara"> Rendering the best services with the Updated Technologies.
        </p>
        <div class=""> <img class=" uk-align-center" data-src="<?php echo $filePath;?>images/skill.jpg" width="800" height="800" uk-img></div>
       
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
                                    <img class="lazy uk-card"  data-src="<?php echo $filePath;?>images/skills-page/atg.png" height="250" width="250" uk-img>
                                  
                                </div>
                                    
                            </div>
                                                     
    
                            
                        </div>
                    </li>
                    <li class="lang">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <img class="lazy uk-card " data-src="<?php echo $filePath;?>images/skills-page/java.png" height="100" width="100" uk-img>
                                  
                                </div>
                                    
                            </div>

                        </div>
                    </li>
                    <li class="payment">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <img class="lazy uk-card  " data-src="<?php echo $filePath;?>images/skills-page/paypal.png" height="200" width="200" uk-img >
                                  
                                </div>
                                    
                            </div>
                        </div> 
                        
                    </li>

                    <li class="server">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <img class="lazy uk-card" data-src="<?php echo $filePath;?>images/skills-page/tomcat.jpg" height="300" width="300" uk-img>
                                  
                                </div>
                                    
                            </div>

                        </div>
                    </li>
                    <li class="integration">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <img class=" lazy uk-card  " data-src="<?php echo $filePath;?>images/skills-page/usps.svg" height="200" width="200" uk-img >
                                  
                                </div>
                                    
                            </div>
                        </div> 
                        
                    </li>
                    <li class="server">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <img class="lazy uk-card" data-src="<?php echo $filePath;?>images/skills-page/websphere.png" height="250" width="250" uk-img>
                                  
                                </div>
                                    
                            </div>

                        </div>
                    </li>
                    <li class="testing">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <img class="lazy uk-card" data-src="<?php echo $filePath;?>images/skills-page/postman.png" height="250" width="250" uk-img>
                                  
                                </div>
                                    
                            </div>
    
                        </div>
                    </li>
                    <li class="hybrid">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <img class="lazy uk-card" data-src="<?php echo $filePath;?>images/skills-page/ionic.png" height="200" width="200" uk-img>
                                  
                                </div>
                                    
                            </div>
                        </div>
                    </li>

                    <li class="analytics">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <img class="lazy uk-card" data-src="<?php echo $filePath;?>images/skills-page/google_analytics.png" height="300" width="300" uk-img>
                                  
                                </div>
                                    
                            </div>
                        </div>
                    </li>
                    <li class="devops">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <img class="lazy uk-card" data-src="<?php echo $filePath;?>images/skills-page/Jenkins.jpg" height="200" width="200" uk-img>
                                  
                                </div>
                                    
                            </div>
                        </div>
                    </li>
                    <li class="integration">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <img class="lazy uk-card  " data-src="<?php echo $filePath;?>images/skills-page/taxware.png" height="200" width="200" uk-img >
                                  
                                </div>
                                    
                            </div>
                        </div> 
                        
                    </li>
                    <li class="commerce">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <img class="lazy uk-card" data-src="<?php echo $filePath;?>images/skills-page/hybris.png" height="200" width="200" uk-img>
                                  
                                </div>
                                    
                            </div>
                        </div>
                    </li>
                   
                    <li class="hybrid">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <img class="lazy uk-card" data-src="<?php echo $filePath;?>images/skills-page/react_native.png" height="150" width="150" uk-img>
                                  
                                </div>
                                    
                            </div>
                        </div>
                    </li>

                    <li class="testing">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <img class="lazy uk-card" data-src="<?php echo $filePath;?>images/skills-page/selenium.png" height="200" width="200" uk-img>
                                  
                                </div>
                                    
                            </div>


                        </div>
                    </li>
                    <li class="integration">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <img class="lazy uk-card  " data-src="<?php echo $filePath;?>images/skills-page/Experian.svg" height="200" width="200" uk-img >
                                  
                                </div>
                                    
                            </div>
                        </div> 
                        
                    </li>
                    <li class="analytics">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <img class="lazy uk-card" data-src="<?php echo $filePath;?>images/skills-page/adobe-analytics.png" height="180" width="180" uk-img>
                                  
                                </div>
                                    
                            </div>
                        </div>
                    </li>
                    <li class="payment">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <img class="lazy uk-card  " data-src="<?php echo $filePath;?>images/skills-page/Vantive.png" height="200" width="200" uk-img >
                                  
                                </div>
                                    
                            </div>
                        </div> 
                        
                    </li>
                    <li class="cloud">
                        
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <img class="lazy uk-card" data-src="<?php echo $filePath;?>images/skills-page/Google_Cloud.svg" height="250" width="250" uk-img>
                                  
                                </div>
                                    
                            </div>

                        </div>
                    </li>
                    <li class="integration">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <img class=" lazy uk-card" data-src="<?php echo $filePath;?>images/skills-page/Zendesk.png" height="180" width="180" uk-img >
                                  
                                </div>
                                    
                            </div>
                        </div> 
                        
                    </li>
                 
                
                    <li class="devops">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <img class="lazy uk-card" data-src="<?php echo $filePath;?>images/skills-page/maven.png" height="200" width="200" uk-img>
                                  
                                </div>
                                    
                            </div>
                        </div>
                    </li>
                    <li class="commerce">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <img class="lazy uk-card" data-src="<?php echo $filePath;?>images/skills-page/magento.png" height="200" width="200" uk-img>
                                  
                                </div>
                                    
                            </div>

                        </div>
                    </li>
                    <li class="cloud">
                        
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <img class="lazy uk-card" data-src="<?php echo $filePath;?>images/skills-page/aws.svg" height="150" width="150" uk-img>
                                  
                                </div>
                                    
                            </div>

                        </div>
                    </li>
                    
                    <li class="database">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <img class="lazy uk-card" data-src="<?php echo $filePath;?>images/skills-page/MSSQL.png" height="300" width="300" uk-img>
                                  
                                </div>
                                    
                            </div>

                        </div>
                    </li>
                    
                    <li class="micro">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <img class="lazy uk-card" data-src="<?php echo $filePath;?>images/skills-page/micronaut.svg" height="300" width="300" uk-img>
                                  
                                </div>
                                    
                            </div>

                        </div>
                    </li>
                    <li class="commerce">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <img class="lazy uk-card" data-src="<?php echo $filePath;?>images/skills-page/commercetools.png" height="250" width="250" uk-img>
                                  
                                </div>
                                    
                            </div>

                        </div>
                    </li>
                    <li class="testing">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <img class="lazy uk-card" data-src="<?php echo $filePath;?>images/skills-page/cucumber.png" height="200" width="200" uk-img>
                                  
                                </div>
                                    
                            </div>

                        </div>
                    </li>
                    <li class="analytics">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <img class="lazy uk-card" data-src="<?php echo $filePath;?>images/skills-page/Omniture.png" height="200" width="200" uk-img>
                                  
                                </div>
                                    
                            </div>
                        </div>
                    </li>
                    <li class="cloud">
                        
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <img class="lazy uk-card" data-src="<?php echo $filePath;?>images/skills-page/Azure.svg" height="200" width="200" uk-img>
                                  
                                </div>
                                    
                            </div>

                        </div>
                    </li>
                    <li class="micro">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <img class="lazy uk-card  " data-src="<?php echo $filePath;?>images/skills-page/spring.svg" height="200" width="200" uk-img>
                                  
                                </div>
                                    
                            </div>

                        </div>
                    </li>
                    <li class="commerce">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <img class="lazy uk-card" data-src="<?php echo $filePath;?>images/skills-page/salesforce.svg" height="200" width="200" uk-img>
                                  
                                </div>
                                    
                            </div>

                        </div>
                    </li>
                    <li class="devops">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <img class="uk-card" data-src="<?php echo $filePath;?>images/skills-page/git.jpg" height="250" width="250" uk-img>
                                  
                                </div>
                                    
                            </div>

                        </div>
                    </li>

                    
                    <li class="lang">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <img class="lazy uk-card" data-src="<?php echo $filePath;?>images/skills-page/JavaScript.png" height="150" width="150" uk-img>
                                  
                                </div>
                                    
                            </div>
    
                        </div>
                    </li>
                    
                    <li class="server">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <img class="lazy uk-card" data-src="<?php echo $filePath;?>images/skills-page/weblogic.png" height="200" width="200" uk-img>
                                  
                                </div>
                                    
                            </div>

                        </div>  
                    </li>
                    <li class="lang">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <img class="lazy uk-card" data-src="<?php echo $filePath;?>images/skills-page/Angular.png" height="200" width="200" uk-img>
                                  
                                </div>
                                    
                            </div>

                        </div>
                    </li>
                    <li class="testing">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <img class="lazy uk-card" data-src="<?php echo $filePath;?>images/skills-page/Jira.svg" height="250" width="250" uk-img>
                                  
                                </div>
                                    
                            </div>

                        </div>
                    </li>
                    <li class="micro">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <img class="lazy uk-card" data-src="<?php echo $filePath;?>images/skills-page/graphql.png" height="250" width="250" uk-img>
                                  
                                </div>
                                    
                            </div>

                        </div>
                    </li>
                    <li class="lang">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <img class=" lazy uk-card" data-src="<?php echo $filePath;?>images/skills-page/php.png" height="180" width="180" uk-img>
                                  
                                </div>
                                    
                            </div>

                        </div>
                    </li>


                    <li class="search">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <img class="lazy uk-card" data-src="<?php echo $filePath;?>images/skills-page/endeca.bmp" height="200" width="200" uk-img>
                                  
                                </div>
                                    
                            </div>

                        </div>
                    </li>
                    
                    <li class="devops">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <img class="lazy uk-card" data-src="<?php echo $filePath;?>images/skills-page/Bamboo.svg" height="200" width="200" uk-img>
                                  
                                </div>
                                    
                            </div>

                        </div>
                    </li>
                   
                    <li class="payment">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <img class="lazy uk-card  " data-src="<?php echo $filePath;?>images/skills-page/paymetric.png" height="250" width="250" uk-img >
                                  
                                </div>
                                    
                            </div>
                        </div> 
                        
                    </li>
                    <li class="lang">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <img class="lazy uk-card" data-src="<?php echo $filePath;?>images/skills-page/reactJs.png" height="300" width="300" uk-img>
                                  
                                </div>
                                    
                            </div>

                        </div>
                    </li>

                   <li class="devops">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <img class="lazy uk-card" data-src="<?php echo $filePath;?>images/skills-page/gradle.png" height="200" width="200" uk-img>
                                  
                                </div>
                                    
                            </div>

                        </div>
                    </li> 
                   
                    
                    <li class="database">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <img class="lazy uk-card" data-src="<?php echo $filePath;?>images/skills-page/MySQL.png" height="300" width="300" uk-img>
                                  
                                </div>
                                    
                            </div>

                        </div>
                    </li>
                    
                    
                    
                    
                    <li class="devops">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <img class="lazy uk-card" data-src="<?php echo $filePath;?>images/skills-page/Bitbucket.svg" height="200" width="200" uk-img>
                                  
                                </div>
                                    
                            </div>
 
                        </div>
                    </li>

                    
                
                    
                    <li class="testing">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <img class="lazy uk-card" data-src="<?php echo $filePath;?>images/skills-page/spock.png" height="300" width="300" uk-img>
                                  
                                </div>
                                    
                            </div>

                        </div>
                    </li>
                    
                    <li class="lang">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <img class="lazy uk-card" data-src="<?php echo $filePath;?>images/skills-page/groovy.png" height="250" width="250" uk-img>
                                  
                                </div>
                                    
                            </div>

                        </div>
                    </li>
                    <li class="database">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <img class="lazy uk-card" data-src="<?php echo $filePath;?>images/skills-page/OracleDB.png" height="300" width="300" uk-img>
                                  
                                </div>
                                    
                            </div>
                        </div>
                    </li>
                    <li class="server">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <img class=" lazy uk-card" data-src="<?php echo $filePath;?>images/skills-page/jboss.jpg" height="200" width="200" uk-img>
                                  
                                </div>
                                    
                            </div>

                        </div>
                    </li>
                    <li class="database">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <img class=" lazy uk-card" data-src="<?php echo $filePath;?>images/skills-page/ibm-db2.png" height="150" width="150" uk-img>
                                  
                                </div>
                                    
                            </div>

                        </div>
                    </li>
                    <li class="lang">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <img class="lazy uk-card" data-src="<?php echo $filePath;?>images/skills-page/geb.png" height="200" width="200" uk-img>
                                  
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
    <script>
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
</script>

    

    
