layui.use('jquery',function () {
    var $=layui.$;
    var failmessage='';
    failmessage=$('#fail').html();
    if(failmessage){
        layui.use('layer',function () {
            var layer=layui.layer;
            layer.alert(failmessage);
        });
    }
});
