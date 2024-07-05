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
 * @name ValidationRuleset
 * ValidationRuleset
 */
/**
 * Action to take
 */
enum validationRulesetAction: string {
    case BLOCK = "block";
    case TAG = "tag";
    case _3D_SECURE = "3dSecure";
}
class ValidationRuleset
{
    /**
     * @var string $name The name of the Validation ruleset
     */
    public ?string $name;
    /**
     * @var validationRulesetAction $action Action to take
     */
    public ?validationRulesetAction $action;
    /**
     * @var string $tag Reference to the tag connected to this ruleset
     */
    public ?string $tag;
    /**
     * @var string $email The email address attached to the ruleset When set, tries to send an e-mail to the address whenever the rule gets triggered
     */
    public ?string $email;
    /**
     * @var string $webhookUrl The webhook URL attached to the ruleset When set, tries to send a webhook to the url whenever the rule gets triggered
     */
    public ?string $webhookUrl;
    public function __construct(?string $name = null, ?validationRulesetAction $action = null, ?string $tag = null, ?string $email = null, ?string $webhookUrl = null)
    {
        $this->name = $name;
        $this->action = $action;
        $this->tag = $tag;
        $this->email = $email;
        $this->webhookUrl = $webhookUrl;
    }
    public static function fromArray(array $data): self
    {
        return new ValidationRuleset($data['name'], $data['action'], $data['tag'], $data['email'], $data['webhook_url']);
    }
    public function toArray(): array
    {
        return [
            'name' => $this->name,
            'action' => $this->action,
            'tag' => $this->tag,
            'email' => $this->email,
            'webhook_url' => $this->webhookUrl,
        ];
    }
}

