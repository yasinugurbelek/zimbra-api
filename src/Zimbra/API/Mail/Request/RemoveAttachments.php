<?php
/**
 * This file is part of the Zimbra API in PHP library.
 *
 * © Nguyen Van Nguyen <nguyennv1981@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Zimbra\API\Mail\Request;

use Zimbra\Soap\Request;
use Zimbra\Soap\Struct\MsgPartIds;

/**
 * RemoveAttachments request class
 *
 * @package   Zimbra
 * @category  API
 * @author    Nguyen Van Nguyen - nguyennv1981@gmail.com
 * @copyright Copyright © 2013 by Nguyen Van Nguyen.
 */
class RemoveAttachments extends Request
{
    /**
     * Specification ranking m
     * @var MsgPartIds
     */
    private $_m;

    /**
     * Constructor method for RemoveAttachments
     * @param  MsgPartIds $m
     * @return self
     */
    public function __construct(MsgPartIds $m)
    {
        parent::__construct();
        $this->_m = $m;
    }

    /**
     * Get or set m
     *
     * @param  MsgPartIds $m
     * @return MsgPartIds|self
     */
    public function m(MsgPartIds $m = null)
    {
        if(null === $m)
        {
            return $this->_m;
        }
        $this->_m = $m;
        return $this;
    }

    /**
     * Returns the array representation of this class 
     *
     * @return array
     */
    public function toArray()
    {
        $this->array += $this->_m->toArray('m');
        return parent::toArray();
    }

    /**
     * Method returning the xml representation of this class
     *
     * @return SimpleXML
     */
    public function toXml()
    {
        $this->xml->append($this->_m->toXml('m'));
        return parent::toXml();
    }
}
