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
 * @name Error500
 * Internal server error
 */
/**
 * Error title.
 */
enum error500Title: string {
    case INTERNAL_SERVER_ERROR_ = "Internal server error.";
}
/**
 * Error description.
 */
enum error500Message: string {
    case AN_UNEXPECTED_ERROR_OCCURRED_ON_THE_SERVER_SIDE_WHILE_PROCESSING_THE_REQUEST_PLEASE_TRY_AGAIN_LATER_OR_CONTACT_SUPPORT_IF_THE_ISSUE_PERSISTS_ = "An unexpected error occurred on the server-side while processing the request. Please try again later or contact support if the issue persists.";
}
/**
 * Error code.
 */
enum error500Code: int {
    case _500 = "500";
}
class Error500
{
    /**
     * @var error500Message $message Error description.
     */
    public error500Message $message;
    /**
     * @var error500Code $code Error code.
     */
    public error500Code $code;
    /**
     * @var error500Title $title Error title.
     */
    public ?error500Title $title;
    public function __construct(error500Message $message, error500Code $code, ?error500Title $title = null)
    {
        $this->message = $message;
        $this->code = $code;
        $this->title = $title;
    }
    public static function fromArray(array $data): self
    {
        return new Error500($data['message'], $data['code'], $data['title']);
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

