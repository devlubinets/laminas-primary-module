<?php

namespace AlphaModule\Controller;

use Laminas\Mvc\Controller\AbstractActionController;
use Laminas\View\Model\ViewModel;

/**
 * Class AlphaController
 * @package AlphaModule\Controller
 */
class AlphaController extends AbstractActionController
{
    /**
     * @return ViewModel
     */
    public function indexAction(): ViewModel
    {
        return new ViewModel([]);
    }
}
