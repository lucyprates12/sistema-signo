<?php include('layouts/header.php'); ?>

<div class="container mt-5 text-center">
    <h1 style="color: black;">O seu signo é:</h1>

    <?php
    try {
        if (!isset($_POST['data_nascimento']) || empty($_POST['data_nascimento'])) {
            throw new Exception('Data de nascimento não informada.');
        }

        $raw = $_POST['data_nascimento'];
        $data_nascimento = DateTime::createFromFormat('Y-m-d', $raw);
        if (!$data_nascimento) {
            throw new Exception('Formato de data inválido.');
        }

        $signos = @simplexml_load_file(__DIR__ . '/signos.xml');
        if ($signos === false) {
            throw new Exception('Arquivo de signos não encontrado.');
        }

        $signo_encontrado = false;

        foreach ($signos->signo as $signo) {
            $dataInicio = (string)$signo->dataInicio; // d/m
            $dataFim = (string)$signo->dataFim; // d/m

            $start = DateTime::createFromFormat('d/m/Y', $dataInicio . '/' . $data_nascimento->format('Y'));
            $end = DateTime::createFromFormat('d/m/Y', $dataFim . '/' . $data_nascimento->format('Y'));
            if ($start === false || $end === false) continue;

            if ($start <= $end) {
                if ($data_nascimento >= $start && $data_nascimento <= $end) {
                    $signo_encontrado = true;
                }
            } else {
                if ($data_nascimento >= $start || $data_nascimento <= $end) {
                    $signo_encontrado = true;
                }
            }

            if ($signo_encontrado) {
                echo "<h2 style='color: #0f0f0f;'>" . htmlspecialchars((string)$signo->signoNome) . "</h2>";
                if (isset($signo->descricao)) {
                    echo "<p style='color: white;'>" . htmlspecialchars((string)$signo->descricao) . "</p>";
                }
                break;
            }
        }

        if (!$signo_encontrado) {
            echo "<p style='color: white;'>Não foi possível determinar seu signo. Verifique a data informada.</p>";
        }

    } catch (Exception $e) {
        echo "<p style='color: white;'>" . htmlspecialchars($e->getMessage()) . "</p>";
    }
    ?>

    <a href="index.php" class="btn" style="background-color: #ec22a9f3; color: white; border-radius: 25px; width: 100px;">Voltar</a>

</div>

<?php include('layouts/footer.php'); ?>
