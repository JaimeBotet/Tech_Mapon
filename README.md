# Mapon I Back-end tests

_This is a simple application where an already "registered" user can authenticate itself in a login procediure and afterwards can select a date-time range and submit it, if the form fields are not empty then a google maps screen with the routes done within the time range will be shown._

## To get started

First of all create and initialize the MySQL Database in the cmd:

```
    mysql -u root -p
```

Then hit ENTER, and then execute the SQL file:

```
    source ./config/db.sql
```

And the database will be created and populated.

## The architecture 🚀

Im using a MVC architecture where I use the _index.php_ file as an entry point where the URL it's evaluated, depending on the URL parameterers (_controller_ and _action_) it is redirected to one view or another.

The authentication process is very simple, I created some dummy data to populate the **MySQL** DataBase including name and password, to get logged in. If the data is correct, then the next screen will be shown, where we are going to be able to select the time range we want to see the route.

Since the authentication process is very simple, Im not using the **SESSION** feature and thus, there is not a _logout_ functionality; but it would advisable to do so if we want to make a more robust application.

## Author ✒️

- **Jaime Botet** - _All the work of design and code_ - [Repository](https://github.com/JaimeBotet/Tech_Mapon.git)
