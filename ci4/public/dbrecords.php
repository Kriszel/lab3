<!DOCTYPE html>
<html>
<style>
.bgimg-1 {
  background-image: url('https://wallpaperboat.com/wp-content/uploads/2020/04/blue-aesthetic-wallpaper-13.jpg');
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
</style>
<head>
    <title>PEOPLE Who Visited</title>
</head>

<body>
    <div class="head">
        <h1>The CONSTELLATIONS are watching.</h1>
        <div class = "header-right">
            <a class = "active" href = "indexKen.php"><b></b></a>
        </div>
    </div>
    <div class>
        <div class = "flex-container">
            <?php
            $servername = "192.168.150.213";
            $username = "webprogss211";
            $password = "fancyR!ce36";
            $dbname = "webprogss211";

            //creating connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            $sql = "SELECT id, name, email, web, comment FROM kvdizon_myguests";
            $result = $conn->query($sql);
            
            if($results->num_rows > 0)
            {
                while($row = $result->fetch_assoc()) {
                    echo "id: " . $row["id"]. " - Name: " . $row["name"]. " - Email: " . $row["email"]. " - Website: " . $row["website"]. " - Comment: " . $row["comment"];
                }
            }
            else {
                echo "nothing in the database.";
            }
            $conn->close()
            ?>
        </div>
    </div>
</body>

</html>