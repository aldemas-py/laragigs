<?php
$targetFolder = $_SERVER['DOCUMENT_ROOT'] . '/gmshop/storage/app/public';
$linkFolder = $_SERVER['DOCUMENT_ROOT'] . '/public_html/storage';
if (symlink($targetFolder, $linkFolder)) {

    echo 'Symlink process successfully completed';
} else {
    echo 'error';
}
?>