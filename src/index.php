

<!DOCTYPE html>
<html lang="en">
<head>
    <title>CSV Upload</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="Style.css"/>
</head>
<body>


</nav>
<div class="container">
    <div class="row">
        <div class="col-sm" style="font-family: 'Poppins', sans-serif;">
            <br>
            <h1>CSV Upload</h1>
            </br>
            </br>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-sm ">
            <form action="../src/db/Upload.php" method="POST" enctype="multipart/form-data">
                Select file:
                <input type="file" name="upload" id="upload">
                <input type="submit" value="Upload File" name="file" id="file">
            </form>
            <?php
            include('../src/file/File.php');
           // include('../src/factory/RecordFactory.php');
            include('../src/db/SQLiteConnection.php');
            $pdo = (new SQLiteConnection())->connect();
            if ($pdo != null)
                echo 'Connected to the SQLite database successfully!';
            else
                echo 'Whoops, could not connect to the SQLite database!';
            $stmt = $pdo->prepare('SELECT * FROM contacts');
            $stmt->execute();
            $records = File::readCSVtoArray("../data/data.csv");
            $table = File::printArrayAsTable($records);
            echo $table;
            ?>
        </div>
    </div>
</div>
</body>
</html>