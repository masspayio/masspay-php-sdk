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
 * @name Error403
 * Forbidden.
 */
/**
 * Error title.
 */
enum error403Title: string {
    case FORBIDDEN_ = "Forbidden.";
}
/**
 * Error description.
 */
enum error403Message: string {
    case THE_REQUESTED_ACTION_IS_NOT_ALLOWED_OR_THE_API_CREDENTIALS_DO_NOT_HAVE_SUFFICIENT_PERMISSIONS_PLEASE_ENSURE_THAT_THE_API_CREDENTIALS_USED_FOR_THE_REQUEST_HAVE_THE_NECESSARY_PERMISSIONS_TO_PERFORM_THE_REQUESTED_ACTION_ = "The requested action is not allowed or the API credentials do not have sufficient permissions. Please ensure that the API credentials used for the request have the necessary permissions to perform the requested action.";
}
/**
 * Error code.
 */
enum error403Code: int {
    case _403 = "403";
}
class Error403
{
    /**
     * @var error403Message $message Error description.
     */
    public error403Message $message;
    /**
     * @var error403Code $code Error code.
     */
    public error403Code $code;
    /**
     * @var error403Title $title Error title.
     */
    public ?error403Title $title;
    public function __construct(error403Message $message, error403Code $code, ?error403Title $title = null)
    {
        $this->message = $message;
        $this->code = $code;
        $this->title = $title;
    }
    public static function fromArray(array $data): self
    {
        return new Error403($data['message'], $data['code'], $data['title']);
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

