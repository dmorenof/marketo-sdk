<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs\Create\Email;

final class Request extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'folder',
    'fromEmail',
    'fromName',
    'name',
    'replyEmail',
    'subject',
    'template',
];

    protected const array VALIDATION = [
    'template' => [
        'format' => 'int32',
    ],
];

    /**
     * Setting to automatically copy HTML version to Text version
     */
    public bool $autoCopyToText;
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
    public string $fromEmail;
    /**
     * From-name of the Email
     */
    public string $fromName;
    /**
     * Name of the email
     */
    public string $name;
    /**
     * Whether the email is operational. Operational emails bypass unsubscribe status. Defaults to false
     */
    public bool $operational;
    /**
     * Reply-To address of the Email
     */
    public string $replyEmail;
    /**
     * Subject Line of the Email
     */
    public string $subject;
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

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'autoCopyToText' => is_bool($value) ? $this->autoCopyToText = $value : parent::assignMember($name, $value),
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'folder' => $value instanceof \stdClass ? $this->folder = new \MarketoSDK\DTOs\Folder($value) : parent::assignMember($name, $value),
            'fromEmail' => is_string($value) ? $this->fromEmail = $value : parent::assignMember($name, $value),
            'fromName' => is_string($value) ? $this->fromName = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'operational' => is_bool($value) ? $this->operational = $value : parent::assignMember($name, $value),
            'replyEmail' => is_string($value) ? $this->replyEmail = $value : parent::assignMember($name, $value),
            'subject' => is_string($value) ? $this->subject = $value : parent::assignMember($name, $value),
            'template' => is_int($value) ? $this->template = $value : parent::assignMember($name, $value),
            'textOnly' => is_bool($value) ? $this->textOnly = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
