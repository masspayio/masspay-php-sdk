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
 * @name BankAccount
 * BankAccount
 */
/**
 * The currency code associated to this bank account
 */
enum bankAccountCurrencyCode: string {
    case ALL = "ALL";
    case AMD = "AMD";
    case AUD = "AUD";
    case AZN = "AZN";
    case BAM = "BAM";
    case BGN = "BGN";
    case BYN = "BYN";
    case CAD = "CAD";
    case CHF = "CHF";
    case CZK = "CZK";
    case DKK = "DKK";
    case EUR = "EUR";
    case GBP = "GBP";
    case GEL = "GEL";
    case HUF = "HUF";
    case INR = "INR";
    case ISK = "ISK";
    case JPY = "JPY";
    case MDL = "MDL";
    case MKD = "MKD";
    case NOK = "NOK";
    case NZD = "NZD";
    case SAR = "SAR";
    case USD = "USD";
    case PHP = "PHP";
    case PLN = "PLN";
    case RON = "RON";
    case RUB = "RUB";
    case RSD = "RSD";
    case SEK = "SEK";
    case TRY = "TRY";
    case UAH = "UAH";
    case ZAR = "ZAR";
}
class BankAccount
{
    /**
     * @var string $bankAccountNumber Bank account number
     */
    public ?string $bankAccountNumber;
    /**
     * @var string $holderName Bank account holder name
     */
    public ?string $holderName;
    /**
     * @var string $description Description
     */
    public ?string $description;
    /**
     * @var string $bic Bank Identifier Code (BIC)
     */
    public ?string $bic;
    /**
     * @var bankAccountCurrencyCode $currencyCode The currency code associated to this bank account
     */
    public ?bankAccountCurrencyCode $currencyCode;
    public function __construct(?string $bankAccountNumber = null, ?string $holderName = null, ?string $description = null, ?string $bic = null, ?bankAccountCurrencyCode $currencyCode = null)
    {
        $this->bankAccountNumber = $bankAccountNumber;
        $this->holderName = $holderName;
        $this->description = $description;
        $this->bic = $bic;
        $this->currencyCode = $currencyCode;
    }
    public static function fromArray(array $data): self
    {
        return new BankAccount($data['bank_account_number'], $data['holder_name'], $data['description'], $data['bic'], $data['currency_code']);
    }
    public function toArray(): array
    {
        return [
            'bank_account_number' => $this->bankAccountNumber,
            'holder_name' => $this->holderName,
            'description' => $this->description,
            'bic' => $this->bic,
            'currency_code' => $this->currencyCode,
        ];
    }
}

