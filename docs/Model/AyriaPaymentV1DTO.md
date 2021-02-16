# # AyriaPaymentV1DTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**referral_code** | **int** | Payee referral code | [optional]
**amount** | **int** | Total price in Riyal currency | [optional]
**payer_mobile** | **string** | Payer mobile number | [optional]
**tracking_number** | **int** | Tracking number | [optional]
**reference_code** | **string** | Reference code | [optional]
**payee_name** | **string** | Payee name | [optional]
**payer_name** | **string** | Payer name | [optional]
**description** | **string** | Description for payment | [optional]
**extra_data** | **string** | Extra data related to payment | [optional]
**payment_number** | **string** | Payment number (external) | [optional]
**paid** | **bool** | Payment paid status | [optional]
**canceled** | **bool** | Payment cancel status | [optional]
**created_date** | **string** | Create date of payment | [optional]
**payment_url** | **string** | Payment URL | [optional]
**cancel_description** | **string** | Cancel description | [optional]
**issuer_must_verify_payment** | **bool** | If is &#39;true&#39; issuer must verify payment | [optional]
**payment_status** | **string** | Is usually DEFAULT, but can be WAITING_FOR_VERIFY or VERIFIED if issuerMustVerifyPayment is true | [optional]
**callback_url** | **string** | Callback url, if is null then default callback url will be used instead | [optional]
**kalas** | [**\OpenAPI\Client\Model\AyriaPaymentV1KalaDTO[]**](AyriaPaymentV1KalaDTO.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
