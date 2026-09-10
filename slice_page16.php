<?php
$page16Path = __DIR__ . '/assets/images/pages/Liqulofi_Private_Limited_page-0016.jpg';
$src = imagecreatefromjpeg($page16Path);
$width = imagesx($src);
$height = imagesy($src);

// Make an output directory for bank assets
$bankDir = __DIR__ . '/assets/images/banks';
if (!is_dir($bankDir)) {
    mkdir($bankDir, 0777, true);
}

// Let's create preview slices: top, mid-top, mid-bottom, bottom
$sliceH = (int)($height / 4);
for ($i = 0; $i < 4; $i++) {
    $slice = imagecreatetruecolor($width, $sliceH);
    imagecopy($slice, $src, 0, 0, 0, $i * $sliceH, $width, $sliceH);
    imagejpeg($slice, $bankDir . "/preview_slice_{$i}.jpg", 85);
    imagedestroy($slice);
}

echo "Created 4 preview slices in assets/images/banks/\n";
