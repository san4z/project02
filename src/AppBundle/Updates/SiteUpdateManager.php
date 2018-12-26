<?php
namespace AppBundle\Updates;

use AppBundle\Service\MessageGenerator;

class SiteUpdateManager
{
    private $messageGenerator;
    private $mailer;

    public function __construct(MessageGenerator $messageGenerator, \Swift_Mailer $mailer)
    {
        $this->messageGenerator = $messageGenerator;
        $this->mailer = $mailer;
    }

    public function notifyOfSiteUpdate()
    {
        $happyMessage = $this->messageGenerator->getHappyMessage();

        $message = (new \Swift_Message('Site update just happened!'))
            ->setFrom('sanaz.mtz70@gmail.com')
            ->setTo('sanaz.mtz@gmail.com')
            ->addPart(
                'Someone just updated the site. We told them: '.$happyMessage
            );

        return $this->mailer->send($message) > 0;
    }
}
