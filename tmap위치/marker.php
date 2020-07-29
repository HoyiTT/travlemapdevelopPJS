<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>simpleMap</title>
        <script src="https://apis.openapi.sk.com/tmap/jsv2?version=1&appKey=l7xx7a37c0b7e6384cdf9df459d620f7f8c3"></script>
        <script type="text/javascript">
			function initTmap(){
				var map = new Tmapv2.Map("map_div",  
				{
					center: new Tmapv2.LatLng(37.566481622437934,126.98502302169841), // 지도 초기 좌표
					width: "890px", 
					height: "400px",
					zoom: 15
				});
                var marker = new Tmapv2.Marker({
			position: new Tmapv2.LatLng(37.566481622437934,126.98452302169841), //Marker의 중심좌표 설정.
			map: map //Marker가 표시될 Map 설정..
		});
			} 
		</script>
    </head>
    <body onload="initTmap()">
        <div id="map_div">
        </div>
    </body>
</html>