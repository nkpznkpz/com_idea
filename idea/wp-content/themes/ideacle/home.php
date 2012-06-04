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
					<img src="<?php echo $path; ?>/images/slider1_image_1.jpg" class="header_image" color="" alt="" link="#link1" />
                    <img src="<?php echo $path; ?>/images/slider1_image_2.jpg" class="header_image" color="" alt="" link="#link2" />
                    <img src="<?php echo $path; ?>/images/slider1_image_3.jpg" class="header_image" color="" alt="" link="#link3" />
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
            <h1>We <span>iDeacle</span> Best Software, Design and Solution</h1>
            <div class="sub-text">ซอฟแวร์ที่ดีที่สุดต้องมาพร้อมการออกแบบที่ดีที่สุด และมาเพื่อตอบโจทย์ของคุณมากที่สุด</div>
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
   	  	<h2>Best Software</h2>
        <p> เราเน้นออกแบบผลิตภัณฑ์ของเราให้ใช้งานง่าย<img src="<?php echo $path; ?>/images/temp_img_1.png" alt="" width="93" height="76" class="alignright" /> ทำให้การใช้งานไม่ใช่เรื่องยาก  และซอฟแวร์ของเรายังออกแบบตามมาตรฐานที่นิยมใช้กันทั่วโลก ทำให้มั่นใจได้ว่า
	พัฒนาซอฟแวร์กับเราจะไม่มีคำว่าล้าสมัยอีกต่อไป </p> 
        <a href="#" class="link-more">เพิ่มเติม</a>        </div>
	</div>
    
<div class="col col_1_3">
    	<div class="inner">
   	  	<h2>Best Design</h2>
        <p>การออกแบบที่ดี คือการออกแบบให้ผู้ใช้ได้ใช้งานง่ายที่สุด เรียบง่ายที่สุด<img src="<?php echo $path; ?>/images/temp_img_2.png" alt="" width="93" height="76" class="alignright" />และยังคำนึงถึงการออกแบบยังสามารถเปิดใช้งานได้บนมือถือและแทบเลต และพวกเราอยากเห็นลูกค้าได้มีความสุขทุกครั้งที่ได้ใช้งานซอฟแวร์ ก็เพียงพอแล้ว  </p>
        <a href="#" class="link-more">เพิ่มเติม</a>      </div>
    </div>
<div class="col col_1_3">
    	<div class="inner">
   	  	<h2>Best Solution</h2>
        <p> พวกเราเน้นพัฒนาซอฟแวร์เพื่อแก้ปัญหาให้กับลูกค้า<img src="<?php echo $path; ?>/images/temp_img_3.png" width="80" height="76" class="alignright" alt="" />  ลดขั้นตอนการทำงาน  ช่วยเพิ่มประสิทธิภาพในกระบวนการทำงานให้ดียิ่งขึ้น  ไม่เพียงแต่ลูกค้าจะได้ซอฟแวร์ตามความต้องการ
	แต่เรายังให้การดูแลท่านเหมือนเป็นครอบครัวเดียวกันกับเรา</p>
		<a href="#" class="link-more">เพิ่มเติม</a>      </div>
    </div>
    <div class="divider_space"></div>
    
    <div class="box box_white">
    
        <div class="col col_2_3">
            <div class="inner">
                <div class="quoteBox-big">
                    <div class="quote-title"><strong>iDeacle Qoute:</strong></div>
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
                        <h2>iDea Cleaver</h2>
                        <div>เรายินดีอย่างยิ่งที่เราเป็นส่วนหนึ่งของท่าน และขอโอกาสให้เราได้รับใช้ท่านอีกครั้ง</div><br/>
						<div class="quote-author"><span class="violet">Palakorn Nakphong</span>  iDeacle Team</div> 
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
                	<h3>Creative Webdesign</h3>
                    <p>บริการออกแบบและพัฒนาเว็บไซต์ ทั้งเว็บสำเร็วรูป  เว็บบอร์ด เว็บบล๊อก ร้านค้าออนไลน์ และอื่นๆตามที่ลูกค้าต้องการ</p>
                    
                    <div class="clear"></div>
                    </div>
              	</div>
                <div class="tabcontent">
                	<div class="inner">
                	<img src="<?php echo $path; ?>/images/temp/temp_img_2.jpg" alt="" width="230" height="143" class="alignleft" />
                	<h3>Application and Web Application</h3>
                    <p>บริการออกแบบเว็บแอฟพลิเคชั่นและแอฟพลิเคชัน ตามความต้องการของลูกค้า</p>
                    <div class="clear"></div>
                    </div>
				</div>
                <div class="tabcontent">
                	<div class="inner">
                	<img src="<?php echo $path; ?>/images/temp/temp_img_3.jpg" alt="" width="230" height="143" class="alignright" />
                	<h3>Consount</h3>
                    <p>บริการให้คำปรึกษาในการออกแบบโปรแกรมเพื่อใช้ในทางธุกิจ และบริการออกแบบเว็บแอฟพลิเคชั่นเพื่อเพิ่มประสิทธิภาพให้กับธุกิจ</p>
                    
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
                	<h3>Mobile,tablets Compatible</h3>
                    <p>เพิ่มประสิทธิภาพให้กับเว็บไซต์ ด้วยการออกแบบให้รองรับในการเปิดชมได้ในมือถือและแทฟเลต</p>
                    
                    <div class="clear"></div>
                    </div>
              	</div>
                <div class="tabcontent">
                	<div class="inner">
               	  	<h3>Everything for your need</h3>
                    <p>แก้ไขปัญหาที่ซับซ้อน ด้วย ซอฟแวร์จากเรา คิดค้นวิธีใหม่ๆที่ช่วยลดกระบวนการทำงานให้กับอุตสาหกรรมของท่าน</p>
                    <div class="clear"></div>
                    </div>
				</div>
                <div class="tabcontent">
                	<div class="inner">
                	<img src="<?php echo $path; ?>/images/temp/temp_img_2.jpg" alt="" width="230" height="143" class="alignleft" />
                	<h3>Cloud Computing</h3>
                    <p>บริการออกแบบแอฟพลิเคชัน ขนาดใหญ่ที่รองรับผู้ใช้งานจำนวนมาก ข้อมูลจำนวนมาก และปรับแต่งเว็บไซต์ให้มีประสิทธิภาพสูงสุด</p>
                    
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