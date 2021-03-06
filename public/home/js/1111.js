webpackJsonp([3], [function(e, t, a) {
    "use strict";
    a(1),
        a(11);
    var n = a(32),
        i = a(192)([["/place/:geohash", a(252)], ["/premium/:geohash", a(272)], ["/place/:geohash/search/:keyword", a(276)], ["/activity", a(280)], ["/activity/:id", a(280)], ["/shop/:id", a(284)], ["/shop/:id/:action", a(284)], ["/cart/checkout", a(361)], ["/order/:orderId/pay", a(395)], ["/order/:orderId/success/offline", a(401)], ["/order/:orderId/success/online", a(401)]]);
    n.config(i).config(["$routeProvider",
        function(e) {
            e.when("/", {
                redirectTo: "/place"
            }),
                e.when("/:page", {
                    template: "<div></div>",
                    controller: ["$rootScope", "$location", "$routeParams",
                        function(e, t, a) {
                            var n = ["place", "premium"],
                                i = a.page,
                                r = localStorage.getItem("GEOHASH");
                            if ( - 1 !== n.indexOf(i)) {
                                if (r) {
                                    var o = Geohash.decode(r)[0],
                                        s = Geohash.decode(r)[1],
                                        c = "?latitude=" + o + "&longitude=" + s;
                                    return t.url(a.page + "/" + r + c)
                                }
                                location.href = "/home"
                            }
                        }]
                })
        }])
},
    , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , ,
    function(e, t, a) {
        e.exports = a.p + "media/img/default-avatar.38e40d.png"
    },
    , , , , , , , , , , , , , , , , ,
    function(e, t, a) {
        "use strict";
        var n = a(253);
        a(256);
        var i = ["$scope", "$routeParams", "$rootScope", "RestaurantStream", "Zero",
            function(e, t, a, n, i) {
                a.geohash = e.geohash = t.geohash,
                    e.searchRestaurants = [],
                    e.searchFoods = [];
                var r = function() {
                    localStorage.removeItem("GEOHASH"),
                        location.href = "/home"
                };
                if (/[\Wailo_]|^$/.test(a.geohash || "")) return r();
                localStorage.setItem("GEOHASH", e.geohash),
                    e.rstStream = n({
                        geohash: e.geohash
                    });
                var o = a.$watch("place",
                    function(t) {
                        t.$promise.then(function() {
                            var n = t.name;
                            n && (a.SEO.title = n + "闄勮繎缇庨_澶栧崠鍟嗗_" + t.adInfo + "-楗夸簡涔堢綉涓婅椁�", a.SEO.keywords = n + "缇庨锛�" + n + "鍟嗗锛�" + n + "澶栧崠", a.SEO["mobile-agent"] = "format=html5; url=http://m.ele.me/place/" + t.geohash, e.rstStream.$promise.then(function() {
                                var t = e.rstStream.restaurants.slice(0, 5).map(function(e) {
                                    return e.name
                                });
                                a.SEO.description = n + "闄勮繎鐨勫晢瀹剁編椋熸湁" + t.join("銆�") + "绛夛紝鏇村缇庨澶栧崠锛屽敖鍦ㄩタ浜嗕箞銆�"
                            }), o())
                        })
                    }),
                    s = function(e, t) {
                        var n = Geohash.decode(a.geohash),
                            r = n[0],
                            o = n[1];
                        i.bidding.post({
                            latitude: r,
                            longitude: o,
                            bidding: e.replace(/'/g, '"'),
                            user_id: a.user.user_id || 886,
                            rstId: t
                        }).$promise.then(function() {})["catch"](function() {})
                    };
                angular.$(".place-rstbox").on("click",
                    function(e) {
                        var t = angular.element(e.target).parents(".rstblock")[0],
                            a = t.getAttribute("data-bidding"),
                            n = t.getAttribute("data-rst-id");
                        a && s(a, n)
                    }),
                    e.activityClick = function(e) {
                        var t = e.currentTarget;
                        if (!t) for (t = e.target;
                                     "HTML" !== t.nodeName && "A" !== t.nodeName;) t = t.parentNode;
                        t && "#" === t.getAttribute("href") && e.preventDefault()
                    },
                    i.content.query({
                        geohash: a.geohash,
                        consumer: 3
                    }).$promise.then(function(t) {
                        e.activities = t.map(function(e) {
                            switch (e.type) {
                                case 1:
                                    e.href = e.link;
                                    break;
                                case 2:
                                    e.href = "/activity/" + e.template_id
                            }
                            return e
                        })
                    })["catch"](function(e) {
                        return Error(e)
                    })
            }];
        angular.module("eleme.page").factory("RestaurantStream", a(258)).factory("Search", a(259)).factory("RstPopOver", a(260).RstPopOver).directive("rstPopover", a(260).rstPopover).directive("excavator", a(264)).directive("autocomplete", a(268).autocomplete).directive("searchInput", a(268).searchInput),
            e.exports = {
                templateUrl: n,
                controller: i
            }
    },
    function(e, t, a) {
        var n = "/entry/main/place/place.html",
            i = '<div class="container clearfix"><div location></div><div search-input></div></div><div class="place-ad container" role=banner ng-if=activities><div carousel class=activity-carousel><div slide ng-repeat="activity in activities"><a rel=nofollow ng-href={{activity.href}} target=_blank ng-click=activityClick($event) ubt-visit=693 ubt-click=694 ng-attr-ubt-data-url={{activity.href}}><img ng-src="{{activity.image_path | imgOptimize}}" alt={{activity.name}}></a></div></div></div><div class="place-tab clearfix container"><div class=place-fetchtakeout show-fetch-takeout-dialog><img src=' + a(254) + ' alt="璋佸幓鎷垮鍗�"></div></div><div ng-show=!recentBoughtOnly class=container><excavator></excavator><div class="place-rstbox clearfix"><rst-view data="filteredRestaurants = (rstStream.restaurants | filter: rstStream.filter | filter: otherFilter | orderBy: [ \'-is_opening\', rstStream.orderBy || \'index\' ])"></rst-view><div ng-show="rstStream.status === \'LOADING\'" loading content=姝ｅ湪杞藉叆鏇村鍟嗗... type=normal></div><div id=fetchMoreRst ng-show="rstStream.status === \'NEED_USER_ACTION\'">鐐瑰嚮鍔犺浇鏇村鍟嗗...</div><div class=place-rstbox-nodata ng-show="rstStream.status === \'COMPLETE\' && !filteredRestaurants.length"><img class=nodata width=100 src=' + a(255) + " alt=鎵句笉鍒板晢瀹�><div class=typo-small>闄勮繎娌℃湁鎵惧埌绗﹀悎鏉′欢鐨勫晢瀹讹紝鎹釜绛涢€夋潯浠惰瘯璇曞惂</div></div></div></div>";
        window.angular.module("ng").run(["$templateCache",
            function(e) {
                e.put(n, i)
            }]),
            e.exports = n
    },
    function(e, t, a) {
        e.exports = a.p + "media/img/takeout.408a87.png"
    },
    function(e, t, a) {
        e.exports = a.p + "media/img/icon-restaurant.b3a359.png"
    },
    function(e, t) {},
    ,
    function(e, t) {
        "use strict";
        var a = ["Zero", "$rootScope", "$q", "RestaurantWrapper",
            function(e, t, a, n) {
                return function(t) {
                    var i = a.defer(),
                        r = [],
                        o = {
                            $promise: i.promise,
                            status: "LOADING",
                            restaurants: r,
                            sign: t.sign
                        },
                        s = Geohash.decode(t.geohash)[0],
                        c = Geohash.decode(t.geohash)[1],
                        u = document.querySelector("#fetchMoreRst"),
                        l = function() {
                            var a = arguments.length <= 0 || void 0 === arguments[0] ? 0 : arguments[0],
                                l = arguments.length <= 1 || void 0 === arguments[1] ? 24 : arguments[1];
                            return o.status = "LOADING",
                                e.shoppingRestaurants.query(angular.extend({
                                        latitude: s,
                                        longitude: c,
                                        limit: l,
                                        offset: a,
                                        "extras[]": ["activities"]
                                    },
                                    t),
                                    function(e) {
                                        o.status = "LOADING",
                                            n(e),
                                            angular.forEach(e,
                                                function(e) {
                                                    return e.index = r.push(e)
                                                });
                                        var a = {
                                            list: e,
                                            sign: t.sign
                                        };
                                        i.notify(a),
                                        e.length < l && (o.status = "COMPLETE", i.resolve(o), u.removeEventListener("click", h, !1))
                                    },
                                    function(e) {
                                        o.status = "ERROR",
                                            i.reject(e)
                                    })
                        };
                    l();
                    var d = 2,
                        p = {
                            1 : !0
                        },
                        h = function() {
                            "LOADING" !== o.status || p[d] || (p[d] = !0, l(24 * (d - 1)).$promise.then(function() {
                                d++,
                                d % 6 === 0 && (o.status = "NEED_USER_ACTION")
                            }))
                        },
                        m = function() {
                            o.status = "LOADING",
                                h()
                        };
                    return angular.$(window).on("scroll", h),
                        u.addEventListener("click", m, !1),
                        o
                }
            }];
        e.exports = a
    },
    function(e, t) {
        "use strict";
        var a = ["Zero", "$q", "RestaurantWrapper",
            function(e, t, a) {
                return function(n, i, r) {
                    var o = t.defer();
                    r = r || {};
                    var s = Geohash.decode(n),
                        c = s[0],
                        u = s[1],
                        l = {
                            latitude: c,
                            longitude: u,
                            limit: 100,
                            offset: 0,
                            action: "search",
                            "extras[]": "activity",
                            keyword: i
                        };
                    return r.outsideRst && (l.extra = "outside"),
                        e.shoppingRestaurants.get(l).$promise.then(function(e) {
                            var t = e.restaurant_with_foods.map(function(e) {
                                return e.restaurant
                            });
                            a(t),
                                o.resolve(e)
                        })["catch"](function() {
                            return {}
                        }),
                        o.$promise = o.promise,
                        o
                }
            }];
        e.exports = a
    },
    function(e, t, a) {
        "use strict";
        var n = a(261);
        a(262);
        var i = ["$http", "$templateCache", "templateParser", "templateBuilder", "Popover",
                function(e, t, a, i, r) {
                    var o, s, c = "placeleft placeright alignbottom",
                        u = e.get(n, {
                            cache: t
                        });
                    return u.then(function(e) {
                        o = e.data,
                        s || (s = a.parse(o))
                    }),
                        r.extend({
                            defaults: {
                                attachToBody: !0,
                                showDelay: 300,
                                animation: !1,
                                placement: "right",
                                alignment: "start"
                            },
                            render: function() {
                                var e = document.createElement("div");
                                return e.className = "rstpopover",
                                    this.dom = e,
                                    e
                            },
                            afterLocate: function(e) {
                                var t = e.placement,
                                    a = e.alignment,
                                    n = angular.$(this.dom);
                                n.removeClass(c).addClass("place" + t),
                                "end" === a && n.addClass("alignbottom")
                            },
                            willShow: function() {
                                var e = this.get("target");
                                return e && e.parentNode
                            },
                            refresh: function() {
                                var e = this.dom;
                                this.rstChanged && (e.innerHTML = i.build(s, {
                                    restaurant: this.rst
                                }), this.rstChanged = !1);
                                var t = this.get("target");
                                t && (e.style.width = t.clientWidth + "px")
                            },
                            setRst: function(e) {
                                var t = this.rst;
                                t !== e && (this.rstChanged = !0),
                                    this.rst = e
                            },
                            reset: function() {
                                this.options.target = null,
                                    this.showTimer = null,
                                    this.visible = !1
                            }
                        })
                }],
            r = ["RstPopOver",
                function(e) {
                    return {
                        restrict: "A",
                        link: function(t, a) {
                            var n = new e({
                                target: a[0]
                            });
                            n.setRst(t.restaurant),
                                t.$on("$destroy",
                                    function() {
                                        n.destroy()
                                    })
                        }
                    }
                }];
        e.exports = {
            rstPopover: r,
            RstPopOver: i
        }
    },
    function(e, t) {
        var a = "/entry/main/place/_block/rst-popover/rst-popover.html",
            n = '<div class=rstpopover-arrow></div><div class=rstpopover-title>{{restaurant.name}}</div><div class=rstpopover-flavors>{{restaurant.flavors}}</div><ul class=rstpopover-activities><li ng-repeat="activity in restaurant.activities"><i ng-bind=activity.icon_name ng-style=activity.style></i>{{activity.description || activity.name}} <span ng-bind="activity.tips !== undefined ? \'(鎵嬫満瀹㈡埛绔笓浜�)\' : \'\'"></span></li></ul><ul class=rstpopover-delivery><li>{{restaurant.piecewise_agent_fee.tips}}</li><li ng-if=restaurant.order_lead_time_text>骞冲潎<span class="color-stress plrtiny">{{restaurant.order_lead_time_text}}</span>鍒嗛挓閫佽揪</li></ul><div class=rstpopover-notice>{{restaurant.promotion_info}}</div>';
        window.angular.module("ng").run(["$templateCache",
            function(e) {
                e.put(a, n)
            }]),
            e.exports = a
    },
    function(e, t) {},
    ,
    function(e, t, a) {
        "use strict";
        a(265);
        var n = a(267),
            i = ["Zero", "RestaurantStream",
                function(e, t) {
                    return {
                        restrict: "E",
                        replace: !0,
                        templateUrl: n,
                        link: function(a, n, i) {
                            var r = Geohash.decode(a.geohash),
                                o = {
                                    latitude: r[0],
                                    longitude: r[1]
                                };
                            e.rstCategory.query(o,
                                function(e) {
                                    return a.rstCategories = e
                                }),
                                a.rstStream = a.pumStream || a.rstStream,
                                a.clickedCategory = a.pumStream ? -10001 : -1e4;
                            var s, c = function() {
                                a.rstStream.restaurants = [],
                                    a.rstStream.status = "LOADING";
                                var e = a.clickedCategory,
                                    n = a.clickedActivity,
                                    r = {
                                        geohash: a.geohash
                                    };
                                isNaN(n) || (r["activity_types[]"] = n),
                                isNaN(e) || (r["restaurant_category_ids[]"] = [e]),
                                -10001 === e && (r.is_premium = 1, delete r.restaurant_category_id),
                                    s = (new Date).getTime(),
                                    r.sign = s,
                                "true" === i.preminum && (r.is_premium = 1),
                                    t(r).$promise.then(function(e) {
                                            e.sign === s && (a.rstStream.status = "COMPLETE")
                                        },
                                        null,
                                        function(e) {
                                            a.rstStream.status = "PART_COMPLETE",
                                            e.sign === s && (a.rstStream.restaurants = a.rstStream.restaurants.concat(e.list))
                                        })
                            };
                            a.option = {},
                                a.changeOrder = function(e) {
                                    switch (a.rstStream.orderBy = e, e) {
                                        case "distance":
                                            a.otherOrder = "璺濈鏈€杩�";
                                            break;
                                        case "order_lead_time":
                                            a.otherOrder = "閰嶉€侀€熷害";
                                            break;
                                        case "minimum_order_amount":
                                            a.otherOrder = "璧烽€侀噾棰�";
                                            break;
                                        default:
                                            a.otherOrder = ""
                                    }
                                },
                                a.changeCategory = function(e) {
                                    a.clickedCategory !== e.id && (a.clickedCategory = e.id, e.sub_categories && e.sub_categories.length ? (a.subCategories = e.sub_categories, a.activeCategory = e.id) : e.id < 0 && (a.subCategories = null, a.activeCategory = null), c())
                                };
                            var u = [];
                            a.rstStream.filter = function(e) {
                                if (u[e.index] = !1, a.option.mimOrder && e.minimum_order_amount > a.option.mimOrder) return ! 1;
                                if (a.option.freeDeliver && 0 !== e.delivery_fee) return ! 1;
                                if (a.option.cash && !e.is_time_ensure) return ! 1;
                                if (a.option.receipt && !e.is_support_invoice) return ! 1;
                                if (a.option.payOnline && !e.is_online_payment) return ! 1;
                                if (a.option.eps) {
                                    if (!e.delivery_mode) return ! 1;
                                    if (1 !== e.delivery_mode.id) return ! 1
                                }
                                return a.option["new"] && !e.is_new ? !1 : (u[e.index] = !0, !0)
                            }
                        }
                    }
                }];
        e.exports = i
    },
    function(e, t) {},
    ,
    function(e, t) {
        var a = "/entry/main/place/_block/excavator/excavator.html",
            n = '<div class="excavator container"><div class=excavator-filter ng-if=rstCategories.length><span class=excavator-filter-name>鍟嗗鍒嗙被:</span> <a class=excavator-filter-item href=javascript: ng-repeat="category in rstCategories" ng-class="{\'focus\': clickedCategory === category.id && (!clickedCategory || clickedCategory < 0) , \'active\': activeCategory === category.id, \'premium\': category.id === -10001 && !pumStream}" ng-bind=category.name ng-click=changeCategory(category) ubt-click=380></a><div ng-show=subCategories class=excavator-filter-subbox><a class=excavator-filter-item href=javascript: ng-repeat="subitem in subCategories" ng-class="{\'focus\': clickedCategory === subitem.id}" ng-bind=subitem.name ng-click=changeCategory(subitem)></a></div></div></div>';
        window.angular.module("ng").run(["$templateCache",
            function(e) {
                e.put(a, n)
            }]),
            e.exports = a
    },
    function(e, t, a) {
        "use strict";
        var n = a(269);
        a(270);
        var i = ["Search", "$rootScope", "$location",
                function(e, t, a) {
                    return {
                        restrict: "A",
                        link: function(n, i) {
                            var r = i.parent().find(".searchbox"),
                                o = i.parent().find(".place-search-btn");
                            if (0 !== r.length) {
                                var s, c = function() {
                                        return (n.searchRestaurants || []).length + (n.searchFoods || []).length
                                    },
                                    u = function() {
                                        var e = c();
                                        e > 0 && r.css("display", "block")
                                    },
                                    l = function(e) {
                                        e > 0 ? setTimeout(function() {
                                                    r.css("display", "")
                                                },
                                                e) : r.css("display", "")
                                    },
                                    d = function() {
                                        var e = c();
                                        e > 0 ? u() : l()
                                    },
                                    p = t.searchText,
                                    h = null,
                                    m = 300;
                                i.on("focus",
                                    function() {
                                        void 0 === p && (p = i.val()),
                                            u()
                                    }),
                                    i.on("blur",
                                        function() {
                                            l(300)
                                        }),
                                    o.on("click",
                                        function() {
                                            p && (a.path(encodeURI("/place/" + t.geohash + "/search/" + p)), n.$apply())
                                        });
                                var f = function(e) {
                                    var t = r.find("li");
                                    t.removeClass("active");
                                    var a = c();
                                    "next" === e ? null === h ? h = 0 : (h++, h >= a && (h = 0)) : "prev" === e && (null === h ? h = a - 1 : (h--, 0 > h && (h = a - 1))),
                                        angular.$(t[h]).addClass("active")
                                };
                                i.bind("keyup",
                                    function(a) {
                                        var c = a.which || a.keyCode;
                                        if (40 === c) return void f("next");
                                        if (38 === c) return void f("prev");
                                        if (13 === c) {
                                            var u = r.find("li.active a");
                                            return void(u.length > 0 ? u[0].click() : o[0].click())
                                        }
                                        if (27 === c) return l(),
                                            void i[0].blur();
                                        var g = i.val();
                                        if (g) {
                                            if (p === g) return;
                                            s && (clearTimeout(s), s = null),
                                                s = setTimeout(function() {
                                                        e(t.geohash, g, {
                                                            limit: 10
                                                        }).$promise.then(function(e) {
                                                            return g = i.val(),
                                                            "" !== g && (n.searchRestaurants = e[0], n.searchFoods = e[1]),
                                                                h = null,
                                                                d(),
                                                                e
                                                        }),
                                                            s = null
                                                    },
                                                    m)
                                        } else s && (clearTimeout(s), s = null),
                                            n.searchRestaurants = [],
                                            n.searchFoods = [],
                                            d();
                                        p = g,
                                            t.searchText = g
                                    })
                            }
                        }
                    }
                }],
            r = function() {
                return {
                    restrict: "EA",
                    replace: !0,
                    templateUrl: n
                }
            };
        e.exports = {
            autocomplete: i,
            searchInput: r
        }
    },
    function(e, t) {
        var a = "/entry/main/place/_block/search-input/search-input.html",
            n = '<div class=place-search role=search><a class="place-search-btn icon-search" ubt-click=403 ng-attr-ubt-data-keyword={{searchText}} title=鎼滅储鍟嗗鎴栫編椋�></a><label for=globalsearch>鎼滅储鍟嗗鎴栫編椋�</label><input id=globalsearch class=place-search-input ng-model=searchText autocomplete placeholder=鎼滅储鍟嗗,缇庨...><div class=searchbox><div class="searchbox-list searchbox-rstlist" ng-show="searchRestaurants && searchRestaurants.length > 0" ng-class="{ \'show-separator\': searchFoods && searchFoods.length > 0 }"><ul><li ng-repeat="restaurant in searchRestaurants | orderBy: [ \'-is_opening\', \'order_lead_time\' ] | limitTo: 5"><a ng-href=shop/{{restaurant.id}} ubt-click=404><span class=time ng-if=restaurant.order_lead_time_text>{{restaurant.order_lead_time_text}}鍒嗛挓</span> <span class=name>{{restaurant.name}}</span></a></li></ul></div><div class="searchbox-list searchbox-foodlist" ng-show="searchFoods && searchFoods.length > 0"><ul><li ng-repeat="food in searchFoods  | limitTo: 5"><span class=price>&yen; {{food.price}}</span> <span class=food-wrapper><a ng-href=shop/{{food.restaurant.id}}#food/{{food.id}} class=name ubt-click=404>{{food.name}}</a> <a ng-href=shop/{{food.restaurant.id}} class=restaurant ubt-click=404>{{food.restaurant.name}}</a></span></li></ul></div></div></div>';
        window.angular.module("ng").run(["$templateCache",
            function(e) {
                e.put(a, n)
            }]),
            e.exports = a
    },
    function(e, t) {},
    ,
    function(e, t, a) {
        "use strict";
        var n = a(273);
        a(274),
            e.exports = {
                templateUrl: n,
                controller: ["$scope", "$routeParams", "$rootScope", "RestaurantStream",
                    function(e, t, a, n) {
                        return a.geohash = e.geohash = t.geohash,
                            /[\Wailo_]|^$/.test(a.geohash || "") ? (localStorage.removeItem("GEOHASH"), void(location.href = "/home")) : (localStorage.setItem("GEOHASH", e.geohash), void(e.pumStream = n({
                                    is_premium: 1,
                                    geohash: e.geohash
                                })))
                    }]
            }
    },
    function(e, t, a) {
        var n = "/entry/main/place/premium/premium.html",
            i = '<div class="container clearfix"><div search-input></div><div location><i class=icon-arrow-right></i>鍝佺墝鍟嗗</div></div><div class="place-tab clearfix container premium"><span class=premium-title>鍝佺墝鍟嗗</span> <span class=premium-desc>鍚冪殑鏇村畨蹇�, 鏈嶅姟鏇磋创蹇�</span></div><excavator preminum=true></excavator><div class="place-rstbox premium-rstbox container clearfix"><rst-view data="filteredRestaurants = (pumStream.restaurants | filter: rstStream.filter | filter: otherFilter | orderBy: [ \'-is_opening\', pumStream.orderBy || \'index\' ])"></rst-view><div loading type=normal ng-if="pumStream.status === \'LOADING\'"></div><div id=fetchMoreRst ng-hide="rstStream.status === \'LOADING\' || pumStream.status === \'COMPLETE\'">鐐瑰嚮鍔犺浇鏇村鍟嗗...</div><div class=place-rstbox-nodata ng-if="pumStream.status === \'COMPLETE\' && !filteredRestaurants.length"><img class=nodata width=100 src=' + a(255) + " alt=鎵句笉鍒板晢瀹�><div class=typo-small>闄勮繎娌℃湁绗﹀悎鎮ㄧ殑绛涢€夌殑鍝佺墝棣嗗晢瀹讹紝鎹釜绛涢€夋潯浠惰瘯璇曞惂</div></div></div>";
        window.angular.module("ng").run(["$templateCache",
            function(e) {
                e.put(n, i)
            }]),
            e.exports = n
    },
    function(e, t) {},
    ,
    function(e, t, a) {
        "use strict";
        var n = a(277);
        a(278);
        var i = ["$scope", "$rootScope", "$routeParams", "Search", "RestaurantWrapper", "Zero", "UBT", "LocalCart",
            function(e, t, a, n, i, r, o, s) {
                var c = a.geohash,
                    u = a.keyword;
                t.searchText = u,
                    e.keyword = u,
                    e.geohash = c,
                    e.status = "LOADING",
                    e.resultFilter = "",
                    e.outsideRstsVisible = !1,
                    e.hideOutsideRsts = function() {
                        e.outsideRstsVisible = !1
                    },
                    e.setCart = function(e, t) {
                        var a = new s(e);
                        a.setEntity(t)
                    },
                    n(c, u, {
                        hasOutside: 1
                    }).$promise.then(function(t) {
                        var a = t.restaurant_with_foods;
                        a.forEach(function(e) {
                            return e.restaurant.limitTo = 3
                        }),
                            e.rstGroups = a,
                            e.status = "COMPLETE"
                    }),
                    e.rstUbtClick = function(e, t) {
                        for (var a = e.target; a && "A" !== a.tagName;) a = a.parentNode;
                        o.send("EVENT", {
                            id: t,
                            params: {
                                restaurant_id: a.getAttribute("data-rst-id")
                            }
                        })
                    }
            }];
        e.exports = {
            templateUrl: n,
            controller: i
        }
    },
    function(e, t, a) {
        var n = "/entry/main/place/search/search.html",
            i = '<div class="container clearfix"><div class=search-location location><i class=icon-arrow-right></i>鎼滅储缁撴灉</div><div search-input></div></div><div ng-show=!outsideRstsVisible class=container><div class=search-loading ng-if="status === \'LOADING\'"><img src=' + a(119) + " alt=姝ｅ湪鍔犺浇></div><div class=search-nodata ng-if=\"status === 'COMPLETE' && !rstGroups.length\" ubt-visit=506 ng-attr-ubt-data-keyword={{keyword}}><img class=nodata width=100 src=" + a(255) + ' alt=鎵句笉鍒板晢瀹�><div class=typo-small>闄勮繎娌℃湁绗﹀悎鎮ㄧ殑鍏抽敭瀛楃殑鍟嗗鍜岀編椋燂紝鎹釜鍏抽敭瀛楄瘯璇曞惂</div></div><div class=search-outsidetip ng-show="outsideRst.name && resultFilter != \'food\'" ng-class="{ standalone: rstGroups.length === 0}">鍙︽湁<b>{{outsideRst.name}}</b>绛� <span class=color-stress>{{outsideRsts.length}}</span> 瀹朵笌 <span class=color-stress>銆寋{keyword}}銆�</span>鐩稿叧鐨勫晢瀹朵笉鍦ㄩ厤閫佽寖鍥村唴 <a href=javascript: ng-click="outsideRstsVisible = true" ubt-click=513>绔嬪嵆鏌ョ湅</a></div><table ng-repeat="group in rstGroups | orderBy: [ \'-is_opening\', \'status\' ] track by group.restaurant.id" class="typo-table search-foodtable"><tr><th colspan=4><div ng-if="group.restaurant.status === 5" class="search-rststatus search-rststatus-bookonly" ng-bind="\'鍙璁紝\' + group.restaurant.next_time + \'鍚庨€侀\'"></div><div ng-if=!group.restaurant.is_opening class="search-rststatus search-rststatus-relaxing" ng-bind="group.restaurant.status === 2 ? \'鍟嗗绻佸繖,涓嶆帴鍙楁柊鍗昞': \'鍟嗗浼戞伅,鏆備笉鎺ュ崟\'"></div><h4 class=typo-h5><a ng-href="{{\'/shop/\' + group.restaurant.id}}">{{group.restaurant.name}}</a><div class=rstblock-activity><i ng-repeat="activity in group.restaurant.activities" ng-bind=activity.icon_name ng-style="activity.icon_color ? {background: (\'#\' + activity.icon_color)} : \'\'"></i></div></h4><span rate-star rating=group.restaurant.rating></span> <small class=search-sales>鏈堝敭<span>{{group.restaurant.recent_order_num}}</span></small> <small>{{group.restaurant.delivery_text}}</small> <small ng-if=group.restaurant.order_lead_time_text>骞冲潎<span class=highlight>{{group.restaurant.order_lead_time_text}}</span>鍒嗛挓閫佽揪</small><tr ng-repeat="food in group.foods | limitTo: group.restaurant.limitTo track by $index"><td><a ng-if=group.restaurant.is_opening ng-href=/shop/{{group.restaurant.id}}#{{food.id}} ubt-click=510 ubt-data-restaurant_id={{group.restaurant.id}} ubt-data-dish_id={{food.id}}><span>{{food.name}}<br><small>{{food.description}}</small></span></a> <span ng-if=!group.restaurant.is_opening>{{food.name}}<br><small>{{food.description}}</small></span><td class=search-col2><a ng-if=group.restaurant.is_opening ng-href=/shop/{{group.restaurant.id}}#{{food.id}}>&yen; {{food.price}}</a> <span ng-if=!group.restaurant.is_opening>&yen; {{food.price}}</span><td class=search-col3><small ng-if=!group.restaurant.is_opening ng-bind="group.restaurant.status === 2 ? \'鍟嗗绻佸繖\' : \'鍟嗗浼戞伅\'"></small> <a class="btn btn-sm" ng-class="{ \'bookonly\': group.restaurant.status === 5 }" ng-if=group.restaurant.is_opening ng-href=/shop/{{group.restaurant.id}}#{{food.id}} ng-click="setCart(group.restaurant.id, food.id)" ng-bind="group.restaurant.status === 1 ? \'鍘昏喘涔癨': \'鍙璁'" ubt-click=511 ubt-data-restaurant_id={{food.restaurant.id}} ubt-data-dish_id={{food.id}}></a><td class=search-col4><span rate-star rating=food.rating></span> <span class=search-food-ratingcount ng-if="food.rating_count > 0 ">({{food.rating_count}})</span><div>鏈堝敭{{food.month_sales}}浠�</div><tr ng-if="group.restaurant.limitTo === 3 && group.foods.length > 3 " class=search-foodtable-expandrow><td colspan=4>鏈晢瀹惰繕鏈�<strong class=highlight>{{group.foods.length - 3}}</strong>浠界浉鍏崇編椋燂紝 <a class=search-foodtable-showmore ng-click="group.restaurant.limitTo = group.foods.length " href=JavaScript: ubt-click=512 ubt-data-restaurant_id={{group.restaurant.id}}>鏄剧ず鍏ㄩ儴鐩稿叧缇庨<i class=icon-arrow-down></i></a></table></div>';window.angular.module("ng ").run(["$templateCache ",function(e){e.put(n,i)}]),e.exports=n},function(e,t){},,function(e,t,a){"use strict ";var n=a(281);a(282);var i=["$scope ","$routeParams ","Zero ","notifyServerError ",function(e,t,a,n){var i=t.id;i&&a.template.get({id:i}).$promise.then(function(t){return e.activity=t})["
        catch "](function(e){return n(e)}),e.geohash&&a.content.query({geohash:e.geohash,consumer:3},function(t){e.activities=t,t.forEach(function(e){e.href=2===e.type?" / activity / "+e.template_id:e.link,e.target=2===e.type?"":"_blank "})})}];e.exports={templateUrl:n,controller:i}},function(e,t){var a=" / entry / main / activity / activity.html ",n='<div class="container clearfix "><div location ng-if=geohash><i class=icon-arrow-right></i>{{activity.title}}</div></div><div class=container><div class=activity><div class=activity-banner ng-if=activity.header_image_url><img ng-src=" {
            {
                activity.header_image_url | imgOptimize
            }
        }
        " alt={{activitie.title}}></div><div class="activity - content typo "><div ng-bind-html="activity.content | toTrusted "></div></div><div class=activity-list><h1>娲诲姩鍒楄〃</h1><ul><li ng-repeat="act in activities " ng-class=" {
            active: act.id === activity.id
        }
        "><a ng-href={{act.href}} target={{act.target}}>{{act.title}}</a></li></ul></div></div></div>';window.angular.module("ng ").run(["$templateCache ",function(e){e.put(a,n)}]),e.exports=a},function(e,t){},,function(e,t,a){"use strict ";var n=a(285);a(286);var i=a(31);angular.module("eleme.page ").factory("localCartView ",a(288)).factory("CartButtonView ",a(289).CartButtonView).factory("CartVirtualButtonView ",a(289).CartVirtualButtonView).directive("shopCart ",a(290)).directive("shopCartbutton ",a(295)).directive("shopCartHelper ",a(299)).directive("shopCarthelperbutton ",a(303)).directive("shopGroupswitcher ",a(307)).directive("shopSpecmenu ",a(311)).directive("shopGuide ",a(316)).directive("shopNav ",a(322)).directive("shopMenu ",a(326)).directive("shopMenuItem ",a(330)).directive("shopIteminfo ",a(332)).directive("commentItem ",a(336)).directive("itemRatingList ",a(340)).directive("shopRate ",a(344)).directive("shopBulletin ",a(348)).directive("shopInfo ",a(353)).directive("sideTools ",a(357));var r={},o=["$rootScope ","$scope ","$routeParams ","$location ","$q ","PlaceStorage ","Zero ","notifyServerError ","setFootPrint ",function(e,t,a,n,o,s,c,u,l){e.layoutState={type:"shop ",hideSidebar:!0},t.$on("$destroy ",function(){return e.layoutState={}});var d=a.id;if(t.shopAction=a.action||"menu ",r.id!==d){r.id=d;var p={id:d,"extras[]":["activities ","license ","identification ","albums ","flavors "]};t.geohash&&(p.latitude=i.decode(t.geohash)[0],p.longitude=i.decode(t.geohash)[1]),r.promise=c.shoppingRestaurant(d).get(p).$promise}var h=function(){return c.restaurant.get({version:"v3 ",nameForUrl:d,geohash:t.geohash}).$promise.then(function(e){n.url(" / shop / "+e.id)})};t.shopCache=r,r.promise.then(function(n){if(656683===n.id){var r={name:"鍙綋蹇嵂",address:"涓婃捣甯傛櫘闄€鍖哄ぇ娓℃渤璺�718鍙�",description:"濡傞渶鍜ㄨ鐢ㄨ嵂淇℃伅锛岃鎷旀墦鑽笀鐢佃瘽锛�400锛�631锛�3888 ",image_path:"http: //fuss10.elemecdn.com/1/8a/5026ac398ff30789eb16081e799acjpeg.jpeg",license:{business_license_image:"http://fuss10.elemecdn.com/8/3d/2a234e5103a60607fbad591fed055jpeg.jpeg"}};angular.extend(n,r)}if(l(n),n.tab=a.action||"index",n.filter="default",n.displayType="grid",t.shop=n,t.SEO.title=n.name+"澶栧崠_"+n.name+"鑿滃崟|鐢佃瘽_"+n.name+"缃戜笂璁㈤ - "+n.address,t.SEO.keywords=n.name+"澶栧崠锛�"+n.name+"鑿滃崟锛�"+n.name+"鐢佃瘽",t.SEO["mobile-agent"]="format=html5;url=https://h5.ele.me/shop/#id="+n.id,!localStorage.getItem("GEOHASH")){var o=i.encode(n.latitude,n.longitude);try{localStorage.setItem("GEOHASH",o)}catch(c){}e.place=s(o)}})["catch"](function(e){return 404===e.status?h():void 0})}];e.exports={templateUrl:n,controller:o}},function(e,t){var a="/entry/main/shop/shop.html",n='<div shop-guide data=shop isdisabled=shop.disabled></div><div shop-nav data=shop filter-data=shop.filter display-type=shop.displayType shop-action=shopAction></div><div class="shopmain clearfix container"><div ng-if="shopAction === \'menu\'" shop-menu shop-cache=shopCache filter-data=shop.filter display-type=shop.displayType class=shopmenu perf-click=desktop/201></div><div ng-if="shopAction === \'rate\'" shop-rate class=shoprate perf-click=desktop/202></div><div ng-if="shopAction === \'info\'" shop-info data=shop class=shopinfo perf-click=desktop/203></div><div shop-bulletin data=shop></div></div><div side-tools></div>';window.angular.module("ng").run(["$templateCache",function(e){e.put(a,n)}]),e.exports=a},function(e,t){},,function(e,t){"use strict";function a(e){if(Array.isArray(e)){for(var t=0,a=Array(e.length);t<e.length;t++)a[t]=e[t];return a}return Array.from(e)}function n(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}var i=function(){function e(e,t){for(var a=0;a<t.length;a++){var n=t[a];n.enumerable=n.enumerable||!1,n.configurable=!0,"value"in n&&(n.writable=!0),Object.defineProperty(e,n.key,n)}}return function(t,a,n){return a&&e(t.prototype,a),n&&e(t,n),t}}();e.exports=["LocalCart","$timeout","$q","$document","$rootScope","$sce",function(e,t,r,o,s,c){var u=function(){function o(){n(this,o),this.currentGroupIndex=0,this.$expanded=!1,this.vm={}}return i(o,[{key:"init",value:function(){var t=arguments.length<=0||void 0===arguments[0]?-1:arguments[0],a=arguments.length<=1||void 0===arguments[1]?-1:arguments[1],n=arguments.length<=2||void 0===arguments[2]?0:arguments[2],i=arguments.length<=3||void 0===arguments[3]?{}:arguments[3],r=arguments.length<=4||void 0===arguments[4]?[]:arguments[4],o=arguments.length<=5||void 0===arguments[5]?{}:arguments[5],c=this,u=arguments.length<=6||void 0===arguments[6]?0:arguments[6],l=arguments.length<=7||void 0===arguments[7]?{}:arguments[7];return this.$localCart=new e(t),this.$restaurantStatus=a,this.$minimumAmount=n,this.$menuMap=i,this.$menuArray=r,this.$piecewiseAgentFee=l,this.$el=o,this.$basket=o.find("#shopbasket"),this.$helper=o.find("#shophelper"),this.cartHelper={group:[]},this.$deliveryFee=u,this.currentGroupIndex=0,this.$expanded=!1,this.vm=this.updateVM(),s.$$postDigest(function(){return c.toggleCart(44)}),this}},{key:"filterEntities",value:function(e){return this.vm.groups.map(function(t){return t.filter(function(t){return t.id===e})}).reduce(function(e,t){return e.push(t[0]||{}),e},[])}},{key:"updateVM",value:function(){var e,t=this,n=[],i=this.$localCart.groups.map(function(e,a){return e.entities.reduce(function(e,i){var r,o=t.$menuMap[i.id];if(!o)return e;for(var s=1;s<=i.quantity;s++)n.push(o);var c=[i.id,i.quantity,a,o.name,o.original_price||o.price],u=(r=t.$localCart).setEntity.apply(r,c);return e.concat([u.entity])},[])}),r=(e=[]).concat.apply(e,a(i)),o=this.$piecewiseAgentFee.rules||[],s=1!==o.length,u=r.reduce(function(e,t){return e+t.quantity},0),l=r.reduce(function(e,t){return e+t.quantity*t.price},0).toFixed(2),d=0;s||(d=1*(this.$minimumAmount-l).toFixed(2));var p=this.setCheckoutButton(this.$restaurantStatus,!u,d);if(this.cartHelper.show=20>d&&l<this.$minimumAmount&&d<.3*this.$minimumAmount,this.cartHelper.show&&!this.cartHelper.group.length){var h,m=(h=[]).concat.apply(h,a(this.$menuArray.map(function(e){return e.specfoods}))).filter(function(e){return e.stock>0}),f=m.filter(function(e){return e.price>=d&&e.price<=d+5}).sort(function(e,t){return e.price-t.price}),g=m.filter(function(e){return e.price<d||e.price>d+5}).sort(function(e,t){return e.price-t.price});this.cartHelper.group=f.concat(g)}var v=parseInt(l,10),y=o.filter(function(e){return v>=e.price}).pop(),b=o.filter(function(e){return v<e.price}).shift(),_=o.indexOf(b)===o.length-1,k="";if(0!==v&&s)if(b){var w=b.price-l,$=y.fee-b.fee,x="鍑忛厤閫佽垂&yen;"+$.toFixed(2);_&&(x=0===b.fee?"鍏嶉厤閫佽垂":"閰嶉€佽垂&yen;"+b.fee),k="鍐嶄拱&yen;"+w.toFixed(2)+"<br>"+x}else k=0===y.fee?"鍏嶉厤閫佽垂":"閰嶉€佽垂&yen;"+y.fee;s||(k="閰嶉€佽垂&yen;"+this.$deliveryFee),k=c.trustAsHtml(k);var C=[],S=n.reduce(function(e,t){return e+(t.packing_fee||0)},0);return{groups:i,quantity:u,total:l,button:p,cartHelper:this.cartHelper,extras:C,picewiseText:k,packingFee:S}}},{key:"setCheckoutButton",value:function(e,t,a){return this.$localCart.getOrderState(t,a,e)}},{key:"checkout",value:function(){return this.$localCart.toCheckPage()}},{key:"setEntity",value:function(e,t){angular.isNumber(t)||(t=1);var a=this.$localCart.setEntity(e.id||e.food_id,t,this.currentGroupIndex,e.name,e.price);if(a.action)return this.viewDispatcher(a)}},{key:"updateFromInput",value:function(e,t){if(t){var a=Math.abs(parseInt(t,10))||1;return a>65535?(t=1,this.setEntity(e,1)):this.setEntity(e,a)}}},{key:"addEntity",value:function(e){return this.setEntity(e,+e.quantity+1)}},{key:"subEntity",value:function(e){return this.setEntity(e,+e.quantity-1)}},{key:"viewDispatcher",value:function(e){var a=this,n=e.entity,i=e.action;return r.all().then(function(){switch(i){case"ENTITY_ADD":return r.all().then(function(){return a.vm=a.updateVM(),a.$expanded?void 0:(a.$basket.css({height:"auto"}),a.toggleCart())});case"ENTITY_CREATE":return a.addAnimate().then(function(){return a.vm=a.updateVM(),a.$expanded=!1,t(function(){a.$basket.css({height:"auto"});var e=a.$basket.prop("offsetHeight");a.$basket.css({height:"99999px"}),a.toggleCart(e)},0)});case"ENTITY_SUB":if(a.vm=a.updateVM(),a.$expanded)return;return a.toggleCart();case"ENTITY_DESTROY":return a.destroyAnimate(n.id).then(function(){a.vm=a.updateVM()});default:a.vm=a.updateVM()}}).then(function(){s.$broadcast("cart:updateEntity",{entity:n,action:i})})}},{key:"addAnimate",value:function(){return this.$basket.css({height:"99999px"}),r.all()}},{key:"destroyAnimate",value:function(){var e=this,t=arguments.length<=0||void 0===arguments[0]?-1:arguments[0],a=this.$el.find('[entityid="'+t+'"]'),n=a.prop("offsetHeight"),i=this.$basket.prop("offsetHeight"),r=i-n;return this.$basket.css({height:i+"px"}),a.remove(),this.$expanded=!1,this.toggleCart(r).then(function(){e.$basket.css({height:"auto"})})}},{key:"toggleCart",value:function(e,t){var a=this,n=r.defer(),i=angular.extend({duration:250,complete:function(){a.$expanded=!a.$expanded,a.$basket.css({height:"auto"}),n.resolve()}},t);if(this.$expanded)this.$basket.animate({top:"0px"},i),this.$helper.removeClass("open");else{var o=e||this.$basket.prop("offsetHeight");this.$basket.animate({top:"-"+o+"px"},i)}return n.promise}},{key:"changeGroup",value:function(e){var a=this;return this.vm=this.updateVM(),this.$expanded=!1,this.currentGroupIndex=e,this.$basket.css({height:"99999px"}),t(function(){a.$basket.css({height:"auto"});var e=a.$basket.prop("offsetHeight");a.$basket.css({height:"99999px"}),a.toggleCart(e)},0)}},{key:"createGroup",value:function(){var e=this.$localCart.groups.length;this.$localCart.createGroup(e),this.changeGroup(e)}},{key:"clearGroup",value:function(e){var t=this,a=this.$localCart.clearGroup(e),n=a.group,i=a.action,r=this.$basket[0].querySelectorAll("[entityid]"),o=this.$basket.prop("offsetHeight"),c=[].slice.call(r).reduce(function(e,t){return e+angular.$(t).prop("offsetHeight")},0),u=o-c;return this.$basket.css({height:o+"px"}),this.$expanded=!1,this.toggleCart(u).then(function(){t.vm=t.updateVM(),s.$broadcast("cart:clearGroup",{group:n,action:i})})}},{key:"removeGroup",value:function(e){var t=this;return this.clearGroup(e).then(function(){return t.$localCart.removeGroup(e),0===e||0===t.currentGroupIndex?t.changeGroup(0):t.currentGroupIndex>=e?t.changeGroup(e-1):t.changeGroup(t.currentGroupIndex)})}}]),o}();return new u}]},function(e,t){"use strict";function a(e){if(Array.isArray(e)){for(var t=0,a=Array(e.length);t<e.length;t++)a[t]=e[t];
            return a
    }
return Array.from(e)
}
function n(e, t) {
    if ("function" != typeof t && null !== t) throw new TypeError("Super expression must either be null or a function, not " + typeof t);
    e.prototype = Object.create(t && t.prototype, {
        constructor: {
            value: e,
            enumerable: !1,
            writable: !0,
            configurable: !0
        }
    }),
    t && (Object.setPrototypeOf ? Object.setPrototypeOf(e, t) : e.__proto__ = t)
}
function i(e, t) {
    if (! (e instanceof t)) throw new TypeError("Cannot call a class as a function")
}
var r = function(e, t, a) {
        for (var n = !0; n;) {
            var i = e,
                r = t,
                o = a;
            n = !1,
            null === i && (i = Function.prototype);
            var s = Object.getOwnPropertyDescriptor(i, r);
            if (void 0 !== s) {
                if ("value" in s) return s.value;
                var c = s.get;
                if (void 0 === c) return;
                return c.call(o)
            }
            var u = Object.getPrototypeOf(i);
            if (null === u) return;
            e = u,
                t = r,
                a = o,
                n = !0,
                s = u = void 0
        }
    },
    o = function() {
        function e(e, t) {
            for (var a = 0; a < t.length; a++) {
                var n = t[a];
                n.enumerable = n.enumerable || !1,
                    n.configurable = !0,
                "value" in n && (n.writable = !0),
                    Object.defineProperty(e, n.key, n)
            }
        }
        return function(t, a, n) {
            return a && e(t.prototype, a),
            n && e(t, n),
                t
        }
    } (), s = ["$rootScope", "$q",
        function(e, t) {
            return function() {
                function a() {
                    var t = arguments.length <= 0 || void 0 === arguments[0] ? -1 : arguments[0],
                        n = arguments.length <= 1 || void 0 === arguments[1] ? {}: arguments[1],
                        r = this,
                        o = arguments.length <= 2 || void 0 === arguments[2] ? [] : arguments[2],
                        s = arguments.length <= 3 || void 0 === arguments[3] ? {
                                name: "",
                                original_price: 0,
                                price: 0
                            }: arguments[3];
                    i(this, a),
                        this.$id = t,
                        this.$name = s.name,
                        this.$price = s.original_price || s.price,
                        this.$specfoods_id = o,
                        this.$localCartView = n,
                        this.$entities = [],
                        this.quantity = 0,
                        this.$update(),
                        this.$bindUpdateEvent(),
                        e.$on("cart:clearGroup",
                            function() {
                                r.$update()
                            })
                }
                return o(a, [{
                    key: "$bindUpdateEvent",
                    value: function() {
                        var t = this;
                        e.$on("cart:updateEntity",
                            function(e, a) {
                                var n = a.entity;
                                n.id === t.$id && t.$update()
                            })
                    }
                },
                    {
                        key: "$update",
                        value: function() {
                            this.$entities = this.$localCartView.filterEntities(this.$id),
                                this.quantity = this.$count(this.$entities)
                        }
                    },
                    {
                        key: "$count",
                        value: function(e) {
                            return e.reduce(function(e, t) {
                                    return e + (0 | t.quantity)
                                },
                                0)
                        }
                    },
                    {
                        key: "$getEntity",
                        value: function() {
                            var e = this.$entities[this.$localCartView.currentGroupIndex] || {};
                            return e.id ? e: {
                                    id: this.$id,
                                    quantity: 0,
                                    name: this.$name,
                                    price: this.$price
                                }
                        }
                    },
                    {
                        key: "animate",
                        value: function(e) {
                            if (!e) return t.all();
                            var a = e.getBoundingClientRect(),
                                n = this.$localCartView.$el.find(".shop-cartfooter")[0].getBoundingClientRect(),
                                i = .5,
                                r = 500,
                                o = this.$localCartView.$el.find(".shop-flyitem").clone();
                            return angular.$("body").append(o),
                                o.css({
                                    top: a.top + "px",
                                    left: a.left + "px"
                                }),
                                function() {
                                    var e = t.defer();
                                    return o.animate({
                                            left: n.left + "px"
                                        },
                                        r, "linear"),
                                        o.animate({
                                                top: a.top - a.top / 4 + "px"
                                            },
                                            r * i, "easeOutCubic",
                                            function() {
                                                return e.resolve()
                                            }),
                                        e.promise
                                } ().then(function() {
                                    var e = t.defer();
                                    return o.animate({
                                            top: n.top + "px"
                                        },
                                        r * (1 - i), "easeInCubic",
                                        function() {
                                            return e.resolve()
                                        }),
                                        e.promise
                                }).then(function() {
                                    return o.remove()
                                })
                        }
                    },
                    {
                        key: "add",
                        value: function() {
                            var e = this,
                                t = arguments.length <= 0 || void 0 === arguments[0] ? {}: arguments[0];
                            return this.animate(t.target).then(function() {
                                return e.$localCartView.addEntity(e.$getEntity())
                            })
                        }
                    },
                    {
                        key: "sub",
                        value: function() {
                            return this.$localCartView.subEntity(this.$getEntity())
                        }
                    },
                    {
                        key: "update",
                        value: function(e) {
                            return this.$localCartView.updateFromInput(this.$getEntity(), e)
                        }
                    }]),
                    a
            } ()
        }], c = ["$rootScope", "CartButtonView",
        function(e, t) {
            return function(t) {
                function s() {
                    var e = arguments.length <= 0 || void 0 === arguments[0] ? [] : arguments[0],
                        t = arguments.length <= 1 || void 0 === arguments[1] ? {}: arguments[1],
                        a = arguments.length <= 2 || void 0 === arguments[2] ? {}: arguments[2];
                    i(this, s),
                        r(Object.getPrototypeOf(s.prototype), "constructor", this).call(this, -1, a, e),
                        angular.extend(this, t)
                }
                return n(s, t),
                    o(s, [{
                        key: "$update",
                        value: function() {
                            var e, t = this;
                            this.$specGroups = this.$specfoods_id.map(function(e) {
                                return t.$localCartView.filterEntities(e)
                            }),
                                this.quantity = this.$count((e = []).concat.apply(e, a(this.$specGroups)))
                        }
                    },
                        {
                            key: "$bindUpdateEvent",
                            value: function() {
                                var t = this;
                                e.$on("cart:updateEntity",
                                    function(e, a) {
                                        var n = a.entity,
                                            i = t.$specfoods_id.some(function(e) {
                                                return n.id === e
                                            });
                                        i && t.$update()
                                    })
                            }
                        },
                        {
                            key: "$getEntity",
                            value: function() {
                                var e = this,
                                    t = this.$specGroups.filter(function(t) {
                                        return t.some(function(t) {
                                            return t.id === e.$id
                                        })
                                    })[0];
                                return angular.isArray(t) ? t[this.$localCartView.currentGroupIndex] : {
                                        id: this.$id,
                                        quantity: 0,
                                        name: this.$menuFood.name,
                                        price: this.$menuFood.original_price || this.$menuFood.price
                                    }
                            }
                        },
                        {
                            key: "add",
                            value: function(e) {
                                var t = arguments.length <= 1 || void 0 === arguments[1] ? {}: arguments[1];
                                return this.$id = e,
                                    this.$menuFood = t,
                                    r(Object.getPrototypeOf(s.prototype), "add", this).call(this)
                            }
                        }]),
                    s
            } (t)
        }]; e.exports = {
    CartButtonView: s,
    CartVirtualButtonView: c
}
},
function(e, t, a) {
    "use strict";
    a(291);
    var n = a(294);
    e.exports = ["$rootScope", "$q", "$timeout", "localCartView",
        function(e, t, a, i) {
            return {
                templateUrl: n,
                scope: {
                    cartLink: "="
                },
                link: function(e, t) {
                    e.cartLink.then(function(a) {
                        var n = a.restaurantId,
                            r = a.restaurantStatus,
                            o = a.minimumAmount,
                            s = a.menuMap,
                            c = a.menuArray,
                            u = a.deliveryFee,
                            l = a.piecewiseAgentFee;
                        e.shopCart = i.init(n, r, o, s, c, t, u, l)
                    }),
                        e.checkout = function(t) {
                            e.shopCart.vm.button.name = "SUBMITTING",
                                e.shopCart.vm.button.disabled = !0,
                                e.shopCart.vm.button.text = "缁撶畻涓�...",
                                t.stopPropagation(),
                                i.checkout()
                        },
                        e.showCartHelper = function() {
                            angular.$("#shophelper").addClass("open")
                        }
                }
            }
        }]
},
function(e, t) {},
,
,
function(e, t) {
    var a = "/entry/main/shop/_block/shop-cart/shop-cart.html",
        n = '<div class=shop-cart><div class=shop-cartbasket id=shopbasket><div shop-groupswitcher cart=shopCart></div><div class=shop-cartbasket-empty ng-if=!shopCart.vm.groups[shopCart.currentGroupIndex].length><div class=icon-cart></div><p>璐墿杞︽槸绌虹殑锛岃刀绱ч€夎喘鍚�</p></div><div ng-repeat="item in shopCart.vm.groups[shopCart.currentGroupIndex]" class=shop-cartbasket-tablerow entityid={{item.id}}><div class="cell itemname" ng-bind=item.name title={{item.name}}></div><div class="cell itemquantity"><button ng-click="shopCart.subEntity(item, $event)">-</button><input ng-model=item.quantity ng-blur="shopCart.updateFromInput(item, item.quantity)"><button ng-click="shopCart.addEntity(item, $event)">+</button></div><div class="cell itemtotal" ng-bind="\'&yen;\' + ((item.price * item.quantity).toFixed(2) | number)"></div></div><div class=shop-cartbasket-tablerow ng-if=shopCart.packingFee><div class="cell itemname">椁愮洅璐�</div><div class="cell itemquantity"></div><div class="cell itemtotal">&yen;{{shopCart.packingFee}}</div></div></div><div class=shop-cartfooter ng-click=shopCart.toggleCart()><span class="icon-cart shop-carticon"><span class=shop-cartpieces ng-bind=shopCart.vm.quantity ng-if="shopCart.vm.quantity > 0"></span></span><p class="shop-cartfooter-text price" ng-if="shopCart.vm.quantity > 0" ng-bind="shopCart.vm.total | number"></p><div class="shop-cartfooter-text extras" ng-if="shopCart.vm.extras.length && !shopCart.vm.button.disabled"><p ng-repeat="extra in shopCart.vm.extras">{{extra.name}}&yen;{{extra.fee}}</p></div><div class="shop-cartfooter-text extras" ng-bind-html=shopCart.vm.picewiseText></div><button class=shop-cartfooter-checkout ng-class="{disabled: shopCart.vm.button.name !== \'CAN_ORDER\'}" ng-disabled=shopCart.vm.button.disabled ng-bind=shopCart.vm.button.text ng-click=checkout($event)></button></div><div class=shop-carthelper-opener ng-class="{show: shopCart.cartHelper.show}" ng-click=showCartHelper()></div><div id=shophelper shop-cart-helper group=shopCart.cartHelper.group cart=shopCart></div><div class=shop-flyitem></div></div>';
    window.angular.module("ng").run(["$templateCache",
        function(e) {
            e.put(a, n)
        }]),
        e.exports = a
},
function(e, t, a) {
    "use strict";
    var n = Function.prototype.bind;
    a(296);
    var i = a(298),
        r = {},
        o = [],
        s = function(e) {
            return o.filter(function(t) {
                return e.some(function(e) {
                    return t[0] === e
                })
            })[0]
        };
    e.exports = ["localCartView", "CartButtonView", "CartVirtualButtonView",
        function(e, t, a) {
            return {
                templateUrl: i,
                scope: {
                    menuFood: "=food",
                    buttonText: "@"
                },
                controller: ["$scope",
                    function(i) {
                        i.text = i.buttonText || "鍔犲叆璐墿杞�",
                            i.$watch("menuFood",
                                function(c) {
                                    if (c) {
                                        var u = angular.extend({
                                                id: c.food_id
                                            },
                                            c);
                                        if (u.hasSpec) {
                                            if (i.cartSpec = s(u.specfoods_id), !i.cartSpec) {
                                                var l = [u.specfoods_id, u, e];
                                                i.cartSpec = new(n.apply(a, [null].concat(l))),
                                                    o.push(i.cartSpec)
                                            }
                                        } else i.cartItem = r[u.id],
                                        i.cartItem || (i.cartItem = new t(u.id, e, [], u), r[u.id] = i.cartItem)
                                    }
                                })
                    }]
            }
        }]
},
function(e, t) {},
,
function(e, t) {
    var a = "/entry/main/shop/_block/shop-cartbutton/shop-cartbutton.html",
        n = '<div ng-if=!menuFood.hasSpec><button class=shop-cartbutton ng-if="!cartItem.quantity && menuFood.stock" ng-click=cartItem.add($event)>{{text}}</button>' +
            ' <span class="shop-cartbutton disabled" ng-if=!menuFood.stock>宸插敭瀹�</span><div class=shop-cartctrl ng-if="cartItem.quantity > 0 || cartItem.quantity === \'\'"><button class="ctrl minus" ng-click=cartItem.sub($event)>-</button><input class="ctrl quantity" ng-model=cartItem.quantity ng-change=cartItem.update(cartItem.quantity)><button class="ctrl plus" ng-click=cartItem.add($event)>+</button></div></div><div ng-if=menuFood.hasSpec><button class=shop-cartbutton ng-if=!cartSpec.quantity shop-specmenu food=cartSpec>閫夎鏍�</button><div class=shop-cartctrl ng-if=cartSpec.quantity><button class="ctrl minus" tooltip=澶氳鏍煎晢鍝佸彧鑳藉幓璐墿杞﹀垹闄ゅ摝 tooltip-trigger=focus>-</button><input class="ctrl quantity" ng-model=cartSpec.quantity readonly><button class="ctrl plus" shop-specmenu food=cartSpec>+</button></div></div>';
    window.angular.module("ng").run(["$templateCache",
        function(e) {
            e.put(a, n)
        }]),
        e.exports = a
},
function(e, t, a) {
    "use strict";
    var n = a(300);
    a(301),
        e.exports = function() {
            return {
                restrict: "A",
                replace: !0,
                templateUrl: n,
                scope: {
                    group: "=",
                    shopCart: "=cart"
                },
                link: function(e, t) {
                    e.closeCartHelper = function() {
                        t.removeClass("open")
                    }
                }
            }
        }
},
function(e, t) {
    var a = "/entry/main/shop/_block/shop-carthelper/shop-carthelper.html",
        n = '<div class=shop-carthelper><div class="shopcarhelper-title clearfix"><span>鍑戜竴鍑�</span> <em>杞绘澗鍑戞弧璧烽€佷环</em> <a href=javascript: ng-click=closeCartHelper()>[ 鍏抽棴 ]</a></div><div class="shopcarthelper-container ui-scrollbar-light"><div ng-repeat="item in group track by $index" class=shop-cartbasket-tablerow entityid={{item.id}}><div class="cell itemname" ng-bind=item.name title={{item.name}}></div><div class="cell itemtotal" ng-bind="\'&yen;\' + item.price"></div><div class=cell><div shop-carthelperbutton food=item></div></div></div></div></div>';
    window.angular.module("ng").run(["$templateCache",
        function(e) {
            e.put(a, n)
        }]),
        e.exports = a
},
function(e, t) {},
,
function(e, t, a) {
    "use strict";
    a(304);
    var n = a(306),
        i = {};
    e.exports = ["localCartView", "CartButtonView",
        function(e, t) {
            return {
                templateUrl: n,
                scope: {
                    food: "="
                },
                controller: ["$scope",
                    function(a) {
                        var n = angular.extend({
                                id: a.food.food_id
                            },
                            a.food);
                        n.hasSpec || (a.cartItem = i[n.id], a.cartItem || (a.cartItem = new t(n.id, e, [], n), i[n.id] = a.cartItem))
                    }]
            }
        }]
},
function(e, t) {},
,
function(e, t) {
    var a = "/entry/main/shop/_block/shop-carthelperbutton/shop-carthelperbutton.html",
        n = "<div ng-if=!menuFood.hasSpec><button class=shop-carthelperbutton ng-click=cartItem.add($event)>娣诲姞</button></div>";
    window.angular.module("ng").run(["$templateCache",
        function(e) {
            e.put(a, n)
        }]),
        e.exports = a
},
function(e, t, a) {
    "use strict";
    a(308);
    var n = a(310);
    e.exports = ["localCartView",
        function(e) {
            return {
                templateUrl: n,
                scope: {
                    shopCart: "=cart"
                },
                controller: ["$scope",
                    function(t) {
                        t.addGroup = function() {
                            e.createGroup()
                        },
                            t.removeGroup = function(t, a) {
                                a.stopPropagation(),
                                    e.removeGroup(t)
                            },
                            t.switchGroup = function(t) {
                                e.changeGroup(t)
                            };
                        var a = "NO_GUIDE_GROUP";
                        t.closeGuide = function() {
                            t.showGuide = !1,
                                localStorage.setItem(a, !0)
                        },
                        localStorage.getItem(a) || (t.showGuide = !0)
                    }]
            }
        }]
},
function(e, t) {},
,
function(e, t) {
    var a = "/entry/main/shop/_block/shop-groupswitcher/shop-groupswitcher.html",
        n = '<ul class=shop-grouptab ng-if="shopCart.vm.groups.length > 1"><li ng-repeat="group in shopCart.vm.groups" ng-click=switchGroup($index) ng-class="{ light: $index === shopCart.currentGroupIndex }"><span ng-bind="$index + 1" ng-if="shopCart.vm.groups.length >= 4"></span> <span ng-bind="$index + 1 + \'鍙疯喘鐗╄溅\'" ng-if="shopCart.vm.groups.length < 4"></span> <a href=javascript: class=icon-close ng-click="removeGroup($index, $event)"></a></li><li class=plus ng-click=addGroup() ng-if="shopCart.vm.groups.length < 6" tooltip=娣诲姞璐墿杞�>+</li></ul><div class=shop-grouphead ng-class="{ single: shopCart.vm.groups.length === 1 }"><a href=javascript: class=icon-cart-add ng-if="shopCart.vm.groups.length === 1" ng-click=addGroup() tooltip=娣诲姞璐墿杞�></a><div class=shop-groupguidetip ng-if="showGuide && shopCart.vm.groups.length === 1">鍙互娣诲姞澶氫釜璐墿杞︼紝渚夸簬鍟嗗鍒嗙被鎵撳寘鍝� <a class=icon-close ng-click=closeGuide()></a></div><div class=shop-grouphead-row><span ng-if="shopCart.vm.groups.length > 1" ng-bind="shopCart.currentGroupIndex + 1 + \'鍙穃'"></span>璐墿杞� <a href=javascript: ng-click=shopCart.clearGroup(shopCart.currentGroupIndex)>[娓呯┖]</a></div></div>';window.angular.module("ng ").run(["$templateCache ",function(e){e.put(a,n)}]),e.exports=a},function(e,t,a){"use strict ";a(312);var n=a(314),i=a(315);e.exports=["$q ","$http ","$templateCache ","$compile ","Popover ",function(e,t,a,r,o){var s=function(e,i){return t.get(n,{cache:a}).then(function(t){var a=o.extend({defaults:{modal:!0,animation:!1,placement:"right ",adjustLeft:14,adjustTop:19,attachToBody:!0,trigger:"click ",target:i},render:function(){return r(t.data)(e)[0]}});return new a})};return{scope:{virtualFood:" = food "},link:function(e,t){return s(e,t[0]).then(function(a){t.on("click ",function(t){t.stopPropagation(),a.show(),e.closeModal=function(){return a.hide()},e.specsData=e.virtualFood.specifications;var n=i.toSpecFilter(e.virtualFood.specfoods),r=function(e){var t=n(e);return t?{food:t,info:t.specs.map(function(e){return e.value}).join(" + "),submitDisabled:t.stock<=0,submitText:t.stock>0?"閫夊ソ浜嗭紝鍔犲叆璐墿杞�":"鏆傛椂缂鸿揣"}:{food:t,info:"姝よ鏍兼湭鎻愪緵锛岃閲嶆柊閫夋嫨",submitDisabled:!0,submitText:"鏃犳硶鍔犲叆璐墿杞�",hideReason:"NO_SPEC "}};e.specs=e.specsData.reduce(function(e,t){return e[t.name]=t.values[0],e},{}),e.current=r(e.specs),e.$apply(),e.chooseSpec=function(t,a){e.specs[t]=a,e.current=r(e.specs)},e.addSpecfood=function(t,a){e.virtualFood.add(t.food_id,a),e.closeModal()}})})}}}]},function(e,t){},,function(e,t){var a=" / entry / main / shop / _block / shop - specmenu / shop - specmenu.html ",n='<div class=shop-specmenu><div class=shop-specmenu-specs><dl ng-repeat="spec in specsData "><dt ng-bind=spec.name><dd ng-repeat="value in spec.values " ng-bind=value ng-click="chooseSpec(spec.name, value)" ng-class=" {
        current: value === specs[spec.name]
    }
    "></dl></div><div class=shop-specmenu-infogroup ng-if=!current.hideReason><p>宸查€夛細<span ng-bind=current.info></span> <span class=shop-specmenu-stockleft ng-if="current.food.stock < 30 && current.food.stock > 0 ">浠呭墿 <span ng-bind=current.food.stock></span> 浠�</span></p><p class=shop-specmenu-price><span class=yen>&yen;</span><span ng-bind="current.food.price | number: 2 "></span> <del class=shop-specmenu-originprice ng-if=current.food.original_price ng-bind=" & yen;\' + (current.food.original_price | number:2)"></del></p></div><div class=shop-specmenu-infogroup ng-if=current.hideReason ng-bind=current.info></div><div class="shop-specmenu-infogroup buttons"><button class=btn-primary ng-disabled=current.submitDisabled ng-bind=current.submitText ng-click="addSpecfood(current.food, $event)"></button> <a class=shop-specmenu-cancel href=javascript: ng-click=closeModal()>涓嶈浜�</a></div><div class=shop-specmenu-arrow></div></div>';
    window.angular.module("ng").run(["$templateCache",
        function(e) {
            e.put(a, n)
        }]),
        e.exports = a
},
function(e, t) {
    "use strict";
    function a(e) {
        if (Array.isArray(e)) {
            for (var t = 0,
                     a = Array(e.length); t < e.length; t++) a[t] = e[t];
            return a
        }
        return Array.from(e)
    }
    function n(e) {
        var t = function(e) {
                return angular.extend(e, e.specfoods[0])
            },
            n = function(e) {
                return e.specs.reduce(function(e, t) {
                        return e[t.name] = t.value,
                            e
                    },
                    {})
            },
            i = function(e) {
                return angular.extend(e, {
                    hasSpec: !0,
                    specfoods_id: e.specfoods.map(function(e) {
                        return e.food_id
                    }),
                    price: Math.min.apply(Math, a(e.specfoods.map(function(e) {
                        return e.price
                    }))),
                    specsMaps: e.specfoods.map(function(e) {
                        return n(e)
                    })
                })
            };
        return e.map(function(e) {
            return angular.extend(e, {
                foods: e.foods.map(function(e) {
                    return e.specfoods.length > 1 ? i(e) : t(e)
                })
            })
        })
    }
    function i(e) {
        var t, n = e.map(function(e) {
            return e.foods
        });
        return (t = []).concat.apply(t, a(n))
    }
    function r(e) {
        return i(e).reduce(function(e, t) {
                return t.hasSpec ? t.specfoods.forEach(function(t) {
                        e[t.food_id] = t
                    }) : e[t.food_id] = t,
                    e
            },
            {})
    }
    function o(e) {
        return function(t) {
            return e.filter(function(e) {
                return e.specs.some(function(e) {
                    return t[e.name] === e.value
                })
            })[0]
        }
    }
    e.exports = {
        toNormal: n,
        flatMenu: i,
        getMenuMap: r,
        toSpecFilter: o
    }
},
function(e, t, a) {
    "use strict";
    var n = a(317);
    a(319);
    var i = a(138),
        r = [67, 191, 1083, 1092, 1099, 1103, 1106, 1518, 5346],
        o = ["$rootScope", "Zero",
            function(e, t) {
                return {
                    restrict: "A",
                    replace: !0,
                    templateUrl: n,
                    scope: {
                        shop: "=data",
                        isdisabled: "="
                    },
                    link: function(a) {
                        var n = a.$watch("shop",
                            function(o) {
                                if ("undefined" != typeof o) {
                                    a.imgUrl = a.shop.image_path ? a.shop.image_path: i,
                                        t.reverseGeo.get({
                                            latitude: o.latitude,
                                            longitude: o.longitude
                                        }).$promise.then(function(e) {
                                            a.isJingHua = -1 !== r.indexOf(e.city_id)
                                        }),
                                        a.shop.tip = {
                                            2 : {
                                                text: "褰撳墠杩囦簬绻佸繖",
                                                bgColor: "#ff7667"
                                            },
                                            3 : {
                                                text: "鏆傛椂鍙兘閫氳繃鎵嬫満璁㈣喘",
                                                bgColor: "#c0c0c0"
                                            },
                                            4 : {
                                                text: "鍟嗗浼戞伅",
                                                bgColor: "#c0c0c0"
                                            },
                                            5 : {
                                                text: "棰勮涓紝" + o.next_business_time + "鍚庡紑濮嬮€侀",
                                                bgColor: "#54ce75"
                                            },
                                            6 : {
                                                text: "鍙兘閫氳繃鎵嬫満璁㈣喘",
                                                bgColor: "#c0c0c0"
                                            },
                                            8 : {
                                                text: "鍟嗗浼戞伅",
                                                bgColor: "#c0c0c0"
                                            },
                                            9 : {
                                                text: "鍗冲皢浼戞伅",
                                                bgColor: "#ff7667"
                                            }
                                        } [o.status];
                                    var s = o.piecewise_agent_fee.rules;
                                    1 === s.length ? a.shop.delivery_text = a.shop.float_delivery_fee + "鍏�": a.shop.delivery_text = s[s.length - 1].fee + "-" + s[0].fee + "鍏�",
                                    o.in_delivery_area && (a.shop.tip = {
                                        text: "瓒呭嚭閰嶉€佽寖鍥�",
                                        bgColor: "#c0c0c0"
                                    }),
                                    -1 !== [1, 5, 9].indexOf(o.status) && o.in_delivery_area || (a.isdisabled = !0);
                                    var c = function(a) {
                                            return t.favor[a]({
                                                userId: e.user.user_id,
                                                filter: "restaurants",
                                                filterId: o.id
                                            }).$promise
                                        },
                                        u = localStorage.getItem("GEOHASH");
                                    u && t.shopRatingScore(o.id).get({
                                        restaurant_id: o.id,
                                        latitude: Geohash.decode(u)[0],
                                        longitude: Geohash.decode(u)[1]
                                    }).$promise.then(function(e) {
                                        a.shopRatingScore = e
                                    }),
                                        c("get").then(function() {
                                            return a.isFavorShop = !0
                                        })["catch"](function() {
                                            return a.isFavorShop = !1
                                        }),
                                        a.favor = function() {
                                            return e.user.user_id ? void(a.isFavorShop ? c("delete").then(function() {
                                                        return a.isFavorShop = !1
                                                    }) : c("post").then(function() {
                                                        return a.isFavorShop = !0
                                                    })) : void(location.href = e.ACCOUNTBASE + "/login/#redirect=" + location.href)
                                        },
                                        n()
                                }
                            })
                    }
                }
            }];
    angular.module("eleme.page").filter("openhour",
        function() {
            return function(e) {
                return e ? e.map(function(e) {
                        return e.replace("/", "-")
                    }).join(" / ") : void 0
            }
        }).filter("compareRating",
        function() {
            return function(e) {
                if ("undefined" != typeof e) {
                    var t;
                    return e > 0 && (t = "楂樹簬鍛ㄨ竟鍟嗗"),
                    0 === e && (t = "涓庡懆杈瑰晢瀹舵寔骞�"),
                    0 > e && (t = "浣庝簬鍛ㄨ竟鍟嗗"),
                        {
                            text: t,
                            number: (100 * Math.abs(e)).toFixed(1) + "%"
                        }
                }
            }
        }),
        e.exports = o
},
function(e, t, a) {
    var n = "/entry/main/shop/_block/shop-guide/shop-guide.html",
        i = "<div class=shopguide><div class=container ng-show=shop itemscope itemtype=http://schema.org/Restaurant><div class=shopguide-info><meta itemprop=url content={{$root.ROOTBASE}}/shop/{{shop.id}}><img ng-src=\"{{imgUrl + '|95x95' | imgOptimize}}\" alt={{shop.name}} itemprop=image><div class=shopguide-info-wrapper><div><h1 title={{shop.name}} ng-class=\"{hastip: shop.tip}\" itemprop=name>{{shop.name}}</h1><span ng-if=shop.tip ng-style=\"{'background-color': shop.tip.bgColor}\" class=shopguide-tip>{{shop.tip.text}}</span> <a ng-href=\"{{ '/shop/' + shop.id + '/info' }}\"><img src=" + a(318) + ' alt="" ng-if=isJingHua class=shopguide-zheng></a></div><p class=shopguide-info-rate><span rate-star rating=shop.rating></span> (<a ng-href=/shop/{{shop.id}}/rate>{{shop.rating_count}}</a>) <span>鏈堝敭{{shop.recent_order_num}}鍗�</span></p><p><span ng-repeat="flavor in shop.flavor" class=shopguide-tag itemprop=servesCuisine>{{flavor.name}}</span></p></div><div class=shopguide-info-extra><ul><li class="shopguide-extra-item shopguide-extra-compete" ng-if=shopRatingScore><div itemscope itemprop=aggregateRating itemtype=http://schema.org/AggregateRating><h2 class=color-stress itemprop=ratingValue>{{shopRatingScore.star_level.toFixed(1)}}</h2><meta itemprop=bestRating content=5><meta itemprop=reviewCount content={{shop.rating_count}}><p>缁煎悎璇勪环<br><span class=color-mute>{{(shopRatingScore.compare_rating | compareRating).text}}</span> <span class=color-stress ng-if=shopRatingScore.compare_rating>{{(shopRatingScore.compare_rating | compareRating).number}}</span></p></div><div><p>鏈嶅姟鎬佸害<span rate-star rating=shopRatingScore.service_score></span> <span class=color-stress>{{shopRatingScore.service_score.toFixed(1)}}鍒�</span></p><p>鑿滃搧璇勪环<span rate-star rating=shopRatingScore.food_score></span> <span class=color-stress>{{shopRatingScore.food_score.toFixed(1)}}鍒�</span></p></div></li><li class=shopguide-extra-item ng-if=shop.description itemprop=description>{{shop.description}}</li><li class="shopguide-extra-item address"><p itemscope itemprop=streetAddress itemtype=http://schema.org/PostalAddress><span class=label>鍟嗗鍦板潃锛�</span> <span>{{shop.address}}</span><meta itemprop=telephone content={{shop.phone}}></p><p><span class=label>钀ヤ笟鏃堕棿锛�</span> <span itemprop=openingHours>{{shop.opening_hours | openhour}}</span></p></li><li class=shopguide-extra-item><p class=shopguide-extra-delivery>鐢�<span>{{shop.delivery_mode.description || shop.name}}</span>鎻愪緵閰嶉€佹湇鍔�</p></li></ul></div></div><div class=shopguide-server><span ng-hide="shop.id == 656683"><em>璧烽€佷环</em> <em class=shopguide-server-value>{{shop.float_minimum_order_amount}}鍏�</em></span> <span ng-hide="shop.id == 656683"><em>閰嶉€佽垂</em> <em class=shopguide-server-value>{{shop.piecewise_agent_fee.tips}}</em> <em class=shopguide-server-delivery ng-if=shop.delivery_mode.description>{{shop.delivery_mode.text}}</em></span> <span ng-hide="shop.id == 656683"><em>骞冲潎閫佽揪閫熷害</em> <em class=shopguide-server-value>{{shop.order_lead_time}}鍒嗛挓</em></span></div><a class=shopguide-favor href=javascript: ng-click=favor()><i ng-if=isFavorShop class=icon-unfavorite></i> <i ng-if=!isFavorShop class=icon-favorite></i> <span ng-if=isFavorShop>鍙栨秷鏀惰棌</span> <span ng-if=!isFavorShop>鏀惰棌</span></a></div></div>';
    window.angular.module("ng").run(["$templateCache",
        function(e) {
            e.put(n, i)
        }]),
        e.exports = n
},
function(e, t, a) {
    e.exports = a.p + "media/img/zheng.59d29c.png"
},
function(e, t) {},
,
,
function(e, t, a) {
    "use strict";
    var n = a(323);
    a(324);
    var i = ["$location",
        function(e) {
            return {
                restrict: "A",
                templateUrl: n,
                scope: {
                    filterData: "=",
                    shop: "=data",
                    displayType: "=",
                    shopAction: "="
                },
                link: function(t) {
                    var a = "-price";
                    t.filter = function(e) {
                        "-price" === e && (a = "price" === a ? "-price": "price", e = a),
                            t.filterData = e
                    },
                        t.changeDisplayType = function(e) {
                            return t.displayType = e
                        },
                        t.search = function() {
                            return e.search("text", encodeURI(t.searchText))
                        }
                }
            }
        }];
    e.exports = i
},
function(e, t) {
    var a = "/entry/main/shop/_block/shop-nav/shop-nav.html",
        n = '<div class=shopnav><div class="container clearfix"><div class=shopnav-left><a class=shopnav-tab href=/shop/{{shop.id}} ng-class="{active: shop.tab === \'index\'}">鎵€鏈夊晢鍝�</a> <a class=shopnav-tab href=/shop/{{shop.id}}/rate ng-class="{active: shop.tab === \'rate\'}">璇勪环</a> <a class=shopnav-tab href=/shop/{{shop.id}}/info ng-class="{active: shop.tab === \'info\'}">鍟嗗璧勮川</a> <span class=shopnav-filter ng-if="shopAction === \'menu\'"><a href=javascript: ng-click="filter(\'default\')" ng-class="{active: filterData === \'default\'}">榛樿鎺掑簭</a> <a href=javascript: ng-click="filter(\'-rating\')" ng-class="{active: filterData === \'-rating\'}">璇勫垎 <i class=icon-uniE02D></i></a> <a href=javascript: ng-click="filter(\'-month_sales\')" ng-class="{active: filterData === \'-month_sales\'}">閿€閲� <i class=icon-uniE02D></i></a> <a href=javascript: ng-click="filter(\'-price\')" ng-class="{active: filterData === \'-price\' || filterData === \'price\'}">浠锋牸 <i class=icon-uniE02D ng-hide="filterData === \'price\'"></i> <i class=icon-uniE02C ng-show="filterData === \'price\'"></i></a> <span><a class="shopnav-filter-display icon-grid" href=javascript: title=浠ョ綉鏍煎舰寮忔樉绀鸿彍鍗� ng-click="changeDisplayType(\'grid\')" ng-class="{active: displayType === \'grid\'}"></a> <a class="shopnav-filter-display icon-list" href=javascript: title=浠ュ垪琛ㄥ舰寮忔樉绀鸿彍鍗� ng-click="changeDisplayType(\'list\')" ng-class="{active: displayType === \'list\'}"></a></span></span></div><div class=shopnav-search><form class=place-search role=search ng-submit=search()><button class="place-search-btn icon-search" ubt-click=403 ng-attr-ubt-data-keyword={{searchText}} title=鎼滅储鍟嗗鎴栫編椋�></button><label for=globalsearch>鎼滅储鍟嗗鎴栫編椋�</label><input id=globalsearch class=place-search-input ng-model=searchText autocomplete placeholder=鎼滅储鍟嗗,缇庨...></form></div></div></div>';
    window.angular.module("ng").run(["$templateCache",
        function(e) {
            e.put(a, n)
        }]),
        e.exports = a
},
function(e, t) {},
,
function(e, t, a) {
    "use strict";
    var n = a(327);
    a(328);
    var i = a(138),
        r = a(315),
        o = {},
        s = ["$rootScope", "$location", "Dialog", "Zero", "notifyServerError",
            function(e, t, a, s, c) {
                return {
                    restrict: "A",
                    templateUrl: n,
                    replace: !0,
                    scope: {
                        shopCache: "=",
                        filterData: "=",
                        displayType: "="
                    },
                    controller: ["$scope",
                        function(n) {
                            n.loading = !0,
                                n.itemInfo = {},
                                n.$on("MENUITEM::SHOWINFO",
                                    function(e, t) {
                                        e.stopPropagation(),
                                            n.itemInfo = t,
                                            a.show("ITEMINFO")
                                    }),
                                o.promise = n.shopCache.promise.then(function(e) {
                                    return o.id !== e.id ? (o.id = e.id, s.shoppingRst(e.id).query({
                                            restaurant_id: e.id
                                        }).$promise.then(function(t) {
                                            return t[0] && "濂借瘎姒�" === t[0].name && (t[0].id = 1),
                                            t[1] && "鐑攢姒�" === t[1].name && (t[1].id = 2),
                                                t = t.filter(function(e) {
                                                    return 1 !== e.id && 2 !== e.id
                                                }),
                                                o.res = r.toNormal(t),
                                                {
                                                    shop: e,
                                                    res: o.res
                                                }
                                        })) : {
                                            shop: e,
                                            res: o.res
                                        }
                                }),
                                o.promise.then(function(a) {
                                    var i = a.shop,
                                        o = a.res;
                                    n.loading = !1;
                                    var s = [];
                                    o.forEach(function(e) {
                                        s.length < 5 && (s = s.concat(e.foods.slice(0, 5 - s.length).map(function(e) {
                                            return e.name
                                        })))
                                    }),
                                        e.SEO.description = i.name + "浣嶄簬" + i.address + "锛屼富瑕佺編椋熸湁" + s.join("銆�") + "绛夛紝浜嗚В鏇村缇庨澶栧崠锛屼笂楗夸簡涔堢綉涓婅椁�",
                                        n.categorys = o;
                                    var c, u = r.flatMenu(n.categorys),
                                        l = decodeURI(t.search().text);
                                    "undefined" !== l && (c = u.filter(function(e) {
                                        return - 1 !== e.name.indexOf(l)
                                    }), n.searchEnv = {
                                        text: l
                                    }),
                                        n.foods = c || u,
                                        window.setTimeout(g, 0)
                                })["catch"](function(e) {
                                    n.loading = !1,
                                        c(e)
                                }),
                                n.cartLink = o.promise.then(function(e) {
                                    var t = e.shop,
                                        a = e.res;
                                    return {
                                        restaurantId: t.id,
                                        restaurantStatus: t.status,
                                        deliveryFee: t.float_delivery_fee,
                                        minimumAmount: t.float_minimum_order_amount,
                                        piecewiseAgentFee: t.piecewise_agent_fee,
                                        menuMap: r.getMenuMap(a),
                                        menuArray: r.flatMenu(a)
                                    }
                                });
                            var u, l = {},
                                d = function() {
                                    return document.documentElement.scrollTop || document.body.scrollTop
                                },
                                p = angular.$(".shopmenu-main"),
                                h = function() {
                                    return l.dom.style.maxHeight = DomUtil.theElementViewHeight(p[0]) + "px"
                                },
                                m = DomUtil.throttle(function() {
                                        var e = u.filter(function(e) {
                                            return d() >= e.top - l.height
                                        }).pop();
                                        "undefined" != typeof e && (n.currentCategory !== e.category && (n.currentCategory = e.category, n.$apply()), y && h())
                                    },
                                    100),
                                f = function() {
                                    if ("default" === n.filterData) {
                                        var e = [].slice.call(angular.$(".shopmenu-title")),
                                            t = n.categorys;
                                        u = e.map(function(e, a) {
                                            return {
                                                category: t[a],
                                                top: e.offsetTop
                                            }
                                        })
                                    }
                                };
                            n.shopNavSticky = function(e) {
                                e || p.css({
                                    "margin-top": 0
                                }),
                                e && (y ? (h(), l.height = 0, p.css({
                                        "margin-top": 0
                                    })) : (l.height = l.dom.offsetHeight, p.css({
                                        "margin-top": l.dom.offsetHeight + "px"
                                    })), "default" === n.filterData && f())
                            };
                            var g = function() {
                                    f(),
                                        l.dom = angular.$(".shopmenu-nav")[0],
                                        l.height = l.dom.offsetHeight,
                                        l.top = l.dom.offsetTop,
                                        angular.$(window).on("scroll", m);
                                    var e = t.hash();
                                    e && window.setTimeout(function() {
                                            window.scrollTo(0, document.getElementById(e).offsetTop - l.height)
                                        },
                                        1e3)
                                },
                                v = 1500,
                                y = !1;
                            y = (window.innerWidth || document.documentElement.clientWidth) >= v,
                                angular.$(window).on("resize", DomUtil.throttle(function() {
                                    f(),
                                        y = (window.innerWidth || document.documentElement.clientWidth) >= v,
                                    y && h()
                                })),
                                n.scrollToCategory = function(e) {
                                    "default" !== n.filterData && (n.filterData = "default", angular.$(window).on("scroll", m));
                                    var t = n.categorys.indexOf(e);
                                    angular.$("body").animate({
                                            scrollTop: [d(), u[t].top - l.height]
                                        },
                                        300),
                                        angular.$("html").animate({
                                                scrollTop: [d(), u[t].top - l.height]
                                            },
                                            300)
                                },
                                n.$watch("filterData",
                                    function(e, t) {
                                        "undefined" != typeof t && (n.filterText = {
                                            "-rating": "璇勫垎浠庨珮鍒颁綆鎺掑簭",
                                            "-month_sales": "閿€閲忎粠楂樺埌浣庢帓搴�",
                                            "-price": "浠锋牸浠庨珮鍒颁綆鎺掑簭",
                                            price: "浠锋牸浠庝綆鍒伴珮鎺掑簭"
                                        } [e], "default" !== e ? angular.$(window).off("scroll", m) : angular.$(window).on("scroll", m))
                                    }),
                                n.$watch("displayType",
                                    function(e, t) {
                                        "undefined" != typeof t && f()
                                    }),
                                n.defaultImg = i
                        }]
                }
            }];
    e.exports = s
},
function(e, t) {
    var a = "/entry/main/shop/_block/shop-menu/shop-menu.html",
        n = '<div><div loading ng-show=loading></div><div ng-show="!loading && !searchEnv" class=shopmenu-nav sticky sticky-class=sticky sticky-body-class=shopmenu-nav-sticky sticky-fn=shopNavSticky><a href=javascript: ng-repeat="category in categorys" ng-click=scrollToCategory(category) ng-class="{active: currentCategory.id === category.id}">{{category.name}}</a></div><div ng-show=!loading class=shopmenu-main ng-class="{grid: displayType === \'grid\', list: displayType === \'list\'}"><div ng-if="filterData === \'default\' && !searchEnv"><div class="shopmenu-list clearfix" ng-repeat="category in categorys"><h3 class=shopmenu-title>{{category.name}} <span class=shopmenu-des>{{category.description}}</span></h3><div ng-repeat="food in category.foods" shop-menu-item food=food shop=shopCache></div></div></div><div ng-if="filterData !== \'default\' || searchEnv" class="shopmenu-list clearfix"><h3 class=shopmenu-title ng-if=!searchEnv>{{filterText}}</h3><h3 class=shopmenu-title ng-if=searchEnv>鎼滅储<em class=color-stress>銆寋{searchEnv.text}}銆�</em>鐨勭粨鏋�</h3><div nodatatip ng-if="searchEnv && !foods.length" content=娌℃湁鎼滅储缁撴灉锛屾崲涓潯浠惰瘯璇曞惂></div><dd shop-menu-item food=food shop=shopCache ng-repeat="food in foods | orderBy:filterData"></div><div shop-cart cart-link=cartLink ng-hide="shopCache.id == 656683"></div><div dialog=ITEMINFO><div shop-iteminfo item-info=itemInfo></div></div></div></div>';
    window.angular.module("ng").run(["$templateCache",
        function(e) {
            e.put(a, n)
        }]),
        e.exports = a
},
function(e, t) {},
,
function(e, t, a) {
    "use strict";
    var n = a(331);
    e.exports = function() {
        return {
            strict: "A",
            templateUrl: n,
            replace: !0,
            scope: {
                food: "=",
                shop: "="
            },
            link: function(e) {
                e.showInfo = function(t) {
                    e.$emit("MENUITEM::SHOWINFO", t)
                }
            }
        }
    }
},
function(e, t) {
    var a = "/entry/main/shop/_block/shop-menu-item/shop-menu-item.html",
        n = '<div class=shopmenu-food ng-class="{noimg: !food.image_path}" id={{food.food_id}}><span class=col-1 ng-if=food.image_path><a href=javascript: ng-click=showInfo(food)><img ng-src="{{food.image_path + \'|100x100\' | imgOptimize}}" alt={{food.name}}鐨勫浘鐗�></a></span><div class="col-2 shopmenu-food-main"><h3 class="shopmenu-food-name ui-ellipsis">{{food.name}}</h3><p class="color-mute ui-ellipsis" tooltip={{food.description}}>{{food.description}}</p><p><span rate-star rating=food.rating></span> <span class=color-mute>({{food.rating_count}})</span> <span class=color-mute>鏈堝敭{{food.month_sales}}浠�</span></p></div><span class="col-3 shopmenu-food-price color-stress">{{food.original_price || food.price}}<small>{{food.hasSpec && \'璧穃'
}
} < /small></span > <span class = col - 4 > <div shop - cartbutton food = food ng - hide = "shop.id == \'656683\'" > </div></span > </div>';window.angular.module("ng").run(["$templateCache",function(e){e.put(a,n)}]),e.exports=a},function(e,t,a){"use strict";function n(e){if(Array.isArray(e)){for(var t=0,a=Array(e.length);t<e.length;t++)a[t]=e[t];return a}return Array.from(e)}a(333);var i=a(335);e.exports=function(){return{templateUrl:i,scope:{itemInfo:"="},controller:["$q","$scope","Zero",function(e,t,a){t.ratePageContext={data:[]};var i=function(e,a){t.ratingCount=a.length,t.ratePageContext.data=a,t.imagesPath=e.map(function(e){return e.image_path})},r=function(){t.ratingCount=0,t.ratePageContext.data=[],t.ratePageContext.currentPage=1,t.imagesPath=[],t.currentImage=0,t.showImageOffset=0};t.focusImage=function(e){t.currentImage=e},t.showImageNext=function(e){var a=t.showImageOffset+e;a>t.imagesPath.length-1||0>a||(t.showImageOffset=a)},t.$watch("itemInfo",function(t){if(t&&t.name){r();var o=[];t.specfoods_id?o=o.concat(t.specfoods_id):o.push(t.food_id),e.all([a.shoppingFood.query({"food_ids[]":o}).$promise,a.ugcFoodRating.query({offset:0,limit:999,has_text:1,"food_ids[]":o}).$promise]).then(function(e){return i.apply(void 0,n(e))})["catch"](function(){})}})}]}}},function(e,t){},,function(e,t){var a="/entry / main / shop / _block / shop - iteminfo / shop - iteminfo.html ",n='<div class=shop-iteminfo><div class=iteminfo-imagegroup><img class=mainimage ng-src=" {
{
    imagesPath[currentImage] ? imagesPath[currentImage] + \'|360x360\' : \'\' | imgOptimize}}" alt={{itemInfo.name}}鐨勫浘鐗�><div ng-show="imagesPath.length > 1"><a href=javascript: ng-click=showImageNext(-4) class="imagegroup-ctrl icon-profile-left-arrow"></a><ul class=imagelist><li ng-repeat="imagePath in imagesPath track by $index" ng-show="$index >= showImageOffset"><a href=javascript: ng-click=focusImage($index) ng-class="{ focus: currentImage === $index }"><img ng-src="{{imagePath + \'|60x60\' | imgOptimize}}" alt={{itemInfo.name}}鐨勯【瀹笂浼犲浘鐗�></a></li></ul><a href=javascript: ng-click=showImageNext(4) class="imagegroup-ctrl icon-profile-right-arrow"></a></div></div><section class=iteminfo-info><h5 ng-bind=itemInfo.name></h5><p ng-show=!!itemInfo.description class=description ng-bind=itemInfo.description></p><div class=iteminfo-cartitem><div class=iteminfo-price><span class=price><span class=yen>&yen;</span> <span class=price ng-bind="(itemInfo.original_price || itemInfo.price) + (itemInfo.specfoods_id.length > 1 ? \'璧穃': \'\')"></span></span></div><div ng-if=itemInfo.name shop-cartbutton food=itemInfo button-text=绔嬪嵆璐拱 ng-hide="shop.id == \'656683\'"></div></div><div class=iteminfo-rate><h6 ng-if=ratingCount>鍟嗗搧璇勪环锛�<span ng-bind=ratingCount></span>锛�</h6><ul class=rategroup><li ng-repeat="item in ratePageContext.pageData"><div><span rate-star rating=item.rating_star></span> <span ng-bind="item.rated_at | date: \'yyyy-MM-dd\'"></span><div class=rateuser><span ng-bind=item.asterisk_username></span><img ng-src="{{item.avatar + \'|25x25\' | imgOptimize}}"></div></div><p class=ratetext ng-bind=item.rating_text></p></li></ul><div pagination pagination-context=ratePageContext pagination-pagesize=3></div></div></section></div>';
    window.angular.module("ng").run(["$templateCache",
        function(e) {
            e.put(a, n)
        }]),
        e.exports = a
},
function(e, t, a) {
    "use strict";
    var n = a(337);
    a(338);
    var i = a(234),
        r = function() {
            return {
                restrict: "A",
                replace: !0,
                templateUrl: n,
                controller: ["$scope",
                    function(e) {
                        var t = e.comment;
                        e.avatarImgUrl = t.avatar ? t.avatar: i,
                            e.foodImgUrl = t.item_rating_list.filter(function(e) {
                                return e.image_hash
                            }),
                            e.isFoodComment = 2 === t.rating_type,
                            e.rateConfig = {
                                style: "star"
                            },
                            e.rate = {
                                value: t.rating_star || 0
                            }
                    }]
            }
        };
    e.exports = r
},
function(e, t) {
    var a = "/entry/main/shop/_block/comment-item/comment-item.html",
        n = '<li class=commentitem><span class=commentitem-avatar><img ng-src="{{avatarImgUrl + \'|60x60\' | imgOptimize}}" alt={{comment.username}}></span><div class=commentitem-content><h4 class=commentitem-username>{{comment.username}}</h4><div class=commentitem-main><span class=commentitem-stars config=rateConfig value=rate isreadonly=true rate></span> <span class=commentitem-time class=color-mute ng-bind=comment.time_spent_desc></span><p class=commentitem-text ng-if=comment.rating_text>{{comment.rating_text}}</p></div><div item-rating-list data=food class=shoprate-itemrating ng-if=comment.item_rating_list ng-repeat="food in comment.item_rating_list"></div><span class=commentitem-date>{{comment.rated_at | date:\'yyyy-MM-dd hh:mm:ss\'}}</span><div class=commentitem-reply ng-if=comment.reply_text><h6>鍟嗗鍥炲锛�</h6>{{comment.reply_text}}</div><img ng-if="foodImgUrl.length > 0" ng-repeat="item in foodImgUrl" ng-src="{{item.image_hash + \'|60x60\' | imgOptimize}}" alt={{item.rate_name}} class=commentitem-foodimage></div></li>';
    window.angular.module("ng").run(["$templateCache",
        function(e) {
            e.put(a, n)
        }]),
        e.exports = a
},
function(e, t) {},
,
function(e, t, a) {
    "use strict";
    var n = a(341);
    a(342),
        e.exports = function() {
            return {
                restrict: "A",
                replace: !0,
                templateUrl: n,
                scope: {
                    data: "="
                },
                controller: ["$scope", "$location",
                    function(e, t) {
                        e.ratingValue = {
                            value: e.data.rating_star
                        },
                            e.linkToFood = function(e) {
                                return t.url(location.pathname.replace("/rate", "") + "#" + e)
                            }
                    }]
            }
        }
},
function(e, t) {
    var a = "/entry/main/shop/_block/item-rating-list/item-rating-list.html",
        n = "<div class=shoprate-itemratinglist><span class=shoprate-itemratinglist-name>{{data.rate_name}}</span> <span class=commentitem-stars config=rateConfig value=ratingValue isreadonly=true rate></span> <a href=javascript: ng-click=linkToFood(data.food_id)>鏌ョ湅鍟嗗搧</a><p class=shoprate-itemratinglist-text ng-if=data.rating_text>{{data.rating_text}}</p><div class=commentitem-reply ng-if=data.reply_text><h6>鍟嗗鍥炲锛�</h6>{{data.reply_text}}</div></div>";
    window.angular.module("ng").run(["$templateCache",
        function(e) {
            e.put(a, n)
        }]),
        e.exports = a
},
function(e, t) {},
,
function(e, t, a) {
    "use strict";
    var n = a(345);
    a(346);
    var i = {
            promise: {},
            page: {}
        },
        r = ["$rootScope", "$routeParams", "Zero", "notifyServerError",
            function(e, t, a, r) {
                return {
                    templateUrl: n,
                    restrict: "A",
                    link: function(e) {
                        var n = t.id;
                        e.loading = !0,
                            e.ratingStorage = {},
                            e.filter = {};
                        var o = 10,
                            s = function() {
                                e.loading = !0;
                                var t = e.filter.type,
                                    i = e.ratingStorage[t];
                                a.ugc(n).query({
                                    action: "ratings",
                                    id: n,
                                    record_type: t,
                                    offset: (i.page - 1) * o,
                                    limit: o
                                }).$promise.then(function(t) {
                                    e.loading = !1,
                                    t.length || angular.$(window).off("scroll", u),
                                        i.data = i.data.concat(t),
                                        i.page++
                                })["catch"](function(e) {
                                    return r(e)
                                })
                            };
                        i.typePromise || (i.typePromise = a.ugc(n).query({
                            id: n,
                            action: "rating_categories"
                        }).$promise),
                            i.typePromise.then(function(t) {
                                e.ratingTypeList = t,
                                    e.filter.type = t[0].record_type,
                                    t.forEach(function(t) {
                                        return e.ratingStorage[t.record_type] = {
                                            page: 1,
                                            data: []
                                        }
                                    }),
                                    s()
                            })["catch"](function(e) {
                                return r(e)
                            }),
                            e.select = function(t) {
                                t !== e.filter.type && (e.filter.type = t, e.ratingStorage[t].data.length || s())
                            };
                        var c = document.getElementById("ratinglist"),
                            u = function() {
                                var t = c.getBoundingClientRect().bottom - (window.innerHeight || document.documentElement.clientHeight),
                                    a = e.ratingStorage[e.filter.type];
                                a && 0 > t && !a["page" + a.page] && (a["page" + a.page] = !0, s())
                            };
                        angular.$(window).on("scroll", u)
                    }
                }
            }];
    e.exports = r
},
function(e, t) {
    var a = "/entry/main/shop/_block/shop-rate/shop-rate.html",
        n = '<div class=commentbox><div class=commentfilter><a class=commentfilter-item ng-repeat="item in ratingTypeList" ng-class="{active: filter.type === item.record_type}" ng-click=select(item.record_type)>{{item.name}}({{item.amount}})</a></div><ul id=ratinglist class=commentlist><li comment-item ng-repeat="comment in ratingStorage[filter.type].data"></li></ul><div loading ng-show=loading></div><div nodatatip ng-if="!loading && !ratingStorage[filter.type].data.length"></div></div>';
    window.angular.module("ng").run(["$templateCache",
        function(e) {
            e.put(a, n)
        }]),
        e.exports = a
},
function(e, t) {},
,
function(e, t, a) {
    "use strict";
    var n = a(349);
    a(350);
    var i = ["$rootScope", "Zero", "MessageBox", "notifyServerError", "Dialog",
        function(e, t, a, i, r) {
            return {
                restrict: "A",
                templateUrl: n,
                scope: {
                    shop: "=data"
                },
                replace: !0,
                link: function(n) {
                    var o = n.$watch("shop",
                        function(s) {
                            void 0 !== s && (s.identification && (n.identificateResult = {
                                1 : "鑹ソ",
                                2 : "涓€鑸�",
                                3 : "杈冨樊"
                            } [s.identification.identificate_result]), o(), n.testLogin = function() {
                                return e.user.user_id ? void r.show("complaintDialog") : void(location.href = e.ACCOUNTBASE + "/login/#redirect=" + location.href)
                            },
                                n.complaintObj = {},
                                n.complaint = function() {
                                    t.shopComplaint.post({
                                        userId: e.user.user_id,
                                        rstId: s.id,
                                        complaint_type: 100,
                                        content: n.complaintObj.text
                                    }).$promise.then(function() {
                                        r.close("complaintDialog"),
                                            a("鎶曡瘔鎴愬姛", "鎰熻阿鎮ㄧ殑鎶曡瘔", "success")
                                    })["catch"](function(e) {
                                        return i(e)
                                    })
                                })
                        })
                }
            }
        }];
    e.exports = i
},
function(e, t) {
    var a = "/entry/main/shop/_block/shop-bulletin/shop-bulletin.html",
        n = "<div class=shopmain-right><div class=shopbulletin><div class=shopbulletin-section><h3 class=shopbulletin-section-title>鍟嗗鍏憡</h3><p class=shopbulletin-content>{{shop.promotion_info}}</p><div class=shopbulletin-delivery><h4>閰嶉€佽鏄庯細</h4><p>{{shop.piecewise_agent_fee.description}}</p></div><ul class=shopbulletin-supports><li ng-repeat=\"support in shop.supports\"><span ng-style=\"{'background-color': '#' + support.icon_color}\">{{support.icon_name}}</span> {{support.description}}</li></ul><a href=javascript: class=shopcomplaint ng-click=testLogin()>涓炬姤鍟嗗</a></div><div dialog=complaintDialog><h5 class=complaint-title>涓炬姤鍟嗗</h5><form ng-submit=complaint()><label class=complaint-field><textarea class=shopcomplaint-textarea ng-model=complaintObj.text rows=6 cols=40></textarea></label><div class=complaint-field><button type=submit class=btn-primary>鎻愪氦</button></div></form></div></div></div>";
    window.angular.module("ng").run(["$templateCache",
        function(e) {
            e.put(a, n)
        }]),
        e.exports = a
},
function(e, t) {},
,
,
function(e, t, a) {
    "use strict";
    var n = a(354);
    a(355);
    var i = ["$sce",
        function(e) {
            return {
                restrict: "A",
                templateUrl: n,
                replace: !0,
                scope: {
                    shop: "=data"
                },
                link: function(t) {
                    var a = t.$watch("shop",
                        function(n) {
                            n && (t.shop = n, t.src = e.trustAsResourceUrl("https://h5.ele.me/shop/certification/#/?restaurant_id=" + n.authentic_id + "&realId=" + n.id), a())
                        })
                }
            }
        }];
    e.exports = i
},
function(e, t) {
    var a = "/entry/main/shop/_block/shop-info/shop-info.html",
        n = '<div><iframe class=shopinfo-iframe ng-src="{{ src }}" frameborder=0></iframe></div>';
    window.angular.module("ng").run(["$templateCache",
        function(e) {
            e.put(a, n)
        }]),
        e.exports = a
},
function(e, t) {},
,
function(e, t, a) {
    "use strict";
    var n = a(358);
    a(359),
        e.exports = function() {
            return {
                restrict: "A",
                replace: !0,
                templateUrl: n,
                link: function(e) {
                    e.backToTop = function() {
                        angular.$(0 === document.body.scrollTop ? document.documentElement: document.body).animate({
                                scrollTop: [t(), 0]
                            },
                            300)
                    };
                    var t = function() {
                        return Math.max(document.documentElement.scrollTop || 0, window.scrollY || 0)
                    }
                }
            }
        }
},
function(e, t, a) {
    var n = "/entry/main/shop/_block/side-tools/side-tools.html",
        i = '<div class=sidetools><a href=http://kaidian.ele.me class="sidetools-item icon-visit-history" target=_blank title=鎴戣寮€搴� tooltip=鎴戣寮€搴� tooltip-placement=left></a><div class="sidetools-item icon-qrcode"><img class=sidetools-qrcode src=' + a(112) + ' alt=鎵弿浜岀淮鐮佸厤璐逛笅杞芥墜鏈篈pp></div><a href=JavaScript: class="sidetools-item icon-service" title=鍦ㄧ嚎瀹㈡湇 tooltip=鍦ㄧ嚎瀹㈡湇 tooltip-placement=left online-service target=_blank></a> <a href=JavaScript: class="sidetools-item icon-arrow-up" title=鍥炲埌椤堕儴 tooltip=鍥炲埌椤堕儴 tooltip-placement=left ng-click=backToTop()></a></div>';
    window.angular.module("ng").run(["$templateCache",
        function(e) {
            e.put(n, i)
        }]),
        e.exports = n
},
function(e, t) {},
,
function(e, t, a) {
    "use strict";
    function n(e) {
        if (Array.isArray(e)) {
            for (var t = 0,
                     a = Array(e.length); t < e.length; t++) a[t] = e[t];
            return a
        }
        return Array.from(e)
    }
    var i = a(362);
    a(363),
        angular.module("eleme.page").factory("checkoutMobileVerify", a(367)).factory("checkoutSetPassword", a(371)).factory("checkoutService", a(375)).factory("checkoutCartView", a(376)).directive("checkoutCart", a(377)).directive("checkoutCartgarnish", a(383)).directive("checkoutGuide", a(387)).directive("checkoutAddress", a(391)).directive("quicksubmitTrigger",
            function() {
                return {
                    scope: {
                        submitVisable: "="
                    },
                    link: function(e, t) {
                        var a = t[0],
                            n = function() {
                                return document.documentElement.scrollTop || document.body.scrollTop
                            },
                            i = function() {
                                return window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight
                            },
                            r = function() {
                                var e = i(),
                                    t = n();
                                return t + e > a.offsetTop
                            },
                            o = function() {
                                var t = r();
                                e.submitVisable !== t && (e.submitVisable = t, e.$apply())
                            };
                        e.submitVisable = r(),
                            document.addEventListener("scroll", o),
                            window.addEventListener("resize", o),
                            e.$on("$destroy",
                                function() {
                                    document.removeEventListener("scroll", o),
                                        window.removeEventListener("resize", o)
                                })
                    }
                }
            }),
        e.exports = {
            templateUrl: i,
            controller: ["$q", "$rootScope", "$scope", "$location", "Zero", "notifyServerError", "MessageBox", "escapeHtml", "Address", "checkoutService", "LocalCart", "checkoutCartView",
                function(e, t, a, i, r, o, s, c, u, l, d, p) {
                    if (!t.user.user_id) return void(location.href = t.ACCOUNTBASE + "/login/#redirect=" + location.href);
                    localStorage.getItem("GEOHASH") || (location.href = t.MAINBASE + "/?force"),
                        t.layoutState = {
                            type: "checkout",
                            hideSidebar: !0
                        },
                        a.checkout = {
                            submitVisable: !0
                        },
                        a.$on("$destroy",
                            function() {
                                return t.layoutState = {}
                            }),
                        a.guide = {
                            step: 2,
                            text: "璁㈠崟淇℃伅"
                        };
                    var h = function(e, a) {
                            angular.extend(t.layoutState, {
                                rstUrl: e || "",
                                rstName: a || ""
                            })
                        },
                        m = function(t) {
                            return t.checkout().then(function(t) {
                                t.invoice.is_available = !1,
                                    t.invoice.status_text = "浠呭湪楗夸簡涔� APP 涓敮鎸佸紑鍙戠エ鍝�",
                                    t.cart.sig = t.sig;
                                var i = t.cart,
                                    r = t.current_address;
                                if (!i.group.length) return e.reject("EMPTY_CART");
                                a.checkoutData = t,
                                    a.cart = i;
                                var o = -1;
                                if (a.payList = t.payments.map(function(e) {
                                        return 1 === e.select_state && (o = a.payId = e.id),
                                            angular.extend({
                                                1 : {
                                                    id: 1,
                                                    type: "online",
                                                    title: "鍦ㄧ嚎鏀粯",
                                                    tip: "鏀寔寰俊銆佹敮浠樺疂銆丵Q閽卞寘鍙婂ぇ閮ㄥ垎閾惰鍗�",
                                                    disabledText: "璇ュ晢瀹朵粎鏀寔璐у埌浠樻"
                                                },
                                                0 : {
                                                    id: 0,
                                                    type: "offline",
                                                    title: "璐у埌浠樻",
                                                    tip: "閫佽揣涓婇棬鍚庡啀浠樻",
                                                    disabledText: "璇ュ晢瀹朵粎鏀寔鍦ㄧ嚎鏀粯"
                                                }
                                            } [e.id], {
                                                disabled: -1 === e.select_state
                                            })
                                    }), a.hongbaoCount = t.hongbao_info.valid_hongbao_count, t.deliver_times.length) {
                                    a.showDeliverTime = !0;
                                    var s = [];
                                    5 === a.checkoutData.cart.restaurant_status ? s.push({
                                            text: "璇烽€夋嫨閫佽揪鏃堕棿",
                                            value: -1,
                                            disabled: !0,
                                            select: !0
                                        }) : s.push({
                                            text: "绔嬪嵆閫佽揪",
                                            value: "",
                                            select: !0
                                        }),
                                        a.bookTimes = t.deliver_times.reduce(function(e, t) {
                                                var a = t.time_description,
                                                    i = t.time;
                                                return [].concat(n(e), [{
                                                    text: a,
                                                    value: i
                                                }])
                                            },
                                            s)
                                } else a.showDeliverTime = !1;
                                return a.invoice = t.invoice.is_available,
                                    {
                                        checkoutData: t,
                                        cartData: i,
                                        paymethod_id: o,
                                        current_address: r
                                    }
                            })
                        },
                        f = function(e) {
                            return r.shoppingRestaurant(e).get({
                                "fields[]": ["name", "only_use_poi", "delivery_mode"],
                                id: e
                            }).$promise.then(function(t) {
                                var n = t.name,
                                    i = t.only_use_poi,
                                    r = t.delivery_mode;
                                return h(e, n),
                                    a.delivery = {
                                        1 : "铚傞笩涓撻€�",
                                        2 : n,
                                        3 : "鍟嗗"
                                    } [(r || {
                                        id: 2
                                    }).id],
                                    {
                                        name: n,
                                        only_use_poi: i,
                                        delivery_mode: r
                                    }
                            })
                        },
                        g = function() {
                            return a.user.$promise.then(function(e) {
                                return r.invoice.query({
                                    userId: e.user_id
                                }).$promise
                            }).then(function(e) {
                                return a.invoices = e,
                                    e
                            })["catch"](function() {})
                        },
                        v = function(e) {
                            a.checkoutData.invoice = e
                        };
                    a.loading = !0,
                        a.nofood = !0,
                        a.cartView = p,
                        a.orderButton = p.orderButton,
                        a.nofoodWatcher = p.nofood,
                        a.$watch("nofoodWatcher.nofood",
                            function(e) {
                                e && (a.nofood = !0)
                            });
                    var y = new d,
                        b = l.checker;
                    f(y.restaurant_id).then(function(t) {
                        try {
                            if (!y.cartMap[y.restaurant_id][0].entities.length) return e.reject("EMPTY_CART")
                        } catch(a) {}
                        return t
                    }).then(function(t) {
                        return e.all({
                            rstInfo: t,
                            invoiceInfo: g(),
                            checkoutDatas: m(y)
                        })
                    }).then(function(e) {
                        var n = e.checkoutDatas,
                            i = e.rstInfo,
                            r = n.cartData,
                            o = n.paymethod_id,
                            s = n.current_address;
                        a.isBaishengRst = i.only_use_poi,
                            a.address = s,
                            a.loading = !1,
                            a.nofood = !1,
                            b.init({
                                    userId: t.user.user_id || "anonymous",
                                    invoiceAvailable: v
                                },
                                r, s, o, i)
                    })["catch"](function(e) {
                        switch (a.loading = !1, e) {
                            case "EMPTY_CART":
                                a.nofood = !0;
                                break;
                            default:
                                o(e)
                        }
                    }),
                        a.selectPay = function(e, t) {
                            e !== a.payId && (t || b.updatePaymethod(e).then(function() {
                                return a.payId = e
                            }))
                        },
                        a.updateDeliverTime = function(e) {
                            e || (e = {}),
                                b.updateOrderParams({
                                    deliver_time: e.value
                                })
                        },
                        a.invoiceRef = {},
                        a.toggleInvoice = function(e) {
                            a.user.user_id && a.checkoutData.invoice.is_available && a.invoices.length && (a.showInvoice = "mouseover" === e.type)
                        },
                        a.selectInvoice = function(e) {
                            a.showInvoice = !1,
                                a.invoiceRef.invoiceValue = e.name,
                                b.updateOrderParams({
                                    invoice: e.name
                                })
                        },
                        a.updateInvoice = function(e) {
                            b.updateOrderParams({
                                invoice: e
                            })
                        },
                        a.deleteInvoice = function(e, t) {
                            e.stopPropagation(),
                                r.invoice["delete"]({
                                    userId: a.user.user_id,
                                    invoiceId: t.id
                                }).$promise.then(function() {
                                    angular.element(e.target).parent().remove(),
                                        a.showInvoice = !1
                                })
                        },
                        a.updateDescription = function(e) {
                            b.updateOrderParams({
                                description: e
                            })
                        };
                    var _ = function(t) {
                        var a = e.defer();
                        return t.is_mobile_valid ? (a.resolve(0), a.promise) : (s({
                                    title: "浣犵殑鎵嬫満娌℃湁缁戝畾锛屾槸鍚︾粦瀹氭墜鏈猴紵",
                                    showCancelButton: !0,
                                    type: "warning"
                                },
                                function(e) {
                                    "confirm" === e ? a.resolve(1) : a.resolve(0)
                                }), a.promise)
                    };
                    a.orderSubmit = function() {
                        a.orderButton.text = "涓嬪崟涓�...",
                            a.orderButton.disabled = !0,
                            e.all().then(function() {
                                return b.checkOrderParams()
                            }).then(function() {
                                return a.user.user_id && _(a.user)
                            }).then(function(e) {
                                return {
                                    params: b.updateOrderParams({
                                        bind_mobile: e
                                    }),
                                    mobile: b.addressData.phone || !1
                                }
                            }).then(function(e) {
                                var t = e.params,
                                    n = e.mobile;
                                return l.cartOrder(t, n, a.user.user_id)
                            }).then(function() {
                                a.user.fetch(),
                                    y.clearCart()
                            })["catch"](function(e) {
                                a.orderButton.text = "纭涓嬪崟",
                                    a.orderButton.disabled = !1,
                                "NO_ADDRESS" === e && s("涓嬪崟鍑洪敊", "璇锋坊鍔犳偍鐨勬敹璐у湴鍧€", "warning"),
                                "ADDRESS_UNVALID" === e && s("涓嬪崟鍑洪敊", "绯荤粺鏃犳硶璇嗗埆鎮ㄧ殑鍦板潃锛岃淇敼鍦板潃", "warning"),
                                "ADDRESS_IS_TOO_FAR" === e && s({
                                        title: "鎵€閫夊湴鍧€瓒呭嚭鍟嗗閰嶉€佽寖鍥�",
                                        message: "浣犻€夋嫨鐨勫湴鍧€瓒呭嚭<b>" + c(b.rstInfo.name) + "</b>鐨勯厤閫佽寖鍥�",
                                        type: "warning",
                                        confirmButtonText: "鎹釜鍟嗗涓嬪崟",
                                        showCancelButton: !0,
                                        cancelButtonText: "閲嶆柊閫夋嫨鍦板潃"
                                    },
                                    function(e) {
                                        "confirm" === e && (i.url("/place/" + b.addressData.st_geohash), a.$apply()),
                                        "cancel" === e && window.scroll(0, 0)
                                    }),
                                "NOT_SELECT_TIME" === e && s("涓嬪崟鍑洪敊", "璇烽€夋嫨閫佽揪鏃堕棿", "warning")
                            })
                    }
                }]
        }
},
function(e, t, a) {
    var n = "/entry/main/checkout/checkout.html",
        i = '<div checkout-guide guide=guide></div><div class="container clearfix"><div ng-if=loading loading content=姝ｅ湪鏌ヨ璐墿杞�...></div><div ng-if="!loading && nofood" nodatatip content="浣犵殑璐墿杞︽槸绌虹殑锛屽幓<a href=\'/place\'>涓嬪崟</a>鍚�"></div><div ng-if="!loading && !nofood" class=checkout-cart checkout-cart=cart></div><div ng-if="!loading && !nofood" class=checkout-content><div class=checkout-select checkout-address checkout-data=checkoutData address-list=addressList address=address isbaisheng=isBaishengRst></div><div class=checkout-select><h2 class=checkout-title>浠樻鏂瑰紡<span class="color-tip checkout-pay-tip">鎺ㄨ崘浣跨敤鍦ㄧ嚎鏀粯锛屼笉鐢ㄦ壘闆讹紝浼樻儬鏇村</span></h2><ul class=clearfix><li class=checkout-pay ng-repeat="pay in payList" ng-click="selectPay(pay.id, pay.disabled)" ng-class="{active: payId === pay.id, disabled: pay.disabled}" tooltip="{{pay.disabled ? pay.disabledText : \'\'}}"><p ng-bind=pay.title></p><p class=color-mute ng-bind=pay.tip></p></li></ul></div><div class=checkout-select><h2 class=checkout-title>閫夋嫨浼樻儬</h2><p class=checkout-info><span class=checkout-infolabel>浣跨敤绾㈠寘</span> <span class=color-mute>鏃犲彲鐢ㄧ孩鍖�<em class=color-stress ng-if=checkout.hongbaoCount>锛堜綘鏈�<em ng-bind=checkout.hongbaoCount></em>涓墜鏈虹涓撶敤绾㈠寘锛屼笅杞絘pp绔嬪嵆浣跨敤锛�</em></span></p><p class=checkout-info><span class=checkout-infolabel>浣跨敤浼樻儬鍒�</span> <span class=color-mute>缃戠珯涓嶆敮鎸�<em class=color-stress>锛堜粎鎵嬫満瀹㈡埛绔彲鐢級</em></span></p></div><div class=checkout-select><h2 class=checkout-title>鍏朵粬淇℃伅</h2><div class=checkout-info><span class=checkout-infolabel>閰嶉€佹柟寮�</span> <span>鏈鍗曠敱<a ng-bind="\' [\' + delivery + \'] \'"></a>鎻愪緵閰嶉€�</span></div><div class=checkout-info ng-show=showDeliverTime><span class=checkout-infolabel>閫佽揪鏃堕棿</span><div formselect data=bookTimes choosed=time selectfn=updateDeliverTime></div></div><div class=checkout-info><span class=checkout-infolabel>鍙戠エ淇℃伅</span> <span class=checkout-invoice ng-mouseenter=toggleInvoice($event) ng-mouseleave=toggleInvoice($event)><input class=checkout-input placeholder={{checkoutData.invoice.status_text}} ng-disabled=!checkoutData.invoice.is_available ng-model=invoiceRef.invoiceValue ng-change=updateInvoice(invoiceRef.invoiceValue)><ul class=checkout-invoice-list ng-show=showInvoice><li ng-repeat="item in invoices" ng-click=selectInvoice(item)>{{item.name}} <i class=checkout-invoice-delete ng-click="deleteInvoice($event, item)">x</i></li></ul></span></div><div class=checkout-info><span class=checkout-infolabel>璁㈠崟澶囨敞</span> <span><input class=checkout-input ng-model=note ng-change=updateDescription(note)></span></div></div><div><button quicksubmit-trigger submit-visable=checkout.submitVisable class="btn-stress btn-lg" ng-disabled=orderButton.disabled ng-bind=orderButton.text ng-click=orderSubmit()>纭涓嬪崟</button><div class=checkout-dapp><p class=checkout-dapp-tip>鎵爜涓嬭浇APP<br>APP涓嬪崟绔嬩韩浼樻儬</p><i class="icon-qrcode checkout-dapp-qrcode"></i> <i class="icon-uniE029 checkout-dapp-arrow"></i> <img src=' + a(112) + ' alt="鎵竴鎵笅杞介タ浜嗕箞鎵嬫満 App"></div></div></div></div><div class=checkout-quicksubmit ng-hide="checkout.submitVisable || nofood"><div class=container><span class=quick-text>搴斾粯閲戦 <span class=yen>&yen;</span><span class=total ng-bind=cartView.vm.total></span></span> <button class="btn-stress btn-lg" ng-disabled=orderButton.disabled ng-bind=orderButton.text ng-click=orderSubmit()>纭涓嬪崟</button></div></div>';
    window.angular.module("ng").run(["$templateCache",
        function(e) {
            e.put(n, i)
        }]),
        e.exports = n
},
function(e, t) {},
,
,
,
function(e, t, a) {
    "use strict";
    a(368);
    var n = a(370);
    e.exports = ["$q", "$rootScope", "$http", "$templateCache", "$compile", "Popup", "FormModel",
        function(e, t, a, i, r, o, s) {
            var c = t.$new(),
                u = function(e) {
                    return o.extend({
                        defaults: {
                            modal: !0,
                            animation: !1,
                            target: "center",
                            updatePositionOnResize: !0
                        },
                        render: function() {
                            return r(e)(c)[0]
                        }
                    })
                };
            return function(t) {
                return a.get(n, {
                    cache: i
                }).then(function(a) {
                    var n = e.defer(),
                        i = u(a.data),
                        r = new i,
                        o = t.response,
                        l = {
                            mobile_sms: "sms",
                            mobile_sms_review: "sms",
                            mobile_voice_first: "audio",
                            mobile_voice_review: "audio",
                            mobile_login: "sms",
                            mobile_register: "audio"
                        },
                        d = l[o.validation_type];
                    switch (o.validation_type) {
                        case "mobile_register":
                            c.topTip = "涓轰簡淇濊瘉浣犵殑璧勯噾瀹夊叏锛屾垜浠渶瑕侀獙璇佷綘鐨勬墜鏈�",
                                c.bottomTip = "楠岃瘉鎴愬姛鍚庯紝灏嗚嚜鍔ㄤ负浣犲垱寤洪タ浜嗕箞璐︽埛骞跺畬鎴愪笅鍗�";
                            break;
                        case "mobile_login":
                            c.topTip = "浣犵殑鎵嬫満鍙峰凡娉ㄥ唽杩囬タ浜嗕箞璐︽埛锛屼负浜嗕繚璇佷綘鐨勮祫閲戝畨鍏紝鎴戜滑闇€瑕侀獙璇佷綘鐨勬墜鏈�",
                                c.bottomTip = "楠岃瘉鎴愬姛鍚庯紝灏嗚嚜鍔ㄧ櫥褰曚綘鐨勯タ浜嗕箞璐︽埛骞跺畬鎴愪笅鍗�";
                            break;
                        default:
                            c.topTip = "涓轰簡淇濊瘉浣犵殑璧勯噾瀹夊叏锛屾垜浠渶瑕侀獙璇佷綘鐨勬墜鏈�",
                                c.bottomTip = "楠岃瘉鎴愬姛鍚庯紝灏嗗畬鎴愪笅鍗�"
                    }
                    return r.show(),
                        c.closeModal = function() {
                            r.hide(),
                                n.reject("USER_CANCEL")
                        },
                        c.link = {
                            origin: {
                                labelName: "浣犵殑鎵嬫満鍙�",
                                content: t.mobile
                            },
                            verify: {
                                type: "mobile",
                                startCount: d,
                                startVerify: "audio" === d,
                                link: s({
                                    $validators: {
                                        validate_code: [{
                                            type: "required",
                                            hintMessage: "楠岃瘉鐮佹槸蹇呭～椤�",
                                            errorMessage: "璇疯緭鍏ユ墜鏈洪獙璇佺爜",
                                            method: "blur"
                                        }]
                                    },
                                    mobile: t.mobile,
                                    api: t.params.api,
                                    apiParams: t.params.apiParams,
                                    version: t.version,
                                    scene: t.scene,
                                    autoSend: t.autoSend,
                                    sendType: d,
                                    apiExtra: function(e) {
                                        return "audio" === e.type ? angular.extend(e, {
                                                type: "voice"
                                            }) : e
                                    }
                                })
                            },
                            submitText: "涓嬩竴姝�",
                            submit: function() {
                                var e = c.link.verify.link;
                                e.$validate() && (r.hide(), n.resolve({
                                    validation_code: e.validate_code,
                                    validation_token: e.validate_token || o.validation_token
                                }))
                            }
                        },
                        n.promise
                })
            }
        }]
},
function(e, t) {},
,
function(e, t) {
    var a = "/entry/main/checkout/_block/checkout-verifymobile/checkout-verifymobile.html",
        n = '<div class=checkoutverify-modal><a href=javascript: class="modalclose icon-close" ng-click=closeModal()></a><h5>鎵嬫満楠岃瘉</h5><p class=formtip-top ng-bind=topTip></p><div security-verify-form link=link></div><p class=formtip-bottom ng-bind=bottomTip></p></div>';
    window.angular.module("ng").run(["$templateCache",
        function(e) {
            e.put(a, n)
        }]),
        e.exports = a
},
function(e, t, a) {
    "use strict";
    a(372);
    var n = a(374);
    e.exports = ["$q", "$rootScope", "$http", "$templateCache", "$compile", "Popup", "FormModel", "Zero", "notifyServerError",
        function(e, t, a, i, r, o, s, c, u) {
            var l = t.$new(),
                d = function(e) {
                    return o.extend({
                        defaults: {
                            modal: !0,
                            animation: !1,
                            target: "center",
                            updatePositionOnResize: !0
                        },
                        render: function() {
                            return r(e)(l)[0]
                        }
                    })
                };
            return function(t, r) {
                return a.get(n, {
                    cache: i
                }).then(function(t) {
                    var a = e.defer(),
                        n = d(t.data),
                        i = new n;
                    return i.show(),
                        l.mobile = r,
                        l.formLink = s({
                            $validators: {
                                new_password: {
                                    type: "length",
                                    min: 6,
                                    max: 20,
                                    errorMessage: "瀵嗙爜闇€瑕佹槸瀛楁瘝鎴栨暟瀛楋紝鏈€灏�6浣嶏紝鏈€澶�20浣�",
                                    method: "blur"
                                }
                            }
                        }),
                        l.closeModal = function() {
                            i.hide(),
                                a.resolve("USER_CANCEL")
                        },
                        l.submit = function() {
                            return l.formLink.$validate() ? c.profile.put({
                                    action: "password",
                                    type: "user_id",
                                    new_password: l.formLink.new_password
                                }).$promise.then(function() {
                                    i.hide(),
                                        a.resolve("SUCCESS")
                                })["catch"](function(e) {
                                    return e.data && u(e, "璁剧疆瀵嗙爜澶辫触")
                                }) : void 0
                        },
                        a.promise
                })
            }
        }]
},
function(e, t) {},
,
function(e, t) {
    var a = "/entry/main/checkout/_block/checkout-setpassword/checkout-setpassword.html",
        n = '<div class="checkoutverify-modal checkoutpassword-modal"><a href=javascript: class="modalclose icon-close" ng-click=closeModal()></a><h5>娉ㄥ唽骞朵笅鍗�</h5><p class=formtip-top>浣犲凡缁忔垚鍔熸敞鍐岄タ浜嗕箞锛屼箣鍚庡彲浣跨敤浣犻獙璇佽繃鐨勬墜鏈哄彿鐮佺櫥褰曢タ浜嗕箞</p><form class=security-service ng-submit=submit() novalidate><div ng-if=!firstSet form-field label=鎵嬫満鍙风爜 class=field-default><span class="field-default-value default-mobile" ng-bind=mobile></span></div><div form-field label=鐧诲綍瀵嗙爜 model=formLink property=new_password><input type=password name=new_password ng-model=formLink.new_password></div><div form-field class=form-group><button type=submit class="btn-primary btn-lg">璁剧疆瀵嗙爜骞跺畬鎴愪笅鍗�</button></div><div class=passwordmodal-cancelset><a href=javascript: ng-click=closeModal()>绋嶅悗璁剧疆瀵嗙爜锛屽厛涓嬪崟</a></div></form></div>';
    window.angular.module("ng").run(["$templateCache",
        function(e) {
            e.put(a, n)
        }]),
        e.exports = a
},
function(e, t) {
    "use strict";
    function a(e, t) {
        if (! (e instanceof t)) throw new TypeError("Cannot call a class as a function")
    }
    var n = function() {
        function e(e, t) {
            for (var a = 0; a < t.length; a++) {
                var n = t[a];
                n.enumerable = n.enumerable || !1,
                    n.configurable = !0,
                "value" in n && (n.writable = !0),
                    Object.defineProperty(e, n.key, n)
            }
        }
        return function(t, a, n) {
            return a && e(t.prototype, a),
            n && e(t, n),
                t
        }
    } ();
    e.exports = ["$q", "$location", "Zero", "checkoutMobileVerify", "checkoutSetPassword", "MessageBox", "notifyServerError", "Loading", "checkoutCartView",
        function(e, t, i, r, o, s, c, u, l) {
            var d = function g(t) {
                    return r(t).then(function(e) {
                        return i.cartOrder.post(angular.extend({},
                            t.params, e)).$promise
                    }).then(function(e) {
                        return angular.extend(e, {
                            validation_type: t.response.validation_type
                        })
                    })["catch"](function(a) {
                        if (a.data && ("INVALID_VALIDATE_CODE" === a.data.name || "INVALID_VERIFY_CODE" === a.data.name)) {
                            var n = function() {
                                var a = e.defer();
                                return s({
                                        title: "楠岃瘉鐮侀敊璇�",
                                        message: "璇烽噸鏂板～鍐欓獙璇佺爜",
                                        type: "error"
                                    },
                                    function() {
                                        return a.resolve(g(t))
                                    }),
                                    {
                                        v: a.promise
                                    }
                            } ();
                            if ("object" == typeof n) return n.v
                        }
                        return e.reject(a)
                    })
                },
                p = function(e, t) {
                    return o(e.user_id, t).then(function() {
                        return e
                    })
                },
                h = function(a, n, r) {
                    return e.all().then(function() {
                        return i.cartOrder.post(a).$promise
                    }).then(function(e) {
                        return e.need_validation ? (angular.extend(a, {
                                api: i.cart.post,
                                apiParams: {
                                    action: "verify_code",
                                    cartId: a.cartId,
                                    sig: a.sig
                                }
                            }), d({
                                params: a,
                                response: e,
                                mobile: e.validation_phone
                            })) : e
                    }).then(function(e) {
                        return "mobile_register" === e.validation_type ? p(e, n) : e
                    }).then(function(e) {
                        return 0 === a.paymethod_id ? t.url("/order/" + e.unique_id + "/success/offline") : !e.is_new_pay && e.hasOwnProperty("is_new_pay") && 1 === a.paymethod_id ? t.url("/order/" + e.unique_id + "/pay") : (e.user_profile && (r = e.user_profile.user_id), i.payments.getText({
                                    user_id: r,
                                    order_id: e.unique_id
                                }).$promise.then(function(e) {
                                    location.href = e.data
                                }))
                    })["catch"](function(t) {
                        return "FINISHED" !== t && t.data ? (c(t, "涓嬪崟鍑洪敊"), e.reject("CATCHED")) : e.reject(t)
                    })
                },
                m = function(e, t) {
                    return ! e.st_geohash || 1 === e.poi_type && t ? (e.needupgrade = !0, !0) : e.is_deliverable ? !1 : !0
                },
                f = function() {
                    function t() {
                        a(this, t)
                    }
                    return n(t, [{
                        key: "init",
                        value: function() {
                            var e = arguments.length <= 0 || void 0 === arguments[0] ? {}: arguments[0],
                                t = arguments.length <= 1 || void 0 === arguments[1] ? {}: arguments[1],
                                a = arguments.length <= 2 || void 0 === arguments[2] ? {}: arguments[2],
                                n = arguments.length <= 3 || void 0 === arguments[3] ? -1 : arguments[3],
                                i = arguments.length <= 4 || void 0 === arguments[4] ? {}: arguments[4];
                            this.orderParamsData = angular.extend({
                                    userId: "anonymous",
                                    cartId: t.id,
                                    come_from: "web",
                                    sig: t.sig,
                                    paymethod_id: n,
                                    description: "",
                                    deliver_time: "",
                                    invoice: "",
                                    bind_mobile: ""
                                },
                                e),
                                this.cartData = t,
                                this.addressData = a || {},
                                this.paymethod_id = n,
                                this.rstInfo = i,
                                this.invoiceAvailable = e.invoiceAvailable
                        }
                    },
                        {
                            key: "updateOrderParams",
                            value: function(e) {
                                return angular.extend(this.orderParamsData, e)
                            }
                        },
                        {
                            key: "updateCart",
                            value: function(e) {
                                return this.post({
                                    entities: e
                                })
                            }
                        },
                        {
                            key: "updateAddress",
                            value: function(e) {
                                var t = this;
                                return this.post({
                                    address_id: e
                                }).then(function() {
                                    t.updateOrderParams({
                                        address_id: e
                                    })
                                })
                            }
                        },
                        {
                            key: "updatePaymethod",
                            value: function(e) {
                                return this.post({
                                    paymethod_id: e
                                })
                            }
                        },
                        {
                            key: "post",
                            value: function(t) {
                                var a = this,
                                    n = (new u).init("鍔犺浇涓�...");
                                return n.show(),
                                    i.cart.post(angular.extend({
                                            action: "checkout",
                                            come_from: "web",
                                            geohash: localStorage.getItem("GEOHASH"),
                                            cartId: this.cartData.cartId,
                                            sig: this.cartData.sig,
                                            address_id: t.address_id || this.orderParamsData.address_id,
                                            entities: t.entities || this.cartData.group,
                                            paymethod_id: t.paymethod_id || this.paymethod_id
                                        },
                                        t)).$promise.then(function(t) {
                                        var i = t.cart,
                                            r = t.sig,
                                            o = t.current_address,
                                            s = t.payments,
                                            c = t.invoice;
                                        return c.is_available = !1,
                                            c.status_text = "浠呭湪楗夸簡涔� APP 涓敮鎸佸紑鍙戠エ鍝�",
                                            null === o ? e.reject({
                                                    data: {
                                                        name: "ADDRESS_NO_VALID",
                                                        message: "鍦板潃瓒呭嚭閰嶉€佽寖鍥�,璇烽噸鏂版坊鍔 "
                                                    }
                                                }) : (n.hide(), a.cartData = i, l.vm = l.$sort(i), a.addressData = o, a.paymethod_id = s.filter(function(e) {
                                                    return 1 === e.select_state
                                                })[0].id, a.invoiceAvailable(c), a.updateOrderParams({
                                                    cartId: i.id,
                                                    sig: r,
                                                    paymethod_id: a.paymethod_id
                                                }), {
                                                    cartData: i,
                                                    current_address: o
                                                })
                                    })["catch"](function(t) {
                                        return c(t),
                                            n.hide(),
                                            e.reject({
                                                name: "SYSTEM_ERROR"
                                            })
                                    })
                            }
                        },
                        {
                            key: "checkOrderParams",
                            value: function() {
                                var t = this.addressData || {};
                                return t.id ? t.st_geohash ? this.rstInfo.only_use_poi && 1 === t.poi_type ? e.reject("ADDRESS_UNVALID") : this.cartData.is_address_too_far ? e.reject("ADDRESS_IS_TOO_FAR") : -1 === this.orderParamsData.deliver_time ? e.reject("NOT_SELECT_TIME") : this.orderParamsData: e.reject("ADDRESS_UNVALID") : e.reject("NO_ADDRESS")
                            }
                        }]),
                        t
                } ();
            return {
                cartOrder: h,
                isAddressUnvalid: m,
                checker: new f
            }
        }]
},
function(e, t) {
    "use strict";
    function a(e) {
        if (Array.isArray(e)) {
            for (var t = 0,
                     a = Array(e.length); t < e.length; t++) a[t] = e[t];
            return a
        }
        return Array.from(e)
    }
    function n(e, t) {
        if (! (e instanceof t)) throw new TypeError("Cannot call a class as a function")
    }
    var i = function() {
        function e(e, t) {
            for (var a = 0; a < t.length; a++) {
                var n = t[a];
                n.enumerable = n.enumerable || !1,
                    n.configurable = !0,
                "value" in n && (n.writable = !0),
                    Object.defineProperty(e, n.key, n)
            }
        }
        return function(t, a, n) {
            return a && e(t.prototype, a),
            n && e(t, n),
                t
        }
    } ();
    e.exports = function() {
        return new(function() {
            function e() {
                n(this, e),
                    this.orderButton = {},
                    this.nofood = {}
            }
            return i(e, [{
                key: "init",
                value: function(e, t, a) {
                    return this.vm = this.$sort(e),
                        this.pieces = this.$count(e),
                        this.$localCart = t,
                        this.$checker = a,
                        this.updateOrderButton(e),
                        this
                }
            },
                {
                    key: "$sort",
                    value: function(e) {
                        return e.group = e.group.map(function(e) {
                            return e.sort(function(e, t) {
                                return t.id - e.id
                            })
                        }),
                            e
                    }
                },
                {
                    key: "$count",
                    value: function(e) {
                        var t;
                        return (t = []).concat.apply(t, a(e.group)).reduce(function(e, t) {
                                return e + t.quantity
                            },
                            0)
                    }
                },
                {
                    key: "add",
                    value: function(e) {
                        return this.updateVM(e, e.quantity + 1)
                    }
                },
                {
                    key: "sub",
                    value: function(e) {
                        return this.updateVM(e, e.quantity - 1)
                    }
                },
                {
                    key: "update",
                    value: function(e) {
                        return e.quantity ? this.updateVM(e, e.quantity) : void 0
                    }
                },
                {
                    key: "blur",
                    value: function(e) {
                        return e.quantity = 1,
                            this.updateVM(e, e.quantity)
                    }
                },
                {
                    key: "updateOrderButton",
                    value: function(e) {
                        var t, n = (t = []).concat.apply(t, a(e.group)).reduce(function(e, t) {
                                return e + t.quantity * t.price
                            },
                            0),
                            i = (e.restaurant_minimum_order_amount - n).toFixed(2),
                            r = this.$localCart.getOrderState(!this.pieces, i, e.restaurant_status),
                            o = r.name,
                            s = r.text,
                            c = r.disabled;
                        "CAN_ORDER" === o && (s = "纭涓嬪崟"),
                            angular.extend(this.orderButton, {
                                text: s,
                                disabled: c
                            })
                    }
                },
                {
                    key: "updateVM",
                    value: function(e, t) {
                        var a = this;
                        if (!this.disabledState) {
                            var n = parseInt(t, 10);
                            return e.quantity = isNaN(n) ? 1 : n,
                                this.disabledState = !0,
                                this.orderButton.disabled = !0,
                                this.vm.group = this.vm.group.map(function(e) {
                                    return e.filter(function(e) {
                                        return e.quantity > 0
                                    })
                                }).filter(function(e) {
                                    return e.length > 0
                                }),
                                this.vm.group.length ? this.$checker.updateCart(this.vm.group).then(function(e) {
                                        var t = e.cartData;
                                        a.$localCart.updateFromCartData(t),
                                            a.disabledState = !1,
                                            a.vm = a.$sort(t),
                                            a.pieces = a.$count(t),
                                            a.updateOrderButton(t)
                                    })["catch"](function() {
                                        a.disabledState = !1
                                    }) : (this.$localCart.clearCart(), angular.extend(this.nofood, {
                                        nofood: !0
                                    }))
                        }
                    }
                }]),
                e
        } ())
    }
},
function(e, t, a) {
    "use strict";
    a(378);
    var n = a(382);
    e.exports = ["LocalCart", "checkoutCartView", "checkoutService",
        function(e, t, a) {
            return {
                templateUrl: n,
                scope: {
                    cartData: "=checkoutCart"
                },
                controller: ["$scope",
                    function(n) {
                        var i = new e,
                            r = a.checker;
                        n.cart = t.init(n.cartData, i, r)
                    }]
            }
        }]
},
function(e, t) {},
,
,
,
function(e, t) {
    var a = "/entry/main/checkout/_block/checkout-cart/checkout-cart.html",
        n = '<div class=checkoutcart-container><div class=checkoutcart-title><h2>璁㈠崟璇︽儏</h2><a ng-href=/shop/{{$root.layoutState.rstUrl}}>&lt; 杩斿洖鍟嗗淇敼</a></div><div class="checkoutcart-tablerow tablehead"><div class="cell itemname">鍟嗗搧</div><div class="cell itemquantity">浠芥暟</div><div class="cell itemtotal">灏忚锛堝厓锛�</div></div><dl ng-if=basket.length ng-repeat="basket in cart.vm.group" class=checkoutcart-group><dt ng-bind="$index + 1 + \'鍙疯喘鐗╄溅\'" class=checkoutcart-grouptitle><dd ng-repeat="item in basket"><div class=checkoutcart-tablerow><div class="cell itemname" ng-bind=item.name title={{item.name}}></div><div class="cell itemquantity"><button ng-click=cart.sub(item)>-</button><input ng-model=item.quantity ng-change=cart.update(item) ng-blur=cart.blur(item)><button ng-click=cart.add(item)>+</button></div><div class="cell itemtotal" ng-bind="\'&yen;\' + (item.price * item.quantity | number:2)"></div></div></dl><ul ng-if="cart.vm.extra || cart.vm.records"><li ng-repeat="item in cart.vm.extra" class="checkoutcart-tablerow extra"><div class="cell itemname"><span ng-bind=item.name title={{item.name}}></span> <span ng-if="item.name === \'閰嶉€佽垂\'" class=icon-circle-help tooltip={{cart.vm.service_fee_explanation}} tooltip-placement=left></span></div><div class="cell itemquantity"></div><div class="cell itemtotal" ng-class="{minus: item.price < 0}" ng-bind="\'&yen;\' + (item.price | number:2)"></div></li><li ng-repeat="item in cart.vm.records"><div class="cell itemname" ng-bind=item.name title={{item.name}}></div><div class="cell itemquantity"></div><div class="cell itemtotal" ng-class="{minus: item.amount < 0}" ng-bind="\'&yen;\' + (item.amount | number:2)"></div></li></ul><div class="checkoutcart-total color-stress">&yen;<span class=num ng-bind="cart.vm.total | number: 2"></span></div><div class=checkoutcart-totalextra>鍏� <span ng-bind=cart.pieces></span> 浠藉晢鍝�<span ng-if=cart.vm.benefit>锛屽凡浼樻儬 <span ng-bind=""></span> 鍏�<span></span></span></div></div>';
    window.angular.module("ng").run(["$templateCache",
        function(e) {
            e.put(a, n)
        }]),
        e.exports = a
},
function(e, t, a) {
    "use strict";
    a(384);
    var n = a(386);
    e.exports = ["$q", "$rootScope", "$http", "$templateCache", "$compile", "Popup", "checkoutService", "notifyServerError",
        function(e, t, a, i, r, o, s, c) {
            var u = function(e) {
                return a.get(n, {
                    cache: i
                }).then(function(t) {
                    var a = o.extend({
                        defaults: {
                            modal: !0,
                            animation: !1,
                            target: "center",
                            updatePositionOnResize: !0
                        },
                        render: function() {
                            return r(t.data)(e)[0]
                        }
                    });
                    return new a
                })
            };
            return {
                scope: {
                    cart: "="
                },
                link: function(e, t) {
                    return u(e).then(function(a) {
                        var n = {},
                            i = void 0;
                        t.on("click",
                            function() {
                                a.dom = null,
                                    a.show(),
                                    i = angular.element(a.dom.querySelector("#cartmini"))
                            }),
                            e.showCartMini = function(e, t) {
                                var a = t.target.parentNode;
                                n = e,
                                    i.css({
                                        display: "block"
                                    }),
                                    a.appendChild(i[0])
                            },
                            e.hideCartMini = function() {
                                return i.css({
                                    display: "none"
                                })
                            },
                            e.addGarnishTo = function(t) {
                                e.hideCartMini(),
                                    s.addGarnish(n, t).then(function() {
                                        return n.quantity++
                                    })["catch"](function(e) {
                                        return c(e, "閰嶈彍娣诲姞澶辫触锛�")
                                    })
                            },
                            e.closeModal = function() {
                                e.hideCartMini(),
                                    a.hide()
                            }
                    })
                }
            }
        }]
},
function(e, t) {},
,
function(e, t) {
    var a = "/entry/main/checkout/_block/checkout-cartgarnish/checkout-cartgarnish.html",
        n = '<div class=checkoutgarnish-modal><a class="icon-close modalclose" href=javascript: ng-click=closeModal()></a><h4>娣诲姞閰嶈彍</h4><div class=checkoutgarnish-listbox><ul><li class=checkoutgarnish-row ng-repeat="garnish in garnishList"><span class="cell name" ng-bind=garnish.name></span> <span class="cell price"><span class="cellitem yen">&yen;</span><span class="cellitem num" ng-bind=garnish.price></span> <span ng-if=garnish.quantity><span class="cellitem x">x</span><span ng-bind=garnish.quantity></span></span></span> <span class="cell action"><button class="cellitem button" type=button ng-click="showCartMini(garnish, $event)">娣诲姞鍒�</button></span></li></ul><div class=checkoutgarnish-cart id=cartmini><dl class=checkoutgarnish-cartgroup ng-repeat="basket in cart.group"><dt ng-bind="$index + 1 + \'鍙疯喘鐗╄溅\'"><dd class="cell itemname" ng-repeat="item in basket" ng-bind=item.name title={{item.name}} ng-click=addGarnishTo(item)></dl><div class="checkoutgarnish-arrow icon-profile-right-arrow"></div></div></div><button class="modalconfirm btn-lg" type=button ng-click=closeModal()>閫夊ソ浜�</button></div>';
    window.angular.module("ng").run(["$templateCache",
        function(e) {
            e.put(a, n)
        }]),
        e.exports = a
},
function(e, t, a) {
    "use strict";
    var n = a(388);
    a(389);
    var i = function() {
        return {
            restrict: "A",
            replace: !0,
            templateUrl: n,
            scope: {
                guide: "="
            },
            link: function(e) {
                e.a = 1
            }
        }
    };
    e.exports = i
},
function(e, t) {
    var a = "/entry/main/checkout/_block/checkout-guide/checkout-guide.html",
        n = '<div class=checkoutguide><div class=container><a class="checkoutguide-logo icon-logo" href="/"></a> <span class=checkoutguide-text ng-bind=guide.text></span><div class="checkoutguide-content step{{guide.step}}" ng-if=guide.step><span class=checkoutguide-item ng-class="{active: guide.step >= 1}">閫夋嫨鍟嗗搧</span> <span class=checkoutguide-item ng-class="{active: guide.step >= 2}">纭璁㈠崟淇℃伅</span> <span class=checkoutguide-item ng-class="{active: guide.step >= 3}">鎴愬姛鎻愪氦璁㈠崟</span><p class=checkoutguide-line><span class="line line1"></span> <span class="line line2"></span> <span class="line line3"></span> <span class="line line4"></span></p></div></div></div>';
    window.angular.module("ng").run(["$templateCache",
        function(e) {
            e.put(a, n)
        }]),
        e.exports = a
},
function(e, t) {},
,
function(e, t, a) {
    "use strict";
    var n = a(392);
    a(393);
    var i = ["$rootScope", "Address", "MessageBox", "checkoutService", "Zero",
        function(e, t, a, i, r) {
            return {
                restrict: "A",
                replace: !0,
                templateUrl: n,
                scope: {
                    checkoutData: "=",
                    addressList: "=",
                    address: "=",
                    isbaisheng: "="
                },
                controller: ["$scope",
                    function(n) {
                        "undefined" == typeof n.addressList && (n.addressList = [], n.address && n.addressList.push(n.address));
                        var o = i.checker,
                            s = i.isAddressUnvalid;
                        n.$$postDigest(function() {
                            t.init({
                                userId: e.user.user_id,
                                geohash: e.geohash,
                                poiOnly: !0
                            }),
                                r.cartAddress.query({
                                    cartId: n.checkoutData.cart.id,
                                    sig: n.checkoutData.sig
                                }).$promise.then(function(e) {
                                    n.addressList = e,
                                        n.address ? o.updateOrderParams({
                                                address_id: n.address.id
                                            }) : n.noInitAddress = !0
                                })
                        }),
                            n.selectAddress = function(e, t) {
                                s(t, n.isbaisheng) || "click" !== e.type || n.address && n.address.id === t.id || (n.address = t, o.updateAddress(n.address.id))
                            },
                            n.addAddress = function() {
                                t.add(function(e) {
                                    o.updateAddress(e.id).then(function() {
                                        n.address = e,
                                            n.addressList.unshift(e)
                                    })["catch"](function() {
                                        n.address = {}
                                    })
                                })
                            },
                            n.removeAddress = function(e, i) {
                                e.stopPropagation(),
                                    a({
                                            title: "纭畾鍒犻櫎閫佽揣鍦板潃锛�",
                                            type: "warning",
                                            showCancelButton: !0
                                        },
                                        function(e) {
                                            "confirm" === e && t.remove(i).then(function() {
                                                n.addressList.splice(n.addressList.indexOf(i), 1),
                                                n.address.id === i.id && (n.address = n.addressList[0], n.address ? o.updateAddress(n.address.id) : o.updateAddress(null))
                                            })
                                        })
                            },
                            n.editAddress = function(e, a) {
                                e.stopPropagation(),
                                    t.edit(a,
                                        function(e) {
                                            a.st_geohash = e.st_geohash,
                                                n.address = angular.extend(a, e),
                                                o.updateAddress(n.address.id)
                                        })
                            }
                    }]
            }
        }];
    e.exports = i
},
function(e, t) {
    var a = "/entry/main/checkout/_block/checkout-address/checkout-address.html",
        n = '<div><h2>鏀惰揣鍦板潃 <a ng-show=addressList.length class=checkout-addaddress href=javascript: ng-click=addAddress()>娣诲姞鏂板湴鍧€</a></h2><a class=checkout-noaddress ng-if=!addressList.length href=javascript: ng-click=addAddress()>+ 娣诲姞鏂板湴鍧€</a><ul ng-hide=!addressList.length class=checkout-address-list ng-class="{ showmore: showMoreAddress, showfirst: noInitAddress }"><li class=checkout-address ng-repeat="item in addressList" ng-click="selectAddress($event, item)" ng-class="{active: address.id === item.id}" ng-mouseenter="selectAddress($event, item)"><i class="checkout-address-icon icon-location-line"></i><div class=checkout-address-info><p ng-bind="item.name + [\' \', \' 鍏堢敓 \', \' 濂冲＋ \'][item.sex] + item.phone"></p><p class=color-weak ng-bind="item.address + item.address_detail"></p></div><div class=checkout-address-edit><a href=javascript: ng-click="editAddress($event, item)">淇敼</a> <a href=javascript: ng-click="removeAddress($event, item)">脳</a></div><p ng-if=!item.st_geohash ng-show=item.needupgrade class=checkout-address-needupgrade>涓轰簡鎻愪緵鏇村ソ鐨勯厤閫佹湇鍔★紝闇€瑕佷綘瀹屽杽鍦板潃淇℃伅 <button class="btn-stress btn-sm" ng-click="editAddress($event, item)">鍗囩骇鍦板潃</button></p><p ng-if=!item.is_deliverable ng-show=!item.is_deliverable class=checkout-address-needupgrade>鍦板潃瓒呭嚭閰嶉€佽寖鍥�</p><p ng-if="item.st_geohash && item.poi_type === 1 && isbaisheng" ng-show=item.needupgrade class=checkout-address-needupgrade>鍟嗗鏈兘璇嗗埆浣犵殑浣嶇疆淇℃伅锛屼綘闇€瑕佷负鍟嗗鎻愪緵鍑嗙‘鐨勯€佽揣浣嶇疆 <button class="btn-stress btn-sm" ng-click="editAddress($event, item)">鍗囩骇鍦板潃</button></p></li><a class=checout-showmoreaddress href=javascript: ng-click="showMoreAddress = true" ng-show="!showMoreAddress && addressList.length > 1">鏄剧ず鏇村鍦板潃<i class=icon-arrow-down></i></a> <a class=checout-showmoreaddress href=javascript: ng-click="showMoreAddress = false" ng-show="showMoreAddress && addressList.length > 1">鏀惰捣<i class=icon-arrow-up></i></a></ul></div>';
    window.angular.module("ng").run(["$templateCache",
        function(e) {
            e.put(a, n)
        }]),
        e.exports = a
},
function(e, t) {},
,
function(e, t, a) {
    "use strict";
    var n = a(396);
    a(397);
    var i = ["$rootScope", "$scope", "$routeParams", "$location", "$filter", "$interval", "$q", "$http", "checkoutMobileVerify", "Zero", "notifyServerError", "FormModel", "Dialog", "MessageBox",
        function(e, t, a, n, i, r, o, s, c, u, l, d, p, h) {
            e.layoutState = {
                type: "checkout",
                hideSidebar: !0
            },
                t.$on("$destroy",
                    function() {
                        return e.layoutState = {}
                    }),
                t.guide = {
                    text: "鏀堕摱鍙�"
                },
                t.forgetUrl = e.ACCOUNTBASE + ("/forget?redirect_url=" + encodeURIComponent(location.href));
            var m = a.orderId,
                f = function(e) {
                    var a = e[0];
                    if (t.address = {
                            name: a.consignee,
                            phone: a.phone,
                            address: a.address
                        },
                        -5 !== a.status_code && -3 !== a.status_code) return void(location.href = "/profile/order/id/" + m);
                    void
                        function() {
                            var e = Date.parse(a.pay_expired_time),
                                n = function s() {
                                    var s = e - (new Date).getTime();
                                    0 >= s && (r.cancel(o), location.href = "/profile/order/id/" + m),
                                        t.timeDown = i("date")(s, "mm:ss")
                                };
                            n();
                            var o = r(n, 1e3)
                        } ();
                    var n = e[1];
                    t.payWay = n.web_online_paymethods.filter(function(e) {
                        return e.is_selected
                    })[0],
                        t.payInfo = n,
                    n.balance_paid_amount && (t.payInfo.balance_pay = n.balance_paid_amount > n.total ? n.total: n.balance_paid_amount)
                };
            t.user.$promise.then(function() {
                return o.all([u.order().get({
                    userId: t.user.user_id,
                    filter: m
                }).$promise, u.order().get({
                    userId: t.user.user_id,
                    filter: m,
                    action: "payments",
                    "extras[]": ["web_online_paymethods"],
                    hongbao_action: 0
                }).$promise])
            }).then(function(e) {
                return f(e)
            })["catch"](function(e) {
                switch (e.data.name) {
                    case "HTTP_NOT_FOUND":
                        n.url("/404");
                        break;
                    case "HTTP_UNAUTHORIZED":
                        location.href = t.ACCOUNTBASE + ("/login?redirect_url=" + encodeURIComponent(location.href));
                        break;
                    default:
                        l(e, "鍑洪敊浜�")
                }
            }),
                t.selectPayWay = function(e) {
                    return t.payWay = e
                },
                t.pay = {};
            var g, v = function() {
                    h({
                            title: "璇峰湪鎵撳紑鐨勯〉闈笂瀹屾垚浠樻",
                            message: "浠樻瀹屾垚鍓嶈涓嶈鍏抽棴姝ょ獥鍙�",
                            type: "warning",
                            showCancelButton: !0,
                            confirmButtonText: "宸插畬鎴愪粯娆�",
                            cancelButtonText: "浠樻閬囧埌闂",
                            buttons: [{
                                action: "reset",
                                content: '<a class="payreset-btn" href="javascript:">杩斿洖閫夋嫨鍏朵粬鏀粯鏂瑰紡 &gt;</a>'
                            }]
                        },
                        function(e) {
                            "confirm" === e && (n.url("/order/" + m + "/success/online"), t.$apply()),
                            "cancel" === e && window.open("/support/question/payment")
                        })
                },
                y = function() {
                    return u.payRecord.get({
                        userId: t.user.user_id,
                        payId: t.payId
                    }).$promise
                };
            t.$on("$destroy",
                function() {
                    return r.cancel(g)
                });
            var b = function(e) {
                    return r.cancel(g),
                        t.payId = e.web.payrecord_id,
                        e.is_completed ? n.url("/order/" + m + "/success/online") : void("tenpay" === t.payWay.icon_name ? (t.pay.wechatQrcode = {
                                    content: e.web.pay_url,
                                    width: 260,
                                    height: 260
                                },
                                    p.show("wechatPayDialog"), g = r(function() {
                                        y().then(function(e) {
                                            2 === e.pay_status && (n.url("/order/" + m + "/success/online"), r.cancel(g))
                                        })
                                    },
                                    1e3)) : (window.open(e.web.pay_url), v()))
                },
                _ = function(e) {
                    var a = o.defer(),
                        n = {
                            come_from: "web",
                            pay_company_id: t.payWay.company,
                            pay_bank: t.payWay.bank,
                            password: t.pay.password
                        };
                    e && (n.validation_token = e.validation_token, n.validation_code = e.validation_code);
                    var i = new XMLHttpRequest,
                        r = t.user.user_id;
                    return i.open("post", "restapi/v1/users/" + r + "/orders/" + m + "/payments", !1),
                        i.onreadystatechange = function() {
                            if (4 === i.readyState && 200 === i.status) a.resolve({
                                data: JSON.parse(i.responseText)
                            });
                            else {
                                var e = JSON.parse(i.responseText);
                                "USER_AUTH_FAIL" === e.name && (e.message = "璇疯緭鍏ユ纭殑鐧诲綍瀵嗙爜"),
                                    a.reject({
                                        data: e
                                    })
                            }
                        },
                        i.send(JSON.stringify(n)),
                        a.promise
                };
            t.payment = function() {
                if (!t.payInfo.need_password || t.pay.password) {
                    t.payInfo.paying = !0;
                    var e = {
                        mobile: t.user.mobile,
                        params: {},
                        autoSend: !0,
                        version: "v2",
                        scene: "payment_limit",
                        response: {
                            validation_type: "mobile_sms"
                        }
                    };
                    o.all().then(function() {
                        return t.payInfo.payment_limit_need_validate && c(e)
                    }).then(function(e) {
                        return _(e)
                    }).then(function(e) {
                        t.payInfo.paying = !1,
                            b(e.data)
                    })["catch"](function(e) {
                        t.payInfo.paying = !1,
                            l(e, "鏀粯澶辫触")
                    })
                }
            }
        }];
    e.exports = {
        templateUrl: n,
        controller: i
    }
},
function(e, t) {
    var a = "/entry/main/checkout/pay/pay.html",
        n = '<div checkout-guide guide=guide></div><div class="pay-header container"><i class="icon-circle-check pay-header-icon"></i><div class=pay-header-info><h2>鎮ㄧ殑璁㈠崟宸叉彁浜ゆ垚鍔燂紒浠樻鍜瘇</h2><span class=color-weak>閫佽揣鑷筹細 <em ng-bind=address.name></em> <em ng-bind="address.phone | mobileMask"></em> <em class=pay-header-address ng-bind=address.address></em></span></div><span class=pay-header-money>搴斾粯鎬婚锛�<em class="color-stress ui-arial">&yen;{{payInfo.total}}</em></span></div><form class="pay-main container" ng-submit=payment()><h2 class=pay-main-title>璇烽€夋嫨浠ヤ笅鏀粯鏂瑰紡 <span class="color-mute pay-timetip">鍓╀綑鏀粯鏃堕棿<em class=color-stress>{{timeDown}}</em>锛岄€炬湡璁㈠崟灏嗚嚜鍔ㄥ彇娑�</span></h2><div class=pay-type ng-if=payInfo.balance_pay><h3 class=pay-main-subtitle>浣欓鏀粯<em class=color-mute>锛堜娇鐢ㄩタ浜嗕箞璐︽埛浣欓鏀粯锛�</em></h3><p class=ui-block-stress>楗夸簡涔堝彲鐢ㄤ綑棰�<span class="pay-balance ui-arial" ng-bind="\'&yen;\' + (payInfo.balance | number:float)"></span> <span class="color-stress pay-balance-useup ui-arial">-&yen;{{payInfo.balance_pay}}</span></p></div><div class=pay-type ng-if=payInfo.online_payment_amount><h3 class=pay-main-subtitle>鍓╀綑<span class="color-stress ui-arial" ng-bind="\'&yen;\' + payInfo.online_payment_amount"></span>鏀粯 <em>锛堣閫夋嫨鍓╀綑閲戦鐨勬敮浠樻柟寮忥級</em></h3><ul class="pay-way clearfix" ng-click=selectPayWay><li class={{way.icon_name}} ng-repeat="way in payInfo.web_online_paymethods" ng-click=selectPayWay(way) ng-class="{active: payWay.name === way.name}" title=浣跨敤{{way.name}}鏀粯></li></ul></div><div ng-if=payInfo.need_password><p>涓轰繚闅滈タ浜嗕箞璐︽埛璧勯噾瀹夊叏锛岃楠岃瘉鐧诲綍瀵嗙爜鎵嶅彲浠ヤ娇鐢ㄤ綑棰濆摝</p><div class=pay-password><span>鐧诲綍瀵嗙爜</span> <input type=password ng-model=pay.password> <a ng-href={{forgetUrl}}>蹇樿瀵嗙爜锛�</a></div></div><button class="btn-stress btn-lg" ng-disabled="payInfo.paying || (payInfo.need_password && !pay.password)">纭鏀粯</button></form><div dialog=wechatPayDialog class=wechatpay-dialog><h3 class=wechatpay-dialog-title>浣跨敤寰俊鏀粯<span class=color-stress ui-arial>&yen;{{payInfo.online_payment_amount}}</span></h3><div content2qrcode config=pay.wechatQrcode class=wechat-qrcode></div><div class=wechatpay-dialog-tip><i class=icon-scan></i><p>璇蜂娇鐢ㄥ井淇℃壂涓€鎵�<br>鎵弿浜岀淮鐮佸畬鎴愭敮浠�</p></div></div><div dialog=mobileVerify><div security-verify-form link=link></div></div>';
    window.angular.module("ng").run(["$templateCache",
        function(e) {
            e.put(a, n)
        }]),
        e.exports = a
},
function(e, t) {},
,
,
,
function(e, t, a) {
    "use strict";
    var n = a(402);
    a(403);
    var i = ["$rootScope", "$scope", "$routeParams", "$location", "$sce", "Zero", "notifyServerError",
        function(e, t, a, n, i, r, o) {
            e.layoutState = {
                type: "checkout",
                hideSidebar: !0
            },
                t.$on("$destroy",
                    function() {
                        return e.layoutState = {}
                    }),
                t.guide = {
                    step: 3,
                    text: "瀹屾垚璁㈠崟"
                },
                t.loading = !0;
            var s = a.orderId,
                c = function(e) {
                    var a = {};
                    a.name = e.consignee,
                        a.phone = e.phone,
                        a.address = e.address,
                        t.address = a,
                        t.order = e,
                        t.loading = !1,
                        e.is_book ? t.leadTime = e.deliver_time: t.leadTime = (new Date).getTime() + 6e4 * e.restaurant.order_lead_time,
                    e.is_online_paid && -1 !== [ - 5, -4, -3].indexOf(e.status_code) && (location.href = "profile/order/id/" + s)
                };
            t.user.$promise.then(function() {
                return r.order(s).get({
                    userId: t.user.user_id,
                    filter: s,
                    "extras[]": ["restaurant"]
                }).$promise
            }).then(function(e) {
                return c(e)
            })["catch"](function(e) {
                switch (e.data.name) {
                    case "HTTP_NOT_FOUND":
                        n.url("/404");
                        break;
                    case "HTTP_UNAUTHORIZED":
                        location.href = t.ACCOUNTBASE + ("/login/#redirect=" + encodeURIComponent(location.href));
                        break;
                    default:
                        o(e, "鍑洪敊浜�")
                }
            })
        }];
    e.exports = {
        templateUrl: n,
        controller: i
    }
},
function(e, t, a) {
    var n = "/entry/main/checkout/success/success.html",
        i = '<div checkout-guide guide=guide></div><div loading ng-if=loading></div><div class="ordersuccess pay-header container" ng-show=!loading><i class="icon-circle-check pay-header-icon"></i><div class=pay-header-info><h2 ng-if=order.is_online_paid>璁㈠崟宸叉垚鍔熸彁浜ゅ苟浠樻锛岃鑰愬績绛夊緟浣犵殑澶栧崠</h2><h2 ng-if=!order.is_online_paid>璁㈠崟宸叉垚鍔熸彁浜わ紝璇疯€愬績绛夊緟浣犵殑澶栧崠</h2><span class=color-weak>閫佽揣鑷筹細 <em ng-bind=address.name></em> <em ng-bind="address.phone | mobileMask"></em> <em class=pay-header-address ng-bind=address.address></em></span><div class=ordersuccess-tip><p>浜彈瀹岀編椋熷悗璇勪环璁㈠崟杩樿兘鑾峰緱绉垎鍝 鏌ョ湅<a href=/profile/points hardjump>鎴戠殑绉垎</a></p><p>棰勬祴閫侀鏃堕棿涓�<em class=color-stress ng-bind="leadTime | date:\'HH:mm\'"></em>锛岃淇濇寔鎵嬫満鐣呴€�</p></div><div class=ordersuccess-action><a class="btn-primary btn-lg" hardjump ng-href=/profile/order/id/{{order.unique_id}}>璁㈠崟璇︽儏</a> <a class=inherit hardjump href=/profile/order>鎴戠殑璁㈠崟</a></div></div><div class=ordersuccess-aside><img src=' + a(112) + " alt=涓嬭浇楗夸簡涔圓PP><p class=color-mute>浣跨敤鎵嬫満APP涓嬪崟锛屼紭鎯犳洿澶�</p></div></div>";
    window.angular.module("ng").run(["$templateCache",
        function(e) {
            e.put(n, i)
        }]),
        e.exports = n
},
function(e, t) {}]);