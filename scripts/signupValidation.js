//TODO: validation for fields in sign-up form
//first, last, phone, email(use regex?) paid client checkbox
//should add event listeners on document load and script file should be linked into sign-up's view
//First and Last should check a length of the value and if its' string.


/**
 * Validates account creation.
 */
function validate()
{

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
 //Note: should probably still test these regexes to see if they work.