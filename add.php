<?php
require_once 'autoloader.php';
?>
<?php
if (isset($_POST['submit'])) {
    //Product add to the database
    (new $_POST['productType']($_POST))->addProduct();
    //Redirect to index.php
    echo "<script>window.location.href='index.php'</script>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Product Add</title>
</head>

<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-8">
                <h1>Proudct Add</h1>
            </div>
            <div class="col-1 mt-2">
                <button name="submit" class="btn btn-outline-primary mr-2" form="product_form">Save</button>
            </div>
            <div class="col-3 mt-2">
                <a href="index.php" class="btn btn-outline-warning">Cancel</a>
            </div>
        </div>
        <hr>
        <form action="" method="POST" id="product_form">
            <div class="row">
                <div class="col-2 mt-3">
                    <label for="sku">SKU:</label><br>
                    <label class="mt-3" for="name">Name:</label><br>
                    <label class="mt-3" for="price">Price ($):</label>
                </div>
                <div class="col-3 mt-3">
                    <input type="text" name="sku" id="sku" placeholder="#sku" minlength="8" maxlength="8" required>
                    <input type="text" class="mt-3" name="name" id="name" placeholder="#name" required>
                    <input type="number" step="0.01" class="mt-3" name="price" id="price" placeholder="#price" required>
                </div>
            </div>
            <div class="row">
                <div class="col-2 mt-5">
                    <label for="productType">Type Switcher</label>
                </div>
                <div class="col-3 mt-5">
                    <select class="" name="productType" id="productType">
                        <option selected disabled>Type Switcher</option>
                        <option value="Dvd" id="Dvd">DVD</option>
                        <option value="Book" id="Book">Book</option>
                        <option value="Furniture" id="Furniture">Furniture</option>
                    </select>
                </div>
            </div>
            <div class="row hidden" id="dvd-form">
                <div class="col-2 mt-3">
                    <label for="size">Size (MB):</label>
                </div>
                <div class="col-3 mt-3">
                    <input type="number" step="0.01" name="size" id="size" placeholder="#size" required>
                </div>
            </div>
            <div class="row hidden" id="book-form">
                <div class="col-2 mt-3">
                    <label for="weight">Weight (KG):</label>
                </div>
                <div class="col-3 mt-3">
                    <input type="number" step="0.01" name="weight" id="weight" placeholder="#weight" required>
                </div>
            </div>
            <div class="row hidden" id="furniture-form">
                <div class="col-2 mt-3">
                    <label for="height">Height (CM):</label><br>
                    <label class="mt-3" for="width">Width (CM):</label><br>
                    <label class="mt-3" for="length">Length (CM):</label>
                </div>
                <div class="col-3 mt-3">
                    <input type="number" step="0.01" name="height" id="height" placeholder="#height" required>
                    <input type="number" step="0.01" class="mt-3" name="width" id="width" placeholder="#width" required>
                    <input type="number" step="0.01" class="mt-3" name="length" id="length" placeholder="#length" required>
                </div>
            </div>
        </form>

    </div>
    <hr>
    <h5 class="text-center text-muted p-4">Scandiweb Test Assigment</h5>
    <script src="js/script.js"></script>

</body>

</html>