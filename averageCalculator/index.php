<?php require_once("calculator.php") ?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>File Reader</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms"></script>
</head>
<body   style="height: 100vh; display: flex; align-items: center; justify-content: center;">
<main style="max-width: 800px; margin: 0 auto; display: flex; align-items: flex-start; flex-direction: column; gap: 8px">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" enctype="multipart/form-data" class="w-full max-w-lg mx-auto mt-5">
    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="numbers">
        Numbers (seperate with commas)
    </label>
    <input type="text" id="numbers" name="numbers" value="<?= $_POST['numbers'] ?? '' ?>" class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" />
        <?php if (isset($error)) : ?>
            <p class="text-red-500 text-xs mt-2"><?= $error ?></p>
        <?php endif; ?>
    <button type="submit" class="mt-2 shadow bg-blue-500 hover:bg-blue-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded">Calculate</button>

        <p class="mt-1"><b>Average Sum:</b> <?= $average ?? '' ?></p>
    </form>
</main>
</body>
</html>