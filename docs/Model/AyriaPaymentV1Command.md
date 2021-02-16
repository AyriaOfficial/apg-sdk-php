# # AyriaPaymentV1Command

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**referral_code** | **int** | Payee referral code |
**amount** | **int** | Total price in Riyal currency |
**payer_mobile** | **string** | Payer mobile number |
**payer_name** | **string** | Payer name | [optional]
**description** | **string** | Description for payment | [optional]
**payment_number** | **string** | Payment number (external) | [optional]
**extra_data** | **string** | Extra data related to payment | [optional]
**issuer_must_verify_payment** | **bool** | Set it to &#39;true&#39; if you want to verify payment | [optional]
**callback_url** | **string** | Useful for when you want to have dynamic callback url | [optional]
**kalas** | [**\OpenAPI\Client\Model\AyriaPaymentV1KalaDTO[]**](AyriaPaymentV1KalaDTO.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
