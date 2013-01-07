<?php

namespace Safesea\Bundle\OpenEssayistBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * @Route("openEssayist")
 * @author nl3424
 *
 */
class DefaultController extends Controller
{
    /**
     * @Route("/hello/{name}")
     * @Template()
     */
    public function indexAction($name)
    {
        return array('name' => $name);
    }
    
    /**
     * @Route("/", name="openEssayist_main")
     * @Template()
     * @return multitype:
     */
    public function welcomeAction()
    {
    	return array();
    }
}
