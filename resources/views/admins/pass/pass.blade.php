@extends('layouts.admins')

@section('title','管理员修改添加页')


@section('content')


    @if (count($errors) > 0)
        <div class="mark">
            <ul>
                @if(is_object($errors))
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                @else
                    <li>{{ session('errors') }}</li>
                @endif
            </ul>
        </div>
    @endif


    <div class="mws-panel grid_8">
        <div class="mws-panel-header">
            <span><i class="icon-users"></i>用户添加</span>
        </div>
        <div class="mws-panel-body no-padding">
            <form class="mws-form" action="{{url('admins/pass')}}" method="post" enctype ="multipart/form-data">
                <div class="mws-form-inline">
                    <div class="mws-form-row">
                        <label class="mws-form-label"  name="sname">用户名:</label>
                        <div class="mws-form-item">
                            <input class="small" type="text" name='aname' id="yonghu">
                        </div>
                    </div>
                    <script src="/home/js/jquery-1.8.3.min.js"></script>
                    <script src="/layer/layer.js"></script>
                    <script>
                        $('#yonghu').blur(function(){
//                        alert('111');
                            var name = $('input[name=aname]');
                            var dd = name.val();
//                        console.log(dd);
                            $.post("{{url('admin/pass/name')}}",{'_token':'{{csrf_token()}}','aname':dd},function(data){
                                layer.alert(data);
                            })
                        })
                    </script>
                    <div class="mws-form-row">
                        <label class="mws-form-label">新密码:</label>
                        <div class="mws-form-item">
                            <input class="small" type="password" name='apassword'>
                        </div>
                    </div>
                    <div class="mws-form-row">
                        <label class="mws-form-label">确认密码:</label>
                        <div class="mws-form-item">
                            <input class="small" type="password" name='rapassword'>
                        </div>
                    </div>


                </div>
                {{ csrf_field() }}
                <div class="mws-button-row">
                    {{--<input type="hidden" name="atime" value="{{time()}}">--}}
                    <input value="提交修改" class="btn btn-danger" type="submit">

                </div>
            </form>
        </div>
    </div>
@endsection

@section('js')
    <script type="text/javascript">

        setTimeout(function(){

            $('.mws-form-message').fadeOut(2000);
        },3000);

    </script>
@endsection