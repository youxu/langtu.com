<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","langtu-header"); ?>
<!--main-->

<div id="tgfw_banner"><img src="<?php echo $CATEGORYS[$catid]['image'];?>" border="0" /></div>
    <div id="count">
    	<div id="left">
        	<?php include template("content","langtu-left"); ?>
        </div>
        <div id="right">
        	<div class="r_banner"></div>
            <div class="tgfw_cp_div">
            	<div class="tgfw_right_title">产品展示</div>
                <div class="tgfw_right_img">
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=65e9f817b26dff6e644d2b1c6313a7de&action=lists&thumb=1&catid=%24catid&num=9&order=listorder%2Cid+DESC&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 9;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('thumb'=>'1','catid'=>$catid,'order'=>'listorder,id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('thumb'=>'1','catid'=>$catid,'order'=>'listorder,id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
                	<ul>
                	<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                    	<li>
                   	    <a href="<?php echo $r['url'];?>"><img src="<?php echo thumb($r[thumb],200,200);?>" width="200" height="200" /></a>
                        <p><a href="<?php echo $r['url'];?>"><?php echo str_cut($r['title'],30);?></a></p>
                        </li>
                    <?php $n++;}unset($n); ?>   
                    </ul>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>    
                </div>
				<div class="clear"></div>
               <div id="pages" class="text-c"><?php echo $pages;?></div> 
            </div>
        </div>
    </div>
    <div class="clear"></div>


<?php include template("content","footer"); ?>