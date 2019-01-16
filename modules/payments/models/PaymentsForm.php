<?php

namespace app\modules\payments\models;

use yii\base\Model;
use yii\db\ActiveRecord;


class PaymentsForm extends Model
{
    public $name;
    public $email;
    public $address;
    public $inn;
    public $kpp;
    public $rschet;
    public $kschet;
    public $bik;
    public $bank;


   /* public function tableName()
    {
        return 'payments_table';
    }*/
    
    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['name', 'email', 'address', 'inn', 'kpp', 'rschet', 'kschet', 'bik', 'bank'], 'required'],
            // email has to be a valid email address
//            ['email', 'email'],
        ];
    }

    public function attributeLabels()
    {
        return [
'name' => 'Покупатель',
'email' => 'Ваш E-mail',
'address' => 'Ваш адрес',
'inn' => 'ИНН',
'kpp' => 'КПП',
'rschet' => 'Расчетный счет',
'kschet' => 'Корреспондентский счет',
'bik' => 'БИК',
'bank' => 'Банк',
        ];
    }

    /* Запись данных в БД отправка сообщения клеинту */
    public static function paymentsSend()
    {

    }

}