!function(n,e){"object"==typeof exports&&"undefined"!=typeof module?module.exports=e():"function"==typeof define&&define.amd?define(e):n.anime=e()}(this,function(){"use strict";var n={update:null,begin:null,loopBegin:null,changeBegin:null,change:null,changeComplete:null,loopComplete:null,complete:null,loop:1,direction:"normal",autoplay:!0,timelineOffset:0},e={duration:1e3,delay:0,endDelay:0,easing:"easeOutElastic(1, .5)",round:0},r=["translateX","translateY","translateZ","rotate","rotateX","rotateY","rotateZ","scale","scaleX","scaleY","scaleZ","skew","skewX","skewY","perspective"],t={CSS:{},springs:{}};function a(n,e,r){return Math.min(Math.max(n,e),r)}function o(n,e){return-1<n.indexOf(e)}function i(n,e){return n.apply(null,e)}var u={arr:function(n){return Array.isArray(n)},obj:function(n){return o(Object.prototype.toString.call(n),"Object")},pth:function(n){return u.obj(n)&&n.hasOwnProperty("totalLength")},svg:function(n){return n instanceof SVGElement},inp:function(n){return n instanceof HTMLInputElement},dom:function(n){return n.nodeType||u.svg(n)},str:function(n){return"string"==typeof n},fnc:function(n){return"function"==typeof n},und:function(n){return void 0===n},hex:function(n){return/(^#[0-9A-F]{6}$)|(^#[0-9A-F]{3}$)/i.test(n)},rgb:function(n){return/^rgb/.test(n)},hsl:function(n){return/^hsl/.test(n)},col:function(n){return u.hex(n)||u.rgb(n)||u.hsl(n)},key:function(r){return!n.hasOwnProperty(r)&&!e.hasOwnProperty(r)&&"targets"!==r&&"keyframes"!==r}};function s(n){var e=/\(([^)]+)\)/.exec(n);return e?e[1].split(",").map(function(n){return parseFloat(n)}):[]}function c(n,e){var r=s(n),o=a(u.und(r[0])?1:r[0],.1,100),i=a(u.und(r[1])?100:r[1],.1,100),c=a(u.und(r[2])?10:r[2],.1,100),f=a(u.und(r[3])?0:r[3],.1,100),l=Math.sqrt(i/o),d=c/(2*Math.sqrt(i*o)),p=d<1?l*Math.sqrt(1-d*d):0,h=d<1?(d*l-f)/p:-f+l;function g(n){var r=e?e*n/1e3:n;return r=d<1?Math.exp(-r*d*l)*(1*Math.cos(p*r)+h*Math.sin(p*r)):(1+h*r)*Math.exp(-r*l),0===n||1===n?n:1-r}return e?g:function(){var e=t.springs[n];if(e)return e;for(var r=0,a=0;;)if(1===g(r+=1/6)){if(16<=++a)break}else a=0;var o=r*(1/6)*1e3;return t.springs[n]=o}}function f(n,e){void 0===n&&(n=1),void 0===e&&(e=.5);var r=a(n,1,10),t=a(e,.1,2);return function(n){return 0===n||1===n?n:-r*Math.pow(2,10*(n-1))*Math.sin((n-1-t/(2*Math.PI)*Math.asin(1/r))*(2*Math.PI)/t)}}function l(n){return void 0===n&&(n=10),function(e){return Math.round(e*n)*(1/n)}}var d=function(){function r(n,e){return 1-3*e+3*n}function t(n,e){return 3*e-6*n}function a(n){return 3*n}function o(n,e,o){return((r(e,o)*n+t(e,o))*n+a(e))*n}function i(n,e,o){return 3*r(e,o)*n*n+2*t(e,o)*n+a(e)}return function(r,t,a,u){if(0<=r&&r<=1&&0<=a&&a<=1){var s=new Float32Array(11);if(r!==t||a!==u)for(var c=0;c<11;++c)s[c]=o(.1*c,r,a);return function(n){return r===t&&a===u?n:0===n||1===n?n:o(f(n),t,u)}}function f(t){for(var u=0,c=1;10!==c&&s[c]<=t;++c)u+=.1;var l=u+(t-s[--c])/(s[c+1]-s[c])*.1,d=i(l,r,a);return.001<=d?function(n,e,r,t){for(var a=0;a<4;++a){var u=i(e,r,t);if(0===u)return e;e-=(o(e,r,t)-n)/u}return e}(t,l,r,a):0===d?l:function(n,e,r,t,a){for(var i,u,s=0;0<(i=o(u=e+(r-e)/2,t,a)-n)?r=u:e=u,1e-7<Math.abs(i)&&++s<10;);return u}(t,u,u+.1,r,a)}}}(),p=function(){var n=["Quad","Cubic","Quart","Quint","Sine","Expo","Circ","Back","Elastic"],e={In:[[.55,.085,.68,.53],[.55,.055,.675,.19],[.895,.03,.685,.22],[.755,.05,.855,.06],[.47,0,.745,.715],[.95,.05,.795,.035],[.6,.04,.98,.335],[.6,-.28,.735,.045],f],Out:[[.25,.46,.45,.94],[.215,.61,.355,1],[.165,.84,.44,1],[.23,1,.32,1],[.39,.575,.565,1],[.19,1,.22,1],[.075,.82,.165,1],[.175,.885,.32,1.275],function(n,e){return function(r){return 1-f(n,e)(1-r)}}],InOut:[[.455,.03,.515,.955],[.645,.045,.355,1],[.77,0,.175,1],[.86,0,.07,1],[.445,.05,.55,.95],[1,0,0,1],[.785,.135,.15,.86],[.68,-.55,.265,1.55],function(n,e){return function(r){return r<.5?f(n,e)(2*r)/2:1-f(n,e)(-2*r+2)/2}}]},r={linear:[.25,.25,.75,.75]},t=function(t){e[t].forEach(function(e,a){r["ease"+t+n[a]]=e})};for(var a in e)t(a);return r}();function v(n,e){if(u.fnc(n))return n;var r=n.split("(")[0],t=p[r],a=s(n);switch(r){case"spring":return c(n,e);case"cubicBezier":return i(d,a);case"steps":return i(l,a);default:return u.fnc(t)?i(t,a):i(d,t)}}function h(n){try{return document.querySelectorAll(n)}catch(n){return}}function g(n,e){for(var r=n.length,t=2<=arguments.length?e:void 0,a=[],o=0;o<r;o++)if(o in n){var i=n[o];e.call(t,i,o,n)&&a.push(i)}return a}function m(n){return n.reduce(function(n,e){return n.concat(u.arr(e)?m(e):e)},[])}function y(n){return u.arr(n)?n:(u.str(n)&&(n=h(n)||n),n instanceof NodeList||n instanceof HTMLCollection?[].slice.call(n):[n])}function b(n,e){return n.some(function(n){return n===e})}function x(n){var e={};for(var r in n)e[r]=n[r];return e}function M(n,e){var r=x(n);for(var t in n)r[t]=e.hasOwnProperty(t)?e[t]:n[t];return r}function w(n,e){var r=x(n);for(var t in e)r[t]=u.und(n[t])?e[t]:n[t];return r}function C(n){var e=/([\+\-]?[0-9#\.]+)(%|px|pt|em|rem|in|cm|mm|ex|ch|pc|vw|vh|vmin|vmax|deg|rad|turn)?$/.exec(n);if(e)return e[2]}function O(n,e){return u.fnc(n)?n(e.target,e.id,e.total):n}function P(n,e){return n.getAttribute(e)}function I(n,e,r){if(b([r,"deg","rad","turn"],C(e)))return e;var a=t.CSS[e+r];if(!u.und(a))return a;var o=document.createElement(n.tagName),i=n.parentNode&&n.parentNode!==document?n.parentNode:document.body;i.appendChild(o),o.style.position="absolute",o.style.width=100+r;var s=100/o.offsetWidth;i.removeChild(o);var c=s*parseFloat(e);return t.CSS[e+r]=c}function B(n,e,r){if(e in n.style){var t=e.replace(/([a-z])([A-Z])/g,"$1-$2").toLowerCase(),a=n.style[e]||getComputedStyle(n).getPropertyValue(t)||"0";return r?I(n,a,r):a}}function D(n,e){return u.dom(n)&&!u.inp(n)&&(P(n,e)||u.svg(n)&&n[e])?"attribute":u.dom(n)&&b(r,e)?"transform":u.dom(n)&&"transform"!==e&&B(n,e)?"css":null!=n[e]?"object":void 0}function T(n){if(u.dom(n)){for(var e,r=n.style.transform||"",t=/(\w+)\(([^)]*)\)/g,a=new Map;e=t.exec(r);)a.set(e[1],e[2]);return a}}function N(n,e,r,t){switch(D(n,e)){case"transform":return function(n,e,r,t){var a,i=o(e,"scale")?1:0+(o(a=e,"translate")||"perspective"===a?"px":o(a,"rotate")||o(a,"skew")?"deg":void 0),u=T(n).get(e)||i;return r&&(r.transforms.list.set(e,u),r.transforms.last=e),t?I(n,u,t):u}(n,e,t,r);case"css":return B(n,e,r);case"attribute":return P(n,e);default:return n[e]||0}}function A(n,e){var r=/^(\*=|\+=|-=)/.exec(n);if(!r)return n;var t=C(n)||0,a=parseFloat(e),o=parseFloat(n.replace(r[0],""));switch(r[0][0]){case"+":return a+o+t;case"-":return a-o+t;case"*":return a*o+t}}function E(n,e){if(u.col(n))return function(n){return u.rgb(n)?(r=/rgb\((\d+,\s*[\d]+,\s*[\d]+)\)/g.exec(e=n))?"rgba("+r[1]+",1)":e:u.hex(n)?(t=n.replace(/^#?([a-f\d])([a-f\d])([a-f\d])$/i,function(n,e,r,t){return e+e+r+r+t+t}),a=/^#?([a-f\d]{2})([a-f\d]{2})([a-f\d]{2})$/i.exec(t),"rgba("+parseInt(a[1],16)+","+parseInt(a[2],16)+","+parseInt(a[3],16)+",1)"):u.hsl(n)?function(n){var e,r,t,a=/hsl\((\d+),\s*([\d.]+)%,\s*([\d.]+)%\)/g.exec(n)||/hsla\((\d+),\s*([\d.]+)%,\s*([\d.]+)%,\s*([\d.]+)\)/g.exec(n),o=parseInt(a[1],10)/360,i=parseInt(a[2],10)/100,u=parseInt(a[3],10)/100,s=a[4]||1;function c(n,e,r){return r<0&&(r+=1),1<r&&(r-=1),r<1/6?n+6*(e-n)*r:r<.5?e:r<2/3?n+(e-n)*(2/3-r)*6:n}if(0==i)e=r=t=u;else{var f=u<.5?u*(1+i):u+i-u*i,l=2*u-f;e=c(l,f,o+1/3),r=c(l,f,o),t=c(l,f,o-1/3)}return"rgba("+255*e+","+255*r+","+255*t+","+s+")"}(n):void 0;var e,r,t,a}(n);var r=C(n),t=r?n.substr(0,n.length-r.length):n;return e&&!/\s/g.test(n)?t+e:t}function L(n,e){return Math.sqrt(Math.pow(e.x-n.x,2)+Math.pow(e.y-n.y,2))}function S(n){for(var e,r=n.points,t=0,a=0;a<r.numberOfItems;a++){var o=r.getItem(a);0<a&&(t+=L(e,o)),e=o}return t}function j(n){if(n.getTotalLength)return n.getTotalLength();switch(n.tagName.toLowerCase()){case"circle":return o=n,2*Math.PI*P(o,"r");case"rect":return 2*P(a=n,"width")+2*P(a,"height");case"line":return L({x:P(t=n,"x1"),y:P(t,"y1")},{x:P(t,"x2"),y:P(t,"y2")});case"polyline":return S(n);case"polygon":return r=(e=n).points,S(e)+L(r.getItem(r.numberOfItems-1),r.getItem(0))}var e,r,t,a,o}function q(n,e){var r=e||{},t=r.el||function(n){for(var e=n.parentNode;u.svg(e)&&(e=e.parentNode,u.svg(e.parentNode)););return e}(n),a=t.getBoundingClientRect(),o=P(t,"viewBox"),i=a.width,s=a.height,c=r.viewBox||(o?o.split(" "):[0,0,i,s]);return{el:t,viewBox:c,x:c[0]/1,y:c[1]/1,w:i/c[2],h:s/c[3]}}function $(n,e){function r(r){void 0===r&&(r=0);var t=1<=e+r?e+r:0;return n.el.getPointAtLength(t)}var t=q(n.el,n.svg),a=r(),o=r(-1),i=r(1);switch(n.property){case"x":return(a.x-t.x)*t.w;case"y":return(a.y-t.y)*t.h;case"angle":return 180*Math.atan2(i.y-o.y,i.x-o.x)/Math.PI}}function X(n,e){var r=/-?\d*\.?\d+/g,t=E(u.pth(n)?n.totalLength:n,e)+"";return{original:t,numbers:t.match(r)?t.match(r).map(Number):[0],strings:u.str(n)||e?t.split(r):[]}}function Y(n){return g(n?m(u.arr(n)?n.map(y):y(n)):[],function(n,e,r){return r.indexOf(n)===e})}function Z(n){var e=Y(n);return e.map(function(n,r){return{target:n,id:r,total:e.length,transforms:{list:T(n)}}})}function Q(n,e){var r=x(e);if(/^spring/.test(r.easing)&&(r.duration=c(r.easing)),u.arr(n)){var t=n.length;2!==t||u.obj(n[0])?u.fnc(e.duration)||(r.duration=e.duration/t):n={value:n}}var a=u.arr(n)?n:[n];return a.map(function(n,r){var t=u.obj(n)&&!u.pth(n)?n:{value:n};return u.und(t.delay)&&(t.delay=r?0:e.delay),u.und(t.endDelay)&&(t.endDelay=r===a.length-1?e.endDelay:0),t}).map(function(n){return w(n,r)})}function V(n,e){var r=[],t=e.keyframes;for(var a in t&&(e=w(function(n){for(var e=g(m(n.map(function(n){return Object.keys(n)})),function(n){return u.key(n)}).reduce(function(n,e){return n.indexOf(e)<0&&n.push(e),n},[]),r={},t=function(t){var a=e[t];r[a]=n.map(function(n){var e={};for(var r in n)u.key(r)?r==a&&(e.value=n[r]):e[r]=n[r];return e})},a=0;a<e.length;a++)t(a);return r}(t),e)),e)u.key(a)&&r.push({name:a,tweens:Q(e[a],n)});return r}var H={css:function(n,e,r){return n.style[e]=r},attribute:function(n,e,r){return n.setAttribute(e,r)},object:function(n,e,r){return n[e]=r},transform:function(n,e,r,t,a){if(t.list.set(e,r),e===t.last||a){var o="";t.list.forEach(function(n,e){o+=e+"("+n+") "}),n.style.transform=o}}};function G(n,e){Z(n).forEach(function(n){for(var r in e){var t=O(e[r],n),a=n.target,o=C(t),i=N(a,r,o,n),u=A(E(t,o||C(i)),i),s=D(a,r);H[s](a,r,u,n.transforms,!0)}})}function R(n,e){return g(m(n.map(function(n){return e.map(function(e){return function(n,e){var r=D(n.target,e.name);if(r){var t=function(n,e){var r;return n.tweens.map(function(t){var a=function(n,e){var r={};for(var t in n){var a=O(n[t],e);u.arr(a)&&1===(a=a.map(function(n){return O(n,e)})).length&&(a=a[0]),r[t]=a}return r.duration=parseFloat(r.duration),r.delay=parseFloat(r.delay),r}(t,e),o=a.value,i=u.arr(o)?o[1]:o,s=C(i),c=N(e.target,n.name,s,e),f=r?r.to.original:c,l=u.arr(o)?o[0]:f,d=C(l)||C(c),p=s||d;return u.und(i)&&(i=f),a.from=X(l,p),a.to=X(A(i,l),p),a.start=r?r.end:0,a.end=a.start+a.delay+a.duration+a.endDelay,a.easing=v(a.easing,a.duration),a.isPath=u.pth(o),a.isColor=u.col(a.from.original),a.isColor&&(a.round=1),r=a})}(e,n),a=t[t.length-1];return{type:r,property:e.name,animatable:n,tweens:t,duration:a.end,delay:t[0].delay,endDelay:a.endDelay}}}(n,e)})})),function(n){return!u.und(n)})}function W(n,e){var r=n.length,t=function(n){return n.timelineOffset?n.timelineOffset:0},a={};return a.duration=r?Math.max.apply(Math,n.map(function(n){return t(n)+n.duration})):e.duration,a.delay=r?Math.min.apply(Math,n.map(function(n){return t(n)+n.delay})):e.delay,a.endDelay=r?a.duration-Math.max.apply(Math,n.map(function(n){return t(n)+n.duration-n.endDelay})):e.endDelay,a}var K,J=0,U=[],_=[],nn=function(){function n(){K=requestAnimationFrame(e)}function e(e){var r=U.length;if(r){for(var t=0;t<r;){var a=U[t];if(a.paused){var o=U.indexOf(a);-1<o&&(U.splice(o,1),r=U.length)}else a.tick(e);t++}n()}else K=cancelAnimationFrame(K)}return n}();function en(r){void 0===r&&(r={});var t,o=0,i=0,u=0,s=0,c=null;function f(n){var e=window.Promise&&new Promise(function(n){return c=n});return n.finished=e}var l,d,p,v,h,m,y,b,x=(d=M(n,l=r),v=V(p=M(e,l),l),y=W(m=R(h=Z(l.targets),v),p),b=J,J++,w(d,{id:b,children:[],animatables:h,animations:m,duration:y.duration,delay:y.delay,endDelay:y.endDelay}));function k(){var n=x.direction;"alternate"!==n&&(x.direction="normal"!==n?"normal":"reverse"),x.reversed=!x.reversed,t.forEach(function(n){return n.reversed=x.reversed})}function C(n){return x.reversed?x.duration-n:n}function O(){o=0,i=C(x.currentTime)*(1/en.speed)}function P(n,e){e&&e.seek(n-e.timelineOffset)}function I(n){for(var e=0,r=x.animations,t=r.length;e<t;){var o=r[e],i=o.animatable,u=o.tweens,s=u.length-1,c=u[s];s&&(c=g(u,function(e){return n<e.end})[0]||c);for(var f=a(n-c.start-c.delay,0,c.duration)/c.duration,l=isNaN(f)?1:c.easing(f),d=c.to.strings,p=c.round,v=[],h=c.to.numbers.length,m=void 0,y=0;y<h;y++){var b=void 0,M=c.to.numbers[y],w=c.from.numbers[y]||0;b=c.isPath?$(c.value,l*M):w+l*(M-w),p&&(c.isColor&&2<y||(b=Math.round(b*p)/p)),v.push(b)}var k=d.length;if(k){m=d[0];for(var C=0;C<k;C++){d[C];var O=d[C+1],P=v[C];isNaN(P)||(m+=O?P+O:P+" ")}}else m=v[0];H[o.type](i.target,o.property,m,i.transforms),o.currentValue=m,e++}}function B(n){x[n]&&!x.passThrough&&x[n](x)}function D(n){var e=x.duration,r=x.delay,l=e-x.endDelay,d=C(n);x.progress=a(d/e*100,0,100),x.reversePlayback=d<x.currentTime,t&&function(n){if(x.reversePlayback)for(var e=s;e--;)P(n,t[e]);else for(var r=0;r<s;r++)P(n,t[r])}(d),!x.began&&0<x.currentTime&&(x.began=!0,B("begin"),B("loopBegin")),d<=r&&0!==x.currentTime&&I(0),(l<=d&&x.currentTime!==e||!e)&&I(e),r<d&&d<l?(x.changeBegan||(x.changeBegan=!0,x.changeCompleted=!1,B("changeBegin")),B("change"),I(d)):x.changeBegan&&(x.changeCompleted=!0,x.changeBegan=!1,B("changeComplete")),x.currentTime=a(d,0,e),x.began&&B("update"),e<=n&&(i=0,x.remaining&&!0!==x.remaining&&x.remaining--,x.remaining?(o=u,B("loopComplete"),B("loopBegin"),"alternate"===x.direction&&k()):(x.paused=!0,x.completed||(x.completed=!0,B("loopComplete"),B("complete"),!x.passThrough&&"Promise"in window&&(c(),f(x)))))}return f(x),x.reset=function(){var n=x.direction;x.passThrough=!1,x.currentTime=0,x.progress=0,x.paused=!0,x.began=!1,x.changeBegan=!1,x.completed=!1,x.changeCompleted=!1,x.reversePlayback=!1,x.reversed="reverse"===n,x.remaining=x.loop,t=x.children;for(var e=s=t.length;e--;)x.children[e].reset();(x.reversed&&!0!==x.loop||"alternate"===n&&1===x.loop)&&x.remaining++,I(0)},x.set=function(n,e){return G(n,e),x},x.tick=function(n){u=n,o||(o=u),D((u+(i-o))*en.speed)},x.seek=function(n){D(C(n))},x.pause=function(){x.paused=!0,O()},x.play=function(){x.paused&&(x.completed&&x.reset(),x.paused=!1,U.push(x),O(),K||nn())},x.reverse=function(){k(),O()},x.restart=function(){x.reset(),x.play()},x.reset(),x.autoplay&&x.play(),x}function rn(n,e){for(var r=e.length;r--;)b(n,e[r].animatable.target)&&e.splice(r,1)}return"undefined"!=typeof document&&document.addEventListener("visibilitychange",function(){document.hidden?(U.forEach(function(n){return n.pause()}),_=U.slice(0),U=[]):_.forEach(function(n){return n.play()})}),en.version="3.0.1",en.speed=1,en.running=U,en.remove=function(n){for(var e=Y(n),r=U.length;r--;){var t=U[r],a=t.animations,o=t.children;rn(e,a);for(var i=o.length;i--;){var u=o[i],s=u.animations;rn(e,s),s.length||u.children.length||o.splice(i,1)}a.length||o.length||t.pause()}},en.get=N,en.set=G,en.convertPx=I,en.path=function(n,e){var r=u.str(n)?h(n)[0]:n,t=e||100;return function(n){return{property:n,el:r,svg:q(r),totalLength:j(r)*(t/100)}}},en.setDashoffset=function(n){var e=j(n);return n.setAttribute("stroke-dasharray",e),e},en.stagger=function(n,e){void 0===e&&(e={});var r=e.direction||"normal",t=e.easing?v(e.easing):null,a=e.grid,o=e.axis,i=e.from||0,s="first"===i,c="center"===i,f="last"===i,l=u.arr(n),d=l?parseFloat(n[0]):parseFloat(n),p=l?parseFloat(n[1]):0,h=C(l?n[1]:n)||0,g=e.start||0+(l?d:0),m=[],y=0;return function(n,e,u){if(s&&(i=0),c&&(i=(u-1)/2),f&&(i=u-1),!m.length){for(var v=0;v<u;v++){if(a){var b=c?(a[0]-1)/2:i%a[0],x=c?(a[1]-1)/2:Math.floor(i/a[0]),M=b-v%a[0],w=x-Math.floor(v/a[0]),k=Math.sqrt(M*M+w*w);"x"===o&&(k=-M),"y"===o&&(k=-w),m.push(k)}else m.push(Math.abs(i-v));y=Math.max.apply(Math,m)}t&&(m=m.map(function(n){return t(n/y)*y})),"reverse"===r&&(m=m.map(function(n){return o?n<0?-1*n:-n:Math.abs(y-n)}))}return g+(l?(p-d)/y:d)*(Math.round(100*m[e])/100)+h}},en.timeline=function(n){void 0===n&&(n={});var r=en(n);return r.duration=0,r.add=function(t,a){var o=U.indexOf(r),i=r.children;function s(n){n.passThrough=!0}-1<o&&U.splice(o,1);for(var c=0;c<i.length;c++)s(i[c]);var f=w(t,M(e,n));f.targets=f.targets||n.targets;var l=r.duration;f.autoplay=!1,f.direction=r.direction,f.timelineOffset=u.und(a)?l:A(a,l),s(r),r.seek(f.timelineOffset);var d=en(f);s(d),i.push(d);var p=W(i,n);return r.delay=p.delay,r.endDelay=p.endDelay,r.duration=p.duration,r.seek(0),r.reset(),r.autoplay&&r.play(),r},r},en.easing=v,en.penner=p,en.random=function(n,e){return Math.floor(Math.random()*(e-n+1))+n},en}),function(root,factory){"function"==typeof define&&define.amd?define([],function(){return factory(root)}):"object"==typeof exports?module.exports=factory(root):root.Overlay=factory(root)}("undefined"!=typeof global?global:"undefined"!=typeof window?window:this,function(window){"use strict";var defaults={open:"false",class_open:"is-open",class_open_control:"is-active",class_open_body:null,callback_toggle:null,callback_open:null,callback_close:null},open=!1,debug=function(note,object){return defaults};return function(overlay_selector,button_selector,options){var settings,Overlay={};Overlay.destroy=function(){},Overlay.init=function(options){"querySelectorAll"in document&&"addEventListener"in window&&"classList"in window.Element.prototype||console.error("Overlay: This browser does not support the required JavaScript methods and browser APIs."),Overlay.destroy(),settings=function(defaults,options){for(var key in options)Object.prototype.hasOwnProperty.call(options,key)&&(defaults[key]=options[key]);return defaults}(defaults,options||{}),debug(),Overlay.controls=void 0!==button_selector?document.querySelectorAll(button_selector):[],Overlay.overlays=document.querySelectorAll(overlay_selector),0<Overlay.controls.length&&setup_controls(),setup_outside()},Overlay.toggle=function(){for(var i=0;i<Overlay.controls.length;i++)Overlay.controls[i].classList.toggle(settings.class_open_control);for(i=0;i<Overlay.overlays.length;i++)Overlay.overlays[i].classList.toggle(settings.class_open);null!=settings.class_open_body&&document.body.classList.toggle(settings.class_open_body),"function"==typeof settings.callback_toggle&&(debug(),settings.callback_toggle()),!1===open?(open=!0,"function"==typeof settings.callback_open&&(debug(),settings.callback_open())):(open=!1,"function"==typeof settings.callback_close&&(debug(),settings.callback_close())),debug()},Overlay.close=function(){for(var i=0;i<Overlay.controls.length;i++)Overlay.controls[i].classList.remove(settings.class_open_control);for(i=0;i<Overlay.overlays.length;i++)Overlay.overlays[i].classList.remove(settings.class_open);null!=settings.class_open_body&&document.body.classList.remove(settings.class_open_body),open=!1,"function"==typeof settings.callback_close&&(debug(),settings.callback_close()),debug()},Overlay.open=function(){for(var i=0;i<Overlay.controls.length;i++)Overlay.controls[i].classList.add(settings.class_open_control);for(i=0;i<Overlay.overlays.length;i++)Overlay.overlays[i].classList.add(settings.class_open);null!=settings.class_open_body&&document.body.classList.add(settings.class_open_body),open=!0,"function"==typeof settings.callback_open&&(debug(),settings.callback_open()),debug()};var setup_controls=function(){for(var i=0;i<Overlay.controls.length;i++)Overlay.controls[i].addEventListener("touchstart",function(e){debug(),e.preventDefault(),Overlay.toggle()},!0),Overlay.controls[i].addEventListener("click",function(e){debug(),e.preventDefault(),Overlay.toggle()},!0)},setup_outside=function(){document.addEventListener("touchstart",function(e){debug(),outside(e)},!0),document.addEventListener("click",function(e){debug(),outside(e)},!0)},outside=function(event){for(var test=!1,i=0;i<Overlay.controls.length;i++)Overlay.controls[i].contains(event.target)&&(test=!0);if(!1===test)for(test=!1,i=0;i<Overlay.overlays.length;i++)Overlay.overlays[i].contains(event.target)&&(test=!0),!1===test&&Overlay.close()};return Overlay.init(options),Overlay}}),new Overlay(".Sidebar",".js_openSidebar",{open:"false",class_open:"is-open",class_open_control:"is-active",class_open_body:"has-openSidebar",callback_open:function(){anime({targets:".Sidebar-main-bg polygon",opacity:[{value:1,easing:"easeOutSine",duration:200}],direction:"normal",delay:anime.stagger(100,{grid:[6,10],from:"first"})})},callback_close:function(){anime({targets:".Sidebar-main-bg polygon",opacity:[{value:0,easing:"easeOutSine",duration:200}],direction:"normal",delay:anime.stagger(100,{grid:[6,10],from:"last"})})}});