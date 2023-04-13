<?php
/**
 * GetWalletCardInfo200Response
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
 * GetWalletCardInfo200Response Class Doc Comment
 *
 * @category Class
 * @description MassPay Card Information
 * @package  MassPayPhpSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GetWalletCardInfo200Response implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'getWalletCardInfo_200_response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'card_number' => 'int',
        'cvv' => 'string',
        'expiration_date' => '\DateTime',
        'pin_number' => 'string',
        'balance' => 'float',
        'type' => 'string',
        'status' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'card_number' => null,
        'cvv' => null,
        'expiration_date' => 'date',
        'pin_number' => null,
        'balance' => 'float',
        'type' => null,
        'status' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'card_number' => false,
		'cvv' => false,
		'expiration_date' => false,
		'pin_number' => false,
		'balance' => false,
		'type' => false,
		'status' => false
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
        'card_number' => 'card_number',
        'cvv' => 'cvv',
        'expiration_date' => 'expiration_date',
        'pin_number' => 'pin_number',
        'balance' => 'balance',
        'type' => 'type',
        'status' => 'status'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'card_number' => 'setCardNumber',
        'cvv' => 'setCvv',
        'expiration_date' => 'setExpirationDate',
        'pin_number' => 'setPinNumber',
        'balance' => 'setBalance',
        'type' => 'setType',
        'status' => 'setStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'card_number' => 'getCardNumber',
        'cvv' => 'getCvv',
        'expiration_date' => 'getExpirationDate',
        'pin_number' => 'getPinNumber',
        'balance' => 'getBalance',
        'type' => 'getType',
        'status' => 'getStatus'
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

    public const TYPE_VISA = 'VISA';
    public const TYPE_MASTERCARD = 'MASTERCARD';
    public const TYPE_DISCOVER = 'DISCOVER';
    public const TYPE_AMEX = 'AMEX';
    public const TYPE_UNIONPAY = 'UNIONPAY';
    public const STATUS_ACTIVE = 'ACTIVE';
    public const STATUS_INACTIVE = 'INACTIVE';
    public const STATUS_CLOSED = 'CLOSED';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_VISA,
            self::TYPE_MASTERCARD,
            self::TYPE_DISCOVER,
            self::TYPE_AMEX,
            self::TYPE_UNIONPAY,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_ACTIVE,
            self::STATUS_INACTIVE,
            self::STATUS_CLOSED,
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
        $this->setIfExists('card_number', $data ?? [], null);
        $this->setIfExists('cvv', $data ?? [], null);
        $this->setIfExists('expiration_date', $data ?? [], null);
        $this->setIfExists('pin_number', $data ?? [], null);
        $this->setIfExists('balance', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], 'ACTIVE');
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

        if ($this->container['card_number'] === null) {
            $invalidProperties[] = "'card_number' can't be null";
        }
        if ($this->container['cvv'] === null) {
            $invalidProperties[] = "'cvv' can't be null";
        }
        if ((mb_strlen($this->container['cvv']) > 3)) {
            $invalidProperties[] = "invalid value for 'cvv', the character length must be smaller than or equal to 3.";
        }

        if ((mb_strlen($this->container['cvv']) < 3)) {
            $invalidProperties[] = "invalid value for 'cvv', the character length must be bigger than or equal to 3.";
        }

        if (!preg_match("/^[0-9]{3}$/", $this->container['cvv'])) {
            $invalidProperties[] = "invalid value for 'cvv', must be conform to the pattern /^[0-9]{3}$/.";
        }

        if ($this->container['expiration_date'] === null) {
            $invalidProperties[] = "'expiration_date' can't be null";
        }
        if ($this->container['pin_number'] === null) {
            $invalidProperties[] = "'pin_number' can't be null";
        }
        if ((mb_strlen($this->container['pin_number']) > 4)) {
            $invalidProperties[] = "invalid value for 'pin_number', the character length must be smaller than or equal to 4.";
        }

        if ((mb_strlen($this->container['pin_number']) < 4)) {
            $invalidProperties[] = "invalid value for 'pin_number', the character length must be bigger than or equal to 4.";
        }

        if (!preg_match("/^[0-9]{4}$/", $this->container['pin_number'])) {
            $invalidProperties[] = "invalid value for 'pin_number', must be conform to the pattern /^[0-9]{4}$/.";
        }

        if ($this->container['balance'] === null) {
            $invalidProperties[] = "'balance' can't be null";
        }
        if (($this->container['balance'] < 0)) {
            $invalidProperties[] = "invalid value for 'balance', must be bigger than or equal to 0.";
        }

        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'type', must be one of '%s'",
                $this->container['type'],
                implode("', '", $allowedValues)
            );
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
     * Gets card_number
     *
     * @return int
     */
    public function getCardNumber()
    {
        return $this->container['card_number'];
    }

    /**
     * Sets card_number
     *
     * @param int $card_number 16 Digits card number
     *
     * @return self
     */
    public function setCardNumber($card_number)
    {
        if (is_null($card_number)) {
            throw new \InvalidArgumentException('non-nullable card_number cannot be null');
        }
        $this->container['card_number'] = $card_number;

        return $this;
    }

    /**
     * Gets cvv
     *
     * @return string
     */
    public function getCvv()
    {
        return $this->container['cvv'];
    }

    /**
     * Sets cvv
     *
     * @param string $cvv 3 Digits cvv code
     *
     * @return self
     */
    public function setCvv($cvv)
    {
        if (is_null($cvv)) {
            throw new \InvalidArgumentException('non-nullable cvv cannot be null');
        }
        if ((mb_strlen($cvv) > 3)) {
            throw new \InvalidArgumentException('invalid length for $cvv when calling GetWalletCardInfo200Response., must be smaller than or equal to 3.');
        }
        if ((mb_strlen($cvv) < 3)) {
            throw new \InvalidArgumentException('invalid length for $cvv when calling GetWalletCardInfo200Response., must be bigger than or equal to 3.');
        }
        if ((!preg_match("/^[0-9]{3}$/", $cvv))) {
            throw new \InvalidArgumentException("invalid value for \$cvv when calling GetWalletCardInfo200Response., must conform to the pattern /^[0-9]{3}$/.");
        }

        $this->container['cvv'] = $cvv;

        return $this;
    }

    /**
     * Gets expiration_date
     *
     * @return \DateTime
     */
    public function getExpirationDate()
    {
        return $this->container['expiration_date'];
    }

    /**
     * Sets expiration_date
     *
     * @param \DateTime $expiration_date Card expiration date
     *
     * @return self
     */
    public function setExpirationDate($expiration_date)
    {
        if (is_null($expiration_date)) {
            throw new \InvalidArgumentException('non-nullable expiration_date cannot be null');
        }
        $this->container['expiration_date'] = $expiration_date;

        return $this;
    }

    /**
     * Gets pin_number
     *
     * @return string
     */
    public function getPinNumber()
    {
        return $this->container['pin_number'];
    }

    /**
     * Sets pin_number
     *
     * @param string $pin_number Card pin number (used in ATM machines)
     *
     * @return self
     */
    public function setPinNumber($pin_number)
    {
        if (is_null($pin_number)) {
            throw new \InvalidArgumentException('non-nullable pin_number cannot be null');
        }
        if ((mb_strlen($pin_number) > 4)) {
            throw new \InvalidArgumentException('invalid length for $pin_number when calling GetWalletCardInfo200Response., must be smaller than or equal to 4.');
        }
        if ((mb_strlen($pin_number) < 4)) {
            throw new \InvalidArgumentException('invalid length for $pin_number when calling GetWalletCardInfo200Response., must be bigger than or equal to 4.');
        }
        if ((!preg_match("/^[0-9]{4}$/", $pin_number))) {
            throw new \InvalidArgumentException("invalid value for \$pin_number when calling GetWalletCardInfo200Response., must conform to the pattern /^[0-9]{4}$/.");
        }

        $this->container['pin_number'] = $pin_number;

        return $this;
    }

    /**
     * Gets balance
     *
     * @return float
     */
    public function getBalance()
    {
        return $this->container['balance'];
    }

    /**
     * Sets balance
     *
     * @param float $balance Available balance on the card
     *
     * @return self
     */
    public function setBalance($balance)
    {
        if (is_null($balance)) {
            throw new \InvalidArgumentException('non-nullable balance cannot be null');
        }

        if (($balance < 0)) {
            throw new \InvalidArgumentException('invalid value for $balance when calling GetWalletCardInfo200Response., must be bigger than or equal to 0.');
        }

        $this->container['balance'] = $balance;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type Card type
     *
     * @return self
     */
    public function setType($type)
    {
        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'type', must be one of '%s'",
                    $type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

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
     * @param string $status Status of the card
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


