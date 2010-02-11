<?php

/**
 * Image form.
 *
 * @package    MyHON
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ImageForm extends BaseImageForm
{
  public function configure()
  {
    $this->setWidget('url',new sfWidgetFormInputText);
    $this->setValidator('url',new sfValidatorUrl);

    $this->useFields(array('url'));
  }
}
