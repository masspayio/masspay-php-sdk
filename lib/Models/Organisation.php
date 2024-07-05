<?php
/**
 * MassPay API
 *
 * The version of the OpenAPI document: 1.0.0
 * Contact: info@masspay.io
 *
 * NOTE: This file is auto generated.
 * Do not edit the file manually.
 */
namespace MasspaySdk\Models;
/**
 * @name Organisation
 * Organisation
 */
class Organisation
{
    /**
     * @var string $providerId External provider ID
     */
    public ?string $providerId;
    /**
     * @var string $countryCode Country code
     */
    public ?string $countryCode;
    /**
     * @var string $email The organisation's email address
     */
    public ?string $email;
    /**
     * @var string $extendedAddress Address extension, e.g. apartment, floor or suite
     */
    public ?string $extendedAddress;
    /**
     * @var string $locality The organisation's locality / city
     */
    public ?string $locality;
    /**
     * @var string $name The name of the organisation
     */
    public ?string $name;
    /**
     * @var string $phone The organisation's telephone number
     */
    public ?string $phone;
    /**
     * @var string $postalCode The organisation's postal code
     */
    public ?string $postalCode;
    /**
     * @var string $region The organisation's country region
     */
    public ?string $region;
    /**
     * @var string $street The organisation street address
     */
    public ?string $street;
    /**
     * @var int $streetNumber The organisation street number
     */
    public ?int $streetNumber;
    /**
     * @var string $legal The organisation's legal structure
     */
    public ?string $legal;
    /**
     * @var string $taxNumber The organisation's tax number
     */
    public ?string $taxNumber;
    /**
     * @var string $registrationNumber The registration number of the organization at the (local) chamber of commerce
     */
    public ?string $registrationNumber;
    /**
     * @var bool $whitelistEnabled Whitelist enabled setting
    If set to true, prevents the Organisation's API keys to perform actions from non-whitelisted IPs
     */
    public ?bool $whitelistEnabled;
    /**
     * @var string $welcome Reference to the welcome
     */
    public ?string $welcome;
    public function __construct(?string $providerId = null, ?string $countryCode = null, ?string $email = null, ?string $extendedAddress = null, ?string $locality = null, ?string $name = null, ?string $phone = null, ?string $postalCode = null, ?string $region = null, ?string $street = null, ?int $streetNumber = null, ?string $legal = null, ?string $taxNumber = null, ?string $registrationNumber = null, ?bool $whitelistEnabled = null, ?string $welcome = null)
    {
        $this->providerId = $providerId;
        $this->countryCode = $countryCode;
        $this->email = $email;
        $this->extendedAddress = $extendedAddress;
        $this->locality = $locality;
        $this->name = $name;
        $this->phone = $phone;
        $this->postalCode = $postalCode;
        $this->region = $region;
        $this->street = $street;
        $this->streetNumber = $streetNumber;
        $this->legal = $legal;
        $this->taxNumber = $taxNumber;
        $this->registrationNumber = $registrationNumber;
        $this->whitelistEnabled = $whitelistEnabled;
        $this->welcome = $welcome;
    }
    public static function fromArray(array $data): self
    {
        return new Organisation($data['provider_id'], $data['country_code'], $data['email'], $data['extended_address'], $data['locality'], $data['name'], $data['phone'], $data['postal_code'], $data['region'], $data['street'], $data['street_number'], $data['legal'], $data['tax_number'], $data['registration_number'], $data['whitelist_enabled'], $data['welcome']);
    }
    public function toArray(): array
    {
        return [
            'provider_id' => $this->providerId,
            'country_code' => $this->countryCode,
            'email' => $this->email,
            'extended_address' => $this->extendedAddress,
            'locality' => $this->locality,
            'name' => $this->name,
            'phone' => $this->phone,
            'postal_code' => $this->postalCode,
            'region' => $this->region,
            'street' => $this->street,
            'street_number' => $this->streetNumber,
            'legal' => $this->legal,
            'tax_number' => $this->taxNumber,
            'registration_number' => $this->registrationNumber,
            'whitelist_enabled' => $this->whitelistEnabled,
            'welcome' => $this->welcome,
        ];
    }
}

