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
 * @name TransactionHistory
 * TransactionHistory
 */
/**
 * Transaction status
 */
enum transactionHistoryStatus: string {
    case INITIATED = "INITIATED";
    case IN_PROGRESS = "IN_PROGRESS";
    case PENDING = "PENDING";
    case AUTHORIZED = "AUTHORIZED";
    case SETTLEMENT_REQUESTED = "SETTLEMENT_REQUESTED";
    case SETTLEMENT_COMPLETED = "SETTLEMENT_COMPLETED";
    case DECLINED = "DECLINED";
    case FAILED = "FAILED";
    case UNKNOWN = "UNKNOWN";
    case ABANDONED = "ABANDONED";
    case CANCELLED = "CANCELLED";
    case AUTHORIZATION_VOIDED = "AUTHORIZATION_VOIDED";
    case HPP_OPEN = "HPP_OPEN";
    case HPP_POST = "HPP_POST";
    case HPP_BCMC_OPEN = "HPP_BCMC_OPEN";
    case HPP_BCMC_POST = "HPP_BCMC_POST";
    case HPP_CARD_POST = "HPP_CARD_POST";
    case HPP_CARD_OPEN = "HPP_CARD_OPEN";
    case HPP_GIROPAY_OPEN = "HPP_GIROPAY_OPEN";
    case HPP_GIROPAY_POST = "HPP_GIROPAY_POST";
    case HPP_IDEAL_OPEN = "HPP_IDEAL_OPEN";
    case HPP_IDEAL_POST = "HPP_IDEAL_POST";
    case HPP_SEPA_OPEN = "HPP_SEPA_OPEN";
    case HPP_SEPA_POST = "HPP_SEPA_POST";
    case _3D_AUTHORIZED = "3D_AUTHORIZED";
    case _3D_AUTHORIZATION_FAILED = "3D_AUTHORIZATION_FAILED";
    case _3D_ENROLLED = "3D_ENROLLED";
    case _3D_ENROLLMENT_FAILED = "3D_ENROLLMENT_FAILED";
    case _3D_CHALLENGE_FAILED = "3D_CHALLENGE_FAILED";
}
class TransactionHistory
{
    /**
     * @var string $id Id
     */
    public ?string $id;
    /**
     * @var string $transaction Reference to the transaction this history belongs to
     */
    public ?string $transaction;
    /**
     * @var transactionHistoryStatus $status Transaction status
     */
    public ?transactionHistoryStatus $status;
    /**
     * @var string $statusReason Transaction status reason
     */
    public ?string $statusReason;
    /**
     * @var string $createdAt The date and time when the transaction history item was first created
     */
    public ?string $createdAt;
    /**
     * @var string $updatedAt The date and time when the transaction history item was last updated
     */
    public ?string $updatedAt;
    public function __construct(?string $id = null, ?string $transaction = null, ?transactionHistoryStatus $status = null, ?string $statusReason = null, ?string $createdAt = null, ?string $updatedAt = null)
    {
        $this->id = $id;
        $this->transaction = $transaction;
        $this->status = $status;
        $this->statusReason = $statusReason;
        $this->createdAt = $createdAt;
        $this->updatedAt = $updatedAt;
    }
    public static function fromArray(array $data): self
    {
        return new TransactionHistory($data['id'], $data['transaction'], $data['status'], $data['status_reason'], $data['created_at'], $data['updated_at']);
    }
    public function toArray(): array
    {
        return [
            'id' => $this->id,
            'transaction' => $this->transaction,
            'status' => $this->status,
            'status_reason' => $this->statusReason,
            'created_at' => $this->createdAt,
            'updated_at' => $this->updatedAt,
        ];
    }
}

