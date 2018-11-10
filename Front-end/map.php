<!DOCTYPE html>
<html lang="ko">
<head>
  <title>map</title>
  <meta charset="utf-8">

  <!-- header -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=false"> </script>
  <script type="text/javascript" src="//openapi.map.naver.com/openapi/v3/maps.js?clientId=u34gNcJzVg_ChXm76Fx0&submodules=geocoder"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/textillate/0.4.0/jquery.textillate.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/lettering.js/0.7.0/jquery.lettering.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

  <style>
    #langselectbox{padding:5px 0px;}
    #topselect{height:84px;margin-top:20px;}
    #topnav{background:white;height:54px;}
    #topnav div a {color:black;}
    .selectmenu{background:gray;height:70px;}
    #content{height:500px;}
    #topnav{border-top:1px solid #acacac;border-bottom:1px solid #acacac;height:54px;}
    #topnav .row div {padding-top:13px;text-align:center;height:54px;}
    #topnav .row div a{font-size:20px;text-decoration:none;}
    #topnav .row div a:hover{color:#f16c4f;}
    #menubox{margin-top:30px;margin-bottom:30px;}
    #menubox .selectmenu .menulist div{text-align:center;padding:5px 0px;}
    #menubox .selectmenu .menulist div a{color:white;}
    #searchaddr{margin-top:20px;}
    #searchaddr select{height:30px;}
    .selectplace{overflow-y:scroll;width:100%;height:500px; margin-left: 18%;margin-top: 5%;}
    .selectplace div{padding-top:5px;}
    #infobtn{text-align:center;}
    .infoplace{margin-top:20px;}
    .infoplace .infotext{margin-top:10px;}
    .infoplace .infoimg{width:100%;}
    .infoplace .infoimg img{width:300px;height:200px;}
    #layerpop{margin-top:20%;}
    #gowith .row div {padding-top:10px;}
    #placelist{font-size:20px;}
    #placelist div{padding-bottom:5%;}




    #abouttext{color:#383838;font-size:30px;}
    #abouttext .point{color:#f16c4f;font-size:50px;font-weight:bold;}


    #menuselect div div{width:23%;background:#ececec;box-sizing:border-box;margin-right:2%;}
    .lang{float:left;}
  </style>
</head>
<body>
  <!-- 언어선택, 로그인, 회원가입 -->
  <div id="topselect" class="container-fluid">
    <div class="row">
      <div class="col-md-3" style="margin-top:20px;">
        <div>
          <div class="lang"><a href="#"><img src="http://if-project.needon.kr/mainimage/main_01.png" /></a></div>
          <div class="lang"><img src="http://if-project.needon.kr/mainimage/main_02.png" /></div>
          <div class="lang"><a href="#"><img src="http://if-project.needon.kr/mainimage/main_03.png" /></a></div>
          <div class="lang"><img src="http://if-project.needon.kr/mainimage/main_04.png" /></div>
          <div class="lang"><a href="#"><img src="http://if-project.needon.kr/mainimage/main_05.png" /></a></div>
          <div class="lang"><img src="http://if-project.needon.kr/mainimage/main_06.png" /></div>
          <div class="lang"><a href="#"><img src="http://if-project.needon.kr/mainimage/main_07.png" /></a></div>
        </div>
      </div>
      <div class="row col-md-6" style="text-align:center;margin-top:10px;">
        <div><a href="./"><img src="http://if-project.needon.kr/mainimage/logo_01.png" /></a></div>
      </div>
      <div class="col-md-3" style="margin-top:20px;">
        <div style="float:right;">
          <div class="lang"><a href="./"><img src="http://if-project.needon.kr/mainimage/main_08.png" /></a></div>
          <div class="lang"><img src="http://if-project.needon.kr/mainimage/main_09.png" /></div>
          <div class="lang"><a href="#"><img src="http://if-project.needon.kr/mainimage/main_10.png" /></a></div>
        </div>
      </div>
    </div>
  </div>


  <!-- 네비게이션 메뉴 -->
  <div id="topnav" class="p-5">
      <div class="row">
        <div class="col-md-3 p-3"><a href="aboutus.html"><b>ABOUT</b> US</a></div>
        <div class="col-md-3 p-3"><a href="map.php?lc_seq=1"><b>MAP</b></div>
        <div class="col-md-3 p-3"><a href="supporters.html"><b>Support</b>ers</a></div>
        <div id="icon" class="col-md-3 p-3" style="border-left:1px solid #acacac;">
          <a href="https://www.sc.or.kr/" target="_blank" style="margin-right:20px;"><img src="http://if-project.needon.kr/mainimage/icon_01.png"/></a>
          <a href="https://www.unicef.or.kr/" target="_blank"><img src="http://if-project.needon.kr/mainimage/icon_02.png"/></a>
        </div>
      </div>
  </div>
  <style>
    #menuselect .menubox{margin-left:35%;}
    .menuselect .menubox:hover{background:#f16c4f !important;}
    #menuselect .icon{margin-top:20px;margin-bottom:20px;text-align:center;}
    #menuselect .line{border:0.5px solid #9c9c9c;width:45px;height:0px;text-align:center;margin-bottom:20px;}
    #menuselect .menuname{margin-top:20px;margin-bottom:20px;text-align:center;display:inline;color:#9c9c9c;}
  </style>
  <div style="height:50px;"></div>
  <div class="container">
    <div id="menuselect" class="row">
      <div class="col-md-1"></div>
      <div class="col-md-10">
        <div class="col-md-2">
            <a href="map.php?lc_seq=1" style="text-decoration:none;">
              <div class="menubox">
                <div class="icon"><img src="http://if-project.needon.kr/mainimage/menui_01.png"/></div>
                <div class="line"></div>
                <div class="menuname" style="margin-left:-40%;">GOVERMANT<br>OFFICE</div>
                <div style="height:20px;"></div>
              </div>
            </a>
        </div>
        <div class="col-md-2">
            <a href="map.php?lc_seq=2" style="text-decoration:none;">
              <div class="menubox">
                <div class="icon"><img src="http://if-project.needon.kr/mainimage/menui_02.png"/></div>
                <div class="line"></div>
                <div class="menuname">PRIVATE<br>OFFICE</div>
                <div style="height:20px;"></div>
              </div>
            </a>
        </div>
        <div class="col-md-2">
            <a href="map.php?lc_seq=3" style="text-decoration:none;">
              <div class="menubox">
                <div class="icon"><img src="http://if-project.needon.kr/mainimage/menui_03.png"/></div>
                <div class="line"></div>
                <div class="menuname">HEALTH<br>CARE</div>
                <div style="height:20px;"></div>
              </div>
            </a>
        </div>
        <div class="col-md-2">
            <a href="map.php?lc_seq=4" style="text-decoration:none;">
              <div class="menubox">
                <div class="icon"><img src="http://if-project.needon.kr/mainimage/menui_04.png"/></div>
                <div class="line"></div>
                <div class="menuname">POLICE<br>OFFICE</div>
                <div style="height:20px;"></div>
              </div>
            </a>
        </div>
      </div>
      <div class="col-md-1" style="height:50px;width:100%;border-bottom:1px solid #6b6b6b;width:80%;margin-left:9%;"></div>
    </div>
  </div>
  <div style="height:50px;"></div>

  <div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-10">
      <div class="container">
        <div class="col-md-1"></div>
        <div class="col-md-10">
          <div class="row">
            <div class="col-md-6">
              <div>
                <div style="position:relative;">
                  <div><img src="#" id="textImg" style="width:100%;height:220px;"/></div>
                </div>
                <div style="position:absolute;left:30%;top:32%;width:150px;height:30px;background:#f16c4f;bottom:0px;text-align:center;opacity:0.7;color:white;"><div id="text00"></div></div>
              </div>
              <div style="height:50px;"></div>
              <div class="row">
                  <div class="col-md-1"></div>
                  <div class="col-md-10">
                    <img src="http://if-project.needon.kr/mainimage/infoi_01.png" style="float:left;"/>
                    <div id="text0" style="float:left;"></div>
                  </div>
                  <div class="col-md-1"></div>
              </div>
              <div class="row">
                  <div class="col-md-1"></div>
                  <div class="col-md-10">
                    <img src="http://if-project.needon.kr/mainimage/infoi_02.png" style="float:left;"/>
                    <div id="text1" style="float:left;"></div>
                  </div>
                  <div class="col-md-1"></div>
              </div>
              <div class="row">
                  <div class="col-md-1"></div>
                  <div class="col-md-10">
                    <img src="http://if-project.needon.kr/mainimage/infoi_03.png" style="float:left;"/>
                    <div id="text2" style="float:left;"></div>
                  </div>
                  <div class="col-md-1"></div>
              </div>
              <div class="row">
                  <div class="col-md-1"></div>
                  <div class="col-md-10">
                    <img src="http://if-project.needon.kr/mainimage/infoi_04.png" style="float:left;"/>
                    <div id="text3" style="float:left;"></div>
                  </div>
                  <div class="col-md-1"></div>
              </div>
              <div class="row">
                  <div class="col-md-1"></div>
                  <div class="col-md-10">
                    <img src="http://if-project.needon.kr/mainimage/infoi_05.png" style="float:left;"/>
                    <div id="text4" style="float:left;"></div>
                  </div>
                  <div class="col-md-1"></div>
              </div>
              <div style="height:30px;"></div>
              <div class="row">
                <div class="col-md-0.5"></div>
                <div class="col-md-5"><button style="width:100px;color: white;border-radius: 8px;border: none;background: #f16c4f;">NAVIGARION</button></div>
                <div class="col-md-1"></div>
                <div class="col-md-5"><button data-target="#layerpop" data-toggle="modal" style="width:100px;color: white;border-radius: 8px;border: none;background: #f16c4f;">GO WITH</button></div>
                <div class="col-md-0.5"></div>
              </div>
            </div>
            <div class="col-md-6"><div id="nmap" style="width:100%;height:500px;"></div></div>
          </div>
        </div>
        <div class="col-md-1"><div id="right_section" style="position:absolute;top:0px;left:0px;">
           <div style="cursor:pointer;" id="topbtn"><img src="http://if-project.needon.kr/mainimage/flaoting.png" /></div>
        </div></div>
      </div>
    </div>
  </div>


  <div class="footer" style="width:100%;background:#e7e7e7;height:157px;margin-top:50px;">
    <div style="text-align:center;padding-top:30px;"><img src="http://if-project.needon.kr/mainimage/footer.png"/></div>
  </div>




  <!--go with 버튼 -->
  <div class="modal fade" id="layerpop" >
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- header -->
      <div class="modal-header">
        <!-- 닫기(x) 버튼 -->
        <button type="button" class="close" data-dismiss="modal">×</button>
        <!-- header title -->
        <h4 class="modal-title" style="text-align:center;font-weight:bold;font-size:30px;">Conected Volunteer</h4>
      </div>
      <!-- body -->
      <div id="gowith" class="modal-body">
        <div style="background:#ebebeb;">
            <div class="row" style="height:50px;">
              <div class="col-md-2"><img src="http://if-project.needon.kr/mainimage/connect_01.png"/></div>
              <div class="col-md-8">홍길동</div>
              <div class="col-md-2"><img src="http://if-project.needon.kr/mainimage/connect_02.png"/></div>
            </div>
          </div>
          <div style="background:#ebebeb;">
              <div class="row" style="height:50px;">
                <div class="col-md-2"><img src="http://if-project.needon.kr/mainimage/connect_01.png"/></div>
                <div class="col-md-8">홍길동</div>
                <div class="col-md-2"><img src="http://if-project.needon.kr/mainimage/connect_02.png"/></div>
              </div>
            </div>
            <div style="background:#ebebeb;">
                <div class="row" style="height:50px;">
                  <div class="col-md-2"><img src="http://if-project.needon.kr/mainimage/connect_01.png"/></div>
                  <div class="col-md-8">홍길동</div>
                  <div class="col-md-2"><img src="http://if-project.needon.kr/mainimage/connect_02.png"/></div>
                </div>
              </div>
      </div>
      <!-- Footer -->
      <div class="modal-footer" style="text-align:center;">
        <button style="color: white;background: #f16c4f;width: 150px;" type="button" class="btn btn-default" data-dismiss="modal">close</button>
      </div>
    </div>
  </div>


</body>
</html>


<script>
  var lc_seq = "<?= $_GET['lc_seq']?>";
  console.log(lc_seq);
  $("document").ready(function() {
    $.ajax({
      type: 'GET', url : "http://13.125.238.235:8083/api/kws/v1/find_location?lc_seq="+ lc_seq,

      dataType:"json",
      success : function(result) {
          console.log(result);
          $("#textImg").attr("src",result.photo);
				        $("#text00").append("<span>"+result.name+"</span>");
                $("#text0").append("<span>"+result.phone+"</span>");
                 $("#text1").append("<span>"+result.address+"</span>");
                  $("#text2").append("<span>"+result.time+"</span>");
                   $("#text4").append("<span>"+result.homepage+"</span>");
                    $("#text5").append("<span>"+result.location+"</span>");



      }
    });

    var currentPosition = parseInt($("#right_section").css("top"));

    $(window).scroll(function() {
            var position = $(window).scrollTop(); // 현재 스크롤바의 위치값을 반환합니다.
            $("#right_section").stop().animate({"top":position+currentPosition+"px"},200);
    });

    $(function () {
      $('#abouttext').textillate({
            loop: true,
            // in animation settings
            in: {
                // effect name
                effect: 'fadeInDown'
            },
            // out animation settings
            out: {
                effect: 'fadeOutDown'
            }
        });
   });

   $('#icon').find('img').hover(function() {
     $(this).attr("src",$(this).attr("src").replace('icon_01.png','unicef_on.png')); },
  function() { $(this).attr("src",$(this).attr("src").replace('unicef_on.png', 'icon_01.png')); });

  $('#icon').find('img').hover(function() {
    $(this).attr("src",$(this).attr("src").replace('icon_02.png','icon_01_on.png')); },
 function() { $(this).attr("src",$(this).attr("src").replace('icon_01_on.png', 'icon_02.png')); });

 });
 $( '#topbtn' ).click( function() {
 	$( 'html, body' ).animate( { scrollTop : 0 }, 400 );
 	return false;
 } );

</script>

<script type="text/javascript">

  var map = new naver.maps.Map('nmap', {
      center: new naver.maps.LatLng(37.3595704, 127.105399),
      zoom: 10,
      zoomControl: true,
      zoomControlOptions: {
          position: naver.maps.Position.TOP_RIGHT
      },
      mapTypeControl: true
  });

  var marker = new naver.maps.Marker({
      position: new naver.maps.LatLng(37.3595704, 127.105399),
      map: map
  });

  var infowindow = new naver.maps.InfoWindow();

function onSuccessGeolocation(position) {
    var location = new naver.maps.LatLng(position.coords.latitude,
                                         position.coords.longitude);

    map.setCenter(location); // 얻은 좌표를 지도의 중심으로 설정합니다.
    map.setZoom(10); // 지도의 줌 레벨을 변경합니다.
    infowindow.setContent('<div style="padding:20px;">현재위치</div>');

    infowindow.open(map, location);
    console.log('Coordinates: ' + location.toString());

}

function onErrorGeolocation() {
    var center = map.getCenter();

    infowindow.setContent('<div style="padding:20px;">' +
        '<h5 style="margin-bottom:5px;color:#f00;">Geolocation failed!</h5>'+ "latitude: "+ center.lat() +"<br />longitude: "+ center.lng() +'</div>');

    infowindow.open(map, center);
}

$(window).on("load", function() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(onSuccessGeolocation, onErrorGeolocation);
    } else {
        var center = map.getCenter();
        infowindow.setContent('<div style="padding:20px;"><h5 style="margin-bottom:5px;color:#f00;">Geolocation not supported</h5></div>');
        infowindow.open(map, center);
    }
});

</script>
