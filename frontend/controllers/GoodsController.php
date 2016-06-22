<?php
/**
 * Created by PhpStorm.
 * User: chl
 * Date: 16-6-22
 * Time: 下午1:35
 */
namespace frontend\controllers;
use frontend\models\Goods;
use Yii;
use yii\web\Controller;

class GoodsController extends Controller{
    //河马早餐首页早餐list
    public function actionList(){
        $goods = new Goods();
        $data = $goods->find()->asArray()->all();
        $result_json['goods_list'] = $data;
        echo (json_encode($result_json));
    }
}