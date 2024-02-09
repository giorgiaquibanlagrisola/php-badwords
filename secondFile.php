<?php
    $paragraph = $_GET['paragraph'];
    $badword = $_GET['badword'];
    $censoredParagraph = str_replace($badword, '***', $paragraph) 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords </title>
</head>
<body>
    <header>
        <h1>
            PHP Badwords
        </h1>
    </header>
    <main>
        <div>
            <h2>
            Paragrafo inviato:
            </h2>
            <p>
                <?php echo $paragraph ?>
            </p>

            <h5>
                Lunghezza del paragrafo: <?php echo strlen($paragraph); ?>
            </h5>
        </div>

        <div>
            <h3>
                Parola da censurare: <?php echo $badword ?>
            </h3>
        </div>

        <div>
            <h2>
                Paragrafo censurato:
            </h2>
            <p>
                <?php echo $censoredParagraph; ?>
            </p>
            <h5>
                Lunghezza del paragrafo: <?php echo strlen($censoredParagraph); ?>
            </h5>
        </div>

    </main>
</body>
</html>