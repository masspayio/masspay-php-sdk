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
class UserUpdatePassword
{
    /**
     * @var string $token The password update token
     */
    public string $token;
    /**
     * @var string $password The new user password
     */
    public string $password;
    public function __construct(string $token, string $password)
    {
        $this->token = $token;
        $this->password = $password;
    }
    public static function fromArray(array $data): self
    {
        return new UserUpdatePassword($data['token'], $data['password']);
    }
    public function toArray(): array
    {
        return [
            'token' => $this->token,
            'password' => $this->password,
        ];
    }
}

