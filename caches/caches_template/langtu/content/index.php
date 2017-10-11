<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","langtu-header"); ?>
<!--main-->

    <!-- 代码 开始 -->
    <div id="foucsBox">
        <ul class="imgCon">
            <!--展示图片开始-->
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=dcd1c47627b910509414b85662be50cc&action=position&posid=1&order=listorder+DESC&thumb=1&num=5\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'1','order'=>'listorder DESC','thumb'=>'1','limit'=>'5',));}?>
            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
            <li>
            <a href="<?php echo $r['url'];?>" target="_blank">
                <img width="1025" height="391" src="<?php echo thumb($r['thumb'],1025,391);?>" alt="<?php echo $r['title'];?>"/></a>
                <div class="imgTitle"><a href="<?php echo $r['url'];?>" target="_blank"><?php echo str_cut($r['title'],30);?></a></div>
                <div class="showPage"></div>
            </li>
             <?php $n++;}unset($n); ?>
             <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            <!--展示图片结束-->
        </ul>
        <div class="foucs"></div>
        <div class="rBtn foucsButton">
            <span></span>
            <img />
        </div>
        <div class="lBtn foucsButton">
            <span></span>
            <img />
        </div>
    </div>
    <!-- 代码 结束 -->
    <div id="count">
    	<div class="index_left_box">
    	<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=d3b6043d6998b1bf7155ca9613f3fb89&action=lists&catid=14&order=id+DESC&thumb=1&num=4&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$info = $content_tag->lists(array('catid'=>'14','order'=>'id DESC','thumb'=>'1','limit'=>'4',));}?>
        	<div class="index_left_title_bg">
            	<div><?php echo $CATEGORYS['14']['catname'];?></div>
                <span><a href="<?php echo $CATEGORYS['14']['url'];?>">more</a></span>
            </div>
            <div class="index_left_box_bg">
            	<div class="index_left_pos">
            	<?php $n=1;if(is_array($info)) foreach($info AS $v) { ?>
                	<div class="index_left_img_bg <?php if($n>2) { ?>m_t_40<?php } ?>">
               	    <a href="<?php echo $v['url'];?>"><img src="<?php echo thumb($v[thumb],186,117);?>" width="186" height="117" /></a>
                    <span><a href="<?php echo $v['url'];?>"><?php echo str_cut($v['title'],40);?></a></span>
                    </div>
                <?php $n++;}unset($n); ?>               
               </div> 
            </div>
            
         <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>     
        </div>
         <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=4adf8f59d281ceead693078fcf5b548e&action=lists&catid=15&order=updatetime+DESC&thumb=1&num=4&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$info = $content_tag->lists(array('catid'=>'15','order'=>'updatetime DESC','thumb'=>'1','limit'=>'4',));}?>
         <div class="index_left_box">
        	<div class="index_left_title_bg2">
            	<div><?php echo $CATEGORYS['15']['catname'];?></div>
                <span><a href="<?php echo $CATEGORYS['15']['url'];?>">more</a></span>
            </div>
            <div class="index_left_box_bg">
            	<div class="index_left_pos">
					<?php $n=1;if(is_array($info)) foreach($info AS $v) { ?>
                	<div class="index_left_img_bg <?php if($n>2) { ?>m_t_40<?php } ?>">
               	    <a href="<?php echo $v['url'];?>"><img src="<?php echo thumb($v[thumb],186,117);?>" width="186" height="117" /></a>
                    <span><a href="<?php echo $v['url'];?>"><?php echo str_cut($v['title'],40);?></a></span>
                    </div>
					<?php $n++;}unset($n); ?>            
               </div> 
               
            </div>
        </div>
		<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?> 
		<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=baea6b163b2a091ec76373eea16ed12a&action=lists&catid=18&order=listorder+desc%2Cupdatetime+DESC&num=4&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$info = $content_tag->lists(array('catid'=>'18','order'=>'listorder desc,updatetime DESC','limit'=>'4',));}?>
		<?php $n=1;if(is_array($info)) foreach($info AS $v) { ?>

		<?php if($n==1 or $n==3) { ?><div style="padding-left:40px;"><?php } ?>
        <span  <?php if($n==2 or $n==4) { ?>style="padding-left:35px;"<?php } ?> ><embed src="<?php echo $v['video_url'];?>" allowFullScreen="true" quality="high" width="460" height="460" align="middle" allowScriptAccess="always" type="application/x-shockwave-flash"></embed>
        </span>
		<?php if($n==2 or $n==4) { ?></div><?php } ?>
		<?php $n++;}unset($n); ?>
		<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?> 
		<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=8b55a0f718821a1b8e70521e493b6fc3&action=lists&catid=16&order=listorder+desc%2Cupdatetime+DESC&num=6&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$info = $content_tag->lists(array('catid'=>'16','order'=>'listorder desc,updatetime DESC','limit'=>'6',));}?>
        <div class="index_left_box m_t_10">
        	<div class="index_hyxw_title_bg">
        	<span><a href="<?php echo $CATEGORYS['16']['url'];?>">more</a></span>
            	<div><?php echo $CATEGORYS['16']['catname'];?></div>
            	
            </div>
            <ul class="index_hyxw_ul">
            <?php $n=1;if(is_array($info)) foreach($info AS $v) { ?>
            	<li>•&nbsp;&nbsp;<a href="<?php echo $v['url'];?>" target="_blank" class="pt"><?php echo str_cut($v['title'],60);?></a><?php if(time()-$v[updatetime]<24*3600) { ?><img src="<?php echo IMG_PATH;?>/langtu/new.jpg" width="11" height="11" /><?php } ?><span>(<?php echo date('Y-m-d',$v['inputtime']);?>)</span>
                </li>
            <?php $n++;}unset($n); ?>    
            </ul>
        </div>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
         <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=0809edaa196da1d9f064c00b94dfb3bb&action=lists&catid=17&order=updatetime+DESC&num=4&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$info = $content_tag->lists(array('catid'=>'17','order'=>'updatetime DESC','limit'=>'4',));}?>
        <div class="index_left_box m_t_10">
        
        	<div class="index_cpyc_title_bg">
            	<div><?php echo $CATEGORYS['17']['catname'];?></div>
            </div>
            <div class="index_cpyc_tab">
            	 <ul>
            	 <?php $n=1;if(is_array($info)) foreach($info AS $v) { ?>
                    <li><a href="<?php echo $v['url'];?>"><?php echo str_cut($v['title'],60);?></a></li>

				<?php $n++;}unset($n); ?>
                </ul>
            </div>
           
        </div>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        <div class="clear"></div>
     
         
    </div>
    <div class="clear"></div>
    

<?php include template("content","footer"); ?>