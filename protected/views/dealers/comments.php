<?php
/* @var $this CommentsController */
/* @var $data Comments */
/* @var $dataProvider CActiveDataProvider */
/* @var $userdata User */
$criteria = new CDbCriteria();

        $criteria->compare('id', $data->user_ID, true, 'OR');
        

        $dataProvider=new CActiveDataProvider("User", array('criteria'=>$criteria));
        $dataProvider->getData();
        
        foreach ($dataProvider->data as $myuser)
        $userdata = $myuser;
?>

<div class="media">
  <div class="media-body">
    <h4 class="media-heading"><?php echo CHtml::encode($userdata->username); ?></h4>
    <?php echo CHtml::encode($data->comment); ?>
  </div>
</div>
<br/><br/>