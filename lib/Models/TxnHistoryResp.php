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
 * @name TxnHistoryResp
 * Record that represents a transaction
 */
/**
 * Type of transaction
 */
enum txnHistoryRespType: string {
    case LOAD = "load";
    case PAYOUT = "payout";
    case SPEND_BACK = "spend back";
    case INFO = "info";
}
/**
 * Status of the transaction
 */
enum txnHistoryRespStatus: string {
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
 * The type of service. I.e. cash pickup, home delivery, etc. Only provided for payouts
 */
enum txnHistoryRespDeliveryType: string {
    case CASH_PICKUP = "CASH_PICKUP";
    case BANK_DEPOSIT = "BANK_DEPOSIT";
    case HOME_DELIVERY = "HOME_DELIVERY";
    case MOBILE_WALLET = "MOBILE_WALLET";
    case MASSPAY_CARD = "MASSPAY_CARD";
    case PAPER_CHECK = "PAPER_CHECK";
    case BILL = "BILL";
    case CRYPTOCURRENCY = "CRYPTOCURRENCY";
}
class TxnHistoryResp
{
    /**
     * @var string $token Token represnting the transaction
     */
    public string $token;
    /**
     * @var txnHistoryRespType $type Type of transaction
     */
    public txnHistoryRespType $type;
    /**
     * @var string $timeOfTxn Time the transaction was created. In UTC
     */
    public string $timeOfTxn;
    /**
     * @var int $sourceAmount Source amount
     */
    public int $sourceAmount;
    /**
     * @var string $sourceCurrencyCode The currency originating balance is stored in. Using [ISO 4217](https://en.wikipedia.org/wiki/ISO_4217) format. In most cases this value will be USD, and therefore the defaut value if none is provided
     */
    public string $sourceCurrencyCode;
    /**
     * @var int $destinationAmount The amount that was received in `destination_currency_code`
     */
    public int $destinationAmount;
    /**
     * @var string $destinationCurrencyCode The currency of the funds received. Using [ISO 4217](https://en.wikipedia.org/wiki/ISO_4217) format
     */
    public string $destinationCurrencyCode;
    /**
     * @var int $fee Fee of the transaction
     */
    public int $fee;
    /**
     * @var txnHistoryRespStatus $status Status of the transaction
     */
    public txnHistoryRespStatus $status;
    /**
     * @var string $destinationToken Token that represents the payout destination i.e. MassPay->Brazil->Bank Deposit->Itau. To be retrieved from the #pricing callback. If not provided, the last destination that was used for this user will be used. 36 characters long
     */
    public string $destinationToken;
    /**
     * @var string $notes Notes of the transaction when load or spend back
     */
    public ?string $notes;
    /**
     * @var string $payerName Name of the payer when payout transaction
     */
    public ?string $payerName;
    /**
     * @var string $pickupCode Code/pin that is required when collecting the money when payout transaction
     */
    public ?string $pickupCode;
    /**
     * @var string $sourceToken Token that represents the funding source i.e. bank account, wallet. 36 characters long
     */
    public ?string $sourceToken;
    /**
     * @var txnHistoryRespDeliveryType $deliveryType The type of service. I.e. cash pickup, home delivery, etc. Only provided for payouts
     */
    public ?txnHistoryRespDeliveryType $deliveryType;
    /**
     * @var string $clientTransferId A client defined transfer identifier. This is the unique ID assigned to the transfer on your system. Max 50 characters.
     */
    public ?string $clientTransferId;
    /**
     * @var string $statusReason The reason for the status change. Usually would include reason for an ERROR or CANCEL status
     */
    public ?string $statusReason;
    /**
     * @var int $clientId Optional client id
     */
    public ?int $clientId;
    /**
     * @var string $userToken User token representing the user this transaction belongs to
     */
    public ?string $userToken;
    public function __construct(string $token, txnHistoryRespType $type, string $timeOfTxn, int $sourceAmount, string $sourceCurrencyCode, int $destinationAmount, string $destinationCurrencyCode, int $fee, txnHistoryRespStatus $status, string $destinationToken, ?string $notes = null, ?string $payerName = null, ?string $pickupCode = null, ?string $sourceToken = null, ?txnHistoryRespDeliveryType $deliveryType = null, ?string $clientTransferId = null, ?string $statusReason = null, ?int $clientId = null, ?string $userToken = null)
    {
        $this->token = $token;
        $this->type = $type;
        $this->timeOfTxn = $timeOfTxn;
        $this->sourceAmount = $sourceAmount;
        $this->sourceCurrencyCode = $sourceCurrencyCode;
        $this->destinationAmount = $destinationAmount;
        $this->destinationCurrencyCode = $destinationCurrencyCode;
        $this->fee = $fee;
        $this->status = $status;
        $this->destinationToken = $destinationToken;
        $this->notes = $notes;
        $this->payerName = $payerName;
        $this->pickupCode = $pickupCode;
        $this->sourceToken = $sourceToken;
        $this->deliveryType = $deliveryType;
        $this->clientTransferId = $clientTransferId;
        $this->statusReason = $statusReason;
        $this->clientId = $clientId;
        $this->userToken = $userToken;
    }
    public static function fromArray(array $data): self
    {
        return new TxnHistoryResp($data['token'], $data['type'], $data['time_of_txn'], $data['source_amount'], $data['source_currency_code'], $data['destination_amount'], $data['destination_currency_code'], $data['fee'], $data['status'], $data['destination_token'], $data['notes'], $data['payer_name'], $data['pickup_code'], $data['source_token'], $data['delivery_type'], $data['client_transfer_id'], $data['status_reason'], $data['client_id'], $data['user_token']);
    }
    public function toArray(): array
    {
        return [
            'token' => $this->token,
            'type' => $this->type,
            'time_of_txn' => $this->timeOfTxn,
            'source_amount' => $this->sourceAmount,
            'source_currency_code' => $this->sourceCurrencyCode,
            'destination_amount' => $this->destinationAmount,
            'destination_currency_code' => $this->destinationCurrencyCode,
            'fee' => $this->fee,
            'status' => $this->status,
            'destination_token' => $this->destinationToken,
            'notes' => $this->notes,
            'payer_name' => $this->payerName,
            'pickup_code' => $this->pickupCode,
            'source_token' => $this->sourceToken,
            'delivery_type' => $this->deliveryType,
            'client_transfer_id' => $this->clientTransferId,
            'status_reason' => $this->statusReason,
            'client_id' => $this->clientId,
            'user_token' => $this->userToken,
        ];
    }
}

