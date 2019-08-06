<?php

namespace app\closeSessionOnRecreateApplication\controllers;

use yii\base\Action;
use yii\helpers\Url;
use yii\web\Controller;

final class SiteController extends Controller
{
    const MY_SESSION_KEY = 'foo';

    public function actionWritesession()
    {
        $session = \Yii::$app->session;
        $session[self::MY_SESSION_KEY] = 'session filled';
    }

    public function actionReadsession()
    {
        $session = \Yii::$app->session;
        // Mimic \yii\web\User::renewAuthStatus check
        if ($session->getHasSessionId() || $session->getIsActive()) {
            echo $session[self::MY_SESSION_KEY] ?: 'session empty';
            return;
        }

        echo 'session non started';
    }
}