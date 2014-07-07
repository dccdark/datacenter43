<?php

class ReportController extends Controller {

    public function actionStatUpload() {

        $model = new Cuploadstat('search');

        $model->unsetAttributes();

        if (isset($_GET['Cuploadstat'])) {
            $model->attributes = $_GET['Cuploadstat'];
        }


        $this->render('v_stat_upload', array(
            'model' => $model,
        ));
    }

    public function actionStatUploadHosp($id = null) {
        //$model = Cuploadstat::model()->findAll(array('condition'=>"id=$id"));
        $model = new CActiveDataProvider('Cuploadstat', array(
            'criteria' => array(
                'condition' => "id=$id",
               
        )));


        $this->render('v_hos_upload', array(
            'model' => $model
        ));
    }

}

