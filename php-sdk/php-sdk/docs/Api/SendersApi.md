# org.egoi.client\SendersApi

All URIs are relative to *http://api-v3.egoiapp.max*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createCellphoneSender**](SendersApi.md#createCellphoneSender) | **POST** /senders/cellphone | Create cellphone sender
[**createEmailSender**](SendersApi.md#createEmailSender) | **POST** /senders/email | Create email sender
[**createPhoneSender**](SendersApi.md#createPhoneSender) | **POST** /senders/phone | Create phone sender
[**deleteCellphoneSender**](SendersApi.md#deleteCellphoneSender) | **DELETE** /senders/cellphone/{sender_id} | Remove cellphone sender
[**deleteEmailSender**](SendersApi.md#deleteEmailSender) | **DELETE** /senders/email/{sender_id} | Remove email sender
[**deletePhoneSender**](SendersApi.md#deletePhoneSender) | **DELETE** /senders/phone/{sender_id} | Remove phone sender
[**getAllCellphoneSenders**](SendersApi.md#getAllCellphoneSenders) | **GET** /senders/cellphone | Get all cellphone senders
[**getAllEmailSenders**](SendersApi.md#getAllEmailSenders) | **GET** /senders/email | Get all email senders
[**getAllPhoneSenders**](SendersApi.md#getAllPhoneSenders) | **GET** /senders/phone | Get all phone senders
[**putEmailSender**](SendersApi.md#putEmailSender) | **PUT** /senders/email/{sender_id} | Update email sender



## createCellphoneSender

> \org.egoi.client\org.egoi.client.model\CellphoneSender createCellphoneSender($cellphone_sender)

Create cellphone sender

Creates a cellphone sender

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = org.egoi.client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = org.egoi.client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new org.egoi.client\Api\SendersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cellphone_sender = new \org.egoi.client\org.egoi.client.model\CellphoneSender(); // \org.egoi.client\org.egoi.client.model\CellphoneSender | Parameters for the sender

try {
    $result = $apiInstance->createCellphoneSender($cellphone_sender);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SendersApi->createCellphoneSender: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cellphone_sender** | [**\org.egoi.client\org.egoi.client.model\CellphoneSender**](../Model/CellphoneSender.md)| Parameters for the sender |

### Return type

[**\org.egoi.client\org.egoi.client.model\CellphoneSender**](../Model/CellphoneSender.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createEmailSender

> \org.egoi.client\org.egoi.client.model\EmailSender createEmailSender($email_sender)

Create email sender

Creates an email sender

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = org.egoi.client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = org.egoi.client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new org.egoi.client\Api\SendersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$email_sender = new \org.egoi.client\org.egoi.client.model\EmailSender(); // \org.egoi.client\org.egoi.client.model\EmailSender | Parameters for the sender

try {
    $result = $apiInstance->createEmailSender($email_sender);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SendersApi->createEmailSender: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email_sender** | [**\org.egoi.client\org.egoi.client.model\EmailSender**](../Model/EmailSender.md)| Parameters for the sender |

### Return type

[**\org.egoi.client\org.egoi.client.model\EmailSender**](../Model/EmailSender.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createPhoneSender

> \org.egoi.client\org.egoi.client.model\PhoneSender createPhoneSender($phone_sender)

Create phone sender

Creates a phone sender

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = org.egoi.client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = org.egoi.client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new org.egoi.client\Api\SendersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$phone_sender = new \org.egoi.client\org.egoi.client.model\PhoneSender(); // \org.egoi.client\org.egoi.client.model\PhoneSender | Parameters for the sender

try {
    $result = $apiInstance->createPhoneSender($phone_sender);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SendersApi->createPhoneSender: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **phone_sender** | [**\org.egoi.client\org.egoi.client.model\PhoneSender**](../Model/PhoneSender.md)| Parameters for the sender |

### Return type

[**\org.egoi.client\org.egoi.client.model\PhoneSender**](../Model/PhoneSender.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteCellphoneSender

> deleteCellphoneSender($sender_id)

Remove cellphone sender

Remove sender information given its ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = org.egoi.client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = org.egoi.client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new org.egoi.client\Api\SendersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sender_id = 56; // int | ID of the Sender

try {
    $apiInstance->deleteCellphoneSender($sender_id);
} catch (Exception $e) {
    echo 'Exception when calling SendersApi->deleteCellphoneSender: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sender_id** | **int**| ID of the Sender |

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


## deleteEmailSender

> deleteEmailSender($sender_id)

Remove email sender

Remove sender information given its ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = org.egoi.client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = org.egoi.client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new org.egoi.client\Api\SendersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sender_id = 56; // int | ID of the Sender

try {
    $apiInstance->deleteEmailSender($sender_id);
} catch (Exception $e) {
    echo 'Exception when calling SendersApi->deleteEmailSender: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sender_id** | **int**| ID of the Sender |

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


## deletePhoneSender

> deletePhoneSender($sender_id)

Remove phone sender

Remove sender information given its ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = org.egoi.client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = org.egoi.client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new org.egoi.client\Api\SendersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sender_id = 56; // int | ID of the Sender

try {
    $apiInstance->deletePhoneSender($sender_id);
} catch (Exception $e) {
    echo 'Exception when calling SendersApi->deletePhoneSender: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sender_id** | **int**| ID of the Sender |

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


## getAllCellphoneSenders

> \org.egoi.client\org.egoi.client.model\CellphoneSenderCollection getAllCellphoneSenders($offset, $limit, $status)

Get all cellphone senders

Returns all cellphone senders

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = org.egoi.client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = org.egoi.client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new org.egoi.client\Api\SendersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offset = 56; // int | Element offset (starting at zero for the first element)
$limit = 10; // int | Number of items to return
$status = 'status_example'; // string | Status filter

try {
    $result = $apiInstance->getAllCellphoneSenders($offset, $limit, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SendersApi->getAllCellphoneSenders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offset** | **int**| Element offset (starting at zero for the first element) | [optional]
 **limit** | **int**| Number of items to return | [optional] [default to 10]
 **status** | **string**| Status filter | [optional]

### Return type

[**\org.egoi.client\org.egoi.client.model\CellphoneSenderCollection**](../Model/CellphoneSenderCollection.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getAllEmailSenders

> \org.egoi.client\org.egoi.client.model\EmailSenderCollection getAllEmailSenders($offset, $limit, $status)

Get all email senders

Returns all email senders

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = org.egoi.client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = org.egoi.client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new org.egoi.client\Api\SendersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offset = 56; // int | Element offset (starting at zero for the first element)
$limit = 10; // int | Number of items to return
$status = 'status_example'; // string | Status filter

try {
    $result = $apiInstance->getAllEmailSenders($offset, $limit, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SendersApi->getAllEmailSenders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offset** | **int**| Element offset (starting at zero for the first element) | [optional]
 **limit** | **int**| Number of items to return | [optional] [default to 10]
 **status** | **string**| Status filter | [optional]

### Return type

[**\org.egoi.client\org.egoi.client.model\EmailSenderCollection**](../Model/EmailSenderCollection.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getAllPhoneSenders

> \org.egoi.client\org.egoi.client.model\PhoneSenderCollection getAllPhoneSenders($offset, $limit, $status)

Get all phone senders

Returns all phone senders

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = org.egoi.client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = org.egoi.client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new org.egoi.client\Api\SendersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offset = 56; // int | Element offset (starting at zero for the first element)
$limit = 10; // int | Number of items to return
$status = 'status_example'; // string | Status filter

try {
    $result = $apiInstance->getAllPhoneSenders($offset, $limit, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SendersApi->getAllPhoneSenders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offset** | **int**| Element offset (starting at zero for the first element) | [optional]
 **limit** | **int**| Number of items to return | [optional] [default to 10]
 **status** | **string**| Status filter | [optional]

### Return type

[**\org.egoi.client\org.egoi.client.model\PhoneSenderCollection**](../Model/PhoneSenderCollection.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## putEmailSender

> \org.egoi.client\org.egoi.client.model\EmailSender putEmailSender($sender_id, $email_sender_put_request)

Update email sender

Updates an email sender

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = org.egoi.client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = org.egoi.client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new org.egoi.client\Api\SendersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sender_id = 56; // int | ID of the Sender
$email_sender_put_request = new \org.egoi.client\org.egoi.client.model\EmailSenderPutRequest(); // \org.egoi.client\org.egoi.client.model\EmailSenderPutRequest | Parameters for the contact

try {
    $result = $apiInstance->putEmailSender($sender_id, $email_sender_put_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SendersApi->putEmailSender: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sender_id** | **int**| ID of the Sender |
 **email_sender_put_request** | [**\org.egoi.client\org.egoi.client.model\EmailSenderPutRequest**](../Model/EmailSenderPutRequest.md)| Parameters for the contact |

### Return type

[**\org.egoi.client\org.egoi.client.model\EmailSender**](../Model/EmailSender.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

