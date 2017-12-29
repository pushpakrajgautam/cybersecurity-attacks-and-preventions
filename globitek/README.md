# Project 1 - Globitek CMS

Time spent: 4 hours spent in total

## User Stories

The following **required** functionality is completed:

1. [ ]  Required: Create a Users Table
  * [ ]  Required: Use the command line to connect to the database "globitek".
  * [ ]  Required: Define a table "users" with the required columns.

2. [ ]  Required: Create a Page with an HTML Form
  * [ ]  Required: It has required text inputs.
  * [ ]  Required: It submits to itself.
  * [ ]  Required: It looks correct in a browser.
  
3. [ ]  Required: Detect when the form is submitted.
  * [ ]  Required: When page loads, page displays the form.
  * [ ]  Required: When form submits, page retrieves the form data.

4. [ ]  Required: Validate form data.
  * [ ]  Required: Require the provided validation functions library.
  * [ ]  Required: Validate the presence of all form values.
  * [ ]  Required: Validate that no values are longer than 255 characters.
  * [ ]  Required: Validate that first\_name and last\_name have at least 2 characters.
  * [ ]  Required: Validate that username has at least 8 characters.
  * [ ]  Required: Validate that email contains a "@".

5. [ ]  Required: Display form errors if any validations fail.
  * [ ]  Required: Do not submit the data to the database.
  * [ ]  Required: Redisplay the form with the submitted values filled in.
  * [ ]  Required: Report all errors as a list above the form.
  * [ ]  Required: Test each field to ensure you get the expected errors.

6. [ ]  Required: Submit successfully-validated form values to the database.
  * [ ]  Required: Write an SQL insert statement.
  * [ ]  Required: Add current date and time to "created\_at".
  * [ ]  Required: Follow best practices regarding the query result and database connection.
  * [ ]  Required: Use the command line to check the records.

7. [ ]  Required: Redirect the user to a confirmation page.
    * [ ]  Required: Locate the page "public/registration\_success.php".
    * [ ]  Required: Redirect the user to the new page. ([Tips](#!hints))

8. [ ]  Required: Sanitize all dynamic output for HTML. ([Tips](#!hints))

## License

    Copyright [yyyy] [name of copyright owner]

    Licensed under the Apache License, Version 2.0 (the "License");
    you may not use this file except in compliance with the License.
    You may obtain a copy of the License at

        http://www.apache.org/licenses/LICENSE-2.0

    Unless required by applicable law or agreed to in writing, software
    distributed under the License is distributed on an "AS IS" BASIS,
    WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
    See the License for the specific language governing permissions and
    limitations under the License.
