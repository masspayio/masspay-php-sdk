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
 * @name Error504
 * Gateway Time-out.
 */
/**
 * Error title.
 */
enum error504Title: string {
    case GATEWAY_TIME_OUT_ = "Gateway Time-out.";
}
/**
 * Error description.
 */
enum error504Message: string {
    case THE_REQUEST_TIMED_OUT_WHILE_WAITING_FOR_A_RESPONSE_FROM_THE_SERVER_PLEASE_TRY_AGAIN_LATER_OR_CONTACT_SUPPORT_IF_THE_ISSUE_PERSISTS_ = "The request timed out while waiting for a response from the server. Please try again later or contact support if the issue persists.";
}
/**
 * Error code.
 */
enum error504Code: int {
    case _500 = "500";
}
class Error504
{
    /**
     * @var error504Message $message Error description.
     */
    public error504Message $message;
    /**
     * @var error504Code $code Error code.
     */
    public error504Code $code;
    /**
     * @var error504Title $title Error title.
     */
    public ?error504Title $title;
    public function __construct(error504Message $message, error504Code $code, ?error504Title $title = null)
    {
        $this->message = $message;
        $this->code = $code;
        $this->title = $title;
    }
    public static function fromArray(array $data): self
    {
        return new Error504($data['message'], $data['code'], $data['title']);
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

