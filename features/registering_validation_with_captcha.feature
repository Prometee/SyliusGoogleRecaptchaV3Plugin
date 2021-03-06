@customer_registration_with_captcha
Feature: Account registration with captcha
    In order to avoid robot registration
    As a Visitor
    I want to be prevented from creating an account

    Background:
        Given the store operates on a single channel in "United States"

    @ui @javascript
    Scenario: Trying to register a new account with robot score
        When I want to register a new account
        And I specify the first name as "Saul"
        And I specify the last name as "Goodman"
        And I specify the email as "goodman@gmail.com"
        And I specify the password as "heisenberg"
        And I confirm this password
        And I try to register this account
        # No error appears because it's an hidden field but the form is not validated
        Then I should stay on the same page
        And I should not be logged in
