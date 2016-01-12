<?php
namespace Hhennes\Sample\Model;

class Observer
{

    /**
     * Action exécutée après l'enregistrement d'une page
     * @param \Magento\Framework\Event\Observer $observer
     */
    public function cmsPageSaveAfter( \Magento\Framework\Event\Observer $observer ) {

        die('Observer bien récupéré');

    }

}
