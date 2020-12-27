# Fizz Buzz test #

I'm pretty sure all you are familiar with Fizz Buzz test, isn't it? ;)

In this case you are going to create a web app suitable for both desktop and mobile devices, based on Fizz Buzz test.

## Your program must meet these requirements ##

- User must be able to introduce a number by an input field, then the program will display the number on the screen.
- It only accepts integer numbers from 1 to 100, otherwise it prints "Error".
- For multiples of 3 prints "Fizz" instead of the number.
- For multiples of 5 prints "Buzz".
- For numbers which are multiples of both 3 and 5 prints "FizzBuzz".

## How to start ## 

- Clone this repository
- Remove .git directory
- Create a new Git repository

### How to run services ###

```
docker-compose up
```

Then http://localhost:80 and http://localhost:8080 services will be available.

## What's included in this repo ##

A docker-compose.yml file that runs two services:

- Backend: a PHP server
- Frontend: an Apache server

## Which services you must create ##

You'll need to create two services:

- 1 REST API made with PHP (no matter if you prefer to use any framework or create it from scratch) that simply accepts GET calls with a number and returns same number, Fizz, Buzz, ...
- 1 Frontend service (again, no matter if you use any CSS/JS framework or not) that lets user introduce a number, makes AJAX calls to your REST API and displays the result on the screen.

Both services must be as simple as possible, please don't spend more than one hour.

The use of unit testing and functional testing in the backend service will be valuated.

Add some documentation as well.

Final result will be checked on http://localhost:80, that's the frontend app. Use a custom layout suitable for desktop and mobile devices.

## How to deliver your work ##

Publish your work to any public Git repository hosting service (such as GitHub, Bitbucket, ...) and don't forget to share it with us :)

We'll run it locally and test it.

Good luck!



