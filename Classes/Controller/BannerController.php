<?php

namespace Gmbit\Cebanner\Controller;

use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use Psr\Http\Message\ResponseInterface;

class BannerController extends ActionController
{
    /**
     * Akcija za prikaz poruke
     *
     * @return ResponseInterface
     */
    public function showAction(): ResponseInterface
    {
        $this->view->assign('message', 'Plugin HelloMe radi ispravno!');
        return $this->htmlResponse();
    }
}