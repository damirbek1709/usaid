<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "report".
 *
 * @property int $id
 * @property int $user_id
 * @property int $city_id
 * @property int $month
 * @property int $legacy
 * @property int $donation_register
 * @property int $private_property
 * @property int $entity_registration
 * @property int $civil_contract
 * @property int $trade_contract
 * @property int $donation_contract
 * @property int $authority_procedural_action
 * @property int $family_law
 * @property int $labor_disputes
 * @property int $land_disputes
 * @property int $housing_disputes
 * @property int $social_protection
 * @property int $criminal_case
 * @property int $administrative_offense
 * @property int $moral_material_harm
 * @property int $divorce
 * @property int $alimony
 * @property int $identity_document
 * @property int $domestic_violence
 * @property int $men
 * @property int $women
 * @property int $age_20
 * @property int $age_21_35
 * @property int $age_36_60
 * @property int $age_60
 * @property int $social_poor
 * @property int $social_pensioner
 * @property int $social_worker
 * @property int $social_unemployed
 * @property int $social_underage
 * @property int $social_disabled
 * @property int $civil_kyrgyz_republic
 * @property int $civil_foreign
 * @property int $civil_without
 * @property int $civil_refugee
 * @property int $equipment_issue
 * @property int $lawyer_duty_issue
 * @property int $bother_issue
 * @property string $equipment_issue_comment
 * @property string $lawyer_duty_issue_comment
 * @property string $bother_issue_comment
 * @property string $traning_issue
 * @property int $vi_men
 * @property int $vi_women
 * @property int $vi_age_20
 * @property int $vi_age_21_35
 * @property int $vi_age_36_60
 * @property int $vi_age_60
 * @property int $vi_social_poor
 * @property int $vi_social_pensioner
 * @property int $vi_social_worker
 * @property int $vi_social_unemployed
 * @property int $vi_social_underage
 * @property int $vi_social_disabled
 * @property int $vi_civil_kyrgyz_republic
 * @property int $vi_civil_foreign
 * @property int $vi_civil_without
 * @property int $vi_civil_refugee
 */
class Report extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'report';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'city_id', 'month', 'equipment_issue', 'lawyer_duty_issue', 'bother_issue', 'equipment_issue_comment', 'lawyer_duty_issue_comment', 'bother_issue_comment', 'traning_issue'], 'required'],
            [['user_id', 'city_id', 'month', 'legacy', 'donation_register', 'private_property', 'entity_registration', 'civil_contract', 'trade_contract', 'donation_contract', 'authority_procedural_action', 'family_law', 'labor_disputes', 'land_disputes', 'housing_disputes', 'social_protection', 'criminal_case', 'administrative_offense', 'moral_material_harm', 'divorce', 'alimony', 'identity_document', 'domestic_violence', 'men', 'women', 'age_20', 'age_21_35', 'age_36_60', 'age_60', 'social_poor', 'social_pensioner', 'social_worker', 'social_unemployed', 'social_underage', 'social_disabled', 'civil_kyrgyz_republic', 'civil_foreign', 'civil_without', 'civil_refugee', 'equipment_issue', 'lawyer_duty_issue', 'bother_issue', 'vi_men', 'vi_women', 'vi_age_20', 'vi_age_21_35', 'vi_age_36_60', 'vi_age_60', 'vi_social_poor', 'vi_social_pensioner', 'vi_social_worker', 'vi_social_unemployed', 'vi_social_underage', 'vi_social_disabled', 'vi_civil_kyrgyz_republic', 'vi_civil_foreign', 'vi_civil_without', 'vi_civil_refugee'], 'integer'],
            [['traning_issue'], 'string'],
            [['equipment_issue_comment', 'lawyer_duty_issue_comment', 'bother_issue_comment'], 'string', 'max' => 1000],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'user_id' => Yii::t('app', 'User ID'),
            'city_id' => Yii::t('app', 'City ID'),
            'month' => Yii::t('app', 'Month'),
            'legacy' => Yii::t('app', 'Legacy'),
            'donation_register' => Yii::t('app', 'Donation Register'),
            'private_property' => Yii::t('app', 'Private Property'),
            'entity_registration' => Yii::t('app', 'Entity Registration'),
            'civil_contract' => Yii::t('app', 'Civil Contract'),
            'trade_contract' => Yii::t('app', 'Trade Contract'),
            'donation_contract' => Yii::t('app', 'Donation Contract'),
            'authority_procedural_action' => Yii::t('app', 'Authority Procedural Action'),
            'family_law' => Yii::t('app', 'Family Law'),
            'labor_disputes' => Yii::t('app', 'Labor Disputes'),
            'land_disputes' => Yii::t('app', 'Land Disputes'),
            'housing_disputes' => Yii::t('app', 'Housing Disputes'),
            'social_protection' => Yii::t('app', 'Social Protection'),
            'criminal_case' => Yii::t('app', 'Criminal Case'),
            'administrative_offense' => Yii::t('app', 'Administrative Offense'),
            'moral_material_harm' => Yii::t('app', 'Moral Material Harm'),
            'divorce' => Yii::t('app', 'Divorce'),
            'alimony' => Yii::t('app', 'Alimony'),
            'identity_document' => Yii::t('app', 'Identity Document'),
            'domestic_violence' => Yii::t('app', 'Domestic Violence'),
            'men' => Yii::t('app', 'Men'),
            'women' => Yii::t('app', 'Women'),
            'age_20' => Yii::t('app', 'Age 20'),
            'age_21_35' => Yii::t('app', 'Age 21 35'),
            'age_36_60' => Yii::t('app', 'Age 36 60'),
            'age_60' => Yii::t('app', 'Age 60'),
            'social_poor' => Yii::t('app', 'Social Poor'),
            'social_pensioner' => Yii::t('app', 'Social Pensioner'),
            'social_worker' => Yii::t('app', 'Social Worker'),
            'social_unemployed' => Yii::t('app', 'Social Unemployed'),
            'social_underage' => Yii::t('app', 'Social Underage'),
            'social_disabled' => Yii::t('app', 'Social Disabled'),
            'civil_kyrgyz_republic' => Yii::t('app', 'Civil Kyrgyz Republic'),
            'civil_foreign' => Yii::t('app', 'Civil Foreign'),
            'civil_without' => Yii::t('app', 'Civil Without'),
            'civil_refugee' => Yii::t('app', 'Civil Refugee'),
            'equipment_issue' => Yii::t('app', 'Equipment Issue'),
            'lawyer_duty_issue' => Yii::t('app', 'Lawyer Duty Issue'),
            'bother_issue' => Yii::t('app', 'Bother Issue'),
            'equipment_issue_comment' => Yii::t('app', 'Equipment Issue Comment'),
            'lawyer_duty_issue_comment' => Yii::t('app', 'Lawyer Duty Issue Comment'),
            'bother_issue_comment' => Yii::t('app', 'Bother Issue Comment'),
            'traning_issue' => Yii::t('app', 'Traning Issue'),
            'vi_men' => Yii::t('app', 'Vi Men'),
            'vi_women' => Yii::t('app', 'Vi Women'),
            'vi_age_20' => Yii::t('app', 'Vi Age 20'),
            'vi_age_21_35' => Yii::t('app', 'Vi Age 21 35'),
            'vi_age_36_60' => Yii::t('app', 'Vi Age 36 60'),
            'vi_age_60' => Yii::t('app', 'Vi Age 60'),
            'vi_social_poor' => Yii::t('app', 'Vi Social Poor'),
            'vi_social_pensioner' => Yii::t('app', 'Vi Social Pensioner'),
            'vi_social_worker' => Yii::t('app', 'Vi Social Worker'),
            'vi_social_unemployed' => Yii::t('app', 'Vi Social Unemployed'),
            'vi_social_underage' => Yii::t('app', 'Vi Social Underage'),
            'vi_social_disabled' => Yii::t('app', 'Vi Social Disabled'),
            'vi_civil_kyrgyz_republic' => Yii::t('app', 'Vi Civil Kyrgyz Republic'),
            'vi_civil_foreign' => Yii::t('app', 'Vi Civil Foreign'),
            'vi_civil_without' => Yii::t('app', 'Vi Civil Without'),
            'vi_civil_refugee' => Yii::t('app', 'Vi Civil Refugee'),
        ];
    }
}
