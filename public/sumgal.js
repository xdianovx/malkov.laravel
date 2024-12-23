/*! For license information please see snb-gallery-brick.min.js.LICENSE.txt */
(() => {
  "use strict";
  var e = {
      774: (e, t, n) => {
        var r = n(294);
        function o(e) {
          for (
            var t =
                "https://reactjs.org/docs/error-decoder.html?invariant=" + e,
              n = 1;
            n < arguments.length;
            n++
          )
            t += "&args[]=" + encodeURIComponent(arguments[n]);
          return (
            "Minified React error #" +
            e +
            "; visit " +
            t +
            " for the full message or use the non-minified dev environment for full errors and additional helpful warnings."
          );
        }
        var a = Object.prototype.hasOwnProperty,
          i =
            /^[:A-Z_a-z\u00C0-\u00D6\u00D8-\u00F6\u00F8-\u02FF\u0370-\u037D\u037F-\u1FFF\u200C-\u200D\u2070-\u218F\u2C00-\u2FEF\u3001-\uD7FF\uF900-\uFDCF\uFDF0-\uFFFD][:A-Z_a-z\u00C0-\u00D6\u00D8-\u00F6\u00F8-\u02FF\u0370-\u037D\u037F-\u1FFF\u200C-\u200D\u2070-\u218F\u2C00-\u2FEF\u3001-\uD7FF\uF900-\uFDCF\uFDF0-\uFFFD\-.0-9\u00B7\u0300-\u036F\u203F-\u2040]*$/,
          s = {},
          l = {};
        function u(e) {
          return (
            !!a.call(l, e) ||
            (!a.call(s, e) && (i.test(e) ? (l[e] = !0) : ((s[e] = !0), !1)))
          );
        }
        function c(e, t, n, r, o, a, i) {
          (this.acceptsBooleans = 2 === t || 3 === t || 4 === t),
            (this.attributeName = r),
            (this.attributeNamespace = o),
            (this.mustUseProperty = n),
            (this.propertyName = e),
            (this.type = t),
            (this.sanitizeURL = a),
            (this.removeEmptyString = i);
        }
        var f = {};
        "children dangerouslySetInnerHTML defaultValue defaultChecked innerHTML suppressContentEditableWarning suppressHydrationWarning style"
          .split(" ")
          .forEach(function (e) {
            f[e] = new c(e, 0, !1, e, null, !1, !1);
          }),
          [
            ["acceptCharset", "accept-charset"],
            ["className", "class"],
            ["htmlFor", "for"],
            ["httpEquiv", "http-equiv"],
          ].forEach(function (e) {
            var t = e[0];
            f[t] = new c(t, 1, !1, e[1], null, !1, !1);
          }),
          ["contentEditable", "draggable", "spellCheck", "value"].forEach(
            function (e) {
              f[e] = new c(e, 2, !1, e.toLowerCase(), null, !1, !1);
            }
          ),
          [
            "autoReverse",
            "externalResourcesRequired",
            "focusable",
            "preserveAlpha",
          ].forEach(function (e) {
            f[e] = new c(e, 2, !1, e, null, !1, !1);
          }),
          "allowFullScreen async autoFocus autoPlay controls default defer disabled disablePictureInPicture disableRemotePlayback formNoValidate hidden loop noModule noValidate open playsInline readOnly required reversed scoped seamless itemScope"
            .split(" ")
            .forEach(function (e) {
              f[e] = new c(e, 3, !1, e.toLowerCase(), null, !1, !1);
            }),
          ["checked", "multiple", "muted", "selected"].forEach(function (e) {
            f[e] = new c(e, 3, !0, e, null, !1, !1);
          }),
          ["capture", "download"].forEach(function (e) {
            f[e] = new c(e, 4, !1, e, null, !1, !1);
          }),
          ["cols", "rows", "size", "span"].forEach(function (e) {
            f[e] = new c(e, 6, !1, e, null, !1, !1);
          }),
          ["rowSpan", "start"].forEach(function (e) {
            f[e] = new c(e, 5, !1, e.toLowerCase(), null, !1, !1);
          });
        var d = /[\-:]([a-z])/g;
        function p(e) {
          return e[1].toUpperCase();
        }
        "accent-height alignment-baseline arabic-form baseline-shift cap-height clip-path clip-rule color-interpolation color-interpolation-filters color-profile color-rendering dominant-baseline enable-background fill-opacity fill-rule flood-color flood-opacity font-family font-size font-size-adjust font-stretch font-style font-variant font-weight glyph-name glyph-orientation-horizontal glyph-orientation-vertical horiz-adv-x horiz-origin-x image-rendering letter-spacing lighting-color marker-end marker-mid marker-start overline-position overline-thickness paint-order panose-1 pointer-events rendering-intent shape-rendering stop-color stop-opacity strikethrough-position strikethrough-thickness stroke-dasharray stroke-dashoffset stroke-linecap stroke-linejoin stroke-miterlimit stroke-opacity stroke-width text-anchor text-decoration text-rendering underline-position underline-thickness unicode-bidi unicode-range units-per-em v-alphabetic v-hanging v-ideographic v-mathematical vector-effect vert-adv-y vert-origin-x vert-origin-y word-spacing writing-mode xmlns:xlink x-height"
          .split(" ")
          .forEach(function (e) {
            var t = e.replace(d, p);
            f[t] = new c(t, 1, !1, e, null, !1, !1);
          }),
          "xlink:actuate xlink:arcrole xlink:role xlink:show xlink:title xlink:type"
            .split(" ")
            .forEach(function (e) {
              var t = e.replace(d, p);
              f[t] = new c(t, 1, !1, e, "http://www.w3.org/1999/xlink", !1, !1);
            }),
          ["xml:base", "xml:lang", "xml:space"].forEach(function (e) {
            var t = e.replace(d, p);
            f[t] = new c(
              t,
              1,
              !1,
              e,
              "http://www.w3.org/XML/1998/namespace",
              !1,
              !1
            );
          }),
          ["tabIndex", "crossOrigin"].forEach(function (e) {
            f[e] = new c(e, 1, !1, e.toLowerCase(), null, !1, !1);
          }),
          (f.xlinkHref = new c(
            "xlinkHref",
            1,
            !1,
            "xlink:href",
            "http://www.w3.org/1999/xlink",
            !0,
            !1
          )),
          ["src", "href", "action", "formAction"].forEach(function (e) {
            f[e] = new c(e, 1, !1, e.toLowerCase(), null, !0, !0);
          });
        var h = {
            animationIterationCount: !0,
            aspectRatio: !0,
            borderImageOutset: !0,
            borderImageSlice: !0,
            borderImageWidth: !0,
            boxFlex: !0,
            boxFlexGroup: !0,
            boxOrdinalGroup: !0,
            columnCount: !0,
            columns: !0,
            flex: !0,
            flexGrow: !0,
            flexPositive: !0,
            flexShrink: !0,
            flexNegative: !0,
            flexOrder: !0,
            gridArea: !0,
            gridRow: !0,
            gridRowEnd: !0,
            gridRowSpan: !0,
            gridRowStart: !0,
            gridColumn: !0,
            gridColumnEnd: !0,
            gridColumnSpan: !0,
            gridColumnStart: !0,
            fontWeight: !0,
            lineClamp: !0,
            lineHeight: !0,
            opacity: !0,
            order: !0,
            orphans: !0,
            tabSize: !0,
            widows: !0,
            zIndex: !0,
            zoom: !0,
            fillOpacity: !0,
            floodOpacity: !0,
            stopOpacity: !0,
            strokeDasharray: !0,
            strokeDashoffset: !0,
            strokeMiterlimit: !0,
            strokeOpacity: !0,
            strokeWidth: !0,
          },
          g = ["Webkit", "ms", "Moz", "O"];
        Object.keys(h).forEach(function (e) {
          g.forEach(function (t) {
            (t = t + e.charAt(0).toUpperCase() + e.substring(1)), (h[t] = h[e]);
          });
        });
        var m = /["'&<>]/;
        function y(e) {
          if ("boolean" == typeof e || "number" == typeof e) return "" + e;
          e = "" + e;
          var t = m.exec(e);
          if (t) {
            var n,
              r = "",
              o = 0;
            for (n = t.index; n < e.length; n++) {
              switch (e.charCodeAt(n)) {
                case 34:
                  t = "&quot;";
                  break;
                case 38:
                  t = "&amp;";
                  break;
                case 39:
                  t = "&#x27;";
                  break;
                case 60:
                  t = "&lt;";
                  break;
                case 62:
                  t = "&gt;";
                  break;
                default:
                  continue;
              }
              o !== n && (r += e.substring(o, n)), (o = n + 1), (r += t);
            }
            e = o !== n ? r + e.substring(o, n) : r;
          }
          return e;
        }
        var b = /([A-Z])/g,
          v = /^ms-/,
          k = Array.isArray;
        function x(e, t) {
          return { insertionMode: e, selectedValue: t };
        }
        var S = new Map();
        function w(e, t, n) {
          if ("object" != typeof n) throw Error(o(62));
          for (var r in ((t = !0), n))
            if (a.call(n, r)) {
              var i = n[r];
              if (null != i && "boolean" != typeof i && "" !== i) {
                if (0 === r.indexOf("--")) {
                  var s = y(r);
                  i = y(("" + i).trim());
                } else {
                  s = r;
                  var l = S.get(s);
                  void 0 !== l ||
                    ((l = y(
                      s.replace(b, "-$1").toLowerCase().replace(v, "-ms-")
                    )),
                    S.set(s, l)),
                    (s = l),
                    (i =
                      "number" == typeof i
                        ? 0 === i || a.call(h, r)
                          ? "" + i
                          : i + "px"
                        : y(("" + i).trim()));
                }
                t
                  ? ((t = !1), e.push(' style="', s, ":", i))
                  : e.push(";", s, ":", i);
              }
            }
          t || e.push('"');
        }
        function C(e, t, n, r) {
          switch (n) {
            case "style":
              return void w(e, t, r);
            case "defaultValue":
            case "defaultChecked":
            case "innerHTML":
            case "suppressContentEditableWarning":
            case "suppressHydrationWarning":
              return;
          }
          if (
            !(2 < n.length) ||
            ("o" !== n[0] && "O" !== n[0]) ||
            ("n" !== n[1] && "N" !== n[1])
          )
            if (null !== (t = f.hasOwnProperty(n) ? f[n] : null)) {
              switch (typeof r) {
                case "function":
                case "symbol":
                  return;
                case "boolean":
                  if (!t.acceptsBooleans) return;
              }
              switch (((n = t.attributeName), t.type)) {
                case 3:
                  r && e.push(" ", n, '=""');
                  break;
                case 4:
                  !0 === r
                    ? e.push(" ", n, '=""')
                    : !1 !== r && e.push(" ", n, '="', y(r), '"');
                  break;
                case 5:
                  isNaN(r) || e.push(" ", n, '="', y(r), '"');
                  break;
                case 6:
                  !isNaN(r) && 1 <= r && e.push(" ", n, '="', y(r), '"');
                  break;
                default:
                  t.sanitizeURL && (r = "" + r),
                    e.push(" ", n, '="', y(r), '"');
              }
            } else if (u(n)) {
              switch (typeof r) {
                case "function":
                case "symbol":
                  return;
                case "boolean":
                  if (
                    "data-" !== (t = n.toLowerCase().slice(0, 5)) &&
                    "aria-" !== t
                  )
                    return;
              }
              e.push(" ", n, '="', y(r), '"');
            }
        }
        function E(e, t, n) {
          if (null != t) {
            if (null != n) throw Error(o(60));
            if ("object" != typeof t || !("__html" in t)) throw Error(o(61));
            null != (t = t.__html) && e.push("" + t);
          }
        }
        function _(e, t, n, r) {
          e.push(F(n));
          var o,
            i = (n = null);
          for (o in t)
            if (a.call(t, o)) {
              var s = t[o];
              if (null != s)
                switch (o) {
                  case "children":
                    n = s;
                    break;
                  case "dangerouslySetInnerHTML":
                    i = s;
                    break;
                  default:
                    C(e, r, o, s);
                }
            }
          return (
            e.push(">"),
            E(e, i, n),
            "string" == typeof n ? (e.push(y(n)), null) : n
          );
        }
        var T = /^[a-zA-Z][a-zA-Z:_\.\-\d]*$/,
          B = new Map();
        function F(e) {
          var t = B.get(e);
          if (void 0 === t) {
            if (!T.test(e)) throw Error(o(65, e));
            (t = "<" + e), B.set(e, t);
          }
          return t;
        }
        function R(e, t, n) {
          if ((e.push('\x3c!--$?--\x3e<template id="'), null === n))
            throw Error(o(395));
          return e.push(n), e.push('"></template>');
        }
        var M = /[<\u2028\u2029]/g;
        function O(e) {
          return JSON.stringify(e).replace(M, function (e) {
            switch (e) {
              case "<":
                return "\\u003c";
              case "\u2028":
                return "\\u2028";
              case "\u2029":
                return "\\u2029";
              default:
                throw Error(
                  "escapeJSStringsForInstructionScripts encountered a match it does not know how to replace. this means the match regex and the replacement characters are no longer in sync. This is a bug in React"
                );
            }
          });
        }
        function P(e, t, n, r) {
          return n.generateStaticMarkup
            ? (e.push(y(t)), !1)
            : ("" === t
                ? (e = r)
                : (r && e.push("\x3c!-- --\x3e"), e.push(y(t)), (e = !0)),
              e);
        }
        var j = Object.assign,
          I = Symbol.for("react.element"),
          L = Symbol.for("react.portal"),
          $ = Symbol.for("react.fragment"),
          N = Symbol.for("react.strict_mode"),
          D = Symbol.for("react.profiler"),
          A = Symbol.for("react.provider"),
          V = Symbol.for("react.context"),
          z = Symbol.for("react.forward_ref"),
          q = Symbol.for("react.suspense"),
          H = Symbol.for("react.suspense_list"),
          U = Symbol.for("react.memo"),
          W = Symbol.for("react.lazy"),
          G = Symbol.for("react.scope"),
          Z = Symbol.for("react.debug_trace_mode"),
          X = Symbol.for("react.legacy_hidden"),
          K = Symbol.for("react.default_value"),
          Q = Symbol.iterator;
        function Y(e) {
          if (null == e) return null;
          if ("function" == typeof e) return e.displayName || e.name || null;
          if ("string" == typeof e) return e;
          switch (e) {
            case $:
              return "Fragment";
            case L:
              return "Portal";
            case D:
              return "Profiler";
            case N:
              return "StrictMode";
            case q:
              return "Suspense";
            case H:
              return "SuspenseList";
          }
          if ("object" == typeof e)
            switch (e.$$typeof) {
              case V:
                return (e.displayName || "Context") + ".Consumer";
              case A:
                return (e._context.displayName || "Context") + ".Provider";
              case z:
                var t = e.render;
                return (
                  (e = e.displayName) ||
                    (e =
                      "" !== (e = t.displayName || t.name || "")
                        ? "ForwardRef(" + e + ")"
                        : "ForwardRef"),
                  e
                );
              case U:
                return null !== (t = e.displayName || null)
                  ? t
                  : Y(e.type) || "Memo";
              case W:
                (t = e._payload), (e = e._init);
                try {
                  return Y(e(t));
                } catch (e) {}
            }
          return null;
        }
        var J = {};
        function ee(e, t) {
          if (!(e = e.contextTypes)) return J;
          var n,
            r = {};
          for (n in e) r[n] = t[n];
          return r;
        }
        var te = null;
        function ne(e, t) {
          if (e !== t) {
            (e.context._currentValue2 = e.parentValue), (e = e.parent);
            var n = t.parent;
            if (null === e) {
              if (null !== n) throw Error(o(401));
            } else {
              if (null === n) throw Error(o(401));
              ne(e, n);
            }
            t.context._currentValue2 = t.value;
          }
        }
        function re(e) {
          (e.context._currentValue2 = e.parentValue),
            null !== (e = e.parent) && re(e);
        }
        function oe(e) {
          var t = e.parent;
          null !== t && oe(t), (e.context._currentValue2 = e.value);
        }
        function ae(e, t) {
          if (
            ((e.context._currentValue2 = e.parentValue),
            null === (e = e.parent))
          )
            throw Error(o(402));
          e.depth === t.depth ? ne(e, t) : ae(e, t);
        }
        function ie(e, t) {
          var n = t.parent;
          if (null === n) throw Error(o(402));
          e.depth === n.depth ? ne(e, n) : ie(e, n),
            (t.context._currentValue2 = t.value);
        }
        function se(e) {
          var t = te;
          t !== e &&
            (null === t
              ? oe(e)
              : null === e
              ? re(t)
              : t.depth === e.depth
              ? ne(t, e)
              : t.depth > e.depth
              ? ae(t, e)
              : ie(t, e),
            (te = e));
        }
        var le = {
          isMounted: function () {
            return !1;
          },
          enqueueSetState: function (e, t) {
            null !== (e = e._reactInternals).queue && e.queue.push(t);
          },
          enqueueReplaceState: function (e, t) {
            ((e = e._reactInternals).replace = !0), (e.queue = [t]);
          },
          enqueueForceUpdate: function () {},
        };
        function ue(e, t, n, r) {
          var o = void 0 !== e.state ? e.state : null;
          (e.updater = le), (e.props = n), (e.state = o);
          var a = { queue: [], replace: !1 };
          e._reactInternals = a;
          var i = t.contextType;
          if (
            ((e.context =
              "object" == typeof i && null !== i ? i._currentValue2 : r),
            "function" == typeof (i = t.getDerivedStateFromProps) &&
              ((o = null == (i = i(n, o)) ? o : j({}, o, i)), (e.state = o)),
            "function" != typeof t.getDerivedStateFromProps &&
              "function" != typeof e.getSnapshotBeforeUpdate &&
              ("function" == typeof e.UNSAFE_componentWillMount ||
                "function" == typeof e.componentWillMount))
          )
            if (
              ((t = e.state),
              "function" == typeof e.componentWillMount &&
                e.componentWillMount(),
              "function" == typeof e.UNSAFE_componentWillMount &&
                e.UNSAFE_componentWillMount(),
              t !== e.state && le.enqueueReplaceState(e, e.state, null),
              null !== a.queue && 0 < a.queue.length)
            )
              if (
                ((t = a.queue),
                (i = a.replace),
                (a.queue = null),
                (a.replace = !1),
                i && 1 === t.length)
              )
                e.state = t[0];
              else {
                for (
                  a = i ? t[0] : e.state, o = !0, i = i ? 1 : 0;
                  i < t.length;
                  i++
                ) {
                  var s = t[i];
                  null !=
                    (s = "function" == typeof s ? s.call(e, a, n, r) : s) &&
                    (o ? ((o = !1), (a = j({}, a, s))) : j(a, s));
                }
                e.state = a;
              }
            else a.queue = null;
        }
        var ce = { id: 1, overflow: "" };
        function fe(e, t, n) {
          var r = e.id;
          e = e.overflow;
          var o = 32 - de(r) - 1;
          (r &= ~(1 << o)), (n += 1);
          var a = 32 - de(t) + o;
          if (30 < a) {
            var i = o - (o % 5);
            return (
              (a = (r & ((1 << i) - 1)).toString(32)),
              (r >>= i),
              (o -= i),
              { id: (1 << (32 - de(t) + o)) | (n << o) | r, overflow: a + e }
            );
          }
          return { id: (1 << a) | (n << o) | r, overflow: e };
        }
        var de = Math.clz32
            ? Math.clz32
            : function (e) {
                return 0 == (e >>>= 0) ? 32 : (31 - ((pe(e) / he) | 0)) | 0;
              },
          pe = Math.log,
          he = Math.LN2,
          ge =
            "function" == typeof Object.is
              ? Object.is
              : function (e, t) {
                  return (
                    (e === t && (0 !== e || 1 / e == 1 / t)) ||
                    (e != e && t != t)
                  );
                },
          me = null,
          ye = null,
          be = null,
          ve = null,
          ke = !1,
          xe = !1,
          Se = 0,
          we = null,
          Ce = 0;
        function Ee() {
          if (null === me) throw Error(o(321));
          return me;
        }
        function _e() {
          if (0 < Ce) throw Error(o(312));
          return { memoizedState: null, queue: null, next: null };
        }
        function Te() {
          return (
            null === ve
              ? null === be
                ? ((ke = !1), (be = ve = _e()))
                : ((ke = !0), (ve = be))
              : null === ve.next
              ? ((ke = !1), (ve = ve.next = _e()))
              : ((ke = !0), (ve = ve.next)),
            ve
          );
        }
        function Be() {
          (ye = me = null), (xe = !1), (be = null), (Ce = 0), (ve = we = null);
        }
        function Fe(e, t) {
          return "function" == typeof t ? t(e) : t;
        }
        function Re(e, t, n) {
          if (((me = Ee()), (ve = Te()), ke)) {
            var r = ve.queue;
            if (((t = r.dispatch), null !== we && void 0 !== (n = we.get(r)))) {
              we.delete(r), (r = ve.memoizedState);
              do {
                (r = e(r, n.action)), (n = n.next);
              } while (null !== n);
              return (ve.memoizedState = r), [r, t];
            }
            return [ve.memoizedState, t];
          }
          return (
            (e =
              e === Fe
                ? "function" == typeof t
                  ? t()
                  : t
                : void 0 !== n
                ? n(t)
                : t),
            (ve.memoizedState = e),
            (e = (e = ve.queue = { last: null, dispatch: null }).dispatch =
              Oe.bind(null, me, e)),
            [ve.memoizedState, e]
          );
        }
        function Me(e, t) {
          if (
            ((me = Ee()), (t = void 0 === t ? null : t), null !== (ve = Te()))
          ) {
            var n = ve.memoizedState;
            if (null !== n && null !== t) {
              var r = n[1];
              e: if (null === r) r = !1;
              else {
                for (var o = 0; o < r.length && o < t.length; o++)
                  if (!ge(t[o], r[o])) {
                    r = !1;
                    break e;
                  }
                r = !0;
              }
              if (r) return n[0];
            }
          }
          return (e = e()), (ve.memoizedState = [e, t]), e;
        }
        function Oe(e, t, n) {
          if (25 <= Ce) throw Error(o(301));
          if (e === me)
            if (
              ((xe = !0),
              (e = { action: n, next: null }),
              null === we && (we = new Map()),
              void 0 === (n = we.get(t)))
            )
              we.set(t, e);
            else {
              for (t = n; null !== t.next; ) t = t.next;
              t.next = e;
            }
        }
        function Pe() {
          throw Error(o(394));
        }
        function je() {}
        var Ie = {
            readContext: function (e) {
              return e._currentValue2;
            },
            useContext: function (e) {
              return Ee(), e._currentValue2;
            },
            useMemo: Me,
            useReducer: Re,
            useRef: function (e) {
              me = Ee();
              var t = (ve = Te()).memoizedState;
              return null === t
                ? ((e = { current: e }), (ve.memoizedState = e))
                : t;
            },
            useState: function (e) {
              return Re(Fe, e);
            },
            useInsertionEffect: je,
            useLayoutEffect: function () {},
            useCallback: function (e, t) {
              return Me(function () {
                return e;
              }, t);
            },
            useImperativeHandle: je,
            useEffect: je,
            useDebugValue: je,
            useDeferredValue: function (e) {
              return Ee(), e;
            },
            useTransition: function () {
              return Ee(), [!1, Pe];
            },
            useId: function () {
              var e = ye.treeContext,
                t = e.overflow;
              e = ((e = e.id) & ~(1 << (32 - de(e) - 1))).toString(32) + t;
              var n = Le;
              if (null === n) throw Error(o(404));
              return (
                (t = Se++),
                (e = ":" + n.idPrefix + "R" + e),
                0 < t && (e += "H" + t.toString(32)),
                e + ":"
              );
            },
            useMutableSource: function (e, t) {
              return Ee(), t(e._source);
            },
            useSyncExternalStore: function (e, t, n) {
              if (void 0 === n) throw Error(o(407));
              return n();
            },
          },
          Le = null,
          $e =
            r.__SECRET_INTERNALS_DO_NOT_USE_OR_YOU_WILL_BE_FIRED
              .ReactCurrentDispatcher;
        function Ne(e) {
          return console.error(e), null;
        }
        function De() {}
        function Ae(e, t, n, r, o, a, i, s) {
          e.allPendingTasks++,
            null === n ? e.pendingRootTasks++ : n.pendingTasks++;
          var l = {
            node: t,
            ping: function () {
              var t = e.pingedTasks;
              t.push(l), 1 === t.length && tt(e);
            },
            blockedBoundary: n,
            blockedSegment: r,
            abortSet: o,
            legacyContext: a,
            context: i,
            treeContext: s,
          };
          return o.add(l), l;
        }
        function Ve(e, t, n, r, o, a) {
          return {
            status: 0,
            id: -1,
            index: t,
            parentFlushed: !1,
            chunks: [],
            children: [],
            formatContext: r,
            boundary: n,
            lastPushedText: o,
            textEmbedded: a,
          };
        }
        function ze(e, t) {
          if (null != (e = e.onError(t)) && "string" != typeof e)
            throw Error(
              'onError returned something with a type other than "string". onError should return a string and may return null or undefined but must not return anything else. It received something of type "' +
                typeof e +
                '" instead'
            );
          return e;
        }
        function qe(e, t) {
          var n = e.onShellError;
          n(t),
            (n = e.onFatalError)(t),
            null !== e.destination
              ? ((e.status = 2), e.destination.destroy(t))
              : ((e.status = 1), (e.fatalError = t));
        }
        function He(e, t, n, r, o) {
          for (me = {}, ye = t, Se = 0, e = n(r, o); xe; )
            (xe = !1), (Se = 0), (Ce += 1), (ve = null), (e = n(r, o));
          return Be(), e;
        }
        function Ue(e, t, n, r) {
          var a = n.render(),
            i = r.childContextTypes;
          if (null != i) {
            var s = t.legacyContext;
            if ("function" != typeof n.getChildContext) r = s;
            else {
              for (var l in (n = n.getChildContext()))
                if (!(l in i)) throw Error(o(108, Y(r) || "Unknown", l));
              r = j({}, s, n);
            }
            (t.legacyContext = r), Ze(e, t, a), (t.legacyContext = s);
          } else Ze(e, t, a);
        }
        function We(e, t) {
          if (e && e.defaultProps) {
            for (var n in ((t = j({}, t)), (e = e.defaultProps)))
              void 0 === t[n] && (t[n] = e[n]);
            return t;
          }
          return t;
        }
        function Ge(e, t, n, i, s) {
          if ("function" == typeof n)
            if (n.prototype && n.prototype.isReactComponent) {
              s = ee(n, t.legacyContext);
              var l = n.contextType;
              ue(
                (l = new n(
                  i,
                  "object" == typeof l && null !== l ? l._currentValue2 : s
                )),
                n,
                i,
                s
              ),
                Ue(e, t, l, n);
            } else {
              s = He(e, t, n, i, (l = ee(n, t.legacyContext)));
              var c = 0 !== Se;
              if (
                "object" == typeof s &&
                null !== s &&
                "function" == typeof s.render &&
                void 0 === s.$$typeof
              )
                ue(s, n, i, l), Ue(e, t, s, n);
              else if (c) {
                (i = t.treeContext), (t.treeContext = fe(i, 1, 0));
                try {
                  Ze(e, t, s);
                } finally {
                  t.treeContext = i;
                }
              } else Ze(e, t, s);
            }
          else {
            if ("string" != typeof n) {
              switch (n) {
                case X:
                case Z:
                case N:
                case D:
                case $:
                case H:
                  return void Ze(e, t, i.children);
                case G:
                  throw Error(o(343));
                case q:
                  e: {
                    (n = t.blockedBoundary),
                      (s = t.blockedSegment),
                      (l = i.fallback),
                      (i = i.children);
                    var f = {
                        id: null,
                        rootSegmentID: -1,
                        parentFlushed: !1,
                        pendingTasks: 0,
                        forceClientRender: !1,
                        completedSegments: [],
                        byteSize: 0,
                        fallbackAbortableTasks: (c = new Set()),
                        errorDigest: null,
                      },
                      d = Ve(0, s.chunks.length, f, s.formatContext, !1, !1);
                    s.children.push(d), (s.lastPushedText = !1);
                    var p = Ve(0, 0, null, s.formatContext, !1, !1);
                    (p.parentFlushed = !0),
                      (t.blockedBoundary = f),
                      (t.blockedSegment = p);
                    try {
                      if (
                        (Ke(e, t, i),
                        e.responseState.generateStaticMarkup ||
                          (p.lastPushedText &&
                            p.textEmbedded &&
                            p.chunks.push("\x3c!-- --\x3e")),
                        (p.status = 1),
                        Je(f, p),
                        0 === f.pendingTasks)
                      )
                        break e;
                    } catch (t) {
                      (p.status = 4),
                        (f.forceClientRender = !0),
                        (f.errorDigest = ze(e, t));
                    } finally {
                      (t.blockedBoundary = n), (t.blockedSegment = s);
                    }
                    (t = Ae(
                      e,
                      l,
                      n,
                      d,
                      c,
                      t.legacyContext,
                      t.context,
                      t.treeContext
                    )),
                      e.pingedTasks.push(t);
                  }
                  return;
              }
              if ("object" == typeof n && null !== n)
                switch (n.$$typeof) {
                  case z:
                    if (((i = He(e, t, n.render, i, s)), 0 !== Se)) {
                      (n = t.treeContext), (t.treeContext = fe(n, 1, 0));
                      try {
                        Ze(e, t, i);
                      } finally {
                        t.treeContext = n;
                      }
                    } else Ze(e, t, i);
                    return;
                  case U:
                    return void Ge(e, t, (n = n.type), (i = We(n, i)), s);
                  case A:
                    if (
                      ((s = i.children),
                      (n = n._context),
                      (i = i.value),
                      (l = n._currentValue2),
                      (n._currentValue2 = i),
                      (te = i =
                        {
                          parent: (c = te),
                          depth: null === c ? 0 : c.depth + 1,
                          context: n,
                          parentValue: l,
                          value: i,
                        }),
                      (t.context = i),
                      Ze(e, t, s),
                      null === (e = te))
                    )
                      throw Error(o(403));
                    return (
                      (i = e.parentValue),
                      (e.context._currentValue2 =
                        i === K ? e.context._defaultValue : i),
                      (e = te = e.parent),
                      void (t.context = e)
                    );
                  case V:
                    return void Ze(
                      e,
                      t,
                      (i = (i = i.children)(n._currentValue2))
                    );
                  case W:
                    return void Ge(
                      e,
                      t,
                      (n = (s = n._init)(n._payload)),
                      (i = We(n, i)),
                      void 0
                    );
                }
              throw Error(o(130, null == n ? n : typeof n, ""));
            }
            switch (
              ((l = (function (e, t, n, i, s) {
                switch (t) {
                  case "select":
                    e.push(F("select"));
                    var l = null,
                      c = null;
                    for (h in n)
                      if (a.call(n, h)) {
                        var f = n[h];
                        if (null != f)
                          switch (h) {
                            case "children":
                              l = f;
                              break;
                            case "dangerouslySetInnerHTML":
                              c = f;
                              break;
                            case "defaultValue":
                            case "value":
                              break;
                            default:
                              C(e, i, h, f);
                          }
                      }
                    return e.push(">"), E(e, c, l), l;
                  case "option":
                    (c = s.selectedValue), e.push(F("option"));
                    var d = (f = null),
                      p = null,
                      h = null;
                    for (l in n)
                      if (a.call(n, l)) {
                        var g = n[l];
                        if (null != g)
                          switch (l) {
                            case "children":
                              f = g;
                              break;
                            case "selected":
                              p = g;
                              break;
                            case "dangerouslySetInnerHTML":
                              h = g;
                              break;
                            case "value":
                              d = g;
                            default:
                              C(e, i, l, g);
                          }
                      }
                    if (null != c)
                      if (
                        ((n =
                          null !== d
                            ? "" + d
                            : (function (e) {
                                var t = "";
                                return (
                                  r.Children.forEach(e, function (e) {
                                    null != e && (t += e);
                                  }),
                                  t
                                );
                              })(f)),
                        k(c))
                      ) {
                        for (i = 0; i < c.length; i++)
                          if ("" + c[i] === n) {
                            e.push(' selected=""');
                            break;
                          }
                      } else "" + c === n && e.push(' selected=""');
                    else p && e.push(' selected=""');
                    return e.push(">"), E(e, h, f), f;
                  case "textarea":
                    for (f in (e.push(F("textarea")), (h = c = l = null), n))
                      if (a.call(n, f) && null != (d = n[f]))
                        switch (f) {
                          case "children":
                            h = d;
                            break;
                          case "value":
                            l = d;
                            break;
                          case "defaultValue":
                            c = d;
                            break;
                          case "dangerouslySetInnerHTML":
                            throw Error(o(91));
                          default:
                            C(e, i, f, d);
                        }
                    if (
                      (null === l && null !== c && (l = c),
                      e.push(">"),
                      null != h)
                    ) {
                      if (null != l) throw Error(o(92));
                      if (k(h) && 1 < h.length) throw Error(o(93));
                      l = "" + h;
                    }
                    return (
                      "string" == typeof l && "\n" === l[0] && e.push("\n"),
                      null !== l && e.push(y("" + l)),
                      null
                    );
                  case "input":
                    for (c in (e.push(F("input")), (d = h = f = l = null), n))
                      if (a.call(n, c) && null != (p = n[c]))
                        switch (c) {
                          case "children":
                          case "dangerouslySetInnerHTML":
                            throw Error(o(399, "input"));
                          case "defaultChecked":
                            d = p;
                            break;
                          case "defaultValue":
                            f = p;
                            break;
                          case "checked":
                            h = p;
                            break;
                          case "value":
                            l = p;
                            break;
                          default:
                            C(e, i, c, p);
                        }
                    return (
                      null !== h
                        ? C(e, i, "checked", h)
                        : null !== d && C(e, i, "checked", d),
                      null !== l
                        ? C(e, i, "value", l)
                        : null !== f && C(e, i, "value", f),
                      e.push("/>"),
                      null
                    );
                  case "menuitem":
                    for (var m in (e.push(F("menuitem")), n))
                      if (a.call(n, m) && null != (l = n[m]))
                        switch (m) {
                          case "children":
                          case "dangerouslySetInnerHTML":
                            throw Error(o(400));
                          default:
                            C(e, i, m, l);
                        }
                    return e.push(">"), null;
                  case "title":
                    for (g in (e.push(F("title")), (l = null), n))
                      if (a.call(n, g) && null != (c = n[g]))
                        switch (g) {
                          case "children":
                            l = c;
                            break;
                          case "dangerouslySetInnerHTML":
                            throw Error(o(434));
                          default:
                            C(e, i, g, c);
                        }
                    return e.push(">"), l;
                  case "listing":
                  case "pre":
                    for (d in (e.push(F(t)), (c = l = null), n))
                      if (a.call(n, d) && null != (f = n[d]))
                        switch (d) {
                          case "children":
                            l = f;
                            break;
                          case "dangerouslySetInnerHTML":
                            c = f;
                            break;
                          default:
                            C(e, i, d, f);
                        }
                    if ((e.push(">"), null != c)) {
                      if (null != l) throw Error(o(60));
                      if ("object" != typeof c || !("__html" in c))
                        throw Error(o(61));
                      null != (n = c.__html) &&
                        ("string" == typeof n && 0 < n.length && "\n" === n[0]
                          ? e.push("\n", n)
                          : e.push("" + n));
                    }
                    return (
                      "string" == typeof l && "\n" === l[0] && e.push("\n"), l
                    );
                  case "area":
                  case "base":
                  case "br":
                  case "col":
                  case "embed":
                  case "hr":
                  case "img":
                  case "keygen":
                  case "link":
                  case "meta":
                  case "param":
                  case "source":
                  case "track":
                  case "wbr":
                    for (var b in (e.push(F(t)), n))
                      if (a.call(n, b) && null != (l = n[b]))
                        switch (b) {
                          case "children":
                          case "dangerouslySetInnerHTML":
                            throw Error(o(399, t));
                          default:
                            C(e, i, b, l);
                        }
                    return e.push("/>"), null;
                  case "annotation-xml":
                  case "color-profile":
                  case "font-face":
                  case "font-face-src":
                  case "font-face-uri":
                  case "font-face-format":
                  case "font-face-name":
                  case "missing-glyph":
                    return _(e, n, t, i);
                  case "html":
                    return (
                      0 === s.insertionMode && e.push("<!DOCTYPE html>"),
                      _(e, n, t, i)
                    );
                  default:
                    if (-1 === t.indexOf("-") && "string" != typeof n.is)
                      return _(e, n, t, i);
                    for (p in (e.push(F(t)), (c = l = null), n))
                      if (a.call(n, p) && null != (f = n[p]))
                        switch (p) {
                          case "children":
                            l = f;
                            break;
                          case "dangerouslySetInnerHTML":
                            c = f;
                            break;
                          case "style":
                            w(e, i, f);
                            break;
                          case "suppressContentEditableWarning":
                          case "suppressHydrationWarning":
                            break;
                          default:
                            u(p) &&
                              "function" != typeof f &&
                              "symbol" != typeof f &&
                              e.push(" ", p, '="', y(f), '"');
                        }
                    return e.push(">"), E(e, c, l), l;
                }
              })(
                (s = t.blockedSegment).chunks,
                n,
                i,
                e.responseState,
                s.formatContext
              )),
              (s.lastPushedText = !1),
              (c = s.formatContext),
              (s.formatContext = (function (e, t, n) {
                switch (t) {
                  case "select":
                    return x(1, null != n.value ? n.value : n.defaultValue);
                  case "svg":
                    return x(2, null);
                  case "math":
                    return x(3, null);
                  case "foreignObject":
                    return x(1, null);
                  case "table":
                    return x(4, null);
                  case "thead":
                  case "tbody":
                  case "tfoot":
                    return x(5, null);
                  case "colgroup":
                    return x(7, null);
                  case "tr":
                    return x(6, null);
                }
                return 4 <= e.insertionMode || 0 === e.insertionMode
                  ? x(1, null)
                  : e;
              })(c, n, i)),
              Ke(e, t, l),
              (s.formatContext = c),
              n)
            ) {
              case "area":
              case "base":
              case "br":
              case "col":
              case "embed":
              case "hr":
              case "img":
              case "input":
              case "keygen":
              case "link":
              case "meta":
              case "param":
              case "source":
              case "track":
              case "wbr":
                break;
              default:
                s.chunks.push("</", n, ">");
            }
            s.lastPushedText = !1;
          }
        }
        function Ze(e, t, n) {
          if (((t.node = n), "object" == typeof n && null !== n)) {
            switch (n.$$typeof) {
              case I:
                return void Ge(e, t, n.type, n.props, n.ref);
              case L:
                throw Error(o(257));
              case W:
                var r = n._init;
                return void Ze(e, t, (n = r(n._payload)));
            }
            if (k(n)) return void Xe(e, t, n);
            if (
              (r =
                null === n || "object" != typeof n
                  ? null
                  : "function" == typeof (r = (Q && n[Q]) || n["@@iterator"])
                  ? r
                  : null) &&
              (r = r.call(n))
            ) {
              if (!(n = r.next()).done) {
                var a = [];
                do {
                  a.push(n.value), (n = r.next());
                } while (!n.done);
                Xe(e, t, a);
              }
              return;
            }
            throw (
              ((e = Object.prototype.toString.call(n)),
              Error(
                o(
                  31,
                  "[object Object]" === e
                    ? "object with keys {" + Object.keys(n).join(", ") + "}"
                    : e
                )
              ))
            );
          }
          "string" == typeof n
            ? ((r = t.blockedSegment).lastPushedText = P(
                t.blockedSegment.chunks,
                n,
                e.responseState,
                r.lastPushedText
              ))
            : "number" == typeof n &&
              ((r = t.blockedSegment).lastPushedText = P(
                t.blockedSegment.chunks,
                "" + n,
                e.responseState,
                r.lastPushedText
              ));
        }
        function Xe(e, t, n) {
          for (var r = n.length, o = 0; o < r; o++) {
            var a = t.treeContext;
            t.treeContext = fe(a, r, o);
            try {
              Ke(e, t, n[o]);
            } finally {
              t.treeContext = a;
            }
          }
        }
        function Ke(e, t, n) {
          var r = t.blockedSegment.formatContext,
            o = t.legacyContext,
            a = t.context;
          try {
            return Ze(e, t, n);
          } catch (l) {
            if (
              (Be(),
              "object" != typeof l || null === l || "function" != typeof l.then)
            )
              throw (
                ((t.blockedSegment.formatContext = r),
                (t.legacyContext = o),
                (t.context = a),
                se(a),
                l)
              );
            n = l;
            var i = t.blockedSegment,
              s = Ve(
                0,
                i.chunks.length,
                null,
                i.formatContext,
                i.lastPushedText,
                !0
              );
            i.children.push(s),
              (i.lastPushedText = !1),
              (e = Ae(
                e,
                t.node,
                t.blockedBoundary,
                s,
                t.abortSet,
                t.legacyContext,
                t.context,
                t.treeContext
              ).ping),
              n.then(e, e),
              (t.blockedSegment.formatContext = r),
              (t.legacyContext = o),
              (t.context = a),
              se(a);
          }
        }
        function Qe(e) {
          var t = e.blockedBoundary;
          ((e = e.blockedSegment).status = 3), et(this, t, e);
        }
        function Ye(e, t, n) {
          var r = e.blockedBoundary;
          (e.blockedSegment.status = 3),
            null === r
              ? (t.allPendingTasks--,
                2 !== t.status &&
                  ((t.status = 2),
                  null !== t.destination && t.destination.push(null)))
              : (r.pendingTasks--,
                r.forceClientRender ||
                  ((r.forceClientRender = !0),
                  (e = void 0 === n ? Error(o(432)) : n),
                  (r.errorDigest = t.onError(e)),
                  r.parentFlushed && t.clientRenderedBoundaries.push(r)),
                r.fallbackAbortableTasks.forEach(function (e) {
                  return Ye(e, t, n);
                }),
                r.fallbackAbortableTasks.clear(),
                t.allPendingTasks--,
                0 === t.allPendingTasks && (r = t.onAllReady)());
        }
        function Je(e, t) {
          if (
            0 === t.chunks.length &&
            1 === t.children.length &&
            null === t.children[0].boundary
          ) {
            var n = t.children[0];
            (n.id = t.id), (n.parentFlushed = !0), 1 === n.status && Je(e, n);
          } else e.completedSegments.push(t);
        }
        function et(e, t, n) {
          if (null === t) {
            if (n.parentFlushed) {
              if (null !== e.completedRootSegment) throw Error(o(389));
              e.completedRootSegment = n;
            }
            e.pendingRootTasks--,
              0 === e.pendingRootTasks &&
                ((e.onShellError = De), (t = e.onShellReady)());
          } else
            t.pendingTasks--,
              t.forceClientRender ||
                (0 === t.pendingTasks
                  ? (n.parentFlushed && 1 === n.status && Je(t, n),
                    t.parentFlushed && e.completedBoundaries.push(t),
                    t.fallbackAbortableTasks.forEach(Qe, e),
                    t.fallbackAbortableTasks.clear())
                  : n.parentFlushed &&
                    1 === n.status &&
                    (Je(t, n),
                    1 === t.completedSegments.length &&
                      t.parentFlushed &&
                      e.partialBoundaries.push(t)));
          e.allPendingTasks--, 0 === e.allPendingTasks && (e = e.onAllReady)();
        }
        function tt(e) {
          if (2 !== e.status) {
            var t = te,
              n = $e.current;
            $e.current = Ie;
            var r = Le;
            Le = e.responseState;
            try {
              var o,
                a = e.pingedTasks;
              for (o = 0; o < a.length; o++) {
                var i = a[o],
                  s = e,
                  l = i.blockedSegment;
                if (0 === l.status) {
                  se(i.context);
                  try {
                    Ze(s, i, i.node),
                      s.responseState.generateStaticMarkup ||
                        (l.lastPushedText &&
                          l.textEmbedded &&
                          l.chunks.push("\x3c!-- --\x3e")),
                      i.abortSet.delete(i),
                      (l.status = 1),
                      et(s, i.blockedBoundary, l);
                  } catch (e) {
                    if (
                      (Be(),
                      "object" == typeof e &&
                        null !== e &&
                        "function" == typeof e.then)
                    ) {
                      var u = i.ping;
                      e.then(u, u);
                    } else {
                      i.abortSet.delete(i), (l.status = 4);
                      var c = i.blockedBoundary,
                        f = e,
                        d = ze(s, f);
                      null === c
                        ? qe(s, f)
                        : (c.pendingTasks--,
                          c.forceClientRender ||
                            ((c.forceClientRender = !0),
                            (c.errorDigest = d),
                            c.parentFlushed &&
                              s.clientRenderedBoundaries.push(c))),
                        s.allPendingTasks--,
                        0 === s.allPendingTasks && (0, s.onAllReady)();
                    }
                  }
                }
              }
              a.splice(0, o), null !== e.destination && st(e, e.destination);
            } catch (t) {
              ze(e, t), qe(e, t);
            } finally {
              (Le = r), ($e.current = n), n === Ie && se(t);
            }
          }
        }
        function nt(e, t, n) {
          switch (((n.parentFlushed = !0), n.status)) {
            case 0:
              var r = (n.id = e.nextSegmentId++);
              return (
                (n.lastPushedText = !1),
                (n.textEmbedded = !1),
                (e = e.responseState),
                t.push('<template id="'),
                t.push(e.placeholderPrefix),
                (e = r.toString(16)),
                t.push(e),
                t.push('"></template>')
              );
            case 1:
              n.status = 2;
              var a = !0;
              r = n.chunks;
              var i = 0;
              n = n.children;
              for (var s = 0; s < n.length; s++) {
                for (a = n[s]; i < a.index; i++) t.push(r[i]);
                a = rt(e, t, a);
              }
              for (; i < r.length - 1; i++) t.push(r[i]);
              return i < r.length && (a = t.push(r[i])), a;
            default:
              throw Error(o(390));
          }
        }
        function rt(e, t, n) {
          var r = n.boundary;
          if (null === r) return nt(e, t, n);
          if (((r.parentFlushed = !0), r.forceClientRender))
            return (
              e.responseState.generateStaticMarkup ||
                ((r = r.errorDigest),
                t.push("\x3c!--$!--\x3e"),
                t.push("<template"),
                r &&
                  (t.push(' data-dgst="'), (r = y(r)), t.push(r), t.push('"')),
                t.push("></template>")),
              nt(e, t, n),
              !!e.responseState.generateStaticMarkup ||
                t.push("\x3c!--/$--\x3e")
            );
          if (0 < r.pendingTasks) {
            (r.rootSegmentID = e.nextSegmentId++),
              0 < r.completedSegments.length && e.partialBoundaries.push(r);
            var a = e.responseState,
              i = a.nextSuspenseID++;
            return (
              (a = a.boundaryPrefix + i.toString(16)),
              (r = r.id = a),
              R(t, e.responseState, r),
              nt(e, t, n),
              t.push("\x3c!--/$--\x3e")
            );
          }
          if (r.byteSize > e.progressiveChunkSize)
            return (
              (r.rootSegmentID = e.nextSegmentId++),
              e.completedBoundaries.push(r),
              R(t, e.responseState, r.id),
              nt(e, t, n),
              t.push("\x3c!--/$--\x3e")
            );
          if (
            (e.responseState.generateStaticMarkup || t.push("\x3c!--$--\x3e"),
            1 !== (n = r.completedSegments).length)
          )
            throw Error(o(391));
          return (
            rt(e, t, n[0]),
            !!e.responseState.generateStaticMarkup || t.push("\x3c!--/$--\x3e")
          );
        }
        function ot(e, t, n) {
          return (
            (function (e, t, n, r) {
              switch (n.insertionMode) {
                case 0:
                case 1:
                  return (
                    e.push('<div hidden id="'),
                    e.push(t.segmentPrefix),
                    (t = r.toString(16)),
                    e.push(t),
                    e.push('">')
                  );
                case 2:
                  return (
                    e.push('<svg aria-hidden="true" style="display:none" id="'),
                    e.push(t.segmentPrefix),
                    (t = r.toString(16)),
                    e.push(t),
                    e.push('">')
                  );
                case 3:
                  return (
                    e.push(
                      '<math aria-hidden="true" style="display:none" id="'
                    ),
                    e.push(t.segmentPrefix),
                    (t = r.toString(16)),
                    e.push(t),
                    e.push('">')
                  );
                case 4:
                  return (
                    e.push('<table hidden id="'),
                    e.push(t.segmentPrefix),
                    (t = r.toString(16)),
                    e.push(t),
                    e.push('">')
                  );
                case 5:
                  return (
                    e.push('<table hidden><tbody id="'),
                    e.push(t.segmentPrefix),
                    (t = r.toString(16)),
                    e.push(t),
                    e.push('">')
                  );
                case 6:
                  return (
                    e.push('<table hidden><tr id="'),
                    e.push(t.segmentPrefix),
                    (t = r.toString(16)),
                    e.push(t),
                    e.push('">')
                  );
                case 7:
                  return (
                    e.push('<table hidden><colgroup id="'),
                    e.push(t.segmentPrefix),
                    (t = r.toString(16)),
                    e.push(t),
                    e.push('">')
                  );
                default:
                  throw Error(o(397));
              }
            })(t, e.responseState, n.formatContext, n.id),
            rt(e, t, n),
            (function (e, t) {
              switch (t.insertionMode) {
                case 0:
                case 1:
                  return e.push("</div>");
                case 2:
                  return e.push("</svg>");
                case 3:
                  return e.push("</math>");
                case 4:
                  return e.push("</table>");
                case 5:
                  return e.push("</tbody></table>");
                case 6:
                  return e.push("</tr></table>");
                case 7:
                  return e.push("</colgroup></table>");
                default:
                  throw Error(o(397));
              }
            })(t, n.formatContext)
          );
        }
        function at(e, t, n) {
          for (var r = n.completedSegments, a = 0; a < r.length; a++)
            it(e, t, n, r[a]);
          if (
            ((r.length = 0),
            (e = e.responseState),
            (r = n.id),
            (n = n.rootSegmentID),
            t.push(e.startInlineScript),
            e.sentCompleteBoundaryFunction
              ? t.push('$RC("')
              : ((e.sentCompleteBoundaryFunction = !0),
                t.push(
                  'function $RC(a,b){a=document.getElementById(a);b=document.getElementById(b);b.parentNode.removeChild(b);if(a){a=a.previousSibling;var f=a.parentNode,c=a.nextSibling,e=0;do{if(c&&8===c.nodeType){var d=c.data;if("/$"===d)if(0===e)break;else e--;else"$"!==d&&"$?"!==d&&"$!"!==d||e++}d=c.nextSibling;f.removeChild(c);c=d}while(c);for(;b.firstChild;)f.insertBefore(b.firstChild,c);a.data="$";a._reactRetry&&a._reactRetry()}};$RC("'
                )),
            null === r)
          )
            throw Error(o(395));
          return (
            (n = n.toString(16)),
            t.push(r),
            t.push('","'),
            t.push(e.segmentPrefix),
            t.push(n),
            t.push('")</script>')
          );
        }
        function it(e, t, n, r) {
          if (2 === r.status) return !0;
          var a = r.id;
          if (-1 === a) {
            if (-1 === (r.id = n.rootSegmentID)) throw Error(o(392));
            return ot(e, t, r);
          }
          return (
            ot(e, t, r),
            (e = e.responseState),
            t.push(e.startInlineScript),
            e.sentCompleteSegmentFunction
              ? t.push('$RS("')
              : ((e.sentCompleteSegmentFunction = !0),
                t.push(
                  'function $RS(a,b){a=document.getElementById(a);b=document.getElementById(b);for(a.parentNode.removeChild(a);a.firstChild;)b.parentNode.insertBefore(a.firstChild,b);b.parentNode.removeChild(b)};$RS("'
                )),
            t.push(e.segmentPrefix),
            (a = a.toString(16)),
            t.push(a),
            t.push('","'),
            t.push(e.placeholderPrefix),
            t.push(a),
            t.push('")</script>')
          );
        }
        function st(e, t) {
          try {
            var n = e.completedRootSegment;
            if (null !== n && 0 === e.pendingRootTasks) {
              rt(e, t, n), (e.completedRootSegment = null);
              var r = e.responseState.bootstrapChunks;
              for (n = 0; n < r.length - 1; n++) t.push(r[n]);
              n < r.length && t.push(r[n]);
            }
            var a,
              i = e.clientRenderedBoundaries;
            for (a = 0; a < i.length; a++) {
              var s = i[a];
              r = t;
              var l = e.responseState,
                u = s.id,
                c = s.errorDigest,
                f = s.errorMessage,
                d = s.errorComponentStack;
              if (
                (r.push(l.startInlineScript),
                l.sentClientRenderFunction
                  ? r.push('$RX("')
                  : ((l.sentClientRenderFunction = !0),
                    r.push(
                      'function $RX(b,c,d,e){var a=document.getElementById(b);a&&(b=a.previousSibling,b.data="$!",a=a.dataset,c&&(a.dgst=c),d&&(a.msg=d),e&&(a.stck=e),b._reactRetry&&b._reactRetry())};$RX("'
                    )),
                null === u)
              )
                throw Error(o(395));
              if ((r.push(u), r.push('"'), c || f || d)) {
                r.push(",");
                var p = O(c || "");
                r.push(p);
              }
              if (f || d) {
                r.push(",");
                var h = O(f || "");
                r.push(h);
              }
              if (d) {
                r.push(",");
                var g = O(d);
                r.push(g);
              }
              if (!r.push(")</script>"))
                return (e.destination = null), a++, void i.splice(0, a);
            }
            i.splice(0, a);
            var m = e.completedBoundaries;
            for (a = 0; a < m.length; a++)
              if (!at(e, t, m[a]))
                return (e.destination = null), a++, void m.splice(0, a);
            m.splice(0, a);
            var y = e.partialBoundaries;
            for (a = 0; a < y.length; a++) {
              var b = y[a];
              e: {
                (i = e), (s = t);
                var v = b.completedSegments;
                for (l = 0; l < v.length; l++)
                  if (!it(i, s, b, v[l])) {
                    l++, v.splice(0, l);
                    var k = !1;
                    break e;
                  }
                v.splice(0, l), (k = !0);
              }
              if (!k) return (e.destination = null), a++, void y.splice(0, a);
            }
            y.splice(0, a);
            var x = e.completedBoundaries;
            for (a = 0; a < x.length; a++)
              if (!at(e, t, x[a]))
                return (e.destination = null), a++, void x.splice(0, a);
            x.splice(0, a);
          } finally {
            0 === e.allPendingTasks &&
              0 === e.pingedTasks.length &&
              0 === e.clientRenderedBoundaries.length &&
              0 === e.completedBoundaries.length &&
              t.push(null);
          }
        }
        function lt(e, t) {
          try {
            var n = e.abortableTasks;
            n.forEach(function (n) {
              return Ye(n, e, t);
            }),
              n.clear(),
              null !== e.destination && st(e, e.destination);
          } catch (t) {
            ze(e, t), qe(e, t);
          }
        }
        function ut() {}
        function ct(e, t, n, r) {
          var a = !1,
            i = null,
            s = "",
            l = {
              push: function (e) {
                return null !== e && (s += e), !0;
              },
              destroy: function (e) {
                (a = !0), (i = e);
              },
            },
            u = !1;
          if (
            ((e = (function (e, t, n, r, o, a, i, s, l) {
              var u = [],
                c = new Set();
              return (
                ((n = Ve(
                  (t = {
                    destination: null,
                    responseState: t,
                    progressiveChunkSize: r,
                    status: 0,
                    fatalError: null,
                    nextSegmentId: 0,
                    allPendingTasks: 0,
                    pendingRootTasks: 0,
                    completedRootSegment: null,
                    abortableTasks: c,
                    pingedTasks: u,
                    clientRenderedBoundaries: [],
                    completedBoundaries: [],
                    partialBoundaries: [],
                    onError: void 0 === o ? Ne : o,
                    onAllReady: De,
                    onShellReady: void 0 === i ? De : i,
                    onShellError: De,
                    onFatalError: De,
                  }),
                  0,
                  null,
                  n,
                  !1,
                  !1
                )).parentFlushed = !0),
                (e = Ae(t, e, null, n, c, J, null, ce)),
                u.push(e),
                t
              );
            })(
              e,
              (function (e, t) {
                return {
                  bootstrapChunks: [],
                  startInlineScript: "<script>",
                  placeholderPrefix: (t = void 0 === t ? "" : t) + "P:",
                  segmentPrefix: t + "S:",
                  boundaryPrefix: t + "B:",
                  idPrefix: t,
                  nextSuspenseID: 0,
                  sentCompleteSegmentFunction: !1,
                  sentCompleteBoundaryFunction: !1,
                  sentClientRenderFunction: !1,
                  generateStaticMarkup: e,
                };
              })(n, t ? t.identifierPrefix : void 0),
              { insertionMode: 1, selectedValue: null },
              1 / 0,
              ut,
              0,
              function () {
                u = !0;
              }
            )),
            tt(e),
            lt(e, r),
            1 === e.status)
          )
            (e.status = 2), l.destroy(e.fatalError);
          else if (2 !== e.status && null === e.destination) {
            e.destination = l;
            try {
              st(e, l);
            } catch (t) {
              ze(e, t), qe(e, t);
            }
          }
          if (a) throw i;
          if (!u) throw Error(o(426));
          return s;
        }
        (t.renderToNodeStream = function () {
          throw Error(o(207));
        }),
          (t.renderToStaticMarkup = function (e, t) {
            return ct(
              e,
              t,
              !0,
              'The server used "renderToStaticMarkup" which does not support Suspense. If you intended to have the server wait for the suspended component please switch to "renderToReadableStream" which supports Suspense on the server'
            );
          }),
          (t.renderToStaticNodeStream = function () {
            throw Error(o(208));
          }),
          (t.renderToString = function (e, t) {
            return ct(
              e,
              t,
              !1,
              'The server used "renderToString" which does not support Suspense. If you intended for this Suspense boundary to render the fallback content on the server consider throwing an Error somewhere within the Suspense boundary. If you intended to have the server wait for the suspended component please switch to "renderToReadableStream" which supports Suspense on the server'
            );
          }),
          (t.version = "18.2.0");
      },
      698: (e, t, n) => {
        var r = n(294);
        function o(e) {
          for (
            var t =
                "https://reactjs.org/docs/error-decoder.html?invariant=" + e,
              n = 1;
            n < arguments.length;
            n++
          )
            t += "&args[]=" + encodeURIComponent(arguments[n]);
          return (
            "Minified React error #" +
            e +
            "; visit " +
            t +
            " for the full message or use the non-minified dev environment for full errors and additional helpful warnings."
          );
        }
        var a = null,
          i = 0;
        function s(e, t) {
          if (0 !== t.length)
            if (512 < t.length)
              0 < i &&
                (e.enqueue(new Uint8Array(a.buffer, 0, i)),
                (a = new Uint8Array(512)),
                (i = 0)),
                e.enqueue(t);
            else {
              var n = a.length - i;
              n < t.length &&
                (0 === n
                  ? e.enqueue(a)
                  : (a.set(t.subarray(0, n), i),
                    e.enqueue(a),
                    (t = t.subarray(n))),
                (a = new Uint8Array(512)),
                (i = 0)),
                a.set(t, i),
                (i += t.length);
            }
        }
        function l(e, t) {
          return s(e, t), !0;
        }
        function u(e) {
          a &&
            0 < i &&
            (e.enqueue(new Uint8Array(a.buffer, 0, i)), (a = null), (i = 0));
        }
        var c = new TextEncoder();
        function f(e) {
          return c.encode(e);
        }
        function d(e) {
          return c.encode(e);
        }
        function p(e, t) {
          "function" == typeof e.error ? e.error(t) : e.close();
        }
        var h = Object.prototype.hasOwnProperty,
          g =
            /^[:A-Z_a-z\u00C0-\u00D6\u00D8-\u00F6\u00F8-\u02FF\u0370-\u037D\u037F-\u1FFF\u200C-\u200D\u2070-\u218F\u2C00-\u2FEF\u3001-\uD7FF\uF900-\uFDCF\uFDF0-\uFFFD][:A-Z_a-z\u00C0-\u00D6\u00D8-\u00F6\u00F8-\u02FF\u0370-\u037D\u037F-\u1FFF\u200C-\u200D\u2070-\u218F\u2C00-\u2FEF\u3001-\uD7FF\uF900-\uFDCF\uFDF0-\uFFFD\-.0-9\u00B7\u0300-\u036F\u203F-\u2040]*$/,
          m = {},
          y = {};
        function b(e) {
          return (
            !!h.call(y, e) ||
            (!h.call(m, e) && (g.test(e) ? (y[e] = !0) : ((m[e] = !0), !1)))
          );
        }
        function v(e, t, n, r, o, a, i) {
          (this.acceptsBooleans = 2 === t || 3 === t || 4 === t),
            (this.attributeName = r),
            (this.attributeNamespace = o),
            (this.mustUseProperty = n),
            (this.propertyName = e),
            (this.type = t),
            (this.sanitizeURL = a),
            (this.removeEmptyString = i);
        }
        var k = {};
        "children dangerouslySetInnerHTML defaultValue defaultChecked innerHTML suppressContentEditableWarning suppressHydrationWarning style"
          .split(" ")
          .forEach(function (e) {
            k[e] = new v(e, 0, !1, e, null, !1, !1);
          }),
          [
            ["acceptCharset", "accept-charset"],
            ["className", "class"],
            ["htmlFor", "for"],
            ["httpEquiv", "http-equiv"],
          ].forEach(function (e) {
            var t = e[0];
            k[t] = new v(t, 1, !1, e[1], null, !1, !1);
          }),
          ["contentEditable", "draggable", "spellCheck", "value"].forEach(
            function (e) {
              k[e] = new v(e, 2, !1, e.toLowerCase(), null, !1, !1);
            }
          ),
          [
            "autoReverse",
            "externalResourcesRequired",
            "focusable",
            "preserveAlpha",
          ].forEach(function (e) {
            k[e] = new v(e, 2, !1, e, null, !1, !1);
          }),
          "allowFullScreen async autoFocus autoPlay controls default defer disabled disablePictureInPicture disableRemotePlayback formNoValidate hidden loop noModule noValidate open playsInline readOnly required reversed scoped seamless itemScope"
            .split(" ")
            .forEach(function (e) {
              k[e] = new v(e, 3, !1, e.toLowerCase(), null, !1, !1);
            }),
          ["checked", "multiple", "muted", "selected"].forEach(function (e) {
            k[e] = new v(e, 3, !0, e, null, !1, !1);
          }),
          ["capture", "download"].forEach(function (e) {
            k[e] = new v(e, 4, !1, e, null, !1, !1);
          }),
          ["cols", "rows", "size", "span"].forEach(function (e) {
            k[e] = new v(e, 6, !1, e, null, !1, !1);
          }),
          ["rowSpan", "start"].forEach(function (e) {
            k[e] = new v(e, 5, !1, e.toLowerCase(), null, !1, !1);
          });
        var x = /[\-:]([a-z])/g;
        function S(e) {
          return e[1].toUpperCase();
        }
        "accent-height alignment-baseline arabic-form baseline-shift cap-height clip-path clip-rule color-interpolation color-interpolation-filters color-profile color-rendering dominant-baseline enable-background fill-opacity fill-rule flood-color flood-opacity font-family font-size font-size-adjust font-stretch font-style font-variant font-weight glyph-name glyph-orientation-horizontal glyph-orientation-vertical horiz-adv-x horiz-origin-x image-rendering letter-spacing lighting-color marker-end marker-mid marker-start overline-position overline-thickness paint-order panose-1 pointer-events rendering-intent shape-rendering stop-color stop-opacity strikethrough-position strikethrough-thickness stroke-dasharray stroke-dashoffset stroke-linecap stroke-linejoin stroke-miterlimit stroke-opacity stroke-width text-anchor text-decoration text-rendering underline-position underline-thickness unicode-bidi unicode-range units-per-em v-alphabetic v-hanging v-ideographic v-mathematical vector-effect vert-adv-y vert-origin-x vert-origin-y word-spacing writing-mode xmlns:xlink x-height"
          .split(" ")
          .forEach(function (e) {
            var t = e.replace(x, S);
            k[t] = new v(t, 1, !1, e, null, !1, !1);
          }),
          "xlink:actuate xlink:arcrole xlink:role xlink:show xlink:title xlink:type"
            .split(" ")
            .forEach(function (e) {
              var t = e.replace(x, S);
              k[t] = new v(t, 1, !1, e, "http://www.w3.org/1999/xlink", !1, !1);
            }),
          ["xml:base", "xml:lang", "xml:space"].forEach(function (e) {
            var t = e.replace(x, S);
            k[t] = new v(
              t,
              1,
              !1,
              e,
              "http://www.w3.org/XML/1998/namespace",
              !1,
              !1
            );
          }),
          ["tabIndex", "crossOrigin"].forEach(function (e) {
            k[e] = new v(e, 1, !1, e.toLowerCase(), null, !1, !1);
          }),
          (k.xlinkHref = new v(
            "xlinkHref",
            1,
            !1,
            "xlink:href",
            "http://www.w3.org/1999/xlink",
            !0,
            !1
          )),
          ["src", "href", "action", "formAction"].forEach(function (e) {
            k[e] = new v(e, 1, !1, e.toLowerCase(), null, !0, !0);
          });
        var w = {
            animationIterationCount: !0,
            aspectRatio: !0,
            borderImageOutset: !0,
            borderImageSlice: !0,
            borderImageWidth: !0,
            boxFlex: !0,
            boxFlexGroup: !0,
            boxOrdinalGroup: !0,
            columnCount: !0,
            columns: !0,
            flex: !0,
            flexGrow: !0,
            flexPositive: !0,
            flexShrink: !0,
            flexNegative: !0,
            flexOrder: !0,
            gridArea: !0,
            gridRow: !0,
            gridRowEnd: !0,
            gridRowSpan: !0,
            gridRowStart: !0,
            gridColumn: !0,
            gridColumnEnd: !0,
            gridColumnSpan: !0,
            gridColumnStart: !0,
            fontWeight: !0,
            lineClamp: !0,
            lineHeight: !0,
            opacity: !0,
            order: !0,
            orphans: !0,
            tabSize: !0,
            widows: !0,
            zIndex: !0,
            zoom: !0,
            fillOpacity: !0,
            floodOpacity: !0,
            stopOpacity: !0,
            strokeDasharray: !0,
            strokeDashoffset: !0,
            strokeMiterlimit: !0,
            strokeOpacity: !0,
            strokeWidth: !0,
          },
          C = ["Webkit", "ms", "Moz", "O"];
        Object.keys(w).forEach(function (e) {
          C.forEach(function (t) {
            (t = t + e.charAt(0).toUpperCase() + e.substring(1)), (w[t] = w[e]);
          });
        });
        var E = /["'&<>]/;
        function _(e) {
          if ("boolean" == typeof e || "number" == typeof e) return "" + e;
          e = "" + e;
          var t = E.exec(e);
          if (t) {
            var n,
              r = "",
              o = 0;
            for (n = t.index; n < e.length; n++) {
              switch (e.charCodeAt(n)) {
                case 34:
                  t = "&quot;";
                  break;
                case 38:
                  t = "&amp;";
                  break;
                case 39:
                  t = "&#x27;";
                  break;
                case 60:
                  t = "&lt;";
                  break;
                case 62:
                  t = "&gt;";
                  break;
                default:
                  continue;
              }
              o !== n && (r += e.substring(o, n)), (o = n + 1), (r += t);
            }
            e = o !== n ? r + e.substring(o, n) : r;
          }
          return e;
        }
        var T = /([A-Z])/g,
          B = /^ms-/,
          F = Array.isArray,
          R = d("<script>"),
          M = d("</script>"),
          O = d('<script src="'),
          P = d('<script type="module" src="'),
          j = d('" async=""></script>'),
          I = /(<\/|<)(s)(cript)/gi;
        function L(e, t, n, r) {
          return t + ("s" === n ? "\\u0073" : "\\u0053") + r;
        }
        function $(e, t) {
          return { insertionMode: e, selectedValue: t };
        }
        var N = d("\x3c!-- --\x3e");
        function D(e, t, n, r) {
          return "" === t ? r : (r && e.push(N), e.push(f(_(t))), !0);
        }
        var A = new Map(),
          V = d(' style="'),
          z = d(":"),
          q = d(";");
        function H(e, t, n) {
          if ("object" != typeof n) throw Error(o(62));
          for (var r in ((t = !0), n))
            if (h.call(n, r)) {
              var a = n[r];
              if (null != a && "boolean" != typeof a && "" !== a) {
                if (0 === r.indexOf("--")) {
                  var i = f(_(r));
                  a = f(_(("" + a).trim()));
                } else {
                  i = r;
                  var s = A.get(i);
                  void 0 !== s ||
                    ((s = d(
                      _(i.replace(T, "-$1").toLowerCase().replace(B, "-ms-"))
                    )),
                    A.set(i, s)),
                    (i = s),
                    (a =
                      "number" == typeof a
                        ? 0 === a || h.call(w, r)
                          ? f("" + a)
                          : f(a + "px")
                        : f(_(("" + a).trim())));
                }
                t ? ((t = !1), e.push(V, i, z, a)) : e.push(q, i, z, a);
              }
            }
          t || e.push(G);
        }
        var U = d(" "),
          W = d('="'),
          G = d('"'),
          Z = d('=""');
        function X(e, t, n, r) {
          switch (n) {
            case "style":
              return void H(e, t, r);
            case "defaultValue":
            case "defaultChecked":
            case "innerHTML":
            case "suppressContentEditableWarning":
            case "suppressHydrationWarning":
              return;
          }
          if (
            !(2 < n.length) ||
            ("o" !== n[0] && "O" !== n[0]) ||
            ("n" !== n[1] && "N" !== n[1])
          )
            if (null !== (t = k.hasOwnProperty(n) ? k[n] : null)) {
              switch (typeof r) {
                case "function":
                case "symbol":
                  return;
                case "boolean":
                  if (!t.acceptsBooleans) return;
              }
              switch (((n = f(t.attributeName)), t.type)) {
                case 3:
                  r && e.push(U, n, Z);
                  break;
                case 4:
                  !0 === r
                    ? e.push(U, n, Z)
                    : !1 !== r && e.push(U, n, W, f(_(r)), G);
                  break;
                case 5:
                  isNaN(r) || e.push(U, n, W, f(_(r)), G);
                  break;
                case 6:
                  !isNaN(r) && 1 <= r && e.push(U, n, W, f(_(r)), G);
                  break;
                default:
                  t.sanitizeURL && (r = "" + r), e.push(U, n, W, f(_(r)), G);
              }
            } else if (b(n)) {
              switch (typeof r) {
                case "function":
                case "symbol":
                  return;
                case "boolean":
                  if (
                    "data-" !== (t = n.toLowerCase().slice(0, 5)) &&
                    "aria-" !== t
                  )
                    return;
              }
              e.push(U, f(n), W, f(_(r)), G);
            }
        }
        var K = d(">"),
          Q = d("/>");
        function Y(e, t, n) {
          if (null != t) {
            if (null != n) throw Error(o(60));
            if ("object" != typeof t || !("__html" in t)) throw Error(o(61));
            null != (t = t.__html) && e.push(f("" + t));
          }
        }
        var J = d(' selected=""');
        function ee(e, t, n, r) {
          e.push(oe(n));
          var o,
            a = (n = null);
          for (o in t)
            if (h.call(t, o)) {
              var i = t[o];
              if (null != i)
                switch (o) {
                  case "children":
                    n = i;
                    break;
                  case "dangerouslySetInnerHTML":
                    a = i;
                    break;
                  default:
                    X(e, r, o, i);
                }
            }
          return (
            e.push(K),
            Y(e, a, n),
            "string" == typeof n ? (e.push(f(_(n))), null) : n
          );
        }
        var te = d("\n"),
          ne = /^[a-zA-Z][a-zA-Z:_\.\-\d]*$/,
          re = new Map();
        function oe(e) {
          var t = re.get(e);
          if (void 0 === t) {
            if (!ne.test(e)) throw Error(o(65, e));
            (t = d("<" + e)), re.set(e, t);
          }
          return t;
        }
        var ae = d("<!DOCTYPE html>");
        var ie = d("</"),
          se = d(">"),
          le = d('<template id="'),
          ue = d('"></template>'),
          ce = d("\x3c!--$--\x3e"),
          fe = d('\x3c!--$?--\x3e<template id="'),
          de = d('"></template>'),
          pe = d("\x3c!--$!--\x3e"),
          he = d("\x3c!--/$--\x3e"),
          ge = d("<template"),
          me = d('"'),
          ye = d(' data-dgst="');
        d(' data-msg="'), d(' data-stck="');
        var be = d("></template>");
        function ve(e, t, n) {
          if ((s(e, fe), null === n)) throw Error(o(395));
          return s(e, n), l(e, de);
        }
        var ke = d('<div hidden id="'),
          xe = d('">'),
          Se = d("</div>"),
          we = d('<svg aria-hidden="true" style="display:none" id="'),
          Ce = d('">'),
          Ee = d("</svg>"),
          _e = d('<math aria-hidden="true" style="display:none" id="'),
          Te = d('">'),
          Be = d("</math>"),
          Fe = d('<table hidden id="'),
          Re = d('">'),
          Me = d("</table>"),
          Oe = d('<table hidden><tbody id="'),
          Pe = d('">'),
          je = d("</tbody></table>"),
          Ie = d('<table hidden><tr id="'),
          Le = d('">'),
          $e = d("</tr></table>"),
          Ne = d('<table hidden><colgroup id="'),
          De = d('">'),
          Ae = d("</colgroup></table>"),
          Ve = d(
            'function $RS(a,b){a=document.getElementById(a);b=document.getElementById(b);for(a.parentNode.removeChild(a);a.firstChild;)b.parentNode.insertBefore(a.firstChild,b);b.parentNode.removeChild(b)};$RS("'
          ),
          ze = d('$RS("'),
          qe = d('","'),
          He = d('")</script>'),
          Ue = d(
            'function $RC(a,b){a=document.getElementById(a);b=document.getElementById(b);b.parentNode.removeChild(b);if(a){a=a.previousSibling;var f=a.parentNode,c=a.nextSibling,e=0;do{if(c&&8===c.nodeType){var d=c.data;if("/$"===d)if(0===e)break;else e--;else"$"!==d&&"$?"!==d&&"$!"!==d||e++}d=c.nextSibling;f.removeChild(c);c=d}while(c);for(;b.firstChild;)f.insertBefore(b.firstChild,c);a.data="$";a._reactRetry&&a._reactRetry()}};$RC("'
          ),
          We = d('$RC("'),
          Ge = d('","'),
          Ze = d('")</script>'),
          Xe = d(
            'function $RX(b,c,d,e){var a=document.getElementById(b);a&&(b=a.previousSibling,b.data="$!",a=a.dataset,c&&(a.dgst=c),d&&(a.msg=d),e&&(a.stck=e),b._reactRetry&&b._reactRetry())};$RX("'
          ),
          Ke = d('$RX("'),
          Qe = d('"'),
          Ye = d(")</script>"),
          Je = d(","),
          et = /[<\u2028\u2029]/g;
        function tt(e) {
          return JSON.stringify(e).replace(et, function (e) {
            switch (e) {
              case "<":
                return "\\u003c";
              case "\u2028":
                return "\\u2028";
              case "\u2029":
                return "\\u2029";
              default:
                throw Error(
                  "escapeJSStringsForInstructionScripts encountered a match it does not know how to replace. this means the match regex and the replacement characters are no longer in sync. This is a bug in React"
                );
            }
          });
        }
        var nt = Object.assign,
          rt = Symbol.for("react.element"),
          ot = Symbol.for("react.portal"),
          at = Symbol.for("react.fragment"),
          it = Symbol.for("react.strict_mode"),
          st = Symbol.for("react.profiler"),
          lt = Symbol.for("react.provider"),
          ut = Symbol.for("react.context"),
          ct = Symbol.for("react.forward_ref"),
          ft = Symbol.for("react.suspense"),
          dt = Symbol.for("react.suspense_list"),
          pt = Symbol.for("react.memo"),
          ht = Symbol.for("react.lazy"),
          gt = Symbol.for("react.scope"),
          mt = Symbol.for("react.debug_trace_mode"),
          yt = Symbol.for("react.legacy_hidden"),
          bt = Symbol.for("react.default_value"),
          vt = Symbol.iterator;
        function kt(e) {
          if (null == e) return null;
          if ("function" == typeof e) return e.displayName || e.name || null;
          if ("string" == typeof e) return e;
          switch (e) {
            case at:
              return "Fragment";
            case ot:
              return "Portal";
            case st:
              return "Profiler";
            case it:
              return "StrictMode";
            case ft:
              return "Suspense";
            case dt:
              return "SuspenseList";
          }
          if ("object" == typeof e)
            switch (e.$$typeof) {
              case ut:
                return (e.displayName || "Context") + ".Consumer";
              case lt:
                return (e._context.displayName || "Context") + ".Provider";
              case ct:
                var t = e.render;
                return (
                  (e = e.displayName) ||
                    (e =
                      "" !== (e = t.displayName || t.name || "")
                        ? "ForwardRef(" + e + ")"
                        : "ForwardRef"),
                  e
                );
              case pt:
                return null !== (t = e.displayName || null)
                  ? t
                  : kt(e.type) || "Memo";
              case ht:
                (t = e._payload), (e = e._init);
                try {
                  return kt(e(t));
                } catch (e) {}
            }
          return null;
        }
        var xt = {};
        function St(e, t) {
          if (!(e = e.contextTypes)) return xt;
          var n,
            r = {};
          for (n in e) r[n] = t[n];
          return r;
        }
        var wt = null;
        function Ct(e, t) {
          if (e !== t) {
            (e.context._currentValue = e.parentValue), (e = e.parent);
            var n = t.parent;
            if (null === e) {
              if (null !== n) throw Error(o(401));
            } else {
              if (null === n) throw Error(o(401));
              Ct(e, n);
            }
            t.context._currentValue = t.value;
          }
        }
        function Et(e) {
          (e.context._currentValue = e.parentValue),
            null !== (e = e.parent) && Et(e);
        }
        function _t(e) {
          var t = e.parent;
          null !== t && _t(t), (e.context._currentValue = e.value);
        }
        function Tt(e, t) {
          if (
            ((e.context._currentValue = e.parentValue), null === (e = e.parent))
          )
            throw Error(o(402));
          e.depth === t.depth ? Ct(e, t) : Tt(e, t);
        }
        function Bt(e, t) {
          var n = t.parent;
          if (null === n) throw Error(o(402));
          e.depth === n.depth ? Ct(e, n) : Bt(e, n),
            (t.context._currentValue = t.value);
        }
        function Ft(e) {
          var t = wt;
          t !== e &&
            (null === t
              ? _t(e)
              : null === e
              ? Et(t)
              : t.depth === e.depth
              ? Ct(t, e)
              : t.depth > e.depth
              ? Tt(t, e)
              : Bt(t, e),
            (wt = e));
        }
        var Rt = {
          isMounted: function () {
            return !1;
          },
          enqueueSetState: function (e, t) {
            null !== (e = e._reactInternals).queue && e.queue.push(t);
          },
          enqueueReplaceState: function (e, t) {
            ((e = e._reactInternals).replace = !0), (e.queue = [t]);
          },
          enqueueForceUpdate: function () {},
        };
        function Mt(e, t, n, r) {
          var o = void 0 !== e.state ? e.state : null;
          (e.updater = Rt), (e.props = n), (e.state = o);
          var a = { queue: [], replace: !1 };
          e._reactInternals = a;
          var i = t.contextType;
          if (
            ((e.context =
              "object" == typeof i && null !== i ? i._currentValue : r),
            "function" == typeof (i = t.getDerivedStateFromProps) &&
              ((o = null == (i = i(n, o)) ? o : nt({}, o, i)), (e.state = o)),
            "function" != typeof t.getDerivedStateFromProps &&
              "function" != typeof e.getSnapshotBeforeUpdate &&
              ("function" == typeof e.UNSAFE_componentWillMount ||
                "function" == typeof e.componentWillMount))
          )
            if (
              ((t = e.state),
              "function" == typeof e.componentWillMount &&
                e.componentWillMount(),
              "function" == typeof e.UNSAFE_componentWillMount &&
                e.UNSAFE_componentWillMount(),
              t !== e.state && Rt.enqueueReplaceState(e, e.state, null),
              null !== a.queue && 0 < a.queue.length)
            )
              if (
                ((t = a.queue),
                (i = a.replace),
                (a.queue = null),
                (a.replace = !1),
                i && 1 === t.length)
              )
                e.state = t[0];
              else {
                for (
                  a = i ? t[0] : e.state, o = !0, i = i ? 1 : 0;
                  i < t.length;
                  i++
                ) {
                  var s = t[i];
                  null !=
                    (s = "function" == typeof s ? s.call(e, a, n, r) : s) &&
                    (o ? ((o = !1), (a = nt({}, a, s))) : nt(a, s));
                }
                e.state = a;
              }
            else a.queue = null;
        }
        var Ot = { id: 1, overflow: "" };
        function Pt(e, t, n) {
          var r = e.id;
          e = e.overflow;
          var o = 32 - jt(r) - 1;
          (r &= ~(1 << o)), (n += 1);
          var a = 32 - jt(t) + o;
          if (30 < a) {
            var i = o - (o % 5);
            return (
              (a = (r & ((1 << i) - 1)).toString(32)),
              (r >>= i),
              (o -= i),
              { id: (1 << (32 - jt(t) + o)) | (n << o) | r, overflow: a + e }
            );
          }
          return { id: (1 << a) | (n << o) | r, overflow: e };
        }
        var jt = Math.clz32
            ? Math.clz32
            : function (e) {
                return 0 == (e >>>= 0) ? 32 : (31 - ((It(e) / Lt) | 0)) | 0;
              },
          It = Math.log,
          Lt = Math.LN2,
          $t =
            "function" == typeof Object.is
              ? Object.is
              : function (e, t) {
                  return (
                    (e === t && (0 !== e || 1 / e == 1 / t)) ||
                    (e != e && t != t)
                  );
                },
          Nt = null,
          Dt = null,
          At = null,
          Vt = null,
          zt = !1,
          qt = !1,
          Ht = 0,
          Ut = null,
          Wt = 0;
        function Gt() {
          if (null === Nt) throw Error(o(321));
          return Nt;
        }
        function Zt() {
          if (0 < Wt) throw Error(o(312));
          return { memoizedState: null, queue: null, next: null };
        }
        function Xt() {
          return (
            null === Vt
              ? null === At
                ? ((zt = !1), (At = Vt = Zt()))
                : ((zt = !0), (Vt = At))
              : null === Vt.next
              ? ((zt = !1), (Vt = Vt.next = Zt()))
              : ((zt = !0), (Vt = Vt.next)),
            Vt
          );
        }
        function Kt() {
          (Dt = Nt = null), (qt = !1), (At = null), (Wt = 0), (Vt = Ut = null);
        }
        function Qt(e, t) {
          return "function" == typeof t ? t(e) : t;
        }
        function Yt(e, t, n) {
          if (((Nt = Gt()), (Vt = Xt()), zt)) {
            var r = Vt.queue;
            if (((t = r.dispatch), null !== Ut && void 0 !== (n = Ut.get(r)))) {
              Ut.delete(r), (r = Vt.memoizedState);
              do {
                (r = e(r, n.action)), (n = n.next);
              } while (null !== n);
              return (Vt.memoizedState = r), [r, t];
            }
            return [Vt.memoizedState, t];
          }
          return (
            (e =
              e === Qt
                ? "function" == typeof t
                  ? t()
                  : t
                : void 0 !== n
                ? n(t)
                : t),
            (Vt.memoizedState = e),
            (e = (e = Vt.queue = { last: null, dispatch: null }).dispatch =
              en.bind(null, Nt, e)),
            [Vt.memoizedState, e]
          );
        }
        function Jt(e, t) {
          if (
            ((Nt = Gt()), (t = void 0 === t ? null : t), null !== (Vt = Xt()))
          ) {
            var n = Vt.memoizedState;
            if (null !== n && null !== t) {
              var r = n[1];
              e: if (null === r) r = !1;
              else {
                for (var o = 0; o < r.length && o < t.length; o++)
                  if (!$t(t[o], r[o])) {
                    r = !1;
                    break e;
                  }
                r = !0;
              }
              if (r) return n[0];
            }
          }
          return (e = e()), (Vt.memoizedState = [e, t]), e;
        }
        function en(e, t, n) {
          if (25 <= Wt) throw Error(o(301));
          if (e === Nt)
            if (
              ((qt = !0),
              (e = { action: n, next: null }),
              null === Ut && (Ut = new Map()),
              void 0 === (n = Ut.get(t)))
            )
              Ut.set(t, e);
            else {
              for (t = n; null !== t.next; ) t = t.next;
              t.next = e;
            }
        }
        function tn() {
          throw Error(o(394));
        }
        function nn() {}
        var rn = {
            readContext: function (e) {
              return e._currentValue;
            },
            useContext: function (e) {
              return Gt(), e._currentValue;
            },
            useMemo: Jt,
            useReducer: Yt,
            useRef: function (e) {
              Nt = Gt();
              var t = (Vt = Xt()).memoizedState;
              return null === t
                ? ((e = { current: e }), (Vt.memoizedState = e))
                : t;
            },
            useState: function (e) {
              return Yt(Qt, e);
            },
            useInsertionEffect: nn,
            useLayoutEffect: function () {},
            useCallback: function (e, t) {
              return Jt(function () {
                return e;
              }, t);
            },
            useImperativeHandle: nn,
            useEffect: nn,
            useDebugValue: nn,
            useDeferredValue: function (e) {
              return Gt(), e;
            },
            useTransition: function () {
              return Gt(), [!1, tn];
            },
            useId: function () {
              var e = Dt.treeContext,
                t = e.overflow;
              e = ((e = e.id) & ~(1 << (32 - jt(e) - 1))).toString(32) + t;
              var n = on;
              if (null === n) throw Error(o(404));
              return (
                (t = Ht++),
                (e = ":" + n.idPrefix + "R" + e),
                0 < t && (e += "H" + t.toString(32)),
                e + ":"
              );
            },
            useMutableSource: function (e, t) {
              return Gt(), t(e._source);
            },
            useSyncExternalStore: function (e, t, n) {
              if (void 0 === n) throw Error(o(407));
              return n();
            },
          },
          on = null,
          an =
            r.__SECRET_INTERNALS_DO_NOT_USE_OR_YOU_WILL_BE_FIRED
              .ReactCurrentDispatcher;
        function sn(e) {
          return console.error(e), null;
        }
        function ln() {}
        function un(e, t, n, r, o, a, i, s) {
          e.allPendingTasks++,
            null === n ? e.pendingRootTasks++ : n.pendingTasks++;
          var l = {
            node: t,
            ping: function () {
              var t = e.pingedTasks;
              t.push(l), 1 === t.length && Cn(e);
            },
            blockedBoundary: n,
            blockedSegment: r,
            abortSet: o,
            legacyContext: a,
            context: i,
            treeContext: s,
          };
          return o.add(l), l;
        }
        function cn(e, t, n, r, o, a) {
          return {
            status: 0,
            id: -1,
            index: t,
            parentFlushed: !1,
            chunks: [],
            children: [],
            formatContext: r,
            boundary: n,
            lastPushedText: o,
            textEmbedded: a,
          };
        }
        function fn(e, t) {
          if (null != (e = e.onError(t)) && "string" != typeof e)
            throw Error(
              'onError returned something with a type other than "string". onError should return a string and may return null or undefined but must not return anything else. It received something of type "' +
                typeof e +
                '" instead'
            );
          return e;
        }
        function dn(e, t) {
          var n = e.onShellError;
          n(t),
            (n = e.onFatalError)(t),
            null !== e.destination
              ? ((e.status = 2), p(e.destination, t))
              : ((e.status = 1), (e.fatalError = t));
        }
        function pn(e, t, n, r, o) {
          for (Nt = {}, Dt = t, Ht = 0, e = n(r, o); qt; )
            (qt = !1), (Ht = 0), (Wt += 1), (Vt = null), (e = n(r, o));
          return Kt(), e;
        }
        function hn(e, t, n, r) {
          var a = n.render(),
            i = r.childContextTypes;
          if (null != i) {
            var s = t.legacyContext;
            if ("function" != typeof n.getChildContext) r = s;
            else {
              for (var l in (n = n.getChildContext()))
                if (!(l in i)) throw Error(o(108, kt(r) || "Unknown", l));
              r = nt({}, s, n);
            }
            (t.legacyContext = r), yn(e, t, a), (t.legacyContext = s);
          } else yn(e, t, a);
        }
        function gn(e, t) {
          if (e && e.defaultProps) {
            for (var n in ((t = nt({}, t)), (e = e.defaultProps)))
              void 0 === t[n] && (t[n] = e[n]);
            return t;
          }
          return t;
        }
        function mn(e, t, n, a, i) {
          if ("function" == typeof n)
            if (n.prototype && n.prototype.isReactComponent) {
              i = St(n, t.legacyContext);
              var s = n.contextType;
              Mt(
                (s = new n(
                  a,
                  "object" == typeof s && null !== s ? s._currentValue : i
                )),
                n,
                a,
                i
              ),
                hn(e, t, s, n);
            } else {
              i = pn(e, t, n, a, (s = St(n, t.legacyContext)));
              var l = 0 !== Ht;
              if (
                "object" == typeof i &&
                null !== i &&
                "function" == typeof i.render &&
                void 0 === i.$$typeof
              )
                Mt(i, n, a, s), hn(e, t, i, n);
              else if (l) {
                (a = t.treeContext), (t.treeContext = Pt(a, 1, 0));
                try {
                  yn(e, t, i);
                } finally {
                  t.treeContext = a;
                }
              } else yn(e, t, i);
            }
          else {
            if ("string" != typeof n) {
              switch (n) {
                case yt:
                case mt:
                case it:
                case st:
                case at:
                case dt:
                  return void yn(e, t, a.children);
                case gt:
                  throw Error(o(343));
                case ft:
                  e: {
                    (n = t.blockedBoundary),
                      (i = t.blockedSegment),
                      (s = a.fallback),
                      (a = a.children);
                    var u = {
                        id: null,
                        rootSegmentID: -1,
                        parentFlushed: !1,
                        pendingTasks: 0,
                        forceClientRender: !1,
                        completedSegments: [],
                        byteSize: 0,
                        fallbackAbortableTasks: (l = new Set()),
                        errorDigest: null,
                      },
                      c = cn(0, i.chunks.length, u, i.formatContext, !1, !1);
                    i.children.push(c), (i.lastPushedText = !1);
                    var d = cn(0, 0, null, i.formatContext, !1, !1);
                    (d.parentFlushed = !0),
                      (t.blockedBoundary = u),
                      (t.blockedSegment = d);
                    try {
                      if (
                        (vn(e, t, a),
                        d.lastPushedText && d.textEmbedded && d.chunks.push(N),
                        (d.status = 1),
                        Sn(u, d),
                        0 === u.pendingTasks)
                      )
                        break e;
                    } catch (t) {
                      (d.status = 4),
                        (u.forceClientRender = !0),
                        (u.errorDigest = fn(e, t));
                    } finally {
                      (t.blockedBoundary = n), (t.blockedSegment = i);
                    }
                    (t = un(
                      e,
                      s,
                      n,
                      c,
                      l,
                      t.legacyContext,
                      t.context,
                      t.treeContext
                    )),
                      e.pingedTasks.push(t);
                  }
                  return;
              }
              if ("object" == typeof n && null !== n)
                switch (n.$$typeof) {
                  case ct:
                    if (((a = pn(e, t, n.render, a, i)), 0 !== Ht)) {
                      (n = t.treeContext), (t.treeContext = Pt(n, 1, 0));
                      try {
                        yn(e, t, a);
                      } finally {
                        t.treeContext = n;
                      }
                    } else yn(e, t, a);
                    return;
                  case pt:
                    return void mn(e, t, (n = n.type), (a = gn(n, a)), i);
                  case lt:
                    if (
                      ((i = a.children),
                      (n = n._context),
                      (a = a.value),
                      (s = n._currentValue),
                      (n._currentValue = a),
                      (wt = a =
                        {
                          parent: (l = wt),
                          depth: null === l ? 0 : l.depth + 1,
                          context: n,
                          parentValue: s,
                          value: a,
                        }),
                      (t.context = a),
                      yn(e, t, i),
                      null === (e = wt))
                    )
                      throw Error(o(403));
                    return (
                      (a = e.parentValue),
                      (e.context._currentValue =
                        a === bt ? e.context._defaultValue : a),
                      (e = wt = e.parent),
                      void (t.context = e)
                    );
                  case ut:
                    return void yn(
                      e,
                      t,
                      (a = (a = a.children)(n._currentValue))
                    );
                  case ht:
                    return void mn(
                      e,
                      t,
                      (n = (i = n._init)(n._payload)),
                      (a = gn(n, a)),
                      void 0
                    );
                }
              throw Error(o(130, null == n ? n : typeof n, ""));
            }
            switch (
              ((s = (function (e, t, n, a, i) {
                switch (t) {
                  case "select":
                    e.push(oe("select"));
                    var s = null,
                      l = null;
                    for (p in n)
                      if (h.call(n, p)) {
                        var u = n[p];
                        if (null != u)
                          switch (p) {
                            case "children":
                              s = u;
                              break;
                            case "dangerouslySetInnerHTML":
                              l = u;
                              break;
                            case "defaultValue":
                            case "value":
                              break;
                            default:
                              X(e, a, p, u);
                          }
                      }
                    return e.push(K), Y(e, l, s), s;
                  case "option":
                    (l = i.selectedValue), e.push(oe("option"));
                    var c = (u = null),
                      d = null,
                      p = null;
                    for (s in n)
                      if (h.call(n, s)) {
                        var g = n[s];
                        if (null != g)
                          switch (s) {
                            case "children":
                              u = g;
                              break;
                            case "selected":
                              d = g;
                              break;
                            case "dangerouslySetInnerHTML":
                              p = g;
                              break;
                            case "value":
                              c = g;
                            default:
                              X(e, a, s, g);
                          }
                      }
                    if (null != l)
                      if (
                        ((n =
                          null !== c
                            ? "" + c
                            : (function (e) {
                                var t = "";
                                return (
                                  r.Children.forEach(e, function (e) {
                                    null != e && (t += e);
                                  }),
                                  t
                                );
                              })(u)),
                        F(l))
                      ) {
                        for (a = 0; a < l.length; a++)
                          if ("" + l[a] === n) {
                            e.push(J);
                            break;
                          }
                      } else "" + l === n && e.push(J);
                    else d && e.push(J);
                    return e.push(K), Y(e, p, u), u;
                  case "textarea":
                    for (u in (e.push(oe("textarea")), (p = l = s = null), n))
                      if (h.call(n, u) && null != (c = n[u]))
                        switch (u) {
                          case "children":
                            p = c;
                            break;
                          case "value":
                            s = c;
                            break;
                          case "defaultValue":
                            l = c;
                            break;
                          case "dangerouslySetInnerHTML":
                            throw Error(o(91));
                          default:
                            X(e, a, u, c);
                        }
                    if (
                      (null === s && null !== l && (s = l),
                      e.push(K),
                      null != p)
                    ) {
                      if (null != s) throw Error(o(92));
                      if (F(p) && 1 < p.length) throw Error(o(93));
                      s = "" + p;
                    }
                    return (
                      "string" == typeof s && "\n" === s[0] && e.push(te),
                      null !== s && e.push(f(_("" + s))),
                      null
                    );
                  case "input":
                    for (l in (e.push(oe("input")), (c = p = u = s = null), n))
                      if (h.call(n, l) && null != (d = n[l]))
                        switch (l) {
                          case "children":
                          case "dangerouslySetInnerHTML":
                            throw Error(o(399, "input"));
                          case "defaultChecked":
                            c = d;
                            break;
                          case "defaultValue":
                            u = d;
                            break;
                          case "checked":
                            p = d;
                            break;
                          case "value":
                            s = d;
                            break;
                          default:
                            X(e, a, l, d);
                        }
                    return (
                      null !== p
                        ? X(e, a, "checked", p)
                        : null !== c && X(e, a, "checked", c),
                      null !== s
                        ? X(e, a, "value", s)
                        : null !== u && X(e, a, "value", u),
                      e.push(Q),
                      null
                    );
                  case "menuitem":
                    for (var m in (e.push(oe("menuitem")), n))
                      if (h.call(n, m) && null != (s = n[m]))
                        switch (m) {
                          case "children":
                          case "dangerouslySetInnerHTML":
                            throw Error(o(400));
                          default:
                            X(e, a, m, s);
                        }
                    return e.push(K), null;
                  case "title":
                    for (g in (e.push(oe("title")), (s = null), n))
                      if (h.call(n, g) && null != (l = n[g]))
                        switch (g) {
                          case "children":
                            s = l;
                            break;
                          case "dangerouslySetInnerHTML":
                            throw Error(o(434));
                          default:
                            X(e, a, g, l);
                        }
                    return e.push(K), s;
                  case "listing":
                  case "pre":
                    for (c in (e.push(oe(t)), (l = s = null), n))
                      if (h.call(n, c) && null != (u = n[c]))
                        switch (c) {
                          case "children":
                            s = u;
                            break;
                          case "dangerouslySetInnerHTML":
                            l = u;
                            break;
                          default:
                            X(e, a, c, u);
                        }
                    if ((e.push(K), null != l)) {
                      if (null != s) throw Error(o(60));
                      if ("object" != typeof l || !("__html" in l))
                        throw Error(o(61));
                      null != (n = l.__html) &&
                        ("string" == typeof n && 0 < n.length && "\n" === n[0]
                          ? e.push(te, f(n))
                          : e.push(f("" + n)));
                    }
                    return (
                      "string" == typeof s && "\n" === s[0] && e.push(te), s
                    );
                  case "area":
                  case "base":
                  case "br":
                  case "col":
                  case "embed":
                  case "hr":
                  case "img":
                  case "keygen":
                  case "link":
                  case "meta":
                  case "param":
                  case "source":
                  case "track":
                  case "wbr":
                    for (var y in (e.push(oe(t)), n))
                      if (h.call(n, y) && null != (s = n[y]))
                        switch (y) {
                          case "children":
                          case "dangerouslySetInnerHTML":
                            throw Error(o(399, t));
                          default:
                            X(e, a, y, s);
                        }
                    return e.push(Q), null;
                  case "annotation-xml":
                  case "color-profile":
                  case "font-face":
                  case "font-face-src":
                  case "font-face-uri":
                  case "font-face-format":
                  case "font-face-name":
                  case "missing-glyph":
                    return ee(e, n, t, a);
                  case "html":
                    return 0 === i.insertionMode && e.push(ae), ee(e, n, t, a);
                  default:
                    if (-1 === t.indexOf("-") && "string" != typeof n.is)
                      return ee(e, n, t, a);
                    for (d in (e.push(oe(t)), (l = s = null), n))
                      if (h.call(n, d) && null != (u = n[d]))
                        switch (d) {
                          case "children":
                            s = u;
                            break;
                          case "dangerouslySetInnerHTML":
                            l = u;
                            break;
                          case "style":
                            H(e, a, u);
                            break;
                          case "suppressContentEditableWarning":
                          case "suppressHydrationWarning":
                            break;
                          default:
                            b(d) &&
                              "function" != typeof u &&
                              "symbol" != typeof u &&
                              e.push(U, f(d), W, f(_(u)), G);
                        }
                    return e.push(K), Y(e, l, s), s;
                }
              })(
                (i = t.blockedSegment).chunks,
                n,
                a,
                e.responseState,
                i.formatContext
              )),
              (i.lastPushedText = !1),
              (l = i.formatContext),
              (i.formatContext = (function (e, t, n) {
                switch (t) {
                  case "select":
                    return $(1, null != n.value ? n.value : n.defaultValue);
                  case "svg":
                    return $(2, null);
                  case "math":
                    return $(3, null);
                  case "foreignObject":
                    return $(1, null);
                  case "table":
                    return $(4, null);
                  case "thead":
                  case "tbody":
                  case "tfoot":
                    return $(5, null);
                  case "colgroup":
                    return $(7, null);
                  case "tr":
                    return $(6, null);
                }
                return 4 <= e.insertionMode || 0 === e.insertionMode
                  ? $(1, null)
                  : e;
              })(l, n, a)),
              vn(e, t, s),
              (i.formatContext = l),
              n)
            ) {
              case "area":
              case "base":
              case "br":
              case "col":
              case "embed":
              case "hr":
              case "img":
              case "input":
              case "keygen":
              case "link":
              case "meta":
              case "param":
              case "source":
              case "track":
              case "wbr":
                break;
              default:
                i.chunks.push(ie, f(n), se);
            }
            i.lastPushedText = !1;
          }
        }
        function yn(e, t, n) {
          if (((t.node = n), "object" == typeof n && null !== n)) {
            switch (n.$$typeof) {
              case rt:
                return void mn(e, t, n.type, n.props, n.ref);
              case ot:
                throw Error(o(257));
              case ht:
                var r = n._init;
                return void yn(e, t, (n = r(n._payload)));
            }
            if (F(n)) return void bn(e, t, n);
            if (
              (r =
                null === n || "object" != typeof n
                  ? null
                  : "function" == typeof (r = (vt && n[vt]) || n["@@iterator"])
                  ? r
                  : null) &&
              (r = r.call(n))
            ) {
              if (!(n = r.next()).done) {
                var a = [];
                do {
                  a.push(n.value), (n = r.next());
                } while (!n.done);
                bn(e, t, a);
              }
              return;
            }
            throw (
              ((e = Object.prototype.toString.call(n)),
              Error(
                o(
                  31,
                  "[object Object]" === e
                    ? "object with keys {" + Object.keys(n).join(", ") + "}"
                    : e
                )
              ))
            );
          }
          "string" == typeof n
            ? ((r = t.blockedSegment).lastPushedText = D(
                t.blockedSegment.chunks,
                n,
                e.responseState,
                r.lastPushedText
              ))
            : "number" == typeof n &&
              ((r = t.blockedSegment).lastPushedText = D(
                t.blockedSegment.chunks,
                "" + n,
                e.responseState,
                r.lastPushedText
              ));
        }
        function bn(e, t, n) {
          for (var r = n.length, o = 0; o < r; o++) {
            var a = t.treeContext;
            t.treeContext = Pt(a, r, o);
            try {
              vn(e, t, n[o]);
            } finally {
              t.treeContext = a;
            }
          }
        }
        function vn(e, t, n) {
          var r = t.blockedSegment.formatContext,
            o = t.legacyContext,
            a = t.context;
          try {
            return yn(e, t, n);
          } catch (l) {
            if (
              (Kt(),
              "object" != typeof l || null === l || "function" != typeof l.then)
            )
              throw (
                ((t.blockedSegment.formatContext = r),
                (t.legacyContext = o),
                (t.context = a),
                Ft(a),
                l)
              );
            n = l;
            var i = t.blockedSegment,
              s = cn(
                0,
                i.chunks.length,
                null,
                i.formatContext,
                i.lastPushedText,
                !0
              );
            i.children.push(s),
              (i.lastPushedText = !1),
              (e = un(
                e,
                t.node,
                t.blockedBoundary,
                s,
                t.abortSet,
                t.legacyContext,
                t.context,
                t.treeContext
              ).ping),
              n.then(e, e),
              (t.blockedSegment.formatContext = r),
              (t.legacyContext = o),
              (t.context = a),
              Ft(a);
          }
        }
        function kn(e) {
          var t = e.blockedBoundary;
          ((e = e.blockedSegment).status = 3), wn(this, t, e);
        }
        function xn(e, t, n) {
          var r = e.blockedBoundary;
          (e.blockedSegment.status = 3),
            null === r
              ? (t.allPendingTasks--,
                2 !== t.status &&
                  ((t.status = 2),
                  null !== t.destination && t.destination.close()))
              : (r.pendingTasks--,
                r.forceClientRender ||
                  ((r.forceClientRender = !0),
                  (e = void 0 === n ? Error(o(432)) : n),
                  (r.errorDigest = t.onError(e)),
                  r.parentFlushed && t.clientRenderedBoundaries.push(r)),
                r.fallbackAbortableTasks.forEach(function (e) {
                  return xn(e, t, n);
                }),
                r.fallbackAbortableTasks.clear(),
                t.allPendingTasks--,
                0 === t.allPendingTasks && (r = t.onAllReady)());
        }
        function Sn(e, t) {
          if (
            0 === t.chunks.length &&
            1 === t.children.length &&
            null === t.children[0].boundary
          ) {
            var n = t.children[0];
            (n.id = t.id), (n.parentFlushed = !0), 1 === n.status && Sn(e, n);
          } else e.completedSegments.push(t);
        }
        function wn(e, t, n) {
          if (null === t) {
            if (n.parentFlushed) {
              if (null !== e.completedRootSegment) throw Error(o(389));
              e.completedRootSegment = n;
            }
            e.pendingRootTasks--,
              0 === e.pendingRootTasks &&
                ((e.onShellError = ln), (t = e.onShellReady)());
          } else
            t.pendingTasks--,
              t.forceClientRender ||
                (0 === t.pendingTasks
                  ? (n.parentFlushed && 1 === n.status && Sn(t, n),
                    t.parentFlushed && e.completedBoundaries.push(t),
                    t.fallbackAbortableTasks.forEach(kn, e),
                    t.fallbackAbortableTasks.clear())
                  : n.parentFlushed &&
                    1 === n.status &&
                    (Sn(t, n),
                    1 === t.completedSegments.length &&
                      t.parentFlushed &&
                      e.partialBoundaries.push(t)));
          e.allPendingTasks--, 0 === e.allPendingTasks && (e = e.onAllReady)();
        }
        function Cn(e) {
          if (2 !== e.status) {
            var t = wt,
              n = an.current;
            an.current = rn;
            var r = on;
            on = e.responseState;
            try {
              var o,
                a = e.pingedTasks;
              for (o = 0; o < a.length; o++) {
                var i = a[o],
                  s = e,
                  l = i.blockedSegment;
                if (0 === l.status) {
                  Ft(i.context);
                  try {
                    yn(s, i, i.node),
                      l.lastPushedText && l.textEmbedded && l.chunks.push(N),
                      i.abortSet.delete(i),
                      (l.status = 1),
                      wn(s, i.blockedBoundary, l);
                  } catch (e) {
                    if (
                      (Kt(),
                      "object" == typeof e &&
                        null !== e &&
                        "function" == typeof e.then)
                    ) {
                      var u = i.ping;
                      e.then(u, u);
                    } else {
                      i.abortSet.delete(i), (l.status = 4);
                      var c = i.blockedBoundary,
                        f = e,
                        d = fn(s, f);
                      null === c
                        ? dn(s, f)
                        : (c.pendingTasks--,
                          c.forceClientRender ||
                            ((c.forceClientRender = !0),
                            (c.errorDigest = d),
                            c.parentFlushed &&
                              s.clientRenderedBoundaries.push(c))),
                        s.allPendingTasks--,
                        0 === s.allPendingTasks && (0, s.onAllReady)();
                    }
                  }
                }
              }
              a.splice(0, o), null !== e.destination && Rn(e, e.destination);
            } catch (t) {
              fn(e, t), dn(e, t);
            } finally {
              (on = r), (an.current = n), n === rn && Ft(t);
            }
          }
        }
        function En(e, t, n) {
          switch (((n.parentFlushed = !0), n.status)) {
            case 0:
              var r = (n.id = e.nextSegmentId++);
              return (
                (n.lastPushedText = !1),
                (n.textEmbedded = !1),
                (e = e.responseState),
                s(t, le),
                s(t, e.placeholderPrefix),
                s(t, (e = f(r.toString(16)))),
                l(t, ue)
              );
            case 1:
              n.status = 2;
              var a = !0;
              r = n.chunks;
              var i = 0;
              n = n.children;
              for (var u = 0; u < n.length; u++) {
                for (a = n[u]; i < a.index; i++) s(t, r[i]);
                a = _n(e, t, a);
              }
              for (; i < r.length - 1; i++) s(t, r[i]);
              return i < r.length && (a = l(t, r[i])), a;
            default:
              throw Error(o(390));
          }
        }
        function _n(e, t, n) {
          var r = n.boundary;
          if (null === r) return En(e, t, n);
          if (((r.parentFlushed = !0), r.forceClientRender))
            (r = r.errorDigest),
              l(t, pe),
              s(t, ge),
              r && (s(t, ye), s(t, f(_(r))), s(t, me)),
              l(t, be),
              En(e, t, n);
          else if (0 < r.pendingTasks) {
            (r.rootSegmentID = e.nextSegmentId++),
              0 < r.completedSegments.length && e.partialBoundaries.push(r);
            var a = e.responseState,
              i = a.nextSuspenseID++;
            (a = d(a.boundaryPrefix + i.toString(16))),
              (r = r.id = a),
              ve(t, e.responseState, r),
              En(e, t, n);
          } else if (r.byteSize > e.progressiveChunkSize)
            (r.rootSegmentID = e.nextSegmentId++),
              e.completedBoundaries.push(r),
              ve(t, e.responseState, r.id),
              En(e, t, n);
          else {
            if ((l(t, ce), 1 !== (n = r.completedSegments).length))
              throw Error(o(391));
            _n(e, t, n[0]);
          }
          return l(t, he);
        }
        function Tn(e, t, n) {
          return (
            (function (e, t, n, r) {
              switch (n.insertionMode) {
                case 0:
                case 1:
                  return (
                    s(e, ke),
                    s(e, t.segmentPrefix),
                    s(e, f(r.toString(16))),
                    l(e, xe)
                  );
                case 2:
                  return (
                    s(e, we),
                    s(e, t.segmentPrefix),
                    s(e, f(r.toString(16))),
                    l(e, Ce)
                  );
                case 3:
                  return (
                    s(e, _e),
                    s(e, t.segmentPrefix),
                    s(e, f(r.toString(16))),
                    l(e, Te)
                  );
                case 4:
                  return (
                    s(e, Fe),
                    s(e, t.segmentPrefix),
                    s(e, f(r.toString(16))),
                    l(e, Re)
                  );
                case 5:
                  return (
                    s(e, Oe),
                    s(e, t.segmentPrefix),
                    s(e, f(r.toString(16))),
                    l(e, Pe)
                  );
                case 6:
                  return (
                    s(e, Ie),
                    s(e, t.segmentPrefix),
                    s(e, f(r.toString(16))),
                    l(e, Le)
                  );
                case 7:
                  return (
                    s(e, Ne),
                    s(e, t.segmentPrefix),
                    s(e, f(r.toString(16))),
                    l(e, De)
                  );
                default:
                  throw Error(o(397));
              }
            })(t, e.responseState, n.formatContext, n.id),
            _n(e, t, n),
            (function (e, t) {
              switch (t.insertionMode) {
                case 0:
                case 1:
                  return l(e, Se);
                case 2:
                  return l(e, Ee);
                case 3:
                  return l(e, Be);
                case 4:
                  return l(e, Me);
                case 5:
                  return l(e, je);
                case 6:
                  return l(e, $e);
                case 7:
                  return l(e, Ae);
                default:
                  throw Error(o(397));
              }
            })(t, n.formatContext)
          );
        }
        function Bn(e, t, n) {
          for (var r = n.completedSegments, a = 0; a < r.length; a++)
            Fn(e, t, n, r[a]);
          if (
            ((r.length = 0),
            (e = e.responseState),
            (r = n.id),
            (n = n.rootSegmentID),
            s(t, e.startInlineScript),
            e.sentCompleteBoundaryFunction
              ? s(t, We)
              : ((e.sentCompleteBoundaryFunction = !0), s(t, Ue)),
            null === r)
          )
            throw Error(o(395));
          return (
            (n = f(n.toString(16))),
            s(t, r),
            s(t, Ge),
            s(t, e.segmentPrefix),
            s(t, n),
            l(t, Ze)
          );
        }
        function Fn(e, t, n, r) {
          if (2 === r.status) return !0;
          var a = r.id;
          if (-1 === a) {
            if (-1 === (r.id = n.rootSegmentID)) throw Error(o(392));
            return Tn(e, t, r);
          }
          return (
            Tn(e, t, r),
            s(t, (e = e.responseState).startInlineScript),
            e.sentCompleteSegmentFunction
              ? s(t, ze)
              : ((e.sentCompleteSegmentFunction = !0), s(t, Ve)),
            s(t, e.segmentPrefix),
            s(t, (a = f(a.toString(16)))),
            s(t, qe),
            s(t, e.placeholderPrefix),
            s(t, a),
            l(t, He)
          );
        }
        function Rn(e, t) {
          (a = new Uint8Array(512)), (i = 0);
          try {
            var n = e.completedRootSegment;
            if (null !== n && 0 === e.pendingRootTasks) {
              _n(e, t, n), (e.completedRootSegment = null);
              var r = e.responseState.bootstrapChunks;
              for (n = 0; n < r.length - 1; n++) s(t, r[n]);
              n < r.length && l(t, r[n]);
            }
            var c,
              d = e.clientRenderedBoundaries;
            for (c = 0; c < d.length; c++) {
              var p = d[c];
              r = t;
              var h = e.responseState,
                g = p.id,
                m = p.errorDigest,
                y = p.errorMessage,
                b = p.errorComponentStack;
              if (
                (s(r, h.startInlineScript),
                h.sentClientRenderFunction
                  ? s(r, Ke)
                  : ((h.sentClientRenderFunction = !0), s(r, Xe)),
                null === g)
              )
                throw Error(o(395));
              if (
                (s(r, g),
                s(r, Qe),
                (m || y || b) && (s(r, Je), s(r, f(tt(m || "")))),
                (y || b) && (s(r, Je), s(r, f(tt(y || "")))),
                b && (s(r, Je), s(r, f(tt(b)))),
                !l(r, Ye))
              )
                return (e.destination = null), c++, void d.splice(0, c);
            }
            d.splice(0, c);
            var v = e.completedBoundaries;
            for (c = 0; c < v.length; c++)
              if (!Bn(e, t, v[c]))
                return (e.destination = null), c++, void v.splice(0, c);
            v.splice(0, c), u(t), (a = new Uint8Array(512)), (i = 0);
            var k = e.partialBoundaries;
            for (c = 0; c < k.length; c++) {
              var x = k[c];
              e: {
                (d = e), (p = t);
                var S = x.completedSegments;
                for (h = 0; h < S.length; h++)
                  if (!Fn(d, p, x, S[h])) {
                    h++, S.splice(0, h);
                    var w = !1;
                    break e;
                  }
                S.splice(0, h), (w = !0);
              }
              if (!w) return (e.destination = null), c++, void k.splice(0, c);
            }
            k.splice(0, c);
            var C = e.completedBoundaries;
            for (c = 0; c < C.length; c++)
              if (!Bn(e, t, C[c]))
                return (e.destination = null), c++, void C.splice(0, c);
            C.splice(0, c);
          } finally {
            u(t),
              0 === e.allPendingTasks &&
                0 === e.pingedTasks.length &&
                0 === e.clientRenderedBoundaries.length &&
                0 === e.completedBoundaries.length &&
                t.close();
          }
        }
        function Mn(e, t) {
          try {
            var n = e.abortableTasks;
            n.forEach(function (n) {
              return xn(n, e, t);
            }),
              n.clear(),
              null !== e.destination && Rn(e, e.destination);
          } catch (t) {
            fn(e, t), dn(e, t);
          }
        }
        (t.renderToReadableStream = function (e, t) {
          return new Promise(function (n, r) {
            var o,
              a,
              i = new Promise(function (e, t) {
                (a = e), (o = t);
              }),
              s = (function (e, t, n, r, o, a, i, s, l) {
                var u = [],
                  c = new Set();
                return (
                  ((n = cn(
                    (t = {
                      destination: null,
                      responseState: t,
                      progressiveChunkSize: void 0 === r ? 12800 : r,
                      status: 0,
                      fatalError: null,
                      nextSegmentId: 0,
                      allPendingTasks: 0,
                      pendingRootTasks: 0,
                      completedRootSegment: null,
                      abortableTasks: c,
                      pingedTasks: u,
                      clientRenderedBoundaries: [],
                      completedBoundaries: [],
                      partialBoundaries: [],
                      onError: void 0 === o ? sn : o,
                      onAllReady: void 0 === a ? ln : a,
                      onShellReady: void 0 === i ? ln : i,
                      onShellError: void 0 === s ? ln : s,
                      onFatalError: void 0 === l ? ln : l,
                    }),
                    0,
                    null,
                    n,
                    !1,
                    !1
                  )).parentFlushed = !0),
                  (e = un(t, e, null, n, c, xt, null, Ot)),
                  u.push(e),
                  t
                );
              })(
                e,
                (function (e, t, n, r, o) {
                  (e = void 0 === e ? "" : e),
                    (t = void 0 === t ? R : d('<script nonce="' + _(t) + '">'));
                  var a = [];
                  if (
                    (void 0 !== n && a.push(t, f(("" + n).replace(I, L)), M),
                    void 0 !== r)
                  )
                    for (n = 0; n < r.length; n++) a.push(O, f(_(r[n])), j);
                  if (void 0 !== o)
                    for (r = 0; r < o.length; r++) a.push(P, f(_(o[r])), j);
                  return {
                    bootstrapChunks: a,
                    startInlineScript: t,
                    placeholderPrefix: d(e + "P:"),
                    segmentPrefix: d(e + "S:"),
                    boundaryPrefix: e + "B:",
                    idPrefix: e,
                    nextSuspenseID: 0,
                    sentCompleteSegmentFunction: !1,
                    sentCompleteBoundaryFunction: !1,
                    sentClientRenderFunction: !1,
                  };
                })(
                  t ? t.identifierPrefix : void 0,
                  t ? t.nonce : void 0,
                  t ? t.bootstrapScriptContent : void 0,
                  t ? t.bootstrapScripts : void 0,
                  t ? t.bootstrapModules : void 0
                ),
                (function (e) {
                  return $(
                    "http://www.w3.org/2000/svg" === e
                      ? 2
                      : "http://www.w3.org/1998/Math/MathML" === e
                      ? 3
                      : 0,
                    null
                  );
                })(t ? t.namespaceURI : void 0),
                t ? t.progressiveChunkSize : void 0,
                t ? t.onError : void 0,
                a,
                function () {
                  var e = new ReadableStream(
                    {
                      type: "bytes",
                      pull: function (e) {
                        if (1 === s.status) (s.status = 2), p(e, s.fatalError);
                        else if (2 !== s.status && null === s.destination) {
                          s.destination = e;
                          try {
                            Rn(s, e);
                          } catch (e) {
                            fn(s, e), dn(s, e);
                          }
                        }
                      },
                      cancel: function () {
                        Mn(s);
                      },
                    },
                    { highWaterMark: 0 }
                  );
                  (e.allReady = i), n(e);
                },
                function (e) {
                  i.catch(function () {}), r(e);
                },
                o
              );
            if (t && t.signal) {
              var l = t.signal,
                u = function () {
                  Mn(s, l.reason), l.removeEventListener("abort", u);
                };
              l.addEventListener("abort", u);
            }
            Cn(s);
          });
        }),
          (t.version = "18.2.0");
      },
      762: (e, t, n) => {
        var r, o;
        (r = n(774)),
          (o = n(698)),
          r.version,
          (t.Dq = r.renderToString),
          r.renderToStaticMarkup,
          r.renderToNodeStream,
          r.renderToStaticNodeStream,
          o.renderToReadableStream;
      },
      251: (e, t, n) => {
        var r = n(294),
          o = Symbol.for("react.element"),
          a = (Symbol.for("react.fragment"), Object.prototype.hasOwnProperty),
          i =
            r.__SECRET_INTERNALS_DO_NOT_USE_OR_YOU_WILL_BE_FIRED
              .ReactCurrentOwner,
          s = { key: !0, ref: !0, __self: !0, __source: !0 };
        function l(e, t, n) {
          var r,
            l = {},
            u = null,
            c = null;
          for (r in (void 0 !== n && (u = "" + n),
          void 0 !== t.key && (u = "" + t.key),
          void 0 !== t.ref && (c = t.ref),
          t))
            a.call(t, r) && !s.hasOwnProperty(r) && (l[r] = t[r]);
          if (e && e.defaultProps)
            for (r in (t = e.defaultProps)) void 0 === l[r] && (l[r] = t[r]);
          return {
            $$typeof: o,
            type: e,
            key: u,
            ref: c,
            props: l,
            _owner: i.current,
          };
        }
        (t.jsx = l), (t.jsxs = l);
      },
      408: (e, t) => {
        var n = Symbol.for("react.element"),
          r = Symbol.for("react.portal"),
          o = Symbol.for("react.fragment"),
          a = Symbol.for("react.strict_mode"),
          i = Symbol.for("react.profiler"),
          s = Symbol.for("react.provider"),
          l = Symbol.for("react.context"),
          u = Symbol.for("react.forward_ref"),
          c = Symbol.for("react.suspense"),
          f = Symbol.for("react.memo"),
          d = Symbol.for("react.lazy"),
          p = Symbol.iterator,
          h = {
            isMounted: function () {
              return !1;
            },
            enqueueForceUpdate: function () {},
            enqueueReplaceState: function () {},
            enqueueSetState: function () {},
          },
          g = Object.assign,
          m = {};
        function y(e, t, n) {
          (this.props = e),
            (this.context = t),
            (this.refs = m),
            (this.updater = n || h);
        }
        function b() {}
        function v(e, t, n) {
          (this.props = e),
            (this.context = t),
            (this.refs = m),
            (this.updater = n || h);
        }
        (y.prototype.isReactComponent = {}),
          (y.prototype.setState = function (e, t) {
            if ("object" != typeof e && "function" != typeof e && null != e)
              throw Error(
                "setState(...): takes an object of state variables to update or a function which returns an object of state variables."
              );
            this.updater.enqueueSetState(this, e, t, "setState");
          }),
          (y.prototype.forceUpdate = function (e) {
            this.updater.enqueueForceUpdate(this, e, "forceUpdate");
          }),
          (b.prototype = y.prototype);
        var k = (v.prototype = new b());
        (k.constructor = v), g(k, y.prototype), (k.isPureReactComponent = !0);
        var x = Array.isArray,
          S = Object.prototype.hasOwnProperty,
          w = { current: null },
          C = { key: !0, ref: !0, __self: !0, __source: !0 };
        function E(e, t, r) {
          var o,
            a = {},
            i = null,
            s = null;
          if (null != t)
            for (o in (void 0 !== t.ref && (s = t.ref),
            void 0 !== t.key && (i = "" + t.key),
            t))
              S.call(t, o) && !C.hasOwnProperty(o) && (a[o] = t[o]);
          var l = arguments.length - 2;
          if (1 === l) a.children = r;
          else if (1 < l) {
            for (var u = Array(l), c = 0; c < l; c++) u[c] = arguments[c + 2];
            a.children = u;
          }
          if (e && e.defaultProps)
            for (o in (l = e.defaultProps)) void 0 === a[o] && (a[o] = l[o]);
          return {
            $$typeof: n,
            type: e,
            key: i,
            ref: s,
            props: a,
            _owner: w.current,
          };
        }
        function _(e) {
          return "object" == typeof e && null !== e && e.$$typeof === n;
        }
        var T = /\/+/g;
        function B(e, t) {
          return "object" == typeof e && null !== e && null != e.key
            ? (function (e) {
                var t = { "=": "=0", ":": "=2" };
                return (
                  "$" +
                  e.replace(/[=:]/g, function (e) {
                    return t[e];
                  })
                );
              })("" + e.key)
            : t.toString(36);
        }
        function F(e, t, o, a, i) {
          var s = typeof e;
          ("undefined" !== s && "boolean" !== s) || (e = null);
          var l = !1;
          if (null === e) l = !0;
          else
            switch (s) {
              case "string":
              case "number":
                l = !0;
                break;
              case "object":
                switch (e.$$typeof) {
                  case n:
                  case r:
                    l = !0;
                }
            }
          if (l)
            return (
              (i = i((l = e))),
              (e = "" === a ? "." + B(l, 0) : a),
              x(i)
                ? ((o = ""),
                  null != e && (o = e.replace(T, "$&/") + "/"),
                  F(i, t, o, "", function (e) {
                    return e;
                  }))
                : null != i &&
                  (_(i) &&
                    (i = (function (e, t) {
                      return {
                        $$typeof: n,
                        type: e.type,
                        key: t,
                        ref: e.ref,
                        props: e.props,
                        _owner: e._owner,
                      };
                    })(
                      i,
                      o +
                        (!i.key || (l && l.key === i.key)
                          ? ""
                          : ("" + i.key).replace(T, "$&/") + "/") +
                        e
                    )),
                  t.push(i)),
              1
            );
          if (((l = 0), (a = "" === a ? "." : a + ":"), x(e)))
            for (var u = 0; u < e.length; u++) {
              var c = a + B((s = e[u]), u);
              l += F(s, t, o, c, i);
            }
          else if (
            ((c = (function (e) {
              return null === e || "object" != typeof e
                ? null
                : "function" == typeof (e = (p && e[p]) || e["@@iterator"])
                ? e
                : null;
            })(e)),
            "function" == typeof c)
          )
            for (e = c.call(e), u = 0; !(s = e.next()).done; )
              l += F((s = s.value), t, o, (c = a + B(s, u++)), i);
          else if ("object" === s)
            throw (
              ((t = String(e)),
              Error(
                "Objects are not valid as a React child (found: " +
                  ("[object Object]" === t
                    ? "object with keys {" + Object.keys(e).join(", ") + "}"
                    : t) +
                  "). If you meant to render a collection of children, use an array instead."
              ))
            );
          return l;
        }
        function R(e, t, n) {
          if (null == e) return e;
          var r = [],
            o = 0;
          return (
            F(e, r, "", "", function (e) {
              return t.call(n, e, o++);
            }),
            r
          );
        }
        function M(e) {
          if (-1 === e._status) {
            var t = e._result;
            (t = t()).then(
              function (t) {
                (0 !== e._status && -1 !== e._status) ||
                  ((e._status = 1), (e._result = t));
              },
              function (t) {
                (0 !== e._status && -1 !== e._status) ||
                  ((e._status = 2), (e._result = t));
              }
            ),
              -1 === e._status && ((e._status = 0), (e._result = t));
          }
          if (1 === e._status) return e._result.default;
          throw e._result;
        }
        var O = { current: null },
          P = { transition: null },
          j = {
            ReactCurrentDispatcher: O,
            ReactCurrentBatchConfig: P,
            ReactCurrentOwner: w,
          };
        (t.Children = {
          map: R,
          forEach: function (e, t, n) {
            R(
              e,
              function () {
                t.apply(this, arguments);
              },
              n
            );
          },
          count: function (e) {
            var t = 0;
            return (
              R(e, function () {
                t++;
              }),
              t
            );
          },
          toArray: function (e) {
            return (
              R(e, function (e) {
                return e;
              }) || []
            );
          },
          only: function (e) {
            if (!_(e))
              throw Error(
                "React.Children.only expected to receive a single React element child."
              );
            return e;
          },
        }),
          (t.Component = y),
          (t.Fragment = o),
          (t.Profiler = i),
          (t.PureComponent = v),
          (t.StrictMode = a),
          (t.Suspense = c),
          (t.__SECRET_INTERNALS_DO_NOT_USE_OR_YOU_WILL_BE_FIRED = j),
          (t.cloneElement = function (e, t, r) {
            if (null == e)
              throw Error(
                "React.cloneElement(...): The argument must be a React element, but you passed " +
                  e +
                  "."
              );
            var o = g({}, e.props),
              a = e.key,
              i = e.ref,
              s = e._owner;
            if (null != t) {
              if (
                (void 0 !== t.ref && ((i = t.ref), (s = w.current)),
                void 0 !== t.key && (a = "" + t.key),
                e.type && e.type.defaultProps)
              )
                var l = e.type.defaultProps;
              for (u in t)
                S.call(t, u) &&
                  !C.hasOwnProperty(u) &&
                  (o[u] = void 0 === t[u] && void 0 !== l ? l[u] : t[u]);
            }
            var u = arguments.length - 2;
            if (1 === u) o.children = r;
            else if (1 < u) {
              l = Array(u);
              for (var c = 0; c < u; c++) l[c] = arguments[c + 2];
              o.children = l;
            }
            return {
              $$typeof: n,
              type: e.type,
              key: a,
              ref: i,
              props: o,
              _owner: s,
            };
          }),
          (t.createContext = function (e) {
            return (
              ((e = {
                $$typeof: l,
                _currentValue: e,
                _currentValue2: e,
                _threadCount: 0,
                Provider: null,
                Consumer: null,
                _defaultValue: null,
                _globalName: null,
              }).Provider = { $$typeof: s, _context: e }),
              (e.Consumer = e)
            );
          }),
          (t.createElement = E),
          (t.createFactory = function (e) {
            var t = E.bind(null, e);
            return (t.type = e), t;
          }),
          (t.createRef = function () {
            return { current: null };
          }),
          (t.forwardRef = function (e) {
            return { $$typeof: u, render: e };
          }),
          (t.isValidElement = _),
          (t.lazy = function (e) {
            return {
              $$typeof: d,
              _payload: { _status: -1, _result: e },
              _init: M,
            };
          }),
          (t.memo = function (e, t) {
            return { $$typeof: f, type: e, compare: void 0 === t ? null : t };
          }),
          (t.startTransition = function (e) {
            var t = P.transition;
            P.transition = {};
            try {
              e();
            } finally {
              P.transition = t;
            }
          }),
          (t.unstable_act = function () {
            throw Error(
              "act(...) is not supported in production builds of React."
            );
          }),
          (t.useCallback = function (e, t) {
            return O.current.useCallback(e, t);
          }),
          (t.useContext = function (e) {
            return O.current.useContext(e);
          }),
          (t.useDebugValue = function () {}),
          (t.useDeferredValue = function (e) {
            return O.current.useDeferredValue(e);
          }),
          (t.useEffect = function (e, t) {
            return O.current.useEffect(e, t);
          }),
          (t.useId = function () {
            return O.current.useId();
          }),
          (t.useImperativeHandle = function (e, t, n) {
            return O.current.useImperativeHandle(e, t, n);
          }),
          (t.useInsertionEffect = function (e, t) {
            return O.current.useInsertionEffect(e, t);
          }),
          (t.useLayoutEffect = function (e, t) {
            return O.current.useLayoutEffect(e, t);
          }),
          (t.useMemo = function (e, t) {
            return O.current.useMemo(e, t);
          }),
          (t.useReducer = function (e, t, n) {
            return O.current.useReducer(e, t, n);
          }),
          (t.useRef = function (e) {
            return O.current.useRef(e);
          }),
          (t.useState = function (e) {
            return O.current.useState(e);
          }),
          (t.useSyncExternalStore = function (e, t, n) {
            return O.current.useSyncExternalStore(e, t, n);
          }),
          (t.useTransition = function () {
            return O.current.useTransition();
          }),
          (t.version = "18.2.0");
      },
      294: (e, t, n) => {
        e.exports = n(408);
      },
      893: (e, t, n) => {
        e.exports = n(251);
      },
    },
    t = {};
  function n(r) {
    var o = t[r];
    if (void 0 !== o) return o.exports;
    var a = (t[r] = { exports: {} });
    return e[r](a, a.exports, n), a.exports;
  }
  (() => {
    const e = (function () {
      function e() {
        this.eventsQueue = {};
      }
      return (
        (e.prototype.on = function (e, t) {
          return (
            Array.isArray(this.eventsQueue[e]) || (this.eventsQueue[e] = []),
            this.eventsQueue[e].push(t),
            this
          );
        }),
        (e.prototype.trigger = function (e, t) {
          void 0 === t && (t = {});
          for (var n = this.eventsQueue[e] || [], r = 0; r < n.length; r++)
            n[r].call(null, t);
          return this;
        }),
        (e.prototype.clearAll = function () {
          return (this.eventsQueue = {}), this;
        }),
        e
      );
    })();
    var t;
    !(function (e) {
      (e[(e.Up = 0)] = "Up"), (e[(e.Down = 1)] = "Down");
    })(t || (t = {}));
    const r = t,
      o = (function () {
        function e(e) {
          (this.snbRemoveLineBreakBtnClass = "snb-remove-line-break-btn"),
            (this.snbRemovableLineBreakClass = "snb-removable-line-break"),
            (this.highlightedLinebreakClass = "highlighted"),
            (this.editor = e),
            (this.blankLinebreakClass = "snb-linebreak-".concat(
              this.editor.editableBrickClass
            ));
        }
        return (
          (e.prototype.removeBlankLinebreak = function (e) {
            var t = $(this.editor.editable).find(
              "p.".concat(this.blankLinebreakClass, ".").concat(e)
            );
            "" == t.text()
              ? t.remove()
              : t.removeClass(
                  "".concat(this.blankLinebreakClass, " ").concat(e)
                );
          }),
          (e.prototype.isLineBreak = function (e) {
            return e.is("p") && "" == e.text();
          }),
          (e.prototype.newLinebreak = function (e) {
            return (
              void 0 === e && (e = !1),
              $(
                '<p class="snb-removable-line-break '.concat(
                  e ? this.highlightedLinebreakClass : "",
                  '"><br></p>'
                )
              )[0]
            );
          }),
          (e.prototype.hasRemoveLineBreakBtn = function (e) {
            return (
              0 !== e.find(".".concat(this.snbRemoveLineBreakBtnClass)).length
            );
          }),
          (e.prototype.createLinebreakRemoveBtn = function () {
            return $(
              '<span class="'.concat(
                this.snbRemoveLineBreakBtnClass,
                '"></span>'
              )
            );
          }),
          (e.prototype.unHighlightLinebreak = function (e) {
            e.removeClass(this.highlightedLinebreakClass);
          }),
          (e.prototype.insertLinebreakNearBrick = function (e, t) {
            var n = this,
              o = this.newLinebreak(!0);
            return (
              t == r.Up
                ? $(o).insertBefore(e)
                : t == r.Down && $(o).insertAfter(e),
              setTimeout(function () {
                n.unHighlightLinebreak($(o));
              }, 500),
              $(o)
            );
          }),
          e
        );
      })(),
      a = (function () {
        function t(t) {
          (this.context = t),
            (this.editableBrickClass = "snb-heading-brick"),
            (this.styleIdentifier = "snb-style-".concat(
              this.editableBrickClass
            )),
            (this.editable = t.layoutInfo.editable),
            (this.snEditor = t.layoutInfo.editor),
            (this.eventManager = new e()),
            (this.linebreakManager = new o(this)),
            this.attachEvents();
        }
        return (
          (t.prototype.insertNode = function (e) {
            this.context.invoke("editor.insertNode", e);
          }),
          (t.prototype.insertHtml = function (e) {
            this.context.invoke("editor.pasteHTML", e);
          }),
          (t.prototype.attachEvents = function () {
            var e = this;
            $(this.editable).on(
              "click",
              ".".concat(
                this.editableBrickClass,
                " .snb-brick-actions .snb-remove "
              ),
              function () {
                var t = $(this).parents(".".concat(e.editableBrickClass));
                t.remove(), e.trigger("brick-removed", t.get(0));
              }
            ),
              $(this.editable).on(
                "click",
                ".".concat(
                  this.editableBrickClass,
                  " .snb-brick-actions .snb-edit "
                ),
                function () {
                  var t = $(this).parents(".".concat(e.editableBrickClass));
                  e.trigger("brick-editing", t.get(0));
                }
              ),
              $(this.editable).on(
                "click",
                ".".concat(
                  this.editableBrickClass,
                  " .snb-linebreaks .snb-linebreak-up "
                ),
                function () {
                  var t = $(this).parents(".".concat(e.editableBrickClass)),
                    n = e.linebreakManager.insertLinebreakNearBrick(t, r.Up);
                  e.trigger("new-linebreak-added-up", n);
                }
              ),
              $(this.editable).on(
                "click",
                ".".concat(
                  this.editableBrickClass,
                  " .snb-linebreaks .snb-linebreak-down "
                ),
                function () {
                  var t = $(this).parents(".".concat(e.editableBrickClass)),
                    n = e.linebreakManager.insertLinebreakNearBrick(t, r.Down);
                  e.trigger("new-linebreak-added-down", n);
                }
              );
          }),
          (t.prototype.recoverEditorFocus = function () {
            var e = $(this.snEditor).data("last_focused_element");
            if (void 0 !== e) {
              var t = this.editable,
                n = document.createRange(),
                r = window.getSelection(),
                o = e.length;
              n.setStart(e, o),
                n.collapse(!0),
                r.removeAllRanges(),
                r.addRange(n),
                t.focus();
            }
          }),
          (t.prototype.saveLastFocusedElement = function () {
            var e = window.getSelection().focusNode,
              t = $(this.editable).get(0);
            $.contains(t, e) &&
              $(this.snEditor).data("last_focused_element", e);
          }),
          (t.prototype.on = function (e, t) {
            return this.eventManager.on(e, t);
          }),
          (t.prototype.trigger = function (e, t) {
            return this.eventManager.trigger(e, t);
          }),
          (t.prototype.hasStyle = function (e) {
            return !!$(this.editable).find("style.".concat(e)).length;
          }),
          t
        );
      })();
    var i = n(762);
    const s = function (e) {
        var t = (0, i.Dq)(e);
        return $(t).get();
      },
      l = function (e) {
        return e.outerHTML.replace(/(&quot;)|(&#x27;)/g, '"');
      },
      u = (function () {
        function e() {
          this.errors = [];
        }
        return (
          (e.prototype.addError = function (e) {
            this.errors.includes(e) || this.errors.push(e);
          }),
          (e.prototype.getErrors = function () {
            return this.errors;
          }),
          e
        );
      })();
    var c,
      f =
        ((c = function (e, t) {
          return (
            (c =
              Object.setPrototypeOf ||
              ({ __proto__: [] } instanceof Array &&
                function (e, t) {
                  e.__proto__ = t;
                }) ||
              function (e, t) {
                for (var n in t)
                  Object.prototype.hasOwnProperty.call(t, n) && (e[n] = t[n]);
              }),
            c(e, t)
          );
        }),
        function (e, t) {
          if ("function" != typeof t && null !== t)
            throw new TypeError(
              "Class extends value " +
                String(t) +
                " is not a constructor or null"
            );
          function n() {
            this.constructor = e;
          }
          c(e, t),
            (e.prototype =
              null === t
                ? Object.create(t)
                : ((n.prototype = t.prototype), new n()));
        });
    const d = (function (e) {
      function t() {
        return (null !== e && e.apply(this, arguments)) || this;
      }
      return (
        f(t, e),
        (t.prototype.isValid = function (e) {
          return !this.isEmpty(e[this.dataProperty]);
        }),
        (t.prototype.isEmpty = function (e) {
          return !(!Array.isArray(e) || 0 != e.length) || (0 !== e && !e);
        }),
        (t.prototype.getErrorMessage = function () {
          return null != this.errorMessage
            ? this.errorMessage
            : "".concat(this.dataProperty.toUpperCase(), " is required");
        }),
        t
      );
    })(function (e, t) {
      (this.dataProperty = e), (this.errorMessage = t);
    });
    const p = (function () {
        function e(e, t) {
          (this.data = e), (this.validations = t), (this.errorBag = new u());
        }
        return (
          (e.prototype.isValid = function () {
            return !this.getErrors().length;
          }),
          (e.prototype.getErrors = function () {
            var e = new u();
            for (var t in this.validations) {
              var n = this.validations[t];
              for (var r in n) {
                var o = this.getRule(r),
                  a = n[r];
                if (o) {
                  var i = new o(t, a.message);
                  i.isValid(this.data) || e.addError(i.getErrorMessage());
                }
              }
            }
            return e.getErrors();
          }),
          (e.prototype.getRule = function (e) {
            var t = { required: d };
            return t[e]
              ? t[e]
              : (console.error(
                  "".concat(e, " is not a defined validation rule")
                ),
                null);
          }),
          e
        );
      })(),
      h = (function () {
        function t(t, n, r) {
          (this.options = r),
            (this.mode = t),
            (this.messagesFactoriesProvider = n),
            (this.eventManager = new e()),
            this.init();
        }
        return (
          (t.prototype.attachEvents = function () {
            var e = this;
            this.getSaveButton().on("click", function (t) {
              var n = new p(e.getData(), e.options.validations);
              e.clearMessages(),
                n.isValid()
                  ? (e.close(),
                    e.trigger("beforeSave"),
                    e.mode.save(e.getData()),
                    e.trigger("save", { data: e.getData() }),
                    e.trigger("afterSave"))
                  : e.showErrors(n.getErrors());
            });
          }),
          (t.prototype.open = function () {
            this.getBsModal().modal();
          }),
          (t.prototype.init = function () {
            (this.$modal = this.createModal(
              this.mode.getModalLoadData(this.options)
            )),
              this.attachEvents();
          }),
          (t.prototype.close = function () {
            this.getBsModal().modal("hide");
          }),
          (t.prototype.createModal = function (e) {
            var t = this.getTemplate(e, this.options);
            return $(s(t)).hide();
          }),
          (t.prototype.on = function (e, t) {
            return this.eventManager.on(e, t);
          }),
          (t.prototype.trigger = function (e, t) {
            return void 0 === t && (t = {}), this.eventManager.trigger(e, t);
          }),
          (t.prototype.showErrors = function (e) {
            var t = this.messagesFactoriesProvider.getMessageFactory("error");
            if (t)
              for (var n = 0; n < e.length; n++) {
                var r = t(e[n]);
                this.getMessagesContainer().append(r);
              }
          }),
          (t.prototype.clearMessages = function () {
            this.getMessagesContainer().html("");
          }),
          (t.prototype.getBsModal = function () {
            return this.$modal;
          }),
          t
        );
      })();
    var g = n(893),
      m = function () {
        return (
          (m =
            Object.assign ||
            function (e) {
              for (var t, n = 1, r = arguments.length; n < r; n++)
                for (var o in (t = arguments[n]))
                  Object.prototype.hasOwnProperty.call(t, o) && (e[o] = t[o]);
              return e;
            }),
          m.apply(this, arguments)
        );
      },
      y = n(294),
      b = function () {
        return (
          (b =
            Object.assign ||
            function (e) {
              for (var t, n = 1, r = arguments.length; n < r; n++)
                for (var o in (t = arguments[n]))
                  Object.prototype.hasOwnProperty.call(t, o) && (e[o] = t[o]);
              return e;
            }),
          b.apply(this, arguments)
        );
      },
      v = (function () {
        var e = function (t, n) {
          return (
            (e =
              Object.setPrototypeOf ||
              ({ __proto__: [] } instanceof Array &&
                function (e, t) {
                  e.__proto__ = t;
                }) ||
              function (e, t) {
                for (var n in t)
                  Object.prototype.hasOwnProperty.call(t, n) && (e[n] = t[n]);
              }),
            e(t, n)
          );
        };
        return function (t, n) {
          if ("function" != typeof n && null !== n)
            throw new TypeError(
              "Class extends value " +
                String(n) +
                " is not a constructor or null"
            );
          function r() {
            this.constructor = t;
          }
          e(t, n),
            (t.prototype =
              null === n
                ? Object.create(n)
                : ((r.prototype = n.prototype), new r()));
        };
      })();
    const k = (function (e) {
      function t(t, n, r) {
        return e.call(this, t, n, r) || this;
      }
      return (
        v(t, e),
        (t.prototype.getSaveButton = function () {
          return this.getBsModal().find("button#save");
        }),
        (t.prototype.getData = function () {
          return {
            brickIdentifier: "brick_".concat(Date.now()),
            selectedImages: this.getBody()
              .find(".img-item img." + this.options.selectClassName)
              .map(function (e, t) {
                return {
                  id: $(t).data("id"),
                  title: $(t).attr("title"),
                  url: $(t).attr("src"),
                };
              })
              .toArray(),
          };
        }),
        (t.prototype.getBody = function () {
          return this.getBsModal().find(".modal-body");
        }),
        (t.prototype.getImagesList = function () {
          return this.getBsModal().find(".images-list");
        }),
        (t.prototype.getMessagesContainer = function () {
          return this.getBsModal().find(
            ".".concat(this.options.messageContainerClass)
          );
        }),
        (t.prototype.getTemplate = function (e, t) {
          return (function (e, t) {
            var n = parseInt($.fn.modal.Constructor.VERSION),
              r = (0, g.jsx)(
                "button",
                m(
                  {
                    type: "button",
                    className: "close",
                    "data-dismiss": "modal",
                    "aria-label": "Close",
                  },
                  {
                    children: (0, g.jsx)(
                      "span",
                      m({ "aria-hidden": "true" }, { children: "×" })
                    ),
                  }
                )
              ),
              o = (0, g.jsx)(
                "h4",
                m({ className: "modal-title" }, { children: t.title })
              );
            return (0, g.jsx)(
              "div",
              m(
                {
                  className: "modal summernote-gallery fade",
                  tabIndex: -1,
                  role: "dialog",
                },
                {
                  children: (0, g.jsx)(
                    "div",
                    m(
                      { className: "modal-lg modal-dialog " },
                      {
                        children: (0, g.jsxs)(
                          "div",
                          m(
                            { className: "modal-content" },
                            {
                              children: [
                                (0, g.jsxs)(
                                  "div",
                                  m(
                                    { className: "modal-header" },
                                    {
                                      children: [
                                        3 == n ? r : o,
                                        3 == n ? o : r,
                                      ],
                                    }
                                  )
                                ),
                                (0, g.jsx)(
                                  "div",
                                  m(
                                    {
                                      className: "modal-body",
                                      style: { height: t.height },
                                    },
                                    {
                                      children: (0, g.jsx)("div", {
                                        className: "row images-list",
                                      }),
                                    }
                                  )
                                ),
                                (0, g.jsxs)(
                                  "div",
                                  m(
                                    { className: "modal-footer" },
                                    {
                                      children: [
                                        (0, g.jsx)(
                                          "span",
                                          m(
                                            {
                                              style: {
                                                display: "none",
                                                position: "absolute",
                                                left: "10px",
                                                bottom: "10px",
                                              },
                                              className: "loading",
                                            },
                                            {
                                              children: (0, g.jsx)("i", {
                                                className:
                                                  "fa fa-spinner fa-pulse fa-3x fa-fw",
                                              }),
                                            }
                                          )
                                        ),
                                        (0, g.jsxs)(
                                          "span",
                                          m(
                                            {
                                              style: {
                                                display: "inline-block",
                                                marginRight: "50px",
                                              },
                                            },
                                            {
                                              children: [
                                                (0, g.jsx)(
                                                  "button",
                                                  m(
                                                    {
                                                      type: "button",
                                                      id: "select-all",
                                                      className:
                                                        "btn btn-default",
                                                    },
                                                    {
                                                      children: t.selectAllText,
                                                    }
                                                  )
                                                ),
                                                (0, g.jsx)(
                                                  "button",
                                                  m(
                                                    {
                                                      type: "button",
                                                      id: "deselect-all",
                                                      className:
                                                        "btn btn-default",
                                                    },
                                                    {
                                                      children:
                                                        t.deselectAllText,
                                                    }
                                                  )
                                                ),
                                              ],
                                            }
                                          )
                                        ),
                                        (0, g.jsx)(
                                          "button",
                                          m(
                                            {
                                              type: "button",
                                              id: "close",
                                              className: "btn btn-default",
                                              "data-dismiss": "modal",
                                            },
                                            { children: t.closeText }
                                          )
                                        ),
                                        (0, g.jsx)(
                                          "button",
                                          m(
                                            {
                                              type: "button",
                                              id: "save",
                                              className: "btn btn-primary",
                                            },
                                            { children: t.saveText }
                                          )
                                        ),
                                      ],
                                    }
                                  )
                                ),
                                (0, g.jsx)("div", {
                                  className: t.messageContainerClass,
                                }),
                              ],
                            }
                          )
                        ),
                      }
                    )
                  ),
                }
              )
            );
          })(0, t);
        }),
        (t.prototype.showLoading = function () {
          this.getBsModal().find(".modal-footer .loading").show();
        }),
        (t.prototype.hideLoading = function () {
          this.getBsModal().find(".modal-footer .loading").hide();
        }),
        (t.prototype.addImages = function (e) {
          var t,
            n,
            r,
            o,
            a = this,
            i = s(
              ((t = e),
              (n = this.options),
              (r = this.mode.getModalLoadData(this.options)),
              (o = t.images.map(function (e) {
                var t = e.id,
                  o = e.url,
                  a = e.title,
                  i = r.selectedImages.find(function (e) {
                    return e.id == t;
                  })
                    ? n.selectClassName
                    : "";
                return (0,
                g.jsxs)("div", b({ className: "col-md-2 mb-4 img-item" }, { children: [(0, g.jsx)("img", { className: "img-thumbnail sng-image ".concat(i), src: o, title: a, alt: a, "data-id": t }), (0, g.jsx)("i", { className: "fa fa-check" }), (0, g.jsx)("span", b({ className: "loading" }, { children: (0, g.jsx)("i", { className: "fa fa-spinner fa-pulse fa-3x fa-fw" }) }))] }), "img_".concat(Date.now()));
              })),
              (0, g.jsx)(y.Fragment, { children: o }))
            );
          i.map(function (e) {
            $(e).find("img").get(0).onload = function () {
              $(this).siblings(".loading").hide(),
                $(this).on("click", function (e) {
                  $(this).toggleClass(a.options.selectClassName);
                });
            };
          }),
            this.getImagesList().append(i);
        }),
        (t.prototype.imagesContainerHasScroll = function () {
          return (
            Math.floor(this.getImagesList().height()) >
            Math.floor(this.getBody().height())
          );
        }),
        (t.prototype.resetContent = function () {
          this.getImagesList().html("");
        }),
        (t.prototype.attachEvents = function () {
          var t = this;
          e.prototype.attachEvents.call(this);
          var n = this.getBsModal();
          n.on("hidden.bs.modal", function () {
            t.resetContent(), t.trigger("close"), n.remove();
          }),
            n.find("button#select-all").on("click", function () {
              n.find("img").addClass(t.options.selectClassName);
            }),
            n.find("button#deselect-all").on("click", function () {
              t.getBsModal().find("img").removeClass(t.options.selectClassName);
            }),
            this.getBody().on("scroll", function () {
              t.getBody().scrollTop() + t.getBody().height() >=
                t.getImagesList().height() - 100 &&
                t.trigger("scrollBottom", { galleryModal: t });
            });
        }),
        t
      );
    })(h);
    var x = function () {
      return (
        (x =
          Object.assign ||
          function (e) {
            for (var t, n = 1, r = arguments.length; n < r; n++)
              for (var o in (t = arguments[n]))
                Object.prototype.hasOwnProperty.call(t, o) && (e[o] = t[o]);
            return e;
          }),
        x.apply(this, arguments)
      );
    };
    const S = (function () {
      function e(e, t) {
        (this.brick = e),
          (this.options = t),
          (this.snbBrickContainerClass = "sn-brick-container");
      }
      return (
        (e.prototype.renderBrick = function () {
          var e,
            t =
              ((e = {
                editableBrickClass: this.options.editableBrickClass,
                snbBrickContainerClass: this.snbBrickContainerClass,
                showLinebreaksButtons: !0,
              }),
              (0, g.jsxs)(
                "div",
                x(
                  {
                    contentEditable: !1,
                    className: "snb-editable-brick-wrap ".concat(
                      e.editableBrickClass
                    ),
                  },
                  {
                    children: [
                      (0, g.jsxs)(
                        "div",
                        x(
                          {
                            className: "snb-brick-actions",
                            style: { display: "none" },
                          },
                          {
                            children: [
                              (0, g.jsxs)(
                                "div",
                                x(
                                  { className: "snb-crud-actions" },
                                  {
                                    children: [
                                      (0, g.jsx)(
                                        "button",
                                        x(
                                          {
                                            type: "button",
                                            className:
                                              "snb-remove btn btn-danger",
                                          },
                                          {
                                            children: (0, g.jsx)("i", {
                                              className: "fa fa-times",
                                            }),
                                          }
                                        )
                                      ),
                                      (0, g.jsx)(
                                        "button",
                                        x(
                                          {
                                            type: "button",
                                            className:
                                              "snb-edit btn btn-success",
                                          },
                                          {
                                            children: (0, g.jsx)("i", {
                                              className: "fa fa-pencil",
                                            }),
                                          }
                                        )
                                      ),
                                    ],
                                  }
                                )
                              ),
                              e.showLinebreaksButtons &&
                                (0, g.jsxs)(
                                  "div",
                                  x(
                                    {
                                      className: "btn-group snb-linebreaks",
                                      role: "group",
                                      "aria-label": "",
                                    },
                                    {
                                      children: [
                                        (0, g.jsx)(
                                          "button",
                                          x(
                                            {
                                              type: "button",
                                              className:
                                                "btn btn-light snb-linebreak-up",
                                            },
                                            {
                                              children: (0, g.jsx)("i", {
                                                className: "fa fa-arrow-up",
                                                "aria-hidden": "true",
                                              }),
                                            }
                                          )
                                        ),
                                        (0, g.jsx)(
                                          "button",
                                          x(
                                            {
                                              type: "button",
                                              className:
                                                "btn btn-light snb-linebreak-down",
                                            },
                                            {
                                              children: (0, g.jsx)("i", {
                                                className: "fa fa-arrow-down",
                                                "aria-hidden": "true",
                                              }),
                                            }
                                          )
                                        ),
                                      ],
                                    }
                                  )
                                ),
                            ],
                          }
                        )
                      ),
                      (0, g.jsx)("div", {
                        className: e.snbBrickContainerClass,
                      }),
                    ],
                  }
                )
              )),
            n = s(t)[0];
          return (
            $(n)
              .find(".".concat(this.snbBrickContainerClass))
              .append(this.brick),
            n
          );
        }),
        (e.prototype.getBrickData = function () {
          return $(this.brick).find("[data-brickdata]").data("brickdata");
        }),
        e
      );
    })();
    var w = function () {
      return (
        (w =
          Object.assign ||
          function (e) {
            for (var t, n = 1, r = arguments.length; n < r; n++)
              for (var o in (t = arguments[n]))
                Object.prototype.hasOwnProperty.call(t, o) && (e[o] = t[o]);
            return e;
          }),
        w.apply(this, arguments)
      );
    };
    const C = function (e) {
        var t = e.selectedImages.map(function (e) {
          var t = e.url,
            n = e.title;
          return (0,
          g.jsx)("img", { src: t, title: n, alt: n }, "img_".concat(Date.now()));
        });
        return (0, g.jsx)(
          "div",
          w(
            { "data-brickdata": JSON.stringify(e), id: e.brickIdentifier },
            { children: t }
          )
        );
      },
      E = (function () {
        function e(e) {
          this.editor = e;
        }
        return (
          (e.prototype.createBrick = function (e) {
            var t = s(this.getBrickTemplate(e))[0];
            return new S(t, {
              editableBrickClass: this.editor.editableBrickClass,
            }).renderBrick();
          }),
          e
        );
      })();
    var _ = (function () {
      var e = function (t, n) {
        return (
          (e =
            Object.setPrototypeOf ||
            ({ __proto__: [] } instanceof Array &&
              function (e, t) {
                e.__proto__ = t;
              }) ||
            function (e, t) {
              for (var n in t)
                Object.prototype.hasOwnProperty.call(t, n) && (e[n] = t[n]);
            }),
          e(t, n)
        );
      };
      return function (t, n) {
        if ("function" != typeof n && null !== n)
          throw new TypeError(
            "Class extends value " + String(n) + " is not a constructor or null"
          );
        function r() {
          this.constructor = t;
        }
        e(t, n),
          (t.prototype =
            null === n
              ? Object.create(n)
              : ((r.prototype = n.prototype), new r()));
      };
    })();
    const T = (function (e) {
      function t() {
        return (null !== e && e.apply(this, arguments)) || this;
      }
      return (
        _(t, e),
        (t.prototype.save = function (e) {
          if (!this.editor.hasStyle(this.editor.styleIdentifier)) {
            var t = this.createStyle(e);
            t && this.editor.insertHtml(t);
          }
          this.editor.insertNode(this.createBrick(e)),
            this.editor.insertHtml(this.createBlankLine(e));
        }),
        (t.prototype.createStyle = function (e) {
          var t = this.getBrickStyleTemplate(e);
          if (!t) return null;
          var n = s(t)[0];
          return (
            (n = $(n)
              .wrap('<span contenteditable="false"></span>')
              .parent()[0]),
            l(n)
          );
        }),
        (t.prototype.createBlankLine = function (e) {
          return '<p class="'
            .concat(this.editor.blankLineClass, " ")
            .concat(e.brickIdentifier, '" ><br></p>');
        }),
        t
      );
    })(E);
    var B = (function () {
      var e = function (t, n) {
        return (
          (e =
            Object.setPrototypeOf ||
            ({ __proto__: [] } instanceof Array &&
              function (e, t) {
                e.__proto__ = t;
              }) ||
            function (e, t) {
              for (var n in t)
                Object.prototype.hasOwnProperty.call(t, n) && (e[n] = t[n]);
            }),
          e(t, n)
        );
      };
      return function (t, n) {
        if ("function" != typeof n && null !== n)
          throw new TypeError(
            "Class extends value " + String(n) + " is not a constructor or null"
          );
        function r() {
          this.constructor = t;
        }
        e(t, n),
          (t.prototype =
            null === n
              ? Object.create(n)
              : ((r.prototype = n.prototype), new r()));
      };
    })();
    const F = (function (e) {
      function t() {
        return (null !== e && e.apply(this, arguments)) || this;
      }
      return (
        B(t, e),
        (t.prototype.getModalLoadData = function (e) {
          return {
            brickIdentifier: "brick_".concat(Date.now()),
            selectedImages: [],
          };
        }),
        (t.prototype.getBrickStyleTemplate = function (e) {}),
        (t.prototype.getBrickTemplate = function (e) {
          return C(e);
        }),
        t
      );
    })(T);
    var R = (function () {
      var e = function (t, n) {
        return (
          (e =
            Object.setPrototypeOf ||
            ({ __proto__: [] } instanceof Array &&
              function (e, t) {
                e.__proto__ = t;
              }) ||
            function (e, t) {
              for (var n in t)
                Object.prototype.hasOwnProperty.call(t, n) && (e[n] = t[n]);
            }),
          e(t, n)
        );
      };
      return function (t, n) {
        if ("function" != typeof n && null !== n)
          throw new TypeError(
            "Class extends value " + String(n) + " is not a constructor or null"
          );
        function r() {
          this.constructor = t;
        }
        e(t, n),
          (t.prototype =
            null === n
              ? Object.create(n)
              : ((r.prototype = n.prototype), new r()));
      };
    })();
    const M = (function (e) {
      function t(t, n) {
        var r = e.call(this, n) || this;
        return (r.editingBrick = t), r;
      }
      return (
        R(t, e),
        (t.prototype.save = function (e) {
          $(this.editingBrick).replaceWith(this.createBrick(e));
        }),
        (t.prototype.getModalLoadData = function (e) {
          return new S(this.editingBrick, {
            editableBrickClass: this.editor.editableBrickClass,
          }).getBrickData();
        }),
        t
      );
    })(E);
    var O = (function () {
      var e = function (t, n) {
        return (
          (e =
            Object.setPrototypeOf ||
            ({ __proto__: [] } instanceof Array &&
              function (e, t) {
                e.__proto__ = t;
              }) ||
            function (e, t) {
              for (var n in t)
                Object.prototype.hasOwnProperty.call(t, n) && (e[n] = t[n]);
            }),
          e(t, n)
        );
      };
      return function (t, n) {
        if ("function" != typeof n && null !== n)
          throw new TypeError(
            "Class extends value " + String(n) + " is not a constructor or null"
          );
        function r() {
          this.constructor = t;
        }
        e(t, n),
          (t.prototype =
            null === n
              ? Object.create(n)
              : ((r.prototype = n.prototype), new r()));
      };
    })();
    const P = (function (e) {
        function t() {
          return (null !== e && e.apply(this, arguments)) || this;
        }
        return (
          O(t, e),
          (t.prototype.getBrickTemplate = function (e) {
            return C(e);
          }),
          (t.prototype.getModalLoadData = function (t) {
            return e.prototype.getModalLoadData.call(this, t);
          }),
          t
        );
      })(M),
      j = (function () {
        function e() {
          this.extensions = [];
        }
        return (
          (e.prototype.add = function (e) {
            this.extensions.push(e);
          }),
          (e.prototype.triggerEvent = function (e, t) {
            for (var n = 0; n < this.extensions.length; n++) {
              var r = this.extensions[n],
                o = r[e];
              "function" == typeof o && o.apply(r, t);
            }
          }),
          e
        );
      })();
    var I = function () {
      return (
        (I =
          Object.assign ||
          function (e) {
            for (var t, n = 1, r = arguments.length; n < r; n++)
              for (var o in (t = arguments[n]))
                Object.prototype.hasOwnProperty.call(t, o) && (e[o] = t[o]);
            return e;
          }),
        I.apply(this, arguments)
      );
    };
    const L = (function () {
      function e() {}
      return (
        (e.prototype.getMessageFactory = function (e) {
          var t = this.getMessagesFactories();
          return void 0 !== t[e]
            ? t[e]
            : (console.error(
                "".concat(e, " is an invalid message factory type")
              ),
              null);
        }),
        e
      );
    })();
    var N = (function () {
      var e = function (t, n) {
        return (
          (e =
            Object.setPrototypeOf ||
            ({ __proto__: [] } instanceof Array &&
              function (e, t) {
                e.__proto__ = t;
              }) ||
            function (e, t) {
              for (var n in t)
                Object.prototype.hasOwnProperty.call(t, n) && (e[n] = t[n]);
            }),
          e(t, n)
        );
      };
      return function (t, n) {
        if ("function" != typeof n && null !== n)
          throw new TypeError(
            "Class extends value " + String(n) + " is not a constructor or null"
          );
        function r() {
          this.constructor = t;
        }
        e(t, n),
          (t.prototype =
            null === n
              ? Object.create(n)
              : ((r.prototype = n.prototype), new r()));
      };
    })();
    const D = (function (e) {
      function t() {
        return (null !== e && e.apply(this, arguments)) || this;
      }
      return (
        N(t, e),
        (t.prototype.getMessagesFactories = function () {
          return {
            error: function (e) {
              return s(
                (function (e) {
                  return (0, g.jsx)(
                    "div",
                    I(
                      {
                        style: { margin: "1rem" },
                        className: "alert alert-danger",
                      },
                      { children: e }
                    )
                  );
                })(e)
              )[0];
            },
          };
        }),
        t
      );
    })(L);
    var A = function () {
      return (
        (A =
          Object.assign ||
          function (e) {
            for (var t, n = 1, r = arguments.length; n < r; n++)
              for (var o in (t = arguments[n]))
                Object.prototype.hasOwnProperty.call(t, o) && (e[o] = t[o]);
            return e;
          }),
        A.apply(this, arguments)
      );
    };
    const V = (function () {
        function t(e) {
          (this.options = A(
            {
              url: null,
              data: [],
              responseDataKey: "data",
              nextPageKey: "links.next",
              formater: function (e, t, n) {
                return e;
              },
            },
            e
          )),
            this.init();
        }
        return (
          (t.prototype.init = function () {
            (this.current_page = 0),
              (this.is_fetching_locked = !1),
              (this.event = new e()),
              (this.fetch_url = this.options.url),
              (this.fetch_type = this.options.data.length
                ? "data"
                : this.fetch_url
                ? "url"
                : null);
          }),
          (t.prototype.setNextFetch = function (e) {
            e.next_link && e.data.length
              ? (this.fetch_url = e.next_link)
              : this.lockFetching();
          }),
          (t.prototype.lockFetching = function () {
            this.is_fetching_locked = !0;
          }),
          (t.prototype.unlockFetching = function () {
            this.is_fetching_locked = !1;
          }),
          (t.prototype.getObjectKeyByString = function (e, t, n) {
            var r = t.split(".").reduce(function (e, t) {
              return e ? e[t] : {};
            }, e);
            return void 0 === n && (n = r), r && !$.isEmptyObject(r) ? r : n;
          }),
          (t.prototype.parseResponse = function (e) {
            return {
              data: this.getObjectKeyByString(
                e,
                this.options.responseDataKey,
                []
              ),
              next_link: this.getObjectKeyByString(
                e,
                this.options.nextPageKey,
                null
              ),
            };
          }),
          (t.prototype.fetchData = function () {
            var e = this;
            if ("data" == this.fetch_type)
              this.event.trigger("beforeFetch"),
                this.event.trigger("fetch", {
                  data: this.options.formater(this.options.data, 1, null),
                }),
                this.event.trigger("afterFetch");
            else if ("url" == this.fetch_type) {
              if (this.is_fetching_locked) return;
              var t = this.fetch_url;
              this.event.trigger("beforeFetch"),
                this.lockFetching(),
                $.ajax({
                  url: t,
                  beforeSend: function (e) {
                    e.request_link = t;
                  },
                })
                  .always(function () {
                    e.unlockFetching();
                  })
                  .done(function (t, n, r) {
                    var o = e.parseResponse(t);
                    e.current_page++,
                      e.setNextFetch(o),
                      e.event.trigger("fetch", {
                        data: e.options.formater(o.data, e.current_page, t),
                        page: e.current_page,
                        requestLink: r.request_link,
                        nextLink: o.next_link,
                      });
                  })
                  .fail(function () {
                    e.event.trigger("error", {
                      error: "problem loading from " + t,
                    });
                  })
                  .always(function () {
                    e.event.trigger("afterFetch");
                  });
            } else
              this.event.trigger("error", {
                error: "options 'data' or 'url' must be set",
              });
          }),
          (t.prototype.fetchNext = function () {
            "url" == this.fetch_type && this.fetchData();
          }),
          (t.prototype.on = function (e, t) {
            return this.event.on(e, t);
          }),
          (t.prototype.trigger = function (e, t) {
            return this.event.trigger(e, t);
          }),
          t
        );
      })(),
      z = (function () {
        function e() {}
        return (
          (e.prototype.init = function () {
            this.addStylesToDom(), this.addScriptsToDom();
          }),
          (e.prototype.addStylesToDom = function () {
            $("head").append(this.getStyles());
          }),
          (e.prototype.addScriptsToDom = function () {
            $("body").append(this.getScripts());
          }),
          e
        );
      })();
    var q = (function () {
      var e = function (t, n) {
        return (
          (e =
            Object.setPrototypeOf ||
            ({ __proto__: [] } instanceof Array &&
              function (e, t) {
                e.__proto__ = t;
              }) ||
            function (e, t) {
              for (var n in t)
                Object.prototype.hasOwnProperty.call(t, n) && (e[n] = t[n]);
            }),
          e(t, n)
        );
      };
      return function (t, n) {
        if ("function" != typeof n && null !== n)
          throw new TypeError(
            "Class extends value " + String(n) + " is not a constructor or null"
          );
        function r() {
          this.constructor = t;
        }
        e(t, n),
          (t.prototype =
            null === n
              ? Object.create(n)
              : ((r.prototype = n.prototype), new r()));
      };
    })();
    const H = (function (e) {
        function t(t) {
          var n = e.call(this) || this;
          return (n.options = t), n;
        }
        return (
          q(t, e),
          (t.prototype.getStyles = function () {
            return [
              s(
                ((e = this.options.modal),
                (0, g.jsx)("style", {
                  children:
                    "\n                .img-item{\n                    position : relative;\n                }\n                .img-item .fa-check{\n                    position : absolute;\n                    top : -10px;\n                    right : 5px;\n                    font-size: 30px;\n                    color: #337AB7;\n                }\n                .img-item .loading{\n                    position: absolute;\n                    margin: auto;\n                    top: -20px;\n                    bottom: 0;\n                    display: block;\n                    left: 0;\n                    right: 0;\n                    width: 60px;\n                    height: 42px;\n                    text-align: center;\n                }\n                .modal.summernote-gallery .message{\n                    display: block;\n                    padding: 30px 0 20px 0;\n                }\n                .modal.summernote-gallery .message:empty{\n                    display: block;\n                    padding: 0px!important;\n                }\n                .modal.summernote-gallery .modal-body{\n                    overflow: scroll;\n                }\n                .img-item .fa-check{\n                    display : none;\n                }\n                .img-item ."
                      .concat(
                        e.selectClassName,
                        " + .fa-check{\n                    display : block;\n                }\n                ."
                      )
                      .concat(
                        e.selectClassName,
                        " {\n                    background-color: #5CB85C;\n                }\n            "
                      ),
                }))
              )[0],
            ];
            var e;
          }),
          (t.prototype.getScripts = function () {
            return [];
          }),
          t
        );
      })(z),
      U = (function () {
        function e(e, t) {
          (this.pluginName = e),
            (this.extensions = t),
            (this.extensionsManager = new j());
        }
        return (
          (e.prototype.init = function (e) {
            (this.pluginOptions = $.extend(
              !0,
              this.defaultOptions(),
              e.options[this.pluginName]
            )),
              (this.editor = new a(e)),
              (this.linebreakManager = new o(this.editor)),
              (this.page = new H(this.pluginOptions)),
              this.page.init(),
              this.attachEditorEvents(),
              this.addOptionsExtensions(),
              this.extensionsManager.triggerEvent("onInit", [this.editor]);
          }),
          (e.prototype.attachEditorEvents = function () {
            var e = this;
            this.editor.on("brick-editing", function (t) {
              e.openModal(new P(t, e.editor));
            }),
              this.editor.on("brick-removed", function (t) {
                var n = new S(t, {
                  editableBrickClass: e.editor.editableBrickClass,
                }).getBrickData().brickIdentifier;
                e.linebreakManager.removeBlankLinebreak(n);
              });
          }),
          (e.prototype.attachModalEvents = function (e, t) {
            var n = this;
            e.on("beforeSave", function () {
              n.editor.recoverEditorFocus();
            }),
              e.on("scrollBottom", function () {
                e.options.loadOnScroll && t.fetchNext();
              }),
              e.on("close", function () {
                t.init();
              });
          }),
          (e.prototype.attachDataEvents = function (e, t) {
            t.on("beforeFetch", function () {
              e.showLoading();
            })
              .on("fetch", function (n) {
                var r = n.data;
                e.addImages({ images: r }),
                  setTimeout(function () {
                    e.options.loadOnScroll &&
                      !e.imagesContainerHasScroll() &&
                      t.fetchNext();
                  }, 2e3);
              })
              .on("afterFetch", function () {
                e.hideLoading();
              })
              .on("error", function (t) {
                var n = t.error;
                e.showErrors([n]);
              });
          }),
          (e.prototype.addOptionsExtensions = function () {
            for (
              var e = this.pluginOptions.extensions || [""], t = {}, n = 0;
              n < this.extensions.length;
              n++
            )
              t[this.extensions[n].name] = this.extensions[n];
            for (n = 0; n < e.length; n++) {
              var r = e[n];
              void 0 !== t[r]
                ? this.use(t[r])
                : console.error(
                    '"'.concat(r, '" is an invalid extension name')
                  );
            }
          }),
          (e.prototype.openModal = function (e) {
            var t = new k(e, new D(), this.pluginOptions.modal),
              n = new V(this.pluginOptions.source);
            this.attachModalEvents(t, n),
              this.attachDataEvents(t, n),
              n.fetchData(),
              t.open();
          }),
          (e.prototype.createButton = function () {
            var e = this;
            return $.summernote.ui
              .button({
                className: "w-100",
                contents: this.pluginOptions.buttonLabel,
                tooltip: this.pluginOptions.tooltip,
                click: function () {
                  e.openModal(new F(e.editor));
                },
              })
              .render();
          }),
          (e.prototype.use = function (e) {
            this.extensionsManager.add(e);
          }),
          (e.prototype.defaultOptions = function () {
            return {
              modal: this.getModalDefaultOptions(),
              source: null,
              buttonLabel: '<i class="fa fa-file-image-o"></i> SN Gallery',
              tooltip: "Summernote Gallery",
              extensions: [],
            };
          }),
          (e.prototype.getModalDefaultOptions = function () {
            return {
              loadOnScroll: !1,
              height: 500,
              title: "summernote image gallery",
              closeText: "Close",
              saveText: "Add",
              selectAllText: "Select all",
              deselectAllText: "Deselect all",
              messageContainerClass: "snb-modal-message",
              selectClassName: "selected-img",
              validations: {
                selectedImages: {
                  required: { message: "At least one image must be selected!" },
                },
              },
            };
          }),
          e
        );
      })();
    var W = (function () {
        function e(e, t) {
          void 0 === t && (t = []),
            (this.name = e),
            (this.summernoteGallery = null),
            (this.extensions = t);
        }
        return (
          (e.prototype.getPlugin = function () {
            var e = {},
              t = this;
            return (
              (e[this.name] = function (e) {
                (t.summernoteGallery = new U(t.name, t.extensions)),
                  t.summernoteGallery.init(e),
                  e.memo("button." + t.name, t.createButton()),
                  (this.events = {
                    "summernote.keyup": function (e, n) {
                      t.summernoteGallery.editor.saveLastFocusedElement();
                    },
                  }),
                  (this.initialize = function () {});
              }),
              e
            );
          }),
          (e.prototype.createButton = function () {
            return this.summernoteGallery.createButton();
          }),
          e
        );
      })(),
      G = function () {
        return (
          (G =
            Object.assign ||
            function (e) {
              for (var t, n = 1, r = arguments.length; n < r; n++)
                for (var o in (t = arguments[n]))
                  Object.prototype.hasOwnProperty.call(t, o) && (e[o] = t[o]);
              return e;
            }),
          G.apply(this, arguments)
        );
      },
      Z = new W("summernoteGallery", [
        new ((function () {
          function e() {
            this.name = "snbWhiteSpaceManager";
          }
          return (
            (e.prototype.onInit = function (e) {
              (this.linebreakManager = new o(e)),
                this.addStyleToDOM(),
                this.attachEventsToEditor(e);
            }),
            (e.prototype.addStyleToDOM = function () {
              var e,
                t = "snb-whitespace-extension-style",
                n =
                  ((e = {
                    styleIdentifier: t,
                    removableLineBreakClass:
                      this.linebreakManager.snbRemovableLineBreakClass,
                    removeLineBreakBtnClass:
                      this.linebreakManager.snbRemoveLineBreakBtnClass,
                  }),
                  (0, g.jsx)(
                    "style",
                    G(
                      { className: e.styleIdentifier },
                      {
                        children: "\n                ."
                          .concat(
                            e.removableLineBreakClass,
                            " {\n                    position: relative;\n                    border: 1px solid transparent;\n                    -webkit-transition: background .5s ease, border .5s ease;\n                    -moz-transition: background .5s ease, border .5s ease;\n                    -ms-transition: background .5s ease, border .5s ease;\n                    -o-transition: background .5s ease, border .5s ease;\n                    transition: background .5s ease, border .5s ease;\n                }\n                \n                ."
                          )
                          .concat(
                            e.removableLineBreakClass,
                            ":hover, \n                ."
                          )
                          .concat(
                            e.removableLineBreakClass,
                            ".highlighted {\n                    background-color: #fff8f8;\n                    border: 1px solid rgba(185, 1, 1, 0.03);\n                }\n                \n                ."
                          )
                          .concat(e.removableLineBreakClass, ":hover .")
                          .concat(
                            e.removeLineBreakBtnClass,
                            ":before {\n                    content: 'x';\n                    position: absolute;\n                    left: 0;\n                    width: 15px;\n                    height: 15px;\n                    top: 0;\n                    bottom: 0;\n                    margin: auto;\n                    cursor: pointer;\n                    background-color: #fe8282;\n                    color: #FFFFFF;\n                    display: flex;\n                    justify-content: center;\n                    align-items: center;\n                    font-size: 11px;\n                    border-radius: 4px;\n                }\n\n            "
                          ),
                      }
                    )
                  )),
                r = s(n)[0];
              0 == $(".".concat(t)).length && $("head").append(l(r));
            }),
            (e.prototype.attachEventsToEditor = function (e) {
              var t = this,
                n = e.editable[0];
              new MutationObserver(function (r) {
                r.forEach(function (r) {
                  var o = $(r.target),
                    a = 0 != $(r.addedNodes).filter("p").length;
                  "childList" === r.type &&
                    o.is(n) &&
                    a &&
                    t.checkLineBreaks(e),
                    "characterData" === r.type && t.checkLineBreaks(e);
                });
              }).observe(n, { subtree: !0, childList: !0, characterData: !0 }),
                $(e.editable).on(
                  "click",
                  ".".concat(this.linebreakManager.snbRemoveLineBreakBtnClass),
                  function () {
                    $(this)
                      .parent(
                        "p.".concat(
                          t.linebreakManager.snbRemovableLineBreakClass
                        )
                      )
                      .remove();
                  }
                );
            }),
            (e.prototype.checkLineBreaks = function (e) {
              var t = this;
              $(e.editable)
                .find("p")
                .each(function () {
                  var e = $(this);
                  t.linebreakManager.isLineBreak(e)
                    ? e.addClass(t.linebreakManager.snbRemovableLineBreakClass)
                    : e.removeClass(
                        t.linebreakManager.snbRemovableLineBreakClass
                      ),
                    t.linebreakManager.isLineBreak(e) &&
                    !t.linebreakManager.hasRemoveLineBreakBtn(e)
                      ? e.append(t.linebreakManager.createLinebreakRemoveBtn())
                      : !t.linebreakManager.isLineBreak(e) &&
                        t.linebreakManager.hasRemoveLineBreakBtn(e) &&
                        e
                          .find(
                            ".".concat(
                              t.linebreakManager.snbRemoveLineBreakBtnClass
                            )
                          )
                          .remove();
                });
            }),
            e
          );
        })())(),
      ]);
    $.extend($.summernote.plugins, Z.getPlugin());
  })();
})();
//# sourceMappingURL=snb-gallery-brick.min.js.map
