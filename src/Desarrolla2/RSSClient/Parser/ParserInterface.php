<?php

/**
 * This file is part of the RSSClient proyect.
 *
 * Copyright (c)
 * Daniel González Cerviño <daniel.gonzalez@freelancemadrid.es>
 *
 * This source file is subject to the MIT license that is bundled
 * with this package in the file LICENSE.
 */

namespace Desarrolla2\RSSClient\Parser;

use Desarrolla2\RSSClient\Handler\Sanitizer\SanitizerHandlerInterface;

/**
 *
 * Description of ParserInterface
 *
 * @author : Daniel González Cerviño <daniel.gonzalez@freelancemadrid.es>
 * @file : ParserInterface.php , UTF-8
 * @date : Mar 15, 2013 , 2:34:30 PM
 */
interface ParserInterface
{
    public function parse($feed, SanitizerHandlerInterface $sanitizer);
}
