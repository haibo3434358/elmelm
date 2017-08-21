<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>饿了么地图</title>
    <style type="text/css">
        html{height:100%}
        body{height:100%;margin:0px;padding:0px}
        #container{height:100%}
    </style>
    <link rel="stylesheet" href="/bs/css/bootstrap.min.css">
    <link rel="stylesheet" href="/bs/css/bootstrap-theme.min.css">
    <script type="text/javascript" src="/bs/js/jquery.js"></script>
    <script type="text/javascript" src="/bs/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=Zcaskv0rFE6vl7Arw9gNhkGKnUv1SuNZ">
//        var map = new BMap.Map("container");
//        map.centerAndZoom(new BMap.Point(116.404, 39.915), 11);
//        map.addControl(new BMap.NavigationControl());
//        map.addControl(new BMap.NavigationControl());
//        map.addControl(new BMap.ScaleControl());
//        map.addControl(new BMap.OverviewMapControl());
//        map.addControl(new BMap.MapTypeControl());
//        map.setCurrentCity("北京"); // 仅当设置城市信息时，MapTypeControl的切换功能才能可用
//        var map = new BMap.Map("container");
//        map.centerAndZoom(new BMap.Point(116.404, 39.915), 11);
//        map.addEventListener("click", function(e){
//            alert(e.point.lng + ", " + e.point.lat);
//
//        });
//        var map = new BMap.Map("container");
//        map.centerAndZoom(new BMap.Point(116.404, 39.915), 11);
//        map.addEventListener("zoomend", function(){
//            alert("地图缩放至：" + this.getZoom() + "级");
//        });
//        var map = new BMap.Map("l-map");         // 创建地图实例
//        var point = new BMap.Point(116.404, 39.915);  // 创建点坐标
//        map.centerAndZoom(point, 15);                 // 初始化地图，设置中心点坐标和地图级别
//        var traffic = new BMap.TrafficLayer();        // 创建交通流量图层实例
//        map.addTileLayer(traffic);
//        var map = new BMap.Map("container");
//        map.centerAndZoom(new BMap.Point(116.404, 39.915), 15);
//        var myPushpin = new BMap.PushpinTool(map);         // 创建标注工具实例
//        myPushpin.addEventListener("markend", function(e){  // 监听事件，提示标注点坐标信息
//            alert("您标注的位置：" +
//                e.marker.getPoint().lng + ", " +
//                e.marker.getPoint().lat);
//        });
//        myPushpin.open();



    </script>
</head>

<body>
<div id="container"></div>
<script type="text/javascript">
//    var map = new BMap.Map("container");          // 创建地图实例
//    var point = new BMap.Point(116.404, 39.915);  // 创建点坐标
//    map.centerAndZoom(point, 15);                 // 初始化地图，设置中心点坐标和地图级别
//var map = new BMap.Map("container");
//map.centerAndZoom(new BMap.Point(116.404, 39.915), 15);
//var myDis = new BMapLib.DistanceTool(map);

//        接着我们创建两个按钮元素并为其添加点击事件。
//var map = new BMap.Map("l-map");         // 创建地图实例
//        var point = new BMap.Point(116.404, 39.915);  // 创建点坐标
//        map.centerAndZoom(point, 15);                 // 初始化地图，设置中心点坐标和地图级别
//        var traffic = new BMap.TrafficLayer();
var map = new BMap.Map("container");
map.centerAndZoom(new BMap.Point(116.404, 39.915), 11);
var local = new BMap.LocalSearch(map,
    { renderOptions:{map: map, autoViewport: true}});
local.searchNearby("小吃", "{{$dizhi}}");
//map.centerAndZoom(point, 15);                 // 初始化地图，设置中心点坐标和地图级别
//        var traffic = new BMap.TrafficLayer();        // 创建交通流量图层实例
//var map = new BMap.Map("container");
//map.centerAndZoom(new BMap.Point(116.404, 39.915), 12);
//var transit = new BMap.TransitRoute("北京市");
//transit.setSearchCompleteCallback(function(results){
//    if (transit.getStatus() == BMAP_STATUS_SUCCESS){
//        var firstPlan = results.getPlan(0);
//        // 绘制步行线路
//        for (var i = 0; i < firstPlan.getNumRoutes(); i ++){
//            var walk = firstPlan.getRoute(i);
//            if (walk.getDistance(false) > 0){
//                // 步行线路有可能为0
//                map.addOverlay(new BMap.Polyline(walk.getPoints(), {lineColor: "green"}));
//            }
//        }
//        // 绘制公交线路
//        for (i = 0; i < firstPlan.getNumLines(); i ++){
//            var line = firstPlan.getLine(i);
//            map.addOverlay(new BMap.Polyline(line.getPoints()));
//        }
//        // 输出方案信息
//        var s = [];
//        for (i = 0; i < results.getNumPlans(); i ++){
//            s.push((i + 1) + ". " + results.getPlan(i).getDescription());
//        }
//        document.getElementById("log").innerHTML = s.join("<br>");
//    }
//})
//transit.search("中关村", "国贸桥");
window.onload = function(){
    var panorama = new BMap.Panorama('panorama');   //2
    panorama.setPosition(new BMap.Point(120.320032, 31.589666));    //3
    // panorama.setId('0100010000130501122416015Z1');
    panorama.setPov({heading: -40, pitch: 6});  //4
}
</script>
<a href="{{url('home/shouye')}}" style="float:right">
    <a href="{{url('home/shouye')}}" class="btn btn-primary btn-lg active" role="button">进入购物主页</a>
   </a>

<div id="panorama" style="width:50%;height:50%"></div>
</body>
</html>