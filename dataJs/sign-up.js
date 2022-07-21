"use strict";
var deleted_file_ids = [];

$("#new_register").on('submit', function (event) {
  
  var username = $('#username').val();
    var email = $('#email').val();
    var fname = $('#fname').val();
    var lname = $('#lname').val();
    var locker = $('#locker').val();
    var password = $('#password').val();
    var country = $('#country').val();
    var city = $('#city').val();
    var postal = $('#postal').val();
    var landmark = $('#landmark').val();
    var address = $('#address').val();
    var terms = $('#terms:checked').val();

    var filesMultiple = document.getElementsByName('filesMultiple[]');
    
    
    

    var data = new FormData(this);
    
    
    data.append("deleted_file_ids", deleted_file_ids);    
    data.append('filesMultiple', filesMultiple);
    data.append('locker', locker);
    data.append('username', username);
    data.append('password', password);
    data.append('fname', fname);
    data.append('lname', lname);
    data.append('email', email);
    
    data.append('country', country);
    data.append('city', city);
    data.append('postal', postal);
    data.append('landark', landmark);
    data.append('address', address);
    data.append('terms', terms);
    


  $.ajax({
    type: "POST",
    url: "./ajax/sign_up_ajax.php",
    data: data,
    contentType: false,       // The content type used when sending data to the server.
    cache: false,             // To unable request pages to be cached
    processData: false,
    beforeSend: function (objeto) {
      $("#resultados_ajax").html("<img src='assets/images/loader.gif'/><br/>Wait a moment please...");
    },
    success: function (datos) {
      $("#resultados_ajax").html(datos);

      // $("html, body").animate({
      //   scrollTop: 0
      // }, 600);

    }
  });
  event.preventDefault();

});


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
      $('#myState').find('option')
      .remove()
      .end()
      $('#myState').append($('<option>',{value:'Select', text:'Select State'}))
      $.each(data, function(i, item){
        $('#myState').append($('<option>',{
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
  //     $('#myState').find('option')
  //     .remove()
  //     .end()
  //     $('#myState').append($('<option>',{value:'Select', text:'Select State'}))
  //     $.each(data, function(i, item) {
  //         $('#myState').append($('<option>', {
  //             value: item,
  //             text: item
  //         }));
  //     });

  // });
}


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
