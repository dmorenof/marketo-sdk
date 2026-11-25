# Marketo SDK

[![License: MIT](https://img.shields.io/badge/License-MIT-blue.svg)](LICENSE.md)

Unofficial PHP SDK for the Marketo Engage REST API (Lead Database, Asset, Identity and User Management).
The code in `src/` is **generated** from `contract/` by [sdk-generator](https://github.com/dmorenof/sdk-generator) and runs on
[sdk-runtime](https://github.com/dmorenof/sdk-runtime): typed models and collections, one exception type per kind of failure. Nothing in `src/` is edited by hand.

## Installation

PHP 8.4 or later.

```bash
composer require dmorenof/marketo-sdk
```

## Setup

```php
use MarketoSDK\Configuration;
use MarketoSDK\MarketoEngageRESTAPISDK;

$configuration = new Configuration();
$configuration->baseUrl = 'https://123-ABC-456.mktorest.com'; // your Munchkin ID
// Marketo takes the access token as the `access_token` query parameter of each call.
MarketoEngageRESTAPISDK::configure($configuration);
```

`Configuration` also takes `httpClient` (any PSR-18 client), `middleware`, `retryPolicy` and `redirectPolicy`. The operations are the classes and resources under `src/`; the contract they follow is in `contract/`.

## License

MIT (see [LICENSE.md](LICENSE.md)). See [NOTICE.md](NOTICE.md) for the status of the API itself.
