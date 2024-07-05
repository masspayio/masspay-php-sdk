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
class UserForgotPassword
{
    /**
     * @var string $email The user's email address
     */
    public string $email;
    public function __construct(string $email)
    {
        $this->email = $email;
    }
    public static function fromArray(array $data): self
    {
        return new UserForgotPassword($data['email']);
    }
    public function toArray(): array
    {
        return [
            'email' => $this->email,
        ];
    }
}

