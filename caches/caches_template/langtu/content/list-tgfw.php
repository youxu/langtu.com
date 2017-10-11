<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","langtu-header"); ?>
<!--main-->

<div id="tgfw_banner"><img src="<?php echo $CATEGORYS[$catid]['image'];?>" border="0" /></div>
    <div id="count">
    	<div id="left">
        	<?php include template("content","langtu-left"); ?>
        </div>
        <div id="tgfw_right">
        	<div class="right_tgfw_banner"></div>
            <div class="right_tgfw_img2"></div>
            <div class="right_tgfw_div">
            	<div class="tgfw_right_title">关于虚拟现实</div>
                <div>
                    <div class="tgfw_right_left_div">
                        <img src="<?php echo IMG_PATH;?>/langtu/tgfw_img1.jpg" width="226" height="144" />
                        <div class="tgfw_img_title">虚拟现实三维场景</div>
                    </div>
                    <div class="tgfw_right_font">
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"block\" data=\"op=block&tag_md5=73b494effa6783d17a790bb69d516e99&pos=tgfw_1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">添加碎片</a>";}$block_tag = pc_base::load_app_class('block_tag', 'block');echo $block_tag->pc_tag(array('pos'=>'tgfw_1',));?><?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                    </div>
                </div>
                <div class="clear"></div>
                <div class="tgfw_right_title">虚拟现实技术</div>
                <div>
                    <div class="tgfw_right_left_div">
                        <img src="<?php echo IMG_PATH;?>/langtu/tgfw_img2.jpg"/>
                    </div>
                    <div class="tgfw_right_font">
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"block\" data=\"op=block&tag_md5=b78ad143d855a54598caa386a0ef62e0&pos=tgfw_2\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">添加碎片</a>";}$block_tag = pc_base::load_app_class('block_tag', 'block');echo $block_tag->pc_tag(array('pos'=>'tgfw_2',));?><?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                    	
                    </div>
                    <div class="clear"></div>
                    <div class="tgfw_right_left_div m_t_10">
                        <img src="<?php echo IMG_PATH;?>/langtu/tgfw_img3.jpg"/>
                       
                    </div>
                    <div class="tgfw_right_font m_t_10" >
                     <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"block\" data=\"op=block&tag_md5=ac7aa20fb20eb811fea077ba269aa739&pos=tgfw_3\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">添加碎片</a>";}$block_tag = pc_base::load_app_class('block_tag', 'block');echo $block_tag->pc_tag(array('pos'=>'tgfw_3',));?><?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                    </div>
                </div>
            </div>
   		  	<div class="clear"></div>
            <div class="tgfw_cp_div">
            	<div class="tgfw_right_title">产品应用领域</div>
                <div class="tgfw_right_img">
                	<ul>
                		<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=3f756d03f920ebfb5793536d04da5994&action=lists&thumb=1&num=12&catid=%24catid&order=listorder+desc%2Cupdatetime+DESC&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('thumb'=>'1','catid'=>$catid,'order'=>'listorder desc,updatetime DESC','limit'=>'12',));}?>
                		<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                    	<li>
                   	    <a href="<?php echo $r['url'];?>"><img src="<?php echo thumb($r[thumb],100,100);?>" width="100" height="100" /></a>
                        <p><a href="<?php echo $r['url'];?>"><?php echo str_cut($r['title'],16,'.');?></a></p>
                        </li>
                        <?php $n++;}unset($n); ?>
                        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                    </ul>
                </div>
                <div id="pages" class="text-c"><?php echo $pages;?></div>  
            </div>
            
          
        </div>
    </div>
    <div class="clear"></div>


<?php include template("content","footer"); ?>