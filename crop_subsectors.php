<?php
$page15 = "assets/images/pages/Liqulofi_Private_Limited_page-0015.jpg";

if (file_exists($page15)) {
    $img = imagecreatefromjpeg($page15);
    $w = imagesx($img);
    $h = imagesy($img);

    echo "Image size: {$w}x{$h}\n";

    // 1. Cold Storage
    // The card has a golden rounded border.
    $csCrop = imagecrop($img, ['x' => (int)($w * 0.045), 'y' => (int)($h * 0.165), 'width' => (int)($w * 0.91), 'height' => (int)($h * 0.218)]);
    if ($csCrop) {
        imagejpeg($csCrop, "assets/images/services/cold-storage-full.jpg", 98);
        imagedestroy($csCrop);
    }
    $csPhoto = imagecrop($img, ['x' => (int)($w * 0.42), 'y' => (int)($h * 0.17), 'width' => (int)($w * 0.53), 'height' => (int)($h * 0.175)]);
    if ($csPhoto) {
        imagejpeg($csPhoto, "assets/images/services/cold-storage-photo.jpg", 98);
        imagedestroy($csPhoto);
    }

    // 2. Warehouse
    $whCrop = imagecrop($img, ['x' => (int)($w * 0.045), 'y' => (int)($h * 0.393), 'width' => (int)($w * 0.91), 'height' => (int)($h * 0.218)]);
    if ($whCrop) {
        imagejpeg($whCrop, "assets/images/services/warehouse-full.jpg", 98);
        imagedestroy($whCrop);
    }
    $whPhoto = imagecrop($img, ['x' => (int)($w * 0.42), 'y' => (int)($h * 0.40), 'width' => (int)($w * 0.53), 'height' => (int)($h * 0.165)]);
    if ($whPhoto) {
        imagejpeg($whPhoto, "assets/images/services/warehouse-photo.jpg", 98);
        imagedestroy($whPhoto);
    }

    // 3. Dairy Farm - cut off before 'OUR SIMPLE PROCESS'
    $dfCrop = imagecrop($img, ['x' => (int)($w * 0.045), 'y' => (int)($h * 0.620), 'width' => (int)($w * 0.91), 'height' => (int)($h * 0.182)]);
    if ($dfCrop) {
        imagejpeg($dfCrop, "assets/images/services/dairy-farm-full.jpg", 98);
        imagedestroy($dfCrop);
    }
    $dfPhoto = imagecrop($img, ['x' => (int)($w * 0.42), 'y' => (int)($h * 0.625), 'width' => (int)($w * 0.53), 'height' => (int)($h * 0.165)]);
    if ($dfPhoto) {
        imagejpeg($dfPhoto, "assets/images/services/dairy-farm-photo.jpg", 98);
        imagedestroy($dfPhoto);
    }

    imagedestroy($img);
    echo "Sub-sectors images cleanly re-cropped from Page 15!\n";
} else {
    echo "Page 15 not found!\n";
}

