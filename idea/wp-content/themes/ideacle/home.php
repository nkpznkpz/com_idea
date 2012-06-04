<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Com_Ideacle
 */

get_header(); ?>
<?php
$path = get_template_directory_uri();

?>
<!-- slider -->        

    <div class="container_12">
        <div class="slider">
        	
            	<div id="header_images">
					<img src="<?php echo $path; ?>/images/slider1_image_1.jpg" class="header_image" color="#17191e" alt="" link="#link1" />
                    <img src="<?php echo $path; ?>/images/slider1_image_2.jpg" class="header_image" color="#054065" alt="" link="#link2" />
                    <img src="<?php echo $path; ?>/images/slider1_image_3.jpg" class="header_image" color="#3f0731" alt="" link="#link3" />
				</div>
                <div class="header_controls">            
                <a href="#" id="header_controls_left">Previous</a>
                <a href="#" id="header_controls_right">Next</a>                </div>
                <div id="overlay_bg"></div>
        </div>
    </div>
   
<!--/ slider -->    
</div>


<div class="welcome_bar">
<!-- bar -->	
<div class="container_12 bar">
        <div class="bar-icon"><img src="<?php echo $path; ?>/images/icon_rss.png" width="80" height="80" alt="" /></div>
        <div class="bar-title">
            <h1>Welcome to <span>Envision</span>, the interactive agency!</h1>
            <div class="sub-text">We have a passion for pixel perfect design. But don’t take our word for it, look for yourself:</div>
        </div>
        <div class="bar-right">
        	<a href="javascript:void(0);" class="button_link large_button"><span>View Portfolio</span></a></div>
        <div class="clear"></div>
    </div>
<!--/ bar -->   
</div>



<!-- middle body --> 
<div class="middle homepage">
	<div class="container_12">
    
    <div class="col col_1_3">
    	<div class="inner">
   	  	<h2>Multiple Colors &amp; Slider options</h2>
        <p> Sliders in all forms &amp; colors: Javascript, Flash, you<img src="<?php echo $path; ?>/images/temp_img_1.png" alt="" width="93" height="76" class="alignright" /> name it! We’ve got it! But the best part is that they can be easily modified to fit your company’s look &amp; feel.  </p>
        <a href="#" class="link-more">more details</a>        </div>
	</div>
    
<div class="col col_1_3">
    	<div class="inner">
   	  	<h2>Award winning design &amp; coding</h2>
        <p>These three icons below the text paragraphs<img src="<?php echo $path; ?>/images/temp_img_2.png" alt="" width="93" height="76" class="alignright" /> are custom created for the Envision theme &amp; the  included PSD files contain all the layers needed to edit them. </p>
        <a href="#" class="link-more">more details</a>      </div>
    </div>
<div class="col col_1_3">
    	<div class="inner">
   	  	<h2>Great support in just 24 hours</h2>
        <p> If you buy this theme we offer 24 hours <img src="<?php echo $path; ?>/images/temp_img_3.png" width="80" height="76" class="alignright" alt="" />response time on our dedicated support forums.  That’s “best in class” support offer, it just can’t get better &amp; faster than this!</p>
		<a href="#" class="link-more">more details</a>      </div>
    </div>
    <div class="divider_space"></div>
    
    <div class="box box_white">
    
        <div class="col col_2_3">
            <div class="inner">
                <div class="quoteBox-big">
                    <div class="quote-title"><strong>WHAT OTHERS SAY ABOUT US:</strong></div>
                    <div class="quote-text">Over the last eighteen months our sales have increased three-fold since the launch of our new web site. We have to say it has made us delighted we chose Envision.</div>
                    <div class="quote-author"><span class="violet">George Mansion,</span>  founder Silicon App Inc</div>    
                </div>
            </div>
        </div>
        
<div class="col col_1_3">
        	<div class="inner">
            	
                <!-- newsletter -->
                <div class="newsletterBox">
                	<div class="bg">
                        <div class="ribbon"></div>
                        <h2>Stay in touch with us!</h2>
                        <div class="before-text">Sign up for our weekly newsletter to receive updates, news, and interesting tidbits.</div>
                        <form action="" method="post">
                            <input type="text" value="" name="" class="inputField" />
                            <input type="submit" value="" name="" class="btn-submit" />
                            <div class="clear"></div>
                        </form>
                	</div>
                </div>
                <!--/ newsletter -->
            </div>
      </div>
        
    <div class="clear"></div>
    </div>
    
    <div class="divider_space"></div>
    
    <div class="col col_1_2">
        <div class="inner">
        	
            <!-- tab box -->
            <div class="tabBox">
				<div class="tabTitle"><h3>Services:</h3></div>
                <ul class="tabs">
                      <li><a href="#tabcontent1"><img src="<?php echo $path; ?>/images/icons/icon_1.png" width="51" height="42" alt="" /></a></li>
                      <li><a href="#tabcontent2"><img src="<?php echo $path; ?>/images/icons/icon_2.png" width="51" height="42" alt="" /></a></li>
                      <li><a href="#tabcontent3"><img src="<?php echo $path; ?>/images/icons/icon_3.png" width="51" height="42" alt="" /></a></li>
                </ul>

                <div class="tabcontent">
                	<div class="inner">
                	<img src="<?php echo $path; ?>/images/temp/temp_img_1.jpg" alt="" width="230" height="143" class="alignleft" />
                	<h3>Creative webdesign</h3>
                    <p>The point of using Lorem Ipsum is that it has a near “more-or-less” normal and distribution of letters.</p>
                    
                    <div class="clear"></div>
                    </div>
              	</div>
                <div class="tabcontent">
                	<div class="inner">
                	<img src="<?php echo $path; ?>/images/temp/temp_img_2.jpg" alt="" width="230" height="143" class="alignleft" />
                	<h3>Apps for Mobile phones</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod . <a href="#tabcontent1">Jump to first tab.</a></p>
                    <div class="clear"></div>
                    </div>
				</div>
                <div class="tabcontent">
                	<div class="inner">
                	<img src="<?php echo $path; ?>/images/temp/temp_img_3.jpg" alt="" width="230" height="143" class="alignright" />
                	<h3>Statistics</h3>
                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                    
                	<div class="clear"></div>
                    </div>
                </div>
            </div>
            <!--/ tab box -->
        </div>
    </div>
    
<div class="col col_1_2">
    	<div class="inner">
    		
            <!-- tab box -->
            <div class="tabBox">
				<div class="tabTitle"><h3>Solutions:</h3></div>
                <ul class="tabs">
                      <li><a href="#tabcontent1"><img src="<?php echo $path; ?>/images/icons/icon_5.png" width="51" height="42" alt="" /></a></li>
                      <li><a href="#tabcontent2"><img src="<?php echo $path; ?>/images/icons/icon_4.png" width="51" height="42" alt="" /></a></li>
                      <li><a href="#tabcontent3"><img src="<?php echo $path; ?>/images/icons/icon_6.png" width="51" height="42" alt="" /></a></li>
                </ul>

                <div class="tabcontent">
                	<div class="inner">
                	<img src="<?php echo $path; ?>/images/temp/temp_img_3.jpg" alt="" width="230" height="143" class="alignleft" />
                	<h3>Apps for Mobile phones</h3>
                    <p>The point of using Lorem Ipsum is that it has a near “more-or-less” normal and distribution of letters.</p>
                    
                    <div class="clear"></div>
                    </div>
              	</div>
                <div class="tabcontent">
                	<div class="inner">
               	  	<h3>Everything for your need!</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                    <div class="clear"></div>
                    </div>
				</div>
                <div class="tabcontent">
                	<div class="inner">
                	<img src="<?php echo $path; ?>/images/temp/temp_img_2.jpg" alt="" width="230" height="143" class="alignleft" />
                	<h3>Weather</h3>
                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                    
                	<div class="clear"></div>
                    </div>
                </div>
            </div>
            <!--/ tab box -->
      </div>
	</div>
    
    <div class="clear"></div>
  </div>	
</div>
<!--/ middle body -->
	


<?php get_footer(); ?>