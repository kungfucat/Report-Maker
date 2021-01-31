# report-maker

A package to convert a block of text into a word document. [link](https://packagist.org/packages/harshbhardwaj/report-maker)

## Some key points:

- The [Medium Article](https://macrini.medium.com/how-to-create-service-bundles-for-a-symfony-application-f266ecf01fca) was implemented in its entirety.
- The Zip Archive constantly threw errors. So overcame that by adding the line: `\PhpOffice\PhpWord\Settings::setZipClass(\PhpOffice\PhpWord\Settings::PCLZIP);` in DocumentFormatter.php.

- The sample backend uses the route `/reports` for processing the text and not `/report`(which was mentioned in the article).

- So the final command should be: `http://localhost:8000/reports?text=We_are_done!` which works just fine.
