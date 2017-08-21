@extends('layouts.gerenzhongxin')
@section('content')
        <div class="profile-panel" role="main">
            <!-- ngIf: pageTitleVisible -->
            <h3 ng-if="pageTitleVisible" class="profile-paneltitle ng-scope">
                        <span ng-bind="pageTitle" class="ng-binding">
                            设置密码
                        </span>
                <span class="subtitle ng-binding" ng-bind-html="pageSubtitle | toTrusted">
                        </span>
            </h3>
            <!-- end ngIf: pageTitleVisible -->
            <div class="profile-panelcontent" ng-transclude="">
                <form action="/home/modifypass" method="post" class="changepwd ng-scope ng-pristine ng-valid" ng-submit="changePwdSubmit()"
                      novalidate="">
                    <p class="changepwd-tip">
                        提示：输入6-10位密码！
                    </p>
                    @if(session('error'))
                        <li>
                            {{session('error')}}
                        </li>
                    @endif
                    {{csrf_field()}}
                    <!-- ngIf: !firstSet -->
                    <div class="formfield ng-isolate-scope" ng-class="{ &#39;validate-error&#39;: model.$hintTypes[property] === &#39;error&#39; }"
                         form-field="" label="新密码" model="changePwdData" property="newPwd">
                        <label ng-bind="label" class="ng-binding">
                            新密码
                        </label>
                        <input type="password" name="password" ng-model="changePwdData.newPwd" placeholder="请输入新密码"
                               class="ng-scope ng-pristine ng-valid">
                        <div class="formfield-hint">
                                    <span ng-class="{ &#39;icon-dot-error&#39;: model.$hintTypes[property] === &#39;error&#39;, &#39;icon-dot-warning&#39;: model.$hintTypes[property] === &#39;warning&#39; }"
                                          ng-bind="model.$hints[property]" class="ng-binding">
                                    </span>
                        </div>
                    </div>
                    <div class="formfield ng-isolate-scope" ng-class="{ &#39;validate-error&#39;: model.$hintTypes[property] === &#39;error&#39; }"
                         form-field="" label="确认密码" model="changePwdData" property="confirmPwd">
                        <label ng-bind="label" class="ng-binding">
                            确认密码
                        </label>
                        <input type="password" name="repass" ng-model="changePwdData.confirmPwd"
                               placeholder="请再次输入密码" class="ng-scope ng-pristine ng-valid">
                        <div class="formfield-hint">
                                    <span ng-class="{ &#39;icon-dot-error&#39;: model.$hintTypes[property] === &#39;error&#39;, &#39;icon-dot-warning&#39;: model.$hintTypes[property] === &#39;warning&#39; }"
                                          ng-bind="model.$hints[property]" class="ng-binding">
                                    </span>
                        </div>
                    </div>
                    <div class="form-group formfield ng-isolate-scope" ng-class="{ &#39;validate-error&#39;: model.$hintTypes[property] === &#39;error&#39; }"
                         form-field="">
                        <label ng-bind="label" class="ng-binding">
                        </label>
                        <button type="submit" class="btn-primary btn-lg ng-scope">
                            确认
                        </button>
                        <div class="formfield-hint">
                                    <span ng-class="{ &#39;icon-dot-error&#39;: model.$hintTypes[property] === &#39;error&#39;, &#39;icon-dot-warning&#39;: model.$hintTypes[property] === &#39;warning&#39; }"
                                          ng-bind="model.$hints[property]" class="ng-binding">
                                    </span>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    @endsection