!(function (e) {
    "use strict";
    e(window).on("load", function () {
      e(".preloader").fadeOut();
    }),
      e(".preloader").length > 0 &&
        e(".preloaderCls").each(function () {
          e(this).on("click", function (t) {
            t.preventDefault(), e(".preloader").css("display", "none");
          });
        }),
      (e.fn.vsmobilemenu = function (t) {
        var s = e.extend(
          {
            menuToggleBtn: ".as-menu-toggle",
            bodyToggleClass: "as-body-visible",
            subMenuClass: "as-submenu",
            subMenuParent: "as-item-has-children",
            subMenuParentToggle: "as-active",
            meanExpandClass: "as-mean-expand",
            appendElement: '<span class="as-mean-expand"></span>',
            subMenuToggleClass: "as-open",
            toggleSpeed: 400,
          },
          t
        );
        return this.each(function () {
          var t = e(this);
          function a() {
            t.toggleClass(s.bodyToggleClass);
            var a = "." + s.subMenuClass;
            e(a).each(function () {
              e(this).hasClass(s.subMenuToggleClass) && (e(this).removeClass(s.subMenuToggleClass), e(this).css("display", "none"), e(this).parent().removeClass(s.subMenuParentToggle));
            });
          }
          t.find("li").each(function () {
            var t = e(this).find("ul");
            t.addClass(s.subMenuClass), t.css("display", "none"), t.parent().addClass(s.subMenuParent), t.prev("a").append(s.appendElement), t.next("a").append(s.appendElement);
          });
          var n = "." + s.meanExpandClass;
          e(n).each(function () {
            e(this).on("click", function (t) {
              var a;
              t.preventDefault(),
                (a = e(this).parent()),
                e(a).next("ul").length > 0
                  ? (e(a).parent().toggleClass(s.subMenuParentToggle), e(a).next("ul").slideToggle(s.toggleSpeed), e(a).next("ul").toggleClass(s.subMenuToggleClass))
                  : e(a).prev("ul").length > 0 && (e(a).parent().toggleClass(s.subMenuParentToggle), e(a).prev("ul").slideToggle(s.toggleSpeed), e(a).prev("ul").toggleClass(s.subMenuToggleClass));
            });
          }),
            e(s.menuToggleBtn).each(function () {
              e(this).on("click", function () {
                a();
              });
            }),
            t.on("click", function (e) {
              e.stopPropagation(), a();
            }),
            t.find("div").on("click", function (e) {
              e.stopPropagation();
            });
        });
      }),
      e(".as-menu-wrapper").vsmobilemenu();
    var t = "";
    e(window).on("scroll", function () {
      var s, a, n, o, i;
      (s = e(".sticky-active")),
        (a = "active"),
        (n = "will-sticky"),
        (o = e(window).scrollTop()),
        (i = s.css("height")),
        s.parent().css("min-height", i),
        e(window).scrollTop() > 800 ? (s.parent().addClass(n), o > t ? s.removeClass(a) : s.addClass(a)) : (s.parent().css("min-height", "").removeClass(n), s.removeClass(a)),
        (t = o),
        e(this).scrollTop() > 500 ? e(".scrollToTop").addClass("show") : e(".scrollToTop").removeClass("show");
    }),
      e(".scrollToTop").each(function () {
        e(this).on("click", function (s) {
          return s.preventDefault(), e("html, body").animate({ scrollTop: 0 }, t / 3), !1;
        });
      }),
      e("[data-bg-src]").length > 0 &&
        e("[data-bg-src]").each(function () {
          var t = e(this).attr("data-bg-src");
          e(this).css("background-image", "url(" + t + ")"), e(this).removeAttr("data-bg-src").addClass("background-image");
        }),
      e("[data-mask-src]").length > 0 &&
        e("[data-mask-src]").each(function () {
          var t = e(this).attr("data-mask-src");
          e(this).css({ "mask-image": "url(" + t + ")", "-webkit-mask-image": "url(" + t + ")" }), e(this).removeAttr("data-mask-src");
        }),
      e(".as-carousel").each(function () {
        var t = e(this);
        function s(e) {
          return t.data(e);
        }
        var a = '<button type="button" class="slick-prev"><i class="' + s("prev-arrow") + '"></i></button>',
          n = '<button type="button" class="slick-next"><i class="' + s("next-arrow") + '"></i></button>';
        e("[data-slick-next]").each(function () {
          e(this).on("click", function (t) {
            t.preventDefault(), e(e(this).data("slick-next")).slick("slickNext");
          });
        }),
          e("[data-slick-prev]").each(function () {
            e(this).on("click", function (t) {
              t.preventDefault(), e(e(this).data("slick-prev")).slick("slickPrev");
            });
          }),
          1 == s("arrows") && (t.closest(".arrow-wrap").length || t.closest(".container").parent().addClass("arrow-wrap")),
          t.slick({
            dots: !!s("dots"),
            fade: !!s("fade"),
            arrows: !!s("arrows"),
            speed: s("speed") ? s("speed") : 1e3,
            asNavFor: !!s("asnavfor") && s("asnavfor"),
            autoplay: 0 != s("autoplay"),
            infinite: 0 != s("infinite"),
            slidesToShow: s("slide-show") ? s("slide-show") : 1,
            adaptiveHeight: !!s("adaptive-height"),
            centerMode: !!s("center-mode"),
            autoplaySpeed: s("autoplay-speed") ? s("autoplay-speed") : 8e3,
            centerPadding: s("center-padding") ? s("center-padding") : "0",
            focusOnSelect: 0 != s("focuson-select"),
            pauseOnFocus: !!s("pauseon-focus"),
            pauseOnHover: !!s("pauseon-hover"),
            variableWidth: !!s("variable-width"),
            vertical: !!s("vertical"),
            verticalSwiping: !!s("vertical"),
            prevArrow: s("prev-arrow") ? a : '<button type="button" class="slick-prev"><i class="far fa-arrow-left"></i></button>',
            nextArrow: s("next-arrow") ? n : '<button type="button" class="slick-next"><i class="far fa-arrow-right"></i></button>',
            rtl: "rtl" == e("html").attr("dir"),
            responsive: [
              { breakpoint: 1600, settings: { arrows: !!s("xl-arrows"), dots: !!s("xl-dots"), slidesToShow: s("xl-slide-show") ? s("xl-slide-show") : s("slide-show"), centerMode: !!s("xl-center-mode"), centerPadding: 0 } },
              { breakpoint: 1400, settings: { arrows: !!s("ml-arrows"), dots: !!s("ml-dots"), slidesToShow: s("ml-slide-show") ? s("ml-slide-show") : s("slide-show"), centerMode: !!s("ml-center-mode"), centerPadding: 0 } },
              {
                breakpoint: 1200,
                settings: { arrows: !!s("lg-arrows"), dots: !!s("lg-dots"), slidesToShow: s("lg-slide-show") ? s("lg-slide-show") : s("slide-show"), centerMode: !!s("lg-center-mode") && s("lg-center-mode"), centerPadding: 0 },
              },
              {
                breakpoint: 992,
                settings: { arrows: !!s("md-arrows"), dots: !!s("md-dots"), slidesToShow: s("md-slide-show") ? s("md-slide-show") : 1, centerMode: !!s("md-center-mode") && s("md-center-mode"), centerPadding: 0 },
              },
              {
                breakpoint: 768,
                settings: { arrows: !!s("sm-arrows"), dots: !!s("sm-dots"), slidesToShow: s("sm-slide-show") ? s("sm-slide-show") : 1, centerMode: !!s("sm-center-mode") && s("sm-center-mode"), centerPadding: 0 },
              },
              {
                breakpoint: 576,
                settings: { arrows: !!s("xs-arrows"), dots: !!s("xs-dots"), slidesToShow: s("xs-slide-show") ? s("xs-slide-show") : 1, centerMode: !!s("xs-center-mode") && s("xs-center-mode"), centerPadding: 0 },
              },
            ],
          });
      }),
      e("[data-ani-duration]").each(function () {
        var t = e(this).data("ani-duration");
        e(this).css("animation-duration", t);
      }),
      e("[data-ani-delay]").each(function () {
        var t = e(this).data("ani-delay");
        e(this).css("animation-delay", t);
      }),
      e("[data-ani]").each(function () {
        var t = e(this).data("ani");
        e(this).addClass(t), e(".slick-current [data-ani]").addClass("as-animated");
      }),
      e(".as-carousel").on("afterChange", function (t, s, a, n) {
        e(s.$slides).find("[data-ani]").removeClass("as-animated"), e(s.$slides[a]).find("[data-ani]").addClass("as-animated");
      });
    var s,
      a,
      n,
      o = ".ajax-contact",
      i = '[name="email"]',
      r = e(".form-messages");
    function l() {
      var t = e(o).serialize();
      (function () {
        var t,
          s = !0;
        function a(a) {
          a = a.split(",");
          for (var n = 0; n < a.length; n++) (t = o + " " + a[n]), e(t).val() ? (e(t).removeClass("is-invalid"), (s = !0)) : (e(t).addClass("is-invalid"), (s = !1));
        }
        a('[name="name"],[name="email"],[name="subject"],[name="message"]'),
          e(i).val() &&
          e(i)
            .val()
            .match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)
            ? (e(i).removeClass("is-invalid"), (s = !0))
            : (e(i).addClass("is-invalid"), (s = !1));
        return s;
      })() &&
        jQuery
          .ajax({ url: e(o).attr("action"), data: t, type: "POST" })
          .done(function (t) {
            r.removeClass("error"), r.addClass("success"), r.text(t), e(o + ' input:not([type="submit"]),' + o + " textarea").val("");
          })
          .fail(function (e) {
            r.removeClass("success"), r.addClass("error"), "" !== e.responseText ? r.html(e.responseText) : r.html("Oops! An error occured and your message could not be sent.");
          });
    }
    function c(e) {
      return parseInt(e, 10);
    }
    e(o).on("submit", function (e) {
      e.preventDefault(), l();
    }),
      (s = ".sidemenu-wrapper"),
      (a = ".sideMenuCls"),
      (n = "show"),
      e(".sideMenuToggler").on("click", function (t) {
        t.preventDefault(), e(s).addClass(n);
      }),
      e(s).on("click", function (t) {
        t.stopPropagation(), e(s).removeClass(n);
      }),
      e(s + " > div").on("click", function (t) {
        t.stopPropagation(), e(s).addClass(n);
      }),
      e(a).on("click", function (t) {
        t.preventDefault(), t.stopPropagation(), e(s).removeClass(n);
      }),
      (function (t, s, a, n) {
        e(s).on("click", function (s) {
          s.preventDefault(), e(t).addClass(n);
        }),
          e(t).on("click", function (s) {
            s.stopPropagation(), e(t).removeClass(n);
          }),
          e(t)
            .find("form")
            .on("click", function (s) {
              s.stopPropagation(), e(t).addClass(n);
            }),
          e(a).on("click", function (s) {
            s.preventDefault(), s.stopPropagation(), e(t).removeClass(n);
          });
      })(".popup-search-box", ".searchBoxToggler", ".searchClose", "show"),
      e(".popup-image").magnificPopup({ type: "image", gallery: { enabled: !0 } }),
      e(".popup-video").magnificPopup({ type: "iframe" }),
      e(".popup-content").magnificPopup({ type: "inline", midClick: !0 }),
      e(".filter-active").imagesLoaded(function () {
        if (e(".filter-active").length > 0) {
          var t = e(".filter-active").isotope({ itemSelector: ".filter-item", filter: "*", masonry: { columnWidth: 1 } });
          e(".filter-menu-active").on("click", "button", function () {
            var s = e(this).attr("data-filter");
            t.isotope({ filter: s });
          }),
            e(".filter-menu-active").on("click", "button", function (t) {
              t.preventDefault(), e(this).addClass("active"), e(this).siblings(".active").removeClass("active");
            });
        }
      }),
      e(".date-pick").datetimepicker({ timepicker: !1, datepicker: !0, format: "d-m-y", step: 10 }),
      e(".time-pick").datetimepicker({ datepicker: !1, format: "H:i", step: 30 }),
      e(".counter-number").counterUp({ delay: 10, time: 1e3 }),
      (e.fn.vsTab = function (t) {
        var s = e.extend({ sliderTab: !1, tabButton: "button" }, t);
        e(this).each(function () {
          var t = e(this),
            a = t.find(s.tabButton);
          t.append('<span class="indicator"></span>');
          var n = t.find(".indicator");
          if (
            (a.on("click", function (t) {
              t.preventDefault();
              var a = e(this);
              a.addClass("active").siblings().removeClass("active"), s.sliderTab ? e(o).slick("slickGoTo", a.data("slide-go-to")) : r();
            }),
            s.sliderTab)
          ) {
            var o = t.data("asnavfor"),
              i = 0;
            a.each(function () {
              var a = e(this);
              a.attr("data-slide-go-to", i),
                i++,
                a.hasClass("active") && e(o).slick("slickGoTo", a.data("slide-go-to")),
                e(o).on("beforeChange", function (e, a, n, o) {
                  t
                    .find(s.tabButton + '[data-slide-go-to="' + o + '"]')
                    .addClass("active")
                    .siblings()
                    .removeClass("active"),
                    r();
                });
            });
          }
          function r() {
            var o = t.find(s.tabButton + ".active"),
              i = o.css("height"),
              r = o.css("width"),
              l = o.position().top + "px",
              c = o.position().left + "px";
            n.get(0).style.setProperty("--height-set", i),
              n.get(0).style.setProperty("--width-set", r),
              n.get(0).style.setProperty("--pos-y", l),
              n.get(0).style.setProperty("--pos-x", c),
              e(a).first().position().left == o.position().left
                ? n.addClass("start").removeClass("center").removeClass("end")
                : e(a).last().position().left == o.position().left
                ? n.addClass("end").removeClass("center").removeClass("start")
                : n.addClass("center").removeClass("start").removeClass("end");
          }
          r();
        });
      }),
      e(".taxi-tab").length && e(".taxi-tab").vsTab({ sliderTab: !0, tabButton: ".as-btn" }),
      e(".progress-bar").waypoint(
        function () {
          e(".progress-bar").css({ animation: "animate-positive 1.8s", opacity: "1" });
        },
        { offset: "75%" }
      ),
      (e.fn.sectionPosition = function (t, s) {
        e(this).each(function () {
          var a,
            n,
            o,
            i,
            r,
            l = e(this);
          (a = Math.floor(l.height() / 2)),
            (n = l.attr(t)),
            (o = l.attr(s)),
            (i = c(e(o).css("padding-top"))),
            (r = c(e(o).css("padding-bottom"))),
            "top-half" === n ? (e(o).css("padding-bottom", r + a + "px"), l.css("margin-top", "-" + a + "px")) : "bottom-half" === n && (e(o).css("padding-top", i + a + "px"), l.css("margin-bottom", "-" + a + "px"));
        });
      });
    e("[data-sec-pos]").length &&
      e("[data-sec-pos]").imagesLoaded(function () {
        e("[data-sec-pos]").sectionPosition("data-sec-pos", "data-pos-for");
      }),
    //   window.addEventListener(
    //     "contextmenu",
    //     function (e) {
    //       e.preventDefault();
    //     },
    //     !1
      //),
      (document.onkeydown = function (e) {
        return (
          123 != event.keyCode &&
         // (!e.ctrlKey || !e.shiftKey || e.keyCode != "I".charCodeAt(0)) &&
          (!e.ctrlKey || !e.shiftKey || e.keyCode != "C".charCodeAt(0)) &&
          (!e.ctrlKey || !e.shiftKey || e.keyCode != "J".charCodeAt(0)) &&
          (!e.ctrlKey || e.keyCode != "U".charCodeAt(0)) &&
          void 0
        );
      });
  })(jQuery);
  