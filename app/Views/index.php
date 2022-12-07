<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/app.css">

    <title>uts</title>
</head>
<body class="max-w-5xl mx-auto">
    <header>
        <?= $this->include('template/navbar') ?>
    </header>
    <div class="h-full ">
        <?= $this->renderSection('content') ?>
    </div>
    <footer class="bottom-0">
        <?= $this->include('template/footer') ?>
    </footer>
</body>
</html>

<head>
