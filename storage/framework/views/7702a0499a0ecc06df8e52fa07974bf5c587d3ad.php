<?php $__env->startSection('content'); ?>

<div class="container">	
	<div class="row">
		<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 datebook-padding-less pull-right">

		<div class="datebook-content">

			
<div class="panel panel-default datebook-no-border">
	<div class="panel-body">
				
<h1>Create Profile</h1>

<hr>




<form action="<?php echo e(url('/')); ?>/registration/" method="post" class="form-horizontal">

	<input name="action" value="change" type="hidden">
	<input id="datebook-alllocations" name="alllocations" value="1" type="hidden">

	<div class="form-group ">
		<label for="datebook-profile-name" class="col-sm-3 control-label">Name<i>*</i></label>
		<div class="col-sm-6">
			<input name="profile_name" id="datebook-profile-name" value="" class="form-control" type="text">
					</div>
	</div>


	
	<div class="form-group ">
		<label for="datebook-country" class="col-sm-3 control-label">City<i>*</i></label>
		<div class="col-sm-6 datebook-profile-country">

			<div class="input-group">

				
				<input id="datebook-locationcountry" name="country" value="" type="hidden">
				<input id="datebook-locationregion" name="region" value="" type="hidden">
				<input id="datebook-locationcity" name="city" value="" type="hidden">
				
				<div class="input-group-btn">

					<button aria-expanded="false" aria-haspopup="true" data-toggle="dropdown" class="btn btn-default dropdown dropdown-toggle" type="button"><span class="caret"></span></button>

				</div>
				
				
<div class="datebook-countries-overlay">
	<div class="datebook-dropdowncountry">
	
		<a class="btn btn-default btn-close-country" href="#" onclick="return false;">Close</a>

		<div class="datebook-dropdownbox">
			<div class="datebook-countrybox">

				<h3>Select country</h3><div class="row datebook-countrymenu"><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="1" class="datebook-cat-item datebook-countryid" title="Afghanistan" href="#">Afghanistan</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="2" class="datebook-cat-item datebook-countryid" title="Aland Islands" href="#">Aland Islands</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="3" class="datebook-cat-item datebook-countryid" title="Albania" href="#">Albania</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="4" class="datebook-cat-item datebook-countryid" title="Algeria" href="#">Algeria</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="5" class="datebook-cat-item datebook-countryid" title="American Samoa" href="#">American Samoa</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="6" class="datebook-cat-item datebook-countryid" title="Andorra" href="#">Andorra</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="7" class="datebook-cat-item datebook-countryid" title="Angola" href="#">Angola</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="8" class="datebook-cat-item datebook-countryid" title="Anguilla" href="#">Anguilla</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="9" class="datebook-cat-item datebook-countryid" title="Antigua and Barbuda" href="#">Antigua and Barbuda</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="10" class="datebook-cat-item datebook-countryid" title="Argentina" href="#">Argentina</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="11" class="datebook-cat-item datebook-countryid" title="Armenia" href="#">Armenia</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="12" class="datebook-cat-item datebook-countryid" title="Aruba" href="#">Aruba</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="13" class="datebook-cat-item datebook-countryid" title="Australia" href="#">Australia</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="14" class="datebook-cat-item datebook-countryid" title="Austria" href="#">Austria</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="15" class="datebook-cat-item datebook-countryid" title="Azerbaijan" href="#">Azerbaijan</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="16" class="datebook-cat-item datebook-countryid" title="Bahamas" href="#">Bahamas</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="17" class="datebook-cat-item datebook-countryid" title="Bahrain" href="#">Bahrain</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="18" class="datebook-cat-item datebook-countryid" title="Bangladesh" href="#">Bangladesh</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="19" class="datebook-cat-item datebook-countryid" title="Barbados" href="#">Barbados</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="20" class="datebook-cat-item datebook-countryid" title="Belarus" href="#">Belarus</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="21" class="datebook-cat-item datebook-countryid" title="Belgium" href="#">Belgium</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="22" class="datebook-cat-item datebook-countryid" title="Belize" href="#">Belize</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="23" class="datebook-cat-item datebook-countryid" title="Benin" href="#">Benin</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="24" class="datebook-cat-item datebook-countryid" title="Bermuda" href="#">Bermuda</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="25" class="datebook-cat-item datebook-countryid" title="Bhutan" href="#">Bhutan</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="26" class="datebook-cat-item datebook-countryid" title="Bolivia" href="#">Bolivia</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="27" class="datebook-cat-item datebook-countryid" title="Bonaire, Saint Eustatius and Saba" href="#">Bonaire, Saint Eustatius and Saba</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="28" class="datebook-cat-item datebook-countryid" title="Bosnia and Herzegovina" href="#">Bosnia and Herzegovina</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="29" class="datebook-cat-item datebook-countryid" title="Botswana" href="#">Botswana</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="30" class="datebook-cat-item datebook-countryid" title="Brazil" href="#">Brazil</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="31" class="datebook-cat-item datebook-countryid" title="British Virgin Islands" href="#">British Virgin Islands</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="32" class="datebook-cat-item datebook-countryid" title="Brunei" href="#">Brunei</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="33" class="datebook-cat-item datebook-countryid" title="Bulgaria" href="#">Bulgaria</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="34" class="datebook-cat-item datebook-countryid" title="Burkina Faso" href="#">Burkina Faso</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="35" class="datebook-cat-item datebook-countryid" title="Burundi" href="#">Burundi</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="36" class="datebook-cat-item datebook-countryid" title="Cambodia" href="#">Cambodia</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="37" class="datebook-cat-item datebook-countryid" title="Cameroon" href="#">Cameroon</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="38" class="datebook-cat-item datebook-countryid" title="Canada" href="#">Canada</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="39" class="datebook-cat-item datebook-countryid" title="Cape Verde" href="#">Cape Verde</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="40" class="datebook-cat-item datebook-countryid" title="Cayman Islands" href="#">Cayman Islands</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="41" class="datebook-cat-item datebook-countryid" title="Central African Republic" href="#">Central African Republic</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="42" class="datebook-cat-item datebook-countryid" title="Chad" href="#">Chad</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="43" class="datebook-cat-item datebook-countryid" title="Chile" href="#">Chile</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="44" class="datebook-cat-item datebook-countryid" title="China" href="#">China</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="45" class="datebook-cat-item datebook-countryid" title="Christmas Island" href="#">Christmas Island</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="46" class="datebook-cat-item datebook-countryid" title="Cocos Islands" href="#">Cocos Islands</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="47" class="datebook-cat-item datebook-countryid" title="Colombia" href="#">Colombia</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="48" class="datebook-cat-item datebook-countryid" title="Comoros" href="#">Comoros</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="49" class="datebook-cat-item datebook-countryid" title="Cook Islands" href="#">Cook Islands</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="50" class="datebook-cat-item datebook-countryid" title="Costa Rica" href="#">Costa Rica</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="51" class="datebook-cat-item datebook-countryid" title="Croatia" href="#">Croatia</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="52" class="datebook-cat-item datebook-countryid" title="Cuba" href="#">Cuba</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="53" class="datebook-cat-item datebook-countryid" title="Curacao" href="#">Curacao</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="54" class="datebook-cat-item datebook-countryid" title="Cyprus" href="#">Cyprus</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="55" class="datebook-cat-item datebook-countryid" title="Czech Republic" href="#">Czech Republic</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="56" class="datebook-cat-item datebook-countryid" title="Democratic Republic of the Congo" href="#">Democratic Republic of the Congo</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="57" class="datebook-cat-item datebook-countryid" title="Denmark" href="#">Denmark</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="58" class="datebook-cat-item datebook-countryid" title="Djibouti" href="#">Djibouti</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="59" class="datebook-cat-item datebook-countryid" title="Dominica" href="#">Dominica</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="60" class="datebook-cat-item datebook-countryid" title="Dominican Republic" href="#">Dominican Republic</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="61" class="datebook-cat-item datebook-countryid" title="East Timor" href="#">East Timor</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="62" class="datebook-cat-item datebook-countryid" title="Ecuador" href="#">Ecuador</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="63" class="datebook-cat-item datebook-countryid" title="Egypt" href="#">Egypt</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="64" class="datebook-cat-item datebook-countryid" title="El Salvador" href="#">El Salvador</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="65" class="datebook-cat-item datebook-countryid" title="Equatorial Guinea" href="#">Equatorial Guinea</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="66" class="datebook-cat-item datebook-countryid" title="Eritrea" href="#">Eritrea</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="67" class="datebook-cat-item datebook-countryid" title="Estonia" href="#">Estonia</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="68" class="datebook-cat-item datebook-countryid" title="Ethiopia" href="#">Ethiopia</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="69" class="datebook-cat-item datebook-countryid" title="Falkland Islands" href="#">Falkland Islands</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="70" class="datebook-cat-item datebook-countryid" title="Faroe Islands" href="#">Faroe Islands</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="71" class="datebook-cat-item datebook-countryid" title="Fiji" href="#">Fiji</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="72" class="datebook-cat-item datebook-countryid" title="Finland" href="#">Finland</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="73" class="datebook-cat-item datebook-countryid" title="France" href="#">France</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="74" class="datebook-cat-item datebook-countryid" title="French Guiana" href="#">French Guiana</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="75" class="datebook-cat-item datebook-countryid" title="French Polynesia" href="#">French Polynesia</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="76" class="datebook-cat-item datebook-countryid" title="French Southern Territories" href="#">French Southern Territories</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="77" class="datebook-cat-item datebook-countryid" title="Gabon" href="#">Gabon</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="78" class="datebook-cat-item datebook-countryid" title="Gambia" href="#">Gambia</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="79" class="datebook-cat-item datebook-countryid" title="Georgia" href="#">Georgia</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="80" class="datebook-cat-item datebook-countryid" title="Germany" href="#">Germany</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="81" class="datebook-cat-item datebook-countryid" title="Ghana" href="#">Ghana</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="82" class="datebook-cat-item datebook-countryid" title="Gibraltar" href="#">Gibraltar</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="83" class="datebook-cat-item datebook-countryid" title="Greece" href="#">Greece</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="84" class="datebook-cat-item datebook-countryid" title="Greenland" href="#">Greenland</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="85" class="datebook-cat-item datebook-countryid" title="Grenada" href="#">Grenada</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="86" class="datebook-cat-item datebook-countryid" title="Guadeloupe" href="#">Guadeloupe</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="87" class="datebook-cat-item datebook-countryid" title="Guam" href="#">Guam</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="88" class="datebook-cat-item datebook-countryid" title="Guatemala" href="#">Guatemala</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="89" class="datebook-cat-item datebook-countryid" title="Guernsey" href="#">Guernsey</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="90" class="datebook-cat-item datebook-countryid" title="Guinea" href="#">Guinea</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="91" class="datebook-cat-item datebook-countryid" title="Guinea-Bissau" href="#">Guinea-Bissau</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="92" class="datebook-cat-item datebook-countryid" title="Guyana" href="#">Guyana</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="93" class="datebook-cat-item datebook-countryid" title="Haiti" href="#">Haiti</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="94" class="datebook-cat-item datebook-countryid" title="Honduras" href="#">Honduras</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="95" class="datebook-cat-item datebook-countryid" title="Hong Kong" href="#">Hong Kong</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="96" class="datebook-cat-item datebook-countryid" title="Hungary" href="#">Hungary</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="97" class="datebook-cat-item datebook-countryid" title="Iceland" href="#">Iceland</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="98" class="datebook-cat-item datebook-countryid" title="India" href="#">India</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="99" class="datebook-cat-item datebook-countryid" title="Indonesia" href="#">Indonesia</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="100" class="datebook-cat-item datebook-countryid" title="Iran" href="#">Iran</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="101" class="datebook-cat-item datebook-countryid" title="Iraq" href="#">Iraq</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="102" class="datebook-cat-item datebook-countryid" title="Ireland" href="#">Ireland</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="103" class="datebook-cat-item datebook-countryid" title="Isle of Man" href="#">Isle of Man</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="104" class="datebook-cat-item datebook-countryid" title="Israel" href="#">Israel</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="105" class="datebook-cat-item datebook-countryid" title="Italy" href="#">Italy</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="106" class="datebook-cat-item datebook-countryid" title="Ivory Coast" href="#">Ivory Coast</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="107" class="datebook-cat-item datebook-countryid" title="Jamaica" href="#">Jamaica</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="108" class="datebook-cat-item datebook-countryid" title="Japan" href="#">Japan</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="109" class="datebook-cat-item datebook-countryid" title="Jersey" href="#">Jersey</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="110" class="datebook-cat-item datebook-countryid" title="Jordan" href="#">Jordan</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="111" class="datebook-cat-item datebook-countryid" title="Kazakhstan" href="#">Kazakhstan</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="112" class="datebook-cat-item datebook-countryid" title="Kenya" href="#">Kenya</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="113" class="datebook-cat-item datebook-countryid" title="Kiribati" href="#">Kiribati</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="114" class="datebook-cat-item datebook-countryid" title="Kosovo" href="#">Kosovo</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="115" class="datebook-cat-item datebook-countryid" title="Kuwait" href="#">Kuwait</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="116" class="datebook-cat-item datebook-countryid" title="Kyrgyzstan" href="#">Kyrgyzstan</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="117" class="datebook-cat-item datebook-countryid" title="Laos" href="#">Laos</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="118" class="datebook-cat-item datebook-countryid" title="Latvia" href="#">Latvia</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="119" class="datebook-cat-item datebook-countryid" title="Lebanon" href="#">Lebanon</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="120" class="datebook-cat-item datebook-countryid" title="Lesotho" href="#">Lesotho</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="121" class="datebook-cat-item datebook-countryid" title="Liberia" href="#">Liberia</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="122" class="datebook-cat-item datebook-countryid" title="Libya" href="#">Libya</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="123" class="datebook-cat-item datebook-countryid" title="Liechtenstein" href="#">Liechtenstein</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="124" class="datebook-cat-item datebook-countryid" title="Lithuania" href="#">Lithuania</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="125" class="datebook-cat-item datebook-countryid" title="Luxembourg" href="#">Luxembourg</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="126" class="datebook-cat-item datebook-countryid" title="Macao" href="#">Macao</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="127" class="datebook-cat-item datebook-countryid" title="Macedonia" href="#">Macedonia</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="128" class="datebook-cat-item datebook-countryid" title="Madagascar" href="#">Madagascar</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="129" class="datebook-cat-item datebook-countryid" title="Malawi" href="#">Malawi</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="130" class="datebook-cat-item datebook-countryid" title="Malaysia" href="#">Malaysia</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="131" class="datebook-cat-item datebook-countryid" title="Maldives" href="#">Maldives</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="132" class="datebook-cat-item datebook-countryid" title="Mali" href="#">Mali</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="133" class="datebook-cat-item datebook-countryid" title="Malta" href="#">Malta</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="134" class="datebook-cat-item datebook-countryid" title="Marshall Islands" href="#">Marshall Islands</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="135" class="datebook-cat-item datebook-countryid" title="Martinique" href="#">Martinique</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="136" class="datebook-cat-item datebook-countryid" title="Mauritania" href="#">Mauritania</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="137" class="datebook-cat-item datebook-countryid" title="Mauritius" href="#">Mauritius</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="138" class="datebook-cat-item datebook-countryid" title="Mayotte" href="#">Mayotte</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="139" class="datebook-cat-item datebook-countryid" title="Mexico" href="#">Mexico</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="140" class="datebook-cat-item datebook-countryid" title="Micronesia" href="#">Micronesia</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="141" class="datebook-cat-item datebook-countryid" title="Moldova" href="#">Moldova</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="142" class="datebook-cat-item datebook-countryid" title="Monaco" href="#">Monaco</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="143" class="datebook-cat-item datebook-countryid" title="Mongolia" href="#">Mongolia</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="144" class="datebook-cat-item datebook-countryid" title="Montenegro" href="#">Montenegro</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="145" class="datebook-cat-item datebook-countryid" title="Montserrat" href="#">Montserrat</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="146" class="datebook-cat-item datebook-countryid" title="Morocco" href="#">Morocco</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="147" class="datebook-cat-item datebook-countryid" title="Mozambique" href="#">Mozambique</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="148" class="datebook-cat-item datebook-countryid" title="Myanmar" href="#">Myanmar</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="149" class="datebook-cat-item datebook-countryid" title="Namibia" href="#">Namibia</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="150" class="datebook-cat-item datebook-countryid" title="Nauru" href="#">Nauru</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="151" class="datebook-cat-item datebook-countryid" title="Nepal" href="#">Nepal</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="152" class="datebook-cat-item datebook-countryid" title="Netherlands" href="#">Netherlands</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="153" class="datebook-cat-item datebook-countryid" title="New Caledonia" href="#">New Caledonia</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="154" class="datebook-cat-item datebook-countryid" title="New Zealand" href="#">New Zealand</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="155" class="datebook-cat-item datebook-countryid" title="Nicaragua" href="#">Nicaragua</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="156" class="datebook-cat-item datebook-countryid" title="Niger" href="#">Niger</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="157" class="datebook-cat-item datebook-countryid" title="Nigeria" href="#">Nigeria</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="158" class="datebook-cat-item datebook-countryid" title="Niue" href="#">Niue</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="159" class="datebook-cat-item datebook-countryid" title="Norfolk Island" href="#">Norfolk Island</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="160" class="datebook-cat-item datebook-countryid" title="North Korea" href="#">North Korea</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="161" class="datebook-cat-item datebook-countryid" title="Northern Mariana Islands" href="#">Northern Mariana Islands</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="162" class="datebook-cat-item datebook-countryid" title="Norway" href="#">Norway</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="163" class="datebook-cat-item datebook-countryid" title="Oman" href="#">Oman</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="164" class="datebook-cat-item datebook-countryid" title="Pakistan" href="#">Pakistan</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="165" class="datebook-cat-item datebook-countryid" title="Palau" href="#">Palau</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="166" class="datebook-cat-item datebook-countryid" title="Palestinian Territory" href="#">Palestinian Territory</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="167" class="datebook-cat-item datebook-countryid" title="Panama" href="#">Panama</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="168" class="datebook-cat-item datebook-countryid" title="Papua New Guinea" href="#">Papua New Guinea</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="169" class="datebook-cat-item datebook-countryid" title="Paraguay" href="#">Paraguay</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="170" class="datebook-cat-item datebook-countryid" title="Peru" href="#">Peru</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="171" class="datebook-cat-item datebook-countryid" title="Philippines" href="#">Philippines</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="172" class="datebook-cat-item datebook-countryid" title="Pitcairn" href="#">Pitcairn</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="173" class="datebook-cat-item datebook-countryid" title="Poland" href="#">Poland</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="174" class="datebook-cat-item datebook-countryid" title="Portugal" href="#">Portugal</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="175" class="datebook-cat-item datebook-countryid" title="Puerto Rico" href="#">Puerto Rico</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="176" class="datebook-cat-item datebook-countryid" title="Qatar" href="#">Qatar</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="177" class="datebook-cat-item datebook-countryid" title="Republic of the Congo" href="#">Republic of the Congo</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="178" class="datebook-cat-item datebook-countryid" title="Reunion" href="#">Reunion</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="179" class="datebook-cat-item datebook-countryid" title="Romania" href="#">Romania</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="180" class="datebook-cat-item datebook-countryid" title="Russia" href="#">Russia</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="181" class="datebook-cat-item datebook-countryid" title="Rwanda" href="#">Rwanda</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="182" class="datebook-cat-item datebook-countryid" title="Saint Barthelemy" href="#">Saint Barthelemy</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="183" class="datebook-cat-item datebook-countryid" title="Saint Helena" href="#">Saint Helena</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="184" class="datebook-cat-item datebook-countryid" title="Saint Kitts and Nevis" href="#">Saint Kitts and Nevis</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="185" class="datebook-cat-item datebook-countryid" title="Saint Lucia" href="#">Saint Lucia</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="186" class="datebook-cat-item datebook-countryid" title="Saint Martin" href="#">Saint Martin</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="187" class="datebook-cat-item datebook-countryid" title="Saint Pierre and Miquelon" href="#">Saint Pierre and Miquelon</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="188" class="datebook-cat-item datebook-countryid" title="Saint Vincent and the Grenadines" href="#">Saint Vincent and the Grenadines</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="189" class="datebook-cat-item datebook-countryid" title="Samoa" href="#">Samoa</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="190" class="datebook-cat-item datebook-countryid" title="San Marino" href="#">San Marino</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="191" class="datebook-cat-item datebook-countryid" title="Sao Tome and Principe" href="#">Sao Tome and Principe</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="192" class="datebook-cat-item datebook-countryid" title="Saudi Arabia" href="#">Saudi Arabia</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="193" class="datebook-cat-item datebook-countryid" title="Senegal" href="#">Senegal</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="194" class="datebook-cat-item datebook-countryid" title="Serbia" href="#">Serbia</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="195" class="datebook-cat-item datebook-countryid" title="Seychelles" href="#">Seychelles</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="196" class="datebook-cat-item datebook-countryid" title="Sierra Leone" href="#">Sierra Leone</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="197" class="datebook-cat-item datebook-countryid" title="Singapore" href="#">Singapore</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="198" class="datebook-cat-item datebook-countryid" title="Sint Maarten" href="#">Sint Maarten</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="199" class="datebook-cat-item datebook-countryid" title="Slovakia" href="#">Slovakia</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="200" class="datebook-cat-item datebook-countryid" title="Slovenia" href="#">Slovenia</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="201" class="datebook-cat-item datebook-countryid" title="Solomon Islands" href="#">Solomon Islands</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="202" class="datebook-cat-item datebook-countryid" title="Somalia" href="#">Somalia</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="203" class="datebook-cat-item datebook-countryid" title="South Africa" href="#">South Africa</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="204" class="datebook-cat-item datebook-countryid" title="South Georgia and the South Sandwich Islands" href="#">South Georgia and the South Sandwich Islands</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="205" class="datebook-cat-item datebook-countryid" title="South Korea" href="#">South Korea</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="206" class="datebook-cat-item datebook-countryid" title="South Sudan" href="#">South Sudan</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="207" class="datebook-cat-item datebook-countryid" title="Spain" href="#">Spain</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="208" class="datebook-cat-item datebook-countryid" title="Sri Lanka" href="#">Sri Lanka</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="209" class="datebook-cat-item datebook-countryid" title="Sudan" href="#">Sudan</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="210" class="datebook-cat-item datebook-countryid" title="Suriname" href="#">Suriname</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="211" class="datebook-cat-item datebook-countryid" title="Svalbard and Jan Mayen" href="#">Svalbard and Jan Mayen</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="212" class="datebook-cat-item datebook-countryid" title="Swaziland" href="#">Swaziland</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="213" class="datebook-cat-item datebook-countryid" title="Sweden" href="#">Sweden</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="214" class="datebook-cat-item datebook-countryid" title="Switzerland" href="#">Switzerland</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="215" class="datebook-cat-item datebook-countryid" title="Syria" href="#">Syria</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="216" class="datebook-cat-item datebook-countryid" title="Taiwan" href="#">Taiwan</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="217" class="datebook-cat-item datebook-countryid" title="Tajikistan" href="#">Tajikistan</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="218" class="datebook-cat-item datebook-countryid" title="Tanzania" href="#">Tanzania</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="219" class="datebook-cat-item datebook-countryid" title="Thailand" href="#">Thailand</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="220" class="datebook-cat-item datebook-countryid" title="Togo" href="#">Togo</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="221" class="datebook-cat-item datebook-countryid" title="Tonga" href="#">Tonga</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="222" class="datebook-cat-item datebook-countryid" title="Trinidad and Tobago" href="#">Trinidad and Tobago</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="223" class="datebook-cat-item datebook-countryid" title="Tunisia" href="#">Tunisia</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="224" class="datebook-cat-item datebook-countryid" title="Turkey" href="#">Turkey</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="225" class="datebook-cat-item datebook-countryid" title="Turkmenistan" href="#">Turkmenistan</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="226" class="datebook-cat-item datebook-countryid" title="Turks and Caicos Islands" href="#">Turks and Caicos Islands</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="227" class="datebook-cat-item datebook-countryid" title="Tuvalu" href="#">Tuvalu</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="228" class="datebook-cat-item datebook-countryid" title="U.S. Virgin Islands" href="#">U.S. Virgin Islands</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="229" class="datebook-cat-item datebook-countryid" title="Uganda" href="#">Uganda</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="230" class="datebook-cat-item datebook-countryid" title="Ukraine" href="#">Ukraine</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="231" class="datebook-cat-item datebook-countryid" title="United Arab Emirates" href="#">United Arab Emirates</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="232" class="datebook-cat-item datebook-countryid" title="United Kingdom" href="#">United Kingdom</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="233" class="datebook-cat-item datebook-countryid" title="USA" href="#">USA</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="235" class="datebook-cat-item datebook-countryid" title="Uzbekistan" href="#">Uzbekistan</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="236" class="datebook-cat-item datebook-countryid" title="Vanuatu" href="#">Vanuatu</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="237" class="datebook-cat-item datebook-countryid" title="Vatican" href="#">Vatican</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="238" class="datebook-cat-item datebook-countryid" title="Venezuela" href="#">Venezuela</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="239" class="datebook-cat-item datebook-countryid" title="Vietnam" href="#">Vietnam</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="240" class="datebook-cat-item datebook-countryid" title="Wallis and Futuna" href="#">Wallis and Futuna</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="241" class="datebook-cat-item datebook-countryid" title="Western Sahara" href="#">Western Sahara</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="242" class="datebook-cat-item datebook-countryid" title="Yemen" href="#">Yemen</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="243" class="datebook-cat-item datebook-countryid" title="Zambia" href="#">Zambia</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="244" class="datebook-cat-item datebook-countryid" title="Zimbabwe" href="#">Zimbabwe</a></div></div>			</div>
		</div>

		<div class="datebook-city-proccess">
			<p>We are getting cities...</p>
			<div class="progress progress-striped active">
				<div style="width: 100%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="100" role="progressbar" class="progress-bar progress-bar-success"></div>
			</div>
		</div>

		<div class="datebook-region-proccess">
			<p>We are getting regions...</p>
			<div class="progress progress-striped active">
				<div style="width: 100%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="100" role="progressbar" class="progress-bar progress-bar-success"></div>
			</div>
		</div>

		<div class="datebook-country-proccess">
			<p>We are getting countries...</p>
			<div class="progress progress-striped active">
				<div style="width: 100%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="100" role="progressbar" class="progress-bar progress-bar-success"></div>
			</div>
		</div>

	</div>
</div>
				
				<input id="datebook-location" name="countrycity" readonly="readonly" class="form-control" value="" type="text">
				
			</div>

			
		</div>
	</div>

	
	
	<div class="form-group ">

		<label class="col-sm-3 control-label">Date of Birth<i>*</i></label>
		
		<div class="col-sm-6">
		
		

			<div id="datebook-birth" class="row datebook-padding-less">
				<div class="col-xs-3 datebook-padding-less ">

					<div class="btn-group bootstrap-select form-control datebook-dateday">
					<select name="dateday" id="datebook-dateday" class="selectpicker form-control datebook-dateday" tabindex="-98">
						<option value="">Day</option>
						<option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option>					</select></div>
					
				</div>
				<div class="col-xs-5 datebook-padding-less ">

										
					<div class="btn-group bootstrap-select form-control datebook-datemonth"><select name="datemonth" id="datebook-datemonth" class="selectpicker form-control datebook-datemonth" tabindex="-98">
						<option value="">Month</option>
						<option value="1">January</option>
						<option value="2">February</option>
						<option value="3">March</option>
						<option value="4">April</option>
						<option value="5">May</option>
						<option value="6">June</option>
						<option value="7">July</option>
						<option value="8">August</option>
						<option value="9">September</option>
						<option value="10">October</option>
						<option value="11">November</option>
						<option value="12">December</option>
					</select></div>

				</div>
				<div class="col-xs-4 datebook-padding-less ">

					<div class="btn-group bootstrap-select form-control datebook-dateyear"><select name="dateyear" id="datebook-dateyear" class="selectpicker form-control datebook-dateyear" tabindex="-98">
						<option value="">Year</option>

						<option value="2000">2000</option><option value="1999">1999</option><option value="1998">1998</option><option value="1997">1997</option><option value="1996">1996</option><option value="1995">1995</option><option value="1994">1994</option><option value="1993">1993</option><option value="1992">1992</option><option value="1991">1991</option><option value="1990">1990</option><option value="1989">1989</option><option value="1988">1988</option><option value="1987">1987</option><option value="1986">1986</option><option value="1985">1985</option><option value="1984">1984</option><option value="1983">1983</option><option value="1982">1982</option><option value="1981">1981</option><option value="1980">1980</option><option value="1979">1979</option><option value="1978">1978</option><option value="1977">1977</option><option value="1976">1976</option><option value="1975">1975</option><option value="1974">1974</option><option value="1973">1973</option><option value="1972">1972</option><option value="1971">1971</option><option value="1970">1970</option><option value="1969">1969</option><option value="1968">1968</option><option value="1967">1967</option><option value="1966">1966</option><option value="1965">1965</option><option value="1964">1964</option><option value="1963">1963</option><option value="1962">1962</option><option value="1961">1961</option><option value="1960">1960</option><option value="1959">1959</option><option value="1958">1958</option><option value="1957">1957</option><option value="1956">1956</option><option value="1955">1955</option><option value="1954">1954</option><option value="1953">1953</option><option value="1952">1952</option><option value="1951">1951</option><option value="1950">1950</option><option value="1949">1949</option><option value="1948">1948</option><option value="1947">1947</option><option value="1946">1946</option><option value="1945">1945</option><option value="1944">1944</option><option value="1943">1943</option><option value="1942">1942</option><option value="1941">1941</option><option value="1940">1940</option><option value="1939">1939</option><option value="1938">1938</option>					</select></div>

				</div>
			</div>

			
		
		</div>
		
	</div>

	

	
	<div class="form-group ">

		<label class="col-sm-3 control-label">Gender<i>*</i></label>

		

		<div class="col-sm-6 datebook-register-panel">

			<div class="btn-group btn-group-justified" data-toggle="buttons">

				
						<label for="Woman" class="btn btn-default " title="Woman">

						
						<img src="<?php echo e(url('/')); ?>/images/icon_female_search.png" alt=""> 

												
						<input name="gender" value="1" id="Woman" type="radio"> Woman					</label>

					
						<label for="Man" class="btn btn-default " title="Man">

						
						<img src="<?php echo e(url('/')); ?>/images/icon_male_search.png" alt=""> 

												
						<input name="gender" value="2" id="Man" type="radio"> Man					</label>

					
			</div>

			
		</div>

		
	</div>
	

	
	<div class="form-group ">

		<label for="datebook-sexualorientation" class="col-sm-3 control-label">Sexual orientation</label>
		<div class="col-sm-6">

			<div class="btn-group bootstrap-select form-control"><select id="datebook-sexualorientation" class="selectpicker form-control" name="sexualorientation" tabindex="-98">

				<option value="">Select</option>

				
					<option value="1">Straight</option>

				
					<option value="2">Lesbian / Gay</option>

				
					<option value="3">Bisexual</option>

				
			</select></div>

			
		</div>
	</div>

	

	
	
	
	<div class="form-group ">

		<label for="datebook-emailaddress" class="col-sm-3 control-label">Your Email<i>*</i></label>

		<div class="col-sm-6">
			<input name="emailaddress" id="datebook-emailaddress" value="" class="form-control" type="email">

			<span class="datebook-checkuser"></span>

			<div class="clear"></div>

			
		</div>
	</div>

	
	
	<div class="form-group ">
		<label for="datebook-user" class="col-sm-3 control-label">Username<i>*</i></label>
		<div class="col-sm-6">
			<input name="user" id="datebook-user" value="" autocomplete="off" class="form-control" title="Username is set only once during registration and cannot be changed" type="text">

			
			<div class="clear"></div>

			<small>between 4 and 30 characters</small>
		</div>
	</div>

	

	
	<div class="form-group ">
		<label for="datebook-newpass" class="col-sm-3 control-label">Password<i>*</i></label>
		<div class="col-sm-6">
			<input name="newpass" id="datebook-newpass" value="" class="form-control" autocomplete="off" type="password">
						<div class="clear"></div>
			<span><small>at least 4 characters</small></span>
		</div>
	</div>
	
		
	<div class="form-group">
		<label class="col-sm-3 control-label"> </label>
		<div class="col-sm-6">
			<input name="submit" value="Register" class="btn btn-primary btn-lg" type="submit">
		</div>
	</div>

</form>
<hr>

<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">&nbsp;</div>
<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
	<div class="datebook-terms-padding">
		
		By submitting data you agree to our <a href="<?php echo e(url('/')); ?>/terms/" target="_blank">Terms and Conditions</a>		
	</div>
</div>

</div>
</div>
		</div>
	</div>
	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 datebook-padding-less pull-left">
		<div class="datebook-leftsidebar">

			
<div class="panel panel-default datebook-no-border datebook-welcomepanel">
<div class="panel-body">

	<h3>Meet new people!</h3>

</div>

<img class="img-responsive" src="<?php echo e(url('/')); ?>/images/welcome-people.jpg" alt="">

<div class="panel-body">

	Our community is an ideal place for making new friends, interesting dating and penpal.	
	<hr>
	
	<h4>Already have account?</h4>
	
	<a href="<?php echo e(url('/')); ?>/login/" class="btn btn-primary btn-block">Login</a>
	
</div>
</div>
		</div>
	</div>
</div>
<!-- /content --></div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('front.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>