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
 * Result of login. mfa, login or mfa_set_up_required
 */
enum loginDefaultResult: string {
    case MFA = "mfa";
    case LOGIN = "login";
    case MFA_SET_UP_REQUIRED = "mfa_set_up_required";
}
/**
 * User language (ISO 639-1, Alpha-2 code)
 */
enum loginDefaultLanguage: string {
    case EN = "en";
    case NL = "nl";
}
/**
 * Date format locale
 */
enum loginDefaultDateFormat: string {
    case EN_US = "en_US";
    case NL_NL = "nl_NL";
}
/**
 * Number format locale
 */
enum loginDefaultNumberFormat: string {
    case EN_US = "en_US";
    case NL_NL = "nl_NL";
}
class LoginDefault
{
    /**
     * @var loginDefaultResult $result Result of login. mfa, login or mfa_set_up_required
     */
    public ?loginDefaultResult $result;
    /**
     * @var string $id User id
     */
    public ?string $id;
    /**
     * @var string $apikeyLastFour API Key last four digits
     */
    public ?string $apikeyLastFour;
    /**
     * @var string $token JWT token
     */
    public ?string $token;
    /**
     * @var string $username User email
     */
    public ?string $username;
    /**
     * @var string $organisation Reference to the organization this user belongs to
     */
    public ?string $organisation;
    /**
     * @var string $name The user's name
     */
    public ?string $name;
    /**
     * @var string $lastLogin Last time the user logged in
     */
    public ?string $lastLogin;
    /**
     * @var int $lastLoginDaysAgo Amount of days since last login
     */
    public ?int $lastLoginDaysAgo;
    /**
     * @var int $loginStreak The amount of days in a row the user has logged in
     */
    public ?int $loginStreak;
    /**
     * @var bool $psp Is this user an psp user or not
     */
    public ?bool $psp;
    /**
     * @var string[] $roles Array of roles this user has
     */
    public ?array
    $roles;
    /**
     * @var bool $mfa Does this user have MFA enabled or not
     */
    public ?bool $mfa;
    /**
     * @var string $mfaType Does this user have MFA enabled or not
     */
    public ?string $mfaType;
    /**
     * @var string $mfaCookie MFA cookie based on fingerprint
     */
    public ?string $mfaCookie;
    /**
     * @var loginDefaultLanguage $language User language (ISO 639-1, Alpha-2 code)
     */
    public ?loginDefaultLanguage $language;
    /**
     * @var loginDefaultDateFormat $dateFormat Date format locale
     */
    public ?loginDefaultDateFormat $dateFormat;
    /**
     * @var loginDefaultNumberFormat $numberFormat Number format locale
     */
    public ?loginDefaultNumberFormat $numberFormat;
    public function __construct(?loginDefaultResult $result = null, ?string $id = null, ?string $apikeyLastFour = null, ?string $token = null, ?string $username = null, ?string $organisation = null, ?string $name = null, ?string $lastLogin = null, ?int $lastLoginDaysAgo = null, ?int $loginStreak = null, ?bool $psp = null, ?array
    $roles = null, ?bool $mfa = null, ?string $mfaType = null, ?string $mfaCookie = null, ?loginDefaultLanguage $language = null, ?loginDefaultDateFormat $dateFormat = null, ?loginDefaultNumberFormat $numberFormat = null)
    {
        $this->result = $result;
        $this->id = $id;
        $this->apikeyLastFour = $apikeyLastFour;
        $this->token = $token;
        $this->username = $username;
        $this->organisation = $organisation;
        $this->name = $name;
        $this->lastLogin = $lastLogin;
        $this->lastLoginDaysAgo = $lastLoginDaysAgo;
        $this->loginStreak = $loginStreak;
        $this->psp = $psp;
        $this->roles = $roles;
        $this->mfa = $mfa;
        $this->mfaType = $mfaType;
        $this->mfaCookie = $mfaCookie;
        $this->language = $language;
        $this->dateFormat = $dateFormat;
        $this->numberFormat = $numberFormat;
    }
    public static function fromArray(array $data): self
    {
        return new LoginDefault($data['result'], $data['id'], $data['apikey_last_four'], $data['token'], $data['username'], $data['organisation'], $data['name'], $data['last_login'], $data['last_login_days_ago'], $data['login_streak'], $data['psp'], $data['roles'], $data['mfa'], $data['mfa_type'], $data['mfa_cookie'], $data['language'], $data['date_format'], $data['number_format']);
    }
    public function toArray(): array
    {
        return [
            'result' => $this->result,
            'id' => $this->id,
            'apikey_last_four' => $this->apikeyLastFour,
            'token' => $this->token,
            'username' => $this->username,
            'organisation' => $this->organisation,
            'name' => $this->name,
            'last_login' => $this->lastLogin,
            'last_login_days_ago' => $this->lastLoginDaysAgo,
            'login_streak' => $this->loginStreak,
            'psp' => $this->psp,
            'roles' => $this->roles,
            'mfa' => $this->mfa,
            'mfa_type' => $this->mfaType,
            'mfa_cookie' => $this->mfaCookie,
            'language' => $this->language,
            'date_format' => $this->dateFormat,
            'number_format' => $this->numberFormat,
        ];
    }
}

