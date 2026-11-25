<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs\Update\LandingPage;

final class Request extends \Dmorenof\SdkRuntime\DTO
{
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
    public string $keywords;
    /**
     * Meta description property of the page
     */
    public string $metaTagsDescription;
    /**
     * Whether the page has mobile viewing enabled. Free-form pages only. Default false
     */
    public bool $mobileEnabled;
    /**
     * Name of the landing page
     */
    public string $name;
    /**
     * Robots directives to apply to the pages meta tags
     */
    public string $robots;
    /**
     * Additional CSS styles to append to the landing page <head>
     */
    public string $styleOverRide;
    /**
     * Title element of the landing page
     */
    public string $title;
    /**
     * URL path of the page. Derived from the name field if unset
     */
    public string $urlPageName;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'customHeadHTML' => is_string($value) ? $this->customHeadHTML = $value : parent::assignMember($name, $value),
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'facebookOgTags' => is_string($value) ? $this->facebookOgTags = $value : parent::assignMember($name, $value),
            'keywords' => is_string($value) ? $this->keywords = $value : parent::assignMember($name, $value),
            'metaTagsDescription' => is_string($value) ? $this->metaTagsDescription = $value : parent::assignMember($name, $value),
            'mobileEnabled' => is_bool($value) ? $this->mobileEnabled = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'robots' => is_string($value) ? $this->robots = $value : parent::assignMember($name, $value),
            'styleOverRide' => is_string($value) ? $this->styleOverRide = $value : parent::assignMember($name, $value),
            'title' => is_string($value) ? $this->title = $value : parent::assignMember($name, $value),
            'urlPageName' => is_string($value) ? $this->urlPageName = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
