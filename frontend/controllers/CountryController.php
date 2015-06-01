<?php
/**
 * Created by PhpStorm.
 * User: LYK
 * Date: 2015/6/1
 * Time: 16:35
 */
namespace frontend\controllers;

use frontend\models\Country;
use yii\data\Pagination;
use yii\web\Controller;

class CountryController extends Controller{
    public function actionIndex(){
        $query=Country::find();


        yjyjghj
       $pagination =new Pagination([
            'defaultPageSize'=>5,
            'totalCount'=>$query->count(),
        ]);
       $countries= $query->orderBy('name')->offset($pagination->offset)->limit($pagination->limit)->all();

        return $this->render('index', [
            'countries' => $countries,
            'pagination' => $pagination,
        ]);
    }
}