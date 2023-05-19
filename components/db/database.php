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

    // Create table: users
    $sql = "CREATE TABLE if not exists users (
                id SERIAL PRIMARY KEY,
                username VARCHAR(30) NOT NULL,
                email VARCHAR(50) NOT NULL,
                pwd VARCHAR(50) NOT NULL,
                user_level INT DEFAULT 0
            )";
    if (!pg_query($conn, $sql)) {
        echo "Cannot create 'users' table.\n";
        exit;
    }

    // Create table: products
    $sql = "CREATE TABLE if not exists products (
            id SERIAL PRIMARY KEY,
            product_name VARCHAR(30) NOT NULL,
            product_image1 VARCHAR(255) NOT NULL,
            product_image2 VARCHAR(255) NOT NULL,
            product_type INT NOT NULL,
            product_origin VARCHAR(30) NOT NULL,
            product_gender INT NOT NULL,
            product_description TEXT NOT NULL,
            product_price INT NOT NULL
        )";
    if (!pg_query($conn, $sql)) {
        echo "Cannot create 'products' table.\n";
        exit;
    }
    ?>
</body>

</html>