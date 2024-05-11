function Validator(options) {

    function Validate(inputElement, rule) {
        var errorElement = inputElement.parentElement.querySelector(options.errorSelector);
        // value inputElement.value
        // test : fun : rule.test 
        // console.log(inputElement.value );
        var errorMessage = rule.test(inputElement.value);
        // tìm thẻ con hiện ra thông bao lỗi 
        // inputElement.parentElement.querySelector('.form-message');
        if (errorMessage) {
            errorElement.innerText = errorMessage
            // errorElement.parentElement.classList.add('invalid');
        } else {
            errorElement.innerText = ''
            // errorElement.classList.remove('');

        }
        return !errorMessage
    }
    // console.log(options.form);
    var formElement = document.querySelector(options.form)
    // console.log(options.rules);

    if (formElement) {
        //  khi nhấn submit from 
        formElement.onsubmit = function (e) {
            e.preventDefault();
            var isFormValid = true;
            options.rules.forEach(rule => {
                // lặp qua tưng rule
                var inputElement = formElement.querySelector(rule.selector)
                var isValaid = Validate(inputElement, rule);
                if (!isValaid) {
                    isFormValid = false;
                }
            });


            if (isFormValid) {
                // Trường hợp submit với javascript
                if (typeof options.onSubmit === 'function') {
                    var enableInputs = formElement.querySelectorAll('[name]');
                    var formValues = Array.from(enableInputs).reduce(function (values, input) {
                        return (values[input.name] = input.value) && values
                    }, {});
                    options.onSubmit(formValues);
                }
                // Trường hợp submit với hành vi mặc định
                else {
                    formElement.submit();
                }
            }

        }


        options.rules.forEach(rule => {
            // console.log(rule);
            var inputElement = formElement.querySelector(rule.selector)
            var errorElement = inputElement.parentElement.querySelector('.form-message');

            // console.log(inputElement);
            if (inputElement) {
                inputElement.onblur = function () {
                    // xử lý trường hợp buler ra khỏi input 
                    Validate(inputElement, rule)

                }
                // xử lý trường hợp nhập nhập vào input 
                inputElement.oninput = function () {
                    errorElement.innerText = ''

                }
            }

        });
    }
}
// nguyên tăc rule

Validator.isRequired = function (selector, message) {
    return {
        selector: selector,
        test: function (value) {
            return value.trim() ? undefined : message || "Vui lòng không để trống"
        }
    }
}

Validator.isEmail = function (selector, message) {
    return {
        selector: selector,
        test: function (value) {
            var regex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/
            return regex.test(value) ? undefined : message || "Email không chính xác"
        }
    }
}

Validator.minLength = function (selector, min, message) {
    return {
        selector: selector,
        test: function (value) {
            return value.length >= min ? undefined : message || `vui lòng nhập tối thiểu ${min} ký tự`
        }
    }
}


Validator.isConfirmed = function (selector, getConfirmValue, message) {
    return {
        selector: selector,
        test: function (value) {
            return value === getConfirmValue() ? undefined : message || 'Giá trị nhập vào không chính xác';
        }
    }
}
