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
 * Type of MFA
 */
enum loginMfaSetUpMfaType: string {
    case GOOGLE = "google";
    case EMAIL = "email";
    case SMS = "sms";
}
class LoginMfaSetUp
{
    /**
     * @var string $token MFA set-up one time token received during login step
     */
    public string $token;
    /**
     * @var loginMfaSetUpMfaType $mfaType Type of MFA
     */
    public loginMfaSetUpMfaType $mfaType;
    /**
     * @var string $mfaCode Optional MFA code (for Google MFA)
     */
    public ?string $mfaCode;
    public function __construct(string $token, loginMfaSetUpMfaType $mfaType, ?string $mfaCode = null)
    {
        $this->token = $token;
        $this->mfaType = $mfaType;
        $this->mfaCode = $mfaCode;
    }
    public static function fromArray(array $data): self
    {
        return new LoginMfaSetUp($data['token'], $data['mfa_type'], $data['mfa_code']);
    }
    public function toArray(): array
    {
        return [
            'token' => $this->token,
            'mfa_type' => $this->mfaType,
            'mfa_code' => $this->mfaCode,
        ];
    }
}

