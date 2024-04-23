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
enum kycSessionProvider: string {
    case VERIFF = "Veriff";
    case AU10TIX = "Au10tix";
}
enum kycSessionStatus: string {
    case STARTED = "Started";
    case SUBMITTED = "Submitted";
    case ABANDONED = "Abandoned";
    case EXPIRED = "Expired";
    case RESUBMITTED = "Resubmitted";
    case DECLINED = "Declined";
    case APPROVED = "Approved";
    case RESUBMISSION_REQUESTED = "Resubmission requested";
    case REVIEW = "Review";
}
class KycSession
{
    /**
     * @var kycSessionProvider $provider
     */
    public kycSessionProvider $provider;
    /**
     * @var string $sessionId
     */
    public string $sessionId;
    /**
     * @var string $sessionTime
     */
    public string $sessionTime;
    /**
     * @var kycSessionStatus $status
     */
    public kycSessionStatus $status;
    /**
     * @var array $resp
     */
    public ?array $resp;
    public function __construct(kycSessionProvider $provider, string $sessionId, string $sessionTime, kycSessionStatus $status, ?array $resp = null)
    {
        $this->provider = $provider;
        $this->sessionId = $sessionId;
        $this->sessionTime = $sessionTime;
        $this->status = $status;
        $this->resp = $resp;
    }
    public static function fromArray(array $data): self
    {
        return new KycSession($data['provider'], $data['session_id'], $data['session_time'], $data['status'], $data['resp']);
    }
    public function toArray(): array
    {
        return [
            'provider' => $this->provider,
            'session_id' => $this->sessionId,
            'session_time' => $this->sessionTime,
            'status' => $this->status,
            'resp' => $this->resp,
        ];
    }
}

