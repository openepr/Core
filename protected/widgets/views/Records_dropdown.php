<?php
/**
 * OpenEyes
 *
 * (C) Moorfields Eye Hospital NHS Foundation Trust, 2008-2011
 * (C) OpenEyes Foundation, 2011-2013
 * This file is part of OpenEyes.
 * OpenEyes is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later version.
 * OpenEyes is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 * You should have received a copy of the GNU General Public License along with OpenEyes in a file titled COPYING. If not, see <http://www.gnu.org/licenses/>.
 *
 * @package OpenEyes
 * @link http://www.openeyes.org.uk
 * @author OpenEyes <info@openeyes.org.uk>
 * @copyright Copyright (c) 2008-2011, Moorfields Eye Hospital NHS Foundation Trust
 * @copyright Copyright (c) 2011-2013, OpenEyes Foundation
 * @license http://www.gnu.org/licenses/gpl-3.0.html The GNU General Public License V3.0
 */

$htmlOptions = array('class' => 'recordInput');
if (@$column_field['cycle_on_add']) {
	$htmlOptions['data-cycle-on-add'] = true;
}
if (@$column_field['once_per_row']) {
	$htmlOptions['data-once-per-row'] = true;
}
if (@$column_field['default']) {
	$htmlOptions['data-default'] = $column_field['default'];
}
if (@$column_field['id']) {
	$htmlOptions['id'] = $column_field['id'];
}
if (@$column_field['empty']) {
	$column_field['options'] = array('' => $column_field['empty']) + $column_field['options'];
}
echo CHtml::dropDownList($column_field['field'],@$column_field['default'],$column_field['options'],$htmlOptions);