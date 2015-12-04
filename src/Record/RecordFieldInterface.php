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
 * Interface RecordFieldInterface
 * @package DCarbone\AmberHat\Record
 *
 * @property string responseFieldName
 * @property string fieldValue
 * @property bool firstFieldInItem
 * @property bool lastFieldInItem
 */
interface RecordFieldInterface
{
    /**
     * @return string
     */
    public function getResponseFieldName();

    /**
     * @return string
     */
    public function getFieldValue();

    /**
     * @return \DCarbone\AmberHat\Metadata\MetadataItemInterface|null
     */
    public function getMetadataItem();

    /**
     * @return boolean
     */
    public function isFirstFieldInItem();

    /**
     * @return boolean
     */
    public function isLastFieldInItem();
}