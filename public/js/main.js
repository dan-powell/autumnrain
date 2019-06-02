(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["/js/main"],{

/***/ "./resources/scripts/main/base.js":
/*!****************************************!*\
  !*** ./resources/scripts/main/base.js ***!
  \****************************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var animejs_lib_anime_es_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! animejs/lib/anime.es.js */ "./node_modules/animejs/lib/anime.es.js");
 // Home

(function () {
  // BG Animation
  Object(animejs_lib_anime_es_js__WEBPACK_IMPORTED_MODULE_0__["default"])({
    targets: '.HomeAbout-bg circle',
    loop: true,
    opacity: [{
      value: .1,
      easing: 'linear',
      duration: 1000
    }, {
      value: 1,
      easing: 'linear',
      duration: 1000
    }],
    translateX: [{
      value: 20,
      easing: 'easeOutSine',
      duration: 200
    }, {
      value: 0,
      easing: 'easeOutSine',
      duration: 200
    }],
    translateY: [{
      value: 10,
      easing: 'easeOutSine',
      duration: 200
    }, {
      value: 0,
      easing: 'easeOutSine',
      duration: 200
    }],
    delay: animejs_lib_anime_es_js__WEBPACK_IMPORTED_MODULE_0__["default"].stagger(100, {
      from: 'center',
      start: 0,
      easing: 'easeOutQuad'
    })
  });
  var hero = []; // Define the timeline

  hero[0] = animejs_lib_anime_es_js__WEBPACK_IMPORTED_MODULE_0__["default"].timeline({
    loop: false,
    autoplay: false,
    complete: function complete(anim) {
      hero[1].play();
    }
  }); // Add children

  hero[0].add({
    targets: ['.HomeHeroBg-one .box'],
    strokeDashoffset: [animejs_lib_anime_es_js__WEBPACK_IMPORTED_MODULE_0__["default"].setDashoffset, 0],
    easing: 'easeInOutSine',
    delay: animejs_lib_anime_es_js__WEBPACK_IMPORTED_MODULE_0__["default"].stagger(400),
    duration: 2000
  }).add({
    targets: ['.HomeHeroBg-one .fill', '.HomeHeroBg-one .line'],
    opacity: [0, 1],
    easing: 'easeInOutSine',
    delay: animejs_lib_anime_es_js__WEBPACK_IMPORTED_MODULE_0__["default"].stagger(200),
    duration: 400
  }, 0).add({
    targets: ['.HomeHeroBg-one .HomeHeroBg-labels > g'],
    opacity: [0, 1],
    easing: 'easeInOutSine',
    delay: animejs_lib_anime_es_js__WEBPACK_IMPORTED_MODULE_0__["default"].stagger(200),
    duration: 400
  }, 3000).add({
    targets: ['.HomeHeroBg-one'],
    scale: [0.6, 1],
    rotate: [-10, 10],
    duration: 7000,
    easing: 'easeInQuad'
  }, 0).add({
    targets: ['.HomeHeroBg-one'],
    opacity: [1, 0],
    duration: 2000,
    easing: 'easeInOutSine'
  }, "-=2000"); // Define the timeline

  hero[1] = animejs_lib_anime_es_js__WEBPACK_IMPORTED_MODULE_0__["default"].timeline({
    loop: false,
    autoplay: false,
    complete: function complete(anim) {
      hero[2].play();
    }
  }); // Add children

  hero[1].add({
    targets: ['.HomeHeroBg-two .HomeHeroBg-boxes .box'],
    strokeDashoffset: [animejs_lib_anime_es_js__WEBPACK_IMPORTED_MODULE_0__["default"].setDashoffset, 0],
    easing: 'easeInOutSine',
    delay: animejs_lib_anime_es_js__WEBPACK_IMPORTED_MODULE_0__["default"].stagger(400),
    duration: 2000
  }).add({
    targets: ['.HomeHeroBg-two .HomeHeroBg-icons > g'],
    opacity: [0, 1],
    easing: 'easeInOutSine',
    delay: animejs_lib_anime_es_js__WEBPACK_IMPORTED_MODULE_0__["default"].stagger(600),
    duration: 400
  }, 0).add({
    targets: ['.HomeHeroBg-two .HomeHeroBg-labels > g'],
    opacity: [0, 1],
    easing: 'easeInOutSine',
    delay: animejs_lib_anime_es_js__WEBPACK_IMPORTED_MODULE_0__["default"].stagger(200),
    duration: 400
  }, 2000).add({
    targets: ['.HomeHeroBg-two'],
    scale: [0.8, 1],
    rotate: [-10, 10],
    duration: 6000,
    easing: 'easeInQuad'
  }, 0).add({
    targets: ['.HomeHeroBg-two'],
    opacity: [1, 0],
    duration: 2000,
    easing: 'easeInOutSine'
  }, "-=2000"); // Define the timeline

  hero[2] = animejs_lib_anime_es_js__WEBPACK_IMPORTED_MODULE_0__["default"].timeline({
    loop: false,
    autoplay: false,
    complete: function complete(anim) {
      hero[0].play();
    }
  }); // Add children

  hero[2].add({
    targets: ['.HomeHeroBg-three .HomeHeroBg-boxes .box'],
    strokeDashoffset: [animejs_lib_anime_es_js__WEBPACK_IMPORTED_MODULE_0__["default"].setDashoffset, 0],
    easing: 'easeInOutSine',
    delay: animejs_lib_anime_es_js__WEBPACK_IMPORTED_MODULE_0__["default"].stagger(400),
    duration: 2000
  }).add({
    targets: ['.HomeHeroBg-three .HomeHeroBg-content > g'],
    opacity: [0, 1],
    easing: 'easeInOutSine',
    delay: animejs_lib_anime_es_js__WEBPACK_IMPORTED_MODULE_0__["default"].stagger(600),
    duration: 400
  }, 3000).add({
    targets: ['.HomeHeroBg-three .HomeHeroBg-labels > g'],
    opacity: [0, 1],
    easing: 'easeInOutSine',
    delay: animejs_lib_anime_es_js__WEBPACK_IMPORTED_MODULE_0__["default"].stagger(200),
    duration: 400
  }, 2000).add({
    targets: ['.HomeHeroBg-three'],
    scale: [0.8, 1],
    rotate: [-10, 10],
    duration: 6000,
    easing: 'easeInQuad'
  }, 0).add({
    targets: ['.HomeHeroBg-three'],
    opacity: [1, 0],
    duration: 2000,
    easing: 'easeInOutSine'
  }, "-=2000");

  function getRandomInt(max) {
    return Math.floor(Math.random() * Math.floor(max));
  }

  hero[getRandomInt(3)].play(); // Animate items when visible
  // Check is IntersectionObserver is supported

  if ('IntersectionObserver' in window) {
    var body = document.getElementsByTagName('body');
    body[0].classList.add('supports-observer');
  }

  ; // Setup the observer

  var intersectionObserver = new IntersectionObserver(function (entries, observer) {
    entries.forEach(function (entry) {
      if (entry.intersectionRatio > 0) {
        entry.target.classList.add('is-visible');
      } else {
        entry.target.classList.remove('is-visible');
      }
    });
  }); // Get the items to animate

  var elements = document.querySelectorAll(['.PortfolioExcerpt', '.ProjectExcerpt']); // Fire up the observer

  elements.forEach(function (element) {
    return intersectionObserver.observe(element);
  });
})();

/***/ }),

/***/ "./resources/styles/base/base.less":
/*!*****************************************!*\
  !*** ./resources/styles/base/base.less ***!
  \*****************************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ "./resources/styles/main/base.less":
/*!*****************************************!*\
  !*** ./resources/styles/main/base.less ***!
  \*****************************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ "./resources/styles/projects/365/base.less":
/*!*************************************************!*\
  !*** ./resources/styles/projects/365/base.less ***!
  \*************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ "./resources/styles/projects/fungifalls/base.less":
/*!********************************************************!*\
  !*** ./resources/styles/projects/fungifalls/base.less ***!
  \********************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ "./resources/styles/sidebar/base.less":
/*!********************************************!*\
  !*** ./resources/styles/sidebar/base.less ***!
  \********************************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ 0:
/*!**************************************************************************************************************************************************************************************************************************************************!*\
  !*** multi ./resources/scripts/main/base.js ./resources/styles/base/base.less ./resources/styles/main/base.less ./resources/styles/sidebar/base.less ./resources/styles/projects/365/base.less ./resources/styles/projects/fungifalls/base.less ***!
  \**************************************************************************************************************************************************************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! /Users/dan/Codebase/dan-powell/resources/scripts/main/base.js */"./resources/scripts/main/base.js");
__webpack_require__(/*! /Users/dan/Codebase/dan-powell/resources/styles/base/base.less */"./resources/styles/base/base.less");
__webpack_require__(/*! /Users/dan/Codebase/dan-powell/resources/styles/main/base.less */"./resources/styles/main/base.less");
__webpack_require__(/*! /Users/dan/Codebase/dan-powell/resources/styles/sidebar/base.less */"./resources/styles/sidebar/base.less");
__webpack_require__(/*! /Users/dan/Codebase/dan-powell/resources/styles/projects/365/base.less */"./resources/styles/projects/365/base.less");
module.exports = __webpack_require__(/*! /Users/dan/Codebase/dan-powell/resources/styles/projects/fungifalls/base.less */"./resources/styles/projects/fungifalls/base.less");


/***/ })

},[[0,"/js/manifest","/js/vendor"]]]);