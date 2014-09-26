<?php
/**
 * The Extension Lab
 *
 * @category    Theextensionlab
 * @package     Theextensionlab_Trustpilot
 * @copyright   Copyright (c) 2014 The Extension Lab (http://www.theextensionlab.com)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 * @author      James Anelay <jamesanelay@theextensionlab.com>
 */

/**
 * Trustbox height type by source model, with option to revert to default for widgets
 * dynamic|fixed|default
 *
 * @category   Theextensionlab
 * @package    Theextensionlab_Trustpilot
 * @author     James Anelay <jamesanelay@theextensionlab.com>
 */
class Theextensionlab_Trustpilot_Model_Adminhtml_System_Config_Source_Heighttypedefault
{

    /**
     * Options getter
     *
     * @return array
     */
    public function toOptionArray()
    {
        return array(
            array('value' => 'dynamic', 'label'=>Mage::helper('adminhtml')->__('Dynamic')),
            array('value' => 'fixed', 'label'=>Mage::helper('adminhtml')->__('Fixed')),
            array('value' => 'default', 'label'=>Mage::helper('adminhtml')->__('Use Config Default')),
        );
    }

    /**
     * Get options in "key-value" format
     *
     * @return array
     */
    public function toArray()
    {
        return array(
            'dynamic' => Mage::helper('adminhtml')->__('No'),
            'fixed' => Mage::helper('adminhtml')->__('Yes'),
            'default' => Mage::helper('adminhtml')->__('Use Config Default'),
        );
    }

}
