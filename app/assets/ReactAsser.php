<?php

namespace app\assets;

use yii\web\AssetBundle;

class ReactAsser extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';

    public $js = [
        // Vite fejlesztői szerver vagy build kimenet
        'http://localhost:5173/@vite/client',
        'http://localhost:5173/src/main.jsx',
    ];

    public $depends = [
        'yii\web\YiiAsset',
    ];
}
