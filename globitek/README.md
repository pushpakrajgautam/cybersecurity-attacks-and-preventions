# Project 1 - Globitek CMS

Time spent: 4 hours spent in total

## User Stories

The following **required** functionality is completed:

1. [x]  Required: Create a Users Table
  * [x]  Required: Use the command line to connect to the database "globitek".
  * [x]  Required: Define a table "users" with the required columns.

2. [x]  Required: Create a Page with an HTML Form
  * [x]  Required: It has required text inputs.
  * [x]  Required: It submits to itself.
  * [x]  Required: It looks correct in a browser.
  
3. [x]  Required: Detect when the form is submitted.
  * [x]  Required: When page loads, page displays the form.
  * [x]  Required: When form submits, page retrieves the form data.

4. [x]  Required: Validate form data.
  * [x]  Required: Require the provided validation functions library.
  * [x]  Required: Validate the presence of all form values.
  * [x]  Required: Validate that no values are longer than 255 characters.
  * [x]  Required: Validate that first\_name and last\_name have at least 2 characters.
  * [x]  Required: Validate that username has at least 8 characters.
  * [x]  Required: Validate that email contains a "@".

5. [x]  Required: Display form errors if any validations fail.
  * [x]  Required: Do not submit the data to the database.
  * [x]  Required: Redisplay the form with the submitted values filled in.
  * [x]  Required: Report all errors as a list above the form.
  * [x]  Required: Test each field to ensure you get the expected errors.

6. [x]  Required: Submit successfully-validated form values to the database.
  * [x]  Required: Write an SQL insert statement.
  * [x]  Required: Add current date and time to "created\_at".
  * [x]  Required: Follow best practices regarding the query result and database connection.
  * [x]  Required: Use the command line to check the records.

7. [x]  Required: Redirect the user to a confirmation page.
    * [x]  Required: Locate the page "public/registration\_success.php".
    * [x]  Required: Redirect the user to the new page. ([Tips](#!hints))

8. [x]  Required: Sanitize all dynamic output for HTML. ([Tips](#!hints))

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
