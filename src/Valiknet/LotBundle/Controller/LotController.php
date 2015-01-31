<?php
namespace Valiknet\LotBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template as Template;

class LotController extends Controller
{
    /**
     * @Template()
     */
    public function indexAction()
    {
        $data = $this->get('doctrine.odm.mongodb.document_manager')->getRepository('ValiknetLotBundle:AbstractLot')->findAll();

        $timeNow = new \DateTime();

        return [
            "data" => $data,
            'timeNow' => $timeNow
        ];
    }
} 