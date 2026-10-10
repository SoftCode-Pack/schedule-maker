<?php
namespace app\controllers;

use Crenspire\Yii2Inertia\Inertia;
use yii\web\Controller;
use yii\web\Response;

class HelloController extends Controller
{
    public function actionIndex(): Response
    {
        return Inertia::render('Home', [
            'message' => 'Hello from Yii!',
        ]);
    }
}
