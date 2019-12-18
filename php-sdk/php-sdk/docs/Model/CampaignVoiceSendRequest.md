# # CampaignVoiceSendRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**list_id** | **int** |  | 
**segments** | [**\org.egoi.client\org.egoi.client.model\OSegmentsActionSend**](OSegmentsActionSend.md) |  | 
**notify** | **int[]** | Array of IDs of the users to notify | [optional] 
**destination_field** | **string** | Destination field of this campaign | 
**limit_contacts** | [**\org.egoi.client\org.egoi.client.model\OLimitContactsActionSend**](OLimitContactsActionSend.md) |  | [optional] 
**limit_hour** | [**\org.egoi.client\org.egoi.client.model\LimitHourActionSendLimitHour**](LimitHourActionSendLimitHour.md) |  | [optional] 
**limit_speed** | **int** | Speed limit to send the campaign | [optional] 
**schedule_date** | [**\DateTime**](\DateTime.md) | The date and time | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


