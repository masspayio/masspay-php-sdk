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
/**
 * The status of the transaction
 */
enum payoutTxnRespStatus: string {
    case PENDING = "PENDING";
    case PROCESSING = "PROCESSING";
    case COMPLETED = "COMPLETED";
    case CANCELLED = "CANCELLED";
    case SCHEDULED = "SCHEDULED";
    case READY_FOR_PICKUP = "READY_FOR_PICKUP";
    case HOLD = "HOLD";
    case ERROR = "ERROR";
}
/**
 * The type of delivery
 */
enum payoutTxnRespDeliveryType: string {
    case CASH_PICKUP = "CASH_PICKUP";
    case BANK_DEPOSIT = "BANK_DEPOSIT";
    case HOME_DELIVERY = "HOME_DELIVERY";
    case MOBILE_WALLET = "MOBILE_WALLET";
    case MASSPAY_CARD = "MASSPAY_CARD";
    case PAPER_CHECK = "PAPER_CHECK";
    case BILL = "BILL";
    case CRYPTOCURRENCY = "CRYPTOCURRENCY";
}
class PayoutTxnResp
{
    /**
     * @var string $payoutToken Token that represents the transaction that was just created. Need to be used to commit the transaction in `/payout/{user_token}/{payout_token}`. Value would be NSF if there are not enough funds in the `source_token`. Value would be `DUPLICATE` if there is a duplicate `client_transfer_id`.
     */
    public string $payoutToken;
    /**
     * @var string $clientTransferId A client defined transfer identifier. This is the unique ID assigned to the transfer on your system. Max 50 characters.
     */
    public string $clientTransferId;
    /**
     * @var string $sourceCurrencyCode The currency originating balance is stored in. Using [ISO 4217](https://en.wikipedia.org/wiki/ISO_4217) format. In most cases this value will be USD, and therefore the defaut value if none is provided
     */
    public string $sourceCurrencyCode;
    /**
     * @var string $destinationCurrencyCode The currency the funds will be deposited into. Using [ISO 4217](https://en.wikipedia.org/wiki/ISO_4217) format
     */
    public string $destinationCurrencyCode;
    /**
     * @var string $sourceToken Token that represents the funding source i.e. your bank account, user's wallet. 36 characters long
     */
    public string $sourceToken;
    /**
     * @var string $destinationToken Token that represents the payout destination i.e. Omnex->Brazil->Bank Deposit->Itau. To be retrieved from the #pricing callback. If not provided, the last destination that was used for this user will be used. 36 characters long
     */
    public string $destinationToken;
    /**
     * @var int $destinationAmount The amount to be sent for payout in source currency. i.e USD. Must be provided if source_amount is empty
     */
    public int $destinationAmount;
    /**
     * @var int $sourceAmount The amount to be received by the payout in source currency. i.e USD. Must be provided if destination_amount is empty
     */
    public int $sourceAmount;
    /**
     * @var string $attrSetToken Token that represents set of attributes that associated with destination_token. For example, bank account, mobile account, wallet id, etc. If not provided, uses the last one used. 36 characters long
     */
    public string $attrSetToken;
    /**
     * @var int $exchangeRate The exchange rate to convert source_amount to destination_amount
     */
    public int $exchangeRate;
    /**
     * @var int $fee Fee to be charged for the transaction
     */
    public int $fee;
    /**
     * @var string $expiration The time and date at which the transaction will expire. The transaction has to be finalized before this time. Transactions are valid for 2 minutes from creation time. If expired, a new transaction has to be created.
     */
    public string $expiration;
    /**
     * @var string $pickupCode Code/pin that is required when collecting the money. Should be provided to the recipient to present to payout location.
     */
    public string $pickupCode;
    /**
     * @var payoutTxnRespStatus $status The status of the transaction
     */
    public payoutTxnRespStatus $status;
    /**
     * @var string $payerName Name of payer
     */
    public string $payerName;
    /**
     * @var payoutTxnRespDeliveryType $deliveryType The type of delivery
     */
    public payoutTxnRespDeliveryType $deliveryType;
    /**
     * @var string $countryCode Country code [ISO_3166](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-3)
     */
    public string $countryCode;
    /**
     * @var string $estimatedAvailability Estimated availability of funds. When funds would be available to pickup/deposited
     */
    public string $estimatedAvailability;
    /**
     * @var string $payerLogo base64 representation of the payer logo
     */
    public ?string $payerLogo;
    /**
     * @var array $metadata Optional JSON object with attributes that can later be searched to locate this payout. Do not include PII as this object is not encrypted.
     */
    public ?array $metadata;
    /**
     * @var string $statusReason Optional. Contains the reason for the status change. Most commonly used for CANCELLED status with the reason for cancellation
     */
    public ?string $statusReason;
    /**
     * @var array $attrs The relevant attributes that were used to fulfill this payout
     */
    public ?array $attrs;
    public function __construct(string $payoutToken, string $clientTransferId, string $sourceCurrencyCode, string $destinationCurrencyCode, string $sourceToken, string $destinationToken, int $destinationAmount, int $sourceAmount, string $attrSetToken, int $exchangeRate, int $fee, string $expiration, string $pickupCode, payoutTxnRespStatus $status, string $payerName, payoutTxnRespDeliveryType $deliveryType, string $countryCode, string $estimatedAvailability, ?string $payerLogo = null, ?array $metadata = null, ?string $statusReason = null, ?array $attrs = null)
    {
        $this->payoutToken = $payoutToken;
        $this->clientTransferId = $clientTransferId;
        $this->sourceCurrencyCode = $sourceCurrencyCode;
        $this->destinationCurrencyCode = $destinationCurrencyCode;
        $this->sourceToken = $sourceToken;
        $this->destinationToken = $destinationToken;
        $this->destinationAmount = $destinationAmount;
        $this->sourceAmount = $sourceAmount;
        $this->attrSetToken = $attrSetToken;
        $this->exchangeRate = $exchangeRate;
        $this->fee = $fee;
        $this->expiration = $expiration;
        $this->pickupCode = $pickupCode;
        $this->status = $status;
        $this->payerName = $payerName;
        $this->deliveryType = $deliveryType;
        $this->countryCode = $countryCode;
        $this->estimatedAvailability = $estimatedAvailability;
        $this->payerLogo = $payerLogo;
        $this->metadata = $metadata;
        $this->statusReason = $statusReason;
        $this->attrs = $attrs;
    }
    public static function fromArray(array $data): self
    {
        return new PayoutTxnResp($data['payout_token'], $data['client_transfer_id'], $data['source_currency_code'], $data['destination_currency_code'], $data['source_token'], $data['destination_token'], $data['destination_amount'], $data['source_amount'], $data['attr_set_token'], $data['exchange_rate'], $data['fee'], $data['expiration'], $data['pickup_code'], $data['status'], $data['payer_name'], $data['delivery_type'], $data['country_code'], $data['estimated_availability'], $data['payer_logo'], $data['metadata'], $data['status_reason'], $data['attrs']);
    }
    public function toArray(): array
    {
        return [
            'payout_token' => $this->payoutToken,
            'client_transfer_id' => $this->clientTransferId,
            'source_currency_code' => $this->sourceCurrencyCode,
            'destination_currency_code' => $this->destinationCurrencyCode,
            'source_token' => $this->sourceToken,
            'destination_token' => $this->destinationToken,
            'destination_amount' => $this->destinationAmount,
            'source_amount' => $this->sourceAmount,
            'attr_set_token' => $this->attrSetToken,
            'exchange_rate' => $this->exchangeRate,
            'fee' => $this->fee,
            'expiration' => $this->expiration,
            'pickup_code' => $this->pickupCode,
            'status' => $this->status,
            'payer_name' => $this->payerName,
            'delivery_type' => $this->deliveryType,
            'country_code' => $this->countryCode,
            'estimated_availability' => $this->estimatedAvailability,
            'payer_logo' => $this->payerLogo,
            'metadata' => $this->metadata,
            'status_reason' => $this->statusReason,
            'attrs' => $this->attrs,
        ];
    }
}

