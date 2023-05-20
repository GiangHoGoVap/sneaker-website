<!DOCTYPE html>
<html lang="en">

<body>
    <?php
    if (isset($_POST['submitUpdateItem'])) {
        include_once '../../db/database.php';
        session_start();
        $productID = $_SESSION["productID"];
        $productName2 = $_POST['inputProductName2'];
        $productImage2_1 = $_POST['inputProductImage2_1'];
        $productImage2_2 = $_POST["inputProductImage2_2"];
        $productType2 = $_POST['inputProductType2'];
        $type = 'lifestyle';
        if ($productType2 == 2) {
            $type = 'jordan';
        } else if ($productType2 == 3) {
            $type = 'basketball';
        }
        $productOrigin2 = $_POST["inputProductOrigin2"];
        $productGender2 = $_POST["inputProductGender2"];
        $productDesc2 = $_POST['inputProductDesc2'];
        $productPrice2 = $_POST['inputProductPrice2'];
        $sql = pg_query_params($conn, 'UPDATE products SET product_name = $1, product_image1 = $2, product_image2 = $3, product_type = $4, product_origin = $5, product_gender = $6, product_description = $7, product_price = $8 WHERE id = $9', array($productName2, $productImage2_1, $productImage2_2, $productType2, $productOrigin2, $productGender2, $productDesc2, $productPrice2, $productID));
        unset($_SESSION["productID"]);
        header("Location: ../../../index.php?page=products&type=$type");
    }
    ?>
</body>

</html>