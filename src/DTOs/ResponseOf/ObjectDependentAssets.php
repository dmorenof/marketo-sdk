<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs\ResponseOf;

final class ObjectDependentAssets extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'errors',
        'requestId',
        'result',
        'success',
        'warnings',
    ];

    /**
     * Array of errors that occurred if the request was unsuccessful
     */
    public \MarketoSDK\Collections\CustomActivity\ErrorsCollection $errors;
    /**
     * Id of the request made
     */
    public string $requestId;
    /**
     * List of dependent assets for a custom object type
     */
    public \MarketoSDK\Collections\ResponseOf\ObjectDependentAssets\ResultCollection $result;
    /**
     * Whether the request succeeded
     * Example: false
     */
    public bool $success;
    /**
     * Array of warnings given for the operation
     */
    public \MarketoSDK\Collections\ResponseOf\Activity\WarningsCollection $warnings;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'errors' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->errors = new \MarketoSDK\Collections\CustomActivity\ErrorsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \MarketoSDK\DTOs\Error::class)) : parent::assignMember($name, $value),
            'requestId' => is_string($value) ? $this->requestId = $value : parent::assignMember($name, $value),
            'result' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->result = new \MarketoSDK\Collections\ResponseOf\ObjectDependentAssets\ResultCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \MarketoSDK\DTOs\ObjectDependentAsset::class)) : parent::assignMember($name, $value),
            'success' => is_bool($value) ? $this->success = $value : parent::assignMember($name, $value),
            'warnings' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->warnings = new \MarketoSDK\Collections\ResponseOf\Activity\WarningsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \MarketoSDK\DTOs\Warning::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
