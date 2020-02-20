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
        
       
        $model = new Lead;
    
        if(isset($_REQUEST['Lead']) )
         {
           
            
            if(empty($_REQUEST['Lead']['first_name']) && empty($_REQUEST['Lead']['last_name']) && empty($_REQUEST['Lead']['email'])
                && empty($_REQUEST['Lead']['phone']) && empty($_REQUEST['Lead']['address']) && empty($_REQUEST['Lead']['home_sqft']) )
            {
        
                 return false;

            }
         else{
       
                $model->first_name =$_REQUEST['Lead']['first_name'];
                $model->last_name=$_REQUEST['Lead']['last_name'];
                $model->email =$_REQUEST['Lead']['email'];
                $model->phone =$_REQUEST['Lead']['phone'];
                $model->address =$_REQUEST['Lead']['address'];
                $model->home_sqft =$_REQUEST['Lead']['home_sqft'];
                $model->save();
                        
                return  true;
             }
        }
             return $this->render('index', [
            'model' => $model,
        ]);

    }
    
}