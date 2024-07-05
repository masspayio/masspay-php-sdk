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
class AttrTxn
{
    /**
     * @var AttrValue $values
     */
    public array
    $values;
    /**
     * @var string $attrSetToken The token that represents a set of attributes for a specific payer. Optional, specify the value if you're trying to update a value of a specific attributes set.
     */
    public ?string $attrSetToken;
    public function __construct(array
    $values, ?string $attrSetToken = null)
    {
        $this->values = $values;
        $this->attrSetToken = $attrSetToken;
    }
    public static function fromArray(array $data): self
    {
        return new AttrTxn($data['values'], $data['attr_set_token']);
    }
    public function toArray(): array
    {
        return [
            'values' => $this->values,
            'attr_set_token' => $this->attrSetToken,
        ];
    }
}

