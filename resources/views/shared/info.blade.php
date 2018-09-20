@if(session()->has('fail'))
    <div class="layui-bg-red">
        <p hidden id="fail">
            {{session()->get('fail')}}
        </p>
    </div>
@endif
@if(session()->has('success'))
    <div class="layui-bg-blue">
        <p hidden id="success">
            {{session()->get('success')}}
        </p>
    </div>
@endif
@if(session()->has('course'))
    <span id="course" hidden>{{session()->get('course')}}</span>
@endif