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
 * Status that indicates whether the transaction was successfully processed. If `success`, everything was processed correctly. `failure` indicates a generic error.
 */
enum spendBackTxnRespStatus: string {
    case SUCCESS = "success";
    case FAILURE = "failure";
}
class SpendBackTxnResp
{
    /**
     * @var string $spendbackToken Token that represents the spend back that was just created.
     */
    public string $spendbackToken;
    /**
     * @var string $clientSpendbackId A client defined spend back identifier. This is the unique ID assigned to the load on your system. Max 50 characters.
     */
    public string $clientSpendbackId;
    /**
     * @var spendBackTxnRespStatus $status Status that indicates whether the transaction was successfully processed. If `success`, everything was processed correctly. `failure` indicates a generic error.
     */
    public spendBackTxnRespStatus $status;
    public function __construct(string $spendbackToken, string $clientSpendbackId, spendBackTxnRespStatus $status)
    {
        $this->spendbackToken = $spendbackToken;
        $this->clientSpendbackId = $clientSpendbackId;
        $this->status = $status;
    }
    public static function fromArray(array $data): self
    {
        return new SpendBackTxnResp($data['spendback_token'], $data['client_spendback_id'], $data['status']);
    }
    public function toArray(): array
    {
        return [
            'spendback_token' => $this->spendbackToken,
            'client_spendback_id' => $this->clientSpendbackId,
            'status' => $this->status,
        ];
    }
}

