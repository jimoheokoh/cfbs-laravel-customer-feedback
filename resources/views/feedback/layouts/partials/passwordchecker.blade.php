<script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/4.0.0/crypto-js.min.js"></script>
<script>
//Greg Morrison
//Password Check V1.00 12/11/14
//A program to have the user input a password for the program to verify.
//Editted to suit this app by Jimoh Okoh
if (sessionStorage.access != 1) {
    //Declares global variable valid
    var valid = false;

    //Value is equal to the value returned from function "CheckPassword"
    valid = CheckPassword(valid);

    //Displays the approiate alert depending on the result of the function
    if (valid !== true) {
        alert("Password incorrect");
    }
    // End of Main Code

    //Defines the funcion CheckPassword, passing in the parameter valid
    function CheckPassword(valid) {
        //Defines the local variables password and count
        var password = "";
        var truePassword = "{{md5(config('settings.require_pass'))}}";
        var count = 1;
        //Defines a while loop that will continue 
        while (password != truePassword && count < 4) {
            //Asks the user to input the password
            password = prompt("Enter the password");
            //hash the password
            password = CryptoJS.MD5(password);
            //If the password is incorrect
            if (password != truePassword) {
                //Displays an error message.
                alert("Error, incorrect password");
            } else {
                //Sets value to true and returns it
                valid = true;
                //Store the value in a temp session
                sessionStorage.access = 1
                return valid;
            }
            //Increments count by one.
            count = count + 1;
        } window.location.replace("../../");
    }
}
</script>