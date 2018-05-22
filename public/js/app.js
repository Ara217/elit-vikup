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
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
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
/******/ 	__webpack_require__.p = "/";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 12);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */,
/* 1 */,
/* 2 */,
/* 3 */,
/* 4 */,
/* 5 */,
/* 6 */,
/* 7 */,
/* 8 */,
/* 9 */,
/* 10 */,
/* 11 */,
/* 12 */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(13);
module.exports = __webpack_require__(17);


/***/ }),
/* 13 */
/***/ (function(module, exports, __webpack_require__) {


/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

__webpack_require__(14);
__webpack_require__(15);
__webpack_require__(16);

/***/ }),
/* 14 */
/***/ (function(module, exports) {

$(function () {
    _.templateSettings.interpolate = /{#{([\s\S]+?)}#}/g;
    // show body when scripts are loaded
    $('body').show();

    // move placeholders up on input focus
    $(document).on('focus keyup paste', 'input.form-control', function (e) {
        var field = $(e.target);
        var label = field.next();
        if (e.type === 'focus') {
            return label.addClass('active');
        }
        if (field.val().length) {
            label.addClass('active');
        } else {
            label.removeClass('active');
        }
    });

    // disable submit button and show loader when form is submitted
    $('form').on('submit', function (e) {
        var submit = $(e.target).find('input[type="submit"]');
        submit.prop('disabled', true);

        if (!submit.next().length) {
            var loader = $('<img src="/images/loader.gif" class="loader-animation" width="30px" style="display:none">');
            loader.insertAfter(submit);
            loader.show('normal');
        }
    });
});

// setup axios response
window.axios.interceptors.response.use(function (response) {
    loaderRemove();

    if (response.data.success) {
        if (response.data.message) {
            toastr.success(response.data.message);
        }
    } else {
        if (response.data.message) {
            toastr.error(response.data.message);
        }

        if (response.data.errors) {
            toastr.error(response.data.errors);
        }
    }

    return response.data;
}, function (error) {
    loaderRemove();

    var errors = error.response.data;
    if (errors.errors) {
        _.each(errors.errors, function (error) {
            toastr.error(error);
        });

        return errors;
    } else {
        toastr.error(errors.message);
    }
});

loaderRemove = function loaderRemove() {
    var loader = $('img.loader-animation');
    loader.hide('normal');
    loader.siblings('button').prop('disabled', false);
    loader.remove();
};

showErrors = function showErrors(form, errors) {
    form.find(':input').nextAll('p').remove();

    _.each(errors, function (obj, key) {
        var element = form.find('[name=' + key + ']');

        _.each(obj, function (error) {
            element.after('<p style="color: #d9534f; font-size: 16px">' + error + ' </p>');
        });
    });
};

// handleFormSubmit = (form, constraints) => {
//     let values = validate.collectFormValues(form);
//     let errors = validate(values, constraints);
//
//     if (!errors) {
//         return values;
//     } else {
//         showErrors(form, errors);
//         // _.each(errors, function (error) {
//         //     toastr.error(error);
//         // });
//         loaderRemove();
//         return false;
//     }
// };

// handleSingleField = (element, constraints) => {
//     return validate.single(element, constraints);
// };

event = function event($el, $type, $handler) {
    if ($el) {
        $el.addEventListener($type, $handler);
    }
};

/***/ }),
/* 15 */
/***/ (function(module, exports) {

$(function () {
    $('#sendEmail').on('submit', function (e) {
        e.preventDefault();
        var form = $(e.currentTarget);
        var submitButton = form.find('input[type=submit]');

        axios.post('/sendEmail', form.serialize()).then(function (results) {
            submitButton.prop("disabled", false);
            form.find("input[type=text], textarea").val("");
            form[0].reset();

            if (!results.errors) {
                toastr.success('Ваше письмо отправлено.');
            }
        });
    });

    $('#orderCall').on('submit', function (e) {
        e.preventDefault();
        var form = $(e.currentTarget);
        var submitButton = form.find('input[type=submit]');

        axios.post('/orderCall', form.serialize()).then(function (results) {
            submitButton.prop("disabled", false);
            form.find("input[type=text], textarea").val("");
            form[0].reset();

            if (!results.errors) {
                toastr.success('Вы заказали звонок.');
            }
        });
    });
});

/***/ }),
/* 16 */
/***/ (function(module, exports) {

$(function () {});

/***/ }),
/* 17 */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ })
/******/ ]);