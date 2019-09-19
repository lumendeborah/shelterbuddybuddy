# shelterbuddybuddy
Helper tools to generate custom reports created from exports from Shelter Buddy

Project Information here: https://bit.ly/2lZpIcN

# As with most awesome modern PHP stuff, you'll need to get the dependencies with composer

From the project root, run `composer install`

# For now, let's just serve this locally with this command

`php -S localhost:8000`

# We're using Laravel Mix to build static assets

From the project root, run `npm install`

Next, you can get the static assets to build by running `npm run dev`

To have the system watch your source files, and rebuild on the fly, run `npm run watch`


### PhpSpreadsheet requirements

PHP extensions. These are usually installed by running `apt-get install <mod-name>` or `brew install`:
    * [ ] ext-ctype: *
    * [ ] ext-dom: *
    * [ ] ext-gd: *
    * [ ] ext-iconv: *
    * [ ] ext-fileinfo: *
    * [ ] ext-libxml: *
    * [ ] ext-mbstring: *
    * [ ] ext-simplexml: *
    * [ ] ext-xml: *
    * [ ] ext-xmlreader: *
    * [ ] ext-xmlwriter: *
    * [ ] ext-zip: *
    * [ ] ext-zlib: *
 
 Requirements that should be handled by composer/having PHP installed:
    * [x] php: ^7.1
    * [x] psr/simple-cache: ^1.0 
    * [x] markbaker/complex: ^1.4
    * [x] markbaker/matrix: ^1.1
