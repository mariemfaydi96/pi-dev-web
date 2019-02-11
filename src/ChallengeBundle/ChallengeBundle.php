<?php

namespace ChallengeBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class ChallengeBundle extends Bundle
{
    public function getParent()
    {
        return "FOSUserBundle";
    }
}
