<html>
    <title>Efimov Ivan</title>
    <head></head>
    <p>АНКЕТА "ВАШ ХАРАКТЕР"
    <p>
    <body>
        <form method="POST" action="
        <?php print $PHP_SELF ?>">
        Введите ваше имя: 
        <input type="text" name="im" size="20"> <br>
        1. Считаете ли Вы, что у многих ваших знакомых хороший характер? <br>
        да:<input type="radio" name="a[1]" value="yes" checked>
        нет:<input type="radio" name="a[1]" value="no">  <br>
        2. Раздражают ли Вас мелкие повседневные обязанности? <br>
        да:<input type="radio" name="a[2]" value="yes" checked>
        нет:<input type="radio" name="a[2]" value="no">  <br>
        3. Верите ли Вы, что ваши друзья преданы Вам? <br>
        да:<input type="radio" name="a[3]" value="yes" checked>
        нет:<input type="radio" name="a[3]" value="no">  <br>
        4. Неприятно ли Вам, когда незнакомый человек делает Вам замечание? <br>
        да:<input type="radio" name="a[4]" value="yes" checked>
        нет:<input type="radio" name="a[4]" value="no">  <br>
        5. Способны ли Вы ударить собаку или кошку? <br>
        да:<input type="radio" name="a[5]" value="yes" checked>
        нет:<input type="radio" name="a[5]" value="no">  <br>
        6. Часто ли Вы принимаете лекарства? <br>
        да:<input type="radio" name="a[6]" value="yes" checked>
        нет:<input type="radio" name="a[6]" value="no">  <br>
        7. Часто ли Вы меняете магазин, в который ходите за продуктами? <br>
        да:<input type="radio" name="a[7]" value="yes" checked>
        нет:<input type="radio" name="a[7]" value="no">  <br>
        8. Продолжаете ли Вы отстаивать свою точку зрения, поняв, что ошиблись? <br>
        да:<input type="radio" name="a[8]" value="yes" checked>
        нет:<input type="radio" name="a[8]" value="no">  <br>
        9. Тяготят ли Вас общественные обязанности? <br>
        да:<input type="radio" name="a[9]" value="yes" checked>
        нет:<input type="radio" name="a[9]" value="no">  <br>
        10. Способны ли Вы ждать более 5 минут, не проявляя беспокойства? <br>
        да:<input type="radio" name="a[10]" value="yes" checked>
        нет:<input type="radio" name="a[10]" value="no">  <br>
        11. Часто ли Вам приходят в голову мысли о Вашей невезучести? <br>
        да:<input type="radio" name="a[11]" value="yes" checked>
        нет:<input type="radio" name="a[11]" value="no">  <br>
        12. Сохранилась ли у Вас фигура по сравнению с прошлым? <br>
        да:<input type="radio" name="a[12]" value="yes" checked>
        нет:<input type="radio" name="a[12]" value="no">  <br>
        13. Можете ли Вы с улыбкой воспринимать подтрунивание друзей? <br>
        да:<input type="radio" name="a[13]" value="yes" checked>
        нет:<input type="radio" name="a[13]" value="no">  <br>
        14. Нравится ли Вам семейная жизнь? <br>
        да:<input type="radio" name="a[14]" value="yes" checked>
        нет:<input type="radio" name="a[14]" value="no">  <br>
        15. Злопамятны ли Вы? <br>
        да:<input type="radio" name="a[15]" value="yes" checked>
        нет:<input type="radio" name="a[15]" value="no">  <br>
        16. Находите ли Вы, что стоит погода, типичная для данного времени года? <br>
        да:<input type="radio" name="a[16]" value="yes" checked>
        нет:<input type="radio" name="a[16]" value="no">  <br>
        17. Случается ли Вам с утра быть в плохом настроении? <br>
        да:<input type="radio" name="a[17]" value="yes" checked>
        нет:<input type="radio" name="a[17]" value="no">  <br>
        18. Раздражает ли Вас современная живопись? <br>
        да:<input type="radio" name="a[18]" value="yes" checked>
        нет:<input type="radio" name="a[18]" value="no">  <br>
        19. Надоедает ли Вам присутствие чужих детей в доме более одного часа? <br>
        да:<input type="radio" name="a[19]" value="yes" checked>
        нет:<input type="radio" name="a[19]" value="no">  <br>
        20. Надоедает ли Вам делать лабораторные по PHP? <br>
        да:<input type="radio" name="a[20]" value="yes" checked>
        нет:<input type="radio" name="a[20]" value="no">  <br>
        <input type="submit" value="Подтвердить">  <br>
    </body>

    <?php
       if (isset($_POST["im"])){
           $mas = $_POST["a"];
           for ($i = 1; $i <= 20; $i++) {
                if ($i == 3 or $i == 9 or $i == 10 or $i == 13 or $i == 14 or $i == 19) {
                    if ($mas[$i] == "yes") {
                        $sum++;
                    }
                } else {
                    if ($mas[$i] == "no") {
                        $sum++;
                    }
                }
           }
           if ($sum >= 15) {
               $res = "у Вас покладистый характер";
           } else if ($sum < 15 and $sum >= 8) {
               $res = "Вы не лишены недостатков, но с вами можно ладить";
           } else {
               $res = "Вашим друзьям можно посочувствовать";
           }
           echo ($_POST["im"] . ", " . $res.'<br>'); 
       }
    ?>
</html>