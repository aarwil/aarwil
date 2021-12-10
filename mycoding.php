//User Logged in or not
<?php
// This code should be in functions.php
function ajax_check_user_logged_in() {
    echo is_user_logged_in()?'yes':'no';
    die();
}
add_action('wp_ajax_is_user_logged_in', 'ajax_check_user_logged_in');
add_action('wp_ajax_nopriv_is_user_logged_in', 'ajax_check_user_logged_in');
?>
// This code should be in your checking line jquery
<script>
var data11 = {
            action: 'is_user_logged_in'
        };
    jQuery.post(wpbc_ajaxurl, data11, function(response) {
        if(response == 'yes') {
            send_ajax_submit(bk_type,formdata,captcha_chalange,user_captcha,is_send_emeils,my_booking_hash,my_booking_form,wpdev_active_locale   ); // Ajax sending request
        } else {
            // user is not logged in, show login form here
            jQuery('#booking_form_div' + bk_type ).hide();            
            document.getElementById('submiting' + bk_type).innerHTML = '<div style="height:20px;width:100%;text-align:center;margin:15px auto;"><p>Please Login Before Booking <a style="color:blue;" href="/dalvkot-sbtskm/log-in" title="Members Area Login" rel="home"> Click here to Login</a></p><//div>';
            return;
        }
    });
</script>
// Email Template for php mailer
<?php
  $vshTeamAppointmentForm = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
                <html xmlns="http://www.w3.org/1999/xhtml">                
                    <head>
                        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
                        <title>eDoc::Vyedehi Super Speciality Hospital</title>
                        <link rel="shortcut icon" href="favicon.png">
                        <style type="text/css">
                            body
                            {
                                font-family: "Helvetica", sans-serif;
                                font-size:16px;
                                line-height: 25px;
                            }
                    
                            * {
                                outline: none;
                                border:none;
                            }
                    
                            img {
                                border: none;
                                display: block;
                            }
                    
                            p {
                                margin: 0;
                                padding: 10px; 
                                font-size: 14px;
                                color:  #00215B;
                                font-family: "Helvetica", sans-serif;
                            }
                        </style>
                    </head>
                
                    <body style="background: #03a9f405;">
                        <center>
                            <table width="735" border="0" cellspacing="0" cellpadding="0" style="background:#ffffff;padding: 20px;margin-top:15px;margin-bottom: 10px">
                                <tr>
                                    <td width="735" align="center" valign="top"><img src="https://vims.ac.in/education/wp-content/uploads/2021/12/vssh.png" width="150" style="padding:20px" alt="Logo" /></td>
                                </tr>
                                <tr>
                                    <td width="735" align="left" valign="top">
                                    <p>Dear <b>VSH Team,</b></p>
                                    <p>You have received a new enquiry from website. Please find the details below.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="735" align="left" valign="top">
                                        <p>
                                            Name: '.$Name.'<br>
                                            Phone: <a href="tel:'.$phone.'">'.$phone.'</a><br>
                                            Email: <a href="mailto:'.$emailId.'">'.$emailId.'</a><br>
                                            Department: <a href="mailto:'.$emailId.'">'.$emailId.'</a><br>
                                            Doctor: <a href="mailto:'.$emailId.'">'.$emailId.'</a><br>
                                            Date and Time: <a href="mailto:'.$emailId.'">'.$emailId.'</a><br>
                                            Message: <br>'.$yourMessage.'
                                        </p>
                                    </td>
                                </tr>                  
                                <tr>
                                    <td width="735" align="left" valign="top">
                                    <p>Thank you,<br>
                                    Vydehi Super Speciality Hospital,
                                    </p> 
                                    </td>
                                </tr>
                            </table>
                            <table width="735" border="0" cellspacing="0" cellpadding="0" style="background:#efefef;padding: 20px">
                                <tr>
                                    <td width="735" align="center" valign="top">
                                    <p style="color:#00215B;font-size:20px;"><b>Vydehi Superspeciality Hospital.</b></p>
                                    <p style="padding: 8px">No. 2, Vittal Mallya Road, Bengaluru - 560066, Karnataka India</p>
                                    <p style="color:#00215B;">&#x1F5D7;: https://www.vsshospital.com | &#9742;: <a href="tel:080-68697999">+91-80-68697999</a> | &#9993;: info@vsshospital.com</p>
                                    </td>
                                </tr>
                            </table>
                        </center>
                    </body>
                </html>';
?>
