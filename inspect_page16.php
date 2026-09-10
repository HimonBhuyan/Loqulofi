<?php
$page16Path = __DIR__ . '/assets/images/pages/Liqulofi_Private_Limited_page-0016.jpg';

if (!file_exists($page16Path)) {
    die("Page 16 does not exist\n");
}

$info = getimagesize($page16Path);
echo "Page 16 dimensions: " . $info[0] . "x" . $info[1] . "\n";
