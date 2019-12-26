# org.egoi.client\FormsApi

All URIs are relative to *http://api-v3.egoiapp.max*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAllForms**](FormsApi.md#getAllForms) | **GET** /forms | Get all forms



## getAllForms

> \org.egoi.client\org.egoi.client.model\FormCollection getAllForms($offset, $limit, $order, $order_by, $language, $list_id, $owner, $status, $created_min, $created_max, $updated_min, $updated_max)

Get all forms

Returns all forms

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = org.egoi.client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = org.egoi.client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new org.egoi.client\Api\FormsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offset = 56; // int | Element offset (starting at zero for the first element)
$limit = 10; // int | Number of items to return
$order = 'desc'; // string | Type of order
$order_by = 'form_id'; // string | Reference attribute to order forms
$language = 'language_example'; // string | Language of the form
$list_id = 56; // int | ID of the list that owns the form
$owner = 56; // int | User ID of the form owner
$status = 'status_example'; // string | Status filter
$created_min = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Created initial date
$created_max = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Created finish
$updated_min = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Updated initial
$updated_max = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Updated finish

try {
    $result = $apiInstance->getAllForms($offset, $limit, $order, $order_by, $language, $list_id, $owner, $status, $created_min, $created_max, $updated_min, $updated_max);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormsApi->getAllForms: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offset** | **int**| Element offset (starting at zero for the first element) | [optional]
 **limit** | **int**| Number of items to return | [optional] [default to 10]
 **order** | **string**| Type of order | [optional] [default to &#39;desc&#39;]
 **order_by** | **string**| Reference attribute to order forms | [optional] [default to &#39;form_id&#39;]
 **language** | **string**| Language of the form | [optional]
 **list_id** | **int**| ID of the list that owns the form | [optional]
 **owner** | **int**| User ID of the form owner | [optional]
 **status** | **string**| Status filter | [optional]
 **created_min** | **\DateTime**| Created initial date | [optional]
 **created_max** | **\DateTime**| Created finish | [optional]
 **updated_min** | **\DateTime**| Updated initial | [optional]
 **updated_max** | **\DateTime**| Updated finish | [optional]

### Return type

[**\org.egoi.client\org.egoi.client.model\FormCollection**](../Model/FormCollection.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

