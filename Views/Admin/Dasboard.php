<?php
$kpis = [
    ['titulo' => 'Ventas de hoy', 'monto' => '$245.50', 'cantidad' => '32 Ventas'],
    ['titulo' => 'Ventas de Ultima Semana', 'monto' => '$1245.50', 'cantidad' => '392 Ventas'],
    ['titulo' => 'Ventas de Mes Actual', 'monto' => '$2643.50', 'cantidad' => '731 Ventas'],
    ['titulo' => 'Ventas de Mes Pasado', 'monto' => '$5188.00', 'cantidad' => '2021 Ventas']
];

$barras_semana = [
    ['dia' => 'Mon', 'alto' => '20%'],
    ['dia' => 'Tus', 'alto' => '30%'],
    ['dia' => 'Wed', 'alto' => '45%'],
    ['dia' => 'Thu', 'alto' => '55%'],
    ['dia' => 'Fri', 'alto' => '80%'],
    ['dia' => 'Sun', 'alto' => '100%']
];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Liquour</title>
    <link rel="stylesheet" href="../../Assets/Css/Style.css">
</head>
<body>

    <header>
        <?php include '../Layout/header.php'; ?>
    </header>

    <main class="dashboard-container">
        <section class="kpi-cards">
            <?php foreach ($kpis as $kpi): ?>
            <div class="card">
                <h4><?php echo $kpi['titulo']; ?></h4>
                <h2><?php echo $kpi['monto']; ?></h2>
                <p><?php echo $kpi['cantidad']; ?></p>
            </div>
            <?php endforeach; ?>
        </section>

        <section class="charts-section">
            <div class="chart-box main-chart">
                <div class="chart-header">
                    <h3>Ventas Mensuales</h3>
                    <div class="legend">
                        <span class="legend-item"><span class="dot gold"></span> Este Mes</span>
                        <span class="legend-item"><span class="dot gray"></span> Mes Pasado</span>
                    </div>
                </div>
                <div class="chart-placeholder">
                </div>
            </div>

            <div class="chart-box side-chart">
                <h3>Ventas Semanales</h3>
                <div class="bar-chart-css">
                    <?php foreach ($barras_semana as $barra): ?>
                    <div class="bar-group">
                        <div class="bar" style="height: <?php echo $barra['alto']; ?>;"></div>
                        <span><?php echo $barra['dia']; ?></span>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <section class="tables-section">
            <div class="table-box">
                <h3>TOP PRODUCTOS MAS VENDIDOS ESTA SEMANA</h3>
                <table>
                    <thead>
                        <tr>
                            <th></th>
                            <th>Nombre</th>
                            <th>Precio</th>
                            <th>Unidades Vendidas</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php for ($i = 0; $i < 6; $i++): ?>
                        <tr><td></td><td></td><td></td><td></td></tr>
                        <?php endfor; ?>
                    </tbody>
                </table>
            </div>

            <div class="table-box">
                <h3>PRODUCTOS CON STOCK BAJOS</h3>
                <table>
                    <thead>
                        <tr>
                            <th></th>
                            <th>Nombre</th>
                            <th>Precio</th>
                            <th>Unidades en Stock</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php for ($i = 0; $i < 6; $i++): ?>
                        <tr><td></td><td></td><td></td><td></td></tr>
                        <?php endfor; ?>
                    </tbody>
                </table>
            </div>
        </section>
    </main>

</body>
</html>