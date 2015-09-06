var base_url = 'http://localhost/tanyadong/';

var url = '';
var type = '';
var dataType = '';
var data = '';
var async = '';
var headers = '';

var click_check_signup = true;

function init(){
    url = '';
    type = 'GET';
    dataType = 'json';
    data = '';
    async = true;    
}

function call_ajax(url, type, dataType, data, async){
	var dataReturn = '';
    $.ajax({
        async: async,
        url: url,        
        type: type,
        dataType: dataType,
        data : data,

        success: function (data) {
            
            dataReturn = data;
        },
        error: function (data) {
            dataReturn = false;
        }
    });   
    return dataReturn;
}

function check_signup(){	
	click_check_signup = false;

	if ($( "#password").val() != $( "#konfirm_password").val()){
		sweetAlert("Oops...", "Password doesn't match !", "error");
		click_check_signup = true;
		return false;
	}

	init();
	url = base_url+'login/do_signup';
	data = $('#form_signup').serialize();
	async = false;
	dataType = 'text';
	type = "POST";

	if (call_ajax(url, type, dataType, data, async) == 'Success'){
		swal({   title: "Success!",   text: "Check Your Email Now !",   type: "success",   
			   confirmButtonText: "Ok",   
			closeOnConfirm: false }, function(){ window.location.assign(base_url) });
		// swal("Success!", "Check Your Email Now !", "success");
		// return true;
	}
	else{
		swal("Failed !", "Ensure Your Email and User name are unique !", "warning");
		click_check_signup = true;
	}
	return false;
}