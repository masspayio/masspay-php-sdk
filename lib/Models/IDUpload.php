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
 * The type of image being uploaded
 */
enum idUploadType: string {
    case FACE = "face";
    case DOCUMENT_FRONT = "document-front";
    case DOCUMENT_BACK = "document-back";
}
class IdUpload
{
    /**
     * @var idUploadType $type The type of image being uploaded
     */
    public idUploadType $type;
    /**
     * @var string $content Base64 encoded image (png|jpg|jpeg). Maximum total images size is 10MB
     */
    public string $content;
    public function __construct(idUploadType $type, string $content)
    {
        $this->type = $type;
        $this->content = $content;
    }
    public static function fromArray(array $data): self
    {
        return new IdUpload($data['type'], $data['content']);
    }
    public function toArray(): array
    {
        return [
            'type' => $this->type,
            'content' => $this->content,
        ];
    }
}

