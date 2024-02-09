<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>
    <header>
        <h1>
            PHP Badwords
        </h1>
    </header>
    <main>
        <form action="?" method="get">
            <div>
                <label for="paragraph">
                    Paragrafo
                </label>
                <textarea name="paragraph" id="paragraph" placeholder="Inserisci qualcosa..."></textarea>
            </div>
            <div>
                <label for="badword">
                    Parola da censurare
                </label>
                <input type="text" name="badword" id="badword" placeholder="Inserire cose da censurare...">
            </div>
            <div>
                <button type="submit">
                    Invia
                </button>
            </div>
        </form>
    </main>
</body>
</html>