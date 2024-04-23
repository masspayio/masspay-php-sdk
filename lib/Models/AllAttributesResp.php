<?php
/**
 * MassPay API
 *
 * The version of the OpenAPI document: 0.1.4
 * Contact: info@masspay.io
 *
 * NOTE: This file is auto generated.
 * Do not edit the file manually.
 */
namespace MasspaySdk\Models;
class AllAttributesResp
{
    /**
     * @var string $destinationToken Token that represents the payout destination. 36 characters long
     */
    public ?string $destinationToken;
    /**
     * @var string $payerLogo base64 representation of the payer logo
     */
    public ?string $payerLogo;
    /**
     * @var string $payerName Name of payer
     */
    public ?string $payerName;
    /**
     * @var array[] $exchangeRate Lists all available currencies and their estimated rates
     */
    public ?array
    $exchangeRate;
    /**
     * @var int $maxLimit The maximum amount (inclusive) the user can send with this service. 0 if no upper limit
     */
    public ?int $maxLimit;
    /**
     * @var int $minLimit The minimum amount (inclusive) the user can send with this service. 0 if no lower limit
     */
    public ?int $minLimit;
    /**
     * @var int $numberOfLocations Total number of locations. Mostly relevant for cash pickup services. 0 if unknown or irrelevant
     */
    public ?int $numberOfLocations;
    /**
     * @var string $estimatedAvailability Estimated availability of funds. When funds would be available to pickup/deposited
     */
    public ?string $estimatedAvailability;
    /**
     * @var string $additionalDescription When available, additional description that explains the service offered or requirements for funds delivery.
     */
    public ?string $additionalDescription;
    /**
     * @var bool $isDynamicToken When set to true, it indicates that this destination_token will auto retry the transaction for a set time until it is successful or timesout. False value means the transaction will be processed by the payer in real-time with instant feedback on success/failure.
     */
    public ?bool $isDynamicToken;
    /**
     * @var AttrsRequirement $attributes
     */
    public ?array
    $attributes;
    public function __construct(?string $destinationToken = null, ?string $payerLogo = null, ?string $payerName = null, ?array
    $exchangeRate = null, ?int $maxLimit = null, ?int $minLimit = null, ?int $numberOfLocations = null, ?string $estimatedAvailability = null, ?string $additionalDescription = null, ?bool $isDynamicToken = null, ?array
    $attributes = null)
    {
        $this->destinationToken = $destinationToken;
        $this->payerLogo = $payerLogo;
        $this->payerName = $payerName;
        $this->exchangeRate = $exchangeRate;
        $this->maxLimit = $maxLimit;
        $this->minLimit = $minLimit;
        $this->numberOfLocations = $numberOfLocations;
        $this->estimatedAvailability = $estimatedAvailability;
        $this->additionalDescription = $additionalDescription;
        $this->isDynamicToken = $isDynamicToken;
        $this->attributes = $attributes;
    }
    public static function fromArray(array $data): self
    {
        return new AllAttributesResp($data['destination_token'], $data['payer_logo'], $data['payer_name'], $data['exchange_rate'], $data['max_limit'], $data['min_limit'], $data['number_of_locations'], $data['estimated_availability'], $data['additional_description'], $data['is_dynamic_token'], $data['attributes']);
    }
    public function toArray(): array
    {
        return [
            'destination_token' => $this->destinationToken,
            'payer_logo' => $this->payerLogo,
            'payer_name' => $this->payerName,
            'exchange_rate' => $this->exchangeRate,
            'max_limit' => $this->maxLimit,
            'min_limit' => $this->minLimit,
            'number_of_locations' => $this->numberOfLocations,
            'estimated_availability' => $this->estimatedAvailability,
            'additional_description' => $this->additionalDescription,
            'is_dynamic_token' => $this->isDynamicToken,
            'attributes' => $this->attributes,
        ];
    }
}

