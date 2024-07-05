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
 * @name Report
 * Report
 */
/**
 * Report export type
 */
enum reportExport: string {
    case CSV = "csv";
    case XLSX = "xlsx";
}
class Report
{
    /**
     * @var string $name The name of the report
     */
    public ?string $name;
    /**
     * @var reportFields[] $fields Array of fields
     */
    public ?array
    $fields;
    /**
     * @var string[] $organisations Array of organisations
     */
    public ?array
    $organisations;
    /**
     * @var ReportFilterRules $filter Report filter
     */
    public ?array
    $filter;
    /**
     * @var reportExport $export Report export type
     */
    public ?reportExport $export;
    public function __construct(?string $name = null, ?array
    $fields = null, ?array
    $organisations = null, ?array
    $filter = null, ?reportExport $export = null)
    {
        $this->name = $name;
        $this->fields = $fields;
        $this->organisations = $organisations;
        $this->filter = $filter;
        $this->export = $export;
    }
    public static function fromArray(array $data): self
    {
        return new Report($data['name'], $data['fields'], $data['organisations'], $data['filter'], $data['export']);
    }
    public function toArray(): array
    {
        return [
            'name' => $this->name,
            'fields' => $this->fields,
            'organisations' => $this->organisations,
            'filter' => $this->filter,
            'export' => $this->export,
        ];
    }
}

