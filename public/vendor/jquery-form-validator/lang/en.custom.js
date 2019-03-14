/**
 * jQuery Form Validator
 * ------------------------------------------
 *
 * Russian language package
 *
 * @website http://formvalidator.net/
 * @license MIT
 */
(function($, window) {
  'use strict';

  $(window).bind('validatorsLoaded', function() {

    $.formUtils.LANG = {

		errorTitle: 'Form submission failed. Please check your credentials and try again',
		requiredField: 'This field is required please fill it in',
		requiredFields: 'Not all required fields are completed. Please make sure you have filled in all the required fields',
		badTime: 'The time format is incorrect. Make sure you enter time in H:mm format',
		badEmail: 'The provided email address is not correct. Please make sure that you have included @ and for example .com',
		badTelephone: 'Invalid phone number. Please make sure you have included country code (+) and there are at least 8 numbers',
		badSecurityAnswer: 'The answer to security question is not correct. Try to remember your answer',
		badDate: 'The date format is incorrect. Make sure that date is in yyyy-mm-dd format',
		lengthBadStart: 'Make sure that this entry is between ',
		lengthBadEnd: ' characters',
		lengthTooLongStart: 'The entry is longer than ',
		lengthTooShortStart: 'The entry is shorter than ',
		notConfirmed: 'Provided entry could not be confirmed',
		badDomain: 'The domain is not correct. Please make sure that domain is in format - domainname.com',
		badUrl: 'The URL field cannot be empty. Please make sure that you have added http:// in front of the URL as well',
		badCustomVal: 'The entry that you are adding is incorrect. Please check and try again',
		andSpaces: ' and spaces ',
		badInt: 'The value you have entered is not a number. Only numbers are supported in this field',
		badSecurityNumber: 'Your social security number was incorrect',
		badUKVatAnswer: 'Incorrect UK VAT Number. Make sure you have at least 9 numbers',
		badUKNin: 'Incorrect UK NIN',
		badUKUtr: 'Incorrect UK UTR Number',
		badStrength: 'The password isn\'t strong enough. Make sure you have at least 8 characters, one uppercase letter, and one number',
		badNumberOfSelectedOptionsStart: 'You have to choose at least ',
		badNumberOfSelectedOptionsEnd: ' answers',
		badAlphaNumeric: 'The input value can only contain alphanumeric characters ',
		badAlphaNumericExtra: ' and ',
		wrongFileSize: 'The file you are trying to upload is too large (max %s)',
		wrongFileType: 'Only files of the type %s is allowed',
		groupCheckedRangeStart: 'Please choose between ',
		groupCheckedTooFewStart: 'Please choose at least ',
		groupCheckedTooManyStart: 'Please choose a maximum of ',
		groupCheckedEnd: ' item(s)',
		badCreditCard: 'The credit card number is not correct. Please look at your card and try again',
		badCVV: 'The CVV number was not correct. Make sure you are entering numbers from the back of your card',
		wrongFileDim : 'Incorrect image dimensions,',
		imageTooTall : 'The image can not be taller than',
		imageTooWide : 'The image can not be wider than',
		imageTooSmall : 'The image was too small',
		min : 'min',
		max : 'max',
		imageRatioNotAccepted : 'Image ratio cannot be accepted',
		badBrazilTelephoneAnswer: 'The phone number entered is invalid',
		badBrazilCEPAnswer: 'The CEP entered is invalid',
		badBrazilCPFAnswer: 'The CPF entered is invalid',
		badPlPesel: 'The PESEL entered is invalid',
		badPlNip: 'The NIP entered is invalid',
		badPlRegon: 'The REGON entered is invalid',
		badreCaptcha: 'Please confirm that you are not a bot'
    };

  });

})(jQuery, window);
