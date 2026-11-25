<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs\Update\ThankYouPage;

final class Request extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * JSON array of followup rules
     */
    public \MarketoSDK\Collections\Update\ThankYouPage\Request\ThankyouCollection $thankyou;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'thankyou' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->thankyou = new \MarketoSDK\Collections\Update\ThankYouPage\Request\ThankyouCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \MarketoSDK\DTOs\ThankYouPageRequest::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
