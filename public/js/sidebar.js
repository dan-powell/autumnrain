(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["/js/sidebar"],{

/***/ "./resources/scripts/sidebar/overlay.mjs":
/*!***********************************************!*\
  !*** ./resources/scripts/sidebar/overlay.mjs ***!
  \***********************************************/
/*! no exports provided */
/***/ (function(__webpack_module__, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/*

# Overlay

v1.3.0

Used to add classes for the display of dropdowns, flyouts and overlays.
Clicking a button will add a class to the overlay. Clicking again will remove the class. Clicking outside of either the button, or the overlay will remove the class.
CSS Classes must then be used to show/hide/animate the overlay.
Any number of buttons can be used to control any number of overlays.

## Usage

Intialization:

var foo = new Overlay('.overlay-selector', '.button-selector');

## Methods

foo.toggle()
Swaps the state between open/closed closed/open.

foo.open()
Activates overlay

foo.close()
Deactivates overlay

## Options

Custom options

var foo = new Overlay('.overlay-selector', '.button-selector', {
	open: 'false', // Initial state
	class_open: 'is-open', // Class applied to overlay when active
	class_open_control: 'is-active' // Class applied to buttons when active
    class_open_body: '' // Class applied to body when active
    callback_toggle: null, // Callback function to be called when toggled
    callback_open: null, // Callback function to be called when opened
    callback_close: null // Callback function to be called when closed
});

## Tips and Tricks

### Control from other scripts

Buttons are optional, only an overlay needs to be declared:

var foo = new Overlay('.overlay-selector');

... so the overlay can be controlled dynamically:

<element>.addEventListener("click", foo.toggle, true);

... or just:

foo.toggle()

### Callback functions

Custom functions can be called when an action takes place. Define anonymous functions in the options, like so:

var foo = new Overlay('.overlay-selector', '.button-selector', {
    callback_open: function() {
        console.log('bar');
    },
});

*/

(function (root, factory) {
    if (typeof define === 'function' && define.amd) {
        define([], function () {
            return factory(root);
        });
    } else if (typeof exports === 'object') {
        module.exports = factory(root);
    } else {
        root.Overlay = factory(root);
    }
})(typeof global !== 'undefined' ? global : typeof window !== 'undefined' ? window : undefined, function (window) {

    'use strict';

    var test = false;

    //
    // Default settings
    //

    var defaults = {
        open: 'false',
        class_open: 'is-open',
        class_open_control: 'is-active',
        class_open_body: null,
        callback_toggle: null,
        callback_open: null,
        callback_close: null
    };

    var open = false;

    //
    // Utility Methods
    //

    /**
     * Merge defaults with user options
     */
    var debug = function ( note, object ) {
        if (test == true) {
            console.log(note, object)
        }
        return defaults;
    };

    /**
     * Merge defaults with user options
     */
    var extend = function ( defaults, options ) {
        for ( var key in options ) {
            if (Object.prototype.hasOwnProperty.call(options, key)) {
                defaults[key] = options[key];
            }
        }
        return defaults;
    };

    /**
     * Check if browser supports required methods
     * @return {Boolean} Returns true if all required methods are supported
     */
    var supports = function () {
        return (
            'querySelectorAll' in document &&
            'addEventListener' in window &&
            'classList' in window.Element.prototype
        );
    };

    //
    // Constructor
    //

    var Overlay = function (overlay_selector, button_selector, options) {

        //
        // Variables
        //

        var Overlay = {}; // Object for public APIs
        var settings;


        //
        // Public Methods
        //

        /**
         * Destroy the current initialization.
         */
        Overlay.destroy = function() {

            // If plugin isn't already initialized, stop
            if (!settings) return;

        };

        /**
         * Initialize
         */
        Overlay.init = function(options) {

            // feature test
            if (!supports()) console.error('Overlay: This browser does not support the required JavaScript methods and browser APIs.');

            // Destroy any existing initializations
            Overlay.destroy();

            // Selectors and variables
            settings = extend(defaults, options || {}); // Merge user options with defaults

            debug('settings', settings);

            // Find all the controls & overlays
            if (typeof button_selector !== 'undefined') {
                Overlay.controls = document.querySelectorAll(button_selector);
            } else {
                Overlay.controls = [];
            }
            Overlay.overlays = document.querySelectorAll(overlay_selector);

            if(Overlay.controls.length > 0) {
                setup_controls();
            }

            setup_outside();

        };

        /**
         * Toggle
         */
        Overlay.toggle = function() {

            for(var i = 0; i < Overlay.controls.length; i++) {
                Overlay.controls[i].classList.toggle(settings.class_open_control);
            }

            for(var i = 0; i < Overlay.overlays.length; i++) {
                Overlay.overlays[i].classList.toggle(settings.class_open);
            }

            if(settings.class_open_body != null) {
                document.body.classList.toggle(settings.class_open_body);
            }

            if(typeof settings.callback_toggle == 'function') {
                debug('Toggle Callback');
                settings.callback_toggle();
            }

            if (open === false) {
                open = true;
                if(typeof settings.callback_open == 'function') {
                    debug('Open Callback');
                    settings.callback_open();
                }
            } else {
                open = false;
                if(typeof settings.callback_close == 'function') {
                    debug('Close Callback');
                    settings.callback_close();
                }
            }

            debug('toggle()', open);

        }


        Overlay.close = function() {

            for(var i = 0; i < Overlay.controls.length; i++) {
                Overlay.controls[i].classList.remove(settings.class_open_control);
            }

            for(var i = 0; i < Overlay.overlays.length; i++) {
                Overlay.overlays[i].classList.remove(settings.class_open);
            }

            if(settings.class_open_body != null) {
                document.body.classList.remove(settings.class_open_body);
            }

            open = false;

            if(typeof settings.callback_close == 'function') {
                debug('Close Callback');
                settings.callback_close();
            }

            debug('close()', open);

        }

        Overlay.open = function() {

            for(var i = 0; i < Overlay.controls.length; i++) {
                Overlay.controls[i].classList.add(settings.class_open_control);
            }

            for(var i = 0; i < Overlay.overlays.length; i++) {
                Overlay.overlays[i].classList.add(settings.class_open);
            }

            if(settings.class_open_body != null) {
                document.body.classList.add(settings.class_open_body);
            }

            open = true;

            if(typeof settings.callback_open == 'function') {
                debug('Open Callback');
                settings.callback_open();
            }

            debug('open()', open);

        }

        //
        // Private Methods
        //

        /**
         * Add event listeners for clicks on controls.
         */
        var setup_controls = function() {
            for(var i = 0; i < Overlay.controls.length; i++) {

                // For touch events
                Overlay.controls[i].addEventListener('touchstart', function(e){
                    debug('touch!');
                    e.preventDefault();
                    Overlay.toggle();
                }, true);

                // For click events
                Overlay.controls[i].addEventListener('click', function(e){
                    debug('click!');
                    e.preventDefault();
                    Overlay.toggle();
                }, true);

            }
        }

        /**
         * Add an event listener to the document to catch 'outside' clicks.
         */
        var setup_outside = function () {

            // For touch events
            document.addEventListener('touchstart', function(e){
                debug('outside touch!');
                outside(e);
            }, true);

            // For click events
            document.addEventListener('click', function(e){
                debug('outside click!');
                outside(e);
            }, true);

        }

        /**
         * Handle clicks on outside
         */
        var outside = function(event) {

            // Check if the event occured on a button
            var test = false;
            for(var i = 0; i < Overlay.controls.length; i++) {
                if (Overlay.controls[i].contains(event.target)) {
                    test = true;
                }
            }

            // Check if the event occured within an overlay
            if(test === false) {
                var test = false;
                for(var i = 0; i < Overlay.overlays.length; i++) {
                    if (Overlay.overlays[i].contains(event.target)) {
                        test = true;
                    }

                    if (test === false) {
                        // If neither of the above checks are true, close the overlay
                        Overlay.close();
                    }
                }
            }
        }


        //
        // Initialize plugin
        //

        Overlay.init(options);


        //
        // Public APIs
        //

        return Overlay;

    };

    return Overlay;

});


/***/ }),

/***/ "./resources/scripts/sidebar/sidebar.js":
/*!**********************************************!*\
  !*** ./resources/scripts/sidebar/sidebar.js ***!
  \**********************************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _overlay__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./overlay */ "./resources/scripts/sidebar/overlay.mjs");
/* harmony import */ var animejs_lib_anime_es_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! animejs/lib/anime.es.js */ "./node_modules/animejs/lib/anime.es.js");



(function () {
  function open_sidebar() {
    Object(animejs_lib_anime_es_js__WEBPACK_IMPORTED_MODULE_1__["default"])({
      targets: '.Sidebar .Nav-link',
      opacity: [{
        value: 1,
        easing: 'easeOutSine',
        duration: 200
      }],
      delay: animejs_lib_anime_es_js__WEBPACK_IMPORTED_MODULE_1__["default"].stagger(200)
    });
    Object(animejs_lib_anime_es_js__WEBPACK_IMPORTED_MODULE_1__["default"])({
      targets: '.Sidebar-overlay-bg polygon',
      opacity: [{
        value: 1,
        easing: 'easeOutSine',
        duration: 200
      }],
      // translateX: [
      //     {value: '-2em', easing: 'easeOutSine', duration: 200},
      // ],
      delay: animejs_lib_anime_es_js__WEBPACK_IMPORTED_MODULE_1__["default"].stagger(50, {
        grid: [4, 10],
        from: 'first'
      })
    });
  }

  function close_sidebar() {
    Object(animejs_lib_anime_es_js__WEBPACK_IMPORTED_MODULE_1__["default"])({
      targets: '.Sidebar .Nav-link',
      opacity: [{
        value: 0,
        easing: 'easeOutSine',
        duration: 200
      }]
    });
    Object(animejs_lib_anime_es_js__WEBPACK_IMPORTED_MODULE_1__["default"])({
      targets: '.Sidebar-overlay-bg polygon',
      opacity: [{
        value: 0,
        easing: 'easeOutSine',
        duration: 200
      }],
      // translateX: [
      //     {value: '-4em', easing: 'easeOutSine', duration: 200},
      // ],
      delay: animejs_lib_anime_es_js__WEBPACK_IMPORTED_MODULE_1__["default"].stagger(50, {
        grid: [4, 10],
        from: 'last'
      })
    });
  }

  var sidebar = new Overlay('.Sidebar', '.js-sidebar', {
    open: 'false',
    // Initial state
    class_open: 'is-open',
    // Class applied to overlay when active
    class_open_control: 'is-active',
    // Class applied to buttons when active
    class_open_body: 'has-openSidebar',
    // Class applied to body when active
    callback_open: function callback_open() {
      open_sidebar();
    },
    callback_close: function callback_close() {
      close_sidebar();
    }
  });
})();

/***/ }),

/***/ 6:
/*!****************************************************!*\
  !*** multi ./resources/scripts/sidebar/sidebar.js ***!
  \****************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /app/resources/scripts/sidebar/sidebar.js */"./resources/scripts/sidebar/sidebar.js");


/***/ })

},[[6,"/js/manifest","/js/vendor"]]]);