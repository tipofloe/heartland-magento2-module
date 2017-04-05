<?php
/**
 *  Heartland payment method model
 *
 *  @category    HPS
 *  @package     HPS_Heartland
 *  @author      Heartland Developer Portal <EntApp_DevPortal@e-hps.com>
 *  @copyright   Heartland (http://heartland.us)
 *  @license     https://github.com/hps/heartland-magento2-extension/blob/master/LICENSE.md
 */

namespace HPS\Heartland\Block\Form;
use Magento\Payment\Model\MethodInterface;

/**
 * Class Cc
 * @property \Magento\Framework\View\Element\Template\Context $context,
 * @property \Magento\Payment\Model\Config $paymentConfig,
 * @const \Magento\Payment\Block\Form parent
 * @package HPS\Heartland\Block\Form
 */

class Cc extends \Magento\Payment\Block\Form\Cc
{
    protected $_template = 'HPS_Heartland::form/cc.phtml';

    /** in context gets stored cards from database for the selected customer
     * @return array
     * @throws \Exception
     */
    public function getCcTokens(){
        return \HPS\Heartland\Model\StoredCard::getStoredCardsAdmin($this->getData('method')->getData('info_instance')->getQuote()->getOrigData('customer_id'));
    }
    
    /**
     * Internal constructor, that is called from real constructor
     *
     * @return void
     */
    protected function _construct() {
        parent::_construct(); 
    }   
}
