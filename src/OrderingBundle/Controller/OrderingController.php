<?php

namespace OrderingBundle\Controller;

use OrderingBundle\Entity\CustomerDetails;
use OrderingBundle\Form\CustomerDetailsType;
use Symfony\Component\HttpFoundation\Request;

class OrderingController extends BaseController
{
    public function indexAction(Request $request, CustomerDetails $customerDetails = null)
    {
        $form = $this->createForm(CustomerDetailsType::class, $customerDetails);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $customerDetails = $form->getData();
            try {
                $this->getOrderingService()->saveOrder($customerDetails);
            } catch (\Exception $exception) {
                //@Todo: Show flash message
                return $this->redirect($request->getUri());
            }
            return $this->redirectToRoute('ordering_success');
        }

        return $this->render(
            'OrderingBundle:ordering:ordering.html.twig',
            ['form' => $form->createView()]
        );
    }

    public function successPageAction(Request $request)
    {
        return $this->render(
            'OrderingBundle:ordering:success.html.twig',
            []
        );
    }
}
