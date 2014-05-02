<?php
/* @var $this DealersController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Dealers',
);

$this->menu=array(
    array('icon' => 'glyphicon glyphicon-plus-sign','label'=>'Create Dealers', 'url'=>array('create')),
    array('icon' => 'glyphicon glyphicon-tasks','label'=>'Manage Dealers', 'url'=>array('admin')),
);
?>

<script>
function codeLatLng(position) {
  var geocoder;
  geocoder = new google.maps.Geocoder();
  var lat = parseFloat(position.coords.latitude);
  var lng = parseFloat(position.coords.longitude);
  var latlng = new google.maps.LatLng(lat, lng);
  geocoder.geocode({'latLng': latlng}, function(results, status) {
    if (status == google.maps.GeocoderStatus.OK) {
      if (results[1]) {
        var zipcode = results[2].formatted_address.split(",")[1];
        zipcode = zipcode.substring(zipcode.lastIndexOf(' ')+1);
        document.getElementById('q').value = zipcode;
      } else {
        alert('Sorry! We couldn\'t determine your current location.');
      }
    } else {
      alert('Geocoder failed due to: ' + status);
    }
  });
}

function getLocation(){
    if (navigator.geolocation){
        navigator.geolocation.getCurrentPosition(codeLatLng);
    }else{
        alert("Geolocation is not supported by this browser.");
    }
}
</script>

<?php echo BsHtml::pageHeader('Dealers') ?>

<form method="get" role="form" class="form-inline">
<input type="hidden" name="r" value="dealers" />
<div class="row">
<div class="col-lg-4 col-md-4 col-sm-6 col-xs-8">
<div class="input-group">
<input type="search" class="form-control" placeholder="Zip Code" id="q" name="q" value="<?=isset($_GET['q']) ? CHtml::encode($_GET['q']) : '' ; ?>" />
<span class="input-group-btn">
        <button class="btn btn-default" type="button" style="height: 34px;" data-toggle="tooltip" data-placement="top" title="Use My Current Location" onclick="getLocation();"><span class="glyphicon glyphicon-map-marker"></span></button>
</span>
</div>
</div>
<div class="col-lg-8 col-md-8 col-sm-6 col-xs-4">
<?php
echo BsHtml::submitButton('<span class="glyphicon glyphicon-search"></span> Search', array(
    'color' => BsHtml::BUTTON_COLOR_PRIMARY
));
?>
</div>

  </div>
</form>
<br/>
<?php $this->widget('bootstrap.widgets.BsListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>