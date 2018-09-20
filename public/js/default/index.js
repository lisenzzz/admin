(function () {
    layui.use('element', function(){
        var element = layui.element;
        var $=layui.$;
        var height=$(document).height()-60;
        var width=$(window).width()-205;
        $('.layui-nav').css('border-radius','0px');
        $('.layui-nav-tree').css('height',height+'px');
        $('.content').css({
            'height':height+'px'
        });
        $('#table').css({
            'width':width-50+'px'
        });
        $(window).resize(function () {
            height=$(document).height()-60;
            width=$(window).width()-210;
            $('.layui-nav-tree').css('height',height+'px');
            $('.content').css({
                'height':height+'px'
            });
            $('#table').css({
                'width':width+'px'
            });
            try{
                if(typeof adminIndex=='function'){
                    adminIndex($);
                }
            }catch (e) {

            }
        });
        try{
            if(typeof adminIndex=='function'){
                adminIndex($);
            }
        }catch (e) {

        }
        try{
            if(typeof patternReocogintionHomeworkIndex=='function'){
                patternReocogintionHomeworkIndex($);
            }
        }catch (e) {

        }
    });

})(window)
