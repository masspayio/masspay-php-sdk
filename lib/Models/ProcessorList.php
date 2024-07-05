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
class ProcessorList
{
    /**
     * @var string $id Processor Id
     */
    public ?string $id;
    /**
     * @var string $name Name of the processor
     */
    public ?string $name;
    /**
     * @var string $paymentProduct Type of payment method this processor is used for
     */
    public ?string $paymentProduct;
    /**
     * @var string $gateway Payment gateway used
     */
    public ?string $gateway;
    public function __construct(?string $id = null, ?string $name = null, ?string $paymentProduct = null, ?string $gateway = null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->paymentProduct = $paymentProduct;
        $this->gateway = $gateway;
    }
    public static function fromArray(array $data): self
    {
        return new ProcessorList($data['id'], $data['name'], $data['payment_product'], $data['gateway']);
    }
    public function toArray(): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'payment_product' => $this->paymentProduct,
            'gateway' => $this->gateway,
        ];
    }
}

