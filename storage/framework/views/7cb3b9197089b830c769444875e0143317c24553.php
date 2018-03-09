<?php $__env->startSection('content'); ?>


	<!-- Banner -->
			<section id="banner">
					<div class="banner ts-register-banner parallax-section" >
					<div class="ts-overlay"></div>
						<div class="banner-content text-center">
							<h1>WHMCS-bridge</h1>
							<p></p>
							<div class="breadcrumbs"><a  href="#">Home</a> <i>/</i> <i>WHMCS-bridge</i></div>
						</div>
					</div>
			</section>
			<!-- End Banner -->
			 <!-- Start main content -->
			<div id="container_full">
				<div class="container">
					<div id="bridge">
						<div id="fb-root"></div>	
						<div class="container">			  
						  <div class="navbar navbar-default" role="navigation">		
							<!-- Branding -->
							<div class="navbar-header">  
							  
							  <a class="navbar-brand" href="#">Alaska Hosting</a>
							</div>
							
							<!-- Navigation -->
							<div class="collapse navbar-collapse">
							  <ul class="nav navbar-nav">
								<li><a href="#">Home</a></li>		
								<li><a href="#">Announcements</a></li>
								<li><a href="#">Knowledgebase</a></li>
								<li><a href="#">Network Status</a></li>
								<li class="hidden-sm"><a href="#">Contact Us</a></li>		
								<li class="hidden-sm hidden-md"><a href="#">Open Ticket</a></li>
							  </ul>
							  
							  <!-- Account / Right Dropdown -->
							  <ul class="nav navbar-nav navbar-right">				
								<li class="dropdown">
								  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Account <b class="caret"></b></a>
								  <ul class="dropdown-menu">
									<li><a href="#">Login</a></li>
									<li><a href="#">Register</a></li>
									<li class="divider"></li>
									<li><a href="#">Forgot Password?</a></li>
								  </ul>
								</li>		
							  </ul>
							</div>					
						  </div>
						  <div class="page-header ">
							  <h1>Register</h1>
							  <p class="lead">Create an account with us . . .</p>  	  
								<!-- Client details sub links -->			
						  </div>
						  
						  
						  <form class="form-horizontal" method="POST" action="<?php echo e(route('register')); ?>">
                        <?php echo e(csrf_field()); ?>


						 			
							<div class="row">			
							  <div class="col-sm-6">						  
									<div class="form-group <?php echo e($errors->has('firstname') ? ' has-error' : ''); ?>">
									  <label for="firstname">First Name</label>
									 
										<input  id="firstname"type="text" class="form-control" name="firstname" value="<?php echo e(old('firstname')); ?>" required autofocus>

											<?php if($errors->has('firstname')): ?>
												<span class="help-block">
													<strong><?php echo e($errors->first('firstname')); ?></strong>
												</span>
											<?php endif; ?>
									</div>
								  
									<div class="form-group <?php echo e($errors->has('lastname') ? ' has-error' : ''); ?>">
									  <label for="lastname">Last Name</label>
									 
										<input id="lastname" type="text" class="form-control" name="lastname" value="<?php echo e(old('lastname')); ?>" required autofocus>

											<?php if($errors->has('lastname')): ?>
												<span class="help-block">
													<strong><?php echo e($errors->first('lastname')); ?></strong>
												</span>
											<?php endif; ?>
									</div>
								  
									<div class="form-group <?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
									  <label for="username">Username </label>
									 
										<input id="name" type="text" class="form-control" name="name" value="<?php echo e(old('name')); ?>" required autofocus>

											<?php if($errors->has('username')): ?>
												<span class="help-block">
													<strong><?php echo e($errors->first('username')); ?></strong>
												</span>
											<?php endif; ?>
									</div>
								  
									<div class="form-group <?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
										<label for="email" class=" control-label">E-Mail Address</label>

										
											<input id="email" type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>" required>

											<?php if($errors->has('email')): ?>
												<span class="help-block">
													<strong><?php echo e($errors->first('email')); ?></strong>
												</span>
											<?php endif; ?>
										
									</div>
								  <div class="form-group <?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
										<label for="password" class=" control-label">Password</label>

										
											<input id="password" type="password" class="form-control" name="password" required>

											<?php if($errors->has('password')): ?>
												<span class="help-block">
													<strong><?php echo e($errors->first('password')); ?></strong>
												</span>
											<?php endif; ?>
										
									</div>

									<div class="form-group">
										<label for="password-confirm" class=" control-label">Confirm Password</label>

										<div class="">
											<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
										</div>
									</div>

									
									
								  
														
							  </div>
							  
							  <div class="col-sm-6">			
									<div class="form-group <?php echo e($errors->has('address1') ? ' has-error' : ''); ?>">
									  <label for="address1">Address 1 </label>
									 
										<input id="address1" type="text" class="form-control" name="address1" value="<?php echo e(old('address1')); ?>" required autofocus>

											<?php if($errors->has('address1')): ?>
												<span class="help-block">
													<strong><?php echo e($errors->first('address1')); ?></strong>
												</span>
											<?php endif; ?>
									</div>
									
								  
									<div class="form-group <?php echo e($errors->has('address2') ? ' has-error' : ''); ?>">
									  <label for="address2">Address 2</label>
									 
										<input id="address2" type="text" class="form-control" name="address2" value="<?php echo e(old('address2')); ?>" required autofocus>

											<?php if($errors->has('address2')): ?>
												<span class="help-block">
													<strong><?php echo e($errors->first('address2')); ?></strong>
												</span>
											<?php endif; ?>
									</div>
									<div class="form-group <?php echo e($errors->has('city') ? ' has-error' : ''); ?>">
									  <label for="city">City </label>
									 
										<input id="city" type="text" class="form-control" name="city" value="<?php echo e(old('city')); ?>" required autofocus>

											<?php if($errors->has('city')): ?>
												<span class="help-block">
													<strong><?php echo e($errors->first('city')); ?></strong>
												</span>
											<?php endif; ?>
									</div>
									
								  <div class="form-group <?php echo e($errors->has('state') ? ' has-error' : ''); ?>">
									  <label for="state">state </label>
									 
										<input id="state" type="text" class="form-control" name="state" value="<?php echo e(old('state')); ?>" required autofocus>

											<?php if($errors->has('state')): ?>
												<span class="help-block">
													<strong><?php echo e($errors->first('state')); ?></strong>
												</span>
											<?php endif; ?>
									</div>
									
								  <div class="form-group <?php echo e($errors->has('zip') ? ' has-error' : ''); ?>">
									  <label for="zip">Zip Code </label>
									 
										<input id="zip" type="text" class="form-control" name="zip" value="<?php echo e(old('zip')); ?>" required autofocus>

											<?php if($errors->has('zip')): ?>
												<span class="help-block">
													<strong><?php echo e($errors->first('zip')); ?></strong>
												</span>
											<?php endif; ?>
									</div>
									
								  <div class="form-group <?php echo e($errors->has('phone') ? ' has-error' : ''); ?>">
									  <label for="phone">phone </label>
									 
										<input id="phone" type="text" class="form-control" name="phone" value="<?php echo e(old('phone')); ?>" required autofocus>

											<?php if($errors->has('phone')): ?>
												<span class="help-block">
													<strong><?php echo e($errors->first('phone')); ?></strong>
												</span>
											<?php endif; ?>
									</div>
									<div class="form-group <?php echo e($errors->has('country') ? ' has-error' : ''); ?>">
									  <label for="country">country </label>
									 
										<select required class="form-control" name="country" id="country"><option value="AF">Afghanistan</option><option value="AX">Aland Islands</option><option value="AL">Albania</option><option value="DZ">Algeria</option><option value="AS">American Samoa</option><option value="AD">Andorra</option><option value="AO">Angola</option><option value="AI">Anguilla</option><option value="AQ">Antarctica</option><option value="AG">Antigua And Barbuda</option><option value="AR">Argentina</option><option value="AM">Armenia</option><option value="AW">Aruba</option><option value="AU">Australia</option><option value="AT">Austria</option><option value="AZ">Azerbaijan</option><option value="BS">Bahamas</option><option value="BH">Bahrain</option><option value="BD">Bangladesh</option><option value="BB">Barbados</option><option value="BY">Belarus</option><option value="BE">Belgium</option><option value="BZ">Belize</option><option value="BJ">Benin</option><option value="BM">Bermuda</option><option value="BT">Bhutan</option><option value="BO">Bolivia</option><option value="BA">Bosnia And Herzegovina</option><option value="BW">Botswana</option><option value="BV">Bouvet Island</option><option value="BR">Brazil</option><option value="IO">British Indian Ocean Territory</option><option value="BN">Brunei Darussalam</option><option value="BG">Bulgaria</option><option value="BF">Burkina Faso</option><option value="BI">Burundi</option><option value="KH">Cambodia</option><option value="CM">Cameroon</option><option value="CA">Canada</option><option value="CV">Cape Verde</option><option value="KY">Cayman Islands</option><option value="CF">Central African Republic</option><option value="TD">Chad</option><option value="CL">Chile</option><option value="CN">China</option><option value="CX">Christmas Island</option><option value="CC">Cocos (Keeling) Islands</option><option value="CO">Colombia</option><option value="KM">Comoros</option><option value="CG">Congo</option><option value="CD">Congo, Democratic Republic</option><option value="CK">Cook Islands</option><option value="CR">Costa Rica</option><option value="CI">Cote D'Ivoire</option><option value="HR">Croatia</option><option value="CU">Cuba</option><option value="CW">Curacao</option><option value="CY">Cyprus</option><option value="CZ">Czech Republic</option><option value="DK">Denmark</option><option value="DJ">Djibouti</option><option value="DM">Dominica</option><option value="DO">Dominican Republic</option><option value="EC">Ecuador</option><option value="EG">Egypt</option><option value="SV">El Salvador</option><option value="GQ">Equatorial Guinea</option><option value="ER">Eritrea</option><option value="EE">Estonia</option><option value="ET">Ethiopia</option><option value="FK">Falkland Islands (Malvinas)</option><option value="FO">Faroe Islands</option><option value="FJ">Fiji</option><option value="FI">Finland</option><option value="FR">France</option><option value="GF">French Guiana</option><option value="PF">French Polynesia</option><option value="TF">French Southern Territories</option><option value="GA">Gabon</option><option value="GM">Gambia</option><option value="GE">Georgia</option><option value="DE">Germany</option><option value="GH">Ghana</option><option value="GI">Gibraltar</option><option value="GR">Greece</option><option value="GL">Greenland</option><option value="GD">Grenada</option><option value="GP">Guadeloupe</option><option value="GU">Guam</option><option value="GT">Guatemala</option><option value="GG">Guernsey</option><option value="GN">Guinea</option><option value="GW">Guinea-Bissau</option><option value="GY">Guyana</option><option value="HT">Haiti</option><option value="HM">Heard Island & Mcdonald Islands</option><option value="VA">Holy See (Vatican City State)</option><option value="HN">Honduras</option><option value="HK">Hong Kong</option><option value="HU">Hungary</option><option value="IS">Iceland</option><option value="IN">India</option><option value="ID">Indonesia</option><option value="IR">Iran, Islamic Republic Of</option><option value="IQ">Iraq</option><option value="IE">Ireland</option><option value="IM">Isle Of Man</option><option value="IL">Israel</option><option value="IT">Italy</option><option value="JM">Jamaica</option><option value="JP">Japan</option><option value="JE">Jersey</option><option value="JO">Jordan</option><option value="KZ">Kazakhstan</option><option value="KE">Kenya</option><option value="KI">Kiribati</option><option value="KR">Korea</option><option value="KW">Kuwait</option><option value="KG">Kyrgyzstan</option><option value="LA">Lao People's Democratic Republic</option><option value="LV">Latvia</option><option value="LB">Lebanon</option><option value="LS">Lesotho</option><option value="LR">Liberia</option><option value="LY">Libyan Arab Jamahiriya</option><option value="LI">Liechtenstein</option><option value="LT">Lithuania</option><option value="LU">Luxembourg</option><option value="MO">Macao</option><option value="MK">Macedonia</option><option value="MG">Madagascar</option><option value="MW">Malawi</option><option value="MY">Malaysia</option><option value="MV">Maldives</option><option value="ML">Mali</option><option value="MT">Malta</option><option value="MH">Marshall Islands</option><option value="MQ">Martinique</option><option value="MR">Mauritania</option><option value="MU">Mauritius</option><option value="YT">Mayotte</option><option value="MX">Mexico</option><option value="FM">Micronesia, Federated States Of</option><option value="MD">Moldova</option><option value="MC">Monaco</option><option value="MN">Mongolia</option><option value="ME">Montenegro</option><option value="MS">Montserrat</option><option value="MA">Morocco</option><option value="MZ">Mozambique</option><option value="MM">Myanmar</option><option value="NA">Namibia</option><option value="NR">Nauru</option><option value="NP">Nepal</option><option value="NL">Netherlands</option><option value="AN">Netherlands Antilles</option><option value="NC">New Caledonia</option><option value="NZ">New Zealand</option><option value="NI">Nicaragua</option><option value="NE">Niger</option><option value="NG">Nigeria</option><option value="NU">Niue</option><option value="NF">Norfolk Island</option><option value="MP">Northern Mariana Islands</option><option value="NO">Norway</option><option value="OM">Oman</option><option value="PK">Pakistan</option><option value="PW">Palau</option><option value="PS">Palestine, State of</option><option value="PA">Panama</option><option value="PG">Papua New Guinea</option><option value="PY">Paraguay</option><option value="PE">Peru</option><option value="PH">Philippines</option><option value="PN">Pitcairn</option><option value="PL">Poland</option><option value="PT">Portugal</option><option value="PR">Puerto Rico</option><option value="QA">Qatar</option><option value="RE">Reunion</option><option value="RO">Romania</option><option value="RU">Russian Federation</option><option value="RW">Rwanda</option><option value="BL">Saint Barthelemy</option><option value="SH">Saint Helena</option><option value="KN">Saint Kitts And Nevis</option><option value="LC">Saint Lucia</option><option value="MF">Saint Martin</option><option value="PM">Saint Pierre And Miquelon</option><option value="VC">Saint Vincent And Grenadines</option><option value="WS">Samoa</option><option value="SM">San Marino</option><option value="ST">Sao Tome And Principe</option><option value="SA">Saudi Arabia</option><option value="SN">Senegal</option><option value="RS">Serbia</option><option value="SC">Seychelles</option><option value="SL">Sierra Leone</option><option value="SG">Singapore</option><option value="SK">Slovakia</option><option value="SI">Slovenia</option><option value="SB">Solomon Islands</option><option value="SO">Somalia</option><option value="ZA">South Africa</option><option value="GS">South Georgia And Sandwich Isl.</option><option value="ES">Spain</option><option value="LK">Sri Lanka</option><option value="SD">Sudan</option><option value="SR">Suriname</option><option value="SJ">Svalbard And Jan Mayen</option><option value="SZ">Swaziland</option><option value="SE">Sweden</option><option value="CH">Switzerland</option><option value="SY">Syrian Arab Republic</option><option value="TW">Taiwan</option><option value="TJ">Tajikistan</option><option value="TZ">Tanzania</option><option value="TH">Thailand</option><option value="TL">Timor-Leste</option><option value="TG">Togo</option><option value="TK">Tokelau</option><option value="TO">Tonga</option><option value="TT">Trinidad And Tobago</option><option value="TN">Tunisia</option><option value="TR">Turkey</option><option value="TM">Turkmenistan</option><option value="TC">Turks And Caicos Islands</option><option value="TV">Tuvalu</option><option value="UG">Uganda</option><option value="UA">Ukraine</option><option value="AE">United Arab Emirates</option><option value="GB">United Kingdom</option><option value="US" selected="selected">United States</option><option value="UM">United States Outlying Islands</option><option value="UY">Uruguay</option><option value="UZ">Uzbekistan</option><option value="VU">Vanuatu</option><option value="VE">Venezuela</option><option value="VN">Viet Nam</option><option value="VG">Virgin Islands, British</option><option value="VI">Virgin Islands, U.S.</option><option value="WF">Wallis And Futuna</option><option value="EH">Western Sahara</option><option value="YE">Yemen</option><option value="ZM">Zambia</option><option value="ZW">Zimbabwe</option></select>
									
											<?php if($errors->has('country')): ?>
												<span class="help-block">
													<strong><?php echo e($errors->first('country')); ?></strong>
												</span>
											<?php endif; ?>
									</div>
									
								  
									
								  
									
								  
									
								  
									
									
								  
											
							  </div>
							</div>
							<hr />
							
							<button class="btn btn-lg btn-primary" type="submit" name="submit">Register</button>
						  </form>
						</div>
			  
					</div><!--end bridge-->
			</div>
		</div>
		<!-- End / content -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('front.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>