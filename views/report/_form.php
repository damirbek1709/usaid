<?php

use yii\helpers\Html;
use app\models\User;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;

/* @var $this yii\web\View */
/* @var $model app\models\Report */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="report-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php
    if (Yii::$app->user->identity->isAdmin) {
        $form->field($model, 'user_id')->widget(Select2::classname(), [
            'data' => ArrayHelper::map(User::find()->where([])->all(), 'id', 'fullname'),
            'options' => ['placeholder' => 'Выберите пользователя'],
            'pluginOptions' => [
                'allowClear' => true,
                'multiple' => true,
            ],
        ]);
    } else {
        echo $form->field($model, 'user_id')->hiddenInput(['value' => Yii::$app->user->id])->label(false);
    }
    ?>

    <?= $form->field($model, 'city_id')->textInput() ?>

    <?= $form->field($model, 'month')->textInput() ?>

    <?= $form->field($model, 'legacy')->textInput() ?>

    <?= $form->field($model, 'donation_register')->textInput() ?>

    <?= $form->field($model, 'private_property')->textInput() ?>

    <?= $form->field($model, 'entity_registration')->textInput() ?>

    <?= $form->field($model, 'civil_contract')->textInput() ?>

    <?= $form->field($model, 'trade_contract')->textInput() ?>

    <?= $form->field($model, 'donation_contract')->textInput() ?>

    <?= $form->field($model, 'authority_procedural_action')->textInput() ?>

    <?= $form->field($model, 'family_law')->textInput() ?>

    <?= $form->field($model, 'labor_disputes')->textInput() ?>

    <?= $form->field($model, 'land_disputes')->textInput() ?>

    <?= $form->field($model, 'housing_disputes')->textInput() ?>

    <?= $form->field($model, 'social_protection')->textInput() ?>

    <?= $form->field($model, 'criminal_case')->textInput() ?>

    <?= $form->field($model, 'administrative_offense')->textInput() ?>

    <?= $form->field($model, 'moral_material_harm')->textInput() ?>

    <?= $form->field($model, 'divorce')->textInput() ?>

    <?= $form->field($model, 'alimony')->textInput() ?>

    <?= $form->field($model, 'identity_document')->textInput() ?>

    <?= $form->field($model, 'domestic_violence')->textInput() ?>

    <?= $form->field($model, 'men')->textInput() ?>

    <?= $form->field($model, 'women')->textInput() ?>

    <?= $form->field($model, 'age_20')->textInput() ?>

    <?= $form->field($model, 'age_21_35')->textInput() ?>

    <?= $form->field($model, 'age_36_60')->textInput() ?>

    <?= $form->field($model, 'age_60')->textInput() ?>

    <?= $form->field($model, 'social_poor')->textInput() ?>

    <?= $form->field($model, 'social_pensioner')->textInput() ?>

    <?= $form->field($model, 'social_worker')->textInput() ?>

    <?= $form->field($model, 'social_unemployed')->textInput() ?>

    <?= $form->field($model, 'social_underage')->textInput() ?>

    <?= $form->field($model, 'social_disabled')->textInput() ?>

    <?= $form->field($model, 'civil_kyrgyz_republic')->textInput() ?>

    <?= $form->field($model, 'civil_foreign')->textInput() ?>

    <?= $form->field($model, 'civil_without')->textInput() ?>

    <?= $form->field($model, 'civil_refugee')->textInput() ?>

    <?= $form->field($model, 'equipment_issue')->textInput() ?>

    <?= $form->field($model, 'lawyer_duty_issue')->textInput() ?>

    <?= $form->field($model, 'bother_issue')->textInput() ?>

    <?= $form->field($model, 'equipment_issue_comment')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lawyer_duty_issue_comment')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bother_issue_comment')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'traning_issue')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'vi_men')->textInput() ?>

    <?= $form->field($model, 'vi_women')->textInput() ?>

    <?= $form->field($model, 'vi_age_20')->textInput() ?>

    <?= $form->field($model, 'vi_age_21_35')->textInput() ?>

    <?= $form->field($model, 'vi_age_36_60')->textInput() ?>

    <?= $form->field($model, 'vi_age_60')->textInput() ?>

    <?= $form->field($model, 'vi_social_poor')->textInput() ?>

    <?= $form->field($model, 'vi_social_pensioner')->textInput() ?>

    <?= $form->field($model, 'vi_social_worker')->textInput() ?>

    <?= $form->field($model, 'vi_social_unemployed')->textInput() ?>

    <?= $form->field($model, 'vi_social_underage')->textInput() ?>

    <?= $form->field($model, 'vi_social_disabled')->textInput() ?>

    <?= $form->field($model, 'vi_civil_kyrgyz_republic')->textInput() ?>

    <?= $form->field($model, 'vi_civil_foreign')->textInput() ?>

    <?= $form->field($model, 'vi_civil_without')->textInput() ?>

    <?= $form->field($model, 'vi_civil_refugee')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
