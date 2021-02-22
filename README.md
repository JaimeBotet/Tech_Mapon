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

And the database will be created and populated with 3 users and passwords:

| User  | Password |
| ----- | -------- |
| Jaime | test1234 |
| Jose  | test4321 |
| Juan  | test1324 |

## The architecture 🚀

Im using a MVC architecture where I use the _index.php_ file as an entry point where the URL it's evaluated, depending on the URL parameterers (_controller_ and _action_) it is redirected to one view or another.

The authentication process is very simple, I created some dummy data to populate the **MySQL** DataBase including name and password, to get logged in. If the data is correct, then the next screen will be shown, where we are going to be able to select the time range we want to see the route.

Since the authentication process is very simple, Im not using the **SESSION** feature and thus, there is not a _logout_ functionality; but it would advisable to do so if we want to make a more robust application.

## The Google Maps API 🚀

To be able to access the data gathered from the _mapon_ API first we make a PHP **HTTP** request with _curl_ and save the data from the routes in the file _/resources/polyline.json_ and then we retrieve it back in the _/assets/js/googleMaps.js_ with the _$.getJSON_ function. I could have stored it in the DB, but this way was a quick fix.

Once we have obtained the routes in the **JavaScript** we can then loop through the routes and distinguish if it is a polyline or a stopping point, this way we can decide weather to call the _addMarker()_ function (to add the point were the vehicle stopped) or the _addPolyline()_ function (to draw the route that the vehicle did).

## Author ✒️

- **Jaime Botet** - _All the work of design and code_ - [Repository](https://github.com/JaimeBotet/Tech_Mapon.git)
