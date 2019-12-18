# org.egoi.client\MyAccountApi

All URIs are relative to *http://api-v3.egoiapp.max*

Method | HTTP request | Description
------------- | ------------- | -------------
[**enableTe**](MyAccountApi.md#enableTe) | **POST** /my-account/actions/enable-te | Enable Track&amp;Engage
[**getMyAccount**](MyAccountApi.md#getMyAccount) | **GET** /my-account | Get My Account Info



## enableTe

> \org.egoi.client\org.egoi.client.model\TeResponse enableTe($inline_object)

Enable Track&Engage

Enable Track&Engag

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = org.egoi.client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = org.egoi.client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new org.egoi.client\Api\MyAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inline_object = new \org.egoi.client\org.egoi.client.model\InlineObject(); // \org.egoi.client\org.egoi.client.model\InlineObject | 

try {
    $result = $apiInstance->enableTe($inline_object);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MyAccountApi->enableTe: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inline_object** | [**\org.egoi.client\org.egoi.client.model\InlineObject**](../Model/InlineObject.md)|  |

### Return type

[**\org.egoi.client\org.egoi.client.model\TeResponse**](../Model/TeResponse.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getMyAccount

> \org.egoi.client\org.egoi.client.model\MyAccount getMyAccount()

Get My Account Info

My Account Info

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = org.egoi.client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = org.egoi.client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new org.egoi.client\Api\MyAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getMyAccount();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MyAccountApi->getMyAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\org.egoi.client\org.egoi.client.model\MyAccount**](../Model/MyAccount.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

