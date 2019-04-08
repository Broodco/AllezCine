# AllezCine

## What is this repository about?

AllezCine is a group project made at Becode. The objective is to create a Web App listing movies and tv series. 
For this, we will on one hand use TheMovieDB API to get informations about the latest trending movies, and on the other hand we will create our own API to keep records of what's on our website as well as like, comments,.. regarding content.
The app will be powered by VueJS, PHP, mySQL.

## The Team

* Broodcoorens Maxime
* Massart François
* Ripet Julien

## Content

### Back-End

The back-end side of this project was created in PHP, using a mySQL database.
The settings folder contains two important files : 
* dbconnect.php : Connection to the PDO
* header.php : Headers imported in the API for each call
The rest of the folder contains the different actions the user can call :
* read.php : GET request, used to receive the comments posted for a movie.
* likes.php : GET request, used to add the number of *likes* of a comment.

### Front-End

The front-end of the project is a Single Page Application created using Vue CLI and the Vuetify framework.
The page is divided into multiple parts :

* navbar *or* drawer : navigation bar for desktop/mobile, includes a searchbar.
* carousel : slideshow of top trending movies and title of the website
* social : social media buttons
* router-view : main part of the website - redirect to different components based on the url path
* footer : footer (what a surprise !)

#### Views

The app, altough being single page, lets us navigate using the url. The different views available are : 
* Home : Homepage, shows the 12 most trending movies *and* tv shows
* Movies / Series : Shows the 40 most trending movies *or* tv shows
* Details : Shows details about one particuliar movie *or* tv show, and communicate with our API to fetch and post comments about it.

### What's next?

Our product is, for now, a *work-in-progress*.

The next steps on our list are : 
* Fix the CORS error occuring when trying to post a new comment
* Securing the database connection and sanitize user input
* Create a infinite scroll page with the movies/series view
* A view where you can show movies or series based on tags. Tags present in the details view will redirect to this page.
* Beautify the code
* Styling it all !