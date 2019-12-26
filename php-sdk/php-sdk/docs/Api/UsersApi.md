# org.egoi.client\UsersApi

All URIs are relative to *http://api-v3.egoiapp.max*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createUser**](UsersApi.md#createUser) | **POST** /users | Create new user
[**deleteUser**](UsersApi.md#deleteUser) | **DELETE** /users/{user_id} | Remove user
[**getAllUsers**](UsersApi.md#getAllUsers) | **GET** /users | Get all users
[**getUser**](UsersApi.md#getUser) | **GET** /users/{user_id} | Get user



## createUser

> \org.egoi.client\org.egoi.client.model\ComplexUser createUser($user_post_request)

Create new user

Create a new user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = org.egoi.client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = org.egoi.client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new org.egoi.client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_post_request = new \org.egoi.client\org.egoi.client.model\UserPostRequest(); // \org.egoi.client\org.egoi.client.model\UserPostRequest | Parameters for the user

try {
    $result = $apiInstance->createUser($user_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->createUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_post_request** | [**\org.egoi.client\org.egoi.client.model\UserPostRequest**](../Model/UserPostRequest.md)| Parameters for the user |

### Return type

[**\org.egoi.client\org.egoi.client.model\ComplexUser**](../Model/ComplexUser.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteUser

> deleteUser($user_id)

Remove user

Remove user information given its ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = org.egoi.client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = org.egoi.client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new org.egoi.client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 56; // int | ID of the User

try {
    $apiInstance->deleteUser($user_id);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->deleteUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| ID of the User |

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


## getAllUsers

> \org.egoi.client\org.egoi.client.model\UserCollection getAllUsers($username, $status, $created_min, $created_max, $updated_min, $updated_max, $offset, $limit, $order, $order_by)

Get all users

Returns all users

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = org.egoi.client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = org.egoi.client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new org.egoi.client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$username = 'username_example'; // string | Reference attribute to username user
$status = 'status_example'; // string | Status filter
$created_min = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Created initial date
$created_max = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Created finish
$updated_min = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Updated initial
$updated_max = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Updated finish
$offset = 56; // int | Element offset (starting at zero for the first element)
$limit = 10; // int | Number of items to return
$order = 'desc'; // string | Type of order
$order_by = 'user_id'; // string | Reference attribute to order users

try {
    $result = $apiInstance->getAllUsers($username, $status, $created_min, $created_max, $updated_min, $updated_max, $offset, $limit, $order, $order_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getAllUsers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **username** | **string**| Reference attribute to username user | [optional]
 **status** | **string**| Status filter | [optional]
 **created_min** | **\DateTime**| Created initial date | [optional]
 **created_max** | **\DateTime**| Created finish | [optional]
 **updated_min** | **\DateTime**| Updated initial | [optional]
 **updated_max** | **\DateTime**| Updated finish | [optional]
 **offset** | **int**| Element offset (starting at zero for the first element) | [optional]
 **limit** | **int**| Number of items to return | [optional] [default to 10]
 **order** | **string**| Type of order | [optional] [default to &#39;desc&#39;]
 **order_by** | **string**| Reference attribute to order users | [optional] [default to &#39;user_id&#39;]

### Return type

[**\org.egoi.client\org.egoi.client.model\UserCollection**](../Model/UserCollection.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getUser

> \org.egoi.client\org.egoi.client.model\ComplexUser getUser($user_id)

Get user

Returns user information given its ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = org.egoi.client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = org.egoi.client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new org.egoi.client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 56; // int | ID of the User

try {
    $result = $apiInstance->getUser($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| ID of the User |

### Return type

[**\org.egoi.client\org.egoi.client.model\ComplexUser**](../Model/ComplexUser.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

