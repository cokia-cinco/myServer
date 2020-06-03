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

function openWin(){
    window.open ('http://chat.looyuoms.com/chat/chat/p.do?c=20000738&f=10073126&g=10057409', '蓝海骆驼',
        'height=500, width=800, top=120,left=200, toolbar=no, menubar=no, scrollbars=no, resizable=no,location=no, status=no');
}
//进口乐语
function importLeyu(){
    window.open ('http://chat.looyuoms.com/chat/chat/p.do?c=20000738&f=10100617&g=10064716', '蓝海骆驼',
        'height=500, width=800, top=120,left=200, toolbar=no, menubar=no, scrollbars=no, resizable=no,location=no, status=no');
};
//出口乐语
function exportLeyu(){
    window.open ('http://chat.looyuoms.com/chat/chat/p.do?c=20000738&f=10100617&g=10064715', '蓝海骆驼',
        'height=500, width=800, top=120,left=200, toolbar=no, menubar=no, scrollbars=no, resizable=no,location=no, status=no');
};

//tab切换
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

$(function(){


    $("#to_top").click(function () {
        $("html,body").animate({
            "scrollTop": 0
        }, 0);
    });
    //导航条
    $("#downs").click(function(){
        if(!$("#menu").is(":visible")){
            $("#menu").show();
            $("body").addClass("overHide");
            $(this).addClass("active");
        }else{
            $("#menu").hide();
            $("body").removeClass("overHide");
            $(this).removeClass("active");
        }
    });
    /* $(".down_o").click(function(){
      var sibs = $(this).siblings(".down_t");
         if(!sibs.is(":visible")){
           sibs.slideDown(200);
           $(this).children(".down_img").addClass("active");
         }else{
          sibs.slideUp(200).siblings(".down_t").slideDown(200);
           $(this).children(".down_img").removeClass("active");
        }
    });*/
    /*  $(".down_o").on("click", function () {
          var $this = $(this);
          $this.children(".down_img").toggleClass("active");
          $this.next(".down_t").slideToggle(300);
      });*/
    var Accordion = function(el, multiple) {
        this.el = el || {};
        this.multiple = multiple || false;


        var links = this.el.find('.down_os');

        links.on('click', {el: this.el, multiple: this.multiple}, this.dropdown)
    }

    Accordion.prototype.dropdown = function(e) {
        var $el = e.data.el;
        $this = $(this),
            $next = $this.next();

        $next.slideToggle(300);
        $this.parent().children('.down_os').children(".down_img").toggleClass('active');

        if (!e.data.multiple) {
            $el.find('.down_t').not($next).slideUp(300).parent().children('.down_os').children(".down_img").removeClass('active');
        };
    }

    var accordion = new Accordion($('#accordion'), false);

    //  首页轮播
    var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        paginationClickable: true,
        spaceBetween: 30,
        grabCursor : true,
        lazyLoading : true,
        effect : 'fade',
        loop : true,
        speed:600,
        centeredSlides: true,
        autoplay: 2500,
        autoplayDisableOnInteraction: false

    });

    $(window).scroll(function () {
        if ($(this).scrollTop() >= 300) {
            $("#to_top").show();
        } else {
            $("#to_top").hide();
        }
    });

})



