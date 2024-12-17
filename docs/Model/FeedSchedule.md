# # FeedSchedule

## Properties

| Name         | Type       | Description                                                                                                                                                          | Notes                           |
| ------------ | ---------- | -------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------- |
| **interval** | **string** | The interval at which to refresh the Feed. The allowed interval depends on your subscription plan.                                                                   | [optional] [default to 'daily'] |
| **hour**     | **int**    | The hour at which to refresh the Feed, in UTC (0-23). The Feed will be refreshed within 1h of this time. Ignored if the Feed refresh interval is &#x60;hourly&#x60;. | [optional] [default to 20]      |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
