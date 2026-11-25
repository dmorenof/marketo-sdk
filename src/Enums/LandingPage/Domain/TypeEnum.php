<?php

declare(strict_types=1);

namespace MarketoSDK\Enums\LandingPage\Domain;

enum TypeEnum: string
{
    case Domain = 'domain';
    case DomainAlias = 'domain-alias';
}
