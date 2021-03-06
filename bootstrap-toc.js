/*!
 * Bootstrap Table of Contents v0.4.1 (http://afeld.github.io/bootstrap-toc/)
 * Copyright 2015 Aidan Feldman
 * Licensed under MIT (https://github.com/afeld/bootstrap-toc/blob/gh-pages/LICENSE.md) */
! function() {
    "use strict";
    window.Toc = {
        helpers: {
            findOrFilter: function(e, t) {
                var r = e.find(t);
                return e.filter(t).add(r).filter(":not([data-toc-skip])")
            },
            generateUniqueIdBase: function(e) {
                var t = $(e).text(),
                    r = t.trim().toLowerCase().replace(/[^A-Za-z0-9]+/g, "-");
                return r || e.tagName.toLowerCase()
            },
            generateUniqueId: function(e) {
                for (var t = this.generateUniqueIdBase(e), r = 0;; r++) {
                    var n = t;
                    if (r > 0 && (n += "-" + r), !document.getElementById(n)) return n
                }
            },
            generateAnchor: function(e) {
                if (e.id) return e.id;
                var t = this.generateUniqueId(e);
                return e.id = t, t
            },
            createNavList: function() {
                return $('<ul class="nav"></ul>')
            },
            createChildNavList: function(e) {
                var t = this.createNavList();
                return e.append(t), t
            },
            generateNavEl: function(e, t) {
                var r = $("<a></a>");
                r.attr("href", "#" + e), r.text(t);
                var n = $("<li></li>");
                return n.append(r), n
            },
            generateNavItem: function(e) {
                var t = this.generateAnchor(e),
                    r = $(e),
                    n = r.data("toc-text") || r.text();
                return this.generateNavEl(t, n)
            },
            getTopLevel: function(e) {
                for (var t = 2; t <= 2; t++) {
                    var r = this.findOrFilter(e, "h" + t);
                    if (r.length > 1) return t
                }
                return 1
            },
            getHeadings: function(e, t) {
                var r = "h" + t,
                    n = t + 1,
                    a = "h" + n;
                return this.findOrFilter(e, r + "," + a)
            },
            getNavLevel: function(e) {
                return parseInt(e.tagName.charAt(1), 10)
            },
            populateNav: function(e, t, r) {
                var n, a = e,
                    i = this;
                r.each(function(r, o) {
                    var s = i.generateNavItem(o),
                        u = i.getNavLevel(o);
                    u === t ? a = e : n && a === e && (a = i.createChildNavList(n)), a.append(s), n = s
                })
            },
            parseOps: function(e) {
                var t;
                return t = e.jquery ? {
                    $nav: e
                } : e, t.$scope = t.$scope || $(document.body), t
            }
        },
        init: function(e) {
            e = this.helpers.parseOps(e), e.$nav.attr("data-toggle", "toc");
            var t = this.helpers.createChildNavList(e.$nav),
                r = this.helpers.getTopLevel(e.$scope),
                n = this.helpers.getHeadings(e.$scope, r);
            this.helpers.populateNav(t, r, n)
        }
    }, $(function() {
        $('nav[data-toggle="toc"]').each(function(e, t) {
            var r = $(t);
            Toc.init(r)
        })
    })
}();