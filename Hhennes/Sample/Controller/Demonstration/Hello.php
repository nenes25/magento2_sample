<?php
namespace Hhennes\Sample\Controller\Demonstration;

/**
 * Description of Hello
 *
 * @author advisa
 */
class Hello extends \Magento\Framework\App\Action\Action
{
    public function execute()
    {
        $this->_view->loadLayout();
        $this->_view->getLayout()->initMessages();
        $this->_view->renderLayout();
    }
}
