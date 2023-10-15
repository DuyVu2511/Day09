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
        $sql_tdv = "SELECT * FROM SINHVIEN WHERE 1=1";
        $result_tdv = $connect_tdv->query($sql_tdv);
    ?>
    <h1>DANH SACH SINH VIEN - Tran Duy Vu</h1>
    <hr/>
    <a href="sinhvien_them_tdv.php">Them moi</a>
    <table width="100%" align="center" border="1px">
        <thead>
            <tr>
                <th>STT</th>
                <th>MaSV</th>
                <th>Hoten</th>
                <th>Ngaysinh</th>
                <th>Gioitinh</th>
                <th>Makhoa</th>
                <th>Anh</th>
                <th>Chuc nang</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $stt_tdv =0;
                while($row_tdv = $result_tdv->fetch_array()){
                    $stt_tdv++;
            ?>
                <tr>
                    <td><?php echo $stt_tdv; ?></td>
                    <td><?php echo $row_tdv["MaSV_TDV"]; ?></td>
                    <td><?php echo $row_tdv["Hoten_TDV"]; ?></td>
                    <td><?php echo $row_tdv["Ngaysinh_TDV"]; ?></td>
                    <td>
                        <?php 
                            echo $row_tdv["Gioitinh_TDV"]==1? 'Nam':'Nu'; 
                        ?>
                    </td> 
                    <td><?php echo $row_tdv["Makhoa_TDV"]; ?></td> 
                    <td><?php echo $row_tdv["Anh_TDV"]; ?></td> 
                    <td>
                        <a href="">Sua</a>
                        <a href="">Xoa</a>
                    </td> 
                </tr>
            <?php
                }
            ?>
        </tbody>
    </table>
    <a href="sinhvien_them_tdv.php">Them moi</a>
</body>
</html>