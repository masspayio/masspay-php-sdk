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
 * @name TransactionOrderDataProductLines
 * Transaction - OrderData - Product lines
 */
/**
 * If physical item: tangible, if any other product: non_tangible
 */
enum transactionOrderDataProductLinesType: string {
    case TANGIBLE = "tangible";
    case NON_TANGIBLE = "non_tangible";
}
class TransactionOrderDataProductLines
{
    /**
     * @var string $id Product id
     */
    public string $id;
    /**
     * @var string $name Product name
     */
    public string $name;
    /**
     * @var int $quantity Quantity
     */
    public int $quantity;
    /**
     * @var int $price The price of one product excluding VAT, without a decimal place.
     */
    public int $price;
    /**
     * @var int $priceIncl The price of one product including VAT, without a decimal place.
     */
    public int $priceIncl;
    /**
     * @var int $vatPercentage The VAT percentage, represented in minor units.
     */
    public int $vatPercentage;
    /**
     * @var transactionOrderDataProductLinesType $type If physical item: tangible, if any other product: non_tangible
     */
    public ?transactionOrderDataProductLinesType $type;
    /**
     * @var string $category Category this product is part of
     */
    public ?string $category;
    /**
     * @var string $description A text description of the product the invoice line refers to
     */
    public ?string $description;
    /**
     * @var string $upc Universal Product Code
     */
    public ?string $upc;
    /**
     * @var string $sku Stock Keeping Unit
     */
    public ?string $sku;
    public function __construct(string $id, string $name, int $quantity, int $price, int $priceIncl, int $vatPercentage, ?transactionOrderDataProductLinesType $type = null, ?string $category = null, ?string $description = null, ?string $upc = null, ?string $sku = null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->quantity = $quantity;
        $this->price = $price;
        $this->priceIncl = $priceIncl;
        $this->vatPercentage = $vatPercentage;
        $this->type = $type;
        $this->category = $category;
        $this->description = $description;
        $this->upc = $upc;
        $this->sku = $sku;
    }
    public static function fromArray(array $data): self
    {
        return new TransactionOrderDataProductLines($data['id'], $data['name'], $data['quantity'], $data['price'], $data['price_incl'], $data['vat_percentage'], $data['type'], $data['category'], $data['description'], $data['upc'], $data['sku']);
    }
    public function toArray(): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'quantity' => $this->quantity,
            'price' => $this->price,
            'price_incl' => $this->priceIncl,
            'vat_percentage' => $this->vatPercentage,
            'type' => $this->type,
            'category' => $this->category,
            'description' => $this->description,
            'upc' => $this->upc,
            'sku' => $this->sku,
        ];
    }
}

