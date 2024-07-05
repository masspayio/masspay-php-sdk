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
 * @name FoundUser
 * Response object when a user is found
 */
class FoundUser
{
    /**
     * @var string $userToken The token of the found user
     */
    public string $userToken;
    /**
     * @var string $firstName First name of the user
     */
    public string $firstName;
    /**
     * @var string $lastName Last name of the user
     */
    public string $lastName;
    /**
     * @var string $internalUserId A client-defined identifier for the user. This is the unique ID assigned to the user on your system. Max 75 characters. Allows letters, numbers, and + , - . / _ ~ |
     */
    public string $internalUserId;
    public function __construct(string $userToken, string $firstName, string $lastName, string $internalUserId)
    {
        $this->userToken = $userToken;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->internalUserId = $internalUserId;
    }
    public static function fromArray(array $data): self
    {
        return new FoundUser($data['user_token'], $data['first_name'], $data['last_name'], $data['internal_user_id']);
    }
    public function toArray(): array
    {
        return [
            'user_token' => $this->userToken,
            'first_name' => $this->firstName,
            'last_name' => $this->lastName,
            'internal_user_id' => $this->internalUserId,
        ];
    }
}

