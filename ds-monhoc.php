<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
             include("ketnoi_tdv.php");
             $connect_tdv = new mysqli('localhost', 'root', '', "QLDiem");
             $sql_tdv = "SELECT * FROM MONHOC WHERE 1=1";
             $result_tdv = $connect_tdv->query($sql);
    ?>
    <h1>DANH SACH MON HOC</h1>
    <hr/>
    <table width="80%" align="center" border="1px">
        <thead>
            <tr>
                <th>STT</th>
                <th>MaMH</th>
                <th>TenMH</th>
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
                    <td><?php echo $row["MaMH"]; ?></td>
                    <td><?php echo $row["TenMH"]; ?></td>
                </tr>
            <?php
                }
            ?>
        </tbody>
    </table>
</body>
</html>