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
class AutopayResp
{
    /**
     * @var string $token Autopay token
     */
    public string $token;
    /**
     * @var string $destinationToken The destination_token to autopay (send payout to)
     */
    public string $destinationToken;
    /**
     * @var int $percentage The percent of incoming load that should be autopaid to the destination_token
     */
    public int $percentage;
    /**
     * @var string $attrSetToken The token that represents a set of attributes for a specific payer. Optional, specify the value if you''re trying to update a value of a specific attributes set.
     */
    public ?string $attrSetToken;
    public function __construct(string $token, string $destinationToken, int $percentage, ?string $attrSetToken = null)
    {
        $this->token = $token;
        $this->destinationToken = $destinationToken;
        $this->percentage = $percentage;
        $this->attrSetToken = $attrSetToken;
    }
    public static function fromArray(array $data): self
    {
        return new AutopayResp($data['token'], $data['destination_token'], $data['percentage'], $data['attr_set_token']);
    }
    public function toArray(): array
    {
        return [
            'token' => $this->token,
            'destination_token' => $this->destinationToken,
            'percentage' => $this->percentage,
            'attr_set_token' => $this->attrSetToken,
        ];
    }
}

