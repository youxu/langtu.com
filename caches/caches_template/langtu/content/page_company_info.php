<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","langtu-header"); ?>
<!--引用百度地图API-->
<style type="text/css">
    html,body{margin:0;padding:0;}
    .iw_poi_title {color:#CC5522;font-size:14px;font-weight:bold;overflow:hidden;padding-right:13px;white-space:nowrap}
    .iw_poi_content {font:12px arial,sans-serif;overflow:visible;padding-top:4px;white-space:-moz-pre-wrap;word-wrap:break-word}
</style>
<script type="text/javascript" src="http://api.map.baidu.com/api?key=&v=1.1&services=true"></script>
<div id="gsjj_banner"><img src="<?php echo $CATEGORYS[$catid]['image'];?>" border="0" /></div>
    <div id="count">
    	<div id="left">
        	<?php include template("content","langtu-left"); ?>
        </div>
        <div id="gsjj_right">
        	<div class="right_gsjj_banner"></div>
   		  <div class="font_div">
            	<div class="right_title">公司简介</div>
                <p>
               北京朗途科技有限责任公司前身是北京朗途数字工作室，创办于2009年。公司团队一直致力于三维数字影像互动技术
的集成研发，三维数字动画片设计制作 。产品涉及建筑规划，道路交通规划设计，房产销售，汽车销售，旅游教学，
军工，数字展厅，景区复原，旅游景区推广等多个领域。为公司企业，政府部门提供规划设计，营销辅助工具，等多
样式的增值服务或推广宣传服务的同时，真正的实现朗途团队和所服务公司企业的双赢。
                </p>
                <p>
                朗途科技的产品按功能性可划分为规划设计，辅助营销，仿真培训，产品宣传四个大的类别。
                </p>
                <p class="red">规划设计类：城市建设规划，房地产开发前期规划设计，园林建筑规划（可用于项目提案，可实现逼真的仿真预览）</p>
                <p class="red">辅助营销类：房产销售数字楼盘，网上三维电器商城，汽车数字展示</p>
                <p class="red">仿真培训类：旅游景区仿真模拟导游教学，机械装配流程，灾震虚拟演练培训，军事模拟，数字医院, 模拟驾驶</p>
              <p class="red">产品宣传类：汽车广告宣传片，建筑漫游片，数码设备演示片。</p>
                <div><img src="<?php echo IMG_PATH;?>/langtu/right_gsjj_img1.jpg" width="458" height="171" /></div>
                <div class="right_title">公司理念</div>
                <p>
                携手共赢，坚持用产品和服务打动每一位客户，是北京朗途科技有限公司的经营理念。我们凭借专业精神，系统分
析，通过数字影像技术与互动功能的创造结合，有效传达客户的使命、战略目标和文化，帮助客户开拓广袤的市场空间，
达成产品及品牌目标，让客户的每一分投入蒸腾出澎湃的动力。
                </p>
                <p>
                客户奋斗之前是我们的奋斗，客户成就背后是我们的成就。
                </p>

				<!--百度地图容器-->
				<table align="left" border="0" cellpadding="1" cellspacing="1" style="width: 100%;">

                                        <tr>
						<td colspan="2"><b>联系方式</b></td>
					</tr>
                                        <tr>
                                                <td>地址：</td>
                                                <td>北京市丰台科技园盈坤世纪C座11层</td>
                                        </tr>
					<tr>
						<td width="50">电话：</td>
						<td>010-63943533-801，010-63943533-802</td>
					</tr>
					<tr>
						<td>手机：</td>
						<td>15801267031</td>
					</tr>
					<tr>
						<td>邮编：</td>
						<td>100058</td>
					</tr>
					<tr>
						<td>邮箱：</td>
						<td>langtubj@163.com</td>
					</tr>
				</table>
				<div class="clear"></div>
				<div style="width:527px;height:400px;border:#ccc solid 1px; text-align:center" id="dituContent"></div>
          </div>
          <div class="xu"></div>
        </div>
    </div>
    <div class="clear"></div>
<script type="text/javascript">
   //创建和初始化地图函数：
    function initMap(){
        createMap();//创建地图
        setMapEvent();//设置地图事件
        addMapControl();//向地图添加控件
        addMarker();//向地图中添加marker
    }

    //创建地图函数：
    function createMap(){
        var map = new BMap.Map("dituContent");//在百度地图容器中创建一个地图
        var point = new BMap.Point(116.310653,39.833193);//定义一个中心点坐标
        map.centerAndZoom(point,17);//设定地图的中心点和坐标并将地图显示在地图容器中
        window.map = map;//将map变量存储在全局
    }

    //地图事件设置函数：
    function setMapEvent(){
        map.enableDragging();//启用地图拖拽事件，默认启用(可不写)
        map.enableScrollWheelZoom();//启用地图滚轮放大缩小
        map.enableDoubleClickZoom();//启用鼠标双击放大，默认启用(可不写)
        map.enableKeyboard();//启用键盘上下左右键移动地图
    }

    //地图控件添加函数：
    function addMapControl(){
        //向地图中添加缩放控件
	var ctrl_nav = new BMap.NavigationControl({anchor:BMAP_ANCHOR_TOP_LEFT,type:BMAP_NAVIGATION_CONTROL_LARGE});
	map.addControl(ctrl_nav);
        //向地图中添加缩略图控件
	var ctrl_ove = new BMap.OverviewMapControl({anchor:BMAP_ANCHOR_BOTTOM_RIGHT,isOpen:1});
	map.addControl(ctrl_ove);
        //向地图中添加比例尺控件
	var ctrl_sca = new BMap.ScaleControl({anchor:BMAP_ANCHOR_BOTTOM_LEFT});
	map.addControl(ctrl_sca);
    }

    //标注点数组
    var markerArr = [{title:"北京朗途科技有限责任公司",content:"地址：丰台科技园盈坤世纪C座11层</br>电话：15801267031</br>标签：软件公司&nbsp;互联网公司",point:"116.310653|39.833193",isOpen:1,icon:{w:21,h:21,l:0,t:0,x:6,lb:5}}
		 ];
    //创建marker
    function addMarker(){
        for(var i=0;i<markerArr.length;i++){
            var json = markerArr[i];
            var p0 = json.point.split("|")[0];
            var p1 = json.point.split("|")[1];
            var point = new BMap.Point(p0,p1);
			var iconImg = createIcon(json.icon);
            var marker = new BMap.Marker(point,{icon:iconImg});
			var iw = createInfoWindow(i);
			var label = new BMap.Label(json.title,{"offset":new BMap.Size(json.icon.lb-json.icon.x+10,-20)});
			marker.setLabel(label);
            map.addOverlay(marker);
            label.setStyle({
                        borderColor:"#808080",
                        color:"#333",
                        cursor:"pointer"
            });

			(function(){
				var index = i;
				var _iw = createInfoWindow(i);
				var _marker = marker;
				_marker.addEventListener("click",function(){
				    this.openInfoWindow(_iw);
			    });
			    _iw.addEventListener("open",function(){
				    _marker.getLabel().hide();
			    })
			    _iw.addEventListener("close",function(){
				    _marker.getLabel().show();
			    })
				label.addEventListener("click",function(){
				    _marker.openInfoWindow(_iw);
			    })
				if(!!json.isOpen){
					label.hide();
					_marker.openInfoWindow(_iw);
				}
			})()
        }
    }
    //创建InfoWindow
    function createInfoWindow(i){
        var json = markerArr[i];
        var iw = new BMap.InfoWindow("<b class='iw_poi_title' title='" + json.title + "'>" + json.title + "</b><div class='iw_poi_content'>"+json.content+"</div>");
        return iw;
    }
    //创建一个Icon
    function createIcon(json){
        var icon = new BMap.Icon("http://app.baidu.com/map/images/us_mk_icon.png", new BMap.Size(json.w,json.h),{imageOffset: new BMap.Size(-json.l,-json.t),infoWindowOffset:new BMap.Size(json.lb+5,1),offset:new BMap.Size(json.x,json.h)})
        return icon;
    }

    initMap();//创建和初始化地图
</script>
<?php include template("content","footer"); ?>
