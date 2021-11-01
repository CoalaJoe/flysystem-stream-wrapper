<?php
/*
 * This file is part of the flysystem-stream-wrapper package.
 *
 * (c) 2021 m2m server software gmbh <tech@m2m.at>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace M2MTech\FlysystemStreamWrapper\Flysystem\Exception;

final class DirectoryNotEmptyException extends StreamWrapperException
{
    protected const ERROR_MESSAGE = 'Directory not empty';
}