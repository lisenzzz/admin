


@extends('layouts.default')
@section('css')
    <link  rel="stylesheet" href="/css/admin/admin.css">
@endsection
@section('content')
    <div id="main">
        <h1>php管理</h1>
        <br>

        <p>查看本地环境: <a href="/p.php" target="_blank" class="links">探针</a>&nbsp;&nbsp;<a href="/phpinfo.php" target="_blank" class="links">phpinfo</a>&nbsp;&nbsp;<a href="/phpmyadmin/" target="_blank" class="links">phpMyAdmin</a></p>

    </div>
@endsection