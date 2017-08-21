@extends('layouts.home')
@section('content')
    <div ng-show="!recentBoughtOnly" class="container ng-scope">
        <div class="excavator container">
            <div class="excavator-filter ng-scope">
                <span>商家分类:</span>

                <a href="javascript:" class="excavator-filter-item ng-binding ng-scope active">全部商家</a>
                @foreach($cate1 as $k=>$v)
                <a href="javascript:void(0)" class="excavator-filter-item ng-binding ng-scope" onclick="chaKan({{$v->cid}})">
                    {{$v->cate_name}}
                </a>
               @endforeach
                <div ng-show="subCategories" class="excavator-filter-subbox ng-hide"></div>
            </div>
            <div class="erji" id="erji">


            </div>
            <style>

                .erji {
                    background-color: #f6f6f6;
                    padding: 6px 0;
                    margin-left: 160px;
                }
            </style>
            <script src="/home/js/jquery-1.8.3.min.js"></script>

        </div>

        <div class="place-rstbox clearfix" >
            <div style="height: 1600px;" id="shangjia" data="filteredRestaurants = (rstStream.restaurants | filter: rstStream.filter | filter: otherFilter | orderBy: [ '-is_opening', rstStream.orderBy || 'index' ])" class="clearfix">
                @foreach($re as $k=>$v)
                    @foreach($v as $kk=>$vv)
                <a  target="_blank" data-bidding="" data-rst-id="26547" href="/home/shop/{{$v[$kk]->sxid}}" class="rstblock">
                    <div class="rstblock-logo">
                        <img width="70" height="70" alt="极速汉堡（极速食客）" src="//fuss10.elemecdn.com/7/44/d4a8483f13bd84289ed1ff85bd21bpng.png?imageMogr2/thumbnail/70x70" class="rstblock-logo-icon">
                        <span>38 分钟</span>
                    </div>
                    <div class="rstblock-content">
                        <div class="rstblock-title">{{$v[$kk]->exname}}</div>
                        <div class="starrating icon-star">
                            <span style="width:92%;" class="icon-star"></span>
                        </div>
                        <span class="rstblock-monthsales">月售{{$v[$kk]->sum}}单</span>
                        <div class="rstblock-cost">配送费¥{{$v[$kk]->ofee}}</div>
                        <div class="rstblock-activity">
                            {{--<i style="background:#fff;color:#999999;border:1px solid;padding:0;">票</i>--}}
                        </div>
                    </div>
                </a>
                    @endforeach
                @endforeach

            </div>
            <script >
                //一级菜单遍历二级
//                $('#erji').hide();
                function chaKan(id){
                    $.post("{{url('home/shouye')}}/"+id,{'_token':'{{csrf_token()}}'},function(data){
//                        console.debug(data);
//                        for(var sj in data){
//                            console.debug(data[sj].cate_name);
//                        }
//                        console.debug(data.cate_name);
                        //创建二级标签
                            createErji(data);
//                        console.debug($('#erji').html());
                        //创建二级菜单完毕后,对二级菜单添加点击事件
                            addClick(data);
                    });
                    function createErji(data){
                        //二级菜单数据
                        var str =  '<a href="javascript:" class="excavator-filter-item ng-binding ng-scope active">全部</a>';
                        for(var v in data){
//                            console.log(data[v].cate_name);
                            str = str + '<a href="javascript:void(0)" id='+data[v].cid+' class="excavator-filter-item ng-binding ng-scope">'+data[v].cate_name+'</a>';

                        }
//                        $('#erji').show().html(str);
                        $('#erji').html(str);
                    }
                    function addClick(data) {

                        for(var v in data){
                            var cid  = $('#'+data[v].cid);
                            cid.click(function(){
                                //要点击分类的cid
                                var cid = $(this).attr('id');
                                var str1 = '';
                                $.post("{{url('home/shouye/sj')}}/"+cid,{'_token':'{{csrf_token()}}'},function(data){    href="/home/shop/{{$v[$kk]->sxid}}"

//                            console.log(data);
                                for(var vv in data){
                                    str1 = str1 + '<a target="_blank" data-bidding="" data-rst-id="26547" href="/home/shop/'+data[vv][0].sxid+'"  class="rstblock">'+
                                            '<div class="rstblock-logo">'+
                                                '<img width="70" height="70" alt="极速汉堡（极速食客）" src="//fuss10.elemecdn.com/7/44/d4a8483f13bd84289ed1ff85bd21bpng.png?imageMogr2/thumbnail/70x70" class="rstblock-logo-icon">'+
                                                '<span>38 分钟</span>'+
                                            '</div>'+
                                           ' <div class="rstblock-content">'+
                                               ' <div class="rstblock-title">'+data[vv][0].exname+'</div>'+
                                                  '<div class="starrating icon-star">'+
                                                        '<span style="width:92%;" class="icon-star"></span>'+
                                                   '</div>'+
                                                       ' <span class="rstblock-monthsales">月售'+data[vv][0].sum+'单</span>'+
                                                      '  <div class="rstblock-cost">配送费¥'+data[vv][0].ofee+'</div>'+
                                                  ' <div class="rstblock-activity">'+
//                                                         '<i style="background:#fff;color:#999999;border:1px solid;padding:0;">票</i>'+
                                                 '</div>'+
                                          ' </div>'+
                                     ' </a>';

                                }
                                    $('#shangjia').html(str1);
//
//                                    document.getElementById('shangjia').innerHTML= str1;

                                });
                            });
                        }
                    }






                }


            </script>
            <div class="loading ng-binding ng-isolate-scope ng-hide loading" type="normal" content="正在载入更多商家..." loading="" ng-show="rstStream.status === 'LOADING'"><!-- ngIf: type==='profile' --> <!-- ngIf: type==='normal' --><img alt="正在加载" src="//faas.elemecdn.com/desktop/media/img/loading.0e7b2e.gif" class="normal ng-scope" ng-if="type==='normal'"><!-- end ngIf: type==='normal' -->正在载入更多商家...</div>
            <div class="" id="fetchMoreRst">点击加载更多商家...</div>
            <div ng-show="rstStream.status === 'COMPLETE' &amp;&amp; !filteredRestaurants.length" class="place-rstbox-nodata ng-hide">
                <img width="100" alt="找不到商家" src="./img/icon-restaurant.b3a359.png" class="nodata">
                <div class="typo-small">附近没有找到符合条件的商家，换个筛选条件试试吧</div>
            </div>
            <!-- </div> -->
            <!-- </div> -->
            <!-- <eleme-footer></eleme-footer> -->
            <script src="/home/js/6936dbf3e7d94cffa954bcbcf2b79f38.js"></script>



        </div>
        <script>
            //一级菜单遍历商家
//            $('#shangjia').hide();

        </script>

    </div>


    @endsection