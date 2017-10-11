<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=7" />
<title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
<meta name="keywords" content="<?php echo $SEO['keyword'];?>">
<meta name="description" content="<?php echo $SEO['description'];?>">
<meta property="wb:webmaster" content="2d3aac51d39ba545" />
<link href="<?php echo CSS_PATH;?>langtu/ie.css" rel="stylesheet" type="text/css" />
<link href="<?php echo CSS_PATH;?>reset.css" rel="stylesheet" type="text/css" />
<link href="<?php echo CSS_PATH;?>default_blue.css" rel="stylesheet" type="text/css" />
<link href="<?php echo CSS_PATH;?>foucsbox.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo JS_PATH;?>jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="<?php echo JS_PATH;?>jquery.sgallery.js"></script>
<script type="text/javascript" src="<?php echo JS_PATH;?>search_common.js"></script>
<script type="text/javascript" src="<?php echo JS_PATH;?>langtu.js"></script>
<script type="text/javascript" src="<?php echo JS_PATH;?>foucsbox.js"></script>
</head>
<body>
<div class="body-top">
    <div class="content">
    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=2e3bec5eab254972ef7678fb28fb15b9&action=position&posid=9&order=id&num=10&cache=3600\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('posid'=>'9','order'=>'id',)).'2e3bec5eab254972ef7678fb28fb15b9');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'9','order'=>'id','limit'=>'10',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
    		<div id="announ">
                 <ul>
                 <?php $n=1; if(is_array($data)) foreach($data AS $k => $v) { ?>
                      <li><a href="<?php echo $v['url'];?>"><?php echo $v['title'];?></a></li>
                      <?php $n++;}unset($n); ?>
                 </ul>
            </div>
     <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
	 <?php echo runhook('glogal_header')?>
<script type="text/javascript">
$(function(){
	startmarquee('announ',22,1,500,3000);
})
</script>
            <div class="login lh24 blue"></div>
    </div>
</div>

<div class="body_div">

    <div id="menu">
    	<div class="b_l"></div>
        <div class="b_bg">
        <map>
    	<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=70f0453b28d3b62324557276e5c8c8f2&action=category&catid=0&num=5&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'0','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'5',));}?>
        	<ul>
			<li>
			<div><a href="<?php echo siteurl($siteid);?>">首页</a></div>
            <div class="b_font">Home page</div>
			</li>
			<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
			<li>
			<div><a href="<?php echo $r['url'];?>"><?php echo $r['catname'];?></a></div>
            <div class="b_font"><?php echo $r['catdir'];?></div>
			</li>
			<?php $n++;}unset($n); ?>
            </ul>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
		<?php echo runhook('glogal_menu')?>
        </map>

        </div>
        <div class="b_r"></div>
    </div>
    <div class="clear"></div>


