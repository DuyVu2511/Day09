<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Them moi thong tin cua sinh vien - Tran Duy Vu</title>
    <style>
        section{
            margin: .5rem 10%;
        }
    </style>
</head>
<body>
    <?php
        //khi nguoi dung submit form
        if(isset($_POST["btnSubmit_TDV"])){
            //1. ket noi
            include("ketnoi_tdv.php");
            //2. lay thong tin tren form
            $MaSV_TDV = $_POST["MASV_TDV"];
            $Hoten_TDV = $_POST["HOTEN_TDV"];
            $Ngaysinh_TDV = $_POST["NGAYSINH_TDV"];
            $Gioitinh_TDV = $_POST["GIOITINH_TDV"];
            $Makhoa_TDV = $_POST["MAKHOA_TDV"];
            $Anh_TDV = $_POST["ANH_TDV"];
            //3. tao truy van them moi
            $sql_tdv = "INSERT INTO SINHVIEN(`MaSV_TDV`, `Hoten_TDV`, `Ngaysinh_TDV`, `Gioitinh_TDV`, `Makhoa_TDV`, `Anh_TDV`)";
            $sql_tdv .=" VALUES('$MaSV_TDV', '$Hoten_TDV', '$Ngaysinh_TDV', '$Gioitinh_TDV', '$Makhoa_TDV', '$Anh_TDV')";
            
            // echo $sql_tdv;
            // die();
            //4. thuc thi cau lenh
            if($connect_tdv->query($sql_tdv)){
                header("Location:ds-sinhvien.php");
            }else{
                $error = "Loi them moi .". mysqli_error($connect_tdv);
            }
        }    
    ?>
    <section>
        <h1>Them moi thong tin sinh vien - Tran Duy Vu</h1>
        <hr>
        <form name="frm_tdv" action="" method="post">
            <table border="1" width="100%" cellspacing="0">
                <tr>
                    <td>Ma sinh vien:</td>
                    <td>
                        <input type="text" name="MASV_TDV" id="MASV_TDV">
                    </td>
                </tr>
                <tr>
                    <td>Ho ten:</td>
                    <td>
                        <input type="text" name="HOTEN_TDV" id="HOTEN_TDV">
                    </td>
                </tr>
                <tr>
                    <td>Ngay sinh:</td>
                    <td>
                        <input type="date" name="NGAYSINH_TDV" id="NGAYSINH_TDV">
                    </td>
                </tr>
                <tr>
                    <td>Gioi tinh:</td>
                    <td>
                        <input type="radio" name="GIOITINH_TDV" id="NAM_TDV">
                        <label for="NAM_TDV">Nam</label>
                        <input type="radio" name="GIOITINH_TDV" id="NU_TDV">
                        <label for="NU_TDV">Nu</label>
                    </td>
                </tr>
                <tr>
                    <td>Ma khoa:</td>
                    <td>
                        <select name="MAKHOA_TDV" id="MAKHOA_TDV">
                            <option value="CNT">Khoa CNTT</option>
                            <option value="QTH">Khoa Quoc Te</option>
                            <option value="KTO">Khoa Ke Toan</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Anh:</td>
                    <td>
                        <input type="file" name="ANH_TDV" id="ANH_TDV">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" name="btnSubmit_TDV" id="Them - TDV">
                        <input type="reset" name="btnReset_TDV" id="Lam lai - TDV">
                    </td>
                </tr>
            </table>
            <p><?php isset($error)?$error:""; ?></p>
            <a href="ds_sinhvien.php">Danh sach sinh vien</a>
        </form>
    </section>
</body>
</html>