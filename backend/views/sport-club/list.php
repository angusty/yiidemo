<?php
use yii\helpers\Html;
use yii\grid\GridView;

$this->title = Yii::t('app', 'Club Manager');

?>

<div class="user-index">
    <p>
        <?= Html::a(Yii::t('app', 'Create ') . Yii::t('app', 'Club'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $data_provider,
        'filterModel' => $search_model,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'cid',
//            'clubname',
//            [
//                'attribute' => 'indeximage',
//                'value' => function ($model) {
//                    return $model->indeximageLabel;
//                },
//                'filter' => Html::activeDropDownList(
//                    $search_model,
//                    'indeximage',
//                    ['image' => 'image', 'png' => 'png', 'jpg' => 'jpg'],
//                    ['class' => 'form-control', 'prompt' => Yii::t('app', 'Please Filter')]
//                )
//            ],
            'indeximage',
            'manager_uid',
            //'created_at',
            [
                'attribute' => 'createtime',
                'format' => ['date', 'Y-M-d H:i:s'],
            ],
            //'updated_at',

            ['class' => 'yii\grid\ActionColumn'],
        ]
    ]); ?>


</div>