<?php
require_once '../vendor/autoload.php';

$phpWord = new \PhpOffice\PhpWord\PhpWord();
$section = $phpWord->addSection();
\PhpOffice\PhpWord\Shared\Html::addHtml($section, 'Sample');

$objReader = \PhpOffice\PhpWord\IOFactory::createReader('Word2007');
$phpWord = $objReader->load("Sample_11_ReadWord2007.docx");
 
 $targetFile = __DIR__ . "/results/{'sample'}.{'html'}";
 
 $phpWord->save($targetFile, $format);

echo $phpWord;

if (!CLI) {
    include_once 'Sample_Footer.php';
}
