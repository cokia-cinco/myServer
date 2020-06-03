/*  (function (doc, win) {
  var docEl = doc.documentElement,
          resizeEvt = 'orientationchange' in window ? 'orientationchange' : 'resize',
          recalc = function () {
              var clientWidth = docEl.clientWidth;
              if (!clientWidth) {
                  return
              } else if (clientWidth > 768) {
                  docEl.style.fontSize = '47px';
              } else if (320 <= clientWidth < 768) {
                  docEl.style.fontSize = 20 * (clientWidth / 320) + 'px';
              }
//                console.log(clientWidth);
          };

  if (!doc.addEventListener) return;
  win.addEventListener(resizeEvt, recalc, false);
  doc.addEventListener('DOMContentLoaded', recalc, false);
})(document, window);*/
/**
 * Created by Administrator on 2016/12/1.
 */
// 判断pc
function IsPC() {
  var flag = true;
  if (/AppleWebKit.*Mobile/i.test(navigator.userAgent) || (/MIDP|SymbianOS|NOKIA|SAMSUNG|LG|NEC|TCL|Alcatel|BIRD|DBTEL|Dopod|PHILIPS|HAIER|LENOVO|MOT-|Nokia|SonyEricsson|SIE-|Amoi|ZTE/.test(navigator.userAgent))) {
    flag = false;
  }
  return flag;
}
var version3 = function () {
  var IsPcFlag = IsPC();

  // 重载设置
  function reload(){
    // pc 改变宽度时
    if(IsPcFlag){
      window.oldWidth=parseInt(document.documentElement.clientWidth||document.body.clientWidth);
      $(window).resize(function(){
        window.nowWidth=parseInt(document.documentElement.clientWidth||document.body.clientWidth);
        if(window.nowWidth-window.oldWidth>=50)location.reload();
        window.oldWidth=window.nowWidth;
      });
      return;
    }
    // 移动端
    // 查看横竖屏
    function HengShuPing(){
      if("onorientationchange" in window){
        var orientation=window.orientation;
        switch(orientation){
          // 竖屏
          case 90:
          case -90:
            return "h";
            break;
          // 横屏 180 0
          default:
            return "v";
            break;
        }
      }else{
        if(window.innerWidth<window.innerHeight){
          // 竖屏
          return "h";
        }else{
          // 横屏
          return "v";
        }

      }
    }
    // 屏幕方向是否改变
    function self_orientationChange(){
      var now_fx=HengShuPing();
      if(!window.default_fx){
        window.default_fx=now_fx;
      }else{
        if(default_fx!=now_fx){
          default_fx=now_fx;
          location.reload();
        }
      }
    }
    self_orientationChange();
    window.addEventListener("onorientationchange" in window ? "orientationchange" : "resize", self_orientationChange, false);
  }



  function init() {
  
    reload();
    if(IsPcFlag){
      // 只在pc
   
    }else{
      // 只在移动端
      /*headDown();*/
    }
  }

  return {
    init: init
  }
}();
$(function () {
  version3.init();
});