<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "todo".
 *
 * @property integer $id
 * @property string $title
 * @property string $detail
 * @property integer $priority
 * @property integer $status
 * @property string $create_at
 * @property string $done_at
 * @property string $expired_at
 * @property string $remind_at
 * @property string $color
 * @property string $place
 * @property integer $rank
 */
class Todo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'todo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title'], 'required'],
            [['detail'], 'string'],
            [['priority', 'status', 'rank'], 'integer'],
            [['create_at', 'done_at', 'expired_at', 'remind_at'], 'safe'],
            [['title', 'color', 'place'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'title' => Yii::t('app', 'Title'),
            'detail' => Yii::t('app', 'Detail'),
            'priority' => Yii::t('app', 'Priority'),
            'status' => Yii::t('app', 'Status'),
            'create_at' => Yii::t('app', 'Create At'),
            'done_at' => Yii::t('app', 'Done At'),
            'expired_at' => Yii::t('app', 'Expired At'),
            'remind_at' => Yii::t('app', 'Remind At'),
            'color' => Yii::t('app', 'Color'),
            'place' => Yii::t('app', 'Place'),
            'rank' => Yii::t('app', 'Rank'),
        ];
    }
}
