<?php
$artifactDir = 'C:\Users\User\.gemini\antigravity-ide\brain\064b4508-caa9-4681-8c7c-f13bcfb77bfd';

$mapping = [
    'prime-home-loans' => 'prime_home_doodle_1788876923253.jpg',
    'mortgage-loans' => 'mortgage_doodle_1788876956242.jpg',
    'builder-project-finance' => 'builder_finance_doodle_1788876987919.jpg',
    'residential-property-funding' => 'residential_doodle_1788877011712.jpg',
    'commercial-project-funding' => 'commercial_doodle_1788877049482.jpg',
    'industrial-property-funding' => 'industrial_doodle_1788877092937.jpg',
    'hotel-resort-property-funding' => 'hotel_resort_doodle_1788877126163.jpg',
    'hospital-property-funding' => 'hospital_doodle_1788877164182.jpg',
    'working-capital-solutions' => 'working_capital_doodle_1788877198087.jpg',
    'smart-funding-solutions' => 'smart_funding_doodle_1788877309832.jpg',
];

if (!is_dir('assets/images/services')) {
    mkdir('assets/images/services', 0777, true);
}

foreach ($mapping as $slug => $file) {
    $src = $artifactDir . DIRECTORY_SEPARATOR . $file;
    $dst = "assets/images/services/{$slug}-doodle.jpg";
    if (file_exists($src)) {
        copy($src, $dst);
        echo "Copied {$file} -> {$dst}\n";
    } else {
        echo "Source not found: {$src}\n";
    }
}
echo "All doodle art assets installed successfully!\n";
