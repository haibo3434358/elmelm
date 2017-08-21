<link rel="stylesheet" href="/bs/css/bootstrap.min.css">
<link rel="stylesheet" href="/bs/css/bootstrap-theme.min.css">
<script type="text/javascript" src="/bs/js/jquery.js"></script>
<script type="text/javascript" src="/bs/js/bootstrap.min.js"></script>
{{--<button type="button" class="btn btn-primary btn-lg active">{{$shangjia->exname}}</button>--}}
<form class="form-horizontal" action="/home/session/over" method="post">

    {{csrf_field()}}

    <table class="table table-striped">
       <tr>
           <th>商品名</th>
           <th>单价</th>
           <th>数量</th>
           <th>总计</th>

       </tr>
        @foreach(Cart::content() as $row)
        <tr>
            <td >
                {{$row->name}}
            </td>
            <td>{{$row->price}}</td>
            <td>1</td>
            <td> {{$row->price}}</td>
        </tr>
            @endforeach
    </table>
    <input type="submit" value="提交">
    <button  type="button" class="btn btn-primary btn-lg active"> 提交订单</button>
</form>