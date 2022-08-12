
jQuery('#loginButton').click(function (event) {
    let userType = jQuery('#user_type').find(":selected").val();
    alert(userType)
    if (userType == 'NULL') {
        event.preventDefault();
        $("#user_type").parent().after("<div class='userDiv' style='color:red;margin-bottom: -6px;padding-left: 320px;'>Please Select User Type</div>");
        $('#user_type').change(function () {
            $('.userDiv').hide();
        });
    }
});

jQuery('#user_type').change(function () {
    jQuery('#loginButton').attr('href', jQuery('#loginButton').attr('href') + '?type=' + jQuery(this).val());
}); 