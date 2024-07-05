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
class Exception
{
    /**
     * @var string $exception Type of exception
     */
    public string $exception;
    /**
     * @var string[] $errors List of errors
     */
    public array
    $errors;
    public function __construct(string $exception, array
    $errors)
    {
        $this->exception = $exception;
        $this->errors = $errors;
    }
    public static function fromArray(array $data): self
    {
        return new Exception($data['Exception'], $data['Errors']);
    }
    public function toArray(): array
    {
        return [
            'Exception' => $this->exception,
            'Errors' => $this->errors,
        ];
    }
}

