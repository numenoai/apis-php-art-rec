# NumenoAPI-php

## Introduction

Use the Numeno Article Recommender API to receive a curated selection of articles from across the web.

See below for the steps to creating a Feed, as well as an introduction to the top-level concepts making up the Article Recommender API.

## Steps to creating a Feed

1. Create a Feed - [`createFeed`](docs/Api/DefaultApi#createfeed)
2. Create a number of Stream queries associated with the Feed - [`createStream`](docs/Api/DefaultApi#createstream)
3. Pull from the Feed as the Feed refreshes - [`getArticlesInFeed`](docs/Api/DefaultApi#getarticlesinfeed)
4. Use those Article IDs to look up metadata for the Articles -[`getArticleById`](docs/Api/DefaultApi#getarticlebyid)
5. Visit the Article links and render to your server DB or client app.

## Sources, Articles and Topics

A **Source** is a place where Articles come from, typically a website, a blog, or a knowledgebase endpoint. Sources can be queried for activity via the [`getSources`](docs/Api/DefaultApi#getsources) endpoint. Beyond the Sources Numeno regaularly indexes, additional Sources can be associated with Stream queries, and Sources can be `allowlist`/`denylist`'d.

**Articles** are the documents produced by Sources, typically pages from a blogpost or website, articles from a news source, or posts from a social platform or company intranet. See the [`getArticles`](docs/Api/DefaultApi#getarticles) endpoint.

**Topics** - Numeno has millions of Topics that it associates with Articles when they are sourced. Topics are used in Stream queries, which themselves are composed to create Feeds. Get topics via the [`getTopics`](docs/Api/DefaultApi#gettopics) endpoint.

## Feeds

**A Feed is a collection of Streams.** Feeds are configured to refresh on a regular schedule. No new Articles are published to a Feed except when it's refreshed. Feeds can be refreshed manually if the API Key Scopes allow.

You can ask for Articles chronologically or by decreasing score. You can also limit Articles to a date-range, meaning that you can produce Feeds from historical content.

Interact with Feeds via the [`createFeed`](docs/Api/DefaultApi#createfeed) endpoint.

## Streams

Think of a **Stream** as a search query with a \"volume control knob\". It's a collection of Topics that you're interested and a collection of Sources you'd explicitly like to include or exclude. Streams are associated with a Feed, and a collection of Streams produce the sequence of Articles that appear when a Feed is refreshed.

The \"volume control knob\" on a Stream is a way to decide how many of the search results from the Stream query are included in the Feed. Our searches are \"soft\", and with a such a rich `Article x Topic` space to draw on, the \"volume control\" allows you to put a cuttoff on what you'd like included.

Streams are a nested resource of `createFeed` - get started by explorting [`createStream`](docs/Api/DefaultApi#createstream).

For more information, please visit [https://numeno.ai/](https://numeno.ai/).

## Installation & Usage

### Requirements

PHP 7.4 and later.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "minimum-stability": "dev",
  "require": {
    "numeno/api-art-rec": "dev-main"
  }
}
```

Then run `composer install`

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## API Endpoints

All URIs are relative to *https://api.numeno.ai/art-rec*

| Class        | Method                                                            | HTTP request                               | Description                          |
| ------------ | ----------------------------------------------------------------- | ------------------------------------------ | ------------------------------------ |
| _DefaultApi_ | [**createFeed**](docs/Api/DefaultApi.md#createfeed)               | **POST** /v1/feeds                         | Create a new Feed                    |
| _DefaultApi_ | [**createStream**](docs/Api/DefaultApi.md#createstream)           | **POST** /v1/feeds/{feedId}/streams        | Create a new Stream for a Feed       |
| _DefaultApi_ | [**deleteFeed**](docs/Api/DefaultApi.md#deletefeed)               | **DELETE** /v1/feeds/{id}                  | Delete a Feed by ID                  |
| _DefaultApi_ | [**deleteStream**](docs/Api/DefaultApi.md#deletestream)           | **DELETE** /v1/feeds/{feedId}/streams/{id} | Delete a Stream by ID                |
| _DefaultApi_ | [**getArticleById**](docs/Api/DefaultApi.md#getarticlebyid)       | **GET** /v1/articles/{id}                  | Get a specific Article by ID         |
| _DefaultApi_ | [**getArticles**](docs/Api/DefaultApi.md#getarticles)             | **GET** /v1/articles                       | Get a list of all Articles           |
| _DefaultApi_ | [**getArticlesInFeed**](docs/Api/DefaultApi.md#getarticlesinfeed) | **GET** /v1/feeds/{feedId}/articles        | Get a list of all Articles in a Feed |
| _DefaultApi_ | [**getFeedById**](docs/Api/DefaultApi.md#getfeedbyid)             | **GET** /v1/feeds/{id}                     | Get a specific Feed by ID            |
| _DefaultApi_ | [**getFeeds**](docs/Api/DefaultApi.md#getfeeds)                   | **GET** /v1/feeds                          | Get a list of all Feeds              |
| _DefaultApi_ | [**getScopes**](docs/Api/DefaultApi.md#getscopes)                 | **GET** /v1/scopes                         | Get the Scopes for this API          |
| _DefaultApi_ | [**getSources**](docs/Api/DefaultApi.md#getsources)               | **GET** /v1/sources                        | Get Sources and their Articles       |
| _DefaultApi_ | [**getStreamById**](docs/Api/DefaultApi.md#getstreambyid)         | **GET** /v1/feeds/{feedId}/streams/{id}    | Get a specific Stream by ID          |
| _DefaultApi_ | [**getStreams**](docs/Api/DefaultApi.md#getstreams)               | **GET** /v1/feeds/{feedId}/streams         | Get a list of all Streams in a Feed  |
| _DefaultApi_ | [**getTopics**](docs/Api/DefaultApi.md#gettopics)                 | **GET** /v1/topics                         | Get a list of all Topics             |
| _DefaultApi_ | [**healthCheck**](docs/Api/DefaultApi.md#healthcheck)             | **GET** /health                            | Check the health of the API          |
| _DefaultApi_ | [**refreshFeed**](docs/Api/DefaultApi.md#refreshfeed)             | **POST** /v1/feeds/{feedId}/refresh        | Force a Feed to refresh              |
| _DefaultApi_ | [**searchArticles**](docs/Api/DefaultApi.md#searcharticles)       | **POST** /v1/articles/search               | Search for Articles                  |
| _DefaultApi_ | [**updateFeed**](docs/Api/DefaultApi.md#updatefeed)               | **PUT** /v1/feeds/{id}                     | Update a Feed by ID                  |
| _DefaultApi_ | [**updateStream**](docs/Api/DefaultApi.md#updatestream)           | **PUT** /v1/feeds/{feedId}/streams/{id}    | Update a Stream by ID                |

## Models

- [Article](docs/Model/Article.md)
- [ArticleShort](docs/Model/ArticleShort.md)
- [ArticleShortList](docs/Model/ArticleShortList.md)
- [ErrorDetail](docs/Model/ErrorDetail.md)
- [ErrorResponse](docs/Model/ErrorResponse.md)
- [Feed](docs/Model/Feed.md)
- [FeedArticle](docs/Model/FeedArticle.md)
- [FeedArticleList](docs/Model/FeedArticleList.md)
- [FeedFull](docs/Model/FeedFull.md)
- [FeedList](docs/Model/FeedList.md)
- [FeedNew](docs/Model/FeedNew.md)
- [FeedSchedule](docs/Model/FeedSchedule.md)
- [FeedTuner](docs/Model/FeedTuner.md)
- [FeedUpdate](docs/Model/FeedUpdate.md)
- [HealthCheck](docs/Model/HealthCheck.md)
- [Query](docs/Model/Query.md)
- [QueryBase](docs/Model/QueryBase.md)
- [QueryOrContinuation](docs/Model/QueryOrContinuation.md)
- [QuerySources](docs/Model/QuerySources.md)
- [QueryTopics](docs/Model/QueryTopics.md)
- [QueryTopicsItems](docs/Model/QueryTopicsItems.md)
- [Scopes](docs/Model/Scopes.md)
- [SearchArticle](docs/Model/SearchArticle.md)
- [SearchArticleList](docs/Model/SearchArticleList.md)
- [SearchContinuation](docs/Model/SearchContinuation.md)
- [SearchQuery](docs/Model/SearchQuery.md)
- [SourceAndCount](docs/Model/SourceAndCount.md)
- [SourceAndCountList](docs/Model/SourceAndCountList.md)
- [Stream](docs/Model/Stream.md)
- [StreamList](docs/Model/StreamList.md)
- [StreamNew](docs/Model/StreamNew.md)
- [StreamQuery](docs/Model/StreamQuery.md)
- [StreamUpdate](docs/Model/StreamUpdate.md)
- [TopicAndWeight](docs/Model/TopicAndWeight.md)
- [TopicAndWeightList](docs/Model/TopicAndWeightList.md)
- [VolumeControl](docs/Model/VolumeControl.md)

## Authorization

Authentication schemes defined for the API:

### ApiKeyAuth

- **Type**: API key
- **API key parameter name**: X-Numeno-Key
- **Location**: HTTP header

## Author

support@numeno.ai

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.0.0`
  - Package version: `0.0.6`
  - Generator version: `7.10.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
