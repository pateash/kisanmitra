function state_selected(){
    // console.log('function called')

   // OPTIONS FOR SHOWING
    var madhya_pradesh_options="<option value='bhojpur'>bhojpur</option> " +
        "<option value='bhopal'>bhopal</option>" +
        " <option value='dewas'>dewas</option>" +
        " <option value='gwalior'>gwalior</option>" +
        " <option value='indore'>indore</option>" +
        " <option value='jabalpur'>jabalpur</option> " +
        "<option value='ratlam'>ratlam</option> " +
        "<option value='rewa'>rewa</option>" +
        " <option value='sagar'>sagar</option> " +
        "<option value='shivpuri'>shivpuri</option> " +
        "<option value='ujjain'>ujjain</option> " +
        "<option value='vidisha'>vidisha</option>";


    var assam_options="";
    assam_options+="<option value='badarpur'>badarpur</option>";
    assam_options+="<option value='dispur'>dispur</option>";
    assam_options+="<option value='guwahati'>guwahati</option>";
    assam_options+="<option value='jorhat'>jorhat</option>";
    assam_options+="<option value='karimganj'>karimganj</option>";
    assam_options+="<option value='silchar'>silchar</option>";
    assam_options+="<option value='tezpur'>tezpur</option>";

    var bihar_options=""
    bihar_options+="<option value='bodh_gaya'>bodh gaya</option>;"
    bihar_options+="<option value='chhapra'>chhapra</option>;"
    bihar_options+="<option value='gaya'>gaya</option>;"
    bihar_options+="<option value='muzaffarpur'>muzaffarpur</option>;"
    bihar_options+="<option value='patna'>patna</option>;"
    bihar_options+="<option value='ratlam'>ratlam</option>;"
    bihar_options+="<option value='sasaram'>sasaram</option>;"
    bihar_options+="<option value='sonpur'>sonpur</option>;"



    var gujrat_options=""
    gujrat_options+="<option value='ahmedabad'>ahmedabad</option>;"
    gujrat_options+="<option value='bhavnagar'>bhavnagar</option>;"
    gujrat_options+="<option value='bhuj'>bhuj</option>;"
    gujrat_options+="<option value='dandi'>dandi</option>;"
    gujrat_options+="<option value='dwarka'>dwarka</option>;"
    gujrat_options+="<option value='gandhi_nagar'>gandhi nagar</option>;"
    gujrat_options+="<option value='rajkot'>rajkot</option>;"
    gujrat_options+="<option value='surat'>surat</option>;"
    gujrat_options+="<option value='vadodara'>vadodara</option>;"

    var himachal_pradesh_options=""
    himachal_pradesh_options+="<option value='chamba'>chamba</option>;"
    himachal_pradesh_options+="<option value='dharamsala'>dharamsala</option>;"
    himachal_pradesh_options+="<option value='kullu'>kullu</option>;"
    himachal_pradesh_options+="<option value='manali'>manali</option>;"
    himachal_pradesh_options+="<option value='mandi'>mandi</option>;"
    himachal_pradesh_options+="<option value='naina_devi'>naina devi</option>;"
    himachal_pradesh_options+="<option value='palampur'>palampur</option>;"
    himachal_pradesh_options+="<option value='pathankot'>pathankot</option>;"
    himachal_pradesh_options+="<option value='shimla'>shimla</option>;"
    himachal_pradesh_options+="<option value='sundar_nagar'>sundar nagar</option>;"

    var maharastra_options=""
    maharastra_options+="<option value='akola'>akola</option>;"
    maharastra_options+="<option value='aurangabad'>aurangabad</option>;"
    maharastra_options+="<option value='bhirwandi'>bhirwandi</option>;"
    maharastra_options+="<option value='kolhapur'>kolhapur</option>;"
    maharastra_options+="<option value='latur'>latur</option>;"
    maharastra_options+="<option value='mumbai'>mumbai</option>;"
    maharastra_options+="<option value='nagpur'>nagpur</option>;"
    maharastra_options+="<option value='pune'>pune</option>;"
    maharastra_options+="<option value='shirdi'>shirdi</option>;"
    maharastra_options+="<option value='solapur'>solapur</option>;"
    maharastra_options+="<option value='thane'>thane</option>;"

    var rajasthan_options=""
    rajasthan_options+="<option value='ajmer'>ajmer</option>;"
    rajasthan_options+="<option value='alwar'>alwar</option>;"
    rajasthan_options+="<option value='amer'>amer</option>;"
    rajasthan_options+="<option value='bhangarh'>bhangarh</option>;"
    rajasthan_options+="<option value='bikaner'>bikaner</option>;"
    rajasthan_options+="<option value='jaipur'>jaipur</option>;"
    rajasthan_options+="<option value='jaisalmer'>jaisalmer</option>;"
    rajasthan_options+="<option value='jodhpur'>jodhpur</option>;"
    rajasthan_options+="<option value='kota'>kota</option>;"
    rajasthan_options+="<option value='pushkar'>pushkar</option>;"

    var uttarakhand_options=""
    uttarakhand_options+="<option value='bhimtal'>bhimtal</option>;"
    uttarakhand_options+="<option value='dehradun'>dehradun</option>;"
    uttarakhand_options+="<option value='devprayag'>devprayag</option>;"
    uttarakhand_options+="<option value='haridwar'>haridwar</option>;"
    uttarakhand_options+="<option value='kedarnath'>kedarnath</option>;"
    uttarakhand_options+="<option value='mussoorie'>mussoorie</option>;"
    uttarakhand_options+="<option value='nainital'>nainital</option>;"
    uttarakhand_options+="<option value='ranikhet'>ranikhet</option>;"
    uttarakhand_options+="<option value='rishikesh'>rishikesh</option>;"
    uttarakhand_options+="<option value='rudrapur'>rudrapur</option>;"

    var uttar_pradesh_options=""
    uttar_pradesh_options+="<option value='agra'>agra</option>;"
    uttar_pradesh_options+="<option value='allahabad'>allahabad</option>;"
    uttar_pradesh_options+="<option value='ayodhya'>ayodhya</option>;"
    uttar_pradesh_options+="<option value='bareilly'>bareilly</option>;"
    uttar_pradesh_options+="<option value='jalaun'>jalaun</option>;"
    uttar_pradesh_options+="<option value='kanpur'>kanpur</option>;"
    uttar_pradesh_options+="<option value='lucknow'>lucknow</option>;"
    uttar_pradesh_options+="<option value='meerut'>meerut</option>;"
    uttar_pradesh_options+="<option value='noida'>noida</option>;"
    uttar_pradesh_options+="<option value='saharanpur'>saharanpur</option>;"
    uttar_pradesh_options+="<option value='varanasi'>varanasi</option>;"
    uttar_pradesh_options+="<option value='vrindavan'>vrindavan</option>;"

    var west_bengal_options=""
    west_bengal_options+="<option value='birbhum'>birbhum</option>;"
    west_bengal_options+="<option value='bishnupur'>bishnupur</option>;"
    west_bengal_options+="<option value='bolpur'>bolpur</option>;"
    west_bengal_options+="<option value='chandan_nagar'>chandan nagar</option>;"
    west_bengal_options+="<option value='durgapur'>durgapur</option>;"
    west_bengal_options+="<option value='haldia'>haldia</option>;"
    west_bengal_options+="<option value='hooghly'>hooghly</option>;"
    west_bengal_options+="<option value='kharagpur'>kharagpur</option>;"
    west_bengal_options+="<option value='kolkata'>kolkata</option>;"
    west_bengal_options+="<option value='krishna_nagar'>krishna_nagar</option>;"
    west_bengal_options+="<option value='raiganj'>raiganj</option>;"
    west_bengal_options+="<option value='shantipur'>shantipur</option>;"

    var region_id=$("#state option:selected").attr('value');
    console.log(region_id+'is selected now');
    if(region_id!="empty"){
       // console.log(region_id+' was selected and not empty');
        //remove previous
        $("#region").html("");
        //add according to selected element
        switch(region_id){
            case "uttar_pradesh":
                $("#region").html(uttar_pradesh_options);
                break;
            case "madhya_pradesh":
                $("#region").html(madhya_pradesh_options);
                break;
            case "bihar":
                $("#region").html(bihar_options);
                break;
            case "maharastra":
                $("#region").html(maharastra_options);
                break;
            case "uttarakhand":
                $("#region").html(uttarakhand_options);
                break;
            case "gujrat":
                $("#region").html(gujrat_options);
                break;
            case "rajasthan":
                $("#region").html(rajasthan_options);
                break;
            case "himachal_pradesh":
                $("#region").html(himachal_pradesh_options);
                break;
            case "west_bengal":
                $("#region").html(west_bengal_options);
                break;
            case "assam":
                $("#region").html(assam_options);
                break;
        }
    }
    else {
        console.error("region_id was empty");
    }
    // $('#'+)
    // $('#'+region_id).removeAttr('hidden');
    //

}
