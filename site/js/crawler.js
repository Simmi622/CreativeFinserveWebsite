function marqueeInit(t){document.createElement&&(marqueeInit.ar.push(t),marqueeInit.run(t.uniqueid))}!function(){function t(t,e){return e.toUpperCase()}function e(t){for(;t=t.parentNode;)if(t.tagName&&"table"===t.tagName.toLowerCase())return!0;return!1}function i(t){for(var e,i=[],s=0;(e=t.firstChild)&&3===e.nodeType&&a[0].test(e.nodeValue);)t.removeChild(e);for(;(e=t.lastChild)&&3===e.nodeType&&a[0].test(e.nodeValue);)t.removeChild(e);for((e=t.firstChild)&&3===e.nodeType&&(e.nodeValue=e.nodeValue.replace(a[1],"")),(e=t.lastChild)&&3===e.nodeType&&(e.nodeValue=e.nodeValue.replace(a[2],""));e=t.firstChild;)i[s++]=t.removeChild(e);return i}function s(t){for(var e=u?t.all:t.getElementsByTagName("*"),i=e.length,s=[];--i>-1;)e[i].parentNode===t&&s.push(e[i]);for(s.sort(function(){return.5-Math.random()}),i=s.length;--i>-1;)t.appendChild(s[i])}function n(t,e){var n,o,h,r,m,u,q,f=this;this.mq=marqueeInit.ar[t],this.mq.random&&s(e.getElementsByTagName&&1===e.getElementsByTagName("tr").length&&1===e.childNodes.length?e.getElementsByTagName("tr")[0]:e);for(n in c)(this.mq.hasOwnProperty&&!this.mq.hasOwnProperty(n)||!this.mq.hasOwnProperty&&!this.mq[n])&&(this.mq[n]=c[n]);for(this.mq.direction=this.mq.persist&&this.cookie.get(this.mq.uniqueid)?this.cookie.get(this.mq.uniqueid).split(":")[2]:this.mq.direction,this.mq.style.width=!this.mq.style.width||isNaN(parseInt(this.mq.style.width))?"100%":this.mq.style.width,e.getElementsByTagName("img")[0]?this.mq.style.height=!this.mq.style.height||isNaN(parseInt(this.mq.style.height))?"auto":this.mq.style.height:this.mq.style.height=!this.mq.style.height||isNaN(parseInt(this.mq.style.height))?e.offsetHeight+3+"px":this.mq.style.height,o=this.mq.style.width.split(/\d/),this.cw=this.mq.style.width?[parseInt(this.mq.style.width),o[o.length-1]]:["a"],q=i(e),e.className=e.id="",e.removeAttribute("class",0),e.removeAttribute("id",0),d&&e.removeAttribute("className",0),e.appendChild(e.cloneNode(!1)),e.className=["marquee",t].join(""),e.style.overflow="hidden",this.c=e.firstChild,this.c.appendChild(this.c.cloneNode(!1)),this.c.style.visibility="hidden",h=[[l,this.c.style],[this.mq.style,this.c.style]],u=h.length-1;u>-1;--u)for(n in h[u][0])(h[u][0].hasOwnProperty&&h[u][0].hasOwnProperty(n)||!h[u][0].hasOwnProperty)&&(h[u][1][n.encamel()]=h[u][0][n]);for(this.m=this.c.firstChild,"pause"===this.mq.mouse&&(this.c.onmouseover=function(){f.mq.stopped=!0},this.c.onmouseout=function(){f.mq.stopped=!1}),this.m.style.position="absolute",this.m.style.left="-10000000px",this.m.style.whiteSpace="nowrap",p&&this.c.firstChild.appendChild(this.m=document.createElement("nobr")),this.mq.noAddedSpace||this.m.appendChild(document.createTextNode(" ")),u=0;q[u];++u)this.m.appendChild(q[u]);if(p&&(this.m=this.c.firstChild),r=this.m.getElementsByTagName("img"),r.length)for(m=0,u=0;u<r.length;++u)r[u].style.display="inline",r[u].alt||this.mq.noAddedAlt||(r[u].alt=a[3].exec(r[u].src)||"Image #"+[u+1],r[u].title||(r[u].title="")),r[u].style.display="inline",r[u].style.verticalAlign=r[u].style.verticalAlign||"top","boolean"==typeof r[u].complete&&r[u].complete?m++:r[u].onload=r[u].onerror=function(){++m===r.length&&f.setup(t)},m===r.length&&this.setup(t);else this.setup(t)}function o(){for(var t,e,i,s=0;s<marqueeInit.ar.length;++s)if(marqueeInit.ar[s]&&marqueeInit.ar[s].setup)for(i=marqueeInit.ar[s].setup,t=i.mq.moveatleast?Math.max(i.mq.moveatleast,i.sinc):i.sinc||i.mq.inc,i.c.style.width=i.mq.style.width,i.cw[0]=i.cw.length>1?parseInt(i.mq.style.width):"a";i.c.offsetWidth>i.w-t&&(e=isNaN(i.cw[0])?i.w-t:--i.cw[0],!(1>e));)i.c.style.width=isNaN(i.cw[0])?i.w-t+"px":--i.cw[0]+i.cw[1]}function h(){for(var t,e=0;e<marqueeInit.ar.length;++e)marqueeInit.ar[e]&&marqueeInit.ar[e].persist&&marqueeInit.ar[e].setup&&(t=marqueeInit.ar[e].setup,t.cookie.set(t.mq.uniqueid,t.m[0].style.left+":"+t.m[1].style.left+":"+t.mq.direction))}if(document.createElement){"undefined"==typeof opera&&(window.opera=!1),marqueeInit.ar=[],document.write('<style type="text/css">.marquee{white-space:nowrap;overflow:hidden;visibility:hidden;}#marq_kill_marg_bord{border:none!important;margin:0!important;}</style>');var r,m=0,a=[/^\s*$/,/^\s*/,/\s*$/,/[^\/]+$/],l={position:"relative",overflow:"hidden"},c={style:{margin:"0 auto"},direction:"left",inc:2,mouse:"pause"},d=!1,u=0,p=!1,q=0;p||(r=/-(.)/g,String.prototype.encamel=function(){return this.replace(r,t)}),d&&8>q&&(marqueeInit.table=[],window.attachEvent("onload",function(){marqueeInit.OK=!0;for(var t=-1,e=marqueeInit.table.length;++t<e;)marqueeInit.run(marqueeInit.table[t])})),marqueeInit.run=function(t){return d&&!marqueeInit.OK&&8>q&&e(document.getElementById(t))?void marqueeInit.table.push(t):void(document.getElementById(t)?new n(m++,document.getElementById(t)):setTimeout(function(){marqueeInit.run(t)},300))},n.prototype.setup=function(t){if(!this.mq.setup){this.mq.setup=this;var e,i,s=this,n=1e4;for("auto"===this.c.style.height&&(this.c.style.height=this.m.offsetHeight+4+"px"),this.c.appendChild(this.m.cloneNode(!0)),this.m=[this.m,this.m.nextSibling],"function"==typeof this.mq.initcontent&&this.mq.initcontent.apply(this.mq,[this.m]),"cursor driven"===this.mq.mouse&&(this.r=this.mq.neutral||16,this.sinc=this.mq.inc,this.c.onmousemove=function(t){s.mq.stopped=!1,s.directspeed(t)},this.mq.moveatleast?(this.mq.inc=this.mq.moveatleast,this.mq.savedirection?"reverse"===this.mq.savedirection?this.c.onmouseout=function(t){s.contains(t)||(s.mq.inc=s.mq.moveatleast,s.mq.direction="right"===s.mq.direction?"left":"right")}:(this.mq.savedirection=this.mq.direction,this.c.onmouseout=function(t){s.contains(t)||(s.mq.inc=s.mq.moveatleast,s.mq.direction=s.mq.savedirection)}):this.c.onmouseout=function(t){s.contains(t)||(s.mq.inc=s.mq.moveatleast)}):this.c.onmouseout=function(t){s.contains(t)||s.slowdeath()}),this.w=this.m[0].offsetWidth,this.m[0].style.left=this.mq.persist&&this.cookie.get(this.mq.uniqueid)?this.cookie.get(this.mq.uniqueid).split(":")[0]:0,this.c.id="marq_kill_marg_bord",this.m[0].style.top=this.m[1].style.top=Math.floor((this.c.offsetHeight-this.m[0].offsetHeight)/2-u)+"px",this.c.id="",this.c.removeAttribute("id",0),this.m[1].style.left=this.mq.persist&&this.cookie.get(this.mq.uniqueid)?this.cookie.get(this.mq.uniqueid).split(":")[1]:this.w+"px",e=this.mq.moveatleast?Math.max(this.mq.moveatleast,this.sinc):this.sinc||this.mq.inc;this.c.offsetWidth>this.w-e&&--n&&(i=isNaN(this.cw[0])?this.w-e:--this.cw[0],!(1>i||this.w<Math.max(1,e)));)this.c.style.width=isNaN(this.cw[0])?this.w-e+"px":--this.cw[0]+this.cw[1];this.c.style.visibility="visible",this.runit()}},n.prototype.slowdeath=function(){var t=this;this.mq.inc&&(this.mq.inc-=1,this.timer=setTimeout(function(){t.slowdeath()},100))},n.prototype.runit=function(){var t=this,e="right"===this.mq.direction?1:-1;return this.mq.stopped||this.mq.stopMarquee?void setTimeout(function(){t.runit()},300):("cursor driven"!=this.mq.mouse&&(this.mq.inc=Math.max(1,this.mq.inc)),e*parseInt(this.m[0].style.left)>=this.w&&(this.m[0].style.left=parseInt(this.m[1].style.left)-e*this.w+"px"),e*parseInt(this.m[1].style.left)>=this.w&&(this.m[1].style.left=parseInt(this.m[0].style.left)-e*this.w+"px"),this.m[0].style.left=parseInt(this.m[0].style.left)+e*this.mq.inc+"px",this.m[1].style.left=parseInt(this.m[1].style.left)+e*this.mq.inc+"px",window.opera&&this.mq.persist&&this.cookie.set(this.mq.uniqueid,this.m[0].style.left+":"+this.m[1].style.left+":"+this.mq.direction),void setTimeout(function(){t.runit()},30+(this.mq.addDelay||0)))},n.prototype.cookie={set:function(t,e,i){if(i){var s=new Date;s.setDate(s.getDate()+i),i="; expires="+s.toGMTString()}document.cookie=t+"="+escape(e)+(i||"")+"; path=/"},get:function(t){var e=document.cookie.match("(^|;) *"+t+"=([^;]*)");return e?unescape(e[2]):null},kill:function(t){cook.set(t,"",-1)},killall:function(){var t=document.cookie.split(";"),e=t.length-1;for(e;e>-1;--e)cook.kill(t[e].split("=")[0])}},n.prototype.directspeed=function(t){t=t||window.event,this.timer&&clearTimeout(this.timer);for(var e=this.c,i=e.offsetWidth,s=e.offsetLeft,n=("number"==typeof t.pageX?t.pageX:t.clientX+document.body.scrollLeft+document.documentElement.scrollLeft)-s,o=(i-this.r)/2,h=(i+this.r)/2;e=e.offsetParent;)n-=e.offsetLeft;this.mq.direction=n>h?"left":"right",this.mq.inc=Math.round((n>h?n-h:o>n?o-n:0)/o*this.sinc)},n.prototype.contains=function(t){if(t&&t.relatedTarget){var e=t.relatedTarget;if(e===this.c)return!0;for(;e=e.parentNode;)if(e===this.c)return!0}return!1},window.addEventListener?(window.addEventListener("resize",o,!1),window.addEventListener("unload",h,!1)):window.attachEvent&&(window.attachEvent("onresize",o),window.attachEvent("onunload",h))}}();