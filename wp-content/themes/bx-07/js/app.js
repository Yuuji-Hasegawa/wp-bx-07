!function(){const e=document.createElement("link").relList;if(!(e&&e.supports&&e.supports("modulepreload"))){for(const e of document.querySelectorAll('link[rel="modulepreload"]'))t(e);new MutationObserver((e=>{for(const r of e)if("childList"===r.type)for(const e of r.addedNodes)"LINK"===e.tagName&&"modulepreload"===e.rel&&t(e)})).observe(document,{childList:!0,subtree:!0})}function t(e){if(e.ep)return;e.ep=!0;const t=function(e){const t={};return e.integrity&&(t.integrity=e.integrity),e.referrerPolicy&&(t.referrerPolicy=e.referrerPolicy),"use-credentials"===e.crossOrigin?t.credentials="include":"anonymous"===e.crossOrigin?t.credentials="omit":t.credentials="same-origin",t}(e);fetch(e.href,t)}}();(()=>{let e=document.querySelectorAll(".o-box--menu-btn"),t=Array.prototype.slice.call(e,0),r=document.querySelector(".c-gnav-bg"),o=document.querySelector("#gnav");function n(){if("-1"==o.getAttribute("tabindex")){for(var t=0;t<e.length;t++)e[t].setAttribute("aria-expanded","true"),e[t].setAttribute("aria-label","menu close"),e[t].blur();o.setAttribute("tabindex",""),o.setAttribute("aria-hidden","false")}else{for(var r=0;r<e.length;r++)e[r].setAttribute("aria-expanded","false"),e[r].setAttribute("aria-label","menu open"),e[r].blur();o.setAttribute("tabindex","-1"),o.setAttribute("aria-hidden","true")}}t.forEach((e=>{e.addEventListener("click",(()=>{n()}))})),r.addEventListener("click",(()=>{n()}))})(),(()=>{const e=document.querySelectorAll(".c-lazy-map"),t=new IntersectionObserver((function(e,t){e.forEach((e=>{if(e.intersectionRatio>0){const r=e.target;r.src=r.getAttribute("data-src"),r.addEventListener("load",(()=>{r.removeAttribute("data-src")})),t.unobserve(e.target)}}))}),{threshold:[0]});e&&Array.from(e).forEach((e=>{t.observe(e)}))})(),(()=>{let e=document.querySelectorAll(".o-box--share");function t(e){e.select()}Array.prototype.slice.call(e,0).forEach((e=>{e.addEventListener("click",(()=>{t(e)})),e.addEventListener("focus",(()=>{t(e)}))}))})(),(()=>{let e=document.querySelectorAll(".js-pull-view, .js-fade-up");const t=new IntersectionObserver((function(e,t){e.forEach((e=>{if(e.intersectionRatio>0){e.target.classList.add("is-view"),t.unobserve(e.target)}}))}),{threshold:[0]});Array.from(e).forEach((e=>{t.observe(e)}))})();
