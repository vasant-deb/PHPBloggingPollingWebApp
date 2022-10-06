$(document).ready(function(){

    $('#OrderSameaddress').bind('change', function () {

        if($('#OrderSameaddress').prop('checked')) {

		    $('#OrderShippingFirstName').val($('#OrderFirstName').val());
			$('#OrderShippingLastName').val($('#OrderLastName').val());
			$('#OrderShippingEmail').val($('#OrderEmail').val());
			$('#OrderShippingPhone').val($('#OrderPhone').val());
			
            $('#OrderShippingAddress').val($('#OrderBillingAddress').val());
            $('#OrderShippingAddress2').val($('#OrderBillingAddress2').val());
            $('#OrderShippingCity').val($('#OrderBillingCity').val());
            $('#OrderShippingState').val($('#OrderBillingState').val());
            $('#OrderShippingZip').val($('#OrderBillingZip').val());
            $('#OrderShippingCountry').val($('#OrderBillingCountry').val());

        } else {
			$('#OrderShippingFirstName').val('');
			$('#OrderShippingLastName').val('');
			$('#OrderShippingEmail').val('');
			$('#OrderShippingPhone').val('');
			
            $("#OrderShippingAddress").val('');
            $('#OrderShippingAddress2').val('');
            $('#OrderShippingCity').val('');
            $('#OrderShippingState').val('');
            $('#OrderShippingZip').val('');
            $('#OrderShippingCountry').val('');

        }

    });

});