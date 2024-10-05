<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact us</title>
    <!-- <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');
        h3,h4,h5,h6,p,ul,li{
            margin: 0;
            padding: 0;
            list-style: none;
        }
        body{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Roboto", system-ui;
        }
        .email-main-container{
            width: 100%;
            max-width: 700px;
            margin: auto;
            border-radius: 35px 0px 0px 0px;
            background: #F5F6FF;
            position: relative;
        }
        .email-main-container .email-header{
            text-align: center;
            border-radius: 35px 0px 32px 0px;
            background: #FADE00;
            padding: 20px 0;
        }
        .email-main-container .email-header img{
            width: 100%;
            max-width: 314px;
        }
        .email-main-container .email-body{
            padding: 30px 25px;
        }
        .email-body .heading-container{
            text-align: center;
        }
        .email-body .heading-container .title h4{
            color: #000;
            font-family: "Roboto", system-ui;
            font-size: 30px;
            font-weight: 600;
            line-height: 30px;
            margin-bottom: 13px;
        }
        .email-body .heading-container .title p{
            color: #000;
            font-family: "Roboto", system-ui;
            font-size: 16px;
            font-weight: 400;
            line-height: normal;
            margin-bottom: 7px;
        }
        .email-body .heading-container .title p a{
            color: #000;
        }
        .email-order-details{
            margin-top: 30px;
        }
        .email-order-details .order-information{
            margin-bottom: 10px;
        }
        .email-order-details .order-information h4{
            color: #000;
            font-family: "Roboto", system-ui;
            font-size: 22px;
            font-weight: 600;
            line-height: 30px;
        }
        .order-detailes-list-container{
            margin-bottom: 14px;
        }
        .order-detailes-list-container .order-list{
            border-radius: 100px 0px 100px 100px;
            background: #FFF;
            display: flex;
            align-items: center;
        }
        .order-detailes-list-container .order-list .order-title{
            padding: 6px 0 6px 20px;
            width: 30%;
        }
        .order-detailes-list-container .order-list .order-title h5{
            color: #000;
            font-family: "Roboto", system-ui;
            font-size: 16px;
            font-weight: 500;
            line-height: 30px;
        }
        .order-detailes-list-container .order-list .order-info{
            width: 70%;
            padding: 6px 0 6px 30px;
            border-radius: 100px 0px 100px 100px;
            background: #EEE;
            height: 100%;
        }
        .order-detailes-list-container .order-list .order-info p{
            color: rgba(0, 0, 0, 0.96);
            font-family: "Roboto", system-ui;
            font-size: 16px;
            font-style: normal;
            font-weight: 400;
            line-height: 30px;
        }
        .order-detailes-list-container .bg-transparent{
            background: transparent;
        }
        .order-detailes-list-container .paper-details{
            align-items: flex-start;
            padding-top: 12px;
        }
        .order-detailes-list-container .paper-details .order-info p{
            line-height: normal;
        }
        .order-detailes-list-container .bg-transparent .order-info{
            background: transparent;
        }
        .back-to-home .flex{
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 40px;
        }
        .back-to-home .flex .primary-btn{
            border-radius: 32px 0px 32px 32px;
            background: transparent;
            padding: 10px 30px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 5px;
            background: #000;
        }
        .back-to-home .flex .primary-btn a{
            font-family: "Roboto", system-ui;
            color: white;
            text-decoration: none;
        }
        .email-footer{
            margin-top: 20px;
        }
        .email-footer .content-dark{
            color: #000;
            text-align: center;
            font-family: "Roboto", system-ui;
            font-size: 16px;
            font-weight: 400;
            line-height: 30px;
        }
        .email-footer .content-dark a{
            color: #006;
        }
        .email-footer .content-light{
            color: #787878;
            text-align: center;
            font-family: "Roboto", system-ui;
            font-size: 16px;
            font-weight: 400;
            line-height: 24px;
        }
        .contact-email-box{
            
        }
        .contact-email-box .contact-page-card{
             width: 40%; margin-right: 5px;  background: #000; border-radius: 25px 0 25px 25px; padding: 40px 30px; height: 140px;
        }
        .contact-email-box .contact-page-card .img-title{
            display: flex; align-items: center; gap: 5px; margin-bottom: 15px;
        }
        .contact-email-box .contact-page-card .img-title .img-container{
            display: inline-flex; height: 56px; width: 56px; background: #ffffff; align-items: center; justify-content: center; border-radius: 10px 0 10px 10px;
        }
        .contact-email-box .contact-page-card .img-title h5{
            color: #FADE00; font-family: "Roboto", sans-serif; font-size: 24px; font-weight: 700; line-height: normal; text-transform: capitalize; margin: 0;
        }
        .contact-email-box .contact-page-card .content p{
            color: #ffffff; font-family: "Roboto", sans-serif; font-size: 16px; font-weight: 400; line-height: normal; text-transform: capitalize; text-align: left; margin: 0;
        }
        .contact-email-box .contact-page-card .content a{
            color: #FADE00; font-family: 'Roboto', sans-serif; font-size: 16px; font-weight: 600; line-height: normal; text-transform: lowercase; text-align: left; margin-top: 7px; display: block; text-decoration: none;
        }
        @media(max-width:700px){
            .email-main-container{
                max-width: 100%;
            }
            .email-main-container .email-header{
                border-top-left-radius: 0px;
            }
            .email-main-container .email-header img{
                width: 100%;
                max-width: 280px;
                height: auto;
            }
            .email-main-container .email-body{
                padding: 30px 13px;
            }
            .order-detailes-list-container .order-list .order-title{
                flex-basis: 50%;
                padding-left: 10px;
            }
            .order-detailes-list-container .order-list .order-info{
                flex-basis: 50%;
                padding-left: 12px;
            }
            .order-detailes-list-container .order-list .order-info p{
                font-size: 14px;
            }
            .order-detailes-list-container .order-list .order-title h5{
                font-size: 15px;
            }
            .email-footer .content-dark{
                font-size: 14px;
            }
        }
    </style> -->
</head>
<body style="margin: 0; padding: 0; box-sizing: border-box; font-family: 'Roboto', system-ui;">
    <div class="email-main-container" style="width: 100%; max-width: 700px; margin: auto; border-radius: 35px 0px 0px 0px; background: #F5F6FF; position: relative;">
        <div class="email-header"  style="text-align: center; border-radius: 35px 0px 32px 0px; background: #FADE00; padding: 20px 0;">
            <img src="{{ asset('assets/images/email-logo.webp') }}" alt="{{ config('app.name') }}" style="width: 100%; max-width: 314px;">
        </div>
        <div class="email-body"  style="padding: 30px 25px;">
            <div class="heading-container" style="text-align: center;">
                <div class="thank-you">
                    <img src="{{ asset('assets/images/thank-you-icon.webp') }}" alt="thank-you">
                </div>
                <div class="title">
                    <h4  style="color: #000; font-size: 30px; font-weight: 600; line-height: 30px; margin-bottom: 13px; margin: 0;">Thank You</h4>
                    <p  style="color: #000; font-size: 24px; font-weight: 400; line-height: normal;margin: 0; margin-bottom: 7px;"> for reaching out to us!</p>
                </div>
            </div>
            <div class="email-order-details" style="margin-top: 30px;">
                <div class="order-information customer-info" style="margin-top: 40px; margin-bottom: 20px;">
                    <h4 style="color: #000; font-size: 22px; font-weight: 600; line-height: 30px;  margin: 0; ">Customer Information</h4>
                </div>
                <!-- Continue with Customer Information -->
                <table class="order-detailes-list-container" style="margin-bottom: 14px; width: 100%;">
                    <tr class="order-list" style="border-radius: 100px 0px 100px 100px; background: #FFF; display: flex; align-items: center;">
                        <td class="order-title" style="padding: 6px 0 6px 20px; width: 30%;">
                            <h5 style="color: #000; font-size: 16px; font-weight: 500; line-height: 30px; margin: 0;">Full Name:</h5>
                        </td>
                        <td class="order-info" style="width: 70%; padding: 6px 0 6px 30px; border-radius: 100px 0px 100px 100px; background: #EEE;">
                            <p style="color: rgba(0, 0, 0, 0.96); font-size: 16px; font-weight: 400; line-height: 30px; margin: 0;">{{ $data['name'] }}</p>
                        </td>
                    </tr>
                    <tr class="order-list bg-transparent" style="background: transparent; border-radius: 100px 0px 100px 100px; display: flex; align-items: center;">
                        <td class="order-title" style="padding: 6px 0 6px 20px; width: 30%;">
                            <h5 style="color: #000; font-size: 16px; font-weight: 500; line-height: 30px; margin: 0;">Email ID:</h5>
                        </td>
                        <td class="order-info" style="width: 70%; padding: 6px 0 6px 30px; background: transparent;">
                            <p style="color: rgba(0, 0, 0, 0.96); font-size: 16px; font-weight: 400; line-height: 30px; margin: 0;">{{ $data['email'] }}</p>
                        </td>
                    </tr>
                    <tr class="order-list" style="border-radius: 100px 0px 100px 100px; background: #FFF; display: flex; align-items: center;">
                        <td class="order-title" style="padding: 6px 0 6px 20px; width: 30%;">
                            <h5 style="color: #000; font-size: 16px; font-weight: 500; line-height: 30px; margin: 0;">Your Subject:</h5>
                        </td>
                        <td class="order-info" style="width: 70%; padding: 6px 0 6px 30px; border-radius: 100px 0px 100px 100px; background: #EEE;">
                            <p style="color: rgba(0, 0, 0, 0.96); font-size: 16px; font-weight: 400; line-height: 30px; margin: 0;">{{ $data['subject'] }}</p>
                        </td>
                    </tr>
                    <tr class="order-list bg-transparent" style="background: transparent; border-radius: 100px 0px 100px 100px; display: flex; align-items: start;margin-top: 15px;">
                        <td class="order-title" style="padding: 6px 0 6px 20px; width: 30%;">
                            <h5 style="color: #000; font-size: 16px; font-weight: 500; line-height: 30px; margin: 0;">Message:</h5>
                        </td>
                        <td class="order-info" style="width: 70%; padding: 6px 0 6px 30px; background: transparent;">
                            <p style="color: rgba(0, 0, 0, 0.96); font-size: 16px; font-weight: 400; line-height: normal;  margin: 0; ">{{ $data['message'] }}</p>
                        </td>
                    </tr>
                </table>
                <div class="contact-email-box" style="display: flex;flex-wrap: wrap;justify-items: center;justify-content: center;align-items: center;gap: 10px;">
                    <div class="contact-page-card" style=" width: 40%; margin-right: 5px; margin-bottom: 10px;  background: #000; border-radius: 25px 0 25px 25px; padding: 40px 30px; height: 140px;">
                        <div class="img-title" style="display: flex; align-items: center; gap: 5px; margin-bottom: 15px;">
                            <img src="{{ asset('assets/images/email-call-icon.webp') }}" height="59px" width="59px" loading="lazy" class="img-fluid" alt="Call Now">
                            <h5 style="color:#FADE00;font-family:'Roboto', sans-serif;font-size:24px;font-weight:700;line-height: normal;text-transform:capitalize;margin:0;margin-top: 12px;margin-left: 10px;">Phone</h5>
                        </div>
                        <div class="content">
                            <p style="color: #ffffff; font-family: 'Roboto', sans-serif; font-size: 16px; font-weight: 400; line-height: normal; text-transform: capitalize; text-align: left; margin: 0;">Our customer care is open 24/7 Online Support</p>
                            <a href="tel:{{ config('settings.app_phone') }}" style="color: #FADE00; font-family: 'Roboto', sans-serif; font-size: 16px; font-weight: 600; line-height: normal; text-transform: lowercase; text-align: left; margin-top: 7px; display: block; text-decoration: none;">{{ config('settings.app_phone') }}</a>
                        </div>
                    </div>
                    <div class="contact-page-card" style=" width: 40%; margin-left: 5px; margin-bottom: 10px; background: #000; border-radius: 25px 0 25px 25px; padding: 40px 30px; height: 140px;">
                        <div class="img-title"  style="display: flex; align-items: center; gap: 5px; margin-bottom: 15px;">
                            <img src="{{ asset('assets/images/email-mail-icon.webp') }}" height="59px" width="59px" loading="lazy" class="img-fluid" alt="Mail">
                            <h5 style="color:#FADE00;font-family:'Roboto', sans-serif;font-size:24px;font-weight:700;line-height: normal;text-transform:capitalize;margin:0;margin-top: 12px;margin-left: 10px;">Mail Address</h5>
                        </div>
                        <div class="content">
                            <p style="color: #ffffff; font-family: 'Roboto', sans-serif; font-size: 16px; font-weight: 400; line-height: normal; text-transform: capitalize; text-align: left; margin: 0;">Our support team will get back to in 24-hr during standard business hours.</p>
                            <a href="mailto:{{ config('settings.app_email') }}" style="color: #FADE00; font-family: 'Roboto', sans-serif; font-size: 16px; font-weight: 600; line-height: normal; text-transform: lowercase; text-align: left; margin-top: 7px; display: block; text-decoration: none;">{{ config('settings.app_email') }}</a>
                        </div>
                    </div>
                </div>
                <div class="contact-email-box" style="display: flex;flex-wrap: wrap;justify-items: center;justify-content: center;align-items: center;gap: 10px;">
                    <div class="contact-page-card" style=" width: 40%; margin-right: 5px;  background: #000; border-radius: 25px 0 25px 25px; padding: 40px 30px; height: 140px;">
                        <div class="img-title"  style="display: flex; align-items: center; gap: 5px; margin-bottom: 15px;">
                            <img src="{{ asset('assets/images/email-location-icon.webp') }}" alt="Location" height="59px" width="59px" loading="lazy" class="img-fluid">
                            <h5 style="color:#FADE00;font-family:'Roboto', sans-serif;font-size:24px;font-weight:700;line-height: normal;text-transform:capitalize;margin:0;margin-top: 12px;margin-left: 10px;">Location</h5>
                        </div>
                        <div class="content">
                            <p class="contant-card-mini" style="color: #ffffff; font-family: 'Roboto', sans-serif; font-size: 16px; font-weight: 400; line-height: normal; text-transform: capitalize; text-align: left; margin: 0;">{{ config('settings.app_address') }}</p>
                        </div>
                    </div>
                    <div class="contact-page-card" style=" width: 40%; margin-left: 5px;  background: #000; border-radius: 25px 0 25px 25px; padding: 40px 30px; height: 140px;">
                        <div class="img-title"  style="display: flex; align-items: center; gap: 5px; margin-bottom: 15px;">
                            <img src="{{ asset('assets/images/email-time-icon.webp') }}" alt="Working Hour" height="59px" width="59px" loading="lazy" class="img-fluid">
                            <h5 style="color:#FADE00;font-family:'Roboto', sans-serif;font-size:24px;font-weight:700;line-height: normal;text-transform:capitalize;margin:0;margin-top: 12px;margin-left: 10px;">Working hours</h5>
                        </div>
                        <div class="content">
                            <p class="contant-card-mini" style="color: #ffffff; font-family: 'Roboto', sans-serif; font-size: 16px; font-weight: 400; line-height: normal; text-transform: capitalize; text-align: left; margin: 0;">Mon 00:00 to Sun 23:59</p>
                        </div>
                    </div>
                </div>

                <div class="back-to-home" style="text-align: center; margin-top: 40px;">
                    <div class="primary-btn" style="border-radius:32px 0px 32px 32px;background:#000;padding:10px 30px;width: 150px;margin: auto;">
                        <img src="{{ asset('assets/images/home-icon-yellow.webp') }}" loading="lazy" class="img-fluid" height="20px" width="23px" alt="Live Chat">
                        <a href="{{ route('home') }}" style="font-family: 'Roboto', system-ui; color: white; text-decoration: none;">Back To Homepage</a>
                    </div>
                </div>
                <div class="email-footer" style="margin-top: 20px; text-align: center;">
                    <p class="content-dark" style="color: #000; font-size: 16px; font-weight: 400; line-height: 30px;">If you have nay questions, we are <a href="{{ route('contact') }}">here</a> to help you!</p>
                    <p class="content-light" style="color: #787878; font-size: 16px; font-weight: 400; line-height: 24px; margin: 0;">© {{ config('app.name') }}</p>
                    <p class="content-light" style="color: #787878; font-size: 16px; font-weight: 400; line-height: 24px; margin: 0;">You are receiving this email because you are an appreciated customer of</p>
                    <p class="content-light" style="color: #787878; font-size: 16px; font-weight: 400; line-height: 24px; margin: 0;">{{ config('app.name') }}</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>