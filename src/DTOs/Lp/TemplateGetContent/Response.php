<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs\Lp\TemplateGetContent;

final class Response extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'content',
    'enableMunchkin',
    'id',
    'status',
    'templateType',
];

    protected const array VALIDATION = [
    'id' => [
        'format' => 'int32',
    ],
];

    /**
     * HTML content of the landing page template
     */
    public string $content;
    /**
     * Whether to enable munchkin on the derived pages. Defaults to true
     */
    public bool $enableMunchkin;
    /**
     * Unique integer id of the template
     * Format: int32
     */
    public int $id {
        set {
            $this->assigning('id', $value);
            $this->id = $value;
        }
    }
    /**
     * Status filter for draft or approved versions
     */
    public \MarketoSDK\Enums\Lp\TemplateGetContent\Response\StatusEnum $status;
    /**
     * Type of template to create. Defaults to freeForm
     */
    public \MarketoSDK\Enums\Lp\TemplateGetContent\Response\TemplateTypeEnum $templateType;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'content' => is_string($value) ? $this->content = $value : parent::assignMember($name, $value),
            'enableMunchkin' => is_bool($value) ? $this->enableMunchkin = $value : parent::assignMember($name, $value),
            'id' => is_int($value) ? $this->id = $value : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = \MarketoSDK\Enums\Lp\TemplateGetContent\Response\StatusEnum::from($value) : parent::assignMember($name, $value),
            'templateType' => is_string($value) ? $this->templateType = \MarketoSDK\Enums\Lp\TemplateGetContent\Response\TemplateTypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
