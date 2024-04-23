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
/**
 * @name Error400
 * Bad request.
 */
/**
 * Error title.
 */
enum error400Title: string {
    case BAD_REQUEST_ = "Bad request.";
}
/**
 * Error description.
 */
enum error400Message: string {
    case THE_REQUEST_WAS_INVALID_OR_MALFORMED_PLEASE_ENSURE_THAT_THE_REQUEST_BODY_CONFORMS_TO_THE_REQUIRED_FORMAT_AND_THAT_ALL_REQUIRED_PARAMETERS_ARE_INCLUDED_ = "The request was invalid or malformed. Please ensure that the request body conforms to the required format and that all required parameters are included.";
}
/**
 * Error code.
 */
enum error400Code: int {
    case _400 = "400";
}
class Error400
{
    /**
     * @var error400Message $message Error description.
     */
    public error400Message $message;
    /**
     * @var error400Code $code Error code.
     */
    public error400Code $code;
    /**
     * @var error400Title $title Error title.
     */
    public ?error400Title $title;
    /**
     * @var array $error
     */
    public ?array $error;
    public function __construct(error400Message $message, error400Code $code, ?error400Title $title = null, ?array $error = null)
    {
        $this->message = $message;
        $this->code = $code;
        $this->title = $title;
        $this->error = $error;
    }
    public static function fromArray(array $data): self
    {
        return new Error400($data['message'], $data['code'], $data['title'], $data['error']);
    }
    public function toArray(): array
    {
        return [
            'message' => $this->message,
            'code' => $this->code,
            'title' => $this->title,
            'error' => $this->error,
        ];
    }
}

