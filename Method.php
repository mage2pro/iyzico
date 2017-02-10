<?php
// 2017-02-05
namespace Dfe\Iyzico;
use Magento\Sales\Model\Order\Payment\Transaction as T;
/** @method Settings s() */
final class Method extends \Df\StripeClone\Method {
	/**
	 * 2017-02-08
	 * @override
	 * The result should be in the basic monetary unit (like dollars), not in fractions (like cents).
	 * I did not find such information on the iyzico websites.
	 * «Does iyzico have minimum and maximum amount limitations on a single payment?»
	 * https://mage2.pro/t/2684
	 * https://iyzico.zendesk.com/hc/tr/requests/77724
	 * 2017-02-09
	 * I have got an answer from the iyzico support:
	 * «There are no restrictions on payments and amounts.»
	 * @see \Df\Payment\Method::amountLimits()
	 * @used-by \Df\Payment\Method::isAvailable()
	 * @return null
	 */
	protected function amountLimits() {return null;}

	/**
	 * 2017-02-05
	 * @override
	 * @see \Df\StripeClone\Method::transUrlBase()
	 * @used-by \Df\StripeClone\Method::transUrl()
	 * @param T $t
	 * @return string
	 */
	protected function transUrlBase(T $t) {return '';}
}