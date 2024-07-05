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
enum mfaResult: string {
    case MFA = "mfa";
    case LOGIN = "login";
    case MFA_SET_UP_REQUIRED = "mfa_set_up_required";
}
class Mfa
{
    /**
     * @var mfaResult $result Result of login. mfa, login or mfa_set_up_required
     */
    public ?mfaResult $result;
    /**
     * @var string $mfaType Type of MFA
     */
    public ?string $mfaType;
    /**
     * @var string $mfaToken Token used while submitting MFA info
     */
    public ?string $mfaToken;
    public function __construct(?mfaResult $result = null, ?string $mfaType = null, ?string $mfaToken = null)
    {
        $this->result = $result;
        $this->mfaType = $mfaType;
        $this->mfaToken = $mfaToken;
    }
    public static function fromArray(array $data): self
    {
        return new Mfa($data['result'], $data['mfa_type'], $data['mfa_token']);
    }
    public function toArray(): array
    {
        return [
            'result' => $this->result,
            'mfa_type' => $this->mfaType,
            'mfa_token' => $this->mfaToken,
        ];
    }
}

