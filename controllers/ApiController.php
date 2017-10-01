<?php
namespace app\controllers;

use yii\rest\ActiveController;
use yii\web\Response;

class ApiController extends ActiveController
{
    public $modelClass = 'app\models\Todo';
    public function behaviors()
    {
        $behaviors = parent::behaviors();
        $behaviors['contentNegotiator']['formats']['text/html'] = Response::FORMAT_JSON;

        $behaviors['corsFilter'] = [
            'class' => \yii\filters\Cors::className(),
            'cors' => [
                // restrict access to
                'Origin' => ['http://localhost:8100', 'https://www.myserver.com'],
                'Access-Control-Request-Method' => ['GET','POST', 'PUT'],
                // Allow only POST and PUT methods
                // 'Access-Control-Request-Headers' => ['X-Wsse'],
                // // Allow only headers 'X-Wsse'
                // 'Access-Control-Allow-Credentials' => true,
                // // Allow OPTIONS caching
                // 'Access-Control-Max-Age' => 3600,
                // // Allow the X-Pagination-Current-Page header to be exposed to the browser.
                // 'Access-Control-Expose-Headers' => ['X-Pagination-Current-Page'],
            ],

        ];

        return $behaviors;
    }


    
}