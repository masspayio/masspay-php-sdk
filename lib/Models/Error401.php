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
 * @name Error401
 * Unauthorized.
 */
/**
 * Error title.
 */
enum error401Title: string {
    case UNAUTHORIZED_ = "Unauthorized.";
}
/**
 * Error description.
 */
enum error401Message: string {
    case AUTHENTICATION_FAILED_OR_CREDENTIALS_WERE_NOT_PROVIDED_PLEASE_ENSURE_THAT_YOU_HAVE_PROVIDED_VALID_API_CREDENTIALS_AND_THAT_THEY_ARE_AUTHORIZED_TO_ACCESS_THE_MASS_PAY_API_ = "Authentication failed or credentials were not provided. Please ensure that you have provided valid API credentials and that they are authorized to access the MassPay API.";
}
/**
 * Error code.
 */
enum error401Code: int {
    case _401 = "401";
}
class Error401
{
    /**
     * @var error401Message $message Error description.
     */
    public error401Message $message;
    /**
     * @var error401Code $code Error code.
     */
    public error401Code $code;
    /**
     * @var error401Title $title Error title.
     */
    public ?error401Title $title;
    public function __construct(error401Message $message, error401Code $code, ?error401Title $title = null)
    {
        $this->message = $message;
        $this->code = $code;
        $this->title = $title;
    }
    public static function fromArray(array $data): self
    {
        return new Error401($data['message'], $data['code'], $data['title']);
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

