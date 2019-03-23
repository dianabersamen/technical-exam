$(document).ready(function(){
    $('#next').on('click', function(e){
        e.preventDefault();
        // var submitForm = $('#formSubmit').serializeArray();
        var lastname = $('#lastname').val();
        var firstname = $('#firstname').val();
        var contactNum = $('#contactNum').val();
        var email = $('#email').val();
        var nric = $('#nric').val();
        var address = $('#address').val();
        var city = $('#city').val();
        var state = $('#state').val();
        var country = $('#country').val();
        var zipcode = $('#zipcode').val();
        
        $.ajax({
            dataType: "html",
            type: 'POST',
            url: "preview.php",
            data: {
                lname:lastname,
                fname:firstname,
                contactNum:contactNum,
                email:email,
                nric:nric,
                address:address,
                city:city,
                state:state,
                country:country,
                zipcode:zipcode
            },
            success: function (response) {
                $('#formSubmit').hide();
                $('.result').append(response);
            }
        });
    });
});