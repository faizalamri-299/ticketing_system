<?php

namespace frontend\models;
use frontend\models\Company;
use yii\helpers\ArrayHelper;

use Yii;

/**
 * This is the model class for table "tbl_cpre_company_has_report".
 *
 * @property int $id
 * @property int $fk_cpre_company_id
 * @property string $sys_created_at
 * @property string $sys_updated_at
 * @property string $cpre_details
 * @property int $cpre_status
 * @property int $cpre_priority
 * @property int $cpre_done
 */
class Report extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_cpre_company_has_report';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fk_cpre_company_id', 'cpre_status', 'cpre_priority', 'cpre_done'], 'integer'],
            [['sys_created_at', 'sys_updated_at'], 'safe'],
            [['cpre_details','cpre_index', 'cpre_issuer'], 'string', 'max' => 256],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'fk_cpre_company_id' => 'Company',
            'sys_created_at' => 'Created At',
            'sys_updated_at' => 'Updated At',
            'cpre_index' => 'index',
            'cpre_details' => 'Details',
            'cpre_issuer' => 'Issuer',
            'cpre_status' => 'Action',
            'infoStatus' => 'Action',
            'infoPriority' => 'Priority',
            'infoDone' => 'Status',
            'cpre_priority' => 'Priority',
            'cpre_done' => 'Status',
        ];
    }

    //////////////////////////////////////////////////////fk company///////////////////////////////////////////////////////////////////////////////////
    public function getCompanyName()
    {
        return $this->hasOne(Company::className(), ['id' => 'fk_cpre_company_id']);
    }


    //////////////////////////////////////////////////////dropdown///////////////////////////////////////////////////////////////////////////////////
    public static function getDropDownCompany()
    {
        $query = Company::find()->select(['id', 'cp_nama'])->orderBy('cp_nama ASC')->asArray()->all();
        return ArrayHelper::map($query, 'id', 'cp_nama');
    }

    public function getInfoStatus($upsize = false)
    {
        switch($this->cpre_status) {
            case 0:
                $text = "<span class=\"badge badge-warning\">New</span>"; break;
            case 1:
                $text = "<span class=\"badge badge-info\">In Checking</span>"; break;
            case 2:
                $text = "<span class=\"badge badge-success\">Success</span>"; break;
            case 3:
                $text = "<span class=\"badge badge-danger\">Failed</span>"; break;
            default:
                $text = '-'; break;
        }

        return $upsize ? "<h5>$text</h5>" : $text;
    }

    public function getInfoPriority($upsize = false)
    {
        switch($this->cpre_priority) {
            case 0:
                $text = "<span class=\"badge badge-success\">Not Set</span>"; break;
            case 1:
                $text = "<span class=\"badge badge-warning\">Low</span>"; break;
            case 2:
                $text = "<span class=\"badge badge-info\">Medium</span>"; break;
            case 3:
                $text = "<span class=\"badge badge-danger\">High</span>"; break;
            default:
                $text = '-'; break;
        }

        return $upsize ? "<h5>$text</h5>" : $text;
    }

    public function getInfoDone($upsize = false)
    {
        switch($this->cpre_done) {
            case 0:
                $text = "<span class=\"badge badge-warning\">New</span>"; break;
            case 1:
                $text = "<span class=\"badge badge-danger\">Not Done</span>"; break;
            case 2:
                $text = "<span class=\"badge badge-success\">Done</span>"; break;
            case 3:
                $text = "<span class=\"badge badge-danger\">Failed</span>"; break;
            default:
                $text = '-'; break;
        }

        return $upsize ? "<h5>$text</h5>" : $text;
    }
}
