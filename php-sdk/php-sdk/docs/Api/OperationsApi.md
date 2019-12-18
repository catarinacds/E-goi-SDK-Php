# org.egoi.client\OperationsApi

All URIs are relative to *http://api-v3.egoiapp.max*

Method | HTTP request | Description
------------- | ------------- | -------------
[**actionApproveOperation**](OperationsApi.md#actionApproveOperation) | **POST** /operations/actions/approve | Approve operation
[**actionCancelOperation**](OperationsApi.md#actionCancelOperation) | **POST** /operations/actions/cancel | Cancel operation
[**actionPauseOperation**](OperationsApi.md#actionPauseOperation) | **POST** /operations/actions/pause | Pause operation
[**actionResumeOperation**](OperationsApi.md#actionResumeOperation) | **POST** /operations/actions/resume | Resume operation
[**getAllOperations**](OperationsApi.md#getAllOperations) | **GET** /operations | Get all queued operations



## actionApproveOperation

> \org.egoi.client\org.egoi.client.model\OperationActionResponse actionApproveOperation($operation_action_request)

Approve operation

Approves an operation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = org.egoi.client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = org.egoi.client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new org.egoi.client\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$operation_action_request = new \org.egoi.client\org.egoi.client.model\OperationActionRequest(); // \org.egoi.client\org.egoi.client.model\OperationActionRequest | Parameters for the request

try {
    $result = $apiInstance->actionApproveOperation($operation_action_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->actionApproveOperation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **operation_action_request** | [**\org.egoi.client\org.egoi.client.model\OperationActionRequest**](../Model/OperationActionRequest.md)| Parameters for the request |

### Return type

[**\org.egoi.client\org.egoi.client.model\OperationActionResponse**](../Model/OperationActionResponse.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## actionCancelOperation

> \org.egoi.client\org.egoi.client.model\OperationActionResponse actionCancelOperation($operation_action_request)

Cancel operation

Cancels an operation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = org.egoi.client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = org.egoi.client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new org.egoi.client\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$operation_action_request = new \org.egoi.client\org.egoi.client.model\OperationActionRequest(); // \org.egoi.client\org.egoi.client.model\OperationActionRequest | Parameters for the request

try {
    $result = $apiInstance->actionCancelOperation($operation_action_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->actionCancelOperation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **operation_action_request** | [**\org.egoi.client\org.egoi.client.model\OperationActionRequest**](../Model/OperationActionRequest.md)| Parameters for the request |

### Return type

[**\org.egoi.client\org.egoi.client.model\OperationActionResponse**](../Model/OperationActionResponse.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## actionPauseOperation

> \org.egoi.client\org.egoi.client.model\OperationActionResponse actionPauseOperation($operation_action_request)

Pause operation

Pauses an operation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = org.egoi.client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = org.egoi.client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new org.egoi.client\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$operation_action_request = new \org.egoi.client\org.egoi.client.model\OperationActionRequest(); // \org.egoi.client\org.egoi.client.model\OperationActionRequest | Parameters for the request

try {
    $result = $apiInstance->actionPauseOperation($operation_action_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->actionPauseOperation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **operation_action_request** | [**\org.egoi.client\org.egoi.client.model\OperationActionRequest**](../Model/OperationActionRequest.md)| Parameters for the request |

### Return type

[**\org.egoi.client\org.egoi.client.model\OperationActionResponse**](../Model/OperationActionResponse.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## actionResumeOperation

> \org.egoi.client\org.egoi.client.model\OperationActionResponse actionResumeOperation($operation_action_request)

Resume operation

Resumes an operation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = org.egoi.client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = org.egoi.client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new org.egoi.client\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$operation_action_request = new \org.egoi.client\org.egoi.client.model\OperationActionRequest(); // \org.egoi.client\org.egoi.client.model\OperationActionRequest | Parameters for the request

try {
    $result = $apiInstance->actionResumeOperation($operation_action_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->actionResumeOperation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **operation_action_request** | [**\org.egoi.client\org.egoi.client.model\OperationActionRequest**](../Model/OperationActionRequest.md)| Parameters for the request |

### Return type

[**\org.egoi.client\org.egoi.client.model\OperationActionResponse**](../Model/OperationActionResponse.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getAllOperations

> \org.egoi.client\org.egoi.client.model\OperationsCollection getAllOperations($type, $status, $offset, $limit, $order, $order_by)

Get all queued operations

Returns all operations in queue

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = org.egoi.client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = org.egoi.client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new org.egoi.client\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$type = 'type_example'; // string | Operation type
$status = 'status_example'; // string | Operation state
$offset = 56; // int | Element offset (starting at zero for the first element)
$limit = 10; // int | Number of items to return
$order = 'desc'; // string | Type of order
$order_by = 'order_by_example'; // string | Reference attribute to order operations

try {
    $result = $apiInstance->getAllOperations($type, $status, $offset, $limit, $order, $order_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->getAllOperations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **string**| Operation type | [optional]
 **status** | **string**| Operation state | [optional]
 **offset** | **int**| Element offset (starting at zero for the first element) | [optional]
 **limit** | **int**| Number of items to return | [optional] [default to 10]
 **order** | **string**| Type of order | [optional] [default to &#39;desc&#39;]
 **order_by** | **string**| Reference attribute to order operations | [optional]

### Return type

[**\org.egoi.client\org.egoi.client.model\OperationsCollection**](../Model/OperationsCollection.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

