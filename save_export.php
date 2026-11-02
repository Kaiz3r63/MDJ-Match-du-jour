<?php
// save_export.php
header('Content-Type: application/json');

ini_set('display_errors', 0);
error_reporting(E_ALL);

$input = file_get_contents('php://input');

if (!$input) {
    echo json_encode(['success' => false, 'error' => 'Aucune donnée reçue.']);
    exit;
}

$dir = __DIR__ . '/fdm_exports';
if (!is_dir($dir)) {
    if (!mkdir($dir, 0755, true)) {
        echo json_encode(['success' => false, 'error' => 'Impossible de créer le dossier fdm_exports']);
        exit;
    }
}

$filename = isset($_GET['filename']) ? preg_replace('/[^a-zA-Z0-9_\.-]/', '_', $_GET['filename']) : ('Match_' . date('Y-m-d_H-i-s') . '.xls');
$filepath = $dir . '/' . $filename;

if (file_put_contents($filepath, $input)) {
    echo json_encode(['success' => true, 'file' => $filename]);
} else {
    echo json_encode(['success' => false, 'error' => 'Écriture impossible dans fdm_exports/']);
}