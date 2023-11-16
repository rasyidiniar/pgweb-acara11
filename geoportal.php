<?php
// URL yang benar untuk mengambil data GeoJSON dari GeoServer
// $wfsUrl = file_get_contents("https://geoportal.slemankab.go.id/geoserver/ows?service=WFS&version=1.0.0&request=GetFeature&typename=geonode%3Aa__3404_50KB_PT_SEBARAN_RUMAH_SAKIT_SLEMAN_20&outputFormat=json&srs=EPSG%3A4326&srsName=EPSG%3A4326");
$wfsUrl = file_get_contents("https://geoportal.slemankab.go.id/geoserver/schemas/ows/1.0.0/owsExceptionReport.xsd");
$wfsUrl = file_get_contents("https://geoportal.slemankab.go.id/geoserver/ows?service=WFS&version=1.0.0&request=GetFeature&typename=geonode%3Aa__3404_5KB_AR_PENDUDUK_BERDASARPENDIDIKAN_2022&outputFormat=json&srs=EPSG%3A4326&srsName=EPSG%3A4326");

header('Content-type: application/json');
echo ($wfsUrl);
?>
