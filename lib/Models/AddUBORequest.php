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
class AddUboRequest
{
    /**
     * @var int $ownershipPercentage What is the percentage ownership of this individual in the corporation
     */
    public int $ownershipPercentage;
    /**
     * @var string $phone Phone number including country code prefix
     */
    public string $phone;
    /**
     * @var string $firstName First name
     */
    public string $firstName;
    /**
     * @var string $lastName Last name
     */
    public string $lastName;
    /**
     * @var string $email Email address
     */
    public string $email;
    /**
     * @var string $dob Date of birth
     */
    public string $dob;
    /**
     * @var string $taxId Tax ID. In the U.S, SSN
     */
    public string $taxId;
    /**
     * @var string $address1 Address 1
     */
    public string $address1;
    /**
     * @var string $city City
     */
    public string $city;
    /**
     * @var string $state State
     */
    public string $state;
    /**
     * @var string $zip Zip/Postal code
     */
    public string $zip;
    /**
     * @var string $country Country code [ISO_3166](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-3)
     */
    public string $country;
    /**
     * @var string $middleName Middle name (Optional)
     */
    public ?string $middleName;
    /**
     * @var string $address2 Address 2
     */
    public ?string $address2;
    public function __construct(int $ownershipPercentage, string $phone, string $firstName, string $lastName, string $email, string $dob, string $taxId, string $address1, string $city, string $state, string $zip, string $country, ?string $middleName = null, ?string $address2 = null)
    {
        $this->ownershipPercentage = $ownershipPercentage;
        $this->phone = $phone;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->dob = $dob;
        $this->taxId = $taxId;
        $this->address1 = $address1;
        $this->city = $city;
        $this->state = $state;
        $this->zip = $zip;
        $this->country = $country;
        $this->middleName = $middleName;
        $this->address2 = $address2;
    }
    public static function fromArray(array $data): self
    {
        return new AddUboRequest($data['ownership_percentage'], $data['phone'], $data['first_name'], $data['last_name'], $data['email'], $data['dob'], $data['tax_id'], $data['address1'], $data['city'], $data['state'], $data['zip'], $data['country'], $data['middle_name'], $data['address2']);
    }
    public function toArray(): array
    {
        return [
            'ownership_percentage' => $this->ownershipPercentage,
            'phone' => $this->phone,
            'first_name' => $this->firstName,
            'last_name' => $this->lastName,
            'email' => $this->email,
            'dob' => $this->dob,
            'tax_id' => $this->taxId,
            'address1' => $this->address1,
            'city' => $this->city,
            'state' => $this->state,
            'zip' => $this->zip,
            'country' => $this->country,
            'middle_name' => $this->middleName,
            'address2' => $this->address2,
        ];
    }
}

