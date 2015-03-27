(function (e, t, n, r) {
    "use strict";
    var i = [], s = [], o = [], u = 0, a = t.location.hash, f = false, l, c, h = e(t).scrollTop(), p = false,
            d = {
                section: "section",
                sectionName: "section-name",
                easing: "easeOutExpo",
                scrollSpeed: 1100,
                offset: 0,
                scrollbars: true,
                axis: "y",
                target: "html,body",
                touchExceptions: "a",
                before: function () {
                },
                after: function () {
                }};
    e.scrollify = function (r) {
        function a(n) {
            if (s[n]) {
                d.before(n, o);
                if (d.sectionName) {
                    t.location.hash = s[n];
                }
                e(d.target).stop().animate({scrollTop: i[n]}, d.scrollSpeed, d.easing);
                e(d.target).promise().done(function () {
                    d.after(n, o);
                });
            }
        }
        function y(n) {
            e(d.section).each(function (n) {
                if (n > 0) {
                    
                        i[n] = e(this).offset().top + d.offset;
                    

                } else {
                    i[n] = e(this).offset().top;
                }
                if (d.sectionName && e(this).data(d.sectionName)) {
                    s[n] = "#" + e(this).data(d.sectionName).replace(/ /g, "-");
                } else {
                    s[n] = "#" + (n + 1);
                }
                o[n] = e(this);
                if (t.location.hash === s[n]) {
                    u = n;
                    f = true;
                }
            });
            if (true === n) {
                a(u);
            }
        }
        var v = {handleMousedown: function () {
                p = false;
            }, handleMouseup: function () {
                p = true;
            }, handleScroll: function () {
                if (l) {
                    clearTimeout(l);
                }
                l = setTimeout(function () {
                    h = e(t).scrollTop();
                    if (p === false) {
                        return false;
                    }
                    p = false;
                    var n = 1, r = i.length, s = 0, o = Math.abs(i[0] - h), f;
                    for (; n < r; n++) {
                        f = Math.abs(i[n] - h);
                        if (f < o) {
                            o = f;
                            s = n;
                        }
                    }
                    u = s;
                    a(s);
                }, 200);
            }, wheelHandler: function (e, t) {
                e.preventDefault();
                t = t || -e.originalEvent.detail / 3 || e.originalEvent.wheelDelta / 120;
                if (l) {
                    clearTimeout(l);
                }
                l = setTimeout(function () {
                    if (t < 0) {
                        if (u < i.length - 1) {
                            u++;
                        }
                    } else if (t > 0) {
                        if (u > 0) {
                            u--;
                        }
                    }
                    if (u >= 0) {
                        a(u);
                    } else {
                        u = 0;
                    }
                }, 25);
            }, keyHandler: function (e) {
                e.preventDefault();
                if (e.keyCode === 38) {
                    if (u > 0) {
                        u--;
                    }
                    a(u);
                } else if (e.keyCode === 40) {
                    if (u < i.length - 1) {
                        u++;
                    }
                    a(u);
                }
            }, init: function () {
                if (d.scrollbars) {
                    e(t).bind("mousedown", v.handleMousedown);
                    e(t).bind("mouseup", v.handleMouseup);
                    e(t).bind("scroll", v.handleScroll);
                } else {
                    e("body").css({overflow: "hidden"});
                }
                e(n).bind("DOMMouseScroll mousewheel", v.wheelHandler);
                e(n).bind("keyup", v.keyHandler);
            }};
        var m = {touches: {touchstart: {y: -1}, touchmove: {y: -1}, touchend: false, direction: "undetermined"}, options: {distance: 30, timeGap: 800, timeStamp: (new Date).getTime()}, touchHandler: function (t) {
                var n;
                if (typeof t !== "undefined") {
                    if (e(t.target).parents(d.touchExceptions).length < 1 && e(t.target).is(d.touchExceptions) === false) {
                        t.preventDefault();
                    }
                    if (typeof t.touches !== "undefined") {
                        n = t.touches[0];
                        switch (t.type) {
                            case"touchstart":
                                m.options.timeStamp = (new Date).getTime();
                                m.touches.touchend = false;
                            case"touchmove":
                                m.touches[t.type].y = n.pageY;
                                if (m.options.timeStamp + m.options.timeGap < (new Date).getTime() && m.touches.touchend === false) {
                                    m.touches.touchend = true;
                                    if (m.touches.touchstart.y > -1) {
                                        if (Math.abs(m.touches.touchmove.y - m.touches.touchstart.y) > m.options.distance) {
                                            if (m.touches.touchstart.y < m.touches.touchmove.y) {
                                                if (u > 0) {
                                                    u--;
                                                }
                                                a(u);
                                            } else {
                                                if (u < i.length - 1) {
                                                    u++;
                                                }
                                                a(u);
                                            }
                                        }
                                    }
                                }
                                break;
                            case"touchend":
                                if (m.touches[t.type] === false) {
                                    m.touches[t.type] = true;
                                    if (m.touches.touchstart.y > -1) {
                                        if (Math.abs(m.touches.touchmove.y - m.touches.touchstart.y) > m.options.distance) {
                                            if (m.touches.touchstart.y < m.touches.touchmove.y) {
                                                if (u > 0) {
                                                    u--;
                                                }
                                                a(u);
                                            } else {
                                                if (u < i.length - 1) {
                                                    u++;
                                                }
                                                a(u);
                                            }
                                        }
                                    }
                                }
                                ;
                            default:
                                break
                        }
                    }
                }
            }, init: function () {
                if (n.addEventListener) {
                    n.addEventListener("touchstart", m.touchHandler, false);
                    n.addEventListener("touchmove", m.touchHandler, false);
                    n.addEventListener("touchend", m.touchHandler, false);
                }
            }};
        if (typeof r === "string") {
            var g = s.length;
            for (; g >= 0; g--) {
                if (typeof arguments[1] === "string") {
                    if (s[g] === arguments[1]) {
                        u = g;
                        a(g);
                    }
                } else {
                    if (g === arguments[1]) {
                        u = g;
                        a(g);
                    }
                }
            }
        } else {
            d = e.extend(d, r);
            y(false);
            if (f === false && d.sectionName) {
                t.location.hash = s[0];
            } else {
                a(u);
            }
            v.init();
            m.init();
        }
        e(t).resize(function () {
            clearTimeout(c);
            c = setTimeout(function () {
                y(true);
            }, 50);
        });
    };
})(jQuery, this, document);

