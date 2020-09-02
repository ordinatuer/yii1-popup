<?php

class UpController extends Controller
{
  public function actionIndex($id = 0)
  {
    $model = Popups::model()->showed()->findByPk($id);
    if ($model) {
      $script = $this->getPopupScript() . $id;

      $this->renderPartial('index', array(
        'script' => $script,
      ));
    } else {
      $this->renderPartial('empty');
    }

    Yii::app()->end();
  }

  public function actionShow($id)
  {
    $model = Popups::model()->showed()->findByPk($id);

    if ($model) {
      $model->saveCounters(array(
        'counter' => 1,
      ));
      $cssFile = $this->getPopupStyles();

      $this->renderPartial('show', array(
        'popup' => $model,
        'cssFile' => $cssFile,
        'delay' => 10000,
      ));
    } else {
      $this->renderPartial('empty');
    }

    Yii::app()->end();
  }

  private function getPopupStyles()
  {
    $css = array(
      'server' => Yii::app()->createAbsoluteUrl(''),
      'path' => 'css',
      'file' => 'popup.css',
    );

    return implode('/', $css);
  }

  private function getPopupScript()
  {
    return Yii::app()->createAbsoluteUrl('') . '/up/show/';
  }
}
