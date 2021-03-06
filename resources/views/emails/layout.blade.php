<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,900" rel="stylesheet">
    <title>@yield('title')</title>

    <style type="text/css">
        /* Global Resets */

        body,
        .background_main,
        p,
        table,
        td,
        div {
            font-family: 'Lato', 'Helvetica Neue', Helvetica, Arial, sans-serif;
        }

        img {
            border: none;
            -ms-interpolation-mode: bicubic;
            max-width: 100%;
        }

        p {
            padding-bottom: 2px;
        }

        body {
            background: #fff;
            font-size: 17px;
            line-height: 24px;
            margin: 0;
            padding: 0;
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
        }

        table {
            border-collapse: collapse;
            mso-table-lspace: 0pt;
            mso-table-rspace: 0pt;
            width: 100%;
        }

        td {
            font-size: 17px;
            line-height: 24px;
            vertical-align: top;
        }

        /* Footer */

        .email_footer td,
        .email_footer p,
        .email_footer span,
        .email_footer a {
            font-size: 15px;
            text-align: center;
        }

        .email_footer td {
            padding-top: 20px;
        }

        /* Typography */

        h1,
        h2,
        h3,
        h4 {
            color: #434245;
            font-weight: 400;
            line-height: 1.4;
            margin: 0;
            margin-bottom: 12px;
        }

        h1 {
            font-size: 30px;
            line-height: 36px;
            font-weight: 900;
            letter-spacing: -.75px;
            text-align: left;
        }

        p,
        ul,
        ol {
            font-size: 17px;
            line-height: 24px;
            font-weight: normal;
            margin: 0;
            margin-bottom: 15px;
        }

        p li,
        ul li,
        ol li {
            list-style-position: inside;
            margin-left: 5px;
        }

        a {
            color: #3498db;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        .button_link::after {
            position: absolute;
            content: '';
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            border-radius: 4px;
        }

        .button_link:hover::after {
            box-shadow: inset 0 -2px #237c4a;
        }

        .preview_text {
            color: transparent;
            display: none;
            height: 0;
            max-height: 0;
            max-width: 0;
            opacity: 0;
            overflow: hidden;
            mso-hide: all;
            visibility: hidden;
            width: 0;
            font-size: 1px;
            line-height: 1px;
        }

        .preview_text a {
            color: #3AA3E3 !important;
            font-weight: bold;
        }

        /* Responsive and Mobile Friendly Styles */

        /* Yahoo Mail has a history of rendering all media query styles with class selectors unless class is used as an attribute */

        @media|%20only%20screen%20and%20(max-width%3A%20600px)%20%7B>table[class="background_main"] .sm_full_width {
            width: 100% !important;
        }

        table[class="background_main"] .sm_align_center {
            text-align: center !important;
        }

        table[class="background_main"] .sm_auto_width {
            width: auto !important;
        }

        table[class="background_main"] .sm_auto_height {
            height: auto !important;
        }

        table[class="background_main"] .sm_border_box {
            box-sizing: border-box !important;
        }

        table[class="background_main"] .sm_block {
            display: block !important;
        }

        table[class="background_main"] .sm_inline_block {
            display: inline-block !important;
        }

        table[class="background_main"] .sm_table {
            display: table !important;
        }

        table[class="background_main"] .sm_no_side_padding {
            padding-right: 0 !important;
            padding-left: 0 !important;
        }

        table[class="background_main"] .sm_no_border_radius {
            border-radius: 0 !important;
        }

        table[class="background_main"] .sm_no_padding {
            padding-right: 0 !important;
            padding-left: 0 !important;
        }

        table[class="background_main"] .sm_os_icons_height {
            /* this is to make the parent element the same height as the inline-block img inside */
            height: 44px;
        }

        .social_img_bottom_margin {
            /*this class is for social_user_outreach email only*/
            margin-bottom: 20px !important;
        }

        .social_p_bottom_margin {
            /*this class is for social_user_outreach email only*/
            margin-bottom: 40px !important;
        }
        }

        /* More client-specific styles */

        <blade media|%20all%20%7B>.ExternalClass {
            width: 100%;
        }

        .ExternalClass,
        .ExternalClass p,
        .ExternalClass span,
        .ExternalClass font,
        .ExternalClass td,
        .ExternalClass div {
            line-height: 100%;
        }

        .email_footer a {
            color: #434245 !important;
            font-family: inherit !important;
            font-size: inherit !important;
            font-weight: inherit !important;
            line-height: inherit !important;
            text-decoration: none !important;
        }
        }

        a:hover {
            text-decoration: underline !important;
        }

        .cta-link {
            padding: 8px 12px;
            border: 1px solid #308AF3;
            background: #308AF3;;
            border-radius: 2px;
            font-size: 14px;
            color: #ffffff; 
            text-decoration: none;
            font-weight: bold;
            display: inline-block;  
        }

    </style>
</head>

<body>
    <!--[if mso]>
        <style type="text/css">
            
            .background_main, table, table td, p, div, h1, h2, h3, h4, h5, h6 {
                font-family: Arial, sans-serif !important;
            }
            
        </style>
	<![endif]-->

    <table width="100%" cellpadding="0" cellspacing="0" border="0" class="background_main"
        style="background-color: #ffffff; padding-top: 20px; color: #434245; width: 100%; -webkit-font-smoothing:antialiased; -moz-osx-font-smoothing:grayscale; ">
        <tr>
            <td valign="top" class="sm_full_width"
                style="margin: 0 auto; width: 100%; max-width: 600px; display: block;">
                <div class="sm_no_padding"
                    style="margin: 0 auto; padding: 30px 0 40px; display: block; box-sizing: border-box;">

                    @yield('content')
                </div>
            </td>
        </tr>
        @if ($company)
            <tr>
                <td class="email_footer"
                    style="padding: 0 30px 25px; border-top: 1px solid #E1E1E4; line-height: 24px; font-size: 15px; color: #717274; text-align: center; width: 100%;">
                    <table border="0" cellpadding="0" cellspacing="0" width="100%" align="center"
                        style="margin-top: 20px; background-color: white;">
                        <tr>
                            <td>&nbsp;</td>
                            <td>
                                <span style="display: block;">
                                    {{ $company->name }}
                                    <br />
                                    {{ $company->displayLongAddress('billing') }}
                                </span>
                            </td>
                            <td>&nbsp;</td>
                        </tr>
                    </table>
                </td>
            </tr>
        @else
            <tr>
                <td class="email_footer"
                    style="padding: 0 30px 40px; line-height: 24px; font-size: 15px; color: #717274; text-align: center; width: 100%;">
                    <table border="0" cellpadding="0" cellspacing="0" width="100%" align="center"
                        style="margin-top: 20px; background-color: white;">
                        <tr>
                            <td>
                                <span style="display: block;">
                                    <img src="{{ asset(get_system_setting('application_logo')) }}" width="120" alt="{{ get_system_setting('application_name') }}" />
                                    <br />
                                    {{ __('messages.email_advertisement_text') }} <a href="{{ url('/') }}">{{ get_system_setting('application_name') }}</a>
                                </span>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        @endif
        @if($company and $company->subscription('main')->getFeatureValue('advertisement_on_mails') === '1')
            <tr>
                <td class="email_footer"
                    style="padding: 0 30px 40px; line-height: 24px; font-size: 15px; color: #717274; text-align: center; width: 100%;">
                    <table border="0" cellpadding="0" cellspacing="0" width="100%" align="center"
                        style="margin-top: 20px; background-color: white;">
                        <tr>
                            <td>
                                <span style="display: block;">
                                    <img src="{{ asset(get_system_setting('application_logo')) }}" width="120" alt="{{ get_system_setting('application_name') }}" />
                                    <br />
                                    {{ __('messages.email_advertisement_text') }} <a href="{{ url('/') }}">{{ get_system_setting('application_name') }}</a>
                                </span>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        @endif
    </table>
</body>
</html>