<?php
/* unserialize all saved option for  section 6 options */
    $option6=  unserialize(get_option('sfsi_section6_options',false));
	if(!isset($option6['sfsi_rectsub']))
	{
		$option6['sfsi_rectsub'] = 'no';
	}
	if(!isset($option6['sfsi_rectfb']))
	{
		$option6['sfsi_rectfb'] = 'yes';
	}
	if(!isset($option6['sfsi_rectgp']))
	{
		$option6['sfsi_rectgp'] = 'yes';
	}
	if(!isset($option6['sfsi_rectshr']))
	{
		$option6['sfsi_rectshr'] = 'yes';
	}
	if(!isset($option6['sfsi_recttwtr']))
	{
		$option6['sfsi_recttwtr'] = 'no';
	}
   
?>
<!-- Section 6 "Do you want to display icons at the end of every post?" main div Start -->
<div class="tab6">
	<p>The selections you made so far were to display the subscriptions/ social media icons for your site in general (in a widget on the sidebar). You can also display icons at the end of every post, encouraging users to subscribe/like/share after they’ve read it. The following buttons will be added: </p>
	<!-- icons example  section -->	
	<div class="social_icon_like1 cstmdsplyulwpr">
	<ul>
		<li>
        	<div class="radio_section tb_4_ck"><input name="sfsi_rectsub" <?php echo ($option6['sfsi_rectsub']=='yes') ?  'checked="true"' : '' ;?>  id="sfsi_rectsub" type="checkbox" value="yes" class="styled"  /></div>
            <a href="#" title="Subscribe Follow" class="cstmdsplsub">
                <img src="<?php echo SFSI_PLUGURL; ?>images/follow_subscribe.png" alt="Subscribe Follow" />
            </a>
        </li>
        
        <li>
        	<div class="radio_section tb_4_ck"><input name="sfsi_rectfb" <?php echo ($option6['sfsi_rectfb']=='yes') ?  'checked="true"' : '' ;?>  id="sfsi_rectfb" type="checkbox" value="yes" class="styled"  /></div>
        	<a href="#" title="Facebook Like">
            	<img src="<?php echo SFSI_PLUGURL; ?>images/like.jpg" alt="Facebook Like" />
        	</a>
        </li>
		<li>
        	<div class="radio_section tb_4_ck"><input name="sfsi_rectgp" <?php echo ($option6['sfsi_rectgp']=='yes') ?  'checked="true"' : '' ;?>  id="sfsi_rectgp" type="checkbox" value="yes" class="styled"  /></div>
        	<a href="#" title="Google Plus">
            	<img src="<?php echo SFSI_PLUGURL; ?>images/google_plus1.jpg" alt="Google Plus" />
            </a>
        </li>
		
        <li>
        	<div class="radio_section tb_4_ck"><input name="sfsi_recttwtr" <?php echo ($option6['sfsi_recttwtr']=='yes') ?  'checked="true"' : '' ;?>  id="sfsi_recttwtr" type="checkbox" value="yes" class="styled"  /></div>
            <a href="#" title="twitter" class="cstmdspltwtr">
                <img src="<?php echo SFSI_PLUGURL; ?>images/twiiter.png" alt="Twitter like" />
            </a>
        </li>
        
        <li>
        	<div class="radio_section tb_4_ck"><input name="sfsi_rectshr" <?php echo ($option6['sfsi_rectshr']=='yes') ?  'checked="true"' : '' ;?>  id="sfsi_rectshr" type="checkbox" value="yes" class="styled"  /></div>
        	<a href="#" title="Share">
            	<img src="<?php echo SFSI_PLUGURL; ?>images/share1.jpg" alt="Share" />
            </a>
        </li>
		
	</ul>	
	</div><!-- icons position section -->
	
	<p class="clear">Those are usually all you need: </p>
	<ul class="usually">
    	<li>1. The follow-icon ensures that your visitors subscribe to your newsletter</li>
		<li>2. Facebook is No.1 in «liking», so it’s a must have</li>
		<li>3. Google+ is becoming more popular, and also important for SEO reasons</li>
		<li>4. The Tweet-button allows quick tweeting of your article</li>
        <li>5. The share-button covers all other platforms for sharing</li>
	</ul>
	<!-- icons display section -->
	<h4 class="sfsi_dsplyatend">So: do you want to display those at the end of every post?</h4>
	<ul class="enough_waffling sfsi_dsplyatend">
		<li><input name="sfsi_show_Onposts" <?php echo ($option6['sfsi_show_Onposts']=='yes') ?  'checked="true"' : '' ;?> type="radio" value="yes" class="styled"  /><label>Yes</label></li>
		<li><input name="sfsi_show_Onposts" <?php echo ($option6['sfsi_show_Onposts']=='no') ?  'checked="true"' : '' ;?> type="radio" value="no" class="styled" /><label>No</label></li>
    </ul><!-- icons display section -->
	
  <!-- icons position section -->	
  <div class="row PostsSettings_section">
  	<h4>Options:</h4>
	<div class="options">
            <label class="first">Text to appear before the sharing icons:</label><input name="sfsi_textBefor_icons" type="text" value="<?php echo ($option6['sfsi_textBefor_icons']!='') ?  $option6['sfsi_textBefor_icons'] : '' ; ?>" />
	</div>
	<div class="options">
            <label>Alignment of share icons: </label><div class="field"><select name="sfsi_icons_alignment" id="sfsi_icons_alignment" class="styled"><option value="left" <?php echo ($option6['sfsi_icons_alignment']=='left') ?  'selected="selected"' : '' ;?>>Left</option><!--<option value="center" <?php //echo ($option6['sfsi_icons_alignment']=='center') ?  'selected="selected"' : '' ;?>>Center</option>--><option value="right" <?php echo ($option6['sfsi_icons_alignment']=='right') ?  'selected="selected"' : '' ;?>>Right</option></select></div>
	</div>
	<div class="options">
            <label>Do you want to display the counts?</label><div class="field"><select name="sfsi_icons_DisplayCounts" id="sfsi_icons_DisplayCounts" class="styled"><option value="yes" <?php echo ($option6['sfsi_icons_DisplayCounts']=='yes') ?  'selected="true"' : '' ;?>>YES</option><option value="no" <?php echo ($option6['sfsi_icons_DisplayCounts']=='no') ?  'selected="true"' : '' ;?>>NO</option></select></div>
	</div>
	
  </div><!-- END icons position section -->
  
	<div class="sfsinewplgndesc">
        <p class="clear"> 
            Note: If you want more placement options for the icons next to posts,  please check out our <a href="https://wordpress.org/plugins/ultimate-social-media-plus/">new plugin</a> (also free!) which will also allow you to place the icons...         
        </p>
        <ul class="usually">
            <li>1. ...you selected under question 1</li>
            <li>2. ...also on your homepage (instead of only on the posts’s pages)</li>
            <li>3. ...before posts (instead of only after posts)</li>
        </ul>
    </div>
  
     <!-- SAVE BUTTON SECTION   --> 
  <div class="save_button">
       <img src="<?php echo SFSI_PLUGURL ?>images/ajax-loader.gif" class="loader-img" />
       <?php  $nonce = wp_create_nonce("update_step6"); ?>
        <a  href="javascript:;" id="sfsi_save6" title="Save" data-nonce="<?php echo $nonce;?>">Save</a>
  
  </div>  <!-- END SAVE BUTTON SECTION   -->
  <a class="sfsiColbtn closeSec" href="javascript:;">Collapse area</a>
  <label class="closeSec"></label>
  <!-- ERROR AND SUCCESS MESSAGE AREA-->
  <p class="red_txt errorMsg" style="display:none"> </p>
  <p class="green_txt sucMsg" style="display:none"> </p>
  <div class="clear"></div>
</div><!-- END Section 6 "Do you want to display icons at the end of every post?" -->