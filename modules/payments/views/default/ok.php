<?php
//var_dump($model);die;

?>
<style>
    tr{
        border: 1px solid #000;
    }
    th{
        text-align: center;
        border-right: 1px solid #000;
    }
    td{
        width: 10em;
        border-right: 1px solid #000;
        text-align: center;
    }
</style>

<h1>Все Ок, Вы успешно провели платеж!</h1>
<br>
<br>
<br>
<br>
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
            <th>цена</th>

        </tr>
    <tr>
        <td><?= $model->id ?></td>
        <td><?= $model->name ?></td>
        <td><?= $model->address ?></td>
        <td><?= $model->email ?></td>
        <td><?= $model->inn ?></td>
        <td><?= $model->kpp ?></td>
        <td><?= $model->rschet ?></td>
        <td><?= $model->kschet ?></td>
        <td><?= $model->bik ?></td>
        <td><?= $model->bank ?></td>
        <td><?= $model->money ?></td>
    </tr>
</table>
<br>
<br>
<br>
<h3>Ваши денюшки ушли сюда, про них забудьте:</h3>
<img src="/img/pay.jpg" alt="">