<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <div style="border:3px dotted white; border-radius:30px; width:400px; margin: 30px auto;padding:10px;">
                        <form action="index.php" method="POST">
                                <table>
                                        <tr>
                                                <td>
                                                        Загадай число от 1 до 10:
                                                </td>
                                                <td>
                                                        <input name="NUMX" type="text"><br>

                                                </td>
                                        </tr>
                                        <tr>
                                                <td colspan="2">
                                                        <input type="submit" value="Отправить">
                                                </td>
                                        </tr>
                                </table>
                        </form>
                </div>
<div style="border:3px dotted white; border-radius:30px; width:800px; margin: 30px auto;padding:10px;">
                        <?php
                        $date = date("d m y G:i D l N z W F");
                        echo "Сегодня: ".$date."<br>";

                        //$summ = $_POST['NUM1'] + $_POST['NUM2'];

                        //echo("Число 1 ".$_POST['NUM1']."<br>");
                        //echo("Число 2 ".$_POST['NUM2']."<br>");
                        //echo("Сумма ".$summ);
                        switch($_POST['NUMX']) {
                                case 1:
                                echo "Вы ввели число 1";
                                break;
                                case 2:
                                echo "Вы загадали на 1 больше чем 1";
                                break;
                                default:
                                echo "Введите пожалуйста число от 1 до 10, а не что-то другое";
                                break;
                        }
                        ?>
                </div>
</body>
</html>