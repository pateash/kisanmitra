@extends('layouts.master')
@section('content')
    <style>
        #smart-button{
            background-attachment: scroll;
            background-clip: border-box;
            background-color: rgb(149, 98, 149);
            background-image: none;
            background-origin: padding-box;
            background-position: 0% 0%;
            background-position-x: 0%;
            background-position-y: 0%;
            background-repeat: repeat;
            background-size: auto auto;
            border-bottom-color: rgb(255, 255, 255);
            border-bottom-style: none;
            border-bottom-width: 0px;
            border-image-outset: 0 0 0 0;
            border-image-repeat: stretch stretch;
            border-image-slice: 100% 100% 100% 100%;
            border-image-source: none;
            border-image-width: 1 1 1 1;
            border-left-color: rgb(255, 255, 255);
            border-left-style: none;
            border-left-width: 0px;
            border-right-color: rgb(255, 255, 255);
            border-right-style: none;
            border-right-width: 0px;
            border-top-color: rgb(255, 255, 255);
            border-top-style: none;
            border-top-width: 0px;
            box-sizing: border-box;
            color: rgb(255, 255, 255);
            cursor: pointer;
            font-family: "Oxygen-Regular";
            font-feature-settings: normal;
            font-kerning: auto;
            font-language-override: normal;
            font-size: 14.4px;
            font-size-adjust: none;
            font-stretch: normal;
            font-style: normal;
            font-synthesis: weight style;
            font-variant: normal;
            font-variant-alternates: normal;
            font-variant-caps: normal;
            font-variant-east-asian: normal;
            font-variant-ligatures: normal;
            font-variant-numeric: normal;
            font-variant-position: normal;
            font-weight: 400;
            line-height: 20.5667px;
            margin-bottom: 0px;
            margin-left: 0px;
            margin-right: 0px;
            margin-top: 8.63333px;
            padding-bottom: 5.76667px;
            padding-left: 14.4px;
            padding-right: 14.4px;
            padding-top: 5.76667px;
            -moz-border-bottom-colors: none;
            -moz-border-left-colors: none;
            -moz-border-right-colors: none;
            -moz-border-top-colors: none;

        }
    </style>


    <div class="container" style="margin-top:3em;margin-bottom:3em; ">
        <div class="row">
            <div class="col-xs-10 col-xs-offset-1 col-md-8 col-md-offset-2" style="margin-top:-3em;" >
                <h1 id="heading" style="margin-bottom:0em;">Predict</h1>
                @if(count($errors)>0)
                    @foreach($errors->all() as $error)
                        <div class="alert alert-danger">
                            <span class="glyphicon glyphicon-exclamation-sign"></span>&nbsp;&nbsp;&nbsp; {{$error}}
                        </div>
                    @endforeach
                @endif


                <form action="/result" method="post">
                    {{csrf_field()}}
                    {{--select state   --}}
                    <div class="form-group">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><label for="state">Select state</label>
                                </h3>
                            </div>
                            <div class="panel-body">
                                <select class="form-control" name="state" id="state" required onselect="state_selected()">
                                    <option value="">Select State</option>
                                    <option value="madhya_pradesh">Madhya Pradesh</option>
                                    <option value="bihar">Bihar</option>
                                    <option value="gujrat">Gujrat</option>
                                    <option value="himachal_pradesh">Himachal Pradesh</option>
                                    <option value="maharastra">Maharastra</option>
                                    <option value="rajasthan">Rajasthan</option>
                                    <option value="uttarakhand">Uttarakhand</option>
                                    <option value="uttar_pradesh">Uttar Pradesh</option>
                                    <option value="west_bengal">West Bengal</option>
                                    <option value="assam">Assam</option>
                                </select>
                            </div>
                        </div>
                    </div>



                    {{--select region--}}
                    <div class="form-group">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><label for="region">Select Region</label>
                                </h3>
                            </div>
                            <div class="panel-body">
                                <select class="form-control" name="region" id="region"  required>
                                    <option value="">Select Region</option>
                                    <div id='madhya_pradesh' hidden>
                                        <option value="bhojpur">bhojpur</option>
                                        <option value="bhopal">bhopal</option>
                                        <option value="dewas">dewas</option>
                                        <option value="gwalior">gwalior</option>
                                        <option value="indore">indore</option>
                                        <option value="jabalpur">jabalpur</option>
                                        <option value="ratlam">ratlam</option>
                                        <option value="rewa">rewa</option>
                                        <option value="sagar">sagar</option>
                                        <option value="shivpuri">shivpuri</option>
                                        <option value="ujjain">ujjain</option>
                                        <option value="vidisha">vidisha</option>
                                    </div>
                                    <div id="assam" hidden>
                                        <option value="badarpur">badarpur</option>
                                        <option value="dispur">dispur</option>
                                        <option value="guwahati">guwahati</option>
                                        <option value="jorhat">jorhat</option>
                                        <option value="karimganj">karimganj</option>
                                        <option value="silchar">silchar</option>
                                        <option value="tezpur">tezpur</option>
                                    </div>
                                    <div id="bihar" hidden>
                                        <option value="bodh_gaya">bodh gaya</option>
                                        <option value="chhapra">chhapra</option>
                                        <option value="gaya">gaya</option>
                                        <option value="muzaffarpur">muzaffarpur</option>
                                        <option value="patna">patna</option>
                                        <option value="ratlam">ratlam</option>
                                        <option value="sasaram">sasaram</option>
                                        <option value="sonpur">sonpur</option>
                                    </div>

                                    <div id="gujrat" hidden>
                                        <option value="ahmedabad">ahmedabad</option>
                                        <option value="bhavnagar">bhavnagar</option>
                                        <option value="bhuj">bhuj</option>
                                        <option value="dandi">dandi</option>
                                        <option value="dwarka">dwarka</option>
                                        <option value="gandhi_nagar">gandhi nagar</option>
                                        <option value="rajkot">rajkot</option>
                                        <option value="surat">surat</option>
                                        <option value="vadodara">vadodara</option>
                                    </div>
                                    <div id="himachal_pradesh" hidden>
                                        <option value="chamba">chamba</option>
                                        <option value="dharamsala">dharamsala</option>
                                        <option value="kullu">kullu</option>
                                        <option value="manali">manali</option>
                                        <option value="mandi">mandi</option>
                                        <option value="naina_devi">naina devi</option>
                                        <option value="palampur">palampur</option>
                                        <option value="pathankot">pathankot</option>
                                        <option value="shimla">shimla</option>
                                        <option value="sundar_nagar">sundar nagar</option>
                                    </div>


                                    <div id="maharastra" hidden>
                                        <option value="akola">akola</option>
                                        <option value="aurangabad">aurangabad</option>
                                        <option value="bhirwandi">bhirwandi</option>
                                        <option value="kolhapur">kolhapur</option>
                                        <option value="latur">latur</option>
                                        <option value="mumbai">mumbai</option>
                                        <option value=nagpur"">nagpur</option>
                                        <option value="pune">pune</option>
                                        <option value="shirdi">shirdi</option>
                                        <option value="solapur">solapur</option>
                                        <option value="thane">thane</option>
                                    </div>
                                    <div id="rajasthan" hidden>
                                        <option value="ajmer">ajmer</option>
                                        <option value="alwar">alwar</option>
                                        <option value="amer">amer</option>
                                        <option value="bhangarh">bhangarh</option>
                                        <option value="bikaner">bikaner</option>
                                        <option value="jaipur">jaipur</option>
                                        <option value="jaisalmer">jaisalmer</option>
                                        <option value="jodhpur">jodhpur</option>
                                        <option value="kota">kota</option>
                                        <option value="pushkar">pushkar</option>
                                    </div>

                                    <div id="uttarakhand" hidden>
                                        <option value="bhimtal">bhimtal</option>
                                        <option value="dehradun">dehradun</option>
                                        <option value="devprayag">devprayag</option>
                                        <option value="haridwar">haridwar</option>
                                        <option value="kedarnath">kedarnath</option>
                                        <option value="mussoorie">mussoorie</option>
                                        <option value="nainital">nainital</option>
                                        <option value="ranikhet">ranikhet</option>
                                        <option value="rishikesh">rishikesh</option>
                                        <option value="rudrapur">rudrapur</option>
                                    </div>


                                    <div id="uttar_pradesh" hidden>
                                        <option value="agra">agra</option>
                                        <option value="allahabad">allahabad</option>
                                        <option value="ayodhya">ayodhya</option>
                                        <option value="bareilly">bareilly</option>
                                        <option value="jalaun">jalaun</option>
                                        <option value="kanpur">kanpur</option>
                                        <option value="lucknow">lucknow</option>
                                        <option value="meerut">meerut</option>
                                        <option value="noida">noida</option>
                                        <option value="saharanpur">saharanpur</option>
                                        <option value="varanasi">varanasi</option>
                                        <option value="vrindavan">vrindavan</option>
                                    </div>

                                    <div id="west_bengal" hidden>
                                        <option value="birbhum">birbhum</option>
                                        <option value="bishnupur">bishnupur</option>
                                        <option value="bolpur">bolpur</option>
                                        <option value="chandan_nagar">chandan nagar</option>
                                        <option value="durgapur">durgapur</option>
                                        <option value="haldia">haldia</option>
                                        <option value="hooghly">hooghly</option>
                                        <option value="kharagpur">kharagpur</option>
                                        <option value="kolkata">kolkata</option>
                                        <option value="krishna_nagar">krishna_nagar</option>
                                        <option value="raiganj">raiganj</option>
                                        <option value="shantipur">shantipur</option>
                                    </div>


                                </select>
                            </div>
                        </div>
                    </div>

                    {{--select crop--}}
                    <div class="form-group">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><label for="crop">Crop</label>
                                </h3>
                            </div>
                            <div class="panel-body">
                                <select class="form-control" name="crop" id="crop"  required>
                                    <option value="">Select Crop</option>
                                    <option value="banana"> banana</option>
                                    <option value="barley">barley</option>
                                    <option value="ginger">ginger</option>
                                    <option value="grape">grape</option>
                                    <option value="greenpea">green pea</option>
                                    <option value="maize">maize</option>
                                    <option value="papaya">papaya</option>
                                    <option value="pineapple">pineapple</option>
                                    <option value="potato">potato</option>
                                    <option value="rice">rice</option>
                                    <option value="sugarcane">sugarcane</option>
                                    <option value="tea">tea</option>
                                    <option value="tomato">tomato</option>
                                    <option value="wheat">wheat</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    {{--submit area--}}
                    <div class="form-group" style="margin-top: 3em;margin-bottom: 3em;">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><label for="area">Your Agricultural  Area (Hactares)</label></h3>
                            </div>
                            <div class="panel-body">
                                <input type="number" name="area" class="form-control" id="area" placeholder="Area in Hectares" required>
                            </div>
                        </div>
                    </div>

                    {{--button--}}
                    <div class="pull-right form-group" style="margin-right:1em;margin-top:-3em;">
                        <input type="submit" id="smart-button" class="btn btn-primary hvr-wobble-bottom"  value="&nbsp;&nbsp; Submit &nbsp;&nbsp;     ">
                    </div>
                </form>
            </div>
        </div>

    </div>
    <script>
        function state_selected(){
            var region_id=$("#state option:selected").attr('value');
            $('#'+)
            $('#'+region_id).removeAttr('hidden');


        }

    </script>

@endsection

