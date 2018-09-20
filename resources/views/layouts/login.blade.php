<!---登录界面-->

<!DOCTYPE html>
<html>
<head>
    <title>login</title>
    <link rel="stylesheet" href="/layui/css/layui.css">
    <link rel="stylesheet" href="/css/login/index.css">
</head>
<body>
<div class="row">
    <div class="layui-col-md-4 layui-col-md-offset4">
        <div class="container">
            @include('shared.info')
            <form class="layui-form layui-bg-green" action="{{route('login')}}" method="POST">
                {{ csrf_field() }}
                <div class="layui-form-item">
                    <label class="layui-form-label">用户名：</label>
                    <div class="layui-input-block">
                        <input class="layui-input" type="text" name="name" value="{{old('name')}}" lay-verify="required" placeholder="please input username..."/>
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">密码：</label>
                    <div class="layui-input-block">
                        <input class="layui-input" type="password" name="password" lay-verify="required" placeholder="please input password..."/>
                    </div>
                </div>
                <div class="layui-form-item">
                    <div class="layui-input-block">
                        <button class="layui-btn layui-btn-normal" lay-submit>登录</button>
                        <button class="layui-btn layui-btn-warm" type="reset">重置</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


<script src="/layui/layui.js"></script>
<script src="/js/login/index.js"></script>
</body>
</html>