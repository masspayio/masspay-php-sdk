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
 * Middleware type
 */
enum middlewareGetType: string {
    case FRAUD = "fraud";
    case THREEDS = "threeds";
}
/**
 * Provider used
 */
enum middlewareGetProvider: string {
    case ENDEAVOUR = "endeavour";
    case FORTER = "forter";
    case SIFT = "sift";
}
class MiddlewareGet
{
    /**
     * @var string $id The ID of the middleware object
     */
    public ?string $id;
    /**
     * @var string $name Name of the middleware
     */
    public ?string $name;
    /**
     * @var middlewareGetType $type Middleware type
     */
    public ?middlewareGetType $type;
    /**
     * @var middlewareGetProvider $provider Provider used
     */
    public ?middlewareGetProvider $provider;
    public function __construct(?string $id = null, ?string $name = null, ?middlewareGetType $type = null, ?middlewareGetProvider $provider = null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->type = $type;
        $this->provider = $provider;
    }
    public static function fromArray(array $data): self
    {
        return new MiddlewareGet($data['id'], $data['name'], $data['type'], $data['provider']);
    }
    public function toArray(): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'type' => $this->type,
            'provider' => $this->provider,
        ];
    }
}

