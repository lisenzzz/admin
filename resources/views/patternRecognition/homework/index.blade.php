@extends('layouts.default')

@section('title','homework-patternRecognition')
@section('css')
    <link rel="stylesheet" href="/css/patternRecognition/homework/index.css">
@endsection
@include('shared.info')

@section('content')
    <div class="layui-container" id="table">
        <table class="layui-table">
            <colgroup>
                <col width="150">
                <col width="200">
                <col width="200">
                <col width="200">
                <col width="200">
            </colgroup>
            <thead>
            <tr>
                <th>种类</th>
                <th>样本1</th>
                <th>样本2</th>
                <th>样本3</th>
                <th>样本4</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>ω1</td>
                <td>(0 0 0)t</td>
                <td>(1 0 0)t</td>
                <td>(1 0 1)t</td>
                <td>(1 1 0)t</td>
            </tr>
            <tr>
                <td>ω2</td>
                <td>(0 0 1)t</td>
                <td>(0 1 1)t</td>
                <td>(0 1 0)t</td>
                <td>(1 1 1)t</td>
            </tr>
            <thead>
            <tr>
                <th colspan="3">初始的W</th>
                <th colspan="2">C值</th>
            </tr>
            </thead>
            <tr>
                <td colspan="3">W(1)=(-1 –2 –2 0)t</td>
                <td colspan="2">C=1</td>
            </tr>
            </tbody>
        </table>
        <table id="perception"></table>
    </div>
@endsection

@section('js')
<script src="/js/patternRecognition/homework/index.js"></script>
@endsection