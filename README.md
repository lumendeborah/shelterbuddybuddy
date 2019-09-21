# shelterbuddybuddy

Helper tools to generate custom reports created from exports from Shelter Buddy

Project Information here: https://bit.ly/2lZpIcN

# Project Status

The members of the Cascadia PHP 2019 hackathon that began this project ran into a
snag with the PhpSpreadsheet package that we were using to try to process the .xlsx
file output by Shelter Buddy.

PhpSpreadsheet struggled to read *report60.xlsx* and took way longer than expected.
A test with another .xlsx file ran fine, so the team suspected that the data was the
cause.

At the last minute of the hackathon, we discovered that the existing Shelter Buddy tool allows users
to export reports formatted as .CSVs. There is also a button for exporting as an XML
file, but it threw an error on the first attempt at using it. We took this error to be further evidence
to there being an issue with the data coming out of Shelter Buddy.

# Running on Laravel 6.0 now

Installation steps follow those found at https://laravel.com/docs/6.x  

# We're using Laravel Mix to build static assets

From the project root, run `npm install`

Next, you can get the static assets to build by running `npm run dev`

To have the system watch your source files, and rebuild on the fly, run `npm run watch`


### PhpSpreadsheet requirements

PHP extensions needed by PhpSpreadsheet. These are usually installed by running `apt-get install <mod-name>` or `brew install`:

 * ext-ctype: *
 * ext-dom: *
 * ext-gd: *
 * ext-iconv: *
 * ext-fileinfo: *
 * ext-libxml: *
 * ext-mbstring: *
 * ext-simplexml: *
 * ext-xml: *
 * ext-xmlreader: *
 * ext-xmlwriter: *
 * ext-zip: *
 * ext-zlib: *
 
