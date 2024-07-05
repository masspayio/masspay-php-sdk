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
class LoginMfa
{
    /**
     * @var string $username The user's email address
     */
    public string $username;
    /**
     * @var string $code MFA code supplied by the user
     */
    public string $code;
    /**
     * @var string $token MFA token received during login step
     */
    public ?string $token;
    /**
     * @var bool $remember Remember MFA for current device for 30 days (fingerprint required)
     */
    public ?bool $remember;
    /**
     * @var string $fingerprint Browser fingerprint
     */
    public ?string $fingerprint;
    public function __construct(string $username, string $code, ?string $token = null, ?bool $remember = null, ?string $fingerprint = null)
    {
        $this->username = $username;
        $this->code = $code;
        $this->token = $token;
        $this->remember = $remember;
        $this->fingerprint = $fingerprint;
    }
    public static function fromArray(array $data): self
    {
        return new LoginMfa($data['username'], $data['code'], $data['token'], $data['remember'], $data['fingerprint']);
    }
    public function toArray(): array
    {
        return [
            'username' => $this->username,
            'code' => $this->code,
            'token' => $this->token,
            'remember' => $this->remember,
            'fingerprint' => $this->fingerprint,
        ];
    }
}

