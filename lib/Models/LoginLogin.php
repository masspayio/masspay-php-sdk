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
class LoginLogin
{
    /**
     * @var string $password The user's password
     */
    public string $password;
    /**
     * @var string $username The user's email address
     */
    public ?string $username;
    /**
     * @var string $fingerprint Browser fingerprint
     */
    public ?string $fingerprint;
    /**
     * @var string $mfaCookie Remember MFA cookie
     */
    public ?string $mfaCookie;
    public function __construct(string $password, ?string $username = null, ?string $fingerprint = null, ?string $mfaCookie = null)
    {
        $this->password = $password;
        $this->username = $username;
        $this->fingerprint = $fingerprint;
        $this->mfaCookie = $mfaCookie;
    }
    public static function fromArray(array $data): self
    {
        return new LoginLogin($data['password'], $data['username'], $data['fingerprint'], $data['mfa_cookie']);
    }
    public function toArray(): array
    {
        return [
            'password' => $this->password,
            'username' => $this->username,
            'fingerprint' => $this->fingerprint,
            'mfa_cookie' => $this->mfaCookie,
        ];
    }
}

