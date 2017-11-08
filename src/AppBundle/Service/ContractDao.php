<?php
/**
 * ContractDao class file
 *
 * PHP Version 5.6
 *
 * @category Service
 *
 * @package AppBundle\Service
 *
 * @author Guillaume <guillaume.torres@soprasteria.com>
 */
namespace AppBundle\Service;

use AppBundle\Entity\Contract;
use Symfony\Component\HttpKernel\Client;

/**
 * ContractDao class
 *
 * @category Service
 */
class ContractDao
{
    protected $requestBuilder;

    /**
     * ContractDao constructor.
     *
     * @param RequestBuilder $requestBuilder
     */
    public function __construct(RequestBuilder $requestBuilder)
    {
        $this->requestBuilder = $requestBuilder;
    }

    /**
     * ContractDao constructor.
     *
     * @param Contract $contract
     */
    public function insert(Contract $contract)
    {
        $this->requestBuilder
            ->build()
            ->send();
    }

    public function search(){
    }

    public function show(){
    }

    public function edit(){
    }

    public function activate(){
    }

    public function terminate(){
    }
}

