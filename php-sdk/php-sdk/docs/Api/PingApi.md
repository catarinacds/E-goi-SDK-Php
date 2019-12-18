# org.egoi.client\PingApi

All URIs are relative to *http://api-v3.egoiapp.max*

Method | HTTP request | Description
------------- | ------------- | -------------
[**ping**](PingApi.md#ping) | **POST** /ping | Pings the API



## ping

> \org.egoi.client\org.egoi.client.model\Ping ping()

Pings the API

Checks if API is up and running

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new org.egoi.client\Api\PingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->ping();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PingApi->ping: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\org.egoi.client\org.egoi.client.model\Ping**](../Model/Ping.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

