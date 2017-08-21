@extends('layouts.index')

@section('title','收藏页面')


@section('content')
 <div class="rt_content">
      <div class="page_title">
       <h2 class="fl">收藏信息</h2>
      </div>
     <form action="/admin/sc/" method="get">
         <section class="mtb">
             {{csrf_field()}}
             <select name="num" class="select">
                 <option value="5" @if($request->num == '5')selected="selected" @endif>
                     5
                 </option>
                 <option value="10" @if($request->num == '10')selected="selected" @endif>
                     10
                 </option>
                 <option value="15" @if($request->num == '15')selected="selected" @endif>
                     15
                 </option>
                 <option value="20" @if($request->num == '20')selected="selected" @endif>
                     20
                 </option>
             </select>
             <input type="text" class="textbox textbox_225" name='search' value="{{$request->search}}" placeholder="输入产品关键词或产品货号..."/>
             <input type="submit" value="查询" class="group_btn"/>
         </section>
     </form>
      <table class="table">
       @foreach($sc as $k=>$v)
       <tr>
        <td style="width:240px;">收藏id：{{$v->scid}}</td>
        <td style="width: 240px">收藏人id：{{$v->uid}}</td>
        <td>收藏人信息：{{$v->uname}}</td>

           <td style="width: 200px;">
               <a href="javascript:void(0)" onclick="delArt({{$v->scid}})">删除</a>
           </td>
        </tr>
       @endforeach
      </table>
     <style>
         .paging li span{
             background: none repeat scroll 0 0 #19a97b;
             border: 1px solid #139667;
             color: white;
             cursor: pointer;
             display: inline-block;
             padding: 5px 8px;
             /*margin:30px;*/

         }
         .paging li{

             float: left;
         }

     </style>
     <script>
         function delArt(id){
//            参数1 要请求的服务器路由
//            参数2 请求要携带的参数数据  _method：delete  _token
//              参数3 回调函数,回调函数的参数data表示服务器返回的数据
//            $.post(URL,data,callback);
//询问框
             layer.confirm('确认删除吗？', {
                 btn: ['确定','取消'] //按钮
             }, function(){
//            layer.msg('删除成功', {icon: 1});
                 $.get("{{url('/admin/ssc/')}}/"+id,function(data){
//                console.log(data);
                     if(data.status == 0){
                         location.href = location.href;
                         layer.msg(data.msg, {icon: 5});
                     }else{
                         location.href = location.href;
                         layer.msg(data.msg, {icon: 6});
                     }
                 });
             }, function(){

             });
         }
     </script>

     <aside class="paging">
         {{--{!! $dingdan->appends($request->all())->render() !!}--}}
         {!! $sc->appends($request->all())->render() !!}
     </aside>
 </div>
@endsection
