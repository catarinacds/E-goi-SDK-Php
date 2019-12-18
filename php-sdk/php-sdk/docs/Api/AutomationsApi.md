# org.egoi.client\AutomationsApi

All URIs are relative to *http://api-v3.egoiapp.max*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createAutomation**](AutomationsApi.md#createAutomation) | **POST** /automations | Create new automation
[**deleteAutomation**](AutomationsApi.md#deleteAutomation) | **DELETE** /automations/{automation_id} | Remove automation
[**getAllAutomations**](AutomationsApi.md#getAllAutomations) | **GET** /automations | Get all automations
[**updateAutomation**](AutomationsApi.md#updateAutomation) | **PUT** /automations/{automation_id} | Update a specific automation



## createAutomation

> \org.egoi.client\org.egoi.client.model\Automation createAutomation($automation)

Create new automation

Create a new automation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = org.egoi.client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = org.egoi.client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new org.egoi.client\Api\AutomationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$automation = new \org.egoi.client\org.egoi.client.model\Automation(); // \org.egoi.client\org.egoi.client.model\Automation | Parameters for the automation

try {
    $result = $apiInstance->createAutomation($automation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutomationsApi->createAutomation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **automation** | [**\org.egoi.client\org.egoi.client.model\Automation**](../Model/Automation.md)| Parameters for the automation |

### Return type

[**\org.egoi.client\org.egoi.client.model\Automation**](../Model/Automation.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteAutomation

> deleteAutomation($automation_id)

Remove automation

Remove automation information given its ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = org.egoi.client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = org.egoi.client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new org.egoi.client\Api\AutomationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$automation_id = 56; // int | ID of the Automation

try {
    $apiInstance->deleteAutomation($automation_id);
} catch (Exception $e) {
    echo 'Exception when calling AutomationsApi->deleteAutomation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **automation_id** | **int**| ID of the Automation |

### Return type

void (empty response body)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getAllAutomations

> \org.egoi.client\org.egoi.client.model\AutomationCollection getAllAutomations($automation_id, $title, $created_by, $list_id, $status, $offset, $limit, $order, $order_by)

Get all automations

Returns all automations

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = org.egoi.client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = org.egoi.client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new org.egoi.client\Api\AutomationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$automation_id = 56; // int | Reference attribute to automation id
$title = 'title_example'; // string | Reference attribute to title
$created_by = 56; // int | Reference attribute to created by
$list_id = 56; // int | ID of the list that owns the automation
$status = 'status_example'; // string | Automation status
$offset = 56; // int | Element offset (starting at zero for the first element)
$limit = 10; // int | Number of items to return
$order = 'desc'; // string | Type of order
$order_by = 'automation_id'; // string | Reference attribute to order automations

try {
    $result = $apiInstance->getAllAutomations($automation_id, $title, $created_by, $list_id, $status, $offset, $limit, $order, $order_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutomationsApi->getAllAutomations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **automation_id** | **int**| Reference attribute to automation id | [optional]
 **title** | **string**| Reference attribute to title | [optional]
 **created_by** | **int**| Reference attribute to created by | [optional]
 **list_id** | **int**| ID of the list that owns the automation | [optional]
 **status** | **string**| Automation status | [optional]
 **offset** | **int**| Element offset (starting at zero for the first element) | [optional]
 **limit** | **int**| Number of items to return | [optional] [default to 10]
 **order** | **string**| Type of order | [optional] [default to &#39;desc&#39;]
 **order_by** | **string**| Reference attribute to order automations | [optional] [default to &#39;automation_id&#39;]

### Return type

[**\org.egoi.client\org.egoi.client.model\AutomationCollection**](../Model/AutomationCollection.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateAutomation

> \org.egoi.client\org.egoi.client.model\Automation updateAutomation($automation_id, $automation)

Update a specific automation

Update an automation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = org.egoi.client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = org.egoi.client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new org.egoi.client\Api\AutomationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$automation_id = 56; // int | ID of the Automation
$automation = new \org.egoi.client\org.egoi.client.model\Automation(); // \org.egoi.client\org.egoi.client.model\Automation | Parameters for the automation

try {
    $result = $apiInstance->updateAutomation($automation_id, $automation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutomationsApi->updateAutomation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **automation_id** | **int**| ID of the Automation |
 **automation** | [**\org.egoi.client\org.egoi.client.model\Automation**](../Model/Automation.md)| Parameters for the automation |

### Return type

[**\org.egoi.client\org.egoi.client.model\Automation**](../Model/Automation.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

