<?php require_once("randomizer.php") ?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>File Reader</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms"></script>
</head>
<body>
<main>
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="length">
            Number
        </label>
        <input type="number" id="length" name="length" value="<?php if($_POST['length']) echo $_POST['length'] ?>" class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">

        <div class="mt-4">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="uppercaseLetters">
                <input type="checkbox" id="uppercaseLetters" name="uppercaseLetters" class="mr-2 leading-tight" <?php if(isset($_POST['uppercaseLetters'])) echo 'checked'; ?>/>
                Uppercase
            </label>
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="lowercaseLetters">
                <input type="checkbox" id="lowercaseLetters" name="lowercaseLetters" class="mr-2 leading-tight" <?php if(isset($_POST['lowercaseLetters'])) echo 'checked'; ?>/>
                Lowercase
            </label>
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="symbols">
                <input type="checkbox" id="symbols" name="symbols" class="mr-2 leading-tight" <?php if(isset($_POST['symbols'])) echo 'checked'; ?>/>
                Symbols
            </label>
        </div>

        <button type="submit" class="shadow bg-blue-500 hover:bg-blue-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded">Submit</button>
</main>
</body>
</html>