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
/**
 * The status of the user, if set to ACTIVE when current status is DEACTIVE, reactivation fee will incur
 */
enum updateUserStatus: string {
    case ACTIVE = "ACTIVE";
    case DEACTIVE = "DEACTIVE";
}
class UpdateUser
{
    /**
     * @var updateUserStatus $status The status of the user, if set to ACTIVE when current status is DEACTIVE, reactivation fee will incur
     */
    public updateUserStatus $status;
    /**
     * @var string $internalUserId A client-defined identifier for the user. This is the unique ID assigned to the user on your system. Max 75 characters. Allows letters, numbers, and + , - . / _ ~ |
     */
    public string $internalUserId;
    /**
     * @var string $address1 The user's street address.
     */
    public string $address1;
    /**
     * @var string $city The user's city.
     */
    public string $city;
    /**
     * @var string $stateProvince The user's state/province.
     */
    public string $stateProvince;
    /**
     * @var string $postalCode The user's postal code.
     */
    public string $postalCode;
    /**
     * @var string $country The user's country code. ISO_3166-1_alpha-3 code
     */
    public string $country;
    /**
     * @var string $firstName The user's first name.
     */
    public string $firstName;
    /**
     * @var string $lastName The user's last name.
     */
    public string $lastName;
    /**
     * @var string $email The user's e-mail address. Must be unique. Cannot have two users with the same e-mail address.
     */
    public string $email;
    /**
     * @var string $createdOn The timestamp the user was created in the system. Using UTC timestamp.[ISO 8601](https://en.wikipedia.org/wiki/ISO_8601)
     */
    public ?string $createdOn;
    /**
     * @var string $address2 The user's street address, line 2.
     */
    public ?string $address2;
    /**
     * @var string $middleName The user's middle name.
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
    public function __construct(updateUserStatus $status, string $internalUserId, string $address1, string $city, string $stateProvince, string $postalCode, string $country, string $firstName, string $lastName, string $email, ?string $createdOn = null, ?string $address2 = null, ?string $middleName = null, ?string $language = null, ?string $mobileNumber = null, ?string $businessName = null, ?string $dateOfBirth = null, ?array $metadata = null)
    {
        $this->status = $status;
        $this->internalUserId = $internalUserId;
        $this->address1 = $address1;
        $this->city = $city;
        $this->stateProvince = $stateProvince;
        $this->postalCode = $postalCode;
        $this->country = $country;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->createdOn = $createdOn;
        $this->address2 = $address2;
        $this->middleName = $middleName;
        $this->language = $language;
        $this->mobileNumber = $mobileNumber;
        $this->businessName = $businessName;
        $this->dateOfBirth = $dateOfBirth;
        $this->metadata = $metadata;
    }
    public static function fromArray(array $data): self
    {
        return new UpdateUser($data['status'], $data['internal_user_id'], $data['address1'], $data['city'], $data['state_province'], $data['postal_code'], $data['country'], $data['first_name'], $data['last_name'], $data['email'], $data['created_on'], $data['address2'], $data['middle_name'], $data['language'], $data['mobile_number'], $data['business_name'], $data['date_of_birth'], $data['metadata']);
    }
    public function toArray(): array
    {
        return [
            'status' => $this->status,
            'internal_user_id' => $this->internalUserId,
            'address1' => $this->address1,
            'city' => $this->city,
            'state_province' => $this->stateProvince,
            'postal_code' => $this->postalCode,
            'country' => $this->country,
            'first_name' => $this->firstName,
            'last_name' => $this->lastName,
            'email' => $this->email,
            'created_on' => $this->createdOn,
            'address2' => $this->address2,
            'middle_name' => $this->middleName,
            'language' => $this->language,
            'mobile_number' => $this->mobileNumber,
            'business_name' => $this->businessName,
            'date_of_birth' => $this->dateOfBirth,
            'metadata' => $this->metadata,
        ];
    }
}

