<?php

namespace OrderingBundle\Service;

use OrderingBundle\Entity\CustomerDetails;
use OrderingBundle\Exception\CantAddCustomerException;
use OrderingBundle\Repository\CustomerDetailsRepository;

class OrderingService
{
    /**
     * @var CustomerDetailsRepository
     */
    private $customerDetailsRepository;

    /**
     * OrderingService constructor.
     * @param CustomerDetailsRepository $customerDetailsRepository
     */
    public function __construct(
        CustomerDetailsRepository $customerDetailsRepository
    ) {
        $this->customerDetailsRepository = $customerDetailsRepository;
    }

    public function saveOrder(CustomerDetails $customerDetails)
    {
        try {
            $this->customerDetailsRepository->saveCustomerDetails($customerDetails);
        } catch (\Exception $exception) {
            //@Todo: Do some loging.
            throw new CantAddCustomerException();
        }
    }
}
