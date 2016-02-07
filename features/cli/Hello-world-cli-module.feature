Feature: The Hello World module should return Hello World when ran
  In order to learn Magento 2
  As a developer excited to learn more
  I want to get feedback when I run my CLI module

  Scenario: The hello World module will return a string
    Given My module exists
    When I run "bin/magento jcowie:helloworld" from the command line
    Then I should see "Hello World" returned
