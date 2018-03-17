<?php
$wxParams = curlGet("http://www.wexue.top/weixinjs.php?url=" . base64_encode('http://www.wexue.top' . $_SERVER["REQUEST_URI"]));
function curlGet($url, $method = 'get', $data = '')
{
    $ch = curl_init();
    $header = "Accept-Charset: utf-8";
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, strtoupper($method));
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (compatible; MSIE 5.01; Windows NT 5.0)');
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_AUTOREFERER, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $temp = curl_exec($ch);
    return $temp;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>无线幸福——王府井集团</title>
    <meta name="keywords" content=""/>
    <meta name="description" content=""/>
    <meta name="viewport" id="viewport" content="width=360,user-scalable=no">
    <script type="text/javascript">
        function re() {
            var phoneWidth = parseInt(window.screen.width);
            var phoneScale = phoneWidth / 360;
            var ua = navigator.userAgent;
            if (/Android (\d+\.\d+)/.test(ua)) {
                var version = parseFloat(RegExp.$1);            // andriod 2.3
                if (version > 2.3) {
                    document.getElementById("viewport").content = 'width=360, minimum-scale = ' + phoneScale + ', maximum-scale = ' + phoneScale + ', ';                // andriod 2.3以上
                } else {
                    document.getElementById("viewport").content = "width=360";
                }

            } else {
                document.getElementById("viewport").content = "width=360, user-scalable=no";
            }
            var mql = window.matchMedia('(orientation: portrait)');
            if (!mql.matches) {
                phoneWidth = parseInt(window.screen.height);
                phoneScale = phoneWidth / 360;
                if (/Android (\d+\.\d+)/.test(ua)) {
                    var version = parseFloat(RegExp.$1);                // andriod 2.3
                    if (version > 2.3) {
                        document.getElementById("viewport").content = 'height=360, minimum-scale = ' + phoneScale + ', maximum-scale = ' + phoneScale + ', ';                    // andriod 2.3以上
                    } else {
                        document.getElementById("viewport").content = "height=360";
                    }
                } else {
                    document.getElementById("viewport").content = "height=360, user-scalable=no";
                }
            }
        }
        re();
        setInterval(
            function () {
                re();
            }, 500
        )

    </script>
    <link rel="stylesheet" href="css/animate.css"/>
    <link rel="stylesheet" href="css/index.css"/>
</head>
<body>
<div class="shu shu-play" id="shu"></div>
<div class="arrow" id="arrow"></div>

<div id="loading" class="loading">
    <div id="loadingContainer">
        <div class="loadingbar">
            <div class="marker_container">
                <div class="marker"></div>
                <div class="marker"></div>
                <div class="marker"></div>
                <div class="marker"></div>
            </div>
            <div class="filler_wrapper">
                <div class="filler">
                    <span id="value" class="value"></span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="scroll" id="scroll">
    <div class="bg" id="bg">
        <img data-src="images/bg1.jpg" src="images/bg1.jpg" class="bg1">
        <img data-src="images/bg2.jpg" src="images/bg1.jpg" class="bg2">
        <img class="p animated fadeInDown" data-src="images/haohaizi.png"
             style="height: 200px;z-index: 2;bottom: 30px;left: 400px"
             data-left="400">
        <img class="p animated fadeInLeft" data-src="images/tuiche.png"
             style="height: 250px;z-index: 3;bottom: 0;left: 80px" data-left="300">
        <img class="p animated fadeInUp" data-src="images/shuzhi.png"
             style="height: 360px;z-index: 4;top: 0;left: 0"
             data-left="0">
        <img class="p animated fadeInUp" data-src="images/shiyijian.png"
             style="height: 250px;z-index: 5;bottom: 90px;left: 700px;"
             data-left="700">
        <img class="p animated fadeInUp" data-src="images/yifu.png"
             style="height: 270px;z-index: 6;bottom: 50px;left: 880px;" data-left="880">
        <img class="p animated fadeInUp" data-src="images/shouhuoyuan.png"
             style="height: 250px;z-index: 7;bottom: 0px;left: 800px;"
             data-left="800">
        <img class="p animated fadeInUp" data-src="images/jingzi.png"
             style="height: 300px;z-index: 8;bottom: 70px;left: 1280px;"
             data-left="1280">
        <img class="p animated fadeInUp" data-src="images/tanzi.png"
             style="height: 80px;z-index: 9;bottom: 0px;left: 1230px;" data-left="1230">
        <img class="p animated fadeInUp" data-src="images/yingzi.png"
             style="height: 190px;z-index: 10;bottom: 88px;left: 1320px;"
             data-left="1320">
        <img class="p animated fadeInUp" data-src="images/mama.png"
             style="height: 270px;z-index: 11;bottom: 30px;left: 1340px"
             data-left="1340">
        <img class="p animated fadeInUp" data-src="images/haizi.png"
             style="height: 180px;z-index: 12;bottom: 10px;left: 1430px;"
             data-left="1430">
        <img class="p animated fadeInUp" data-src="images/aoteman1.png"
             style="height: 90px;z-index: 12;bottom: 192px;left: 1630px;"
             data-left="1630">
        <img class="p animated fadeInUp" data-src="images/aoteman2.png"
             style="height: 90px;z-index: 13;bottom: 200px;left: 1684px;"
             data-left="1684">
        <img class="p animated fadeInUp" data-src="images/haiziwawa.png"
             style="height: 320px;z-index: 14;bottom: 0px;left: 1790px"
             data-left="1790">
        <img class="p animated fadeInUp" data-src="images/louti.png"
             style="height: 300px;z-index: 15;bottom: 120px;left: 2000px;"
             data-left="2000">
        <img class="p animated fadeInUp" data-src="images/wanju.png"
             style="height: 350px;z-index: 16;bottom: -20px;left: 1840px;"
             data-left="1840">
        <img class="p animated fadeInUp" data-src="images/longmao.png"
             style="height: 120px;z-index: 17;bottom: 0px;left: 1780px"
             data-left="1780">
        <img class="p animated fadeInUp" data-src="images/ren5.png"
             style="height: 150px;z-index: 18;bottom: 200px;left: 2440px"
             data-left="2440">
        <img class="p animated fadeInUp" data-src="images/dianying.png"
             style="height: 300px;z-index: 19;bottom: 0px;left: 2440px"
             data-left="2440">
        <img class="p animated fadeInUp" data-src="images/ren4.png"
             style="height: 150px;z-index: 20;bottom: 150px;left: 2660px"
             data-left="2660">
        <img class="p animated fadeInUp" data-src="images/ren2.png"
             style="height: 150px;z-index: 21;bottom: 100px;left: 2700px"
             data-left="2700">
        <img class="p animated fadeInUp" data-src="images/ren1.png"
             style="height: 150px;z-index: 22;bottom: 0px;left: 2800px" data-left="2800">
        <img class="p animated fadeInUp" data-src="images/ren3.png"
             style="height: 150px;z-index: 23;bottom: 140px;left: 2900px"
             data-left="2900">
        <img class="p animated fadeInUp" data-src="images/chuangwai.png"
             style="height: 244px;z-index: 24;bottom: 130px;left: 3800px"
             data-left="3800">
        <img class="p animated fadeInUp" data-src="images/nick.png"
             style="height: 244px;z-index: 25;bottom: 117px;left: 3125px;"
             data-left="3125">
        <img class="p animated fadeInUp" data-src="images/ren6.png"
             style="height: 100px;z-index: 26;bottom: 130px;left: 3152px;"
             data-left="3152">
        <img class="p animated fadeInUp" data-src="images/ren7.png"
             style="height: 150px;z-index: 27;bottom: 20px;left: 3240px;"
             data-left="3240">
        <img class="p animated fadeInUp" data-src="images/ren8.png"
             style="height: 150px;z-index: 28;bottom: 50px;left: 3430px;"
             data-left="3430">
        <img class="p animated fadeInUp" data-src="images/ren10.png"
             style="height: 150px;z-index: 29;bottom: 50px;left: 3650px;"
             data-left="3650">
        <img class="p animated fadeInUp" data-src="images/ren9.png"
             style="height: 120px;z-index: 30;bottom: 100px;left: 3770px;"
             data-left="3770">
        <img class="p animated fadeInUp" data-src="images/baoguo.png"
             style="height: 200px;z-index: 31;bottom: 40px;left: 4020px;"
             data-left="4020">
        <img class="p animated fadeInUp" data-src="images/shouji.png"
             style="height: 320px;z-index: 32;bottom: 0px;left: 4240px;"
             data-left="4240">
        <img class="p animated fadeInUp" data-src="images/jingzi1.png"
             style="height: 310px;z-index: 33;bottom: 50px;left: 4690px;"
             data-left="4690">
        <img class="p animated fadeInUp" data-src="images/shuyajingzi.png"
             style="height: 270px;z-index: 34;bottom: 80px;left: 4710px;"
             data-left="4710">
        <img class="p animated fadeInUp" data-src="images/xishu.png"
             style="height: 200px;z-index: 35;bottom: 0px;left: 4690px"
             data-left="4690">
        <img class="p animated fadeInUp" data-src="images/shuaya.png"
             style="height: 310px;z-index: 36;bottom: 0px;left: 4840px;"
             data-left="4840">
        <img class="p animated fadeInUp" data-src="images/maojin.png"
             style="height: 100px;z-index: 37;bottom: 100px;left: 5090px;"
             data-left="5090">
        <img class="p animated fadeInUp" data-src="images/quanjia.png"
             style="height: 300px;z-index: 38;bottom: 0;left: 5360px;"
             data-left="5360">
        <img class="p animated fadeInUp" data-src="images/logo.png" style="    height: 40px;
    z-index: 39;
    bottom: 286px;
    left: 5960px;"
             data-left="6020">
        <img class="p animated fadeInUp" data-src="images/wenzi.png" style="height: 140px;
    z-index: 40;
    bottom: 85px;
    left: 5950px;"
             data-left="5960">
        <img class="p animated fadeInUp" data-src="images/kuang.png" style="height: 250px;
    z-index: 41;
    bottom: 70px;
    left: 6290px;"
             data-left="6290">
        <img class="p animated fadeInUp" data-src="images/shoujisao.png"
             style="height: 110px;z-index: 42;bottom: 20px;left: 6450px;"
             data-left="6480">
    </div>
</div>
<audio id="audioBg" src="mp3/bg.mp3" loop="loop"></audio>
<audio id="audio"></audio>

<script src="js/jquery.min.js"></script>
<script src="js/preloading.js"></script>
<script src="js/blower-loading.js"></script>
<script src="js/main.js?=2"></script>
<script type="text/javascript" src="js/jweixin-1.0.0.js"></script>
<script type="text/javascript">
    var _mtac = {};
    (function () {
        var mta = document.createElement("script");
        mta.src = "http://pingjs.qq.com/h5/stats.js?v2.0.2";
        mta.setAttribute("name", "MTAH5");
        mta.setAttribute("sid", "500521871");
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(mta, s);

        wx.config(
            <?php echo $wxParams;?>
        );
        wx.ready(function () {
            wx.onMenuShareTimeline({
                title: '攒3个月工资买一份大件是一种什么样的幸福？', // 分享标题
                link: 'http://www.wexue.top/games/wxxf/index.php', // 分享链接
                imgUrl: 'http://www.wexue.top/games/wxxf/images/123.jpg', // 分享图标
                success: function () {
                    MtaH5.clickStat('shareCircle');
                },
                cancel: function () {
                }
            });
            wx.onMenuShareAppMessage({
                title: '攒3个月工资买一份大件是一种什么样的幸福？', // 分享标题
                desc: '上传一张照片留下你的幸福故事，感受无线幸福', // 分享描述
                link: 'http://www.wexue.top/games/wxxf/index.php', // 分享链接
                imgUrl: 'http://www.wexue.top/games/wxxf/images/123.jpg', // 分享图标
                type: 'link', // 分享类型,music、video或link，不填默认为link
                dataUrl: '', // 如果type是music或video，则要提供数据链接，默认为空
                success: function () {
                    MtaH5.clickStat('shareFriend');
                    // 用户确认分享后执行的回调函数
                },
                cancel: function () {
                    // 用户取消分享后执行的回调函数
                }
            });
        });
    })();
</script>
</body>
</html>
