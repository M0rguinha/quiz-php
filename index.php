// Quiz de conhecimento

<?php

$perguntas = [
	[
		'pergunta' => 'Qual e a capital do Brasil?',
		'opcoes' => ['Sao Paulo', 'Brasilia', 'Rio de Janeiro', 'Salvador'],
		'resposta' => 'Brasilia',
	],
	[
		'pergunta' => 'Quantos dias tem uma semana?',
		'opcoes' => ['5', '6', '7', '8'],
		'resposta' => '7',
	],
	[
		'pergunta' => 'Qual planeta e conhecido como Planeta Vermelho?',
		'opcoes' => ['Venus', 'Marte', 'Jupiter', 'Saturno'],
		'resposta' => 'Marte',
	],
	[
		'pergunta' => 'Quanto e 8 x 7?',
		'opcoes' => ['54', '56', '64', '72'],
		'resposta' => '56',
	],
	[
		'pergunta' => 'Qual e o maior oceano do mundo?',
		'opcoes' => ['Atlantico', 'Indico', 'Artico', 'Pacifico'],
		'resposta' => 'Pacifico',
	],
	[
		'pergunta' => 'Quem escreveu Dom Casmurro?',
		'opcoes' => ['Machado de Assis', 'Jose de Alencar', 'Clarice Lispector', 'Carlos Drummond de Andrade'],
		'resposta' => 'Machado de Assis',
	],
	[
		'pergunta' => 'Qual e o simbolo quimico da agua?',
		'opcoes' => ['CO2', 'O2', 'H2O', 'NaCl'],
		'resposta' => 'H2O',
	],
	[
		'pergunta' => 'Em que continente fica o Egito?',
		'opcoes' => ['Asia', 'Africa', 'Europa', 'Oceania'],
		'resposta' => 'Africa',
	],
	[
		'pergunta' => 'Qual e o maior mamifero do mundo?',
		'opcoes' => ['Elefante', 'Girafa', 'Baleia-azul', 'Hipopotamo'],
		'resposta' => 'Baleia-azul',
	],
	[
		'pergunta' => 'Quantos lados tem um hexagono?',
		'opcoes' => ['5', '6', '7', '8'],
		'resposta' => '6',
	],
	[
		'pergunta' => 'Qual instrumento mede a temperatura?',
		'opcoes' => ['Barometro', 'Termometro', 'Velocimetro', 'Higrometro'],
		'resposta' => 'Termometro',
	],
	[
		'pergunta' => 'Qual e a lingua mais falada no Brasil?',
		'opcoes' => ['Espanhol', 'Portugues', 'Ingles', 'Frances'],
		'resposta' => 'Portugues',
	],
	[
		'pergunta' => 'Qual e o resultado de 144 dividido por 12?',
		'opcoes' => ['10', '11', '12', '14'],
		'resposta' => '12',
	],
	[
		'pergunta' => 'Quem pintou a Mona Lisa?',
		'opcoes' => ['Michelangelo', 'Leonardo da Vinci', 'Van Gogh', 'Picasso'],
		'resposta' => 'Leonardo da Vinci',
	],
	[
		'pergunta' => 'Qual gas e essencial para a respiracao humana?',
		'opcoes' => ['Oxigenio', 'Hidrogenio', 'Helio', 'Nitrogenio'],
		'resposta' => 'Oxigenio',
	],
	[
		'pergunta' => 'Quantos meses tem um ano?',
		'opcoes' => ['10', '11', '12', '13'],
		'resposta' => '12',
	],
	[
		'pergunta' => 'Qual e o rio mais extenso do Brasil?',
		'opcoes' => ['Rio Sao Francisco', 'Rio Amazonas', 'Rio Parana', 'Rio Negro'],
		'resposta' => 'Rio Amazonas',
	],
	[
		'pergunta' => 'Qual e a estrela mais proxima da Terra?',
		'opcoes' => ['Sirius', 'Sol', 'Proxima Centauri', 'Vega'],
		'resposta' => 'Sol',
	],
	[
		'pergunta' => 'Quanto e 15 + 27?',
		'opcoes' => ['32', '40', '42', '45'],
		'resposta' => '42',
	],
	[
		'pergunta' => 'Qual pais e conhecido pelo formato de uma bota?',
		'opcoes' => ['Grecia', 'Italia', 'Portugal', 'Chile'],
		'resposta' => 'Italia',
	],
	[
		'pergunta' => 'Qual orgao bombeia o sangue pelo corpo?',
		'opcoes' => ['Pulmao', 'Figado', 'Coracao', 'Rim'],
		'resposta' => 'Coracao',
	],
	[
		'pergunta' => 'Em que estado fisico a agua vira gelo?',
		'opcoes' => ['Liquido', 'Gasoso', 'Plasma', 'Solido'],
		'resposta' => 'Solido',
	],
	[
		'pergunta' => 'Qual e o menor numero primo?',
		'opcoes' => ['0', '1', '2', '3'],
		'resposta' => '2',
	],
	[
		'pergunta' => 'Qual animal e conhecido como rei da selva?',
		'opcoes' => ['Tigre', 'Leao', 'Onca', 'Lobo'],
		'resposta' => 'Leao',
	],
	[
		'pergunta' => 'Qual e o resultado de 100 menos 35?',
		'opcoes' => ['55', '60', '65', '75'],
		'resposta' => '65',
	],
];

$resultado = null;
$tentativas = 0;
$totalAcertos = 0;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$respostas = $_POST['respostas'] ?? [];
	$tentativas++;

	foreach ($perguntas as $indice => $pergunta) {
        if (
			isset($respostas[$indice]) &&
			$respostas[$indice] === $pergunta['resposta']
        ) {
			$totalAcertos++;
		}
	}

    $resultado = $totalAcertos;
}


?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Quiz de Conhecimentos Gerais</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: #0f172a;
            color: #f8fafc;
            padding: 30px 15px;
        }

        .container {
            max-width: 750px;
            margin: auto;
        }

        header {
            text-align: center;
            margin-bottom: 30px;
        }

        header h1 {
            color: #38bdf8;
            margin-bottom: 10px;
        }

        header p {
            color: #cbd5e1;
        }

        .pergunta {
            background: #1e293b;
            padding: 25px;
            margin-bottom: 20px;
            border-radius: 12px;
            border: 1px solid #334155;
        }

        .pergunta h2 {
            font-size: 18px;
            margin-bottom: 20px;
        }

        .opcao {
            display: block;
            background: #334155;
            padding: 14px;
            margin-bottom: 10px;
            border-radius: 8px;
            cursor: pointer;
            transition: 0.2s;
        }

        .opcao:hover {
            background: #475569;
        }

        .opcao input {
            margin-right: 10px;
            accent-color: #38bdf8;
        }

        button,
        .reiniciar {
            display: block;
            width: 100%;
            padding: 16px;
            background: #0284c7;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            text-align: center;
            text-decoration: none;
        }

        button:hover,
        .reiniciar:hover {
            background: #0369a1;
        }

        .resultado {
            background: #1e293b;
            padding: 25px;
            margin-bottom: 25px;
            border-radius: 12px;
            text-align: center;
            border: 1px solid #38bdf8;
        }

        .resultado h2 {
            color: #38bdf8;
            margin-bottom: 15px;
        }

        .resultado p {
            font-size: 20px;
            margin-bottom: 20px;
        }

        .resultado .pontuacao {
            font-size: 36px;
            font-weight: bold;
            color: #4ade80;
        }

        @media (max-width: 500px) {
            body {
                padding: 20px 10px;
            }

            .pergunta {
                padding: 18px;
            }

            .pergunta h2 {
                font-size: 16px;
            }
        }
    </style>
</head>

<body>

    <div class="container">

        <header>
            <h1>🎯 Quiz de Conhecimentos Gerais</h1>
            <p>Teste seus conhecimentos e descubra sua pontuação!</p>
        </header>

        <?php if ($resultado !== null): ?>

            <div class="resultado">
                <h2>Resultado</h2>
                <p>Voce acertou:</p>
                <div class="pontuacao">
                    <?= $resultado ?> / <?= count($perguntas) ?>
                </div>
                <a href="index.php" class="reiniciar">
                    Tentar novamente
                </a>
            </div>

        <?php else: ?>

            <form method="POST">

                <?php foreach ($perguntas as $indice => $pergunta): ?>

                    <div class="pergunta">

                        <h2>
                            <?= ($indice + 1) . ". " .
                                htmlspecialchars($pergunta["pergunta"], ENT_QUOTES, "UTF-8") ?>
                        </h2>

                        <?php foreach ($pergunta["opcoes"] as $opcaoIndice => $opcao): ?>

                            <label class="opcao">

                                <input
                                    type="radio"
                                    name="respostas[<?= $indice ?>]"
                                    value="<?= htmlspecialchars($opcao, ENT_QUOTES, "UTF-8") ?>"
                                    required
                                >

                                <?= htmlspecialchars($opcao, ENT_QUOTES, "UTF-8") ?>

                            </label>

                        <?php endforeach; ?>

                    </div>

                <?php endforeach; ?>

                <button type="submit">
                    Finalizar Quiz 🚀
                </button>

            </form>

        <?php endif; ?>

    </div>

</body>

</html>