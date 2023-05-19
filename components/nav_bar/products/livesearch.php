<!DOCTYPE html>
<html lang="en">

<body>
    <?php
    $connStr = "host=localhost port=5432 dbname=sneaker_fest";
    $conn = pg_connect($connStr);

    // Check connection
    $stat = pg_connection_status($conn);
    if ($stat === PGSQL_CONNECTION_BAD) {
        echo 'Connection status bad';
    }

    $q = $_GET["q"];
    $sql = "SELECT COUNT(*) FROM products";
    $len = pg_query($conn, $sql);

    if (strlen($q) > 0) {
        $hint = "";
        for ($i = 0; $i < $len; $i++) {
            $sql = "SELECT * from products WHERE product_name = $q ORDER BY product_name";
            $result = pg_query($conn, $sql);
            while ($row = pg_fetch_assoc($result)) {
                if ($hint == "") {
                    $hint = "<div class='ps-2'>" . $row['product_name'] . "</div>";
                } else {
                    $hint = $hint . "<br /> <div class='ps-2'>" . $row["product_name"] . "</div>";
                }
            }
        }
    }

    if ($hint == "") {
        $response = "No suggestion";
    } else {
        $response = $hint;
    }

    echo $response;
    ?>
</body>

</html>