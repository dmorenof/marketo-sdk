<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs\Update\EmailDynamicContent;

final class Request extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'type',
    'value',
];

    protected const array VALIDATION = [
    'height' => [
        'format' => 'int32',
    ],
    'width' => [
        'format' => 'int32',
    ],
];

    /**
     * Sets the value of the alt parameter for the resulting img element
     */
    public string $altText;
    public string $externalUrl;
    /**
     * Overrides naitve height of the image. The resulting file will be resized to the given height
     * Format: int32
     */
    public int $height {
        set {
            $this->assigning('height', $value);
            $this->height = $value;
        }
    }
    /**
     * Multipart file that allows you to add an image from your computer
     */
    public string $image;
    public string $linkUrl;
    /**
     * Allows overwriting of the existing image content section
     */
    public bool $overWrite;
    /**
     * Sets the value of the style parameter for the content section
     */
    public string $style;
    /**
     * Type of content to set for the section.
     */
    public \MarketoSDK\Enums\Update\EmailDynamicContent\Request\TypeEnum $type;
    /**
     * Value to set for the section. For type Text, the HTML content of the section. For type DynamicContent, the id of the segmentation to use for the content. For type Snippet, the id of the snippet to embed
     */
    public string $value;
    /**
     * Sets the Url of the video element. Videos must be either from YouTube or Vimeo
     */
    public string $videoUrl;
    /**
     * Overrides native width of the image. The resulting file will be resized to the given width
     * Format: int32
     */
    public int $width {
        set {
            $this->assigning('width', $value);
            $this->width = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'altText' => is_string($value) ? $this->altText = $value : parent::assignMember($name, $value),
            'externalUrl' => is_string($value) ? $this->externalUrl = $value : parent::assignMember($name, $value),
            'height' => is_int($value) ? $this->height = $value : parent::assignMember($name, $value),
            'image' => is_string($value) ? $this->image = $value : parent::assignMember($name, $value),
            'linkUrl' => is_string($value) ? $this->linkUrl = $value : parent::assignMember($name, $value),
            'overWrite' => is_bool($value) ? $this->overWrite = $value : parent::assignMember($name, $value),
            'style' => is_string($value) ? $this->style = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \MarketoSDK\Enums\Update\EmailDynamicContent\Request\TypeEnum::from($value) : parent::assignMember($name, $value),
            'value' => is_string($value) ? $this->value = $value : parent::assignMember($name, $value),
            'videoUrl' => is_string($value) ? $this->videoUrl = $value : parent::assignMember($name, $value),
            'width' => is_int($value) ? $this->width = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
