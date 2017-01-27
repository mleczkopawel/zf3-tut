<?php
/**
 * User: mlecz
 * Date: 27.01.2017
 * Time: 11:36
 */

namespace ZFT\User;


use ZFT\User;

/**
 * Class Repository
 * @package ZFT\User
 */
class Repository
{
    /**
     * Repository constructor.
     * @param IdentityMapInterface $identityMap
     * @param DataMapperInterface $dataMapper
     */
    public function __construct(IdentityMapInterface $identityMap, DataMapperInterface $dataMapper)
    {

    }

    public function getUserById($id) {
        return new User();
    }
}