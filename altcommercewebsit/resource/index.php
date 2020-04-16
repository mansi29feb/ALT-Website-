<?php
include_once "../header.php";
?>
<!---Resource page starts-->
<div class="uk-container uk-margin uk-margin-large-bottom">
    <div id="case_heading" class="uk-h1 uk-text-center services_mainheading">Our Case Studies</div>
    <div  class="uk-card uk-card-body case_page uk-margin-large-bottom" >
        <!-- case1 -->
        <div id="case1" class="uk-card uk-card-body uk-animation-toggle uk-animation-fade case_box uk-card-default " >
            
            <div class=" uk-child-width-1-4@s uk-grid-collapse" uk-grid>
                <div class="uk-flex uk-width-1-4@s">
                    <div class="uk-text-center uk-text-bold uk-height-small uk-padding-small uk-padding-remove-top uk-padding-remove-bottom uk-flex uk-flex-middle case_subheading uk-margin-auto uk-margin-auto-vertical case_head">Multi-site</br>implementation
                        <div class="uk-text-meta uk-text-secondary"></div>
                    </div>
                  
                </div>
                <div class="uk-width-3-4@s uk-padding">
                    <div class="uk-margin uk-padding-small"> 
                        <div class="uk-margin uk-child-width-1-2@s uk-grid-collapse" uk-grid>
                            <div class="uk-width-auto@s uk-padding-small">
                                <img class="uk-margin-auto-vertical" data-src="<?php echo $filePath;?>images/client.svg" width="45" height="45" uk-img>
                            </div>
                            <div class="uk-width-expand@s">
                                <div class="uk-h3 case_points uk-margin-remove-bottom">
                                    Business Need: </div>
                                <span class="services_article_para uk-text-center@s uk-text-left@m">
                                    Client wanted to host another regional website with headless architecture and using the 
                                existing ATG infrastructure running other website. 
                                </span>
                            </div>
                        </div>
                           
                        <div class="uk-margin uk-child-width-1-2@s uk-grid-collapse" uk-grid>
                            <div class="uk-width-auto@s uk-padding-small">
                                <img class="uk-margin-auto-vertical " data-src="<?php echo $filePath;?>images/jigsaw.svg" width="45" height="45" uk-img>
                            </div>
                            <div class="uk-width-expand@s">
                                <div class="uk-h3 case_points uk-margin-remove-bottom">Our Solution: </div> 
                                <span class="services_article_para uk-text-center@s uk-text-left@m">
                                    Created various REST web services and utilized the multi-site feature to enable the multisite to run another website.
                                </span>
                            </div>
                        </div>

                        <div class="uk-margin uk-child-width-1-2@s uk-grid-collapse " uk-grid>
                            <div class="uk-width-auto@s uk-padding-small">
                                <img class=" uk-margin-auto-vertical " data-src="<?php echo $filePath;?>images/benefit.svg" width="45" height="45" uk-img>
                            </div>
                            <div class="uk-width-expand@s">
                                <div class="uk-h3 case_points uk-margin-remove-bottom">Benefits: </div> 
                                <span class="services_article_para uk-text-center@s uk-text-left@m">
                                    Without adding any extra infrastructure, client was able to launch the another regional website and start selling quickly, hence increasing the revenue without much of expense.
                                </span>  
                            </div>
                        </div>

                        <div class="uk-margin uk-child-width-1-2@s  uk-grid-collapse" uk-grid>
                            <div class="uk-width-auto@s uk-padding-small ">
                                <img class=" uk-margin-auto-vertical  " data-src="<?php echo $filePath;?>images/code.svg" width="45" height="45" uk-img>
                            </div>
                            <div class="uk-width-expand@s">
                                <div class="uk-h3 case_points uk-margin-remove-bottom">Technology used:</div>
                                <span class="services_article_para uk-text-center@s uk-text-left@m ">
                                    ATG, Dot(.) net, REST, Oracle DB 
                                </span>
                            </div>
                        </div>
                    
                    </div>

                </div>
                <div class="uk-align-center">
                    <button class=" uk-button uk-button-default uk-text-bold" onclick="goback1()">Back</button>
                </div>
                
   
                    
            </div>
        </div>

        <!-- case2  -->
        <div id="case2" class=" uk-card uk-card-body uk-card-default case_box uk-animation-toggle uk-animation-fade ">
            <div class="uk-child-width-1-4@s uk-grid-collapse" uk-grid>
                <div class="uk-flex uk-width-1-4@s">
                    <div class="uk-text-center uk-text-bold uk-height-medium uk-flex uk-flex-middle case_subheading uk-margin-auto uk-margin-auto-vertical case_head">Data Center Migration
                        <div class="uk-text-meta uk-text-secondary"></div>
                    </div>
                    
                </div>
                <div class="uk-width-3-4@s">
                    <div class="uk-margin uk-padding"> 
                        <div class="uk-margin uk-child-width-1-2@s uk-grid-collapse" uk-grid>
                            <div class="uk-width-auto@s uk-padding-small">
                                <img class="uk-margin-auto-vertical" data-src="<?php echo $filePath;?>images/client.svg" width="45" height="45" uk-img>
                            </div>
                            <div class="uk-width-expand@s">
                                <div class="uk-h3 case_points uk-margin-remove-bottom">
                                    Business Need: </div>
                                <span class="services_article_para uk-text-center@s uk-text-left@m">
                                    Client wanted to change its hosting provider and therefore whole infrastructure needed to be moved.
                                </span>
                            </div>
                        </div>
                           
                        <div class="uk-margin uk-child-width-1-2@s uk-grid-collapse" uk-grid>
                            <div class="uk-width-auto@s uk-padding-small">
                                <img class="uk-margin-auto-vertical " data-src="<?php echo $filePath;?>images/jigsaw.svg" width="45" height="45" uk-img>
                            </div>
                            <div class="uk-width-expand@s">
                                <div class="uk-h3 case_points uk-margin-remove-bottom">Our Solution: </div> 
                                <span class="services_article_para uk-text-center@s uk-text-left@m">
                                    Provided support to migrate all the Application hosted in ATG.
                                </span>
                            </div>
                        </div>

                        <div class="uk-margin uk-child-width-1-2@s uk-grid-collapse " uk-grid>
                            <div class="uk-width-auto@s uk-padding-small">
                                <img class=" uk-margin-auto-vertical " data-src="<?php echo $filePath;?>images/benefit.svg" width="45" height="45" uk-img>
                            </div>
                            <div class="uk-width-expand@s">
                                <div class="uk-h3 case_points uk-margin-remove-bottom">Benefits: </div> 
                                <span class="services_article_para uk-text-center@s uk-text-left@m">
                                    Migrated all non-prod and prod servers in one month time with a downtime of only 4 hours.
                                    Client got High-Availability/Disaster Recovery infrastructure for its retail portal.
                                </span>  
                            </div>
                        </div>

                        <div class="uk-margin uk-child-width-1-2@s uk-grid-collapse" uk-grid>
                            <div class="uk-width-auto@s uk-padding-small">
                                <img class=" uk-margin-auto-vertical  " data-src="<?php echo $filePath;?>images/code.svg" width="45" height="45" uk-img>
                            </div>
                            <div class="uk-width-expand@s">
                                <div class="uk-h3 case_points uk-margin-remove-bottom">Technology used:</div>
                                <span class="services_article_para uk-text-center@s uk-text-left@m ">
                                    
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="uk-align-center">
                    <button class=" uk-button uk-button-default uk-text-bold" onclick="goback2()">Back</button>
                </div>

            </div>
        </div>

        <!-- case3 -->
        <div id="case3" class="uk-card uk-card-body case_box uk-card-default uk-animation-toggle uk-animation-fade ">
            <div class="uk-child-width-1-4@s uk-grid-collapse" uk-grid>
                <div class="uk-flex uk-width-1-4@s">
                    <div class="uk-text-center uk-padding-small uk-text-bold uk-height-medium uk-flex uk-flex-middle case_subheading uk-margin-auto uk-margin-auto-vertical case_head">
                        Site Redesign
                    </div>
                    
                </div>
                <div class="uk-width-3-4@s">
                    <div class="uk-margin uk-padding"> 
                        <div class="uk-margin uk-child-width-1-2@s uk-grid-collapse" uk-grid>
                            <div class="uk-width-auto@s uk-padding-small">
                                <img class="uk-margin-auto-vertical" data-src="<?php echo $filePath;?>images/client.svg" width="45" height="45" uk-img>
                            </div>
                            <div class="uk-width-expand@s">
                                <div class="uk-h3 case_points uk-margin-remove-bottom">
                                    Business Need: </div>
                                <span class="services_article_para uk-text-center@s uk-text-left@m">
                                    Client wanted to redesign whole of its portal to make it responsive and mobile devices friendly.
                                </span>
                            </div>
                        </div>
                           
                        <div class="uk-margin uk-child-width-1-2@s uk-grid-collapse" uk-grid>
                            <div class="uk-width-auto@s uk-padding-small">
                                <img class="uk-margin-auto-vertical " data-src="<?php echo $filePath;?>images/jigsaw.svg" width="45" height="45" uk-img>
                            </div>
                            <div class="uk-width-expand@s">
                                <div class="uk-h3 case_points uk-margin-remove-bottom">Our Solution: </div> 
                                <span class="services_article_para uk-text-center@s uk-text-left@m">
                                    Provided solution with minimum TTM (Time-to-Market). 
                                    Delivered in 2 phases: 1st phase for path-to-product in 3 months and then rest of the site 
                                    in 2nd Phase of 3 months duration.
                                </span>
                            </div>
                        </div>

                        <div class="uk-margin uk-child-width-1-2@s uk-grid-collapse " uk-grid>
                            <div class="uk-width-auto@s uk-padding-small">
                                <img class=" uk-margin-auto-vertical " data-src="<?php echo $filePath;?>images/benefit.svg" width="45" height="45" uk-img>
                            </div>
                            <div class="uk-width-expand@s">
                                <div class="uk-h3 case_points uk-margin-remove-bottom">Benefits: </div> 
                                <span class="services_article_para uk-text-center@s uk-text-left@m">
                                    Site has been responsive with latest look and feel. 
                                    Also improved SEO a lot.
                                </span>  
                            </div>
                        </div>

                        <div class="uk-margin uk-child-width-1-2@s uk-grid-collapse" uk-grid>
                            <div class="uk-width-auto@s uk-padding-small">
                                <img class=" uk-margin-auto-vertical  " data-src="<?php echo $filePath;?>images/code.svg" width="45" height="45" uk-img>
                            </div>
                            <div class="uk-width-expand@s">
                                <div class="uk-h3 case_points uk-margin-remove-bottom">Technology used:</div>
                                <span class="services_article_para uk-text-center@s uk-text-left@m ">
                                   
                                </span>
                            </div>
                        </div>
                    
                    </div>
                </div>

                <div class="uk-align-center">
                    <button class=" uk-button uk-button-default uk-text-bold" onclick="goback3()">Back</button>
                </div>

            </div>
        </div>
    <!-- case 4 -->
        <div id="case4" class="uk-card uk-card-body uk-card-default case_box uk-animation-toggle uk-animation-fade ">
            <div class="uk-child-width-1-4@s uk-grid-collapse" uk-grid>
                <div class="uk-flex uk-width-1-4@s">
                    <div class="uk-text-center uk-padding-small uk-text-bold uk-height-medium uk-flex uk-flex-middle case_subheading uk-margin-auto uk-margin-auto-vertical case_head">Cross-Reference Tool
                        
                    </div>
                    
                </div>
                <div class="uk-width-3-4@s">
                    <div class="uk-margin uk-padding"> 
                        <div class="uk-margin uk-child-width-1-2@s uk-grid-collapse" uk-grid>
                            <div class="uk-width-auto@s uk-padding-small ">
                                <img class="uk-margin-auto-vertical" data-src="<?php echo $filePath;?>images/client.svg" width="45" height="45" uk-img>
                            </div>
                            <div class="uk-width-expand@s">
                                <div class="uk-h3 case_points uk-margin-remove-bottom">
                                    Business Need: </div>
                                <span class="services_article_para uk-text-center@s uk-text-left@m">
                                    Client wanted to develop a new cross-reference tool for their sales & marketing 
                                    team to offer matches for various competitor products. It was required to be a cloud based 
                                    solution outside of existing commerce systems. 
                                </span>
                            </div>
                        </div>
                           
                        <div class="uk-margin uk-child-width-1-2@s uk-grid-collapse" uk-grid>
                            <div class="uk-width-auto@s uk-padding-small">
                                <img class="uk-margin-auto-vertical " data-src="<?php echo $filePath;?>images/jigsaw.svg" width="45" height="45" uk-img>
                            </div>
                            <div class="uk-width-expand@s">
                                <div class="uk-h3 case_points uk-margin-remove-bottom">Our Solution: </div> 
                                <span class="services_article_para uk-text-center@s uk-text-left@m">
                                    A headless architecture offering graphql based services developed on top of Micronaut framework. 
                                    A containerised solution which was deployed on Azure Kubernetes Service with 
                                    authentication/authorization integrated with Azure AD. 
                                    A react based frontend was hooked up providing state-of-the-art UX. 
                                </span>
                            </div>
                        </div>

                        <div class="uk-margin uk-child-width-1-2@s uk-grid-collapse " uk-grid>
                            <div class="uk-width-auto@s uk-padding-small">
                                <img class=" uk-margin-auto-vertical " data-src="<?php echo $filePath;?>images/benefit.svg" width="45" height="45" uk-img>
                            </div>
                            <div class="uk-width-expand@s">
                                <div class="uk-h3 case_points uk-margin-remove-bottom">Benefits: </div> 
                                <span class="services_article_para uk-text-center@s uk-text-left@m">
                                    Easy access to various cross reference data for customer’s team in the field. With data 
                                    updation requests and approval workflows, it always offered up-to-date information which 
                                    is critical for sales & marketing team. 
                                </span>  
                            </div>
                        </div>

                        <div class="uk-margin uk-child-width-1-2@s uk-grid-collapse" uk-grid>
                            <div class="uk-width-auto@s uk-padding-small ">
                                <img class=" uk-margin-auto-vertical  " data-src="<?php echo $filePath;?>images/code.svg" width="45" height="45" uk-img>
                            </div>
                            <div class="uk-width-expand@s">
                                <div class="uk-h3 case_points uk-margin-remove-bottom">Technology used:</div>
                                <span class="services_article_para uk-text-center@s uk-text-left@m ">
                                    Micronaut, GraphQL, Azure, Kubernetes, React
                                </span>
                            </div>
                        </div>
                    
                    </div>
                </div>

                <div class="uk-align-center">
                    <button class=" uk-button uk-button-default uk-text-bold" onclick="goback4()">Back</button>
                </div>           
             </div>
        </div>
        <!-- case 5 -->
        <div id="case5" class="uk-card uk-card-body  uk-card-default case_box">
            <div class="uk-child-width-1-4@s uk-grid-collapse" uk-grid>
                <div class="uk-flex uk-width-1-4@s">
                    <div class="uk-text-center uk-padding-small uk-text-bold uk-height-medium uk-flex uk-flex-middle case_subheading uk-margin-auto uk-margin-auto-vertical case_head">Membership (Loyalty) Program
                        
                    </div>
                    
                </div>
                <div class="uk-width-3-4@s">
                    <div class="uk-margin uk-padding"> 
                        <div class="uk-margin uk-child-width-1-2@s uk-grid-collapse" uk-grid>
                            <div class="uk-width-auto@s uk-padding-small">
                                <img class="uk-margin-auto-vertical" data-src="<?php echo $filePath;?>images/client.svg" width="45" height="45" uk-img>
                            </div>
                            <div class="uk-width-expand@s">
                                <div class="uk-h3 case_points uk-margin-remove-bottom">
                                    Business Need: </div>
                                <span class="services_article_para uk-text-center@s uk-text-left@m">
                                    Client wanted to launch a membership(loyalty) program where customers can 
                                    register for the membership with small fee and they get additional discount 
                                    on the all the products sold on the website or offline stores.
                                </span>
                            </div>
                        </div>
                           
                        <div class="uk-margin uk-child-width-1-2@s uk-grid-collapse" uk-grid>
                            <div class="uk-width-auto@s uk-padding-small">
                                <img class="uk-margin-auto-vertical " data-src="<?php echo $filePath;?>images/jigsaw.svg" width="45" height="45" uk-img>
                            </div>
                            <div class="uk-width-expand@s">
                                <div class="uk-h3 case_points uk-margin-remove-bottom">Our Solution: </div> 
                                <span class="services_article_para uk-text-center@s uk-text-left@m">
                                    Developed the overall solution to facilitate the customer to buy the membership as a 
                                    electronic service and a coupon was generated for the customer to be used while checkout. 
                                    Members were automatically given a set of discounts while checkout.
                                </span>
                            </div>
                        </div>

                        <div class="uk-margin uk-child-width-1-2@s uk-grid-collapse " uk-grid>
                            <div class="uk-width-auto@s uk-padding-small">
                                <img class=" uk-margin-auto-vertical " data-src="<?php echo $filePath;?>images/benefit.svg" width="45" height="45" uk-img>
                            </div>
                            <div class="uk-width-expand@s">
                                <div class="uk-h3 case_points uk-margin-remove-bottom">Benefits: </div> 
                                <span class="services_article_para uk-text-center@s uk-text-left@m">
                                    Client was able to drive promotional events and increase the sales online and attract 
                                    the dedicated customer base.
                                </span>  
                            </div>
                        </div>

                        <div class="uk-margin uk-child-width-1-2@s uk-grid-collapse" uk-grid>
                            <div class="uk-width-auto@s uk-padding-small">
                                <img class=" uk-margin-auto-vertical  " data-src="<?php echo $filePath;?>images/code.svg" width="45" height="45" uk-img>
                            </div>
                            <div class="uk-width-expand@s">
                                <div class="uk-h3 case_points uk-margin-remove-bottom">Technology used:</div>
                                <span class="services_article_para uk-text-center@s uk-text-left@m ">
                                    
                                </span>
                            </div>
                        </div>
                    
                    </div>
                </div>
                <div class="uk-align-center">
                    <button class=" uk-button uk-button-default uk-text-bold" onclick="goback5()">Back</button>
                </div>
            </div>
        </div>

        <div id="case6" class="uk-card uk-card-body  uk-card-default case_box uk-animation-toggle uk-animation-fade " >
            <div class="uk-child-width-1-4@s uk-grid-collapse" uk-grid>
                <div class="uk-flex uk-width-1-4@s">
                    <div class="uk-text-center uk-text-bold uk-height-medium uk-padding-small uk-padding-remove-top uk-padding-remove-bottom uk-flex uk-flex-middle case_subheading uk-margin-auto uk-margin-auto-vertical case_head">Multi-site implementation
                      
                    </div>
                    
                </div>
                <div class="uk-width-3-4@s uk-padding">
                    <div class="uk-margin uk-padding-small uk-margin-small-left "> 
                        <div class="uk-margin uk-child-width-1-2@s uk-grid-collapse" uk-grid>
                            <div class="uk-width-auto@s uk-padding-small">
                                <img class="uk-margin-auto-vertical" data-src="<?php echo $filePath;?>images/client.svg" width="45" height="45" uk-img>
                            </div>
                            <div class="uk-width-expand@s">
                                <div class="uk-h3 case_points uk-margin-remove-bottom">
                                    Business Need: </div>
                                <span class="services_article_para uk-text-center@s uk-text-left@m">
                                    Client wanted to launch another regional(Canada) website within the  existing ATG infrastructure running other website.
                                </span>
                            </div>
                        </div>
                           
                        <div class="uk-margin uk-child-width-1-2@s uk-grid-collapse" uk-grid>
                            <div class="uk-width-auto@s uk-padding-small">
                                <img class="uk-margin-auto-vertical " data-src="<?php echo $filePath;?>images/jigsaw.svg" width="45" height="45" uk-img>
                            </div>
                            <div class="uk-width-expand@s">
                                <div class="uk-h3 case_points uk-margin-remove-bottom">Our Solution: </div> 
                                <span class="services_article_para uk-text-center@s uk-text-left@m">
                                    Using multisite feature of site identification by the context root, a new regional website was 
                                    launched by using the existing infrastructure and using the same code base.
                                </span>
                            </div>
                        </div>

                        <div class="uk-margin uk-child-width-1-2@s uk-grid-collapse " uk-grid>
                            <div class="uk-width-auto@s uk-padding-small">
                                <img class=" uk-margin-auto-vertical " data-src="<?php echo $filePath;?>images/benefit.svg" width="45" height="45" uk-img>
                            </div>
                            <div class="uk-width-expand@s">
                                <div class="uk-h3 case_points uk-margin-remove-bottom">Benefits: </div> 
                                <span class="services_article_para uk-text-center@s uk-text-left@m">
                                    Without adding any extra infrastructure, client was able to launch the another regional 
                                    website and start selling quickly, hence increasing the revenue without much of expense.
                                </span>  
                            </div>
                        </div>

                        <div class="uk-margin uk-child-width-1-2@s uk-grid-collapse" uk-grid>
                            <div class="uk-width-auto@s uk-padding-small">
                                <img class=" uk-margin-auto-vertical  " data-src="<?php echo $filePath;?>images/code.svg" width="45" height="45" uk-img>
                            </div>
                            <div class="uk-width-expand@s">
                                <div class="uk-h3 case_points uk-margin-remove-bottom">Technology used:</div>
                                <span class="services_article_para uk-text-center@s uk-text-left@m ">
                                    ATG, Oracle DB, JSP, Servlet
                                </span>
                            </div>
                        </div>
                    
                    </div>
                </div>
                <div class="uk-align-center">
                    <button class=" uk-button uk-button-default uk-text-bold" onclick="goback6()">Back</button>
                </div>
            </div>
        </div>

        <!-- case 7 -->
        <div id="case7" class="uk-card uk-card-body uk-card-default case_box uk-animation-toggle uk-animation-fade ">
            <div class="uk-child-width-1-4@s uk-grid-collapse" uk-grid>
                <div class="uk-flex uk-width-1-4@s">
                    <div class="uk-text-center uk-padding-small uk-text-bold uk-height-medium uk-flex uk-flex-middle case_subheading uk-margin-auto uk-margin-auto-vertical case_head">SalesForce Integration
                        
                    </div>
                    
                </div>
                <div class="uk-width-3-4@s">
                    <div class="uk-margin uk-padding"> 
                        <div class="uk-margin uk-child-width-1-2@s uk-grid-collapse" uk-grid>
                            <div class="uk-width-auto@s uk-padding-small">
                                <img class="uk-margin-auto-vertical" data-src="<?php echo $filePath;?>images/client.svg" width="45" height="45" uk-img>
                            </div>
                            <div class="uk-width-expand@s">
                                <div class="uk-h3 case_points uk-margin-remove-bottom">
                                    Business Need: </div>
                                <span class="services_article_para uk-text-center@s uk-text-left@m">
                                    Requirement was to provide integration between the commerce site and 
                                    a pro-toolbox in Salesforce with some access control rules in place. 
                                </span>
                            </div>
                        </div>
                           
                        <div class="uk-margin uk-child-width-1-2@s uk-grid-collapse" uk-grid>
                            <div class="uk-width-auto@s uk-padding-small">
                                <img class="uk-margin-auto-vertical " data-src="<?php echo $filePath;?>images/jigsaw.svg" width="45" height="45" uk-img>
                            </div>
                            <div class="uk-width-expand@s">
                                <div class="uk-h3 case_points uk-margin-remove-bottom">Our Solution: </div> 
                                <span class="services_article_para uk-text-center@s uk-text-left@m">
                                    Single sign-on (SSO) and Single Logout (SLO) capabilities were implemented between ATG 
                                    and Salesforce with ATG acting as an Identity Provider (IdP) whereas Salesforce acting as 
                                    Service Provider (SP).
                                </span>
                            </div>
                        </div>

                        <div class="uk-margin uk-child-width-1-2@s uk-grid-collapse " uk-grid>
                            <div class="uk-width-auto@s uk-padding-small">
                                <img class=" uk-margin-auto-vertical " data-src="<?php echo $filePath;?>images/benefit.svg" width="45" height="45" uk-img>
                            </div>
                            <div class="uk-width-expand@s">
                                <div class="uk-h3 case_points uk-margin-remove-bottom">Benefits: </div> 
                                <span class="services_article_para uk-text-center@s uk-text-left@m">
                                    A seamless integration between ATG and Salesforce with access control rules offered 
                                    an enriching CX and a significant increase for professionals opting for the pro-toolbox program.
                                </span>  
                            </div>
                        </div>

                        <div class="uk-margin uk-child-width-1-2@s uk-grid-collapse" uk-grid>
                            <div class="uk-width-auto@s uk-padding-small">
                                <img class=" uk-margin-auto-vertical  " data-src="<?php echo $filePath;?>images/code.svg" width="45" height="45" uk-img>
                            </div>
                            <div class="uk-width-expand@s">
                                <div class="uk-h3 case_points uk-margin-remove-bottom">Technology used:</div>
                                <span class="services_article_para uk-text-center@s uk-text-left@m ">
                                    ATG, Salesforce, SAML, REST, Groovy
                                </span>
                            </div>
                        </div>
                    
                    </div>
                </div>
                <div class="uk-align-center">
                    <button class=" uk-button uk-button-default uk-text-bold" onclick="goback7()">Back</button>
                </div>
            </div>
        </div>

        <div id="case8" class="uk-card uk-card-body case_box uk-card-default uk-animation-toggle uk-animation-fade ">
            <div class="uk-child-width-1-4@s uk-grid-collapse" uk-grid>
                <div class="uk-flex uk-width-1-4@s">
                    <div class="uk-text-center uk-padding-small uk-text-bold uk-height-medium uk-flex uk-flex-middle case_subheading uk-margin-auto uk-margin-auto-vertical case_head">Twillo Integration
                        <div class="uk-text-meta uk-text-secondary"></div>
                    </div>
                    
                </div>
                <div class="uk-width-3-4@s">
                    <div class="uk-margin uk-padding"> 
                        <div class="uk-margin uk-child-width-1-2@s uk-grid-collapse" uk-grid>
                            <div class="uk-width-auto@s uk-padding-small ">
                                <img class="uk-margin-auto-vertical" data-src="<?php echo $filePath;?>images/client.svg" width="45" height="45" uk-img>
                            </div>
                            <div class="uk-width-expand@s">
                                <div class="uk-h3 case_points uk-margin-remove-bottom">
                                    Business Need: </div>
                                <span class="services_article_para uk-text-center@s uk-text-left@m">
                                    Integrate the Automatic voice and message communication API for the website. 
                                    In case of any special orders placed on site automatic message and call needs 
                                    to be triggered to sales representative.
                                </span>
                            </div>
                        </div>
                           
                        <div class="uk-margin uk-child-width-1-2@s uk-grid-collapse" uk-grid>
                            <div class="uk-width-auto@s uk-padding-small">
                                <img class="uk-margin-auto-vertical " data-src="<?php echo $filePath;?>images/jigsaw.svg" width="45" height="45" uk-img>
                            </div>
                            <div class="uk-width-expand@s">
                                <div class="uk-h3 case_points uk-margin-remove-bottom">Our Solution: </div> 
                                <span class="services_article_para uk-text-center@s uk-text-left@m">
                                    Suggested Twillo Communication and Message API. Integrated the API through REST. 
                                    XML configurations are made for message and voice call generation. So business can change it easily. 
                                </span>
                            </div>
                        </div>

                        <div class="uk-margin uk-child-width-1-2@s uk-grid-collapse " uk-grid>
                            <div class="uk-width-auto@s uk-padding-small">
                                <img class=" uk-margin-auto-vertical " data-src="<?php echo $filePath;?>images/benefit.svg" width="45" height="45" uk-img>
                            </div>
                            <div class="uk-width-expand@s">
                                <div class="uk-h3 case_points uk-margin-remove-bottom">Benefits: </div> 
                                <span class="services_article_para uk-text-center@s uk-text-left@m">
                                    Cloud Based Configuration Management. Messages can be changed by Business any time. 
                                </span>  
                            </div>
                        </div>

                        <div class="uk-margin uk-child-width-1-2@s uk-grid-collapse" uk-grid>
                            <div class="uk-width-auto@s uk-padding-small">
                                <img class=" uk-margin-auto-vertical  " data-src="<?php echo $filePath;?>images/code.svg" width="45" height="45" uk-img>
                            </div>
                            <div class="uk-width-expand@s">
                                <div class="uk-h3 case_points uk-margin-remove-bottom">Technology used:</div>
                                <span class="services_article_para uk-text-center@s uk-text-left@m ">
                                    Rest, XML, Twilio, ATG, Cloud
                                </span>
                            </div>
                        </div>
                    
                    </div>
                </div>
                <div class="uk-align-center">
                    <button class=" uk-button uk-button-default uk-text-bold" onclick="goback8()">Back</button>
                </div>
            </div>
        </div>

        <div id="case9" class="uk-card uk-card-body  uk-card-default case_box uk-animation-toggle uk-animation-fade ">
            <div class="uk-child-width-1-4@s uk-grid-collapse" uk-grid>
                <div class="uk-flex uk-width-1-4@s">
                    <div class="uk-text-center uk-padding-small uk-text-bold uk-height-medium uk-flex uk-flex-middle case_subheading uk-margin-auto uk-margin-auto-vertical case_head">Multi-part search
                        <div class="uk-text-meta uk-text-secondary"></div>
                    </div>
                    
                </div>
                <div class="uk-width-3-4@s">
                    <div class="uk-margin uk-padding"> 
                        <div class="uk-margin uk-child-width-1-2@s uk-grid-collapse" uk-grid>
                            <div class="uk-width-auto@s uk-padding-small">
                                <img class="uk-margin-auto-vertical" data-src="<?php echo $filePath;?>images/client.svg" width="45" height="45" uk-img>
                            </div>
                            <div class="uk-width-expand@s">
                                <div class="uk-h3 case_points uk-margin-remove-bottom">
                                    Business Need: </div>
                                <span class="services_article_para uk-text-center@s uk-text-left@m">
                                    Functionality to upload/search multiple parts. Functionality should to be capable to handle 
                                    different category of parts like Hardware, Chemical, Hazmat, Lighting, Kitting etc.
                                </span>
                            </div>
                        </div>
                           
                        <div class="uk-margin uk-child-width-1-2@s uk-grid-collapse" uk-grid>
                            <div class="uk-width-auto@s uk-padding-small">
                                <img class="uk-margin-auto-vertical " data-src="<?php echo $filePath;?>images/jigsaw.svg" width="45" height="45" uk-img>
                            </div>
                            <div class="uk-width-expand@s">
                                <div class="uk-h3 case_points uk-margin-remove-bottom">Our Solution: </div> 
                                <span class="services_article_para uk-text-center@s uk-text-left@m">
                                    Proposed Endeca and ATG based solution to get multiple parts at one time. 
                                    To improve First Load Time used AJAX based lazy loading.
                                </span>
                            </div>
                        </div>

                        <div class="uk-margin uk-child-width-1-2@s uk-grid-collapse " uk-grid>
                            <div class="uk-width-auto@s uk-padding-small">
                                <img class=" uk-margin-auto-vertical " data-src="<?php echo $filePath;?>images/benefit.svg" width="45" height="45" uk-img>
                            </div>
                            <div class="uk-width-expand@s">
                                <div class="uk-h3 case_points uk-margin-remove-bottom">Benefits: </div> 
                                <span class="services_article_para uk-text-center@s uk-text-left@m">
                                    More than 500 parts can be searched and able to add to cart at a time. 
                                    Price and Inventory taken runtime from different third party applications.  </span>  
                            </div>
                        </div>

                        <div class="uk-margin uk-child-width-1-2@s uk-grid-collapse" uk-grid>
                            <div class="uk-width-auto@s uk-padding-small">
                                <img class=" uk-margin-auto-vertical  " data-src="<?php echo $filePath;?>images/code.svg" width="45" height="45" uk-img>
                            </div>
                            <div class="uk-width-expand@s">
                                <div class="uk-h3 case_points uk-margin-remove-bottom">Technology used:</div>
                                <span class="services_article_para uk-text-center@s uk-text-left@m ">
                                    Endeca, ATG, REST, Jquery, AJAX.
                                </span>
                            </div>
                        </div>
                    
                    </div>
                </div>
                <div class="uk-align-center">
                    <button class=" uk-button uk-button-default uk-text-bold" onclick="goback9()">Back</button>
                </div>            
            </div>
        </div>
        
        <div id="main">
        <div  class="uk-grid-medium uk-grid-match uk-child-width-expand@s uk-text-center" uk-grid >
            <div class="uk-inline">
                <div class="case_card uk-card uk-card-default uk-margin uk-card-hover uk-transition-toggle" tabindex="0" >
                    
                        <img class="uk-transition-scale-up" src="<?php echo $filePath;?>images/case/case11.jpg" alt="" style="opacity: 0.9;">
                        <div class="uk-overlay uk-overlay-primary uk-position-center case_link"><button type="button" class="uk-button uk-button-text cases_btnlink"  onclick="case_study_open1()">Multi-site implementation</button>
                        </div>
        
                    
                </div>
            </div>
            <div class="uk-inline">
                <div class="case_card uk-card uk-card-default uk-margin uk-card-hover uk-transition-toggle" tabindex="0" >
                    
                        <img class="uk-transition-scale-up" src="<?php echo $filePath;?>images/case/case2.jpg" alt="" style="opacity: 0.9;">
                        <div class="uk-overlay uk-overlay-primary uk-position-center case_link"><button type="button" class="uk-button uk-button-text cases_btnlink"  onclick="case_study_open2()">Data Center Migration</button>
                        </div>
        
                    
                </div>
            </div>
            <div class="uk-inline">
                <div class="case_card uk-card uk-card-default uk-margin uk-card-hover uk-transition-toggle" tabindex="0" >
                    
                        <img class="uk-transition-scale-up" src="<?php echo $filePath;?>images/case/case3.jpg" alt="" style="opacity: 0.9;">
                        <div class="uk-overlay uk-overlay-primary uk-position-center case_link"><button type="button" class="uk-button uk-button-text cases_btnlink"  onclick="case_study_open3()">Site Redesign</button>
                        </div>
        
                    
                </div>
            </div>
        </div>
        
        <div class="uk-grid-medium uk-child-width-expand@s uk-text-center" uk-grid>
            <div class="uk-inline">
                <div class="case_card uk-card uk-card-default uk-margin uk-card-hover uk-transition-toggle" tabindex="0" >
                    
                        <img class="uk-transition-scale-up" src="<?php echo $filePath;?>images/case/case4.jpg" alt="" style="opacity: 0.9;">
                        <div class="uk-overlay uk-overlay-primary uk-position-center case_link"><button type="button" class="uk-button uk-button-text cases_btnlink"  onclick="case_study_open4()">Cross-Reference Tool</button>
                        </div>
        
                    
                </div>
            </div>
            <div class="uk-inline">
                <div class="case_card uk-card uk-card-default uk-margin uk-card-hover uk-transition-toggle" tabindex="0" >
                    
                        <img class="uk-transition-scale-up" src="<?php echo $filePath;?>images/case/case5.jpg" alt="" style="opacity: 0.9;">
                        <div class="uk-overlay uk-overlay-primary uk-position-center case_link"><button type="button" class="uk-button uk-button-text cases_btnlink"  onclick="case_study_open5()">Membership (Loyalty) Program</button>
                        </div>
        
                    
                </div>
            </div>
            <div class="uk-inline">
                <div class="case_card uk-card uk-card-default uk-margin uk-card-hover uk-transition-toggle" tabindex="0" >
                    
                        <img class="uk-transition-scale-up" src="<?php echo $filePath;?>images/case/case6.jpg" alt="" style="opacity: 0.9;">
                        <div class="uk-overlay uk-overlay-primary uk-position-center case_link"><button type="button" class="uk-button uk-button-text cases_btnlink"  onclick="case_study_open6()">Multi-site implementation (Canada)</button>
                        </div>
        
                    
                </div>
            </div>

        </div>
        
        <div class="uk-grid-medium uk-child-width-expand@s uk-text-center" uk-grid>
            <div class="uk-inline">
                <div class="case_card uk-card uk-card-default uk-margin uk-card-hover uk-transition-toggle" tabindex="0" >
                    
                        <img class="uk-transition-scale-up" src="<?php echo $filePath;?>images/case/case7.jpg" alt="" style="opacity: 0.9;">
                        <div class="uk-overlay uk-overlay-primary uk-position-center case_link"><button type="button" class="uk-button uk-button-text cases_btnlink"  onclick="case_study_open7()">SalesForce Integration</button>
                        </div>
        
                    
                </div>
            </div>
            <div class="uk-inline">
                <div class="case_card uk-card uk-card-default uk-margin uk-card-hover uk-transition-toggle" tabindex="0" >
                    
                        <img class="uk-transition-scale-up" src="<?php echo $filePath;?>images/case/case8.jpg" alt="" style="opacity: 0.9;">
                        <div class="uk-overlay uk-overlay-primary uk-position-center case_link"><button type="button" class="uk-button uk-button-text cases_btnlink"  onclick="case_study_open8()">Twillo Integration</button>
                        </div>
        
                    
                </div>
            </div>
            <div class="uk-inline">
                <div class="case_card uk-card uk-card-default uk-margin uk-card-hover uk-transition-toggle" tabindex="0" >
                    
                        <img class="uk-transition-scale-up" src="<?php echo $filePath;?>images/case/case10.jpg" alt="" style="opacity: 0.9;">
                        <div class="uk-overlay uk-overlay-primary uk-position-center case_link"><button type="button" class="uk-button uk-button-text cases_btnlink"  onclick="case_study_open9()">Multi-part search</button>
                        </div>
        
                    
                </div>
            </div>

        </div>
    </div>
        
    </div>
</div>


<!---Resource page ends-->

<?php
include_once "../footer.php"
?>
<div>
    <script>
                        function case_study_open1()
                        {
                            document.getElementById("case1").style.display="block";
                            document.getElementById("main").style.display="none";
                            document.getElementById("case_heading").style.display="none";
                        }
                        function case_study_open2()
                        {
                            document.getElementById("case2").style.display="block";
                            document.getElementById("main").style.display="none";
                            document.getElementById("case_heading").style.display="none";
                        }
                        function case_study_open3()
                        {
                            document.getElementById("case3").style.display="block";
                            document.getElementById("main").style.display="none";
                            document.getElementById("case_heading").style.display="none";
                        }
                        function case_study_open4()
                        {
                            document.getElementById("case4").style.display="block";
                            document.getElementById("main").style.display="none";
                            document.getElementById("case_heading").style.display="none";
                        }
                        function case_study_open5()
                        {
                            document.getElementById("case5").style.display="block";
                            document.getElementById("main").style.display="none";
                            document.getElementById("case_heading").style.display="none";
                        }
                        function case_study_open6()
                        {
                            document.getElementById("case6").style.display="block";
                            document.getElementById("main").style.display="none";
                            document.getElementById("case_heading").style.display="none";
                        }
                        function case_study_open7()
                        {
                            document.getElementById("case7").style.display="block";
                            document.getElementById("main").style.display="none";
                            document.getElementById("case_heading").style.display="none";
                        }
                        function case_study_open8()
                        {
                            document.getElementById("case8").style.display="block";
                            document.getElementById("main").style.display="none";
                            document.getElementById("case_heading").style.display="none";
                        }
                        function case_study_open9()
                        {
                            document.getElementById("case9").style.display="block";
                            document.getElementById("main").style.display="none";
                            document.getElementById("case_heading").style.display="none";
                        }
                       
                        function goback1()
                        {
                            document.getElementById("case1").style.display="none";
                            document.getElementById("main").style.display="block";
                           document.getElementById("case_heading").style.display="block";
                        }
                        function goback2()
                        {
                            document.getElementById("case2").style.display="none";
                            document.getElementById("main").style.display="block";
                            document.getElementById("case_heading").style.display="block";
                        }
                        function goback3()
                        {
                            document.getElementById("case3").style.display="none";
                            document.getElementById("main").style.display="block";
                            document.getElementById("case_heading").style.display="block";
                        }
                        function goback4()
                        {
                            document.getElementById("case4").style.display="none";
                            document.getElementById("main").style.display="block";
                            document.getElementById("case_heading").style.display="block";
                        }
                        function goback5()
                        {
                            document.getElementById("case5").style.display="none";
                            document.getElementById("main").style.display="block";
                            document.getElementById("case_heading").style.display="block";
                        }
                        function goback6()
                        {
                            document.getElementById("case6").style.display="none";
                            document.getElementById("main").style.display="block";
                            document.getElementById("case_heading").style.display="block";
                        }
                        function goback7()
                        {
                            document.getElementById("case7").style.display="none";
                            document.getElementById("main").style.display="block";
                            document.getElementById("case_heading").style.display="block";
                        }
                        function goback8()
                        {
                            document.getElementById("case8").style.display="none";
                            document.getElementById("main").style.display="block";
                            document.getElementById("case_heading").style.display="block";
                        }
                        function goback9()
                        {
                            document.getElementById("case9").style.display="none";
                            document.getElementById("main").style.display="block";
                            document.getElementById("case_heading").style.display="block";
                        }
                                 
    
    </script>
