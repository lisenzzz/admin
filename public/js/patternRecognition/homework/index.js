function patternReocogintionHomeworkIndex($) {
    var course=$('#course').html();
    $('#course-'+course).addClass('layui-nav-itemed');
    layui.use('table',function () {
        var table=layui.table;
        var w1s1={
            'one':0,
            'two':0,
            'three':0,
            'type':1
        };
        var w1s2={
            'one':1,
            'two':0,
            'three':0,
            'type':1
        };
        var w1s3={
            'one':1,
            'two':0,
            'three':1,
            'type':1
        };
        var w1s4={
            'one':1,
            'two':1,
            'three':0,
            'type':1
        };
        var w2s1={
            'one':0,
            'two':0,
            'three':1,
            'type':2
        };
        var w2s2={
            'one':0,
            'two':1,
            'three':1,
            'type':2
        };
        var w2s3={
            'one':0,
            'two':1,
            'three':0,
            'type':2
        };
        var w2s4={
            'one':1,
            'two':1,
            'three':1,
            'type':2
        };
        var W={
            'one':-1,
            'two':-2,
            'three':-2,
            'four':0
        };
        var info={
            'w1s1':w1s1,
            'w1s2':w1s2,
            'w1s3':w1s3,
            'w1s4':w1s4,
            'w2s1':w2s1,
            'w2s2':w2s2,
            'w2s3':w2s3,
            'w2s4':w2s4,
            'W':W,
        };
            info=JSON.stringify(info);
            table.render({
                elem:'#perception',
                url:'/perception',
                method:'post',
                where:{'info':info},
                headers:{'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')},
                cols:[[
                    {field:'sample',title:'当前迭代所使用的样本',width:425},
                    {field:'W',title:'迭代后的W值',width: 425},
                    {field:'action',title:'迭代行为',width:424}
                ]],
                done: function(res, curr, count){
                    var height=$(document).height()-60;
                    $('.layui-nav-tree').css('height',height+'px');
                }
            });
    });
}
