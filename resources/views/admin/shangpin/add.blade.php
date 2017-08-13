@extends('layouts.index')

@section('title','后台首页')


@section('content')
    <div class="rt_content">
        <div class="page_title">
            <h2 class="fl">商品详情示例</h2>
            <a class="fr top_rt_btn">返回产品列表</a>
        </div>
        <section>
            <form action="{{url('admin/shangpin/')}}" enctype="multipart/form-data" method="post">
            <ul class="ulColumn2">
                {{csrf_field()}}
                <li>
                    <span class="item_name" style="width:120px;">菜品名称：</span>
                    <input type="text" class="textbox textbox_295"  name="gname" placeholder="请输入菜品名称..."/>
                    <span class="errorTips">请不要超过10个汉子...</span>
                </li>
                <li>
                    <span class="item_name" style="width:120px;">商品价格：</span>
                    <input type="text" class="textbox" name="gprice"  placeholder="请输入商品价格..."/>
                    <span class="errorTips">必须输入...</span>
                </li>
                <li>
                    <span class="item_name" style="width:120px;">菜品规格：</span>
                    <input type="text" class="textbox" name="gstandard"  placeholder="请输入菜品规格..."/>
                    <span class="errorTips">宽*高...</span>
                </li>
                <li>
                    <span class="item_name" style="width:120px;">菜品味道：</span>
                    <input type="text" class="textbox" name="gtaste"  placeholder="请输入菜品味道..."/>
                </li>
                <li>
                    <span class="item_name" style="width:120px;">菜品推销类型：</span>
                    <input type="text" class="textbox" name="gfl"  placeholder="请输入菜品推销类型..."/>
                    <span class="errorTips">冷饮/热菜/米饭/...</span>
                </li>
                <li>
                    <span class="item_name" style="width:120px;">上传图片：</span>
                    <label class="uploadImg">
                        {{--<input type="file"  name="gpic"  id="file_upload" multiple="true" />--}}
                        <input type="file" name='gpic[]' multiple readonly="readonly" >
                        {{--<input id="file_upload" name="gpic" type="file" multiple="true">--}}
                        <span>上传图片</span>
                        {{--<input type="button" value="上传" />--}}
                    </label>
                    {{--<p><img id="img1" alt="上传后显示图片"  style="max-width:350px;max-height:100px;" /></p>--}}

                    {{--<script type="text/javascript">--}}
                        {{--$(function () {--}}
                            {{--$("#file_upload").change(function () {--}}
                                {{--uploadImage();--}}
                            {{--});--}}
                        {{--});--}}

                        {{--function uploadImage() {--}}
{{--//                            判断是否有选择上传文件--}}
                            {{--var imgPath = $("#file_upload").val();--}}

                            {{--if (imgPath == "") {--}}
                                {{--alert("请选择上传图片！");--}}
                                {{--return;--}}
                            {{--}--}}
                            {{--//判断上传文件的后缀名--}}
                            {{--var strExtension = imgPath.substr(imgPath.lastIndexOf('.') + 1);--}}
                            {{--if (strExtension != 'jpg' && strExtension != 'gif'--}}
                                {{--&& strExtension != 'png' && strExtension != 'bmp'&& strExtension != 'jpeg') {--}}
                                {{--alert("请选择图片文件");--}}
                                {{--return;--}}
                            {{--}--}}
{{--//                            var myform = document.getElementById('art_from');--}}
                            {{--var formData = new FormData($('#art_form')[0]);--}}
                            {{--formData.append('_token', '{{csrf_token()}}');--}}
                                                        {{--console.log(formData);--}}
                            {{--$.ajax({--}}
                                {{--type: "POST",--}}
                                {{--url: "/admin/shangpin",--}}
                                {{--data: formData,--}}
                                {{--async: true,--}}
                                {{--cache: false,--}}
                                {{--contentType: false,--}}
                                {{--processData: false,--}}
                                {{--success: function(data) {--}}
{{--//                                    console.log(data);--}}
{{--//                                    alert("上传成功");--}}
{{--//                                        七牛云--}}
{{--//                                        $('#img1').attr('src','http://ouawuxiun.bkt.clouddn.com/'+data);--}}
{{--//                                        OSS--}}
{{--// $('#img1').attr('src','http://project185.oss-cn-shanghai.aliyuncs.com/'+data);--}}
{{--//                                        本地服务器--}}
                                    {{--$('#img1').attr('src','/'+data);--}}

                                    {{--$('#art_thumb').val(data);--}}

                                {{--},--}}
                                {{--error: function(XMLHttpRequest, textStatus, errorThrown) {--}}
                                    {{--alert("上传失败，请检查网络后重试");--}}
                                {{--}--}}
                            {{--});--}}
                        {{--}--}}

                    {{--</script>--}}

                </li>
                    <script id="editor" type="text/plain" style="width:1024px;height:500px;margin-left:120px;margin-top:0;"></script>

                <li>
                    <span class="item_name" style="width:120px;"></span>
                    <input type="submit" class="link_btn" value="添加商品"/>
                </li>
            </ul>
            </form>
        </section>
    </div>
@endsection
