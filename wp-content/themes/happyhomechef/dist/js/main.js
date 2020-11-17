/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./src/js/facebook-app.js":
/*!********************************!*\
  !*** ./src/js/facebook-app.js ***!
  \********************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return FacebookApp; });
function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

/* eslint-disable no-console */

/* eslint-disable no-undef */
var FacebookApp = /*#__PURE__*/function () {
  function FacebookApp($) {
    _classCallCheck(this, FacebookApp);

    this.init($);
  }

  _createClass(FacebookApp, [{
    key: "init",
    value: function init($) {// $.ajaxSetup( { cache: true } );
      // $.getScript( 'https://connect.facebook.net/en_US/sdk.js', () => {
      //     FB.init( {
      //         appId: '403490087355999',
      //         version: 'v9.0',
      //     } );
      //     FB.getLoginStatus( updateStatusCallback );
      //     // this.getPosts();
      // } );
      // function updateStatusCallback() {
      //     fetch( 'https://graph.facebook.com/v9.0/me?fields=id,name&access_token=EAALKSb6Q3XgBABswJwZAsLzKrvtkQEVb3EWZBX48rKZA4UX8uDUQFvf4ysL1PZAvNgKH9BIB36IKvRXBejgsTy2D0qxR9Iz1suxmsL219dGwZBqZBceJ6qHbeG6EsU1uNekJaoXLsrc8B4NrMKy1mZA0oADLQYmShhvEDSx9wzujMCaL9ReeUHkZBZANFkar5cTwZD' )
      //         .then( ( response ) => response.json() )
      //         .then( ( data ) => console.log( data ) );
      // }
    }
  }, {
    key: "getPosts",
    value: function getPosts() {
      fetch('https://graph.facebook.com/3477446135657556/feed?fields=attachments&access_token=EAALKSb6Q3XgBABswJwZAsLzKrvtkQEVb3EWZBX48rKZA4UX8uDUQFvf4ysL1PZAvNgKH9BIB36IKvRXBejgsTy2D0qxR9Iz1suxmsL219dGwZBqZBceJ6qHbeG6EsU1uNekJaoXLsrc8B4NrMKy1mZA0oADLQYmShhvEDSx9wzujMCaL9ReeUHkZBZANFkar5cTwZD').then(function (response) {
        return response.json();
      }).then(function (data) {
        return console.log(data);
      });
    }
  }]);

  return FacebookApp;
}();



/***/ }),

/***/ "./src/js/footer-mob-menu.js":
/*!***********************************!*\
  !*** ./src/js/footer-mob-menu.js ***!
  \***********************************/
/*! no static exports found */
/***/ (function(module, exports) {

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

/* eslint-disable no-undef */
var MenuMobileFooter = /*#__PURE__*/function () {
  function MenuMobileFooter(el) {
    _classCallCheck(this, MenuMobileFooter);

    this.footer = el;
    this.widgetNavs = this.footer.querySelectorAll('.widget_nav_menu');
    this.init();
  }

  _createClass(MenuMobileFooter, [{
    key: "init",
    value: function init() {
      this.widgetNavs.forEach(function (element) {
        var click = element.querySelector('.widget-title');
        click.addEventListener('click', function (el) {
          var menu = el.target.nextElementSibling.firstChild;

          if (!menu.classList.contains('active')) {
            menu.classList.add('active');
          } else {
            menu.classList.remove('active');
          }
        });
      });
    }
  }]);

  return MenuMobileFooter;
}();

var footer = document.querySelector('.site-footer');

if (null !== footer) {
  new MenuMobileFooter(footer);
}

/***/ }),

/***/ "./src/js/main-mob-menu.js":
/*!*********************************!*\
  !*** ./src/js/main-mob-menu.js ***!
  \*********************************/
/*! no static exports found */
/***/ (function(module, exports) {

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

/* eslint-disable no-undef */
var MainMobileMenu = /*#__PURE__*/function () {
  function MainMobileMenu(el) {
    _classCallCheck(this, MainMobileMenu);

    this.mainMenu = el;
    this.body = document.querySelector('body');
    this.hamburgerClick = document.querySelector('.hamburger-click');
    this.hamburgerIcon = document.querySelector('.hamb');
    this.closeIcon = document.querySelector('.close');
    this.init();
  }

  _createClass(MainMobileMenu, [{
    key: "init",
    value: function init() {
      var _this = this;

      this.hamburgerClick.addEventListener('click', function (e) {
        e.preventDefault();

        if (!_this.mainMenu.classList.contains('active')) {
          _this.mainMenu.classList.add('active');

          _this.hamburgerIcon.style.display = 'none';
          _this.closeIcon.style.display = 'block';
          _this.body.style.overflow = 'hidden';
        } else {
          _this.mainMenu.classList.remove('active');

          _this.hamburgerIcon.style.display = 'block';
          _this.closeIcon.style.display = 'none';
          _this.body.style.overflow = 'inherit';
        }
      });
    }
  }]);

  return MainMobileMenu;
}();

var mainMenu = document.querySelector('.main-navigation');

if (null !== mainMenu) {
  new MainMobileMenu(mainMenu);
}

/***/ }),

/***/ "./src/js/reviews.js":
/*!***************************!*\
  !*** ./src/js/reviews.js ***!
  \***************************/
/*! no static exports found */
/***/ (function(module, exports) {

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

/* eslint-disable no-unused-vars */

/* eslint-disable no-undef */
var Reviews = /*#__PURE__*/function () {
  function Reviews(el) {
    _classCallCheck(this, Reviews);

    this.reviews = el;
    this.btns = this.reviews.querySelectorAll('.button-review');
    this.reviewBlk = this.reviews.querySelectorAll('.review-blk');
    this.init();
  }

  _createClass(Reviews, [{
    key: "init",
    value: function init() {
      var _this = this;

      if (null !== this.reviews) {
        this.btns.forEach(function (btn) {
          var btnId = btn.dataset.id;
          btn.addEventListener('click', function (e) {
            var selected = document.getElementsByClassName('current-btn-review');
            selected[0].className = selected[0].className.replace(' current-btn-review', '');
            btn.className += ' current-btn-review';

            _this.reviewBlk.forEach(function (review) {
              var reviewId = review.dataset.id;

              if (btnId === reviewId) {
                review.style.display = 'block';
              } else {
                review.style.display = 'none';
              }
            });
          });
        });
      }
    }
  }]);

  return Reviews;
}();

var reviews = document.querySelector('.block-component--reviews');

if (null !== reviews) {
  new Reviews(reviews);
}

/***/ }),

/***/ "./src/js/scripts.js":
/*!***************************!*\
  !*** ./src/js/scripts.js ***!
  \***************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* WEBPACK VAR INJECTION */(function(jQuery) {/* harmony import */ var _reviews__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./reviews */ "./src/js/reviews.js");
/* harmony import */ var _reviews__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_reviews__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _top_hero__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./top-hero */ "./src/js/top-hero.js");
/* harmony import */ var _top_hero__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_top_hero__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var _main_mob_menu__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./main-mob-menu */ "./src/js/main-mob-menu.js");
/* harmony import */ var _main_mob_menu__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(_main_mob_menu__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var _footer_mob_menu__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./footer-mob-menu */ "./src/js/footer-mob-menu.js");
/* harmony import */ var _footer_mob_menu__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(_footer_mob_menu__WEBPACK_IMPORTED_MODULE_3__);
/* harmony import */ var _sticky_header__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./sticky-header */ "./src/js/sticky-header.js");
/* harmony import */ var _search__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ./search */ "./src/js/search.js");
/* harmony import */ var _facebook_app__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ./facebook-app */ "./src/js/facebook-app.js");
/* eslint-disable no-undef */








(function ($) {
  'use strict';

  new _sticky_header__WEBPACK_IMPORTED_MODULE_4__["default"]();
  new _search__WEBPACK_IMPORTED_MODULE_5__["default"]();
  new _facebook_app__WEBPACK_IMPORTED_MODULE_6__["default"]($);
})(jQuery);
/* WEBPACK VAR INJECTION */}.call(this, __webpack_require__(/*! jquery */ "jquery")))

/***/ }),

/***/ "./src/js/search.js":
/*!**************************!*\
  !*** ./src/js/search.js ***!
  \**************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return Search; });
function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

/* eslint-disable no-undef */
var Search = /*#__PURE__*/function () {
  function Search() {
    _classCallCheck(this, Search);

    this.stickySearch = document.querySelector('.sticky-search');
    this.buttonSearch = document.querySelector('.button-search');
    this.buttonCloseSearch = document.querySelector('.button-close-search');
    this.inputSearch = document.querySelector('#input-search');
    this.init();
  }

  _createClass(Search, [{
    key: "init",
    value: function init() {
      var _this = this;

      this.buttonSearch.addEventListener('click', function (e) {
        e.preventDefault();

        _this.handleShowAndHide();
      });
      this.buttonCloseSearch.addEventListener('click', function (e) {
        e.preventDefault();

        _this.handleClose();
      });
    }
  }, {
    key: "handleShowAndHide",
    value: function handleShowAndHide() {
      if (!this.stickySearch.classList.contains('show-sticky-search')) {
        this.stickySearch.classList.add('show-sticky-search');
        this.inputSearch.focus();
      }
    }
  }, {
    key: "handleClose",
    value: function handleClose() {
      if (this.stickySearch.classList.contains('show-sticky-search')) {
        this.stickySearch.classList.remove('show-sticky-search');
      }
    }
  }]);

  return Search;
}();



/***/ }),

/***/ "./src/js/sticky-header.js":
/*!*********************************!*\
  !*** ./src/js/sticky-header.js ***!
  \*********************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return HeaderAnimation; });
function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

/* eslint-disable no-undef */
var HeaderAnimation = /*#__PURE__*/function () {
  function HeaderAnimation() {
    _classCallCheck(this, HeaderAnimation);

    this.lastScrollTop = 0;
    this.mainHeader = document.querySelector('#masthead').offsetHeight;
    this.stickyHeader = document.querySelector('.sticky-header');
    this.handleScroll();
  }

  _createClass(HeaderAnimation, [{
    key: "handleScroll",
    value: function handleScroll() {
      var _this = this;

      window.addEventListener('scroll', function () {
        var st = window.pageYOffset || document.documentElement.scrollTop;

        if (st > _this.lastScrollTop && st > _this.mainHeader) {
          _this.stickyHeader.classList.add('show-sticky');
        } else {
          _this.stickyHeader.classList.remove('show-sticky');
        }

        _this.lastScrollTop = st <= 0 ? 0 : st; // For Mobile or negative scrolling
      }, false);
    }
  }]);

  return HeaderAnimation;
}();



/***/ }),

/***/ "./src/js/top-hero.js":
/*!****************************!*\
  !*** ./src/js/top-hero.js ***!
  \****************************/
/*! no static exports found */
/***/ (function(module, exports) {

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

/* eslint-disable no-unused-vars */

/* eslint-disable no-undef */
var TopHero = /*#__PURE__*/function () {
  function TopHero(el) {
    _classCallCheck(this, TopHero);

    this.mainContainer = el.offsetWidth;
    this.windowWidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
    this.topHeroRightContainer = document.querySelector('.top-hero--right-content').offsetWidth;
    this.backgroundImageContainer = document.querySelector('.background-image-top-hero');
    this.init();
  }

  _createClass(TopHero, [{
    key: "init",
    value: function init() {
      var _this = this;

      this.printOffSizes(this.mainContainer, this.windowWidth, this.topHeroRightContainer);
      window.addEventListener('resize', function () {
        return _this.handleResizeWindow();
      });
    }
  }, {
    key: "handleResizeWindow",
    value: function handleResizeWindow() {
      // New values on resize.
      var resizeMainContainer = document.querySelector('.block-component--top-hero > .container').offsetWidth;
      var resizeWindowWidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
      var resizeTopHeroRightContainer = document.querySelector('.top-hero--right-content').offsetWidth;
      this.printOffSizes(resizeMainContainer, resizeWindowWidth, resizeTopHeroRightContainer);
    }
  }, {
    key: "printOffSizes",
    value: function printOffSizes(mainContainer, windowWidth, topHeroRightContainer) {
      var totalContainer = (windowWidth - mainContainer) / 2;
      var totalWidth = parseInt(totalContainer + topHeroRightContainer);
      this.backgroundImageContainer.style.width = totalWidth + 'px';
    }
  }]);

  return TopHero;
}();

var topHero = document.querySelector('.block-component--top-hero > .container');

if (null !== topHero) {
  new TopHero(topHero);
}

/***/ }),

/***/ "./src/sass/styles.scss":
/*!******************************!*\
  !*** ./src/sass/styles.scss ***!
  \******************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

// extracted by mini-css-extract-plugin

/***/ }),

/***/ 0:
/*!********************************************************!*\
  !*** multi ./src/js/scripts.js ./src/sass/styles.scss ***!
  \********************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! ./src/js/scripts.js */"./src/js/scripts.js");
module.exports = __webpack_require__(/*! ./src/sass/styles.scss */"./src/sass/styles.scss");


/***/ }),

/***/ "jquery":
/*!*************************!*\
  !*** external "jQuery" ***!
  \*************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = jQuery;

/***/ })

/******/ });
//# sourceMappingURL=main.js.map