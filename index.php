<html>

<head>
    <link rel="stylesheet" type="text/css" href="public/style.css?<?= filemtime('public/style.css') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auto Addres</title>
</head>

<body>

    <div class="box">
        <div class="mb">
            <label for="zip">CEP</label>
            <input type="text" id="zip" />
        </div>
        <div class="mb">
            <label for="street">Rua</label>
            <input type="text" id="street" />
        </div>
        <div class="mb">
            <label for="neighbourhood">Bairro</label>
            <input type="text" id="neighbourhood" />
        </div>
        <div class="mb">
            <label for="city">Cidade</label>
            <input type="text" id="city" />
        </div>
        <div class="mb">
            <label for="state">Estado</label>
            <input type="text" id="state" />
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="public/script.js?<?= filemtime('public/script.js') ?>"></script>
</body>

</html>