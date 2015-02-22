<?php

namespace lajax\translatemanager\controllers\actions;

use Yii;
use yii\web\Response;
use lajax\translatemanager\models\LanguageSource;

/**
 * Deletes an existing LanguageSource model.
 * @author Lajos Molnár <lajax.m@gmail.com>
 * @since 1.4
 */
class DeleteSourceAction extends \yii\base\Action {

    /**
     * Deletes an existing LanguageSource model.
     * If deletion is successful, the browser will be redirected to the 'list' page.
     * @return json
     */
    public function run() {
        
        Yii::$app->response->format = Response::FORMAT_JSON;
        
        $ids = Yii::$app->request->post('ids');
        
        LanguageSource::deleteAll(['IN', 'id', $ids]);
        
        return [];
    }

}