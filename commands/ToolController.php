<?php

namespace app\commands;

use yii\console\Controller;
use app\models\User;

class ToolController extends Controller
{
    public function actionGenerateAdmin()
    {
        if(User::find()->where(['username'=>'admin'])->one() == NULL)  {
            
            $model = new User;
            $model->loadDefaultValues();
            $model->username = 'admin';
            $model->email = 'admin@gmail.com';
            $model->generateAuthKey();
            $model->setPassword('123456');
            if($model->save()){
                echo "User admin berhasil dibuat!\n";
            }else{
                echo "Gagal membuat user admin!\n";
            }

        } else{
            echo "User admin sudah ada!\n";
        }
    }

}
