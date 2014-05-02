<?php
/* @var $this DealersController */
/* @var $model Dealers */
?>

<?php
$this->breadcrumbs=array(
	'Dealers'=>array('index'),
	$model->Lisc_Name,
);

$this->menu=array(
    array('icon' => 'glyphicon glyphicon-list','label'=>'List Dealers', 'url'=>array('index')),
    array('icon' => 'glyphicon glyphicon-plus-sign','label'=>'Comment on Dealer', 'url'=>array('comments/create','dealer_id'=>$model->id)),
	array('icon' => 'glyphicon glyphicon-plus-sign','label'=>'Create Dealer', 'url'=>array('create')),
	array('icon' => 'glyphicon glyphicon-edit','label'=>'Update Dealer', 'url'=>array('update', 'id'=>$model->id)),
	array('icon' => 'glyphicon glyphicon-minus-sign','label'=>'Delete Dealer', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
    array('icon' => 'glyphicon glyphicon-tasks','label'=>'Manage Dealers', 'url'=>array('admin')),
);

$licenseType = "";

if ($model->Lic_Type == 01) { $licenseType = "Dealer in Firearms Other Than Destructive Devices (Includes Gunsmiths)"; }
elseif ($model->Lic_Type == 02) { $licenseType = "Pawnbroker in Firearms Other Than Destructive Devices"; }
elseif ($model->Lic_Type == 03) { $licenseType = "Collector of Curios and Relics"; }
elseif ($model->Lic_Type == 06) { $licenseType = "Manufacturer of Ammunition for Firearms"; }
elseif ($model->Lic_Type == 07) { $licenseType = "Manufacturer of Firearms Other Than Destructive Devices"; }
elseif ($model->Lic_Type == 08) { $licenseType = "Importer of Firearms Other Than Destructive Devices"; }
elseif ($model->Lic_Type == 09) { $licenseType = "Dealer in Destructive Devices"; }
elseif ($model->Lic_Type == 10) { $licenseType = "Manufacturer of Destructive Devices"; }
elseif ($model->Lic_Type == 11) { $licenseType = "Importer of Destructive Devices"; }

$year = substr(date("Y"),0,3) . substr($model->Lic_Xprdte, 0,1);
$monthCode = substr($model->Lic_Xprdte,-1);
$month = "";

if ($monthCode == 'A') { $month = "January"; }
elseif ($monthCode == 'B') { $month = "February"; }
elseif ($monthCode == 'C') { $month = "March"; }
elseif ($monthCode == 'D') { $month = "April"; }
elseif ($monthCode == 'E') { $month = "May"; }
elseif ($monthCode == 'F') { $month = "June"; }
elseif ($monthCode == 'G') { $month = "July"; }
elseif ($monthCode == 'H') { $month = "August"; }
elseif ($monthCode == 'J') { $month = "September"; }
elseif ($monthCode == 'K') { $month = "October"; }
elseif ($monthCode == 'L') { $month = "November"; }
elseif ($monthCode == 'M') { $month = "December"; }

$expirationDate = $month ." 1st, ". $year;

$acceptsTransfers = "";
if ($model->acceptTransfers == 0) { $acceptsTransfers = 'No'; }
elseif ($model->acceptTransfers == 1) { $acceptsTransfers = 'Yes'; }

?>

<?php echo BsHtml::pageHeader($model->Lisc_Name,'Details') ?>
<div class="container">
    <div class="row">
        <div class="col-md-4 col-lg-2"><h4>License #</h4></div>
        <div class="col-md-8 col-lg-10">
            <h2>
                <small>
                        <?php echo $model->Lic_Regn.'-'.$model->Lic_Dist.'-'.$model->Lic_Cnty.'-'.$model->Lic_Type.'-'.$model->Lic_Xprdte.'-'.$model->Lic_Seqn;?>
                        <br/>
                        Expires on: <?php echo $expirationDate; ?>
                </small>
            </h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 col-lg-2"><h4>License Type</h4></div>
        <div class="col-md-8 col-lg-10">
            <h4>
                <small>
                        <?php echo $licenseType; ?>
                </small>
            </h4>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 col-lg-2"><h4>Physical Address</h4></div>
        <div class="col-md-8 col-lg-10">
            <h4>
                <small>
                    <address>
                        <?php if($model->Busn_Name != '0') $model->Busn_Name.'<br />'; echo $model->Prem_Street.'<br />'.$model->Prem_City.', '.$model->Prem_State.' '.$model->Prem_ZipCode;?>
                    </address>
                </small>
            </h4>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 col-lg-2"><h4>Mailing Address</h4></div>
        <div class="col-md-8 col-lg-10">
            <h4>
                <small>
                    <address>
                        <?php  if($model->Busn_Name != '0') $model->Busn_Name.'<br />'; echo $model->Mail_Street.'<br />'.$model->Mail_City.', '.$model->Mail_State.' '.$model->Mail_ZipCode;?>
                    </address>
                </small>
            </h4>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 col-lg-2"><h4>Phone</h4></div>
        <div class="col-md-8 col-lg-10">
            <h4>
                <small>
                        <?php echo $model->Voice_Phone;?>
                </small>
            </h4>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 col-lg-2"><h4>Transfers</h4></div>
        <div class="col-md-8 col-lg-10">
            <h4>
                <small>
                        Accepts Transfers: <?php echo $acceptsTransfers;?>
                        <br/>
                        Transfer Fees: <?php echo $model->transferFee;?>
                </small>
            </h4>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 col-lg-2"><h4>Bio</h4></div>
        <div class="col-md-8 col-lg-10">
            <h4>
                <small>
                        <?php echo $model->bio;?>
                </small>
            </h4>
        </div>
    </div>
    
<?php
/* @var $cthis CommentsController */
/* @var $cdataProvider CActiveDataProvider */
$criteria = new CDbCriteria();

        $criteria->compare('dealer_id', $model->id, true, 'OR');
        

        $cdataProvider=new CActiveDataProvider("Comments", array('criteria'=>$criteria));
?>

<div class="row">
<div class="container">
<h2>Comments</h2>
    <?php $this->widget('bootstrap.widgets.BsListView',array(
	    'dataProvider'=>$cdataProvider,
	    'itemView'=>'comments',
    )); ?>
    </div>
</div> 
</div>

