<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs;

final class ThankYouPageResponse extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'id' => [
        'format' => 'int32',
    ],
];

    /**
     * Format: int32
     */
    public int $id {
        set {
            $this->assigning('id', $value);
            $this->id = $value;
        }
    }
    public \MarketoSDK\Collections\Lp\Form\Response\YouListCollection $thankYouList;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'id' => is_int($value) ? $this->id = $value : parent::assignMember($name, $value),
            'thankYouList' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->thankYouList = new \MarketoSDK\Collections\Lp\Form\Response\YouListCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \MarketoSDK\DTOs\Form\ThankYouPageDTO::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
