/**
 * HPS_Heartland Magento JS component
 *
 * @category    HPS
 * @package     HPS_Heartland
 * @author      Charles Simmons <charles.simmons@e-hps.com>
 * @copyright   HPS (http://heartland.us)
 * @license     https://github.com/hps/heartland-magento2-extension/blob/master/LICENSE.md
 */
/*browser:true*/
/*global define*/
define(
    [
        'uiComponent',
        'Magento_Checkout/js/model/payment/renderer-list'
    ],
    function (
        Component,
        rendererList
    ) {
        'use strict';
        rendererList.push(
            {
                type: 'hps_heartland',
                component: 'HPS_Heartland/js/view/payment/method-renderer/heartland-method'
            }
        );
        /** Add view logic here if needed */
        return Component.extend({});
        
    }
);