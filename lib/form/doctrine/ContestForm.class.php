<?php

/**
 * Contest form.
 *
 * @package    MyHON
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ContestForm extends BaseContestForm
{
  public function configure()
  {
    $this->setWidget('title',new sfWidgetFormInputText);
    $this->useFields(array('title'));
    $this->embedForm("images",new ImageForm(),"%content%");
  }
}
