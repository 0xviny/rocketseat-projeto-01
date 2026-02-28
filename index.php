<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>0xviny | Portfólio</title>

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@phosphor-icons/web@2.1.1/src/regular/style.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@phosphor-icons/web@2.1.1/src/fill/style.css" />

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-[#16181D] text-gray-200">
    <?php include("utils/variables.php"); ?>

    <main class="w-full flex flex-col">
        <section class="bg-[url('/assets/images/bg.png')] bg-cover bg-center w-full min-h-screen flex flex-col justify-center items-center text-center gap-4">
            <?php include("components/heroSection.php"); ?>
        </section>

        <section class="py-24 flex flex-col items-center w-full">
            <?php include("components/projectSection.php"); ?>
        </section>
    </main>

    <footer class="bg-[url('/assets/images/bg-footer.png')] bg-cover bg-center w-full min-h-screen flex flex-col justify-center items-center text-center gap-4">
        <?php include("components/footer.php"); ?>
    </footer>
</body>

</html>