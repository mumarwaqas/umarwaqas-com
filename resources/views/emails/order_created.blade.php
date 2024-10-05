
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact us</title>
    <style>
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
        .customer-info{
            margin-top: 60px;
        }
        .border-white{
            width: 100%;
            height: 7px;
            background: white;
            position: absolute;
            left: 0;
            margin-top: 14px;
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
    </style>
</head>
<body>
    <body style="margin: 0; padding: 0; box-sizing: border-box; font-family: 'Roboto', system-ui;">
        <div class="email-main-container" style="width: 100%; max-width: 700px; margin: auto; border-radius: 35px 0px 0px 0px; background: #F5F6FF; position: relative;">
            <div class="email-header" style="text-align: center; border-radius: 35px 0px 32px 0px; background: #FADE00; padding: 20px 0;">
                <img src="{{ asset('assets/images/email-logo.webp') }}" alt="{{ config('app.name') }}" style="width: 100%; max-width: 314px;">
            </div>
            <div class="email-body" style="padding: 30px 25px;">
                <div class="heading-container" style="text-align: center;">
                    <div class="title">
                        <h4 style="color: #000; font-size: 30px; font-weight: 600; line-height: 30px; margin-bottom: 13px; margin: 0;">{{ $order->user->name }}</h4>
                        <p style="color: #000; font-size: 16px; font-weight: 400; line-height: normal; margin-bottom: 7px;">Thank You For Placing an Order At <a href="{{ route('home') }}" style="color: #000;">{{ $order->source }}</a></p>
                        <p style="color: #000; font-size: 16px; font-weight: 400; line-height: normal; margin-bottom: 7px;">The order you placed has the following details:</p>
                    </div>
                </div>
                <div class="email-order-details" style="margin-top: 30px;">
                    <div class="order-information" style="margin-bottom: 10px;">
                        <h4 style="color: #000; font-size: 22px; font-weight: 600; line-height: 30px;  margin: 0;">Order Information</h4>
                    </div>
                    <table class="order-detailes-list-container" style="margin-bottom: 14px; width:100%;">
                        <tr class="order-list" style="border-radius: 100px 0px 100px 100px; background: #FFF; display: flex; align-items: center;">
                            <td class="order-title" style="padding: 6px 0 6px 20px; width: 30%;">
                                <h5 style="color: #000; font-size: 16px; font-weight: 500; line-height: 30px; margin: 0;">Order Number:</h5>
                            </td>
                            <td class="order-info" style="width: 70%; padding: 6px 0 6px 30px; border-radius: 100px 0px 100px 100px; background: #EEE;">
                                <p style="color: rgba(0, 0, 0, 0.96); font-size: 16px; font-weight: 400; line-height: 30px;">{{ $order->order_no }}</p>
                            </td>
                        </tr>
                        <tr class="order-list bg-transparent" style="background: transparent; border-radius: 100px 0px 100px 100px; display: flex; align-items: center;">
                            <td class="order-title" style="padding: 6px 0 6px 20px; width: 30%;">
                                <h5 style="color: #000; font-size: 16px; font-weight: 500; line-height: 30px; margin: 0;">Academic Level:</h5>
                            </td>
                            <td class="order-info" style="width: 70%; padding: 6px 0 6px 30px; background: transparent;">
                                <p style="color: rgba(0, 0, 0, 0.96); font-size: 16px; font-weight: 400; line-height: 30px;">{{ $order->academic_level }}</p>
                            </td>
                        </tr>
                        <tr class="order-list" style="border-radius: 100px 0px 100px 100px; background: #FFF; display: flex; align-items: center;">
                            <td class="order-title" style="padding: 6px 0 6px 20px; width: 30%;">
                                <h5 style="color: #000; font-size: 16px; font-weight: 500; line-height: 30px; margin: 0;">Type of Paper:</h5>
                            </td>
                            <td class="order-info" style="width: 70%; padding: 6px 0 6px 30px; border-radius: 100px 0px 100px 100px; background: #EEE;">
                                <p style="color: rgba(0, 0, 0, 0.96); font-size: 16px; font-weight: 400; line-height: 30px;">{{ $order->type_of_paper }}</p>
                            </td>
                        </tr>
                        <tr class="order-list bg-transparent" style="background: transparent; border-radius: 100px 0px 100px 100px; display: flex; align-items: center;">
                            <td class="order-title" style="padding: 6px 0 6px 20px; width: 30%;">
                                <h5 style="color: #000; font-size: 16px; font-weight: 500; line-height: 30px; margin: 0;">Subject:</h5>
                            </td>
                            <td class="order-info" style="width: 70%; padding: 6px 0 6px 30px; background: transparent;">
                                <p style="color: rgba(0, 0, 0, 0.96); font-size: 16px; font-weight: 400; line-height: 30px;">{{ $order->subject }}</p>
                            </td>
                        </tr>
                        <tr class="order-list" style="border-radius: 100px 0px 100px 100px; background: #FFF; display: flex; align-items: center;">
                            <td class="order-title" style="padding: 6px 0 6px 20px; width: 30%;">
                                <h5 style="color: #000; font-size: 16px; font-weight: 500; line-height: 30px; margin: 0;">Number of Pages:</h5>
                            </td>
                            <td class="order-info" style="width: 70%; padding: 6px 0 6px 30px; border-radius: 100px 0px 100px 100px; background: #EEE;">
                                <p style="color: rgba(0, 0, 0, 0.96); font-size: 16px; font-weight: 400; line-height: 30px;">{{ $order->number_of_pages }}</p>
                            </td>
                        </tr>
                        <tr class="order-list bg-transparent" style="background: transparent; border-radius: 100px 0px 100px 100px; display: flex; align-items: center;">
                            <td class="order-title" style="padding: 6px 0 6px 20px; width: 30%;">
                                <h5 style="color: #000; font-size: 16px; font-weight: 500; line-height: 30px; margin: 0;">word count:</h5>
                            </td>
                            <td class="order-info" style="width: 70%; padding: 6px 0 6px 30px; background: transparent;">
                                <p style="color: rgba(0, 0, 0, 0.96); font-size: 16px; font-weight: 400; line-height: 30px;">{{ $order->number_of_words }} words</p>
                            </td>
                        </tr>
                        <tr class="order-list" style="border-radius: 100px 0px 100px 100px; background: #FFF; display: flex; align-items: center;">
                            <td class="order-title" style="padding: 6px 0 6px 20px; width: 30%;">
                                <h5 style="color: #000; font-size: 16px; font-weight: 500; line-height: 30px; margin: 0;">Deadline:</h5>
                            </td>
                            <td class="order-info" style="width: 70%; padding: 6px 0 6px 30px; border-radius: 100px 0px 100px 100px; background: #EEE;">
                                <p style="color: rgba(0, 0, 0, 0.96); font-size: 16px; font-weight: 400; line-height: 30px;">{{ $order->delivery_time }}</p>
                            </td>
                        </tr>
                        <tr class="order-list bg-transparent" style="background: transparent; border-radius: 100px 0px 100px 100px; display: flex; align-items: center;">
                            <td class="order-title" style="padding: 6px 0 6px 20px; width: 30%;">
                                <h5 style="color: #000; font-size: 16px; font-weight: 500; line-height: 30px; margin: 0;">Paper Quality:</h5>
                            </td>
                            <td class="order-info" style="width: 70%; padding: 6px 0 6px 30px; background: transparent;">
                                <p style="color: rgba(0, 0, 0, 0.96); font-size: 16px; font-weight: 400; line-height: 30px;">{{ $order->paper_quality }}</p>
                            </td>
                        </tr>
                        <tr class="order-list" style="border-radius: 100px 0px 100px 100px; background: #FFF; display: flex; align-items: center;">
                            <td class="order-title" style="padding: 6px 0 6px 20px; width: 30%;">
                                <h5 style="color: #000; font-size: 16px; font-weight: 500; line-height: 30px; margin: 0;">Citation Style:</h5>
                            </td>
                            <td class="order-info" style="width: 70%; padding: 6px 0 6px 30px; border-radius: 100px 0px 100px 100px; background: #EEE;">
                                <p style="color: rgba(0, 0, 0, 0.96); font-size: 16px; font-weight: 400; line-height: 30px;">{{ $order->citation_style }}</p>
                            </td>
                        </tr>
                        <tr class="order-list bg-transparent" style="background: transparent; border-radius: 100px 0px 100px 100px; display: flex; align-items: center;">
                            <td class="order-title" style="padding: 6px 0 6px 20px; width: 30%;">
                                <h5 style="color: #000; font-size: 16px; font-weight: 500; line-height: 30px; margin: 0;">Number of References:</h5>
                            </td>
                            <td class="order-info" style="width: 70%; padding: 6px 0 6px 30px; background: transparent;">
                                <p style="color: rgba(0, 0, 0, 0.96); font-size: 16px; font-weight: 400; line-height: 30px;">{{ $order->number_of_sources }}</p>
                            </td>
                        </tr>
                        <tr class="order-list" style="border-radius: 100px 0px 100px 100px; background: #FFF; display: flex; align-items: center;">
                            <td class="order-title" style="padding: 6px 0 6px 20px; width: 30%;">
                                <h5 style="color: #000; font-size: 16px; font-weight: 500; line-height: 30px; margin: 0;">Enter Topic:</h5>
                            </td>
                            <td class="order-info" style="width: 70%; padding: 6px 0 6px 30px; border-radius: 100px 0px 100px 100px; background: #EEE;">
                                <p style="color: rgba(0, 0, 0, 0.96); font-size: 16px; font-weight: 400; line-height: 30px;">{{ $order->topic }}</p>
                            </td>
                        </tr>
                        <tr class="order-list bg-transparent" style="background: transparent; border-radius: 100px 0px 100px 100px; display: flex; align-items: start; margin-top: 12px;">
                            <td class="order-title" style="padding: 6px 0 6px 20px; width: 30%;">
                                <h5 style="color: #000; font-size: 16px; font-weight: 500; line-height: 30px; margin: 0;">Paper Details:</h5>
                            </td>
                            <td class="order-info" style="width: 70%; padding: 6px 0 6px 30px; background: transparent;">
                                <p style="color: rgba(0, 0, 0, 0.96); font-size: 16px; font-weight: 400; line-height: 30px;">{{ $order->paper_description }}</p>
                            </td>
                        </tr>
                        <!-- Continue with other fields following the same inline CSS pattern -->
                    </table>
                    <div class="border-white" style="width: 100%; height: 7px; background: white; position: absolute; left: 0; margin-top: 14px;"></div>
                    <div class="order-information customer-info" style="margin-top: 60px;">
                        <h4 style="color: #000; font-size: 22px; font-weight: 600; line-height: 30px;  margin: 0; ">Customer Information</h4>
                    </div>
                    <!-- Continue with Customer Information -->
                    <table class="order-detailes-list-container" style="margin-bottom: 14px; width:100%;">
                        <tr class="order-list" style="border-radius: 100px 0px 100px 100px; background: #FFF; display: flex; align-items: center;">
                            <td class="order-title" style="padding: 6px 0 6px 20px; width: 30%;">
                                <h5 style="color: #000; font-size: 16px; font-weight: 500; line-height: 30px; margin: 0;">Contact Name:</h5>
                            </td>
                            <td class="order-info" style="width: 70%; padding: 6px 0 6px 30px; border-radius: 100px 0px 100px 100px; background: #EEE;">
                                <p style="color: rgba(0, 0, 0, 0.96); font-size: 16px; font-weight: 400; line-height: 30px;">{{ $order->user->name }}</p>
                            </td>
                        </tr>
                        <tr class="order-list bg-transparent" style="background: transparent; border-radius: 100px 0px 100px 100px; display: flex; align-items: center;">
                            <td class="order-title" style="padding: 6px 0 6px 20px; width: 30%;">
                                <h5 style="color: #000; font-size: 16px; font-weight: 500; line-height: 30px; margin: 0;">Contact Email ID:</h5>
                            </td>
                            <td class="order-info" style="width: 70%; padding: 6px 0 6px 30px; background: transparent;">
                                <p style="color: rgba(0, 0, 0, 0.96); font-size: 16px; font-weight: 400; line-height: 30px;"><a href="mailto:{{ $order->user->email }}" style="color: #000; text-decoration: none;">{{ $order->user->email }}</a></p>
                            </td>
                        </tr>
                        <tr class="order-list" style="border-radius: 100px 0px 100px 100px; background: #FFF; display: flex; align-items: center;">
                            <td class="order-title" style="padding: 6px 0 6px 20px; width: 30%;">
                                <h5 style="color: #000; font-size: 16px; font-weight: 500; line-height: 30px; margin: 0;">Contact Phone Name:</h5>
                            </td>
                            <td class="order-info" style="width: 70%; padding: 6px 0 6px 30px; border-radius: 100px 0px 100px 100px; background: #EEE;">
                                <p style="color: rgba(0, 0, 0, 0.96); font-size: 16px; font-weight: 400; line-height: 30px;">{{ $order->profile->phone }}</p>
                            </td>
                        </tr>
                        <tr class="order-list bg-transparent" style="background: transparent; border-radius: 100px 0px 100px 100px; display: flex; align-items: center;">
                            <td class="order-title" style="padding: 6px 0 6px 20px; width: 30%;">
                                <h5 style="color: #000; font-size: 16px; font-weight: 500; line-height: 30px; margin: 0;">Actual Price:</h5>
                            </td>
                            <td class="order-info" style="width: 70%; padding: 6px 0 6px 30px; background: transparent;">
                                <p style="color: rgba(0, 0, 0, 0.96); font-size: 16px; font-weight: 400; line-height: 30px;">£{{ $order->actual_price }}</p>
                            </td>
                        </tr>
                        <tr class="order-list" style="border-radius: 100px 0px 100px 100px; background: #FFF; display: flex; align-items: center;">
                            <td class="order-title" style="padding: 6px 0 6px 20px; width: 30%;">
                                <h5 style="color: #000; font-size: 16px; font-weight: 500; line-height: 30px; margin: 0;">Discounted:</h5>
                            </td>
                            <td class="order-info" style="width: 70%; padding: 6px 0 6px 30px; border-radius: 100px 0px 100px 100px; background: #EEE;">
                                <p style="color: rgba(0, 0, 0, 0.96); font-size: 16px; font-weight: 400; line-height: 30px;">£{{ $order->discounted_price }}</p>
                            </td>
                        </tr>
                        <tr class="order-list bg-transparent" style="background: transparent; border-radius: 100px 0px 100px 100px; display: flex; align-items: center;">
                            <td class="order-title" style="padding: 6px 0 6px 20px; width: 30%;">
                                <h5 style="color: #000; font-size: 16px; font-weight: 500; line-height: 30px; margin: 0;">Final Price:</h5>
                            </td>
                            <td class="order-info" style="width: 70%; padding: 6px 0 6px 30px; background: transparent;">
                                <p style="color: rgba(0, 0, 0, 0.96); font-size: 16px; font-weight: 400; line-height: 30px;">£{{ $order->final_price }}</p>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="back-to-home" style="text-align: center; margin-top: 40px;">
                <div class="primary-btn" style="border-radius: 32px 0px 32px 32px; background: #000; padding: 10px 30px; display: inline-flex; align-items: center; gap: 5px;">
                    <img src="{{ asset('assets/images/home-icon-yellow.webp') }}" loading="lazy" class="img-fluid" height="20px" width="23px" alt="Live Chat">
                    <a href="{{ route('home') }}" style="font-family: 'Roboto', system-ui; color: white; text-decoration: none;">Back To Homepage</a>
                </div>
            </div>
            <div class="email-footer" style="margin-top: 20px; text-align: center;">
                <p style="color: #000; font-size: 16px; font-weight: 400; line-height: 30px;">If you have any questions, we are <a href="{{ route('contact') }}" style="color: #006;">here</a> to help you!</p>
                <p style="color: #787878; font-size: 16px; font-weight: 400; line-height: 24px;">You are receiving this email because you are an appreciated customer of {{ config('app.name') }}</p>
                <p style="color: #787878; font-size: 16px; font-weight: 400; line-height: 24px;">© {{ config('app.name') }}</p>
            </div>
        </div>
    </body>
    
</body>
</html>