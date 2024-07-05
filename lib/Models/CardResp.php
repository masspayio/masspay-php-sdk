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
 * @name CardResp
 * MassPay Card Information
 */
/**
 * Card type
 */
enum cardRespType: string {
    case VISA = "VISA";
    case MASTERCARD = "MASTERCARD";
    case DISCOVER = "DISCOVER";
    case AMEX = "AMEX";
    case UNIONPAY = "UNIONPAY";
}
/**
 * Status of the card
 */
enum cardRespStatus: string {
    case ACTIVE = "ACTIVE";
    case INACTIVE = "INACTIVE";
    case CLOSED = "CLOSED";
}
class CardResp
{
    /**
     * @var string $cardNumber 16 Digits card number
     */
    public string $cardNumber;
    /**
     * @var string $cvv 3 Digits cvv code
     */
    public string $cvv;
    /**
     * @var string $expirationDate Card expiration date
     */
    public string $expirationDate;
    /**
     * @var string $pinNumber Card pin number (used in ATM machines)
     */
    public string $pinNumber;
    /**
     * @var int $balance Available balance on the card
     */
    public int $balance;
    /**
     * @var cardRespType $type Card type
     */
    public cardRespType $type;
    /**
     * @var cardRespStatus $status Status of the card
     */
    public cardRespStatus $status;
    public function __construct(string $cardNumber, string $cvv, string $expirationDate, string $pinNumber, int $balance, cardRespType $type, cardRespStatus $status)
    {
        $this->cardNumber = $cardNumber;
        $this->cvv = $cvv;
        $this->expirationDate = $expirationDate;
        $this->pinNumber = $pinNumber;
        $this->balance = $balance;
        $this->type = $type;
        $this->status = $status;
    }
    public static function fromArray(array $data): self
    {
        return new CardResp($data['card_number'], $data['cvv'], $data['expiration_date'], $data['pin_number'], $data['balance'], $data['type'], $data['status']);
    }
    public function toArray(): array
    {
        return [
            'card_number' => $this->cardNumber,
            'cvv' => $this->cvv,
            'expiration_date' => $this->expirationDate,
            'pin_number' => $this->pinNumber,
            'balance' => $this->balance,
            'type' => $this->type,
            'status' => $this->status,
        ];
    }
}

