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
 * @name RoutingDetails
 * Routing - Details
 */
class RoutingDetails
{
    /**
     * @var RoutingDetailsIfRule $if If
     */
    public array
    $if;
    /**
     * @var (routingDetails | processorId) $then New if-then-else or processor Id
     */
    public routingDetails | processorId $then;
    /**
     * @var (routingDetails | processorId) $else New if-then-else or processor Id
     */
    public routingDetails | processorId $else;
    public function __construct(array
    $if, routingDetails | processorId $then, routingDetails | processorId $else)
    {
        $this->if = $if;
        $this->then = $then;
        $this->else = $else;
    }
    public static function fromArray(array $data): self
    {
        return new RoutingDetails($data['if'], $data['then'], $data['else']);
    }
    public function toArray(): array
    {
        return [
            'if' => $this->if,
            'then' => $this->then,
            'else' => $this->else,
        ];
    }
}

