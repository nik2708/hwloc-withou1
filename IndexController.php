<?php

namespace app\modules\admin\controllers;

use Yii;
use yii\web\Controller;
use app\models\form\LoginForm;

class IndexController extends \app\modules\admin\components\AdminController
{
    public $status = "active";

    public function init(){
        $this->view->title = "Главная страница";

        parent::init();
    }

    public function actions()
    {
        return [
            'error' => ['class' => 'yii\web\ErrorAction'],
        ];
    }

    public function actionIndex()
    {
        // Google Authenticator отключён
        // $getAuth = false;
        // $getAuth = \Yii::$app->session->get('varify_next_authenticator');
        // if (!\Yii::$app->user->isGuest) {
        //     if(!\Yii::$app->user->identity->authenticator || iconv_strlen(\Yii::$app->user->identity->authenticator) < 1){
        //         \Yii::$app->response->redirect(['authenticator/default/scan']);
        //     }
        //     else {
        //         if(!$getAuth){
        //             \Yii::$app->response->redirect(['authenticator/default/check']);
        //         }
        //         else {
        //             $this->title = "Dashboard";
        //             return $this->redirect(['settings/index']);
        //         }
        //     }
        // }

        if (!\Yii::$app->user->isGuest) {
            $this->title = "Dashboard";
            return $this->redirect(['settings/index']);
        }

        // return $this->render('index');
    }

    public function actionLogin()
    {
        $this->layout = '@app/modules/admin/views/layouts/login';

        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();

        if ($model->load(\Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        return $this->render('login', [
            'model' => $model,
        ]);
    }

    public function actionLogout()
    {

        $session = Yii::$app->session;
        $session->remove('auth_secret');
        $session->remove('varify_next_authenticator');
        
        Yii::$app->user->logout();

        return $this->goHome();
    }
}
