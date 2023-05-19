<!DOCTYPE html>
<html>

<body>
    <?php
    // Create connection
    $connStr = "host=localhost port=5432 dbname=sneaker_fest";
    $conn = pg_connect($connStr);

    // Check connection
    $stat = pg_connection_status($conn);
    if ($stat === PGSQL_CONNECTION_BAD) {
        echo 'Connection status bad';
    }

    $sql = "COPY products(product_name,product_image1,product_image2,product_type,product_origin,product_gender,product_description,product_price) FROM '/Users/nguyenminhtam/Desktop/sneaker-website/components/db/data.csv' DELIMITER ';' CSV HEADER;";
    if (!pg_query($conn, $sql)) {
        echo "Cannot import data to 'products' table.\n";
        exit;
    }
    ?>
</body>

</html>