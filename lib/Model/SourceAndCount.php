<?php
/**
 * SourceAndCount
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  NumenoArtRec
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Numeno Article Recommender API
 *
 * ## Introduction  Use the Numeno Article Recommender API to receive a curated selection of articles from across the web.  See below for the steps to creating a Feed, as well as an introduction to the top-level concepts making up the Article Recommender API.  ## Steps to creating a Feed  1. Create a Feed - [`/feeds`](create-feed) 2. Create a number of Stream queries associated with the Feed - [`/feeds/:feedId/streams`](create-stream) 3. Pull from the Feed as the Feed refreshes - [`/feeds/:feedId/articles`](get-articles-in-feed) 4. Use those Article IDs to look up metadata for the Articles -[`/articles/:id`](get-article-by-id) 5. Visit the Article links and render to your server DB or client app.  ## Sources, Articles and Topics  A **Source** is a place where Articles come from, typically a website, a blog, or a knowledgebase endpoint. Sources can be queried for activity via the [`/sources`](get-sources) endpoint.  Beyond the Sources Numeno regaularly indexes, additional Sources can be associated with Stream queries, and Sources can be `allowlist`/`denylist`'d.  **Articles** are the documents produced by Sources, typically pages from a blogpost or website, articles from a news source, or posts from a social platform or company intranet.  See the [`/articles`](search-articles) endpoint.  **Topics**  - Numeno has millions of Topics that it associates with Articles when they are sourced.  Topics are used in Stream queries, which themselves are composed to create Feeds.  Get topics via the [`/topics`](get-topics) endpoint.  ## Feeds  **A Feed is a collection of Streams.** Feeds are configured to refresh on a regular schedule.  No new Articles are published to a Feed except when it's refreshed.  Feeds can be refreshed manually if the API Key Scopes allow.  You can ask for Articles chronologically or by decreasing score.  You can also limit Articles to a date-range, meaning that you can produce Feeds from historical content.  Interact with Feeds via the [`/feeds`](create-feed) endpoint.  ## Streams  Think of a **Stream** as a search query with a \"volume control knob\".  It's a collection of Topics that you're interested and a collection of Sources you'd explicitly like to include or exclude. Streams are associated with a Feed, and a collection of Streams produce the sequence of Articles that appear when a Feed is refreshed.  The \"volume control knob\" on a Stream is a way to decide how many of the search results from the Stream query are included in the Feed. Our searches are \"soft\", and with a such a rich `Article x Topic` space to draw on, the \"volume control\" allows you to put a cuttoff on what you'd like included.  Streams are a nested resource of `/feeds` - get started by explorting [`/feeds/:feedId/streams`](create-stream).
 *
 * The version of the OpenAPI document: 1.0.0
 * Contact: support@numeno.ai
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.10.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace NumenoArtRec\Model;

use \ArrayAccess;
use \NumenoArtRec\ObjectSerializer;

/**
 * SourceAndCount Class Doc Comment
 *
 * @category Class
 * @description The URL of a Source of Articles paired with the number of Articles seen from that Source in the requested date range.
 * @package  NumenoArtRec
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class SourceAndCount implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SourceAndCount';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'url' => 'string',
        'count' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'url' => null,
        'count' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'url' => false,
        'count' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'url' => 'url',
        'count' => 'count'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'url' => 'setUrl',
        'count' => 'setCount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'url' => 'getUrl',
        'count' => 'getCount'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('url', $data ?? [], null);
        $this->setIfExists('count', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['url'] === null) {
            $invalidProperties[] = "'url' can't be null";
        }
        if ((mb_strlen($this->container['url']) > 1024)) {
            $invalidProperties[] = "invalid value for 'url', the character length must be smaller than or equal to 1024.";
        }

        if ($this->container['count'] === null) {
            $invalidProperties[] = "'count' can't be null";
        }
        if (($this->container['count'] < 0)) {
            $invalidProperties[] = "invalid value for 'count', must be bigger than or equal to 0.";
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string $url The URL of the Source, without a schema, optionally including a path if it is required to uniquely identify that Source. The domain must always be lowercase.
     *
     * @return self
     */
    public function setUrl($url)
    {
        if (is_null($url)) {
            throw new \InvalidArgumentException('non-nullable url cannot be null');
        }
        if ((mb_strlen($url) > 1024)) {
            throw new \InvalidArgumentException('invalid length for $url when calling SourceAndCount., must be smaller than or equal to 1024.');
        }

        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets count
     *
     * @return float
     */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
     * Sets count
     *
     * @param float $count The number of Articles this Source has contributed during the given interval of time.
     *
     * @return self
     */
    public function setCount($count)
    {
        if (is_null($count)) {
            throw new \InvalidArgumentException('non-nullable count cannot be null');
        }

        if (($count < 0)) {
            throw new \InvalidArgumentException('invalid value for $count when calling SourceAndCount., must be bigger than or equal to 0.');
        }

        $this->container['count'] = $count;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


