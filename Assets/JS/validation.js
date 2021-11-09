$(document).ready(function(){

     //contactus form
     $('#frmContactUs').submit(function(e) {
        $("#btnContactus").attr('disabled', true);
        var data = new FormData(document.getElementById("frmContactUs"));
        $.ajax({
            url: "dbConnectivity.php?oper=contactus",
            type: "post",
            data: data,
            cache: false,
            contentType: false,
            processData: false,
            success: function(response) {
                var result = jQuery.parseJSON(response);
                if (result.dbStatus == 'SUCCESS') {
                    alert(result.dbMessage);
                    $("#btnContactus").removeAttr('disabled');
                    $('#frmContactUs').trigger('reset');
                    $("#btnContactus").attr('disabled', false);
                } else if (result.dbStatus == 'FAILURE') {
                    alert(result.dbMessage);
                    $("#btnContactus").removeAttr('disabled');
                    $('#frmContactUs').trigger('reset');
                    $("#btnContactus").attr('disabled', false);
                }
            }
        });
        
        e.preventDefault();
    });
    
    // PATIENT JOIN US
    $('#frmPatientJoinUs').submit(function(e) {
        $("#btnPatientJoinUs").attr('disabled', true);
        var data = new FormData(document.getElementById("frmPatientJoinUs"));
        $.ajax({
            url: "./dbConnectivity.php?oper=patient",
            type: "POST",
            data: data,
            cache: false,
            contentType: false,
            processData: false,
            success: function(response) {
                var result = jQuery.parseJSON(response);
                if (result.dbStatus == 'SUCCESS') {
                    alert(result.dbMessage);
                    $("#btnPatientJoinUs").removeAttr('disabled');
                    $('#myModal').modal('hide');
                    $('#frmPatientJoinUs').trigger('reset');
                    $("#btnPatientJoinUs").attr('disabled', false);
                } else if (result.dbStatus == 'FAILURE') {
                    alert(result.dbMessage);
                    $("#btnPatientJoinUs").removeAttr('disabled');
                    $('#myModal').modal('hide');
                    $('#frmPatientJoinUs').trigger('reset');
                    $("#btnPatientJoinUs").attr('disabled', false);
                }
            }
        });
        
        e.preventDefault();
    });

     //join us providers form submit
    $('#frmProviders').submit(function(e) {
        $("#btnProvidersSubmit").attr('disabled', true);
        var data = new FormData(document.getElementById("frmProviders"));
        $.ajax({
            url: "./dbConnectivity.php?oper=provider",
            type: "post",
            data: data,
            cache: false,
            contentType: false,
            processData: false,
            success: function(response) {
                var result = jQuery.parseJSON(response);
                if (result.dbStatus == 'SUCCESS') {
                    alert(result.dbMessage);
                    $("#btnProvidersSubmit").removeAttr('disabled');
                    $('#frmProviders').trigger('reset');
                    $("#btnProvidersSubmit").attr('disabled', false);
                } else if (result.dbStatus == 'FAILURE') {
                    alert(result.dbMessage);
                    $("#btnProvidersSubmit").removeAttr('disabled');
                    $('#frmProviders').trigger('reset');
                    $("#btnProvidersSubmit").attr('disabled', false);
                }
            }
        });
        
        e.preventDefault();
    });
     //join us pharmacy form submit
    $('#frmPharmacy').submit(function(e) {
            $("#btnPharmacySubmit").attr('disabled', true);
            var data = new FormData(document.getElementById("frmPharmacy"));
            $.ajax({
                url: "./dbConnectivity.php?oper=pharmacy",
                type: "post",
                data: data,
                cache: false,
                contentType: false,
                processData: false,
                success: function(response) {
                    var result = jQuery.parseJSON(response);
                    if (result.dbStatus == 'SUCCESS') {
                        alert(result.dbMessage);
                        $("#btnPharmacySubmit").removeAttr('disabled');
                        $('#frmPharmacy').trigger('reset');
                        $("#btnPharmacySubmit").attr('disabled', false);
                    } else if (result.dbStatus == 'FAILURE') {
                        alert(result.dbMessage);
                        $("#btnPharmacySubmit").removeAttr('disabled');
                        $('#frmPharmacy').trigger('reset');
                        $("#btnPharmacySubmit").attr('disabled', false);
                    }
                }
            });
            
        e.preventDefault();
    });

});