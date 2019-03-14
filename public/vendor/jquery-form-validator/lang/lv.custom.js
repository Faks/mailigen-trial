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

        errorTitle: 'Formas iesniegšanas laikā ir notikusi kļūda. Lūdzam iesniegt formu vēlreiz',
        requiredField: 'Šis lauks ir obligāts, lūdzam, to aizpildīt.',
        requiredFields: 'Ne visi obligātie lauki ir aizpildīti, lūdzam, visus obligātos laukus aizpildīt',
        badTime: 'Ievadītais laika formāts ir nepareizs. Pārliecinieties, ka laika formāts ir H:mm',
        badEmail: 'Ievadītā e-pasta adrese ir nepareiza. Pārliecinieties, ka esat iekļāvuši @ zīmi un, piemērs, .lv',
        badTelephone: 'Nederīgs tālruņa numurs. Lūdzam, pārliecināties, ka esat iekļāvuši valsts kodu (+) un vismaz 8 ciparus',
        badSecurityAnswer: 'Вы задали некорректный ответ на секретный вопрос',
        badDate: 'Ievadītais datuma formāts ir nepareizs. Lūdzam, pārliecināties, ka ievadītais datuma formāts ir yyyy-mm-dd ',
        lengthBadStart: 'Ierakstītajam tekstam ir jābūt ',
        lengthBadEnd: ' simboliem',
        lengthTooLongStart: 'Teksts ir garāks par ',
        lengthTooShortStart: 'Teksts ir īsāks par ',
        notConfirmed: 'Введённые значения не могут быть подтверждены',
        badDomain: 'Ievadītais domēns ir nepareizs. Pārliecinieties, ka domēns ir ievdīts šādi - domenavards.lv',
        badUrl: 'Nepareizs vai tukšs URL lauks. Lūdzam, pārliecināties, ka esat pievienojuši http:// pirms URL saites',
        badCustomVal: 'Ievadītā vērtība ir nepareiza. Lūdzam, to pārbaudīt un ievadīt vēlreiz',
        andSpaces: ' un atstarpes ',
        badInt: 'ievadītā vērtība nesatur ciparus. Šajā laukā var ievadīt tikai ciparus',
        badSecurityNumber: 'Введённый защитный номер - неправильный',
        badUKVatAnswer: 'Некорректный UK VAT номер',
        badStrength: 'Paroles lauks nav pietiekami drošs. Pārliecinieties, ka esat ievadījuši vismaz 8 simbolus, lielo burtu un ciparus',
        badNumberOfSelectedOptionsStart: 'Jums ir jāizvelas vismaz ',
        badNumberOfSelectedOptionsEnd: ' atbildes',
        badAlphaNumeric: 'Šajā laukā var ievadīt tikai burtus ',
        badAlphaNumericExtra: ' un ',
        wrongFileSize: 'Augšupielādējamais fails ir pārāk liels (maksimalais izmērs %s)',
        wrongFileType: 'Failus var augšuielādēt tikai ar šādiem paplašināumiem %s',
        groupCheckedRangeStart: 'Izvēlēties starp ',
        groupCheckedTooFewStart: 'Izvēlēties kā minimums ',
        groupCheckedTooManyStart: 'Izvēlēties kā maksimums no ',
        groupCheckedEnd: ' elemntiem',
        badCreditCard: 'Ievadītais kredītkartes numurs ir nepreizs. Lūdzam, pārbaudīt numuru un mēģināt vēlreiz',
        badCVV: 'CVV numurs ir nepreizs',
        wrongFileDim : 'Nepareizas bildes dimensijas,',
        imageTooTall : 'Bilde nevar būt garāka par',
        imageTooWide : 'Bilde nevar būt platāka par',
        imageTooSmall : 'Bilde ir pārāk maza',
        min : 'minimums',
        max : 'maksimums',
        imageRatioNotAccepted : 'Bilde ar šādām proporcijām netiek pieņemta',
        badBrazilTelephoneAnswer: 'Введённый номер телефона неправильный',
        badBrazilCEPAnswer: 'CEP неправильный',
        badBrazilCPFAnswer: 'CPF неправильный'
    };

  });

})(jQuery, window);
