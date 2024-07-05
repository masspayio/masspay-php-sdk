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
 * Discount type
 */
enum transactionDetailDiscountType: string {
    case PERCENTAGE = "percentage";
    case FIXED_CENTS = "fixed_cents";
}
class TransactionDetailDiscount
{
    /**
     * @var string $id The ID of the subscription discount object
     */
    public ?string $id;
    /**
     * @var transactionDetailDiscountType $type Discount type
     */
    public ?transactionDetailDiscountType $type;
    /**
     * @var int $amount Discount amount, should be amount in cents without decimal place if type is equal to fixed_cents. If type is equal to percentage, then it's a range 0.0 - 1.0
     */
    public ?int $amount;
    /**
     * @var int $originalTransactionAmount Original transaction amount
     */
    public ?int $originalTransactionAmount;
    public function __construct(?string $id = null, ?transactionDetailDiscountType $type = null, ?int $amount = null, ?int $originalTransactionAmount = null)
    {
        $this->id = $id;
        $this->type = $type;
        $this->amount = $amount;
        $this->originalTransactionAmount = $originalTransactionAmount;
    }
    public static function fromArray(array $data): self
    {
        return new TransactionDetailDiscount($data['id'], $data['type'], $data['amount'], $data['original_transaction_amount']);
    }
    public function toArray(): array
    {
        return [
            'id' => $this->id,
            'type' => $this->type,
            'amount' => $this->amount,
            'original_transaction_amount' => $this->originalTransactionAmount,
        ];
    }
}

