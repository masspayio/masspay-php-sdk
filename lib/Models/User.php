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
class User
{
    /**
     * @var string $internalUserId A client-defined identifier for the user. This is the unique ID assigned to the user on your system. Max 75 characters. Allows letters, numbers, and + , - . / _ ~ |
     */
    public string $internalUserId;
    /**
     * @var string $country The user's country code. [ISO_3166](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-3) code. Required in order to process a payout.
     */
    public string $country;
    /**
     * @var string $firstName The user's first name. (If Business account, the first name of the representative)
     */
    public string $firstName;
    /**
     * @var string $lastName The user's last name. (If Business account, the last name of the representative)
     */
    public string $lastName;
    /**
     * @var string $email The user's e-mail address. Must be unique. Cannot have two users with the same e-mail address.
     */
    public string $email;
    /**
     * @var string $address1 The user's street address. Required in order to process a payout.
     */
    public ?string $address1;
    /**
     * @var string $address2 The user's street address, line 2.
     */
    public ?string $address2;
    /**
     * @var string $city The user's city. Required in order to process a payout.
     */
    public ?string $city;
    /**
     * @var string $stateProvince The user's state/province.
     */
    public ?string $stateProvince;
    /**
     * @var string $postalCode The user's postal code.
     */
    public ?string $postalCode;
    /**
     * @var string $middleName The user's middle name. (If Business account, the middle name of the representative)
     */
    public ?string $middleName;
    /**
     * @var string $language The user's preferred language of communication. If not provided, defaults to English (en)
     */
    public ?string $language;
    /**
     * @var string $mobileNumber (Optional) Mobile number of user. Allows for SMS notifications upon availability of funds
     */
    public ?string $mobileNumber;
    /**
     * @var string $businessName Company legal name (Only if Business account)
     */
    public ?string $businessName;
    /**
     * @var string $dateOfBirth Date of birth. (optional). Minimum 18 years old
     */
    public ?string $dateOfBirth;
    /**
     * @var array $metadata Optional JSON object with attributes that can later be searched to locate this user. Do not include PII as this object is not encrypted.
     */
    public ?array $metadata;
    /**
     * @var bool $notifyUser Should we notify the user via email that their user has been created in the system? They will receive instructions to establish such account.
     */
    public ?bool $notifyUser;
    public function __construct(string $internalUserId, string $country, string $firstName, string $lastName, string $email, ?string $address1 = null, ?string $address2 = null, ?string $city = null, ?string $stateProvince = null, ?string $postalCode = null, ?string $middleName = null, ?string $language = null, ?string $mobileNumber = null, ?string $businessName = null, ?string $dateOfBirth = null, ?array $metadata = null, ?bool $notifyUser = null)
    {
        $this->internalUserId = $internalUserId;
        $this->country = $country;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->address1 = $address1;
        $this->address2 = $address2;
        $this->city = $city;
        $this->stateProvince = $stateProvince;
        $this->postalCode = $postalCode;
        $this->middleName = $middleName;
        $this->language = $language;
        $this->mobileNumber = $mobileNumber;
        $this->businessName = $businessName;
        $this->dateOfBirth = $dateOfBirth;
        $this->metadata = $metadata;
        $this->notifyUser = $notifyUser;
    }
    public static function fromArray(array $data): self
    {
        return new User($data['internal_user_id'], $data['country'], $data['first_name'], $data['last_name'], $data['email'], $data['address1'], $data['address2'], $data['city'], $data['state_province'], $data['postal_code'], $data['middle_name'], $data['language'], $data['mobile_number'], $data['business_name'], $data['date_of_birth'], $data['metadata'], $data['notify_user']);
    }
    public function toArray(): array
    {
        return [
            'internal_user_id' => $this->internalUserId,
            'country' => $this->country,
            'first_name' => $this->firstName,
            'last_name' => $this->lastName,
            'email' => $this->email,
            'address1' => $this->address1,
            'address2' => $this->address2,
            'city' => $this->city,
            'state_province' => $this->stateProvince,
            'postal_code' => $this->postalCode,
            'middle_name' => $this->middleName,
            'language' => $this->language,
            'mobile_number' => $this->mobileNumber,
            'business_name' => $this->businessName,
            'date_of_birth' => $this->dateOfBirth,
            'metadata' => $this->metadata,
            'notify_user' => $this->notifyUser,
        ];
    }
}

