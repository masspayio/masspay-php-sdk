<?php
/**
 * PayoutTxnResp
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  MassPayPhpSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * MassPay API
 *
 * MassPay API
 *
 * The version of the OpenAPI document: 0.1.4
 * Contact: info@masspay.io
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.5.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace MassPayPhpSdk\Model;

use \ArrayAccess;
use \MassPayPhpSdk\ObjectSerializer;

/**
 * PayoutTxnResp Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  MassPayPhpSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PayoutTxnResp implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PayoutTxnResp';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'payout_token' => 'string',
        'client_transfer_id' => 'string',
        'source_currency_code' => 'string',
        'destination_currency_code' => 'string',
        'source_token' => 'string',
        'destination_token' => 'string',
        'destination_amount' => 'float',
        'source_amount' => 'float',
        'attr_set_token' => 'string',
        'exchange_rate' => 'float',
        'fee' => 'float',
        'expiration' => 'string',
        'pickup_code' => 'string',
        'status' => 'string',
        'payer_logo' => 'string',
        'payer_name' => 'string',
        'delivery_type' => 'string',
        'country_code' => 'string',
        'metadata' => 'object',
        'estimated_availability' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'payout_token' => 'uuid',
        'client_transfer_id' => null,
        'source_currency_code' => null,
        'destination_currency_code' => null,
        'source_token' => 'uuid',
        'destination_token' => 'uuid',
        'destination_amount' => 'float',
        'source_amount' => 'float',
        'attr_set_token' => 'uuid',
        'exchange_rate' => 'float',
        'fee' => 'float',
        'expiration' => 'YYYY-MMDDThh:mm:ss',
        'pickup_code' => null,
        'status' => null,
        'payer_logo' => 'byte',
        'payer_name' => null,
        'delivery_type' => null,
        'country_code' => null,
        'metadata' => null,
        'estimated_availability' => 'date-time'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'payout_token' => false,
		'client_transfer_id' => false,
		'source_currency_code' => false,
		'destination_currency_code' => false,
		'source_token' => false,
		'destination_token' => false,
		'destination_amount' => false,
		'source_amount' => false,
		'attr_set_token' => false,
		'exchange_rate' => false,
		'fee' => false,
		'expiration' => false,
		'pickup_code' => false,
		'status' => false,
		'payer_logo' => false,
		'payer_name' => false,
		'delivery_type' => false,
		'country_code' => false,
		'metadata' => false,
		'estimated_availability' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

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
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'payout_token' => 'payout_token',
        'client_transfer_id' => 'client_transfer_id',
        'source_currency_code' => 'source_currency_code',
        'destination_currency_code' => 'destination_currency_code',
        'source_token' => 'source_token',
        'destination_token' => 'destination_token',
        'destination_amount' => 'destination_amount',
        'source_amount' => 'source_amount',
        'attr_set_token' => 'attr_set_token',
        'exchange_rate' => 'exchange_rate',
        'fee' => 'fee',
        'expiration' => 'expiration',
        'pickup_code' => 'pickup_code',
        'status' => 'status',
        'payer_logo' => 'payer_logo',
        'payer_name' => 'payer_name',
        'delivery_type' => 'delivery_type',
        'country_code' => 'country_code',
        'metadata' => 'metadata',
        'estimated_availability' => 'estimated_availability'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'payout_token' => 'setPayoutToken',
        'client_transfer_id' => 'setClientTransferId',
        'source_currency_code' => 'setSourceCurrencyCode',
        'destination_currency_code' => 'setDestinationCurrencyCode',
        'source_token' => 'setSourceToken',
        'destination_token' => 'setDestinationToken',
        'destination_amount' => 'setDestinationAmount',
        'source_amount' => 'setSourceAmount',
        'attr_set_token' => 'setAttrSetToken',
        'exchange_rate' => 'setExchangeRate',
        'fee' => 'setFee',
        'expiration' => 'setExpiration',
        'pickup_code' => 'setPickupCode',
        'status' => 'setStatus',
        'payer_logo' => 'setPayerLogo',
        'payer_name' => 'setPayerName',
        'delivery_type' => 'setDeliveryType',
        'country_code' => 'setCountryCode',
        'metadata' => 'setMetadata',
        'estimated_availability' => 'setEstimatedAvailability'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'payout_token' => 'getPayoutToken',
        'client_transfer_id' => 'getClientTransferId',
        'source_currency_code' => 'getSourceCurrencyCode',
        'destination_currency_code' => 'getDestinationCurrencyCode',
        'source_token' => 'getSourceToken',
        'destination_token' => 'getDestinationToken',
        'destination_amount' => 'getDestinationAmount',
        'source_amount' => 'getSourceAmount',
        'attr_set_token' => 'getAttrSetToken',
        'exchange_rate' => 'getExchangeRate',
        'fee' => 'getFee',
        'expiration' => 'getExpiration',
        'pickup_code' => 'getPickupCode',
        'status' => 'getStatus',
        'payer_logo' => 'getPayerLogo',
        'payer_name' => 'getPayerName',
        'delivery_type' => 'getDeliveryType',
        'country_code' => 'getCountryCode',
        'metadata' => 'getMetadata',
        'estimated_availability' => 'getEstimatedAvailability'
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

    public const STATUS_PENDING = 'PENDING';
    public const STATUS_PROCESSING = 'PROCESSING';
    public const STATUS_COMPLETED = 'COMPLETED';
    public const STATUS_CANCELLED = 'CANCELLED';
    public const STATUS_SCHEDULED = 'SCHEDULED';
    public const STATUS_READY_FOR_PICKUP = 'READY_FOR_PICKUP';
    public const STATUS_HOLD = 'HOLD';
    public const STATUS_ERROR = 'ERROR';
    public const DELIVERY_TYPE_CASH_PICKUP = 'CASH_PICKUP';
    public const DELIVERY_TYPE_BANK_DEPOSIT = 'BANK_DEPOSIT';
    public const DELIVERY_TYPE_HOME_DELIVERY = 'HOME_DELIVERY';
    public const DELIVERY_TYPE_MOBILE_WALLET = 'MOBILE_WALLET';
    public const DELIVERY_TYPE_MASSPAY_CARD = 'MASSPAY_CARD';
    public const DELIVERY_TYPE_PAPER_CHECK = 'PAPER_CHECK';
    public const DELIVERY_TYPE_BILL = 'BILL';
    public const DELIVERY_TYPE_CRYPTOCURRENCY = 'CRYPTOCURRENCY';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_PENDING,
            self::STATUS_PROCESSING,
            self::STATUS_COMPLETED,
            self::STATUS_CANCELLED,
            self::STATUS_SCHEDULED,
            self::STATUS_READY_FOR_PICKUP,
            self::STATUS_HOLD,
            self::STATUS_ERROR,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDeliveryTypeAllowableValues()
    {
        return [
            self::DELIVERY_TYPE_CASH_PICKUP,
            self::DELIVERY_TYPE_BANK_DEPOSIT,
            self::DELIVERY_TYPE_HOME_DELIVERY,
            self::DELIVERY_TYPE_MOBILE_WALLET,
            self::DELIVERY_TYPE_MASSPAY_CARD,
            self::DELIVERY_TYPE_PAPER_CHECK,
            self::DELIVERY_TYPE_BILL,
            self::DELIVERY_TYPE_CRYPTOCURRENCY,
        ];
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
        $this->setIfExists('payout_token', $data ?? [], null);
        $this->setIfExists('client_transfer_id', $data ?? [], null);
        $this->setIfExists('source_currency_code', $data ?? [], null);
        $this->setIfExists('destination_currency_code', $data ?? [], null);
        $this->setIfExists('source_token', $data ?? [], null);
        $this->setIfExists('destination_token', $data ?? [], null);
        $this->setIfExists('destination_amount', $data ?? [], null);
        $this->setIfExists('source_amount', $data ?? [], null);
        $this->setIfExists('attr_set_token', $data ?? [], null);
        $this->setIfExists('exchange_rate', $data ?? [], null);
        $this->setIfExists('fee', $data ?? [], null);
        $this->setIfExists('expiration', $data ?? [], null);
        $this->setIfExists('pickup_code', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('payer_logo', $data ?? [], null);
        $this->setIfExists('payer_name', $data ?? [], null);
        $this->setIfExists('delivery_type', $data ?? [], null);
        $this->setIfExists('country_code', $data ?? [], null);
        $this->setIfExists('metadata', $data ?? [], null);
        $this->setIfExists('estimated_availability', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['payout_token'] === null) {
            $invalidProperties[] = "'payout_token' can't be null";
        }
        if ($this->container['client_transfer_id'] === null) {
            $invalidProperties[] = "'client_transfer_id' can't be null";
        }
        if ((mb_strlen($this->container['client_transfer_id']) > 50)) {
            $invalidProperties[] = "invalid value for 'client_transfer_id', the character length must be smaller than or equal to 50.";
        }

        if ($this->container['source_currency_code'] === null) {
            $invalidProperties[] = "'source_currency_code' can't be null";
        }
        if ($this->container['destination_currency_code'] === null) {
            $invalidProperties[] = "'destination_currency_code' can't be null";
        }
        if ($this->container['source_token'] === null) {
            $invalidProperties[] = "'source_token' can't be null";
        }
        if ($this->container['destination_token'] === null) {
            $invalidProperties[] = "'destination_token' can't be null";
        }
        if ($this->container['destination_amount'] === null) {
            $invalidProperties[] = "'destination_amount' can't be null";
        }
        if ($this->container['source_amount'] === null) {
            $invalidProperties[] = "'source_amount' can't be null";
        }
        if ($this->container['attr_set_token'] === null) {
            $invalidProperties[] = "'attr_set_token' can't be null";
        }
        if ($this->container['exchange_rate'] === null) {
            $invalidProperties[] = "'exchange_rate' can't be null";
        }
        if ($this->container['fee'] === null) {
            $invalidProperties[] = "'fee' can't be null";
        }
        if ($this->container['expiration'] === null) {
            $invalidProperties[] = "'expiration' can't be null";
        }
        if ($this->container['pickup_code'] === null) {
            $invalidProperties[] = "'pickup_code' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'status', must be one of '%s'",
                $this->container['status'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getDeliveryTypeAllowableValues();
        if (!is_null($this->container['delivery_type']) && !in_array($this->container['delivery_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'delivery_type', must be one of '%s'",
                $this->container['delivery_type'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['country_code']) && (mb_strlen($this->container['country_code']) > 3)) {
            $invalidProperties[] = "invalid value for 'country_code', the character length must be smaller than or equal to 3.";
        }

        if (!is_null($this->container['country_code']) && (mb_strlen($this->container['country_code']) < 3)) {
            $invalidProperties[] = "invalid value for 'country_code', the character length must be bigger than or equal to 3.";
        }

        if ($this->container['estimated_availability'] === null) {
            $invalidProperties[] = "'estimated_availability' can't be null";
        }
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
     * Gets payout_token
     *
     * @return string
     */
    public function getPayoutToken()
    {
        return $this->container['payout_token'];
    }

    /**
     * Sets payout_token
     *
     * @param string $payout_token Token that represents the transaction that was just created. Need to be used to commit the transaction in `/payout/{user_token}/{payout_token}`. Value would be NSF if there are not enough funds in the `source_token`. Value would be `DUPLICATE` if there is a duplicate `client_transfer_id`.
     *
     * @return self
     */
    public function setPayoutToken($payout_token)
    {
        if (is_null($payout_token)) {
            throw new \InvalidArgumentException('non-nullable payout_token cannot be null');
        }
        $this->container['payout_token'] = $payout_token;

        return $this;
    }

    /**
     * Gets client_transfer_id
     *
     * @return string
     */
    public function getClientTransferId()
    {
        return $this->container['client_transfer_id'];
    }

    /**
     * Sets client_transfer_id
     *
     * @param string $client_transfer_id A client defined transfer identifier. This is the unique ID assigned to the transfer on your system. Max 50 characters.
     *
     * @return self
     */
    public function setClientTransferId($client_transfer_id)
    {
        if (is_null($client_transfer_id)) {
            throw new \InvalidArgumentException('non-nullable client_transfer_id cannot be null');
        }
        if ((mb_strlen($client_transfer_id) > 50)) {
            throw new \InvalidArgumentException('invalid length for $client_transfer_id when calling PayoutTxnResp., must be smaller than or equal to 50.');
        }

        $this->container['client_transfer_id'] = $client_transfer_id;

        return $this;
    }

    /**
     * Gets source_currency_code
     *
     * @return string
     */
    public function getSourceCurrencyCode()
    {
        return $this->container['source_currency_code'];
    }

    /**
     * Sets source_currency_code
     *
     * @param string $source_currency_code The currency originating balance is stored in. Using [ISO 4217](https://en.wikipedia.org/wiki/ISO_4217) format. In most cases this value will be USD, and therefore the defaut value if none is provided
     *
     * @return self
     */
    public function setSourceCurrencyCode($source_currency_code)
    {
        if (is_null($source_currency_code)) {
            throw new \InvalidArgumentException('non-nullable source_currency_code cannot be null');
        }
        $this->container['source_currency_code'] = $source_currency_code;

        return $this;
    }

    /**
     * Gets destination_currency_code
     *
     * @return string
     */
    public function getDestinationCurrencyCode()
    {
        return $this->container['destination_currency_code'];
    }

    /**
     * Sets destination_currency_code
     *
     * @param string $destination_currency_code The currency the funds will be deposited into. Using [ISO 4217](https://en.wikipedia.org/wiki/ISO_4217) format
     *
     * @return self
     */
    public function setDestinationCurrencyCode($destination_currency_code)
    {
        if (is_null($destination_currency_code)) {
            throw new \InvalidArgumentException('non-nullable destination_currency_code cannot be null');
        }
        $this->container['destination_currency_code'] = $destination_currency_code;

        return $this;
    }

    /**
     * Gets source_token
     *
     * @return string
     */
    public function getSourceToken()
    {
        return $this->container['source_token'];
    }

    /**
     * Sets source_token
     *
     * @param string $source_token Token that represents the funding source i.e. your bank account, user's wallet. 36 characters long
     *
     * @return self
     */
    public function setSourceToken($source_token)
    {
        if (is_null($source_token)) {
            throw new \InvalidArgumentException('non-nullable source_token cannot be null');
        }
        $this->container['source_token'] = $source_token;

        return $this;
    }

    /**
     * Gets destination_token
     *
     * @return string
     */
    public function getDestinationToken()
    {
        return $this->container['destination_token'];
    }

    /**
     * Sets destination_token
     *
     * @param string $destination_token Token that represents the payout destination i.e. Omnex->Brazil->Bank Deposit->Itau. To be retrieved from the #pricing callback. If not provided, the last destination that was used for this user will be used. 36 characters long
     *
     * @return self
     */
    public function setDestinationToken($destination_token)
    {
        if (is_null($destination_token)) {
            throw new \InvalidArgumentException('non-nullable destination_token cannot be null');
        }
        $this->container['destination_token'] = $destination_token;

        return $this;
    }

    /**
     * Gets destination_amount
     *
     * @return float
     */
    public function getDestinationAmount()
    {
        return $this->container['destination_amount'];
    }

    /**
     * Sets destination_amount
     *
     * @param float $destination_amount The amount to be sent for payout in source currency. i.e USD. Must be provided if source_amount is empty
     *
     * @return self
     */
    public function setDestinationAmount($destination_amount)
    {
        if (is_null($destination_amount)) {
            throw new \InvalidArgumentException('non-nullable destination_amount cannot be null');
        }
        $this->container['destination_amount'] = $destination_amount;

        return $this;
    }

    /**
     * Gets source_amount
     *
     * @return float
     */
    public function getSourceAmount()
    {
        return $this->container['source_amount'];
    }

    /**
     * Sets source_amount
     *
     * @param float $source_amount The amount to be received by the payout in source currency. i.e USD. Must be provided if destination_amount is empty
     *
     * @return self
     */
    public function setSourceAmount($source_amount)
    {
        if (is_null($source_amount)) {
            throw new \InvalidArgumentException('non-nullable source_amount cannot be null');
        }
        $this->container['source_amount'] = $source_amount;

        return $this;
    }

    /**
     * Gets attr_set_token
     *
     * @return string
     */
    public function getAttrSetToken()
    {
        return $this->container['attr_set_token'];
    }

    /**
     * Sets attr_set_token
     *
     * @param string $attr_set_token Token that represents set of attributes that associated with destination_token. For example, bank account, mobile account, wallet id, etc. If not provided, uses the last one used. 36 characters long
     *
     * @return self
     */
    public function setAttrSetToken($attr_set_token)
    {
        if (is_null($attr_set_token)) {
            throw new \InvalidArgumentException('non-nullable attr_set_token cannot be null');
        }
        $this->container['attr_set_token'] = $attr_set_token;

        return $this;
    }

    /**
     * Gets exchange_rate
     *
     * @return float
     */
    public function getExchangeRate()
    {
        return $this->container['exchange_rate'];
    }

    /**
     * Sets exchange_rate
     *
     * @param float $exchange_rate The exchange rate to convert source_amount to destination_amount
     *
     * @return self
     */
    public function setExchangeRate($exchange_rate)
    {
        if (is_null($exchange_rate)) {
            throw new \InvalidArgumentException('non-nullable exchange_rate cannot be null');
        }
        $this->container['exchange_rate'] = $exchange_rate;

        return $this;
    }

    /**
     * Gets fee
     *
     * @return float
     */
    public function getFee()
    {
        return $this->container['fee'];
    }

    /**
     * Sets fee
     *
     * @param float $fee Fee to be charged for the transaction
     *
     * @return self
     */
    public function setFee($fee)
    {
        if (is_null($fee)) {
            throw new \InvalidArgumentException('non-nullable fee cannot be null');
        }
        $this->container['fee'] = $fee;

        return $this;
    }

    /**
     * Gets expiration
     *
     * @return string
     */
    public function getExpiration()
    {
        return $this->container['expiration'];
    }

    /**
     * Sets expiration
     *
     * @param string $expiration The time and date at which the transaction will expire. The transaction has to be finalized before this time. Transactions are valid for 2 minutes from creation time. If expired, a new transaction has to be created.
     *
     * @return self
     */
    public function setExpiration($expiration)
    {
        if (is_null($expiration)) {
            throw new \InvalidArgumentException('non-nullable expiration cannot be null');
        }
        $this->container['expiration'] = $expiration;

        return $this;
    }

    /**
     * Gets pickup_code
     *
     * @return string
     */
    public function getPickupCode()
    {
        return $this->container['pickup_code'];
    }

    /**
     * Sets pickup_code
     *
     * @param string $pickup_code Code/pin that is required when collecting the money. Should be provided to the recipient to present to payout location.
     *
     * @return self
     */
    public function setPickupCode($pickup_code)
    {
        if (is_null($pickup_code)) {
            throw new \InvalidArgumentException('non-nullable pickup_code cannot be null');
        }
        $this->container['pickup_code'] = $pickup_code;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status The status of the transaction
     *
     * @return self
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'status', must be one of '%s'",
                    $status,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets payer_logo
     *
     * @return string|null
     */
    public function getPayerLogo()
    {
        return $this->container['payer_logo'];
    }

    /**
     * Sets payer_logo
     *
     * @param string|null $payer_logo base64 representation of the payer logo
     *
     * @return self
     */
    public function setPayerLogo($payer_logo)
    {
        if (is_null($payer_logo)) {
            throw new \InvalidArgumentException('non-nullable payer_logo cannot be null');
        }
        $this->container['payer_logo'] = $payer_logo;

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
     * @param string|null $payer_name Name of payer
     *
     * @return self
     */
    public function setPayerName($payer_name)
    {
        if (is_null($payer_name)) {
            throw new \InvalidArgumentException('non-nullable payer_name cannot be null');
        }
        $this->container['payer_name'] = $payer_name;

        return $this;
    }

    /**
     * Gets delivery_type
     *
     * @return string|null
     */
    public function getDeliveryType()
    {
        return $this->container['delivery_type'];
    }

    /**
     * Sets delivery_type
     *
     * @param string|null $delivery_type delivery_type
     *
     * @return self
     */
    public function setDeliveryType($delivery_type)
    {
        if (is_null($delivery_type)) {
            throw new \InvalidArgumentException('non-nullable delivery_type cannot be null');
        }
        $allowedValues = $this->getDeliveryTypeAllowableValues();
        if (!in_array($delivery_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'delivery_type', must be one of '%s'",
                    $delivery_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['delivery_type'] = $delivery_type;

        return $this;
    }

    /**
     * Gets country_code
     *
     * @return string|null
     */
    public function getCountryCode()
    {
        return $this->container['country_code'];
    }

    /**
     * Sets country_code
     *
     * @param string|null $country_code Country code [ISO_3166](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-3)
     *
     * @return self
     */
    public function setCountryCode($country_code)
    {
        if (is_null($country_code)) {
            throw new \InvalidArgumentException('non-nullable country_code cannot be null');
        }
        if ((mb_strlen($country_code) > 3)) {
            throw new \InvalidArgumentException('invalid length for $country_code when calling PayoutTxnResp., must be smaller than or equal to 3.');
        }
        if ((mb_strlen($country_code) < 3)) {
            throw new \InvalidArgumentException('invalid length for $country_code when calling PayoutTxnResp., must be bigger than or equal to 3.');
        }

        $this->container['country_code'] = $country_code;

        return $this;
    }

    /**
     * Gets metadata
     *
     * @return object|null
     */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
     * Sets metadata
     *
     * @param object|null $metadata Optional JSON object with attributes that can later be searched to locate this payout. Do not include PII as this object is not encrypted.
     *
     * @return self
     */
    public function setMetadata($metadata)
    {
        if (is_null($metadata)) {
            throw new \InvalidArgumentException('non-nullable metadata cannot be null');
        }
        $this->container['metadata'] = $metadata;

        return $this;
    }

    /**
     * Gets estimated_availability
     *
     * @return \DateTime
     */
    public function getEstimatedAvailability()
    {
        return $this->container['estimated_availability'];
    }

    /**
     * Sets estimated_availability
     *
     * @param \DateTime $estimated_availability Estimated availability of funds. When funds would be available to pickup/deposited
     *
     * @return self
     */
    public function setEstimatedAvailability($estimated_availability)
    {
        if (is_null($estimated_availability)) {
            throw new \InvalidArgumentException('non-nullable estimated_availability cannot be null');
        }
        $this->container['estimated_availability'] = $estimated_availability;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
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
    #[\ReturnTypeWillChange]
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
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
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
    #[\ReturnTypeWillChange]
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


