ABOUT CFBS V1.0
---

Customer Feedback Survey (CFBS) V1.0
Doubles as Feeback Surveying form and Contact form web app management system
Built with Laravel 8

### OTHER FUNCTIONALITIES
* Ability to create feedback questions with option to select for different input field types
** Supported input types in this version are [textbox, textarea, date, email, number, range]

### HOW TO CONFIGURE

* Clone project to your computer
* Run `composer install`
* Create a `.env` file and copy the contents from `.env.example` to it
* Edit the .env file and set your database parameters
* Change the default `REQUIRE_PASS_STRING` password to your custom string on the .env file
* Change the default `FEEDBACK_ADMIN_EMAIL` to the admin email address you desire on the .env file
* Configure your Mail settings accordingly on the .env file
* Run `php artisan migrate:fresh --seed` to run migrations and seeds
* Run `php artisan serve` to get the project working
* Visit the server address generated usually 127.0.0.1:8080 or whatever yours is

### HOW IT WORKS

* Admin can send a customized feedback request to customer/client
* Customer receives a mail requesting to submit a feedback
* Customer fills out the feedback form and submits
* Customer gets an instant summary of their response
* Admin receives an email notifying them of new submitted response
* Admin accesses the responses list on the app by entering a password (currently no authentication), you have to define your password on the .env file. Check the .env file for the default password

### DEMO

![video](http://demos.ekizone.com/hostedfiles/cfbsv10.mp4)

### ISSUES & FUTURE WORKS?

* Try fix any issues first before opening an issue ticket, and be polite when you open an issue. 
* If you have a major upgrade based on this work, send a pull request.

[Developer Email](mailto:okohejimoh@gmail.com)

### Buy Me A Coffee?
[Send Here](https://paypal.me/210489)

### License
Laravel Customer Feedback Survey (CFBS) is licensed under the [MIT license](http://opensource.org/licenses/MIT).