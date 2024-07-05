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
 * Status that indicates whether the transaction was successfully processed. If `COMPLETED`, the load was successfully processed. `CANCELLED` indicates a generic error. and `SCHEDULED` means the load was successfully scheduled
 */
enum loadTxnRespStatus: string {
    case COMPLETED = "COMPLETED";
    case CANCELLED = "CANCELLED";
    case SCHEDULED = "SCHEDULED";
}
class LoadTxnResp
{
    /**
     * @var string $loadToken Token that represents the load that was just created.
     */
    public string $loadToken;
    /**
     * @var loadTxnRespStatus $status Status that indicates whether the transaction was successfully processed. If `COMPLETED`, the load was successfully processed. `CANCELLED` indicates a generic error. and `SCHEDULED` means the load was successfully scheduled
     */
    public loadTxnRespStatus $status;
    /**
     * @var string $walletToken The wallet token the load was deposited into
     */
    public string $walletToken;
    public function __construct(string $loadToken, loadTxnRespStatus $status, string $walletToken)
    {
        $this->loadToken = $loadToken;
        $this->status = $status;
        $this->walletToken = $walletToken;
    }
    public static function fromArray(array $data): self
    {
        return new LoadTxnResp($data['load_token'], $data['status'], $data['wallet_token']);
    }
    public function toArray(): array
    {
        return [
            'load_token' => $this->loadToken,
            'status' => $this->status,
            'wallet_token' => $this->walletToken,
        ];
    }
}

