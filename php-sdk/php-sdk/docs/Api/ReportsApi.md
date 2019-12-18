# org.egoi.client\ReportsApi

All URIs are relative to *http://api-v3.egoiapp.max*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getPushReport**](ReportsApi.md#getPushReport) | **GET** /reports/push/{campaign_hash} | Get push report
[**getSMSReport**](ReportsApi.md#getSMSReport) | **GET** /reports/sms/{campaign_hash} | Get sms report
[**getVoiceReport**](ReportsApi.md#getVoiceReport) | **GET** /reports/voice/{campaign_hash} | Get voice report
[**getWebPushReport**](ReportsApi.md#getWebPushReport) | **GET** /reports/web-push/{campaign_hash} | Get webpush report



## getPushReport

> \org.egoi.client\org.egoi.client.model\PushReport getPushReport($campaign_hash, $operating_systems, $brands)

Get push report

Returns a push report given the campaign hash

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = org.egoi.client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = org.egoi.client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new org.egoi.client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_hash = 'campaign_hash_example'; // string | ID of the Campaign
$operating_systems = true; // bool | True to show operating system stats
$brands = true; // bool | True to show brand stats

try {
    $result = $apiInstance->getPushReport($campaign_hash, $operating_systems, $brands);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->getPushReport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_hash** | **string**| ID of the Campaign |
 **operating_systems** | **bool**| True to show operating system stats | [optional] [default to true]
 **brands** | **bool**| True to show brand stats | [optional] [default to true]

### Return type

[**\org.egoi.client\org.egoi.client.model\PushReport**](../Model/PushReport.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getSMSReport

> \org.egoi.client\org.egoi.client.model\PhoneReport getSMSReport($campaign_hash, $networks)

Get sms report

Returns sms report given the campaign hash

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = org.egoi.client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = org.egoi.client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new org.egoi.client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_hash = 'campaign_hash_example'; // string | ID of the Campaign
$networks = true; // bool | True to show network stats

try {
    $result = $apiInstance->getSMSReport($campaign_hash, $networks);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->getSMSReport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_hash** | **string**| ID of the Campaign |
 **networks** | **bool**| True to show network stats | [optional] [default to true]

### Return type

[**\org.egoi.client\org.egoi.client.model\PhoneReport**](../Model/PhoneReport.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getVoiceReport

> \org.egoi.client\org.egoi.client.model\PhoneReport getVoiceReport($campaign_hash, $networks)

Get voice report

Returns voice report given the campaign hash

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = org.egoi.client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = org.egoi.client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new org.egoi.client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_hash = 'campaign_hash_example'; // string | ID of the Campaign
$networks = true; // bool | True to show network stats

try {
    $result = $apiInstance->getVoiceReport($campaign_hash, $networks);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->getVoiceReport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_hash** | **string**| ID of the Campaign |
 **networks** | **bool**| True to show network stats | [optional] [default to true]

### Return type

[**\org.egoi.client\org.egoi.client.model\PhoneReport**](../Model/PhoneReport.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getWebPushReport

> \org.egoi.client\org.egoi.client.model\WebPushReport getWebPushReport($campaign_hash, $devices, $operating_systems, $browsers, $url)

Get webpush report

Returns webpush report given the campaign hash

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = org.egoi.client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = org.egoi.client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new org.egoi.client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_hash = 'campaign_hash_example'; // string | ID of the Campaign
$devices = true; // bool | True to show device stats
$operating_systems = true; // bool | True to show operating systems stats
$browsers = true; // bool | True to show browser stats
$url = true; // bool | True to show url stats

try {
    $result = $apiInstance->getWebPushReport($campaign_hash, $devices, $operating_systems, $browsers, $url);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->getWebPushReport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_hash** | **string**| ID of the Campaign |
 **devices** | **bool**| True to show device stats | [optional] [default to true]
 **operating_systems** | **bool**| True to show operating systems stats | [optional] [default to true]
 **browsers** | **bool**| True to show browser stats | [optional] [default to true]
 **url** | **bool**| True to show url stats | [optional] [default to true]

### Return type

[**\org.egoi.client\org.egoi.client.model\WebPushReport**](../Model/WebPushReport.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

