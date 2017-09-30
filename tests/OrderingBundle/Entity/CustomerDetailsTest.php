<?php

namespace OrderingBundle\Tests\Entity;

use OrderingBundle\Entity\CustomerDetails;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class CustomerDetailsTest extends WebTestCase
{
    /**
     * @dataProvider customerDetailsProvider
     * @param CustomerDetails $customerDetails
     * @param array $data
     */
    public function testFirstName(CustomerDetails $customerDetails, $data)
    {
        $customerDetails->setFirstName($data['firstName']);
        $this->assertEquals($data['firstName'], $customerDetails->getFirstName());
    }

    /**
     * @dataProvider customerDetailsProvider
     * @param CustomerDetails $customerDetails
     * @param array $data
     */
    public function testLastName(CustomerDetails $customerDetails, $data)
    {
        $customerDetails->setLastName($data['lastName']);
        $this->assertEquals($data['lastName'], $customerDetails->getLastName());
    }

    /**
     * @dataProvider customerDetailsProvider
     * @param CustomerDetails $customerDetails
     * @param array $data
     */
    public function testStreetName(CustomerDetails $customerDetails, $data)
    {
        $customerDetails->setStreetName($data['streetName']);
        $this->assertEquals($data['streetName'], $customerDetails->getStreetName());
    }

    /**
     * @dataProvider customerDetailsProvider
     * @param CustomerDetails $customerDetails
     * @param array $data
     */
    public function testHouseNumber(CustomerDetails $customerDetails, $data)
    {
        $customerDetails->setHouseNumber($data['houseNumber']);
        $this->assertEquals($data['houseNumber'], $customerDetails->getHouseNumber());
    }

    /**
     * @dataProvider customerDetailsProvider
     * @param CustomerDetails $customerDetails
     * @param array $data
     */
    public function testPostalCode(CustomerDetails $customerDetails, $data)
    {
        $customerDetails->setPostalCode($data['postalCode']);
        $this->assertEquals($data['postalCode'], $customerDetails->getPostalCode());
    }

    /**
     * @dataProvider customerDetailsProvider
     * @param CustomerDetails $customerDetails
     * @param array $data
     */
    public function testCity(CustomerDetails $customerDetails, $data)
    {
        $customerDetails->setCity($data['city']);
        $this->assertEquals($data['city'], $customerDetails->getCity());
    }

    /**
     * @dataProvider customerDetailsProvider
     * @param CustomerDetails $customerDetails
     * @param array $data
     */
    public function testEmailAddress(CustomerDetails $customerDetails, $data)
    {
        $customerDetails->setEmailAddress($data['emailAddress']);
        $this->assertEquals($data['emailAddress'], $customerDetails->getEmailAddress());
    }

    /**
     * @return array
     */
    public function customerDetailsProvider()
    {
        $data = [
            'firstName' => 'John',
            'lastName' => 'Doe',
            'streetName' => 'CommonStreet',
            'houseNumber' => '13a',
            'postalCode' => '1234 AB',
            'city' => 'Gotham city',
            'emailAddress' => 'john.doe@gotham.com',
        ];
        return [[
            new CustomerDetails(),
            $data,
        ]];
    }
}