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

        errorTitle: 'Ошибка отправки формы! Пожалуйста, проверьте ваши учетные данные и повторите попытку',
        requiredField: 'Это обязательное поле',
        requiredFields: 'Не все обязательные поля заполнены. Пожалуйста, убедитесь, что вы заполнили все необходимые поля',
        badTime: 'Формат времени неверен. Убедитесь, что вы вводите время в H:мм формате',
        badEmail: 'Данный email адрес не правильный. Пожалуйста, убедитесь, что вы указали @ и, например, .ru',
        badTelephone: 'Неправильный номер телефона. Пожалуйста, убедитесь, что Вы указали код страны (+) и как минимум 8 цифр',
        badSecurityAnswer: 'Вы задали некорректный ответ на секретный вопрос',
        badDate: 'Неправильный Формат даты. Убедитесь, что дата в формате ГГГГ-мм-ДД',
        lengthBadStart: 'Запись должна быть в диапазоне ',
        lengthBadEnd: '  символов',
        lengthTooLongStart: 'Запись длинее, чем ',
        lengthTooShortStart: 'Запись меньше, чем ',
        notConfirmed: 'Введённые запись не могут быть подтверждены',
        badDomain: 'Некорректное запись домена',
        badUrl: 'Некорректное или пустое поле URL. Пожалуйста, убедитесь, что вы добавили http:// перед URL-адресом',
        badCustomVal: 'Введённое запись неверно',
        andSpaces: ' и пробелы ',
        badInt: 'Запись - не число',
        badSecurityNumber: 'Введённый защитный номер - неправильный',
        badUKVatAnswer: 'Некорректный UK VAT номер',
        badStrength: 'Пароль не достаточно надёжен. Убедитесь, что вы вводите не менее 8 символов, одну заглавную букву, и одну цифру',
        badNumberOfSelectedOptionsStart: 'Вы должны выбрать как минимум ',
        badNumberOfSelectedOptionsEnd: ' ответов',
        badAlphaNumeric: 'Запись должно содержать только числа и буквы ',
        badAlphaNumericExtra: ' и ',
        wrongFileSize: 'Загружаемый файл слишком велик (максимальный размер %s)',
        wrongFileType: 'Принимаются файлы следующих типов %s',
        groupCheckedRangeStart: 'Выберите между ',
        groupCheckedTooFewStart: 'Выберите как минимум ',
        groupCheckedTooManyStart: 'Выберите максимум из ',
        groupCheckedEnd: ' элемент(ов)',
        badCreditCard: 'Номер кредитной карты некорректен',
        badCVV: 'CVV номер некорректно',
        wrongFileDim : 'Неверные размеры графического файла,',
        imageTooTall : 'изображение не может быть уже чем',
        imageTooWide : 'изображение не может быть шире чем',
        imageTooSmall : 'изображение слишком мало',
        min : 'минимум',
        max : 'максимум',
        imageRatioNotAccepted : 'Изображение с таким соотношением сторон не принимается',
        badBrazilTelephoneAnswer: 'Введённый номер телефона неправильный',
        badBrazilCEPAnswer: 'CEP неправильный',
        badBrazilCPFAnswer: 'CPF неправильный'
    };

  });

})(jQuery, window);
