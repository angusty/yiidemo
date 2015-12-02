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
            'clubname',
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