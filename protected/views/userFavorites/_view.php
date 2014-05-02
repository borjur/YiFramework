<?php
/* @var $this UserFavoritesController */
/* @var $data UserFavorites */
/* @var $ddataProvider CActiveDataProvider */
/* @var $dealer Dealers */
$criteria = new CDbCriteria();

$criteria->compare('id', $data->dealer_ID, true, 'AND');
        

$ddataProvider=new CActiveDataProvider("Dealers", array('criteria'=>$criteria));
$ddataProvider->getData();
        
foreach ($ddataProvider->data as $mdealer)
    if($mdealer->id == $data->dealer_ID)
    $dealer = $mdealer;
?>

<div class="row">
    <h3>
	<?php echo CHtml::link(CHtml::encode($dealer->Lisc_Name),array('/dealers/view','id'=>$dealer->id)); ?>
    </h3>

</div>