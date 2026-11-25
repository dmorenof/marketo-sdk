<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs\LandingPage;

final class Response extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'customHeadHTML',
        'facebookOgTags',
        'robots',
        'title',
    ];

    protected const array VALIDATION = [
        'template' => [
            'format' => 'int32',
        ],
    ];

    /**
     * Public URL of the landing page, including the /lp/{munchkinId} path segment
     */
    public string $URL;
    /**
     * Url of the asset in the Marketo UI
     */
    public string $computedUrl;
    /**
     * Datetime the asset was created
     * Format: date-time
     */
    public string $createdAt;
    /**
     * Any custom HTML to embed in the <head> tag of the page
     */
    public string $customHeadHTML;
    /**
     * Description of the asset
     */
    public string $description;
    /**
     * Public URL of the landing page, without the /lp/{munchkinId} path segment
     */
    public string $destinationUrl;
    /**
     * Any OpenGraph meta tags to apply to the page
     */
    public string $facebookOgTags;
    /**
     * JSON representation of parent folder, with members 'id', and 'type' which may be 'Folder' or 'Program'
     */
    public \MarketoSDK\DTOs\Folder $folder;
    /**
     * Boolean to toggle whether forms embedded in the page will prefill. Default false
     */
    public bool $formPrefill;
    /**
     * Id of the asset
     * Format: int64
     */
    public int $id;
    public string $keywords;
    /**
     * Whether the page has mobile viewing enabled. Free-form pages only. Default false
     */
    public bool $mobileEnabled;
    /**
     * Name of the asset
     */
    public string $name;
    /**
     * Robots directives to apply to the pages meta tags
     */
    public string $robots;
    /**
     * Status filter for draft or approved versions
     */
    public string $status;
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
     * Datetime the asset was most recently updated
     * Format: date-time
     */
    public string $updatedAt;
    /**
     * Name of the workspace
     */
    public string $workspace;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'URL' => is_string($value) ? $this->URL = $value : parent::assignMember($name, $value),
            'computedUrl' => is_string($value) ? $this->computedUrl = $value : parent::assignMember($name, $value),
            'createdAt' => is_string($value) ? $this->createdAt = $value : parent::assignMember($name, $value),
            'customHeadHTML' => is_string($value) ? $this->customHeadHTML = $value : parent::assignMember($name, $value),
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'destinationUrl' => is_string($value) ? $this->destinationUrl = $value : parent::assignMember($name, $value),
            'facebookOgTags' => is_string($value) ? $this->facebookOgTags = $value : parent::assignMember($name, $value),
            'folder' => $value instanceof \stdClass ? $this->folder = new \MarketoSDK\DTOs\Folder($value) : parent::assignMember($name, $value),
            'formPrefill' => is_bool($value) ? $this->formPrefill = $value : parent::assignMember($name, $value),
            'id' => is_int($value) ? $this->id = $value : parent::assignMember($name, $value),
            'keywords' => is_string($value) ? $this->keywords = $value : parent::assignMember($name, $value),
            'mobileEnabled' => is_bool($value) ? $this->mobileEnabled = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'robots' => is_string($value) ? $this->robots = $value : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = $value : parent::assignMember($name, $value),
            'template' => is_int($value) ? $this->template = $value : parent::assignMember($name, $value),
            'title' => is_string($value) ? $this->title = $value : parent::assignMember($name, $value),
            'updatedAt' => is_string($value) ? $this->updatedAt = $value : parent::assignMember($name, $value),
            'workspace' => is_string($value) ? $this->workspace = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
