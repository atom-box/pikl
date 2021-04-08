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
[ ] accessible image
[ } copy button
[ ] leverage composer libraries
[ ] remove unused USE statements
[ ]  bin/console make:test TestCase LongUrlTest
The UrlType field is a text field that prepends the submitted value with a given protocol (e.g. http://) if the submitted value doesn’t already have a protocol.

## Notes, to erase
What's next?



 Database Configuration


  * Modify your DATABASE_URL config in .env

  * Configure the driver (postgresql) and
    server_version (13) in config/packages/doctrine.yaml


 How to test?


  * Write test cases in the tests/ folder
  * Run php bin/phpunit

