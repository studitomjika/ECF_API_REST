<?php

namespace App\Security;

use Lexik\Bundle\JWTAuthenticationBundle\Event\AuthenticationSuccessEvent;


class AuthenticationSuccessListener
{
    /**
     * @param AuthenticationSuccessEvent $event
     */
    public function onAuthenticationSuccessResponse(AuthenticationSuccessEvent $event)
    {
        $data = $event->getData();
        $user = $event->getUser();
        session_start();
        $_SESSION["user"] = $user->getUserIdentifier();
        $_SESSION["user_name"] = $user->getUsername();
        $_SESSION["user_admin"] = $user->isRoleAdmin();
    }
}
