$(document).ready(function(){
 $('#UserAddForm, #UserEditForm').submit(function(){ 
   var fid=$('form').attr('id');
   var formData = $('#'+fid).serialize();
   event.preventDefault();
    $.ajax({
     type : 'POST',
     url : '/dcportal/users/ajax_call',
     data: formData,
      beforeSend: function()
           {
      $('#save').val('Saving...');
      $('#save').attr('disabled', true);
      $(".error-message").remove();
           
           },
    success : function(response) {
     
     var response1=jQuery.parseJSON(response);
      $('#save').attr('disabled', false);
           if(response1.status=='success'){
           $('#save').val('Save');
           window.setTimeout(function() {
              $(".message").fadeOut('slow');
              $(".msg").text(response1.message);
              window.location = '/dcportal/users';
             }, 2000);
           }
           else if(response1.status=='error'){
            $('#save').attr('disabled', false);
            $('#save').val('Save');
            $(".msg").text(response1.message);
            $.each(response1.data, function(model, errors) {
                for (fieldName in this) {
                    var element = $("#" + camelcase(model + '_' + fieldName));
                    var create = $(document.createElement('div')).insertAfter(element);
                    create.addClass('error-message').text(this[fieldName][0])
                }
            });
            
           }
    },
    error : function() {
           
    }
   });
  
 });
 

    function camelcase(inputstring) {
        var a = inputstring.split('_'), i;
        s = [];
        for (i=0; i<a.length; i++){
            s.push(a[i].charAt(0).toUpperCase() + a[i].substring(1));
        }
        s = s.join('');
        return s;
    }

});