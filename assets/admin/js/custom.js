jQuery(document).ready( function() {
    jQuery('#add_data_value').click(function(){
        //alert('Hello');
        var number_of_pages_admin = jQuery('#number_of_pages_admin').val();
        //alert(number_of_pages_admin);
        $.ajax({
            type: 'POST',
            url: ajax_object_admin.ajaxurl,
            data: {
              action: 'fixedprice',
              number_of_pages_admin: number_of_pages_admin
            },
            success: function(res) {
              //alert( data );
              //$('#number_of_pages_admin').html(res.number_of_pages_admin);
            }
          });

          $.ajax({
            type: 'POST',
            url: ajax_object_admin.ajaxurl,
            data: {
              action: 'viewprice',
              number_of_pages_admin: number_of_pages_admin
            },
            success: function(res) {
              //alert( data );
              $('#number_of_pages_admin').html(res.number_of_pages_admin);
            }
          });
    });
});