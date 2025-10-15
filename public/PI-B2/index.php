<?php
require_once 'dados.php';

function renderizar_card_membro($membro) {
    
    $icones = [
        'Product Manager' => 'briefcase',
        'Financial Analyst' => 'bar-chart',
        'Art Director' => 'palette'
    ];

    $icone = isset($icones[$membro['cargo']]) ? $icones[$membro['cargo']] : 'person';

    echo '
    <div class="col-md-4 mb-4">
        <div class="card h-100 border-0 shadow-sm">
            <img src="img/' . htmlspecialchars($membro['imagem']) . '" class="card-img-top" alt="' . htmlspecialchars($membro['nome']) . '">
            <div class="card-body">
                <h5 class="card-title fw-bold mb-1">' . htmlspecialchars($membro['nome']) . '</h5>
                <p class="card-text text-muted mb-3">' . htmlspecialchars($membro['bio']) . '</p>
                <hr class="my-2">
                <div class="d-flex align-items-center text-primary">
                    <i class="bi bi-' . $icone . ' me-2"></i>
                    <small class="text-muted">' . htmlspecialchars($membro['cargo']) . '</small>
                </div>
            </div>
        </div>
    </div>';
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conheça Nossa Equipe</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container py-5">
        <div class="text-center mb-5">
            <small class="text-uppercase text-muted fw-semibold">Our Team</small>
            <h1 class="fw-light mt-2 mb-3">With Our Team, you can expect<br>personalized attention and engaging designs.</h1>
            <hr class="mx-auto" style="width: 60px; height: 2px; background-color: #ccc; border: none;">
        </div>

        <div class="row">
            <?php
            foreach ($equipe as $membro) {
                renderizar_card_membro($membro);
            }
            ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
