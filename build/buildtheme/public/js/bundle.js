!function(e){var t={};function o(n){if(t[n])return t[n].exports;var r=t[n]={i:n,l:!1,exports:{}};return e[n].call(r.exports,r,r.exports,o),r.l=!0,r.exports}o.m=e,o.c=t,o.d=function(e,t,n){o.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:n})},o.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},o.t=function(e,t){if(1&t&&(e=o(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var n=Object.create(null);if(o.r(n),Object.defineProperty(n,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var r in e)o.d(n,r,function(t){return e[t]}.bind(null,r));return n},o.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return o.d(t,"a",t),t},o.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},o.p="",o(o.s=0)}([function(e,t,o){"use strict";o.r(t);o(1),o(2)},function(e,t){var o=840,n=(document.querySelector(".nav--mobile"),document.querySelector("body")),r=document.querySelector(".main-navigation");if(r){var l=r.querySelector(".nav--mobile-btn"),i=r.querySelectorAll("a");function c(){n.style.overflow="scroll",d(!1),s(),l.classList.remove("nav--mobile-btn-open"),r.classList.remove("nav--mobile-open")}function s(){var e=window.scrollY,t=n.classList;e>50&&!n.classList.contains("nav--scrolled")?t.add("body-scrolled"):t.remove("body-scrolled")}function d(e){!0===e?document.body.addEventListener("touchmove",a,!1):document.body.removeEventListener("touchmove",a,!1)}!function(){i.forEach(e=>{e.addEventListener("click",()=>{c()})}),l&&l.addEventListener("click",e=>{r.classList.contains("nav--mobile-open")?c():(n.classList.remove("body-scrolled"),l.classList.add("nav--mobile-btn-open"),r.classList.add("nav--mobile-open"),n.style.overflow="hidden",d(!0))});window.addEventListener("scroll",()=>{s()}),window.addEventListener("resize",()=>{(window.innerWidth||document.documentElement.clientWidth||document.body.clientWidth)>o&&r.classList.contains("nav--mobile-open")&&c()})}();var a=function(e){e.preventDefault()}}},function(e,t){let o,n,r,l,i,c=document.querySelector(".jmh-scrollbar-wrap"),s=c.querySelector(".jmh-scrollbar"),d=s.querySelector(".jmh-scrollbar--dot"),a=document.querySelector("body"),u=0;function m(){r=a.getBoundingClientRect().height-Math.max(document.documentElement.clientHeight,window.innerHeight||0),l=r/n}function v(){m(),(o=r>0)&&(c.classList.add("jmh-scrollbar-visible"),n=s.getBoundingClientRect().height,l=r/n)}function b(e){u=e.clientY,scrollYAtCatc=scrollY,e.preventDefault(),i=!0,a.addEventListener("mousemove",h),c.classList.add("scrolldot-catched")}function f(){i=!1,a.removeEventListener("mousemove",h),c.classList.remove("scrolldot-catched")}function h(e){!function(e){let t=scrollYAtCatc+e*l;window.scrollTo(0,t)}(e.clientY-u)}v(),o&&(d.addEventListener("mousedown",b,!1),a.addEventListener("mouseup",f),document.addEventListener("mouseout",e=>{var t=(e=e||window.event).relatedTarget||e.toElement;t&&"HTML"!=t.nodeName||f()}),s.addEventListener("mousedown",e=>{i||window.scrollTo({top:e.offsetY*l,behavior:"smooth"})}),a.onresize=()=>{v()},a.onscroll=()=>{m(),function(){let e=n/100*(scrollY/(r/100));d.style.top=e+"px"}()});new class{constructor(){this.scrollbarWrap=document.querySelector(".jmh-scrollbar-wrap"),this.scrollbar=c.querySelector(".jmh-scrollbar"),this.dot=s.querySelector(".jmh-scrollbar--dot"),this.body=document.body,this.mousepostion=0,this.scrollYAtCatch=0,this.visible=!1,this.scrollbarHeight,this.allhight,this.multiplicator,this.catched,this.bodyHeight=this.body.getBoundingClientRect().height}resetDynamicValues(){}setWindowScroll(){}setDot(){}}}]);