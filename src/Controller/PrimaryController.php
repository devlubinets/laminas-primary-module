<?php

namespace PrimaryModule\Controller;

use Laminas\Mvc\Controller\AbstractActionController;
use Laminas\View\Model\ViewModel;

/**
 * Class PrimaryController
 *
 * @package PrimaryModule\Controller\PrimaryController
 */
class PrimaryController extends AbstractActionController
{
    /**
     * @return ViewModel
     */
    public function indexAction(): ViewModel
    {
        return new ViewModel([]);
    }
}
