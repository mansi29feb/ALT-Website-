<?php
    $pageTitle='Digital Commerce with ALT Digital Technologies';
    $pageDescription  = 'ALT Digital Technologies is an expert in Omni-Channel Commerce and delivering Oracle Commerce, Commerce Cloud and the suite of Oracle CX products.';
    $currentPage = 'home';
     include_once 'header.php';
?> 

<!--Slider start-->
   
    <div class="banner uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slideshow="">

    <ul class="uk-slideshow-items  uk-height-medium">
        <li>
            <div class="home-ban">
            <img class="responsively-lazy " src="<?php echo $filePath;?>images/banner/banner.jpg" alt="Driving Innovation" 
            data-srcset="<?php echo $filePath;?>images/banner/banner.jpg, <?php echo $filePath;?>images/banner/banner.webp" 
            data-srcset="<?php echo $filePath;?>images/banner/banner.jpg 400w, <?php echo $filePath;?>images/banner/banner.webp 400w,
            <?php echo $filePath;?>images/banner/banner.jpg 600w,<?php echo $filePath;?>images/banner/banner.webp 600w, 
            <?php echo $filePath;?>images/banner/banner.jpg 1000w,<?php echo $filePath;?>images/banner/banner.webp 1000w," 
            srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" uk-cover/> 
            </div>
            <div class="caption-text uk-position-cover  uk-light">
                <div class="uk-position-center-left  uk-text-left uk-margin-xlarge-left">
                <div class="home-text-middle">
                    <h1 class="main_heading uk-card-title  slider-title" style="color:white !important; font-size:55 !important;">Driving Innovation, Driving
                    <br> Results</h1>
                    <p class="sub_para">Our focus on innovation is based on delivering results for our clients.</p>
                </div>
                </div>
            </div>
        </li>
        <li>
            <img class="responsively-lazy home-ban" src="<?php echo $filePath;?>images/banner/banner-2.jpg" alt="Agile" 
            data-srcset="<?php echo $filePath;?>images/banner/banner-2.jpg 400w, <?php echo $filePath;?>images/banner/banner-2.webp 400w,
            <?php echo $filePath;?>images/banner/banner-2.jpg 600w,<?php echo $filePath;?>images/banner/banner-2.webp 600w, 
            <?php echo $filePath;?>images/banner/banner-2.jpg 1000w,<?php echo $filePath;?>images/banner/banner-2.webp 1000w,"
            srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" uk-cover/>
            <div class="caption-text uk-position-cover uk-light">
                <div class="uk-position-center-left uk-text-left  uk-margin-xlarge-left">
                    <div class="home-text-middle">
                        <h1 class="main_heading uk-card-title  slider-title" style="color:white !important; font-size:55 !important;">Agile, Experienced<br>&amp; Effective</h1>
                        <p class="sub_para">ALT Digital Technology is an expert in Omni-Channel Commerce
                        <br> and delivering Oracle Commerce, Commerce Cloud and
                        <br> the suite of Oracle CX products.</p>
                    </div>
                </div>
            </div>
        </li>
        <li>
            <img class="responsively-lazy home-ban" src="<?php echo $filePath;?>images/banner/banner-3.jpg" alt="ALT Digital Technologies" 
            data-srcset="<?php echo $filePath;?>images/banner/banner-3.jpg 400w, <?php echo $filePath;?>images/banner/banner-3.webp 400w,
            <?php echo $filePath;?>images/banner/banner-3.jpg 600w,<?php echo $filePath;?>images/banner/banner-3.webp 600w, 
            <?php echo $filePath;?>images/banner/banner-3.jpg 1000w,<?php echo $filePath;?>images/banner/banner-3.webp 1000w,"
            srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" uk-cover/>
            <div class="caption-text uk-position-cover uk-light">
                <div class="uk-position-center-left uk-text-left uk-margin-xlarge-left">
                    <div class="home-text-middle">
                        <h1 class="main_heading uk-card-title  slider-title" style="color:white !important; font-size:55 !important;">ALT Digital Technologies</h1>
                        <p class="sub_para">We focus all our work not only on developing and
                         <br>maintaining the products and services,
                        <br> but rather on building long term relationships.</p>
                    </div>      
                </div>
            </div>
        </li>
        
    </ul>

    <div class="uk-light">
        <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
        <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>
    </div>

</div>
<!-- Slider ends-->
<!-- what we do start -->
<div class="uk-container">
    <div class="uk-child-width-1-1@s uk-margin-large-top uk-text-center uk-margin-medium-bottom" uk-grid >
    <div class="uk-width-1-1@s uk-margin-medium-top">
                    <div class="uk-text-centre section2">
                        <button class="uk-button uk-text-capitalize uk-padding-small uk-margin-medium-top uk-padding-remove-vertical btn" disabled uk-scrollspy="cls: uk-animation-scale-up">Services</button>
                        <h2 class="uk-h2 uk-text-secondary uk-margin-small-top section2_heading" uk-scrollspy="cls: uk-animation-fade">What We do</h2>
                        <p class="uk-text-center section2_para " uk-scrollspy="cls: uk-animation-slide-top">We work beyond the norms of an established client relationship by investing more time to understand customer current and future business needs and recommend global best practices.</p>
                    </div>
                </div>
    </div>            
    <div class="uk-text-center uk-margin-large-bottom" uk-grid>
        <div class="uk-width-1-2 uk-visible@s" uk-grid uk-scrollspy="cls: uk-animation-slide-left-medium; repeat: false">
            <div>
                <div class="uk-padding what-we-do-img">
                    <!-- <img  alt="middle image" src="<?php echo $filePath;?>images/what-we-do.png" /> -->
                    <img style="width:95% !important;" class="responsively-lazy" alt="middle image" src="<?php echo $filePath;?>images/what-we-do.png" 
                    data-srcset="<?php echo $filePath;?>images/what-we-do.png 400w, <?php echo $filePath;?>images/what-we-do.webp 400w,
                    <?php echo $filePath;?>images/what-we-do.png 600w,<?php echo $filePath;?>images/what-we-do.webp 600w, 
                    <?php echo $filePath;?>images/what-we-do.png 1000w,<?php echo $filePath;?>images/what-we-do.webp 1000w,"
                    srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="/>

                </div>
            </div>    
        </div>
        <div class="uk-width-1-2 uk-margin-small-left">    
            <div class="end-text uk-padding-small">
                <div class="hexo uk-text-bold">Application Development</div>
                <div class=" uk-text-center uk-text-center@s comment"><p class="text-center">Gathering requirements, designing prototypes, testing, implementation, and integration is what we perform.</p></div>
            </div>
            <div class="side-text uk-padding-small uk-margin-medium-left">
                <div class="hexo uk-text-bold">Research & Development</div>
                <div class="uk-text-center uk-text-center@s comment"><p class="text-center">Our work directed towards the innovation, introduction, and improvement of our services and processes.</p></div>
            </div>       
            <div class="mid-text uk-padding-small uk-margin-xlarge-left">
                <div class="hexo uk-text-bold">Omni-Channel Commerce</div>
                <div class="uk-text-center uk-text-center@s comment"><p class="text-center">Provide an approach to sales that seeks to provide customers with a seamless shopping experience.</p></div>
            </div>
            <div class="mid-text uk-padding-small uk-margin-xlarge-left">
                <div class="hexo uk-text-bold">QA & Software Testing</div>
                <div class=" uk-text-center uk-text-center@s comment"><p class="text-center">Quality assurance plays a crucial role in business by ensuring that services meet targeted thresholds of acceptability.</p></div>
            </div>     
            <div class="side-text uk-padding-small uk-margin-medium-left">
                <div class="hexo uk-text-bold">Digital Commerce</div>
                <div class="uk-text-center uk-text-center@s comment"><p class="text-center">Enabling independent services to customer through an interactive and self-service experience.</p></div>
            </div>
            <div class="end-text uk-padding-small">
                <div class="hexo uk-text-bold">User/Customer Experience</div>
                <div class="uk-text-center uk-text-center@s comment"><p class="text-center">Customer experience is different from customer opinion. Customer experience drives loyalty so we are focusing on the journey.</p></div>
            </div>     
                            
        </div>
    </div>  
</div>     
<!-- what we do end -->        
    



<!-----------------------------------------Careers section starts------------------->

<div class="uk-container uk-padding-large">
        <div class=" uk-card uk-card-default uk-card-body uk-padding-remove" style="margin-left:auto; margin-right:auto;">
           
            
                <div class="uk-child-width-1-1@s uk-child-width-1-5@m career_box" uk-grid>
                   <div class="uk-width-2-5@m uk-width-1-1@s box1">
                        <div class="uk-margin-large-top uk-margin-remove-top@s">
                            <div class="uk-container " uk-scrollspy="cls: uk-animation-scale-up stay">
                                <button class="uk-margin-small-left uk-margin-medium-top uk-button uk-text-capitalize uk-margin-small-bottom uk-padding-small uk-padding-remove-vertical btn" disabled>Careers</button>
                                <div class="uk-margin-small-left uk-h2 uk-text-bold uk-text-secondary uk-margin-remove-top careersection_heading  uk-margin-medium-bottom ">Stay “Always Ahead” </div>
                                        <p class="uk-margin-small-left uk-width-large uk-padding-large uk-padding-remove-left uk-padding-remove-top 
                                        careersection_para">Careers are made from experiences.</br>
                                        At ALT Digital Technologies, those experiences can be diverse, unlimited and far-reaching.
                                        Joining ALT Digital Technology is about joining a culture of openness, collaboration, trust, and expectation to have a voice.
                                        </p>
                                </div>
                            </div>
                    
                        </div> 



                        <div class="uk-card uk-card-body uk-width-1-5@m uk-width-1-1@s box2 uk-margin-small-bottom">
                                <form id="demo-form" class="uk-card uk-card-body uk-card-default uk-padding-small form" method="POST" 
                                enctype="multipart/form-data" uk-scrollspy="cls: uk-animation-scale-up" style="margin-left:auto; margin-right:auto;"> 
                                        <h3 class="uk-text-bold uk-text-secondary form_heading uk-margin-small-top">Apply Now</h3>
                                        <div class="">
                                            <label class="uk-form-label form_field" for="name">NAME:*</label>
                                            <!-- <div class="uk-margin-small-bottom form_field">NAME:*</div> -->
                                            <input class="uk-input uk-margin-small-bottom uk-padding-small"  type="text" id="name" name="name" required>
                                        </div>
                                        <div class="">
                                           
                                            <label class="uk-form-label form_field" for="email">EMAIL ADDRESS:*</label>
                                            <input class="uk-input uk-padding-small uk-margin-small-bottom" type="email" id="email" name="email" required>
                                        </div>

                                        <div class="js-upload" uk-form-custom>
                                           
                                            <label class="uk-form-label form_field" for="file">UPLOAD YOUR RESUME:*</label>
                                            <input  class="" type="file" name="file" id="file" multiple required>
                                            <br>
                                            <button class="uk-button uk-button-default upload uk-text-bolder uk-text-capitalize" type="button" tabindex="-1">Upload &nbsp;<span uk-icon="cloud-upload"></span></button>
                                            </br><label id="file-name" style="font-size:13px; color:#1c1c1c;"></label>        
                                        </div>

                                        <div class="uk-margin-small-top">
                                            <div class="g-recaptcha" data-sitekey="6Lc_z_wUAAAAADNo5AEbwi-a9amCkk2RqsMLC9Yb" ></div>
                                        </div>
        
                                            <button id="submit" class="uk-button uk-margin-remove-bottom uk-margin-small-top uk-text-bold uk-align-center 
                                            uk-text-center form_btn uk-text-capitalize" type="submit" name="submit">Apply Now</button>
        
                                </form>
                        </div>
                    </div>
                </div>

            </div>
        
        </div>
</div>   

                  

<!-----------------------------------------Careers Section ends---------------------->


<!-------------Completed Works section---------->
    <div class="uk-container uk-margin-medium-bottom uk-margin-medium-top">
        <button class="uk-button uk-text-capitalize uk-align-center uk-margin-small-bottom  uk-margin-large-top uk-padding-small uk-padding-remove-vertical btn" disabled uk-scrollspy="cls: uk-animation-scale-up">Completed Projects</button>
        <h2 class="uk-h2 section2_heading uk-text-center uk-text-bolder uk-margin-remove-top uk-margin-medium-top uk-margin-large-bottom" uk-scrollspy="cls: uk-animation-slide-top">Our Latest Works</h2>
        <div class="uk-child-width-1-3@m uk-grid-small uk-padding-small uk-child-width-1-1@s" uk-grid>
        
            <div class="uk-width-1-3@m uk-width-1-1@s works_image" uk-scrollspy="cls: uk-animation-slide-left-medium"> 
                <div class="uk-text-center" >
                    <div class="uk-inline-clip  uk-transition-toggle uk-light" tabindex="0">

                    <img class="responsively-lazy" alt="Data Center Migration" width="370" height="246" src="<?php echo $filePath;?>images/case/case11.jpg"
                    data-srcset="<?php echo $filePath;?>images/case/case11.jpg 400w, <?php echo $filePath;?>images/case/case11.webp 400w, 
                    <?php echo $filePath;?>images/case/case11.jpg 600w, <?php echo $filePath;?>images/case/case11.webp 600w,
                    <?php echo $filePath;?>images/case/case11.jpg 1000w, <?php echo $filePath;?>images/case/case11.webp 1000w" 
                    srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" />

                        <!-- <img class="lazy" data-src="images/case/case11.jpg" alt="" width="370" height="246" uk-img uk-scrollspy="cls: uk-animation-kenburns"> -->
                        <div class="works_overlay uk-position-center">
                            <button uk-toggle="target: #works1" class="more uk-border-circle" uk-icon="icon: more; ratio: 0.8" aria-label="three_dot_Button" style="outline:none;"></button>
                        </div>
                    </div>
                </div>
                <div class="uk-padding-small">
                    <div class="uk-text-bold uk-text-center uk-text-left@m"><button uk-toggle="target: #works1" class="uk-button uk-button-default uk-text-capitalize test_heading" style="line-height:1.2;">Data Center Migration</div>
                
                </div>
            </div>
            <div class="uk-width-1-3@m uk-width-1-1@s works_image" uk-scrollspy="cls: uk-animation-slide-top-medium">

                <div class="uk-text-center">
                    <div class="uk-inline-clip uk-transition-toggle uk-light" tabindex="0">

                    <img class="responsively-lazy" alt="Multi-site implementation" width="370" height="246" src="<?php echo $filePath;?>images/case/case2.jpg"
                    data-srcset="<?php echo $filePath;?>images/case/case2.jpg 400w, <?php echo $filePath;?>images/case/case2.webp 400w, 
                    <?php echo $filePath;?>images/case/case2.jpg 600w, <?php echo $filePath;?>images/case/case2.webp 600w,
                    <?php echo $filePath;?>images/case/case2.jpg 1000w, <?php echo $filePath;?>images/case/case2.webp 1000w" 
                    srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" />

                        <div class="works_overlay uk-position-center">
                            <button uk-toggle="target: #works2" class=" more uk-border-circle" aria-label="three_dot_Button"
                             uk-icon="icon: more; ratio: 0.8" style="outline:none;"></button>
                        </div>
                    </div>
                </div>
                
                <div class=" uk-padding-small">
                    <div class="uk-text-bold uk-text-center uk-text-left@m"><button uk-toggle="target: #works2" class="uk-button uk-button-default uk-text-capitalize test_heading" style="line-height:1.2;">Multi-site implementation</button></div>
                </div>
            </div>
            <div class="uk-width-1-3@m uk-width-1-1@s works_image" uk-scrollspy="cls: uk-animation-slide-right-medium">
                <div class="uk-text-center">
                    <div class="uk-inline-clip uk-transition-toggle uk-light" tabindex="0">


                    <img class="responsively-lazy" alt="Cross-Reference Tool" width="370" height="246" src="<?php echo $filePath;?>images/case/case7.jpg"
                    data-srcset="<?php echo $filePath;?>images/case/case7.jpg 400w, <?php echo $filePath;?>images/case/case7.webp 400w, 
                    <?php echo $filePath;?>images/case/case7.jpg 600w, <?php echo $filePath;?>images/case/case7.webp 600w,
                    <?php echo $filePath;?>images/case/case7.jpg 1000w, <?php echo $filePath;?>images/case/case7.webp 1000w" 
                    srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" />

                        <!-- <img class="lazy" data-src="images/case/case7.jpg" alt="" width="370" height="246" uk-img uk-scrollspy="cls: uk-animation-kenburns"> -->
                        <div class="uk-position-center works_overlay">
                            <button uk-toggle="target: #works3"  class=" more uk-border-circle" aria-label="three_dot_Button" 
                            uk-icon="icon: more; ratio: 0.8" style="outline:none;"></button>
                        </div>
                    </div>
                </div>

                <div class="uk-padding-small">
                    <div class="uk-text-bold  uk-text-center uk-text-left@m"><button uk-toggle="target: #works3" class="uk-button uk-button-default uk-text-capitalize test_heading" style="line-height:1.2;">Cross-Reference Tool</button></div>
                </div>
            </div>
            <div class="uk-width-1-3@m uk-width-1-1@s works_image" uk-scrollspy="cls: uk-animation-slide-left-medium"> 
                <div class="uk-text-center">
                    <div class="uk-inline-clip uk-transition-toggle uk-light " tabindex="0">

                    <!-- <picture>
                        <source class="lazy" srcset="<?php echo $filePath;?>images/case/case4.webp" type="image/webp">
                        <source class="lazy" srcset="<?php echo $filePath;?>images/case/case4.jpg" type="image/jpeg"> 
                        <img class="lazy" data-src="<?php echo $filePath;?>images/case/case4.jpg" alt="Twillo Integration" width="370" height="246" uk-img uk-scrollspy="cls: uk-animation-kenburns">
                    </picture> -->
                    <img class="responsively-lazy" alt="Twillo Integration" width="370" height="246" src="<?php echo $filePath;?>images/case/case4.jpg"
                    data-srcset="<?php echo $filePath;?>images/case/case4.jpg 400w, <?php echo $filePath;?>images/case/case4.webp 400w, 
                    <?php echo $filePath;?>images/case/case4.jpg 600w, <?php echo $filePath;?>images/case/case4.webp 600w,
                    <?php echo $filePath;?>images/case/case4.jpg 1000w, <?php echo $filePath;?>images/case/case4.webp 1000w" 
                    srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" />


                        <!-- <img class="lazy" data-src="images/case/case4.jpg" alt="" width="370" height="246" uk-img uk-scrollspy="cls: uk-animation-kenburns"> -->
                        <div class="uk-position-center works_overlay">
                            <button uk-toggle="target: #works4"  class=" more uk-border-circle" aria-label="three_dot_Button" 
                            uk-icon="icon: more; ratio: 0.8" style="outline:none;"></button>
                        </div>
                    </div>
                </div>

                <div class="uk-padding-small">
                    <div class="uk-text-bold uk-text-center uk-text-left@m"><button uk-toggle="target: #works4" class="uk-button uk-button-default uk-text-capitalize test_heading">Twillo Integration</button></div>
                </div>
            </div>
            <div class="uk-width-1-3@m uk-width-1-1@s works_image" uk-scrollspy="cls: uk-animation-slide-bottom-medium">
                
                <div class="uk-text-center">
                    <div class="uk-inline-clip uk-transition-toggle uk-light" tabindex="0">

                    <!-- <picture>
                        <source class="lazy" srcset="<?php echo $filePath;?>images/case/case5.webp" type="image/webp">
                        <source class="lazy" srcset="<?php echo $filePath;?>images/case/case5.jpg" type="image/jpeg"> 
                        <img class="lazy" data-src="<?php echo $filePath;?>images/case/case5.jpg" alt="Site Redesign" width="370" height="246" uk-img uk-scrollspy="cls: uk-animation-kenburns">
                    </picture> -->
                    <img class="responsively-lazy" alt="Site Redesign" width="370" height="246" src="<?php echo $filePath;?>images/case/case5.jpg"
                    data-srcset="<?php echo $filePath;?>images/case/case5.jpg 400w, <?php echo $filePath;?>images/case/case5.webp 400w, 
                    <?php echo $filePath;?>images/case/case5.jpg 600w, <?php echo $filePath;?>images/case/case5.webp 600w,
                    <?php echo $filePath;?>images/case/case5.jpg 1000w, <?php echo $filePath;?>images/case/case5.webp 1000w" 
                    srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" />
                        <!-- <img class="lazy" data-src="images/case/case5.jpg" alt="" width="370" height="246" uk-img uk-scrollspy="cls: uk-animation-kenburns"> -->
                        <div class="uk-position-center works_overlay">
                            <button uk-toggle="target: #works5" class=" more uk-border-circle" aria-label="three_dot_Button" 
                            uk-icon="icon: more; ratio: 0.8" style="outline:none;"></button>
                        </div>
                    </div>
                </div>

                <div class="uk-padding-small" >
                    <div class="uk-text-bold uk-text-center uk-text-left@m"><button uk-toggle="target: #works5" class="uk-button uk-button-default uk-text-capitalize test_heading" >Site Redesign</button></div>
                </div>
            </div>
            <div class="uk-width-1-3@m uk-width-1-1@s works_image" uk-scrollspy="cls: uk-animation-slide-right-medium">
                <div class="uk-text-center">
                    <div class="uk-inline-clip uk-transition-toggle uk-light" tabindex="0">

                    <!-- <picture>
                        <source class="lazy" srcset="<?php echo $filePath;?>images/case/case6.webp" type="image/webp">
                        <source class="lazy" srcset="<?php echo $filePath;?>images/case/case6.jpg" type="image/jpeg"> 
                        <img class="lazy" data-src="<?php echo $filePath;?>images/case/case6.jpg" alt="SalesForce SSO Integration" width="370" height="246" uk-img uk-scrollspy="cls: uk-animation-kenburns">
                    </picture> -->
                    <img class="responsively-lazy" alt="SalesForce SSO Integration" width="370" height="246" src="<?php echo $filePath;?>images/case/case6.jpg"
                    data-srcset="<?php echo $filePath;?>images/case/case6.jpg 400w, <?php echo $filePath;?>images/case/case6.webp 400w, 
                    <?php echo $filePath;?>images/case/case6.jpg 600w, <?php echo $filePath;?>images/case/case6.webp 600w,
                    <?php echo $filePath;?>images/case/case6.jpg 1000w, <?php echo $filePath;?>images/case/case6.webp 1000w" 
                    srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" />

                        <!-- <img class="lazy" data-src="images/case/case6.jpg" alt="" width="370" height="246" uk-img uk-scrollspy="cls: uk-animation-kenburns"> -->
                        <div class="uk-position-center works_overlay">
                            <button uk-toggle="target: #works6" class=" more uk-border-circle" aria-label="three_dot_Button" 
                            uk-icon="icon: more; ratio: 0.8" style="outline:none;"></button>
                        </div>
                    </div>
                </div>
                <div class="uk-padding-small">
                    <div class="uk-text-bold uk-text-center uk-text-left@m"><button uk-toggle="target: #works6" class="uk-button uk-button-default uk-text-capitalize test_heading" style="line-height:1.2;">SalesForce SSO Integration</button></div>
                </div>
            </div>
        </div>
        <div>
            <a class="uk-button uk-text-bold uk-align-center uk-text-center works_btn1 uk-text-capitalize" href="<?php echo $filePath;?>resource">Read More</a>
        </div>


        <!-- Work 2 -->
        <div id="works2" class="uk-padding-large" uk-modal>
            <div id="" class="uk-card uk-card-body uk-margin-medium-top uk-align-center case_box uk-card-default " >
                
                <div class=" uk-child-width-1-4@s uk-grid-match" uk-grid>
                    <div class="uk-width-1-4@m uk-width-1-1@s">
                        <div class="uk-text-center uk-text-bold multi_box uk-padding-small" style="margin:auto 0;">Multi-site implementation
                            <div class="uk-text-meta uk-text-secondary"></div>
                        </div>
                    
                    </div>
                    <div class="uk-width-3-4@m uk-width-1-1@s case_box2">
                        <div class="uk-margin uk-padding-small"> 
                            <div class="uk-margin uk-child-width-1-2@s uk-grid-collapse" uk-grid>
                                <div class="uk-width-auto@s uk-padding-small">
                                    <!-- <img class="uk-margin-auto-vertical" data-src="<?php echo $filePath;?>images/client.svg" alt="Business Need" width="45" height="45" uk-img> -->
                                    <img class="responsively-lazy uk-margin-auto-vertical" alt="Need" width="45" height="45" 
                                    src="<?php echo $filePath;?>images/client.svg"
                                    data-srcset="<?php echo $filePath;?>images/client.svg 400w,
                                    <?php echo $filePath;?>images/client.svg 600w" 
                                    srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" />
                                
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
                                    <!-- <img class="uk-margin-auto-vertical " data-src="<?php echo $filePath;?>images/jigsaw.svg" alt="Solution" width="45" height="45" uk-img> -->
                                    <img class="responsively-lazy uk-margin-auto-vertical" alt="Solution" width="45" height="45" 
                                    src="<?php echo $filePath;?>images/jigsaw.svg"
                                    data-srcset="<?php echo $filePath;?>images/jigsaw.svg 400w,
                                    <?php echo $filePath;?>images/jigsaw.svg 600w" 
                                    srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" />
                                
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
                                    <!-- <img class=" uk-margin-auto-vertical " data-src="<?php echo $filePath;?>images/benefit.svg" alt="benefit" width="45" height="45" uk-img> -->
                                    <img class="responsively-lazy uk-margin-auto-vertical" alt="benefit" width="45" height="45" 
                                    src="<?php echo $filePath;?>images/benefit.svg"
                                    data-srcset="<?php echo $filePath;?>images/benefit.svg 400w,
                                    <?php echo $filePath;?>images/benefit.svg 600w" 
                                    srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" />

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
                                    <!-- <img class=" uk-margin-auto-vertical  " data-src="<?php echo $filePath;?>images/code.svg" alt="technology" width="45" height="45" uk-img> -->
                                    <img class="responsively-lazy uk-margin-auto-vertical" alt="technology" width="45" height="45" 
                                    src="<?php echo $filePath;?>images/code.svg"
                                    data-srcset="<?php echo $filePath;?>images/code.svg 400w,
                                    <?php echo $filePath;?>images/code.svg 600w" 
                                    srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" />
                            
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
                    
                </div>
                <button class="uk-modal-close-default" type="button" uk-close></button>  
            </div>
        </div>
        <!-- work 1 -->
        <div id="works1" class="uk-padding-large" uk-modal>
            <div  class=" uk-card uk-card-body uk-margin-medium-top uk-align-center case_box uk-card-default">
                <div class="uk-child-width-1-4@s uk-grid-match" uk-grid>
                    <div class="uk-width-1-4@m uk-width-1-1@s">
                        <div class="uk-text-center uk-text-bold case_subheading" style="margin:auto 0;">Data Center Migration
                            <div class="uk-text-meta uk-text-secondary"></div>
                        </div>
                    </div>
                    <div class="uk-width-3-4@m uk-width-1-1@s">
                        <div class="uk-margin uk-padding"> 
                            <div class="uk-margin uk-child-width-1-2@s uk-grid-collapse" uk-grid>
                                <div class="uk-width-auto@s uk-padding-small">
                                    <!-- <img class="uk-margin-auto-vertical" data-src="<?php echo $filePath;?>images/client.svg" alt="Need" width="45" height="45" uk-img> -->
                                    <img class="responsively-lazy uk-margin-auto-vertical" alt="Need" width="45" height="45" 
                                    src="<?php echo $filePath;?>images/client.svg"
                                    data-srcset="<?php echo $filePath;?>images/client.svg 400w,
                                    <?php echo $filePath;?>images/client.svg 600w" 
                                    srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" />
                                
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
                                        <!-- <img class="uk-margin-auto-vertical " data-src="<?php echo $filePath;?>images/jigsaw.svg" alt="Solution" width="45" height="45" uk-img> -->
                                        <img class="responsively-lazy uk-margin-auto-vertical" alt="Solution" width="45" height="45" 
                                        src="<?php echo $filePath;?>images/jigsaw.svg"
                                        data-srcset="<?php echo $filePath;?>images/jigsaw.svg 400w,
                                        <?php echo $filePath;?>images/jigsaw.svg 600w" 
                                        srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" />
                                        
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
                                        <!-- <img class=" uk-margin-auto-vertical " data-src="<?php echo $filePath;?>images/benefit.svg" alt="Benefit" width="45" height="45" uk-img> -->
                                        <img class="responsively-lazy uk-margin-auto-vertical" alt="Benefit" width="45" height="45" 
                                        src="<?php echo $filePath;?>images/benefit.svg"
                                        data-srcset="<?php echo $filePath;?>images/jigsaw.svg 400w,
                                        <?php echo $filePath;?>images/benefit.svg 600w" 
                                        srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" />
                                    
                                    </div>
                                    <div class="uk-width-expand@s">
                                        <div class="uk-h3 case_points uk-margin-remove-bottom">Benefits: </div> 
                                        <span class="services_article_para uk-text-center@s uk-text-left@m">
                                            Migrated all non-prod and prod servers in one month time with a downtime of only 4 hours.
                                            Client got High-Availability/Disaster Recovery infrastructure for its retail portal.
                                        </span>  
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
                    <button class="uk-modal-close-default" type="button" uk-close></button>  
            </div>
        </div>
        <!-- work 3 -->
        <div id="works3" class="uk-padding-large" uk-modal>
            <div  class="uk-card uk-card-body uk-margin-medium-top uk-align-center case_box uk-card-default">
                <div class="uk-child-width-1-4@s uk-grid-match" uk-grid>
                    <div class="uk-width-1-4@m uk-width-1-1@s">
                        <div class="uk-text-center uk-text-bold case_subheading" style="margin:auto 0;">Cross-Reference Tool
                            
                        </div>
                        
                    </div>
                    <div class="uk-width-3-4@m uk-width-1-1@s">
                        <div class="uk-margin uk-padding"> 
                            <div class="uk-margin uk-child-width-1-2@s uk-grid-collapse" uk-grid>
                                <div class="uk-width-auto@s uk-padding-small">
                                    <!-- <img class="uk-margin-auto-vertical" data-src="<?php echo $filePath;?>images/client.svg" alt="Need" width="45" height="45" uk-img> -->
                                    <img class="responsively-lazy uk-margin-auto-vertical" alt="need" width="45" height="45" 
                                    src="<?php echo $filePath;?>images/client.svg"
                                    data-srcset="<?php echo $filePath;?>images/client.svg 400w,
                                    <?php echo $filePath;?>images/client.svg 600w" 
                                    srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" />

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
                                    <!-- <img class="uk-margin-auto-vertical " data-src="<?php echo $filePath;?>images/jigsaw.svg" alt="Solution" width="45" height="45" uk-img> -->
                                    <img class="responsively-lazy uk-margin-auto-vertical" alt="Solution" width="45" height="45" 
                                    src="<?php echo $filePath;?>images/jigsaw.svg"
                                    data-srcset="<?php echo $filePath;?>images/jigsaw.svg 400w,
                                    <?php echo $filePath;?>images/jigsaw.svg 600w" 
                                    srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" />
                            
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
                                    <!-- <img class=" uk-margin-auto-vertical " data-src="<?php echo $filePath;?>images/benefit.svg" alt="Benefit" width="45" height="45" uk-img> -->
                                    <img class="responsively-lazy uk-margin-auto-vertical" alt="Benfit" width="45" height="45" 
                                    src="<?php echo $filePath;?>images/benefit.svg"
                                    data-srcset="<?php echo $filePath;?>images/benefit.svg 400w,
                                    <?php echo $filePath;?>images/benefit.svg 600w" 
                                    srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" />
                                
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
                                <div class="uk-width-auto@s uk-padding-small">
                                    <!-- <img class=" uk-margin-auto-vertical  " data-src="<?php echo $filePath;?>images/code.svg" alt="Technology" width="45" height="45" uk-img> -->
                                    <img class="responsively-lazy uk-margin-auto-vertical" alt="Technology" width="45" height="45" 
                                    src="<?php echo $filePath;?>images/code.svg"
                                    data-srcset="<?php echo $filePath;?>images/code.svg 400w,
                                    <?php echo $filePath;?>images/code.svg 600w" 
                                    srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" />
                                
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

                </div>
                <button class="uk-modal-close-default" type="button" uk-close></button>  
            </div>


        </div>
        <!-- work 4 -->
        <div id="works4" class="uk-padding-large" uk-modal>
                <div class="uk-card uk-card-body case_box uk-margin-medium-top uk-align-center uk-card-default">
                    <div class="uk-child-width-1-4@s uk-grid-match" uk-grid>
                        <div class="uk-width-1-4@m uk-width-1-1@s">
                            <div class="uk-text-center uk-text-bold case_subheading " style="margin:auto 0;">Twillo Integration
                                <div class="uk-text-meta uk-text-secondary"></div>
                            </div>
                            
                        </div>
                        <div class="uk-width-3-4@m uk-width-1-1@s">
                            <div class="uk-margin uk-padding"> 
                                <div class="uk-margin uk-child-width-1-2@s uk-grid-collapse" uk-grid>
                                    <div class="uk-width-auto@s uk-padding-small">
                                        <!-- <img class="uk-margin-auto-vertical" data-src="<?php echo $filePath;?>images/client.svg" alt="Need" width="45" height="45" uk-img> -->
                                        <img class="responsively-lazy uk-margin-auto-vertical" alt="Need" width="45" height="45" 
                                        src="<?php echo $filePath;?>images/client.svg"
                                        data-srcset="<?php echo $filePath;?>images/client.svg 400w,
                                        <?php echo $filePath;?>images/client.svg 600w" 
                                        srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" />
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
                                        <!-- <img class="uk-margin-auto-vertical " data-src="<?php echo $filePath;?>images/jigsaw.svg" alt="Solution" width="45" height="45" uk-img> -->
                                        <img class="responsively-lazy uk-margin-auto-vertical" alt="Solution" width="45" height="45" 
                                        src="<?php echo $filePath;?>images/jigsaw.svg"
                                        data-srcset="<?php echo $filePath;?>images/jigsaw.svg 400w,
                                        <?php echo $filePath;?>images/jigsaw.svg 600w" 
                                        srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" />

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
                                        <!-- <img class=" uk-margin-auto-vertical " data-src="<?php echo $filePath;?>images/benefit.svg" alt="Benefit" width="45" height="45" uk-img> -->
                                        <img class="responsively-lazy uk-margin-auto-vertical" alt="Benefit" width="45" height="45" 
                                        src="<?php echo $filePath;?>images/benefit.svg"
                                        data-srcset="<?php echo $filePath;?>images/benefit.svg 400w,
                                        <?php echo $filePath;?>images/benefit.svg 600w" 
                                        srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" />
                                    
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
                                        <!-- <img class=" uk-margin-auto-vertical  " data-src="<?php echo $filePath;?>images/code.svg" alt="Technology" width="45" height="45" uk-img> -->
                                        <img class="responsively-lazy uk-margin-auto-vertical" alt="Technology" width="45" height="45" 
                                        src="<?php echo $filePath;?>images/code.svg"
                                        data-srcset="<?php echo $filePath;?>images/code.svg 400w,
                                        <?php echo $filePath;?>images/code.svg 600w" 
                                        srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" />
                                    
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

                    </div>
                    <button class="uk-modal-close-default" type="button" uk-close></button>  
                </div>

        </div>
        <!-- work 5 -->
        <div id="works5" class="uk-padding-large" uk-modal>
            <div class="uk-card uk-card-body uk-margin-medium-top uk-align-center case_box uk-card-default">
                <div class="uk-child-width-1-4@s uk-grid-match" uk-grid>
                    <div class="uk-width-1-4@m uk-width-1-1@s">
                        <div class="uk-text-center uk-text-bold case_subheading" style="margin:auto 0;">Site Redesign
                            
                        </div>
                        
                    </div>
                    <div class="uk-width-3-4@m uk-width-1-1@s">
                        <div class="uk-margin uk-padding"> 
                            <div class="uk-margin uk-child-width-1-2@s uk-grid-collapse" uk-grid>
                                <div class="uk-width-auto@s uk-padding-small">
                                    <!-- <img class="uk-margin-auto-vertical" data-src="<?php echo $filePath;?>images/client.svg" alt="Need" width="45" height="45" uk-img> -->
                                    <img class="responsively-lazy uk-margin-auto-vertical" alt="Need" width="45" height="45" 
                                    src="<?php echo $filePath;?>images/client.svg"
                                    data-srcset="<?php echo $filePath;?>images/client.svg 400w,
                                    <?php echo $filePath;?>images/client.svg 600w" 
                                    srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" />

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
                                    <!-- <img class="uk-margin-auto-vertical " data-src="<?php echo $filePath;?>images/jigsaw.svg" alt="Solution" width="45" height="45" uk-img> -->
                                    <img class="responsively-lazy uk-margin-auto-vertical" alt="Solution" width="45" height="45" 
                                    src="<?php echo $filePath;?>images/jigsaw.svg"
                                    data-srcset="<?php echo $filePath;?>images/jigsaw.svg 400w,
                                    <?php echo $filePath;?>images/jigsaw.svg 600w" 
                                    srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" />
                                
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
                                    <!-- <img class=" uk-margin-auto-vertical " data-src="<?php echo $filePath;?>images/benefit.svg" alt="Benefits" width="45" height="45" uk-img> -->
                                    <img class="responsively-lazy uk-margin-auto-vertical" alt="Benefit" width="45" height="45" 
                                    src="<?php echo $filePath;?>images/benefit.svg"
                                    data-srcset="<?php echo $filePath;?>images/benefit.svg 400w,
                                    <?php echo $filePath;?>images/benefit.svg 600w" 
                                    srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" />
                                
                                </div>
                                <div class="uk-width-expand@s">
                                    <div class="uk-h3 case_points uk-margin-remove-bottom">Benefits: </div> 
                                    <span class="services_article_para uk-text-center@s uk-text-left@m">
                                        Site has been responsive with latest look and feel. 
                                        Also improved SEO a lot.
                                    </span>  
                                </div>
                            </div>

                        
                        </div>
                    </div>
                </div>
                <button class="uk-modal-close-default" type="button" uk-close></button>  
            </div>
        </div>
        <!-- work 6 -->
        <div id="works6" class="uk-padding-large" uk-modal>
            <div  class="uk-card uk-card-body uk-margin-medium-top uk-align-center case_box uk-card-default">
                <div class="uk-child-width-1-4@s uk-grid-match" uk-grid>
                    <div class="uk-width-1-4@m uk-width-1-1@s">
                        <div class="uk-text-center uk-text-bold case_subheading" style="margin:auto 0;">SalesForce SSO Integration
                            
                        </div>
                        
                    </div>
                    <div class="uk-width-3-4@m uk-width-1-1@s">
                        <div class="uk-margin uk-padding"> 
                            <div class="uk-margin uk-child-width-1-2@s uk-grid-collapse" uk-grid>
                                <div class="uk-width-auto@s uk-padding-small">
                                    <!-- <img class="uk-margin-auto-vertical" data-src="<?php echo $filePath;?>images/client.svg" alt="Need" width="45" height="45" uk-img> -->
                                    <img class="responsively-lazy uk-margin-auto-vertical" alt="Need" width="45" height="45" 
                                    src="<?php echo $filePath;?>images/client.svg"
                                    data-srcset="<?php echo $filePath;?>images/client.svg 400w,
                                    <?php echo $filePath;?>images/client.svg 600w" 
                                    srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" />
                                
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
                                    <!-- <img class="uk-margin-auto-vertical " data-src="<?php echo $filePath;?>images/jigsaw.svg" alt="Solution" width="45" height="45" uk-img> -->
                                    <img class="responsively-lazy uk-margin-auto-vertical" alt="Solution" width="45" height="45" 
                                    src="<?php echo $filePath;?>images/jigsaw.svg"
                                    data-srcset="<?php echo $filePath;?>images/jigsaw.svg 400w,
                                    <?php echo $filePath;?>images/jigsaw.svg 600w" 
                                    srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" />
                                
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
                                    <!-- <img class=" uk-margin-auto-vertical " data-src="<?php echo $filePath;?>images/benefit.svg" alt="Benefit" width="45" height="45" uk-img> -->
                                    <img class="responsively-lazy uk-margin-auto-vertical" alt="Benefit" width="45" height="45" 
                                    src="<?php echo $filePath;?>images/benefit.svg"
                                    data-srcset="<?php echo $filePath;?>images/benefit.svg 400w,
                                    <?php echo $filePath;?>images/benefit.svg 600w" 
                                    srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" />
                                
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
                                    <!-- <img class=" uk-margin-auto-vertical  " data-src="<?php echo $filePath;?>images/code.svg" alt="Technology" width="45" height="45" uk-img> -->
                                    <img class="responsively-lazy uk-margin-auto-vertical" alt="Technology" width="45" height="45" 
                                    src="<?php echo $filePath;?>images/code.svg"
                                    data-srcset="<?php echo $filePath;?>images/code.svg 400w,
                                    <?php echo $filePath;?>images/code.svg 600w" 
                                    srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" />
                            
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

                </div>
                <button class="uk-modal-close-default" type="button" uk-close></button>  
            </div>
        </div>

    </div>

<!-------------Completed Works Section Ends-------->

 <!--Counts Section-->
 <div class="uk-container uk-padding-large">
        <div class="uk-margin-medium-top uk-card-default">
            <div class="uk-child-width-1-4@m uk-grid-small uk-grid-collapse price-count" uk-grid>
                <div class="uk-width-1-4@m uk-width-1-1@s price-tag1">
                    <div class="uk-text-center icon-tag">
                        <!-- <h4><i class="fa fa-smile-o fa-2x" aria-hidden="true"></i></h4> -->
                        <h4><img data-src="<?php echo $filePath;?>images/gestures.svg" height="40" width="40" uk-svg></h4>
                        <h2><span class="Count">100</span><span>+</span></h2>
                        <h5 class="uk-padding-large uk-padding-remove-top uk-padding-remove-left uk-padding-remove-right">MAN YEARS OF EXPERIENCE IN DIGITAL COMMERCE</h5>
                    </div>
                </div> 
                <div class="uk-width-1-4@m uk-width-1-1@s price1 price-tag1">
                    <div class="uk-text-center icon-tag">
                        <h4><img data-src="<?php echo $filePath;?>images/employee.svg" height="40" width="40" uk-svg></h4>
                        <h2><span class="Count">20</span><span>+</span></h2>
                        <h5>NO OF EMPLOYEES</h5>
                    </div>
                </div>
                <div class="uk-width-1-4@m uk-width-1-1@s price-tag2 price-tag1">
                    <div class="uk-text-center icon-tag">
                        <h4><img data-src="<?php echo $filePath;?>images/briefcase.svg" height="40" width="40" uk-svg></h4>
                        <h2><span class="Count">50</span><span>+</span></h2>
                        <h5>PROJECTS DONE</h5>
                    </div>   
                </div>
                <div class="uk-width-1-4@m uk-width-1-1@s price2 price-tag1">
                    <div class="uk-text-center icon-tag">
                        <h4><img data-src="<?php echo $filePath;?>images/earth.svg" height="40" width="40" uk-svg></h4>
                        <h2><span class="Count">5</span><span>+</span></h2>
                        <h5>COUNTRIES SERVED</h5>
                    </div>
                </div>
             </div>
        </div>
</div>        
<!--Counts Section Ends-->


<!------------------Testimonials Sections Starts-------------->
    
        <div class="uk-container uk-margin uk-margin-large-top">
            <div class="uk-child-width-1-3@m uk-child-width-1-1@s uk-grid-medium uk-padding" uk-grid>
                <div class="uk-width-1-3@m uk-width-1-1@s" uk-scrollspy="cls: uk-animation-slide-left-medium;">
                    <div >
                        <!-- <img class="uk-align-center" data-src="images/designer.svg" alt="Designing icon" width="80" height="80" alt="" uk-img> -->
                        <img class="responsively-lazy uk-align-center" alt="Design" width="80" height="80" src="<?php echo $filePath;?>images/designer.svg"
                                data-srcset="<?php echo $filePath;?>images/designer.svg 400w,
                                <?php echo $filePath;?>images/designer.svg 600w" 
                                srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" />

                    </div>
                    <div class="uk-text-center">
                        <div class="uk-text-bold uk-text-secondary test_heading">1. Designing</div>
                        <p class="test_para">Software design usually involves problem-solving and planning a software solution.</p>
                    </div>
                </div>
                <div class="uk-width-1-3@m uk-width-1-1@s" uk-scrollspy="cls: uk-animation-slide-top-medium;">
                    <div >
                        <!-- <img class="uk-align-center" data-src="images/edit-code.svg" alt="Development icon" width="80" height="80" alt="" uk-img> -->
                        <img class="responsively-lazy uk-align-center" alt="Development" width="80" height="80" 
                        src="<?php echo $filePath;?>images/edit-code.svg"
                                data-srcset="<?php echo $filePath;?>images/edit-code.svg 400w,
                                <?php echo $filePath;?>images/edit-code.svg 600w" 
                                srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" />

                        <div class="uk-text-center">
                            <div class="uk-text-bold uk-text-secondary test_heading">2. Development</div>
                            <p class="test_para"> Developing a design around solutions to the problems presented by requirements.</p>
                        </div>
                    </div>
                </div>
                <div class="uk-width-1-3@m uk-width-1-1@s" uk-scrollspy="cls: uk-animation-slide-right-medium;">
                    <div >
                        <!-- <img class="uk-align-center" data-src="images/deployment.svg" alt="Deployment icon" width="80" height="80" alt="" uk-img> -->
                        <img class="responsively-lazy uk-align-center" alt="Deployment" width="80" height="80" 
                        src="<?php echo $filePath;?>images/deployment.svg"
                                data-srcset="<?php echo $filePath;?>images/deployment.svg 400w,
                                <?php echo $filePath;?>images/deployment.svg 600w" 
                                srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" />

                        <div class="uk-text-center">
                            <div class="uk-text-bold uk-text-secondary test_heading">3. Deployment</div>
                            <p class="test_para">We are delivering complete solutions and resolving the user’s problem. 
                                </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class=" uk-padding uk-margin testi_box1" uk-scrollspy="cls: uk-animation-slide-bottom">
                <button class="uk-button uk-text-capitalize uk-align-center uk-margin-remove-bottom uk-padding-small uk-padding-remove-vertical btn" disabled>Testimonials</button>
                <h2 class="uk-h2 section2_heading uk-text-center uk-text-bolder uk-margin-medium-top">What Clients Says</h2>
                <div class="uk-slider-container uk-padding uk-padding-remove-left uk-padding-remove-right uk-margin testi_box" uk-slider="sets:false; center: true; autoplay:true; autoplay-interval:5000; easing: cubic-bezier(.4,0,.2,1)">

                    <div class=" uk-position-relative uk-visible-toggle" tabindex="0">
                
                        <ul id="slid" class="uk-slider-items uk-child-width-1-3@m uk-child-width-1-2@s uk-grid-match uk-grid" >
                            <li class="slider_item">
                                
                                <div class="uk-card uk-card-default">
                                   
                                    <div class="uk-card-media-top uk-padding-remove">
                                        <img class="uk-align-center uk-margin-small-top" data-src="images/writer.svg" width="50" height="50" alt="quote icon" uk-img>
                                    </div>
                                    <div class="uk-card-body uk-padding-remove-top">
                                        <p class="uk-text-center">I never considered ALT Digital Technologies as a consulting company, I always count them as an extension of my own team. </p>
                                    <div class="testi_text uk-text-center uk-text-bold">-Director, IT </div>
                                <div class="uk-text-meta uk-text-center">An Aerospace Company</div>
                                    </div>
                                </div>
                            </li>
                            
                            <li class="slider_item ">
                                <div class="uk-card uk-card-default">
                                    <div class="uk-card-media-top uk-padding-remove">
                                        <img class="uk-align-center uk-margin-small-top" data-src="images/writer.svg" width="50" height="80" alt="quote icon" uk-img>
                                    </div>
                                    <div class="uk-card-body uk-padding-remove-top">
                                        
                                        <p class="uk-text-center">I have never seen such a high-performance development team in 
                                            my 20 years of time in the IT industry. </p>
                                            <div class="testi_text uk-text-center uk-text-bold">-Scrum Master </div>
                                    <div class="uk-text-meta uk-text-center">Of top 5 sanitaryware company</div>
                                    </div>
                                </div>
                            </li>

                           
                            <li class="slider_item">
                                <div class="uk-card uk-card-default">
                                    <div  class="uk-card-media-top uk-padding-remove">
                                        <img class="uk-align-center uk-margin-small-top" data-src="images/writer.svg" width="50" height="50" alt="quote icon" uk-img>
                                    </div>
                                    <div class="uk-card-body uk-padding-remove-top">
                                        <p class="uk-text-center">In our very first meeting, I got so many solutions to our 
                                            problems that we are going to implement all of them. </p>
                                            <div class="testi_text uk-text-center uk-text-bold">-Director, IT </div>
                                            <div class="uk-text-meta uk-text-center">A Telecom Company</div>  
                                   
                                    </div>
                                </div>
                            </li>
                            <li class="slider_item">
                                <div class="uk-card uk-card-default">
                                    <div class="uk-card-media-top uk-padding-remove">
                                        <img class="uk-align-center uk-margin-small-top" data-src="images/writer.svg" width="50" height="50" alt="quote icon" uk-img>
                                    </div>
                                    <div class="uk-card-body uk-padding-remove-top">
                                        <p class="uk-text-center">ALT Digital Technology team's innovative ideas and solutions are always best and we always look forward to them. </p>
                                        <div class="testi_text uk-text-center uk-text-bold">-Product Owner </div>
                                            <div class="uk-text-meta uk-text-center">Of Agile team of a B2B Portal</div>  
                                    
                                    </div>
                                </div>
                            </li>

                            <li class="slider_item">
                                
                                <div class="uk-card uk-card-default">
                                   
                                    <div class="uk-card-media-top uk-padding-remove">
                                        <img class="uk-align-center uk-margin-small-top"  data-src="images/writer.svg" width="50" height="50" alt="quote icon" uk-img>
                                    </div>
                                    <div class="uk-card-body uk-padding-remove-top">
                                        <p class="uk-text-center">I preferred Alt Digital Technologies over big companies because of the quality and the stability of their people. </p>
                                    <div class="testi_text uk-text-center uk-text-bold">-Senior Manager, IT </div>
                                    <div class="uk-text-meta uk-text-center">An Aerospace Company</div>
                                    </div>
                                </div>
                            </li>
                            <li class="slider_item">
                                <div class="uk-card uk-card-default">
                                    <div class="uk-card-media-top uk-padding-remove">
                                        <img class="uk-align-center uk-margin-small-top" data-src="images/writer.svg" width="50" height="50" alt="quote icon" uk-img>
                                    </div>
                                    <div class="uk-card-body uk-padding-remove-top">
                                        <p class="uk-text-center">You guys are one of the most wonderful people to work with. And most supportive, hardest working. 
                                        We couldn’t have done what we’ve done in the past 2+ years without this team.
                                         Don’t ever forget it your value. You’re absolutely brilliant. </p>
                                        <div class="testi_text uk-text-center">It’s been such an honor to be your PO </div>
                                        <div class="testi_text uk-text-center uk-text-bold">-Product Owner</div>
                                            <div class="uk-text-meta uk-text-center">Of an American Manufacturing Company</div>  
                                    
                                    </div>
                                </div>
                            </li>
                        </ul>
                                       
                       
                    </div>
                    <a class=" uk-position-center-left uk-position-small uk-animation-slide-left-medium uk-hidden uk-border-circle nav_button uk-icon-link" uk-icon="chevron-left"  href="#"  uk-slider-item="previous"></a>
                    <a class="uk-position-center-right uk-position-small uk-animation-slide-right-medium uk-hidden uk-border-circle nav_button uk-icon-link" uk-icon="chevron-right" href="#"  uk-slider-item="next"></a>

                    
                    <ul class="uk-dotnav uk-flex-center uk-margin slid_nav" >
                        <li uk-slider-item="0"><a href="#">...</a></li>
                        <li uk-slider-item="1"><a href="#">...</a></li>
                        <li uk-slider-item="2"><a href="#">...</a></li>
                        <li uk-slider-item="3"><a href="#">...</a></li>
                        <li uk-slider-item="4"><a href="#">...</a></li>
                        <li uk-slider-item="5"><a href="#">...</a></li>
                    </ul>
                
                </div>
                
    </div>


<!-------------------Testimonials Section Ends---------------->


<!--Blog Section Starts-->

<!----------------------Blog Section Ends---------------------->
        
</div>


<?php
	 include_once 'footer.php';
?>
<script>
        function onSubmit(token) {
            document.getElementById("demo-form").submit();
        }

        document.querySelector("#file").onchange = function(){
    document.querySelector("#file-name").textContent = this.files[0].name;
    }

    $("#file").change(function() {
        var file = this.files[0];
        var fileType = file.type;
        var match = ['application/pdf'];
        if(!((fileType == match[0]))){
            swal({ text: 'Sorry, only PDF files are allowed to upload.', icon: "warning"});
            $("#file").val('');
            return false;
        }
    });

    $(document).ready(function(e){
        // Submit form data via Ajax
        $("#demo-form").on('submit', function(e){
            e.preventDefault();
            $.ajax({
                type: 'POST',
                url: 'submit.php',
                data: new FormData(this),
                dataType: 'json',
                contentType: false,
                cache: false,
                processData:false,
                beforeSend: function(){
                    $('.form_btn').attr("disabled","disabled");
                    $('#demo-form').css("opacity",".5");
                },
            success: function(response){ //console.log(response);
                console.log(response);
                $('.statusMsg').html(''); 

                if(response.status == 1){
                    $('#demo-form')[0].reset();
                    grecaptcha.reset();
                    document.querySelector("#file-name").textContent = '';
                    // $('.statusMsg').html('<p class=" uk-alert-success" uk-alert>'+response.message+'</p>');
                    swal({ text: response.message, icon: "success"});
                }else{
                    // $('.statusMsg').html('<p class=" uk-alert-danger" uk-alert>'+response.message+'</p>');
                    swal({ text: response.message, icon: "warning"});
                }
                $('#demo-form').css("opacity","");
                    $(".form_btn").removeAttr("disabled");
                }
            });
        });
    });


        $(document).ready(function () {        
        var width = $('.g-recaptcha').parent().width();
        if (width < 302) {
            var scale = width / 302;
            $('.g-recaptcha').css('transform', 'scale(' + scale + ')');
            $('.g-recaptcha').css('-webkit-transform', 'scale(' + scale + ')');
            $('.g-recaptcha').css('transform-origin', '0 0');
            $('.g-recaptcha').css('-webkit-transform-origin', '0 0');
        }
    }); 
    

</script>

</body>

</html>
