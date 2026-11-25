<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs\Create\LandingPage;

final class Request extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'folder',
    'name',
    'template',
];

    protected const array VALIDATION = [
    'template' => [
        'format' => 'int32',
    ],
];

    /**
     * Any custom HTML to embed in the <head> tag of the page
     */
    public string $customHeadHTML;
    /**
     * Description of the asset
     */
    public string $description;
    /**
     * Any OpenGraph meta tags to apply to the page
     */
    public string $facebookOgTags;
    /**
     * JSON representation of parent folder, with members 'id', and 'type' which may be 'Folder' or 'Program'
     */
    public \MarketoSDK\DTOs\Folder $folder;
    public string $keywords;
    /**
     * Whether the page has mobile viewing enabled. Free-form pages only. Default false
     */
    public bool $mobileEnabled;
    /**
     * Name of the landing page
     */
    public string $name;
    /**
     * Boolean to toggle whether forms embedded in the page will prefill. Default false
     */
    public bool $prefillForm;
    /**
     * Robots directives to apply to the pages meta tags
     */
    public string $robots;
    /**
     * Id of the template used
     * Format: int32
     */
    public int $template {
        set {
            $this->assigning('template', $value);
            $this->template = $value;
        }
    }
    /**
     * Title element of the landing page
     */
    public string $title;
    /**
     * URL path of the page. Derived from the name field if unset
     */
    public string $urlPageName;
    /**
     * Name of the workspace
     */
    public string $workspace;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'customHeadHTML' => is_string($value) ? $this->customHeadHTML = $value : parent::assignMember($name, $value),
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'facebookOgTags' => is_string($value) ? $this->facebookOgTags = $value : parent::assignMember($name, $value),
            'folder' => $value instanceof \stdClass ? $this->folder = new \MarketoSDK\DTOs\Folder($value) : parent::assignMember($name, $value),
            'keywords' => is_string($value) ? $this->keywords = $value : parent::assignMember($name, $value),
            'mobileEnabled' => is_bool($value) ? $this->mobileEnabled = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'prefillForm' => is_bool($value) ? $this->prefillForm = $value : parent::assignMember($name, $value),
            'robots' => is_string($value) ? $this->robots = $value : parent::assignMember($name, $value),
            'template' => is_int($value) ? $this->template = $value : parent::assignMember($name, $value),
            'title' => is_string($value) ? $this->title = $value : parent::assignMember($name, $value),
            'urlPageName' => is_string($value) ? $this->urlPageName = $value : parent::assignMember($name, $value),
            'workspace' => is_string($value) ? $this->workspace = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
