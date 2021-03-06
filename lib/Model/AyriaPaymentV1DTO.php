<?php
/**
 * AyriaPaymentV1DTO
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * APG API
 *
 * This is a [APG (Ayria Payment Gateway) API](https://api.ayria.club/docs/index.html#_apg_ayria_payment_gateway) SDK.
 *
 * The version of the OpenAPI document: 1.2.1
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * AyriaPaymentV1DTO Class Doc Comment
 *
 * @category Class
 * @description A payment dto created in Ayria platform
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class AyriaPaymentV1DTO implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AyriaPaymentV1DTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'referral_code' => 'int',
        'amount' => 'int',
        'payer_mobile' => 'string',
        'tracking_number' => 'int',
        'reference_code' => 'string',
        'payee_name' => 'string',
        'payer_name' => 'string',
        'description' => 'string',
        'extra_data' => 'string',
        'payment_number' => 'string',
        'paid' => 'bool',
        'canceled' => 'bool',
        'created_date' => 'string',
        'payment_url' => 'string',
        'cancel_description' => 'string',
        'issuer_must_verify_payment' => 'bool',
        'payment_status' => 'string',
        'callback_url' => 'string',
        'kalas' => '\OpenAPI\Client\Model\AyriaPaymentV1KalaDTO[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'referral_code' => 'int64',
        'amount' => 'int64',
        'payer_mobile' => null,
        'tracking_number' => 'int64',
        'reference_code' => null,
        'payee_name' => null,
        'payer_name' => null,
        'description' => null,
        'extra_data' => null,
        'payment_number' => null,
        'paid' => null,
        'canceled' => null,
        'created_date' => null,
        'payment_url' => null,
        'cancel_description' => null,
        'issuer_must_verify_payment' => null,
        'payment_status' => null,
        'callback_url' => null,
        'kalas' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'referral_code' => 'referralCode',
        'amount' => 'amount',
        'payer_mobile' => 'payerMobile',
        'tracking_number' => 'trackingNumber',
        'reference_code' => 'referenceCode',
        'payee_name' => 'payeeName',
        'payer_name' => 'payerName',
        'description' => 'description',
        'extra_data' => 'extraData',
        'payment_number' => 'paymentNumber',
        'paid' => 'paid',
        'canceled' => 'canceled',
        'created_date' => 'createdDate',
        'payment_url' => 'paymentUrl',
        'cancel_description' => 'cancelDescription',
        'issuer_must_verify_payment' => 'issuerMustVerifyPayment',
        'payment_status' => 'paymentStatus',
        'callback_url' => 'callbackUrl',
        'kalas' => 'kalas'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'referral_code' => 'setReferralCode',
        'amount' => 'setAmount',
        'payer_mobile' => 'setPayerMobile',
        'tracking_number' => 'setTrackingNumber',
        'reference_code' => 'setReferenceCode',
        'payee_name' => 'setPayeeName',
        'payer_name' => 'setPayerName',
        'description' => 'setDescription',
        'extra_data' => 'setExtraData',
        'payment_number' => 'setPaymentNumber',
        'paid' => 'setPaid',
        'canceled' => 'setCanceled',
        'created_date' => 'setCreatedDate',
        'payment_url' => 'setPaymentUrl',
        'cancel_description' => 'setCancelDescription',
        'issuer_must_verify_payment' => 'setIssuerMustVerifyPayment',
        'payment_status' => 'setPaymentStatus',
        'callback_url' => 'setCallbackUrl',
        'kalas' => 'setKalas'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'referral_code' => 'getReferralCode',
        'amount' => 'getAmount',
        'payer_mobile' => 'getPayerMobile',
        'tracking_number' => 'getTrackingNumber',
        'reference_code' => 'getReferenceCode',
        'payee_name' => 'getPayeeName',
        'payer_name' => 'getPayerName',
        'description' => 'getDescription',
        'extra_data' => 'getExtraData',
        'payment_number' => 'getPaymentNumber',
        'paid' => 'getPaid',
        'canceled' => 'getCanceled',
        'created_date' => 'getCreatedDate',
        'payment_url' => 'getPaymentUrl',
        'cancel_description' => 'getCancelDescription',
        'issuer_must_verify_payment' => 'getIssuerMustVerifyPayment',
        'payment_status' => 'getPaymentStatus',
        'callback_url' => 'getCallbackUrl',
        'kalas' => 'getKalas'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['referral_code'] = $data['referral_code'] ?? null;
        $this->container['amount'] = $data['amount'] ?? null;
        $this->container['payer_mobile'] = $data['payer_mobile'] ?? null;
        $this->container['tracking_number'] = $data['tracking_number'] ?? null;
        $this->container['reference_code'] = $data['reference_code'] ?? null;
        $this->container['payee_name'] = $data['payee_name'] ?? null;
        $this->container['payer_name'] = $data['payer_name'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['extra_data'] = $data['extra_data'] ?? null;
        $this->container['payment_number'] = $data['payment_number'] ?? null;
        $this->container['paid'] = $data['paid'] ?? null;
        $this->container['canceled'] = $data['canceled'] ?? null;
        $this->container['created_date'] = $data['created_date'] ?? null;
        $this->container['payment_url'] = $data['payment_url'] ?? null;
        $this->container['cancel_description'] = $data['cancel_description'] ?? null;
        $this->container['issuer_must_verify_payment'] = $data['issuer_must_verify_payment'] ?? null;
        $this->container['payment_status'] = $data['payment_status'] ?? null;
        $this->container['callback_url'] = $data['callback_url'] ?? null;
        $this->container['kalas'] = $data['kalas'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets referral_code
     *
     * @return int|null
     */
    public function getReferralCode()
    {
        return $this->container['referral_code'];
    }

    /**
     * Sets referral_code
     *
     * @param int|null $referral_code Payee referral code
     *
     * @return self
     */
    public function setReferralCode($referral_code)
    {
        $this->container['referral_code'] = $referral_code;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return int|null
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param int|null $amount Total price in Riyal currency
     *
     * @return self
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets payer_mobile
     *
     * @return string|null
     */
    public function getPayerMobile()
    {
        return $this->container['payer_mobile'];
    }

    /**
     * Sets payer_mobile
     *
     * @param string|null $payer_mobile Payer mobile number
     *
     * @return self
     */
    public function setPayerMobile($payer_mobile)
    {
        $this->container['payer_mobile'] = $payer_mobile;

        return $this;
    }

    /**
     * Gets tracking_number
     *
     * @return int|null
     */
    public function getTrackingNumber()
    {
        return $this->container['tracking_number'];
    }

    /**
     * Sets tracking_number
     *
     * @param int|null $tracking_number Tracking number
     *
     * @return self
     */
    public function setTrackingNumber($tracking_number)
    {
        $this->container['tracking_number'] = $tracking_number;

        return $this;
    }

    /**
     * Gets reference_code
     *
     * @return string|null
     */
    public function getReferenceCode()
    {
        return $this->container['reference_code'];
    }

    /**
     * Sets reference_code
     *
     * @param string|null $reference_code Reference code
     *
     * @return self
     */
    public function setReferenceCode($reference_code)
    {
        $this->container['reference_code'] = $reference_code;

        return $this;
    }

    /**
     * Gets payee_name
     *
     * @return string|null
     */
    public function getPayeeName()
    {
        return $this->container['payee_name'];
    }

    /**
     * Sets payee_name
     *
     * @param string|null $payee_name Payee name
     *
     * @return self
     */
    public function setPayeeName($payee_name)
    {
        $this->container['payee_name'] = $payee_name;

        return $this;
    }

    /**
     * Gets payer_name
     *
     * @return string|null
     */
    public function getPayerName()
    {
        return $this->container['payer_name'];
    }

    /**
     * Sets payer_name
     *
     * @param string|null $payer_name Payer name
     *
     * @return self
     */
    public function setPayerName($payer_name)
    {
        $this->container['payer_name'] = $payer_name;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description Description for payment
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets extra_data
     *
     * @return string|null
     */
    public function getExtraData()
    {
        return $this->container['extra_data'];
    }

    /**
     * Sets extra_data
     *
     * @param string|null $extra_data Extra data related to payment
     *
     * @return self
     */
    public function setExtraData($extra_data)
    {
        $this->container['extra_data'] = $extra_data;

        return $this;
    }

    /**
     * Gets payment_number
     *
     * @return string|null
     */
    public function getPaymentNumber()
    {
        return $this->container['payment_number'];
    }

    /**
     * Sets payment_number
     *
     * @param string|null $payment_number Payment number (external)
     *
     * @return self
     */
    public function setPaymentNumber($payment_number)
    {
        $this->container['payment_number'] = $payment_number;

        return $this;
    }

    /**
     * Gets paid
     *
     * @return bool|null
     */
    public function getPaid()
    {
        return $this->container['paid'];
    }

    /**
     * Sets paid
     *
     * @param bool|null $paid Payment paid status
     *
     * @return self
     */
    public function setPaid($paid)
    {
        $this->container['paid'] = $paid;

        return $this;
    }

    /**
     * Gets canceled
     *
     * @return bool|null
     */
    public function getCanceled()
    {
        return $this->container['canceled'];
    }

    /**
     * Sets canceled
     *
     * @param bool|null $canceled Payment cancel status
     *
     * @return self
     */
    public function setCanceled($canceled)
    {
        $this->container['canceled'] = $canceled;

        return $this;
    }

    /**
     * Gets created_date
     *
     * @return string|null
     */
    public function getCreatedDate()
    {
        return $this->container['created_date'];
    }

    /**
     * Sets created_date
     *
     * @param string|null $created_date Create date of payment
     *
     * @return self
     */
    public function setCreatedDate($created_date)
    {
        $this->container['created_date'] = $created_date;

        return $this;
    }

    /**
     * Gets payment_url
     *
     * @return string|null
     */
    public function getPaymentUrl()
    {
        return $this->container['payment_url'];
    }

    /**
     * Sets payment_url
     *
     * @param string|null $payment_url Payment URL
     *
     * @return self
     */
    public function setPaymentUrl($payment_url)
    {
        $this->container['payment_url'] = $payment_url;

        return $this;
    }

    /**
     * Gets cancel_description
     *
     * @return string|null
     */
    public function getCancelDescription()
    {
        return $this->container['cancel_description'];
    }

    /**
     * Sets cancel_description
     *
     * @param string|null $cancel_description Cancel description
     *
     * @return self
     */
    public function setCancelDescription($cancel_description)
    {
        $this->container['cancel_description'] = $cancel_description;

        return $this;
    }

    /**
     * Gets issuer_must_verify_payment
     *
     * @return bool|null
     */
    public function getIssuerMustVerifyPayment()
    {
        return $this->container['issuer_must_verify_payment'];
    }

    /**
     * Sets issuer_must_verify_payment
     *
     * @param bool|null $issuer_must_verify_payment If is 'true' issuer must verify payment
     *
     * @return self
     */
    public function setIssuerMustVerifyPayment($issuer_must_verify_payment)
    {
        $this->container['issuer_must_verify_payment'] = $issuer_must_verify_payment;

        return $this;
    }

    /**
     * Gets payment_status
     *
     * @return string|null
     */
    public function getPaymentStatus()
    {
        return $this->container['payment_status'];
    }

    /**
     * Sets payment_status
     *
     * @param string|null $payment_status Is usually DEFAULT, but can be WAITING_FOR_VERIFY or VERIFIED if issuerMustVerifyPayment is true
     *
     * @return self
     */
    public function setPaymentStatus($payment_status)
    {
        $this->container['payment_status'] = $payment_status;

        return $this;
    }

    /**
     * Gets callback_url
     *
     * @return string|null
     */
    public function getCallbackUrl()
    {
        return $this->container['callback_url'];
    }

    /**
     * Sets callback_url
     *
     * @param string|null $callback_url Callback url, if is null then default callback url will be used instead
     *
     * @return self
     */
    public function setCallbackUrl($callback_url)
    {
        $this->container['callback_url'] = $callback_url;

        return $this;
    }

    /**
     * Gets kalas
     *
     * @return \OpenAPI\Client\Model\AyriaPaymentV1KalaDTO[]|null
     */
    public function getKalas()
    {
        return $this->container['kalas'];
    }

    /**
     * Sets kalas
     *
     * @param \OpenAPI\Client\Model\AyriaPaymentV1KalaDTO[]|null $kalas kalas
     *
     * @return self
     */
    public function setKalas($kalas)
    {
        $this->container['kalas'] = $kalas;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


