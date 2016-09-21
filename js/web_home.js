$(function(){
    /**
     * 导航栏百度搜索
     **/
    $('.search_btn').click(function(){
        var keyword = $("#search-input").val();
        window.location.href="https://www.baidu.com/s?wd="+keyword;
    });

});

/**
 * JavaScript脚本实现回到页面顶部
 * @param acceleration 速度
 * @param stime 时间间隔 (毫秒)
 **/
function gotoTop(acceleration,stime) {
    acceleration = acceleration || 0.1;
    stime = stime || 10;
    var x1 = 0;
    var y1 = 0;
    var x2 = 0;
    var y2 = 0;
    var x3 = 0;
    var y3 = 0;
    if (document.documentElement) {
        x1 = document.documentElement.scrollLeft || 0;
        y1 = document.documentElement.scrollTop || 0;
    }
    if (document.body) {
        x2 = document.body.scrollLeft || 0;
        y2 = document.body.scrollTop || 0;
    }
    var x3 = window.scrollX || 0;
    var y3 = window.scrollY || 0;

    // 滚动条到页面顶部的水平距离
    var x = Math.max(x1, Math.max(x2, x3));
    // 滚动条到页面顶部的垂直距离
    var y = Math.max(y1, Math.max(y2, y3));

    // 滚动距离 = 目前距离 / 速度, 因为距离原来越小, 速度是大于 1 的数, 所以滚动距离会越来越小
    var speeding = 1 + acceleration;
    window.scrollTo(Math.floor(x / speeding), Math.floor(y / speeding));

    // 如果距离不为零, 继续调用函数
    if(x > 0 || y > 0) {
        var run = "gotoTop(" + acceleration + ", " + stime + ")";
        window.setTimeout(run, stime);
    }
}

/**
 * JavaScript脚本实现图片左右移动
 * @param speed 速度
 * @param sTime 时间间隔 (毫秒)
 **/
function moveBox(speed,sTime){
    /*
     *图片左右移动*
     *2016-05-18*
     */
    var sWidth=$('.move_img li').width();//每一个图片容器的宽度
    var sLeft=parseInt( $('.move_img li').css('marginLeft'));//每一个图片容器的间距
    var moveWidth=sWidth+sLeft;//每次图片移动的距离
    var speed=800;//切换速度（毫秒）
    var sTime=2500;//切换时间间隔（毫秒）
    var shownNo=4;

    var no=$('.move_img li').length-shownNo;//获取图片容器个数-shownNo
    var num = 0;
    $('.og_next').click(function(e) {

        num ++;
        if ( num > no ) {
            num = 0;
        };
        $('.move_img').stop().animate({'left':num*-moveWidth+'px'},speed);
    });

    $('.og_prev').click(function(e) {
        num--;
        if(num < 0){
            num= 0;
        }
        $('.move_img').stop().animate({'left':num*-moveWidth+'px'},speed);
    });
    /*自动平移*/
    function automove(){
        num ++;
        if ( num > no ) {
            num =0;
        };
        $('.move_img').stop().animate({'left':num*-moveWidth+'px'},speed);
    }
    var move_Timer = setInterval(automove,sTime);

}
/**
 * JavaScript脚本获取日期和时间
 * @param
 * @param
 **/
$(function(){
    var clock = $('#clock');
    //定义数字数组0-9
    var digit_to_name = ['zero','one', 'two', 'three', 'four', 'five', 'six', 'seven', 'eight', 'nine'];
    //定义星期
    var weekday = ['周日','周一','周二','周三','周四','周五','周六'];
    var digits = {};

    //定义时分秒位置
    var positions = [
        'h1', 'h2', ':', 'm1', 'm2', ':', 's1', 's2'
    ];

    //构建数字时钟的时分秒
    var digit_holder = clock.find('.digits');

    $.each(positions, function(){

        if(this == ':'){
            digit_holder.append('<div class="dots">');
        }
        else{
            var pos = $('<div>');
            for(var i=1; i<8; i++){
                pos.append('<span class="d' + i + '">');
            }

            digits[this] = pos;
            digit_holder.append(pos);
        }
    });


    // 让时钟跑起来
    (function update_time(){

        //调用moment.js来格式化时间
        var now = moment().format("HHmmss");

        digits.h1.attr('class', digit_to_name[now[0]]);
        digits.h2.attr('class', digit_to_name[now[1]]);
        digits.m1.attr('class', digit_to_name[now[2]]);
        digits.m2.attr('class', digit_to_name[now[3]]);
        digits.s1.attr('class', digit_to_name[now[4]]);
        digits.s2.attr('class', digit_to_name[now[5]]);

        var date = moment().format("YYYY年MM月DD日");
        var week = weekday[moment().format('d')];
        $(".date").html(date + ' ' + week);

        // 每秒钟运行一次
        setTimeout(update_time, 1000);

    })();
});



