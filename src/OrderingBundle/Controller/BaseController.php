<?php

namespace OrderingBundle\Controller;

use OrderingBundle\Service\OrderingService;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BaseController extends Controller
{
    /**
     * @return OrderingService
     */
    public function getOrderingService()
    {
        return $this->get('ordering.service.ordering_service');
    }
}
