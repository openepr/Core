<?php
/*
_____________________________________________________________________________
(C) Moorfields Eye Hospital NHS Foundation Trust, 2008-2011
(C) OpenEyes Foundation, 2011
This file is part of OpenEyes.
OpenEyes is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later version.
OpenEyes is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.
You should have received a copy of the GNU General Public License along with OpenEyes in a file titled COPYING. If not, see <http://www.gnu.org/licenses/>.
_____________________________________________________________________________
http://www.openeyes.org.uk   info@openeyes.org.uk
--
*/

$this->breadcrumbs=array(
        Yii::t('strings','Phrase By Specialties') => array('/admin/adminPhraseBySpecialty/index'),
        $sectionName => array('specialtyIndex', 'section_id'=>$sectionId),
        $firmName => array('phraseIndex', 'section_id'=>$sectionId, 'firm_id'=>$_GET['firm_id']),
	Yii::t('strings','Create')
);

$this->menu=array(
	array('label'=>Yii::t('strings','List phrasees by firm'), 'url'=>array('index')),
	array('label'=>Yii::t('strings','Manage phrases by firm'), 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('strings','Create PhraseByFirm')?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
