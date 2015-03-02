# umplifyonline
A web UI to show what has been umplified

## Running UmplifyOnline During Development
(Requires PHP 5.4+)

1. Navigate to the project's 'public' directory (umplifyonline/public)
2. Build your projects directory with a script like the Umplify Project List (https://code.google.com/p/umple/wiki/UmplifyProjectList)
3. Set the environment variable 'UMPLIFY_DIR' to the location of your stored projects
4. Start the PHP webserver `php -S localhost:8080`
5. Using your web browser, navigate to `localhost:8080`

## Running the tests
(Requires PHP 5.4+)

1. Navigate to the project's 'public' directory (umplifyonline/public)
2. Start the PHP webserver `php -S localhost:8080`
3. Using your web browser, navigate to `localhost:8080/_alltests.php`
  * The tests will be run and results displayed on the page