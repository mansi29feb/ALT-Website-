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
                                    <img class="lazy uk-card"  data-src="<?php echo $filePath;?>images/skills-page/atg.png" alt="atg logo" height="250" width="250" uk-img>
                                  
                                </div>
                                    
                            </div>
                                                     
    
                            
                        </div>
                    </li>
                    <li class="lang">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <img class="lazy uk-card " data-src="<?php echo $filePath;?>images/skills-page/java.png" alt="java logo" height="100" width="100" uk-img>
                                  
                                </div>
                                    
                            </div>

                        </div>
                    </li>
                    <li class="payment">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <img class="lazy uk-card  " data-src="<?php echo $filePath;?>images/skills-page/paypal.png" alt="paypal logo" height="200" width="200" uk-img >
                                  
                                </div>
                                    
                            </div>
                        </div> 
                        
                    </li>

                    <li class="server">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <img class="lazy uk-card" data-src="<?php echo $filePath;?>images/skills-page/tomcat.jpg" alt="tomcat logo" height="300" width="300" uk-img>
                                  
                                </div>
                                    
                            </div>

                        </div>
                    </li>
                    <li class="integration">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <img class=" lazy uk-card  " data-src="<?php echo $filePath;?>images/skills-page/usps.svg" alt="usps logo" height="200" width="200" uk-img >
                                  
                                </div>
                                    
                            </div>
                        </div> 
                        
                    </li>
                    <li class="server">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <img class="lazy uk-card" data-src="<?php echo $filePath;?>images/skills-page/websphere.png" alt="websphere logo" height="250" width="250" uk-img>
                                  
                                </div>
                                    
                            </div>

                        </div>
                    </li>
                    <li class="testing">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <img class="lazy uk-card" data-src="<?php echo $filePath;?>images/skills-page/postman.png" alt="postman logo" height="250" width="250" uk-img>
                                  
                                </div>
                                    
                            </div>
    
                        </div>
                    </li>
                    <li class="hybrid">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <img class="lazy uk-card" data-src="<?php echo $filePath;?>images/skills-page/ionic.png" alt="ionic logo" height="200" width="200" uk-img>
                                  
                                </div>
                                    
                            </div>
                        </div>
                    </li>

                    <li class="analytics">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <img class="lazy uk-card" data-src="<?php echo $filePath;?>images/skills-page/google_analytics.png" alt="google analytics logo" height="300" width="300" uk-img>
                                  
                                </div>
                                    
                            </div>
                        </div>
                    </li>
                    <li class="devops">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <img class="lazy uk-card" data-src="<?php echo $filePath;?>images/skills-page/Jenkins.jpg" alt="jenkins logo" height="200" width="200" uk-img>
                                  
                                </div>
                                    
                            </div>
                        </div>
                    </li>
                    <li class="integration">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <img class="lazy uk-card  " data-src="<?php echo $filePath;?>images/skills-page/taxware.png" alt="taxware logo" height="200" width="200" uk-img >
                                  
                                </div>
                                    
                            </div>
                        </div> 
                        
                    </li>
                    <li class="commerce">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <img class="lazy uk-card" data-src="<?php echo $filePath;?>images/skills-page/hybris.png" alt="hybris logo" height="200" width="200" uk-img>
                                  
                                </div>
                                    
                            </div>
                        </div>
                    </li>
                   
                    <li class="hybrid">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <img class="lazy uk-card" data-src="<?php echo $filePath;?>images/skills-page/react_native.png" alt="react native logo" height="150" width="150" uk-img>
                                  
                                </div>
                                    
                            </div>
                        </div>
                    </li>

                    <li class="testing">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <img class="lazy uk-card" data-src="<?php echo $filePath;?>images/skills-page/selenium.png" alt="selenium logo" height="200" width="200" uk-img>
                                  
                                </div>
                                    
                            </div>


                        </div>
                    </li>
                    <li class="integration">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <img class="lazy uk-card  " data-src="<?php echo $filePath;?>images/skills-page/Experian.svg" alt="experian Logo" height="200" width="200" uk-img >
                                  
                                </div>
                                    
                            </div>
                        </div> 
                        
                    </li>
                    <li class="analytics">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <img class="lazy uk-card" data-src="<?php echo $filePath;?>images/skills-page/adobe-analytics.png" alt="adobe-analytics Logo" height="180" width="180" uk-img>
                                  
                                </div>
                                    
                            </div>
                        </div>
                    </li>
                    <li class="payment">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <img class="lazy uk-card  " data-src="<?php echo $filePath;?>images/skills-page/Vantive.png" alt="vantive Logo" height="200" width="200" uk-img >
                                  
                                </div>
                                    
                            </div>
                        </div> 
                        
                    </li>
                    <li class="cloud">
                        
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <img class="lazy uk-card" data-src="<?php echo $filePath;?>images/skills-page/Google_Cloud.svg" alt="google cloud Logo" height="250" width="250" uk-img>
                                  
                                </div>
                                    
                            </div>

                        </div>
                    </li>
                    <li class="integration">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <img class=" lazy uk-card" data-src="<?php echo $filePath;?>images/skills-page/Zendesk.png" alt="zendesk Logo" height="180" width="180" uk-img >
                                  
                                </div>
                                    
                            </div>
                        </div> 
                        
                    </li>
                 
                
                    <li class="devops">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <img class="lazy uk-card" data-src="<?php echo $filePath;?>images/skills-page/maven.png" alt="maven Logo" height="200" width="200" uk-img>
                                  
                                </div>
                                    
                            </div>
                        </div>
                    </li>
                    <li class="commerce">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <img class="lazy uk-card" data-src="<?php echo $filePath;?>images/skills-page/magento.png" alt="magento logo" height="200" width="200" uk-img>
                                  
                                </div>
                                    
                            </div>

                        </div>
                    </li>
                    <li class="cloud">
                        
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <img class="lazy uk-card" data-src="<?php echo $filePath;?>images/skills-page/aws.svg" alt="aws Logo" height="150" width="150" uk-img>
                                  
                                </div>
                                    
                            </div>

                        </div>
                    </li>
                    
                    <li class="database">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <img class="lazy uk-card" data-src="<?php echo $filePath;?>images/skills-page/MSSQL.png" alt="mssql Logo" height="300" width="300" uk-img>
                                  
                                </div>
                                    
                            </div>

                        </div>
                    </li>
                    
                    <li class="micro">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <img class="lazy uk-card" data-src="<?php echo $filePath;?>images/skills-page/micronaut.svg" alt="micronaut Logo" height="300" width="300" uk-img>
                                  
                                </div>
                                    
                            </div>

                        </div>
                    </li>
                    <li class="commerce">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <img class="lazy uk-card" data-src="<?php echo $filePath;?>images/skills-page/commercetools.png" alt="commercetools Logo" height="250" width="250" uk-img>
                                  
                                </div>
                                    
                            </div>

                        </div>
                    </li>
                    <li class="testing">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <img class="lazy uk-card" data-src="<?php echo $filePath;?>images/skills-page/cucumber.png" alt="cucumber Logo" height="200" width="200" uk-img>
                                  
                                </div>
                                    
                            </div>

                        </div>
                    </li>
                    <li class="analytics">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <img class="lazy uk-card" data-src="<?php echo $filePath;?>images/skills-page/Omniture.png" alt="omniture Logo" height="200" width="200" uk-img>
                                  
                                </div>
                                    
                            </div>
                        </div>
                    </li>
                    <li class="cloud">
                        
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <img class="lazy uk-card" data-src="<?php echo $filePath;?>images/skills-page/Azure.svg" alt="azure Logo" height="200" width="200" uk-img>
                                  
                                </div>
                                    
                            </div>

                        </div>
                    </li>
                    <li class="micro">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <img class="lazy uk-card  " data-src="<?php echo $filePath;?>images/skills-page/spring.svg" alt="spring logo" height="200" width="200" uk-img>
                                  
                                </div>
                                    
                            </div>

                        </div>
                    </li>
                    <li class="commerce">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <img class="lazy uk-card" data-src="<?php echo $filePath;?>images/skills-page/salesforce.svg" alt="salesforce logo" height="200" width="200" uk-img>
                                  
                                </div>
                                    
                            </div>

                        </div>
                    </li>
                    <li class="devops">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <img class="uk-card" data-src="<?php echo $filePath;?>images/skills-page/git.jpg" alt="git logo" height="250" width="250" uk-img>
                                  
                                </div>
                                    
                            </div>

                        </div>
                    </li>

                    
                    <li class="lang">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <img class="lazy uk-card" data-src="<?php echo $filePath;?>images/skills-page/JavaScript.png" alt="javascript logo" height="150" width="150" uk-img>
                                  
                                </div>
                                    
                            </div>
    
                        </div>
                    </li>
                    
                    <li class="server">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <img class="lazy uk-card" data-src="<?php echo $filePath;?>images/skills-page/weblogic.png" alt="weblogic logo" height="200" width="200" uk-img>
                                  
                                </div>
                                    
                            </div>

                        </div>  
                    </li>
                    <li class="lang">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <img class="lazy uk-card" data-src="<?php echo $filePath;?>images/skills-page/Angular.png" alt="angular logo" height="200" width="200" uk-img>
                                  
                                </div>
                                    
                            </div>

                        </div>
                    </li>
                    <li class="testing">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <img class="lazy uk-card" data-src="<?php echo $filePath;?>images/skills-page/Jira.svg" alt="Jira Logo" height="250" width="250" uk-img>
                                  
                                </div>
                                    
                            </div>

                        </div>
                    </li>
                    <li class="micro">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <img class="lazy uk-card" data-src="<?php echo $filePath;?>images/skills-page/graphql.png" alt="Graphql logo" height="250" width="250" uk-img>
                                  
                                </div>
                                    
                            </div>

                        </div>
                    </li>
                    <li class="lang">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <img class=" lazy uk-card" data-src="<?php echo $filePath;?>images/skills-page/php.png" alt="Php Logo" height="180" width="180" uk-img>
                                  
                                </div>
                                    
                            </div>

                        </div>
                    </li>


                    <li class="search">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <img class="lazy uk-card" data-src="<?php echo $filePath;?>images/skills-page/endeca.bmp" alt="Endeca Logo" height="200" width="200" uk-img>
                                  
                                </div>
                                    
                            </div>

                        </div>
                    </li>
                    
                    <li class="devops">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <img class="lazy uk-card" data-src="<?php echo $filePath;?>images/skills-page/Bamboo.svg" alt="Bamboo Logo" height="200" width="200" uk-img>
                                  
                                </div>
                                    
                            </div>

                        </div>
                    </li>
                   
                    <li class="payment">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <img class="lazy uk-card  " data-src="<?php echo $filePath;?>images/skills-page/paymetric.png" alt="Paymetric Logo" height="250" width="250" uk-img >
                                  
                                </div>
                                    
                            </div>
                        </div> 
                        
                    </li>
                    <li class="lang">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <img class="lazy uk-card" data-src="<?php echo $filePath;?>images/skills-page/reactJs.png" alt="ReactJs Logo" height="300" width="300" uk-img>
                                  
                                </div>
                                    
                            </div>

                        </div>
                    </li>

                   <li class="devops">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <img class="lazy uk-card" data-src="<?php echo $filePath;?>images/skills-page/gradle.png" alt="Gradle Logo" height="200" width="200" uk-img>
                                  
                                </div>
                                    
                            </div>

                        </div>
                    </li> 
                   
                    
                    <li class="database">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <img class="lazy uk-card" data-src="<?php echo $filePath;?>images/skills-page/MySQL.png" alt="MySql Logo" height="300" width="300" uk-img>
                                  
                                </div>
                                    
                            </div>

                        </div>
                    </li>
                    
                    
                    
                    
                    <li class="devops">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <img class="lazy uk-card" data-src="<?php echo $filePath;?>images/skills-page/Bitbucket.svg" alt="BitBucket Logo" height="200" width="200" uk-img>
                                  
                                </div>
                                    
                            </div>
 
                        </div>
                    </li>

                    
                
                    
                    <li class="testing">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <img class="lazy uk-card" data-src="<?php echo $filePath;?>images/skills-page/spock.png" alt="Spock Logo" height="300" width="300" uk-img>
                                  
                                </div>
                                    
                            </div>

                        </div>
                    </li>
                    
                    <li class="lang">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <img class="lazy uk-card" data-src="<?php echo $filePath;?>images/skills-page/groovy.png" alt="Groovy Logo" height="250" width="250" uk-img>
                                  
                                </div>
                                    
                            </div>

                        </div>
                    </li>
                    <li class="database">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <img class="lazy uk-card" data-src="<?php echo $filePath;?>images/skills-page/OracleDB.png" alt="OracleDB logo" height="300" width="300" uk-img>
                                  
                                </div>
                                    
                            </div>
                        </div>
                    </li>
                    <li class="server">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <img class=" lazy uk-card" data-src="<?php echo $filePath;?>images/skills-page/jboss.jpg" alt="Jboss Logo" height="200" width="200" uk-img>
                                  
                                </div>
                                    
                            </div>

                        </div>
                    </li>
                    <li class="database">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <img class=" lazy uk-card" data-src="<?php echo $filePath;?>images/skills-page/ibm-db2.png" alt="ibm db2 logo" height="150" width="150" uk-img>
                                  
                                </div>
                                    
                            </div>

                        </div>
                    </li>
                    <li class="lang">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <img class="lazy uk-card" data-src="<?php echo $filePath;?>images/skills-page/geb.png" alt="Geb Logo" height="200" width="200" uk-img>
                                  
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
    

    
