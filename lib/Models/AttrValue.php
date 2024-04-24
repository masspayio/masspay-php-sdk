<?php
/**
 * MassPay API
 *
 * The version of the OpenAPI document: 0.1.4
 * Contact: info@masspay.io
 *
 * NOTE: This file is auto generated.
 * Do not edit the file manually.
 */
namespace MasspaySdk\Models;
class AttrValue
{
    /**
     * @var string $token The token that represents the attribute that needs to be updated.
     */
    public string $token;
    /**
     * @var string $value The value that needs to be stored for the associated token
     */
    public string $value;
    public function __construct(string $token, string $value)
    {
        $this->token = $token;
        $this->value = $value;
    }
    public static function fromArray(array $data): self
    {
        return new AttrValue($data['token'], $data['value']);
    }
    public function toArray(): array
    {
        return [
            'token' => $this->token,
            'value' => $this->value,
        ];
    }
}

