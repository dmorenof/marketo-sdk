<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs\Update\Program;

final class Request extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Channel of the program. The channel must be valid for the program's type. Updating the channel keeps Program Settings Channel and the Channel tag in sync. If a Channel tag is also passed in tags, the channel value takes precedence. The update is rejected with error code 1173 if a child campaign uses a Change Program Status flow step.
     */
    public string $channel;
    /**
     * Lists of associated period costs that allow you to append, replace, or delete. To append new costs, simply add them to costs array. To replace costs (destructive update), pass new costs and set costsDestructiveUpdate to true. To delete costs, do not pass costs parameter and set costsDestructiveUpdate to true
     */
    public \MarketoSDK\Collections\Create\Program\Request\CostsCollection $costs;
    /**
     * Set true to destroy existing costs and replace them with the specified costs
     */
    public bool $costsDestructiveUpdate;
    /**
     * Updated description for the program
     */
    public string $description;
    /**
     * End date of the program. Applicable to event, email, and webinar type programs
     */
    public string $endDate;
    /**
     * Name of the program
     */
    public string $name;
    /**
     * Start date of program. Applicable to event, email and webinar type programs
     */
    public string $startDate;
    /**
     * List of associated program tags
     */
    public \MarketoSDK\Collections\Create\Program\Request\TagsCollection $tags;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'channel' => is_string($value) ? $this->channel = $value : parent::assignMember($name, $value),
            'costs' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->costs = new \MarketoSDK\Collections\Create\Program\Request\CostsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \MarketoSDK\DTOs\CostRequest::class)) : parent::assignMember($name, $value),
            'costsDestructiveUpdate' => is_bool($value) ? $this->costsDestructiveUpdate = $value : parent::assignMember($name, $value),
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'endDate' => is_string($value) ? $this->endDate = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'startDate' => is_string($value) ? $this->startDate = $value : parent::assignMember($name, $value),
            'tags' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->tags = new \MarketoSDK\Collections\Create\Program\Request\TagsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \MarketoSDK\DTOs\Tag\Request::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
