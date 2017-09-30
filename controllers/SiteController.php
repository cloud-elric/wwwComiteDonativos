<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\EntOrdenesCompras;
use app\modules\ModUsuarios\models\Utils;

class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
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
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex($monto=0)
    {
        $idUsuario = Yii::$app->user->identity->id_usuario;
        $ordenCompra = new EntOrdenesCompras();
        $ordenCompra->num_total = $monto;
        $ordenCompra->txt_order_number = Utils::generateToken("oc_");
        $ordenCompra->id_usuario = $idUsuario;
        $ordenCompra->txt_description = "Donativo";
        if ($ordenCompra->load(Yii::$app->request->post()) && $ordenCompra->save()) {

            

            return $this->redirect(['forma-pago', 'token'=>$ordenCompra->txt_order_number]);
        }    

        print_r($ordenCompra->errors);

        return $this->render('index', ['ordenCompra'=>$ordenCompra]);
    }

    public function actionMisBoletos(){
        echo Utils::generateBoleto(1);
        exit;
        return $this->render("mis-boletos");
    }

    /**
    * Action para seleccionar la orden de pago (Paypal u OpenPay)
    */
    public function actionFormaPago($token=null){
        $existeOrdenCompra = $this->findOrdenCompra($token);
        if(!$token || !$existeOrdenCompra ){
            return $this->redirect("index");
        }


        return $this->render("forma-pago", ["tokenOc"=>$token]);

    }

    /**
     * Busca la orden de compra en la base de datosd.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return EntVoluntario the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
     protected function findOrdenCompra($token)
     {
         if (($model = EntOrdenesCompras::findOne(["txt_order_number"=>$token])) !== null) {
             return $model;
         } else {
             throw new NotFoundHttpException('The requested page does not exist.');
         }
     }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }
    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }
}
