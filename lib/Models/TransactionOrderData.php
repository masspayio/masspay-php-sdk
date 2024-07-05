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
 * @name TransactionOrderData
 * Transaction - OrderData
 */
class TransactionOrderData
{
    /**
     * @var TransactionOrderDataProductLines $productLines Order lines for each product
     */
    public array
    $productLines;
    /**
     * @var TransactionOrderDataTotalLines $totalLines For shipping costs, discounts, VAT and totals
     */
    public array
    $totalLines;
    public function __construct(array
    $productLines, array
    $totalLines)
    {
        $this->productLines = $productLines;
        $this->totalLines = $totalLines;
    }
    public static function fromArray(array $data): self
    {
        return new TransactionOrderData($data['product_lines'], $data['total_lines']);
    }
    public function toArray(): array
    {
        return [
            'product_lines' => $this->productLines,
            'total_lines' => $this->totalLines,
        ];
    }
}

