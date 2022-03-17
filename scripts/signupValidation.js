

//TODO: Fix MIME Mismatch error, display error messages

//add click event listener to submit button on window load.
window.onload = document.getElementById("signup").addEventListener("click",validate);

/**
 * Validates account creation.
 */
function validate()
{
    let validated = true; //default to true

    //grab text from fields for validation.
    let email = document.getElementById("email").innerHTML;
    let phone = document.getElementById("phone").innerHTML;
    let first = document.getElementById("first").innerHTML;
    let last = document.getElementById("last").innerHTML;


    //TODO: display errors inline instead of alerts. Else statements should remove the error statements.
    //validate first name
    if(!validateName(first))
    {
        validated = false;
        alert"First name should be greater than three characters with no numbers.";
    }

    //validate last name
    if(!validateName(last))
    {
        validated = false;
        alert"last name should be greater than three characters with no numbers.";
    }

    //validate email
    if(!validateEmail(email))
    {
        validated = false;
        alert"Please enter an email with the format: email@email.com";
    }

    //validate phone #
    if(!validatePhone(phone))
    {
        validated = false;
        alert"Please enter a phone number.";
    }

    //prevent form from submission upon failure to validate.
    if(validated === false)
    {
        this.preventDefault();
    }

}

/**
 * Validates email with regex for email.
 */
function validateEmail(email)
{

    let reg = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

    if (email.match(reg))
    {
        return true;
    }
    else
    {
        return false;
    }

}

    /**
     * validates phone number with regex
     *
     * regex allows these formats:
     *(123) 456-7890
     *(123)456-7890
     *123-456-7890
     *1234567890
     */
    function validatePhone(phone)
    {
        let phoneReg = /^\(?(\d{3})\)?[- ]?(\d{3})[- ]?(\d{4})$/;

        if(phone.match(phoneReg))
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    /**
    * validates name with length (shortest name I can think of is Tom). and checks for numbers as well.
    * @param name name to be passed in, first or last.
    * @returns {boolean}
    */
    function validateName(fName)
    {

        if(fName.length < 3 && isNaN(name))
        {
            return false;
        }
        else
        {
            return true;
        }

    }
