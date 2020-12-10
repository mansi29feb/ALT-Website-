<?php
    $pageTitle='Services-Digital Commerce with ALT Commerce';
    $pageDescription ="Customer satisfaction is our motto and we strive to provide the best solution to our clients.";
    $currentPage = 'service';    
    include_once '../header.php';
?>
<!-- start Consulting -->
<div class="uk-child-width-1-1"  uk-grid>
    <div class="uk-h2 uk-text-center uk-text-bold uk-margin-medium-top services_mainheading">Consulting</div>
    <p class="uk-text-center services_mainpara">Solve problems,Different people, different decisions, different preferences & approaches.</p>
    <div class="uk-background-contain uk-height-large uk-flex uk-flex-center consult-bg" uk-scrollspy="cls:uk-animation-slide-bottom-medium" style="background-image: url(<?php echo $filePath;?>images/consulting1.png);"></div>
</div>
<div class="uk-container-large">

    <div class=" uk-margin-small-left uk-padding-remove-horizontal uk-margin-remove uk-height-match" style= "margin-top: -120px !important;" uk-grid>
        <div class="uk-width-1-5 uk-margin-small-left">
            <div class="uk-background-contain uk-margin-small-left uk-height-large uk-flex-center consult-img" uk-scrollspy="cls:uk-animation-slide-bottom-medium" style="background-image: url(<?php echo $filePath;?>images/programing.svg);"></div>
        </div>
        <div class="uk-width-3-4 we-can-help">
            <div class="uk-card-body uk-margin-medium-left uk-margin-medium-top">
                <div class="uk-h3 uk-text-left uk-margin-large-top consulting_article_heading uk-margin-small-top uk-text-bold">Software Development Consultancy</div>
                <div class=" services_article_para uk-text-left uk-text-justify">We can help you select the right kind of technology for your specific needs.
                Having worked for some of the Fortune 100 Companies, we have a wide range of experiences and can help skyrocket your business from good to great.
                Our clients are diverse in their industry specialisation, each presenting a unique story in their digital progression.We help you fine-tune or start from scratch.Talking about Market Research,
                we give you a good understanding of whether your project is viable in the current form, or whether it needs to be rethought.Our experience allows us to consult companies on how to make their business excel. 
                know how to help small, medium, and large businesses grow their revenue and reach customer satisfaction.</div>
            </div>
        </div>
    </div>
    <div class=" uk-margin-small-left uk-margin-remove-top rem-space"   uk-grid>    
        
        <div class="uk-width-3-4 strategy-para">
            <div class="uk-card-body uk-margin-medium-left uk-margin-large-top" style ="margin-top: 101px !important;">
                <div class="uk-h3 uk-text-right uk-margin-medium-top consulting_article_heading uk-margin-small-top uk-text-bold">Strategy & Planning</div>
                <div class="services_article_para uk-text-left uk-text-justify">We help you to improve your B2B commerce strategy by deciding the right technology, defining roadmaps and mapping your success journey.
                A digital strategy is essential for any B2B business and we help you to devise a customer-centric approach that creates new opportunities along the way.We can help you get started with your business journey, 
                ensure that you gain new customers and retain existing ones using the business strategy tailored for your business.
                To ensure that,we first seek to understand your business short and long-term goals and what success means to your business.
                For us, Creating a strategic plan is a key component of planning for growth. We will help you prepare a realistic vision for the future of your business and in doing so can maximise your business potential for growth.</div>
            </div>
        </div>
        <div class="uk-width-1-5 uk-margin-small-left Strategy-img">
            <div class="uk-background-contain uk-margin-small-left uk-height-large uk-flex-center" uk-scrollspy="cls:uk-animation-slide-bottom-medium" style="background-image: url(<?php echo $filePath;?>images/strategy.svg);"></div>
        </div>
    </div>   
    <div class=" uk-margin-small-left uk-padding-remove-horizontal uk-margin-remove-top rem-space" uk-grid> 
        <div class="uk-width-1-5 uk-margin-small-left">
            <div class="uk-background-contain uk-margin-small-left uk-height-large uk-flex-center digital-img" uk-scrollspy="cls:uk-animation-slide-bottom-medium" style="background-image: url(<?php echo $filePath;?>images/digital-transfer.svg);"></div>
        </div>
        <div class="uk-width-3-4 digital-para" >
            <div class="uk-card-body uk-margin-medium-left uk-margin-large-top">
                <div class="uk-h3 uk-text-left uk-margin-medium-top consulting_article_heading uk-margin-small-top uk-text-bold">Digital Transformation</div>
                <div class=" services_article_para uk-text-left uk-text-justify">Digital transformation is the change of business and organisational activities and processes. It’s a process of using digital technologies to recreate, 
                redesign or reinvent the existing business processes and actions to meet the changing business and market requirements. ALT Commerce works closely into all the areas of your business,resulting in a strategic roadmap that
                focuses on quality solutions that enable your organisation to move forward with your digital transformation journey.</div>
            </div>
        </div>
    </div>  
    <div class=" uk-margin-small-left uk-padding-remove-horizontal uk-margin-remove-top rem-space" uk-grid>  
        
        <div class="uk-width-3-4 agile-para">
            <div class="uk-card-body  uk-margin-medium-left uk-margin-large-top" style="margin-top:103px !important;">
                <div class="uk-h3 uk-text-right uk-margin-medium-top consulting_article_heading uk-margin-small-top uk-text-bold">Agile Development</div>
                <div class=" services_article_para uk-text-left uk-text-justify">Our highest priority is to satisfy the customer through early and continuous delivery of valuable software. 
                Our approach to project management and software development emphasizes incremental delivery, team collaboration, continual planning, and continual learning, 
                instead of trying to deliver it all at once near the end. Our Agile process believes that every project needs to be handled differently and our team conducts a thorough
                analysis of your current process entirely and looks after the existing methods that need to be tailored to best suit for your project requirements.</div>
            </div>
        </div>
        <div class="uk-width-1-5 agile-img">
            <div class="uk-background-contain uk-margin-small-left uk-height-large uk-flex-center " uk-scrollspy="cls:uk-animation-slide-bottom-medium" style="background-image: url(<?php echo $filePath;?>images/agile.svg);"></div>
        </div>
    </div>
</div>
<?php
include_once "../footer.php";
?>
</body>

</html>
