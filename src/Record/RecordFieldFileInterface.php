<?php namespace DCarbone\AmberHat\Record;

/*
    AmberHat: A REDCap Client library written in PHP
    Copyright (C) 2015  Daniel Paul Carbone (daniel.p.carbone@gmail.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License along
    with this program; if not, write to the Free Software Foundation, Inc.,
    51 Franklin Street, Fifth Floor, Boston, MA 02110-1301 USA.
 */

/**
 * Interface RecordFieldFileInterface
 * @package DCarbone\AmberHat\File
 *
 * @property string basename
 * @property string filePath
 * @property string fileType
 * @property int fileSize
 */
interface RecordFieldFileInterface
{
    /**
     * @return string
     */
    public function getBasename();

    /**
     * @return string
     */
    public function getFilePath();

    /**
     * @return string
     */
    public function getFileType();

    /**
     * @return int
     */
    public function getFileSize();

    /**
     * @return string
     */
    public function getFileContents();

    /**
     * @return string
     */
    public function __toString();
}