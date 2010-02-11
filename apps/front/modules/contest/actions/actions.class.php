<?php

/**
 * contest actions.
 *
 * @package    MyHON
 * @subpackage contest
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class contestActions extends sfActions
{

  public function executeNew(sfWebRequest $request)
  {
    // Display the form
    $this->form = new ContestForm();
    if ($this->getRequest()->isMethod('post'))
    {
      $this->form->bind($request->getParameter('contest'));
      if ($this->form->isValid())
      {
        $contest = new contest();
        $contest->setEmail($this->form->getValue('email'));
        $contest->setUrl($this->form->getValue('url'));
        $contest->setAdmin_hash(md5(time().$this->form->getValue('url').$this->form->getValue('email')));
        $contest->setPublic_hash(md5(time().$this->form->getValue('email').$this->form->getValue('url')));
        $contest->save();
        // Send mail with secret URL
        try
        {
          // Create the mailer and message objects
          //$mailer = new Swift(new Swift_Connection_NativeMail());

          //$connection = new Swift_Connection_SMTP('smtp.free.fr');
          $connection = new Swift_Connection_NativeMail();
          $mailer = new Swift($connection);

          $message = new Swift_Message('Welcome!');

          // Render message parts
          $mailContext = array('admin_hash' => $contest->getAdmin_hash(),'contest_url' => $contest->getUrl());
          $v = $this->getPartial('newcontestMailHtmlBody', $mailContext);
          $htmlPart = new Swift_Message_Part($v, 'text/html');
          $message->attach($htmlPart);
          $message->attach(new Swift_Message_Part($this->getPartial('newcontestMailTextBody', $mailContext), 'text/plain'));
          $mailTo = $contest->getEmail();
          $mailFrom = sfConfig::get('app_mail_webmaster');
          $mailer->send($message, $mailTo, $mailFrom);
          $mailer->disconnect();
        }
        catch(Exception $e)
        {
          $this->logMessage($e);
        }
        //redirect to the thank you page
        $this->redirect('contest/thankyou');
      }
    }
    else {
     return sfView::SUCCESS;
    }
  }
  public function executeThankyou() {}
}
