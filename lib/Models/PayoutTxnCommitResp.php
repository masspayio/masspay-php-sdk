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
 * Status that indicates whether the transaction was successfully processed. If `success`, everything was processed correctly. `failure` indicates a generic error. `addtl_attr_req` indicates that in order to process this transaction, additional attributes are required to be updated for this customer. `ex_rate_expired` indicates that the transaction exchange rate has expired and a new transaction has to be created.
 */
enum payoutTxnCommitRespStatus: string {
    case SUCCESS = "success";
    case FAILURE = "failure";
    case ADDTL_ATTR_REQ = "addtl_attr_req";
    case EX_RATE_EXPIRED = "ex_rate_expired";
    case NSF = "nsf";
}
class PayoutTxnCommitResp
{
    /**
     * @var string $payoutToken Token that represents the transaction that was just created.
     */
    public string $payoutToken;
    /**
     * @var payoutTxnCommitRespStatus $status Status that indicates whether the transaction was successfully processed. If `success`, everything was processed correctly. `failure` indicates a generic error. `addtl_attr_req` indicates that in order to process this transaction, additional attributes are required to be updated for this customer. `ex_rate_expired` indicates that the transaction exchange rate has expired and a new transaction has to be created.
     */
    public payoutTxnCommitRespStatus $status;
    /**
     * @var string $pickupCode Code/pin that is required when collecting the money. Should be provided to the recipient to present to payout location.
     */
    public ?string $pickupCode;
    /**
     * @var string $errors Description of errors preventing transfer from being injected.
     */
    public ?string $errors;
    public function __construct(string $payoutToken, payoutTxnCommitRespStatus $status, ?string $pickupCode = null, ?string $errors = null)
    {
        $this->payoutToken = $payoutToken;
        $this->status = $status;
        $this->pickupCode = $pickupCode;
        $this->errors = $errors;
    }
    public static function fromArray(array $data): self
    {
        return new PayoutTxnCommitResp($data['payout_token'], $data['status'], $data['pickup_code'], $data['errors']);
    }
    public function toArray(): array
    {
        return [
            'payout_token' => $this->payoutToken,
            'status' => $this->status,
            'pickup_code' => $this->pickupCode,
            'errors' => $this->errors,
        ];
    }
}

