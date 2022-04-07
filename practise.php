function() {
  var countdiv = $('.formValidate').find('.outer_div').length;
  <!-- index  = countdiv; -->
  var html = '<div class="row outer_div"> 
                <div class="input-field col s6 ">
                    <label for="upc" class="p-2">UPC*</label>
                    <input id="upc" name="part_product[' + index + '][upc]" type="text"  data-error=".errorTxt1" required>
                </div>
                <div class="input-field col s6  ">
                    <label for="part_code" class="p-2">Part-Code*</label>
                    <input id="part_code" type="text" name="part_product[' + index + '][part_code]" data-error=".errorTxt2" required>
                    <small class="error_part"></small>
                </div>
                <div class="input-field col s6 ">
                    <label for="description" class="p-2">Description*</label>
                    <input id="" name="part_product[' + index + '][description]" type="text"  data-error=".errorTxt1" required>
                </div>
                <div class="input-field col s6 ">
                    <label for="hsn" class="p-2">HSN Code*</label>
                    <input id="hsn" name="part_product[' + index + '][hsn]" type="text"  data-error=".errorTxt1" required>
                </div>
            </div>';


  var countdiv = $('.formValidate').find('.outer_div').length;
  $('.formValidate').append(html);
  index++;
}
<div class="acadamic-block">
   <div class="row outer_div">
      <div class="col-sm-2">
              <label class="">College/Institute/Certificate  <span class="required" aria-required="true"> * </span></label>
              <input type="text" class="form-control" name="acadamic[0][course_name]" required="" aria-required="true">
          
      </div>
      <div class="col-sm-2">
          
              <label class="">Type  <span class="required" aria-required="true"> * </span>
              </label>
              <select name="acadamic[0][course_type]" class="form-control" required="" aria-required="true">
                  <option value="">-Select-</option>
                  <option value="course">Course</option>
                  <option value="certificate">Certificate</option>
              </select>
          
      </div>
      <div class="col-sm-2">
          
              <label class="">Place  <span class="required" aria-required="true"> * </span> </label>
                  <input type="text" class="form-control" name="acadamic[0][place]" required="" aria-required="true">
         
      </div>
      <div class="col-sm-2">
              <label class="">From year  <span class="required" aria-required="true"> * </span></label>
               <input type="text" class="form-control initdatepicker" name="acadamic[0][from_year]" required="" readonly="" aria-required="true">
          
      </div>
      <div class="col-sm-2">
          <label>To year  <span class="required" aria-required="true"> * </span></label>
          <input type="text" class="form-control initdatepicker" name="acadamic[0][to_year]" required="" readonly="" aria-required="true">
      </div>
      <!--<div class="col-xs-2 text-right">
          <label style="display:block;">&nbsp;</label>
          <button class="btn btn-danger delete_row" type='button' ><i class="fa fa-trash"></i></button>
      </div>-->
  </div>
</div>
<div class="input-field col s6 ">
                                            <label for="upc" class="p-2">UPC*</label>
                                            <input id="upc" name="upc" type="text"  data-error=".errorTxt1" required>
                                        </div>
                                        <div class="input-field col s6  ">
                                          <label for="part_code" class="p-2">Part-Code*</label>
                                          <input id="part_code" type="text" name="part_code" data-error=".errorTxt2" required>
                                          <small class="error_part"></small>
                                          </div>
                                          <div class="input-field col s6 ">
                                            <label for="description" class="p-2">Description*</label>
                                            <input id="" name="description" type="text"  data-error=".errorTxt1" required>
                                          </div>
                                          <div class="input-field col s6 ">
                                            <label for="hsn" class="p-2">HSN Code*</label>
                                            <input id="hsn" name="hsn" type="text"  data-error=".errorTxt1" required>
                                          </div>

<div class="input-field col s6 ">
    <label for="upc" class="p-2">UPC*</label>
    <input id="upc" name="part_product[0][upc]" type="text"  data-error=".errorTxt1" required>
</div>
<div class="input-field col s6  ">
    <label for="part_code" class="p-2">Part-Code*</label>
    <input id="part_code" type="text" name="part_product[0][part_code]" data-error=".errorTxt2" required>
    <small class="error_part"></small>
</div>
<div class="input-field col s6 ">
    <label for="description" class="p-2">Description*</label>
    <input id="" name="part_product[0][description]" type="text"  data-error=".errorTxt1" required>
</div>
<div class="input-field col s6 ">
    <label for="hsn" class="p-2">HSN Code*</label>
    <input id="hsn" name="part_product[0][hsn]" type="text"  data-error=".errorTxt1" required>
</div>



<?php
ini_set('display_errors',1);
error_reporting(E_ALL);
if( !isset( $_GET['email'] ) || !isset( $_GET['vkey'] ) ){
    die;
}
$email = $_GET['email'];
$vkey = $_GET['vkey'];
$school_id = $_GET['school_id'];
$check_session = null;
include _DIR_."/includes/config.php";
//$user  = 
// pr($school);
$correct_user = check_user_for_updation( $email, $vkey );

 $staffdata = get_staff_memeber_from_id(get_staff_memeber_id_from_email($email)['staff_id']);
 
$doj = date('Y-m-d',strtotime($staffdata['doj']));
$currentdate=date("Y-m-d");
if(strtotime($currentdate) > strtotime($doj)){?>
     
             <div style="
    text-align: center;
    display: grid;
    margin: auto;
    padding-top: 100px;
">
                 <h1>Your date of joining is <?php echo $doj?></h1>
var FormWizard = function() {

    $('.term_condition').hide();
    return {
        //main function to initiate the module
        init: function() {
            if (!jQuery().bootstrapWizard) {
                return;
            }

            function format(state) {
                if (!state.id) return state.text; // optgroup
                return "<img class='flag' src='../../assets/global/img/flags/" + state.id.toLowerCase() + ".png'/>&nbsp;&nbsp;" + state.text;
            }

            $("#country_list").select2({
                placeholder: "Select",
                allowClear: true,
                formatResult: format,
                width: 'auto',
                formatSelection: format,
                escapeMarkup: function(m) {
                    return m;
                }
            });

            var form = $('#submit_form');
            var error = $('.alert-danger', form);
            var success = $('.alert-success', form);
            $.validator.addMethod('profile_pic_size', function(value, element, param) {
                return this.optional(element) || (element.files[0].size <= param)
            }, 'File size must be less than {0}');
            //validate for logo file size(logo_size)
            $.validator.addMethod('logo_size', function(value, element, param) {
                return this.optional(element) || (element.files[0].size <= param)
            }, 'File size must be less than {0}mb');
            var validCharactersRegex = new RegExp(/^[a-zA-Z. ]+$/);
            var doesNotStartWithDashOrSpace = new RegExp(/^[^ -]/);
            var fullname_invalid = function(value) {
                return validCharactersRegex.test(value) && doesNotStartWithDashOrSpace.test(value) && value.indexOf('  ') == -1 && value.indexOf('--') == -1 && value.indexOf(' -') == -1 && value.indexOf('- ') == -1;
            }


            $.validator.addMethod("custom_fullname", function(value, element) {
                return fullname_invalid(value);
            }, 'Your Fullname is invalid');
            form.validate({
                doNotHideMessage: true, //this option enables to show the error/success messages on tab switch.
                errorElement: 'span', //default input error message container
                errorClass: 'help-block help-block-error', // default input error message class
                focusInvalid: false, // do not focus the last invalid input
                rules: {
                    //account
                    username: {
                        minlength: 5,
                        required: true,
                        remote: "/ajax/check-username.php"
                    },
                    password: {
                        minlength: 5,
                        required: true
                    },
                    rpassword: {
                        minlength: 5,
                        required: true,
                        equalTo: "#submit_form_password"
                    },
                    //profile
                    fullname: {
                        required: true,
                        minlength: 3,
                        pattern: /^[A-Za-z\.\s]+$/,
                    },
                    father_name: {
                        required: true,
                        minlength: 3,
                        pattern: /^[A-Za-z\.\s]+$/,
                    },
                    mother_name: {
                        required: true,
                        minlength: 3,
                        pattern: /^[A-Za-z\.\s]+$/,
                    },
                    email: {
                        required: true,
                        email: true
                    },
                    phone: {
                        required: true,
                        minlength: 10,
                        maxlength: 10,
                        number: true
                    },
                    adhaar_number: {
                        minlength: 14,
                        maxlength: 14,
                        required: true,
                        pattern: /^[\d\s]+$/,
                    },
                    current_address: {
                        required: true
                    },
                    permanent_address: {
                        required: true
                    },
                    gender: {
                        required: true
                    },
                    dob: {
                        required: true,
                        number: true
                    },
                    pin_code: {
                        required: true,
                        number: true
                    },
                    city: {
                        required: true,
                        lettersonly: true
                    },
                    alter_phone: {
                        number: true,
                        minlength: 10,
                        maxlength: 10,
                    },
                    country: {
                        required: true,
                        lettersonly: true
                    },

                },

                messages: { // custom messages for radio buttons and checkboxes
                    'payment[]': {
                        required: "Please select at least one option",
                        minlength: jQuery.validator.format("Please select at least one option")
                    },
                    username: {
                        minlength: 'Please Enter atleat 5 character',
                        required: 'This feild is required',
                        remote: 'Username is already Taken'
                    }
                },

                errorPlacement: function(error, element) { // render error placement for each input type
                    if (element.attr("name") == "gender") { // for uniform radio buttons, insert the after the given container
                        error.insertAfter("#form_gender_error");
                    }
                    else if (element.attr("name") == "payment[]") { // for uniform checkboxes, insert the after the given container
                        error.insertAfter("#form_payment_error");
                    }
                    else {
                        error.insertAfter(element); // for other inputs, just perform default behavior
                    }
                },

                invalidHandler: function(event, validator) { //display error alert on form submit   
                    success.hide();
                    error.show();
                    App.scrollTo(error, -200);
                },

                highlight: function(element) { // hightlight error inputs
                    $(element)
                        .closest('.form-group').removeClass('has-success').addClass('has-error'); // set error class to the control group
                },

                unhighlight: function(element) { // revert the change done by hightlight
                    $(element)
                        .closest('.form-group').removeClass('has-error'); // set error class to the control group
                },

                success: function(label) {
                    if (label.attr("for") == "gender" || label.attr("for") == "payment[]") { // for checkboxes and radio buttons, no need to show OK icon
                        label
                            .closest('.form-group').removeClass('has-error').addClass('has-success');
                        label.remove(); // remove error label here
                    }
                    else { // display success icon for other inputs
                        label
                            .addClass('valid') // mark the current input as valid and display OK icon
                            .closest('.form-group').removeClass('has-error').addClass('has-success'); // set success class to the control group
                    }
                },

                submitHandler: function(form) {
                    success.show();
                    error.hide();
                    form[0].submit();
                    //add here some ajax code to submit your form or just call form.submit() if you want to submit the form without ajax
                }

            });


            $(document).on('click', function() {
                $('.outer_div').find('input,select').each(function() {
                    $(this).rules("add", {
                        required: true,
                    });
                });
            });

            /check file input/

            $('input[name^="profile_pic_file"]').each(function() {
                $(this).rules('add', {
                    required: true,
                    //accept: "image/jpeg, image/pjpeg"
                })
            })


            var bank = $('input[name^="bank"]');

            bank.filter('input[name$="[bank_name]"]').each(function() {
                $(this).rules("add", {
                    required: true,
                });
            });
            bank.filter('input[name$="[account_no]"]').each(function() {
                $(this).rules("add", {
                    required: true,
                });
            });
            bank.filter('input[name$="[ifsc]"]').each(function() {
                $(this).rules("add", {
                    required: true,
                });
            });
            bank.filter('input[name$="[bank_branch]"]').each(function() {
                $(this).rules("add", {
                    required: true,
                });
            });

            var displayConfirm = function() {

                /*Display acdamic details */
                //var countdiv  = $('.acadamic-block').find('.outer_div').length;
                var index = 1;
                $('.acadamic-block').find('.outer_div').each(function() {
                    var html = '';
                    html = '<tr> <th>' + index + '</th>';
                    $(this).find('input,select').each(function() {
                        //var label= $(this).parent().find('label').text();
                        var name = $(this).val();
                        html += '<td>' + name + '</td>';
                    });
                    html += '</tr>';
                    index++;
                    $('.display-data tbody').append(html);
                    html = '';
                });
                /*Display acdamic details ends */

                $('#tab5 .form-control-static', form).each(function() {

                    var input = $('[name="' + $(this).attr("data-display") + '"]', form);
                    if (input.is(":radio")) {
                        input = $('[name="' + $(this).attr("data-display") + '"]:checked', form);
                    }
                    if (input.is(":text") || input.is("textarea")) {
                        $(this).html(input.val());
                    }
                    else if (input.is("select")) {
                        $(this).html(input.find('option:selected').text());
                    }
                    else if (input.is(":radio") && input.is(":checked")) {
                        $(this).html(input.attr("data-title"));
                    }
                    else if ($(this).attr("data-display") == 'payment[]') {
                        var payment = [];
                        $('[name="payment[]"]:checked', form).each(function() {
                            payment.push($(this).attr('data-title'));
                        });
                        $(this).html(payment.join("<br>"));
                    }
                    else if (input.is(':file')) {
                        var html = input.closest('.fileinput').find('.fileinput-preview').clone();
                        $(this).html(html).addClass('fileinput');
                    }
                });
            }

            var handleTitle = function(tab, navigation, index) {
                var total = navigation.find('li').length;
                var current = index + 1;
                // set wizard title
                $('.step-title', $('#form_wizard_1')).text('Step ' + (index + 1) + ' of ' + total);
                // set done steps
                jQuery('li', $('#form_wizard_1')).removeClass("done");
                var li_list = navigation.find('li');
                for (var i = 0; i < index; i++) {
                    jQuery(li_list[i]).addClass("done");
                }
                if (current == 1) {
                    $('#form_wizard_1').find('.button-previous').hide();
                    $('.term_condition').hide();
                }
                else {
                    $('#form_wizard_1').find('.button-previous').show();
                }

                if (current >= total) {
                    $('#form_wizard_1').find('.button-next').hide();
                    $('#form_wizard_1').find('.button-submit').show();
                    $('.term_condition').show();
                    displayConfirm();
                }
                else {
                    $('#form_wizard_1').find('.button-next').show();
                    $('#form_wizard_1').find('.button-submit').hide();
                    $('.term_condition').hide();
                }
                App.scrollTo($('.page-title'));
            }

            // default form wizard
            $('#form_wizard_1').bootstrapWizard({
                'nextSelector': '.button-next',
                'previousSelector': '.button-previous',
                onTabClick: function(tab, navigation, index, clickedIndex) {
                    return false;

                    success.hide();
                    error.hide();
                    if (form.valid() == false) {
                        return false;
                    }

                    handleTitle(tab, navigation, clickedIndex);
                },
                onNext: function(tab, navigation, index) {
                    success.hide();
                    error.hide();

                    if (form.valid() == false) {
                        return false;
                    }

                    handleTitle(tab, navigation, index);
                },
                onPrevious: function(tab, navigation, index) {
                    success.hide();
                    error.hide();

                    handleTitle(tab, navigation, index);
                },
                onTabShow: function(tab, navigation, index) {
                    var total = navigation.find('li').length;
                    var current = index + 1;
                    var $percent = (current / total) * 100;
                    $('#form_wizard_1').find('.progress-bar').css({
                        width: $percent + '%'
                    });
                }
            });

            $('#form_wizard_1').find('.button-previous').hide();
            $('#form_wizard_1 .button-submit').click(function() {
                // var data = $('#submit_form').serializeArray();
                var data = new FormData($('#submit_form')[0]);
                var checked = $('.term_condition').find("input").prop("checked");
                if (checked == false) {
                    alert('Please Accept Terms and conditions');
                    return;
                }
                if (window.request_start) {
                    return;
                }
                $('.loader').fadeIn();
                window.request_start = true;
                $.ajax({
                    url: ajax_url + '/principal/ajax/update_staff.php',
                    type: 'post',
                    data: data,
                    contentType: false,
                    processData: false,
                    error: function(response) {
                        response = JSON.parse(response);
                        toastr.error(response.msg, 'Error!');
                        $('.loader').fadeOut();
                    },
                    success: function(response) {
                        toastr.remove();
                        response = JSON.parse(response);
                        if ('error' == response.status) {
                            toastr.error(response.msg, 'Error!');
                        }
                        if ('success' == response.status) {
                            toastr.success(response.msg, 'Success!');
                            $('#action_school_modal').modal('hide');
                            setTimeout(function() {
                                $('.loader').fadeOut();
                                window.location = "/";
                            }, 3000);
                        }
                    },
                    complete: function() {
                        $('.loader').fadeOut();
                        window.request_start = false;
                    },
                });
                // $.post('/ajax/update_user.php',data,function(response) {
                //     toastr.remove();
                //     $('#form_wizard_1 .button-submit').prop( 'disabled', false);
                //     response = JSON.parse(response);
                //     // console.log(response);return;
                //     if( 'error'==response.status ){
                //         toastr.error( response.msg,'Error');
                //         window.request_start = false;
                //     }
                //     if( 'success'==response.status ){
                //         toastr.success( response.msg,'Success' );
                //         setTimeout(function(){
                //         window.location = "/principal/index.php";
                //         },3000);
                //     }
                // });
            }).hide();

            //apply validation on select2 dropdown value change, this only needed for chosen dropdown integration.
            $('#country_list', form).change(function() {
                form.validate().element($(this)); //revalidate the chosen dropdown value and show error or success message for the input
            });

            $('.dob').datepicker({ maxDate: '-18Y', autoclose: true, });
        }

    };

}();

jQuery(document).ready(function() {
    FormWizard.init();
    var index = 1;
    $(document).on('click', '.add_more', function() {
        var countdiv = $('.acadamic-block').find('.outer_div').length;
        //index  = countdiv;
        var html = "<div class='row outer_div'>
             <div class='col-sm-2'> <label class=''>Name </label> 
                <input type='text' class='form-control' name='acadamic[" + index + "][course_name]' value='' required/>
             </div> 
             <div class='col-sm-2'>
                  <label class=''>Type </label>
                   <select name='acadamic[" + index + "][course_type]' class='form-control' required> 
                       <option value=''>-Select-</option> 
                       <option value='course'>Course</option>
                        <option value='certificate'>Certificate</option> 
                    </select> 
            </div> 
            <div class='col-sm-2'> 
                <label class=''>Place </label> 
                <input type='text' class='form-control' name='acadamic[" + index + "][place]' value='' required/> 
            </div> 
            <div class='col-sm-2'> 
                <label class=''>From year</label>
                <input type='text' class='form-control initdatepicker' name='acadamic[" + index + "][from_year]' value='' required readonly/>
             </div> 
             <div class='col-sm-2'> 
                 <label>To year</label>
                 <input type='text' class='form-control initdatepicker' name='acadamic[" + index + "][to_year]' value='' required readonly/>
            </div> 
            <div class='col-xs-2 text-right'> <label style='display:block;'>&nbsp;</label> <button class='btn btn-danger delete_row' type='button' ><i class='fa fa-trash'></i></button> </div> </div>";
        var countdiv = $('.acadamic-block').find('.outer_div').length;
        $('.acadamic-block').append(html);
        index++;
    });

    $(document).on('click', function() {
        $('.initdatepicker').datepicker({ autoclose: true });
    })

    $(document).on('click', '.delete_row', function() {
        $(this).closest('.outer_div').remove();
    });

});
$(function() {
    $('#check_username').bind('input', function() {
        $(this).val(function(_, v) {
            return v.replace(/\s+/g, '');
        });
    });
});
?>
<div class='input-field col s6 mb-4'>
    <?php for( $i=1 ; $i<=$count;$i++){ $row=mysqli_fetch_array($result); ?> 
        <option value='<?php echo $row['id']?>'><?php echo $row['brand_name']?></option>; 
    <?php } ?> 
</optgroup>
</select><
    /div> 
