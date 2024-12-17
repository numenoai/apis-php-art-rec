# NumenoArtRec\DefaultApi

All URIs are relative to https://api.numeno.ai/art-rec, except if the operation defines another base path.

| Method                                                     | HTTP request                               | Description                          |
| ---------------------------------------------------------- | ------------------------------------------ | ------------------------------------ |
| [**createFeed()**](DefaultApi.md#createFeed)               | **POST** /v1/feeds                         | Create a new Feed                    |
| [**createStream()**](DefaultApi.md#createStream)           | **POST** /v1/feeds/{feedId}/streams        | Create a new Stream for a Feed       |
| [**deleteFeed()**](DefaultApi.md#deleteFeed)               | **DELETE** /v1/feeds/{id}                  | Delete a Feed by ID                  |
| [**deleteStream()**](DefaultApi.md#deleteStream)           | **DELETE** /v1/feeds/{feedId}/streams/{id} | Delete a Stream by ID                |
| [**getArticleById()**](DefaultApi.md#getArticleById)       | **GET** /v1/articles/{id}                  | Get a specific Article by ID         |
| [**getArticles()**](DefaultApi.md#getArticles)             | **GET** /v1/articles                       | Get a list of all Articles           |
| [**getArticlesInFeed()**](DefaultApi.md#getArticlesInFeed) | **GET** /v1/feeds/{feedId}/articles        | Get a list of all Articles in a Feed |
| [**getFeedById()**](DefaultApi.md#getFeedById)             | **GET** /v1/feeds/{id}                     | Get a specific Feed by ID            |
| [**getFeeds()**](DefaultApi.md#getFeeds)                   | **GET** /v1/feeds                          | Get a list of all Feeds              |
| [**getScopes()**](DefaultApi.md#getScopes)                 | **GET** /v1/scopes                         | Get the Scopes for this API          |
| [**getSources()**](DefaultApi.md#getSources)               | **GET** /v1/sources                        | Get Sources and their Articles       |
| [**getStreamById()**](DefaultApi.md#getStreamById)         | **GET** /v1/feeds/{feedId}/streams/{id}    | Get a specific Stream by ID          |
| [**getStreams()**](DefaultApi.md#getStreams)               | **GET** /v1/feeds/{feedId}/streams         | Get a list of all Streams in a Feed  |
| [**getTopics()**](DefaultApi.md#getTopics)                 | **GET** /v1/topics                         | Get a list of all Topics             |
| [**healthCheck()**](DefaultApi.md#healthCheck)             | **GET** /health                            | Check the health of the API          |
| [**refreshFeed()**](DefaultApi.md#refreshFeed)             | **POST** /v1/feeds/{feedId}/refresh        | Force a Feed to refresh              |
| [**searchArticles()**](DefaultApi.md#searchArticles)       | **POST** /v1/articles/search               | Search for Articles                  |
| [**updateFeed()**](DefaultApi.md#updateFeed)               | **PUT** /v1/feeds/{id}                     | Update a Feed by ID                  |
| [**updateStream()**](DefaultApi.md#updateStream)           | **PUT** /v1/feeds/{feedId}/streams/{id}    | Update a Stream by ID                |

## `createFeed()`

```php
createFeed($feed_new): \NumenoArtRec\Model\FeedFull
```

Create a new Feed

A Feed is a collection of Stream queries which produces Articles on a regular schedule. When creating a Feed, you specify: - A friendly `name` for the Feed - these names are not unique and are for convenience only. - A refresh `schedule` - the rate at which the Feed automatically refreshes (default is `daily`) - A `tuner` object - a piece of natrual-language text used to further refine Article scoring as a Feed is refreshed. The Tuner object provides resonable defaults for deduplicating articles and filtering out listicles. Once a Feed has been created, add Streams to it via [`/feeds/:feedId/ streams`](create-stream) The maximum number of Feeds you can create depends on your subscription plan.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = NumenoArtRec\Configuration::getDefaultConfiguration()->setApiKey('X-Numeno-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NumenoArtRec\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Numeno-Key', 'Bearer');


$apiInstance = new NumenoArtRec\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$feed_new = new \NumenoArtRec\Model\FeedNew(); // \NumenoArtRec\Model\FeedNew

try {
    $result = $apiInstance->createFeed($feed_new);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createFeed: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name         | Type                                                   | Description | Notes |
| ------------ | ------------------------------------------------------ | ----------- | ----- |
| **feed_new** | [**\NumenoArtRec\Model\FeedNew**](../Model/FeedNew.md) |             |       |

### Return type

[**\NumenoArtRec\Model\FeedFull**](../Model/FeedFull.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createStream()`

```php
createStream($feed_id, $stream_new): \NumenoArtRec\Model\Stream
```

Create a new Stream for a Feed

A Stream is a query triggered on a regular schedule and used to generate content for a Feed. When creating a Stream, you specify: - A friendly `name` for the Stream - these names are not unique and are for convenience only. - A `query` - a search query to be run regularly, including the daily amount of articles you would like the Stream to generate. The maximum number of Streams you can create depends on your subscription plan.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = NumenoArtRec\Configuration::getDefaultConfiguration()->setApiKey('X-Numeno-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NumenoArtRec\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Numeno-Key', 'Bearer');


$apiInstance = new NumenoArtRec\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$feed_id = 'feed_id_example'; // string | The unique identifier of the Feed.
$stream_new = new \NumenoArtRec\Model\StreamNew(); // \NumenoArtRec\Model\StreamNew

try {
    $result = $apiInstance->createStream($feed_id, $stream_new);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createStream: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name           | Type                                                       | Description                        | Notes |
| -------------- | ---------------------------------------------------------- | ---------------------------------- | ----- |
| **feed_id**    | **string**                                                 | The unique identifier of the Feed. |       |
| **stream_new** | [**\NumenoArtRec\Model\StreamNew**](../Model/StreamNew.md) |                                    |       |

### Return type

[**\NumenoArtRec\Model\Stream**](../Model/Stream.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteFeed()`

```php
deleteFeed($id)
```

Delete a Feed by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = NumenoArtRec\Configuration::getDefaultConfiguration()->setApiKey('X-Numeno-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NumenoArtRec\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Numeno-Key', 'Bearer');


$apiInstance = new NumenoArtRec\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The unique identifier of the Feed.

try {
    $apiInstance->deleteFeed($id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteFeed: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name   | Type       | Description                        | Notes |
| ------ | ---------- | ---------------------------------- | ----- |
| **id** | **string** | The unique identifier of the Feed. |       |

### Return type

void (empty response body)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteStream()`

```php
deleteStream($feed_id, $id)
```

Delete a Stream by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = NumenoArtRec\Configuration::getDefaultConfiguration()->setApiKey('X-Numeno-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NumenoArtRec\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Numeno-Key', 'Bearer');


$apiInstance = new NumenoArtRec\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$feed_id = 'feed_id_example'; // string | The unique identifier of the Feed.
$id = 'id_example'; // string | The unique identifier of the Stream.

try {
    $apiInstance->deleteStream($feed_id, $id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteStream: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name        | Type       | Description                          | Notes |
| ----------- | ---------- | ------------------------------------ | ----- |
| **feed_id** | **string** | The unique identifier of the Feed.   |       |
| **id**      | **string** | The unique identifier of the Stream. |       |

### Return type

void (empty response body)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getArticleById()`

```php
getArticleById($id, $full): \NumenoArtRec\Model\Article
```

Get a specific Article by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = NumenoArtRec\Configuration::getDefaultConfiguration()->setApiKey('X-Numeno-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NumenoArtRec\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Numeno-Key', 'Bearer');


$apiInstance = new NumenoArtRec\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The unique identifier of the Article.
$full = True; // bool | Whether to return the full Article content or just a summary. Default is `false`. You must have the appropriate permissions.

try {
    $result = $apiInstance->getArticleById($id, $full);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getArticleById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name     | Type       | Description                                                                                                                            | Notes      |
| -------- | ---------- | -------------------------------------------------------------------------------------------------------------------------------------- | ---------- |
| **id**   | **string** | The unique identifier of the Article.                                                                                                  |            |
| **full** | **bool**   | Whether to return the full Article content or just a summary. Default is &#x60;false&#x60;. You must have the appropriate permissions. | [optional] |

### Return type

[**\NumenoArtRec\Model\Article**](../Model/Article.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getArticles()`

```php
getArticles($cursor, $limit, $from, $to): \NumenoArtRec\Model\ArticleShortList
```

Get a list of all Articles

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = NumenoArtRec\Configuration::getDefaultConfiguration()->setApiKey('X-Numeno-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NumenoArtRec\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Numeno-Key', 'Bearer');


$apiInstance = new NumenoArtRec\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cursor = 'cursor_example'; // string | Cursor for paginating results, obtained from the previous response. Omit or pass an empty string to start from the beginning.
$limit = 10; // int | Number of Articles to return per page.
$from = 1730982896000; // string | The date from which to fetch Articles in ISO 8601 UTC datetime format or in milliseconds since epoch. The maximum date range to query is 1 year.
$to = 1733574896000; // string | The date until which to fetch Articles in ISO 8601 UTC datetime format or in milliseconds since epoch. The maximum date range to query is 1 year.

try {
    $result = $apiInstance->getArticles($cursor, $limit, $from, $to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getArticles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name       | Type       | Description                                                                                                                                       | Notes                      |
| ---------- | ---------- | ------------------------------------------------------------------------------------------------------------------------------------------------- | -------------------------- |
| **cursor** | **string** | Cursor for paginating results, obtained from the previous response. Omit or pass an empty string to start from the beginning.                     | [optional]                 |
| **limit**  | **int**    | Number of Articles to return per page.                                                                                                            | [optional] [default to 10] |
| **from**   | **string** | The date from which to fetch Articles in ISO 8601 UTC datetime format or in milliseconds since epoch. The maximum date range to query is 1 year.  | [optional]                 |
| **to**     | **string** | The date until which to fetch Articles in ISO 8601 UTC datetime format or in milliseconds since epoch. The maximum date range to query is 1 year. | [optional]                 |

### Return type

[**\NumenoArtRec\Model\ArticleShortList**](../Model/ArticleShortList.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getArticlesInFeed()`

```php
getArticlesInFeed($feed_id, $masked, $from, $to, $sort, $date_to_use, $cursor, $limit): \NumenoArtRec\Model\FeedArticleList
```

Get a list of all Articles in a Feed

Call this endpoint to get a list of Articles that are currently published to the Feed. New Articles will appear according to the Feed's refresh sechedule. A number of optional paramaters can be specified when pulling Articles from a Feed, most notably the following: - `limit` - Sets the number of Articles to return in the response. - `masked` - If the `tuner` associated with this Feed can mask out duplicate Articles (the default), you can specify the `masked` flag when fetching Articles so that masked Articles are included in the response. - `from` and `to` - Optionally provide a date interval to return Articles only in this period. - `sort` - By default, Articles are ordered reverse chronologically; use this property to sort by Article score instead. - `dateToUse` - By default, dates refer to inidividual Article publishing dates; instead, you can use Article indexing dates. - `cursor` - Use for paging results; originates from the previous response.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = NumenoArtRec\Configuration::getDefaultConfiguration()->setApiKey('X-Numeno-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NumenoArtRec\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Numeno-Key', 'Bearer');


$apiInstance = new NumenoArtRec\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$feed_id = 'feed_id_example'; // string | The unique identifier of the Feed.
$masked = false; // bool | Whether to include masked articles in the response.
$from = 1730982896000; // string | The date from which to start fetching Articles in ISO 8601 UTC datetime format or in milliseconds since epoch.
$to = 1733574896000; // string | The date until which to fetch Articles in ISO 8601 UTC datetime format or in milliseconds since epoch.
$sort = 'date'; // string | The order in which to sort the Articles. Either by descending date or by descending score.
$date_to_use = 'published'; // string | The date field to use for sorting and for from/to queries. Can be either the publication date, as reported by the Article, or the date at which we added the article to the Feed.
$cursor = 'cursor_example'; // string | Cursor for paginating results, obtained from the previous response. Omit or pass an empty string to start from the beginning.
$limit = 10; // int | Number of Articles to return per page.

try {
    $result = $apiInstance->getArticlesInFeed($feed_id, $masked, $from, $to, $sort, $date_to_use, $cursor, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getArticlesInFeed: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name            | Type       | Description                                                                                                                                                                       | Notes                                       |
| --------------- | ---------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------- |
| **feed_id**     | **string** | The unique identifier of the Feed.                                                                                                                                                |                                             |
| **masked**      | **bool**   | Whether to include masked articles in the response.                                                                                                                               | [optional] [default to false]               |
| **from**        | **string** | The date from which to start fetching Articles in ISO 8601 UTC datetime format or in milliseconds since epoch.                                                                    | [optional]                                  |
| **to**          | **string** | The date until which to fetch Articles in ISO 8601 UTC datetime format or in milliseconds since epoch.                                                                            | [optional]                                  |
| **sort**        | **string** | The order in which to sort the Articles. Either by descending date or by descending score.                                                                                        | [optional] [default to &#39;date&#39;]      |
| **date_to_use** | **string** | The date field to use for sorting and for from/to queries. Can be either the publication date, as reported by the Article, or the date at which we added the article to the Feed. | [optional] [default to &#39;published&#39;] |
| **cursor**      | **string** | Cursor for paginating results, obtained from the previous response. Omit or pass an empty string to start from the beginning.                                                     | [optional]                                  |
| **limit**       | **int**    | Number of Articles to return per page.                                                                                                                                            | [optional] [default to 10]                  |

### Return type

[**\NumenoArtRec\Model\FeedArticleList**](../Model/FeedArticleList.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFeedById()`

```php
getFeedById($id): \NumenoArtRec\Model\FeedFull
```

Get a specific Feed by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = NumenoArtRec\Configuration::getDefaultConfiguration()->setApiKey('X-Numeno-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NumenoArtRec\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Numeno-Key', 'Bearer');


$apiInstance = new NumenoArtRec\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The unique identifier of the Feed.

try {
    $result = $apiInstance->getFeedById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getFeedById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name   | Type       | Description                        | Notes |
| ------ | ---------- | ---------------------------------- | ----- |
| **id** | **string** | The unique identifier of the Feed. |       |

### Return type

[**\NumenoArtRec\Model\FeedFull**](../Model/FeedFull.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFeeds()`

```php
getFeeds($cursor, $limit): \NumenoArtRec\Model\FeedList
```

Get a list of all Feeds

Returns a list of all Feeds your API Key has acccess to. Use `limit` to set the number of Feeds to return in the response. Use `cursor` for paging results.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = NumenoArtRec\Configuration::getDefaultConfiguration()->setApiKey('X-Numeno-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NumenoArtRec\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Numeno-Key', 'Bearer');


$apiInstance = new NumenoArtRec\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cursor = 'cursor_example'; // string | Cursor for paginating results, obtained from the previous response. Omit or pass an empty string to start from the beginning.
$limit = 10; // int | Number of Feeds to return per page.

try {
    $result = $apiInstance->getFeeds($cursor, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getFeeds: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name       | Type       | Description                                                                                                                   | Notes                      |
| ---------- | ---------- | ----------------------------------------------------------------------------------------------------------------------------- | -------------------------- |
| **cursor** | **string** | Cursor for paginating results, obtained from the previous response. Omit or pass an empty string to start from the beginning. | [optional]                 |
| **limit**  | **int**    | Number of Feeds to return per page.                                                                                           | [optional] [default to 10] |

### Return type

[**\NumenoArtRec\Model\FeedList**](../Model/FeedList.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getScopes()`

```php
getScopes(): \NumenoArtRec\Model\Scopes
```

Get the Scopes for this API

Get a list of all the Scopes supported by the Numeno Article Recommender API. Scopes are used to let API Keys access only certain parts of the API. Scopes are expressed as a string of the form `api:resource:action`: - `art-rec:feeds:read` - can read any Feed (eg. `GET` `/feeds`, `/feeds/:id`, `/feeds/:id/streams`, etc.) - `art-rec:feeds:write` - can write (and read) any Feed - `art-rec:feeds:*` - can perform any action on Feeds - `art-rec:*:read` - can read any resource on `art-rec` - `*:*:*` - can do everything

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new NumenoArtRec\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getScopes();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getScopes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\NumenoArtRec\Model\Scopes**](../Model/Scopes.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSources()`

```php
getSources($cursor, $limit, $from, $to): \NumenoArtRec\Model\SourceAndCountList
```

Get Sources and their Articles

Get a list of all Sources (websites) and how many Articles they have produced over a given date range.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = NumenoArtRec\Configuration::getDefaultConfiguration()->setApiKey('X-Numeno-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NumenoArtRec\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Numeno-Key', 'Bearer');


$apiInstance = new NumenoArtRec\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cursor = 'cursor_example'; // string | Cursor for paginating results, obtained from the previous response. Omit or pass an empty string to start from the beginning.
$limit = 10; // int | Number of Sources to return per page.
$from = 1730982896000; // string | The date from which to fetch Sources in ISO 8601 UTC datetime format or in milliseconds since epoch. The maximum date range to query is 1 year.
$to = 1733574896000; // string | The date until which to fetch Sources in ISO 8601 UTC datetime format or in milliseconds since epoch. The maximum date range to query is 1 year.

try {
    $result = $apiInstance->getSources($cursor, $limit, $from, $to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getSources: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name       | Type       | Description                                                                                                                                      | Notes                      |
| ---------- | ---------- | ------------------------------------------------------------------------------------------------------------------------------------------------ | -------------------------- |
| **cursor** | **string** | Cursor for paginating results, obtained from the previous response. Omit or pass an empty string to start from the beginning.                    | [optional]                 |
| **limit**  | **int**    | Number of Sources to return per page.                                                                                                            | [optional] [default to 10] |
| **from**   | **string** | The date from which to fetch Sources in ISO 8601 UTC datetime format or in milliseconds since epoch. The maximum date range to query is 1 year.  | [optional]                 |
| **to**     | **string** | The date until which to fetch Sources in ISO 8601 UTC datetime format or in milliseconds since epoch. The maximum date range to query is 1 year. | [optional]                 |

### Return type

[**\NumenoArtRec\Model\SourceAndCountList**](../Model/SourceAndCountList.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getStreamById()`

```php
getStreamById($feed_id, $id): \NumenoArtRec\Model\Stream
```

Get a specific Stream by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = NumenoArtRec\Configuration::getDefaultConfiguration()->setApiKey('X-Numeno-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NumenoArtRec\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Numeno-Key', 'Bearer');


$apiInstance = new NumenoArtRec\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$feed_id = 'feed_id_example'; // string | The unique identifier of the Feed.
$id = 'id_example'; // string | The unique identifier of the Stream.

try {
    $result = $apiInstance->getStreamById($feed_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getStreamById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name        | Type       | Description                          | Notes |
| ----------- | ---------- | ------------------------------------ | ----- |
| **feed_id** | **string** | The unique identifier of the Feed.   |       |
| **id**      | **string** | The unique identifier of the Stream. |       |

### Return type

[**\NumenoArtRec\Model\Stream**](../Model/Stream.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getStreams()`

```php
getStreams($feed_id, $cursor, $limit): \NumenoArtRec\Model\StreamList
```

Get a list of all Streams in a Feed

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = NumenoArtRec\Configuration::getDefaultConfiguration()->setApiKey('X-Numeno-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NumenoArtRec\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Numeno-Key', 'Bearer');


$apiInstance = new NumenoArtRec\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$feed_id = 'feed_id_example'; // string | The unique identifier of the Feed.
$cursor = 'cursor_example'; // string | Cursor for paginating results, obtained from the previous response. Omit or pass an empty string to start from the beginning.
$limit = 10; // int | Number of Streams to return per page.

try {
    $result = $apiInstance->getStreams($feed_id, $cursor, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getStreams: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name        | Type       | Description                                                                                                                   | Notes                      |
| ----------- | ---------- | ----------------------------------------------------------------------------------------------------------------------------- | -------------------------- |
| **feed_id** | **string** | The unique identifier of the Feed.                                                                                            |                            |
| **cursor**  | **string** | Cursor for paginating results, obtained from the previous response. Omit or pass an empty string to start from the beginning. | [optional]                 |
| **limit**   | **int**    | Number of Streams to return per page.                                                                                         | [optional] [default to 10] |

### Return type

[**\NumenoArtRec\Model\StreamList**](../Model/StreamList.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTopics()`

```php
getTopics($cursor, $limit, $from, $to): \NumenoArtRec\Model\TopicAndWeightList
```

Get a list of all Topics

Get a list of all Topics and their weights, that were produced over a given date range.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = NumenoArtRec\Configuration::getDefaultConfiguration()->setApiKey('X-Numeno-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NumenoArtRec\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Numeno-Key', 'Bearer');


$apiInstance = new NumenoArtRec\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cursor = 'cursor_example'; // string | Cursor for paginating results, obtained from the previous response. Omit or pass an empty string to start from the beginning.
$limit = 10; // int | Number of Topics to return per page.
$from = 1730982896000; // string | The date from which to fetch Topics in ISO 8601 UTC datetime format or in milliseconds since epoch. The maximum date range to query is 1 week.
$to = 1733574896000; // string | The date until which to fetch Topics in ISO 8601 UTC datetime format or in milliseconds since epoch. The maximum date range to query is 1 week.

try {
    $result = $apiInstance->getTopics($cursor, $limit, $from, $to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getTopics: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name       | Type       | Description                                                                                                                                     | Notes                      |
| ---------- | ---------- | ----------------------------------------------------------------------------------------------------------------------------------------------- | -------------------------- |
| **cursor** | **string** | Cursor for paginating results, obtained from the previous response. Omit or pass an empty string to start from the beginning.                   | [optional]                 |
| **limit**  | **int**    | Number of Topics to return per page.                                                                                                            | [optional] [default to 10] |
| **from**   | **string** | The date from which to fetch Topics in ISO 8601 UTC datetime format or in milliseconds since epoch. The maximum date range to query is 1 week.  | [optional]                 |
| **to**     | **string** | The date until which to fetch Topics in ISO 8601 UTC datetime format or in milliseconds since epoch. The maximum date range to query is 1 week. | [optional]                 |

### Return type

[**\NumenoArtRec\Model\TopicAndWeightList**](../Model/TopicAndWeightList.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `healthCheck()`

```php
healthCheck(): \NumenoArtRec\Model\HealthCheck
```

Check the health of the API

A health check endpoint. Returns a code indicating the health of the Article Recommender service.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new NumenoArtRec\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->healthCheck();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->healthCheck: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\NumenoArtRec\Model\HealthCheck**](../Model/HealthCheck.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `refreshFeed()`

```php
refreshFeed($feed_id)
```

Force a Feed to refresh

When a Feed refreshes, new Articles appear in the Feed. By default, Feeds will refresh on a schedule. However, you can manually force a Feed to refresh immediately by hitting this endpoint. Caveat: you need explicit permission to manually refresh a Feed. These permissions will be attached to your API Key Scopes. Contact the Numeno team for details.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = NumenoArtRec\Configuration::getDefaultConfiguration()->setApiKey('X-Numeno-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NumenoArtRec\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Numeno-Key', 'Bearer');


$apiInstance = new NumenoArtRec\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$feed_id = 'feed_id_example'; // string | The unique identifier of the Feed.

try {
    $apiInstance->refreshFeed($feed_id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->refreshFeed: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name        | Type       | Description                        | Notes |
| ----------- | ---------- | ---------------------------------- | ----- |
| **feed_id** | **string** | The unique identifier of the Feed. |       |

### Return type

void (empty response body)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchArticles()`

```php
searchArticles($query_or_continuation): \NumenoArtRec\Model\SearchArticleList
```

Search for Articles

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = NumenoArtRec\Configuration::getDefaultConfiguration()->setApiKey('X-Numeno-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NumenoArtRec\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Numeno-Key', 'Bearer');


$apiInstance = new NumenoArtRec\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$query_or_continuation = new \NumenoArtRec\Model\QueryOrContinuation(); // \NumenoArtRec\Model\QueryOrContinuation

try {
    $result = $apiInstance->searchArticles($query_or_continuation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->searchArticles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name                      | Type                                                                           | Description | Notes |
| ------------------------- | ------------------------------------------------------------------------------ | ----------- | ----- |
| **query_or_continuation** | [**\NumenoArtRec\Model\QueryOrContinuation**](../Model/QueryOrContinuation.md) |             |       |

### Return type

[**\NumenoArtRec\Model\SearchArticleList**](../Model/SearchArticleList.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateFeed()`

```php
updateFeed($id, $feed_update): \NumenoArtRec\Model\FeedFull
```

Update a Feed by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = NumenoArtRec\Configuration::getDefaultConfiguration()->setApiKey('X-Numeno-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NumenoArtRec\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Numeno-Key', 'Bearer');


$apiInstance = new NumenoArtRec\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The unique identifier of the Feed.
$feed_update = new \NumenoArtRec\Model\FeedUpdate(); // \NumenoArtRec\Model\FeedUpdate

try {
    $result = $apiInstance->updateFeed($id, $feed_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->updateFeed: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name            | Type                                                         | Description                        | Notes |
| --------------- | ------------------------------------------------------------ | ---------------------------------- | ----- |
| **id**          | **string**                                                   | The unique identifier of the Feed. |       |
| **feed_update** | [**\NumenoArtRec\Model\FeedUpdate**](../Model/FeedUpdate.md) |                                    |       |

### Return type

[**\NumenoArtRec\Model\FeedFull**](../Model/FeedFull.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateStream()`

```php
updateStream($feed_id, $id, $stream_update): \NumenoArtRec\Model\Stream
```

Update a Stream by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = NumenoArtRec\Configuration::getDefaultConfiguration()->setApiKey('X-Numeno-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NumenoArtRec\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Numeno-Key', 'Bearer');


$apiInstance = new NumenoArtRec\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$feed_id = 'feed_id_example'; // string | The unique identifier of the Feed.
$id = 'id_example'; // string | The unique identifier of the Stream.
$stream_update = new \NumenoArtRec\Model\StreamUpdate(); // \NumenoArtRec\Model\StreamUpdate

try {
    $result = $apiInstance->updateStream($feed_id, $id, $stream_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->updateStream: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name              | Type                                                             | Description                          | Notes |
| ----------------- | ---------------------------------------------------------------- | ------------------------------------ | ----- |
| **feed_id**       | **string**                                                       | The unique identifier of the Feed.   |       |
| **id**            | **string**                                                       | The unique identifier of the Stream. |       |
| **stream_update** | [**\NumenoArtRec\Model\StreamUpdate**](../Model/StreamUpdate.md) |                                      |       |

### Return type

[**\NumenoArtRec\Model\Stream**](../Model/Stream.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
