    <!-- CONTENT
      ================================================== -->
		
		<!-- SIGNIN MODAL
      ================================================== -->
		<div class="modal fade" id="signinModal" tabindex="-1" role="dialog">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <h4 class="modal-title">Sign In</h4>
		      </div>
		      <div class="modal-body">
		        <div class="row">
		          <div class="col-sm-12">
		        		<div class="body-signin__form">

			            <!-- Sign In form -->
			            <form class="signin__form" action="include/login.inc.php" method="post">
			            	<!-- Email -->
						  	<div class="form-group">
						        <label for="sign-in__email" class="sr-only">Enter Email Or Username</label>
						        <div class="input-group">
						       		<span class="input-group-addon"><i class="ion-android-person"></i></span>
						    	    <input type="text" class="form-control" id="sign-in__email" placeholder="Enter Username/Email" name="uid">
				              	</div>
			               	</div>
			              <!-- Password -->
						  			<div class="form-group">
				              <label for="sign-in__password" class="sr-only">Enter password</label>
				              <div class="input-group">
				                <span class="input-group-addon"><i class="ion-locked"></i></span>
				                <input type="password" class="form-control" id="sign-in__password" placeholder="Password" name="pwd">
				              </div>
				            </div>
			              <div class="checkbox">
			                <label>
			                  <input type="checkbox"> Remember me
			                </label>
			              </div>
			              <button type="submit" class="btn btn-accent btn-block" name="submit">Submit</button>
			            </form>

			            <div class="signin__alt">
			            	<p>or sign in with social media</p>
			            	<ul class="signin__social">
			            		<li class="twitter"><a href=""><i class="ion-social-twitter"></i></a></li>
				              <li class="facebook"><a href=""><i class="ion-social-facebook"></i></a></li>
				              <li class="googleplus"><a href=""><i class="ion-social-googleplus"></i></a></li>
			            	</ul>
			            </div>

			            <!-- Sign Up link -->
			            <hr>
			            <p>Not registered? <a href="#signupModal">Create an Account.</a></p>

			            
			          </div> <!-- / .body-signin__form -->
		          </div>
		        </div> <!-- / .row -->
		      </div> <!-- / .modal-body -->
		    </div><!-- /.modal-content -->
		  </div><!-- /.modal-dialog -->
		</div><!-- /.modal -->

		<!-- SIGNUP MODAL
      ================================================== -->
		<div class="modal fade" id="signupModal" tabindex="-1" role="dialog">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <h4 class="modal-title">Create a New Account</h4>
		      </div>
		      <div class="modal-body">
		        <div class="row">
		          <div class="col-sm-12">
		        		<div class="body-signup__form">
									
									<!-- Sign In form -->
			            <div class="profile__sign-up">

				            <form class="signup__form" action="include/signup.inc.php" method="post">
				              <div class="row">
				                <div class="col-sm-6">
				                  <div class="form-group">
				                    <label class="sr-only">First Name</label>
				                    <input type="text" class="form-control" placeholder="First Name" name="first">
				                  </div>
				                </div>
				                <div class="col-sm-6">
				                  <div class="form-group">
				                    <label class="sr-only">Last Name</label>
				                    <input type="text" class="form-control" placeholder="Last Name" name="last">
				                  </div>
				                </div>
				              </div>
				              <div class="form-group">
				                <label class="sr-only">Username</label>
				                <input type="text" class="form-control" placeholder="Username" name="uid">
				              </div>
				              <div class="form-group">
				                <label class="sr-only">E-mail</label>
				                <input type="email" class="form-control" placeholder="E-mail" name="email">
				              </div>
				              <div class="form-group">
				                <label class="sr-only">Language</label>
				                <select class="form-control" name="lang">
				                	<option>c</option>
				                	<option>c++</option>
				                	<option>python</option>
				                	<option>vb</option>
				                	<option>c#</option>
				                	<option>java</option>
				                	<option>html</option>
				                	<option>css</option>
				                	<option>javascript</option>
				                </select>
				              </div>
				              <div class="form-group">
				                <label class="sr-only">Country</label>
				                <select class="form-control" name="country">
				                	<option value="United States">United States</option> 
									<option value="United Kingdom">United Kingdom</option> 
									<option value="Afghanistan">Afghanistan</option> 
									<option value="Albania">Albania</option> 
									<option value="Algeria">Algeria</option> 
									<option value="American Samoa">American Samoa</option> 
									<option value="Andorra">Andorra</option> 
									<option value="Angola">Angola</option> 
									<option value="Anguilla">Anguilla</option> 
									<option value="Antarctica">Antarctica</option> 
									<option value="Antigua and Barbuda">Antigua and Barbuda</option> 
									<option value="Argentina">Argentina</option> 
									<option value="Armenia">Armenia</option> 
									<option value="Aruba">Aruba</option> 
									<option value="Australia">Australia</option> 
									<option value="Austria">Austria</option> 
									<option value="Azerbaijan">Azerbaijan</option> 
									<option value="Bahamas">Bahamas</option> 
									<option value="Bahrain">Bahrain</option> 
									<option value="Bangladesh">Bangladesh</option> 
									<option value="Barbados">Barbados</option> 
									<option value="Belarus">Belarus</option> 
									<option value="Belgium">Belgium</option> 
									<option value="Belize">Belize</option> 
									<option value="Benin">Benin</option> 
									<option value="Bermuda">Bermuda</option> 
									<option value="Bhutan">Bhutan</option> 
									<option value="Bolivia">Bolivia</option> 
									<option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option> 
									<option value="Botswana">Botswana</option> 
									<option value="Bouvet Island">Bouvet Island</option> 
									<option value="Brazil">Brazil</option> 
									<option value="British Indian Ocean Territory">British Indian Ocean Territory</option> 
									<option value="Brunei Darussalam">Brunei Darussalam</option> 
									<option value="Bulgaria">Bulgaria</option> 
									<option value="Burkina Faso">Burkina Faso</option> 
									<option value="Burundi">Burundi</option> 
									<option value="Cambodia">Cambodia</option> 
									<option value="Cameroon">Cameroon</option> 
									<option value="Canada">Canada</option> 
									<option value="Cape Verde">Cape Verde</option> 
									<option value="Cayman Islands">Cayman Islands</option> 
									<option value="Central African Republic">Central African Republic</option> 
									<option value="Chad">Chad</option> 
									<option value="Chile">Chile</option> 
									<option value="China">China</option> 
									<option value="Christmas Island">Christmas Island</option> 
									<option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option> 
									<option value="Colombia">Colombia</option> 
									<option value="Comoros">Comoros</option> 
									<option value="Congo">Congo</option> 
									<option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option> 
									<option value="Cook Islands">Cook Islands</option> 
									<option value="Costa Rica">Costa Rica</option> 
									<option value="Cote D'ivoire">Cote D'ivoire</option> 
									<option value="Croatia">Croatia</option> 
									<option value="Cuba">Cuba</option> 
									<option value="Cyprus">Cyprus</option> 
									<option value="Czech Republic">Czech Republic</option> 
									<option value="Denmark">Denmark</option> 
									<option value="Djibouti">Djibouti</option> 
									<option value="Dominica">Dominica</option> 
									<option value="Dominican Republic">Dominican Republic</option> 
									<option value="Ecuador">Ecuador</option> 
									<option value="Egypt">Egypt</option> 
									<option value="El Salvador">El Salvador</option> 
									<option value="Equatorial Guinea">Equatorial Guinea</option> 
									<option value="Eritrea">Eritrea</option> 
									<option value="Estonia">Estonia</option> 
									<option value="Ethiopia">Ethiopia</option> 
									<option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option> 
									<option value="Faroe Islands">Faroe Islands</option> 
									<option value="Fiji">Fiji</option> 
									<option value="Finland">Finland</option> 
									<option value="France">France</option> 
									<option value="French Guiana">French Guiana</option> 
									<option value="French Polynesia">French Polynesia</option> 
									<option value="French Southern Territories">French Southern Territories</option> 
									<option value="Gabon">Gabon</option> 
									<option value="Gambia">Gambia</option> 
									<option value="Georgia">Georgia</option> 
									<option value="Germany">Germany</option> 
									<option value="Ghana">Ghana</option> 
									<option value="Gibraltar">Gibraltar</option> 
									<option value="Greece">Greece</option> 
									<option value="Greenland">Greenland</option> 
									<option value="Grenada">Grenada</option> 
									<option value="Guadeloupe">Guadeloupe</option> 
									<option value="Guam">Guam</option> 
									<option value="Guatemala">Guatemala</option> 
									<option value="Guinea">Guinea</option> 
									<option value="Guinea-bissau">Guinea-bissau</option> 
									<option value="Guyana">Guyana</option> 
									<option value="Haiti">Haiti</option> 
									<option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option> 
									<option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option> 
									<option value="Honduras">Honduras</option> 
									<option value="Hong Kong">Hong Kong</option> 
									<option value="Hungary">Hungary</option> 
									<option value="Iceland">Iceland</option> 
									<option value="India" selected="true">India</option> 
									<option value="Indonesia">Indonesia</option> 
									<option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option> 
									<option value="Iraq">Iraq</option> 
									<option value="Ireland">Ireland</option> 
									<option value="Israel">Israel</option> 
									<option value="Italy">Italy</option> 
									<option value="Jamaica">Jamaica</option> 
									<option value="Japan">Japan</option> 
									<option value="Jordan">Jordan</option> 
									<option value="Kazakhstan">Kazakhstan</option> 
									<option value="Kenya">Kenya</option> 
									<option value="Kiribati">Kiribati</option> 
									<option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option> 
									<option value="Korea, Republic of">Korea, Republic of</option> 
									<option value="Kuwait">Kuwait</option> 
									<option value="Kyrgyzstan">Kyrgyzstan</option> 
									<option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option> 
									<option value="Latvia">Latvia</option> 
									<option value="Lebanon">Lebanon</option> 
									<option value="Lesotho">Lesotho</option> 
									<option value="Liberia">Liberia</option> 
									<option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option> 
									<option value="Liechtenstein">Liechtenstein</option> 
									<option value="Lithuania">Lithuania</option> 
									<option value="Luxembourg">Luxembourg</option> 
									<option value="Macao">Macao</option> 
									<option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option> 
									<option value="Madagascar">Madagascar</option> 
									<option value="Malawi">Malawi</option> 
									<option value="Malaysia">Malaysia</option> 
									<option value="Maldives">Maldives</option> 
									<option value="Mali">Mali</option> 
									<option value="Malta">Malta</option> 
									<option value="Marshall Islands">Marshall Islands</option> 
									<option value="Martinique">Martinique</option> 
									<option value="Mauritania">Mauritania</option> 
									<option value="Mauritius">Mauritius</option> 
									<option value="Mayotte">Mayotte</option> 
									<option value="Mexico">Mexico</option> 
									<option value="Micronesia, Federated States of">Micronesia, Federated States of</option> 
									<option value="Moldova, Republic of">Moldova, Republic of</option> 
									<option value="Monaco">Monaco</option> 
									<option value="Mongolia">Mongolia</option> 
									<option value="Montserrat">Montserrat</option> 
									<option value="Morocco">Morocco</option> 
									<option value="Mozambique">Mozambique</option> 
									<option value="Myanmar">Myanmar</option> 
									<option value="Namibia">Namibia</option> 
									<option value="Nauru">Nauru</option> 
									<option value="Nepal">Nepal</option> 
									<option value="Netherlands">Netherlands</option> 
									<option value="Netherlands Antilles">Netherlands Antilles</option> 
									<option value="New Caledonia">New Caledonia</option> 
									<option value="New Zealand">New Zealand</option> 
									<option value="Nicaragua">Nicaragua</option> 
									<option value="Niger">Niger</option> 
									<option value="Nigeria">Nigeria</option> 
									<option value="Niue">Niue</option> 
									<option value="Norfolk Island">Norfolk Island</option> 
									<option value="Northern Mariana Islands">Northern Mariana Islands</option> 
									<option value="Norway">Norway</option> 
									<option value="Oman">Oman</option> 
									<option value="Pakistan">Pakistan</option> 
									<option value="Palau">Palau</option> 
									<option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option> 
									<option value="Panama">Panama</option> 
									<option value="Papua New Guinea">Papua New Guinea</option> 
									<option value="Paraguay">Paraguay</option> 
									<option value="Peru">Peru</option> 
									<option value="Philippines">Philippines</option> 
									<option value="Pitcairn">Pitcairn</option> 
									<option value="Poland">Poland</option> 
									<option value="Portugal">Portugal</option> 
									<option value="Puerto Rico">Puerto Rico</option> 
									<option value="Qatar">Qatar</option> 
									<option value="Reunion">Reunion</option> 
									<option value="Romania">Romania</option> 
									<option value="Russian Federation">Russian Federation</option> 
									<option value="Rwanda">Rwanda</option> 
									<option value="Saint Helena">Saint Helena</option> 
									<option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option> 
									<option value="Saint Lucia">Saint Lucia</option> 
									<option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option> 
									<option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option> 
									<option value="Samoa">Samoa</option> 
									<option value="San Marino">San Marino</option> 
									<option value="Sao Tome and Principe">Sao Tome and Principe</option> 
									<option value="Saudi Arabia">Saudi Arabia</option> 
									<option value="Senegal">Senegal</option> 
									<option value="Serbia and Montenegro">Serbia and Montenegro</option> 
									<option value="Seychelles">Seychelles</option> 
									<option value="Sierra Leone">Sierra Leone</option> 
									<option value="Singapore">Singapore</option> 
									<option value="Slovakia">Slovakia</option> 
									<option value="Slovenia">Slovenia</option> 
									<option value="Solomon Islands">Solomon Islands</option> 
									<option value="Somalia">Somalia</option> 
									<option value="South Africa">South Africa</option> 
									<option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option> 
									<option value="Spain">Spain</option> 
									<option value="Sri Lanka">Sri Lanka</option> 
									<option value="Sudan">Sudan</option> 
									<option value="Suriname">Suriname</option> 
									<option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option> 
									<option value="Swaziland">Swaziland</option> 
									<option value="Sweden">Sweden</option> 
									<option value="Switzerland">Switzerland</option> 
									<option value="Syrian Arab Republic">Syrian Arab Republic</option> 
									<option value="Taiwan, Province of China">Taiwan, Province of China</option> 
									<option value="Tajikistan">Tajikistan</option> 
									<option value="Tanzania, United Republic of">Tanzania, United Republic of</option> 
									<option value="Thailand">Thailand</option> 
									<option value="Timor-leste">Timor-leste</option> 
									<option value="Togo">Togo</option> 
									<option value="Tokelau">Tokelau</option> 
									<option value="Tonga">Tonga</option> 
									<option value="Trinidad and Tobago">Trinidad and Tobago</option> 
									<option value="Tunisia">Tunisia</option> 
									<option value="Turkey">Turkey</option> 
									<option value="Turkmenistan">Turkmenistan</option> 
									<option value="Turks and Caicos Islands">Turks and Caicos Islands</option> 
									<option value="Tuvalu">Tuvalu</option> 
									<option value="Uganda">Uganda</option> 
									<option value="Ukraine">Ukraine</option> 
									<option value="United Arab Emirates">United Arab Emirates</option> 
									<option value="United Kingdom">United Kingdom</option> 
									<option value="United States">United States</option> 
									<option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option> 
									<option value="Uruguay">Uruguay</option> 
									<option value="Uzbekistan">Uzbekistan</option> 
									<option value="Vanuatu">Vanuatu</option> 
									<option value="Venezuela">Venezuela</option> 
									<option value="Viet Nam">Viet Nam</option> 
									<option value="Virgin Islands, British">Virgin Islands, British</option> 
									<option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option> 
									<option value="Wallis and Futuna">Wallis and Futuna</option> 
									<option value="Western Sahara">Western Sahara</option> 
									<option value="Yemen">Yemen</option> 
									<option value="Zambia">Zambia</option> 
									<option value="Zimbabwe">Zimbabwe</option>
				                </select>
				              </div>
				              <div class="form-group">
				                <label class="sr-only">Phone-Number</label>
				                <input type="text" class="form-control" placeholder="+ your country code " name="number">
				              </div>
			                  <div class="form-group">
			                    <label class="sr-only">password</label>
			                    <input type="password" class="form-control" placeholder="password" name="pwd">
			                  </div>
				              <div class="checkbox">
				                <label>
				                  <input type="checkbox"> I agree to the <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a>
				                </label>
				              </div><br>
				              <button type="submit" class="btn btn-block btn-accent" name="submitsignup">
				                Sign Up
				              </button>
				            </form>

				            <hr>

				            <p>
				              Already registered? <a href="#signinModal">Sign in to your account</a>
				            </p>

				          </div> <!-- / .profile__sign-up -->
			          </div> <!-- / .body-signup__form -->
		          </div>
		        </div> <!-- / .row -->
		      </div> <!-- / .modal-body -->
		    </div><!-- /.modal-content -->
		  </div><!-- /.modal-dialog -->
		</div><!-- /.modal -->