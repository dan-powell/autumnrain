!function(window){"use strict";function classReg(className){return new RegExp("(^|\\s+)"+className+"(\\s+|$)")}function toggleClass(elem,c){var fn=hasClass(elem,c)?removeClass:addClass;fn(elem,c)}var hasClass,addClass,removeClass;"classList"in document.documentElement?(hasClass=function(elem,c){return elem.classList.contains(c)},addClass=function(elem,c){elem.classList.add(c)},removeClass=function(elem,c){elem.classList.remove(c)}):(hasClass=function(elem,c){return classReg(c).test(elem.className)},addClass=function(elem,c){hasClass(elem,c)||(elem.className=elem.className+" "+c)},removeClass=function(elem,c){elem.className=elem.className.replace(classReg(c)," ")});var classie={hasClass:hasClass,addClass:addClass,removeClass:removeClass,toggleClass:toggleClass,has:hasClass,add:addClass,remove:removeClass,toggle:toggleClass};"function"==typeof define&&define.amd?define(classie):window.classie=classie}(window),function(){function init(){initEvents(),"true"==readCookie("sidebar")&&Math.max(document.documentElement.clientWidth,window.innerWidth||0)>970?(classie.add(bodyEl,"has-openSidebar"),isOpen=!0):(classie.remove(bodyEl,"has-openSidebar"),isOpen=!1)}function readCookie(name){for(var nameEQ=name+"=",ca=document.cookie.split(";"),i=0;i<ca.length;i++){for(var c=ca[i];" "==c.charAt(0);)c=c.substring(1,c.length);if(0==c.indexOf(nameEQ))return c.substring(nameEQ.length,c.length)}return null}function initEvents(){for(i=0;i<openbtn.length;i++)openbtn[i].addEventListener("click",toggleMenu),closebtn&&closebtn.addEventListener("click",toggleMenu)}function toggleMenu(){return isAnimating?!1:(isAnimating=!0,isOpen?(classie.remove(bodyEl,"has-openSidebar"),setTimeout(function(){isAnimating=!1},300),document.cookie="sidebar=false; expires=Fri, 3 Aug 2020 20:47:11 UTC; path=/"):(classie.add(bodyEl,"has-openSidebar"),document.cookie="sidebar=true; expires=Fri, 3 Aug 2020 20:47:11 UTC; path=/",isAnimating=!1),void(isOpen=!isOpen))}var bodyEl=document.body,openbtn=(document.getElementById("js_content"),document.querySelectorAll(".js_openSidebar")),closebtn=document.getElementById("js_closeSidebar"),isOpen=!1,isAnimating=!1;init()}(),function(){for(var method,noop=function(){},methods=["assert","clear","count","debug","dir","dirxml","error","exception","group","groupCollapsed","groupEnd","info","log","markTimeline","profile","profileEnd","table","time","timeEnd","timeStamp","trace","warn"],length=methods.length,console=window.console=window.console||{};length--;)method=methods[length],console[method]||(console[method]=noop)}();var enable_debug=!0,debug=function(object,label){1==enable_debug&&console.log(object,label)};