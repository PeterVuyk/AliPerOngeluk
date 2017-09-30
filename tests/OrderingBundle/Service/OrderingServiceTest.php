<?php

namespace OrderingBundle\Service;

use OrderingBundle\Entity\CustomerDetails;
use OrderingBundle\Exception\CantAddCustomerException;
use OrderingBundle\Repository\CustomerDetailsRepository;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use PHPUnit_Framework_MockObject_MockObject as Mock;

class OrderingServiceTest extends WebTestCase
{
    public function testSaveOrderSuccess()
    {
        $customerDetailsRepositoryMock = $this->getCustomerDetailsRepositoryMock();
        $customerDetailsRepositoryMock->expects($this->once())
            ->method('saveCustomerDetails')
            ->willReturn(null);

        $orderingService = $this->getOrderingService($customerDetailsRepositoryMock);
        $orderingService->saveOrder(new CustomerDetails());
        $this->addToAssertionCount(1);
    }

    public function testSaveOrderFailed()
    {
        $this->expectException(CantAddCustomerException::class);

        $customerDetailsRepositoryMock = $this->getCustomerDetailsRepositoryMock();
        $customerDetailsRepositoryMock->expects($this->once())
            ->method('saveCustomerDetails')
            ->willThrowException(new \Exception());

        $orderingService = $this->getOrderingService($customerDetailsRepositoryMock);
        $orderingService->saveOrder(new CustomerDetails());
    }

    /**
     * @param CustomerDetailsRepository|null $customerDetailsRepository
     * @return OrderingService
     */
    private function getOrderingService($customerDetailsRepository = null) {
        if (!$customerDetailsRepository) {
            $customerDetailsRepository = $this->getCustomerDetailsRepositoryMock();
        }

        return new OrderingService($customerDetailsRepository);
    }

    /**
     * @return Mock|CustomerDetailsRepository
     */
    private function getCustomerDetailsRepositoryMock()
    {
        return $this->getMockBuilder(CustomerDetailsRepository::class)
            ->disableOriginalConstructor()
            ->getMock();
    }
}
