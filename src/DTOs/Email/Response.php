<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs\Email;

final class Response extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'autoCopyToText',
        'folder',
        'fromEmail',
        'fromName',
        'operational',
        'preHeader',
        'publishToMSI',
        'replyEmail',
        'status',
        'subject',
        'template',
        'textOnly',
        'webView',
    ];

    protected const array VALIDATION = [
        'template' => [
            'format' => 'int32',
        ],
        'version' => [
            'format' => 'int32',
        ],
    ];

    /**
     * Setting to automatically copy HTML version to Text version
     */
    public bool $autoCopyToText;
    public \MarketoSDK\Collections\Email\Response\CcFieldsCollection $ccFields;
    /**
     * Datetime the asset was created
     * Format: date-time
     */
    public string $createdAt;
    /**
     * Description of the asset
     */
    public string $description;
    /**
     * JSON representation of parent folder, with members 'id', and 'type' which may be 'Folder' or 'Program'
     */
    public \MarketoSDK\DTOs\Folder $folder;
    /**
     * From-address of the Email
     */
    public \MarketoSDK\DTOs\Email\HeaderField $fromEmail;
    /**
     * From-name of the Email
     */
    public \MarketoSDK\DTOs\Email\HeaderField $fromName;
    /**
     * Id of the asset
     * Format: int64
     */
    public int $id;
    /**
     * Name of the asset
     */
    public string $name;
    /**
     * Whether the email is operational. Operational emails bypass unsubscribe status. Defaults to false
     */
    public bool $operational;
    /**
     * The email preheader text (max 1024 characters)
     */
    public string $preHeader;
    /**
     * Whether the email is published to Marketo Sales Insight
     */
    public bool $publishToMSI;
    /**
     * Reply-To address of the Email
     */
    public \MarketoSDK\DTOs\Email\HeaderField $replyEmail;
    /**
     * Status filter for draft or approved versions
     */
    public string $status;
    /**
     * Subject Line of the Email
     */
    public \MarketoSDK\DTOs\Email\HeaderField $subject;
    /**
     * Id of the parent template
     * Format: int32
     */
    public int $template {
        set {
            $this->assigning('template', $value);
            $this->template = $value;
        }
    }
    /**
     * Setting to include text-only version of email when sent
     */
    public bool $textOnly;
    /**
     * Datetime the asset was most recently updated
     * Format: date-time
     */
    public string $updatedAt;
    /**
     * Url of the asset in the Marketo UI
     */
    public string $url;
    /**
     * The type version of the email
     * Format: int32
     */
    public \MarketoSDK\Enums\Email\Response\VersionEnum $version {
        set {
            $this->assigning('version', $value);
            $this->version = $value;
        }
    }
    /**
     * Whether 'View as Webpage' function is enabled for the email
     */
    public bool $webView;
    /**
     * Name of the workspace
     */
    public string $workspace;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'autoCopyToText' => is_bool($value) ? $this->autoCopyToText = $value : parent::assignMember($name, $value),
            'ccFields' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->ccFields = new \MarketoSDK\Collections\Email\Response\CcFieldsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \MarketoSDK\DTOs\Email\CCFields::class)) : parent::assignMember($name, $value),
            'createdAt' => is_string($value) ? $this->createdAt = $value : parent::assignMember($name, $value),
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'folder' => $value instanceof \stdClass ? $this->folder = new \MarketoSDK\DTOs\Folder($value) : parent::assignMember($name, $value),
            'fromEmail' => $value instanceof \stdClass ? $this->fromEmail = new \MarketoSDK\DTOs\Email\HeaderField($value) : parent::assignMember($name, $value),
            'fromName' => $value instanceof \stdClass ? $this->fromName = new \MarketoSDK\DTOs\Email\HeaderField($value) : parent::assignMember($name, $value),
            'id' => is_int($value) ? $this->id = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'operational' => is_bool($value) ? $this->operational = $value : parent::assignMember($name, $value),
            'preHeader' => is_string($value) ? $this->preHeader = $value : parent::assignMember($name, $value),
            'publishToMSI' => is_bool($value) ? $this->publishToMSI = $value : parent::assignMember($name, $value),
            'replyEmail' => $value instanceof \stdClass ? $this->replyEmail = new \MarketoSDK\DTOs\Email\HeaderField($value) : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = $value : parent::assignMember($name, $value),
            'subject' => $value instanceof \stdClass ? $this->subject = new \MarketoSDK\DTOs\Email\HeaderField($value) : parent::assignMember($name, $value),
            'template' => is_int($value) ? $this->template = $value : parent::assignMember($name, $value),
            'textOnly' => is_bool($value) ? $this->textOnly = $value : parent::assignMember($name, $value),
            'updatedAt' => is_string($value) ? $this->updatedAt = $value : parent::assignMember($name, $value),
            'url' => is_string($value) ? $this->url = $value : parent::assignMember($name, $value),
            'version' => is_int($value) ? $this->version = \MarketoSDK\Enums\Email\Response\VersionEnum::from($value) : parent::assignMember($name, $value),
            'webView' => is_bool($value) ? $this->webView = $value : parent::assignMember($name, $value),
            'workspace' => is_string($value) ? $this->workspace = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
