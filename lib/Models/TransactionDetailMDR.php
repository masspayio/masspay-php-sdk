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
 * Card type
 */
enum transactionDetailMdrType: string {
    case EMPTY = "";
    case PREPAID = "prepaid";
    case DEBIT = "debit";
    case CREDIT = "credit";
    case COMMERCIAL = "commercial";
}
/**
 * Card region
 */
enum transactionDetailMdrRegion: string {
    case EMPTY = "";
    case DOMESTIC = "domestic";
    case INTRA = "intra";
    case INTER = "inter";
}
class TransactionDetailMdr
{
    /**
     * @var transactionDetailMdrType $type Card type
     */
    public ?transactionDetailMdrType $type;
    /**
     * @var transactionDetailMdrRegion $region Card region
     */
    public ?transactionDetailMdrRegion $region;
    public function __construct(?transactionDetailMdrType $type = null, ?transactionDetailMdrRegion $region = null)
    {
        $this->type = $type;
        $this->region = $region;
    }
    public static function fromArray(array $data): self
    {
        return new TransactionDetailMdr($data['type'], $data['region']);
    }
    public function toArray(): array
    {
        return [
            'type' => $this->type,
            'region' => $this->region,
        ];
    }
}

