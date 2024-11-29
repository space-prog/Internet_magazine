<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <h1>Кошик</h1>
    <div class="test2">
        <?php
            if (isset($_POST['array'])) {
                $arrName = json_decode($_POST['array'], true);
            } else {
                $arrName = [];
            }

            if (isset($_POST['cat'])) {
                $cat = $_POST['cat'];
                array_push($arrName, $cat);
            }

            if (isset($_POST['caty'])) {
                $caty = $_POST['caty'];
                array_push($arrName, $caty);
            }

            if (isset($_POST["delete"])) {
                $ind = $_POST["delete"];
                array_splice($arrName, $ind, 1);
            }

            foreach ($arrName as $index => $value) {
                echo "<div class='fxx'>
                        <img src='$value' alt='cat image' style='width: 200px;'><br>
                        <form action='index.php' method='post'>
                        <input type='hidden' name='array' value='" . json_encode($arrName) . "'>
                        <div class='fgh'><button type='submit' name='delete' value='$index'>Remove</button></div>
                        </form><br>
                    </div>";
            }
        ?>
</div>

<span></span>

<h1>Товари</h1>
<div class="test">
    <form action="index.php" method="post">
        <p>
            <img name="cat" src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fital-kvartal.ru%2Fwp-content%2Fuploads%2F2020%2F12%2F31793e855a4da7537981fe7c3815396d-1024x1024.jpg&f=1&nofb=1&ipt=8202a64b1ac4ab6e430f8b9e8d6dd79e54ed5145485a6ad07280868d5624b5f0&ipo=images" value="Tort">
            <input type="hidden" name="cat" value="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fital-kvartal.ru%2Fwp-content%2Fuploads%2F2020%2F12%2F31793e855a4da7537981fe7c3815396d-1024x1024.jpg&f=1&nofb=1&ipt=8202a64b1ac4ab6e430f8b9e8d6dd79e54ed5145485a6ad07280868d5624b5f0&ipo=images">
        </p>
        <input type="hidden" name="array" value='<?= json_encode($arrName) ?>'>
        <div class="fgh"><button type="submit">Add to Cart</button></div>
    </form>
    <form action="index.php" method="post">
        <p>
            <img name="caty" src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Faquamarket.ua%2F52654-thickbox_default%2Froshen-021-kg-pechivo-do-kavi-pryazhene-moloko.jpg&f=1&nofb=1&ipt=1eb8afa3cb7bb104002e5a23ecbed2ba679454ea9c5d6fe754496aac8b2e0e59&ipo=images" value="Pechenya">
            <input type="hidden" name="caty" value="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Faquamarket.ua%2F52654-thickbox_default%2Froshen-021-kg-pechivo-do-kavi-pryazhene-moloko.jpg&f=1&nofb=1&ipt=1eb8afa3cb7bb104002e5a23ecbed2ba679454ea9c5d6fe754496aac8b2e0e59&ipo=images">
        </p>
        <input type="hidden" name="array" value='<?= json_encode($arrName) ?>'>
        <div class="fgh"><button type="submit">Add to Cart</button></div>
    </form>
</div>
</body>
</html>