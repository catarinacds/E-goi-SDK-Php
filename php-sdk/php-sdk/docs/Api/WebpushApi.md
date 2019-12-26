# org.egoi.client\WebpushApi

All URIs are relative to *http://api-v3.egoiapp.max*

Method | HTTP request | Description
------------- | ------------- | -------------
[**actionEnableWebPushRss**](WebpushApi.md#actionEnableWebPushRss) | **POST** /campaigns/webpush/rss/{campaign_hash}/actions/enable | Enable a rss webpush campaign
[**actionSendWebPush**](WebpushApi.md#actionSendWebPush) | **POST** /campaigns/web-push/{campaign_hash}/actions/send | Send webpush message
[**createWebPushCampaign**](WebpushApi.md#createWebPushCampaign) | **POST** /campaigns/web-push | Create new webpush campaign
[**createWebPushRssCampaign**](WebpushApi.md#createWebPushRssCampaign) | **POST** /campaigns/webpush/rss | Create new webpush rss campaign
[**getAllWebPushSites**](WebpushApi.md#getAllWebPushSites) | **GET** /webpush/site | Get all webpush sites
[**patchWebPushCampaign**](WebpushApi.md#patchWebPushCampaign) | **PATCH** /campaigns/web-push/{campaign_hash} | Update a specific webpush campaign



## actionEnableWebPushRss

> \org.egoi.client\org.egoi.client.model\AcceptedResponse actionEnableWebPushRss($campaign_hash)

Enable a rss webpush campaign

Enable rss webpush message

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = org.egoi.client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = org.egoi.client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new org.egoi.client\Api\WebpushApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_hash = 'campaign_hash_example'; // string | ID of the Campaign

try {
    $result = $apiInstance->actionEnableWebPushRss($campaign_hash);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebpushApi->actionEnableWebPushRss: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_hash** | **string**| ID of the Campaign |

### Return type

[**\org.egoi.client\org.egoi.client.model\AcceptedResponse**](../Model/AcceptedResponse.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## actionSendWebPush

> \org.egoi.client\org.egoi.client.model\AcceptedResponse actionSendWebPush($campaign_hash, $campaign_web_push_send_request)

Send webpush message

Deploys and sends a webpush message

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = org.egoi.client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = org.egoi.client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new org.egoi.client\Api\WebpushApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_hash = 'campaign_hash_example'; // string | ID of the Campaign
$campaign_web_push_send_request = new \org.egoi.client\org.egoi.client.model\CampaignWebPushSendRequest(); // \org.egoi.client\org.egoi.client.model\CampaignWebPushSendRequest | Parameters for the 'send web-push' action

try {
    $result = $apiInstance->actionSendWebPush($campaign_hash, $campaign_web_push_send_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebpushApi->actionSendWebPush: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_hash** | **string**| ID of the Campaign |
 **campaign_web_push_send_request** | [**\org.egoi.client\org.egoi.client.model\CampaignWebPushSendRequest**](../Model/CampaignWebPushSendRequest.md)| Parameters for the &#39;send web-push&#39; action |

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


## createWebPushCampaign

> \org.egoi.client\org.egoi.client.model\CampaignHash createWebPushCampaign($web_push_campaign)

Create new webpush campaign

Create a new webpush campaign

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = org.egoi.client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = org.egoi.client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new org.egoi.client\Api\WebpushApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$web_push_campaign = new \org.egoi.client\org.egoi.client.model\WebPushCampaign(); // \org.egoi.client\org.egoi.client.model\WebPushCampaign | Parameters for the webpush campaign

try {
    $result = $apiInstance->createWebPushCampaign($web_push_campaign);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebpushApi->createWebPushCampaign: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_push_campaign** | [**\org.egoi.client\org.egoi.client.model\WebPushCampaign**](../Model/WebPushCampaign.md)| Parameters for the webpush campaign |

### Return type

[**\org.egoi.client\org.egoi.client.model\CampaignHash**](../Model/CampaignHash.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createWebPushRssCampaign

> \org.egoi.client\org.egoi.client.model\HashcodeCampaign createWebPushRssCampaign($web_push_rss_campaign)

Create new webpush rss campaign

Create a new webpush rss campaign

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = org.egoi.client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = org.egoi.client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new org.egoi.client\Api\WebpushApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$web_push_rss_campaign = new \org.egoi.client\org.egoi.client.model\WebPushRssCampaign(); // \org.egoi.client\org.egoi.client.model\WebPushRssCampaign | Parameters for the WebPush Campaign

try {
    $result = $apiInstance->createWebPushRssCampaign($web_push_rss_campaign);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebpushApi->createWebPushRssCampaign: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_push_rss_campaign** | [**\org.egoi.client\org.egoi.client.model\WebPushRssCampaign**](../Model/WebPushRssCampaign.md)| Parameters for the WebPush Campaign |

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


## getAllWebPushSites

> \org.egoi.client\org.egoi.client.model\TagCollection1 getAllWebPushSites($offset, $limit, $order, $order_by, $list_id)

Get all webpush sites

Returns all wepush's sites

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = org.egoi.client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = org.egoi.client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new org.egoi.client\Api\WebpushApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offset = 56; // int | Element offset (starting at zero for the first element)
$limit = 10; // int | Number of items to return
$order = 'desc'; // string | Type of order
$order_by = 'list_id'; // string | Reference attribute to order sites
$list_id = 56; // int | Select sites referenced to a list

try {
    $result = $apiInstance->getAllWebPushSites($offset, $limit, $order, $order_by, $list_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebpushApi->getAllWebPushSites: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offset** | **int**| Element offset (starting at zero for the first element) | [optional]
 **limit** | **int**| Number of items to return | [optional] [default to 10]
 **order** | **string**| Type of order | [optional] [default to &#39;desc&#39;]
 **order_by** | **string**| Reference attribute to order sites | [optional] [default to &#39;list_id&#39;]
 **list_id** | **int**| Select sites referenced to a list | [optional]

### Return type

[**\org.egoi.client\org.egoi.client.model\TagCollection1**](../Model/TagCollection1.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## patchWebPushCampaign

> \org.egoi.client\org.egoi.client.model\CampaignHash patchWebPushCampaign($campaign_hash, $web_push_patch_campaign)

Update a specific webpush campaign

Update a webpush campaign

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = org.egoi.client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = org.egoi.client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new org.egoi.client\Api\WebpushApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_hash = 'campaign_hash_example'; // string | ID of the Campaign
$web_push_patch_campaign = new \org.egoi.client\org.egoi.client.model\WebPushPatchCampaign(); // \org.egoi.client\org.egoi.client.model\WebPushPatchCampaign | Parameters for the Webpush Campaign

try {
    $result = $apiInstance->patchWebPushCampaign($campaign_hash, $web_push_patch_campaign);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebpushApi->patchWebPushCampaign: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_hash** | **string**| ID of the Campaign |
 **web_push_patch_campaign** | [**\org.egoi.client\org.egoi.client.model\WebPushPatchCampaign**](../Model/WebPushPatchCampaign.md)| Parameters for the Webpush Campaign |

### Return type

[**\org.egoi.client\org.egoi.client.model\CampaignHash**](../Model/CampaignHash.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

