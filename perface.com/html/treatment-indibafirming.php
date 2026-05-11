<!DOCTYPE html>
<html>

<head>
    <?php
    $pid = "PFgin680";
    $marketingBase = "marketing/";
    $marketingProjectBase = $marketingBase . $pid . '/';
    $webTemplateBase = "revamp2025/";
    $scheme = isset($_SERVER['REQUEST_SCHEME']) ? $_SERVER['REQUEST_SCHEME'] : 'http';
    $host = $_SERVER['SERVER_NAME'];
    $ogImagePath = $scheme . '://' . $host . '/' . $marketingProjectBase . "img/og_v02.jpg";
    $ogUrlPath = $scheme . '://' . $host . '/' . $pid . '.php';

    $metaTitle = "perFACE醫學美容中心│細胞療法超越單一INDIBA";
    $metaDescription = "perFACE醫學美容中心獨家呈獻「醫療級黃金肌膚細胞重生療法」，重拾年輕由細胞層面開始，3步結合嫩光術、 「韌帶提拉活化術」INDIBA及6 pass laser美白去斑，從提拉輪廓,'緊緻肌膚及美白亮肌3大層面塑造完美未來肌。";
    $metaKeywords = "perFACE醫學美容中心,細胞療法,INDIBA";
    $eventName = "$680 鎏金煥膚細胞重生療法";
    $treatmentName = "鎏金煥膚細胞重生療法";
    $treatmentShortName1 = "INDB_SPL_GOLD";
    $brandShortName = "perFACE ESSENTIAL";
    $offerPrice = "880";
    $offerPriceOnline = "680";
    $offerPriceOnlinePrepaid = "100";
    $enquiry_details = "療程體驗（perFACE ESSENTIAL）";

    $offerDetails = "網付$100，到店繳付餘額$580";
    $offerOfflineDetails = "選擇到店付款不可享有及$680網上優惠";

    $brandList = [
        "per FACE",
        "perFACE ESSENTIAL",
        "20BEAUTY",
        "iFACES"
    ];
    $form_required_list = [
        "full_name",
        "mobile",
        "email",
        "age",
        "desired_store",
        "desired_date",
        "desired_time",
        "treatment_name",
    ];
    $hidden_required_list = [
        "term",
        "pid",
        "brandList[]",
        "brand_short_name",
        "payment_method",
        "treatment_short_name",
        "offer",
        "offer_online",
        "offer_online_prepaid",
    ];

    $whatsappUrl = null;
    $whatsappMoOnlineUrl = null;
    $whatsappMoOfflineUrl = null;
    $isMoOnlinePayment = 0; // 1 = 是, 0 = 否
    $hkOnlinePayDisplayPriceMessage = "網上付款預約訂金$100額外贈送The Organic Pharmacy Antioxdiant All Stars Kit(一套16件)+perFIT OXYGYM 微高氧健身會所2個月會藉(香港限定)；餘額$580需到店支付";
    $hkOfflinePayDisplayPriceMessage = "(放棄網上付款優惠$680)";
    $moOnlineDisplayPriceMessage = "(網上付款預約訂金$100額外贈送The Organic Pharmacy Antioxdiant All Stars Kit(一套16件)；餘額$580需到店支付)";
    $moOfflineDisplayPriceMessage = "(放棄網上付款優惠$680)";

    $title = $metaTitle;
    $description = $metaDescription;
    $keyword = $metaKeywords;
    $og_image_url = $ogImagePath;
    include $webTemplateBase . 'revamp-2025/header.php';
    ?>

    <link href="images/favicon.png" type="image/x-icon" rel="shortcut icon">
    <link href="js/slick/slick.css" rel="stylesheet" type="text/css">
    <link href="js/slick/slick-theme.css" rel="stylesheet" type="text/css">
    <link href="js/fancybox/jquery.fancybox.min.css" rel="stylesheet" type="text/css">
    <link href="js/flatpickr/themes.confetti.css" rel="stylesheet" type="text/css">

    <script src="js/jquery/jquery-2.0.3.min.js" type="text/javascript"></script>
    <script src="js/slick/slick.min.js" type="text/javascript"></script>
    <script src="js/fancybox/jquery.fancybox.min.js" type="text/javascript"></script>
    <script src="js/flatpickr/flatpickr.js" type="text/javascript"></script>

    <?php include $webTemplateBase . 'revamp-2025/template-fixed-css.php'; ?>

    <link href="<?php echo $marketingProjectBase; ?>css/custom.css" rel="stylesheet" type="text/css">
    <link href="<?php echo $marketingProjectBase; ?>css/slider-general.css" rel="stylesheet" type="text/css">
    <link href="<?php echo $marketingProjectBase; ?>css/slider-video.css" rel="stylesheet" type="text/css">
    <link href="<?php echo $marketingProjectBase; ?>css/submit-button.css" rel="stylesheet" type="text/css">
    <link href="<?php echo $marketingProjectBase; ?>css/flatpickr-calendar.css" rel="stylesheet" type="text/css">

    <style>
        :root {
            --primary: #ef60b2;
            --muted: #666;
            --form-bg: #f2f0df;
            --page-shell-bg: #f2f0df;
        }

        body {
            max-width: none !important;
            margin: 0 !important;
            background: var(--page-shell-bg) !important;
            color: #000;
        }

        .body_wrap,
        .page_wrap {
            width: 100%;
            max-width: none;
        }

        .scheme_original .body_wrap,
        .scheme_original .page_wrap {
            background-color: var(--page-shell-bg) !important;
            background-image: none !important;
        }

        .treatment-page-main a {
            color: #000 !important;
        }

        .fullWidth img,
        .img-responsive,
        .responsive-bg-image,
        .background-image {
            width: 100%;
            height: auto;
            display: block;
        }

        .treatment-page-main {
            max-width: 720px;
            margin: 0 auto;
            background: var(--page-shell-bg);
            padding-bottom: 150px;
        }

        .heroCard {
            border-radius: 0;
            overflow: visible;
            box-shadow: none;
            background: transparent;
        }

        .heroCard img,
        .heroCard video,
        .heroCard .slick-list,
        .heroCard .slick-track {
            border-radius: 0;
        }

        #formSection {
            padding: 16px 0 60px;
            background: var(--form-bg) center/cover no-repeat !important;
        }

        .container.limitedMaxWidth {
            background: rgba(255, 255, 255, 0.98);
            padding: 22px;
            border-radius: 12px;
            box-shadow: 0 12px 40px rgba(0, 0, 0, 0.06);
            max-width: 980px;
        }

        .customHidden {
            display: none;
        }

        #enquiryform .g-container-xs {
            width: 100%;
        }

        #enquiryform .formItem {
            margin-bottom: 1em;
        }

        #enquiryform input[type="text"],
        #enquiryform input[type="tel"],
        #enquiryform input[type="email"],
        #enquiryform select,
        #enquiryform .desired_date,
        #enquiryform input[type="hidden"]+.fake {
            width: 100%;
            padding: 12px 14px;
            border-radius: 10px;
            border: 1px solid rgba(0, 0, 0, 0.08);
            background: #fff;
            color: var(--muted);
            box-sizing: border-box;
            font-size: 1.5em;
            font-style: normal;
            outline: none;
            transition: box-shadow 0.15s ease, border-color 0.15s ease;
        }

        #enquiryform input[type="text"]:focus,
        #enquiryform input[type="tel"]:focus,
        #enquiryform input[type="email"]:focus,
        #enquiryform select:focus,
        #enquiryform .desired_date:focus {
            box-shadow: 0 10px 24px rgba(239, 96, 178, 0.12);
            border-color: var(--primary);
        }

        #enquiryform .font_xs_s {
            color: #444;
            font-size: 13px;
            line-height: 1.7;
        }

        #enquiryform input[name="term"] {
            display: none !important;
        }

        #enquiryform .submitButtonsRow {
            display: flex;
            align-items: flex-start;
            justify-content: space-between;
            gap: 14px;
            width: 100%;
            margin-top: 50px;
            margin-bottom: 6px;
        }

        #enquiryform .submitButtonColumn {
            display: block;
            flex: 1 1 0;
            min-width: 0;
            margin-top: -24px !important;
        }

        #enquiryform .submitButtonColumnOffline {
            padding-right: 0;
        }

        #enquiryform .submitButtonColumnOnline {
            padding-left: 0;
        }

        #offlinePaySubmit,
        #onlinePaySubmit {
            display: block;
            width: 100%;
            padding: 0;
            font-size: 0;
            line-height: 0;
            background: none;
            border: none;
        }

        #offlinePaySubmit img,
        #onlinePaySubmit img {
            display: block;
            width: 100%;
            height: auto;
        }

        #enquiryform .submit-note {
            line-height: 1.45;
            font-size: 12px !important;
            color: #000;
            letter-spacing: 0;
            text-align: center;
            margin-top: 8px !important;
        }

        .newsletterRow {
            display: flex;
            align-items: flex-start;
            gap: 1em;
        }

        .newsletterRow input[type="checkbox"] {
            margin-top: 0.25em;
            flex: 0 0 auto;
        }

        .field-error {
            color: #d43636ff;
            font-size: 0.9em;
            margin-top: 12px;
            background: #ffffff;
            padding: 0.5em;
            position: relative;
            border-radius: 4px;
            box-shadow: 0px 1px 4px #000;
        }

        .field-error::before {
            content: "";
            position: absolute;
            top: -0.5em;
            left: 1.3em;
            transform: translateX(-50%);
            width: 0;
            height: 0;
            border-left: 10px solid transparent;
            border-right: 10px solid transparent;
            border-bottom: 10px solid #ffffff;
        }

        .slick-dots {
            top: 0;
            display: inline-table;
        }

        .header_mobile {
            background: #fff;
        }

        .menu_main_cart.top_panel_icon {
            display: none;
        }

        .menu_button.icon-menu {
            right: 1em;
        }

        #icon-whatsapp {
            bottom: 10.5em !important;
        }

        .scroll_to_top.show {
            bottom: 17em !important;
        }

        @media (max-width: 768px) {
            .container.limitedMaxWidth {
                padding: 14px;
                margin: 0 12px;
            }

            .heroCard {
                border-radius: 0;
                margin: 0;
            }

            #enquiryform .submitButtonsRow {
                gap: 10px;
            }
        }

        @media (max-width: 420px) {
            .container.limitedMaxWidth {
                padding: 12px;
                border-radius: 8px;
            }

            .heroCard {
                border-radius: 0;
            }
        }
    </style>
</head>

<body class="home page body_filled article_style_stretch scheme_original preloader top_panel_above sidebar_hide sidebar_outer_hide sc_responsive">
    <?php include $marketingBase . 'component/gtag-body.php'; ?>
    <div class="body_wrap">
        <div class="page_wrap">
            <div class="top_panel_fixed_wrap"></div>
            <?php include $webTemplateBase . 'revamp-2025/menu.php'; ?>

            <main class="treatment-page-main">

                <!-- Slider with BG -->
                <div id="dynamicSlider" class="g-8-sm g-8-xs heroCard">
                    <div>
                        <div id="slider1" class="slick-slider">
                            <div><img src="<?php echo $marketingProjectBase; ?>img/slider/s1_a_image_v02.jpg" alt="loading" class="img-responsive"></div>
                            <div><img src="<?php echo $marketingProjectBase; ?>img/slider/s1_b_image_v03.webp" alt="loading" class="img-responsive"></div>
                            <div><img src="<?php echo $marketingProjectBase; ?>img/slider/s1_c_image_v02.jpg" alt="loading" class="img-responsive"></div>
                            <div><img src="<?php echo $marketingProjectBase; ?>img/slider/s1_d_image_v02.jpg" alt="loading" class="img-responsive"></div>
                            <div><img src="<?php echo $marketingProjectBase; ?>img/slider/s1_e_image_v02.jpg" alt="loading" class="img-responsive"></div>
                        </div>
                    </div>
                </div>

                <!-- Single Image -->
                <div class="g-container-xs g-tmpcol-8-xs g-gap-3-xs">
                    <div class="g-8-sm g-8-xs fullWidth">
                        <img src="<?php echo $marketingProjectBase; ?>img/image/i1_v02.jpg" alt="loading" class="responsive-bg-image">
                    </div>
                </div>

                <!-- Single Image -->
                <!-- <div class="g-container-xs g-tmpcol-8-xs g-gap-3-xs">
            <div class="g-8-sm g-8-xs fullWidth">
                <img src="<?php //echo $marketingBase; 
                            ?>/img/image/i2_v03.jpg" alt="loading" class="responsive-bg-image">
            </div>
        </div> -->

                <!-- Single Image -->
                <div class="g-container-xs g-tmpcol-8-xs g-gap-3-xs">
                    <div class="g-8-sm g-8-xs fullWidth">
                        <img src="<?php echo $marketingProjectBase; ?>img/image/i3_v08.jpg" alt="loading" class="responsive-bg-image">
                    </div>
                </div>

                <!-- Big Gift -->
                <?php
                // $imageFileName = "gift_big.gif";
                // include 'marketing/component/ui/gift_big/style_01.php';
                ?>

                <!-- Sticky CFA Button -->
                <?php
                $imageFileName = "cfa_v08.png";
                include $marketingBase . 'component/ui/cfa/style_01.php';
                ?>

                <!-- Payment Method -->
                <?php
                // $imageFileName = "payment_gift.gif";
                // include 'marketing/component/payment_method/online_gift_shop_price_v02.php';
                ?>

                <!-- Form Section/ -->
                <section id="formSection">

                    <!-- Single Image -->
                    <!-- <div class="g-8-sm g-8-xs fullWidth" style="margin-bottom: 20px;">
                <img src="<?php //echo $marketingBase; 
                            ?>/img/reg.jpg" alt="loading" class="responsive-bg-image">
            </div> -->
                    <div class="container limitedMaxWidth">
                        <!-- Form/ -->

                        <!-- For new flow remove-->
                        <!-- <form id="enquiryform" action="./inc/submit_off-to-whatsapp-dynamic-with-mo" method="post"> -->
                        <form id="enquiryform" method="post">
                            <div class="g-container-xs g-tmpcol-8-xs g-gap-3-xs">

                                <!-- new flow use start-->
                                <input type="hidden" id="isMoOnlinePayment" name="isMoOnlinePayment" value="<?php echo $isMoOnlinePayment ?>">
                                <input type="hidden" name="whatsappHkOfflineUrl" value="<?php echo $whatsappHkOfflineUrl ?>">
                                <input type="hidden" name="whatsappMoOfflineUrl" value="<?php echo $whatsappMoOfflineUrl ?>">

                                <input type="hidden" name="payment_gateway" value="paymentasia">
                                <input type="hidden" name="payment_account" value="dermaglow"> <!-- Optional: dermaglow / medirevive -->
                                <input type="hidden" name="return_url" value="https://perface.com">
                                <input type="hidden" name="brandList[]" value="<?php echo $brandList[0]; ?>">
                                <input type="hidden" name="brandList[]" value="<?php echo $brandList[1]; ?>">
                                <input type="hidden" name="brandList[]" value="<?php echo $brandList[2]; ?>">
                                <input type="hidden" name="brandList[]" value="<?php echo $brandList[3]; ?>">
                                <input id="paymentMethod" type="hidden" name="payment_method" value="payment-asia">
                                <input id="offer_offline_details" type="hidden" name="offer_offline_details" value="<?php echo $offerOfflineDetails ?>">
                                <!--newflow use end-->

                                <!-- For new flow remove-->
                                <input type="hidden" id="pid" name="pid" value="<?php echo $pid; ?>">
                                <input type="hidden" name="event_name" value="<?php echo $eventName; ?>">
                                <input type="hidden" name="target_source" value="">
                                <input type="hidden" name="ref_source" value="">
                                <input id="deposit1" type="hidden" data-additional-label="療程1的deposit" value="<?php echo $offerPriceOnlinePrepaid; ?>">
                                <input id="brandShortName1" type="hidden" name="brand_short_name" value="<?php echo $brandShortName; ?>"><?php // One of: "per FACE", "perFACE ESSENTIAL", "per FACE CN", "perFIT", "20BEAUTY", "20LASER", "LaserKool", "Skin 22", "iFACES", etc. 
                                                                                                                                            ?>
                                <div class="g-8-sm g-8-xs formItem"><input type="text" name="full_name" placeholder="英文全名" class="w-100-xs" data-required></div>
                                <div class="g-8-sm g-8-xs formItem"><input type="tel" name="mobile" placeholder="電話號碼" class="w-100-xs" data-required></div>
                                <div class="g-8-sm g-8-xs formItem"><input type="email" name="email" placeholder="電郵地址" class="w-100-xs" data-required></div>
                                <div class="g-8-sm g-8-xs formItem">
                                    <select name="age" data-required class="w-100-xs">
                                        <option value="" data-blank>年齡</option>
                                        <option value="18-24">18-24</option>
                                        <option value="25-34">25-34</option>
                                        <option value="35-44">35-44</option>
                                        <option value="45-54">45-54</option>
                                        <option value="55-64">55-64</option>
                                        <option value="65+">65+</option>
                                    </select>
                                </div>
                                <div class="g-8-sm g-8-xs customHidden">
                                    <select id="desired_treatment_face" class="w-100-xs">
                                        <option value="NONE" data-blank>Display example</option>
                                    </select>
                                </div>
                                <div class="g-8-sm g-8-xs formItem">
                                    <select id="desired_store_face" name="desired_store" class="w-100-xs" data-required style="overflow:hidden;">
                                        <option value="" data-blank>希望預約分店</option>
                                    </select>
                                </div>
                                <div class="g-8-sm g-8-xs formItem">
                                    <input id="desired_date_face" name="desired_date" class="desired_date" type="text" placeholder="希望預約日期" data-required disabled>
                                </div>

                                <div class="g-8-sm g-8-xs formItem">
                                    <select id="desired_time_face" name="desired_time" class="w-100-xs" data-required disabled>
                                        <option value="" data-blank>希望預約時間</option>
                                    </select>
                                </div>
                                <?php include $marketingBase . 'component/infobar.php'; ?>

                                <div class="g-8-xs font_xs_s">
                                    <div class="flex_container_xs">
                                        <input type="hidden" name="form_category" value="Single Trials"> <!-- 必填(可用_dynamic): Career,ITEC,Contact Us,Single Trial,Multi Trials,Mini-Site,Applicants -->
                                        <input type="hidden" id="treatmentName" name="treatment_name" value="<?php echo $treatmentName ?>"> <!-- 必填(可用_dynamic) -->
                                        <input type="hidden" id="treatmentShortName1" name="treatment_short_name" value="<?php echo $treatmentShortName1 ?>"> <!-- 必填(可用_dynamic): --><?php // 可用療程: https://apis.legendarytechnology.net/perface/crm/crm_get_settings_list?host=perface.hk&type=treatment 
                                                                                                                                                                                        ?>
                                        <input type="hidden" name="treatment_offer_name" value=""> <!-- 此為部位 組合 或子分類名 -->

                                        <input id="offer" type="hidden" name="offer" value="<?php echo $offerPrice ?>">
                                        <input id="offer_online" name="offer_online" type="hidden" value="<?php echo $offerPriceOnline ?>">
                                        <input id="offer_online_prepaid" type="hidden" name="offer_online_prepaid" value="<?php echo $offerPriceOnlinePrepaid ?>">
                                        <input id="offer_online_details" type="hidden" name="offer_online_details" value="<?php echo $offerDetails ?>"> <!-- A.k.a. "網付禮遇" - Set this or payment links won't be shown in email -->
                                        <!-- <input id="offer_online_details2" type="hidden" name="offer_online_details2" value="<?php //echo $offerDetails2 
                                                                                                                                    ?>"> -->

                                        <input type="hidden" name="promotion_code" value="">
                                        <input type="hidden" name="enquiry_details" value="<?php echo $enquiry_details ?>">
                                        <input type="hidden" name="enquiry_offer_details" value="">
                                        <input type="checkbox" name="term" value="本人已閱讀並同意貴集團之有關私隱政策、條款及細則" checked class="none_xs">
                                        <?php
                                        //include($_SERVER['DOCUMENT_ROOT'] . '/../../inc/helper/form_v02.php'); 
                                        ?>
                                    </div>
                                </div>

                                <!-- Submit Button -->
                                <?php
                                // $imageFileName = "submitButton.gif";
                                $imageFileName = ['submitButton_online1_v02.png', 'submitButton_online2_v02.png'];
                                $remainAmount = $hkOnlinePayDisplayPriceMessage;
                                $forgiveMessage = $hkOfflinePayDisplayPriceMessage;
                                $offlineSubmitImageFileName = "submitButton_offline.png";
                                include $marketingBase . 'component/ui/submitButton/online_offline_dynamic_button_newFlow_treatment_page.php';
                                ?>

                                <!-- <div id="hkGift" class="g-8-xs g-8-sm fullWidth" style="padding-right:1em; padding-bottom:6px;">
                            <img src="<?php //echo $marketingBase;
                                        ?>/img/hk-gift.png" alt="loading" class="responsive-bg-image">
                        </div> -->

                                <!-- <div id="moGift" class="g-8-xs g-8-sm fullWidth customHidden" style="padding-right:1em; padding-bottom:6px;">
                            <img src="<?php //echo $marketingBase;
                                        ?>/img/mo-gift_v02.png" alt="loading" class="responsive-bg-image">
                        </div> -->

                                <div class="g-8-xs customHidden">
                                    <div id="customReminder" class="customReminder">(餘額於療程當日到店支付)</div>
                                </div>

                                <!-- TNC -->
                                <div class="g-8-xs g-8-sm">
                                    <div class="g-container-xs g-tmpcol-1-xs g-gap-0-xs">
                                        <?php
                                        $submitAction = "付款";
                                        include $marketingBase . 'component/form-tnc-without-ltnc.php'; ?>
                                        <?php include $marketingProjectBase . 'component/landing-tnc.php'; ?>
                                    </div>
                                </div>

                                <!-- Single Image -->
                                <!-- <div class="g-8-sm g-8-xs fullWidth">
                            <img src="<?php //echo $marketingBase; 
                                        ?>/img/image/i4.jpg" alt="loading" class="responsive-bg-image">
                        </div> -->

                                <!-- Single Image -->
                                <!-- <div class="g-8-sm g-8-xs fullWidth">
                            <img src="<?php //echo $marketingBase; 
                                        ?>/img/image/i5.jpg" alt="loading" class="responsive-bg-image">
                        </div> -->

                                <!-- Single Image -->
                                <!-- <div class="g-8-sm g-8-xs fullWidth">
                            <img src="<?php //echo $marketingBase; 
                                        ?>/img/image/i6.jpg" alt="loading" class="responsive-bg-image">
                        </div> -->

                                <!-- Promotion Checkbox -->
                                <div class="g-8-xs font_xs_s" style="margin-top:600px;">
                                    <div class="newsletterRow">
                                        <div><input type="checkbox" name="newsletter" value="本人願意繼續收到有關貴集團的最新資訊及優惠" checked></div>
                                        <div>本人願意繼續收到有關貴集團的最新資訊及優惠</div>
                                    </div>
                                </div>

                                <div class="g-8-xs">
                                    <?php //include($_SERVER['DOCUMENT_ROOT'] . '/../../inc/helper/form_extra_tnc.php'); 
                                    ?>
                                </div>
                        </form>
                        <!-- /Form -->
                    </div>
                </section>
                <!-- /Form Section -->
            </main>

            <!-- Debug Button -->
            <button type="button" id="debugOfferOnlinePrepaid" class="customButtonStyle customHidden" style="margin-bottom:8px;">
                Debug: Show #offer_online_prepaid Value
            </button>

            <?php include $webTemplateBase . 'revamp-2025/footer.php'; ?>
            <?php include $webTemplateBase . 'revamp-2025/scrollToTop.php'; ?>
            <?php include $webTemplateBase . 'revamp-2025/template-fixed-js.php'; ?>
        </div>
    </div>

    <!--new flow use start-->
    <script>
        // Insert client-side placeholders for required fields and expose the list to JS
        (function() {
            // server-side required list exposed to JS
            window.__formRequiredList = <?php echo json_encode($form_required_list, JSON_UNESCAPED_UNICODE); ?> || [];
            // wait for DOM ready (page includes jQuery already, but use DOMContentLoaded to be safe)
            document.addEventListener('DOMContentLoaded', function() {
                window.__formRequiredList.forEach(function(fieldName) {
                    if (!fieldName) return;
                    // find first matching element inside the form
                    var form = document.getElementById('enquiryform');
                    if (!form) return;
                    var els = form.querySelectorAll('[name="' + fieldName + '"]');
                    if (!els || els.length === 0) return;
                    // place an error container after the last matched element
                    var el = els[els.length - 1];
                    // skip if already present
                    var next = el.nextElementSibling;
                    if (next && next.classList && next.classList.contains('field-error')) return;
                    var div = document.createElement('div');
                    div.className = 'field-error';
                    div.setAttribute('data-field', fieldName);
                    div.style.display = 'none';
                    div.textContent = ''; // will be filled by validation routine
                    // insert after element
                    if (el.parentNode) el.parentNode.insertBefore(div, el.nextSibling);
                });
            });
        })();
    </script>

    <script>
        // Insert client-side placeholders for hidden required fields and expose the list to JS
        (function() {
            // server-side hidden required list exposed to JS (used by checkRequiredHiddenFields)
            window.__hiddenRequiredList = <?php echo json_encode($hidden_required_list, JSON_UNESCAPED_UNICODE); ?> || [];
            // wait for DOM ready (page includes jQuery already, but use DOMContentLoaded to be safe)
            document.addEventListener('DOMContentLoaded', function() {
                window.__hiddenRequiredList.forEach(function(fieldName) {
                    if (!fieldName) return;
                    // find first matching element inside the form
                    var form = document.getElementById('enquiryform');
                    if (!form) return;
                    var els = form.querySelectorAll('[name="' + fieldName + '"]');
                    if (!els || els.length === 0) return;
                    // place an error container after the last matched element
                    var el = els[els.length - 1];
                    // skip if already present
                    var next = el.nextElementSibling;
                    if (next && next.classList && next.classList.contains('field-error')) return;
                    var div = document.createElement('div');
                    div.className = 'field-error';
                    div.setAttribute('data-field', fieldName);
                    div.style.display = 'none';
                    div.textContent = ''; // will be filled by validation routine
                    // insert after element
                    if (el.parentNode) el.parentNode.insertBefore(div, el.nextSibling);
                });
            });
        })();
    </script>
    <!--new flow use end-->

    <script>
        const hkOnlinePayDisplayPriceMessage = <?php echo json_encode($hkOnlinePayDisplayPriceMessage); ?>;
        const hkOfflinePayDisplayPriceMessage = <?php echo json_encode($hkOfflinePayDisplayPriceMessage); ?>;
        const moOnlineDisplayPriceMessage = <?php echo json_encode($moOnlineDisplayPriceMessage); ?>;
        const moOfflineDisplayPriceMessage = <?php echo json_encode($moOfflineDisplayPriceMessage); ?>;
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var paymentMethodInput = document.getElementById('paymentMethod');
            var offlineNote = document.getElementById('submitNoteOffline');
            var onlineNote = document.getElementById('submitNoteOnline');
            var onlineButton = document.getElementById('onlinePaySubmit');
            var offlineButton = document.getElementById('offlinePaySubmit');

            function setPaymentMethodValue(nextValue) {
                if (!paymentMethodInput) {
                    return;
                }

                paymentMethodInput.value = nextValue;
                paymentMethodInput.dispatchEvent(new Event('change', {
                    bubbles: true
                }));
            }

            if (offlineNote) {
                offlineNote.id = 'submitButtonOfflineNote';
            }

            if (onlineNote) {
                onlineNote.id = 'submitButtonOnlineNote';
            }

            if (onlineButton) {
                onlineButton.addEventListener('click', function() {
                    setPaymentMethodValue('payment-asia');
                });
            }

            if (offlineButton) {
                offlineButton.addEventListener('click', function() {
                    setPaymentMethodValue('none');
                });
            }
        });
    </script>
    <script type="module" src="/<?php echo $marketingProjectBase; ?>js/main.js"></script>

</body>

</html>