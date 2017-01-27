<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Portal\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use ZFT\User;

/**
 * Class IndexController
 * @package Portal\Controller
 */
class IndexController extends AbstractActionController
{

    /**
     * @var User\Repository
     */
    private $userRepository;

    /**
     * IndexController constructor.
     * @param User\Repository $userRepository
     */
    public function __construct(User\Repository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    /**
     * @return ViewModel
     */
    public function indexAction()
    {
//        $user = new User();
        $this->userRepository->getUserById(1);
        return new ViewModel();
    }
}
