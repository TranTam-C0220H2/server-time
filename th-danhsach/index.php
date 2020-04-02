<!DOCTYPE HTML>
<html>
<head>
    <title>Danh sach</title>
    <style>
        img {
            width: 50px;
            height: 70px;
        }

        div {
            margin-left: 35%;
            border: blue solid 2px;
            width: 400px;
        }

        table {
            border: cornflowerblue solid 1px;
        }

        h3 {
            margin: auto;
        }
    </style>
</head>
<body>
<div>
    <h3>Danh sach khach hang</h3>
    <table>
        <tr>
            <th>STT</th>
            <th>Ten</th>
            <th>Ngay sinh</th>
            <th>Dia chi</th>
            <th>Anh</th>
        </tr>
        <?php
        $CustomerList = array(
            "1" => array(
                "ten" => "Mai Văn Hoàn",
                "ngaysinh" => "1983-08-20",
                "diachi" => "Hà Nội",
                "anh" => "hotgirl1.jpg"),
            "2" => array(
                "ten" => "Nguyễn Văn Nam",
                "ngaysinh" => "1983-08-20",
                "diachi" => "Bắc Giang",
                "anh" => "hotgirl2.jpg"),
            "3" => array(
                "ten" => "Nguyễn Thái Hòa",
                "ngaysinh" => "1983-08-21",
                "diachi" => "Nam Định",
                "anh" => "hotgirl3.jpg"),
            "4" => array(
                "ten" => "Trần Đăng Khoa",
                "ngaysinh" => "1983-08-22",
                "diachi" => "Hà Tây",
                "anh" => "hotgirl4.jpg"),
            "5" => array(
                "ten" => "Nguyễn Đình Thi",
                "ngaysinh" => "1983-08-17",
                "diachi" => "Hà Nội",
                "anh" => "hotgirl5.jpg")
        );
        foreach ($CustomerList as $key => $value) {
            echo '<tr>';
            echo '<td>' . $key . '</td>';
            echo '<td>' . $value['ten'] . '</td>';
            echo '<td>' . $value['ngaysinh'] . '</td>';
            echo '<td>' . $value['diachi'] . '</td>';
            echo "<td><img src='" . $value['anh'] . "'></td>";
            echo '</tr>';
        }
        ?>
    </table>
</div>
</body>
</html>