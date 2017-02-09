<?php
// 2017-02-05
namespace Dfe\Iyzico;
use Magento\Sales\Model\Order\Payment\Transaction as T;
/** @method Settings s() */
final class Method extends \Df\StripeClone\Method {
	/**
	 * 2017-02-08
	 * @override
	 * Результат — в рублях, не в копейках.
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
	 * Информация о банковской карте.
	 * @override
	 * @see \Df\StripeClone\Method::apiCardInfo()
	 * @used-by \Df\StripeClone\Method::chargeNew()
	 * @param object $charge
	 * @return array(string => string)
	 */
	protected function apiCardInfo($charge) {return [];}

	/**
	 * 2017-02-05
	 * @override
	 * @see \Df\StripeClone\Method::apiChargeCapturePreauthorized()
	 * @used-by \Df\StripeClone\Method::charge()
	 * @param string $chargeId
	 * @return object
	 */
	protected function apiChargeCapturePreauthorized($chargeId) {return null;}

	/**
	 * 2017-02-05
	 * @override
	 * @see \Df\StripeClone\Method::apiChargeCreate()
	 * @used-by \Df\StripeClone\Method::chargeNew()
	 * @param array(string => mixed) $params
	 * @return object
	 */
	protected function apiChargeCreate(array $params) {return null;}

	/**
	 * 2017-02-05
	 * @override
	 * @see \Df\StripeClone\Method::apiChargeId()
	 * @used-by \Df\StripeClone\Method::chargeNew()
	 * @param \Stripe\Charge $charge
	 * @return string
	 */
	protected function apiChargeId($charge) {return '';}

	/**
	 * 2017-02-05
	 * @override
	 * @see \Df\StripeClone\Method::apiTransId()
	 * @used-by \Df\StripeClone\Method::_refund()
	 * @param object $response
	 * @return string
	 */
	protected function apiTransId($response) {return '';}

	/**
	 * 2017-02-05
	 * @override
	 * @see \Df\StripeClone\Method::responseToArray()
	 * @used-by \Df\StripeClone\Method::transInfo()
	 * @param object $response
	 * @return array(string => mixed)
	 */
	protected function responseToArray($response) {return [];}

	/**
	 * 2017-02-05
	 * @override
	 * @see \Df\StripeClone\Method::scRefund()
	 * @used-by \Df\StripeClone\Method::_refund()
	 * @param string $chargeId
	 * @param float|null $amount
	 * В формате и валюте платёжной системы.
	 * Значение готово для применения в запросе API.
	 * @return object
	 */
	protected function scRefund($chargeId, $amount) {return null;}

	/**
	 * 2017-02-05
	 * @override
	 * @see \Df\StripeClone\Method::scVoid()
	 * @used-by \Df\StripeClone\Method::_refund()
	 * @param string $chargeId
	 * @return object
	 */
	protected function scVoid($chargeId) {return null;}

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