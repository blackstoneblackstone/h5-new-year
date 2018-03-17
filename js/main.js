/**
 * Created by lihongbin on 2017/9/3.
 */

var blower = new LoadingBlower("#loadingContainer");
$("#value").text("无线幸福正在袭来...");
var ua = navigator.userAgent;
if (ua.indexOf("iPhone") > -1) {
    $("#arrow").addClass("arrow-iphone")
}
var imgS = [];
var length = 0;
var imgDivs = $("img");
var audio = $("#audio")[0];
var audioBg = $("#audioBg")[0];
var isPlay = true;
var isAudioClose=false
for (var i = 0; i < imgDivs.length; i++) {
    imgS.push(imgDivs[i].dataset.src);
}
var queue = new createjs.LoadQueue();
queue.loadManifest(imgS);
queue.loadFile("mp3/bg.mp3", "mp3/0.mp3", "mp3/1.mp3", "mp3/2.mp3", "mp3/3.mp3", "mp3/5.mp3",
    "mp3/6.mp3", "mp3/7.mp3", "mp3/8.mp3", "mp3/9.mp3");
queue.on("progress", handleProgress, this);
var currentLeft = 0
$("#shu").click(function () {
    if (isPlay) {
        if (audio) {
            audio.pause()
            audioBg.pause()
        }
        isPlay = false
        isAudioClose=true
        $(this).removeClass("shu-play")
    } else {
        if (audio) {
            audio.play()
            audioBg.play()
        }
        isPlay = true
        isAudioClose=false
        $(this).addClass("shu-play")
    }
})
function handleProgress() {
    blower.setProgress((length / 54) * 100);
    length++
    if (length == 54) {
        showRo();
    }
}

function showRo() {
    for (var i = 0; i < imgDivs.length; i++) {
        imgDivs[i].src = imgDivs[i].dataset.src;
    }
    audioBg.play()
    $("#loading").css("opacity", 0)
    setTimeout(function () {
        $("#value").hide();
        $("#loading").hide();
        $("#scroll").scroll(function (event) {
            if (event.preventDefault) {
                event.preventDefault();
            } else {
                window.event.returnValue == false;
            }
            currentLeft = event.target.scrollLeft
            console.log(currentLeft)

        })
        setInterval(function () {
            play(currentLeft, imgDivs)
        }, 200)
    }, 2000)

}
document.addEventListener("touchstart", function () {
    if(!isAudioClose){
        audioBg.play()
        audio.play();
    }
})
function play(left, imgS) {
    for (var i = 2; i < 40; i++) {
        if (left > imgS[i].dataset.left - 400) {
            if (imgS[i].style.display != "block") {
                imgS[i].style.display = "block"
            }
        }
    }
    for (var i = 40; i < 44; i++) {
        if (left > imgS[i].dataset.left - 700) {
            if (imgS[i].style.display != "block") {
                imgS[i].style.display = "block"
            }
        }
    }

    //播放
    if (left > 10 && left < 50) {
        if (audio.src != "http://www.wexue.top/games/wxxf/mp3/0.mp3") {
            audio.src = "mp3/0.mp3"
            return
        }
    }
    if (left > 100 && left < 430) {
        if (audio.src != "http://www.wexue.top/games/wxxf/mp3/1.mp3") {
            audio.src = "mp3/1.mp3"
            return
        }
    }
    if (left > 430 && left < 1160) {
        if (audio.src != "http://www.wexue.top/games/wxxf/mp3/2.mp3") {
            audio.src = "mp3/2.mp3"
            return
        }
    }
    if (left > 1160 && left < 2106) {
        if (audio.src != "http://www.wexue.top/games/wxxf/mp3/3.mp3") {
            audio.src = "mp3/3.mp3"
            return
        }
    }
    if (left > 2106 && left < 2927) {
        if (audio.src != "http://www.wexue.top/games/wxxf/mp3/5.mp3") {
            audio.src = "mp3/5.mp3"
            return
        }
    }
    if (left > 2927 && left < 3660) {
        if (audio.src != "http://www.wexue.top/games/wxxf/mp3/6.mp3") {
            audio.src = "mp3/6.mp3"
            return
        }
    }
    if (left > 3660 && left < 4400) {
        if (audio.src != "http://www.wexue.top/games/wxxf/mp3/7.mp3") {
            audio.src = "mp3/7.mp3"
            return
        }
    }
    if (left > 4400 && left < 4974) {
        if (audio.src != "http://www.wexue.top/games/wxxf/mp3/8.mp3") {
            audio.src = "mp3/8.mp3"
            return
        }
    }

    if (left > 5480 && left < 5840) {
        $("#arrow").fadeOut()
        if (audio.src != "http://www.wexue.top/games/wxxf/mp3/9.mp3") {
            audio.src = "mp3/9.mp3"
            return
        }
    }
}


