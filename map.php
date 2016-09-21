<?php
$title='首页';
include('header.php');
?>
<section class="container">
    <div id="yc_map" style="width: 100%;height: 500px;"></div>
</section>
<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=nop4rKvmf5EWs7MzLiZAFShTnk9ySlGs"></script>

<!--footer-->
<?php include('footer.php');?>
</body>
</html>
<script type="text/javascript">
    // 百度地图API功能
    var map = new BMap.Map("yc_map");    // 创建Map实例
    map.centerAndZoom(new BMap.Point(111.798065,22.175953), 16);  // 初始化地图,设置中心点坐标和地图级别
    map.addControl(new BMap.MapTypeControl());   //添加地图类型控件
    map.setCurrentCity("阳春");          // 设置地图显示的城市 此项是必须设置的
    map.enableScrollWheelZoom(true);     //开启鼠标滚轮缩放
</script>
