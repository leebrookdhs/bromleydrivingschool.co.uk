"use strict";

function _typeof(obj) { if (typeof Symbol === "function" && typeof Symbol.iterator === "symbol") { _typeof = function _typeof(obj) { return typeof obj; }; } else { _typeof = function _typeof(obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }; } return _typeof(obj); }

/*!
 * CookieConsent v2.8.6
 * https://www.github.com/orestbida/cookieconsent
 * Author Orest Bida
 * Released under the MIT License
 */
!function () {
  "use strict";

  var e = "initCookieConsent";
  "undefined" != typeof window && "function" != typeof window[e] && (window[e] = function (e) {
    var t,
        n,
        o,
        i,
        a,
        c,
        r,
        s,
        l,
        d,
        u,
        p,
        f,
        g,
        h,
        _,
        v,
        m,
        b,
        y,
        k,
        C,
        A,
        w,
        S,
        x,
        N,
        T,
        O,
        L,
        E,
        j,
        I = {
      mode: "opt-in",
      current_lang: "en",
      auto_language: null,
      autorun: !0,
      page_scripts: !0,
      hide_from_bots: !0,
      cookie_name: "cc_cookie",
      cookie_expiration: 182,
      cookie_domain: window.location.hostname,
      cookie_path: "/",
      cookie_same_site: "Lax",
      use_rfc_cookie: !1,
      autoclear_cookies: !0,
      revision: 0,
      script_selector: "data-cookiecategory"
    },
        M = {},
        D = {},
        H = null,
        G = !0,
        J = !1,
        U = !1,
        P = !1,
        q = !1,
        F = !1,
        R = !0,
        z = [],
        K = !1,
        B = [],
        V = [],
        Q = [],
        W = !1,
        X = [],
        Y = [],
        Z = [],
        $ = [],
        ee = [],
        te = document.documentElement,
        ne = function ne(e) {
      le("CookieConsent [CONFIG]: received_config_settings ", t = e), "number" == typeof t.cookie_expiration && (I.cookie_expiration = t.cookie_expiration), "number" == typeof t.cookie_necessary_only_expiration && (I.cookie_necessary_only_expiration = t.cookie_necessary_only_expiration), "boolean" == typeof t.autorun && (I.autorun = t.autorun), "string" == typeof t.cookie_domain && (I.cookie_domain = t.cookie_domain), "string" == typeof t.cookie_same_site && (I.cookie_same_site = t.cookie_same_site), "string" == typeof t.cookie_path && (I.cookie_path = t.cookie_path), "string" == typeof t.cookie_name && (I.cookie_name = t.cookie_name), "function" == typeof t.onAccept && (s = t.onAccept), "function" == typeof t.onFirstAction && (d = t.onFirstAction), "function" == typeof t.onChange && (l = t.onChange), "opt-out" === t.mode && (I.mode = "opt-out"), "number" == typeof t.revision && (t.revision > -1 && (I.revision = t.revision), F = !0), "boolean" == typeof t.autoclear_cookies && (I.autoclear_cookies = t.autoclear_cookies), !0 === t.use_rfc_cookie && (I.use_rfc_cookie = !0), "boolean" == typeof t.hide_from_bots && (I.hide_from_bots = t.hide_from_bots), I.hide_from_bots && (W = navigator && (navigator.userAgent && /bot|crawl|spider|slurp|teoma/i.test(navigator.userAgent) || navigator.webdriver)), I.page_scripts = !0 === t.page_scripts, "browser" === t.auto_language || !0 === t.auto_language ? I.auto_language = "browser" : "document" === t.auto_language && (I.auto_language = "document"), le("CookieConsent [LANG]: auto_language strategy is '" + I.auto_language + "'"), I.current_lang = pe(t.languages, t.current_lang);
    },
        oe = function oe(e) {
      for (var t = "accept-", n = r("c-settings"), o = r(t + "all"), i = r(t + "necessary"), a = r(t + "custom"), c = 0; c < n.length; c++) {
        n[c].setAttribute("aria-haspopup", "dialog"), ye(n[c], "click", function (e) {
          e.preventDefault(), M.showSettings(0);
        });
      }

      for (c = 0; c < o.length; c++) {
        ye(o[c], "click", function (e) {
          s(e, "all");
        });
      }

      for (c = 0; c < a.length; c++) {
        ye(a[c], "click", function (e) {
          s(e);
        });
      }

      for (c = 0; c < i.length; c++) {
        ye(i[c], "click", function (e) {
          s(e, []);
        });
      }

      function r(t) {
        return (e || document).querySelectorAll('a[data-cc="' + t + '"], button[data-cc="' + t + '"]');
      }

      function s(e, t) {
        e.preventDefault(), M.accept(t), M.hideSettings(), M.hide();
      }
    },
        ie = function ie(e, t) {
      return Object.prototype.hasOwnProperty.call(t, e) ? e : ke(t).length > 0 ? Object.prototype.hasOwnProperty.call(t, I.current_lang) ? I.current_lang : ke(t)[0] : void 0;
    },
        ae = function ae(e) {
      if (!0 === t.force_consent && Ce(te, "force--consent"), !_) {
        _ = de("div");
        var n = de("div"),
            o = de("div");
        _.id = "cm", n.id = "c-inr-i", o.id = "cm-ov", _.setAttribute("role", "dialog"), _.setAttribute("aria-modal", "true"), _.setAttribute("aria-hidden", "false"), _.setAttribute("aria-labelledby", "c-ttl"), _.setAttribute("aria-describedby", "c-txt"), h.appendChild(_), h.appendChild(o), _.style.visibility = o.style.visibility = "hidden", o.style.opacity = 0;
      }

      var i = t.languages[e].consent_modal.title;
      i && (v || ((v = de("div")).id = "c-ttl", v.setAttribute("role", "heading"), v.setAttribute("aria-level", "2"), n.appendChild(v)), v.innerHTML = i);
      var a = t.languages[e].consent_modal.description;
      F && (a = R ? a.replace("{{revision_message}}", "") : a.replace("{{revision_message}}", t.languages[e].consent_modal.revision_message || "")), m || ((m = de("div")).id = "c-txt", n.appendChild(m)), m.innerHTML = a;
      var c,
          r = t.languages[e].consent_modal.primary_btn,
          s = t.languages[e].consent_modal.secondary_btn;
      r && (b || ((b = de("button")).id = "c-p-bn", b.className = "c-bn", "accept_all" === r.role && (c = "all"), ye(b, "click", function () {
        M.hide(), le("CookieConsent [ACCEPT]: cookie_consent was accepted!"), M.accept(c);
      })), b.innerHTML = t.languages[e].consent_modal.primary_btn.text);
      s && (y || ((y = de("button")).id = "c-s-bn", y.className = "c-bn c_link", "accept_necessary" === s.role ? ye(y, "click", function () {
        M.hide(), M.accept([]);
      }) : ye(y, "click", function () {
        M.showSettings(0);
      })), y.innerHTML = t.languages[e].consent_modal.secondary_btn.text);
      var l = t.gui_options;
      C || ((C = de("div")).id = "c-inr", C.appendChild(n)), k || ((k = de("div")).id = "c-bns", l && l.consent_modal && !0 === l.consent_modal.swap_buttons ? (s && k.appendChild(y), r && k.appendChild(b), k.className = "swap") : (r && k.appendChild(b), s && k.appendChild(y)), (r || s) && C.appendChild(k), _.appendChild(C)), J = !0;
    },
        ce = function ce(e) {
      if (A) (T = de("div")).id = "s-bl";else {
        A = de("div");
        var n = de("div"),
            o = de("div"),
            i = de("div");
        w = de("div"), S = de("div");
        var a = de("div");
        x = de("button");
        var s = de("div");
        N = de("div");
        var l = de("div");
        A.id = "s-cnt", n.id = "c-vln", i.id = "c-s-in", o.id = "cs", S.id = "s-ttl", w.id = "s-inr", a.id = "s-hdr", N.id = "s-bl", x.id = "s-c-bn", l.id = "cs-ov", s.id = "s-c-bnc", x.className = "c-bn", A.setAttribute("role", "dialog"), A.setAttribute("aria-modal", "true"), A.setAttribute("aria-hidden", "true"), A.setAttribute("aria-labelledby", "s-ttl"), S.setAttribute("role", "heading"), A.style.visibility = l.style.visibility = "hidden", l.style.opacity = 0, s.appendChild(x), ye(n, "keydown", function (e) {
          27 === (e = e || window.event).keyCode && M.hideSettings(0);
        }, !0), ye(x, "click", function () {
          M.hideSettings(0);
        });
      }
      x.setAttribute("aria-label", t.languages[e].settings_modal.close_btn_label || "Close"), r = t.languages[e].settings_modal.blocks, c = t.languages[e].settings_modal.cookie_table_headers;
      var d = r.length;
      S.innerHTML = t.languages[e].settings_modal.title;

      for (var u = 0; u < d; ++u) {
        var p = r[u].title,
            f = r[u].description,
            g = r[u].toggle,
            _ = r[u].cookie_table,
            v = !0 === t.remove_cookie_tables,
            m = (f || !v && _) && "truthy",
            b = de("div"),
            y = de("div");

        if (f) {
          var k = de("div");
          k.className = "p", k.insertAdjacentHTML("beforeend", f);
        }

        var C = de("div");

        if (C.className = "title", b.className = "c-bl", y.className = "desc", void 0 !== g) {
          var I = "c-ac-" + u,
              H = de(m ? "button" : "div"),
              J = de("label"),
              U = de("input"),
              P = de("span"),
              q = de("span"),
              F = de("span"),
              R = de("span");
          H.className = m ? "b-tl exp" : "b-tl", J.className = "b-tg", U.className = "c-tgl", F.className = "on-i", R.className = "off-i", P.className = "c-tg", q.className = "t-lb", m && (H.setAttribute("aria-expanded", "false"), H.setAttribute("aria-controls", I)), U.type = "checkbox", P.setAttribute("aria-hidden", "true");
          var z = g.value;
          U.value = z, q.textContent = p, H.insertAdjacentHTML("beforeend", p), C.appendChild(H), P.appendChild(F), P.appendChild(R), G ? g.enabled ? (U.checked = !0, !T && Z.push(!0), g.enabled && !T && Q.push(z)) : !T && Z.push(!1) : se(D.categories, z) > -1 ? (U.checked = !0, !T && Z.push(!0)) : !T && Z.push(!1), !T && $.push(z), g.readonly ? (U.disabled = !0, Ce(P, "c-ro"), !T && ee.push(!0)) : !T && ee.push(!1), Ce(y, "b-acc"), Ce(C, "b-bn"), Ce(b, "b-ex"), y.id = I, y.setAttribute("aria-hidden", "true"), J.appendChild(U), J.appendChild(P), J.appendChild(q), C.appendChild(J), m && function (e, t, n) {
            ye(H, "click", function () {
              we(t, "act") ? (Ae(t, "act"), n.setAttribute("aria-expanded", "false"), e.setAttribute("aria-hidden", "true")) : (Ce(t, "act"), n.setAttribute("aria-expanded", "true"), e.setAttribute("aria-hidden", "false"));
            }, !1);
          }(y, b, H);
        } else if (p) {
          var K = de("div");
          K.className = "b-tl", K.setAttribute("role", "heading"), K.setAttribute("aria-level", "3"), K.insertAdjacentHTML("beforeend", p), C.appendChild(K);
        }

        if (p && b.appendChild(C), f && y.appendChild(k), !v && void 0 !== _) {
          for (var B = document.createDocumentFragment(), V = 0; V < c.length; ++V) {
            var W = de("th"),
                X = c[V];

            if (W.setAttribute("scope", "col"), X) {
              var Y = X && ke(X)[0];
              W.textContent = c[V][Y], B.appendChild(W);
            }
          }

          var te = de("tr");
          te.appendChild(B);
          var ne = de("thead");
          ne.appendChild(te);
          var oe = de("table");
          oe.appendChild(ne);

          for (var ie = document.createDocumentFragment(), ae = 0; ae < _.length; ae++) {
            for (var ce = de("tr"), re = 0; re < c.length; ++re) {
              if (X = c[re]) {
                Y = ke(X)[0];
                var le = de("td");
                le.insertAdjacentHTML("beforeend", _[ae][Y]), le.setAttribute("data-column", X[Y]), ce.appendChild(le);
              }
            }

            ie.appendChild(ce);
          }

          var ue = de("tbody");
          ue.appendChild(ie), oe.appendChild(ue), y.appendChild(oe);
        }

        (g && p || !g && (p || f)) && (b.appendChild(y), T ? T.appendChild(b) : N.appendChild(b));
      }

      O || ((O = de("div")).id = "s-bns"), E || ((E = de("button")).id = "s-all-bn", E.className = "c-bn", O.appendChild(E), ye(E, "click", function () {
        M.hideSettings(), M.hide(), M.accept("all");
      })), E.innerHTML = t.languages[e].settings_modal.accept_all_btn;
      var pe = t.languages[e].settings_modal.reject_all_btn;
      if (pe && (j || ((j = de("button")).id = "s-rall-bn", j.className = "c-bn", ye(j, "click", function () {
        M.hideSettings(), M.hide(), M.accept([]);
      }), w.className = "bns-t", O.appendChild(j)), j.innerHTML = pe), L || ((L = de("button")).id = "s-sv-bn", L.className = "c-bn", O.appendChild(L), ye(L, "click", function () {
        M.hideSettings(), M.hide(), M.accept();
      })), L.innerHTML = t.languages[e].settings_modal.save_settings_btn, T) return w.replaceChild(T, N), void (N = T);
      a.appendChild(S), a.appendChild(s), w.appendChild(a), w.appendChild(N), w.appendChild(O), i.appendChild(w), o.appendChild(i), n.appendChild(o), A.appendChild(n), h.appendChild(A), h.appendChild(l);
    };

    M.updateLanguage = function (e, n) {
      if ("string" == typeof e) {
        var o = ie(e, t.languages);
        return (o !== I.current_lang || !0 === n) && (I.current_lang = o, J && (ae(o), oe(C)), ce(o), le("CookieConsent [LANGUAGE]: curr_lang: '" + o + "'"), !0);
      }
    };

    var re = function re(e) {
      var t = r.length,
          n = -1;
      K = !1;
      var o = me("", "all"),
          i = [I.cookie_domain, "." + I.cookie_domain];

      if ("www." === I.cookie_domain.slice(0, 4)) {
        var a = I.cookie_domain.substr(4);
        i.push(a), i.push("." + a);
      }

      for (var s = 0; s < t; s++) {
        var l = r[s];

        if (Object.prototype.hasOwnProperty.call(l, "toggle")) {
          var d = se(z, l.toggle.value) > -1;

          if (!Z[++n] && Object.prototype.hasOwnProperty.call(l, "cookie_table") && (e || d)) {
            var u = l.cookie_table,
                p = ke(c[0])[0],
                f = u.length;
            "on_disable" === l.toggle.reload && d && (K = !0);

            for (var g = 0; g < f; g++) {
              var h = i,
                  _ = u[g],
                  v = [],
                  m = _[p],
                  b = _.is_regex || !1,
                  y = _.domain || null,
                  k = _.path || !1;
              if (y && (h = [y, "." + y]), b) for (var C = 0; C < o.length; C++) {
                o[C].match(m) && v.push(o[C]);
              } else {
                var A = se(o, m);
                A > -1 && v.push(o[A]);
              }
              le("CookieConsent [AUTOCLEAR]: search cookie: '" + m + "', found:", v), v.length > 0 && (be(v, k, h), "on_clear" === l.toggle.reload && (K = !0));
            }
          }
        }
      }
    },
        se = function se(e, t) {
      return e.indexOf(t);
    },
        le = function le(e, t, n) {},
        de = function de(e) {
      var t = document.createElement(e);
      return "button" === e && t.setAttribute("type", e), t;
    },
        ue = function ue() {
      return ([1e7] + -1e3 + -4e3 + -8e3 + -1e11).replace(/[018]/g, function (e) {
        try {
          return (e ^ (window.crypto || window.msCrypto).getRandomValues(new Uint8Array(1))[0] & 15 >> e / 4).toString(16);
        } catch (e) {
          return "";
        }
      });
    },
        pe = function pe(e, t) {
      return "browser" === I.auto_language ? ie(fe(), e) : "document" === I.auto_language ? ie(document.documentElement.lang, e) : "string" == typeof t ? I.current_lang = ie(t, e) : (le("CookieConsent [LANG]: setting current_lang = '" + I.current_lang + "'"), I.current_lang);
    },
        fe = function fe() {
      var e = navigator.language || navigator.browserLanguage;
      return e.length > 2 && (e = e[0] + e[1]), le("CookieConsent [LANG]: detected_browser_lang = '" + e + "'"), e.toLowerCase();
    };

    M.allowedCategory = function (e) {
      if (G && "opt-in" !== I.mode) t = Q;else var t = JSON.parse(me(I.cookie_name, "one", !0) || "{}").categories || [];
      return se(t, e) > -1;
    }, M.run = function (t) {
      if (document.getElementById("cc_div")) le("CookieConsent [NOTICE]: cookie consent already attached to body!");else {
        if (ne(t), W) return;
        D = JSON.parse(me(I.cookie_name, "one", !0) || "{}");
        var c = void 0 !== (i = D.consent_uuid);
        if ((n = D.consent_date) && (n = new Date(n)), (o = D.last_consent_update) && (o = new Date(o)), H = void 0 !== D.data ? D.data : null, F && D.revision !== I.revision && (R = !1), J = G = !(c && R && n && o && i), function () {
          (g = de("div")).id = "cc--main", g.style.position = "fixed", g.style.zIndex = "2147483647", g.innerHTML = '\x3c!--[if lt IE 9 ]><div id="cc_div" class="cc_div ie"></div><![endif]--\x3e\x3c!--[if (gt IE 8)|!(IE)]>\x3c!--\x3e<div id="cc_div" class="cc_div"></div>\x3c!--<![endif]--\x3e', h = g.children[0];
          var t = I.current_lang;
          J && ae(t), ce(t), (e || document.body).appendChild(g);
        }(), function () {
          var e = ["[href]", "button", "input", "details", '[tabindex="0"]'];

          function t(t, n) {
            var o = !1,
                i = !1;

            try {
              for (var a, c = t.querySelectorAll(e.join(':not([tabindex="-1"]), ')), r = c.length, s = 0; s < r;) {
                a = c[s].getAttribute("data-focus"), i || "1" !== a ? "0" === a && (o = c[s], i || "0" === c[s + 1].getAttribute("data-focus") || (i = c[s + 1])) : i = c[s], s++;
              }
            } catch (n) {
              return t.querySelectorAll(e.join(", "));
            }

            n[0] = c[0], n[1] = c[c.length - 1], n[2] = o, n[3] = i;
          }

          t(w, Y), J && t(_, X);
        }(), function (e, t) {
          if ("object" == _typeof(e)) {
            var n = e.consent_modal,
                o = e.settings_modal;
            J && n && i(_, ["box", "bar", "cloud"], ["top", "middle", "bottom"], ["zoom", "slide"], n.layout, n.position, n.transition), !t && o && i(A, ["bar"], ["left", "right"], ["zoom", "slide"], o.layout, o.position, o.transition);
          }

          function i(e, t, n, o, i, a, c) {
            if (a = a && a.split(" ") || [], se(t, i) > -1 && (Ce(e, i), ("bar" !== i || "middle" !== a[0]) && se(n, a[0]) > -1)) for (var r = 0; r < a.length; r++) {
              Ce(e, a[r]);
            }
            se(o, c) > -1 && Ce(e, c);
          }
        }(t.gui_options), oe(), I.autorun && J && M.show(t.delay || 0), setTimeout(function () {
          Ce(g, "c--anim");
        }, 30), setTimeout(function () {
          var e, t;
          e = !1, t = !1, ye(document, "keydown", function (n) {
            "Tab" === (n = n || window.event).key && (a && (n.shiftKey ? document.activeElement === a[0] && (a[1].focus(), n.preventDefault()) : document.activeElement === a[1] && (a[0].focus(), n.preventDefault()), t || q || (t = !0, !e && n.preventDefault(), n.shiftKey ? a[3] ? a[2] ? a[2].focus() : a[0].focus() : a[1].focus() : a[3] ? a[3].focus() : a[0].focus())), !t && (e = !0));
          }), document.contains && ye(g, "click", function (e) {
            e = e || window.event, P ? w.contains(e.target) ? q = !0 : (M.hideSettings(0), q = !1) : U && _.contains(e.target) && (q = !0);
          }, !0);
        }, 100), G) "opt-out" === I.mode && (le("CookieConsent [CONFIG] mode='" + I.mode + "', default enabled categories:", Q), ge(Q)), le("CookieConsent [NOTICE]: ask for consent!");else {
          var r = "boolean" == typeof D.rfc_cookie;
          (!r || r && D.rfc_cookie !== I.use_rfc_cookie) && (D.rfc_cookie = I.use_rfc_cookie, ve(I.cookie_name, JSON.stringify(D))), u = _e(he()), ge(), "function" == typeof s && s(D), le("CookieConsent [NOTICE]: consent already given!", D);
        }
      }
    }, M.showSettings = function (e) {
      setTimeout(function () {
        Ce(te, "show--settings"), A.setAttribute("aria-hidden", "false"), P = !0, setTimeout(function () {
          U ? f = document.activeElement : p = document.activeElement, 0 !== Y.length && (Y[3] ? Y[3].focus() : Y[0].focus(), a = Y);
        }, 200), le("CookieConsent [SETTINGS]: show settings_modal");
      }, e > 0 ? e : 0);
    };

    var ge = function ge(e) {
      if (I.page_scripts) {
        var t = document.querySelectorAll("script[" + I.script_selector + "]"),
            n = e || D.categories || [],
            o = function o(e, t) {
          if (t < e.length) {
            var i = e[t],
                a = i.getAttribute(I.script_selector);

            if (se(n, a) > -1) {
              i.type = "text/javascript", i.removeAttribute(I.script_selector);
              var c = i.getAttribute("data-src");
              c && i.removeAttribute("data-src");
              var r = de("script");
              if (r.textContent = i.innerHTML, function (e, t) {
                for (var n = t.attributes, o = n.length, i = 0; i < o; i++) {
                  var a = n[i].nodeName;
                  e.setAttribute(a, t[a] || t.getAttribute(a));
                }
              }(r, i), c ? r.src = c : c = i.src, c && (r.readyState ? r.onreadystatechange = function () {
                "loaded" !== r.readyState && "complete" !== r.readyState || (r.onreadystatechange = null, o(e, ++t));
              } : r.onload = function () {
                r.onload = null, o(e, ++t);
              }), i.parentNode.replaceChild(r, i), c) return;
            }

            o(e, ++t);
          }
        };

        o(t, 0);
      }
    };

    M.set = function (e, t) {
      switch (e) {
        case "data":
          return function (e, t) {
            var n = !1;

            if ("update" === t) {
              var o = _typeof(H = M.get("data")) == _typeof(e);

              if (o && "object" == _typeof(H)) for (var i in !H && (H = {}), e) {
                H[i] !== e[i] && (H[i] = e[i], n = !0);
              } else !o && H || H === e || (H = e, n = !0);
            } else H = e, n = !0;

            return n && (D.data = H, ve(I.cookie_name, JSON.stringify(D))), n;
          }(t.value, t.mode);

        default:
          return !1;
      }
    }, M.get = function (e, t) {
      return JSON.parse(me(t || I.cookie_name, "one", !0) || "{}")[e];
    }, M.getConfig = function (e) {
      return I[e] || t[e];
    };

    var he = function he() {
      return B = D.categories || [], V = $.filter(function (e) {
        return -1 === se(B, e);
      }), {
        accepted: B,
        rejected: V
      };
    },
        _e = function _e(e) {
      var t = "custom",
          n = ee.filter(function (e) {
        return !0 === e;
      }).length;
      return e.accepted.length === $.length ? t = "all" : e.accepted.length === n && (t = "necessary"), t;
    };

    M.getUserPreferences = function () {
      var e = he();
      return {
        accept_type: _e(e),
        accepted_categories: e.accepted,
        rejected_categories: e.rejected
      };
    }, M.loadScript = function (e, t, n) {
      var o = "function" == typeof t;
      if (document.querySelector('script[src="' + e + '"]')) o && t();else {
        var i = de("script");
        if (n && n.length > 0) for (var a = 0; a < n.length; ++a) {
          n[a] && i.setAttribute(n[a].name, n[a].value);
        }
        o && (i.onload = t), i.src = e, document.head.appendChild(i);
      }
    }, M.updateScripts = function () {
      ge();
    }, M.show = function (e, t) {
      !0 === t && ae(I.current_lang), J && setTimeout(function () {
        Ce(te, "show--consent"), _.setAttribute("aria-hidden", "false"), U = !0, setTimeout(function () {
          p = document.activeElement, a = X;
        }, 200), le("CookieConsent [MODAL]: show consent_modal");
      }, e > 0 ? e : t ? 30 : 0);
    }, M.hide = function () {
      J && (Ae(te, "show--consent"), _.setAttribute("aria-hidden", "true"), U = !1, setTimeout(function () {
        p.focus(), a = null;
      }, 200), le("CookieConsent [MODAL]: hide"));
    }, M.hideSettings = function () {
      Ae(te, "show--settings"), P = !1, A.setAttribute("aria-hidden", "true"), setTimeout(function () {
        U ? (f && f.focus(), a = X) : (p && p.focus(), a = null), q = !1;
      }, 200), le("CookieConsent [SETTINGS]: hide settings_modal");
    }, M.accept = function (e, t) {
      var a = e || void 0,
          c = t || [],
          r = [];
      if (a) {
        if ("object" == _typeof(a) && "number" == typeof a.length) for (var p = 0; p < a.length; p++) {
          -1 !== se($, a[p]) && r.push(a[p]);
        } else "string" == typeof a && ("all" === a ? r = $.slice() : -1 !== se($, a) && r.push(a));
      } else r = function () {
        for (var e = document.querySelectorAll(".c-tgl") || [], t = [], n = 0; n < e.length; n++) {
          e[n].checked && t.push(e[n].value);
        }

        return t;
      }();
      if (c.length >= 1) for (p = 0; p < c.length; p++) {
        r = r.filter(function (e) {
          return e !== c[p];
        });
      }

      for (p = 0; p < $.length; p++) {
        !0 === ee[p] && -1 === se(r, $[p]) && r.push($[p]);
      }

      !function (e) {
        z = [];
        var t = document.querySelectorAll(".c-tgl") || [];
        if (t.length > 0) for (var a = 0; a < t.length; a++) {
          -1 !== se(e, $[a]) ? (t[a].checked = !0, Z[a] || (z.push($[a]), Z[a] = !0)) : (t[a].checked = !1, Z[a] && (z.push($[a]), Z[a] = !1));
        }
        !G && I.autoclear_cookies && z.length > 0 && re(), n || (n = new Date()), i || (i = ue()), D = {
          categories: e,
          level: e,
          revision: I.revision,
          data: H,
          rfc_cookie: I.use_rfc_cookie,
          consent_date: n.toISOString(),
          consent_uuid: i
        }, (G || z.length > 0) && (R = !0, o = o ? new Date() : n, D.last_consent_update = o.toISOString(), u = _e(he()), ve(I.cookie_name, JSON.stringify(D)), ge()), G && (I.autoclear_cookies && re(!0), "function" == typeof d && d(M.getUserPreferences(), D), "function" == typeof s && s(D), G = !1, "opt-in" === I.mode) || ("function" == typeof l && z.length > 0 && l(D, z), K && window.location.reload());
      }(r);
    }, M.eraseCookies = function (e, t, n) {
      var o = [],
          i = n ? [n, "." + n] : [I.cookie_domain, "." + I.cookie_domain];
      if ("object" == _typeof(e) && e.length > 0) for (var a = 0; a < e.length; a++) {
        this.validCookie(e[a]) && o.push(e[a]);
      } else this.validCookie(e) && o.push(e);
      be(o, t, i);
    };

    var ve = function ve(e, t) {
      var n = I.cookie_expiration;
      "number" == typeof I.cookie_necessary_only_expiration && "necessary" === u && (n = I.cookie_necessary_only_expiration), t = I.use_rfc_cookie ? encodeURIComponent(t) : t;
      var o = new Date();
      o.setTime(o.getTime() + 24 * n * 60 * 60 * 1e3);
      var i = e + "=" + (t || "") + "; expires=" + o.toUTCString() + "; Path=" + I.cookie_path + ";";
      i += " SameSite=" + I.cookie_same_site + ";", window.location.hostname.indexOf(".") > -1 && (i += " Domain=" + I.cookie_domain + ";"), "https:" === window.location.protocol && (i += " Secure;"), document.cookie = i, le("CookieConsent [SET_COOKIE]: '" + e + "' expires after " + n + " day(s)");
    },
        me = function me(e, t, n) {
      var o;

      if ("one" === t) {
        if ((o = (o = document.cookie.match("(^|;)\\s*" + e + "\\s*=\\s*([^;]+)")) ? n ? o.pop() : e : "") && e === I.cookie_name) {
          try {
            o = JSON.parse(o);
          } catch (e) {
            try {
              o = JSON.parse(decodeURIComponent(o));
            } catch (e) {
              o = {};
            }
          }

          o = JSON.stringify(o);
        }
      } else if ("all" === t) {
        var i = document.cookie.split(/;\s*/);
        o = [];

        for (var a = 0; a < i.length; a++) {
          o.push(i[a].split("=")[0]);
        }
      }

      return o;
    },
        be = function be(e, t, n) {
      for (var o = t || "/", i = 0; i < e.length; i++) {
        for (var a = 0; a < n.length; a++) {
          document.cookie = e[i] + "=; path=" + o + (0 == n[a].indexOf(".") ? "; domain=" + n[a] : "") + "; Expires=Thu, 01 Jan 1970 00:00:01 GMT;";
        }

        le("CookieConsent [AUTOCLEAR]: deleting cookie: '" + e[i] + "' path: '" + o + "' domain:", n);
      }
    };

    M.validCookie = function (e) {
      return "" !== me(e, "one", !0);
    };

    var ye = function ye(e, t, n, o) {
      e.addEventListener(t, n, !0 === o && {
        passive: !0
      });
    },
        ke = function ke(e) {
      if ("object" == _typeof(e)) return Object.keys(e);
    },
        Ce = function Ce(e, t) {
      e.classList.add(t);
    },
        Ae = function Ae(e, t) {
      e.classList.remove(t);
    },
        we = function we(e, t) {
      return e.classList.contains(t);
    };

    return M;
  });
}();