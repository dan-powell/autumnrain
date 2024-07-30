(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["/js/projects/3dprint"],{

/***/ "./resources/scripts/projects/3dprint/base.js":
/*!****************************************************!*\
  !*** ./resources/scripts/projects/3dprint/base.js ***!
  \****************************************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var animejs_lib_anime_es_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! animejs/lib/anime.es.js */ "./node_modules/animejs/lib/anime.es.js");
 // Helper to split titles in to individual letters

var textWrappers = document.querySelectorAll(['.js-anime-small', '.js-anime-title', '.js-anime-sub']);

for (var x = 0; x < textWrappers.length; x++) {
  textWrappers[x].innerHTML = textWrappers[x].textContent.replace(/\S/g, "<span class='js-anime-span'>$&</span>");
} // Intro


var timeline_intro = animejs_lib_anime_es_js__WEBPACK_IMPORTED_MODULE_0__["default"].timeline({
  autoplay: false,
  complete: function complete(anim) {
    Object(animejs_lib_anime_es_js__WEBPACK_IMPORTED_MODULE_0__["default"])({
      targets: '.js-anime-icon',
      translateY: '-20px',
      direction: 'alternate',
      loop: true,
      easing: 'easeInOutSine'
    });
  }
}).add({
  targets: '.js-anime-small .js-anime-span',
  scale: [0, 1],
  easing: "easeOutExpo",
  duration: 600,
  delay: function delay(el, i) {
    return 1000 / 19 * i;
  }
}, 0).add({
  targets: '.js-anime-title .js-anime-span',
  scale: [0, 1],
  easing: "easeOutExpo",
  duration: 600,
  delay: function delay(el, i) {
    return 1000 / 11 * i;
  }
}, 0).add({
  targets: '.js-anime-line',
  scaleX: [0, 1],
  easing: "easeInOutExpo",
  duration: 1000
}, 0).add({
  targets: '.js-anime-sub .js-anime-span',
  scale: [0, 1],
  easing: "easeOutExpo",
  duration: 600,
  delay: function delay(el, i) {
    return 1000 / 50 * i;
  }
}).add({
  targets: '.js-anime-icon',
  scaleX: [10, 1],
  translateY: ['-20vh', 0],
  opacity: [0, 1],
  easing: "easeInQuad",
  duration: 600,
  loop: true,
  direction: 'alternate'
}, "-=1000"); // Setup observer
// Check if we have support for observers...

if ('IntersectionObserver' in window && 'IntersectionObserverEntry' in window && 'intersectionRatio' in window.IntersectionObserverEntry.prototype) {
  var observer_title = new IntersectionObserver(function (entry) {
    if (entry.intersectionRatio > 0) {
      timeline_intro.play();
    } else {
      timeline_intro.restart();
    }
  });
  observer_title.observe(document.querySelector('.js-anime-observer'));
} else {
  //no support, just play animation
  timeline_intro.play();
} // Generic observer for animations on scroll


var observer = new IntersectionObserver(function (entries) {
  entries.forEach(function (entry) {
    if (entry.intersectionRatio > 0) {
      entry.target.tl.play();
    } else {
      entry.target.tl.seek(0);
    }
  });
}); // Fade in animations

var el_fades = document.querySelectorAll('.js-anime-fade'); // intialise observers

el_fades.forEach(function (el) {
  el.tl = animejs_lib_anime_es_js__WEBPACK_IMPORTED_MODULE_0__["default"].timeline({
    autoplay: false
  }).add({
    targets: el,
    opacity: [0.1, 1],
    easing: "linear",
    duration: 400,
    delay: function delay() {
      return el.dataset.delay || 400;
    }
  });
  observer.observe(el);
}); // Drop in animations

var el_drops = document.querySelectorAll('.js-anime-drop'); // intialise observers

el_drops.forEach(function (el) {
  el.tl = animejs_lib_anime_es_js__WEBPACK_IMPORTED_MODULE_0__["default"].timeline({
    autoplay: false
  }).add({
    targets: el,
    opacity: [0, 1],
    translateX: [40, 0],
    translateZ: 0,
    scaleX: [0.1, 1],
    easing: "spring(1, 80, 10, 0)",
    duration: 400,
    delay: function delay() {
      return el.dataset.delay || 400;
    }
  });
  observer.observe(el);
});
var el_zooms = document.querySelectorAll('.js-anime-zoom'); // intialise observers

el_zooms.forEach(function (el) {
  el.tl = animejs_lib_anime_es_js__WEBPACK_IMPORTED_MODULE_0__["default"].timeline({
    autoplay: false
  }).add({
    targets: el,
    opacity: [0.1, 1],
    scale: [0.1, 1],
    easing: "spring(1, 80, 10, 0)",
    duration: 400,
    delay: function delay() {
      return el.dataset.delay || 400;
    }
  });
  observer.observe(el);
});

/***/ }),

/***/ 3:
/*!**********************************************************!*\
  !*** multi ./resources/scripts/projects/3dprint/base.js ***!
  \**********************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /app/resources/scripts/projects/3dprint/base.js */"./resources/scripts/projects/3dprint/base.js");


/***/ })

},[[3,"/js/manifest","/js/vendor"]]]);