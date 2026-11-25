<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs\Update\EmailMetaData;

final class Request extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Setting to automatically copy HTML version to Text version
     */
    public bool $autoCopyToText;
    /**
     * Description of the asset
     */
    public string $description;
    /**
     * Name of the Email
     */
    public string $name;
    /**
     * Whether the email is operational. Operational emails bypass unsubscribe status. Defaults to false
     */
    public bool $operational;
    /**
     * Preheader text for the email
     */
    public string $preHeader;
    /**
     * Whether the email has been published to Sales Insight. Default false
     */
    public bool $published;
    /**
     * Setting to include text-only version of email when sent
     */
    public bool $textOnly;
    /**
     * Whether the email has been enabled to allow the 'View as Web Page' when received
     */
    public bool $webView;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'autoCopyToText' => is_bool($value) ? $this->autoCopyToText = $value : parent::assignMember($name, $value),
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'operational' => is_bool($value) ? $this->operational = $value : parent::assignMember($name, $value),
            'preHeader' => is_string($value) ? $this->preHeader = $value : parent::assignMember($name, $value),
            'published' => is_bool($value) ? $this->published = $value : parent::assignMember($name, $value),
            'textOnly' => is_bool($value) ? $this->textOnly = $value : parent::assignMember($name, $value),
            'webView' => is_bool($value) ? $this->webView = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
