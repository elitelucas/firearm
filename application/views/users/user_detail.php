<?php defined('BASEPATH') OR exit('No direct script access allowed');?>

<div id="personal" class="tab-pane active" style="padding:20px 40px">
    
    <div class="row">

        <div class="col-md-12">

            <div class="form-inline margin-top-20 margin-bottom-40">

                <label class="control-label">Gender:</label>

                <div class="radio margin-right-20">

                    <label>

                        <input name="gender" type="radio" value="1" class="colored-blue" checked="checked">

                        <span class="text">Man </span>

                    </label>

                </div>

                <div class="radio">

                    <label>

                        <input name="gender" type="radio" value="0" class="colored-blue">

                        <span class="text">Woman</span>

                    </label>

                </div>

                <script>$("input[name='gender'][value='<?= $user->gender?>']").attr("checked", "checked");</script>

            </div>

            <div class="form-group margin-bottom-40">

                <label class="control-label">Language</label>

                <select id="language" name="language" style="width:100%;">
                    <option value="Afrikaans">Afrikaans</option>
                    <option value="Albanian">Albanian</option>
                    <option value="Arabic">Arabic</option>
                    <option value="Armenian">Armenian</option>
                    <option value="Basque">Basque</option>
                    <option value="Bengali">Bengali</option>
                    <option value="Bulgarian">Bulgarian</option>
                    <option value="Catalan">Catalan</option>
                    <option value="Cambodian">Cambodian</option>
                    <option value="Chinese (Mandarin)">Chinese (Mandarin)</option>
                    <option value="Croatian">Croatian</option>
                    <option value="Czech">Czech</option>
                    <option value="Danish">Danish</option>
                    <option value="Dutch">Dutch</option>
                    <option value="English">English</option>
                    <option value="Estonian">Estonian</option>
                    <option value="Fiji">Fiji</option>
                    <option value="Finnish">Finnish</option>
                    <option value="French">French</option>
                    <option value="Georgian">Georgian</option>
                    <option value="German">German</option>
                    <option value="Greek">Greek</option>
                    <option value="Gujarati">Gujarati</option>
                    <option value="Hebrew">Hebrew</option>
                    <option value="Hindi">Hindi</option>
                    <option value="Hungarian">Hungarian</option>
                    <option value="Icelandic">Icelandic</option>
                    <option value="Indonesian">Indonesian</option>
                    <option value="Irish">Irish</option>
                    <option value="Italian">Italian</option>
                    <option value="Japanese">Japanese</option>
                    <option value="Javanese">Javanese</option>
                    <option value="Korean">Korean</option>
                    <option value="Latin">Latin</option>
                    <option value="Latvian">Latvian</option>
                    <option value="Lithuanian">Lithuanian</option>
                    <option value="Macedonian">Macedonian</option>
                    <option value="Malay">Malay</option>
                    <option value="Malayalam">Malayalam</option>
                    <option value="Maltese">Maltese</option>
                    <option value="Maori">Maori</option>
                    <option value="Marathi">Marathi</option>
                    <option value="Mongolian">Mongolian</option>
                    <option value="Nepali">Nepali</option>
                    <option value="Norwegian">Norwegian</option>
                    <option value="Persian">Persian</option>
                    <option value="Polish">Polish</option>
                    <option value="Portuguese">Portuguese</option>
                    <option value="Punjabi">Punjabi</option>
                    <option value="Quechua">Quechua</option>
                    <option value="Romanian">Romanian</option>
                    <option value="Russian">Russian</option>
                    <option value="Samoan">Samoan</option>
                    <option value="Serbian">Serbian</option>
                    <option value="Slovak">Slovak</option>
                    <option value="Slovenian">Slovenian</option>
                    <option value="Spanish">Spanish</option>
                    <option value="Swahili">Swahili</option>
                    <option value="Swedish ">Swedish </option>
                    <option value="Tamil">Tamil</option>
                    <option value="Tatar">Tatar</option>
                    <option value="Telugu">Telugu</option>
                    <option value="Thai">Thai</option>
                    <option value="Tibetan">Tibetan</option>
                    <option value="Tonga">Tonga</option>
                    <option value="Turkish">Turkish</option>
                    <option value="Ukrainian">Ukrainian</option>
                    <option value="Urdu">Urdu</option>
                    <option value="Uzbek">Uzbek</option>
                    <option value="Vietnamese">Vietnamese</option>
                    <option value="Welsh">Welsh</option>
                    <option value="Xhosa">Xhosa</option>
                </select>

                <script>$("#language>option[value='<?= $user->language?>']").attr("selected", true);</script>

            </div>

            <div class="form-group margin-bottom-40">

                <label class="control-label">DOB</label>

                <div class="input-group">

                    <input class="form-control date-picker" id="dob" name="dob" type="text" data-date-format="yyyy-mm-dd" value="<?= !empty($user)?$user->dob:''?>">
                    
                    <span class="input-group-addon">

                        <i class="fa fa-calendar"></i>

                    </span>

                </div>

            </div>

            <button type="button" class="btn btn-blue btn-lg pull-right" onclick="personal_data(<?= $user->id?>)">Save</button>

        </div>

    </div>
    
</div>

<div id="contact" class="tab-pane" style="padding:20px 40px">

    <div class="row">

        <div class="col-md-12">

            <div class="form-group margin-top-20 margin-bottom-40">

                <label class="control-label">Email</label>

                <input type="text" id="email" name="email" class="form-control" value="<?= !empty($user)?$user->email:''?>">

            </div>

            <div class="form-group margin-bottom-40">

                <label class="control-label">Phone</label>

                <input type="text" id="phone" name="phone" class="form-control" value="<?= !empty($user)?$user->phone:''?>">

            </div>

            <div class="form-inline margin-bottom-40">

                <div class="checkbox margin-right-20">

                    <label>

                        <input id="allow_email" name="allow_email" type="checkbox" class="colored-blue" <?= $user->allow_email==1?'checked':''?>>

                        <span class="text">Allow Email</span>

                    </label>

                </div>

                <div class="checkbox">

                    <label>

                        <input id="allow_phone" name="allow_phone" type="checkbox" class="colored-blue"<?= $user->allow_phone==1?'checked':''?>>

                        <span class="text">Allow Phone</span>

                    </label>
                </div>

            </div>

            <button type="button" class="btn btn-blue btn-lg pull-right" onclick="contact_data(<?= $user->id?>)">Save</button>

        </div>

    </div>

</div>

<script>

    $("#language").select2();

    $('.date-picker').datepicker();

</script>