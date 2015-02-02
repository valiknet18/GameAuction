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
        $dm = $this->get('doctrine.odm.mongodb.document_manager');

        $data = $dm->getRepository('ValiknetLotBundle:AbstractLot')->findBy(["finishLot" => false]);
        $data = $this->get('valiknet.lot.service.lot_extension')->updateLots($data, $dm);

        $dm->flush();

        return [
            "data" => $data
        ];
    }
} 