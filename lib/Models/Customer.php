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
 * @name Customer
 * Customer
 */
/**
 * The gender of a customer amongst {male, female}
 */
enum customerGender: string {
    case MALE = "male";
    case FEMALE = "female";
    case EMPTY = "";
}
/**
 * Customer verification status. Defaults to 'unverified'
 */
enum customerStatus: string {
    case UNVERIFIED = "unverified";
    case AUTO_UNVERIFIED = "auto-unverified";
    case AUTO_VERIFIED = "auto-verified";
    case VERIFIED = "verified";
}
/**
 * Customer RFM (customer value) segment
 */
enum customerSegment: string {
    case CHAMPION = "Champion";
    case LOYAL = "Loyal";
    case POTENTIAL_LOYALIST = "Potential Loyalist";
    case RECENT = "Recent";
    case PROMISING = "Promising";
    case NEEDING_ATTENTION = "Needing Attention";
    case ABOUT_TO_SLEEP = "About To Sleep";
    case CAN_T_LOSE_THEM = "Can’t Lose Them";
    case HIBERNATING = "Hibernating";
    case LOST = "Lost";
    case EMPTY = "";
}
class Customer
{
    /**
     * @var string $merchantReference A reference specified by the merchant to identify the customer
     */
    public ?string $merchantReference;
    /**
     * @var string $title The title / honorific prefix of a person, amongst {mr, ms}
     */
    public ?string $title;
    /**
     * @var string $initials Initials of a person
     */
    public ?string $initials;
    /**
     * @var string $firstName The first name(s) of a person, 100 characters or less
     */
    public ?string $firstName;
    /**
     * @var string $lastName The last name(s) of a person, 100 characters or less
     */
    public ?string $lastName;
    /**
     * @var customerGender $gender The gender of a customer amongst {male, female}
     */
    public ?customerGender $gender;
    /**
     * @var string $dateOfBirth The date of birth of a person, 10 characters, ISO-8601 (YYYY-MM-DD)
     */
    public ?string $dateOfBirth;
    /**
     * @var string $emailAddress The email address of a person or an organisation, 100 characters or less
     */
    public ?string $emailAddress;
    /**
     * @var string $phoneNumber The telephone or mobile number of a person / company, ITU/E.123 format with international prefix (+PPNNNNNNNNN...)
     */
    public ?string $phoneNumber;
    /**
     * @var string $faxNumber The fax number, ITU/E.123 format with international prefix (+PPNNNNNNNNN...)
     */
    public ?string $faxNumber;
    /**
     * @var string $streetAddress A complete street name of a person's or company's address, 250 characters or less
     */
    public ?string $streetAddress;
    /**
     * @var string $houseNumber Address house number
     */
    public ?string $houseNumber;
    /**
     * @var string $houseNumberSuffix Address house extension
     */
    public ?string $houseNumberSuffix;
    /**
     * @var string $postalCode A postal code for the address, if any
     */
    public ?string $postalCode;
    /**
     * @var string $city A city name for the address, 100 characters or less
     */
    public ?string $city;
    /**
     * @var string $region A region / state / province for the address
     */
    public ?string $region;
    /**
     * @var string $countryCode A 2-letter ISO3166 alpha-2. country code for the address
     */
    public ?string $countryCode;
    /**
     * @var string $socialSecurityNumber The social security number of the customer. Only supported for DK, FI, NO & SE and required for dealing with Klarna
     */
    public ?string $socialSecurityNumber;
    /**
     * @var customerStatus $status Customer verification status. Defaults to 'unverified'
     */
    public ?customerStatus $status;
    /**
     * @var string $statusReason Customer verification status reason
     */
    public ?string $statusReason;
    /**
     * @var customerSegment $segment Customer RFM (customer value) segment
     */
    public ?customerSegment $segment;
    /**
     * @var bool $isSoleProprietor Company information - Is sole proprietor
     */
    public ?bool $isSoleProprietor;
    /**
     * @var string $corporationName Company information - Name
     */
    public ?string $corporationName;
    /**
     * @var string $cocNumber Company information - Chamber of Commerce number
     */
    public ?string $cocNumber;
    public function __construct(?string $merchantReference = null, ?string $title = null, ?string $initials = null, ?string $firstName = null, ?string $lastName = null, ?customerGender $gender = null, ?string $dateOfBirth = null, ?string $emailAddress = null, ?string $phoneNumber = null, ?string $faxNumber = null, ?string $streetAddress = null, ?string $houseNumber = null, ?string $houseNumberSuffix = null, ?string $postalCode = null, ?string $city = null, ?string $region = null, ?string $countryCode = null, ?string $socialSecurityNumber = null, ?customerStatus $status = null, ?string $statusReason = null, ?customerSegment $segment = null, ?bool $isSoleProprietor = null, ?string $corporationName = null, ?string $cocNumber = null)
    {
        $this->merchantReference = $merchantReference;
        $this->title = $title;
        $this->initials = $initials;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->gender = $gender;
        $this->dateOfBirth = $dateOfBirth;
        $this->emailAddress = $emailAddress;
        $this->phoneNumber = $phoneNumber;
        $this->faxNumber = $faxNumber;
        $this->streetAddress = $streetAddress;
        $this->houseNumber = $houseNumber;
        $this->houseNumberSuffix = $houseNumberSuffix;
        $this->postalCode = $postalCode;
        $this->city = $city;
        $this->region = $region;
        $this->countryCode = $countryCode;
        $this->socialSecurityNumber = $socialSecurityNumber;
        $this->status = $status;
        $this->statusReason = $statusReason;
        $this->segment = $segment;
        $this->isSoleProprietor = $isSoleProprietor;
        $this->corporationName = $corporationName;
        $this->cocNumber = $cocNumber;
    }
    public static function fromArray(array $data): self
    {
        return new Customer($data['merchant_reference'], $data['title'], $data['initials'], $data['first_name'], $data['last_name'], $data['gender'], $data['date_of_birth'], $data['email_address'], $data['phone_number'], $data['fax_number'], $data['street_address'], $data['house_number'], $data['house_number_suffix'], $data['postal_code'], $data['city'], $data['region'], $data['country_code'], $data['social_security_number'], $data['status'], $data['status_reason'], $data['segment'], $data['is_sole_proprietor'], $data['corporation_name'], $data['coc_number']);
    }
    public function toArray(): array
    {
        return [
            'merchant_reference' => $this->merchantReference,
            'title' => $this->title,
            'initials' => $this->initials,
            'first_name' => $this->firstName,
            'last_name' => $this->lastName,
            'gender' => $this->gender,
            'date_of_birth' => $this->dateOfBirth,
            'email_address' => $this->emailAddress,
            'phone_number' => $this->phoneNumber,
            'fax_number' => $this->faxNumber,
            'street_address' => $this->streetAddress,
            'house_number' => $this->houseNumber,
            'house_number_suffix' => $this->houseNumberSuffix,
            'postal_code' => $this->postalCode,
            'city' => $this->city,
            'region' => $this->region,
            'country_code' => $this->countryCode,
            'social_security_number' => $this->socialSecurityNumber,
            'status' => $this->status,
            'status_reason' => $this->statusReason,
            'segment' => $this->segment,
            'is_sole_proprietor' => $this->isSoleProprietor,
            'corporation_name' => $this->corporationName,
            'coc_number' => $this->cocNumber,
        ];
    }
}

