<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ReportSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Reports');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="report-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Report'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'user_id',
            'city_id',
            'month',
            'legacy',
            //'donation_register',
            //'private_property',
            //'entity_registration',
            //'civil_contract',
            //'trade_contract',
            //'donation_contract',
            //'authority_procedural_action',
            //'family_law',
            //'labor_disputes',
            //'land_disputes',
            //'housing_disputes',
            //'social_protection',
            //'criminal_case',
            //'administrative_offense',
            //'moral_material_harm',
            //'divorce',
            //'alimony',
            //'identity_document',
            //'domestic_violence',
            //'men',
            //'women',
            //'age_20',
            //'age_21_35',
            //'age_36_60',
            //'age_60',
            //'social_poor',
            //'social_pensioner',
            //'social_worker',
            //'social_unemployed',
            //'social_underage',
            //'social_disabled',
            //'civil_kyrgyz_republic',
            //'civil_foreign',
            //'civil_without',
            //'civil_refugee',
            //'equipment_issue',
            //'lawyer_duty_issue',
            //'bother_issue',
            //'equipment_issue_comment',
            //'lawyer_duty_issue_comment',
            //'bother_issue_comment',
            //'traning_issue:ntext',
            //'vi_men',
            //'vi_women',
            //'vi_age_20',
            //'vi_age_21_35',
            //'vi_age_36_60',
            //'vi_age_60',
            //'vi_social_poor',
            //'vi_social_pensioner',
            //'vi_social_worker',
            //'vi_social_unemployed',
            //'vi_social_underage',
            //'vi_social_disabled',
            //'vi_civil_kyrgyz_republic',
            //'vi_civil_foreign',
            //'vi_civil_without',
            //'vi_civil_refugee',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
