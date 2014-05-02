<?php
/* @var $this DealersController */
/* @var $data Dealers */
?>
<div class="view">
    <?php
        $this->beginWidget('bootstrap.widgets.BsPanel', array(
            'title' => CHtml::link(CHtml::encode($data->Lisc_Name),array('view','id'=>$data->id))
        ));
    ?>
    <address>
        <?php if($data->Busn_Name != '0') $data->Busn_Name.'<br />'; echo $data->Prem_Street.'<br />'.$data->Prem_City.', '.$data->Prem_State.' '.$data->Prem_ZipCode;?>
    </address>
    <?php
        $this->endWidget();
    ?>
    <br/>
</div>