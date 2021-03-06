<?php
/*****************************************************************************************
 * X2Engine Open Source Edition is a customer relationship management program developed by
 * X2Engine, Inc. Copyright (C) 2011-2015 X2Engine Inc.
 * 
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY X2ENGINE, X2ENGINE DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 * 
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU Affero General Public License for more
 * details.
 * 
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 * 
 * You can contact X2Engine, Inc. P.O. Box 66752, Scotts Valley,
 * California 95067, USA. or at email address contact@x2engine.com.
 * 
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 * 
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * X2Engine" logo. If the display of the logo is not reasonably feasible for
 * technical reasons, the Appropriate Legal Notices must display the words
 * "Powered by X2Engine".
 *****************************************************************************************/
?>
<h2><?php echo Yii::t('admin','How to set up a Web Lead form'); ?></h2>
<p>
<?php echo CHtml::image(Yii::app()->getBaseUrl().'/images/webLead.gif','',array('style'=>'float:left;margin-right:10px;border:1px solid #ddd;')); ?>
<?php echo Yii::t('admin','The Web Lead capture form is very useful if you have a public website. Visitors can submit their contact information and questions, and X2Engine will automatically create contact records for them.'); ?>
<br /><br />
<?php echo Yii::t('admin','To install the web lead form, simply copy the following HTML into your website:'); ?>

<div style="width:520px; float:right;" id="code-snippet">
<?php
$webLead = (!empty($_SERVER['HTTPS'])) ? "https://".$_SERVER['SERVER_NAME'] : "http://".$_SERVER['SERVER_NAME'];
$webLead .= Yii::app()->getBaseUrl().'/webLead.php';


echo CHtml::encode('<iframe hspace="0" scrolling="no" src="'.$webLead.'" frameborder="0" width="300" height="320"></iframe>'); ?>
</div>
</p>