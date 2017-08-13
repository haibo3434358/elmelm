@extends('layouts.index')

@section('title','后台首页')


@section('content')
 <div class="rt_content">
      <div class="page_title">
       <h2 class="fl">订单详情示例</h2>
      </div>
     <form action="/admin/dingdan/" method="get">
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
       @foreach($dingdan as $k=>$v)
       <tr>
        <td style="width:100px;">收件人：{{$v->sjr}}</td>
        <td style="width: 130px">联系电话：{{$v->phone}}</td>
        <td>收件地址：{{$v->dprice}}</td>

        <td style="width:100px">下单时间：{{$v->xdtime}}</td>

        <td style="width:90px;">订单状态：{{$v->dstatus}}</td>
       <td style="width: 100px">订单价格：{{$v->money}}</td>

           <td>订单备注：<mark>{{$v->dd}}</mark></td>
           <td style="width: 90px;">
               <a href="{{url('admin/dingdan/'.$v->dxid.'/edit')}}">修改</a>
               <a href="javascript:void(0)" onclick="delArt({{$v->dxid}})">删除</a>
           </td>
        </tr>
       @endforeach
      </table>
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
                 $.post("{{url('admin/dingdan/')}}/"+id,{'_method':'delete','_token':'{{csrf_token()}}'},function(data){
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
         {!! $dingdan->appends($request->all())->render() !!}
     </aside>
 </div>
@endsection
