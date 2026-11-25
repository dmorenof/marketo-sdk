<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs\UsedBy;

/**
 * UsedByResponse
 */
final class Response extends \Dmorenof\SdkRuntime\DTO
{
    public \MarketoSDK\DTOs\PageDetailsDTO $pageDetails;
    public string $requestId;
    public \MarketoSDK\Collections\UsedBy\Response\ResultCollection $result;
    public bool $success;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'pageDetails' => $value instanceof \stdClass ? $this->pageDetails = new \MarketoSDK\DTOs\PageDetailsDTO($value) : parent::assignMember($name, $value),
            'requestId' => is_string($value) ? $this->requestId = $value : parent::assignMember($name, $value),
            'result' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->result = new \MarketoSDK\Collections\UsedBy\Response\ResultCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \MarketoSDK\DTOs\UsedBy\ItemDTO::class)) : parent::assignMember($name, $value),
            'success' => is_bool($value) ? $this->success = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
