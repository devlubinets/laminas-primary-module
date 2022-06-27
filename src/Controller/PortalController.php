<?php

namespace IarPortalModule\Controller;

use Laminas\Mvc\Controller\AbstractActionController;
use Laminas\View\Model\ViewModel;

/**
 * Class PortalController
 * @package IarPortalModule\Controller\PortalController
 */
class PortalController extends AbstractActionController
{
    /**
     * @return ViewModel
     */
    public function indexAction(): ViewModel
    {
        return new ViewModel([]);
    }
}
