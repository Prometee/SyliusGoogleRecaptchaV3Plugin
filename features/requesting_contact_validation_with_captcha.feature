@requesting_contact_with_captcha
Feature: Requesting contact validation with captcha
    In order to avoid robot contact
    As a Customer
    I want to be prevented from robots making contact request

    Background:
        Given the store operates on a single channel in "United States"

    @ui @javascript
    Scenario: Trying to request contact without specifying an email
        Given this channel has contact email set as "contact@goodshop.com"
        When I want to request contact
        And I specify the email as "lucifer@morningstar.com"
        And I specify the message as "Hi! I did not receive an item!"
        And I try to send it
        Then I should stay on the same page

    @ui @javascript
    Scenario: Trying to request contact when a current channel has no contact email set
        Given this channel has no contact email set
        When I want to request contact
        And I specify the email as "lucifer@morningstar.com"
        And I specify the message as "Hi! I did not receive an item!"
        And I try to send it
        Then I should stay on the same page
