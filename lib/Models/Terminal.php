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
 * @name Terminal
 * Organisation
 */
/**
 * The status of the terminal
 */
enum terminalStatus: string {
    case ACTIVE = "ACTIVE";
    case INACTIVE = "INACTIVE";
}
class Terminal
{
    /**
     * @var string $organisation Reference to the organization this terminal belongs to
     */
    public ?string $organisation;
    /**
     * @var string $name The name of the terminal
     */
    public ?string $name;
    /**
     * @var string $model Terminal model
     */
    public ?string $model;
    /**
     * @var string $serialNumber Serial number
     */
    public ?string $serialNumber;
    /**
     * @var string $hardwareRevision Hardware revision
     */
    public ?string $hardwareRevision;
    /**
     * @var terminalStatus $status The status of the terminal
     */
    public ?terminalStatus $status;
    public function __construct(?string $organisation = null, ?string $name = null, ?string $model = null, ?string $serialNumber = null, ?string $hardwareRevision = null, ?terminalStatus $status = null)
    {
        $this->organisation = $organisation;
        $this->name = $name;
        $this->model = $model;
        $this->serialNumber = $serialNumber;
        $this->hardwareRevision = $hardwareRevision;
        $this->status = $status;
    }
    public static function fromArray(array $data): self
    {
        return new Terminal($data['organisation'], $data['name'], $data['model'], $data['serial_number'], $data['hardware_revision'], $data['status']);
    }
    public function toArray(): array
    {
        return [
            'organisation' => $this->organisation,
            'name' => $this->name,
            'model' => $this->model,
            'serial_number' => $this->serialNumber,
            'hardware_revision' => $this->hardwareRevision,
            'status' => $this->status,
        ];
    }
}

