<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "lead".
 *
 * @property int $id
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property string $phone
 * @property string $address
 * @property float $home_sqft
 */
class Lead extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'lead';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['first_name', 'last_name', 'email', 'phone', 'address', 'home_sqft','created_at'], 'safe'],
            [['home_sqft'], 'number'],
            ['email','email'],
            ['email','unique', 'targetClass' => '\common\models\Lead', 'message' => 'This email address has already been taken.'],
            [['first_name','last_name'], 'match', 'pattern' => '/^[a-z]\w*$/i'],
            [['phone'],'match','pattern'=>  '/^[6-9][0-9]{9}$/' ],
            [['first_name', 'last_name', 'email', 'phone', 'address','created_at'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'email' => 'Email',
            'phone' => 'Phone Number',
            'address' => 'Address',
            'home_sqft' => 'Home Sqft',
            'created_at'=> 'Created date',       ];
    }
}
