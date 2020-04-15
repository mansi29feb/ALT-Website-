<?php
     include_once '../header.php';
?>



    <div class="uk-container uk-margin">
        <div class="uk-h2 uk-text-center uk-text-bold services_mainheading">Our Technical Expertise</div>
        <p class="uk-text-center services_mainpara"> The technology has made our lives better and so our best skills and services we are rendering.
        </p>
        <div class=""> <img class=" uk-align-center" data-src="<?php echo $filePath;?>images/skill.jpg" width="800" height="800" uk-img></div>
       
    <div class="uk-text-center@s uk-text-bold services_subheading ">Our Skills</div>
    
    <div>
        <div class="uk-margin" uk-filter="target:.js-filter">

            <ul class=" uk-subnav uk-margin-medium-bottom uk-padding-small">
                <li class="" uk-filter-control><button class="uk-button  skills_btn uk-margin-small-right uk-margin-small-top active">All Skills</button></li>
                <li  uk-filter-control=".oracle"><button class="uk-button skills_btn  uk-margin-small-right uk-margin-small-top">Retail Platform</button>
                </li>
                <li uk-filter-control=".endeca"><button class="uk-button skills_btn uk-margin-small-right uk-margin-small-top">WEB ANALYTICS </button>
                </li>
                <li uk-filter-control=".hybris"><button class="uk-button skills_btn uk-margin-small-right uk-margin-small-top"> CLOUD PLATFORMS</button>
                </li>
                <li uk-filter-control=".aem"><button class="uk-button skills_btn uk-margin-small-right uk-margin-small-top">DevOps</button>

                </li>
                <li uk-filter-control=".lang"><button class="uk-button skills_btn uk-margin-small-right uk-margin-small-top">LANGUAGES</button>

                </li>
                <li uk-filter-control=".database"><button class="uk-button skills_btn  uk-margin-small-right uk-margin-small-top ">DATABASE</button>

                </li>
                <li uk-filter-control=".server"><button class="uk-button skills_btn uk-margin-small-right uk-margin-small-top">APPLICATION SERVERS</button>

                </li>
                <li uk-filter-control=".cms"><button class="uk-button skills_btn uk-margin-small-right uk-margin-small-top">COMMUNICATION</button>

                </li>
                <li uk-filter-control=".integration"><button class="uk-button skills_btn uk-margin-small-right uk-margin-small-top">CONTINUOUS INTEGRATION</button>

                </li>
                <li uk-filter-control=".services"><button class="uk-button skills_btn uk-margin-small-right uk-margin-small-top">POS</button>

                </li>
                <li uk-filter-control=".testing"><button class="uk-button skills_btn uk-margin-small-right uk-margin-small-top">QUALITY ENGINEERING</button>

                </li>
                <li uk-filter-control=".search"><button class="uk-button skills_btn uk-margin-small-right uk-margin-small-top">SEARCH</button>

                </li>
                
            </ul>
        
            
                <ul class="js-filter uk-child-width-1-1@s uk-child-width-1-3@m uk-text-center uk-grid-small" uk-grid uk-scrollspy="target: > li > .uk-card; cls:uk-animation-slide-bottom-medium; delay: 100;">
                    <li class="oracle">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-animation-toggle uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <img class="uk-card  " data-src="<?php echo $filePath;?>images/atg.png" height="200" width="200" uk-img>
                                  
                                </div>
                                    
                            </div>
                                                     
    
                            
                        </div>
                    </li>
                    <li class="services">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <img class="uk-card  " data-src="<?php echo $filePath;?>images/skills/paypal.png" height="150" width="150" uk-img >
                                  
                                </div>
                                    
                            </div>
                        </div> 
                        
                    </li>



                    <li class="testing">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <img class="uk-card" data-src="<?php echo $filePath;?>images/skills/postman.png" height="200" width="200" uk-img>
                                  
                                </div>
                                    
                            </div>
    
                        </div>
                    </li>

                    <li class="endeca">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <img class="uk-card" data-src="<?php echo $filePath;?>images/skills/analytics.png" height="200" width="200" uk-img>
                                  
                                </div>
                                    
                            </div>
                        </div>
                    </li>
                    <li class="integration">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <img class="uk-card" data-src="<?php echo $filePath;?>images/skills/bitbucket.png" height="100" width="100" uk-img>
                                  
                                </div>
                                    
                            </div>
                            <div class="skills_heading uk-text-bold" style="color: #253858;">
                               Bitbucket
                            </div>
                        </div>
                    </li>
                    
                    <li class="oracle">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <img class="uk-card" data-src="<?php echo $filePath;?>images/skills/magento.png" height="200" width="200" uk-img>
                                  
                                </div>
                                    
                            </div>
                        </div>
                    </li>
                   


                    <li class="testing">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <img class="uk-card" data-src="<?php echo $filePath;?>images/skills/selenium.png" height="100" width="100" uk-img>
                                  
                                </div>
                                    
                            </div>
                            <div class="skills_heading" style="color: #067ceb;">
                                Selenium
                             </div>

                        </div>
                    </li>

                    <li class="lang">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <img class="uk-card" data-src="<?php echo $filePath;?>images/skills/java.png" height="100" width="100" uk-img>
                                  
                                </div>
                                    
                            </div>

                        </div>
                    </li>
                
                    <li class="integration">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <img class="uk-card" data-src="<?php echo $filePath;?>images/skills/github.png" height="100" width="100" uk-img>
                                  
                                </div>
                                    
                            </div>
                            <div class="skills_heading" style="color: black;">
                                GitHub
                             </div>
                        </div>
                    </li>
                    <li class="oracle">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <img class="uk-card" data-src="<?php echo $filePath;?>images/skills/hybris.svg" height="200" width="200" uk-img>
                                  
                                </div>
                                    
                            </div>

                        </div>
                    </li>
                    <li class="hybris">
                        
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <img class="uk-card" data-src="<?php echo $filePath;?>images/skills/azure.png" height="200" width="200" uk-img>
                                  
                                </div>
                                    
                            </div>

                        </div>
                    </li>
                    
                    <li class="database">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <img class="uk-card" data-src="<?php echo $filePath;?>images/skills/ms-sql.png" height="200" width="200" uk-img>
                                  
                                </div>
                                    
                            </div>

                        </div>
                    </li>
                    
                    <li class="cms">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <img class="uk-card  " data-src="<?php echo $filePath;?>images/skills/slack.png" height="200" width="200" uk-img>
                                  
                                </div>
                                    
                            </div>

                        </div>
                    </li>
                    <li class="testing">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <img class="uk-card" data-src="<?php echo $filePath;?>images/skills/cucumber.png" height="200" width="200" uk-img>
                                  
                                </div>
                                    
                            </div>

                        </div>
                    </li>
                    <li class="aem">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <img class="uk-card" data-src="<?php echo $filePath;?>images/skills/maven.png" height="200" width="200" uk-img>
                                  
                                </div>
                                    
                            </div>

                        </div>
                    </li>

                    
                    <li class="lang">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <img class="uk-card" data-src="<?php echo $filePath;?>images/skills/javaScript.png" height="100" width="100" uk-img>
                                  
                                </div>
                                    
                            </div>
                            <div class="skills_heading" style="color: black; font-weight: 600;">
                                JavaScript
                             </div>
                        </div>
                    </li>
                    
                    <li class="server">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <img class="uk-card" data-src="images/skills/weblogic.jpg" height="250" width="250" uk-img>
                                  
                                </div>
                                    
                            </div>

                        </div>  
                    </li>
                    <li class="lang">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <img class="uk-card" data-src="<?php echo $filePath;?>images/skills/gradle.png" height="200" width="200" uk-img>
                                  
                                </div>
                                    
                            </div>

                        </div>
                    </li>
                    
                    <li class="lang">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <img class="uk-card" data-src="<?php echo $filePath;?>images/skills/jquery.png" height="180" width="180" uk-img>
                                  
                                </div>
                                    
                            </div>

                        </div>
                    </li>


                    <li class="search">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <img class="uk-card" data-src="<?php echo $filePath;?>images/skills/endeca.png" height="180" width="180" uk-img>
                                  
                                </div>
                                    
                            </div>

                        </div>
                    </li>
                    
                   
                    <li class="lang">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <img class="uk-card" data-src="<?php echo $filePath;?>images/skills/xml.png" height="180" width="180" uk-img>
                                  
                                </div>
                                    
                            </div>

                        </div>
                    </li>
                    
                   
                    
                    <li class="database">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <img class="uk-card" data-src="<?php echo $filePath;?>images/skills/mysql-db.png" height="200" width="200" uk-img>
                                  
                                </div>
                                    
                            </div>

                        </div>
                    </li>
                    
                    
                    
                    
                    <li class="aem">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <img class="uk-card" data-src="<?php echo $filePath;?>images/skills/jenkins.png" height="180" width="180" uk-img>
                                  
                                </div>
                                    
                            </div>
 
                        </div>
                    </li>

                    
                    <li class="server">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <img class="uk-card" data-src="<?php echo $filePath;?>images/skills/tomcat.png" height="200" width="200" uk-img>
                                  
                                </div>
                                    
                            </div>

                        </div>
                    </li>
                    
                    <li class="server">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <img class="uk-card" data-src="<?php echo $filePath;?>images/skills/websphere.png" height="200" width="200" uk-img>
                                  
                                </div>
                                    
                            </div>

                        </div>
                    </li>
                    <li class="database">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <img class="uk-card" data-src="<?php echo $filePath;?>images/skills/ibm-db2.png" height="200" width="200" uk-img>
                                  
                                </div>
                                    
                            </div>
                        </div>
                    </li>
                    <li class="server">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <img class="uk-card" data-src="<?php echo $filePath;?>images/skills/jboss.png" height="200" width="200" uk-img>
                                  
                                </div>
                                    
                            </div>

                        </div>
                    </li>
                    <li class="database">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <img class="uk-card" data-src="<?php echo $filePath;?>images/skills/oracle-db.png" height="180" width="180" uk-img>
                                  
                                </div>
                                    
                            </div>

                        </div>
                    </li>
                    <li class="cms">
                        <div class="uk-card uk-card-default uk-card-body skills_card">
                            
                            <div class="uk-flex uk-margin uk-margin-remove-bottom">
                                <div class="uk-margin-auto uk-padding-small uk-margin-auto-vertical skills_heading">
                                    <img class="uk-card  " data-src="<?php echo $filePath;?>images/skills/skype.png" height="200" width="200" uk-img>
                                  
                                </div>
                                    
                            </div>

                        </div>
                    </li>
                  
                    
                    
                    
                
                </ul>

            
        
        </div>
    </div>
        
    </div>

    




   <!--<div class="" style="background-color: #f2f2f2;">
     <div class="uk-container uk-card  uk-margin-large-bottom" >
         <div  class="uk-margin uk-padding" uk-switcher="connect: #component-nav; toggle: > *;">
             <button class="uk-button skills_btn uk-button-default uk-margin-small-right uk-margin-small-top" onclick="btn1()">Oracle Commerce Suite</button>
             <button class="uk-button skills_btn uk-button-default uk-margin-small-right uk-margin-small-top">Endeca Guided Search</button>
             <button class="uk-button skills_btn uk-button-default uk-margin-small-right uk-margin-small-top">SAP Hybris eCommerce</button>
             <button class="uk-button skills_btn uk-button-default uk-margin-small-right uk-margin-small-top">Adobe Experience Manager</button>
             <button class="uk-button skills_btn uk-button-default uk-margin-small-right uk-margin-small-top">LANGUAGES</button>
             <button class="uk-button skills_btn uk-button-default uk-margin-small-right uk-margin-small-top ">DATABASE</button>
             <button class="uk-button skills_btn uk-button-default uk-margin-small-right uk-margin-small-top">APPLICATION SERVERS</button>
             <button class="uk-button skills_btn uk-button-default uk-margin-small-right uk-margin-small-top">CONFIGURATION MANAGEMENT</button>
             <button class="uk-button skills_btn uk-button-default uk-margin-small-right uk-margin-small-top">SERVICES EXECUTION / IMPLEMENTATION </button>
             
         </div>

         <div id="btn1_detail" class=" uk-padding-small box">
            <div class="uk-container uk-grid-small  uk-child-width-1-3@m" uk-grid>
                <div class="">
                    <div class="uk-card uk-card-default uk-card-body">
                        <div class="uk-card-badge label uk-label">Badge</div>
                        <h3 class="uk-card-title">Default</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <div class="uk-card-footer">
                            <a href="#" class="uk-button uk-button-text">Read more</a>
                        </div>
                    </div>
                    
                </div>
                <div>
                    <div class="uk-card uk-card-default uk-card-body">
                        <div class="uk-card-badge label uk-label">Badge</div>
                        <h3 class="uk-card-title">Primary</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <div class="uk-card-footer">
                            <a href="#" class="uk-button uk-button-text">Read more</a>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default uk-card-body">
                        <div class="uk-card-badge label uk-label">Badge</div>
                        <h3 class="uk-card-title">Secondary</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <div class="uk-card-footer">
                            <a href="#" class="uk-button uk-button-text">Read more</a>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default uk-card-body">
                        <div class="uk-card-badge label uk-label">Badge</div>
                        <h3 class="uk-card-title">Secondary</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <div class="uk-card-footer">
                            <a href="#" class="uk-button uk-button-text">Read more</a>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default uk-card-body">
                        <div class="uk-card-badge label uk-label">Badge</div>
                        <h3 class="uk-card-title">Secondary</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <div class="uk-card-footer">
                            <a href="#" class="uk-button uk-button-text">Read more</a>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default uk-card-body">
                        <div class="uk-card-badge label uk-label">Badge</div>
                        <h3 class="uk-card-title">Secondary</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <div class="uk-card-footer">
                            <a href="#" class="uk-button uk-button-text">Read more</a>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default uk-card-body">
                        <div class="uk-card-badge label uk-label">Badge</div>
                        <h3 class="uk-card-title">Secondary</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <div class="uk-card-footer">
                            <a href="#" class="uk-button uk-button-text">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
         </div>
        </div>
    </div>-->

    
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
    
