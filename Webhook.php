<?php
// 2017-02-14
namespace Dfe\Iyzico;
abstract class Webhook extends \Df\StripeClone\Webhook {
	/**
	 * 2017-02-14
	 * @override
	 * @see \Df\Payment\Webhook::parentIdRawKey()
	 * @used-by \Df\Payment\Webhook::parentIdRaw()
	 * @return string
	 */
	protected function parentIdRawKey() {return '';}

	/**
	 * 2017-02-14
	 * @override
	 * @see \Df\StripeClone\Webhook::roPath()
	 * @used-by \Df\StripeClone\Webhook::ro()
	 * @return string
	 */
	final protected function roPath() {return '';}
}