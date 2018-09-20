<!---主页-->

<!DOCTYPE html>
<html>
<head>
    <meta name="csrf-token" content="{!! csrf_token() !!}"/>
    <title>@yield('title','admin-lisenzzz')</title>
    <link rel="stylesheet" href="/layui/css/layui.css">
    <link rel="stylesheet" href="/css/default/index.css">
    @yield('css')
</head>
<body>
<div class="layui-fluid">
    <div class="header layui-row">
        <div class="layui-col-md-4" >
            <a href="{{route('index',$user->id)}}" ><span id="headline">{{$user->name}}</span></a>
        </div>
        <div class="layui-col-md-1 layui-col-md-offset7">
            <ul class="layui-nav">
                <li class="layui-nav-item" id="person-center">
                    <a href="#"><img src="//t.cn/RCzsdCq" class="layui-nav-img">我</a>
                    <dl class="layui-nav-child">
                        <dd><a href="javascript:;">修改信息</a></dd>
                        <dd><a href="javascript:;">安全管理</a></dd>
                        <dd><a href="{{route('logout')}}">退出登录</a></dd>
                    </dl>
                </li>
            </ul>
        </div>
    </div>
</div>
<ul class="layui-nav layui-nav-tree layui-bg-cyan" lay-filter="test">
    <!-- 侧边导航: <ul class="layui-nav layui-nav-tree layui-nav-side"> -->
    @foreach($user->courses()->get() as $course)
        <li class="layui-nav-item" id="course-{{$course->id}}">
            <a href="#">{{$course->name}}</a>
            <dl class="layui-nav-child">
                <dd><a href="{{route('homework',$course->id,$user->id)}}">作业</a></dd>
                <dd><a href="">资料</a></dd>
                <dd><a href="">待办</a></dd>
            </dl>
        </li>
    @endforeach
    @if($user->user_type==0)
        <li class="layui-nav-item">
            <a href="{{route('phpadmin')}}">php管理</a>
        </li>
    @endif
</ul>
<div class="content">
    @yield('content')
</div>
<script src="/layui/layui.js"></script>
<script src="/js/default/index.js"></script>
@yield('js')
</body>
</html>