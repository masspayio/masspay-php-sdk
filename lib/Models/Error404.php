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
 * @name Error404
 * Not found.
 */
/**
 * Error title.
 */
enum error404Title: string {
    case NOT_FOUND_ = "Not found.";
}
/**
 * Error description.
 */
enum error404Message: string {
    case THE_REQUESTED_RESOURCE_WAS_NOT_FOUND_PLEASE_ENSURE_THAT_THE_URL_FOR_THE_REQUEST_IS_CORRECT_AND_THAT_THE_REQUESTED_RESOURCE_EXISTS_ = "The requested resource was not found. Please ensure that the URL for the request is correct and that the requested resource exists.";
}
/**
 * Error code.
 */
enum error404Code: int {
    case _404 = "404";
}
class Error404
{
    /**
     * @var error404Message $message Error description.
     */
    public error404Message $message;
    /**
     * @var error404Code $code Error code.
     */
    public error404Code $code;
    /**
     * @var error404Title $title Error title.
     */
    public ?error404Title $title;
    public function __construct(error404Message $message, error404Code $code, ?error404Title $title = null)
    {
        $this->message = $message;
        $this->code = $code;
        $this->title = $title;
    }
    public static function fromArray(array $data): self
    {
        return new Error404($data['message'], $data['code'], $data['title']);
    }
    public function toArray(): array
    {
        return [
            'message' => $this->message,
            'code' => $this->code,
            'title' => $this->title,
        ];
    }
}

