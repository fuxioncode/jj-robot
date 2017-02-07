/**
 * Created by ltk on 2015/5/29.
 */
;
$(function(){
        var map = new BMap.Map("map");
        var point = new BMap.Point(113.363808,23.052253);
        map.centerAndZoom(point, 15);
        var marker = new BMap.Marker(point);
        map.addOverlay(marker);

        var opts = {
            width : 200,
            height: 100,
            title : "今甲科技有限公司" ,
            enableMessage:false
        };
        var infoWindow = new BMap.InfoWindow("广州市海珠区小洲村南洲路148号广州今甲智能科技有限公司（韶钢码头）1", opts);
        marker.addEventListener("click", function(){
            map.openInfoWindow(infoWindow,point);
        });
        map.openInfoWindow(infoWindow,point);
});