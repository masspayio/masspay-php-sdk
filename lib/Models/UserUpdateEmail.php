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
class UserUpdateEmail
{
    /**
     * @var string $token The email update token
     */
    public string $token;
    /**
     * @var string $email The new user email address
     */
    public string $email;
    public function __construct(string $token, string $email)
    {
        $this->token = $token;
        $this->email = $email;
    }
    public static function fromArray(array $data): self
    {
        return new UserUpdateEmail($data['token'], $data['email']);
    }
    public function toArray(): array
    {
        return [
            'token' => $this->token,
            'email' => $this->email,
        ];
    }
}

