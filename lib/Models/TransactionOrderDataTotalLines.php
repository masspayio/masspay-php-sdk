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
 * @name TransactionOrderDataTotalLines
 * Transaction - OrderData - Total lines
 */
class TransactionOrderDataTotalLines
{
    /**
     * @var string $name Name of total line
     */
    public string $name;
    /**
     * @var string $type Type of total line. E.g. shipping/discount/vat/total/other
     */
    public string $type;
    /**
     * @var int $value Value of total line
     */
    public int $value;
    public function __construct(string $name, string $type, int $value)
    {
        $this->name = $name;
        $this->type = $type;
        $this->value = $value;
    }
    public static function fromArray(array $data): self
    {
        return new TransactionOrderDataTotalLines($data['name'], $data['type'], $data['value']);
    }
    public function toArray(): array
    {
        return [
            'name' => $this->name,
            'type' => $this->type,
            'value' => $this->value,
        ];
    }
}

