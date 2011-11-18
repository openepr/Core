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
	Yii::t('strings','Common Systemic Disorders')=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>Yii::t('strings','List CommonSystemicDisorder'), 'url'=>array('index')),
	array('label'=>Yii::t('strings','Create CommonSystemicDisorder'), 'url'=>array('create')),
	array('label'=>Yii::t('strings','Update CommonSystemicDisorder'), 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>Yii::t('strings','Delete CommonSystemicDisorder'), 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>Yii::t('strings','Are you sure you want to delete this item?'))),
	array('label'=>Yii::t('strings','Manage CommonSystemicDisorder'), 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('strings','View CommonSystemicDisorder')?> #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		array(
			'name' => 'disorder',
			'value' => CHtml::encode($model->disorder->term)
		)
	),
)); ?>
