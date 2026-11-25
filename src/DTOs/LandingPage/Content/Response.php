<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs\LandingPage\Content;

final class Response extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'id',
    'type',
];

    protected const array VALIDATION = [
    'index' => [
        'format' => 'int32',
    ],
];

    /**
     * Content of the section. Expected values vary based on type. Image: An image URL. RichText: HTML Content. HTML: HTML Content. Form: A form id. Rectangle: Empty. Snippet: A snippet id.
     */
    public \MarketoSDK\DTOs\LandingPage\Content\Response\ContentDTO $content;
    /**
     * Follow-up behavior of a form. Only available for form-type content sections. Defaults to form defined behavior.
     */
    public \MarketoSDK\Enums\LandingPage\Content\Response\FollowupTypeEnum $followupType;
    /**
     * Where to follow-up on form submission. When followupType is lp, accepts the integer id of a landing page. For url, it accepts a url string.
     */
    public string $followupValue;
    public \MarketoSDK\DTOs\JsonNode $formattingOptions;
    /**
     * Id of the content section, may be a string or an int
     */
    public \MarketoSDK\DTOs\LandingPage\Content\Response\IdDTO $id;
    /**
     * Index of the content section. Index orients the elements from lowest to highest
     * Format: int32
     */
    public int $index {
        set {
            $this->assigning('index', $value);
            $this->index = $value;
        }
    }
    /**
     * Type of content section
     */
    public \MarketoSDK\Enums\LandingPage\Content\Response\TypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'followupType' => is_string($value) ? $this->followupType = \MarketoSDK\Enums\LandingPage\Content\Response\FollowupTypeEnum::from($value) : parent::assignMember($name, $value),
            'followupValue' => is_string($value) ? $this->followupValue = $value : parent::assignMember($name, $value),
            'formattingOptions' => $value instanceof \stdClass ? $this->formattingOptions = new \MarketoSDK\DTOs\JsonNode($value) : parent::assignMember($name, $value),
            'index' => is_int($value) ? $this->index = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \MarketoSDK\Enums\LandingPage\Content\Response\TypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
