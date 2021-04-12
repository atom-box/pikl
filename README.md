# URL shortener

## Introduction

This is a web app to for shortening links.  If given a long URL, the site generates a shortened URL, stores it in a table, and becomes a redirecter for the new shortened URL.

## Schema

Deploy notes for the database (PostgreSQL).  The app uses three tables:  

### sessions
```
CREATE TABLE IF NOT EXISTS sessions (
    session_id  serial,
    user_id     int NOT NULL,
    date        timestamp
);
```

### users
```
CREATE TABLE IF NOT EXISTS users (
    user_id     serial,
    email       varchar(255) UNIQUE NOT NULL,
    last_reset  timestamp,
    name        varchar(60),
    type        varchar(12) DEFAULT 'free',
    created     timestamp,
    password    varchar(32)
);
```

### links
```
CREATE TABLE IF NOT EXISTS links (
    link_id     serial,
    session_id  int,
    long        varchar(1000) NOT NULL,
    short       varchar(40) UNIQUE
);
```
## Sections & Phases

[done]: https://user-images.githubusercontent.com/29199184/32275438-8385f5c0-bf0b-11e7-9406-42265f71e2bd.png "Done"

|               Section              | 1<br>Basics | 2<br>Works   | 3<br>Polished     | 4<br>Linted |
|:-------------------------------- |:-----------------:|:-------------:|:-------------:|:----------------:|
|**home page form html**    | ![done][done]     |  |   |
|**home page twig**    | ![done][done]     | ![done][done] |  |                                  |
|**schema**           |  ![done][done]        |  ![done][done]   |  |                                  |
|**doctrine**           |       |  |  |                                  |
|**routes B, C generated from ORM**           |       |  |  |                                  |
|**refactor as FORM-sf**           |       |  |  |                                  |
|**test (shortener logic and...**    |     |  |   |                        |
|**write shortener logic (5 - 9 alphanumeric)**   |      |               |               |                                  |
|**Http Kernel**          |     |   |               |                                  |
|**Session management**         |                   |               |               |                                  |
|**CSS**         |![done][done]   |               |               |                                  |
|**Twig views**         | ![done][done]    |               |               |                                  |


## todo list
[ ] Basic Database Configuration. (1) Modify DATABASE_URL config in .env 
[ ] Basic DB config  (2) Configure the driver (postgresql) and server_version (13) in config/packages/doctrine.yaml
[ ] pressing button should append a stripe div, repeatedly on the success page  
[ ] button on success page should say 'make another'   
[ ] Add Validation
[ ] Hook up the database
[ ] Write the Doctrine part
[ ] do something to the submission, like ALL CAPS it   
[x] 2nd route works   
[x] once routeOne twig works, undo the html of main   
[x] data flows through TaskController.php   
[ ] refactor all the longUrl names and files. TO URLMAKEOVER   
[ ] add the custom error row from   https://symfony.com/doc/4.4/form/form_customization.html   
[ ] add UI more like https://free-url-shortener.rb.gy/ but with my twinning JS    
[x] accessible image   
[ ] copy button: copies your URL   
[ ] add twig sophistication by multifiles:    
    base.html twig      +     content_base.html.twig  + {% extends %}
[ ] leverage composer libraries   
[ ] remove unused USE statements    
[ ] #33 of .env we changed env to lax.  see
https://symfonycasts.com/screencast/symfony4-doctrine/install
[ ] Write at least three test cases in the tests/ folder. Run php bin/phpunit
[x]  bin/console make:test TestCase LongUrlTest
The UrlType field is a text field that prepends the submitted value with a given protocol (e.g. http://) if the submitted value doesn’t already have a protocol.


## Notes about the db and Doctrine

Config line here from .env
* DATABASE_URL="postgresql://root:@127.0.0.1:5432/pickle_evan?serverVersion=13&charset=utf8"

## Resources

[Forms in Sf](https://symfony.com/doc/4.4/forms.html)  
[How to Customize Forms in Sf](https://symfony.com/doc/4.4/form/form_customization.html)  
[Validation in Sf](https://www.tutorialspoint.com/symfony/symfony_validation.htm)  
[PostGreSQL examples](https://www.postgresqltutorial.com/postgresql-create-table/)  
[Official PostGreSQL Manual](https://www.postgresql.org/docs/13/sql-createtable.html)  




