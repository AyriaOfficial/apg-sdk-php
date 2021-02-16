# OpenAPI\Client\PaymentApi

All URIs are relative to https://api.ayriaclub.ir/apg/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getPaymentByReferenceCode()**](PaymentApi.md#getPaymentByReferenceCode) | **GET** /get/{referenceCode} | Find payment with referenceCode
[**getPayments()**](PaymentApi.md#getPayments) | **GET** /list | List of payments between given dates
[**paymentCancel()**](PaymentApi.md#paymentCancel) | **POST** /cancel | Cancel a  payment
[**paymentCreate()**](PaymentApi.md#paymentCreate) | **POST** /create | Add a new payment
[**verifyPaymentByReferenceCode()**](PaymentApi.md#verifyPaymentByReferenceCode) | **POST** /verify/{referenceCode} | Verify payment with referenceCode


## `getPaymentByReferenceCode()`

```php
getPaymentByReferenceCode($apg_wallet_id, $reference_code): \OpenAPI\Client\Model\AyriaPaymentV1DTO
```

Find payment with referenceCode

Returns a single payment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APG-API-KEY
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('APG-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('APG-API-KEY', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$apg_wallet_id = 'apg_wallet_id_example'; // string
$reference_code = 'reference_code_example'; // string | ReferenceCode of payment to return

try {
    $result = $apiInstance->getPaymentByReferenceCode($apg_wallet_id, $reference_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->getPaymentByReferenceCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **apg_wallet_id** | **string**|  |
 **reference_code** | **string**| ReferenceCode of payment to return |

### Return type

[**\OpenAPI\Client\Model\AyriaPaymentV1DTO**](../Model/AyriaPaymentV1DTO.md)

### Authorization

[APG-API-KEY](../../README.md#APG-API-KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPayments()`

```php
getPayments($apg_wallet_id, $page, $size, $sort, $created_date_greater_than, $created_date_to_less_than_or_equal): \OpenAPI\Client\Model\AyriaPaymentV1DTO[]
```

List of payments between given dates

Returns a payment list

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APG-API-KEY
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('APG-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('APG-API-KEY', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$apg_wallet_id = 'apg_wallet_id_example'; // string
$page = 'page_example'; // string | Page number
$size = 'size_example'; // string | Page size
$sort = 'sort_example'; // string | Sort column and direction
$created_date_greater_than = 'created_date_greater_than_example'; // string | Created date greater than
$created_date_to_less_than_or_equal = 'created_date_to_less_than_or_equal_example'; // string | Created date less than or equal

try {
    $result = $apiInstance->getPayments($apg_wallet_id, $page, $size, $sort, $created_date_greater_than, $created_date_to_less_than_or_equal);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->getPayments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **apg_wallet_id** | **string**|  |
 **page** | **string**| Page number | [optional]
 **size** | **string**| Page size | [optional]
 **sort** | **string**| Sort column and direction | [optional]
 **created_date_greater_than** | **string**| Created date greater than | [optional]
 **created_date_to_less_than_or_equal** | **string**| Created date less than or equal | [optional]

### Return type

[**\OpenAPI\Client\Model\AyriaPaymentV1DTO[]**](../Model/AyriaPaymentV1DTO.md)

### Authorization

[APG-API-KEY](../../README.md#APG-API-KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `paymentCancel()`

```php
paymentCancel($apg_wallet_id, $ayria_payment_v1_cancel_command): \OpenAPI\Client\Model\AyriaPaymentV1DTO
```

Cancel a  payment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APG-API-KEY
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('APG-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('APG-API-KEY', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$apg_wallet_id = 'apg_wallet_id_example'; // string
$ayria_payment_v1_cancel_command = new \OpenAPI\Client\Model\AyriaPaymentV1CancelCommand(); // \OpenAPI\Client\Model\AyriaPaymentV1CancelCommand

try {
    $result = $apiInstance->paymentCancel($apg_wallet_id, $ayria_payment_v1_cancel_command);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->paymentCancel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **apg_wallet_id** | **string**|  |
 **ayria_payment_v1_cancel_command** | [**\OpenAPI\Client\Model\AyriaPaymentV1CancelCommand**](../Model/AyriaPaymentV1CancelCommand.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\AyriaPaymentV1DTO**](../Model/AyriaPaymentV1DTO.md)

### Authorization

[APG-API-KEY](../../README.md#APG-API-KEY)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `paymentCreate()`

```php
paymentCreate($apg_wallet_id, $ayria_payment_v1_command): \OpenAPI\Client\Model\AyriaPaymentV1DTO
```

Add a new payment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APG-API-KEY
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('APG-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('APG-API-KEY', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$apg_wallet_id = 'apg_wallet_id_example'; // string
$ayria_payment_v1_command = new \OpenAPI\Client\Model\AyriaPaymentV1Command(); // \OpenAPI\Client\Model\AyriaPaymentV1Command

try {
    $result = $apiInstance->paymentCreate($apg_wallet_id, $ayria_payment_v1_command);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->paymentCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **apg_wallet_id** | **string**|  |
 **ayria_payment_v1_command** | [**\OpenAPI\Client\Model\AyriaPaymentV1Command**](../Model/AyriaPaymentV1Command.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\AyriaPaymentV1DTO**](../Model/AyriaPaymentV1DTO.md)

### Authorization

[APG-API-KEY](../../README.md#APG-API-KEY)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `verifyPaymentByReferenceCode()`

```php
verifyPaymentByReferenceCode($apg_wallet_id, $reference_code): \OpenAPI\Client\Model\AyriaPaymentV1DTO
```

Verify payment with referenceCode

Returns a single payment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APG-API-KEY
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('APG-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('APG-API-KEY', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$apg_wallet_id = 'apg_wallet_id_example'; // string
$reference_code = 'reference_code_example'; // string | ReferenceCode of payment to verify

try {
    $result = $apiInstance->verifyPaymentByReferenceCode($apg_wallet_id, $reference_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->verifyPaymentByReferenceCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **apg_wallet_id** | **string**|  |
 **reference_code** | **string**| ReferenceCode of payment to verify |

### Return type

[**\OpenAPI\Client\Model\AyriaPaymentV1DTO**](../Model/AyriaPaymentV1DTO.md)

### Authorization

[APG-API-KEY](../../README.md#APG-API-KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
