<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><div class="left_div">
<div id="tree">
	<div><?php echo $CATEGORYS[$catid]['catname'];?></div>
	<ul>
	<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=6ca70f2da6f3859438145c8a4221e57d&action=category&catid=11&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'11','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'20',));}?> 
	<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?> 
    <li><a href="<?php echo $r['url'];?>"><span><?php echo $r['catname'];?></span></a></li> 
	<?php $n++;}unset($n); ?> 
	<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>  
	</ul>
</div>
	
</div>
<div class="left_div">
	<div><img src="<?php echo IMG_PATH;?>/langtu/left_lxwm.jpg" /></div>
     <div class="left_font">
     	<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"block\" data=\"op=block&tag_md5=aeb512aa74a496d81a0a7abcb624bc1c&pos=tel\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">添加碎片</a>";}$block_tag = pc_base::load_app_class('block_tag', 'block');echo $block_tag->pc_tag(array('pos'=>'tel',));?><?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        <div class="clear"></div>
    </div>
</div>