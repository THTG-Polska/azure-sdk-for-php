<?php
/**
 * LICENSE: Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 * 
 * PHP version 5
 *
 * @category  Microsoft
 * @package   WindowsAzure\ServiceBus\Models
 * @author    Azure PHP SDK <azurephpsdk@microsoft.com>
 * @copyright 2012 Microsoft Corporation
 * @license   http://www.apache.org/licenses/LICENSE-2.0  Apache License 2.0
 * @link      http://pear.php.net/package/azure-sdk-for-php
 */
namespace WindowsAzure\ServiceBus\Models;

/**
 * The base class for rule filter.
 *
 * @category  Microsoft
 * @package   WindowsAzure\ServiceBus\Models
 * @author    Azure PHP SDK <azurephpsdk@microsoft.com>
 * @copyright 2012 Microsoft Corporation
 * @license   http://www.apache.org/licenses/LICENSE-2.0  Apache License 2.0
 * @version   Release: @package_version@
 * @link      http://pear.php.net/package/azure-sdk-for-php
 */

class Filter 
{
    /**
     * The compatibility level of the filter. 
     * 
     * @var string 
     */
    private $_compatibilityLevel;

    /**
     * Creates a filter with default parameters. 
     */
    public function __construct()
    {
    }

    /**
     * Gets the compatibility level. 
     * 
     * @return string 
     */
    public function getCompatiblityLevel()
    {
        return $this->_compatibilityLevel;
    }

    /**
     * Sets the compatibility level. 
     * 
     * @param string $compatibilityLevel The compatibility level. 
     */
    public function setCompatibilityLevel($compatibilityLevel)
    {
        $this->_compatibilityLevel = $compatibilityLevel;
    }
}
?>
