<?php
// 2017-02-14
namespace Dfe\Iyzico\W;
abstract class Handler extends \Df\StripeClone\W\Handler {
	/**
	 * 2017-02-14
	 * @override
	 * @see \Df\StripeClone\W\Handler::roPath()
	 * @used-by \Df\StripeClone\W\Handler::ro()
	 * @return string
	 */
	final protected function roPath() {return '';}
}