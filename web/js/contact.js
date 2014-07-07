/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

       // 百度地图API功能
        var map = new BMap.Map("location");            // 创建Map实例
        var opts = {width:250,height:100,title : '<span style="font-size:14px;color:#0A8021">英华信咨询</span>'};
        var point =new BMap.Point(116.404, 39.915);
        map.centerAndZoom(point, 14);
        var infoWindow =new BMap.InfoWindow("<div style='line-height:1.8em;font-size:12px;'><b>地址:</b>北京市朝阳区高碑店小学旁</br><b>电话:</b>010-59921010</br></div>", opts);  // 创建信息窗口对象，引号里可以书写任意的html语句。
       
        var mkr = new BMap.Marker(new BMap.Point(116.380797, 39.918497));
        
        map.addOverlay(mkr);
        map.openInfoWindow(infoWindow,map.getCenter());