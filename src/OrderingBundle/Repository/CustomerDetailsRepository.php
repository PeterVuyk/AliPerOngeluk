<?php

namespace OrderingBundle\Repository;

use Doctrine\ORM\EntityRepository;
use OrderingBundle\Entity\CustomerDetails;

class CustomerDetailsRepository extends EntityRepository
{
    /**
     * @param CustomerDetails $customerDetails
     */
    public function saveCustomerDetails(CustomerDetails $customerDetails)
    {
        $this->getEntityManager()->persist($customerDetails);
        $this->getEntityManager()->flush();
    }
}
