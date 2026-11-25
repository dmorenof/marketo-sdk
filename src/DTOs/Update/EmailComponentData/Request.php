<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs\Update\EmailComponentData;

final class Request extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * From-address of the Email
     */
    public \MarketoSDK\DTOs\Email\HeaderField $fromEmail;
    /**
     * From-name of the Email
     */
    public \MarketoSDK\DTOs\Email\HeaderField $fromName;
    /**
     * Reply-To address of the Email
     */
    public \MarketoSDK\DTOs\Email\HeaderField $replyTO;
    /**
     * Subject Line of the Email
     */
    public \MarketoSDK\DTOs\Email\HeaderField $subject;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'fromEmail' => $value instanceof \stdClass ? $this->fromEmail = new \MarketoSDK\DTOs\Email\HeaderField($value) : parent::assignMember($name, $value),
            'fromName' => $value instanceof \stdClass ? $this->fromName = new \MarketoSDK\DTOs\Email\HeaderField($value) : parent::assignMember($name, $value),
            'replyTO' => $value instanceof \stdClass ? $this->replyTO = new \MarketoSDK\DTOs\Email\HeaderField($value) : parent::assignMember($name, $value),
            'subject' => $value instanceof \stdClass ? $this->subject = new \MarketoSDK\DTOs\Email\HeaderField($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
