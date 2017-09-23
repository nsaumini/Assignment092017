<?php get_header(); ?>

<div class="page-content">
    <div class="container">
    	<div class="row">
    		<div class="col-md-6 col-md-offset-3">
    			<form id="form-book">
            		<div class="form-group">
            			<div class="row">
                			<div class="col-xs-12 col-sm-12 col-md-12">
                				<select class="form-control selectpicker" id="pickup" name="pickup" data-live-search="true">
                					<option value="">Choose</option>
                					<option value="sin">Singapore Changi Airport</option>
                					<option value="xsp">Seletar Airport</option>
                					<option value="wmkj">Senai Airport</option>
                					<option value="wmkkp">KL Airport</option>
                					<option value="wmkm">Malacca Airport</option>
                					<option value="wmkl">Langkawi Airport</option>
                				</select>
                			</div>
            			</div>

            			<div class="row">
                			<div class="col-xs-12 col-sm-12 col-md-12">
                				<select class="form-control selectpicker" id="dropoff" name="dropoff" data-live-search="true">
                					<option value="">Choose</option>
                					<option value="sin">Singapore Changi Airport</option>
                					<option value="xsp">Seletar Airport</option>
                					<option value="wmkj">Senai Airport</option>
                					<option value="wmkkp">KL Airport</option>
                					<option value="wmkm">Malacca Airport</option>
                					<option value="wmkl">Langkawi Airport</option>
                				</select>
                			</div>
            			</div>

            			<div class="row">
                			<div class="col-xs-12 col-sm-12 col-md-6 pull-left addtional">
                				<select class="form-control selectpicker" name="additional">
                					<option value="">Additional Service</option>
                					<option value="fa">Flight Attendant (+ $300)</option>
                					<option value="fk">Full Kitchen (+ $100)</option>
                					<option value="m">Massage (+ $50)</option>
                					<option value="j">Jacuzzi (+ $180)</option>
                				</select>
                			</div>

                			<div class="col-xs-12 col-sm-12 col-md-6 pull-right datetime">
                				<input name="datetime" type="text" class="form-control datepicker" value="" placeholder="Date">
                			</div>
            			</div>

            			<div class="row">
            				<div class="col-xs-12 col-sm-12 col-md-12">
                				<button type="button" class="btn btn-green form-control btn-book">
                					<strong>
                						<span class="pull-left">Request a Jet</span>
                						<span class="pull-right">$199</span>
                					</strong>
            					</button>
            				</div>
            			</div>
            		</div>
            	</form>
    		</div>
    	</div>
	</div>
</div>
<!-- /.page-content -->

<script>
jQuery(document).ready(function($) {
	var tomorrow = new Date();
	tomorrow.setDate(tomorrow.getDate() + 1);

    $('.datepicker').datetimepicker({
    	dateFormat	: 'dd M yy',
    	timeFormat	: 'HH:mm',
    	autoClose	: true,
    	minDate		: tomorrow
    });
});
</script>

<?php get_footer(); ?>
