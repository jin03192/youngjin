$(function(){
    var selNum = 0,
        $proList = $(".product_lis, li"),
        totalNum = $proList.length,
        $btnprev = $(".product_con .btn_prev"),
        $btnnext = $(".product_con .btn_next"),
        oldNum;

    $proList.css({display:"none"});
    $proList.eq(selNum).fadeIn(1500);

    function prevItem() {
        oldNum = selNum;
        selNum = selNum - 1;
        if(selNum < 0) {
            selNum = totalNum - 1;
        }
        setting('-1');
    }

    function nextItem() {
        oldNum = selNum;
        selNum = selNum + 1;
        if(selNum >= totalNum) {
            selNum = 0;
        }
        setting('1');
    }

    $btnprev.on('click', prevItem);
    $btnnext.on('click', nextItem);

    function setting(adjust) {
        var adjust1 = adjust * 1,
                adjust2 = adjust * -1;
        if(setting.caller == indicate) {
            if(selNum < oldNum) {
                adjust1 = adjust * -1,
                        adjust2 = adjust;
            }
        }
        $proList.eq(selNum).css({ left : adjust1 * 200 + 'px', display : 'block', opacity :0 })
        $proList.eq(oldNum).stop().animate({
                    left : adjust2 * 200 + 'px', opacity : 0}
        );
        $proList.eq(selNum).stop().animate({left : 0, opacity : 1},500, function(){});

    }

    function indicate(){
        oldNum = selNum;
        selNum = $(this).index();
        if( selNum == oldNum) return;
        setting('1')
    }

    $('.numlist a').on('click', indicate)

});