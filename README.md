# URL shortener

## Todo

[done]: https://user-images.githubusercontent.com/29199184/32275438-8385f5c0-bf0b-11e7-9406-42265f71e2bd.png "Done"

|               Skill              | 1<br>Basics | 2<br>Works   | 3<br>Polished     | 4<br>Linted |
|:-------------------------------- |:-----------------:|:-------------:|:-------------:|:----------------:|
|**home page form html**    | ![done][done]     |  |   |
|**home page twig**    | ![done][done]     | ![done][done] |  |                                  |
|**schema**           |       |  |  |                                  |
|**doctrine**           |       |  |  |                                  |
|**routes B, C generated from ORM**           |       |  |  |                                  |
|**refactor as FORM-sf**           |       |  |  |                                  |
|**write test for shortener logic**    |     |  |   |                        |
|**write shortener logic (5 - 9 alphanumeric)**   |      |               |               |                                  |
|**Http Kernel**          |     |   |               |                                  |
|**Session management**         |                   |               |               |                                  |
|**Build a Feed Encoder**         |![done][done]   |               |               |                                  |
|**Remove Bootstrap**         |   |               |               |                                  |

## Resources

[Forms in Sf](https://symfony.com/doc/4.4/forms.html)

## todo
[ ] pressing button should append a stripe div, repeatedly on the success page
[ ] button on success page should say 'make another'
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

[x]  bin/console make:test TestCase LongUrlTest
The UrlType field is a text field that prepends the submitted value with a given protocol (e.g. http://) if the submitted value doesn’t already have a protocol.

## Notes about the db and Doctrine

Config line here from .env
* DATABASE_URL="postgresql://root:@127.0.0.1:5432/pickle_evan?serverVersion=13&charset=utf8"


## Notes, to erase
What's next?



 Database Configuration


  * Modify your DATABASE_URL config in .env

  * Configure the driver (postgresql) and
    server_version (13) in config/packages/doctrine.yaml


 How to test?


  * Write test cases in the tests/ folder
  * Run php bin/phpunit

