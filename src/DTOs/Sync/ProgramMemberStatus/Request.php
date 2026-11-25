<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs\Sync\ProgramMemberStatus;

final class Request extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'input',
        'statusName',
    ];

    /**
     * List of input records
     */
    public \MarketoSDK\Collections\Sync\ProgramMemberStatus\Request\InputCollection $input;
    /**
     * Program member status
     */
    public string $statusName;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'input' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->input = new \MarketoSDK\Collections\Sync\ProgramMemberStatus\Request\InputCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \MarketoSDK\DTOs\ProgramMember\Status::class)) : parent::assignMember($name, $value),
            'statusName' => is_string($value) ? $this->statusName = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
