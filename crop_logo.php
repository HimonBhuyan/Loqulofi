<?php
// Ensure assets/images directory exists
$destDir = __DIR__ . '/assets/images';
if (!is_dir($destDir)) {
    mkdir($destDir, 0777, true);
}

// Copy page images to assets/images/pages
$pagesDir = __DIR__ . '/assets/images/pages';
if (!is_dir($pagesDir)) {
    mkdir($pagesDir, 0777, true);
}

$srcPages = 'C:/Users/User/Downloads/ilovepdf_pages-to-jpg';
if (is_dir($srcPages)) {
    foreach (glob($srcPages . '/*.jpg') as $pageFile) {
        copy($pageFile, $pagesDir . '/' . basename($pageFile));
    }
}

// Crop the logo from Page 1 (Liqulofi_Private_Limited_page-0001.jpg)
$page1Path = $pagesDir . '/Liqulofi_Private_Limited_page-0001.jpg';
if (file_exists($page1Path) && extension_loaded('gd')) {
    $src = imagecreatefromjpeg($page1Path);
    $w = imagesx($src);
    $h = imagesy($src);
    
    echo "Source dimensions: {$w} x {$h}\n";

    // Crop just the crest (crown, horse, lion, shield, elephant)
    // In Page 1, the crest is located approximately in top 3% to 35% height and centered
    $crestBox = [
        'x' => (int)($w * 0.20),
        'y' => (int)($h * 0.02),
        'width' => (int)($w * 0.60),
        'height' => (int)($h * 0.31)
    ];
    $crestImg = imagecrop($src, $crestBox);
    if ($crestImg !== false) {
        imagepng($crestImg, $destDir . '/liqulofi_crest_dark.png');
        echo "Created assets/images/liqulofi_crest_dark.png\n";
    }

    // Crop the full logo (crest + text: LIQULOFI PRIVATE LIMITED CAPITAL BEYOND LIMITS)
    $fullLogoBox = [
        'x' => (int)($w * 0.12),
        'y' => (int)($h * 0.02),
        'width' => (int)($w * 0.76),
        'height' => (int)($h * 0.46)
    ];
    $fullLogoImg = imagecrop($src, $fullLogoBox);
    if ($fullLogoImg !== false) {
        imagepng($fullLogoImg, $destDir . '/liqulofi_full_logo.png');
        echo "Created assets/images/liqulofi_full_logo.png\n";
    }

    // Now let's create a transparent PNG version where the dark background is keyed out
    // or blended cleanly with warm off-white / transparent alpha
    if ($crestImg !== false) {
        $cw = imagesx($crestImg);
        $ch = imagesy($crestImg);
        $transparentCrest = imagecreatetruecolor($cw, $ch);
        imagealphablending($transparentCrest, false);
        imagesavealpha($transparentCrest, true);
        $transColour = imagecolorallocatealpha($transparentCrest, 0, 0, 0, 127);
        imagefill($transparentCrest, 0, 0, $transColour);

        for ($x = 0; $x < $cw; $x++) {
            for ($y = 0; $y < $ch; $y++) {
                $rgb = imagecolorat($crestImg, $x, $y);
                $r = ($rgb >> 16) & 0xFF;
                $g = ($rgb >> 8) & 0xFF;
                $b = $rgb & 0xFF;

                // If it's the dark background (near black / dark navy)
                $brightness = ($r + $g + $b) / 3;
                if ($brightness < 28 && $r < 30 && $g < 35 && $b < 55) {
                    // Transparent
                    imagesetpixel($transparentCrest, $x, $y, $transColour);
                } elseif ($brightness < 60 && $r < 65 && $g < 70 && $b < 95) {
                    // Semi-transparent feathered edge
                    $alpha = (int)(127 * (1 - ($brightness - 28) / (60 - 28)));
                    $alpha = max(0, min(127, $alpha));
                    $color = imagecolorallocatealpha($transparentCrest, $r, $g, $b, $alpha);
                    imagesetpixel($transparentCrest, $x, $y, $color);
                } else {
                    $color = imagecolorallocatealpha($transparentCrest, $r, $g, $b, 0);
                    imagesetpixel($transparentCrest, $x, $y, $color);
                }
            }
        }
        imagepng($transparentCrest, $destDir . '/liqulofi_crest_transparent.png');
        echo "Created assets/images/liqulofi_crest_transparent.png\n";
    }
}
