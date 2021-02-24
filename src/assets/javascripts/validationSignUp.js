var errorArray = [];
document.addEventListener('DOMContentLoaded', function () {

    var inputFirstName = document.getElementById('firstname');
    var inputLastName = document.getElementById('lastname');
    var inputEmail = document.getElementById('email');
    var inputStreet = document.getElementById('street');
    var inputNumber = document.getElementById('houseNumber');
    var inputCity = document.getElementById('city');
    var inputZip = document.getElementById('zip');
    var inputBirthday = document.getElementById('birthday');
    var inputPassword = document.getElementById('password');
    var repeatPassword = document.getElementById('repeatPassword');




    if (inputPassword) {

        var Password = inputPassword.addEventListener('keyup', function () {
            var regexPw1 = /^((?=.*?[A-Z].*?)(?=.*?[a-z].*?)(?=.*?[0-9].*?)).{6,}$/m;
            var regexPw2 = /^(?=.*?[A-Z].*?)(?=.*?[a-z].*?[a-z])(?=.*?[0-9].*?[0-9])(?=.*?[^\w\s].*?).{8,}$/m;
            var regexPw3 = /^(?=.*?[A-Z].*?[A-Z])(?=.*?[a-z].*?[a-z])(?=.*?[0-9].*?[0-9])(?=.*?[^\w\s].*?[^\w\s]).{12,}$/m;
            var string = this.value;


            if (string.match(regexPw3)) {
                inputPassword.style.border = '2px solid green';
                errorArray[0] = false;
            } else if (string.match(regexPw2)) {
                inputPassword.style.border = '2px solid yellow';
                errorArray[0] = false;
            } else if (string.match(regexPw1)) {
                inputPassword.style.border = '2px solid orange';
                errorArray[0] = false;
            } else {
                inputPassword.style.border = '2px solid red';
                errorArray[0] = true;
            }

        })
    }

    if (repeatPassword) {
        let container = document.getElementById('errorPassword');
        repeatPassword.addEventListener('keyup', function () {
            if (inputPassword.value === repeatPassword.value) {
                repeatPassword.style.border = '2px solid green';
                errorArray[1] = false;
                container.innerHTML = '';
            } else {
                repeatPassword.style.border = '2px solid red';
                errorArray[1] = true;
                container.style.color = 'red';
                container.innerHTML = 'Ungleiche Passwörter';
            }
        })
    }


    document.getElementById('signUpForm').onsubmit = function (event) {
        for(var index = 0; index < errorArray.length; index++) {
            if(errorArray[index] === true)
            {
                console.log('Sorry, not completed!');
                event.preventDefault()
                alert('Bitte füllen Sie die Anmeldung korrekt aus!');
                break;
            }

        }
    }

    var regExName = /^([a-zA-zßäöüÄÖÜ]+([\s]|[\-])*){1,}$/m;
    var regExEmail = /^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/m;
    var regExStreetNumber = /^(([1-9]{1,2}[0-9]?)[a-z]?)$/m;
    var regExZip = /^[0-9]{5}$/m;


    if (inputFirstName) {
        inputFirstName.addEventListener('keyup', function () {

                if (this.value.match(regExName)) {
                    inputFirstName.style.border = '2px solid green';
                    errorArray[2] = false;
                } else {
                    errorArray[2] = true;
                    inputFirstName.style.border = '2px solid red';
                }
            }
        )

    }

    if (inputLastName) {
        inputLastName.addEventListener('keyup', function () {
                if (this.value.match(regExName)) {
                    inputLastName.style.border = '2px solid green';
                    errorArray[3] = false;
                } else {
                    errorArray[3] = true;
                    inputLastName.style.border = '2px solid red';
                }
            }
        )

    }

    if (inputEmail) {
        inputEmail.addEventListener('keyup', function () {
                if (this.value.match(regExEmail)) {
                    inputEmail.style.border = '2px solid green';
                    errorArray[4] = false;
                } else {
                    errorArray[4] = true;
                    inputEmail.style.border = '2px solid red';
                }
            }
        )

    }

    if (inputStreet) {
        inputStreet.addEventListener('keyup', function () {

                if (this.value.match(regExName)) {
                    inputStreet.style.border = '2px solid green';
                    errorArray[5] = false;
                } else {
                    errorArray[5] = true;
                    inputStreet.style.border = '2px solid red';
                }
            }
        )

    }

    if (inputNumber) {
        inputNumber.addEventListener('keyup', function () {

                if (this.value.match(regExStreetNumber)) {
                    inputNumber.style.border = '2px solid green';
                    errorArray[6] = false;
                } else {
                    errorArray[6] = true;
                    inputNumber.style.border = '2px solid red';
                }
            }
        )

    }

    if (inputCity) {
        inputCity.addEventListener('keyup', function () {

                if (this.value.match(regExName)) {
                    inputCity.style.border = '2px solid green';
                    errorArray[7] = false;
                } else {
                    errorArray[7] = true;
                    inputCity.style.border = '2px solid red';
                }
            }
        )

    }

    if (inputZip) {
        inputZip.addEventListener('keyup', function () {

                if (this.value.match(regExZip)) {
                    inputZip.style.border = '2px solid green';
                    errorArray[8] = false;
                } else {
                    errorArray[8] = true;
                    inputZip.style.border = '2px solid red';
                }
            }
        )

    }

    inputBirthday.addEventListener('focusin', function () {
        if(inputBirthday)
            inputBirthday.addEventListener('keyup', function () {
                if(this.value < 10) {
                    this.style.border = '2px solid red';
                    errorArray[9] = true;
                } else {
                    this.style.border = '2px solid green';
                    errorArray[9] = false;
                    const birthday = new Date(this.value);
                    const currentDate = new Date();
                    const yearInMillis = 31536000000;
                    var ageOfMember = ((currentDate - birthday)/yearInMillis);
                    if(ageOfMember < 18)
                    {
                        errorArray[9] = true;
                        alert('Das Mindestalter für Bestellungen beträgt 18 Jahre');
                        this.style.border = '2px solid red';
                    }
                    console.log(this.value.length);
                }
            })
    })
    console.log(errorArray);
})