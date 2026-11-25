<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs\Update\FormMetaData;

final class Request extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Custom CSS to apply to the form
     */
    public string $customCss;
    /**
     * Description of the form
     */
    public string $description;
    /**
     * font-family property for the form
     */
    public string $fontFamily;
    /**
     * font-size property of the form
     */
    public string $fontSize;
    /**
     * Known visitor behavior for the form
     */
    public \MarketoSDK\DTOs\Form\KnownVisitorDTO $knownVisitor;
    /**
     * Default positioning of labels.
     */
    public string $labelPosition;
    /**
     * Language of the form
     */
    public string $language;
    /**
     * Locale of the form
     */
    public string $locale;
    /**
     * Name of the form
     */
    public string $name;
    /**
     * Whether progressive profiling is enabled for the form
     */
    public bool $progressiveProfiling;
    /**
     * CSS theme for the form to use
     */
    public string $theme;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'customCss' => is_string($value) ? $this->customCss = $value : parent::assignMember($name, $value),
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'fontFamily' => is_string($value) ? $this->fontFamily = $value : parent::assignMember($name, $value),
            'fontSize' => is_string($value) ? $this->fontSize = $value : parent::assignMember($name, $value),
            'knownVisitor' => $value instanceof \stdClass ? $this->knownVisitor = new \MarketoSDK\DTOs\Form\KnownVisitorDTO($value) : parent::assignMember($name, $value),
            'labelPosition' => is_string($value) ? $this->labelPosition = $value : parent::assignMember($name, $value),
            'language' => is_string($value) ? $this->language = $value : parent::assignMember($name, $value),
            'locale' => is_string($value) ? $this->locale = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'progressiveProfiling' => is_bool($value) ? $this->progressiveProfiling = $value : parent::assignMember($name, $value),
            'theme' => is_string($value) ? $this->theme = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
