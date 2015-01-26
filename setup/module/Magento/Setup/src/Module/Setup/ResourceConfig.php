<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Setup\Module\Setup;

/**
 * Simplified resource config for Setup tools
 */
class ResourceConfig implements \Magento\Framework\App\Resource\ConfigInterface
{
    /**
     * {@inheritdoc}
     */
    public function getConnectionName($resourceName)
    {
        return \Magento\Framework\App\Resource\Config::DEFAULT_SETUP_CONNECTION;
    }
}
