<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs;

/**
 * Form field data. May have any number of fields depending on the fields available in the form.
 */
final class Form extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'leadFormFields',
    ];

    /**
     * Munchkin cookie value used to associate new lead with anonymous activities. e.g. id:123-XYZ-456&tooken:_mch-marketo.com-1594662481190-60776
     */
    public string $cookie;
    /**
     * List of form fields. Email is required field
     */
    public \MarketoSDK\DTOs\Lead\FormFields $leadFormFields;
    /**
     * Page visit-related data
     */
    public \MarketoSDK\DTOs\VisitorData $visitorData;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'cookie' => is_string($value) ? $this->cookie = $value : parent::assignMember($name, $value),
            'leadFormFields' => $value instanceof \stdClass ? $this->leadFormFields = new \MarketoSDK\DTOs\Lead\FormFields($value) : parent::assignMember($name, $value),
            'visitorData' => $value instanceof \stdClass ? $this->visitorData = new \MarketoSDK\DTOs\VisitorData($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
