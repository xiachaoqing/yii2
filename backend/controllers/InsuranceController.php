<?php

namespace backend\controllers;

use common\models\Insurance;
use yii\helpers\ArrayHelper;

/**
 * Class InsuranceController 保险信息处理控制器
 * @package backend\controllers
 */
class InsuranceController extends Controller
{
    /**
     * @var string 使用JqGrid 显示数据
     */
    public $strategy = 'JqGrid';

    /**
     * @var string 定义使用的model
     */
    public $modelClass = '\common\models\Insurance';

    /**
     * 查询参数配置
     * @param array $params
     * @return array
     */
    public function where($params)
    {
        return [
            'id' => ['and' => '=', 'func' => 'intval'],
            'name' => function ($value) {
                return ['like', 'name', trim($value)];
            },
            'pid' => '='
        ];
    }

    /**
     * 首页显示
     * @return string
     */
    public function actionIndex()
    {
        $insurance = Insurance::find()->where(['pid' => 0])->asArray()->all();

        // 加载视图
        return $this->render('grid', [
            'parent' => ArrayHelper::map($insurance, 'id', 'name'),
        ]);
    }
}
