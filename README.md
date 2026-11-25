# Marketo SDK for PHP

[![License: MIT](https://img.shields.io/badge/License-MIT-blue.svg)](LICENSE.md)
[![PHP 8.4+](https://img.shields.io/badge/PHP-8.4%2B-777bb4.svg)](composer.json)
[![PHPStan level max](https://img.shields.io/badge/PHPStan-level%20max-brightgreen.svg)](phpstan.neon)
[![Packagist](https://img.shields.io/packagist/v/dmorenof/marketo-sdk.svg)](https://packagist.org/packages/dmorenof/marketo-sdk)

**Marketo Engage leads, assets, identity and users from typed PHP.**

381 operations of the Marketo Engage REST API: Lead Database, Asset, Identity and User Management, merged from the Swagger definitions Adobe publishes.

> Unofficial. Not affiliated with, endorsed by or supported by Adobe (Marketo Engage). See [NOTICE.md](NOTICE.md).

## Why this SDK

- Bulk extract and import jobs, lead and custom-object queries, assets (emails, forms, landing pages), identity and user management.
- Typed request parameters and typed answers.
- Point it at your own instance with one setting.
- **Generated from the contract, never edited by hand.** `src/` is produced from `contract/marketo.json` by [sdk-generator](https://github.com/dmorenof/sdk-generator) on top of the shared [sdk-runtime](https://github.com/dmorenof/sdk-runtime): when the contract changes you regenerate, you do not patch.
- **Typed end to end.** 381 operations and 466 typed request, answer and model classes. A request is a model whose fields are checked where you assign them (PHP 8.4 property hooks); an answer is a model; a list is a typed collection. PHPStan at the maximum level reports no error on the whole SDK.
- **One way to fail.** An HTTP answer the contract does not declare as success is an `ApiException` that keeps the raw response and, when the API documents it, the decoded error as a model. Network failures keep their own type.
- **Production controls included.** PSR-18 HTTP client (Guzzle by default), timeouts (30 s / 10 s by default), retries with `Retry-After`, redirect policy, middleware and per-environment servers, all in one `Configuration` object.

## Install

PHP 8.4 or later.

```bash
composer require dmorenof/marketo-sdk
```

## Quick start

```php
<?php
use MarketoSDK\Configuration;
use MarketoSDK\MarketoEngageRESTAPISDK;
use MarketoSDK\Bulk\V1\Activities\ExportJson;

$configuration = new Configuration();
$configuration->baseUrl = 'https://123-ABC-456.mktorest.com'; // your Munchkin ID
$configuration->headers = ['Authorization' => 'Bearer ' . (getenv('MARKETO_ACCESS_TOKEN') ?: '')];
MarketoEngageRESTAPISDK::configure($configuration);

$jobs = ExportJson::get();

echo json_encode($jobs), "\n";
```

The same example is in [examples/quickstart.php](examples/quickstart.php). Every operation is listed in [docs/OPERATIONS.md](docs/OPERATIONS.md).

## What it covers

381 operations. The biggest areas:

| Area | Operations |
| --- | --- |
| `rest` | 331 |
| `bulk` | 36 |
| `userservice` | 12 |
| `identity` | 2 |

## Handling errors

```php
use Dmorenof\SdkRuntime\ApiException;

try {
    // ... any call from the quick start
} catch (ApiException $e) {
    echo $e->response->status, "\n";   // the HTTP status
    echo $e->response->body, "\n";     // the raw body, always kept
    var_dump($e->error);                // the decoded error model, when the API documents one
}
```

## Configuration

`Configuration` is the only place to set anything: `baseUrl`, `securityCredentials`, `headers`, `timeout`, `connectTimeout`, `retryPolicy`, `redirectPolicy`, `middleware`, `httpClient` (any PSR-18 client), `serverVariables`. Use `Client::connect($configuration)` instead of the static facades when you need several independent connections.

## Good to know

- The Marketo Data Ingestion API is a separate OpenAPI 3 document and is not included.
- The Asset definition declares forms where a JSON model is meant; the generator reads those bodies as JSON (see the generation report).
- Version `0.1.0` is a first release: the API of the SDK follows the contract, and a regenerated contract can rename classes. Pin a version.
- The SDK has been checked against its contract (generation, static analysis, serialization of requests); it has not been run against the live service unless the section above says so. Use test credentials first.

## Documentation

- [Operations catalog](docs/OPERATIONS.md)
- [Vendor documentation](https://developer.adobe.com/marketo-apis/)
- [sdk-runtime](https://github.com/dmorenof/sdk-runtime) (what every SDK shares) and [sdk-generator](https://github.com/dmorenof/sdk-generator)
- [CHANGELOG.md](CHANGELOG.md), [CONTRIBUTING.md](CONTRIBUTING.md), [SECURITY.md](SECURITY.md)

## License

MIT, see [LICENSE.md](LICENSE.md). The license covers this SDK's code, not the API, its trademarks or its terms: see [NOTICE.md](NOTICE.md).
