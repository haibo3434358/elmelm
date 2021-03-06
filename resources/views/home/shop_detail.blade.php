<!DOCTYPE html>
<html class="no-js" lang="zh">
 <head> 
  <meta charset="utf-8" /> 
  <title>店铺详情-shop_detail.html</title> 
  <meta name="description" content="地道老四川麻辣烫！" /> 
  <meta name="mobile-agent" content="format=html5;url=http://m.ele.me/kxljmlt-pt" /> 
  <meta name="viewport" content="width=device-width, initial-scale=1" /> 


  
  


  <script>
    if(navigator.userAgent.indexOf("MSIE")!=-1 && !window.localStorage){}
  </script> 
  <link class="usemin" rel="stylesheet" href="/home/home/css/global.2730d877.css" />
  <link class="usemin" rel="stylesheet" href="/home/home/css/restaurant.92731b91.css" />
  <script class="usemin" src="/home/home/js/cdn_detect.66c19641.js"></script>
  <script>
    if(!window.CDNReady){var d=new Date;d.setHours(d.getHours()+6);document.cookie='CDNDown=1; domain=v5.ele.me; expires='+d.toUTCString()+'; path=/';if(!window.localStorage.getItem('CDNBackup')){window.localStorage.setItem('CDNBackup',1);location.reload(true)}}
  </script> 
  <script class="usemin" src="/home/home/js/modernizr.custom.min.f49cdc05.js"></script>
  <script>
      var startTime = new Date().getTime();
      var ELEME = window.ELEME || {};
      ELEME.baseUrl = "";
      ELEME.formerBaseUrl = "http://ele.me";
      ELEME.route = "restaurant_show";
      ELEME.fussHost = "http://fuss10.elemecdn.com";
      ELEME.staticHost = "http://static11.elemecdn.com";
      ELEME.rootHost = "ele.me";
      ELEME.mainHost = "v5.ele.me";
      ELEME.payHost = "p.ele.me";
      ELEME.accountHost = "account.ele.me";
            ELEME.timeDelta = 1427463499 - new Date().getTime()/1000;
      ELEME.payHost = "p.ele.me";
    </script> 
  <script type="text/javascript">
    ELEME.restaurantUrl = 'kxljmlt-pt';
    ELEME.restaurantId = 119301;
    ELEME.cityId = 1;
    ELEME.restaurantStatus = 'open';
    ELEME.isRestaurantPremium = 0;
  </script> 
 </head> 
 <body id="restaurant"> 
  <header id="topbar" class="site-topbar" role="banner"> 
   <div class="container"> 
    <a class="site-logo" href="http://ele.me" title="饿了么" role="logo">饿了么</a> 
    <div class="mobile-wrap"> 
     <a id="top_mobile" class="topbar-mobile" href="mobile.html" target="_blank" onclick="ga('send', 'event', 'topbar', 'click_mobile');"><i class="glyph-mobile"></i>手机应用</a> 
     <div id="popup_mobile" class="popup-mobile"> 
      <div class="arrow"></div> 
      <div class="panel"> 
       <p class="title">扫一扫，手机订餐更方便</p> 
       <a class="qrcode" href="mobile.html" target="_blank"><img src="/home/home/images/app-qrcode-72.85a69c07.png" alt="扫一扫，手机订餐更方便" /></a>
       <a class="btn-ios" href="http://m.ele.me/download/ios/eleme" target="_blank"><span>App Store下载</span></a> 
       <a class="btn-android" href="http://m.ele.me/download/android/eleme"><span>Android版</span></a> 
      </div> 
     </div> 
    </div> 
    <div id="topbar_search" class="topbar-search" role="search"> 
     <form id="tsearch_form" class="tsearch-form group" action="http://ele.me/search" method="get"> 
      <i id="icon_tsearch" class="glyph-search"></i> 
      <input id="tsearch_input" class="tsearch-input" type="text" name="kw" autocomplete="off" placeholder="搜索餐厅，美食…" /> 
      <i id="ts_loading" class="icon-tsloading hide"></i> 
      <a id="ts_clear" class="icon-tsclear hide"></a> 
     </form> 
     <div id="tsearch_autocomplete" class="tsearch-autocomplete"></div> 
    </div> 
    <nav class="topbar-nav" role="navigation"> 
     <ul class="topbar-site-nav"> 
      <li><a class="tnav-link" href="http://ele.me/profile/order">我的饿单</a></li> 
      <li><a class="tnav-link" href="gift.html">礼品中心</a></li> 
      <li><a id="tdp_link" class="tnav-link hide" href="http://t.dianping.com" target="_blank">附近团购</a></li> 
      <li><a class="tnav-link" href="support.html">联系客服</a></li> 
     </ul> 
     <div id="topbar_cart" class="eleme_dropdown topbar-widget topbar-cart empty"> 
      <a class="e_toggle twidget-toggle"> <span id="tcart_total" class="tcart-total twidget-total">0</span> <i class="glyph-cart topbar-glyph"></i> </a> 
      <div class="e_dropdown twidget-dropdown"> 
       <div id="tcart_loading" class="twidget-loading"></div> 
       <div id="tcart_wrapper"></div> 
      </div> 
     </div> 
     <div id="topbar_msg" class="eleme_dropdown topbar-widget empty"> 
      <a class="e_toggle twidget-toggle"> <span id="tmsg_total" class="tmsg-total twidget-total">0</span> <i class="glyph-message topbar-glyph"></i> </a> 
      <div class="e_dropdown twidget-dropdown"> 
       <div id="tmsg_loading" class="twidget-loading"></div> 
       <div id="tmsg_wrapper"></div> 
      </div> 
     </div> 
     <div id="topbar_username" class="eleme_dropdown topbar-user-nav hide"> 
      <a id="t_username" class="e_toggle tnav-link tnav-username caret"></a> 
      <ul class="e_dropdown topbar-user-dropdown"> 
       <li><a class="tuser-link" href="http://ele.me/profile"><i class="glyph-user"></i>个人中心</a></li> 
       <li><a class="tuser-link" href="http://ele.me/profile/favor_restaurant"><i class="glyph-fav"></i>我的收藏</a></li> 
       <li><a class="tuser-link" href="http://ele.me/profile/address"><i class="glyph-location"></i>我的地址</a></li> 
       <li><a class="tuser-link" href="http://ele.me/profile/security"><i class="glyph-config"></i>安全设置</a></li> 
       <li class="divider"></li> 
       <li><a id="topbar_logout" class="tuser-link" href="http://ele.me/logout"><i class="glyph-off"></i>退出登录</a></li> 
      </ul> 
     </div> 
     <div id="topbar_logreg" class="topbar-user-nav tnav-link"> 
      <a href="login.html">登录</a> / 
      <a href="register.html">注册</a> 
     </div> 
    </nav> 
   </div> 
  </header> 
  <div class="restaurant-header"> 
   <div class="container rst_header_con"> 
    <article class="rst-header-main rst-header-toggle rst_info_header" itemscope="" itemtype="http://schema.org/Restaurant"> 
     <header class="rst-header-info group"> 
      <a class="rst-logo" href="/kxljmlt-pt" itemprop="url"> <img class="rst-logo-img" srcset="http://fuss10.elemecdn.com/e/61/4b14dc708583d288b62c73491e12cjpeg.jpeg?w=48&amp;h=48 1x, http://fuss10.elemecdn.com/e/61/4b14dc708583d288b62c73491e12cjpeg.jpeg?w=96&amp;h=96 2x" alt="开心罗记麻辣烫" itemprop="logo" /> <i class="icon-rst-badge v v-person" title="该商家已通过个人身份认证"></i> </a> 
      <div class="rst-basic-info"> 
       <div class="rst-name-wrapper caret"> 
        <a class="rst-name text-overflow" href="/kxljmlt-pt" data-toggle="bs-tooltip" title="开心罗记麻辣烫" itemprop="name">开心罗记麻辣烫</a> 
       </div> 
       <div class="rst-misc"> 
        <a id="rst_rating" class="rst-rating" href="/kxljmlt-pt/rating"> <span class="rating-stars"> <i class="glyph-rating-star">★</i><i class="glyph-rating-star">★</i><i class="glyph-rating-star">★</i><i class="glyph-rating-star">★</i><i class="glyph-rating-star half">★</i><i class="glyph-rating-star off">★</i></span> 4.4 </a> 
        <span class="rst-flavor text-overflow" title="中式">中式</span> 
       </div> 
      </div> 
     </header> 
     <div class="rst-header-detail rst-header-dropdown"> 
      <section class="rst-header-rating group"> 
       <div class="rating-point header" itemprop="aggregateRating" itemscope="" itemtype="http://schema.org/AggregateRating"> 
        <a class="point"><span itemprop="ratingValue">4.4</span></a> 
        <a class="comment" href="/kxljmlt-pt/rating"><span itemprop="reviewCount">495</span>人评价</a> 
       </div> 
       <ul class="rating-diagram header"> 
        <li class="diagram-item"> <span class="rating-stars"> <i class="glyph-rating-star">★</i><i class="glyph-rating-star">★</i><i class="glyph-rating-star">★</i><i class="glyph-rating-star">★</i><i class="glyph-rating-star">★</i></span> <span class="bar" style="width: 89.1px;"></span> 81% </li> 
        <li class="diagram-item"> <span class="rating-stars"> <i class="glyph-rating-star">★</i><i class="glyph-rating-star">★</i><i class="glyph-rating-star">★</i><i class="glyph-rating-star">★</i><i class="glyph-rating-star off">★</i></span> <span class="bar" style="width: 5.5px;"></span> 5% </li> 
        <li class="diagram-item"> <span class="rating-stars"> <i class="glyph-rating-star">★</i><i class="glyph-rating-star">★</i><i class="glyph-rating-star">★</i><i class="glyph-rating-star off">★</i><i class="glyph-rating-star off">★</i></span> <span class="bar" style="width: 2.2px;"></span> 2% </li> 
        <li class="diagram-item"> <span class="rating-stars"> <i class="glyph-rating-star">★</i><i class="glyph-rating-star">★</i><i class="glyph-rating-star off">★</i><i class="glyph-rating-star off">★</i><i class="glyph-rating-star off">★</i></span> <span class="bar" style="width: 0px;"></span> 0% </li> 
        <li class="diagram-item"> <span class="rating-stars"> <i class="glyph-rating-star">★</i><i class="glyph-rating-star off">★</i><i class="glyph-rating-star off">★</i><i class="glyph-rating-star off">★</i><i class="glyph-rating-star off">★</i></span> <span class="bar" style="width: 13.2px;"></span> 12% </li> 
       </ul> 
      </section> 
      <section class="rst-header-intro">
       地道老四川麻辣烫！
      </section> 
      <ul class="rst-header-list"> 
       <li><span class="item">时间：</span>10:00 - 次日02:00</li> 
       <li><span class="item">地址：</span><span itemprop="address">西康路1137号</span></li> 
      </ul> 
     </div> 
    </article> 
    <nav class="rst-header-nav"> 
     <a class="rst-header-nav-item ui_active" href="/kxljmlt-pt">菜单</a> 
     <div class="inline-block relative"> 
      <span class="rst-header-nav-tip">看图点菜</span> 
      <a class="rst-header-nav-item" href="/kxljmlt-pt/photowall">美食墙</a> 
     </div> 
     <a class="rst-header-nav-item" href="/kxljmlt-pt/rating">评价</a> 
     <a class="rst-header-nav-item" href="/kxljmlt-pt/comment">留言</a> 
    </nav> 
    <ul class="rst-header-aside group rst_info_panel"> 
     <li class="rst-data-block"> 
      <div class="rst-data no-border"> 
       <b class="rst-data-info value">37</b> 
       <span class="rst-data-info unit">速度/分钟</span> 
      </div> </li> 
     <li class="rst-data-block rst-header-toggle rst_head_distance"> 
      <div class="rst-data caret"> 
       <b class="rst-data-info value rst_distance"></b> 
       <span class="rst-data-info unit">餐厅距离/米</span> 
      </div> 
      <div class="rst-header-dropdown"> 
       <div class="rst-header-map rst-data-detail"> 
        <img class="rst_map rst-map-img" alt="餐厅距离示意图" /> 
       </div> 
      </div> </li> 
     <li class="rst-data-block"> 
      <div class="rst-data"> 
       <b class="rst-data-info value rst_deliver_amount"></b> 
       <span class="rst-data-info unit">起送价/元</span> 
      </div> </li> 
    </ul> 
    <div class="rst-fav-wrapper"> 
     <div id="rst_fav" class="rst-block rst-fav"> 
      <i class="glyph">♥</i> 
      <span class="status" data-unfaved="收藏 餐厅" data-faved="已收藏">收藏 餐厅</span> 
     </div> 
    </div> 
   </div> 
  </div> 
  <div class="container"> 
   <article id="rst_menus" class="restaurant-main"> 
    <nav class="rst-block rst-cate-wrapper"> 
     <h2 class="rst-cate-title">美食分类</h2> 
     <ul class="rst-cate-list">
      <li class="cate_item cate-item" data-cateid="847669"><a class="cate_name cate-name" data-cateid="847669" title="餐盒费（必点）">餐盒费（必点）</a>(1) </li>
      <li class="cate_item cate-item" data-cateid="1379591"><a class="cate_name cate-name" data-cateid="1379591" title="扫码领红包，最高领6元！新用户立减15元">扫码领红包，最高领6…</a>(1) </li>
      <li class="cate_item cate-item" data-cateid="920304"><a class="cate_name cate-name" data-cateid="920304" title="点套餐送冰红茶">点套餐送冰红茶</a>(0) </li>
      <li class="cate_item cate-item" data-cateid="887172"><a class="cate_name cate-name" data-cateid="887172" title="A套餐（12元）">A套餐（12元）</a>(2) </li>
      <li class="cate_item cate-item" data-cateid="847380"><a class="cate_name cate-name" data-cateid="847380" title="B套餐（15元）">B套餐（15元）</a>(2) </li>
      <li class="cate_item cate-item" data-cateid="847458"><a class="cate_name cate-name" data-cateid="847458" title="C套餐（18元）">C套餐（18元）</a>(2) </li>
      <li class="cate_item cate-item" data-cateid="847141"><a class="cate_name cate-name" data-cateid="847141" title="素美套餐  18元">素美套餐 18元</a>(2) </li>
      <li class="cate_item cate-item" data-cateid="847280"><a class="cate_name cate-name" data-cateid="847280" title="金领豪华套餐">金领豪华套餐</a>(2) </li>
      <li class="cate_item cate-item" data-cateid="887211"><a class="cate_name cate-name" data-cateid="887211" title="1元类">1元类</a>(44) </li>
      <li class="cate_item cate-item" data-cateid="887209"><a class="cate_name cate-name" data-cateid="887209" title="2元类">2元类</a>(25) </li>
      <li class="cate_item cate-item" data-cateid="887208"><a class="cate_name cate-name" data-cateid="887208" title="3元类">3元类</a>(27) </li>
      <li class="cate_item cate-item" data-cateid="887206"><a class="cate_name cate-name" data-cateid="887206" title="4元类">4元类</a>(3) </li>
      <li class="cate_item cate-item" data-cateid="887204"><a class="cate_name cate-name" data-cateid="887204" title="5元类">5元类</a>(2) </li>
      <li class="cate_item cate-item" data-cateid="847580"><a class="cate_name cate-name" data-cateid="847580" title="自选调料（免费）">自选调料（免费）</a>(10) </li>
     </ul> 
     <ul class="rst-activity-list"></ul> 
    </nav> 
    <div id="menu_toolbar" class="rst-menu-toolbar"> 
     <div id="toolbar_text" class="rst-toolbar-text" title="餐盒费（必点）">
      餐盒费（必点）
     </div> 
     <div class="rst-menu-tool"> 
      <div id="toolbar_category" class="eleme_dropdown rst-tool-cate"> 
       <a id="toolbar_toggle" class="e_toggle rst-tool-toggle caret">美食分类</a> 
       <div id="toolbar_dropdown" class="e_dropdown rst-tool-dropdown">
        <ul class="rst-cate-list">
         <li class="cate_item cate-item" data-cateid="847669"><a class="cate_name cate-name" data-cateid="847669" title="餐盒费（必点）">餐盒费（必点）</a>(1) </li>
         <li class="cate_item cate-item" data-cateid="1379591"><a class="cate_name cate-name" data-cateid="1379591" title="扫码领红包，最高领6元！新用户立减15元">扫码领红包，最高领6…</a>(1) </li>
         <li class="cate_item cate-item" data-cateid="920304"><a class="cate_name cate-name" data-cateid="920304" title="点套餐送冰红茶">点套餐送冰红茶</a>(0) </li>
         <li class="cate_item cate-item" data-cateid="887172"><a class="cate_name cate-name" data-cateid="887172" title="A套餐（12元）">A套餐（12元）</a>(2) </li>
         <li class="cate_item cate-item" data-cateid="847380"><a class="cate_name cate-name" data-cateid="847380" title="B套餐（15元）">B套餐（15元）</a>(2) </li>
         <li class="cate_item cate-item" data-cateid="847458"><a class="cate_name cate-name" data-cateid="847458" title="C套餐（18元）">C套餐（18元）</a>(2) </li>
         <li class="cate_item cate-item" data-cateid="847141"><a class="cate_name cate-name" data-cateid="847141" title="素美套餐  18元">素美套餐 18元</a>(2) </li>
         <li class="cate_item cate-item" data-cateid="847280"><a class="cate_name cate-name" data-cateid="847280" title="金领豪华套餐">金领豪华套餐</a>(2) </li>
         <li class="cate_item cate-item" data-cateid="887211"><a class="cate_name cate-name" data-cateid="887211" title="1元类">1元类</a>(44) </li>
         <li class="cate_item cate-item" data-cateid="887209"><a class="cate_name cate-name" data-cateid="887209" title="2元类">2元类</a>(25) </li>
         <li class="cate_item cate-item" data-cateid="887208"><a class="cate_name cate-name" data-cateid="887208" title="3元类">3元类</a>(27) </li>
         <li class="cate_item cate-item" data-cateid="887206"><a class="cate_name cate-name" data-cateid="887206" title="4元类">4元类</a>(3) </li>
         <li class="cate_item cate-item" data-cateid="887204"><a class="cate_name cate-name" data-cateid="887204" title="5元类">5元类</a>(2) </li>
         <li class="cate_item cate-item" data-cateid="847580"><a class="cate_name cate-name" data-cateid="847580" title="自选调料（免费）">自选调料（免费）</a>(10) </li>
        </ul> 
        <ul class="rst-activity-list"></ul> 
       </div> 
      </div> 
      <a class="rst-tool-item sort_btn ui_on" data-sort="default">默认排序</a> 
      <a class="rst-tool-item sort_btn" data-sort="rating">评分<i class="glyph-sort"></i></a> 
      <a class="rst-tool-item sort_btn" data-sort="sales">销量<i class="glyph-sort"></i></a> 
      <a class="rst-tool-item sort_btn" data-sort="price">价格<i class="glyph-sort"></i></a> 
     </div> 
    </div> 
    <div id="cate_view" class="rst-block">


        <div class="rst-d-note">
         <span class="rst-d-ordered dish_state hide"></span>
        </div>
        <div class="rst-d-action r_d_a">
         <div class="rst-d-act act_btns">
          <a class="rst-d-act-add add_btn" title="点击饿一份" role="button" ubt-click="add_cart"><span class="rst-d-act-glyph"></span><span class="price symbol-rmb">28</span></a>
          <a class="rst-d-act-toggle caret add_main_btn" role="button"></a>
         </div>
        </div>
        <div class="rst-d-status cmt_block">
         <span class="rst-d-rating food_rating"> <i class="icon-d-star s10 i_s"></i>(1)</span>
         <br />
         <span class="rst-d-sales">月售4份</span>
        </div> </li>
      </ul>
     </section>
     <section id="cate_view_887211">
      <ul class="rst-menu-list">
      
       
      
      
      
       <li id="food_view_10766783" class="rst-dish-item eleme_view"> 
        <div class="rst-d-info"> 
         <p class="rst-d-main"> <a class="dish-favor-flat favor_btn" title="收藏">♥</a><a class="rst-d-name food_name" title="腐竹">腐竹</a></p>
        </div> 
        <div class="rst-d-note">
         <span class="rst-d-ordered dish_state hide"></span>
        </div> 
        <div class="rst-d-action r_d_a">
         <div class="rst-d-act act_btns">
          <a class="rst-d-act-add add_btn" title="点击饿一份" role="button" ubt-click="add_cart"><span class="rst-d-act-glyph"></span><span class="price symbol-rmb">1</span></a>
          <a class="rst-d-act-toggle caret add_main_btn" role="button"></a>
         </div>
        </div> 
        <div class="rst-d-status cmt_block"> 
         <span class="rst-d-rating food_rating"> <i class="icon-d-star s9 i_s"></i>(8)</span>
         <br />
         <span class="rst-d-sales">月售113份</span>
        </div> </li> 
       <li id="food_view_10766788" class="rst-dish-item eleme_view"> 
        <div class="rst-d-info"> 
         <p class="rst-d-main"> <a class="dish-favor-flat favor_btn" title="收藏">♥</a><a class="rst-d-name food_name" title="年糕">年糕</a></p>
        </div> 
        <div class="rst-d-note">
         <span class="rst-d-ordered dish_state hide"></span>
        </div> 
        <div class="rst-d-action r_d_a">
         <div class="rst-d-act act_btns">
          <a class="rst-d-act-add add_btn" title="点击饿一份" role="button" ubt-click="add_cart"><span class="rst-d-act-glyph"></span><span class="price symbol-rmb">1</span></a>
          <a class="rst-d-act-toggle caret add_main_btn" role="button"></a>
         </div>
        </div> 
        <div class="rst-d-status cmt_block"> 
         <span class="rst-d-rating food_rating"> <i class="icon-d-star s8 i_s"></i>(8)</span>
         <br />
         <span class="rst-d-sales">月售66份</span>
        </div> </li> 
      </ul>
     </section>
    </div> 
   </article> 
   <aside id="rst_aside" class="restaurant-aside"> 
    <section class="rst-block restaurant-board"> 
     <h3 class="rst-aside-title">餐厅公告</h3> 
     <p class="rst-deliver-detail"> <i class="icon-rst-deliver"></i>起送价<span class="rst_deliver_amount"></span>元。 </p> 
     <ul class="rst-badge-list"> 
      <li class="rst-badge-item"> <i class="icon-rst-badge v v-person"></i> 该商家已通过个人身份认证 </li> 
      <li class="rst-badge-item"><i class="icon-rst-badge online-payment"></i>该餐厅支持在线支付</li> 
      <li class="rst-badge-item"><i class="icon-rst-badge new-user-discount"></i>饿了么新用户首次订餐，可立减15元。(不与其他活动同享)</li> 
      <li class="rst-badge-item"><i class="icon-rst-badge extra-discount"></i>在线支付满20减10</li> 
     </ul> 
    </section> 
    <section id="favor_food" class="rst-block"></section> 
    <section id="rec_food" class="rst-block hide"> 
     <h3 class="rst-aside-title">本周热卖</h3> 
     <ul id="weekly_ranking" class="rst-aside-menu-list"></ul> 
    </section> 
    <section class="rst-block rst-aside-map rst_aside_distance"> 
     <div class="rst-map-distance">
      距离
      <span id="r_d_v" class="distance-value"></span>米
     </div> 
     <img class="rst_map rst-map-img" src="" alt="餐厅距离示意图" /> 
    </section> 
    <section class="rst-block restaurant-board fixed rst_fix_panel"> 
     <h3 class="rst-aside-title">餐厅公告</h3> 
     <p class="rst-deliver-detail"> <i class="icon-rst-deliver"></i>起送价<span class="rst_deliver_amount"></span>元。 </p> 
    </section> 
   </aside> 
   <div id="rst_cart" class="restaurant-cart"></div> 
  </div> 
  <div class="rst-mask s_r_m"></div> 
  <div class="rst-drawer-wrapper r_d_w"> 
   <article class="rst-drawer slide_content_wrap"></article> 
   <div class="drawer-photo-modal slide_gallery ui_hide"> 
    <a class="bs-close gallery_close_btn" role="button">&times;</a> 
    <img class="dpm-image gallery_img" src="" alt="" title="" /> 
   </div> 
  </div> 
  <div id="modal_iLogin" class="bs-modal fade ilogin-modal" tabindex="-1" role="dialog" aria-hidden="true"> 
   <div class="bs-modal-dialog"> 
    <div class="bs-modal-content"> 
     <div class="bs-modal-body"> 
      <a class="bs-close" data-dismiss="bs-modal" aria-hidden="true">&times;</a> 
      <iframe class="ilogin-iframe login_frame" src="" frameborder="0" scrolling="no"></iframe> 
     </div> 
    </div> 
   </div> 
  </div> 
  <div id="mod_fixed" class="global-mod-fixed"> 
   <a id="back_top" class="btn-back-top ui_invisible" role="button" title="回顶部"><i class="icon-backtop"></i></a> 
   <div class="btn-app-qrcode"> 
    <i class="icon-qrcode"></i> 
    <img class="img-qrcode" src="/home/home/images/app-qrcode.20cdda49.png" alt="扫描二维码免费下载手机App" />
   </div> 
   <a class="btn-site-feedback" href="http://kaidian.ele.me" target="_blank">我要开店</a> 
   <a class="btn-site-feedback" href="help.html" target="_blank">热门问题</a> 
   <!-- Live800在线客服图标:在线客服[文本图标] 开始--> 
   <div style="display:none;">
    <a href="http://www.live800.com">在线聊天</a>
   </div> 
   <script language="javascript" src="/home/home/js/textButton.js?jid=1820947377&amp;companyID=402791&amp;configID=123801&amp;codeType=custom"></script>
   <!-- 在线客服图标:在线客服 结束--> 
  </div> 
  <footer class="site-footer group" role="contentinfo"> 
   <div class="container"> 
    <p class="sfooter-line"> <a class="sfooter-link" href="http://kaidian.ele.me">我要开店</a> | <a class="sfooter-link" href="contact.html">联系我们</a> | <a class="sfooter-link" href="http://ele.me/about/agreement">服务条款和协议</a> | <a class="sfooter-link" href="sitemaps.html">站点地图</a> | <a class="sfooter-link" href="http://ele.me/jobs">加入我们</a> </p> 
    <p class="sfooter-line"> 增值电信业务许可证：<a class="sfooter-link sfooter-link-zero" target="_blank" rel="nofollow" href="http://www.shca.gov.cn">沪B2-20150033</a> <a class="sfooter-link" target="_blank" rel="nofollow" href="http://www.miibeian.gov.cn">沪ICP备 09007032</a> <a class="sfooter-link" target="_blank" rel="nofollow" href="http://www.sgs.gov.cn/lz/licenseLink.do?method=licenceView&amp;entyId=20120305173227823">上海工商行政管理</a> Copyright &copy;2008-2015 ele.me, All Rights Reserved. </p> 
   </div> 
  </footer> 
  <script type="text/javascript">
    var menu = [{"categ": "\u9910\u76d2\u8d39\uff08\u5fc5\u70b9\uff09", "description": "", "mustPayOnline": 0, "categId": 847669, "foods": {"with_image": [], "without_image": [{"rating": 4.65, "description": "", "restaurant_id": 119301, "sales": 184, "num_ratings": [1, 0, 1, 1, 17], "ratingCount": 20, "id": 14099047, "name": "\u6253\u5305\u76d2", "img": "", "pinyinName": "dabaohe", "attributes": [], "price": 1.0, "stock": 99664}]}, "mustNewUser": 0, "isActivity": false}, {"categ": "\u626b\u7801\u9886\u7ea2\u5305\uff0c\u6700\u9ad8\u98866\u5143\uff01\u65b0\u7528\u6237\u7acb\u51cf15\u5143", "description": "\u626b\u7801\u9886\u7ea2\u5305\uff0c\u6700\u9ad8\u98866\u5143\uff01\u65b0\u7528\u6237\u7acb\u51cf15\u5143", "mustPayOnline": 0, "categId": 1379591, "foods": {"with_image": [{"rating": 0, "description": "\u626b\u7801\u9886\u7ea2\u5305\uff0c\u6700\u9ad8\u98866\u5143\uff01\u65b0\u7528\u6237\u7acb\u51cf15\u5143\uff0c", "restaurant_id": 119301, "sales": 6, "num_ratings": [0, 0, 0, 0, 0], "ratingCount": 0, "id": 15466712, "name": "\u626b\u7801\u9886\u7ea2\u5305\uff0c\u6700\u9ad8\u98866\u5143\uff01\u65b0\u7528\u6237\u7acb\u51cf15\u5143\uff0c\u53ef\u540c\u65f6\u4f7f\u7528\uff01", "img": "/8/e6/5eabafbaaca1f6cc415b899e2e578jpeg.jpeg", "pinyinName": "saomalinghongbao\uff0czuigaoling6yuan\uff01xinyonghulijian15yuan\uff0cketongshishiyong\uff01", "attributes": [], "price": 0.0, "stock": 9976}], "without_image": []}, "mustNewUser": 0, "isActivity": false}, {"categ": "\u70b9\u5957\u9910\u9001\u51b0\u7ea2\u8336", "description": "\u6bcf\u4e2a\u5957\u9910\u9001\u4e00\u76d2", "mustPayOnline": 0, "categId": 920304, "foods": {"with_image": [], "without_image": []}, "mustNewUser": 0, "isActivity": false}, {"categ": "A\u5957\u9910\uff0812\u5143\uff09", "description": "", "mustPayOnline": 0, "categId": 887172, "foods": {"with_image": [], "without_image": [{"rating": 5.0, "description": "", "restaurant_id": 119301, "sales": 8, "num_ratings": [0, 0, 0, 0, 1], "ratingCount": 1, "id": 10760144, "name": "A1\uff1a\u5305\u5fc3\u8d21\u4e38\u3001\u87f9\u8089\u68d2\u3001\u91d1\u9488\u83c7\u3001\u65e5\u672c\u8c46\u8150\u3001\u751f\u83dc\u3001\u8c46\u8150\u8863\u3001\u5c71\u828b\u7c89\u4e1d", "img": "", "pinyinName": "A1\uff1abaoxingongwan\u3001xieroubang\u3001jinzhengu\u3001ribendoufu\u3001shengcai\u3001doufuyi\u3001shanyufensi", "attributes": [], "price": 12.0, "stock": 99971}, {"rating": 0, "description": "", "restaurant_id": 119301, "sales": 2, "num_ratings": [0, 0, 0, 0, 0], "ratingCount": 0, "id": 10760198, "name": "A2\uff1a\u9aa8\u8089\u76f8\u8fde\u3001\u87f9\u8089\u68d2\u3001\u51ac\u74dc\u3001\u6cb9\u6761\u3001\u5927\u767d\u83dc\u3001\u751f\u83dc\u3001\u5c71\u828b\u7c89\u3001\u6d77\u5e26", "img": "", "pinyinName": "A2\uff1agurouxianglian\u3001xieroubang\u3001donggua\u3001youtiao\u3001dabaicai\u3001shengcai\u3001shanyufen\u3001haidai", "attributes": [], "price": 12.0, "stock": 99994}]}, "mustNewUser": 0, "isActivity": false}, {"categ": "B\u5957\u9910\uff0815\u5143\uff09", "description": "", "mustPayOnline": 0, "categId": 847380, "foods": {"with_image": [], "without_image": [{"rating": 0, "description": "", "restaurant_id": 119301, "sales": 3, "num_ratings": [0, 0, 0, 0, 0], "ratingCount": 0, "id": 10760291, "name": "B1\uff1a\u4e94\u9999\u9e21\u67f3\u3001\u8d21\u4e38\u3001\u87f9\u8089\u68d2\u3001\u5c71\u828b\u7c89\u4e1d\u3001\u91d1\u9488\u83c7\u3001\u751f\u83dc\u3001\u5170\u82b1\u5e72\u3001\u65e5\u672c\u8c46\u8150", "img": "", "pinyinName": "B1\uff1awuxiangjiliu\u3001gongwan\u3001xieroubang\u3001shanyufensi\u3001jinzhengu\u3001shengcai\u3001lanhuagan\u3001ribendoufu", "attributes": [], "price": 15.0, "stock": 99975}, {"rating": 0, "description": "", "restaurant_id": 119301, "sales": 3, "num_ratings": [0, 0, 0, 0, 0], "ratingCount": 0, "id": 10760374, "name": "B2\uff1a\u7389\u7c73\u80a0\u3001\u9c7c\u7af9\u8f6e\u3001\u87f9\u8089\u68d2\u3001\u8d21\u4e38\u3001\u5c71\u828b\u7c89\u4e1d\u3001\u5170\u82b1\u5e72\u3001\u6d77\u5e26\u3001\u751f\u83dc", "img": "", "pinyinName": "B2\uff1ayumichang\u3001yuzhulun\u3001xieroubang\u3001gongwan\u3001shanyufensi\u3001lanhuagan\u3001haidai\u3001shengcai", "attributes": [], "price": 15.0, "stock": 99986}]}, "mustNewUser": 0, "isActivity": false}, {"categ": "C\u5957\u9910\uff0818\u5143\uff09", "description": "", "mustPayOnline": 0, "categId": 847458, "foods": {"with_image": [], "without_image": [{"rating": 0, "description": "", "restaurant_id": 119301, "sales": 2, "num_ratings": [0, 0, 0, 0, 0], "ratingCount": 0, "id": 10760495, "name": "C1\uff1a\u9999\u83c7\u8d21\u4e38\u3001\u897f\u6e56\u8089\u71d5\u3001\u94b1\u5305\u9c7c\u7247\u3001\u9e4c\u9e51\u86cb\u3001\u87f9\u8089\u68d2\u3001\u5c71\u828b\u7c89\u4e1d\u3001\u91d1\u9488\u83c7\u3001\u6cb9\u6761\u3001\u751f\u83dc\u3001\u6d77\u5e26", "img": "", "pinyinName": "C1\uff1axianggugongwan\u3001xihurouyan\u3001qianbaoyupian\u3001anchundan\u3001xieroubang\u3001shanyufensi\u3001jinzhengu\u3001youtiao\u3001shengcai\u3001haidai", "attributes": [], "price": 18.0, "stock": 99984}, {"rating": 0, "description": "", "restaurant_id": 119301, "sales": 3, "num_ratings": [0, 0, 0, 0, 0], "ratingCount": 0, "id": 10760519, "name": "C2\uff1a\u70e4\u957f\u3001\u9c7c\u76ae\u8106\u3001\u9c7c\u4e38\u3001\u9c9c\u9c9c\u80a0\u3001\u5348\u9910\u8089\u3001\u91d1\u9488\u83c7\u3001\u9e21\u9e2d\u8840\u3001\u6cb9\u8c46\u8150\u3001\u751f\u83dc\u3001\u5c71\u828b\u7c89\u4e1d", "img": "", "pinyinName": "C2\uff1akaochang\u3001yupicui\u3001yuwan\u3001xianxianchang\u3001wucanrou\u3001jinzhengu\u3001jiyaxie\u3001youdoufu\u3001shengcai\u3001shanyufensi", "attributes": [], "price": 18.0, "stock": 99990}]}, "mustNewUser": 0, "isActivity": false}, {"categ": "\u7d20\u7f8e\u5957\u9910  18\u5143", "description": "", "mustPayOnline": 0, "categId": 847141, "foods": {"with_image": [], "without_image": [{"rating": 0, "description": "", "restaurant_id": 119301, "sales": 7, "num_ratings": [0, 0, 0, 0, 0], "ratingCount": 0, "id": 10760708, "name": "1\uff1a\u751f\u83dc\u3001\u83e0\u83dc\u3001\u9e21\u6bdb\u83dc\u3001\u82b1\u83dc\u3001\u51ac\u74dc\u3001\u571f\u8c46\u3001\u5e73\u83c7\u3001\u5927\u767d\u83dc\u3001\u83b2\u85d5\u7247\u3001\u6d77\u5e26\u3001\u8001\u8c46\u8150\u3001\u539a\u767e\u53f6\u3001\u91d1\u9488\u83c7\u3001\u9ed1\u6728\u8033\u3001\u5357\u74dc\u3001\u7c73\u7c89\u3001\u8c46\u8150", "img": "", "pinyinName": "1\uff1ashengcai\u3001bocai\u3001jimaocai\u3001huacai\u3001donggua\u3001tudou\u3001pinggu\u3001dabaicai\u3001lianoupian\u3001haidai\u3001laodoufu\u3001houbaiye\u3001jinzhengu\u3001heimuer\u3001nangua\u3001mifen\u3001doufu", "attributes": [], "price": 18.0, "stock": 99973}, {"rating": 0, "description": "", "restaurant_id": 119301, "sales": 2, "num_ratings": [0, 0, 0, 0, 0], "ratingCount": 0, "id": 10760779, "name": "2\uff1a\u5170\u82b1\u5e72\u3001\u6cb9\u8c46\u8150\u3001\u4e94\u9999\u5e72\u3001\u8001\u575b\u9178\u83dc\u3001\u5357\u74dc\u3001\u8c46\u8150\u4e1d\u3001\u5e74\u7cd5\u3001\u6cb9\u6761\u3001\u51ac\u74dc\u3001\u571f\u8c46\u3001\u751f\u83dc\u3001\u9999\u83dc\u3001\u83e0\u83dc\u3001\u9752\u83dc\u3001\u5c71\u828b\u7c89\u4e1d", "img": "", "pinyinName": "2\uff1alanhuagan\u3001youdoufu\u3001wuxianggan\u3001laotansuancai\u3001nangua\u3001doufusi\u3001niangao\u3001youtiao\u3001donggua\u3001tudou\u3001shengcai\u3001xiangcai\u3001bocai\u3001qingcai\u3001shanyufensi", "attributes": [], "price": 18.0, "stock": 99995}]}, "mustNewUser": 0, "isActivity": false}, {"categ": "\u91d1\u9886\u8c6a\u534e\u5957\u9910", "description": "", "mustPayOnline": 0, "categId": 847280, "foods": {"with_image": [], "without_image": [{"rating": 0, "description": "\u4e94\u9999\u9e21\u67f3\uff0c\u5305\u5fc3\u9c7c\u4e38\uff0c\u4eb2\u4eb2\u80a0\uff0c\u65e5\u672c\u8c46\u8150\uff0c\u9f99\u867e\u4e38\uff0c\u5170\u82b1\u5e72\uff0c\u725b\u767e\u53f6\uff0c\u91d1\u9488\u83c7\uff0c\u5e73\u83c7\uff0c\u8001\u575b\u9178\u83dc\uff0c\u9e21\u86cb\u9762\uff0c\u751f\u83dc\uff0c\u9e21\u6bdb\u83dc\uff0c\u9999\u83dc", "restaurant_id": 119301, "sales": 7, "num_ratings": [0, 0, 0, 0, 0], "ratingCount": 0, "id": 10350117, "name": "\u91d1\u9886\u8c6a\u534e\u5957\u99101", "img": "", "pinyinName": "jinlinghaohuataocan1", "attributes": [], "price": 28.0, "stock": 9981}, {"rating": 5.0, "description": "\u9999\u83c7\u8d21\u4e38\uff0c\u6842\u82b1\u80a0\uff0c\u5343\u53f6\u8c46\u8150\uff0c\u56db\u5ddd\u814a\u8089\uff0c\u9c7c\u8c46\u8150\uff0c\u87f9\u8089\u68d2\uff0c\u91d1\u9488\u83c7\uff0c\u6d77\u5e26\uff0c\u539a\u767e\u53f6\uff0c\u51ac\u74dc\uff0c\u6728\u8033\uff0c\u5e74\u7cd5\uff0c\u5c71\u828b\u7c89\u4e1d\uff0c\u9f99\u51e4\u7247\uff0c\u751f\u83dc\uff0c\u5927\u767d\u83dc", "restaurant_id": 119301, "sales": 4, "num_ratings": [0, 0, 0, 0, 1], "ratingCount": 1, "id": 10350711, "name": "\u91d1\u9886\u8c6a\u534e\u5957\u99102", "img": "", "pinyinName": "jinlinghaohuataocan2", "attributes": [], "price": 28.0, "stock": 9989}]}, "mustNewUser": 0, "isActivity": false}, {"categ": "1\u5143\u7c7b", "description": "", "mustPayOnline": 0, "categId": 887211, "foods": {"with_image": [], "without_image": [{"rating": 4.4, "description": "", "restaurant_id": 119301, "sales": 155, "num_ratings": [2, 0, 0, 1, 12], "ratingCount": 15, "id": 10766007, "name": "\u51ac\u74dc", "img": "", "pinyinName": "donggua", "attributes": [], "price": 1.0, "stock": 99425}, {"rating": 5.0, "description": "", "restaurant_id": 119301, "sales": 44, "num_ratings": [0, 0, 0, 0, 4], "ratingCount": 4, "id": 10766014, "name": "\u70e4\u9eb8", "img": "", "pinyinName": "kaofu", "attributes": [], "price": 1.0, "stock": 99855}, {"rating": 4.5, "description": "", "restaurant_id": 119301, "sales": 145, "num_ratings": [2, 0, 0, 1, 15], "ratingCount": 18, "id": 10766017, "name": "\u751f\u83dc", "img": "", "pinyinName": "shengcai", "attributes": [], "price": 1.0, "stock": 99501}, {"rating": 4.2, "description": "", "restaurant_id": 119301, "sales": 51, "num_ratings": [1, 0, 0, 0, 4], "ratingCount": 5, "id": 10766022, "name": "\u9752\u83dc", "img": "", "pinyinName": "qingcai", "attributes": [], "price": 1.0, "stock": 99782}, {"rating": 4.0, "description": "", "restaurant_id": 119301, "sales": 20, "num_ratings": [0, 0, 0, 1, 0], "ratingCount": 1, "id": 10766033, "name": "\u97ed\u83dc", "img": "", "pinyinName": "jiucai", "attributes": [], "price": 1.0, "stock": 99942}, {"rating": 4.62, "description": "", "restaurant_id": 119301, "sales": 158, "num_ratings": [1, 0, 0, 1, 11], "ratingCount": 13, "id": 10766039, "name": "\u571f\u8c46", "img": "", "pinyinName": "tudou", "attributes": [], "price": 1.0, "stock": 99491}, {"rating": 4.33, "description": "", "restaurant_id": 119301, "sales": 68, "num_ratings": [1, 0, 0, 0, 5], "ratingCount": 6, "id": 10766055, "name": "\u5c0f\u767d\u83dc", "img": "", "pinyinName": "xiaobaicai", "attributes": [], "price": 1.0, "stock": 99767}, {"rating": 5.0, "description": "", "restaurant_id": 119301, "sales": 69, "num_ratings": [0, 0, 0, 0, 7], "ratingCount": 7, "id": 10766062, "name": "\u9ec4\u8c46\u82bd", "img": "", "pinyinName": "huangdouya", "attributes": [], "price": 1.0, "stock": 99774}, {"rating": 4.33, "description": "", "restaurant_id": 119301, "sales": 80, "num_ratings": [1, 0, 0, 0, 5], "ratingCount": 6, "id": 10766068, "name": "\u7eff\u8c46\u82bd", "img": "", "pinyinName": "lvdouya", "attributes": [], "price": 1.0, "stock": 99745}, {"rating": 4.38, "description": "", "restaurant_id": 119301, "sales": 124, "num_ratings": [2, 0, 1, 0, 13], "ratingCount": 16, "id": 10766072, "name": "\u6d77\u5e26\u4e1d", "img": "", "pinyinName": "haidaisi", "attributes": [], "price": 1.0, "stock": 99601}, {"rating": 4.86, "description": "", "restaurant_id": 119301, "sales": 77, "num_ratings": [0, 0, 0, 1, 6], "ratingCount": 7, "id": 10766081, "name": "\u6cb9\u8c46\u8150", "img": "", "pinyinName": "youdoufu", "attributes": [], "price": 1.0, "stock": 99791}, {"rating": 5.0, "description": "", "restaurant_id": 119301, "sales": 61, "num_ratings": [0, 0, 0, 0, 2], "ratingCount": 2, "id": 10766087, "name": "\u8c46\u8150\u8863", "img": "", "pinyinName": "doufuyi", "attributes": [], "price": 1.0, "stock": 99796}, {"rating": 4.58, "description": "", "restaurant_id": 119301, "sales": 112, "num_ratings": [1, 0, 0, 1, 10], "ratingCount": 12, "id": 10766092, "name": "\u539a\u767e\u53f6", "img": "", "pinyinName": "houbaiye", "attributes": [], "price": 1.0, "stock": 99720}, {"rating": 4.75, "description": "", "restaurant_id": 119301, "sales": 33, "num_ratings": [0, 0, 0, 1, 3], "ratingCount": 4, "id": 10766101, "name": "\u5c0f\u9999\u5e72", "img": "", "pinyinName": "xiaoxianggan", "attributes": [], "price": 1.0, "stock": 99912}, {"rating": 4.33, "description": "", "restaurant_id": 119301, "sales": 61, "num_ratings": [1, 0, 0, 0, 5], "ratingCount": 6, "id": 10766105, "name": "\u8001\u8c46\u8150", "img": "", "pinyinName": "laodoufu", "attributes": [], "price": 1.0, "stock": 99819}, {"rating": 2.33, "description": "", "restaurant_id": 119301, "sales": 39, "num_ratings": [2, 0, 0, 0, 1], "ratingCount": 3, "id": 10766112, "name": "\u6d77\u5e26\u7ed3", "img": "", "pinyinName": "haidaijie", "attributes": [], "price": 1.0, "stock": 99836}, {"rating": 4.83, "description": "", "restaurant_id": 119301, "sales": 144, "num_ratings": [0, 0, 0, 1, 5], "ratingCount": 6, "id": 10766114, "name": "\u6cb9\u9762\u7b4b", "img": "", "pinyinName": "youmianjin", "attributes": [], "price": 1.0, "stock": 99544}, {"rating": 4.67, "description": "", "restaurant_id": 119301, "sales": 24, "num_ratings": [0, 0, 0, 1, 2], "ratingCount": 3, "id": 10766123, "name": "\u5357\u74dc", "img": "", "pinyinName": "nangua", "attributes": [], "price": 1.0, "stock": 99921}, {"rating": 4.87, "description": "", "restaurant_id": 119301, "sales": 101, "num_ratings": [0, 0, 1, 0, 14], "ratingCount": 15, "id": 10766132, "name": "\u6cb9\u6761", "img": "", "pinyinName": "youtiao", "attributes": [], "price": 1.0, "stock": 99619}, {"rating": 4.69, "description": "", "restaurant_id": 119301, "sales": 91, "num_ratings": [1, 0, 0, 0, 12], "ratingCount": 13, "id": 10766309, "name": "\u85d5\u7247", "img": "", "pinyinName": "oupian", "attributes": [], "price": 1.0, "stock": 99721}, {"rating": 4.0, "description": "", "restaurant_id": 119301, "sales": 57, "num_ratings": [1, 0, 0, 0, 3], "ratingCount": 4, "id": 10766527, "name": "\u5927\u767d\u83dc", "img": "", "pinyinName": "dabaicai", "attributes": [], "price": 1.0, "stock": 99784}, {"rating": 5.0, "description": "", "restaurant_id": 119301, "sales": 86, "num_ratings": [0, 0, 0, 0, 5], "ratingCount": 5, "id": 10766530, "name": "\u9e21\u6bdb\u83dc", "img": "", "pinyinName": "jimaocai", "attributes": [], "price": 1.0, "stock": 99761}, {"rating": 5.0, "description": "", "restaurant_id": 119301, "sales": 27, "num_ratings": [0, 0, 0, 0, 2], "ratingCount": 2, "id": 10766534, "name": "\u8c46\u8150\u4e1d", "img": "", "pinyinName": "doufusi", "attributes": [], "price": 1.0, "stock": 99908}, {"rating": 5.0, "description": "", "restaurant_id": 119301, "sales": 115, "num_ratings": [0, 0, 0, 0, 3], "ratingCount": 3, "id": 10766539, "name": "\u9ed1\u6728\u8033", "img": "", "pinyinName": "heimuer", "attributes": [], "price": 1.0, "stock": 99699}, {"rating": 4.83, "description": "", "restaurant_id": 119301, "sales": 99, "num_ratings": [0, 0, 0, 1, 5], "ratingCount": 6, "id": 10766544, "name": "\u83e0\u83dc", "img": "", "pinyinName": "bocai", "attributes": [], "price": 1.0, "stock": 99641}, {"rating": 5.0, "description": "", "restaurant_id": 119301, "sales": 16, "num_ratings": [0, 0, 0, 0, 2], "ratingCount": 2, "id": 10766631, "name": "\u9752\u7b19", "img": "", "pinyinName": "qingsheng", "attributes": [], "price": 1.0, "stock": 99943}, {"rating": 5.0, "description": "", "restaurant_id": 119301, "sales": 64, "num_ratings": [0, 0, 0, 0, 4], "ratingCount": 4, "id": 10766638, "name": "\u9999\u83dc", "img": "", "pinyinName": "xiangcai", "attributes": [], "price": 1.0, "stock": 99754}, {"rating": 5.0, "description": "", "restaurant_id": 119301, "sales": 21, "num_ratings": [0, 0, 0, 0, 2], "ratingCount": 2, "id": 10766651, "name": "\u9ec4\u82b1\u83dc", "img": "", "pinyinName": "huanghuacai", "attributes": [], "price": 1.0, "stock": 99920}, {"rating": 4.44, "description": "", "restaurant_id": 119301, "sales": 143, "num_ratings": [1, 0, 0, 1, 7], "ratingCount": 9, "id": 10766655, "name": "\u5e73\u83c7", "img": "", "pinyinName": "pinggu", "attributes": [], "price": 1.0, "stock": 99527}, {"rating": 5.0, "description": "", "restaurant_id": 119301, "sales": 31, "num_ratings": [0, 0, 0, 0, 2], "ratingCount": 2, "id": 10766659, "name": "\u7c73\u7c89", "img": "", "pinyinName": "mifen", "attributes": [], "price": 1.0, "stock": 99916}, {"rating": 4.55, "description": "", "restaurant_id": 119301, "sales": 90, "num_ratings": [1, 0, 0, 1, 9], "ratingCount": 11, "id": 10766663, "name": "\u9999\u83c7", "img": "", "pinyinName": "xianggu", "attributes": [], "price": 1.0, "stock": 99697}, {"rating": 5.0, "description": "", "restaurant_id": 119301, "sales": 39, "num_ratings": [0, 0, 0, 0, 2], "ratingCount": 2, "id": 10766671, "name": "\u7d2b\u83dc", "img": "", "pinyinName": "zicai", "attributes": [], "price": 1.0, "stock": 99813}, {"rating": 0, "description": "", "restaurant_id": 119301, "sales": 13, "num_ratings": [0, 0, 0, 0, 0], "ratingCount": 0, "id": 10766698, "name": "\u9178\u8c46\u89d2", "img": "", "pinyinName": "suandoujiao", "attributes": [], "price": 1.0, "stock": 99949}, {"rating": 4.5, "description": "", "restaurant_id": 119301, "sales": 73, "num_ratings": [1, 0, 0, 0, 7], "ratingCount": 8, "id": 10766706, "name": "\u65b9\u4fbf\u9762", "img": "", "pinyinName": "fangbianmian", "attributes": [], "price": 1.0, "stock": 99733}, {"rating": 4.22, "description": "", "restaurant_id": 119301, "sales": 59, "num_ratings": [1, 0, 1, 1, 6], "ratingCount": 9, "id": 10766714, "name": "\u706b\u817f\u80a0", "img": "", "pinyinName": "huotuichang", "attributes": [], "price": 1.0, "stock": 99813}, {"rating": 4.23, "description": "", "restaurant_id": 119301, "sales": 177, "num_ratings": [2, 0, 0, 2, 9], "ratingCount": 13, "id": 10766720, "name": "\u91d1\u9488\u83c7", "img": "", "pinyinName": "jinzhengu", "attributes": [], "price": 1.0, "stock": 99431}, {"rating": 5.0, "description": "", "restaurant_id": 119301, "sales": 20, "num_ratings": [0, 0, 0, 0, 2], "ratingCount": 2, "id": 10766728, "name": "\u9e21\u86cb\u9762", "img": "", "pinyinName": "jidanmian", "attributes": [], "price": 1.0, "stock": 99933}, {"rating": 4.8, "description": "", "restaurant_id": 119301, "sales": 47, "num_ratings": [0, 0, 0, 1, 4], "ratingCount": 5, "id": 10766742, "name": "\u5c71\u828b\u7c89\u4e1d", "img": "", "pinyinName": "shanyufensi", "attributes": [], "price": 1.0, "stock": 99762}, {"rating": 4.0, "description": "", "restaurant_id": 119301, "sales": 49, "num_ratings": [1, 0, 0, 0, 3], "ratingCount": 4, "id": 10766760, "name": "\u5c71\u828b\u5bbd\u7c89", "img": "", "pinyinName": "shanyukuanfen", "attributes": [], "price": 1.0, "stock": 99808}, {"rating": 4.1, "description": "", "restaurant_id": 119301, "sales": 126, "num_ratings": [2, 0, 0, 1, 7], "ratingCount": 10, "id": 10766766, "name": "\u9e21\u9e2d\u8840", "img": "", "pinyinName": "jiyaxie", "attributes": [], "price": 1.0, "stock": 99550}, {"rating": 5.0, "description": "", "restaurant_id": 119301, "sales": 61, "num_ratings": [0, 0, 0, 0, 3], "ratingCount": 3, "id": 10766774, "name": "\u9505\u5df4", "img": "", "pinyinName": "guoba", "attributes": [], "price": 1.0, "stock": 99774}, {"rating": 4.75, "description": "", "restaurant_id": 119301, "sales": 71, "num_ratings": [0, 0, 0, 1, 3], "ratingCount": 4, "id": 10766776, "name": "\u82b1\u83dc", "img": "", "pinyinName": "huacai", "attributes": [], "price": 1.0, "stock": 99739}, {"rating": 4.5, "description": "", "restaurant_id": 119301, "sales": 113, "num_ratings": [1, 0, 0, 0, 7], "ratingCount": 8, "id": 10766783, "name": "\u8150\u7af9", "img": "", "pinyinName": "fuzhu", "attributes": [], "price": 1.0, "stock": 99619}, {"rating": 4.25, "description": "", "restaurant_id": 119301, "sales": 66, "num_ratings": [1, 0, 0, 2, 5], "ratingCount": 8, "id": 10766788, "name": "\u5e74\u7cd5", "img": "", "pinyinName": "niangao", "attributes": [], "price": 1.0, "stock": 99756}]}, "mustNewUser": 0, "isActivity": false}, {"categ": "2\u5143\u7c7b", "description": "", "mustPayOnline": 0, "categId": 887209, "foods": {"with_image": [], "without_image": [{"rating": 3.5, "description": "", "restaurant_id": 119301, "sales": 109, "num_ratings": [2, 0, 0, 1, 3], "ratingCount": 6, "id": 10766816, "name": "\u65e5\u672c\u8c46\u8150", "img": "", "pinyinName": "ribendoufu", "attributes": [], "price": 2.0, "stock": 99654}, {"rating": 3.0, "description": "", "restaurant_id": 119301, "sales": 38, "num_ratings": [0, 0, 1, 0, 0], "ratingCount": 1, "id": 10766820, "name": "\u5170\u82b1\u5e72", "img": "", "pinyinName": "lanhuagan", "attributes": [], "price": 2.0, "stock": 99898}, {"rating": 5.0, "description": "", "restaurant_id": 119301, "sales": 23, "num_ratings": [0, 0, 0, 0, 3], "ratingCount": 3, "id": 10766828, "name": "\u8001\u575b\u9178\u83dc", "img": "", "pinyinName": "laotansuancai", "attributes": [], "price": 2.0, "stock": 99925}, {"rating": 5.0, "description": "", "restaurant_id": 119301, "sales": 11, "num_ratings": [0, 0, 0, 0, 1], "ratingCount": 1, "id": 10766834, "name": "\u9f99\u51e4\u7247", "img": "", "pinyinName": "longfengpian", "attributes": [], "price": 2.0, "stock": 99981}, {"rating": 4.56, "description": "", "restaurant_id": 119301, "sales": 91, "num_ratings": [1, 0, 0, 0, 8], "ratingCount": 9, "id": 10766861, "name": "\u9e1f\u86cb", "img": "", "pinyinName": "niaodan", "attributes": ["featured"], "price": 2.0, "stock": 99722}, {"rating": 2.5, "description": "", "restaurant_id": 119301, "sales": 30, "num_ratings": [1, 0, 0, 1, 0], "ratingCount": 2, "id": 10766909, "name": "\u9999\u80a0", "img": "", "pinyinName": "xiangchang", "attributes": [], "price": 2.0, "stock": 99912}, {"rating": 5.0, "description": "", "restaurant_id": 119301, "sales": 18, "num_ratings": [0, 0, 0, 0, 5], "ratingCount": 5, "id": 10766926, "name": "\u9c7c\u7af9\u8f6e", "img": "", "pinyinName": "yuzhulun", "attributes": [], "price": 2.0, "stock": 99949}, {"rating": 5.0, "description": "", "restaurant_id": 119301, "sales": 53, "num_ratings": [0, 0, 0, 0, 1], "ratingCount": 1, "id": 10767034, "name": "\u9752\u9752\u80a0", "img": "", "pinyinName": "qingqingchang", "attributes": ["featured"], "price": 2.0, "stock": 99870}, {"rating": 4.0, "description": "", "restaurant_id": 119301, "sales": 73, "num_ratings": [2, 0, 1, 0, 7], "ratingCount": 10, "id": 10767050, "name": "\u5348\u9910\u8089", "img": "", "pinyinName": "wucanrou", "attributes": [], "price": 2.0, "stock": 99758}, {"rating": 3.67, "description": "", "restaurant_id": 119301, "sales": 35, "num_ratings": [1, 0, 0, 0, 2], "ratingCount": 3, "id": 10767058, "name": "\u87f9\u6392", "img": "", "pinyinName": "xiepai", "attributes": ["featured"], "price": 2.0, "stock": 99854}, {"rating": 0, "description": "", "restaurant_id": 119301, "sales": 29, "num_ratings": [0, 0, 0, 0, 0], "ratingCount": 0, "id": 10767076, "name": "\u8089\u76ae", "img": "", "pinyinName": "roupi", "attributes": [], "price": 2.0, "stock": 99894}, {"rating": 0, "description": "", "restaurant_id": 119301, "sales": 23, "num_ratings": [0, 0, 0, 0, 0], "ratingCount": 0, "id": 10767084, "name": "\u7d20\u9e2d", "img": "", "pinyinName": "suya", "attributes": [], "price": 2.0, "stock": 99930}, {"rating": 3.0, "description": "", "restaurant_id": 119301, "sales": 25, "num_ratings": [0, 0, 1, 0, 0], "ratingCount": 1, "id": 10767111, "name": "\u7d20\u706b\u817f", "img": "", "pinyinName": "suhuotui", "attributes": [], "price": 2.0, "stock": 99956}, {"rating": 0, "description": "", "restaurant_id": 119301, "sales": 5, "num_ratings": [0, 0, 0, 0, 0], "ratingCount": 0, "id": 10767142, "name": "\u5343\u5c42\u5377", "img": "", "pinyinName": "qiancengjuan", "attributes": [], "price": 2.0, "stock": 99989}, {"rating": 3.0, "description": "", "restaurant_id": 119301, "sales": 23, "num_ratings": [1, 0, 0, 0, 1], "ratingCount": 2, "id": 10767148, "name": "\u8d21\u4e38", "img": "", "pinyinName": "gongwan", "attributes": [], "price": 2.0, "stock": 99917}, {"rating": 0, "description": "", "restaurant_id": 119301, "sales": 26, "num_ratings": [0, 0, 0, 0, 0], "ratingCount": 0, "id": 10767154, "name": "\u867e\u4e38", "img": "", "pinyinName": "xiawan", "attributes": [], "price": 2.0, "stock": 99893}, {"rating": 1.0, "description": "", "restaurant_id": 119301, "sales": 10, "num_ratings": [1, 0, 0, 0, 0], "ratingCount": 1, "id": 10767159, "name": "\u8471\u82b1\u9c7c\u4e38", "img": "", "pinyinName": "conghuayuwan", "attributes": [], "price": 2.0, "stock": 99957}, {"rating": 5.0, "description": "", "restaurant_id": 119301, "sales": 107, "num_ratings": [0, 0, 0, 0, 2], "ratingCount": 2, "id": 10767169, "name": "\u87f9\u8089\u68d2", "img": "", "pinyinName": "xieroubang", "attributes": ["featured", "new"], "price": 2.0, "stock": 99664}, {"rating": 1.0, "description": "", "restaurant_id": 119301, "sales": 26, "num_ratings": [1, 0, 0, 0, 0], "ratingCount": 1, "id": 10767187, "name": "\u8611\u83c7", "img": "", "pinyinName": "mogu", "attributes": [], "price": 2.0, "stock": 99917}, {"rating": 5.0, "description": "", "restaurant_id": 119301, "sales": 34, "num_ratings": [0, 0, 0, 0, 6], "ratingCount": 6, "id": 10767195, "name": "\u897f\u5170\u82b1", "img": "", "pinyinName": "xilanhua", "attributes": [], "price": 2.0, "stock": 99900}, {"rating": 3.67, "description": "", "restaurant_id": 119301, "sales": 45, "num_ratings": [1, 0, 0, 0, 2], "ratingCount": 3, "id": 10767233, "name": "\u8c46\u8150\u76ae", "img": "", "pinyinName": "doufupi", "attributes": ["featured"], "price": 2.0, "stock": 99846}, {"rating": 5.0, "description": "", "restaurant_id": 119301, "sales": 22, "num_ratings": [0, 0, 0, 0, 1], "ratingCount": 1, "id": 10767275, "name": "\u6842\u82b1\u80a0", "img": "", "pinyinName": "guihuachang", "attributes": ["featured"], "price": 2.0, "stock": 99932}, {"rating": 5.0, "description": "", "restaurant_id": 119301, "sales": 32, "num_ratings": [0, 0, 0, 0, 1], "ratingCount": 1, "id": 10767283, "name": "\u9999\u83c7\u8d21\u4e38", "img": "", "pinyinName": "xianggugongwan", "attributes": [], "price": 2.0, "stock": 99900}, {"rating": 5.0, "description": "", "restaurant_id": 119301, "sales": 30, "num_ratings": [0, 0, 0, 0, 1], "ratingCount": 1, "id": 10767313, "name": "\u5343\u53f6\u8c46\u8150", "img": "", "pinyinName": "qianyedoufu", "attributes": ["featured"], "price": 2.0, "stock": 99877}, {"rating": 0, "description": "", "restaurant_id": 119301, "sales": 55, "num_ratings": [0, 0, 0, 0, 0], "ratingCount": 0, "id": 10767325, "name": "\u86cb\u997a\uff082\u53ea\uff09", "img": "", "pinyinName": "danjiao\uff082zhi\uff09", "attributes": ["featured"], "price": 2.0, "stock": 99823}]}, "mustNewUser": 0, "isActivity": false}, {"categ": "3\u5143\u7c7b", "description": "", "mustPayOnline": 0, "categId": 887208, "foods": {"with_image": [], "without_image": [{"rating": 3.67, "description": "", "restaurant_id": 119301, "sales": 38, "num_ratings": [1, 0, 0, 0, 2], "ratingCount": 3, "id": 10767340, "name": "\u6c34\u6676\u9f99\u867e\u4e38", "img": "", "pinyinName": "shuijinglongxiawan", "attributes": ["featured"], "price": 3.0, "stock": 99878}, {"rating": 0, "description": "", "restaurant_id": 119301, "sales": 4, "num_ratings": [0, 0, 0, 0, 0], "ratingCount": 0, "id": 10767352, "name": "\u80a0\u76f8\u4f9d", "img": "", "pinyinName": "changxiangyi", "attributes": [], "price": 3.0, "stock": 99995}, {"rating": 5.0, "description": "", "restaurant_id": 119301, "sales": 40, "num_ratings": [0, 0, 0, 0, 1], "ratingCount": 1, "id": 10767459, "name": "\u9b54\u828b\u4e1d\u8282", "img": "", "pinyinName": "moyusijie", "attributes": [], "price": 3.0, "stock": 99881}, {"rating": 1.0, "description": "", "restaurant_id": 119301, "sales": 10, "num_ratings": [1, 0, 0, 0, 0], "ratingCount": 1, "id": 10767511, "name": "\u6ce2\u6ce2\u80a0", "img": "", "pinyinName": "bobochang", "attributes": ["featured"], "price": 3.0, "stock": 99948}, {"rating": 0, "description": "", "restaurant_id": 119301, "sales": 5, "num_ratings": [0, 0, 0, 0, 0], "ratingCount": 0, "id": 10767542, "name": "\u7d20\u80a0", "img": "", "pinyinName": "suchang", "attributes": [], "price": 3.0, "stock": 99987}, {"rating": 3.0, "description": "", "restaurant_id": 119301, "sales": 59, "num_ratings": [1, 0, 0, 0, 1], "ratingCount": 2, "id": 10767548, "name": "\u6bdb\u809a", "img": "", "pinyinName": "maodu", "attributes": ["featured"], "price": 3.0, "stock": 99793}, {"rating": 0, "description": "", "restaurant_id": 119301, "sales": 19, "num_ratings": [0, 0, 0, 0, 0], "ratingCount": 0, "id": 10767551, "name": "\u9c7f\u9c7c", "img": "", "pinyinName": "youyu", "attributes": [], "price": 3.0, "stock": 99931}, {"rating": 5.0, "description": "", "restaurant_id": 119301, "sales": 76, "num_ratings": [0, 0, 0, 0, 3], "ratingCount": 3, "id": 10767576, "name": "\u829d\u58eb\u5e74\u7cd5", "img": "", "pinyinName": "zhishiniangao", "attributes": [], "price": 3.0, "stock": 99775}, {"rating": 3.67, "description": "", "restaurant_id": 119301, "sales": 46, "num_ratings": [1, 0, 0, 0, 2], "ratingCount": 3, "id": 10767587, "name": "\u9aa8\u8089\u76f8\u8fde", "img": "", "pinyinName": "gurouxianglian", "attributes": ["featured"], "price": 3.0, "stock": 99838}, {"rating": 3.0, "description": "", "restaurant_id": 119301, "sales": 22, "num_ratings": [1, 0, 0, 0, 1], "ratingCount": 2, "id": 10767592, "name": "\u9e21\u7fc5\u5c16", "img": "", "pinyinName": "jichijian", "attributes": [], "price": 3.0, "stock": 99928}, {"rating": 1.0, "description": "", "restaurant_id": 119301, "sales": 32, "num_ratings": [1, 0, 0, 0, 0], "ratingCount": 1, "id": 10767606, "name": "\u57f9\u6839", "img": "", "pinyinName": "peigen", "attributes": [], "price": 3.0, "stock": 99897}, {"rating": 3.67, "description": "", "restaurant_id": 119301, "sales": 71, "num_ratings": [1, 0, 0, 0, 2], "ratingCount": 3, "id": 10767615, "name": "\u4e94\u9999\u9e21\u67f3", "img": "", "pinyinName": "wuxiangjiliu", "attributes": ["featured"], "price": 3.0, "stock": 99794}, {"rating": 0, "description": "", "restaurant_id": 119301, "sales": 29, "num_ratings": [0, 0, 0, 0, 0], "ratingCount": 0, "id": 10767648, "name": "\u9e2d\u80d7", "img": "", "pinyinName": "yazhen", "attributes": [], "price": 3.0, "stock": 99911}, {"rating": 5.0, "description": "", "restaurant_id": 119301, "sales": 12, "num_ratings": [0, 0, 0, 0, 1], "ratingCount": 1, "id": 10767658, "name": "\u70ed\u72d7\u80a0", "img": "", "pinyinName": "regouchang", "attributes": ["featured"], "price": 3.0, "stock": 99963}, {"rating": 0, "description": "", "restaurant_id": 119301, "sales": 2, "num_ratings": [0, 0, 0, 0, 0], "ratingCount": 0, "id": 10767677, "name": "\u9c7c\u76ae\u8106", "img": "", "pinyinName": "yupicui", "attributes": [], "price": 3.0, "stock": 99986}, {"rating": 0, "description": "", "restaurant_id": 119301, "sales": 15, "num_ratings": [0, 0, 0, 0, 0], "ratingCount": 0, "id": 10767688, "name": "\u56db\u5ddd\u814a\u8089", "img": "", "pinyinName": "sichuanlarou", "attributes": ["featured"], "price": 3.0, "stock": 99933}, {"rating": 5.0, "description": "", "restaurant_id": 119301, "sales": 21, "num_ratings": [0, 0, 0, 0, 1], "ratingCount": 1, "id": 10767701, "name": "\u9e21\u80d7", "img": "", "pinyinName": "jizhen", "attributes": [], "price": 3.0, "stock": 99954}, {"rating": 5.0, "description": "", "restaurant_id": 119301, "sales": 21, "num_ratings": [0, 0, 0, 0, 2], "ratingCount": 2, "id": 10767710, "name": "\u76ee\u9c7c\u4e38", "img": "", "pinyinName": "muyuwan", "attributes": [], "price": 3.0, "stock": 99929}, {"rating": 3.67, "description": "", "restaurant_id": 119301, "sales": 53, "num_ratings": [1, 0, 0, 0, 2], "ratingCount": 3, "id": 10767725, "name": "\u5305\u5fc3\u8d21\u4e38", "img": "", "pinyinName": "baoxingongwan", "attributes": ["featured"], "price": 3.0, "stock": 99880}, {"rating": 5.0, "description": "", "restaurant_id": 119301, "sales": 21, "num_ratings": [0, 0, 0, 0, 3], "ratingCount": 3, "id": 10767745, "name": "\u5305\u5fc3\u9c7c\u4e38", "img": "", "pinyinName": "baoxinyuwan", "attributes": [], "price": 3.0, "stock": 99935}, {"rating": 3.67, "description": "", "restaurant_id": 119301, "sales": 39, "num_ratings": [1, 0, 0, 0, 2], "ratingCount": 3, "id": 10767753, "name": "\u9c7c\u8c46\u8150", "img": "", "pinyinName": "yudoufu", "attributes": [], "price": 3.0, "stock": 99877}, {"rating": 0, "description": "", "restaurant_id": 119301, "sales": 39, "num_ratings": [0, 0, 0, 0, 0], "ratingCount": 0, "id": 10767766, "name": "\u9e21\u5fc3", "img": "", "pinyinName": "jixin", "attributes": [], "price": 3.0, "stock": 99922}, {"rating": 5.0, "description": "", "restaurant_id": 119301, "sales": 78, "num_ratings": [0, 0, 0, 0, 1], "ratingCount": 1, "id": 10767773, "name": "\u725b\u767e\u53f6", "img": "", "pinyinName": "niubaiye", "attributes": ["featured"], "price": 3.0, "stock": 99757}, {"rating": 0, "description": "", "restaurant_id": 119301, "sales": 8, "num_ratings": [0, 0, 0, 0, 0], "ratingCount": 0, "id": 10767777, "name": "\u8089\u4e38", "img": "", "pinyinName": "rouwan", "attributes": [], "price": 3.0, "stock": 99974}, {"rating": 5.0, "description": "", "restaurant_id": 119301, "sales": 15, "num_ratings": [0, 0, 0, 0, 1], "ratingCount": 1, "id": 10767799, "name": "\u897f\u6e56\u8089\u71d5", "img": "", "pinyinName": "xihurouyan", "attributes": ["featured"], "price": 3.0, "stock": 99954}, {"rating": 4.5, "description": "", "restaurant_id": 119301, "sales": 48, "num_ratings": [0, 0, 1, 0, 3], "ratingCount": 4, "id": 10767804, "name": "\u7389\u7c73\u80a0", "img": "", "pinyinName": "yumichang", "attributes": ["featured"], "price": 3.0, "stock": 99866}, {"rating": 0, "description": "", "restaurant_id": 119301, "sales": 2, "num_ratings": [0, 0, 0, 0, 0], "ratingCount": 0, "id": 10767819, "name": "\u5927\u798f\u5305", "img": "", "pinyinName": "dafubao", "attributes": [], "price": 3.0, "stock": 99989}]}, "mustNewUser": 0, "isActivity": false}, {"categ": "4\u5143\u7c7b", "description": "", "mustPayOnline": 0, "categId": 887206, "foods": {"with_image": [], "without_image": [{"rating": 0, "description": "", "restaurant_id": 119301, "sales": 32, "num_ratings": [0, 0, 0, 0, 0], "ratingCount": 0, "id": 10767832, "name": "\u4e4c\u51ac\u9762", "img": "", "pinyinName": "wudongmian", "attributes": ["featured"], "price": 4.0, "stock": 99916}, {"rating": 3.0, "description": "", "restaurant_id": 119301, "sales": 45, "num_ratings": [0, 0, 1, 0, 0], "ratingCount": 1, "id": 10767848, "name": "\u571f\u8c46\u7c89", "img": "", "pinyinName": "tudoufen", "attributes": ["featured"], "price": 4.0, "stock": 99860}, {"rating": 0, "description": "", "restaurant_id": 119301, "sales": 7, "num_ratings": [0, 0, 0, 0, 0], "ratingCount": 0, "id": 10767854, "name": "\u9e21\u6c49\u5821", "img": "", "pinyinName": "jihanbao", "attributes": [], "price": 4.0, "stock": 99989}]}, "mustNewUser": 0, "isActivity": false}, {"categ": "5\u5143\u7c7b", "description": "", "mustPayOnline": 0, "categId": 887204, "foods": {"with_image": [], "without_image": [{"rating": 0, "description": "", "restaurant_id": 119301, "sales": 12, "num_ratings": [0, 0, 0, 0, 0], "ratingCount": 0, "id": 10767887, "name": "\u91d1\u94b1\u809a", "img": "", "pinyinName": "jinqiandu", "attributes": ["featured"], "price": 5.0, "stock": 99966}, {"rating": 5.0, "description": "", "restaurant_id": 119301, "sales": 14, "num_ratings": [0, 0, 0, 0, 1], "ratingCount": 1, "id": 10767907, "name": "\u9c7c\u7687\u5305", "img": "", "pinyinName": "yuhuangbao", "attributes": [], "price": 5.0, "stock": 99963}]}, "mustNewUser": 0, "isActivity": false}, {"categ": "\u81ea\u9009\u8c03\u6599\uff08\u514d\u8d39\uff09", "description": "", "mustPayOnline": 0, "categId": 847580, "foods": {"with_image": [], "without_image": [{"rating": 1.0, "description": "", "restaurant_id": 119301, "sales": 71, "num_ratings": [1, 0, 0, 0, 0], "ratingCount": 1, "id": 10351022, "name": "\u91cd\u8fa3", "img": "", "pinyinName": "zhongla", "attributes": [], "price": 0.0, "stock": 9823}, {"rating": 5.0, "description": "", "restaurant_id": 119301, "sales": 81, "num_ratings": [0, 0, 0, 0, 4], "ratingCount": 4, "id": 10351093, "name": "\u4e2d\u8fa3", "img": "", "pinyinName": "zhongla", "attributes": [], "price": 0.0, "stock": 9691}, {"rating": 4.11, "description": "", "restaurant_id": 119301, "sales": 138, "num_ratings": [1, 0, 1, 2, 5], "ratingCount": 9, "id": 10351112, "name": "\u5fae\u8fa3", "img": "", "pinyinName": "weila", "attributes": [], "price": 0.0, "stock": 9463}, {"rating": 4.0, "description": "", "restaurant_id": 119301, "sales": 92, "num_ratings": [1, 0, 0, 0, 3], "ratingCount": 4, "id": 10351205, "name": "\u82b1\u6912", "img": "", "pinyinName": "huajiao", "attributes": [], "price": 0.0, "stock": 9622}, {"rating": 4.0, "description": "", "restaurant_id": 119301, "sales": 183, "num_ratings": [1, 0, 1, 1, 4], "ratingCount": 7, "id": 10351331, "name": "\u849c\u7c92", "img": "", "pinyinName": "suanli", "attributes": [], "price": 0.0, "stock": 9391}, {"rating": 4.33, "description": "", "restaurant_id": 119301, "sales": 169, "num_ratings": [1, 0, 0, 2, 6], "ratingCount": 9, "id": 10351381, "name": "\u8471\u82b1", "img": "", "pinyinName": "conghua", "attributes": [], "price": 0.0, "stock": 9395}, {"rating": 4.0, "description": "", "restaurant_id": 119301, "sales": 140, "num_ratings": [1, 0, 0, 2, 3], "ratingCount": 6, "id": 10351452, "name": "\u9ebb\u6cb9", "img": "", "pinyinName": "mayou", "attributes": [], "price": 0.0, "stock": 9472}, {"rating": 4.25, "description": "", "restaurant_id": 119301, "sales": 79, "num_ratings": [0, 1, 0, 0, 3], "ratingCount": 4, "id": 10351473, "name": "\u7ea2\u6cb9", "img": "", "pinyinName": "hongyou", "attributes": [], "price": 0.0, "stock": 9734}, {"rating": 3.89, "description": "", "restaurant_id": 119301, "sales": 159, "num_ratings": [2, 0, 1, 0, 6], "ratingCount": 9, "id": 10351644, "name": "\u82b1\u751f\u9171", "img": "", "pinyinName": "huashengjiang", "attributes": [], "price": 0.0, "stock": 9391}, {"rating": 4.33, "description": "", "restaurant_id": 119301, "sales": 143, "num_ratings": [1, 0, 0, 0, 5], "ratingCount": 6, "id": 10351653, "name": "\u9999\u918b", "img": "", "pinyinName": "xiangcu", "attributes": [], "price": 0.0, "stock": 9493}]}, "mustNewUser": 0, "isActivity": false}];
    var menuRenderIndex = 8;
  </script> 
  <script class="usemin" src="/home/home/js/vendor.7aa05b99.js"></script>
  <script class="usemin" src="/home/home/js/global.8d3089f1.js"></script>
  <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script',('http://static11.elemecdn.com')+'/forward/js/vendor/analytics.js','ga');

      ga('create','UA-2513347-3',{'cookieDomain':'.ele.me'});
      ga('send','pageview','restaurant_show/kxljmlt-pt');
      
      var isReady = false,
          readyList = null;
      function domReady(callback) {
        if (isReady) {
          setTimeout(callback);
          return;
        }

        if (readyList) {
          readyList.push(callback);
          return;
        }

        readyList = [callback];
        var completed = function(event) {
          if (document.addEventListener || event.type == 'load' || document.readyState === 'complete') {
            detach();
            realReady();
          }
        };

        if (document.addEventListener) {
          document.addEventListener('DOMContentLoaded', completed, false);
          window.addEventListener('load', completed, false);
        } else {
          document.attachEvent('onreadystatechange', completed);
          window.attachEvent('onload', completed);

          var top = false;
          try {
            top = window.frameElement == null && document.documentElement;
          } catch(e) {}

          if (top && top.doScroll) {
            (function doScrollCheck() {
              if (!isReady) {
                try {
                  top.doScroll('left');
                } catch(e) {
                  return setTimeout(doScrollCheck, 50);
                }
                detach();
                realReady();
              }
            })();
          }
        }

        function detach() {
          if (document.addEventListener) {
            document.removeEventListener('DOMContentLoaded', completed, false);
            window.removeEventListener('load', completed, false);
          } else {
            document.detachEvent('onreadystatechange', completed);
            window.detachEvent('onload', completed);
          }
        }

        function realReady() {
          if (!document.body) {
            setTimeout(realReady);
            return;
          }
          isReady = true;
          var callback;
          while (callback = readyList.shift()) {
            callback();
          }
        }
      }
      domReady(function(){
        readyTime = new Date().getTime() - startTime;
        if(readyTime < 10000 && readyTime > 0){
          ga('send', 'event', 'ReadyTime', ELEME.route, '', readyTime);
        }
      });
    </script> 
  <!-- UBT --> 
  <script>
    UBT.send('PV', {
      resolution: window.screen ? screen.width + 'x' + screen.height : null,
      location: location.href,
      referrer: document.referrer
    });
    </script> 
  <!-- fingerprint --> 
  <script>
    // fingerprint
    void function() {
      // 已存在 fingerprint 则不做处理
      var fingerprint = document.cookie.match(/(?:^|; )track_fingerprint_1=(.*?)(?:; |$)|$/)[1];
      if(fingerprint) return;
      // 发送 fingerprint data
      var fin = new Fingerprint();
      var data = fin.get();
      var track_id = document.cookie.match(/(?:^|; )track_id=(.*?)(?:; |$)|$/)[1];
      var xhr = !-[1,] ? new XDomainRequest() : new XMLHttpRequest();
      xhr.open('POST', '//restapi.ele.me/v1/browser_fingerprints', true);
      var package = { track_id: track_id, json_string: JSON.stringify(data) };
      xhr.send(JSON.stringify(package));
      // 计算 fingerprint 种下 cookie
      var fingerprint = fin.murmurhash3_32_gc(JSON.stringify(package), 31);
      var domain = document.domain.match(/[\w-]+\.?[\w-]+$/)[0];
      document.cookie = 'track_fingerprint_1=' + fingerprint + '; Expires=Wed, 31 Dec 2098 16:00:00 GMT; Domain=' + domain + '; Path=/';
    }();
    </script> 
  <script class="usemin" src="/home/home/js/rstMenu.2950aa16.js"></script>
 </body>
</html>