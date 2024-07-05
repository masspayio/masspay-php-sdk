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
class TransactionDetailBancontact
{
    /**
     * @var string $bepUrl Trigger URL for mobile payment options in the form
     */
    public ?string $bepUrl;
    /**
     * @var string $bin BIN of the Bancontact card used (first six digits of the Bancontact card)
     */
    public ?string $bin;
    /**
     * @var string $lastFour Last four digits of the Bancontact card used
     */
    public ?string $lastFour;
    /**
     * @var string $token Unique token representing the Bancontact card
     */
    public ?string $token;
    /**
     * @var string $transactionflow Payment flow of the last attempt, if any. Either ecommerce (card number entry and 3D-Secure), qrcode (payment app triggered through QR code) or urlintent (payment app triggered through URL intent)
     */
    public ?string $transactionflow;
    public function __construct(?string $bepUrl = null, ?string $bin = null, ?string $lastFour = null, ?string $token = null, ?string $transactionflow = null)
    {
        $this->bepUrl = $bepUrl;
        $this->bin = $bin;
        $this->lastFour = $lastFour;
        $this->token = $token;
        $this->transactionflow = $transactionflow;
    }
    public static function fromArray(array $data): self
    {
        return new TransactionDetailBancontact($data['bep_url'], $data['bin'], $data['last_four'], $data['token'], $data['transactionflow']);
    }
    public function toArray(): array
    {
        return [
            'bep_url' => $this->bepUrl,
            'bin' => $this->bin,
            'last_four' => $this->lastFour,
            'token' => $this->token,
            'transactionflow' => $this->transactionflow,
        ];
    }
}

