/**
 * Creates a view model.
 *
 * @constructor
 * @param {object} model
 */
function View(model) {
    var wrapper;

    this.el = wrapper = document.createElement('div');
    this.model = model;
    this.isShowing = false;

    // HTML
    wrapper.id = config.name;
    config.parent.appendChild(wrapper);

    // CSS
    css.inject(document.getElementsByTagName('head')[0], config.styles);

    // JavaScript
    events.add(document, ('ontouchstart' in window) ? 'touchstart' : 'click', viewevents.click, this);
    events.add(document, 'keyup', viewevents.keyup, this);
    events.add(document, 'readystatechange', viewevents.readystatechange, this);
    events.add(window, 'pageshow', viewevents.pageshow, this);
}


/**
 * Tells the view to redraw
 */
View.prototype.redraw = function redraw() {
    events.remove(this.el.querySelector('form'), 'submit', this.model.cart.w3sb_checkout, this.model.cart);
    this.el.innerHTML = template(config.template, this.model);
    events.add(this.el.querySelector('form'), 'submit', this.model.cart.w3sb_checkout, this.model.cart);
};


/**
 * Tells the view to show
 */
View.prototype.show = function show() {
    if (!this.isShowing) {
        css.add(document.body, constants.SHOWING_CLASS);
        this.isShowing = true;
    }
};


/**
 * Tells the view to hide
 */
View.prototype.hide = function hide() {
    if (this.isShowing) {
        css.remove(document.body, constants.SHOWING_CLASS);
        this.isShowing = false;
    }
};


/**
 * Toggles the visibility of the view
 */
View.prototype.toggle = function toggle() {
    this[this.isShowing ? 'hide' : 'show']();
};


/**
 * Binds cart submit events to a form.
 *
 * @param {HTMLElement} form
 * @return {boolean}
 */
View.prototype.bind = function bind(form) {
    var that = this;

    // Don't bind forms without a cmd value
    if (!constants.COMMANDS[form.cmd.value]) {
        return false;
    }

    // Prevent re-binding forms
    if (form.hassbmincart) {
        return false;
    } else {
        form.hassbmincart = true;
    }

    if (form.display) {
        events.add(form, 'submit', function (e) {
            e.preventDefault();
            that.show();
        });
    } else {
        events.add(form, 'submit', function (e) {
            e.preventDefault(e);
            that.model.cart.add(forms.parse(form));
        });
    }

    return true;
};


/**
 * Adds an item to the view.
 *
 * @param {number} idx
 * @param {object} data
 */
View.prototype.addItem = function addItem(idx, data) {
    this.redraw();
    this.show();

    var els = this.el.querySelectorAll('.' + constants.ITEM_CLASS);
    css.add(els[idx], constants.ITEM_CHANGED_CLASS);
};


/**
 * Changes an item in the view.
 *
 * @param {number} idx
 * @param {object} data
 */
View.prototype.changeItem = function changeItem(idx, data) {
    this.redraw();
    this.show();

    var els = this.el.querySelectorAll('.' + constants.ITEM_CLASS);
    css.add(els[idx], constants.ITEM_CHANGED_CLASS);
};


/**
 * Removes an item from the view.
 *
 * @param {number} idx
 */
View.prototype.removeItem = function removeItem(idx) {
    this.redraw();
};




module.exports = View;

},{"./config":10,"./constants":11,"./util/css":14,"./util/events":16,"./util/forms":17,"./util/template":21,"./viewevents":23}],23:[function(require,module,exports){
'use strict';


var constants = require('./constants'),
    events = require('./util/events'),
    viewevents;


module.exports = viewevents = {

    click: function (evt) {
        var target = evt.target,
            className = target.className;

        if (this.isShowing) {
            // Cart close button
            if (className === constants.CLOSER_CLASS) {
                this.hide();
            // Product remove button
            } else if (className === constants.REMOVE_CLASS) {
                this.model.cart.remove(target.getAttribute(constants.DATA_IDX));
            // Product quantity input
            } else if (className === constants.QUANTITY_CLASS) {
                target[target.setSelectionRange ? 'setSelectionRange' : 'select'](0, 999);
            // Outside the cart
            } else if (!(/input|button|select|option/i.test(target.tagName))) {
                while (target.nodeType === 1) {
                    if (target === this.el) {
                        return;
                    }

                    target = target.parentNode;
                }

                this.hide();
            }
        }
    },

