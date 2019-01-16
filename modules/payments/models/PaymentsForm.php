<?php

namespace app\modules\payments\models;

use yii\base\Model;


class PaymentsForm extends Model
{
    public $name;
    public $address;
    public $inn;
    public $kpp;
    public $rschet;
    public $kschet;
    public $bik;
    public $bank;


    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['name', 'address', 'inn', 'kpp', 'rschet', 'kschet', 'bik', 'bank'], 'required'],
            // email has to be a valid email address
//            ['email', 'email'],
        ];
    }

    public function attributeLabels()
    {
        return [
'name' => 'Покупатель',
'address' => 'Ваш адрес',
'inn' => 'ИНН',
'kpp' => 'КПП',
'rschet' => 'Расчетный счет',
'kschet' => 'Корреспондентский счет',
'bik' => 'БИК',
'bank' => 'Банк',
        ];
    }
}