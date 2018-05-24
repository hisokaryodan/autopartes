<?php
/**
 * Created by PhpStorm.
 * User: camilo
 * Date: 23/05/18
 * Time: 11:54 PM
 */

namespace app\controllers;


use app\models\Partes;
use yii\rest\Controller;

class PartesController extends Controller
{
    public function actionIndex()
    {

        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        $partes = Partes::find()->asArray()->all();

        if (count($partes) > 0) {
            $response = array('status' => true, 'data' => $partes);
        } else {
            $response = array('status' => false, 'data' => 'No hay partes');

        }

        return $response;
    }

    public function actionFind($id)
    {
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        $parte = Partes::find()->where(['id' => $id])->asArray()->one();

        if (count($parte) > 0) {
            $response = array('status' => true, 'data' => $parte);
        } else {
            $response = array('status' => false, 'data' => 'No hay parte');

        }

        return $response;
    }

    public function actionCreate($auto_id)
    {
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        $parte = new Partes();
        $post = \Yii::$app->request->post();
        $post['auto_id'] = $auto_id;
        $parte->attributes = $post;

        if ($parte->validate()) {
            $parte->save();
            $response = array('status' => true, 'data' => 'Parte creada con exito!');
        } else {
            $response = array('status' => false, 'data' => $parte->getErrors());

        }

        return $response;
    }

}