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
class TaxYearUserResp
{
    /**
     * @var string $address1 The user's street address.
     */
    public string $address1;
    /**
     * @var string $city The user's city.
     */
    public string $city;
    /**
     * @var string $country The user's country code. [ISO_3166-1_alpha-3](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-3) code.
     */
    public string $country;
    /**
     * @var string $firstName The user's first name. If Business account, the first name of the representative.
     */
    public string $firstName;
    /**
     * @var string $lastName The user's last name. If Business account, the last name of the representative.
     */
    public string $lastName;
    /**
     * @var string $dateOfBirth Date of birth. Minimum 18 years old.
     */
    public string $dateOfBirth;
    /**
     * @var int $balance Current user balance
     */
    public int $balance;
    /**
     * @var string $userToken The user token that needs to be fetched.
     */
    public ?string $userToken;
    /**
     * @var string $address2 The user's street address, line 2.
     */
    public ?string $address2;
    /**
     * @var string $stateProvince The user's state/province.
     */
    public ?string $stateProvince;
    /**
     * @var int $postalCode The user's postal code.
     */
    public ?int $postalCode;
    /**
     * @var string $middleName The user's middle name. If Business account, the middle name of the representative.
     */
    public ?string $middleName;
    /**
     * @var string $email The user's e-mail address. Must be unique. Cannot have two users with the same e-mail address.
     */
    public ?string $email;
    /**
     * @var string $mobileNumber Mobile phone number in [international format](https://en.wikipedia.org/wiki/National_conventions_for_writing_telephone_numbers#).
     */
    public ?string $mobileNumber;
    /**
     * @var string $businessName Name of business
     */
    public ?string $businessName;
    /**
     * @var string $taxId User Tax ID. This can be a Taxpayer Identification Number (TIN), Social Security Number (SSN), Individual Taxpayer Identification Number (ITIN) or Employer Identification Number (EIN).
     */
    public ?string $taxId;
    public function __construct(string $address1, string $city, string $country, string $firstName, string $lastName, string $dateOfBirth, int $balance, ?string $userToken = null, ?string $address2 = null, ?string $stateProvince = null, ?int $postalCode = null, ?string $middleName = null, ?string $email = null, ?string $mobileNumber = null, ?string $businessName = null, ?string $taxId = null)
    {
        $this->address1 = $address1;
        $this->city = $city;
        $this->country = $country;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->dateOfBirth = $dateOfBirth;
        $this->balance = $balance;
        $this->userToken = $userToken;
        $this->address2 = $address2;
        $this->stateProvince = $stateProvince;
        $this->postalCode = $postalCode;
        $this->middleName = $middleName;
        $this->email = $email;
        $this->mobileNumber = $mobileNumber;
        $this->businessName = $businessName;
        $this->taxId = $taxId;
    }
    public static function fromArray(array $data): self
    {
        return new TaxYearUserResp($data['address1'], $data['city'], $data['country'], $data['first_name'], $data['last_name'], $data['date_of_birth'], $data['balance'], $data['user_token'], $data['address2'], $data['state_province'], $data['postal_code'], $data['middle_name'], $data['email'], $data['mobile_number'], $data['business_name'], $data['tax_id']);
    }
    public function toArray(): array
    {
        return [
            'address1' => $this->address1,
            'city' => $this->city,
            'country' => $this->country,
            'first_name' => $this->firstName,
            'last_name' => $this->lastName,
            'date_of_birth' => $this->dateOfBirth,
            'balance' => $this->balance,
            'user_token' => $this->userToken,
            'address2' => $this->address2,
            'state_province' => $this->stateProvince,
            'postal_code' => $this->postalCode,
            'middle_name' => $this->middleName,
            'email' => $this->email,
            'mobile_number' => $this->mobileNumber,
            'business_name' => $this->businessName,
            'tax_id' => $this->taxId,
        ];
    }
}

