# # User

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**internal_user_id** | **string** | A client-defined identifier for the user. This is the unique ID assigned to the user on your system. Max 75 characters. Allows letters, numbers, and + , - . / _ ~ | |
**address1** | **string** | The user&#39;s street address. Required in order to process a payout. | [optional]
**address2** | **string** | The user&#39;s street address, line 2. | [optional]
**city** | **string** | The user&#39;s city. Required in order to process a payout. | [optional]
**state_province** | **string** | The user&#39;s state/province. | [optional]
**postal_code** | **string** | The user&#39;s postal code. | [optional]
**country** | **string** | The user&#39;s country code. [ISO_3166](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-3) code. Required in order to process a payout. |
**first_name** | **string** | The user&#39;s first name. (If Business account, the first name of the representative) |
**middle_name** | **string** | The user&#39;s middle name. (If Business account, the middle name of the representative) | [optional]
**last_name** | **string** | The user&#39;s last name. (If Business account, the last name of the representative) |
**email** | **string** | The user&#39;s e-mail address. Must be unique. Cannot have two users with the same e-mail address. |
**language** | **string** | The user&#39;s preferred language of communication. If not provided, defaults to English (en) | [optional]
**mobile_number** | **string** | (Optional) Mobile number of user. Allows for SMS notifications upon availability of funds | [optional]
**business_name** | **string** | Company legal name (Only if Business account) | [optional]
**date_of_birth** | **\DateTime** | Date of birth. (optional). Minimum 18 years old | [optional]
**metadata** | **object** | Optional JSON object with attributes that can later be searched to locate this user. Do not include PII as this object is not encrypted. | [optional]
**notify_user** | **bool** | Should we notify the user via email that their user has been created in the system? They will receive instructions to establish such account. | [optional] [default to false]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
