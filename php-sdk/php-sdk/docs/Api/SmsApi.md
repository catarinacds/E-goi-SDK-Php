# org.egoi.client\SmsApi

All URIs are relative to *http://api-v3.egoiapp.max*

Method | HTTP request | Description
------------- | ------------- | -------------
[**actionSendSms**](SmsApi.md#actionSendSms) | **POST** /campaigns/sms/{campaign_hash}/actions/send | Send sms message
[**createSmsCampaign**](SmsApi.md#createSmsCampaign) | **POST** /campaigns/sms | Create new sms campaign
[**patchSmsCampaign**](SmsApi.md#patchSmsCampaign) | **PATCH** /campaigns/sms/{campaign_hash} | Update a specific sms campaign



## actionSendSms

> \org.egoi.client\org.egoi.client.model\AcceptedResponse actionSendSms($campaign_hash, $campaign_sms_send_request)

Send sms message

Deploys and sends an sms message

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = org.egoi.client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = org.egoi.client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new org.egoi.client\Api\SmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_hash = 'campaign_hash_example'; // string | ID of the Campaign
$campaign_sms_send_request = new \org.egoi.client\org.egoi.client.model\CampaignSmsSendRequest(); // \org.egoi.client\org.egoi.client.model\CampaignSmsSendRequest | Parameters for the 'send sms' action

try {
    $result = $apiInstance->actionSendSms($campaign_hash, $campaign_sms_send_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmsApi->actionSendSms: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_hash** | **string**| ID of the Campaign |
 **campaign_sms_send_request** | [**\org.egoi.client\org.egoi.client.model\CampaignSmsSendRequest**](../Model/CampaignSmsSendRequest.md)| Parameters for the &#39;send sms&#39; action |

### Return type

[**\org.egoi.client\org.egoi.client.model\AcceptedResponse**](../Model/AcceptedResponse.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createSmsCampaign

> \org.egoi.client\org.egoi.client.model\HashcodeCampaign createSmsCampaign($sms_campaign)

Create new sms campaign

Create a new sms campaign

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = org.egoi.client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = org.egoi.client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new org.egoi.client\Api\SmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sms_campaign = new \org.egoi.client\org.egoi.client.model\SmsCampaign(); // \org.egoi.client\org.egoi.client.model\SmsCampaign | Parameters for the Sms Campaign

try {
    $result = $apiInstance->createSmsCampaign($sms_campaign);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmsApi->createSmsCampaign: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sms_campaign** | [**\org.egoi.client\org.egoi.client.model\SmsCampaign**](../Model/SmsCampaign.md)| Parameters for the Sms Campaign |

### Return type

[**\org.egoi.client\org.egoi.client.model\HashcodeCampaign**](../Model/HashcodeCampaign.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## patchSmsCampaign

> \org.egoi.client\org.egoi.client.model\HashcodeCampaign patchSmsCampaign($campaign_hash, $sms_campaign_patch_request)

Update a specific sms campaign

Update sms campaign

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = org.egoi.client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = org.egoi.client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new org.egoi.client\Api\SmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_hash = 'campaign_hash_example'; // string | ID of the Campaign
$sms_campaign_patch_request = new \org.egoi.client\org.egoi.client.model\SmsCampaignPatchRequest(); // \org.egoi.client\org.egoi.client.model\SmsCampaignPatchRequest | Parameters for the Sms Campaign

try {
    $result = $apiInstance->patchSmsCampaign($campaign_hash, $sms_campaign_patch_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmsApi->patchSmsCampaign: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_hash** | **string**| ID of the Campaign |
 **sms_campaign_patch_request** | [**\org.egoi.client\org.egoi.client.model\SmsCampaignPatchRequest**](../Model/SmsCampaignPatchRequest.md)| Parameters for the Sms Campaign |

### Return type

[**\org.egoi.client\org.egoi.client.model\HashcodeCampaign**](../Model/HashcodeCampaign.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

