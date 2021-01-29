The Zip Archive constantly threw errors. So overcame that by adding the line:
\PhpOffice\PhpWord\Settings::setZipClass(
    \PhpOffice\PhpWord\Settings::PCLZIP);
in DocumentFormatter.php

Also,
The final statement route for processing the text is: /reports and not /report as mentioned in the Medium Article.

So the final command should be: http://localhost:8000/reports?text=We_are_done! which works just fine.