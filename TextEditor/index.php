<?php require_once("text.php") ?>

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

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" enctype="multipart/form-data" class="w-full max-w-lg mx-auto mt-5">
        <h1 class="text-2xl font-bold mb-5">Upload file</h1>
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="file">
            Select file
        </label>
        <div class="relative">
            <input type="file" id="file" name="file" class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
        </div>
        <button type="submit" class="shadow bg-blue-500 hover:bg-blue-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded">
            Upload
        </button>
        <p>
            <b>File text:</b>
        </p>
        <textarea name="editedText" id="editedText" style="width: 100%; min-height: 250px"><?php echo $data ?></textarea>
    </form>
</main>
</body>
</html>