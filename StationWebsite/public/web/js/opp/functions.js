/**
 * Created by Administrator on 2016/12/1.
 */
// 向上滚动
function scrollD(opt) {
    var odefault = {
        number: "1",
        time: "1500",
        oh: $(opt.itemCell).eq(0).outerHeight(true)
    };
    $.extend(true, odefault, opt);
    var _box = $(odefault.mainCell), timer = null;

    function auto() {
        timer = setInterval(function () {
            _box.animate({
                marginTop: -(parseInt(odefault.oh) * odefault.number)
            }, function () {
                _box.find("li:first").appendTo(_box);
                _box.css({
                    marginTop: 0
                });
            });
        }, odefault.time);
    }

    _box.hover(function () {
        clearInterval(timer);
    }, function () {
        auto();
    }).mouseout();
}
// 向上滚动结束
// 轮播 左右滚动 及其无缝运动
function slideMe(opt) {
    var ass = {
        // 左右滑动 普通轮播
        "picScroll": function () {
            // console.log("图片滚动");
            var sBox = $(opt.scrollBox), sMain = sBox.find(opt.main), items = sMain.children(opt.item),
                ow = items.eq(0).outerWidth(true), prev = sBox.find(opt.prev), next = sBox.find(opt.next),
                num = 0, timer = null,speed=opt.speed||400,t=opt.time||1500,cs=opt.cs||1;
            prev.click(function () {
                clearInterval(timer);
                num++;
                if (num > items.length - cs)num = 0;
                sMain.animate({
                    "left": -ow * num
                }, speed);
                sMain.mouseout();
            });
            next.click(function () {
                clearInterval(timer);
                num--;
                if (num < 0)num = items.length - cs;
                console.log(num);
                sMain.animate({
                    "left": -ow * num
                }, speed);
                sMain.mouseout();
            });
            sBox.hover(function () {
                clearInterval(timer);
            }, function () {
                timer = setInterval(function () {
                    prev.trigger("click")
                }, t);
            }).mouseout();

        },
        // 无缝滚动
        "picScroll_1":function(){
            var scrollBox=$(opt.scrollBox),scrollMain=scrollBox.find(opt.scrollMain),scrollLeft=scrollBox.find(opt.scrollLeft),
                scrollRight=scrollBox.find(opt.scrollRight),boxWidth=scrollBox.width(),ow=scrollMain.width(),timer,
                speed=opt.speed||50,step=opt.step||2;
            scrollMain.html(function(i,h){
                return h+h;
            }).width(ow*2);
            function move_left(){
                clearTimeout(timer);
                if(parseInt(scrollMain.css("left"))<=-ow){
                    scrollMain.css({"left":0})
                }else{
                    scrollMain.css({"left":function(i,v){
                        return parseInt(v)-step;
                    }});
                }
                timer=setTimeout(move_left,speed);
            }
            function move_right(){
                clearTimeout(timer);
                if(boxWidth+Math.abs(parseInt(scrollMain.css("left")))<=ow){
                    scrollMain.css({"left":boxWidth-ow*2});
                }else{
                    scrollMain.css({"left":function(i,v){
                        return parseInt(v)+step;
                    }});
                }
                scrollMain.css({"left":function(i,v){
                    return parseInt(v)+step;
                }});
                timer=setTimeout(move_right,speed);
            }
            scrollLeft.click(function(){
                var e=e||window.event;
                scrollMain.css({"left":"0"});
                move_left();
                e.stopPropagation();
                return false;
            }).click();
            scrollRight.click(function(e){
                var e=e||window.event;
                e.stopPropagation();
                scrollMain.css({"left":boxWidth-ow*2});
                move_right();
                return false;
            });
            scrollMain.hover(function(){
                clearInterval(timer);
            },function(){
                move_left();
            });
        },
        // 无缝轮播
        "carouselMe":function(){
            var _box=$(opt.scrollBox),main=_box.find(opt.scrollMain),cleft=_box.find(opt.left),
                cright=_box.find(opt.right),speed=opt.speed||40;
        }
    };
    switch (opt.type) {
        case "picScroll":
            ass.picScroll();
            break;
        case "picScroll_1":
            ass.picScroll_1();
            break;
        case "carouselMe":
            ass.carouselMe();
            break;
    }
}
// 轮播 左右滚动 及其无缝运动结束
// 放大镜
function magnifier(opt) {
    // 默认设置
    var od = {
        "boxW": "280",
        "boxH": "280",
        "c_w": "100",
        "c_h": "100"
    };
    od = $.extend(od, opt);
    // 变量集合 这里这样写的话html需格式化
    var newObj = {
        "supMask": $(od.main).find(".super_mask"),
        "cmask": $(od.main).find(".c_mask"),
        "l_box": $(od.main).find(".large_box"),
        "s_box": $(od.main).find(".small_box"),
        "m_picture": $(od.main).find("img.m_picture"),
        "l_picture": $(od.main).find("img.l_picture"),
        // 改变图片路径的函数
        "changeImg": function (osrc, size) {
            var i = osrc.lastIndexOf(".");
            var nsrc = osrc.slice(0, i - 1) + size + osrc.slice(i);
            return nsrc;
        },
        // 缓存图片
        "delayload": function (obj, osrc, time) {
            var newImg = new Image();
            newImg.src = osrc;
            newImg.onload = function () {
                setTimeout(function () {
                    obj.attr("src", osrc);
                }, time)
            };
            newImg = null;
        }
    };
    // 遍历图片 鼠标经过时更换大型图片跟中型图片
    newObj.s_box.each(function () {
        var _this = $(this);
        _this.on("mouseover", function () {
            var imgSrc = _this.find("img").attr("src");
            _this.addClass("active").siblings().removeClass("active");
            var middleSrc = newObj.changeImg(imgSrc, "m");
            var largeSrc = newObj.changeImg(imgSrc, "l");
            newObj.delayload(newObj.m_picture, middleSrc, 10);
            newObj.delayload(newObj.l_picture, largeSrc, 100);
        });
    });
    // 遍历图片 鼠标经过时更换大型图片跟中型图片end
    // 外面的遮罩移动
    newObj.supMask.on("mousemove", function (e) {
        var e = e || window.event;
        var x = e.offsetX, y = e.offsetY;
        var ol = x - od.c_w / 2;
        var ot = y - od.c_h / 2;
        // 显示小遮罩层同时改变位置
        newObj.cmask.show().css({
            "top": function () {
                ot = ot < 0 ? 0 : ot > od.boxH - od.c_h ? od.boxH - od.c_h : ot;
                return ot;
            },
            "left": function () {
                ol = ol < 0 ? 0 : ol > od.boxW - od.c_w ? od.boxW - od.c_w : ol;
                return ol;
            }
        });
        // 显示小遮罩层同时改变位置end
        // 显示右边的窗口
        newObj.l_box.show();
        // 显示右边的窗口end
        // 计算大型图片跟中型图片之间的比例 按比例移动大图片
        var scale = newObj.l_picture.width() / newObj.m_picture.width();
        newObj.l_picture.css({
            "top": -ot * scale,
            "left": -ol * scale
        });
        // 计算大型图片跟中型图片之间的比例 按比例移动大图片end
    });
    // 外面的遮罩移动end
    // 外面的遮罩移出来end
    newObj.supMask.on("mouseout", function (e) {
        newObj.cmask.hide();
        newObj.l_box.hide();
    });
}
// 放大镜结束
// 下拉显示
function dropMenu(opt){
    
}
// 下拉显示
// tab切换
function tabTo(opt) {
    var odefault = {
        "effect": "d"
    };
    $.extend(true, odefault, opt);
    $(odefault.select_i).on("click", function () {
        var _this = $(this);
        switch (odefault.effect) {
            case "d":
                _this.addClass(odefault.changeClass).siblings().removeClass(odefault.changeClass);
                $(odefault.select_tab_i).eq(_this.index()).addClass(odefault.changeClass).siblings().removeClass(odefault.changeClass);
                break;
            // default:
        }

    });
}
// tab切换结束
// 集合
var functions = {
    "scrollD": scrollD,
    "slideMe": slideMe,
    "magnifier": magnifier,
    "dropMenu":dropMenu,
    "tabTo": tabTo
};

// 集合结束

