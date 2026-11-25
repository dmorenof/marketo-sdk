<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs\Create\LandingPageContent;

final class Request extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'contentId',
        'type',
    ];

    /**
     * background-color property of the HTML section
     */
    public string $backgroundColor;
    /**
     * border-color property of the HTML section
     */
    public string $borderColor;
    /**
     * border-style property of the HTML section
     */
    public string $borderStyle;
    /**
     * border-width property of the HTML section
     */
    public string $borderWidth;
    /**
     * Id of the content section. Also the HTML id of the section.
     */
    public string $contentId;
    /**
     * height property of the HTML section
     */
    public string $height;
    /**
     * Hide the section when displayed on a desktop browser. Default false
     */
    public bool $hideDesktop;
    /**
     * Hide the section when displayed on a mobile browser. Default false
     */
    public bool $hideMobile;
    public string $imageOpenNewWindow;
    /**
     * left property of the HTML section
     */
    public string $left;
    /**
     * URL parameter of a link type section
     */
    public string $linkUrl;
    /**
     * opacity property of the HTML section
     */
    public string $opacity;
    /**
     * top property of the HTML section
     */
    public string $top;
    /**
     * Type of content section
     */
    public \MarketoSDK\Enums\Create\LandingPageContent\Request\TypeEnum $type;
    /**
     * Type of content section
     */
    public string $value;
    /**
     * width property of the HTML section
     */
    public string $width;
    /**
     * z-index property of the HTML section
     */
    public string $zIndex;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'backgroundColor' => is_string($value) ? $this->backgroundColor = $value : parent::assignMember($name, $value),
            'borderColor' => is_string($value) ? $this->borderColor = $value : parent::assignMember($name, $value),
            'borderStyle' => is_string($value) ? $this->borderStyle = $value : parent::assignMember($name, $value),
            'borderWidth' => is_string($value) ? $this->borderWidth = $value : parent::assignMember($name, $value),
            'contentId' => is_string($value) ? $this->contentId = $value : parent::assignMember($name, $value),
            'height' => is_string($value) ? $this->height = $value : parent::assignMember($name, $value),
            'hideDesktop' => is_bool($value) ? $this->hideDesktop = $value : parent::assignMember($name, $value),
            'hideMobile' => is_bool($value) ? $this->hideMobile = $value : parent::assignMember($name, $value),
            'imageOpenNewWindow' => is_string($value) ? $this->imageOpenNewWindow = $value : parent::assignMember($name, $value),
            'left' => is_string($value) ? $this->left = $value : parent::assignMember($name, $value),
            'linkUrl' => is_string($value) ? $this->linkUrl = $value : parent::assignMember($name, $value),
            'opacity' => is_string($value) ? $this->opacity = $value : parent::assignMember($name, $value),
            'top' => is_string($value) ? $this->top = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \MarketoSDK\Enums\Create\LandingPageContent\Request\TypeEnum::from($value) : parent::assignMember($name, $value),
            'value' => is_string($value) ? $this->value = $value : parent::assignMember($name, $value),
            'width' => is_string($value) ? $this->width = $value : parent::assignMember($name, $value),
            'zIndex' => is_string($value) ? $this->zIndex = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
