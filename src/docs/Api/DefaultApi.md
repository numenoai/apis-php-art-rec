# NumenoArtRec\DefaultApi

All URIs are relative to https://api.numeno.ai/art-rec, except if the operation defines another base path.

| Method                                         | HTTP request                  | Description                 |
| ---------------------------------------------- | ----------------------------- | --------------------------- |
| [**createFeed()**](DefaultApi.md#createFeed)   | **POST** /v1/feeds            | Create a new feed           |
| [**deleteFeed()**](DefaultApi.md#deleteFeed)   | **DELETE** /v1/feeds/{feedId} | Delete a feed by ID         |
| [**getFeedById()**](DefaultApi.md#getFeedById) | **GET** /v1/feeds/{feedId}    | Get a specific feed by ID   |
| [**getFeeds()**](DefaultApi.md#getFeeds)       | **GET** /v1/feeds             | Get a list of all feeds     |
| [**healthCheck()**](DefaultApi.md#healthCheck) | **GET** /health               | Check the health of the API |
| [**updateFeed()**](DefaultApi.md#updateFeed)   | **PUT** /v1/feeds/{feedId}    | Update a feed by ID         |

## `createFeed()`

```php
createFeed($feed_new): \NumenoArtRec\Model\Feed
```

Create a new feed

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

[**\NumenoArtRec\Model\Feed**](../Model/Feed.md)

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
deleteFeed($feed_id)
```

Delete a feed by ID

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
$feed_id = 'feed_id_example'; // string

try {
    $apiInstance->deleteFeed($feed_id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteFeed: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name        | Type       | Description | Notes |
| ----------- | ---------- | ----------- | ----- |
| **feed_id** | **string** |             |       |

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

## `getFeedById()`

```php
getFeedById($feed_id): \NumenoArtRec\Model\Feed
```

Get a specific feed by ID

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
$feed_id = 'feed_id_example'; // string

try {
    $result = $apiInstance->getFeedById($feed_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getFeedById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name        | Type       | Description | Notes |
| ----------- | ---------- | ----------- | ----- |
| **feed_id** | **string** |             |       |

### Return type

[**\NumenoArtRec\Model\Feed**](../Model/Feed.md)

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
getFeeds($cursor, $limit): \NumenoArtRec\Model\Feeds
```

Get a list of all feeds

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
$limit = 10; // int | Number of feeds to return per page

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
| **limit**  | **int**    | Number of feeds to return per page                                                                                            | [optional] [default to 10] |

### Return type

[**\NumenoArtRec\Model\Feeds**](../Model/Feeds.md)

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

## `updateFeed()`

```php
updateFeed($feed_id, $feed_update): \NumenoArtRec\Model\Feed
```

Update a feed by ID

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
$feed_id = 'feed_id_example'; // string
$feed_update = new \NumenoArtRec\Model\FeedUpdate(); // \NumenoArtRec\Model\FeedUpdate

try {
    $result = $apiInstance->updateFeed($feed_id, $feed_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->updateFeed: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name            | Type                                                         | Description | Notes |
| --------------- | ------------------------------------------------------------ | ----------- | ----- |
| **feed_id**     | **string**                                                   |             |       |
| **feed_update** | [**\NumenoArtRec\Model\FeedUpdate**](../Model/FeedUpdate.md) |             |       |

### Return type

[**\NumenoArtRec\Model\Feed**](../Model/Feed.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
