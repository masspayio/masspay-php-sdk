<?php
/**
 * PayoutTxn
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
 * OpenAPI Generator version: 6.4.0
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
 * PayoutTxn Class Doc Comment
 *
 * @category Class
 * @package  MassPayPhpSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PayoutTxn implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PayoutTxn';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'client_transfer_id' => 'string',
        'source_currency_code' => 'string',
        'destination_currency_code' => 'string',
        'source_token' => 'string',
        'destination_token' => 'string',
        'destination_amount' => 'float',
        'source_amount' => 'float',
        'attr_set_token' => 'string',
        'metadata' => 'string',
        'notify_user' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'client_transfer_id' => null,
        'source_currency_code' => null,
        'destination_currency_code' => null,
        'source_token' => 'uuid',
        'destination_token' => 'uuid',
        'destination_amount' => 'float',
        'source_amount' => 'float',
        'attr_set_token' => 'uuid',
        'metadata' => null,
        'notify_user' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'client_transfer_id' => false,
		'source_currency_code' => false,
		'destination_currency_code' => false,
		'source_token' => false,
		'destination_token' => false,
		'destination_amount' => false,
		'source_amount' => false,
		'attr_set_token' => false,
		'metadata' => false,
		'notify_user' => false
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
        'client_transfer_id' => 'client_transfer_id',
        'source_currency_code' => 'source_currency_code',
        'destination_currency_code' => 'destination_currency_code',
        'source_token' => 'source_token',
        'destination_token' => 'destination_token',
        'destination_amount' => 'destination_amount',
        'source_amount' => 'source_amount',
        'attr_set_token' => 'attr_set_token',
        'metadata' => 'metadata',
        'notify_user' => 'notify_user'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'client_transfer_id' => 'setClientTransferId',
        'source_currency_code' => 'setSourceCurrencyCode',
        'destination_currency_code' => 'setDestinationCurrencyCode',
        'source_token' => 'setSourceToken',
        'destination_token' => 'setDestinationToken',
        'destination_amount' => 'setDestinationAmount',
        'source_amount' => 'setSourceAmount',
        'attr_set_token' => 'setAttrSetToken',
        'metadata' => 'setMetadata',
        'notify_user' => 'setNotifyUser'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'client_transfer_id' => 'getClientTransferId',
        'source_currency_code' => 'getSourceCurrencyCode',
        'destination_currency_code' => 'getDestinationCurrencyCode',
        'source_token' => 'getSourceToken',
        'destination_token' => 'getDestinationToken',
        'destination_amount' => 'getDestinationAmount',
        'source_amount' => 'getSourceAmount',
        'attr_set_token' => 'getAttrSetToken',
        'metadata' => 'getMetadata',
        'notify_user' => 'getNotifyUser'
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
        $this->setIfExists('client_transfer_id', $data ?? [], null);
        $this->setIfExists('source_currency_code', $data ?? [], 'USD');
        $this->setIfExists('destination_currency_code', $data ?? [], null);
        $this->setIfExists('source_token', $data ?? [], null);
        $this->setIfExists('destination_token', $data ?? [], null);
        $this->setIfExists('destination_amount', $data ?? [], null);
        $this->setIfExists('source_amount', $data ?? [], null);
        $this->setIfExists('attr_set_token', $data ?? [], null);
        $this->setIfExists('metadata', $data ?? [], null);
        $this->setIfExists('notify_user', $data ?? [], false);
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

        if ($this->container['destination_currency_code'] === null) {
            $invalidProperties[] = "'destination_currency_code' can't be null";
        }
        if ($this->container['source_token'] === null) {
            $invalidProperties[] = "'source_token' can't be null";
        }
        if ($this->container['destination_token'] === null) {
            $invalidProperties[] = "'destination_token' can't be null";
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
     * Gets client_transfer_id
     *
     * @return string|null
     */
    public function getClientTransferId()
    {
        return $this->container['client_transfer_id'];
    }

    /**
     * Sets client_transfer_id
     *
     * @param string|null $client_transfer_id A client defined transfer identifier. This is the unique ID assigned to the transfer on your system. Max 50 characters.
     *
     * @return self
     */
    public function setClientTransferId($client_transfer_id)
    {
        if (is_null($client_transfer_id)) {
            throw new \InvalidArgumentException('non-nullable client_transfer_id cannot be null');
        }
        $this->container['client_transfer_id'] = $client_transfer_id;

        return $this;
    }

    /**
     * Gets source_currency_code
     *
     * @return string|null
     */
    public function getSourceCurrencyCode()
    {
        return $this->container['source_currency_code'];
    }

    /**
     * Sets source_currency_code
     *
     * @param string|null $source_currency_code The currency originating balance is stored in. Using [ISO 4217](https://en.wikipedia.org/wiki/ISO_4217) format. In most cases this value will be USD, and therefore the defaut value if none is provided
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
     * @param string $source_token Token that represents the funding source i.e. bank account, wallet. 36 characters long
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
     * @return float|null
     */
    public function getDestinationAmount()
    {
        return $this->container['destination_amount'];
    }

    /**
     * Sets destination_amount
     *
     * @param float|null $destination_amount The amount to be sent for payout in source currency. i.e USD. Must be provided if source_amount is empty
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
     * @return float|null
     */
    public function getSourceAmount()
    {
        return $this->container['source_amount'];
    }

    /**
     * Sets source_amount
     *
     * @param float|null $source_amount The amount to be received by the payout in source currency. i.e USD. Must be provided if destination_amount is empty
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
     * @return string|null
     */
    public function getAttrSetToken()
    {
        return $this->container['attr_set_token'];
    }

    /**
     * Sets attr_set_token
     *
     * @param string|null $attr_set_token Token that represents set of attributes that associated with destination_token. For example, bank account, mobile account, wallet id, etc. If not provided, uses the last one used. 36 characters long
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
     * Gets metadata
     *
     * @return string|null
     */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
     * Sets metadata
     *
     * @param string|null $metadata Optional JSON object with attributes that can later be searched to locate this payout. Do not include PII as this object is not encrypted.
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
     * Gets notify_user
     *
     * @return bool|null
     */
    public function getNotifyUser()
    {
        return $this->container['notify_user'];
    }

    /**
     * Sets notify_user
     *
     * @param bool|null $notify_user Should we notify the user via email/sms about status updates for this payout?
     *
     * @return self
     */
    public function setNotifyUser($notify_user)
    {
        if (is_null($notify_user)) {
            throw new \InvalidArgumentException('non-nullable notify_user cannot be null');
        }
        $this->container['notify_user'] = $notify_user;

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


