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
 * @name Users
 * MagniusUser
 */
/**
 * User language (ISO 639-1, Alpha-2 code)
 */
enum usersLanguage: string {
    case EN = "en";
    case NL = "nl";
}
/**
 * Number format locale
 */
enum usersNumberFormat: string {
    case EN_US = "en_US";
    case NL_NL = "nl_NL";
}
/**
 * Date format locale
 */
enum usersDateFormat: string {
    case EN_US = "en_US";
    case NL_NL = "nl_NL";
}
/**
 * Multi factor authentication type
 */
enum usersMfaType: string {
    case EMPTY = "";
    case GOOGLE = "google";
    case EMAIL = "email";
    case SMS = "sms";
}
class Users
{
    /**
     * @var string $name The name of the user
     */
    public ?string $name;
    /**
     * @var string $email The user's email address
     */
    public ?string $email;
    /**
     * @var string $phoneNumber The telephone or mobile number of this user, ITU/E.123 format with international prefix (+PPNNNNNNNNN...)
     */
    public ?string $phoneNumber;
    /**
     * @var usersLanguage $language User language (ISO 639-1, Alpha-2 code)
     */
    public ?usersLanguage $language;
    /**
     * @var usersNumberFormat $numberFormat Number format locale
     */
    public ?usersNumberFormat $numberFormat;
    /**
     * @var usersDateFormat $dateFormat Date format locale
     */
    public ?usersDateFormat $dateFormat;
    /**
     * @var bool $mfa If set to true, multi factor authentication is enabled
     */
    public ?bool $mfa;
    /**
     * @var usersMfaType $mfaType Multi factor authentication type
     */
    public ?usersMfaType $mfaType;
    /**
     * @var string $welcome Reference to the welcome message linked to this user, can only be passed by a user with PSP role
     */
    public ?string $welcome;
    public function __construct(?string $name = null, ?string $email = null, ?string $phoneNumber = null, ?usersLanguage $language = null, ?usersNumberFormat $numberFormat = null, ?usersDateFormat $dateFormat = null, ?bool $mfa = null, ?usersMfaType $mfaType = null, ?string $welcome = null)
    {
        $this->name = $name;
        $this->email = $email;
        $this->phoneNumber = $phoneNumber;
        $this->language = $language;
        $this->numberFormat = $numberFormat;
        $this->dateFormat = $dateFormat;
        $this->mfa = $mfa;
        $this->mfaType = $mfaType;
        $this->welcome = $welcome;
    }
    public static function fromArray(array $data): self
    {
        return new Users($data['name'], $data['email'], $data['phone_number'], $data['language'], $data['number_format'], $data['date_format'], $data['mfa'], $data['mfa_type'], $data['welcome']);
    }
    public function toArray(): array
    {
        return [
            'name' => $this->name,
            'email' => $this->email,
            'phone_number' => $this->phoneNumber,
            'language' => $this->language,
            'number_format' => $this->numberFormat,
            'date_format' => $this->dateFormat,
            'mfa' => $this->mfa,
            'mfa_type' => $this->mfaType,
            'welcome' => $this->welcome,
        ];
    }
}

