<?php
require_once '../vendor/autoload.php';

$phpWord = new \PhpOffice\PhpWord\PhpWord();
$section = $phpWord->addSection();
\PhpOffice\PhpWord\Shared\Html::addHtml($section, $_POST['htmlstring']);

header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment;filename="test.docx"');

$objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
$objWriter->save('php://output');
?>