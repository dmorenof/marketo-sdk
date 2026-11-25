<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs\Email;

/**
 * EmailHeadersDTO
 */
final class HeadersDTO extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'subject',
    ];

    public \MarketoSDK\Collections\StringCollection $ccEmails;
    public string $fromEmail;
    public string $fromName;
    public string $preheader;
    public string $replyEmail;
    public string $subject;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'ccEmails' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->ccEmails = new \MarketoSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'fromEmail' => is_string($value) ? $this->fromEmail = $value : parent::assignMember($name, $value),
            'fromName' => is_string($value) ? $this->fromName = $value : parent::assignMember($name, $value),
            'preheader' => is_string($value) ? $this->preheader = $value : parent::assignMember($name, $value),
            'replyEmail' => is_string($value) ? $this->replyEmail = $value : parent::assignMember($name, $value),
            'subject' => is_string($value) ? $this->subject = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
