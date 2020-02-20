<?php
namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\helpers\Json;
use yii\helpers\Url;
use common\models\Lead;


/**
 * Site controller
 */
class SiteController extends Controller
{
   
    public $enableCsrfValidation = false;
    
   
    public function actions()
    {
        
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
            'change-username' => [
            'class' => EditableAction::class,
            'modelClass' => UserModel::class,
        ],
        ];
    }
    

     public function actionIndex()
    {
        
       
        $model = new Lead();

        if ($model->load(Yii::$app->request->post())) {

            $model->first_name =$_REQUEST['Lead']['first_name'];
            $model->last_name=$_REQUEST['Lead']['last_name'];
            $model->email =$_REQUEST['Lead']['email'];
            $model->phone =$_REQUEST['Lead']['phone'];
            $model->address =$_REQUEST['Lead']['address'];
            $model->home_sqft =$_REQUEST['Lead']['home_sqft'];
            $model->created_at = date('Y-m-d H:i:s');
            $model->save();
            return $this->redirect('create');
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }
     
}

