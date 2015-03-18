<?php
// Lib import
require_once 'ChecksumGenerator.php';

// Class instantiation
$checksum = new ChecksumGenerator();

// Path definition
$checksum->setDir("ExemplePath/");

// The name of the generated file (Only for JSON and XML)
$checksum->setFilename("GeneratedFile");

// The generating type (AS_XML for XML, AS_JSON for JSON, AS_ARRAY for an array)
$checksum->setUsedMethod($checksum::AS_JSON);

// The generating method
$checksum->generate();

// Saving into a file
// NB : You can't use save method with the ARRAY generating type
$checksum->save();

// Or getting it into a var (Usefull for ARRAY generating type)
$result = $checksum->get();

echo '<pre>';
print_r($result);
echo '</pre>';
