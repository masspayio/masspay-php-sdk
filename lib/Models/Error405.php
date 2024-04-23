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
 * @name Error405
 * Method not allowed.
 */
/**
 * Error title.
 */
enum error405Title: string {
    case METHOD_NOT_ALLOWED_ = "Method not allowed.";
}
/**
 * Error description.
 */
enum error405Message: string {
    case THE_HTTP_METHOD_USED_FOR_THE_REQUEST_IS_NOT_SUPPORTED_BY_THE_MASS_PAY_API_PLEASE_ENSURE_THAT_YOU_ARE_USING_THE_CORRECT_HTTP_METHOD_E_G_POST_FOR_THE_SPECIFIC_MASS_PAY_API_ENDPOINT_ = "The HTTP method used for the request is not supported by the MassPay API. Please ensure that you are using the correct HTTP method (e.g., POST) for the specific MassPay API endpoint.";
}
/**
 * Error code.
 */
enum error405Code: int {
    case _405 = "405";
}
class Error405
{
    /**
     * @var error405Message $message Error description.
     */
    public error405Message $message;
    /**
     * @var error405Code $code Error code.
     */
    public error405Code $code;
    /**
     * @var error405Title $title Error title.
     */
    public ?error405Title $title;
    public function __construct(error405Message $message, error405Code $code, ?error405Title $title = null)
    {
        $this->message = $message;
        $this->code = $code;
        $this->title = $title;
    }
    public static function fromArray(array $data): self
    {
        return new Error405($data['message'], $data['code'], $data['title']);
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

