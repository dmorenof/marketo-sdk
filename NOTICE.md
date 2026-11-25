# Third-party API and trademark notices

This is an **independent, unofficial** client library. It is not affiliated with, endorsed by, or supported by Adobe or Marketo.

- Marketo, Adobe and their service names belong to their owners; the MIT license grants no rights to them and does not sublicense the Marketo API or its terms.
- The contract in `contract/marketo.json` merges the four Swagger 2.0 definitions Adobe publishes at <https://github.com/AdobeDocs/marketo-apis> (`static/swagger-mapi.json`, `swagger-asset.json`, `swagger-identity.json`, `swagger-user.json`). The Marketo Data Ingestion API (OpenAPI 3.0) is not included. The definitions carry no host: the SDK points at `https://YOUR-MUNCHKIN-ID.mktorest.com`, so set `baseUrl` to your instance (`https://{Munchkin ID}.mktorest.com`). The `Error` model of the User Management definition differs from the one of the Lead Database definition: the latter is used.
- The generator repaired a number of defects of the Asset definition (a model under a form `consumes` is sent as JSON); the generation report lists them.
- Using the API requires a Marketo access token and compliance with its terms.
- Provided without warranty.
