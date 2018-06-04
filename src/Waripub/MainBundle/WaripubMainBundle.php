<?php

namespace Waripub\MainBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class WaripubMainBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
