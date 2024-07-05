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
class TransactionDetailSender
{
    /**
     * @var string $accountNumber Account number
     */
    public ?string $accountNumber;
    /**
     * @var string $accountHolder Account holder
     */
    public ?string $accountHolder;
    /**
     * @var string $bankCode Bank code
     */
    public ?string $bankCode;
    /**
     * @var string $bankName Bank name
     */
    public ?string $bankName;
    /**
     * @var string $bic Business Identifier Code
     */
    public ?string $bic;
    /**
     * @var string $countryCode Two-character country code, formatted according to ISO-3166-1 alpha-2.
     */
    public ?string $countryCode;
    /**
     * @var string $iban International Bank Account Number
     */
    public ?string $iban;
    public function __construct(?string $accountNumber = null, ?string $accountHolder = null, ?string $bankCode = null, ?string $bankName = null, ?string $bic = null, ?string $countryCode = null, ?string $iban = null)
    {
        $this->accountNumber = $accountNumber;
        $this->accountHolder = $accountHolder;
        $this->bankCode = $bankCode;
        $this->bankName = $bankName;
        $this->bic = $bic;
        $this->countryCode = $countryCode;
        $this->iban = $iban;
    }
    public static function fromArray(array $data): self
    {
        return new TransactionDetailSender($data['account_number'], $data['account_holder'], $data['bank_code'], $data['bank_name'], $data['bic'], $data['country_code'], $data['iban']);
    }
    public function toArray(): array
    {
        return [
            'account_number' => $this->accountNumber,
            'account_holder' => $this->accountHolder,
            'bank_code' => $this->bankCode,
            'bank_name' => $this->bankName,
            'bic' => $this->bic,
            'country_code' => $this->countryCode,
            'iban' => $this->iban,
        ];
    }
}

