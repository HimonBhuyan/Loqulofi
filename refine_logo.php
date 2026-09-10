<?php
// Precision cropping of the exact logo emblem
$destDir = __DIR__ . '/assets/images';
$page1Path = $destDir . '/pages/Liqulofi_Private_Limited_page-0001.jpg';

if (file_exists($page1Path)) {
    $src = imagecreatefromjpeg($page1Path);
    $w = imagesx($src);
    $h = imagesy($src);

    // Let's create the tight crest crop:
    // Crown top (approx y: 55px to 540px, x: 270px to 970px in 1241x1754 image)
    $crestBox = [
        'x' => 260,
        'y' => 45,
        'width' => 720,
        'height' => 540
    ];
    $crestImg = imagecrop($src, $crestBox);
    if ($crestImg) {
        imagepng($crestImg, $destDir . '/crest_raw.png');
        
        // High quality transparent version
        $cw = imagesx($crestImg);
        $ch = imagesy($crestImg);
        $trans = imagecreatetruecolor($cw, $ch);
        imagealphablending($trans, false);
        imagesavealpha($trans, true);
        $clear = imagecolorallocatealpha($trans, 0, 0, 0, 127);
        imagefill($trans, 0, 0, $clear);

        for ($x = 0; $x < $cw; $x++) {
            for ($y = 0; $y < $ch; $y++) {
                $rgb = imagecolorat($crestImg, $x, $y);
                $r = ($rgb >> 16) & 0xFF;
                $g = ($rgb >> 8) & 0xFF;
                $b = $rgb & 0xFF;

                $luminance = 0.299 * $r + 0.587 * $g + 0.114 * $b;
                
                // Dark background threshold
                if ($luminance < 22 && $b < 40) {
                    imagesetpixel($trans, $x, $y, $clear);
                } elseif ($luminance < 50 && $b < 75) {
                    $alpha = (int)(127 * (1 - ($luminance - 22) / (50 - 22)));
                    $alpha = max(0, min(127, $alpha));
                    $color = imagecolorallocatealpha($trans, $r, $g, $b, $alpha);
                    imagesetpixel($trans, $x, $y, $color);
                } else {
                    $color = imagecolorallocatealpha($trans, $r, $g, $b, 0);
                    imagesetpixel($trans, $x, $y, $color);
                }
            }
        }
        imagepng($trans, $destDir . '/crest_transparent.png');
        echo "Successfully created crest_transparent.png\n";
    }

    // Full Logo with typography:
    $logoBox = [
        'x' => 160,
        'y' => 45,
        'width' => 920,
        'height' => 840
    ];
    $logoImg = imagecrop($src, $logoBox);
    if ($logoImg) {
        imagepng($logoImg, $destDir . '/logo_full_dark.png');

        // Full transparent logo
        $lw = imagesx($logoImg);
        $lh = imagesy($logoImg);
        $logoTrans = imagecreatetruecolor($lw, $lh);
        imagealphablending($logoTrans, false);
        imagesavealpha($logoTrans, true);
        $clear = imagecolorallocatealpha($logoTrans, 0, 0, 0, 127);
        imagefill($logoTrans, 0, 0, $clear);

        for ($x = 0; $x < $lw; $x++) {
            for ($y = 0; $y < $lh; $y++) {
                $rgb = imagecolorat($logoImg, $x, $y);
                $r = ($rgb >> 16) & 0xFF;
                $g = ($rgb >> 8) & 0xFF;
                $b = $rgb & 0xFF;

                $luminance = 0.299 * $r + 0.587 * $g + 0.114 * $b;

                if ($luminance < 22 && $b < 40) {
                    imagesetpixel($logoTrans, $x, $y, $clear);
                } elseif ($luminance < 50 && $b < 75) {
                    $alpha = (int)(127 * (1 - ($luminance - 22) / (50 - 22)));
                    $alpha = max(0, min(127, $alpha));
                    $color = imagecolorallocatealpha($logoTrans, $r, $g, $b, $alpha);
                    imagesetpixel($logoTrans, $x, $y, $color);
                } else {
                    $color = imagecolorallocatealpha($logoTrans, $r, $g, $b, 0);
                    imagesetpixel($logoTrans, $x, $y, $color);
                }
            }
        }
        imagepng($logoTrans, $destDir . '/logo_full_transparent.png');
        echo "Successfully created logo_full_transparent.png\n";
    }
}
