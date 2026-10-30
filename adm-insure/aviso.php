<?php
/**
 * Entrega la portada o un PDF del material y, ya enviada la respuesta, avisa
 * por correo vía PilotoAvisoService de ADM-insure (~/insure). Si la app no
 * está o falla, la página se entrega igual y sin aviso.
 */
ini_set('display_errors', '0');

const PDFS = [
    'ADM-insure-Presentacion.pdf'      => 'Presentación',
    'ADM-insure-Planes-y-costos.pdf'   => 'Planes y costos',
    'ADM-insure-Manual-de-uso.pdf'     => 'Manual de uso',
];

$pdf = isset($_GET['pdf']) ? basename((string) $_GET['pdf']) : null;
if ($pdf !== null) {
    $ruta = __DIR__ . '/pdf/' . $pdf;
    if (!preg_match('/^[A-Za-z0-9._-]+\.pdf$/', $pdf) || !is_file($ruta)) {
        http_response_code(404);
        exit('No encontrado');
    }
    header('Content-Type: application/pdf');
    header('Content-Length: ' . filesize($ruta));
    header('Content-Disposition: inline; filename="' . $pdf . '"');
    header('Cache-Control: no-cache');
    readfile($ruta);
    $evento  = 'pdf_abierto';
    $detalle = PDFS[$pdf] ?? $pdf;
} else {
    header('Content-Type: text/html; charset=UTF-8');
    header('Cache-Control: no-cache');
    readfile(__DIR__ . '/index.html');
    $evento  = 'material_visto';
    $detalle = '';
}

$app = dirname(__DIR__, 2) . '/insure';
if (is_file($app . '/app/services/PilotoAvisoService.php')) {
    try {
        define('APP_ROOT', $app);
        require $app . '/app/core/EnvLoader.php';
        \Corredora\Core\EnvLoader::load();
        require $app . '/app/core/Autoloader.php';
        \Corredora\Core\Autoloader::register();
        require $app . '/app/helpers.php';
        \Corredora\Services\PilotoAvisoService::registrar($evento, $detalle);
    } catch (\Throwable $e) {
        // Sin aviso; la página ya se entregó.
    }
}
