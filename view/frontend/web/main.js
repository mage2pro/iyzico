// 2017-02-06
define([
	'Df_StripeClone/main'
], function(parent) {'use strict'; return parent.extend({
	/**
	 * 2017-02-06
	 * The bank card network codes: https://mage2.pro/t/2647
	 * @returns {String[]}
	 */
	getCardTypes: function() {return ['VI', 'MC', 'AE', 'JCB', 'DI', 'DN'];},
	/**
	 * 2017-02-06
	 * @returns {Object}
	*/
	initialize: function() {
		this._super();
		return this;
	},

    /**
	 * 2017-02-16
	 * @override
	 * @see ...
	 * @used-by placeOrder()
	 * @param {Object|Number} status
	 * @returns {Boolean}
	 */
	tokenCheckStatus: function(status) {return null;},

    /**
	 * 2017-02-16
	 * @override
	 * @see ...
	 * @used-by placeOrder()
	 * @param {Object} params
	 * @param {Function} callback
	 * @returns {Function}
	 */
	tokenCreate: function(params, callback) {return null;},

    /**
	 * 2017-02-16
	 * @override
	 * @see ...
	 * @used-by placeOrder()
	 * @param {Object|Number} status
	 * @param {Object} resp
	 * @returns {String}
	 */
	tokenErrorMessage: function(status, resp) {return null;},

    /**
	 * 2017-02-16
	 * @override
	 * @see ...
	 * @used-by placeOrder()
	 * @param {Object} resp
	 * @returns {String}
	 */
	tokenFromResponse: function(resp) {return null;},

    /**
	 * 2017-02-16
	 * @override
	 * @see ...
	 * @used-by placeOrder()
	 * @returns {Object}
	 */
	tokenParams: function() {return null;}

});});