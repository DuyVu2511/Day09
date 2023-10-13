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
        $sql = "SELECT * FROM SINHVIEN WHERE 1=1";
        $resultSet = $connect->query($sql);
    ?>
    <h1>DANH SACH SINH VIEN</h1>
    <hr/>
    <table width="80%" align="center" border="1px">
        <thead>
            <tr>
                <th>STT</th>
                <th>MaSV</th>
                <th>Hoten</th>
                <th>Ngaysinh</th>
                <th>Gioitinh</th>
                <th>Makhoa</th>
                <th>Anh</th>
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
                    <td><?php echo $row["MaSV"]; ?></td>
                    <td><?php echo $row["Hoten"]; ?></td>
                    <td><?php echo $row["Ngaysinh"]; ?></td>
                    <td><?php echo $row["Gioitinh"]; ?></td> 
                    <td><?php echo $row["Makhoa"]; ?></td> 
                    <td><?php echo $row["Anh"]; ?></td> 
                </tr>
            <?php
                }
            ?>
        </tbody>
    </table>
</body>
</html>