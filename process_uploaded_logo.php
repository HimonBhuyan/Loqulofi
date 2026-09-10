<?php
$sourcePath = __DIR__ . '/assets/images/official_logo_source.jpg';
$src = imagecreatefromjpeg($sourcePath);
$width = imagesx($src);
$height = imagesy($src);

// 1. Let's create high quality full transparent logo
// Let's analyze pixel color to ensure the navy blue shield interior is preserved properly
// Let's sample colors in the center (around x=512, y=420 which is the shield area)
$sampleRgb = imagecolorat($src, 512, 420);
$sr = ($sampleRgb >> 16) & 0xFF;
$sg = ($sampleRgb >> 8) & 0xFF;
$sb = $sampleRgb & 0xFF;
echo "Shield sample color at (512,420): R=$sr, G=$sg, B=$sb\n";

$sampleBg = imagecolorat($src, 10, 10);
$bgr = ($sampleBg >> 16) & 0xFF;
$bgg = ($sampleBg >> 8) & 0xFF;
$bgb = $sampleBg & 0xFF;
echo "Background sample at (10,10): R=$bgr, G=$bgg, B=$bgb\n";

// Function to determine transparency alpha (0 = fully opaque, 127 = fully transparent)
// In JPEG, black background has low values (e.g. < 20).
// Shield is deep navy (e.g. R=10..25, G=25..45, B=60..100).
function getAlphaForPixel($r, $g, $b) {
    // If blue is notably higher than red and green, it's the navy shield
    $isNavy = ($b > 35 && $b > $r * 1.3);
    if ($isNavy) {
        return 0; // fully opaque
    }
    
    $max = max($r, $g, $b);
    if ($max <= 16) {
        return 127; // fully transparent
    }
    if ($max < 38) {
        // Linear smooth transition for edge anti-aliasing
        $ratio = ($max - 16) / (38 - 16);
        return (int)(127 * (1 - $ratio));
    }
    return 0;
}

$dstFull = imagecreatetruecolor($width, $height);
imagealphablending($dstFull, false);
imagesavealpha($dstFull, true);
$trans = imagecolorallocatealpha($dstFull, 0, 0, 0, 127);
imagefilledrectangle($dstFull, 0, 0, $width, $height, $trans);

$minX = $width; $maxX = 0; $minY = $height; $maxY = 0;

for ($y = 0; $y < $height; $y++) {
    for ($x = 0; $x < $width; $x++) {
        $rgb = imagecolorat($src, $x, $y);
        $r = ($rgb >> 16) & 0xFF;
        $g = ($rgb >> 8) & 0xFF;
        $b = $rgb & 0xFF;
        
        $alpha = getAlphaForPixel($r, $g, $b);
        if ($alpha < 127) {
            if ($x < $minX) $minX = $x;
            if ($x > $maxX) $maxX = $x;
            if ($y < $minY) $minY = $y;
            if ($y > $maxY) $maxY = $y;
        }
        $col = imagecolorallocatealpha($dstFull, $r, $g, $b, $alpha);
        imagesetpixel($dstFull, $x, $y, $col);
    }
}

echo "Detected Content Bounds: X: $minX to $maxX, Y: $minY to $maxY\n";

// Crop to content bounds + slight padding
$pad = 10;
$cropX = max(0, $minX - $pad);
$cropY = max(0, $minY - $pad);
$cropW = min($width - $cropX, ($maxX - $minX) + ($pad * 2));
$cropH = min($height - $cropY, ($maxY - $minY) + ($pad * 2));

$trimmedFull = imagecreatetruecolor($cropW, $cropH);
imagealphablending($trimmedFull, false);
imagesavealpha($trimmedFull, true);
imagefilledrectangle($trimmedFull, 0, 0, $cropW, $cropH, $trans);
imagecopy($trimmedFull, $dstFull, 0, 0, $cropX, $cropY, $cropW, $cropH);

imagepng($trimmedFull, __DIR__ . '/assets/images/liqulofi_logo_official.png', 9);
echo "Saved trimmed full logo: assets/images/liqulofi_logo_official.png ({$cropW}x{$cropH})\n";

// Now let's create the EMBLEM ONLY (Crest: Crown, Horse, Lion, Shield, Elephant)
// In the source image, the elephant ends around Y = 750 (before "LIQULOFI" text which starts at Y ~ 765)
// Let's find bottom of elephant
$crestEndY = 755;
$crestCropH = $crestEndY - $cropY;

$trimmedCrest = imagecreatetruecolor($cropW, $crestCropH);
imagealphablending($trimmedCrest, false);
imagesavealpha($trimmedCrest, true);
imagefilledrectangle($trimmedCrest, 0, 0, $cropW, $crestCropH, $trans);
imagecopy($trimmedCrest, $dstFull, 0, 0, $cropX, $cropY, $cropW, $crestCropH);

imagepng($trimmedCrest, __DIR__ . '/assets/images/liqulofi_crest_official.png', 9);
echo "Saved trimmed crest: assets/images/liqulofi_crest_official.png ({$cropW}x{$crestCropH})\n";

// Also copy over to replace default crest_transparent.png and logo_full_transparent.png so everything automatically uses the official logo!
copy(__DIR__ . '/assets/images/liqulofi_crest_official.png', __DIR__ . '/assets/images/crest_transparent.png');
copy(__DIR__ . '/assets/images/liqulofi_logo_official.png', __DIR__ . '/assets/images/logo_full_transparent.png');
echo "Updated standard logo paths.\n";

imagedestroy($src);
imagedestroy($dstFull);
imagedestroy($trimmedFull);
imagedestroy($trimmedCrest);
