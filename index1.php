<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Câu 1</title>
</head>
<body>
    <?php
    function sole($sole)
    {
        if($sole % 2 == 0) return false;
        return true;
    }

    if(isset($_POST['submit']))
    {
        $sole = $_POST['sole'];
        if($sole < 1 || $sole > 19 || sole($sole)==false) $tb="Nhập lại";
        else
        {
            $tb="$sole là số nguyên lẻ";
            $arr =array();
            for($i=0;$i<$sole;$i++)
            {
                $arr[$i] = rand(-100,100);
                
            }
            $mang=implode(",",$arr);
        } 

    }
    ?>
    <style>
        th{
            color: red;
        }
        table{
            background: pink;
        }
    </style>
    <form action="" method="POST">
    <table align="center" >
        <th colspan=>
            Xuất mảng lẻ
        </th>
        <tr>
            <td>Nhập số nguyên lẻ</td>
            <td>
                <input type="text" name="sole"
                    value="<?php if(isset($sole)) echo $sole; ?>"
                >
            </td>
        </tr>
        <tr>
            <td>Phat sinh mang</td>
            <td>
                <input type="text" name="mang"
                    value="<?php if(isset($mang)) echo $mang; ?>"
                >
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" name="submit" value="Phát sinh và tính toán">
            </td>
        </tr>
        
        <tr>
            <td><?php if(isset($tb)) echo($tb) ?></td>
            <td></td>
        </tr>
    </table>
    </form>
</body>
</html>