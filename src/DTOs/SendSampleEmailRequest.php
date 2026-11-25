<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs;

final class SendSampleEmailRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'emailAddress',
];

    /**
     * Email address to receive sample email
     */
    public string $emailAddress;
    /**
     * Id of a lead to impersonate. Tokens and dynamic content will be populated as though it were sent to the lead.
     */
    public string $leadId;
    /**
     * Whether to send to text only version along with the HTML version. Default false.
     */
    public bool $textOnly;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'emailAddress' => is_string($value) ? $this->emailAddress = $value : parent::assignMember($name, $value),
            'leadId' => is_string($value) ? $this->leadId = $value : parent::assignMember($name, $value),
            'textOnly' => is_bool($value) ? $this->textOnly = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
