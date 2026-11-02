<?php
header('Content-Type: application/json; charset=utf-8');

$dir = 'fdm_exports/';
$response = ['success' => false, 'files' => []];

if (is_dir($dir)) {
    $files = scandir($dir);
    $xlsFiles = [];
    foreach ($files as $file) {
        // Filtrer uniquement les fichiers .xls
        if (pathinfo($file, PATHINFO_EXTENSION) === 'xls') {
            $xlsFiles[] = $file;
        }
    }
    // Trier du plus récent au plus ancien
    rsort($xlsFiles);
    
    $response['success'] = true;
    $response['files'] = $xlsFiles;
}

echo json_encode($response);
?>