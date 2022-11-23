<?php
$date = date('Y-m-d');
$date.='T17:35:58+00:00';
echo <<<ENDL
<?xml version="1.0" encoding="UTF-8"?>
<urlset
      xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
      xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
      xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9
            http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">
<!-- created with Free Online Sitemap Generator www.xml-sitemaps.com -->
<url>
  <loc>https://firstskytrust.com/skytrust.online/</loc>
  <lastmod>$date</lastmod>
  <priority>1.00</priority>
</url>
</urlset>
ENDL;
?>