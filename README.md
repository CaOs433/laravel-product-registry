# Product Registry App with Laravel

A simple product registry application with Laravel to browse, edit, add & delete products in a database.
The application is Dockerized with a MySQL database.

## Installation

To run the app, you need to have Docker installed and running.

Then just run the `start.sh` script to start the app.

You need a .env (environment variables file named `.env`) to run the application.
This will be generated with the `start.sh` script for a quick setup.

It also runs the database migrations and seeds the database with some example data.
Finally it runs `docker compose up --build`.

The app will be available at <http://localhost:8000>.
