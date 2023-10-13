<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $connect = new mysqli('localhost', 'root', '', "QLDiem");
        $sql = "SELECT * FROM KHOA WHERE 1=1";
        $resultSet = $connect->query($sql);
        // print_r($resultSet);
        //4. Duyet va hien thi
        // while($row = $resultSet->fetch_array()){
        //     echo "<p>" . $row[0] ." --- " . $row["TENKHOA"];
        // }
    ?>
    <h1>DANH SACH KHOA</h1>
    <hr/>
    <table width="80%" align="center" border="1px">
        <thead>
            <tr>
                <th>STT</th>
                <th>MA KHOA</th>
                <th>TEN KHOA</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $stt =0;
                while($row = $resultSet->fetch_array()){
                    $stt++;
            ?>
                <tr>
                    <td><?php echo $stt; ?></td>
                    <td><?php echo $row["Makhoa"]; ?></td>
                    <td><?php echo $row["Tenkhoa"]; ?></td>
                </tr>
            <?php
                }
            ?>
        </tbody>
    </table>
</body>
</html>