<?php
namespace Valiknet\LotBundle\Twig;


class ValiknetLotExtension extends \Twig_Extension
{
    public function getFilters()
    {
        return [
            new \Twig_SimpleFilter('valiknet_lot_typelot', [$this, 'typeLot'])
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

    public function getName()
    {
        return 'valiknet_lot_extension';
    }
} 