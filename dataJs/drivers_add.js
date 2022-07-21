

var deleted_file_ids = [];

var errorMsg = document.querySelector("#error-msg");
var validMsg = document.querySelector("#valid-msg");

// here, the index maps to the error code returned from getValidationError - see readme
var errorMap = ["Invalid number", "Invalid country code", "Too short", "Too long", "Invalid number"];


var input = document.querySelector("#phone_custom");
var iti = window.intlTelInput(input, {

  geoIpLookup: function (callback) {
    $.get("http://ipinfo.io", function () { }, "jsonp").always(function (resp) {
      var countryCode = (resp && resp.country) ? resp.country : "";
      callback(countryCode);
    });
  },
  initialCountry: "auto",
  nationalMode: true,

  separateDialCode: true,
  utilsScript: "assets/js/input-js/utils.js",
});




var reset = function () {
  input.classList.remove("error");
  errorMsg.innerHTML = "";
  errorMsg.classList.add("hide");
  validMsg.classList.add("hide");
};

// on blur: validate
input.addEventListener('blur', function () {
  reset();
  if (input.value.trim()) {

    if (iti.isValidNumber()) {

      $('#phone').val(iti.getNumber());

      validMsg.classList.remove("hide");

    } else {

      input.classList.add("error");
      var errorCode = iti.getValidationError();
      errorMsg.innerHTML = errorMap[errorCode];
      errorMsg.classList.remove("hide");

    }
  }
});

// on keyup / change flag: reset
input.addEventListener('change', reset);
input.addEventListener('keyup', reset);









$(function () {

  var count = 1;

  $(document).on('click', '#add_row', function () {

    count++;

    $('#total_address').val(count);

    var html_code = '';
    var parent = $('#div_parent_' + count);



    html_code += '<div id="div_parent_' + count + '">';
    html_code += '<hr>';

    html_code += '<h4>Address ' + count + '</h4>';


    html_code += '<div class="row">';

    html_code += '<div class="col-md-6">' +
      '<div class="form-group">' +
      '<label for="phoneNumber1">Address</label>' +
      '<input type="text" class="form-control" name="address[]"  id="address' + count + '"placeholder="Address">' +
      '</div>' +
      '</div>';

    html_code += '<div class="col-md-6">' +
      '<div class="form-group">' +
      '<label for="emailAddress1">Country</label>' +
      '<input type="text" class="form-control" name="country[]"  id="country' + count + '" placeholder="Country">' +
      '</div>' +
      '</div>';


    html_code += '</div>';


    html_code += '<div class="row">';

    html_code += '<div class="col-md-6">' +
      '<div class="form-group">' +
      '<label for="phoneNumber1">City</label>' +
      '<input type="text" class="form-control" id="city' + count + '" name="city[]" placeholder="City">' +
      '</div>' +
      '</div>';

    html_code += '<div class="col-md-6">' +
      '<div class="form-group">' +
      '<label for="phoneNumber1">Zip code</label>' +
      '<input type="text" class="form-control" name="postal[]" id="postal' + count + '" placeholder="Zip code">' +
      '</div>' +
      '</div>';

    html_code += '</div>';

    html_code += '<div class="row pull-">';
    html_code += '<div align="right" class="col-md-12">' +
      '<button type="button" name="remove_row" id="' + count + '" class="btn btn-danger   remove_row mt-2 mb-3"><span class="fa fa-trash"></span> Delete</button>' +
      '</div>';

    html_code += '</div>';


    html_code += '</div>'; //div parent

    $('#div_address_multiple').append(html_code);







  });



  $(document).on('click', '.remove_row', function () {

    var row_id = $(this).attr("id");
    var parent = $('#div_parent_' + row_id);



    count--;
    parent.fadeOut(400, function () {

      $('#div_parent_' + row_id).remove();

    });
    $('#total_address').val(count);

  });


});


//Registro de datos

$("#save_user").on('submit', function (event) {


  var count = $('#total_address').val();
  var validate = 0;

  for (var no = 1; no <= count; no++) {

    if ($.trim($('#address' + no).val()).length == 0) {
      alert("Please enter address");
      $('#address' + no).focus();

      return false;
    }


    if ($.trim($('#country' + no).val()).length == 0) {
      alert("Please enter country");
      $('#country' + no).focus();

      return false;
    }

    if ($.trim($('#city' + no).val()).length == 0) {
      alert("Please enter city");
      $('#city' + no).focus();

      return false;
    }

    if ($.trim($('#postal' + no).val()).length == 0) {
      alert("Please enter zip code");
      $('#postal' + no).focus();

      return false;
    }

  }


  // if(validate==0){
  if (iti.isValidNumber()) {


    $('#save_data').attr("disabled", true);
    var parametros = $(this).serialize();
    var vehiclecode = $('#vehiclecode').val();
    var enrollment = $('#enrollment').val();
    var inputFileImage = document.getElementById("avatar");
    var username = $('#username').val();
    var email = $('#email').val();
    var fname = $('#fname').val();
    var lname = $('#lname').val();
    var notes = $('#notes').val();
    var phone = $('#phone').val();
    var gender = $('#gender').val();
    var locker = $('#locker').val();
    var password = $('#password').val();
    var notify = $('#notify:checked').val();
    var active = $('input:radio[name=active]:checked').val();
    var newsletter = $('input:radio[name=newsletter]:checked').val();
    var total_address = $('#total_address').val();
    var landmark = $('#landmark').val();

    var address = document.getElementsByName('address[]');
    var country = document.getElementsByName('country[]');
    var city = document.getElementsByName('city[]');
    var postal = document.getElementsByName('postal[]');

    var filesMultiple = document.getElementsByName('filesMultiple[]');
    
    var file = inputFileImage.files[0];
    

    var data = new FormData(this);
    
    
    data.append("deleted_file_ids", deleted_file_ids);    
    data.append('filesMultiple', filesMultiple);
    data.append('enrollment', enrollment);
    data.append('vehiclecode', vehiclecode);
    data.append('avatar', file);
    data.append('locker', locker);
    data.append('username', username);
    data.append('password', password);
    data.append('fname', fname);
    data.append('lname', lname);
    data.append('email', email);
    data.append('phone', phone);
    data.append('gender', gender);
    data.append('active', active);
    data.append('newsletter', newsletter);
    data.append('notes', notes);
    data.append('notify', notify);
    data.append('total_address', total_address);
    data.append('landmark', landmark);

    for (var a of address) { data.append('address[]', a.value); }
    for (var c of country) { data.append('country[]', c.value); }
    for (var ci of city) { data.append('city[]', ci.value); }
    for (var p of postal) { data.append('postal[]', p.value); }

    $.ajax({

      type: "POST",
      url: "ajax/drivers/drivers_add_ajax.php",
      data: data,
      contentType: false,       // The content type used when sending data to the server.
      cache: false,             // To unable request pages to be cached
      processData: false,
      beforeSend: function (objeto) {
        $("#resultados_ajax").html("<img src='assets/images/loader.gif'/><br/>Wait a moment please....");
      },
      success: function (datos) {
        $("#resultados_ajax").html(datos);
        $('#save_data').attr("disabled", false);

        $('html, body').animate({
          scrollTop: 0
        }, 600);

        
        setTimeout(function (){
          if( $("#reloadForm").val() != null){
          location.reload() }}
          ,3000);
      }
    });

  } else {

    input.classList.add("error");
    var errorCode = iti.getValidationError();
    errorMsg.innerHTML = errorMap[errorCode];
    errorMsg.classList.remove("hide");
    $('#phone_custom').focus();


  }



  event.preventDefault();

})














function cdp_deleteImgAttached(id) {

  var parent = $('#file_delete_item_' + id);
  var name = $(this).attr('data-rel');
  new Messi('<p class="messi-warning"><i class="icon-warning-sign icon-3x pull-left"></i>Are you sure you want to delete this record?<br /><strong>This action cannot be undone!!!</strong></p>', {
    title: 'Delete file',
    titleClass: '',
    modal: true,
    closeButton: true,
    buttons: [{
      id: 0,
      label: 'Delete',
      class: '',
      val: 'Y'
    }],
    callback: function (val) {
      if (val === 'Y') {
        $.ajax({
          type: 'post',
          url: './ajax/users/users_files_uploads_delete_ajax.php',
          data: {
            'id': id,
          },
          beforeSend: function () {
            parent.animate({
              'backgroundColor': '#FFBFBF'
            }, 400);

            parent.remove();
          },
          success: function (data) {
            
            $('#resultados_ajax_delete_file').html(data);        

          }
        });
      }
    }

    // });
  });
}


function cdp_preview_images() 
{

    $('#image_preview').html("");

     var total_file=document.getElementById("filesMultiple").files.length;

     for(var i=0;i<total_file;i++)
     {

         var mime_type = event.target.files[i].type.split("/");
         var src = "";
            if(mime_type[0] == "image") {

              src = URL.createObjectURL(event.target.files[i]);

            }else {
              src = 'assets/images/no-preview.jpeg';
            }
       
        $('#image_preview').append(
            '<div class="col-md-6" id="image_'+i+'">'+
                '<img style="width: 180px; height: 180px;" class="img-thumbnail" src="'+src+'">'+
                '<div class="row">'+
                    '<div class=" col-md-12 mt-2 mb-2">'+
                        '<span>'+event.target.files[i].name+'</span>'+                                                                                 
                    '</div>'+                   
                '</div>'+

                '<div class="row">'+
                    '<div class="  mb-2">'+
                        '<button type="button" class="btn btn-danger btn-sm pull-left" onclick="cdp_deletePreviewImage('+i+');"><i class="fa fa-trash"></i></button>'+                                                                                 
                    '</div>'+                   
                '</div>'+                 
            '</div>'
        );
     }
}

function cdp_deletePreviewImage(index){



    deleted_file_ids.push(index);

    $('#deleted_file_ids').val(deleted_file_ids);


    $('#image_'+index).remove();

    var count_files = $('#total_item_files').val();

     count_files--;

    $('#total_item_files').val(count_files);

     if (count_files > 0) {

        $('#clean_files').removeClass('hide');

    } else {

        $('#clean_files').addClass('hide');

    }

    $('#selectItem').html('attached files (' + count_files + ')');

    var deleted_file = $('#deleted_file_ids').val();



}
 

function cdp_validateZiseFiles() {

    var inputFile = document.getElementById('filesMultiple');
    var file = inputFile.files;

    var size = 0;

    for (var i = 0; i < file.length; i++) {

        var filesSize = file[i].size;

        if (size > 5242880) {

            $('.resultados_file').html("<div class='alert alert-danger'>" +
                "<button type='button' class='close' data-dismiss='alert'>&times;</button>" +
                "<strong>Error! Sorry, but the file size is too large. Select files smaller than 5MB. </strong>" +

                "</div>"
            );

            $("#filesMultiple").val('');
            $('#clean_files').addClass('hide');
            $('#image_preview').html("");

        } else {
            $('.resultados_file').html("");
        }

        size += filesSize;
    }

    if (size > 5242880) {
        $('.resultados_file').html("<div class='alert alert-danger'>" +
            "<button type='button' class='close' data-dismiss='alert'>&times;</button>" +
            "<strong>Error! Sorry, but the file size is too large, Select files smaller than 5MB. </strong>" +

            "</div>"
        );

        $("#filesMultiple").val('');
        $('#clean_files').addClass('hide');
        $('#image_preview').html("");
        return true;

    } else {
        $('.resultados_file').html("");

        return false;
    }

}




$('#openMultiFile').on('click', function () {

    $("#filesMultiple").click();
});


$('#clean_file_button').on('click', function () {

    $("#filesMultiple").val('');

    $('#selectItem').html('Attach files');

    $('#clean_files').addClass('hide');
    $('#image_preview').html("");
    $('.resultados_file').html("");


});



function verifyCountFiles() {

    deleted_file_ids = [];

    var inputFile = document.getElementById('filesMultiple');
    var file = inputFile.files;
    console.log(file)
    var contador = 0;
    for (var i = 0; i < file.length; i++) {

        contador++;
    }
    $('#total_item_files').val(contador);

    var count_files = $('#total_item_files').val();

    if (count_files > 0) {

        $('#clean_files').removeClass('hide');
    } else {

        $('#clean_files').addClass('hide');

    }

    $('#selectItem').html('attached files (' + count_files + ')');
}


function getStates(el) {
  var url = "./ajax/getStates.php";
  
  $.ajax({
    type: 'post',
    url: url,
    data: {country_name:el.value},
    beforeSend: function () {
      // parent.animate({
      //   'backgroundColor': '#FFBFBF'
      // }, 400);

      // parent.remove();
    },
    success: function(data){
      data = JSON.parse(data);
      $('.default').removeClass('d-none');
      $('.loading').addClass('d-none');
      $('#city1').find('option')
      .remove()
      .end()
      $('#city1').append($('<option>',{value:'Select', text:'Select State'}))
      $.each(data, function(i, item){
        $('#city1').append($('<option>',{
          value: item,
          text:item
        }))
      })
    }
  })
  // $.get(url, function(data) {
  //     console.log(data)
  //     // data = JSON.parse(data);
  //     // $('.default').removeClass('d-none');
  //     // $('.loading').addClass('d-none');
  //     $('#city1').find('option')
  //     .remove()
  //     .end()
  //     $('#city1').append($('<option>',{value:'Select', text:'Select State'}))
  //     $.each(data, function(i, item) {
  //         $('#city1').append($('<option>', {
  //             value: item,
  //             text: item
  //         }));
  //     });

  // });
}
