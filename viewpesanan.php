<html>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

<body>
    <div class="jumbotron text-center">
        <h1>E-Cafe</h1>
        <h3>Daftar Pesanan Menu Pelanggan</h3>
    </div>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-auto">
                <table class="table table-striped" style="width: 50%; margin: 0 auto !important;">
                    <tr>
                        <th>Nama</th>
                        <th>Nomor Meja</th>
                        <th>Waktu</th>
                        <th>View</th>
                    </tr>
                    <?php
                    $conn = mysqli_connect("localhost", "root", "", "ecafe");
                    $sql = "SELECT DISTINCT(customer), tablenumber,datetime FROM testing";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr> <td>" . $row["customer"] . "</td> <td>" . $row["tablenumber"] . "</td> <td>" . $row["datetime"] . "</td> <td><button type='button' class='btn btn-info'>View</button></td>  </tr>";
                        }
                    }
                    $conn->close();
                    ?>
                </table>
            </div>
        </div>
    </div>
</body>

</html>