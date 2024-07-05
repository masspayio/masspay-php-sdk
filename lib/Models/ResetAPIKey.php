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
class ResetApiKey
{
    /**
     * @var string $apikey API Key
     */
    public ?string $apikey;
    public function __construct(?string $apikey = null)
    {
        $this->apikey = $apikey;
    }
    public static function fromArray(array $data): self
    {
        return new ResetApiKey($data['apikey']);
    }
    public function toArray(): array
    {
        return [
            'apikey' => $this->apikey,
        ];
    }
}

