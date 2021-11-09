$(document).ready(function () {
    $.ajax({
        url: './dbConnectivity.php?oper=countries',
        type:"get",
        success: function(response) {
            var options = "";
            if (response.dbStatus == "SUCCESS") {  
              $.each(response.aaData,function(i, data) {
    
                if(data.name == 'canada' || data.name == 'CANADA' || data.name == 'Canada'){
    
                    options += "<option selected value= '"+data.iso3+"'>"+data.name+"</option>";
                }
                else{
                    options += "<option value= '"+data.iso3+"'>"+data.name+"</option>";
                }               
              });
              $("#country").html(options);
              $("#country_phar").html(options);
            }
        },
        error:function(response) {
          alert('Something went wrong....');
        }
      });
    

});