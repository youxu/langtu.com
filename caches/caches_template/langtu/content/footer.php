<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><div class="box blogroll ylink" style="width:960px; margin:0 auto">
    	<h5>友情链接</h5>
        <div class="bk10"></div>
		<ul class="colli imgul">
			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"link\" data=\"op=link&tag_md5=80574ec69aa2a6c10ed30f7c49e0eda7&action=type_list&siteid=%24siteid&linktype=1&order=listorder+DESC&num=8&return=pic_link\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$link_tag = pc_base::load_app_class("link_tag", "link");if (method_exists($link_tag, 'type_list')) {$pic_link = $link_tag->type_list(array('siteid'=>$siteid,'linktype'=>'1','order'=>'listorder DESC','limit'=>'8',));}?>
			<?php $n=1;if(is_array($pic_link)) foreach($pic_link AS $v) { ?>
			<li><a href="<?php echo $v['url'];?>" title="<?php echo $v['name'];?>" target="_blank"><img src="<?php echo $v['logo'];?>" width="88" height="31" /></a></li>
			<?php $n++;}unset($n); ?>
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
		</ul>
		<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"link\" data=\"op=link&tag_md5=99c32cd273c57223c20074bf5196e97a&action=type_list&siteid=%24siteid&order=listorder+DESC&num=10&return=dat\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$link_tag = pc_base::load_app_class("link_tag", "link");if (method_exists($link_tag, 'type_list')) {$dat = $link_tag->type_list(array('siteid'=>$siteid,'order'=>'listorder DESC','limit'=>'10',));}?>
		<div class="bk10"></div>
		<div class="linka">
			<?php $n=1;if(is_array($dat)) foreach($dat AS $v) { ?>
				  <?php if($type==0) { ?>
				  <a href="<?php echo $v['url'];?>" target="_blank"><?php echo $v['name'];?></a> |
				  <?php } else { ?>
				  <a href="<?php echo $v['url'];?>" target="_blank"><img src="<?php echo $v['logo'];?>" width="88" height="31" style="border: 1px solid #FFBE7A;"></a>
				  <?php } ?>
			<?php $n++;}unset($n); ?>
		</div>
		<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
</div>
<div id="FloatDIV" style="position: absolute;top: 0px;  z-index:9999">
   <div class="ad_right">

   <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=975964193&site=qq&menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:975964193:41" alt="点击这里给我发消息" title="点击这里给我发消息"></a>
   <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=1518781184&site=qq&menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:1518781184:41" alt="点击这里给我发消息" title="点击这里给我发消息"></a>
   </div>
</div>

<script type="text/javascript">
  var MarginLeft = 0;    //浮动层离浏览器右侧的距离
  var MarginTop = 100;   //浮动层离浏览器顶部的距离
  var Width = 209;            //浮动层宽度
  var Heigth= 167;           //浮动层高度

  //设置浮动层宽、高
  function Set()
  {
      document.getElementById("FloatDIV").style.width = Width + 'px';
      document.getElementById("FloatDIV").style.height = Heigth + 'px';
  }

  //实时设置浮动层的位置
  function Move()
  {
        var b_top = window.pageYOffset
                || document.documentElement.scrollTop
                || document.body.scrollTop
                || 0;
        var b_width= document.body.clientWidth;
      document.getElementById("FloatDIV").style.top = b_top + MarginTop + 'px';
      document.getElementById("FloatDIV").style.left = b_width - Width - MarginLeft + 'px';
      setTimeout("Move();",100);
  }

  Set();
  Move();

</script>
<div id="foot">
		Powered by 北京朗途科技有限责任公司版权所有
		<a href="http://www.miibeian.gov.cn" target="_blank">京ICP备17056581号</a>
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?47dd42af106faaa1be5994e42a1552dc";
  var s = document.getElementsByTagName("script")[0];
  s.parentNode.insertBefore(hm, s);
})();
</script>
	</div>
</div>
<script type="text/javascript">
$(function(){
	$(".picbig").each(function(i){
		var cur = $(this).find('.img-wrap').eq(0);
		var w = cur.width();
		var h = cur.height();
	   $(this).find('.img-wrap img').LoadImage(true, w, h,'<?php echo IMG_PATH;?>msg_img/loading.gif');
	});
})
</script>
</body>
</html>
