<!DOCTYPE html>
<html lang="en">

<body>
    <?php
    if (isset($_POST['submitMsg'])) {
        include_once '../../db/database.php';
        $userName = $_POST['userName'];
        $userEmail = $_POST['userEmail'];
        $userMsg = $_POST['userMsg'];

        $sql = $conn->prepare("INSERT INTO feedbacks (username, email, msg) VALUES (?, ?, ?)");
        $sql->bind_param("sss", $userName, $userEmail, $userMsg);
        $sql->execute();

        echo "<script>window.location.href='../../../index.php?page=home';alert('Thank you for your feedback.');</script>";
    }
    ?>
</body>

</html>