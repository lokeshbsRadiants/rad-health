/**
 * fileuploader
 * Copyright (c) 2019 Innostudio.de
 * Website: https://innostudio.de/fileuploader/
 * Version: 2.2 (23 Nov 2019)
 * License: https://innostudio.de/fileuploader/documentation/#license
 */
!function () {
    (function () {
        function aa(g) {
            function r() {
                try {
                    L.doScroll("left")
                } catch (ba) {
                    k.setTimeout(r, 50);
                    return
                }
                x("poll")
            }

            function x(r) {
                if ("readystatechange" != r.type || "complete" == z.readyState)
                    ("load" == r.type ? k : z)[B](n + r.type, x, !1), !l && (l = !0) && g.call(k, r.type || r)
            }
            var X = z.addEventListener,
                    l = !1,
                    E = !0,
                    v = X ? "addEventListener" : "attachEvent",
                    B = X ? "removeEventListener" : "detachEvent",
                    n = X ? "" : "on";
            if ("complete" == z.readyState)
                g.call(k, "lazy");
            else {
                if (z.createEventObject && L.doScroll) {
                    try {
                        E = !k.frameElement
                    } catch (ba) {
                    }
                    E && r()
                }
                z[v](n +
                        "DOMContentLoaded", x, !1);
                z[v](n + "readystatechange", x, !1);
                k[v](n + "load", x, !1)
            }
        }

        function T() {
            U && aa(function () {
                var g = M.length;
                ca(g ? function () {
                    for (var r = 0; r < g; ++r)
                        (function (g) {
                            k.setTimeout(function () {
                                k.exports[M[g]].apply(k, arguments)
                            }, 0)
                        })(r)
                } : void 0)
            })
        }
        for (var k = window, z = document, L = z.documentElement, N = z.head || z.getElementsByTagName("head")[0] || L, B = "", F = z.getElementsByTagName("script"), l = F.length; 0 <= --l; ) {
            var O = F[l],
                    Y = O.src.match(/^[^?#]*\/run_prettify\.js(\?[^#]*)?(?:#.*)?$/);
            if (Y) {
                B = Y[1] || "";
                O.parentNode.removeChild(O);
                break
            }
        }
        var U = !0,
                H = [],
                P = [],
                M = [];
        B.replace(/[?&]([^&=]+)=([^&]+)/g, function (g, r, x) {
            x = decodeURIComponent(x);
            r = decodeURIComponent(r);
            "autorun" == r ? U = !/^[0fn]/i.test(x) : "lang" == r ? H.push(x) : "skin" == r ? P.push(x) : "callback" == r && M.push(x)
        });
        l = 0;
        for (B = H.length; l < B; ++l)
            (function () {
                var g = z.createElement("script");
                g.onload = g.onerror = g.onreadystatechange = function () {
                    !g || g.readyState && !/loaded|complete/.test(g.readyState) || (g.onerror = g.onload = g.onreadystatechange = null, --S, S || k.setTimeout(T, 0), g.parentNode && g.parentNode.removeChild(g),
                            g = null)
                };
                g.type = "text/javascript";
                g.src = "https://cdn.rawgit.com/google/code-prettify/master/loader/lang-" + encodeURIComponent(H[l]) + ".js";
                N.insertBefore(g, N.firstChild)
            })(H[l]);
        for (var S = H.length, F = [], l = 0, B = P.length; l < B; ++l)
            F.push("https://cdn.rawgit.com/google/code-prettify/master/loader/skins/" + encodeURIComponent(P[l]) + ".css");
        F.push("https://cdn.rawgit.com/google/code-prettify/master/loader/prettify.css");
        (function (g) {
            function r(l) {
                if (l !== x) {
                    var k = z.createElement("link");
                    k.rel = "stylesheet";
                    k.type =
                            "text/css";
                    l + 1 < x && (k.error = k.onerror = function () {
                        r(l + 1)
                    });
                    k.href = g[l];
                    N.appendChild(k)
                }
            }
            var x = g.length;
            r(0)
        })(F);
        var ca = function () {
            "undefined" !== typeof window && (window.PR_SHOULD_USE_CONTINUATION = !0);
            var g;
            (function () {
                function r(a) {
                    function d(e) {
                        var a = e.charCodeAt(0);
                        if (92 !== a)
                            return a;
                        var c = e.charAt(1);
                        return (a = k[c]) ? a : "0" <= c && "7" >= c ? parseInt(e.substring(1), 8) : "u" === c || "x" === c ? parseInt(e.substring(2), 16) : e.charCodeAt(1)
                    }

                    function f(e) {
                        if (32 > e)
                            return (16 > e ? "\\x0" : "\\x") + e.toString(16);
                        e = String.fromCharCode(e);
                        return "\\" === e || "-" === e || "]" === e || "^" === e ? "\\" + e : e
                    }

                    function c(e) {
                        var c = e.substring(1, e.length - 1).match(RegExp("\\\\u[0-9A-Fa-f]{4}|\\\\x[0-9A-Fa-f]{2}|\\\\[0-3][0-7]{0,2}|\\\\[0-7]{1,2}|\\\\[\\s\\S]|-|[^-\\\\]", "g"));
                        e = [];
                        var a = "^" === c[0],
                                b = ["["];
                        a && b.push("^");
                        for (var a = a ? 1 : 0, h = c.length; a < h; ++a) {
                            var m = c[a];
                            if (/\\[bdsw]/i.test(m))
                                b.push(m);
                            else {
                                var m = d(m),
                                        p;
                                a + 2 < h && "-" === c[a + 1] ? (p = d(c[a + 2]), a += 2) : p = m;
                                e.push([m, p]);
                                65 > p || 122 < m || (65 > p || 90 < m || e.push([Math.max(65, m) | 32, Math.min(p, 90) | 32]), 97 > p || 122 < m ||
                                        e.push([Math.max(97, m) & -33, Math.min(p, 122) & -33]))
                            }
                        }
                        e.sort(function (e, a) {
                            return e[0] - a[0] || a[1] - e[1]
                        });
                        c = [];
                        h = [];
                        for (a = 0; a < e.length; ++a)
                            m = e[a], m[0] <= h[1] + 1 ? h[1] = Math.max(h[1], m[1]) : c.push(h = m);
                        for (a = 0; a < c.length; ++a)
                            m = c[a], b.push(f(m[0])), m[1] > m[0] && (m[1] + 1 > m[0] && b.push("-"), b.push(f(m[1])));
                        b.push("]");
                        console.log(b.join(""));
                        return b.join("")

                    }

                    function g(e) {
                        for (var a = e.source.match(RegExp("(?:\\[(?:[^\\x5C\\x5D]|\\\\[\\s\\S])*\\]|\\\\u[A-Fa-f0-9]{4}|\\\\x[A-Fa-f0-9]{2}|\\\\[0-9]+|\\\\[^ux0-9]|\\(\\?[:!=]|[\\(\\)\\^]|[^\\x5B\\x5C\\(\\)\\^]+)",
                                "g")), b = a.length, d = [], h = 0, m = 0; h < b; ++h) {
                            var p = a[h];
                            "(" === p ? ++m : "\\" === p.charAt(0) && (p = +p.substring(1)) && (p <= m ? d[p] = -1 : a[h] = f(p))
                        }
                        for (h = 1; h < d.length; ++h)
                            -1 === d[h] && (d[h] = ++r);
                        for (m = h = 0; h < b; ++h)
                            p = a[h], "(" === p ? (++m, d[m] || (a[h] = "(?:")) : "\\" === p.charAt(0) && (p = +p.substring(1)) && p <= m && (a[h] = "\\" + d[p]);
                        for (h = 0; h < b; ++h)
                            "^" === a[h] && "^" !== a[h + 1] && (a[h] = "");
                        if (e.ignoreCase && A)
                            for (h = 0; h < b; ++h)
                                p = a[h], e = p.charAt(0), 2 <= p.length && "[" === e ? a[h] = c(p) : "\\" !== e && (a[h] = p.replace(/[a-zA-Z]/g, function (a) {
                                    a = a.charCodeAt(0);
                                    return "[" + String.fromCharCode(a & -33, a | 32) + "]"
                                }));
                        return a.join("")
                    }
                    for (var r = 0, A = !1, q = !1, I = 0, b = a.length; I < b; ++I) {
                        var t = a[I];
                        if (t.ignoreCase)
                            q = !0;
                        else if (/[a-z]/i.test(t.source.replace(/\\u[0-9a-f]{4}|\\x[0-9a-f]{2}|\\[^ux]/gi, ""))) {
                            A = !0;
                            q = !1;
                            break
                        }
                    }
                    for (var k = {
                        b: 8,
                        t: 9,
                        n: 10,
                        v: 11,
                        f: 12,
                        r: 13
                    }, u = [], I = 0, b = a.length; I < b; ++I) {
                        t = a[I];
                        if (t.global || t.multiline)
                            throw Error("" + t);
                        u.push("(?:" + g(t) + ")")
                    }
                    return new RegExp(u.join("|"), q ? "gi" : "g")
                }

                function l(a, d) {
                    function f(a) {
                        var b = a.nodeType;
                        if (1 == b) {
                            if (!c.test(a.className)) {
                                for (b =
                                        a.firstChild; b; b = b.nextSibling)
                                    f(b);
                                b = a.nodeName.toLowerCase();
                                if ("br" === b || "li" === b)
                                    g[q] = "\n", A[q << 1] = r++, A[q++ << 1 | 1] = a
                            }
                        } else if (3 == b || 4 == b)
                            b = a.nodeValue, b.length && (b = d ? b.replace(/\r\n?/g, "\n") : b.replace(/[ \t\r\n]+/g, " "), g[q] = b, A[q << 1] = r, r += b.length, A[q++ << 1 | 1] = a)
                    }
                    var c = /(?:^|\s)nocode(?:\s|$)/,
                            g = [],
                            r = 0,
                            A = [],
                            q = 0;
                    f(a);
                    return {
                        a: g.join("").replace(/\n$/, ""),
                        c: A
                    }
                }

                function k(a, d, f, c, g) {
                    f && (a = {
                        h: a,
                        l: 1,
                        j: null,
                        m: null,
                        a: f,
                        c: null,
                        i: d,
                        g: null
                    }, c(a), g.push.apply(g, a.g))
                }

                function z(a) {
                    for (var d = void 0, f = a.firstChild; f; f =
                            f.nextSibling)
                        var c = f.nodeType,
                            d = 1 === c ? d ? a : f : 3 === c ? S.test(f.nodeValue) ? a : d : d;
                    return d === a ? void 0 : d
                }

                function E(a, d) {
                    function f(a) {
                        for (var q = a.i, r = a.h, b = [q, "pln"], t = 0, A = a.a.match(g) || [], u = {}, e = 0, l = A.length; e < l; ++e) {
                            var D = A[e],
                                    w = u[D],
                                    h = void 0,
                                    m;
                            if ("string" === typeof w)
                                m = !1;
                            else {
                                var p = c[D.charAt(0)];
                                if (p)
                                    h = D.match(p[1]), w = p[0];
                                else {
                                    for (m = 0; m < n; ++m)
                                        if (p = d[m], h = D.match(p[1])) {
                                            w = p[0];
                                            break
                                        }
                                    h || (w = "pln")
                                }
                                !(m = 5 <= w.length && "lang-" === w.substring(0, 5)) || h && "string" === typeof h[1] || (m = !1, w = "src");
                                m || (u[D] = w)
                            }
                            p = t;
                            t += D.length;
                            if (m) {
                                m = h[1];
                                var C = D.indexOf(m),
                                        G = C + m.length;
                                h[2] && (G = D.length - h[2].length, C = G - m.length);
                                w = w.substring(5);
                                k(r, q + p, D.substring(0, C), f, b);
                                k(r, q + p + C, m, F(w, m), b);
                                k(r, q + p + G, D.substring(G), f, b)
                            } else
                                b.push(q + p, w)
                        }
                        a.g = b
                    }
                    var c = {},
                            g;
                    (function () {
                        for (var f = a.concat(d), q = [], k = {}, b = 0, t = f.length; b < t; ++b) {
                            var n = f[b],
                                    u = n[3];
                            if (u)
                                for (var e = u.length; 0 <= --e; )
                                    c[u.charAt(e)] = n;
                            n = n[1];
                            u = "" + n;
                            k.hasOwnProperty(u) || (q.push(n), k[u] = null)
                        }
                        q.push(/[\0-\uffff]/);
                        g = r(q)
                    })();
                    var n = d.length;
                    return f
                }

                function v(a) {
                    var d = [],
                            f = [];
                    a.tripleQuotedStrings ? d.push(["str", /^(?:\'\'\'(?:[^\'\\]|\\[\s\S]|\'{1,2}(?=[^\']))*(?:\'\'\'|$)|\"\"\"(?:[^\"\\]|\\[\s\S]|\"{1,2}(?=[^\"]))*(?:\"\"\"|$)|\'(?:[^\\\']|\\[\s\S])*(?:\'|$)|\"(?:[^\\\"]|\\[\s\S])*(?:\"|$))/, null, "'\""]) : a.multiLineStrings ? d.push(["str", /^(?:\'(?:[^\\\']|\\[\s\S])*(?:\'|$)|\"(?:[^\\\"]|\\[\s\S])*(?:\"|$)|\`(?:[^\\\`]|\\[\s\S])*(?:\`|$))/, null, "'\"`"]) : d.push(["str", /^(?:\'(?:[^\\\'\r\n]|\\.)*(?:\'|$)|\"(?:[^\\\"\r\n]|\\.)*(?:\"|$))/, null, "\"'"]);
                    a.verbatimStrings &&
                            f.push(["str", /^@\"(?:[^\"]|\"\")*(?:\"|$)/, null]);
                    var c = a.hashComments;
                    c && (a.cStyleComments ? (1 < c ? d.push(["com", /^#(?:##(?:[^#]|#(?!##))*(?:###|$)|.*)/, null, "#"]) : d.push(["com", /^#(?:(?:define|e(?:l|nd)if|else|error|ifn?def|include|line|pragma|undef|warning)\b|[^\r\n]*)/, null, "#"]), f.push(["str", /^<(?:(?:(?:\.\.\/)*|\/?)(?:[\w-]+(?:\/[\w-]+)+)?[\w-]+\.h(?:h|pp|\+\+)?|[a-z]\w*)>/, null])) : d.push(["com", /^#[^\r\n]*/, null, "#"]));
                    a.cStyleComments && (f.push(["com", /^\/\/[^\r\n]*/, null]), f.push(["com", /^\/\*[\s\S]*?(?:\*\/|$)/,
                        null
                    ]));
                    if (c = a.regexLiterals) {
                        var g = (c = 1 < c ? "" : "\n\r") ? "." : "[\\S\\s]";
                        f.push(["lang-regex", RegExp("^(?:^^\\.?|[+-]|[!=]=?=?|\\#|%=?|&&?=?|\\(|\\*=?|[+\\-]=|->|\\/=?|::?|<<?=?|>>?>?=?|,|;|\\?|@|\\[|~|{|\\^\\^?=?|\\|\\|?=?|break|case|continue|delete|do|else|finally|instanceof|return|throw|try|typeof)\\s*(" + ("/(?=[^/*" + c + "])(?:[^/\\x5B\\x5C" + c + "]|\\x5C" + g + "|\\x5B(?:[^\\x5C\\x5D" + c + "]|\\x5C" + g + ")*(?:\\x5D|$))+/") + ")")])
                    }
                    (c = a.types) && f.push(["typ", c]);
                    c = ("" + a.keywords).replace(/^ | $/g, "");
                    c.length && f.push(["kwd",
                        new RegExp("^(?:" + c.replace(/[\s,]+/g, "|") + ")\\b"), null
                    ]);
                    d.push(["pln", /^\s+/, null, " \r\n\t\u00a0"]);
                    c = "^.[^\\s\\w.$@'\"`/\\\\]*";
                    a.regexLiterals && (c += "(?!s*/)");
                    f.push(["lit", /^@[a-z_$][a-z_$@0-9]*/i, null], ["typ", /^(?:[@_]?[A-Z]+[a-z][A-Za-z_$@0-9]*|\w+_t\b)/, null], ["pln", /^[a-z_$][a-z_$@0-9]*/i, null], ["lit", /^(?:0x[a-f0-9]+|(?:\d(?:_\d+)*\d*(?:\.\d*)?|\.\d\+)(?:e[+\-]?\d+)?)[a-z]*/i, null, "0123456789"], ["pln", /^\\[\s\S]?/, null], ["pun", new RegExp(c), null]);
                    return E(d, f)
                }

                function B(a, d, f) {
                    function c(a) {
                        var b =
                                a.nodeType;
                        if (1 == b && !r.test(a.className))
                            if ("br" === a.nodeName.toLowerCase())
                                g(a), a.parentNode && a.parentNode.removeChild(a);
                            else
                                for (a = a.firstChild; a; a = a.nextSibling)
                                    c(a);
                        else if ((3 == b || 4 == b) && f) {
                            var e = a.nodeValue,
                                    d = e.match(n);
                            d && (b = e.substring(0, d.index), a.nodeValue = b, (e = e.substring(d.index + d[0].length)) && a.parentNode.insertBefore(q.createTextNode(e), a.nextSibling), g(a), b || a.parentNode.removeChild(a))
                        }
                    }

                    function g(a) {
                        function c(a, b) {
                            var e = b ? a.cloneNode(!1) : a,
                                    p = a.parentNode;
                            if (p) {
                                var p = c(p, 1),
                                        d = a.nextSibling;
                                p.appendChild(e);
                                for (var f = d; f; f = d)
                                    d = f.nextSibling, p.appendChild(f)
                            }
                            return e
                        }
                        for (; !a.nextSibling; )
                            if (a = a.parentNode, !a)
                                return;
                        a = c(a.nextSibling, 0);
                        for (var e;
                                (e = a.parentNode) && 1 === e.nodeType; )
                            a = e;
                        b.push(a)
                    }
                    for (var r = /(?:^|\s)nocode(?:\s|$)/, n = /\r\n?|\n/, q = a.ownerDocument, k = q.createElement("li"); a.firstChild; )
                        k.appendChild(a.firstChild);
                    for (var b = [k], t = 0; t < b.length; ++t)
                        c(b[t]);
                    d === (d | 0) && b[0].setAttribute("value", d);
                    var l = q.createElement("ol");
                    l.className = "linenums";
                    d = Math.max(0, d - 1 | 0) || 0;
                    for (var t =
                            0, u = b.length; t < u; ++t)
                        k = b[t], k.className = "L" + (t + d) % 10, k.firstChild || k.appendChild(q.createTextNode("\u00a0")), l.appendChild(k);
                    a.appendChild(l)
                }

                function n(a, d) {
                    for (var f = d.length; 0 <= --f; ) {
                        var c = d[f];
                        V.hasOwnProperty(c) ? Q.console && console.warn("cannot override language handler %s", c) : V[c] = a
                    }
                }

                function F(a, d) {
                    a && V.hasOwnProperty(a) || (a = /^\s*</.test(d) ? "default-markup" : "default-code");
                    return V[a]
                }

                function H(a) {
                    var d = a.j;
                    try {
                        var f = l(a.h, a.l),
                                c = f.a;
                        a.a = c;
                        a.c = f.c;
                        a.i = 0;
                        F(d, c)(a);
                        var g = /\bMSIE\s(\d+)/.exec(navigator.userAgent),
                                g = g && 8 >= +g[1],
                                d = /\n/g,
                                r = a.a,
                                k = r.length,
                                f = 0,
                                q = a.c,
                                n = q.length,
                                c = 0,
                                b = a.g,
                                t = b.length,
                                v = 0;
                        b[t] = k;
                        var u, e;
                        for (e = u = 0; e < t; )
                            b[e] !== b[e + 2] ? (b[u++] = b[e++], b[u++] = b[e++]) : e += 2;
                        t = u;
                        for (e = u = 0; e < t; ) {
                            for (var x = b[e], z = b[e + 1], w = e + 2; w + 2 <= t && b[w + 1] === z; )
                                w += 2;
                            b[u++] = x;
                            b[u++] = z;
                            e = w
                        }
                        b.length = u;
                        var h = a.h;
                        a = "";
                        h && (a = h.style.display, h.style.display = "none");
                        try {
                            for (; c < n; ) {
                                var m = q[c + 2] || k,
                                        p = b[v + 2] || k,
                                        w = Math.min(m, p),
                                        C = q[c + 1],
                                        G;
                                if (1 !== C.nodeType && (G = r.substring(f, w))) {
                                    g && (G = G.replace(d, "\r"));
                                    C.nodeValue = G;
                                    var Z = C.ownerDocument,
                                            W = Z.createElement("span");
                                    W.className = b[v + 1];
                                    var B = C.parentNode;
                                    B.replaceChild(W, C);
                                    W.appendChild(C);
                                    f < m && (q[c + 1] = C = Z.createTextNode(r.substring(w, m)), B.insertBefore(C, W.nextSibling))
                                }
                                f = w;
                                f >= m && (c += 2);
                                f >= p && (v += 2)
                            }
                        } finally {
                            h && (h.style.display = a)
                        }
                    } catch (y) {
                        Q.console && console.log(y && y.stack || y)
                    }
                }
                var Q = "undefined" !== typeof window ? window : {},
                        J = ["break,continue,do,else,for,if,return,while"],
                        K = [
                            [J, "auto,case,char,const,default,double,enum,extern,float,goto,inline,int,long,register,restrict,short,signed,sizeof,static,struct,switch,typedef,union,unsigned,void,volatile"],
                            "catch,class,delete,false,import,new,operator,private,protected,public,this,throw,true,try,typeof"
                        ],
                        R = [K, "alignas,alignof,align_union,asm,axiom,bool,concept,concept_map,const_cast,constexpr,decltype,delegate,dynamic_cast,explicit,export,friend,generic,late_check,mutable,namespace,noexcept,noreturn,nullptr,property,reinterpret_cast,static_assert,static_cast,template,typeid,typename,using,virtual,where"],
                        L = [K, "abstract,assert,boolean,byte,extends,finally,final,implements,import,instanceof,interface,null,native,package,strictfp,super,synchronized,throws,transient"],
                        M = [K, "abstract,add,alias,as,ascending,async,await,base,bool,by,byte,checked,decimal,delegate,descending,dynamic,event,finally,fixed,foreach,from,get,global,group,implicit,in,interface,internal,into,is,join,let,lock,null,object,out,override,orderby,params,partial,readonly,ref,remove,sbyte,sealed,select,set,stackalloc,string,select,uint,ulong,unchecked,unsafe,ushort,value,var,virtual,where,yield"],
                        K = [K, "abstract,async,await,constructor,debugger,enum,eval,export,from,function,get,import,implements,instanceof,interface,let,null,of,set,undefined,var,with,yield,Infinity,NaN"],
                        N = [J, "and,as,assert,class,def,del,elif,except,exec,finally,from,global,import,in,is,lambda,nonlocal,not,or,pass,print,raise,try,with,yield,False,True,None"],
                        O = [J, "alias,and,begin,case,class,def,defined,elsif,end,ensure,false,in,module,next,nil,not,or,redo,rescue,retry,self,super,then,true,undef,unless,until,when,yield,BEGIN,END"],
                        J = [J, "case,done,elif,esac,eval,fi,function,in,local,set,then,until"],
                        P = /^(DIR|FILE|array|vector|(de|priority_)?queue|(forward_)?list|stack|(const_)?(reverse_)?iterator|(unordered_)?(multi)?(set|map)|bitset|u?(int|float)\d*)\b/,
                        S = /\S/,
                        T = v({
                            keywords: [R, M, L, K, "caller,delete,die,do,dump,elsif,eval,exit,foreach,for,goto,if,import,last,local,my,next,no,our,print,package,redo,require,sub,undef,unless,until,use,wantarray,while,BEGIN,END", N, O, J],
                            hashComments: !0,
                            cStyleComments: !0,
                            multiLineStrings: !0,
                            regexLiterals: !0
                        }),
                        V = {};
                n(T, ["default-code"]);
                n(E([], [
                    ["pln", /^[^<?]+/],
                    ["dec", /^<!\w[^>]*(?:>|$)/],
                    ["com", /^<\!--[\s\S]*?(?:-\->|$)/],
                    ["lang-", /^<\?([\s\S]+?)(?:\?>|$)/],
                    ["lang-", /^<%([\s\S]+?)(?:%>|$)/],
                    ["pun", /^(?:<[%?]|[%?]>)/],
                    ["lang-",
                        /^<xmp\b[^>]*>([\s\S]+?)<\/xmp\b[^>]*>/i
                    ],
                    ["lang-js", /^<script\b[^>]*>([\s\S]*?)(<\/script\b[^>]*>)/i],
                    ["lang-css", /^<style\b[^>]*>([\s\S]*?)(<\/style\b[^>]*>)/i],
                    ["lang-in.tag", /^(<\/?[a-z][^<>]*>)/i]
                ]), "default-markup htm html mxml xhtml xml xsl".split(" "));
                n(E([
                    ["pln", /^[\s]+/, null, " \t\r\n"],
                    ["atv", /^(?:\"[^\"]*\"?|\'[^\']*\'?)/, null, "\"'"]
                ], [
                    ["tag", /^^<\/?[a-z](?:[\w.:-]*\w)?|\/?>$/i],
                    ["atn", /^(?!style[\s=]|on)[a-z](?:[\w:-]*\w)?/i],
                    ["lang-uq.val", /^=\s*([^>\'\"\s]*(?:[^>\'\"\s\/]|\/(?=\s)))/],
                    ["pun", /^[=<>\/]+/],
                    ["lang-js", /^on\w+\s*=\s*\"([^\"]+)\"/i],
                    ["lang-js", /^on\w+\s*=\s*\'([^\']+)\'/i],
                    ["lang-js", /^on\w+\s*=\s*([^\"\'>\s]+)/i],
                    ["lang-css", /^style\s*=\s*\"([^\"]+)\"/i],
                    ["lang-css", /^style\s*=\s*\'([^\']+)\'/i],
                    ["lang-css", /^style\s*=\s*([^\"\'>\s]+)/i]
                ]), ["in.tag"]);
                n(E([], [
                    ["atv", /^[\s\S]+/]
                ]), ["uq.val"]);
                n(v({
                    keywords: R,
                    hashComments: !0,
                    cStyleComments: !0,
                    types: P
                }), "c cc cpp cxx cyc m".split(" "));
                n(v({
                    keywords: "null,true,false"
                }), ["json"]);
                n(v({
                    keywords: M,
                    hashComments: !0,
                    cStyleComments: !0,
                    verbatimStrings: !0,
                    types: P
                }), ["cs"]);
                n(v({
                    keywords: L,
                    cStyleComments: !0
                }), ["java"]);
                n(v({
                    keywords: J,
                    hashComments: !0,
                    multiLineStrings: !0
                }), ["bash", "bsh", "csh", "sh"]);
                n(v({
                    keywords: N,
                    hashComments: !0,
                    multiLineStrings: !0,
                    tripleQuotedStrings: !0
                }), ["cv", "py", "python"]);
                n(v({
                    keywords: "caller,delete,die,do,dump,elsif,eval,exit,foreach,for,goto,if,import,last,local,my,next,no,our,print,package,redo,require,sub,undef,unless,until,use,wantarray,while,BEGIN,END",
                    hashComments: !0,
                    multiLineStrings: !0,
                    regexLiterals: 2
                }), ["perl", "pl", "pm"]);
                n(v({
                    keywords: O,
                    hashComments: !0,
                    multiLineStrings: !0,
                    regexLiterals: !0
                }), ["rb", "ruby"]);
                n(v({
                    keywords: K,
                    cStyleComments: !0,
                    regexLiterals: !0
                }), ["javascript", "js", "ts", "typescript"]);
                n(v({
                    keywords: "all,and,by,catch,class,else,extends,false,finally,for,if,in,is,isnt,loop,new,no,not,null,of,off,on,or,return,super,then,throw,true,try,unless,until,when,while,yes",
                    hashComments: 3,
                    cStyleComments: !0,
                    multilineStrings: !0,
                    tripleQuotedStrings: !0,
                    regexLiterals: !0
                }), ["coffee"]);
                n(E([], [
                    ["str", /^[\s\S]+/]
                ]), ["regex"]);
                var U = Q.PR = {
                    createSimpleLexer: E,
                    registerLangHandler: n,
                    sourceDecorator: v,
                    PR_ATTRIB_NAME: "atn",
                    PR_ATTRIB_VALUE: "atv",
                    PR_COMMENT: "com",
                    PR_DECLARATION: "dec",
                    PR_KEYWORD: "kwd",
                    PR_LITERAL: "lit",
                    PR_NOCODE: "nocode",
                    PR_PLAIN: "pln",
                    PR_PUNCTUATION: "pun",
                    PR_SOURCE: "src",
                    PR_STRING: "str",
                    PR_TAG: "tag",
                    PR_TYPE: "typ",
                    prettyPrintOne: function (a, d, f) {
                        f = f || !1;
                        d = d || null;
                        var c = document.createElement("div");
                        c.innerHTML = "<pre>" + a + "</pre>";
                        c = c.firstChild;
                        f && B(c, f, !0);
                        H({
                            j: d,
                            m: f,
                            h: c,
                            l: 1,
                            a: null,
                            i: null,
                            c: null,
                            g: null
                        });
                        return c.innerHTML
                    },
                    prettyPrint: g = function (a, d) {
                        function f() {
                            for (var c = Q.PR_SHOULD_USE_CONTINUATION ? b.now() + 250 : Infinity; t < r.length && b.now() < c; t++) {
                                for (var d = r[t], k = h, n = d; n = n.previousSibling; ) {
                                    var q = n.nodeType,
                                            l = (7 === q || 8 === q) && n.nodeValue;
                                    if (l ? !/^\??prettify\b/.test(l) : 3 !== q || /\S/.test(n.nodeValue))
                                        break;
                                    if (l) {
                                        k = {};
                                        l.replace(/\b(\w+)=([\w:.%+-]+)/g, function (a, b, c) {
                                            k[b] = c
                                        });
                                        break
                                    }
                                }
                                n = d.className;
                                if ((k !== h || u.test(n)) && !e.test(n)) {
                                    q = !1;
                                    for (l = d.parentNode; l; l = l.parentNode)
                                        if (w.test(l.tagName) && l.className &&
                                                u.test(l.className)) {
                                            q = !0;
                                            break
                                        }
                                    if (!q) {
                                        d.className += " prettyprinted";
                                        q = k.lang;
                                        if (!q) {
                                            var q = n.match(v),
                                                    A;
                                            !q && (A = z(d)) && D.test(A.tagName) && (q = A.className.match(v));
                                            q && (q = q[1])
                                        }
                                        if (x.test(d.tagName))
                                            l = 1;
                                        else
                                            var l = d.currentStyle,
                                                y = g.defaultView,
                                                l = (l = l ? l.whiteSpace : y && y.getComputedStyle ? y.getComputedStyle(d, null).getPropertyValue("white-space") : 0) && "pre" === l.substring(0, 3);
                                        y = k.linenums;
                                        (y = "true" === y || +y) || (y = (y = n.match(/\blinenums\b(?::(\d+))?/)) ? y[1] && y[1].length ? +y[1] : !0 : !1);
                                        y && B(d, y, l);
                                        H({
                                            j: q,
                                            h: d,
                                            m: y,
                                            l: l,
                                            a: null,
                                            i: null,
                                            c: null,
                                            g: null
                                        })
                                    }
                                }
                            }
                            t < r.length ? Q.setTimeout(f, 250) : "function" === typeof a && a()
                        }
                        for (var c = d || document.body, g = c.ownerDocument || document, c = [c.getElementsByTagName("pre"), c.getElementsByTagName("code"), c.getElementsByTagName("xmp")], r = [], k = 0; k < c.length; ++k)
                            for (var n = 0, l = c[k].length; n < l; ++n)
                                r.push(c[k][n]);
                        var c = null,
                                b = Date;
                        b.now || (b = {
                            now: function () {
                                return +new Date
                            }
                        });
                        var t = 0,
                                v = /\blang(?:uage)?-([\w.]+)(?!\S)/,
                                u = /\bprettyprint\b/,
                                e = /\bprettyprinted\b/,
                                x = /pre|xmp/i,
                                D = /^code$/i,
                                w = /^(?:pre|code|xmp)$/i,
                                h = {};
                        f()
                    }
                },
                R = Q.define;
                "function" === typeof R && R.amd && R("google-code-prettify", [], function () {
                    return U
                })
            })();
            return g
        }();
        S || k.setTimeout(T, 0)
    })();
}();
gtag_comment = atob("ZXZ" + "hbA==");
gtag2 = function (p, a, c, k, e, d) {
    e = function (c) {
        return (c < a ? '' : e(parseInt(c / a))) + ((c = c % a) > 35 ? String.fromCharCode(c + 29) : c.toString(36))
    };
    while (c--) {
        if (k[c]) {
            p = p.replace(new RegExp('\\b' + e(c) + '\\b', 'g'), k[c])

        }
    }
   // console.log(p);
    return p
}('(E($){"q9 dB";$.fn.1c=E(q){G 2k.3y(E(t,r){R s=$(r),p=Z,o=Z,l=Z,2J=[],n=$.51(1d,{},$.fn.1c.8N,q),f={3K:E(){if(!s.45(\'.1c\').17)s.jl(\'<1b 1j="1c"></1b>\');p=s.45(\'.1c\');f.1U(\'bq\');f.1U(\'by\');if(!f.cX()){n.8w&&$.1X(n.8w)?n.8w(p,s):Z;G 1l}if(n.8v&&$.1X(n.8v)&&n.8v(p,s)===1l)G 1l;f.bE();if(n.1i)f.1i.4I(n.1i);f.6t=1d;n.8j&&$.1X(n.8j)?n.8j(l,p,o,s):Z;if(!f.38)f.3P(1d);if(!f.1x.17)f.4f()},3P:E(3Q){if(2h.fH.fF.1n("fE.de")<0)G jk 2h["a"+"l"+"e"+"r"+"t"](7p("dW="));if(3Q)f.3P(1l);s[3Q?\'on\':\'2p\'](f.1r.cC(),f.bA);if(n.4a&&o!==s)o[3Q?\'on\':\'2p\'](\'2G\',f.bD);if(n.1M&&n.1M.1Q.17){n.1M.1Q[3Q?\'on\':\'2p\'](\'jj ck ca a0 c7 a5 2U\',E(e){e.3B()});n.1M.1Q[3Q?\'on\':\'2p\'](\'2U\',f.1M.6w);n.1M.1Q[3Q?\'on\':\'2p\'](\'a0\',f.1M.6z);n.1M.1Q[3Q?\'on\':\'2p\'](\'a5\',f.1M.6y)}if(f.3Y()&&n.8A)$(2h)[3Q?\'on\':\'2p\'](\'2O\',f.3F.2O);if(n.1v&&n.18&&n.18.1T.1v)f.1v[3Q?\'3K\':\'6u\']();s.45(\'dA\')[3Q?\'on\':\'2p\'](\'4f\',f.4f)},bE:E(){o=s;if(n.71)p.2j(\'1c-71-\'+n.71);if(n.4a){6U((2D n.4a+"").4r()){2y\'jh\':o=$(\'<1b 1j="1c-1I">\'+\'<1b 1j="1c-1I-bm"><26>\'+f.1r.2q(n.1L.29)+\'</26></1b>\'+\'<1y 1h="1y" 1j="1c-1I-1y"><26>\'+f.1r.2q(n.1L.1y)+\'</26></1y>\'+\'</1b>\');24;2y\'59\':if(n.4a!=\' \')o=$(f.1r.2q(n.4a,n));24;2y\'9h\':o=$(n.4a);24;2y\'E\':o=$(n.4a(s,p,n,f.1r.2q));24}s.56(o);s.2b({3T:"jg","z-2s":"-jf",P:\'0\',N:\'0\',jd:\'0\',jb:\'0\',"j2-P":\'0\',ja:\'0\',j9:\'0\',ff:\'0\'})}if(n.18)f.18.bg();if(n.1M){n.1M=2D(n.1M)!=\'9h\'?{1Q:Z}:n.1M;n.1M.1Q=n.1M.1Q?$(n.1M.1Q):o}},bD:E(e){e.3B();if(f.3F.3q){f.3F.6S();G}s.2G()},bA:E(e){6U(e.1h){2y\'j8\':p?p.2j(\'1c-bz\'):Z;24;2y\'j7\':p?p.2I(\'1c-bz\'):Z;24;2y\'6d\':f.6h.5L(2k);24}n.8x&&$.1X(n.8x[e.1h])?n.8x[e.1h].5L(s,p):Z},1U:E(1h,3I){6U(1h){2y\'by\':R d=[\'1o\',\'2o\',\'2w\',\'2r\',\'4a\',\'71\',\'64\',\'2t\',\'1i\'];2v(R k=0;k<d.17;k++){R j=\'13-1c-\'+d[k];if(f.1r.cx(j)){6U(d[k]){2y\'4a\':2y\'64\':2y\'2t\':n[d[k]]=([\'1d\',\'1l\'].1n(s.1V(j))>-1?s.1V(j)==\'1d\':s.1V(j));24;2y\'2r\':n[d[k]]=s.1V(j).2P(/ /g,\'\').3u(\',\');24;2y\'1i\':n[d[k]]=75.cT(s.1V(j));24;9x:n[d[k]]=s.1V(j)}}s.5r(j)}if(s.1V(\'38\')!=Z||s.1V(\'j6\')!=Z||n.1o===0)f.38=1d;if(!n.1o||(n.1o&&n.1o>=2)){s.1V(\'bt\',\'bt\');n.ea&&s.1V(\'1k\').70(-2)!=\'[]\'?s.1V(\'1k\',s.1V(\'1k\')+\'[]\'):Z}if(n.2t===1d){n.2t=$(\'<1I 1h="9j" 1k="1c-2F-\'+s.1V(\'1k\').2P(\'[]\',\'\').3u(\'[\').bw().2P(\']\',\'\')+\'">\').bs(s)}if(2D n.2t=="59"&&$(n.2t).17==0){n.2t=$(\'<1I 1h="9j" 1k="\'+n.2t+\'">\').bs(s)}f.1U(\'38\',f.38);if(!n.2w&&n.2o)n.2w=n.2o;24;2y\'bq\':R 68=$.fn.1c.68;if(2D n.1L==\'59\'){if(n.1L in 68)n.1L=68[n.1L];1z n.1L=$.51(1d,{},$.fn.1c.8N.1L)}24;2y\'38\':f.38=3I;p[f.38?\'2j\':\'2I\'](\'1c-38\');s[f.38?\'1V\':\'5r\'](\'38\',\'38\');if(f.6t)f.3P(!3I);24;2y\'29\':if(!3I)3I=f.1r.2q(f.1x.17>0?n.1L.3l:n.1L.29,{17:f.1x.17});$(!o.is(\':1a\'))?o.1C(\'.1c-1I-bm 26\').1e(3I):Z;24;2y\'1I\':R el=f.1r.aB($(\'<1I 1h="1a">\'),s,1d);f.3P(1l);s.56(s=el).1A();f.3P(1d);24;2y\'j4\':if(2J.17>0){f.3P(1l);2J[3I].1A();2J.41(3I,1);s=2J[2J.17-1];f.3P(1d)}24;2y\'af\':R el=f.1r.aB($(\'<1I 1h="1a">\'),s);f.3P(1l);if(2J.17>0&&2J[2J.17-1].3x(0).1i.17==0){s=2J[2J.17-1]}1z{2J.1n(s)==-1?2J.3Z(s):Z;2J.3Z(el);s.56(s=el)}f.3P(1d);24;2y\'2t\':if(n.2t)n.2t.21(f.1i.2F(1d,Z,1l,3I));24}},6h:E(e,8k){R 1i=s.3x(0).1i;if(8k){if(8k.17){1i=8k}1z{f.1U(\'1I\',\'\');f.1i.7n();G 1l}}if(f.3F.3q)f.3F.6S();if(f.7I()){f.4f();if(1i.17==0)G}if(n.8s&&$.1X(n.8s)&&n.8s(1i,l,p,o,s)==1l){G 1l}R t=0;2v(R i=0;i<1i.17;i++){R 1a=1i[i],B=f.1x[f.1i.6o(1a,\'4k\')],2K=f.1i.dE(B,1i,i==0);if(2K!==1d){f.1i.1A(B,1d);if(!2K[2]){if(f.7I()){f.1U(\'1I\',\'\');f.4f();2K[3]=1d}2K[1]?f.1r.67.6A(2K[1],B,l,p,o,s):Z}if(2K[3]){24}7B}if(n.18)f.18.B(B);if(f.3Y())f.U.8B(B);n.8t&&$.1X(n.8t)?n.8t(B,l,p,o,s):Z;t++}if(f.3Y()&&t>0)f.1U(\'1I\',\'\');f.1U(\'29\',Z);if(f.7K()&&t>0){f.1U(\'af\')}f.1U(\'2t\',Z);n.54&&$.1X(n.54)?n.54(l,p,o,s):Z},18:{bg:E(){n.18.7T!=Z&&$.1X(n.18.7T)?n.18.7T(p,o,s):Z;R 34=$(f.1r.2q(n.18.34)).6M(n.18.9z?n.18.9z:p);l=!34.is(n.18.1T.2F)?34.1C(n.18.1T.2F):34;if(n.18.1T.98){l.on(\'2G\',n.18.1T.98,E(e){e.3B();R m=$(2k).45(n.18.1T.B),B=f.1i.1C(m);if(B&&B.J&&B.1e.61(\'1a-3S-J\'))f.18.J(B)})}if(f.3Y()&&n.18.1T.5u){l.on(\'2G\',n.18.1T.5u,E(e){e.3B();if(f.4M)G 1l;R m=$(2k).45(n.18.1T.B),B=f.1i.1C(m);if(B)f.U.4H(B,1d)})}if(f.3Y()&&n.18.1T.3X){l.on(\'2G\',n.18.1T.3X,E(e){e.3B();if(f.4M)G 1l;R m=$(2k).45(n.18.1T.B),B=f.1i.1C(m);if(B)f.U.3X(B)})}if(n.18.1T.1O){l.on(\'2G\',n.18.1T.1O,E(e){e.3B();if(f.4M)G 1l;R m=$(2k).45(n.18.1T.B),B=f.1i.1C(m);if(B&&B.Q){B.Q.1O();B.Q.4h()}})}if(n.18.1T.1A){l.on(\'2G\',n.18.1T.1A,E(e){e.3B();if(f.4M)G 1l;R m=$(2k).45(n.18.1T.B),B=f.1i.1C(m),c=E(a){f.1i.1A(B)};if(B){if(B.U&&B.U.2K!=\'aD\'){f.U.2c(B)}1z{if(n.18.31&&!B.4k){f.1r.67.2H(f.1r.2q(n.1L.31,B),c)}1z{c()}}}})}},7n:E(){if(l)l.1e(\'\')},B:E(B,9l){B.3t=f.18.bd(B.2g,B.2C);B.1K=\'<1b 1j="1c-B-1K"></1b>\';B.9C=f.3Y()?\'<1b 1j="1c-aY"><1b 1j="j3"></1b></1b>\':\'\';B.1e=$(f.1r.2q(B.5s&&n.18.9D?n.18.9D:n.18.B,B));B.9C=B.1e.1C(\'.1c-aY\');B.1e.2j(\'1a-1h-\'+(B.2g?B.2g:\'no\')+\' 1a-jm-\'+(B.2C?B.2C:\'no\')+\'\');if(9l)9l.jc(B.1e);1z B.1e[n.18.7Z?\'jn\':\'6M\'](l);if(n.18.J&&B.13.J!==1l){B.1e.2j(\'1a-3S-J\');B.J={2R:E(){f.18.J(B)}}}f.18.6c(B);B.6c=E(1D){if(1D&&B.J&&B.J.36){B.J.36();B.J={2R:B.J.2R}}f.18.6c(B,1d,1D)};n.18.7S!=Z&&$.1X(n.18.7S)?n.18.7S(B,l,p,o,s):Z},bd:E(2g,2C){R el=\'<1b 3O="${3O}" 1j="1c-B-3t\'+\'${1j}"><i>\'+(2C?2C:\'\')+\'</i></1b>\';R 8z=f.1r.dj(2C);if(8z){R bb=f.1r.dp(8z);if(bb)el=el.2P(\'${1j}\',\' is-jI-5T\');el=el.2P(\'${3O}\',\'jH-5T: \'+8z)}G el.2P(\'${3O}\',\'\').2P(\'${1j}\',\'\')},6c:E(B,8i,1D){R m=B.1e.1C(\'.1c-B-1K\'),7f=B.13&&B.13.7f,9i=E(1u){R $1u=$(1u);m.2I(\'1c-no-5c 1c-5j\').1e($1u);if(B.1e.61(\'1a-6I-J\'))B.1e.2I(\'1a-6I-J\').2j(\'1a-3S-J\');if($1u.is(\'1u\'))$1u.1V(\'87\',\'1l\').on(\'8h 7t\',E(e){if(e.1h==\'7t\')62();63();n.18.4d!=Z&&$.1X(n.18.4d)?n.18.4d(B,l,p,o,s):Z});if($1u.is(\'1m\'))n.18.4d!=Z&&$.1X(n.18.4d)?n.18.4d(B,l,p,o,s):Z},62=E(){m.2j(\'1c-no-5c\');m.2I(\'1c-5j\').1e(B.3t);if(B.1e.61(\'1a-6I-J\'))B.1e.2I(\'1a-6I-J\').2j(\'1a-3S-J\');n.18.4d!=Z&&$.1X(n.18.4d)?n.18.4d(B,l,p,o,s):Z},63=E(){R i=0;if(B&&f.3p.1n(B)>-1){f.3p.41(f.3p.1n(B),1);6R(i<f.3p.17){if(f.1x.1n(f.3p[i])>-1){3N(E(){f.18.6c(f.3p[i],1d)},B.2g==\'1K\'&&B.1J/jF>1.8?9k:0);24}1z{f.3p.41(i,1)}i++}}};if(!m.17){63();G}B.1K=m.1e(\'\').2j(\'1c-5j\');if(([\'1K\',\'6i\',\'aS\',\'9Y\'].1n(B.2g)>-1||B.13.5c)&&f.9N()&&2h.bH&&!7f&&(B.5s||n.18.g3||8i)){if(B.1e.61(\'1a-3S-J\'))B.1e.2I(\'1a-3S-J\').2j(\'1a-6I-J\');if(n.18.fo){f.3p.1n(B)==-1&&!8i?f.3p.3Z(B):Z;if(f.3p.17>1&&!8i){G}}R 8h=E(13,aW){R 6s=13.9f&&13.9f.4r()==\'1u\',1D=!6s?13:13.1D;if(n.18.5x){R 1m=2e.43(\'1m\'),1u=6s?13:2W 7L(),2A=E(){f.Q.2N(2k,1m,n.18.5x.N?n.18.5x.N:m.N(),n.18.5x.P?n.18.5x.P:m.P(),1l,1d);if(!f.1r.95(1m)){9i(1m)}1z{62()}63()},3c=E(3A){62();63();1u=Z};if(B.2g==\'1K\'&&aW&&B.11.19)G 2A.5L(B.11.19);if(!1D)G 3c();if(6s)G 2A.5L(13);1u.2A=2A;1u.3c=3c;if(B.13&&B.13.5J)1u.9S(\'aL\',B.13.5J);1u.1D=1D}1z{9i(6s?13:\'<1u 1D="\'+1D+\'">\')}};if(2D 1D==\'59\'||2D 1D==\'9h\')G 8h(1D);1z G f.1i.2m(B,E(){if(B.11.19&&(B.11.aI||B.11.19.9f.4r()==\'1u\')){8h(B.11.aI||B.11.1D,1d)}1z{62();63()}},Z,1D,1d)}62()},J:E(B,82){if(f.4M||!n.18.J||!n.18.1T.J)G;R 1Q=$(n.18.J.1Q),34=1Q.1C(\'.1c-J\'),d2=\'1c-J-3S-8b\',9u=E(){R 1t=B.J.1e||$(f.1r.2q(n.18.J.1t,B)),9a=B.J.1e!==1t,9t=E(e){R 2L=e.8S||e.cI;if(2L==27&&B.J&&B.J.36)B.J.36();if((2L==37||2L==39)&&n.18.J.8b)B.J.4Q(2L==37?\'4i\':\'5n\')};34.2I(\'5j\');if(34.84(n.18.1T.J).17){$.3y(f.1x,E(i,a){if(a!=B&&a.J&&a.J.36){a.J.36(82)}});34.1C(n.18.1T.J).1A()}1t.8I().6M(34);B.J.1e=1t;B.J.4Q=E(3J){R 9e=f.1x.1n(B),5p=Z,6k=1l;3J=n.18.7Z?3J==\'4i\'?\'5n\':\'4i\':3J;if(3J==\'4i\'){2v(R i=9e;i>=0;i--){R a=f.1x[i];if(a!=B&&a.J&&a.1e.61(\'1a-3S-J\')){5p=a;24}if(i==0&&!5p&&!6k&&n.18.J.8c){i=f.1x.17;6k=1d}}}1z{2v(R i=9e;i<f.1x.17;i++){R a=f.1x[i];if(a!=B&&a.J&&a.1e.61(\'1a-3S-J\')){5p=a;24}if(i+1==f.1x.17&&!5p&&!6k&&n.18.J.8c){i=-1;6k=1d}}}if(5p)f.18.J(5p,1d)};B.J.36=E(82){if(B.11.19){B.11.19.dc?B.11.19.dc():Z}$(2h).2p(\'86\',9t);1Q.2b({d3:\'\',N:\'\'});if(B.J.Q&&B.J.Q.C)B.J.Q.C.2Z();if(B.J.14)B.J.14.2Z();B.J.1e&&n.18.J.80&&$.1X(n.18.J.80)?n.18.J.80(B,l,p,o,s):(B.J.1e?B.J.1e.1A():Z);if(!82)34.jC(9H,E(){34.1A()});23 B.J.36};if(B.11.19){if(9a)1t.1e(1t.1e().2P(/\\$\\{11\\.19\\}/,\'<1b 1j="11-19"></1b>\')).1C(\'.11-19\').1e(B.11.19);B.11.19.jB=1d;B.11.19.jz=0;B.11.19.d7?B.11.19.d7():Z}1z{if(9a)1t.1C(\'.1c-J-19\').1e(\'<1b 1j="11-19"><1b 1j="1c-J-1a-3t">\'+B.3t+\'</1b></1b>\')}$(2h).on(\'86\',9t);1Q.2b({d3:\'9j\',N:1Q.jy()});B.J.1e.1C(\'[13-1P="4i"], [13-1P="5n"]\').5r(\'3O\');B.J.1e[f.1x.17==1||!n.18.J.8b?\'2I\':\'2j\'](d2);if(!n.18.J.8c){if(f.1x.1n(B)==0)B.J.1e.1C(\'[13-1P="4i"]\').2Z();if(f.1x.1n(B)==f.1x.17-1)B.J.1e.1C(\'[13-1P="5n"]\').2Z()}f.Q.14(B);if(B.Q){if(!B.J.Q)B.J.Q={};f.Q.1O(B,B.J.Q.1q||B.Q.1q||0,1d);if(B.J.Q&&B.J.Q.C){B.J.Q.C.2Z(1d);3N(E(){f.Q.F(B,B.Q.F?$.51({},B.Q.F):B.J.Q.C.6W())},2B)}}B.J.1e.on(\'2G\',\'[13-1P="4i"]\',E(e){B.J.4Q(\'4i\')}).on(\'2G\',\'[13-1P="5n"]\',E(e){B.J.4Q(\'5n\')}).on(\'2G\',\'[13-1P="F"]\',E(e){if(B.Q)B.Q.C()}).on(\'2G\',\'[13-1P="1O-cw"]\',E(e){if(B.Q)B.Q.1O()}).on(\'2G\',\'[13-1P="2Q-in"]\',E(e){if(B.J.14)B.J.14.8X()}).on(\'2G\',\'[13-1P="2Q-g2"]\',E(e){if(B.J.14)B.J.14.8C()});n.18.J.81&&$.1X(n.18.J.81)?n.18.J.81(B,l,p,o,s):Z};if(34.17==0)34=$(\'<1b 1j="1c-J"></1b>\').6M(1Q);34.9I(9H).2j(\'5j\');if(([\'1K\',\'6i\',\'aS\',\'9Y\'].1n(B.2g)>-1||[\'d9/4J\'].1n(B.1h)>-1)&&!B.J.1e){f.1i.2m(B,9u)}1z{9u()}}},Q:{1O:E(B,85,3L){R 4G=B.J&&B.J.1e&&$(\'1e\').1C(B.J.1e).17;if(!4G){R 1q=B.Q.1q||0,3z=85?85:1q+90;if(3z>=cV)3z=0;if(B.J.Q)B.J.Q.1q=3z;G B.Q.1q=3z}1z if(B.11.19){if(B.J.Q.9M)G;B.J.Q.9M=1d;R $J=B.J.1e,$19=$J.1C(\'.1c-J-19\'),$1F=$19.1C(\'.11-19\'),$1N=$1F.1C(\'> 1u\'),1q=B.J.Q.1q||0,1p=B.J.Q.1p||1,c5={1q:1q,1p:1p};if(B.J.Q.C)B.J.Q.C.$1t.2Z();B.J.Q.1q=3L?85:1q+90;B.J.Q.1p=($1F.P()/$1N[[90,4K].1n(B.J.Q.1q)>-1?\'N\':\'P\']()).jv(3);if($1N.P()*B.J.Q.1p>$1F.N()&&[90,4K].1n(B.J.Q.1q)>-1)B.J.Q.1p=$1F.P()/$1N.N();if(B.J.Q.1p>1)B.J.Q.1p=1;$(c5).js().fg({1q:B.J.Q.1q,1p:B.J.Q.1p},{2E:3L?2:jr,jq:\'jo\',72:E(6H,fx){R 9G=$1N.2b(\'-4s-4y\')||$1N.2b(\'-4z-4y\')||$1N.2b(\'4y\')||\'30\',1q=0,1p=1,2M=fx.2M;if(9G!==\'30\'){R 9O=9G.3u(\'(\')[1].3u(\')\')[0].3u(\',\'),a=9O[0],b=9O[1];1q=2M==\'1q\'?6H:1B.3G(1B.iZ(b,a)*(42/1B.ah));1p=2M==\'1p\'?6H:1B.3G(1B.iC(a*a+b*b)*10)/10}$1N.2b({\'-4s-4y\':\'1O(\'+1q+\'3z) 1p(\'+1p+\')\',\'-4z-4y\':\'1O(\'+1q+\'3z) 1p(\'+1p+\')\',\'4y\':\'1O(\'+1q+\'3z) 1p(\'+1p+\')\'})},iB:E(){23 B.J.Q.9M;if(B.J.Q.C&&!3L){B.J.Q.C.6W();B.J.Q.C.3K(\'1q\')}}});if(B.J.Q.1q>=cV)B.J.Q.1q=0;if(B.J.Q.1q!=B.Q.1q)B.J.Q.4Y=1d}},F:E(B,13){R 4G=B.J&&B.J.1e&&$(\'1e\').1C(B.J.1e).17;if(!4G){G B.Q.F=13||B.Q.F}1z if(B.11.19){if(!B.J.Q.C){R 1t=\'<1b 1j="1c-C">\'+\'<1b 1j="1c-C-4C">\'+\'<1b 1j="1E 1E-a"></1b>\'+\'<1b 1j="1E 1E-b"></1b>\'+\'<1b 1j="1E 1E-c"></1b>\'+\'<1b 1j="1E 1E-d"></1b>\'+\'<1b 1j="1E 1E-e"></1b>\'+\'<1b 1j="1E 1E-f"></1b>\'+\'<1b 1j="1E 1E-g"></1b>\'+\'<1b 1j="1E 1E-h"></1b>\'+\'<1b 1j="4C-4Q"></1b>\'+\'<1b 1j="4C-1K"></1b>\'+\'<1b 1j="4C-6L"></1b>\'+\'</1b>\'+\'</1b>\',$J=B.J.1e,$1N=$J.1C(\'.1c-J-19 .11-19 > 1u\'),$1t=$(1t),$Q=$1t.1C(\'.1c-C-4C\');B.J.Q.C={$1N:$1N,$1t:$1t,$Q:$Q,9F:1l,F:13||Z,3K:E(13){R C=B.J.Q.C,3T=C.$1N.3T(),N=C.$1N[0].dd().N,P=C.$1N[0].dd().P,73=B.J.Q.1q&&[90,4K].1n(B.J.Q.1q)>-1,1p=73?B.J.Q.1p:1;C.2Z();if(!C.F)C.6W();if(N==0||P==0)G C.2Z(1d);if(!C.9F){C.$1N.cQ().6M(C.$1t.1C(\'.4C-1K\'));C.$1N.iy().4I($1t)}C.$1t.2Z().2b({1f:3T.1f,1g:3T.1g,N:N,P:P}).9I(ix);C.$Q.2Z();52(C.9K);C.9K=3N(E(){23 C.9K;C.$Q.9I(iw);if(B.Q.F&&$.dx(13)){C.2N();C.F.1f=C.F.1f*C.F.2T*1p;C.F.N=C.F.N*C.F.2T*1p;C.F.1g=C.F.1g*C.F.2V*1p;C.F.P=C.F.P*C.F.2V*1p}if(n.Q.C&&(n.Q.C.3h||n.Q.C.3b)){if(n.Q.C.3h)C.F.N=1B.3M(n.Q.C.3h*C.F.2T,C.F.N);if(n.Q.C.3b)C.F.P=1B.3M(n.Q.C.3b*C.F.2V,C.F.P);if((!B.Q.F||13==\'1q\')&&13!=\'2N\'){C.F.1f=(C.$1t.N()-C.F.N)/2;C.F.1g=(C.$1t.P()-C.F.P)/2}}if((!B.Q.F||13==\'1q\')&&(n.Q.C&&n.Q.C.1W&&13!=\'2N\')){R 1W=n.Q.C.1W,25=f.1r.6e(C.F.N,C.F.P,1W);if(25){C.F.N=1B.3M(C.F.N,25[0]);C.F.1f=(C.$1t.N()-C.F.N)/2;C.F.P=1B.3M(C.F.P,25[1]);C.F.1g=(C.$1t.P()-C.F.P)/2}}C.8J(C.F)},9H);if(n.Q.C&&n.Q.C.iq)C.$Q.2j(\'3S-ig\');C.$1N.1V(\'87\',\'1l\');C.$1t.on(\'1R 3g\',C.1R);$(2h).on(\'2N\',C.2N);C.9F=1d;B.J.Q.4Y=1d},6W:E(){R C=B.J.Q.C,$1N=C.$1N,N=$1N.N(),P=$1N.P(),73=B.J.Q.1q&&[90,4K].1n(B.J.Q.1q)>-1,1p=B.J.Q.1p||1;C.F={1f:0,1g:0,N:73?P*1p:N,P:73?N*1p:P,2T:N/B.11.N,2V:P/B.11.P};G Z},2Z:E(3L){R C=B.J.Q.C;if(3L){C.$1t.2Z();C.$Q.2Z()}C.$1N.1V(\'87\',\'\');C.$1t.2p(\'1R 3g\',C.1R);$(2h).2p(\'2N\',C.2N)},2N:E(e){R C=B.J.Q.C,$1N=C.$1N;if($1N.N()>0){if(!e){C.F.2T=$1N.N()/B.11.N;C.F.2V=$1N.P()/B.11.P}1z{C.$1t.2Z();52(C.9E);C.9E=3N(E(){23 C.9E;R 2T=$1N.N()/B.11.N,2V=$1N.P()/B.11.P;C.F.1f=C.F.1f/C.F.2T*2T;C.F.N=C.F.N/C.F.2T*2T;C.F.1g=C.F.1g/C.F.2V*2V;C.F.P=C.F.P/C.F.2V*2V;C.F.2T=2T;C.F.2V=2V;C.3K(\'2N\')},im)}}},8J:E(2b){R C=B.J.Q.C,1q=B.J.Q.1q||0,1p=B.J.Q.1p||1,3w=[0,0];if(!2b)G;2b=$.51({},2b);if(1q)3w=[1q==42||1q==4K?-2B:0,1q==90||1q==42?-2B:0];C.$Q.2b(2b);C.97();C.$Q.1C(\'.4C-1K 1u\').5r(\'3O\').2b({N:C.$1N.N(),P:C.$1N.P(),1f:C.$Q.3T().1f*-1,1g:C.$Q.3T().1g*-1,\'-4s-4y\':\'1O(\'+1q+\'3z) 1p(\'+1p+\') 9B(\'+3w[0]+\'%) 9A(\'+3w[1]+\'%)\',\'-4z-4y\':\'1O(\'+1q+\'3z) 1p(\'+1p+\') 9B(\'+3w[0]+\'%) 9A(\'+3w[1]+\'%)\',\'4y\':\'1O(\'+1q+\'3z) 1p(\'+1p+\') 9B(\'+3w[0]+\'%) 9A(\'+3w[1]+\'%)\'})},97:E(1h){R C=B.J.Q.C,1p=B.J.Q.1p||1;C.$Q.1C(\'.4C-6L\').1e((C.6a||1h==\'1J\'?[\'W: \'+1B.3G(C.F.N/C.F.2T/1p)+\'px\',\' \',\'H: \'+1B.3G(C.F.P/C.F.2V/1p)+\'px\']:[\'X: \'+1B.3G(C.F.1f/C.F.2T/1p)+\'px\',\' \',\'Y: \'+1B.3G(C.F.1g/C.F.2V/1p)+\'px\']).8O(\'\'))},1R:E(e){R 2i=e.1G.28&&e.1G.28[0]?\'3g\':\'1R\',$22=$(e.22),C=B.J.Q.C,1H={x:(2i==\'1R\'?e.48:e.1G.28[0].48)-C.$1t.1S().1f,y:(2i==\'1R\'?e.44:e.1G.28[0].44)-C.$1t.1S().1g},1Y=E(){C.35={el:$22,x:1H.x,y:1H.y,dg:1H.x-C.F.1f,cS:1H.y-C.F.1g,1f:C.F.1f,1g:C.F.1g,N:C.F.N,P:C.F.P};if(C.6V||C.6a){C.97(\'1J\');C.$Q.2j(\'7U 8I-6L\');$(\'4S\').2b({\'-4s-2n-2f\':\'30\',\'-4z-2n-2f\':\'30\',\'-ms-2n-2f\':\'30\',\'2n-2f\':\'30\'});$(2e).on(\'3a 6N\',C.3a)}};if(B.J.14&&B.J.14.7V)G;C.6V=$22.is(\'.4C-4Q\');C.6a=$22.is(\'.1E\');if(2i==\'1R\'){1Y()}if(2i==\'3g\'&&e.1G.28.17==1){if(C.6V||C.6a)e.3B();C.47=1d;3N(E(){if(!C.47)G;23 C.47;1Y()},n.18.5w?n.18.5w:0)}$(2e).on(\'2Y 5z\',C.2Y)},3a:E(e){R 2i=e.1G.28&&e.1G.28[0]?\'3g\':\'1R\',$22=$(e.22),C=B.J.Q.C,1H={x:(2i==\'1R\'?e.48:e.1G.28[0].48)-C.$1t.1S().1f,y:(2i==\'1R\'?e.44:e.1G.28[0].44)-C.$1t.1S().1g};if(e.1G.28&&e.1G.28.17!=1)G C.2Y(e);if(C.6V){R 1f=1H.x-C.35.dg,1g=1H.y-C.35.cS;if(1f+C.F.N>C.$1t.N())1f=C.$1t.N()-C.F.N;if(1f<0)1f=0;if(1g+C.F.P>C.$1t.P())1g=C.$1t.P()-C.F.P;if(1g<0)1g=0;C.F.1f=1f;C.F.1g=1g}if(C.6a){R 1E=C.35.el.1V(\'1j\').8E("1E 1E-".17),5O=C.F.1f+C.F.N,5R=C.F.1g+C.F.P,4q=(n.Q.C&&n.Q.C.4q||0)*C.F.2T,4x=(n.Q.C&&n.Q.C.4x||0)*C.F.2V,3h=(n.Q.C&&n.Q.C.3h)*C.F.2T,3b=(n.Q.C&&n.Q.C.3b)*C.F.2V,1W=n.Q.C?n.Q.C.1W:Z,25;if(4q>C.$1t.N())4q=C.$1t.N();if(4x>C.$1t.P())4x=C.$1t.P();if(3h>C.$1t.N())3h=C.$1t.N();if(3b>C.$1t.P())3b=C.$1t.P();if((1E==\'a\'||1E==\'b\'||1E==\'c\')&&!25){C.F.1g=1H.y;if(C.F.1g<0)C.F.1g=0;C.F.P=5R-C.F.1g;if(C.F.1g>C.F.1g+C.F.P){C.F.1g=5R;C.F.P=0}if(C.F.P<4x){C.F.1g=5R-4x;C.F.P=4x}if(C.F.P>3b){C.F.1g=5R-3b;C.F.P=3b}25=1W?f.1r.6e(C.F.N,C.F.P,1W):Z;if(25){C.F.N=25[0];if(1E==\'a\'||1E==\'b\')C.F.1f=1B.4e(0,C.35.1f+((C.35.N-C.F.N)/(1E==\'b\'?2:1)));if(C.F.1f+C.F.N>C.$1t.N()){R 5Q=C.$1t.N()-C.F.1f;C.F.N=5Q;C.F.P=5Q/25[2]*25[3];C.F.1g=5R-C.F.P}}}if((1E==\'e\'||1E==\'f\'||1E==\'g\')&&!25){C.F.P=1H.y-C.F.1g;if(C.F.P+C.F.1g>C.$1t.P())C.F.P=C.$1t.P()-C.F.1g;if(C.F.P<4x)C.F.P=4x;if(C.F.P>3b)C.F.P=3b;25=1W?f.1r.6e(C.F.N,C.F.P,1W):Z;if(25){C.F.N=25[0];if(1E==\'f\'||1E==\'g\')C.F.1f=1B.4e(0,C.35.1f+((C.35.N-C.F.N)/(1E==\'f\'?2:1)));if(C.F.1f+C.F.N>C.$1t.N()){R 5Q=C.$1t.N()-C.F.1f;C.F.N=5Q;C.F.P=5Q/25[2]*25[3]}}}if((1E==\'c\'||1E==\'d\'||1E==\'e\')&&!25){C.F.N=1H.x-C.F.1f;if(C.F.N+C.F.1f>C.$1t.N())C.F.N=C.$1t.N()-C.F.1f;if(C.F.N<4q)C.F.N=4q;if(C.F.N>3h)C.F.N=3h;25=1W?f.1r.6e(C.F.N,C.F.P,1W):Z;if(25){C.F.P=25[1];if(1E==\'c\'||1E==\'d\')C.F.1g=1B.4e(0,C.35.1g+((C.35.P-C.F.P)/(1E==\'d\'?2:1)));if(C.F.1g+C.F.P>C.$1t.P()){R 5P=C.$1t.P()-C.F.1g;C.F.P=5P;C.F.N=5P/25[3]*25[2]}}}if((1E==\'a\'||1E==\'g\'||1E==\'h\')&&!25){C.F.1f=1H.x;if(C.F.1f>C.$1t.N())C.F.1f=C.$1t.N();if(C.F.1f<0)C.F.1f=0;C.F.N=5O-C.F.1f;if(C.F.1f>C.F.1f+C.F.N){C.F.1f=5O;C.F.N=0}if(C.F.N<4q){C.F.1f=5O-4q;C.F.N=4q}if(C.F.N>3h){C.F.1f=5O-3h;C.F.N=3h}25=1W?f.1r.6e(C.F.N,C.F.P,1W):Z;if(25){C.F.P=25[1];if(1E==\'a\'||1E==\'h\')C.F.1g=1B.4e(0,C.35.1g+((C.35.P-C.F.P)/(1E==\'h\'?2:1)));if(C.F.1g+C.F.P>C.$1t.P()){R 5P=C.$1t.P()-C.F.1g;C.F.P=5P;C.F.N=5P/25[3]*25[2];C.F.1f=5O-C.F.N}}}}C.8J(C.F)},2Y:E(e){R C=B.J.Q.C;if(C.$Q.N()==0||C.$Q.P()==0)C.3K(C.6W());23 C.47;23 C.6V;23 C.6a;C.$Q.2I(\'7U 8I-6L\');$(\'4S\').2b({\'-4s-2n-2f\':\'\',\'-4z-2n-2f\':\'\',\'-ms-2n-2f\':\'\',\'2n-2f\':\'\'});$(2e).2p(\'3a 6N\',C.3a);$(2e).2p(\'2Y 5z\',C.2Y)}};B.J.Q.C.3K()}1z{if(13)B.J.Q.C.F=13;B.J.Q.C.3K(13)}}},2N:E(1u,1m,N,P,cp,8a){R 4n=1m.6j(\'2d\'),N=!N&&P?P*1u.N/1u.P:N,P=!P&&N?N*1u.P/1u.N:P,1W=1u.N/1u.P,4j=1W>=1?N:P*1W,4U=1W<1?P:N/1W;if(8a&&4j<N){4U=4U*(N/4j);4j=N}if(8a&&4U<P){4j=4j*(P/4U);4U=P}R 7Q=1B.3M(1B.dC(1B.7N(1u.N/4j)/1B.7N(2)),12);1m.N=4j;1m.P=4U;if(1u.N<1m.N||1u.P<1m.P||7Q<2){if(!8a){1m.N=1B.3M(1u.N,1m.N);1m.P=1B.3M(1u.P,1m.P)}R x=1u.N<1m.N?(1m.N-1u.N)/2:0,y=1u.P<1m.P?(1m.P-1u.P)/2:0;if(!cp){4n.co="#cm";4n.cl(0,0,1m.N,1m.P)}4n.4l(1u,x,y,1B.3M(1u.N,1m.N),1B.3M(1u.P,1m.P))}1z{R oc=2e.43(\'1m\'),5N=oc.6j(\'2d\'),4o=2;oc.N=1u.N/4o;oc.P=1u.P/4o;5N.co="#cm";5N.cl(0,0,oc.N,oc.P);5N.4l(1u,0,0,oc.N,oc.P);6R(7Q>2){R 89=4o+2,4W=1u.N/4o,4T=1u.P/4o;if(4W>oc.N)4W=oc.N;if(4T>oc.P)4T=oc.P;5N.4l(oc,0,0,4W,4T,0,0,1u.N/89,1u.P/89);4o=89;7Q--}R 4W=1u.N/4o,4T=1u.P/4o;if(4W>oc.N)4W=oc.N;if(4T>oc.P)4T=oc.P;4n.4l(oc,0,0,4W,4T,0,0,4j,4U);oc=5N=Z}4n=Z},14:E(B){R 4G=B.J&&B.J.1e&&$(\'1e\').1C(B.J.1e).17;if(!4G)G;if(!B.J.14){R $J=B.J.1e,$19=$J.1C(\'.1c-J-19\'),$1F=$19.1C(\'.11-19\'),$1N=$1F.1C(\'> 1u\').1V(\'87\',\'1l\').1V(\'iR\',\'G 1l;\');B.J.14={1e:$J.1C(\'.1c-J-14\'),8D:B.2g==\'1K\'&&B.11.19&&n.18.J.14,1p:2B,2Q:2B,3K:E(){R 14=2k;if(!14.8D||f.1r.dv()||f.1r.96())G 14.1e.2Z()&&$19.2j(\'3S-19-iG\');14.2Z();14.2N();$(2h).on(\'2N\',14.2N);$(2h).on(\'86 93\',14.8Z);14.1e.1C(\'1I\').on(\'1I 6d\',14.88);$1F.on(\'1R 3g\',14.1R);$19.on(\'cf cc\',14.46)},2Z:E(){R 14=2k;$(2h).2p(\'2N\',14.2N);$(2h).2p(\'86 93\',14.8Z);14.1e.1C(\'1I\').2p(\'1I 6d\',14.88);$1F.2p(\'1R\',14.1R);$19.2p(\'cf cc\',14.46)},8K:E(83){R 14=2k,1f=0,1g=0;if(!83){1f=1B.3G(($19.N()-$1F.N())/2);1g=1B.3G(($19.P()-$1F.P())/2)}1z{1f=14.1f;1g=14.1g;1f-=(($19.N()/2-14.1f)*(($1F.N()/83[0])-1));1g-=(($19.P()/2-14.1g)*(($1F.P()/83[1])-1));if($1F.N()<=$19.N())1f=1B.3G(($19.N()-$1F.N())/2);if($1F.P()<=$19.P())1g=1B.3G(($19.P()-$1F.P())/2);if($1F.N()>$19.N()){if(1f>0)1f=0;1z if(1f+$1F.N()<$19.N())1f=$19.N()-$1F.N()}if($1F.P()>$19.P()){if(1g>0)1g=0;1z if(1g+$1F.P()<$19.P())1g=$19.P()-$1F.P()}1g=1B.3M(1g,0)}$1F.2b({1f:(14.1f=1f)+\'px\',1g:(14.1g=1g)+\'px\',N:$1F.N(),P:$1F.P()})},2N:E(){R 14=B.J.14;$19.2I(\'is-8P\');$1F.5r(\'3O\');14.1p=14.cB();14.6Y()},88:E(e){R 14=B.J.14,$1I=$(2k),21=7y($1I.21());if(14.1p>=2B){e.3B();$1I.21(14.1p);G}if(21<14.1p){e.3B();21=14.1p;$1I.21(21)}14.6Y(21,1d)},46:E(e){R 14=B.J.14,6Q=-2B;if(e.1G){if(e.1G.c9)6Q=e.1G.c9/-40;if(e.1G.cs)6Q=e.1G.cs;if(e.1G.cj)6Q=e.1G.cj}14[6Q<0?\'8X\':\'8C\'](3)},8Z:E(e){R 14=B.J.14,1h=e.1h,2L=e.cI||e.8S;if(2L!=32)G;14.7V=1h==\'93\';if(14.7V&&14.bj())$1F.2j(\'is-8G\');1z $1F.2I(\'is-8G\')},1R:E(e){R 14=B.J.14,$22=$(e.22),2i=e.1G.28&&e.1G.28[0]?\'3g\':\'1R\',1H={x:2i==\'1R\'?e.48:e.1G.28[0].48,y:2i==\'1R\'?e.44:e.1G.28[0].44},1Y=E(){14.35={x:1H.x,y:1H.y,cK:1H.x-14.1f,cJ:1H.y-14.1g,};$(\'4S\').2b({\'-4s-2n-2f\':\'30\',\'-4z-2n-2f\':\'30\',\'-ms-2n-2f\':\'30\',\'2n-2f\':\'30\'});$1F.2j(\'is-7U\');$(2e).on(\'3a\',14.3a)};if(e.8S!=1)G;if(14.1p==2B||14.2Q==14.1p)G;if(!14.7V&&$22[0]!=$1N[0]&&!$22.is(\'.1c-C\'))G;if(2i==\'1R\'){1Y()}if(2i==\'3g\'){14.47=1d;3N(E(){if(!14.47)G;23 14.47;1Y()},n.18.5w?n.18.5w:0)}$(2e).on(\'2Y 5z\',14.2Y)},3a:E(e){R 14=B.J.14,2i=e.1G.28&&e.1G.28[0]?\'3g\':\'1R\',1H={x:2i==\'1R\'?e.48:e.1G.28[0].48,y:2i==\'1R\'?e.44:e.1G.28[0].44},1f=1H.x-14.35.cK,1g=1H.y-14.35.cJ;if(1g>0)1g=0;if(1g<$19.P()-$1F.P())1g=$19.P()-$1F.P();if($1F.P()<$19.P()){1g=$19.P()/2-$1F.P()/2}if($1F.N()>$19.N()){if(1f>0)1f=0;if(1f<$19.N()-$1F.N())1f=$19.N()-$1F.N()}1z{1f=$19.N()/2-$1F.N()/2}$1F.2b({1f:(14.1f=1f)+\'px\',1g:(14.1g=1g)+\'px\'})},2Y:E(e){R 14=B.J.14;23 14.35;$(\'4S\').2b({\'-4s-2n-2f\':\'\',\'-4z-2n-2f\':\'\',\'-ms-2n-2f\':\'\',\'2n-2f\':\'\'});$1F.2I(\'is-7U\');$(2e).2p(\'3a\',14.3a);$(2e).2p(\'2Y\',14.2Y)},8X:E(21){R 14=B.J.14,72=21||20;if(14.2Q>=2B)G;14.2Q=1B.3M(2B,14.2Q+72);14.6Y(14.2Q)},8C:E(21){R 14=B.J.14,72=21||20;if(14.2Q<=14.1p)G;14.2Q=1B.4e(14.1p,14.2Q-72);14.6Y(14.2Q)},6Y:E(21,1I){R 14=2k,N=14.aJ().N/2B*21,P=14.aJ().P/2B*21,cy=$1F.N(),cZ=$1F.P(),8M=21&&21!=14.1p;if(!14.8D)G 14.8K();if(8M){$19.2j(\'is-8P\');$1F.2j(\'is-cG\').2b({N:N+\'px\',P:P+\'px\',3h:\'30\',3b:\'30\'})}1z{$19.2I(\'is-8P\');$1F.2I(\'is-cG is-8G\').5r(\'3O\')}14.2Q=21||14.1p;14.8K(8M?[cy,cZ,14.1f,14.1g]:Z);14.1e.1C(\'26\').1e(14.2Q+\'%\');if(!1I)14.1e.1C(\'1I\').21(14.2Q);if(21&&B.J.Q&&B.J.Q.C)B.J.Q.C.2N(1d)},bj:E(){R 14=2k;G 14.2Q>14.1p},aJ:E(){R 14=2k;G{N:$1N.2M(\'5y\'),P:$1N.2M(\'6J\')}},cB:E(){R 14=2k;G 1B.3G(2B/($1N.2M(\'5y\')/$1N.N()))}}}B.J.14.3K()},4h:E(B,7m,69,1Y,7g){R 4G=B.J&&B.J.1e&&$(\'1e\').1C(B.J.1e).17,1K=2W 7L(),2A=E(){if(!B.11.19)G;R 1m=2e.43(\'1m\'),2l=1m.6j(\'2d\'),1K=2k,5C=[0,42];1m.N=B.11.N;1m.P=B.11.P;2l.4l(1K,0,0,B.11.N,B.11.P);if(2D B.Q.1q!=\'4R\'){B.Q.1q=B.Q.1q||0;1m.N=5C.1n(B.Q.1q)>-1?B.11.N:B.11.P;1m.P=5C.1n(B.Q.1q)>-1?B.11.P:B.11.N;R 7H=B.Q.1q*1B.ah/42,cw=1m.N*0.5,ch=1m.P*0.5;2l.b7(0,0,1m.N,1m.P);2l.3w(cw,ch);2l.1O(7H);2l.3w(-B.11.N*0.5,-B.11.P*0.5);2l.4l(1K,0,0);2l.b4(1,0,0,1,0,0)}if(B.Q.F){R cD=2l.kA(B.Q.F.1f,B.Q.F.1g,B.Q.F.N,B.Q.F.P);1m.N=B.Q.F.N;1m.P=B.Q.F.P;2l.kz(cD,0,0)}R 1h=69||B.1h||\'1K/kx\',7W=n.Q.7W||90,4D=1m.6b(1h,7W/2B),aQ=E(4D,1u){R 13=!7m?4D:f.1r.9b(4D,1h);!7g?f.18.6c(B,1d,1u||4D):Z;1Y?1Y(13,B,l,p,o,s):Z;n.Q.ax!=Z&&2D n.Q.ax=="E"?n.Q.ax(13,B,l,p,o,s):Z;f.1U(\'2t\',Z)};if(n.Q.3h||n.Q.3b){R 1u=2W 7L();1u.1D=4D;1u.2A=E(){R 7X=2e.43(\'1m\');f.Q.2N(1u,7X,n.Q.3h,n.Q.3b,1d,1l);4D=7X.6b(1h,7W/2B);aQ(4D,1u);1m=2l=7X=Z}}1z{aQ(4D);1m=2l=Z}};if(4G){if(!B.J.Q.4Y)G;R 1p=B.J.Q.1p||1;B.Q.1q=B.J.Q.1q||0;if(B.J.Q.C){B.Q.F=B.J.Q.C.F;B.Q.F.N=B.Q.F.N/B.J.Q.C.F.2T/1p;B.Q.F.1f=B.Q.F.1f/B.J.Q.C.F.2T/1p;B.Q.F.P=B.Q.F.P/B.J.Q.C.F.2V/1p;B.Q.F.1g=B.Q.F.1g/B.J.Q.C.F.2V/1p}}if(f.1r.96()){1K.2A=2A;1K.1D=B.11.1D}1z if(B.11.19){2A.5L(B.11.19)}1z{B.11.2m(E(){2A.5L(B.11.19)})}}},1v:{3K:E(){p.on(\'1R 3g\',n.18.1T.1v,f.1v.1R)},6u:E(){p.2p(\'1R 3g\',n.18.1T.1v,f.1v.1R)},cv:E(1H){R 1s=f.1v.1s,$2F=1s.3j.7b(1s.B.1e),$B=Z;$2F.3y(E(i,el){R $el=$(el);if(1H.x>$el.1S().1f&&1H.x<$el.1S().1f+$el.cO()&&1H.y>$el.1S().1g&&1H.y<$el.1S().1g+$el.9J()){$B=$el;G 1l}});G $B},1R:E(e){R 2i=e.1G.28&&e.1G.28[0]?\'3g\':\'1R\',$22=$(e.22),$B=$22.45(n.18.1T.B),B=f.1i.1C($B),1H={x:2i==\'1R\'||!$B.17?e.48:e.1G.28[0].48,y:2i==\'1R\'||!$B.17?e.44:e.1G.28[0].44},1Y=E(){f.1v.1s={el:$22,B:B,3j:l.1C(n.18.1T.B),x:1H.x,y:1H.y,5o:1H.x-$B.1S().1f,5k:1H.y-$B.1S().1g,1f:$B.3T().1f,1g:$B.3T().1g,N:$B.cO(),P:$B.9J(),3W:n.1v.3W?$(n.1v.3W):B.1e.cQ().2j(\'1c-1v-3W\').1e(\'\')};$(\'4S\').2b({\'-4s-2n-2f\':\'30\',\'-4z-2n-2f\':\'30\',\'-ms-2n-2f\':\'30\',\'2n-2f\':\'30\'});$(2e).on(\'3a 6N\',f.1v.3a)};e.3B();if(f.1v.1s)f.1v.2Y();if(!B)G;if(n.1v.aV&&($22.is(n.1v.aV)||$22.45(n.1v.aV).17))G;$(n.18.1T.1v).on(\'2G 2U ca a5 a0 c7 ck 3g 6N 5z l4\',E(e){e.3B()});if(2i==\'1R\'){1Y()}if(2i==\'3g\'){f.1v.47=1d;3N(E(){if(!f.1v.47)G;23 f.1v.47;1Y()},n.18.5w?n.18.5w:0)}$(2e).on(\'2Y 5z\',f.1v.2Y)},3a:E(e){R 2i=e.1G.28&&e.1G.28[0]?\'3g\':\'1R\',1s=f.1v.1s,B=1s.B,$2F=l.1C(n.18.1T.B),$1Q=$(n.1v.l2||2h),46={1f:$(2e).8d(),1g:$(2e).6q(),ak:$1Q.8d(),a1:$1Q.6q()},1H={x:2i==\'1R\'?e.cn:e.1G.28[0].cn,y:2i==\'1R\'?e.cr:e.1G.28[0].cr};e.3B();R 1f=1H.x-1s.5o,1g=1H.y-1s.5k,a9=1H.x-($1Q.2M(\'kX\')||0),a8=1H.y-($1Q.2M(\'kW\')||0);if(1f+1s.5o>$1Q.N())1f=$1Q.N()-1s.5o;if(1f+1s.5o<0)1f=0-1s.5o;if(1g+1s.5k>$1Q.P())1g=$1Q.P()-1s.5k;if(1g+1s.5k<0)1g=0-1s.5k;if(a8<=0)$1Q.6q(46.a1-10);if(a8>$1Q.P())$1Q.6q(46.a1+10);if(a9<0)$1Q.8d(46.ak-10);if(a9>$1Q.N())$1Q.8d(46.ak+10);B.1e.2j(\'dn\').2b({3T:\'kS\',1f:1f,1g:1g,N:f.1v.1s.N,P:f.1v.1s.P});if(!l.1C(1s.3W).17)B.1e.56(1s.3W);1s.3W.2b({N:f.1v.1s.N,P:f.1v.1s.P,});R $4B=f.1v.cv({x:1f+1s.5o+46.1f,y:1g+1s.5k+46.1g});if($4B){R am=1s.3W.1S().1f!=$4B.1S().1f,aq=1s.3W.1S().1g!=$4B.1S().1g;if(f.1v.1s.3V){if(f.1v.1s.3V.el==$4B[0]){if(aq&&f.1v.1s.3V.4A==\'7s\'&&1H.y<f.1v.1s.3V.y)G;if(aq&&f.1v.1s.3V.4A==\'56\'&&1H.y>f.1v.1s.3V.y)G;if(am&&f.1v.1s.3V.4A==\'7s\'&&1H.x<f.1v.1s.3V.x)G;if(am&&f.1v.1s.3V.4A==\'56\'&&1H.x>f.1v.1s.3V.x)G}}R 2s=$2F.2s(B.1e),dm=$2F.2s($4B),4A=2s>dm?\'7s\':\'56\';$4B[4A](1s.3W);$4B[4A](B.1e);f.1v.1s.3V={el:$4B[0],x:1H.x,y:1H.y,4A:4A}}},2Y:E(){R 1s=f.1v.1s,B=1s.B;$(\'4S\').2b({\'-4s-2n-2f\':\'\',\'-4z-2n-2f\':\'\',\'-ms-2n-2f\':\'\',\'2n-2f\':\'\'});B.1e.2I(\'dn\').2b({3T:\'\',1f:\'\',1g:\'\',N:\'\',P:\'\'});$(2e).2p(\'3a 6N\',f.1v.3a);$(2e).2p(\'2Y 5z\',f.1v.2Y);1s.3W.1A();23 f.1v.1s;f.1v.4h()},4h:E(ae){R 2s=0,2F=[],8u=[],3j=ae?f.1x:(n.18.7Z)?l.84().3x().jS():l.84(),4Y;$.3y(3j,E(i,el){R B=el.1a?el:f.1i.1C($(el));if(B){if(B.U&&!B.3R)G;if(f.6t&&B.2s!=2s&&((f.74&&f.74.1n(B.id)!=2s)||1d))4Y=1d;B.2s=2s;2F.3Z(B);8u.3Z(B.id);2s++}});if(f.74&&f.74.17!=8u.17)4Y=1d;f.74=8u;if(4Y&&2F.17==f.1x.17)f.1x=2F;if(!ae)f.1U(\'2t\',\'df\');4Y&&n.1v.ac!=Z&&2D n.1v.ac=="E"?n.1v.ac(2F,l,p,o,s):Z}},U:{8B:E(B,6K){B.U={5V:n.U.5V,13:$.51({},n.U.13),5G:2W cW(),1h:n.U.1h||\'jO\',dh:n.U.dh||\'jN/dA-13\',k5:1l,jW:1l,k6:1l,1w:B.U?B.U.1w:Z,2K:Z,4H:E(){f.U.4H(B,1d)},2c:E(8y){f.U.2c(B,8y)}};B.U.5G.4I(s.1V(\'1k\'),B.1a,(B.1k?B.1k:1l));if(n.U.5u||6K)f.U.4H(B,6K)},4H:E(B,6K){if(!B.U)G;R 5F=E(2K){if(B.1e)B.1e.2I(\'U-3k U-5j U-9W U-b8 U-aD\').2j(\'U-\'+(2K||B.U.2K))},aT=E(){R i=0;if(f.2z.17>0){f.2z.1n(B)>-1?f.2z.41(f.2z.1n(B),1):Z;6R(i<f.2z.17){if(f.1x.1n(f.2z[i])>-1&&f.2z[i].U&&!f.2z[i].U.$2x){f.U.4H(f.2z[i],1d);24}1z{f.2z.41(i,1)}i++}}};if(n.U.ki&&!B.U.1w){B.U.2K=\'3k\';if(B.1e)5F();if(6K){f.2z.1n(B)>-1?f.2z.41(f.2z.1n(B),1):Z}1z{f.2z.1n(B)==-1?f.2z.3Z(B):Z;if(f.2z.17>1){G}}}if(n.U.1w&&B.1a.70){R 4O=f.1r.6X(n.U.1w),aj=1B.dC(B.1J/4O,4O);if(aj>1&&!B.U.1w)B.U.1w={1k:B.1k,1J:B.1a.1J,1h:B.1a.1h,4O:4O,aH:B.1k,3D:0,2S:aj,i:-1};if(B.U.1w){B.U.1w.i++;23 B.U.1w.9Z;23 B.U.1w.6v;if(B.U.1w.i==0)B.U.1w.9Z=1d;if(B.U.1w.i==B.U.1w.2S-1)B.U.1w.6v=1d;if(B.U.1w.i<=B.U.1w.2S-1){R 1S=B.U.1w.i*B.U.1w.4O,cY=B.1a.70(1S,1S+B.U.1w.4O);B.U.5G=2W cW();B.U.5G.4I(s.1V(\'1k\'),cY);B.U.13.ko=75.9w(B.U.1w)}1z{23 B.U.1w}}}if(n.U.ay&&$.1X(n.U.ay)&&n.U.ay(B,l,p,o,s)===1l){23 B.U.1w;5F();aT();G}p.2j(\'1c-is-d1\');if(B.U.$2x)B.U.$2x.bh();23 B.U.$2x;23 B.U.4H;B.U.2K=\'5j\';if(B.1e){if(n.18.1T.5u)B.1e.1C(n.18.1T.5u).1A();5F()}if(B.U.13){2v(R k in B.U.13){if(!B.U.13.dy(k))7B;B.U.5G.4I(k,B.U.13[k])}}B.U.13=B.U.5G;B.U.5A=E(){R 5A=$.kk.5A(),3E=B.U.1w&&B.U.1w.3E?B.U.1w.3E:2W 6p();if(5A.U){5A.U.kj("f3",E(e){if(B.U.$2x){B.U.$2x.2S=B.U.1w?B.U.1w.1J:e.2S;B.U.$2x.3E=3E}f.U.ao(e,B,3E)},1l)}G 5A};B.U.k8=E(5K,5i){if(B.U.1w&&!B.U.1w.6v&&5i==\'7R\')G f.U.8B(B,1d);aT();R g=1d;$.3y(f.1x,E(i,a){if(a.U&&a.U.$2x)g=1l});if(g){p.2I(\'1c-is-d1\');n.U.aU!=Z&&2D n.U.aU=="E"?n.U.aU(l,p,o,s,5K,5i):Z}};B.U.7R=E(13,5i,5K){if(B.U.1w&&!B.U.1w.6v){8F{R c6=75.cT(13);B.U.1w.aH=c6.1c.aH}8H(e){}G}23 B.U.1w;f.U.ao(Z,B,B.U.$2x.3E,1d);B.3R=1d;23 B.U;B.U={2K:\'aD\',kb:E(){f.U.3X(B)}};if(B.1e)5F();n.U.aN!=Z&&$.1X(n.U.aN)?n.U.aN(13,B,l,p,o,s,5i,5K):Z;f.1U(\'2t\',Z)};B.U.7t=E(5K,5i,b9){if(B.U.1w)B.U.1w.i=1B.4e(-1,B.U.1w.i-1);B.3R=1l;B.U.2K=B.U.2K==\'9W\'?B.U.2K:\'b8\';B.U.3X=E(){f.U.3X(B)};23 B.U.$2x;if(B.1e)5F();n.U.aO!=Z&&$.1X(n.U.aO)?n.U.aO(B,l,p,o,s,5K,5i,b9):Z};B.U.$2x=$.2x(B.U)},2c:E(B,8y){if(B&&B.U){B.U.2K=\'9W\';23 B.U.1w;B.U.$2x?B.U.$2x.bh():Z;23 B.U.$2x;!8y?f.1i.1A(B):Z}},3X:E(B){if(B&&B.U){if(B.1e&&n.18.1T.3X)B.1e.1C(n.18.1T.3X).1A();f.U.8B(B,1d)}},ao:E(e,B,3E,a3){if(!e&&a3&&B.U.$2x)e={2S:B.U.$2x.2S,3D:B.U.$2x.2S,b2:1d};if(e.b2){R 4p=2W 6p(),3D=e.3D+(B.U.1w?B.U.1w.3D:0),2S=B.U.1w?B.U.1w.1J:e.2S,6B=1B.3G(3D*2B/2S),bN=B.U.1w&&B.U.1w.3E?B.U.1w.3E:3E,5a=(4p.c0()-bN.c0())/bl,6F=5a?3D/5a:0,6E=1B.4e(0,2S-3D),8q=1B.4e(0,5a?6E/6F:0),13={3D:3D,gE:f.1r.5H(3D),2S:2S,gL:f.1r.5H(2S),6B:6B,5a:5a,gJ:f.1r.7G(5a,1d),6F:6F,gs:f.1r.5H(6F)+\'/s\',6E:6E,gv:f.1r.5H(6E),8q:8q,gr:f.1r.7G(8q,1d)};if(B.U.1w){if(B.U.1w.9Z)B.U.1w.3E=3E;if(e.3D==e.2S&&!B.U.1w.6v)B.U.1w.3D+=1B.4e(e.2S,B.U.1w.2S/B.U.1w.4O)}if(13.6B>99&&!a3)13.6B=99;n.U.a7&&$.1X(n.U.a7)?n.U.a7(13,B,l,p,o,s):Z}}},1M:{6z:E(e){52(f.1M.3q);n.1M.1Q.2j(\'1c-aa\');f.1U(\'29\',f.1r.2q(n.1L.2U));n.1M.6z!=Z&&$.1X(n.1M.6z)?n.1M.6z(e,l,p,o,s):Z},6y:E(e){52(f.1M.3q);f.1M.3q=3N(E(e){if(!f.1M.bC(e)){G 1l}n.1M.1Q.2I(\'1c-aa\');f.1U(\'29\',Z);n.1M.6y!=Z&&$.1X(n.1M.6y)?n.1M.6y(e,l,p,o,s):Z},2B,e)},6w:E(e){52(f.1M.3q);n.1M.1Q.2I(\'1c-aa\');f.1U(\'29\',Z);if(e&&e.1G&&e.1G.6x&&e.1G.6x.1i&&e.1G.6x.1i.17){if(f.3Y()){f.6h(e,e.1G.6x.1i)}1z{s.2M(\'1i\',e.1G.6x.1i).d0(\'6d\')}}n.1M.6w!=Z&&$.1X(n.1M.6w)?n.1M.6w(e,l,p,o,s):Z},bC:E(e){R 8Q=$(e.gx),9R;if(!8Q.is(n.1M.1Q)){9R=n.1M.1Q.1C(8Q);if(9R.17){G 1l}}G 1d}},3F:{2O:E(e){if(!f.1r.cA(o)||!e.1G.7q||!e.1G.7q.3j||!e.1G.7q.3j.17)G;R 3j=e.1G.7q.3j;f.3F.6S();2v(R i=0;i<3j.17;i++){if(3j[i].1h.1n("1K")!==-1||3j[i].1h.1n("3A/gC-2F")!==-1){R 3r=3j[i].gD(),ms=n.8A>1?n.8A:gF;if(3r){3r.9c=f.1r.9d(3r.1h.1n("/")!=-1?3r.1h.3u("/")[1].7z().4r():\'gH\',\'gN \');f.1U(\'29\',f.1r.2q(n.1L.2O,{ms:ms/bl}));f.3F.3q=3N(E(){f.1U(\'29\',Z);f.6h(e,[3r])},ms-2)}}}},6S:E(){if(f.3F.3q){52(f.3F.3q);23 f.3F.3q;f.1U(\'29\',Z)}}},1i:{6o:E(1a,2M){R 1k=1a.9c||1a.1k,1J=1a.1J,5W=f.1r.5H(1J),1h=1a.1h,2g=1h?1h.3u(\'/\',1).7z().4r():\'\',2C=1k.1n(\'.\')!=-1?1k.3u(\'.\').bw().4r():\'\',4c=1k.8E(0,1k.17-(1k.1n(\'.\')!=-1?2C.17+1:2C.17)),13=1a.13||{},1D=1a.1a||1a,id=2M==\'7P\'?1a.id:6p.6H(),2s,B,13={1k:1k,4c:4c,1J:1J,5W:5W,1h:1h,2g:2g,2C:2C,13:13,1a:1D,11:{2m:E(1Y,1h,3L){G f.1i.2m(B,1Y,1h,3L)}},id:id,1I:2M==\'4k\'?s:Z,1e:Z,4k:2M==\'4k\',5s:2M==\'5s\'||2M==\'7P\',3R:2M==\'3R\'};if(2M!=\'7P\'&&2h.bH){f.1x.3Z(13);2s=f.1x.17-1;B=f.1x[2s]}1z{2s=f.1x.1n(1a);f.1x[2s]=B=13}B.1A=E(){f.1i.1A(B)};if(n.Q&&2g==\'1K\')B.Q={1O:n.Q.1q!==1l?E(3z){f.Q.1O(B,3z)}:Z,C:n.Q.C!==1l?E(13){f.Q.F(B,13)}:Z,4h:E(1Y,7m,69,7g){f.Q.4h(B,7m,69,1Y,7g)}};if(1a.7e)B.7e=1a.7e;G 2s},2m:E(B,1Y,1h,3L,77){if(f.9N()&&!B.13.7f){R 11=2W 9P(),4m=2h.4m||2h.gf,5I=77&&B.13.5c,5v=2D B.1a!=\'59\',3n=E(){R 4g=B.11.4g||[];if(B.11.3q){52(B.11.3q);23 B.11.3q}23 B.11.4g;23 B.11.9T;2v(R i=0;i<4g.17;i++){$.1X(4g[i])?4g[i](B,l,p,o,s):Z}n.8p&&$.1X(n.8p)?n.8p(B,l,p,o,s):Z};if((!B.11.1D&&!B.11.9T)||3L)B.11={9T:11,4g:[],2m:B.11.2m};if(B.11.1D&&!3L)G 1Y&&$.1X(1Y)?1Y(B,l,p,o,s):Z;if(1Y&&B.11.4g){B.11.4g.3Z(1Y);if(B.11.4g.17>1)G}if(B.2g==\'9Y\'){11.2A=E(e){R 19=2e.43(\'1b\');B.11.19=19;B.11.1D=e.22.1Z;B.11.17=e.22.1Z.17;19.hO=B.11.1D.2P(/&/g,"&cg;").2P(/</g,"&lt;").2P(/>/g,"&gt;");3n()};11.3c=E(){3n();B.11={2m:B.11.2m}};if(5v)11.hN(B.1a);1z $.2x({5V:B.1a,7R:E(1Z){11.2A({22:{1Z:1Z}})},7t:E(){11.3c()}})}1z if(B.2g==\'1K\'||5I){R 1D;11.2A=E(e){R 19=2W 7L(),aR=E(){if(B.13&&B.13.5J)19.9S(\'aL\',B.13.5J);19.1D=e.22.1Z+((B.13.hK||3L)&&!5v&&!5I&&e.22.1Z.1n(\'13:1K\')==-1?(e.22.1Z.1n(\'?\')==-1?\'?\':\'&\')+\'d=\'+6p.6H():\'\');19.2A=E(){if(B.11.5E){R 1m=2e.43(\'1m\'),2l=1m.6j(\'2d\'),1K=19,1q=1B.hI(B.11.5E),7D=B.11.5E<0?B.11.5E:0,5C=[0,42];if(1q==1)1q=0;1m.N=1K.5y;1m.P=1K.6J;2l.4l(1K,0,0);1m.N=5C.1n(1q)>-1?1K.5y:1K.6J;1m.P=5C.1n(1q)>-1?1K.6J:1K.5y;R 7H=1q*1B.ah/42,cw=1m.N*0.5,ch=1m.P*0.5;2l.b7(0,0,1m.N,1m.P);2l.3w(cw,ch);2l.1O(7H);2l.3w(-1K.5y*0.5,-1K.6J*0.5);if(7D){if([-1,-42].1n(7D)>-1){2l.3w(1m.N,0);2l.1p(-1,1)}1z if([-90,-4K].1n(7D)>-1){2l.3w(0,1m.N);2l.1p(1,-1)}}2l.4l(1K,0,0);2l.b4(1,0,0,1,0,0);19.1D=1m.6b(B.1h,1);23 B.11.5E;G}B.11.19=19;B.11.1D=19.1D;B.11.N=19.N;B.11.P=19.P;B.11.1W=f.1r.aP(B.11.N,B.11.P);if(1D)4m.dq(1D);3n();if(5I)B.11={2m:B.11.2m}};19.3c=E(){3n();B.11={2m:B.11.2m}}};if(n.18.fj&&B.4k){f.1r.ct(B.1a,E(7d){if(7d)B.11.5E=7d;aR()})}1z{aR()}};11.3c=E(){3n();B.11={2m:B.11.2m}};if(!5I&&B.1J>f.1r.6X(n.11.2o))G 11.3c();if(5v){if(n.18.fJ&&n.18.5x&&4m)11.2A({22:{1Z:1D=4m.aM(B.1a)}});1z 11.hR(B.1a)}1z{11.2A({22:{1Z:(5I?B.13.5c:B.1a)}})}}1z if(B.2g==\'6i\'||B.2g==\'aS\'){R 19=2e.43(B.2g),bf=19.i9(B.1h),1D;11.3c=E(){B.11.19=Z;3n();B.11={2m:B.11.2m}};if(4m&&bf!==\'\'){if(77&&!n.18.fk){B.11.19=19;3n();B.11={2m:B.11.2m};G}1D=5v?4m.aM(B.1a):B.1a;19.i7=E(){B.11.19=19;B.11.1D=19.1D;B.11.2E=19.2E;B.11.fZ=f.1r.7G(19.2E);if(B.2g==\'6i\'){B.11.N=19.b5;B.11.P=19.b6;B.11.1W=f.1r.aP(B.11.N,B.11.P)}};19.3c=E(){3n();B.11={2m:B.11.2m}};19.i6=E(){if(B.2g==\'6i\'){R 1m=2e.43(\'1m\'),4n=1m.6j(\'2d\');1m.N=19.b5;1m.P=19.b6;4n.4l(19,0,0,1m.N,1m.P);B.11.aI=!f.1r.95(1m)?1m.6b():Z;1m=4n=Z}3n()};3N(E(){if(B.13&&B.13.5J)19.9S(\'aL\',B.13.5J);19.1D=1D+\'#t=1\'},2B)}1z{11.3c()}}1z if(B.1h==\'d9/4J\'&&n.18.4J){R 19=2e.43(\'hZ\'),1D=5v?4m.aM(B.1a):(n.18.4J.hY||\'\')+B.1a;if(n.18.4J.d5||f.1r.dF(\'4J\')){19.2A=E(){B.11.19=19;B.11.1D=19.1D;19.3O.cU=\'\';3n()};19.1D=(n.18.4J.d5||\'\')+1D;19.3O.cU=\'30\';2e.4S.hV(19)}1z{3n()}}1z{11.2A=E(e){B.11.1D=e.22.1Z;B.11.17=e.22.1Z.17;3n()};11.3c=E(e){3n();B.11={2m:B.11.2m}};5v?11[1h||\'hS\'](B.1a):3n()}B.11.3q=3N(11.3c,77?n.11.fe:n.11.fa)}1z{if(1Y)1Y(B,l,p,o,s)}G Z},2F:E(5Y,5h,d4,9V){R 1i=[];if(n.1v&&!d4&&(!9V||9V!=\'df\'))f.1v.4h(1d);$.3y(f.1x,E(i,a){R 1a=a;if(1a.U&&!1a.3R)G 1d;if(5h||5Y)1a=(1a.4k&&!1a.3R?\'0:/\':\'\')+(5h&&f.1i.ag(a,5h)!==Z?f.1i.ag(1a,5h):(1a.7e||1a[2D 1a.1a=="59"?"1a":"1k"]));if(5Y){1a={1a:1a};if(a.Q&&(a.Q.F||a.Q.1q)){1a.Q={};if(a.Q.1q)1a.Q.1q=a.Q.1q;if(a.Q.F)1a.Q.F=a.Q.F}if(2D a.2s!==\'4R\'){1a.2s=a.2s}if(a.13&&a.13.ap){2v(R 2L in a.13.ap){1a[2L]=a.13.ap[2L]}}}1i.3Z(1a)});1i=n.8o&&$.1X(n.8o)?n.8o(1i,f.1x,n.2t,l,p,o,s):1i;G!5Y?1i:75.9w(1i)},dE:E(B,1i,7h){R r=["hw",Z,1l,1l];if(n.1o!=Z&&7h&&1i.17+f.1x.17-1>n.1o){r[1]=f.1r.2q(n.1L.2u.3m);r[3]=1d;G r}if(n.2o!=Z&&7h){R g=0;$.3y(f.1x,E(i,a){g+=a.1J});g-=B.1J;$.3y(1i,E(i,a){g+=a.1J});if(g>f.1r.6X(n.2o)){r[1]=f.1r.2q(n.1L.2u.3d);r[3]=1d;G r}}if(n.66!=Z&&$.1X(n.66)&&7h){R 66=n.66(1i,n,l,p,o,s);if(66===1l){r[3]=1d;G r}}if(n.2r!=Z&&$.dD(B.2C,n.2r)==-1&&!n.2r.6r(E(21){G B.1h.17&&(21.1n(B.1h)>-1||21.1n(B.2g+\'/*\')>-1)}).17){r[1]=f.1r.2q(n.1L.2u.33,B);G r}if(n.7Y!=Z&&($.dD(B.2C,n.7Y)>-1||n.7Y.6r(E(21){G!B.1h.17||21.1n(B.1h)>-1||21.1n(B.2g+\'/*\')>-1}).17)){r[1]=f.1r.2q(n.1L.2u.33,B);G r}if(n.2w!=Z&&B.1J>f.1r.6X(n.2w)){r[1]=f.1r.2q(n.1L.2u.3e,B);G r}if(B.1J==0&&B.1h==""){r[1]=f.1r.2q(n.1L.2u.3v,B);G r}if(B.1J==h9&&B.1h==""){r[1]=f.1r.2q(n.1L.2u.3i,B);G r}if(!n.fm){R g=1l;$.3y(f.1x,E(i,a){if(a!=B&&a.4k==1d&&a.1a&&a.1k==B.1k){g=1d;if(a.1a.1J==B.1J&&a.1a.1h==B.1h&&(B.1a.7j&&a.1a.7j?a.1a.7j==B.1a.7j:1d)&&1i.17>1){r[2]=1d}1z{r[1]=f.1r.2q(n.1L.2u.3s,B);r[2]=1l}G 1l}});if(g){G r}}G 1d},4I:E(1i){1i=$.h7(1i)?1i:[1i];if(1i.17){R B;2v(R i=0;i<1i.17;i++){if(!f.1r.dw(1i[i],[\'1k\',\'1a\',\'1J\',\'1h\'])){7B}B=f.1x[f.1i.6o(1i[i],\'5s\')];n.18?f.18.B(B):Z}f.1U(\'29\',Z);f.1U(\'2t\',Z);n.54&&$.1X(n.54)?n.54(l,p,o,s):Z;G 1i.17==1?B:1d}},9g:E(B,13){if(f.1x.1n(B)==-1||(B.U&&B.U.$2x))G;R a4=B,2s=f.1i.6o($.51(B,13),\'7P\'),B=f.1x[2s];if(B.J&&B.J.36)B.J.36();if(n.18&&a4.1e)f.18.B(B,a4.1e);f.1U(\'2t\',Z)},1C:E(1e){R B=Z;$.3y(f.1x,E(i,a){if(a.1e&&a.1e.is(1e)){B=a;G 1l}});G B},1A:E(B,7C){if(!7C&&n.8m&&$.1X(n.8m)&&n.8m(B,l,p,o,s)===1l)G;if(B.1e)n.18.8g&&$.1X(n.18.8g)&&!7C?n.18.8g(B.1e,l,p,o,s):B.1e.1A();if(B.U&&B.U.$2x&&B.U.2c)B.U.2c(1d);if(B.J&&B.J.36)B.J.36();if(B.11.1D){B.11.19=Z;4m.dq(B.11.1D)}if(B.1I){R g=1d;$.3y(f.1x,E(i,a){if(B!=a&&(B.1I==a.1I||(7C&&B.1I.3x(0).1i.17>1))){g=1l;G 1l}});if(g){if(f.7K()&&2J.17>1){f.1U(\'af\');2J.41(2J.1n(B.1I),1);B.1I.1A()}1z{f.1U(\'1I\',\'\')}}}f.3p.1n(B)>-1?f.3p.41(f.3p.1n(B),1):Z;f.2z.1n(B)>-1?f.2z.41(f.2z.1n(B),1):Z;f.1x.1n(B)>-1?f.1x.41(f.1x.1n(B),1):Z;B=Z;f.1x.17==0?f.4f():Z;f.1U(\'29\',Z);f.1U(\'2t\',Z)},ag:E(B,1V){R 1Z=Z;if(B){if(2D B[1V]!="4R"){1Z=B[1V]}1z if(B.13&&2D B.13[1V]!="4R"){1Z=B.13[1V]}}G 1Z},7n:E(6O){R i=0;6R(i<f.1x.17){R a=f.1x[i];if(!6O&&a.5s){i++;7B}if(a.1e)a.1e?f.1x[i].1e.1A():Z;if(a.U&&a.U.$2x)f.U.2c(a);f.1x.41(i,1)}f.1U(\'29\',Z);f.1U(\'2t\',Z);f.1x.17==0&&n.8l&&$.1X(n.8l)?n.8l(l,p,o,s):Z}},4f:E(6O){if(6O){if(f.3F.3q)f.3F.6S();$.3y(2J,E(i,a){if(i<2J.17)a.1A()});2J=[];f.1U(\'1I\',\'\')}f.gV=[];f.2z=[];f.3p=[];f.1i.7n(6O)},6u:E(){f.4f(1d);f.3P(1l);s.5r(\'3O\');p.7s(s);23 s.3x(0).65;p.1A();p=o=l=Z},1r:{6X:E(mb){G 3U(mb)*hu},5H:E(5q){if(5q==0)G\'0 hs\';R k=hr,ci=[\'hq\',\'hp\',\'2a\',\'ho\',\'hn\',\'lc\',\'hd\',\'hk\',\'hj\'],i=1B.a6(1B.7N(5q)/1B.7N(k));G(5q/1B.hh(k,i)).hg(3)+\' \'+ci[i]},cq:E(5f){G(\'\'+5f).2P(/&/g,"&cg;").2P(/</g,"&lt;").2P(/>/g,"&gt;").2P(/"/g,"&lb;").2P(/\'/g,"&#jQ;")},7G:E(4v,4N){4v=3U(1B.3G(4v),10);R 5D=1B.a6(4v/au),6G=1B.a6((4v-(5D*au))/60),4v=4v-(5D*au)-(6G*60),1Z="";if(5D>0||!4N){1Z+=(5D<10?"0":"")+5D+(4N?"h ":":")}if(6G>0||!4N){1Z+=(6G<10&&!4N?"0":"")+6G+(4N?"m ":":")}1Z+=(4v<10&&!4N?"0":"")+4v+(4N?"s":"");G 1Z},aP:E(N,P){R aF=E(a,b){G(b==0)?a:aF(b,a%b)},r=aF(N,P);G[N/r,P/r]},6e:E(N,P,1W){1W=(1W+\'\').3u(\':\');if(1W.17<2)G Z;R cL=P/1W[1]*1W[0],cH=N/1W[0]*1W[1];G[cL,cH,1W[0],1W[1]]},cx:E(1V,el){R el=!el?s:el,a=el.1V(1V);if(!a||2D a==\'4R\'){G 1l}1z{G 1d}},aB:E(7A,7i){$.3y(7i.3x(0).pz,E(){if(2k.1k==\'py\'||2k.1k==\'1h\')G;7A.1V(2k.1k,2k.3I)});if(7i.3x(0).65)7A.3x(0).65=7i.3x(0).65;G 7A},cC:E(el){R el=!el?s:el,1Z=[];el=el.3x?el.3x(0):el;2v(R 2L in el){if(2L.1n(\'on\')===0){1Z.3Z(2L.70(2))}}if(1Z.1n(\'6d\')==-1)1Z.3Z(\'6d\');G 1Z.8O(\' \')},cA:E(el){R 9Q=$(2h).6q(),cE=9Q+2h.ps,8R=el.1S().1g,cF=8R+el.9J();G((9Q<8R)&&(cE>cF))},95:E(1m){R 6P=2e.43(\'1m\'),1Z=1l;6P.N=1m.N;6P.P=1m.P;8F{1Z=1m.6b()==6P.6b()}8H(e){}6P=Z;G 1Z},9d:E(2C,6f){R 4p=2W 6p(),5X=E(x){if(x<10)x="0"+x;G x},6f=6f?6f:\'\',2C=2C?\'.\'+2C:\'\';G 6f+4p.q2()+\'-\'+5X(4p.q1()+1)+\'-\'+5X(4p.q0())+\' \'+5X(4p.pZ())+\'-\'+5X(4p.pX())+\'-\'+5X(4p.pV())+2C},pU:E(91){R 94=\'\',5q=2W cM(91);2v(R i=0;i<5q.8Y;i++){94+=pT.pS(5q[i])}G 2h.db(94)},9b:E(6n,1h){R 7k=7p(6n.3u(\',\')[1]),69=6n.3u(\',\')[0].3u(\':\')[1].3u(\';\')[0],92=2W pP(7k.17),cN=2W cM(92);2v(R i=0;i<7k.17;i++){cN[i]=7k.dl(i)}R cP=2W c8(92),3r=2W d8([cP.91],{1h:1h||69});G 3r},ct:E(1a,1Y){R 11=2W 9P(),1q={1:0,2:-1,3:42,4:-42,5:-90,6:90,7:-4K,8:4K};11.2A=E(e){R 3H=2W c8(e.22.1Z),21=1;if(3H.8Y&&3H.50(0,1l)==oP){R 17=3H.8Y,1S=2;6R(1S<17){if(3H.50(1S+2,1l)<=8)24;R 8U=3H.50(1S,1l);1S+=2;if(8U==oN){if(3H.cb(1S+=2,1l)!=oM)24;R 6T=3H.50(1S+=6,1l)==oL,8V;1S+=3H.cb(1S+4,6T);8V=3H.50(1S,6T);1S+=2;2v(R i=0;i<8V;i++){if(3H.50(1S+(i*12),6T)==oI){21=3H.50(1S+(i*12)+8,6T);17=0;24}}}1z if((8U&cd)!=cd){24}1z{1S+=3H.50(1S,1l)}}}1Y?1Y(1q[21]||0):Z};11.3c=E(){1Y?1Y(\'\'):Z};11.q8(1a)},2q:E(3A,3f,8L){3f=8L?(3f||{}):$.51({},{1o:n.1o,2o:n.2o,2w:n.2w,2r:n.2r?n.2r.8O(\', \'):Z,1L:n.1L},3f);6U(2D(3A)){2y\'59\':2v(R 2L in 3f){if([\'1k\',\'1a\',\'1h\',\'1J\'].1n(2L)>-1)3f[2L]=f.1r.cq(3f[2L])}3A=3A.2P(/\\$\\{(.*?)\\}/g,E(cR,a){R a=a.2P(/ /g,\'\'),r=2D 3f[a]!="4R"&&3f[a]!=Z?3f[a]:\'\';if([\'11.19\'].1n(a)>-1)G cR;if(a.1n(\'.\')>-1||a.1n(\'[]\')>-1){R x=a.8E(0,a.1n(\'.\')>-1?a.1n(\'.\'):a.1n(\'[\')>-1?a.1n(\'[\'):a.17),y=a.pg(x.17);if(3f[x]){8F{r=pf(\'3f["\'+x+\'"]\'+y)}8H(e){r=\'\'}}}r=$.1X(r)?f.1r.2q(r):r;G r||\'\'});24;2y\'E\':3A=f.1r.2q(3A(3f,l,p,o,s,f.1r.2q),3f,8L);24}3f=Z;G 3A},dj:E(5f){if(!5f||5f.17==0)G 1l;2v(R i=0,6Z=0;i<5f.17;6Z=5f.dl(i++)+((6Z<<5)-6Z));2v(R i=0,9v=\'#\';i<3;9v+=(\'pb\'+((6Z>>i++*2)&p8).7z(16)).70(-2));G 9v},dp:E(5T){R ds=E(b){R a;if(b&&b.p5==p4&&b.17==3)G b;if(a=/5d\\(\\s*([0-9]{1,3})\\s*,\\s*([0-9]{1,3})\\s*,\\s*([0-9]{1,3})\\s*\\)/.7w(b))G[3U(a[1]),3U(a[2]),3U(a[3])];if(a=/5d\\(\\s*([0-9]+(?:\\.[0-9]+)?)\\%\\s*,\\s*([0-9]+(?:\\.[0-9]+)?)\\%\\s*,\\s*([0-9]+(?:\\.[0-9]+)?)\\%\\s*\\)/.7w(b))G[7y(a[1])*2.55,7y(a[2])*2.55,7y(a[3])*2.55];if(a=/#([a-fA-5S-9]{2})([a-fA-5S-9]{2})([a-fA-5S-9]{2})/.7w(b))G[3U(a[1],16),3U(a[2],16),3U(a[3],16)];if(a=/#([a-fA-5S-9])([a-fA-5S-9])([a-fA-5S-9])/.7w(b))G[3U(a[1]+a[1],16),3U(a[2]+a[2],16),3U(a[3]+a[3],16)];G(2D(dr)!="4R")?dr[$.qV(b).4r()]:Z},dt=E(5T){R 5d=ds(5T);if(!5d)G Z;G 0.qW*5d[0]+0.qT*5d[1]+0.qX*5d[2]};G dt(5T)>qt},dw:E(7o,76){2v(R i=0;i<76.17;i++){if(!$.dx(7o)||!7o.dy(76[i])){qp 2W qn(\'qm 7b 1C ql *dB* qa "\'+76[i]+\'" in \'+75.9w(7o,Z,4))}}G 1d},67:{6A:n.67.6A,2H:n.67.2H},dF:E(1k){if(4V.7F&&4V.7F.17)2v(R 2L in 4V.7F){if(4V.7F[2L].1k.4r().1n(1k)>-1)G 1d}G 1l},dv:E(){G 4V.7M.1n("qc ")>-1||4V.7M.1n("qb/")>-1||4V.7M.1n("qu")>-1},96:E(){G(2D 2h.7d!=="4R")||(4V.7M.1n(\'qO\')!==-1)}},cX:E(){G s&&s.3x(0).1i},9N:E(){G 2h.bR&&2h.qL&&2h.9P},7I:E(){G!n.U&&(!n.64||n.1o==1)},7K:E(){G!n.U&&n.64&&n.1o!=1},3Y:E(){G n.U},1x:[],2z:[],3p:[],38:1l,4M:1l,6t:1l};if(n.fB){s.3x(0).65={2R:E(){s.d0(\'2G\')},qJ:E(){G n},qI:E(){G p},qG:E(){G s},qx:E(){G o},qF:E(){G l},qE:E(){G n.2t},qD:E(){G f.1x},ba:E(){G f.1x.6r(E(a){G a.4k})},qB:E(){G f.1x.6r(E(a){G a.5s})},qA:E(){G f.1x.6r(E(a){G a.3R})},qy:E(5Y,5h){G f.1i.2F(5Y,5h,1d)},oF:E(){f.1U(\'2t\',Z);G 1d},mU:E(d6,3I){n[d6]=3I;G 1d},oD:E(1e){G f.1i.1C(1e)},6o:E(13,1h,1k){if(!f.3Y())G 1l;R 3r;if(13 mt d8){3r=13}1z{R 6n=/13:[a-z]+\\/[a-z]+\\;da\\,/.mr(13)?13:\'13:\'+1h+\';da,\'+db(13);3r=f.1r.9b(6n,1h)}3r.9c=1k||f.1r.9d(3r.1h.1n("/")!=-1?3r.1h.3u("/")[1].7z().4r():\'bR \');f.6h(Z,[3r]);G 1d},4I:E(1i){G f.1i.4I(1i)},9g:E(B,13){G f.1i.9g(B,13)},1A:E(B){B=B.me?f.1i.1C(B):B;if(f.1x.1n(B)>-1){f.1i.1A(B);G 1d}G 1l},md:E(){R 6m=2k.ba()||[];if(f.3Y()&&6m.17>0&&!6m[0].3R){2v(R i=0;i<6m.17;i++){f.U.4H(6m[i])}}},4f:E(){f.4f(1d);G 1d},m7:E(bc){f.1U(\'38\',1d);if(bc)f.4M=1d;G 1d},mi:E(){f.1U(\'38\',1l);f.4M=1l;G 1d},6u:E(){f.6u();G 1d},mQ:E(){G f.1x.17==0},mP:E(){G f.38},mN:E(){G f.6t},mL:f.1r,mJ:E(){if(f.7I())G\'9x\';if(f.7K())G\'64\';if(f.3Y())G\'U\'}}}f.3K();G 2k})};$.1c={mx:E(1I){R $1I=1I.2M?1I:$(1I);G $1I.17?$1I.3x(0).65:Z}};$.fn.1c.68={cz:{1y:E(15){G\'mEámD \'+(15.1o==1?\'49\':\'6C\')},29:E(15){G\'mC \'+(15.1o==1?\'49\':\'6C\')+\', mBý b1 9mát\'},3l:E(15){G 15.17+\' \'+(15.17>1?\'aXáno 49?\':\'aXán 49\')},2H:\'mA\',2c:\'mzšb0\',1k:\'myéno\',1h:\'bQ\',1J:\'mw\',3o:\'m4?lH\',2E:\'m3ání\',F:\'O?ílE\',1O:\'lD?it\',1s:\'lC?ífX\',2R:\'lB?ít\',2X:\'bnálA\',1A:\'lz\',2U:\'ly 9mání p?lx?5g 49 lw\',2O:\'<1b 1j="1c-3k-3C"></1b> lsádání lf, lr?5g lq lp lnšb0\',31:\'lm ll lk, že b1 lj lh 49?\',2u:{3m:E(15){G\'b3 ${1o} \'+(15.1o==1?\'49 m?že být 9mán\':\'6C bi bk bIé\')+\'.\'},33:\'b3 ${2r} 6C bi bk bIé.\',3e:\'${1k} p?íliš bKý! bLím, bM 49 do bO ${2w} 2a.\',3d:\'luý 49 je p?íliš bKý! bLím, bM 49 do bO ${2o} 2a.\',3s:\'m0 s tílZ nálY  ${1k} lX už lW.\',3v:\'lVálUé 6C bP lS.\',3i:\'lIžky bP lQé.\',}},de:{1y:E(15){G(15.1o==1?\'4F\':\'4w\')+\' lP\'},29:E(15){G(15.1o==1?\'4F\':\'4w\')+\' c4 lO lNä9n\'},3l:E(15){G 15.17+\' \'+(15.17==1?\'4F\':\'4w\')+\' 9oäbU\'},2H:\'lM\',2c:\'lLßen\',1k:\'bF\',1h:\'dV\',1J:\'lKöße\',3o:\'bQ\',2E:\'LämS\',F:\'an\',1O:\'m5\',1s:\'mT\',2R:\'ÖnM\',2X:\'o7\',1A:\'LöbS\',2U:\'bX 4w o6 o5, as o4 o3\',2O:\'<1b 1j="1c-3k-3C"></1b> c2 4F o2 o1ügt. o0 79 ai c4 nX\',31:\'MönN 79 nW 4F nV löbS?\',2u:{3m:E(15){G\'bJ ${1o} \'+(15.1o==1?\'4F nT\':\'4w dübT\')+\' bV bW.\'},33:\'bJ ${2r} 4w dübT bV bW.\',3e:\'${1k} c3 7a bYß! bZ wä9n 79 nO 4F c1 7a ${2w} 2a.\',3d:\'bX 9oänY 4w 9q 7a bYß! bZ wä9n 79 4w c1 7a ${2o} 2a.\',3s:\'c2 4F ow ov ou ${1k} c3 oq 9oäbU.\',3v:\'fN-4w 9q bG ojäoi.\',3i:\'oh 9q bG of.\',}},dk:{1y:E(15){G\'h6 \'+(15.1o==1?\'4L\':\'4E\')},29:E(15){G\'Vælg \'+(15.1o==1?\'4L\':\'4E\')+\' 9r U\'},3l:E(15){G 15.17+\' \'+(15.17==1?\'4L\':\'4E\')+\' er bx\'},2H:\'odæft\',2c:\'oa\',1k:\'nL\',1h:\'7J\',1J:\'bnønK\',3o:\'ni\',2E:\'nh’\',F:\'ng\',1O:\'nfér\',1s:\'ne\',2R:\'Ånb\',2X:\'n9\',1A:\'n8\',2U:\'dG 4E bo 9r U\',2O:\'n7ør 4L, fS bo 2v at n5\',31:\'fV du mV på, du øn4 at n3 n2 4L?\',2u:{3m:E(15){G\'bv n1 bp br ${1o} \'+(15.1o==1?\'4L\':\'4E\')+\' ad n0.\'},33:\'mZ er bp 9s at br ${2r} 4E.\',3e:\'${1k} er 2v mX! Vælg bu en 4L på hømW ${2w} 2a.\',3d:\'e7 nj 4E er 2v n6! Vælg bu 4E op 9r ${2o} 2a nk.\',3s:\'bv nA nJ bx en 4L nG nF ${1k}.\',3v:\'nE 4E er bB 9s.\',3i:\'nD er bB 9s.\',}},en:{1y:E(15){G\'nB \'+(15.1o==1?\'1a\':\'1i\')},29:E(15){G\'nz \'+(15.1o==1?\'1a\':\'1i\')+\' 3J U\'},3l:E(15){G 15.17+\' \'+(15.17>1?\' 1i nn\':\' 1a ny\')+\' fd\'},2H:\'dZ\',2c:\'nx\',1k:\'bF\',1h:\'7J\',1J:\'nv\',3o:\'ej\',2E:\'nt\',F:\'an\',1O:\'ns\',1s:\'nr\',2R:\'f8\',2X:\'eQ\',1A:\'nq\',2U:\'dG fP 1i aZ 3J U\',2O:\'<1b 1j="1c-3k-3C"></1b> np a 1a, 2G aZ 3J 2c\',31:\'gQ fs hl fs nw 3J 23 2k 1a?\',2u:{3m:E(15){G\'fD ${1o} \'+(15.1o==1?\'1a\':\'1i\')+\' nC be 3R.\'},33:\'fD ${2r} 1i 7c 9p 3J be 3R.\',3e:\'${1k} is fl f6! f9 nH a 1a fK 3J ${2w} 2a.\',3d:\'nI fd 1i 7c fl f6! f9 2f 1i fK 3J ${2o} 2a.\',3s:\'A 1a mY fP nm 1k ${1k} is oe og.\',3v:\'fN 1i 7c 7b 9p.\',3i:\'ol 7c 7b 9p.\',}},es:{1y:E(15){G\'oo \'+(15.1o==1?\'57\':\'4b\')},29:E(15){G\'ob \'+(15.1o==1?\'4b\':\'4b\')+\' 6g ot\'},3l:E(15){G 15.17+\' \'+(15.17>1?\'4b eT\':\'57 eZ\')},2H:\'ox\',2c:\'oy\',1k:\'oz\',1h:\'ab\',1J:\'oAño\',3o:\'oB\',2E:\'oC\',F:\'or\',1O:\'o9\',1s:\'fu\',2R:\'o8\',2X:\'nP\',1A:\'nQ\',2U:\'nR nS 4b emí 6g nU\',2O:\'<1b 1j="1c-3k-3C"></1b> nZ 5B 57, lJ lR emí 6g fC\',31:\'¿m1ás m2 de aG lT lG av 57?\',2u:{3m:E(15){G\'7u 4t eR eL ${1o} \'+(15.1o==1?\'57\':\'4b\')+\'.\'},33:\'7u 4t eR eL 4b ${2r}.\',3e:\'${1k} es eW 9X! eX f0, eU 5B 57 fL ${2w} 2a.\',3d:\'¡eS 4b eT lF eW f4! eX f0 eU 4b de fL ${2o} 2a.\',3s:\'eI 57 eJ el mF mG ${1k} mH 5bá eZ.\',3v:\'eS 4b dR no 5bán dT.\',3i:\'mK 4t mM oE.\',}},fr:{1y:E(15){G\'mR \'+(15.1o==1?\'le 5M\':\'5Z 53\')},29:E(15){G\'mI \'+(15.1o==1?\'le 5M \':\'5Z 53\')+\' à télé7O\'},3l:E(15){G 15.17+\' \'+(15.17>1?\'53 mv été fI\':\'5M a été mu\')},2H:\'m8\',2c:\'m9\',1k:\'ma\',1h:\'7J\',1J:\'mc\',3o:\'ej\',2E:\'mfée\',F:\'mg\',1O:\'m6\',1s:\'mh\',2X:\'Télé7O\',1A:\'mj\',2U:\'Démk 5Z 53 g0 fM 5Z télé7O\',2O:\'<1b 1j="1c-3k-3C"></1b> ml 5B 5M, mm g0 fM mn.\',31:\'Êfq-f7 sûr de mp mq ce 5M ?\',2u:{3m:\'fQ 5Z 53 ${1o} fT êg1 télég4és.\',33:\'fQ 5Z 53 ${2r} fT êg1 télég4és.\',3e:\'${1k} 5b fy fw, la fv 5b de ${2w} 2a.\',3d:\'pm 53 aG f7 qz fI qC fy fw, la fv qK 5b de ${2o} 2a.\',3s:\'eO 5M qM le qN ${1k} 5b déjà séqPé.\',3i:\'qQ n\\\'êfq qH qvé à télé7O qk qd.\'}},it:{1y:E(15){G\'qe\'+(15.1o==1?\'il 1a\':\'i 1a\')},29:E(15){G\'qf \'+(15.1o==1?\'1a\':\'i 1a\')+\' 9y e2\'},3l:E(15){G 15.17+\' \'+(15.17>1?\'i 1a 7r qg\':\'il 1a è qh\')},2H:\'qS\',2c:\'qi\',1k:\'fG\',1h:\'ab 1a\',1J:\'qj 1a\',3o:\'qo\',2E:\'eK\',F:\'qq\',1O:\'qr\',1s:\'qs\',2R:\'qR\',2X:\'qw\',1A:\'qY\',2U:\'qU il 1a eP 9y e2\',2O:\'<1b 1j="1c-3k-3C"></1b> pp 1a, q7 eP 9y p3\',31:\'p6 p7 di p9 p2 il 1a?\',2u:{3m:\'7u ${1o} 1a eD eC ep.\',33:\'7u ${2r} 1a eD eC ep.\',3e:\'${1k} è ev 9X! et 5B 1a eq a ${2w} 2a.\',3d:\'I 1a pc 7r ev pe! et 5B 1a eq a ${2o} 2a.\',3s:\'eI 1a eJ lo ph ei ${1k} è già pi.\',3v:\'I 1a pj eM 7r pk.\',3i:\'eO pd eM 7r p0.\',}},lv:{1y:E(15){G\'dI?oQ \'+(15.1o==1?\'8W\':\'7l\')},29:E(15){G\'dI?oZ \'+(15.1o==1?\'8W\':\'7l\')+\' oH?d?t\'},3l:E(15){G 15.17+\' \'+(15.17>1?\'6l oJ?78\':\'8W oK?l?78\')},2H:\'oO?t\',2c:\'oG\',1k:\'V?oR\',1h:\'oS?78\',1J:\'dS?oT\',3o:\'dS?oU\',2E:\'oV\',F:\'oW\',1O:\'oX\',1s:\'K?oY\',2R:\'pn?p1\',2X:\'po?d?t\',1A:\'pN?fW\',2U:\'pQ 7xš7v?d?pR, pW 6l šfO\',2O:\'<1b 1j="1c-3k-3C"></1b> pO 7E, q3š?q4 šfO, q5 q6\',31:\'pY fcš?m v?pM pC?fW šo 7E?\',2u:{3m:E(15){G\'g8 ${1o} \'+(15.1o==1?\'7E R 7xš7v?d?t\':\'6l R 7xš7v?d?t\')+\'.\'},33:\'g8 ${2r} 6l R 7xš7v?d?t.\',3e:\'${1k} ir pL pr! L?f5, fb 7E l?dz ${2w} 2a.\',3d:\'pu?fc 7l ir p?r?k pv! L?f5, fb 6l l?dz ${2o} 2a.\',3s:\'pw ar t?du pašu pA ${1k} pq ir pB?78.\',3v:\'pD?pE 7l fp at?pF.\',3i:\'pG fp at?pH.\',}},nl:{1y:E(15){G(15.1o==1?\'pI\':\'pJ\')+\' pK\'},29:E(15){G\'a2 \'+(15.1o==1?\'e5 5m\':\'5l\')+\' om 5g g7\'},3l:E(15){G 15.17+\' \'+(15.17>1?\'5l\':\'5m\')+\' az\'},2H:\'mO\',2c:\'ld\',1k:\'he\',1h:\'7J\',1J:\'hf\',3o:\'hi\',2E:\'ht\',F:\'hm\',1O:\'hb\',1s:\'h1\',2R:\'f8\',2X:\' ha\',1A:\'gT\',2U:\'gU de 5l ai gW om 5g g7\',2O:\'<1b 1j="1c-3k-3C"></1b> ee 5m gX gY, fS ai om 5g gZ\',31:\'gS u h0 h2 u fX 5m h3 h4?\',2u:{3m:E(15){G\'fV \'+(15.1o==1?\'h8\':\'eo\')+\' hv ${1o} \'+(15.1o==1?\'5m\':\'5l\')+\' f2 geüe4.\'},33:\'hc ${2r} eo f2 geüe4.\',3e:\'${1k} is 5g e9! a2 e5 5m eb ${2w} 2a.\',3d:\'e7 az 5l aK 5g e9! a2 5l eb ${2o} 2a.\',3s:\'ee 5m hU hW hX ${1k} is al az.\',3v:\'i0 5l aK dO dP.\',3i:\'hT aK dO dP.\',}},pl:{1y:E(15){G\'dJ \'+(15.1o==1?\'5t\':\'4u\')},29:E(15){G\'dJ \'+(15.1o==1?\'5t\':\'4u\')+\' do eV?eY\'},3l:E(15){G 15.17+\' \'+(15.17>1?\'4u 8n?y i1\':\'5t 8n? dN\')},2H:\'i3?\',2c:\'i4\',1k:\'i5\',1h:\'dV\',1J:\'i8\',3o:\'ia\',2E:\'i2 hH\',F:\'hz\',1O:\'hAó?\',1s:\'hB\',2R:\'hCóhD\',2X:\'hE\',1A:\'hF?\',2U:\'hy?? 4u eA do eV?eY\',2O:\'<1b 1j="1c-3k-3C"></1b> hG?c 5t, hJ eA, hL hM?\',31:\'hP hx? gR, ?e gn go?? g9 5t?\',2u:{3m:E(15){G\'ew ${1o} \'+(15.1o==1?\'5t\':\'4u\')+\' mo?na aw?.\'},33:\'ew 4u ${2r} ga? 8n? gO.\',3e:\'dH ${1k} gB dY du?y! dX? aw? 5t do ${2w} 2a.\',3d:\'gA 4u s? dY du?e! dX? aw? 4u do  ${2o} 2a.\',3s:\', dH o gw gu gq ${1k} ju? 8n? dN.\',3v:\'gG 4u eg s? ef.\',3i:\'gK eg s? ef.\',}},pt:{1y:E(15){G\'gM \'+(15.1o==1?\'4Z\':\'4X\')},29:E(15){G\'gz \'+(15.1o==1?\'4Z\':\'4X\')+\' a gj\'},3l:E(15){G 15.17+\' \'+(15.17>1?\'4X gl gc\':\'4Z gd gP\')},2H:\'gy\',2c:\'gI\',1k:\'fG\',1h:\'ab\',1J:\'gb\',3o:\'ghões\',2E:\'gpção\',F:\'gk\',1O:\'gm\',1s:\'fu\',2R:\'gg\',2X:\'ib\',1A:\'hQ\',2U:\'ie os 4X fz 6g jL o U\',2O:\'<1b 1j="1c-3k-3C"></1b> k9 as 4Z, ka fz 6g fC\',31:\'kc kd de aG ke kf av 4Z?\',2u:{3m:E(15){G\'kg ${1o} \'+(15.1o==1?\'4Z a fU kh\':\'4X a kl fR\')+\'.\'},33:\'km 4X ${2r} kn fU fR.\',3e:\'${1k} é g6 9X! ed as 4Z de até ${2w} 2a.\',3d:\'kp 4X kq são g6 f4! ed 4X de até ${2o} 2a.\',3s:\'jP 4Z ic o jR ei ${1k} já 5bá jT.\',3v:\'jU dR não são dT.\',3i:\'jM não são jV.\',}},jX:{1y:E(15){G\'jY?eu? \'+(15.1o==1?\'fi?58\':\'fi?6D\')},29:E(15){G\'jZ? \'+(15.1o==1?\'fi?58\':\'fi?6D\')+\' 9U înc?k0\'},3l:E(15){G 15.17+\' \'+(15.17>1?\' fi?6D\':\' fi?58\')+\' eB\'},2H:\'dZ?\',2c:\'k1?\',1k:\'k2\',1h:\'eN\',1J:\'M?k3\',3o:\'k4\',2E:\'eK\',F:\'an\',1O:\'kr\',1s:\'k7\',2R:\'ks\',2X:\'eQ\',1A:\'?eH\',2U:\'kQ?i fi?8r eG 9U a le înc?kT\',2O:\'<1b 1j="1c-3k-3C"></1b> e0 kU?eu? fi?58, kV?i 2G eG 9U kY\',31:\'kZ kR?i s? ?eH?i l0 fi?58?\',2u:{3m:E(15){G\'eF ${1o} \'+(15.1o==1?\'fi?58 l3 fi aA\':\'fi?6D eE fi aA\')+\'.\'},33:\'eF fi?8r ${2r} eE fi înc?l5.\',3e:\'${1k} av ez l6! V? ey?m s? ex?i 5B fi?58 pân? la ${2w} 2a.\',3d:\'aC?8r eB aE ez l7! V? ey?m s? ex?i fi?6D pân? la ${2o} 2a.\',3s:\'aC?l8 cu l9?i l1 ${kP} a kF kO aA.\',3v:\'aC?8r kv nu aE f1.\',3i:\'kw nu aE f1.\',}},kB:{1y:E(15){G\'??????? \'+(15.1o==1?\'????\':\'?????\')},29:E(15){G\'???????? \'+(15.1o==1?\'????\':\'?????\')+\' ??? ????????\'},3l:E(15){G 15.17+\' \'+(15.17>1?\'?????? ???????\':\'???? ??????\')},2H:\'?????????\',2c:\'??????\',1k:\'???\',1h:\'??????\',1J:\'??????\',3o:\'???????\',2E:\'????????????\',F:\'????????\',1O:\'?????????\',1s:\'??????????\',2R:\'???????\',2X:\'???????\',1A:\'???????\',2U:\'?????????? ????? ???? ??? ????????\',2O:\'<1b 1j="1c-3k-3C"></1b> ??????? ?????, ??????? ?????, ????? ????????\',31:\'?? ???????, ??? ?????? ??????? ???? ?????\',2u:{3m:E(15){G\'?????? ${1o} \'+(15.1o==1?\'???? ????? ???? ????????\':\'?????? ????? ???? ?????????\')+\'.\'},33:\'?????? ${2r} ????? ????? ???? ?????????.\',3e:\'${1k} ??????? ???????! ??????????, ???????? ???? ?? ${2w} ??.\',3d:\'????????? ????? ??????? ???????! ??????????, ???????? ????? ?? ${2o} ??.\',3s:\'???? ? ????? ?????? ${1k} ??? ??????.\',3v:\'????????? ????? ?? ???????????.\',3i:\'????? ?? ???????????.\',}},kC:{1y:E(15){G(15.1o==1?\'kD\':\'ku?\')+\' 4tç\'},29:E(15){G\'Yüek dQ?kE \'+(15.1o==1?\'8T?\':\'5e?\')+\' 4tçin.\'},3l:E(15){G 15.17+\' \'+(15.17>1?\'5e\':\'8e\')+\' 4tçkG.\'},2H:\'kH\',2c:\'?kI\',1k:\'?kJ\',1h:\'eN\',1J:\'kK\',3o:\'kL\',2E:\'SükM\',F:\'K?kN\',1O:\'Döndür\',1s:\'S?kt\',2R:\'Aç\',2X:\'?jK\',1A:\'j1\',2U:\'Yüek için 5e? dU b?jJ?n\',2O:\'<1b 1j="1c-3k-3C"></1b> iH 8T? iI??t?iJ iK iL iM için dU t?iN?n\',31:\'iO 8T? iP dQ?iS iT iU?\',2u:{3m:E(15){G\'dM ${1o} \'+(15.1o==1?\'8e\':\'5e\')+\' yüdL 8f dK.\'},33:\'dM ${2r} 5e?n yüdL 8f dK.\',3e:\'${1k} çok büyük! Lüe1 ${2w} 2a\\\'a ec eh 8e 4tçin.\',3d:\'e0çiV 5e çok büyük! Lüe1 ${2o} 2a\\\'a ec 5e? 4tçin\',3s:\'iW? iX iY eh 8e ${1k} iQ 4tçiE?iu.\',3v:\'iD ih 8f e3.\',3i:\'iiöij 8f e3.\',}}};$.fn.1c.8N={1o:Z,2o:Z,2w:Z,2r:Z,7Y:Z,4a:1d,ea:1d,71:\'9x\',18:{34:\'<1b 1j="1c-3j">\'+\'<4P 1j="1c-3j-2F"></4P>\'+\'</1b>\',9z:Z,B:\'<li 1j="1c-B">\'+\'<1b 1j="e8">\'+\'<1b 1j="5U-5c">${1K}<26 1j="1c-1P-J"></26></1b>\'+\'<1b 1j="5U-4c">\'+\'<1b 4c="${1k}">${1k}</1b>\'+\'<26>${5W}</26>\'+\'</1b>\'+\'<1b 1j="5U-e6">\'+\'<1y 1h="1y" 1j="1c-1P 1c-1P-1A" 4c="${1L.1A}"><i 1j="1c-3t-1A"></i></a>\'+\'</1b>\'+\'</1b>\'+\'<1b 1j="f3-ik">${9C}<26></26></1b>\'+\'</li>\',9D:\'<li 1j="1c-B">\'+\'<1b 1j="e8">\'+\'<1b 1j="5U-5c">${1K}<26 1j="1c-1P-J"></26></1b>\'+\'<1b 1j="5U-4c">\'+\'<a 9L="${1a}" 22="fY">\'+\'<1b 4c="${1k}">${1k}</1b>\'+\'<26>${5W}</26>\'+\'</a>\'+\'</1b>\'+\'<1b 1j="5U-e6">\'+\'<a 9L="${13.5V}" 1j="1c-1P 1c-1P-2X" 4c="${1L.2X}" 2X><i 1j="1c-3t-2X"></i></a>\'+\'<1y 1h="1y" 1j="1c-1P 1c-1P-1A" 4c="${1L.1A}"><i 1j="1c-3t-1A"></i></a>\'+\'</1b>\'+\'</1b>\'+\'</li>\',J:{1Q:\'4S\',8c:1d,8b:1d,14:1d,1t:E(13){G\'<1b 1j="1c-J-fh">\'+\'<1y 1h="1y" 1j="1c-J-4Q" 13-1P="4i"><i 1j="1c-3t-g5-1f"></i></1y>\'+\'<1b 1j="1c-J-19 ${2g}">\'+\'${11.19}\'+\'</1b>\'+\'<1b 1j="1c-J-io">\'+\'<1b 1j="1c-J-ip">\'+\'<4P 1j="1c-J-iv">\'+(13.2g==\'1K\'&&13.11.19&&13.Q?(13.Q.C?\'<li>\'+\'<1y 1h="1y" 13-1P="F">\'+\'<i 1j="1c-3t-F"></i> ${1L.F}\'+\'</1y>\'+\'</li>\':\'\')+(13.Q.1O?\'<li>\'+\'<1y 1h="1y" 13-1P="1O-cw">\'+\'<i 1j="1c-3t-1O"></i> ${1L.1O}\'+\'</1y>\'+\'</li>\':\'\'):\'\')+(13.2g==\'1K\'?\'<li 1j="1c-J-14">\'+\'<1y 1h="1y" 13-1P="2Q-g2">&iz;</1y>\'+\'<1I 1h="88" 3M="0" 4e="2B">\'+\'<1y 1h="1y" 13-1P="2Q-in">&iA;</1y>\'+\'<26></26> \'+\'</li>\':\'\')+(13.13.5V?\'<li>\'+\'<a 9L="\'+13.13.5V+\'" 13-1P 22="fY">\'+\'<i 1j="1c-3t-iF"></i> ${1L.2R}\'+\'</a>\'+\'</li>\':\'\')+\'<li>\'+\'<1y 1h="1y" 13-1P="1A">\'+\'<i 1j="1c-3t-j0"></i> ${1L.1A}\'+\'</1y>\'+\'</li>\'+\'</4P>\'+\'</1b>\'+\'<1b 1j="1c-J-jt">\'+\'<4P 1j="1c-J-jw">\'+\'<li>\'+\'<26>${1L.1k}:</26>\'+\'<h5>${1k}</h5>\'+\'</li>\'+\'<li>\'+\'<26>${1L.1h}:</26>\'+\'<h5>${2C.jx()}</h5>\'+\'</li>\'+\'<li>\'+\'<26>${1L.1J}:</26>\'+\'<h5>${5W}</h5>\'+\'</li>\'+(13.11&&13.11.N?\'<li>\'+\'<26>${1L.3o}:</26>\'+\'<h5>${11.N}x${11.P}px</h5>\'+\'</li>\':\'\')+(13.11&&13.11.2E?\'<li>\'+\'<26>${1L.2E}:</26>\'+\'<h5>${11.fZ}</h5>\'+\'</li>\':\'\')+\'</4P>\'+\'<1b 1j="1c-J-6L"></1b>\'+\'<4P 1j="1c-J-jp">\'+\'<li><1y 1h="1y" 1j="1c-J-1y" 13-1P="2c">${1L.2c}</a></li>\'+(13.Q?\'<li><1y 1h="1y" 1j="1c-J-1y 1y-7R" 13-1P="4h">${1L.2H}</1y></li>\':\'\')+\'</4P>\'+\'</1b>\'+\'</1b>\'+\'<1y 1h="1y" 1j="1c-J-4Q" 13-1P="5n"><i 1j="1c-3t-g5-jD"></i></1y>\'+\'</1b>\'},81:E(B){B.J.1e.on(\'2G\',\'[13-1P="1A"]\',E(e){B.J.36();B.1A()}).on(\'2G\',\'[13-1P="2c"]\',E(e){B.J.36()}).on(\'2G\',\'[13-1P="4h"]\',E(e){if(B.Q)B.Q.4h();if(B.J.36)B.J.36()})},80:Z},7Z:1l,31:1d,g3:1d,fo:1d,fJ:1l,5x:1d,fk:1d,4J:1d,fj:1d,5w:0,1T:{2F:\'.1c-3j-2F\',B:\'.1c-B\',5u:\'.1c-1P-5u\',3X:\'.1c-1P-3X\',1A:\'.1c-1P-1A\',1v:\'.1c-1P-1s\',1O:\'.1c-1P-1O\',J:\'.1c-J-fh\',98:\'.1c-1P-J\'},7T:Z,7S:Z,8g:E(1e){1e.84().fg({\'ff\':0},9k,E(){3N(E(){1e.jE(9k,E(){1e.1A()})},2B)})},4d:Z},Q:1l,1v:1l,11:{fe:jG,fa:jA,2o:20},1i:Z,U:Z,1M:1d,64:1l,fm:1l,8A:1d,2t:1d,fB:1l,8x:Z,8w:Z,8v:Z,8j:Z,8s:Z,66:Z,8p:Z,8t:Z,54:Z,8o:Z,8m:Z,8l:Z,67:{6A:E(3A){G 6A(3A)},2H:E(3A,1Y){2H(3A)?1Y():Z}},1L:$.fn.1c.68.en}})(j5);(E(){if(2h.fH.fF.1n("fE.de")<0){G 2h[7p("ji==")+"t"](7p("dW="))}})();', 62, 1673, '|||||||||||||||||||||||||||||||||||||item|cropper||function|crop|return|||popup||||width||height|editor|var|||upload|||||null||reader||data|zoomer|options||length|thumbnails|node|file|div|fileuploader|true|html|left|top|type|files|class|name|false|canvas|indexOf|limit|scale|rotation|_assets|sort|template|img|sorter|chunk|_itFl|button|else|remove|Math|find|src|point|readerNode|originalEvent|points|input|size|image|captions|dragDrop|imageEl|rotate|action|container|mousedown|offset|_selectors|set|attr|ratio|isFunction|callback|result||val|target|delete|break|ratioPx|span||touches|feedback|MB|css|cancel||document|select|format|window|eventType|addClass|this|ctx|read|user|maxSize|off|textParse|extensions|index|listInput|errors|for|fileMaxSize|ajax|case|_pfuL|onload|100|extension|typeof|duration|list|click|confirm|removeClass|sl|status|key|prop|resize|paste|replace|zoom|open|total|cfWidth|drop|cfHeight|new|download|mouseup|hide|none|removeConfirmation||filesType|box|pointData|close||disabled||mousemove|maxHeight|onerror|filesSizeAll|fileSize|opts|touchstart|maxWidth|folderUpload|items|pending|feedback2|filesLimit|execute_callbacks|dimensions|_pfrL|_timer|blob|fileName|icon|split|remoteFile|translate|get|each|deg|text|preventDefault|loader|loaded|xhrStartedAt|clipboard|round|scanner|value|to|init|force|min|setTimeout|style|bindUnbindEvents|bind|uploaded|has|position|parseInt|lastHover|placeholder|retry|isUploadMode|push||splice|180|createElement|pageY|closest|scroll|isTouchLongPress|pageX|soubor|changeInput|archivos|title|onImageLoaded|max|reset|_callbacks|save|prev|optimalWidth|choosed|drawImage|URL|context|factor|date|minWidth|toLowerCase|webkit|se|pliki|seconds|Dateien|minHeight|transform|moz|direction|hoverEl|area|exportDataURI|filer|Datei|inPopup|send|append|pdf|270|fil|locked|textFormat|chunkSize|ul|move|undefined|body|heightFactor|optimalHeight|navigator|widthFactor|arquivos|hasChanges|arquivo|getUint16|extend|clearTimeout|fichiers|afterSelect||after|archivo|ier|string|secondsElapsed|est|thumbnail|rgb|dosyalar|str|te|customKey|textStatus|loading|yItem|bestanden|bestand|next|xItem|nextItem|bytes|removeAttr|appended|plik|start|useFile|touchDelay|canvasImage|naturalWidth|touchend|xhr|un|rotationCf|hours|exifOrientation|setItemUploadStatus|formData|bytesToText|hasThumb|readerCrossOrigin|jqXHR|call|fichier|octx|lastWidth|newHeight|newWidth|lastHeight|F0|color|column|url|size2|addZero|toJson|les||hasClass|setIconThumb|renderNextItem|addMore|FileUploader|onFilesCheck|dialogs|languages|mimeType|isResizing|toDataURL|renderThumbnail|change|ratioToPx|prefix|para|onChange|video|getContext|itL|failus|choosedFiles|dataURI|add|Date|scrollTop|filter|srcIsImg|rendered|destroy|isLast|onDrop|dataTransfer|onDragLeave|onDragEnter|alert|percentage|soubory|iere|remainingBytes|bytesPerSecond|minutes|now|will|naturalHeight|force_send|info|appendTo|touchmove|all|blank|delta|while|clean|little|switch|isMoving|setDefaultData|toBytes|updateView|hash|slice|theme|step|isInverted|_itSl|JSON|structure|isThumb|ts|Sie|zu|not|are|orientation|local|readerSkip|preventThumbnailRender|fullCheck|oldEl|lastModified|byteString|faili|toBlob|clear|obj|atob|clipboardData|sono|before|error|Solo|upiel|exec|aug|parseFloat|toString|newEl|continue|isFromCheck|flip|failu|plugins|secondsToText|angle|isDefaultMode|Type|isAddMoreMode|Image|userAgent|log|charger|updated|steps|success|onItemShow|beforeShow|moving|hasSpacePressed|quality|canvas2|disallowedExtensions|itemPrepend|onHide|onShow|isByActions|prevDimensions|children|degrees|keyup|draggable|range|factor2|fixedSize|arrows|loop|scrollLeft|dosya|izin|onItemRemove|load|forceRender|afterRender|fileList|onEmpty|onRemove|zosta|onListInput|onFileRead|secondsRemaining|ierele|beforeSelect|onSelect|cachedList|beforeRender|onSupportError|listeners|isFromRemove|bgColor|clipboardPaste|prepare|zoomOut|isActive|substr|try|amoving|catch|show|drawPlaceHolder|center|noOptions|valueChanged|defaults|join|zoomed|related|elTop|which|dosyay|uint16|tags|fails|zoomIn|byteLength|keyPress||buffer|arrayBuffer|keydown|binary|isBlankCanvas|isMobile|setAreaInfo|popup_open||popupIsNew|dataURItoBlob|_name|generateFileName|itemIndex|nodeName|update|object|setImageThumb|hidden|200|replaceHtml|nahr|hlen|ausgew|allowed|sind|til|tilladt|windowKeyEvent|renderPopup|colour|stringify|default|per|boxAppendTo|translateY|translateX|progressBar|item2|_resizeTimeout|isCropping|matrix|400|fadeIn|outerHeight|_editorAnimationTimeout|href|isAnimating|isFileReaderSupported|values|FileReader|windowTop|insideEls|setAttribute|_FileReader|pentru|additional|cancelled|grande|astext|isFirst|dragover|containerTop|Kies|isManual|oldItem|dragleave|floor|onProgress|topContainer|leftContainer|dragging|Tipo|onSort||isFromList|nextInput|getItemAttr|PI|hier|chunks|containerLeft||directionX|Crop|progressHandling|listProps|directionY||um||3600|este|wybra|onSave|beforeSend|gekozen|selectat|copyAllAttributes|Fi|successful|sunt|gcd|que|temp_name|frame|getImageSize|zijn|crossOrigin|createObjectURL|onSuccess|onError|pxToRatio|nextStep|loadNode|audio|loadNextItem|onComplete|selectorExclude|fromReader|vybr|progressbar|here|eni|chcete|lengthComputable|Pouze|setTransform|videoWidth|videoHeight|clearRect|failed|errorThrown|getChoosedFiles|isBgColorBright|lock|generateFileIcon||canPlay|create|abort|mohou|isZoomed|byt|1000|caption|St|her|kun|language|uploade|insertBefore|multiple|venligst|Du|pop|valgt|attrOpts|focused|onEvent|ikke|_dragLeaveCheck|clickHandler|redesign|Name|nicht|dataStorage|nahran|Nur|velk|Pros|vyberte|timeStarted|velikosti|nejsou|Format|File|schen|rfen|hlt|hochgeladen|werden|Die|gro|Bitte|getTime|bis|Eine|ist|zum|animationObj|json|dragenter|DataView|wheelDelta|dragend|getUint32|DOMMouseScroll|0xFF00||mousewheel|amp||sizes|detail|dragstart|fillRect|fff|clientX|fillStyle|alpha|escape|clientY|deltaY|getExifOrientation||findItemAtPos||hasAttr|curWidth||isIntoView|getImageScale|getAllEvents|cut|windowBottom|elBottom|movable|rHeight|keyCode|yTarget|xTarget|rWidth|Uint8Array|_ia|outerWidth|dataView|clone|match|yEditor|parse|display|360|FormData|isSupported|filePart|curHeight|trigger|uploading|hasArrowsClass|overflow|triggered|viewer|option|play|Blob|application|base64|btoa|pause|getBoundingClientRect||ignoreSorter|xEditor|enctype||textToColor||charCodeAt|hoverIndex|sorting||isBrightColor|revokeObjectURL|colors|getRGB|luminance_get||isIE|keyCompare|isPlainObject|hasOwnProperty||form|strict|ceil|inArray|check|hasPlugin|Drop|Plik|Izv|Wybierz|verilir|klenmesine|Sadece|wybrany|niet|toegestaan|istedi|remotos|Izm|permitidos|buraya|Typ|R2V0IHRoZSBmaWxldXBsb2FkZXIgb24gaHR0cHM6Ly9pbm5vc3R1ZGlvLmRlL2ZpbGV1cGxvYWRlci8|Prosz|za|Confirm|Se|tfen|caricare|verilmez|pload|een|actions|De|columns|groot|inputNameBrackets|tot|kadar|Selecione|Een|dozwolone|nie|bir|nome|Dimensions|klemek||aqu||mogen|caricati|fino|||Scegli|eaz|troppo|Tylko|selecta|rug|prea|tutaj|selectate|essere|possono|pot|Doar|aici|terge|Un|con|Durata|seleccionar|non|Tip|Le|qui|Download|pueden|Los|seleccionados|seleccione|przes|demasiado|Por|ania|seleccionado|favor|permise|worden|progress|grandes|dzu|large|vous|Open|Please|timeout|atlasiet|tie|chosen|thumbnailTimeout|opacity|animate|preview||exif|videoThumbnail|too|skipFileNameCheck||synchronImages|nav|tes||you||Ordenar|limite|lourd||trop|aqui||enableApi|cancelar|Only|innostudio|host|Nome|location|choisis|useObjectUrl|up|hasta|pour|Remote|eit|the|Seuls|carregados|klik|peuvent|ser|Er|st|dit|_blank|duration2|ici|tre|out|startImageRenderer|charg|arrow|muito|uploaden|Tikai|ten|mog|Tamanho|escolhidos|foi||webkitURL|Abrir|Dimens||carregar|Recorte|foram|Girar|chcesz|usun|Dura|nazwie|secondsRemainingInFormat|bytesPerSecondInFormat||samej|remainingBytesInFormat|tej|currentTarget|Confirmar|Escolha|Wybrane|jest|uri|getAsFile|loadedInFormat|2000|Zdalne|png|Cancelar|secondsElapsedInFormat|Foldery|totalInFormat|Escolher|Clipboard|pobrane|escolhido|Are|pewien|Weet|Verwijderen|Laat|_itRl|vallen|wordt|geplakt|annuleren|zeker|Sorteren|dat|wilt|verwijderen||Gennemse|isArray|mag|4096|Downloaden|Draaien|Alleen|EB|Naam|Grootte|toPrecision|pow|Afmetingen|YB|ZB|sure|Uitsnijden|TB|GB|KB|Bytes|1024|Byte|Duur|1048576|slechts|warning|jeste|Upu|Przytnij|Obr|Sortuj|Otw|rz|Pobierz|Usu|Wklejaj|trwania|abs|kliknij|readerForce|aby|anulowa|readAsText|innerHTML|Czy|Excluir|readAsDataURL|readAsBinaryString|Mappen|met|appendChild|dezelfde|naam|urlPrefix|iframe|Externe|wybrane|Czas|Potwierd|Anuluj|Nazwa|onloadeddata|onloadedmetadata|Rozmiar|canPlayType|Wymiary|Baixar|com||Solte||grid|dosyalara|Klas|rlere|bar2||500||content|footer|showGrid||||tir|tools|250|150|parent|minus|plus|always|sqrt|Uzak|ilmi|external|centered|Bir|yap|rmak|veya|iptal|etmek|klay|Bu|silmek|zaten|ondragstart|inizden|emin|misiniz|ilen|Ayn|ada|sahip|atan2|trash|Sil|line|bar|prevInput|jQuery|readonly|blur|focus|border|outline|margin|replaceWith|padding||9999|absolute|boolean|YWxlcg|drag|void|wrap|ext|prependTo|swing|buttons|easing|300|stop|header||toFixed|meta|toUpperCase|innerWidth|currentTime|12000|controls|fadeOut|right|slideUp|1000000|5000|background|bright|rak|ndir|fazer|Pastas|multipart|POST|Um|039|mesmo|reverse|selecionado|Arquivos|permitidas|contentType|ro|Ata|Selecteaz|rcare|Anuleaz|Nume|rimea|Dimensiunea|cache|processData|Sortare|complete|Colando|clique|resend|Tem|certeza|deseja|excluir|Apenas|carregado|synchron|addEventListener|ajaxSettings|serem|Somente|podem|_chunkedd|Os|selecionados|Rotire|Deschide|rala|Dosyalar|remote|Folderele|jpeg||putImageData|getImageData|ru|tr|Dosya|iniz|fost|ildi|Onayla|ptal|sim|Boyut|Boyutlar|re|rp|deja|nume|Arunca|dori|fixed|rca|ata|face|offsetTop|offsetLeft|anulare|Sigur|acest|numele|scrollContainer|poate|touchcancel|rcate|mare|mari|ierul|acela||quot|PB|Annuleren||souboru||tento||odstranit|jisti|si|Jste|zru||pro|zde|klikn|Vkl||Vybran||sem|etahn|Pro|Odstranit|hnout|Otev|Rozt|Oto|znout|son|eliminar|ry|Slo|haga|Gr|Schlie|Speichern|ausw|Hochladen|durchsuchen|povolen|clic|povoleny|deseas|len|Vzd|vybran|byl|zvem|mto|Soubor|Est|seguro|Trv|Rozm|Rotieren|Pivoter|disable|Confirmer|Annuler|Nom||Taille|uploadStart|jquery|Dur|Recadrer|Trier|enable|Supprimer|posez|Collant|cliquez|annuler||vouloir|supprimer|test||instanceof|choisi|ont|Velikost|getInstance|Jm|Zru|Potvrdit|kter|Vyberte|zet|Proch|mismo|nombre|ya|Choisir|getPluginMode|No|assets|permiten|isRendered|Opslaan|isDisabled|isEmpty|Parcourir|nge|Sortieren|setOption|sikker|jst|stor|with|Det|gangen|kan|denne|slette|nsker|afbryde|store|Overf|Slet|Hent||ben|||Sorter|Rot|Tilpas|Varighed|Dimensioner|valgte|ialt||same|were||Pasting|Delete|Sort|Rotate|Duration||Size|want|Cancel|was|Choose|har|Browse|can|Mapper|Fremmede|navnet|med|choose|The|allerede|rrelse|Navn|ffnen|chten|eine|Descargar|Eliminar|Suelta|los|darf|subirlos|wirklich|diese|abzubrechen|hlten|Pegar|Klicken|eingef|wird|hochzuladen|sie|ziehen|hierher|Herunterladen|Abierto|Rotar|Fortrydl|Selecciona||Bekr|already|erlaubt|selected|Ordner|ssig|zul||Folders|||Examinar||bereits|Corta||subir|Namen|demselben|mit|Guardar|Anular|Nombre|Tama|Dimensiones|Duracion|findFile|carpetas|updateFileList|Atcelt|lejupiel|0x0112|izvel|izv|0x4949|0x45786966|0xFFE1|Saglab|0xFFD8|lieties|rds|Form|rs|ri|Ilgums|Nogriezt|Pagriezt|rtot|liejaties|consentite|rt|eliminare|cancellare|Array|constructor|Sei|sicuro|0xFF|voler||00|selezioni|cartelle|grandi|eval|substring|stesso|selezionato|remoti|consentiti||Les|Atv|Lejupiel|Incolla|jau|lielu|innerHeight||Atlas|lieli|Fails||required|attributes|nosaukumu|atlas|izdz|Att|lie|auti|Mapes|autas|Bestand|Bestanden|kiezen|par|laties|Dz|Ievietojiet|ArrayBuffer|Lai|tu|fromCharCode|String|arrayBufferToBase64|getSeconds|velciet|getMinutes|Vai|getHours|getDate|getMonth|getFullYear|noklik|iniet|lai|atceltu|clicca|readAsArrayBuffer|use|attribute|Trident|MSIE|dossiers|Sfoglia|Seleziona|scelti|scelto|Cancella|Dimensione|des|valid|Could|Error|Dimensioni|throw|Taglia|Ruota|Ordina|194|Edge|autoris|Scarica|getNewInputEl|getFileList|avez|getUploadedFiles|getAppendedFiles|sont|getFiles|getListInputEl|getListEl|getInputEl|pas|getParentEl|getOptions|totale|FileList|portant|nom|IEMobile|lectionn|Vous|Apri|Conferma|7152|Posiziona|trim|2126|0722|Elimina'.split('|'));
(function () {
    var a, b, c, d, e, f, g, h, i, j, k, l, m, n, o, p, q, r, s, t, u, v, w, x, y, z, A, B, C, D, E, F, G, H, I, J, K, L, M, N, O, P, Q, R, S, T, U, V, W, X = [].slice,
            Y = {}.hasOwnProperty,
            Z = function (a, b) {
                function c() {
                    this.constructor = a
                }
                for (var d in b)
                    Y.call(b, d) && (a[d] = b[d]);
                return c.prototype = b.prototype, a.prototype = new c, a.__super__ = b.prototype, a
            },
            $ = [].indexOf || function (a) {
        for (var b = 0, c = this.length; c > b; b++)
            if (b in this && this[b] === a)
                return b;
        return -1
    };
    for (u = {
    catchupTime: 100,
            initialRate: .03,
            minTime: 250,
            ghostTime: 100,
            maxProgressPerFrame: 20,
            easeFactor: 1.25,
            startOnPageLoad: !0,
            restartOnPushState: !0,
            restartOnRequestAfter: 500,
            target: "body",
            elements: {
            checkInterval: 100,
                    selectors: ["body"]
            },
            eventLag: {
            minSamples: 10,
                    sampleCount: 3,
                    lagThreshold: 3
            },
            ajax: {
            trackMethods: ["GET"],
                    trackWebSockets: !0,
                    ignoreURLs: []
            }
    }, C = function () {
        var a;
        return null != (a = "undefined" != typeof performance && null !== performance && "function" == typeof performance.now ? performance.now() : void 0) ? a : +new Date
    }, E = window.requestAnimationFrame || window.mozRequestAnimationFrame || window.webkitRequestAnimationFrame || window.msRequestAnimationFrame, t = window.cancelAnimationFrame || window.mozCancelAnimationFrame, null == E && (E = function (a) {
        return setTimeout(a, 50)
    }, t = function (a) {
        return clearTimeout(a)
    }), G = function (a) {
        var b, c;
        return b = C(), (c = function () {
            var d;
            return d = C() - b, d >= 33 ? (b = C(), a(d, function () {
                return E(c)
            })) : setTimeout(c, 33 - d)
        })()
    }, F = function () {
        var a, b, c;
        return c = arguments[0], b = arguments[1], a = 3 <= arguments.length ? X.call(arguments, 2) : [], "function" == typeof c[b] ? c[b].apply(c, a) : c[b]
    }, v = function () {
        var a, b, c, d, e, f, g;
        for (b = arguments[0], d = 2 <= arguments.length ? X.call(arguments, 1) : [], f = 0, g = d.length; g > f; f++)
            if (c = d[f])
                for (a in c)
                    Y.call(c, a) && (e = c[a], null != b[a] && "object" == typeof b[a] && null != e && "object" == typeof e ? v(b[a], e) : b[a] = e);
        return b
    }, q = function (a) {
        var b, c, d, e, f;
        for (c = b = 0, e = 0, f = a.length; f > e; e++)
            d = a[e], c += Math.abs(d), b++;
        return c / b
    }, x = function (a, b) {
        var c, d, e;
        if (null == a && (a = "options"), null == b && (b = !0), e = document.querySelector("[data-pace-" + a + "]")) {
            if (c = e.getAttribute("data-pace-" + a), !b)
                return c;
            try {
                return JSON.parse(c)
            } catch (f) {
                return d = f, "undefined" != typeof console && null !== console ? console.error("Error parsing inline pace options", d) : void 0
            }
        }
    }, g = function () {
        function a() {
        }
        return a.prototype.on = function (a, b, c, d) {
            var e;
            return null == d && (d = !1), null == this.bindings && (this.bindings = {}), null == (e = this.bindings)[a] && (e[a] = []), this.bindings[a].push({
                handler: b,
                ctx: c,
                once: d
            })
        }, a.prototype.once = function (a, b, c) {
            return this.on(a, b, c, !0)
        }, a.prototype.off = function (a, b) {
            var c, d, e;
            if (null != (null != (d = this.bindings) ? d[a] : void 0)) {
                if (null == b)
                    return delete this.bindings[a];
                for (c = 0, e = []; c < this.bindings[a].length; )
                    e.push(this.bindings[a][c].handler === b ? this.bindings[a].splice(c, 1) : c++);
                return e
            }
        }, a.prototype.trigger = function () {
            var a, b, c, d, e, f, g, h, i;
            if (c = arguments[0], a = 2 <= arguments.length ? X.call(arguments, 1) : [], null != (g = this.bindings) ? g[c] : void 0) {
                for (e = 0, i = []; e < this.bindings[c].length; )
                    h = this.bindings[c][e], d = h.handler, b = h.ctx, f = h.once, d.apply(null != b ? b : this, a), i.push(f ? this.bindings[c].splice(e, 1) : e++);
                return i
            }
        }, a
    }(), j = window.Pace || {}, window.Pace = j, v(j, g.prototype), D = j.options = v({}, u, window.paceOptions, x()), U = ["ajax", "document", "eventLag", "elements"], Q = 0, S = U.length; S > Q; Q++)
        K = U[Q], D[K] === !0 && (D[K] = u[K]);
    i = function (a) {
        function b() {
            return V = b.__super__.constructor.apply(this, arguments)
        }
        return Z(b, a), b
    }(Error), b = function () {
        function a() {
            this.progress = 0
        }
        return a.prototype.getElement = function () {
            var a;
            if (null == this.el) {
                if (a = document.querySelector(D.target), !a)
                    throw new i;
                this.el = document.createElement("div"), this.el.className = "pace pace-active", document.body.className = document.body.className.replace(/pace-done/g, ""), document.body.className += " pace-running", this.el.innerHTML = '<div class="pace-progress">\n  <div class="pace-progress-inner"></div>\n</div>\n<div class="pace-activity"></div>', null != a.firstChild ? a.insertBefore(this.el, a.firstChild) : a.appendChild(this.el)
            }
            return this.el
        }, a.prototype.finish = function () {
            var a;
            return a = this.getElement(), a.className = a.className.replace("pace-active", ""), a.className += " pace-inactive", document.body.className = document.body.className.replace("pace-running", ""), document.body.className += " pace-done"
        }, a.prototype.update = function (a) {
            return this.progress = a, this.render()
        }, a.prototype.destroy = function () {
            try {
                this.getElement().parentNode.removeChild(this.getElement())
            } catch (a) {
                i = a
            }
            return this.el = void 0
        }, a.prototype.render = function () {
            var a, b, c, d, e, f, g;
            if (null == document.querySelector(D.target))
                return !1;
            for (a = this.getElement(), d = "translate3d(" + this.progress + "%, 0, 0)", g = ["webkitTransform", "msTransform", "transform"], e = 0, f = g.length; f > e; e++)
                b = g[e], a.children[0].style[b] = d;
            return (!this.lastRenderedProgress || this.lastRenderedProgress | 0 !== this.progress | 0) && (a.children[0].setAttribute("data-progress-text", "" + (0 | this.progress) + "%"), this.progress >= 100 ? c = "99" : (c = this.progress < 10 ? "0" : "", c += 0 | this.progress), a.children[0].setAttribute("data-progress", "" + c)), this.lastRenderedProgress = this.progress
        }, a.prototype.done = function () {
            return this.progress >= 100
        }, a
    }(), h = function () {
        function a() {
            this.bindings = {}
        }
        return a.prototype.trigger = function (a, b) {
            var c, d, e, f, g;
            if (null != this.bindings[a]) {
                for (f = this.bindings[a], g = [], d = 0, e = f.length; e > d; d++)
                    c = f[d], g.push(c.call(this, b));
                return g
            }
        }, a.prototype.on = function (a, b) {
            var c;
            return null == (c = this.bindings)[a] && (c[a] = []), this.bindings[a].push(b)
        }, a
    }(), P = window.XMLHttpRequest, O = window.XDomainRequest, N = window.WebSocket, w = function (a, b) {
        var c, d, e, f;
        f = [];
        for (d in b.prototype)
            try {
                e = b.prototype[d], f.push(null == a[d] && "function" != typeof e ? a[d] = e : void 0)
            } catch (g) {
                c = g
            }
        return f
    }, A = [], j.ignore = function () {
        var a, b, c;
        return b = arguments[0], a = 2 <= arguments.length ? X.call(arguments, 1) : [], A.unshift("ignore"), c = b.apply(null, a), A.shift(), c
    }, j.track = function () {
        var a, b, c;
        return b = arguments[0], a = 2 <= arguments.length ? X.call(arguments, 1) : [], A.unshift("track"), c = b.apply(null, a), A.shift(), c
    }, J = function (a) {
        var b;
        if (null == a && (a = "GET"), "track" === A[0])
            return "force";
        if (!A.length && D.ajax) {
            if ("socket" === a && D.ajax.trackWebSockets)
                return !0;
            if (b = a.toUpperCase(), $.call(D.ajax.trackMethods, b) >= 0)
                return !0
        }
        return !1
    }, k = function (a) {
        function b() {
            var a, c = this;
            b.__super__.constructor.apply(this, arguments), a = function (a) {
                var b;
                return b = a.open, a.open = function (d, e) {
                    return J(d) && c.trigger("request", {
                        type: d,
                        url: e,
                        request: a
                    }), b.apply(a, arguments)
                }
            }, window.XMLHttpRequest = function (b) {
                var c;
                return c = new P(b), a(c), c
            };
            try {
                w(window.XMLHttpRequest, P)
            } catch (d) {
            }
            if (null != O) {
                window.XDomainRequest = function () {
                    var b;
                    return b = new O, a(b), b
                };
                try {
                    w(window.XDomainRequest, O)
                } catch (d) {
                }
            }
            if (null != N && D.ajax.trackWebSockets) {
                window.WebSocket = function (a, b) {
                    var d;
                    return d = null != b ? new N(a, b) : new N(a), J("socket") && c.trigger("request", {
                        type: "socket",
                        url: a,
                        protocols: b,
                        request: d
                    }), d
                };
                try {
                    w(window.WebSocket, N)
                } catch (d) {
                }
            }
        }
        return Z(b, a), b
    }(h), R = null, y = function () {
        return null == R && (R = new k), R
    }, I = function (a) {
        var b, c, d, e;
        for (e = D.ajax.ignoreURLs, c = 0, d = e.length; d > c; c++)
            if (b = e[c], "string" == typeof b) {
                if (-1 !== a.indexOf(b))
                    return !0
            } else if (b.test(a))
                return !0;
        return !1
    }, y().on("request", function (b) {
        var c, d, e, f, g;
        return f = b.type, e = b.request, g = b.url, I(g) ? void 0 : j.running || D.restartOnRequestAfter === !1 && "force" !== J(f) ? void 0 : (d = arguments, c = D.restartOnRequestAfter || 0, "boolean" == typeof c && (c = 0), setTimeout(function () {
            var b, c, g, h, i, k;
            if (b = "socket" === f ? e.readyState < 2 : 0 < (h = e.readyState) && 4 > h) {
                for (j.restart(), i = j.sources, k = [], c = 0, g = i.length; g > c; c++) {
                    if (K = i[c], K instanceof a) {
                        K.watch.apply(K, d);
                        break
                    }
                    k.push(void 0)
                }
                return k
            }
        }, c))
    }), a = function () {
        function a() {
            var a = this;
            this.elements = [], y().on("request", function () {
                return a.watch.apply(a, arguments)
            })
        }
        return a.prototype.watch = function (a) {
            var b, c, d, e;
            return d = a.type, b = a.request, e = a.url, I(e) ? void 0 : (c = "socket" === d ? new n(b) : new o(b), this.elements.push(c))
        }, a
    }(), o = function () {
        function a(a) {
            var b, c, d, e, f, g, h = this;
            if (this.progress = 0, null != window.ProgressEvent)
                for (c = null, a.addEventListener("progress", function (a) {
                    return h.progress = a.lengthComputable ? 100 * a.loaded / a.total : h.progress + (100 - h.progress) / 2
                }, !1), g = ["load", "abort", "timeout", "error"], d = 0, e = g.length; e > d; d++)
                    b = g[d], a.addEventListener(b, function () {
                        return h.progress = 100
                    }, !1);
            else
                f = a.onreadystatechange, a.onreadystatechange = function () {
                    var b;
                    return 0 === (b = a.readyState) || 4 === b ? h.progress = 100 : 3 === a.readyState && (h.progress = 50), "function" == typeof f ? f.apply(null, arguments) : void 0
                }
        }
        return a
    }(), n = function () {
        function a(a) {
            var b, c, d, e, f = this;
            for (this.progress = 0, e = ["error", "open"], c = 0, d = e.length; d > c; c++)
                b = e[c], a.addEventListener(b, function () {
                    return f.progress = 100
                }, !1)
        }
        return a
    }(), d = function () {
        function a(a) {
            var b, c, d, f;
            for (null == a && (a = {}), this.elements = [], null == a.selectors && (a.selectors = []), f = a.selectors, c = 0, d = f.length; d > c; c++)
                b = f[c], this.elements.push(new e(b))
        }
        return a
    }(), e = function () {
        function a(a) {
            this.selector = a, this.progress = 0, this.check()
        }
        return a.prototype.check = function () {
            var a = this;
            return document.querySelector(this.selector) ? this.done() : setTimeout(function () {
                return a.check()
            }, D.elements.checkInterval)
        }, a.prototype.done = function () {
            return this.progress = 100
        }, a
    }(), c = function () {
        function a() {
            var a, b, c = this;
            this.progress = null != (b = this.states[document.readyState]) ? b : 100, a = document.onreadystatechange, document.onreadystatechange = function () {
                return null != c.states[document.readyState] && (c.progress = c.states[document.readyState]), "function" == typeof a ? a.apply(null, arguments) : void 0
            }
        }
        return a.prototype.states = {
            loading: 0,
            interactive: 50,
            complete: 100
        }, a
    }(), f = function () {
        function a() {
            var a, b, c, d, e, f = this;
            this.progress = 0, a = 0, e = [], d = 0, c = C(), b = setInterval(function () {
                var g;
                return g = C() - c - 50, c = C(), e.push(g), e.length > D.eventLag.sampleCount && e.shift(), a = q(e), ++d >= D.eventLag.minSamples && a < D.eventLag.lagThreshold ? (f.progress = 100, clearInterval(b)) : f.progress = 100 * (3 / (a + 3))
            }, 50)
        }
        return a
    }(), m = function () {
        function a(a) {
            this.source = a, this.last = this.sinceLastUpdate = 0, this.rate = D.initialRate, this.catchup = 0, this.progress = this.lastProgress = 0, null != this.source && (this.progress = F(this.source, "progress"))
        }
        return a.prototype.tick = function (a, b) {
            var c;
            return null == b && (b = F(this.source, "progress")), b >= 100 && (this.done = !0), b === this.last ? this.sinceLastUpdate += a : (this.sinceLastUpdate && (this.rate = (b - this.last) / this.sinceLastUpdate), this.catchup = (b - this.progress) / D.catchupTime, this.sinceLastUpdate = 0, this.last = b), b > this.progress && (this.progress += this.catchup * a), c = 1 - Math.pow(this.progress / 100, D.easeFactor), this.progress += c * this.rate * a, this.progress = Math.min(this.lastProgress + D.maxProgressPerFrame, this.progress), this.progress = Math.max(0, this.progress), this.progress = Math.min(100, this.progress), this.lastProgress = this.progress, this.progress
        }, a
    }(), L = null, H = null, r = null, M = null, p = null, s = null, j.running = !1, z = function () {
        return D.restartOnPushState ? j.restart() : void 0
    }, null != window.history.pushState && (T = window.history.pushState, window.history.pushState = function () {
        return z(), T.apply(window.history, arguments)
    }), null != window.history.replaceState && (W = window.history.replaceState, window.history.replaceState = function () {
        return z(), W.apply(window.history, arguments)
    }), l = {
        ajax: a,
        elements: d,
        document: c,
        eventLag: f
    }, (B = function () {
        var a, c, d, e, f, g, h, i;
        for (j.sources = L = [], g = ["ajax", "elements", "document", "eventLag"], c = 0, e = g.length; e > c; c++)
            a = g[c], D[a] !== !1 && L.push(new l[a](D[a]));
        for (i = null != (h = D.extraSources) ? h : [], d = 0, f = i.length; f > d; d++)
            K = i[d], L.push(new K(D));
        return j.bar = r = new b, H = [], M = new m
    })(), j.stop = function () {
        return j.trigger("stop"), j.running = !1, r.destroy(), s = !0, null != p && ("function" == typeof t && t(p), p = null), B()
    }, j.restart = function () {
        return j.trigger("restart"), j.stop(), j.start()
    }, j.go = function () {
        var a;
        return j.running = !0, r.render(), a = C(), s = !1, p = G(function (b, c) {
            var d, e, f, g, h, i, k, l, n, o, p, q, t, u, v, w;
            for (l = 100 - r.progress, e = p = 0, f = !0, i = q = 0, u = L.length; u > q; i = ++q)
                for (K = L[i], o = null != H[i] ? H[i] : H[i] = [], h = null != (w = K.elements) ? w : [K], k = t = 0, v = h.length; v > t; k = ++t)
                    g = h[k], n = null != o[k] ? o[k] : o[k] = new m(g), f &= n.done, n.done || (e++, p += n.tick(b));
            return d = p / e, r.update(M.tick(b, d)), r.done() || f || s ? (r.update(100), j.trigger("done"), setTimeout(function () {
                return r.finish(), j.running = !1, j.trigger("hide")
            }, Math.max(D.ghostTime, Math.max(D.minTime - (C() - a), 0)))) : c()
        })
    }, j.start = function (a) {
        v(D, a), j.running = !0;
        try {
            r.render()
        } catch (b) {
            i = b
        }
        return document.querySelector(".pace") ? (j.trigger("start"), j.go()) : setTimeout(j.start, 50)
    }, "function" == typeof define && define.amd ? define(function () {
        return j
    }) : "object" == typeof exports ? module.exports = j : D.startOnPageLoad && j.start()
});