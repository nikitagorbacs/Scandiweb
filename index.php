<?php
include_once 'autoloader.php';
//Getting all the products from the database
$products = (new ProductService)->getProducts();
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
    <title>Product List</title>
</head>

<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-8">
                <h1>Products List</h1>
            </div>
            <div class="col-1 mt-2">
                <button onclick="window.location.href='add.php'" class="btn btn-outline-primary mr-2">ADD</button>
            </div>
            <div class="col-3 mt-2">
                <button name="delete" class="btn btn-outline-warning" id="delete-product-btn" form="form">MASS DELETE</button>
            </div>
        </div>
        <hr>
        <form action="" method="post" id="form">
            <div class="row py-5">
                <?php
                //Loop through array of objects and display each of them
                foreach ($products as $product) {
                    echo '
                <div class="col-3 mb-5">
                        <div class="product shadow p-5">
                        <input type="checkbox" class="delete-checkbox move-left" name="checkbox[]" value="' . $product->id . '">
                            <div class="product-body">
                                <h6 class="text-center">' . $product->sku . '</h6>
                                <h6 class="text-center">' . $product->name . '</h6>
                                <h6 class="text-center">' . $product->price . ' $</h6>
                                <h6 class="text-center">' . $product->specification . '</h6>
                            </div>
                        </div>
                </div>';
                }
                ?>
            </div>
        </form>
    </div>
    <hr>
    <h5 class="text-center text-muted p-4">Scandiweb Test Assigment</h5>
    <script src="js/script.js"></script>
</body>

</html>
<?php
if (isset($_POST['delete'])) {
    //Delete selected products
    (new ProductService)->deleteProducts($_POST['checkbox']);
    echo "<meta http-equiv='refresh' content='0'>";
}
?>