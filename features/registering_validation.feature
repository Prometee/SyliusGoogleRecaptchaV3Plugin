@customer_registration
Feature: Account registration
    In order to avoid robot registration
    As a Visitor
    I want to be prevented from creating an account

    Background:
        Given the store operates on a single channel in "United States"

    @ui
    Scenario: Trying to register a new account with robot score
        When I want to register a new account
        And I do not specify the first name
        And I specify the first name as "Saul"
        And I specify the last name as "Goodman"
        And I specify the email as "goodman@gmail.com"
        And I specify the password as "heisenberg"
        And I confirm this password
        And I try to register this account
        Then I should be notified that I am a robot
        And I should not be logged in
