<?php require_once("./tracker.php") ?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>IP Tracker</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms"></script>
</head>
<body>
<main>

        <h1 class="text-2xl font-bold mb-5">IP Tracker</h1>
    <?php if (isset($response) && $response['status'] === 'success') : ?>
        <?php foreach ($response as $key=>$value) : ?>
            <?php if(strlen($value) > 0) : ?>
            <p><b><?= $key ?></b>: <?= $value ?></p>
            <?php endif; ?>
        <?php endforeach; ?>
    <?php endif; ?>


<!--    --><?php //= $response['status'] ?>
</main>
</body>
</html>