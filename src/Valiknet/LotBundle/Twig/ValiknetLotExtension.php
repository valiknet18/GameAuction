<?php
namespace Valiknet\LotBundle\Twig;


class ValiknetLotExtension extends \Twig_Extension
{
    public function getFilters()
    {
        return [
            new \Twig_SimpleFilter('valiknet_lot_typelot', [$this, 'typeLot']),
            new \Twig_SimpleFilter('valiknet_lot_time_to_finish', [$this, 'timeToFinish']),
        ];
    }

    public function typeLot($object)
    {
        switch (get_class($object)) {
            case 'Valiknet\LotBundle\Document\Lineage2Account':
                return  'Lineage 2';
            case 'Valiknet\LotBundle\Document\WowAccount':
                return 'World of Warcraft';
            default:
                return 'Another game';
        }
    }

    public function timeToFinish(\DateTime $finishTime)
    {
        $currentTime = new \DateTime();
        $difference = $finishTime->diff($currentTime);

        return ($difference->d * 24) + $difference->h;
    }

    public function getName()
    {
        return 'valiknet_lot_extension';
    }
} 