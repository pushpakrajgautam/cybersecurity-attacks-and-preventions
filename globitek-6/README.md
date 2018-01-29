# Project 6 - Globitek Authentication and Login Throttling

Time spent: 8 hours spent in total

## User Stories

The following **required** functionality is completed:

1\. "staff/users/new.php" and "staff/users/edit.php"
  * [x]  Form with inputs for "Password" and "Confirm Password"
  * [x]  Strong password requirements text

2\. Data validations
  * [x]  Returns an error if password or confirm_password are blank.
  * [x]  Returns an error if password and confirm_password do not match.
  * [x]  Returns an error if password is not at least 12 characters long.
  * [x]  Returns an error if password does not meet character requirements.
  * [x]  Returns any errors related to other validations already on the user.

3\. Saving a user
  * [x]  Encrypts the password
  * [x]  Stores the password in the database

4\. Login page
  * [x]  Verify the correct password.
  * [x]  Do not create a User Enumeration vulnerability.

5\. If a user fails to log in:
  * [x]  Record the failed login for the first 5 attempts.
  * [x]  Return a "too many failed logins" message after 5 attempts.
  * [x]  Future attempts will show the number of minutes remaining in the lockout.
  * [x]  After the lockout period, the failed logins count resets to 0.

6\. After any successful login:
  * [x]  Set the failed_logins.count for the username to 0.

7\. SQLi and XSS
  * [x]  Do not introduce any SQLI Injection and Cross-Site Scripting vulnerabilities.

## License

    Copyright [2017] [Pushpak Raj Gautam]

    Licensed under the Apache License, Version 2.0 (the "License");
    you may not use this file except in compliance with the License.
    You may obtain a copy of the License at

        http://www.apache.org/licenses/LICENSE-2.0

    Unless required by applicable law or agreed to in writing, software
    distributed under the License is distributed on an "AS IS" BASIS,
    WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
    See the License for the specific language governing permissions and
    limitations under the License.
