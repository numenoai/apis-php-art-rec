# # FeedFull

## Properties

| Name             | Type                                                    | Description                                                    | Notes      |
| ---------------- | ------------------------------------------------------- | -------------------------------------------------------------- | ---------- |
| **id**           | **string**                                              | The unique ID of the Feed.                                     |
| **refreshed_at** | **\DateTime**                                           | The date the Feed was last refreshed in ISO 8601 UTC datetime. | [optional] |
| **created_at**   | **\DateTime**                                           | The date the Feed was created in ISO 8601 UTC datetime.        | [optional] |
| **updated_at**   | **\DateTime**                                           | The date the Feed was last updated in ISO 8601 UTC datetime.   | [optional] |
| **name**         | **string**                                              | The name of the Feed for easy reference.                       |
| **schedule**     | [**\NumenoArtRec\Model\FeedSchedule**](FeedSchedule.md) |                                                                | [optional] |
| **tuner**        | [**\NumenoArtRec\Model\FeedTuner**](FeedTuner.md)       |                                                                | [optional] |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
