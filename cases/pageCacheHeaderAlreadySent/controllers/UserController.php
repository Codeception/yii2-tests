<?php

namespace app\pageCacheHeaderAlreadySent\controllers;

use Yii;

class UserController extends \yii\rest\Controller
{
    public function behaviors()
    {
        $behaviors = parent::behaviors();

        $behaviors[] = [
            'class' => 'yii\filters\PageCache',
            'only' => ['index'],
            'duration' => 3000,
            'variations' => [
                Yii::$app->getRequest()->getQueryParam('page'),
                Yii::$app->getRequest()->getQueryParam('per_page'),
            ],
        ];

        return $behaviors;
    }

    public function actionIndex()
    {
        return [
          [
            'id' => 1,
            'name' => 'Foo',
          ],
          [
            'id' => 2,
            'name' => 'Bar',
          ],
        ];
    }
}
