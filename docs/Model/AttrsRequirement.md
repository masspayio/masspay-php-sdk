# # AttrsRequirement

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**token** | **string** | The token that represents the attribute. |
**attr_set_token** | **string** | The token that represents the stored attributes for this payer. You would use this token in attr_set_token of &#x60;initiatePayout&#x60; if you have to specify an account number when paying a transaction out. | [optional]
**label** | **string** | The label that describes that required attribute | [optional]
**validation** | **string** | RegEx that validates that input | [optional]
**is_optional** | **bool** | Flag to indicate whether this field is required or not | [optional]
**value** | **string** | The existing value that is stored. &#39;Null&#39; if no existing value is stored. |
**expected_value** | **string** | Written explanation of the value that the regex validation requires | [optional]
**type** | **string** | The type of attribute | [optional]
**input_type** | **string** | The type of input field that is suggested for this this attribute | [default to 'text']
**last_attr_value_used** | **bool** | If set to true, it means this was the last value that was used and if no attr_set_token is provided to init payout, this value will be used by default | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
