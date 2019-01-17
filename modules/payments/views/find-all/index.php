<?php
//use app\modules\payments\models\FindAll;
use yii\db\ActiveRecord;
use app\modules\payments\models\FindAll;
?>

<style>
    tr{
        border: 1px solid #000;
    }
    th{
        text-align: center;
        padding: 1em;
        border-right: 1px solid #000;
    }
    td{
        width: 10em;
        border-right: 1px solid #000;
        text-align: center;
    }
</style>

<h1>Все записи из базы</h1>

<?php

    /*$sql = "SELECT * FROM `payments_table`";
    $data = ActiveRecord::findBySql($sql)->asArray()->all();
    var_dump($data[0]['name']);*/
   $data = FindAll::getAll();
//    var_dump($data[0]['name']);die;
?>

<table>
    <tr>
        <th>№ заказа</th>
        <th>покупатель</th>
        <th>адрес</th>
        <th>E-mail</th>
        <th>ИНН</th>
        <th>КПП</th>
        <th>расч. счет</th>
        <th>корр. счет</th>
        <th>БИК</th>
        <th>банк</th>
    </tr>
    <?php
        $i = 0;
    ?>
    <?php foreach ($data as $j) : ?>
    <tr>
        <td><?= $data[$i]['id'] ?></td>
        <td><?= $data[$i]['name'] ?></td>
        <td><?= $data[$i]['address'] ?></td>
        <td><?= $data[$i]['email'] ?></td>
        <td><?= $data[$i]['inn'] ?></td>
        <td><?= $data[$i]['kpp'] ?></td>
        <td><?= $data[$i]['rschet'] ?></td>
        <td><?= $data[$i]['kschet'] ?></td>
        <td><?= $data[$i]['bik'] ?></td>
        <td><?= $data[$i]['bank'] ?></td>
    </tr>

    <?php
    $i++;
        endforeach;
    ?>
</table>

