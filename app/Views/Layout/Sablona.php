
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?= $this->include("layout/css"); // načtení css     // vše je šablona a pomůže nám to že uděláme 1 navbar a potom to jenom nalinkujeme a když to upravíme tak se to upraví všude?>
    <style>
        table td, table th{
            padding: 10px;
        }
        
    </style>
</head>
<body style="background-color: burlywood;">
<?= $this->include("layout/navbar"); //načtení navbaru ?>
<div class="container">
<?= $this->renderSection("content"); //obsah stranky 1 nebo více?>
</div>

<?= $this->include("layout/js"); // načtení javascriptu?>

</body>
</html>