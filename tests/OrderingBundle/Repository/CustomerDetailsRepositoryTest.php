<?php

namespace OrderingBundle\Repository;

use OrderingBundle\Entity\CustomerDetails;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use PHPUnit_Framework_MockObject_MockObject as Mock;
use Doctrine\ORM\Mapping\ClassMetadata;
use Doctrine\ORM\EntityManager;

class CustomerDetailsRepositoryTest extends WebTestCase
{
    public function testSaveCustomerDetails()
    {
        $entityManagerMock = $this->getMockBuilder(EntityManager::class)
            ->disableOriginalConstructor()
            ->getMock();
        $entityManagerMock
            ->expects($this->once())
            ->method('persist');
        $entityManagerMock
            ->expects($this->once())
            ->method('flush');

        $customerDetails = new CustomerDetails();

        $customerDetailsRepository = $this->createCustomerDetailsRepository($entityManagerMock);
        $customerDetailsRepository->saveCustomerDetails($customerDetails);
        $this->addToAssertionCount(1);
    }

    /**
     * @param $entityManagerMock
     * @return CustomerDetailsRepository
     */
    private function createCustomerDetailsRepository($entityManagerMock)
    {
        /** @var ClassMetadata|Mock $classMetaDock */
        $classMetaDock = $this->getMockBuilder(ClassMetadata::class)
            ->disableOriginalConstructor()
            ->getMock();

        return new CustomerDetailsRepository($entityManagerMock, $classMetaDock);
    }
}