<?php
/**
 * File JsonResponse.php
 *
 * @author Douglas Linsmeyer <douglas.linsmeyer@nerdery.com>
 */

namespace DLinsmeyer\Bundle\ApiBundle\Response\Type;

use Symfony\Component\HttpFoundation\Response;

/**
 * Class JsonResponse
 *
 * @package DLinsmeyer\Bundle\WebBundle\Response
 * @author Douglas Linsmeyer <douglas.linsmeyer@nerdery.com>
 */
class JsonResponse extends Response
{
    public function __construct($content = '', $status = 200, $headers = array())
    {
        parent::__construct($content, $status, $headers);

        $this->headers->set('Content-Type', 'application/json');
    }
}
