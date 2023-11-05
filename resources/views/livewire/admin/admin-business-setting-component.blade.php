<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Add/</span> Business Settings</h4>
    @if(Session::has('message'))
    <div class="alert alert-success">{{Session::get('message')}}</div>
    @endif
    <!-- Basic Layout -->
    <div class="row">
      <div class="col-xl">
        <div class="card mb-4">
          <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">My Business Setting</h5>
            <small class="text-muted float-end">Merged input group</small>

          </div>
          <div class="card-body">
            <form
            enctype="multipart/form-data" wire:submit.prevent="updateBusinessSetting">
            @csrf


              <div class="row">
              <div class="col-md-3 mb-3">
                <label class="form-label" for="basic-icon-default-fullname">Business Name</label>
                <div class="input-group input-group-merge">

                  <input
                    type="text"
                    class="form-control"
                    id="basic-icon-default-fullname"
                    placeholder="business name"
                    aria-label="business name"
                    aria-describedby="basic-icon-default-fullname2"
                    name="name" wire:model="name"
                  />
                </div>
              </div>
              <div class="col-md-2 mb-3">
                <label class="form-label" for="basic-icon-default-company">Currency</label>
                <div class="input-group input-group-merge">
                 <input type="text" name="currency" id="currency" placeholder="currency" class="form-control" wire:model="currency">
                </div>
              </div>
              <div class="col-md-2 mb-3">
                <label class="form-label" for="basic-icon-default-company">Currency Symbol</label>
                <div class="input-group input-group-merge">
                 <input type="text" name="currency_symbol" id="currency_symbol" placeholder="doolar sign $  ..." class="form-control" wier:model="currency_symbol">
                </div>
              </div>
              <div class="col-md-2 mb-3">
                <label class="form-label" for="basic-icon-default-email">Country</label>
                <div class="input-group input-group-merge">
                <select name="country" id="country" class="form-control" wire:model="country">
                          <option value="AF" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Afghanistan</option>
                          <option value="AX" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Åland Islands</option>
                          <option value="AL" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Albania</option>
                          <option value="DZ" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Algeria</option>
                          <option value="AS" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>American Samoa</option>
                          <option value="AD" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Andorra</option>
                          <option value="AO" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Angola</option>
                          <option value="AI" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Anguilla</option>
                          <option value="AQ" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Antarctica</option>
                          <option value="AG" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Antigua and Barbuda</option>
                          <option value="AR" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Argentina</option>
                          <option value="AM" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Armenia</option>
                          <option value="AW" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Aruba</option>
                          <option value="AU" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Australia</option>
                          <option value="AT" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Austria</option>
                          <option value="AZ" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Azerbaijan</option>
                          <option value="BS" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Bahamas</option>
                          <option value="BH" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Bahrain</option>
                          <option value="BD" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Bangladesh</option>
                          <option value="BB" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Barbados</option>
                          <option value="BY" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Belarus</option>
                          <option value="BE" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Belgium</option>
                          <option value="BZ" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Belize</option>
                          <option value="BJ" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Benin</option>
                          <option value="BM" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Bermuda</option>
                          <option value="BT" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Bhutan</option>
                          <option value="BO" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Bolivia, Plurinational State of</option>
                          <option value="BQ" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Bonaire, Sint Eustatius and Saba</option>
                          <option value="BA" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Bosnia and Herzegovina</option>
                          <option value="BW" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Botswana</option>
                          <option value="BV" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Bouvet Island</option>
                          <option value="BR" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Brazil</option>
                          <option value="IO" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>British Indian Ocean Territory</option>
                          <option value="BN" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Brunei Darussalam</option>
                          <option value="BG" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Bulgaria</option>
                          <option value="BF" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Burkina Faso</option>
                          <option value="BI" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Burundi</option>
                          <option value="KH" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Cambodia</option>
                          <option value="CM" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Cameroon</option>
                          <option value="CA" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Canada</option>
                          <option value="CV" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Cape Verde</option>
                          <option value="KY" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Cayman Islands</option>
                          <option value="CF" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Central African Republic</option>
                          <option value="TD" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Chad</option>
                          <option value="CL" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Chile</option>
                          <option value="CN" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>China</option>
                          <option value="CX" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Christmas Island</option>
                          <option value="CC" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Cocos (Keeling) Islands</option>
                          <option value="CO" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Colombia</option>
                          <option value="KM" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Comoros</option>
                          <option value="CG" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Congo</option>
                          <option value="CD" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Congo, the Democratic Republic of the</option>
                          <option value="CK" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Cook Islands</option>
                          <option value="CR" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Costa Rica</option>
                          <option value="CI" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Côte d'Ivoire</option>
                          <option value="HR" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Croatia</option>
                          <option value="CU" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Cuba</option>
                          <option value="CW" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Curaçao</option>
                          <option value="CY" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Cyprus</option>
                          <option value="CZ" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Czech Republic</option>
                          <option value="DK" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Denmark</option>
                          <option value="DJ" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Djibouti</option>
                          <option value="DM" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Dominica</option>
                          <option value="DO" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Dominican Republic</option>
                          <option value="EC" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Ecuador</option>
                          <option value="EG" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Egypt</option>
                          <option value="SV" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>El Salvador</option>
                          <option value="GQ" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Equatorial Guinea</option>
                          <option value="ER" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Eritrea</option>
                          <option value="EE" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Estonia</option>
                          <option value="ET" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Ethiopia</option>
                          <option value="FK" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Falkland Islands (Malvinas)</option>
                          <option value="FO" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Faroe Islands</option>
                          <option value="FJ" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Fiji</option>
                          <option value="FI" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Finland</option>
                          <option value="FR" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>France</option>
                          <option value="GF" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>French Guiana</option>
                          <option value="PF" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>French Polynesia</option>
                          <option value="TF" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>French Southern Territories</option>
                          <option value="GA" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Gabon</option>
                          <option value="GM" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Gambia</option>
                          <option value="GE" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Georgia</option>
                          <option value="DE" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Germany</option>
                          <option value="GH" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Ghana</option>
                          <option value="GI" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Gibraltar</option>
                          <option value="GR" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Greece</option>
                          <option value="GL" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Greenland</option>
                          <option value="GD" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Grenada</option>
                          <option value="GP" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Guadeloupe</option>
                          <option value="GU" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Guam</option>
                          <option value="GT" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Guatemala</option>
                          <option value="GG" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Guernsey</option>
                          <option value="GN" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Guinea</option>
                          <option value="GW" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Guinea-Bissau</option>
                          <option value="GY" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Guyana</option>
                          <option value="HT" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Haiti</option>
                          <option value="HM" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Heard Island and McDonald Islands</option>
                          <option value="VA" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Holy See (Vatican City State)</option>
                          <option value="HN" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Honduras</option>
                          <option value="HK" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Hong Kong</option>
                          <option value="HU" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Hungary</option>
                          <option value="IS" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Iceland</option>
                          <option value="IN" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>India</option>
                          <option value="ID" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Indonesia</option>
                          <option value="IR" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Iran, Islamic Republic of</option>
                          <option value="IQ" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Iraq</option>
                          <option value="IE" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Ireland</option>
                          <option value="IM" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Isle of Man</option>
                          <option value="IL" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Israel</option>
                          <option value="IT" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Italy</option>
                          <option value="JM" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Jamaica</option>
                          <option value="JP" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Japan</option>
                          <option value="JE" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Jersey</option>
                          <option value="JO" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Jordan</option>
                          <option value="KZ" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Kazakhstan</option>
                          <option value="KE" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Kenya</option>
                          <option value="KI" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Kiribati</option>
                          <option value="KP" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Korea, Democratic People's Republic of</option>
                          <option value="KR" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Korea, Republic of</option>
                          <option value="KW" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Kuwait</option>
                          <option value="KG" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Kyrgyzstan</option>
                          <option value="LA" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Lao People's Democratic Republic</option>
                          <option value="LV" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Latvia</option>
                          <option value="LB" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Lebanon</option>
                          <option value="LS" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Lesotho</option>
                          <option value="LR" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Liberia</option>
                          <option value="LY" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Libya</option>
                          <option value="LI" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Liechtenstein</option>
                          <option value="LT" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Lithuania</option>
                          <option value="LU" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Luxembourg</option>
                          <option value="MO" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Macao</option>
                          <option value="MK" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Macedonia, the former Yugoslav Republic of</option>
                          <option value="MG" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Madagascar</option>
                          <option value="MW" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Malawi</option>
                          <option value="MY" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Malaysia</option>
                          <option value="MV" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Maldives</option>
                          <option value="ML" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Mali</option>
                          <option value="MT" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Malta</option>
                          <option value="MH" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Marshall Islands</option>
                          <option value="MQ" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Martinique</option>
                          <option value="MR" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Mauritania</option>
                          <option value="MU" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Mauritius</option>
                          <option value="YT" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Mayotte</option>
                          <option value="MX" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Mexico</option>
                          <option value="FM" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Micronesia, Federated States of</option>
                          <option value="MD" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Moldova, Republic of</option>
                          <option value="MC" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Monaco</option>
                          <option value="MN" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Mongolia</option>
                          <option value="ME" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Montenegro</option>
                          <option value="MS" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Montserrat</option>
                          <option value="MA" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Morocco</option>
                          <option value="MZ" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Mozambique</option>
                          <option value="MM" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Myanmar</option>
                          <option value="NA" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Namibia</option>
                          <option value="NR" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Nauru</option>
                          <option value="NP" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Nepal</option>
                          <option value="NL" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Netherlands</option>
                          <option value="NC" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>New Caledonia</option>
                          <option value="NZ" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>New Zealand</option>
                          <option value="NI" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Nicaragua</option>
                          <option value="NE" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Niger</option>
                          <option value="NG" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Nigeria</option>
                          <option value="NU" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Niue</option>
                          <option value="NF" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Norfolk Island</option>
                          <option value="MP" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Northern Mariana Islands</option>
                          <option value="NO" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Norway</option>
                          <option value="OM" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Oman</option>
                          <option value="PK" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Pakistan</option>
                          <option value="PW" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Palau</option>
                          <option value="PS" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Palestinian Territory, Occupied</option>
                          <option value="PA" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Panama</option>
                          <option value="PG" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Papua New Guinea</option>
                          <option value="PY" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Paraguay</option>
                          <option value="PE" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Peru</option>
                          <option value="PH" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Philippines</option>
                          <option value="PN" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Pitcairn</option>
                          <option value="PL" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Poland</option>
                          <option value="PT" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Portugal</option>
                          <option value="PR" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Puerto Rico</option>
                          <option value="QA" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Qatar</option>
                          <option value="RE" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Réunion</option>
                          <option value="RO" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Romania</option>
                          <option value="RU" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Russian Federation</option>
                          <option value="RW" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Rwanda</option>
                          <option value="BL" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Saint Barthélemy</option>
                          <option value="SH" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Saint Helena, Ascension and Tristan da Cunha</option>
                          <option value="KN" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Saint Kitts and Nevis</option>
                          <option value="LC" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Saint Lucia</option>
                          <option value="MF" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Saint Martin (French part)</option>
                          <option value="PM" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Saint Pierre and Miquelon</option>
                          <option value="VC" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Saint Vincent and the Grenadines</option>
                          <option value="WS" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Samoa</option>
                          <option value="SM" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>San Marino</option>
                          <option value="ST" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Sao Tome and Principe</option>
                          <option value="SA" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Saudi Arabia</option>
                          <option value="SN" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Senegal</option>
                          <option value="RS" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Serbia</option>
                          <option value="SC" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Seychelles</option>
                          <option value="SL" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Sierra Leone</option>
                          <option value="SG" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Singapore</option>
                          <option value="SX" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Sint Maarten (Dutch part)</option>
                          <option value="SK" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Slovakia</option>
                          <option value="SI" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Slovenia</option>
                          <option value="SB" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Solomon Islands</option>
                          <option value="SO" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Somalia</option>
                          <option value="ZA" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>South Africa</option>
                          <option value="GS" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>South Georgia and the South Sandwich Islands</option>
                          <option value="SS" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>South Sudan</option>
                          <option value="ES" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Spain</option>
                          <option value="LK" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Sri Lanka</option>
                          <option value="SD" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Sudan</option>
                          <option value="SR" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Suriname</option>
                          <option value="SJ" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Svalbard and Jan Mayen</option>
                          <option value="SZ" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Swaziland</option>
                          <option value="SE" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Sweden</option>
                          <option value="CH" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Switzerland</option>
                          <option value="SY" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Syrian Arab Republic</option>
                          <option value="TW" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Taiwan, Province of China</option>
                          <option value="TJ" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Tajikistan</option>
                          <option value="TZ" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Tanzania, United Republic of</option>
                          <option value="TH" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Thailand</option>
                          <option value="TL" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Timor-Leste</option>
                          <option value="TG" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Togo</option>
                          <option value="TK" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Tokelau</option>
                          <option value="TO" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Tonga</option>
                          <option value="TT" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Trinidad and Tobago</option>
                          <option value="TN" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Tunisia</option>
                          <option value="TR" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Turkey</option>
                          <option value="TM" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Turkmenistan</option>
                          <option value="TC" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Turks and Caicos Islands</option>
                          <option value="TV" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Tuvalu</option>
                          <option value="UG" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Uganda</option>
                          <option value="UA" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Ukraine</option>
                          <option value="AE" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>United Arab Emirates</option>
                          <option value="GB" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>United Kingdom</option>
                          <option value="US" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>United States</option>
                          <option value="UM" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>United States Minor Outlying Islands</option>
                          <option value="UY" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Uruguay</option>
                          <option value="UZ" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Uzbekistan</option>
                          <option value="VU" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Vanuatu</option>
                          <option value="VE" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Venezuela, Bolivarian Republic of</option>
                          <option value="VN" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Viet Nam</option>
                          <option value="VG" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Virgin Islands, British</option>
                          <option value="VI" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Virgin Islands, U.S.</option>
                          <option value="WF" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Wallis and Futuna</option>
                          <option value="EH" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Western Sahara</option>
                          <option value="YE" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Yemen</option>
                          <option value="ZM" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Zambia</option>
                          <option value="ZW" {{ $country ? ($country == '' ? 'selected' : '') : '' }}>Zimbabwe</option>
                </select>

                </div>

              </div>
              <div class="col-md-3 mb-3">
                <label class="form-label" for="basic-icon-default-email">Language</label>
                <div class="input-group input-group-merge">
                <select name="language" id="language"
                          class="form-control" wire:model="language">
                          <option value="en" {{ $language ? ($language == '' ? 'selected' : '') : '' }}>English(default)</option>
                          <option value="af" {{ $language ? ($language == '' ? 'selected' : '') : '' }}>Afrikaans</option>
                          <option value="sq" {{ $language ? ($language == '' ? 'selected' : '') : '' }}>Albanian - shqip</option>
                          <option value="am" {{ $language ? ($language == '' ? 'selected' : '') : '' }}>Amharic - አማርኛ</option>
                          <option value="ar" {{ $language ? ($language == '' ? 'selected' : '') : '' }}>Arabic - العربية</option>
                          <option value="an" {{ $language ? ($language == '' ? 'selected' : '') : '' }}>Aragonese - aragonés</option>
                          <option value="hy" {{ $language ? ($language == '' ? 'selected' : '') : '' }}>Armenian - հայերեն</option>
                          <option value="ast" {{ $language ? ($language == '' ? 'selected' : '') : '' }}>Asturian - asturianu</option>
                          <option value="az" {{ $language ? ($language == '' ? 'selected' : '') : '' }}>Azerbaijani - azərbaycan dili</option>
                          <option value="eu" {{ $language ? ($language == '' ? 'selected' : '') : '' }}>Basque - euskara</option>
                          <option value="be" {{ $language ? ($language == '' ? 'selected' : '') : '' }}>Belarusian - беларуская</option>
                          <option value="bn" {{ $language ? ($language == '' ? 'selected' : '') : '' }}>Bengali - বাংলা</option>
                          <option value="bs" {{ $language ? ($language == '' ? 'selected' : '') : '' }}>Bosnian - bosanski</option>
                          <option value="br" {{ $language ? ($language == '' ? 'selected' : '') : '' }}>Breton - brezhoneg</option>
                          <option value="bg" {{ $language ? ($language == '' ? 'selected' : '') : '' }}>Bulgarian - български</option>
                          <option value="ca" {{ $language ? ($language == '' ? 'selected' : '') : '' }}>Catalan - català</option>
                          <option value="ckb" {{ $language ? ($language == '' ? 'selected' : '') : '' }}>Central Kurdish - کوردی (دەستنوسی عەرەبی)</option>
                          <option value="zh" {{ $language ? ($language == '' ? 'selected' : '') : '' }}>Chinese - 中文</option>
                          <option value="zh-HK" {{ $language ? ($language == '' ? 'selected' : '') : '' }}>Chinese (Hong Kong) - 中文（香港）</option>
                          <option value="zh-CN" {{ $language ? ($language == '' ? 'selected' : '') : '' }}>Chinese (Simplified) - 中文（简体）</option>
                          <option value="zh-TW" {{ $language ? ($language == '' ? 'selected' : '') : '' }}>Chinese (Traditional) - 中文（繁體）</option>
                          <option value="co" {{ $language ? ($language == '' ? 'selected' : '') : '' }}>Corsican</option>
                          <option value="hr" {{ $language ? ($language == '' ? 'selected' : '') : '' }}>Croatian - hrvatski</option>
                          <option value="cs" {{ $language ? ($language == '' ? 'selected' : '') : '' }}>Czech - čeština</option>
                          <option value="da" {{ $language ? ($language == '' ? 'selected' : '') : '' }}>Danish - dansk</option>
                          <option value="nl" {{ $language ? ($language == '' ? 'selected' : '') : '' }}>Dutch - Nederlands</option>
                          <option value="en-AU" {{ $language ? ($language == '' ? 'selected' : '') : '' }}>English (Australia)</option>
                          <option value="en-CA" {{ $language ? ($language == '' ? 'selected' : '') : '' }}>English (Canada)</option>
                          <option value="en-IN" {{ $language ? ($language == '' ? 'selected' : '') : '' }}>English (India)</option>
                          <option value="en-NZ" {{ $language ? ($language == '' ? 'selected' : '') : '' }}>English (New Zealand)</option>
                          <option value="en-ZA" {{ $language ? ($language == '' ? 'selected' : '') : '' }}>English (South Africa)</option>
                          <option value="en-GB" {{ $language ? ($language == '' ? 'selected' : '') : '' }}>English (United Kingdom)</option>
                          <option value="en-US" {{ $language ? ($language == '' ? 'selected' : '') : '' }}>English (United States)</option>
                          <option value="eo" {{ $language ? ($language == '' ? 'selected' : '') : '' }}>Esperanto - esperanto</option>
                          <option value="et" {{ $language ? ($language == '' ? 'selected' : '') : '' }}>Estonian - eesti</option>
                          <option value="fo" {{ $language ? ($language == '' ? 'selected' : '') : '' }}>Faroese - føroyskt</option>
                          <option value="fil" {{ $language ? ($language == '' ? 'selected' : '') : '' }}>Filipino</option>
                          <option value="fi" {{ $language ? ($language == '' ? 'selected' : '') : '' }}>Finnish - suomi</option>
                          <option value="fr" {{ $language ? ($language == '' ? 'selected' : '') : '' }}>French - français</option>
                          <option value="fr-CA" {{ $language ? ($language == '' ? 'selected' : '') : '' }}>French (Canada) - français (Canada)</option>
                          <option value="fr-FR" {{ $language ? ($language == '' ? 'selected' : '') : '' }}>French (France) - français (France)</option>
                          <option value="fr-CH" {{ $language ? ($language == '' ? 'selected' : '') : '' }}>French (Switzerland) - français (Suisse)</option>
                          <option value="gl" {{ $language ? ($language == '' ? 'selected' : '') : '' }}>Galician - galego</option>
                          <option value="ka" {{ $language ? ($language == '' ? 'selected' : '') : '' }}>Georgian - ქართული</option>
                          <option value="de" {{ $language ? ($language == '' ? 'selected' : '') : '' }}>German - Deutsch</option>
                          <option value="de-AT" {{ $language ? ($language == '' ? 'selected' : '') : '' }}>German (Austria) - Deutsch (Österreich)</option>
                          <option value="de-DE" {{ $language ? ($language == '' ? 'selected' : '') : '' }}>German (Germany) - Deutsch (Deutschland)</option>
                          <option value="de-LI" {{ $language ? ($language == '' ? 'selected' : '') : '' }}>German (Liechtenstein) - Deutsch (Liechtenstein)</option>
                          <option value="de-CH" {{ $language ? ($language == '' ? 'selected' : '') : '' }}>German (Switzerland) - Deutsch (Schweiz)</option>
                          <option value="el" {{ $language ? ($language == '' ? 'selected' : '') : '' }}>Greek - Ελληνικά</option>
                          <option value="gn" {{ $language ? ($language == '' ? 'selected' : '') : '' }}>Guarani</option>
                          <option value="gu" {{ $language ? ($language == '' ? 'selected' : '') : '' }}>Gujarati - ગુજરાતી</option>
                          <option value="ha" {{ $language ? ($language == '' ? 'selected' : '') : '' }}>Hausa</option>
                          <option value="haw" {{ $language ? ($language == '' ? 'selected' : '') : '' }}>Hawaiian - ʻŌlelo Hawaiʻi</option>
                          <option value="he" {{ $language ? ($language == '' ? 'selected' : '') : '' }}>Hebrew - עברית</option>
                          <option value="hi" {{ $language ? ($language == '' ? 'selected' : '') : '' }}>Hindi - हिन्दी</option>
                          <option value="hu" {{ $language ? ($language == '' ? 'selected' : '') : '' }}>Hungarian - magyar</option>
                          <option value="is" {{ $language ? ($language == '' ? 'selected' : '') : '' }}>Icelandic - íslenska</option>
                          <option value="id" {{ $language ? ($language == '' ? 'selected' : '') : '' }}>Indonesian - Indonesia</option>
                          <option value="ia" {{ $language ? ($language == '' ? 'selected' : '') : '' }}>Interlingua</option>
                          <option value="ga" {{ $language ? ($language == '' ? 'selected' : '') : '' }}>Irish - Gaeilge</option>
                          <option value="it" {{ $language ? ($language == '' ? 'selected' : '') : '' }}>Italian - italiano</option>
                          <option value="it-IT" {{ $language ? ($language == '' ? 'selected' : '') : '' }}>Italian (Italy) - italiano (Italia)</option>
                          <option value="it-CH" {{ $language ? ($language == '' ? 'selected' : '') : '' }}>Italian (Switzerland) - italiano (Svizzera)</option>
                          <option value="ja" {{ $language ? ($language == '' ? 'selected' : '') : '' }}>Japanese - 日本語</option>
                          <option value="kn" {{ $language ? ($language == '' ? 'selected' : '') : '' }}>Kannada - ಕನ್ನಡ</option>
                          <option value="kk" {{ $language ? ($language == '' ? 'selected' : '') : '' }}>Kazakh - қазақ тілі</option>
                          <option value="km" {{ $language ? ($language == '' ? 'selected' : '') : '' }}>Khmer - ខ្មែរ</option>
                          <option value="ko" {{ $language ? ($language == '' ? 'selected' : '') : '' }}>Korean - 한국어</option>
                          <option value="ku" {{ $language ? ($language == '' ? 'selected' : '') : '' }}>Kurdish - Kurdî</option>
                          <option value="ky" {{ $language ? ($language == '' ? 'selected' : '') : '' }}>Kyrgyz - кыргызча</option>
                          <option value="lo" {{ $language ? ($language == '' ? 'selected' : '') : '' }}>Lao - ລາວ</option>
                          <option value="la" {{ $language ? ($language == '' ? 'selected' : '') : '' }}>Latin</option>
                          <option value="lv" {{ $language ? ($language == '' ? 'selected' : '') : '' }}>Latvian - latviešu</option>
                          <option value="ln" {{ $language ? ($language == '' ? 'selected' : '') : '' }}>Lingala - lingála</option>
                          <option value="lt" {{ $language ? ($language == '' ? 'selected' : '') : '' }}>Lithuanian - lietuvių</option>
                          <option value="mk" {{ $language ? ($language == '' ? 'selected' : '') : '' }}>Macedonian - македонски</option>
                          <option value="ms" {{ $language ? ($language == '' ? 'selected' : '') : '' }}>Malay - Bahasa Melayu</option>
                          <option value="ml" {{ $language ? ($language == '' ? 'selected' : '') : '' }}>Malayalam - മലയാളം</option>
                          <option value="mt" {{ $language ? ($language == '' ? 'selected' : '') : '' }}>Maltese - Malti</option>
                          <option value="mr" {{ $language ? ($language == '' ? 'selected' : '') : '' }}>Marathi - मराठी</option>
                          <option value="mn" {{ $language ? ($language == '' ? 'selected' : '') : '' }}>Mongolian - монгол</option>
                          <option value="ne" {{ $language ? ($language == '' ? 'selected' : '') : '' }}>Nepali - नेपाली</option>
                          <option value="no" {{ $language ? ($language == '' ? 'selected' : '') : '' }}>Norwegian - norsk</option>
                          <option value="nb" {{ $language ? ($language == '' ? 'selected' : '') : '' }}>Norwegian Bokmål - norsk bokmål</option>
                          <option value="nn" {{ $language ? ($language == '' ? 'selected' : '') : '' }}>Norwegian Nynorsk - nynorsk</option>
                          <option value="oc" {{ $language ? ($language == '' ? 'selected' : '') : '' }}>Occitan</option>
                          <option value="or" {{ $language ? ($language == '' ? 'selected' : '') : '' }}>Oriya - ଓଡ଼ିଆ</option>
                          <option value="om" {{ $language ? ($language == '' ? 'selected' : '') : '' }}>Oromo - Oromoo</option>
                          <option value="ps" {{ $language ? ($language == '' ? 'selected' : '') : '' }}>Pashto - پښتو</option>
                          <option value="fa" {{ $language ? ($language == '' ? 'selected' : '') : '' }}>Persian - فارسی</option>
                          <option value="pl" {{ $language ? ($language == '' ? 'selected' : '') : '' }}>Polish - polski</option>
                          <option value="pt" {{ $language ? ($language == '' ? 'selected' : '') : '' }}>Portuguese - português</option>
                          <option value="pt-BR" {{ $language ? ($language == '' ? 'selected' : '') : '' }}>Portuguese (Brazil) - português (Brasil)</option>
                          <option value="pt-PT" {{ $language ? ($language == '' ? 'selected' : '') : '' }}>Portuguese (Portugal) - português (Portugal)</option>
                          <option value="pa" {{ $language ? ($language == '' ? 'selected' : '') : '' }}>Punjabi - ਪੰਜਾਬੀ</option>
                          <option value="qu" {{ $language ? ($language == '' ? 'selected' : '') : '' }}>Quechua</option>
                          <option value="ro" {{ $language ? ($language == '' ? 'selected' : '') : '' }}>Romanian - română</option>
                          <option value="mo" {{ $language ? ($language == '' ? 'selected' : '') : '' }}>Romanian (Moldova) - română (Moldova)</option>
                          <option value="rm" {{ $language ? ($language == '' ? 'selected' : '') : '' }}>Romansh - rumantsch</option>
                          <option value="ru" {{ $language ? ($language == '' ? 'selected' : '') : '' }}>Russian - русский</option>
                          <option value="gd" {{ $language ? ($language == '' ? 'selected' : '') : '' }}>Scottish Gaelic</option>
                          <option value="sr" {{ $language ? ($language == '' ? 'selected' : '') : '' }}>Serbian - српски</option>
                          <option value="sh" {{ $language ? ($language == '' ? 'selected' : '') : '' }}>Serbo-Croatian - Srpskohrvatski</option>
                          <option value="sn" {{ $language ? ($language == '' ? 'selected' : '') : '' }}>Shona - chiShona</option>
                          <option value="sd" {{ $language ? ($language == '' ? 'selected' : '') : '' }}>Sindhi</option>
                          <option value="si" {{ $language ? ($language == '' ? 'selected' : '') : '' }}>Sinhala - සිංහල</option>
                          <option value="sk" {{ $language ? ($language == '' ? 'selected' : '') : '' }}>Slovak - slovenčina</option>
                          <option value="sl" {{ $language ? ($language == '' ? 'selected' : '') : '' }}>Slovenian - slovenščina</option>
                          <option value="so" {{ $language ? ($language == '' ? 'selected' : '') : '' }}>Somali - Soomaali</option>
                          <option value="st" {{ $language ? ($language == '' ? 'selected' : '') : '' }}>Southern Sotho</option>
                          <option value="es" {{ $language ? ($language == '' ? 'selected' : '') : '' }}>Spanish - español</option>
                          <option value="es-AR" {{ $language ? ($language == '' ? 'selected' : '') : '' }}>Spanish (Argentina) - español (Argentina)</option>
                          <option value="es-419" {{ $language ? ($language == '' ? 'selected' : '') : '' }}>Spanish (Latin America) - español (Latinoamérica)</option>
                          <option value="es-MX" {{ $language ? ($language == '' ? 'selected' : '') : '' }}>Spanish (Mexico) - español (México)</option>
                          <option value="es-ES" {{ $language ? ($language == '' ? 'selected' : '') : '' }}>Spanish (Spain) - español (España)</option>
                          <option value="es-US" {{ $language ? ($language == '' ? 'selected' : '') : '' }}>Spanish (United States) - español (Estados Unidos)</option>
                          <option value="su" {{ $language ? ($language == '' ? 'selected' : '') : '' }}>Sundanese</option>
                          <option value="sw" {{ $language ? ($language == '' ? 'selected' : '') : '' }}>Swahili - Kiswahili</option>
                          <option value="sv" {{ $language ? ($language == '' ? 'selected' : '') : '' }}>Swedish - svenska</option>
                          <option value="tg" {{ $language ? ($language == '' ? 'selected' : '') : '' }}>Tajik - тоҷикӣ</option>
                          <option value="ta" {{ $language ? ($language == '' ? 'selected' : '') : '' }}>Tamil - தமிழ்</option>
                          <option value="tt" {{ $language ? ($language == '' ? 'selected' : '') : '' }}>Tatar</option>
                          <option value="te" {{ $language ? ($language == '' ? 'selected' : '') : '' }}>Telugu - తెలుగు</option>
                          <option value="th" {{ $language ? ($language == '' ? 'selected' : '') : '' }}>Thai - ไทย</option>
                          <option value="ti" {{ $language ? ($language == '' ? 'selected' : '') : '' }}>Tigrinya - ትግርኛ</option>
                          <option value="to" {{ $language ? ($language == '' ? 'selected' : '') : '' }}>Tongan - lea fakatonga</option>
                          <option value="tr" {{ $language ? ($language == '' ? 'selected' : '') : '' }}>Turkish - Türkçe</option>
                          <option value="tk" {{ $language ? ($language == '' ? 'selected' : '') : '' }}>Turkmen</option>
                          <option value="tw" {{ $language ? ($language == '' ? 'selected' : '') : '' }}>Twi</option>
                          <option value="uk" {{ $language ? ($language == '' ? 'selected' : '') : '' }}>Ukrainian - українська</option>
                          <option value="ur" {{ $language ? ($language == '' ? 'selected' : '') : '' }}>Urdu - اردو</option>
                          <option value="ug" {{ $language ? ($language == '' ? 'selected' : '') : '' }}>Uyghur</option>
                          <option value="uz" {{ $language ? ($language == '' ? 'selected' : '') : '' }}>Uzbek - o‘zbek</option>
                          <option value="vi" {{ $language ? ($language == '' ? 'selected' : '') : '' }}>Vietnamese - Tiếng Việt</option>
                          <option value="wa" {{ $language ? ($language == '' ? 'selected' : '') : '' }}>Walloon - wa</option>
                          <option value="cy" {{ $language ? ($language == '' ? 'selected' : '') : '' }}>Welsh - Cymraeg</option>
                          <option value="fy" {{ $language ? ($language == '' ? 'selected' : '') : '' }}>Western Frisian</option>
                          <option value="xh" {{ $language ? ($language == '' ? 'selected' : '') : '' }}>Xhosa</option>
                          <option value="yi" {{ $language ? ($language == '' ? 'selected' : '') : '' }}>Yiddish</option>
                          <option value="yo" {{ $language ? ($language == '' ? 'selected' : '') : '' }}>Yoruba - Èdè Yorùbá</option>
                          <option value="zu" {{ $language ? ($language == '' ? 'selected' : '') : '' }}>Zulu - isiZulu</option>
                      </select>
                </div>

              </div>
              <div class="col-md-2 mb-3">
                <label class="form-label" for="basic-icon-default-email">Time Zone</label>
                <div class="input-group input-group-merge">
                <select name="time_zone" class="form-control" wire:model="time_zone">
                          <option value="UTC" {{ $time_zone ? ($time_zone == '' ? 'selected' : '') : '' }}>UTC</option>
                          <option value="Etc/GMT+ {{ $time_zone ? ($time_zone == '' ? 'selected' : '') : '' }}12" >(GMT-12:00)
                              International Date Line West</option>
                          <option value="Pacific/Midway" {{ $time_zone ? ($time_zone == '' ? 'selected' : '') : '' }}>
                              (GMT-11:00) Midway Island, Samoa</option>
                          <option value="Pacific/Honolulu" {{ $time_zone ? ($time_zone == '' ? 'selected' : '') : '' }} >
                              (GMT-10:00) Hawaii</option>
                          <option value="US/Alaska" {{ $time_zone ? ($time_zone == '' ? 'selected' : '') : '' }}>
                              Alaska</option>
                          <option value="America/Los_Angeles" {{ $time_zone ? ($time_zone == '' ? 'selected' : '') : '' }}
                              >(GMT-08:00) Pacific Time
                              (US & Canada)</option>
                          <option value="America/Tijuana" {{ $time_zone ? ($time_zone == '' ? 'selected' : '') : '' }} >
                              (GMT-08:00) Tijuana, Baja California</option>
                          <option value="US/Arizona" {{ $time_zone ? ($time_zone == '' ? 'selected' : '') : '' }} >(GMT-07:00)
                              Arizona</option>
                          <option value="America/Chihuahua" {{ $time_zone ? ($time_zone == '' ? 'selected' : '') : '' }}
                              >(GMT-07:00) Chihuahua, La
                              Paz, Mazatlan</option>
                          <option value="US/Mountain" {{ $time_zone ? ($time_zone == '' ? 'selected' : '') : '' }} >(GMT-07:00)
                              Mountain Time (US & Canada)</option>
                          <option value="America/Managua" {{ $time_zone ? ($time_zone == '' ? 'selected' : '') : '' }} >
                              (GMT-06:00) Central America</option>
                          <option value="US/Central" {{ $time_zone ? ($time_zone == '' ? 'selected' : '') : '' }} >(GMT-06:00)
                              Central Time (US & Canada)</option>
                          <option value="America/Mexico_City" {{ $time_zone ? ($time_zone == '' ? 'selected' : '') : '' }}
                              >(GMT-06:00) Guadalajara,
                              Mexico City, Monterrey</option>
                          <option value="Canada/Saskatchewan" {{ $time_zone ? ($time_zone == '' ? 'selected' : '') : '' }}
                              >(GMT-06:00) Saskatchewan
                          </option>
                          <option value="America/Bogota" {{ $time_zone ? ($time_zone == '' ? 'selected' : '') : '' }} >
                              (GMT-05:00) Bogota, Lima, Quito, Rio Branco</option>
                          <option value="US/Eastern" {{ $time_zone ? ($time_zone == '' ? 'selected' : '') : '' }} >(GMT-05:00)
                              Eastern Time (US & Canada)</option>
                          <option value="US/East-Indiana" {{ $time_zone ? ($time_zone == '' ? 'selected' : '') : '' }}>
                              (GMT-05:00) Indiana (East)</option>
                          <option value="Canada/Atlantic" {{ $time_zone ? ($time_zone == '' ? 'selected' : '') : '' }} >
                              (GMT-04:00) Atlantic Time (Canada)</option>
                          <option value="America/Caracas" {{ $time_zone ? ($time_zone == '' ? 'selected' : '') : '' }} >
                              (GMT-04:00) Caracas, La Paz</option>
                          <option value="America/Manaus" {{ $time_zone ? ($time_zone == '' ? 'selected' : '') : '' }} >
                              (GMT-04:00) Manaus</option>
                          <option value="America/Santiago" {{ $time_zone ? ($time_zone == '' ? 'selected' : '') : '' }} >
                              (GMT-04:00) Santiago</option>
                          <option value="Canada/Newfoundland" {{ $time_zone ? ($time_zone == '' ? 'selected' : '') : '' }}
                              >(GMT-03:30) Newfoundland
                          </option>
                          <option value="America/Sao_Paulo" {{ $time_zone ? ($time_zone == '' ? 'selected' : '') : '' }}
                              >(GMT-03:00) Brasilia</option>
                          <option value="America/Argentina/ {{ $time_zone ? ($time_zone == '' ? 'selected' : '') : '' }}Buenos_Aires"
                               }}>(GMT-03:00)
                              Buenos Aires, Georgetown</option>
                          <option value="America/Godthab" {{ $time_zone ? ($time_zone == '' ? 'selected' : '') : '' }} >
                              (GMT-03:00) Greenland</option>
                          <option value="America/Montevideo" {{ $time_zone ? ($time_zone == '' ? 'selected' : '') : '' }}
                              >(GMT-03:00) Montevideo
                          </option>
                          <option value="America/Noronha" {{ $time_zone ? ($time_zone == '' ? 'selected' : '') : '' }} >
                              (GMT-02:00) Mid-Atlantic</option>
                          <option value="Atlantic/Cape_Verde" {{ $time_zone ? ($time_zone == '' ? 'selected' : '') : '' }}
                              >(GMT-01:00) Cape Verde Is.
                          </option>
                          <option value="Atlantic/Azores" {{ $time_zone ? ($time_zone == '' ? 'selected' : '') : '' }} >
                              (GMT-01:00) Azores</option>
                          <option value="Africa/Casablanca" {{ $time_zone ? ($time_zone == '' ? 'selected' : '') : '' }}
                              >(GMT+00:00) Casablanca,
                              Monrovia, Reykjavik</option>
                          <option value="Etc/Greenwich" {{ $time_zone ? ($time_zone == '' ? 'selected' : '') : '' }} >
                              (GMT+00:00) Greenwich Mean Time : Dublin, Edinburgh, Lisbon, London</option>
                          <option value="Europe/Amsterdam" {{ $time_zone ? ($time_zone == '' ? 'selected' : '') : '' }} >
                              (GMT+01:00) Amsterdam, Berlin, Bern, Rome, Stockholm, Vienna</option>
                          <option value="Europe/Belgrade" {{ $time_zone ? ($time_zone == '' ? 'selected' : '') : '' }} >
                              (GMT+01:00) Belgrade, Bratislava, Budapest, Ljubljana, Prague</option>
                          <option value="Europe/Brussels" {{ $time_zone ? ($time_zone == '' ? 'selected' : '') : '' }} >
                              (GMT+01:00) Brussels, Copenhagen, Madrid, Paris</option>
                          <option value="Europe/Sarajevo" {{ $time_zone ? ($time_zone == '' ? 'selected' : '') : '' }} >
                              (GMT+01:00) Sarajevo, Skopje, Warsaw, Zagreb</option>
                          <option value="Africa/Lagos" {{ $time_zone ? ($time_zone == '' ? 'selected' : '') : '' }} >
                              (GMT+01:00) West Central Africa</option>
                          <option value="Asia/Amman" {{ $time_zone ? ($time_zone == '' ? 'selected' : '') : '' }} >(GMT+02:00)
                              Amman</option>
                          <option value="Europe/Athens" {{ $time_zone ? ($time_zone == '' ? 'selected' : '') : '' }} >
                              (GMT+02:00) Athens, Bucharest, Istanbul</option>
                          <option value="Asia/Beirut" {{ $time_zone ? ($time_zone == '' ? 'selected' : '') : '' }} >(GMT+02:00)
                              Beirut</option>
                          <option value="Africa/Cairo" {{ $time_zone ? ($time_zone == '' ? 'selected' : '') : '' }} >
                              (GMT+02:00) Cairo</option>
                          <option value="Africa/Harare" {{ $time_zone ? ($time_zone == '' ? 'selected' : '') : '' }} >
                              (GMT+02:00) Harare, Pretoria</option>
                          <option value="Europe/Helsinki" {{ $time_zone ? ($time_zone == '' ? 'selected' : '') : '' }} >
                              (GMT+02:00) Helsinki, Kyiv, Riga, Sofia, Tallinn, Vilnius</option>
                          <option value="Asia/Jerusalem" {{ $time_zone ? ($time_zone == '' ? 'selected' : '') : '' }} >
                              (GMT+02:00) Jerusalem</option>
                          <option value="Europe/Minsk" {{ $time_zone ? ($time_zone == '' ? 'selected' : '') : '' }} >
                              (GMT+02:00) Minsk</option>
                          <option value="Africa/Windhoek" {{ $time_zone ? ($time_zone == '' ? 'selected' : '') : '' }} >
                              (GMT+02:00) Windhoek</option>
                          <option value="Asia/Kuwait" {{ $time_zone ? ($time_zone == '' ? 'selected' : '') : '' }} >(GMT+03:00)
                              Kuwait, Riyadh, Baghdad</option>
                          <option value="Europe/Moscow" {{ $time_zone ? ($time_zone == '' ? 'selected' : '') : '' }} >
                              (GMT+03:00) Moscow, St. Petersburg, Volgograd</option>
                          <option value="Africa/Nairobi" {{ $time_zone ? ($time_zone == '' ? 'selected' : '') : '' }} >
                              (GMT+03:00) Nairobi</option>
                          <option value="Asia/Tbilisi" {{ $time_zone ? ($time_zone == '' ? 'selected' : '') : '' }} >
                              (GMT+03:00) Tbilisi</option>
                          <option value="Asia/Tehran" {{ $time_zone ? ($time_zone == '' ? 'selected' : '') : '' }} >(GMT+03:30)
                              Tehran</option>
                          <option value="Asia/Muscat" {{ $time_zone ? ($time_zone == '' ? 'selected' : '') : '' }} >(GMT+04:00)
                              Abu Dhabi, Muscat</option>
                          <option value="Asia/Baku" {{ $time_zone ? ($time_zone == '' ? 'selected' : '') : '' }} >(GMT+04:00)
                              Baku</option>
                          <option value="Asia/Yerevan" {{ $time_zone ? ($time_zone == '' ? 'selected' : '') : '' }} >
                              (GMT+04:00) Yerevan</option>
                          <option value="Asia/Kabul" {{ $time_zone ? ($time_zone == '' ? 'selected' : '') : '' }} >(GMT+04:30)
                              Kabul</option>
                          <option value="Asia/Yekaterinburg" {{ $time_zone ? ($time_zone == '' ? 'selected' : '') : '' }}
                              >(GMT+05:00) Yekaterinburg
                          </option>
                          <option value="Asia/Karachi" {{ $time_zone ? ($time_zone == '' ? 'selected' : '') : '' }} >
                              (GMT+05:00) Islamabad, Karachi, Tashkent</option>
                          <option value="Asia/Calcutta" {{ $time_zone ? ($time_zone == '' ? 'selected' : '') : '' }} >
                              (GMT+05:30) Chennai, Kolkata, Mumbai, New Delhi</option>
                          <option value="Asia/Katmandu" {{ $time_zone ? ($time_zone == '' ? 'selected' : '') : '' }} >
                              (GMT+05:45) Kathmandu</option>
                          <option value="Asia/Almaty" {{ $time_zone ? ($time_zone == '' ? 'selected' : '') : '' }} >(GMT+06:00)
                              Almaty, Novosibirsk</option>
                          <option value="Asia/Dhaka" {{ $time_zone ? ($time_zone == '' ? 'selected' : '') : '' }} >(GMT+06:00)
                              Astana, Dhaka</option>
                          <option value="Asia/Rangoon" {{ $time_zone ? ($time_zone == '' ? 'selected' : '') : '' }} >
                              (GMT+06:30) Yangon (Rangoon)</option>
                          <option value="Asia/Bangkok" {{ $time_zone ? ($time_zone == '' ? 'selected' : '') : '' }}  }}>
                              (GMT+07:00) Bangkok, Hanoi, Jakarta</option>
                          <option value="Asia/Krasnoyarsk" {{ $time_zone ? ($time_zone == '' ? 'selected' : '') : '' }} >
                              (GMT+07:00) Krasnoyarsk</option>
                          <option value="Asia/Hong_Kong" {{ $time_zone ? ($time_zone == '' ? 'selected' : '') : '' }} >
                              (GMT+08:00) Beijing, Chongqing, Hong Kong, Urumqi</option>
                          <option value="Asia/Kuala_Lumpur" {{ $time_zone ? ($time_zone == '' ? 'selected' : '') : '' }}
                              >(GMT+08:00) Kuala Lumpur,
                              Singapore</option>
                          <option value="Asia/Irkutsk" {{ $time_zone ? ($time_zone == '' ? 'selected' : '') : '' }} >
                              (GMT+08:00) Irkutsk, Ulaan Bataar</option>
                          <option value="Australia/Perth" {{ $time_zone ? ($time_zone == '' ? 'selected' : '') : '' }} >
                              (GMT+08:00) Perth</option>
                          <option value="Asia/Taipei" {{ $time_zone ? ($time_zone == '' ? 'selected' : '') : '' }} >(GMT+08:00)
                              Taipei</option>
                          <option value="Asia/Tokyo" {{ $time_zone ? ($time_zone == '' ? 'selected' : '') : '' }} >(GMT+09:00)
                              Osaka, Sapporo, Tokyo</option>
                          <option value="Asia/Seoul" {{ $time_zone ? ($time_zone == '' ? 'selected' : '') : '' }} >(GMT+09:00)
                              Seoul</option>
                          <option value="Asia/Yakutsk" {{ $time_zone ? ($time_zone == '' ? 'selected' : '') : '' }} >
                              (GMT+09:00) Yakutsk</option>
                          <option value="Australia/Adelaide" {{ $time_zone ? ($time_zone == '' ? 'selected' : '') : '' }}
                              >(GMT+09:30) Adelaide
                          </option>
                          <option value="Australia/Darwin" {{ $time_zone ? ($time_zone == '' ? 'selected' : '') : '' }} >
                              (GMT+09:30) Darwin</option>
                          <option value="Australia/Brisbane" {{ $time_zone ? ($time_zone == '' ? 'selected' : '') : '' }}
                              >(GMT+10:00) Brisbane
                          </option>
                          <option value="Australia/Canberra" {{ $time_zone ? ($time_zone == '' ? 'selected' : '') : '' }}
                              >(GMT+10:00) Canberra,
                              Melbourne, Sydney</option>
                          <option value="Australia/Hobart" {{ $time_zone ? ($time_zone == '' ? 'selected' : '') : '' }} >
                              (GMT+10:00) Hobart</option>
                          <option value="Pacific/Guam" {{ $time_zone ? ($time_zone == '' ? 'selected' : '') : '' }} >
                              (GMT+10:00) Guam, Port Moresby</option>
                          <option value="Asia/Vladivostok" {{ $time_zone ? ($time_zone == '' ? 'selected' : '') : '' }} >
                              (GMT+10:00) Vladivostok</option>
                          <option value="Asia/Magadan" {{ $time_zone ? ($time_zone == '' ? 'selected' : '') : '' }} >
                              (GMT+11:00) Magadan, Solomon Is., New Caledonia</option>
                          <option value="Pacific/Auckland" {{ $time_zone ? ($time_zone == '' ? 'selected' : '') : '' }} >
                              (GMT+12:00) Auckland, Wellington</option>
                          <option value="Pacific/Fiji" {{ $time_zone ? ($time_zone == '' ? 'selected' : '') : '' }} >
                              (GMT+12:00) Fiji, Kamchatka, Marshall Is.</option>
                          <option value="Pacific/Tongatapu" {{ $time_zone ? ($time_zone == '' ? 'selected' : '') : '' }}
                              >(GMT+13:00) Nuku'alofa
                          </option>
                      </select>

                </div>

              </div>
              <div class="col-md-2 mb-3">
                <label class="form-label" for="basic-icon-default-phone">Time Formate</label>
                <div class="input-group input-group-merge">
                <select name="time_format"class="form-control" id="time_formate" wire:model="time_format">
                      <option value="">Select Time Formate</option>
                      <option value="0" {{ $time_format ? ($time_format == '' ? 'selected' : '') : '' }}>12H</option>
                      <option value="1" {{ $time_format ? ($time_format == '' ? 'selected' : '') : '' }}>24H</option>
                  </select>
                </div>
              </div>
              <div class="col-md-2 mb-3">
                <label class="form-label" for="basic-icon-default-phone">Scheduled Order</label>
                <div class="input-group input-group-merge">
                <select name="order_schedule"class="form-control" id="order_schedule" wire:model="order_schedule">
                      <option value="1" {{ $order_schedule ? ($order_schedule == '' ? 'selected' : '') : '' }}>On</option>
                      <option value="0" {{ $order_schedule ? ($order_schedule == '' ? 'selected' : '') : '' }}>Off</option>
                  </select>
                </div>
              </div>

              <div class="col-md-2 mb-3">
                <label class="form-label" for="basic-icon-default-phone">Order Confirmation</label>
                <div class="input-group input-group-merge">
                <select name="order_confirmation"class="form-control" wire:model="order_confirmation">
                      <option value="0" {{ $order_confirmation ? ($order_confirmation == '' ? 'selected' : '') : '' }}>Store</option>
                      <option value="1" {{ $order_confirmation ? ($order_confirmation == '' ? 'selected' : '') : '' }}>DeliveryMan</option>
                  </select>
                </div>
              </div>
              <div class="col-md-2 mb-3">
                <label class="form-label" for="basic-icon-default-phone">DM Tips Status</label>
                <div class="input-group input-group-merge">
                <select name="dm_status"class="form-control" wire.model="dm_status">
                      <option value="0" {{ $dm_status ? ($dm_status == '' ? 'selected' : '') : '' }}>OFF</option>
                      <option value="1" {{ $dm_status ? ($dm_status == '' ? 'selected' : '') : '' }}>ON</option>
                  </select>
                </div>
              </div>
              <div class="col-md-2 mb-3">
                <label class="form-label" for="basic-icon-default-phone">Store Can Cancel Order</label>
                <div class="input-group input-group-merge">
                <select name="store_cancel_order"class="form-control" wire.model="store_cancel_order">
                      <option value="1" {{ $store_cancel_order ? ($store_cancel_order == '' ? 'selected' : '') : '' }}>Yes</option>
                      <option value="0" {{ $store_cancel_order ? ($store_cancel_order == '' ? 'selected' : '') : '' }}>NO</option>
                  </select>
                </div>
              </div>
              <div class="col-md-2 mb-3">
                <label class="form-label" for="basic-icon-default-phone">DM Can Cancel Order</label>
                <div class="input-group input-group-merge">
                <select name="deliveryman_cancel_order" class="form-control" wire:model="deliveryman_cancel_order">
                      <option value="1" {{ $deliveryman_cancel_order ? ($deliveryman_cancel_order == '' ? 'selected' : '') : '' }}>Yes</option>
                      <option value="0" {{ $deliveryman_cancel_order ? ($deliveryman_cancel_order == '' ? 'selected' : '') : '' }}>No</option>
                  </select>
                </div>
              </div>
              <div class="col-md-2 mb-3">
                <label class="form-label" for="basic-icon-default-phone">DM Earning Show</label>
                <div class="input-group input-group-merge">
                <select name="earning_status_deliverman_app"class="form-control" id="earning_status_deliverman_app" wire:model="earning_status_deliverman_app" >
                      <option value="1" {{ $earning_status_deliverman_app ? ($earning_status_deliverman_app == '' ? 'selected' : '') : '' }}>Yes</option>
                      <option value="0" {{ $earning_status_deliverman_app ? ($earning_status_deliverman_app == '' ? 'selected' : '') : '' }}>No</option>
                  </select>
                </div>
              </div>
              <div class="col-md-2 mb-3">
                <label class="form-label" for="basic-icon-default-phone">Admin Order Notification</label>
                <div class="input-group input-group-merge">
                <select name="admin_order_notification"class="form-control" id="admin_order_notification" wire:model="admin_order_notification">
                      <option value="1" {{ $admin_order_notification ? ($admin_order_notification == '' ? 'selected' : '') : '' }}>Yes</option>
                      <option value="0" {{ $admin_order_notification ? ($admin_order_notification == '' ? 'selected' : '') : '' }}>No</option>
                  </select>
                </div>
              </div>
              <div class="col-md-2 mb-3">
                <label class="form-label" for="basic-icon-default-phone">Customer Verification</label>
                <div class="input-group input-group-merge">
                <select name="customer_verfication"class="form-control" id="customer_verfication" wire:model="customer_verfication">
                      <option value="1" {{ $customer_verfication ? ($customer_verfication == '' ? 'selected' : '') : '' }}>Yes</option>
                      <option value="0" {{ $customer_verfication ? ($customer_verfication == '' ? 'selected' : '') : '' }}>No</option>
                  </select>
                </div>
              </div>
              <div class="col-md-2 mb-3">
                <label class="form-label" for="basic-icon-default-phone">Order Delivery Verfication</label>
                <div class="input-group input-group-merge">
                <select name="order_delivery_cerification" class="form-control" id="order_delivery_cerification" wire:model="order_delivery_cerification">
                      <option value="1" {{ $order_delivery_cerification ? ($order_delivery_cerification == '' ? 'selected' : '') : '' }}>Yes</option>
                      <option value="0" {{ $order_delivery_cerification ? ($order_delivery_cerification == '' ? 'selected' : '') : '' }}>No</option>
                  </select>
                </div>
              </div>
              <div class="col-md-2 mb-3">
                <label class="form-label" for="basic-icon-default-phone">Veg</label>
                <div class="input-group input-group-merge">
                <select name="veg"class="form-control" id="veg" wire:model="veg">
                      <option value="1" {{ $veg ? ($veg == '' ? 'selected' : '') : '' }}>Veg</option>
                      <option value="0" {{ $veg ? ($veg == '' ? 'selected' : '') : '' }}>Non Veg</option>
                  </select>
                </div>
              </div>
              <div class="col-md-2 mb-3">
                <label class="form-label" for="basic-icon-default-phone">Store Self Registration</label>
                <div class="input-group input-group-merge">
                <select name="store_registration"class="form-control"  id="store_registration"  wire:model="store_registration">
                      <option value="1" {{ $store_registration ? ($store_registration == '' ? 'selected' : '') : '' }}>Yes</option>
                      <option value="0" {{ $store_registration ? ($store_registration == '' ? 'selected' : '') : '' }}>No</option>
                  </select>
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <label class="form-label" for="basic-icon-default-phone">DeliveryMan Self Registration</label>
                <div class="input-group input-group-merge">
                <select name="deliveryman_registration" class="form-control" id="deliveryman_registration" wire:model="deliveryman_registration">
                      <option value="1" {{ $deliveryman_registration ? ($deliveryman_registration == '' ? 'selected' : '') : '' }}>Yes</option>
                      <option value="0" {{ $deliveryman_registration ? ($deliveryman_registration == '' ? 'selected' : '') : '' }}>No</option>
                  </select>
                </div>
              </div>

              <div class="col-md-3 mb-3">
                <label class="form-label" for="basic-icon-default-phone">Order Duration</label>
                <div class="input-group input-group-merge">
                 <input type="text" name="order_slot_duration" id="order_slot_duration" placeholder="30/40/45/50/60 minutes" class="form-control" wire:model="order_slot_duration">
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <label class="form-label" for="basic-icon-default-phone">Digit After Decimal Point</label>
                <div class="input-group input-group-merge">
                 <input type="text" name="digit_after_decimal_point" id="digit_after_decimal_point" placeholder="0" class="form-control" wire:model="digit_after_decimal_point">
                </div>
              </div>

              <div class="col-md-2 mb-3">
                <label class="form-label" for="basic-icon-default-phone">Admin Commission</label>
                <div class="input-group input-group-merge">
                 <input type="text" name="admin_commission" id="admin_commission" placeholder="0.0" class="form-control" wire:model="admin_commission">
                </div>
              </div>

              <div class="col-md-2 mb-3">
                <label class="form-label" for="basic-icon-default-phone">Free Delivery Over</label>
                <div class="input-group input-group-merge">
                 <input type="text" name="free_delivery_over" id="free_delivery_over" placeholder="0.0" class="form-control" wire:model="free_delivery_over">
                </div>
              </div>
              <div class="col-md-2 mb-3">
                <label class="form-label" for="basic-icon-default-phone">Minimum Delivery Over</label>
                <div class="input-group input-group-merge">
                 <input type="text" name="minimum_delivery_charges" id="minimum_delivery_charges" placeholder="0.0" class="form-control" wire:model="minimum_delivery_charges">
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <label class="form-label" for="basic-icon-default-phone">Per Km Delivery Charges</label>
                <div class="input-group input-group-merge">
                 <input type="text" name="per_km_charges" id="per_km_charges" placeholder="0.0" class="form-control" wire:model="per_km_charges">
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <label class="form-label" for="basic-icon-default-phone">Maximum Assign Orders To DeliveryMan</label>
                <div class="input-group input-group-merge">
                 <input type="text" name="maximam_orders_deliveryman" id="maximam_orders_deliveryman" placeholder="0.0" class="form-control" wire:model="maximam_orders_deliveryman">
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label class="form-label" for="basic-icon-default-phone">Phone Number</label>
                <div class="input-group input-group-merge">
                 <input type="text" name="phone" id="phone" placeholder="phone number" class="form-control" wire:model="phone">

                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label class="form-label" for="basic-icon-default-phone">Email</label>
                <div class="input-group input-group-merge">
                <input type="text" name="email" id="email" placeholder="abc@gmail.com" class="form-control" wire:model="email">
                </div>
              </div>
              <div class="row">
                  <div class="col-md-12">
                      <div class="mb-3">
                          <label class="form-label" for="basic-icon-default-phone">Address</label>
                          <div class="input-group input-group-merge">
                          <input type="text" name="address" id="address" placeholder="Address" class="form-control" wire:model="address">
                          </div>
                      </div>
                      <div class="mb-3">
                          <label class="form-label" for="basic-icon-default-phone">Latitude</label>
                          <div class="input-group input-group-merge">
                          <input type="text" name="latitude" id="latitude" placeholder="Latitude" class="form-control" wire:model="latitude">
                          </div>
                      </div>
                      <div class="mb-3">
                          <label class="form-label" for="basic-icon-default-phone">Longitude</label>
                          <div class="input-group input-group-merge">
                          <input type="text" name="longitude" id="longitude" placeholder="Longitude" class="form-control" wire:model="longitude">
                          </div>
                      </div>
                  </div>

              </div>
              <div class="mb-3">

                  <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300" for="file_input">Footer Text</label>
                  <input type="text" name="footer" id="footer" placeholder="Footer Text" class="form-control" wire:model="footer">
              </div>
              <div class="mb-3">

                  <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300" for="file_input">Upload logo</label>
                  <input name="logo" class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file" wire:model="newlogo">
                       @if($newlogo)
                       <img class="mt-2 h-auto rounded-lg" width="120" src="{{$newlogo->temporaryurl()}}" alt="" >
                       @elseif($logo)
                       <img class="mt-2 h-auto rounded-lg" width="120" src="{{asset('assets/business')}}/{{$logo}}" alt="" >
                       @endif
              </div>
              <div class="mb-3">

                  <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300" for="file_input">Upload Fav-Icon</label>
                  <input name="newicon"class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="newicon" type="file" wire:model="newicon"/>
                  @if($newicon)
                       <img class="mt-2 h-auto rounded-lg" width="120" src="{{$newicon->temporaryurl()}}" alt="" >
                       @elseif($icon)
                       <img class="mt-2 h-auto rounded-lg" width="120" src="{{asset('assets/business')}}/{{$icon}}" alt="">
                       @endif
              </div>
              </div>
              <button type="submit" class="btn btn-primary bg-danger float-right">Add Item</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
