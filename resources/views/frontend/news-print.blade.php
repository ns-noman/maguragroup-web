@php
    $basicInfo = Cache::remember('basic_info', 60, function () {
        return \App\Models\BasicInfo::first();
    });
@endphp
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="Description" content="{{ $data['meta_description'] ?? $basicInfo->MetaDescription }}">
    <title>{{ $data['title'] ?? $basicInfo->HomePageTitle }}</title>
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:site_name" content="{{ $basicInfo->HomePageTitle }}" />
    <meta property="og:image" content="{{ asset($data['image'] ?? $basicInfo->Logo) }}" />
    <meta property="og:title" content="{{ $data['title'] ?? $basicInfo->SiteName }}" />
    <meta property="og:description" content="{{ $data['meta_description'] ?? $basicInfo->MetaDescription }}" />
    <link rel="shortcut icon" href="{{ asset($basicInfo->FavIcon) }}">
    <link rel="stylesheet" href="{{ asset('public/frontend-assets/assets/contents/css/colorbox.css') }}" />
    <link href="{{ asset('public/frontend-assets/assets/contents/css/style.css?v=1') }}" rel="stylesheet">
    <style>
        @media print and (color) {
            * {
                -webkit-print-color-adjust: exact;
                print-color-adjust: exact;
            }
        }
        .wrapper {
            max-width: 1000px;
            margin: 0 1cm;
        }
        img {
            max-width: 100%;
            height: auto;
        }
        .logo img {
            width: 270px;
            height: auto;
        }
        .left_side {
            width: 100% !important;
            margin: 20px 0 20px 0px;
        }
        .inline {
            font-size: 20px;
            text-decoration: none;
            color: #030303
        }

        .footerText {
            width: 100%;
            overflow: hidden;
            border-top: 1px solid #bbbcbd;
            background: #e7e7e7;
            text-align: center;
        }
    </style>

    <style media="print">
        @media print {
            .no-print,
            .no-print * {
                display: none !important;
            }


            .wrapper {
                margin: 0 auto;
                max-width: 1000px;
            }

            .main_content {
                padding: 20px;
            }

            img {
                display: block;
                max-width: 98%;
                height: auto;
                margin: 0 auto;
            }
        }
    </style>
    <style>
        .print {
            display: none;
        }

        @media print {
            .print {
                display: block;
            }
        }

        .border {
            padding: 5px 0;
            border: none;
            border-top: solid 1px #ccc;
            border-bottom: solid 1px #ccc;

        }
    </style>
    <script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
    <script type="text/javascript">
        stLight.options({
            publisher: "fc3b7463-f15d-4d7e-bc93-5ad428477cde",
            doNotHash: false,
            doNotCopy: false,
            hashAddressBar: false
        });
    </script>
    <script>
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r].q || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
        ga('create', 'UA-50120474-2', 'auto');
        ga('send', 'pageview');
    </script>
</head>
<body class="A4">
    <div class="wrapper">
        <div class="header">
            <div class="headerTopNav">
                <div class="online-date-ns" style="margin-left: 10px;">
                    <span class="gregorian-calendar"></span> | <span class="bengali-calender"></span> | <span class="arabic-date"></span>
                </div>
                <div class="online-weather">
                </div>
            </div>
            <div class="headerTopAdd">
                <div class="logo">
                    <a href="{{ url('/') }}"><img height="30"
                            src="{{ asset('public/frontend-assets/assets/images/Logo.png') }}" alt=""></a>
                </div>
                <div id="ad" style="height:90px;"></div>
            </div>
        </div>
        <div class="main_content_section">
            <div class="left_side">
                <div id="page-content" class="main_content">
                    @if (empty($data['news']))
                        <h1>Sorry, news not found!!!</h1>
                    @else
                        <div style="text-align: center; clear:both;">
                            @if (!empty($data['news']['ref_link']))
                                <img src="{{ asset('public/uploads/pages/' . $data['news']['uri']) }}">
                                <br>
                                @if (!empty($data['newsSecond']))
                                    <img src="{{ asset('public/uploads/pages/' . $data['newsSecond']['uri']) }}">
                                @endif
                            @else
                                <img src="{{ asset('public/uploads/pages/' . $data['news']['uri']) }}">
                            @endif
                            @if ($data['parentnewsID'] > 0)
                                <img src="{{ asset('public/uploads/pages/' . $data['newsFirst']['uri']) }}">
                                <br>
                                <img src="{{ asset('public/uploads/pages/' . $data['news']['uri']) }}">
                            @endif
                            <div style="clear:both; float:left; width:{{ $data['news']['width'] * 1.27 }}px;"></div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div class="footerText">
		<div class="footerTextIn">
		  <div class="footerTextInner">
			<div class="container2">
			  <div class="row site_url" data-url="{{ route('home.index') }}">
				<div class="col-md-12 col-sm-12 col-xs-12">
				  <div class="footerMid">
					<p>© {{ now()->year }} Bangladesher Khabor. All rights reserved.</p>
				  </div>
				</div>
			  </div>
			</div>
		  </div>
		</div>
	</div>
    <!-- Date Conversion Script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/moment-with-locales.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/xsoh/moment-hijri/moment-hijri.js"></script>
    <script>
        function convertToBengaliNumber(num) {
            const bengaliNumbers = {
                '0': '০',
                '1': '১',
                '2': '২',
                '3': '৩',
                '4': '৪',
                '5': '৫',
                '6': '৬',
                '7': '৭',
                '8': '৮',
                '9': '৯',
                '.': '.'
            };
            return num.toString().split('').map(digit => bengaliNumbers[digit]).join('');
        }

        function getBangladeshiBengaliDate() {
            const banglaMonths = ['বৈশাখ', 'জ্যৈষ্ঠ', 'আষাঢ়', 'শ্রাবণ', 'ভাদ্র', 'আশ্বিন', 'কার্তিক', 'অগ্রহায়ণ', 'পৌষ',
                'মাঘ', 'ফাল্গুন', 'চৈত্র'
            ];
            const gregorianDate = new Date();
            const monthDays = [31, 31, 31, 31, 30, 30, 30, 30, 30, 29, 29, 30];
            const startOfBanglaYear = new Date(gregorianDate.getFullYear(), 3, 14);
            let banglaYear = gregorianDate.getFullYear() - 593;
            let monthIndex = 0;
            let banglaDay = gregorianDate.getDate();
            if (gregorianDate < startOfBanglaYear) {
                banglaYear -= 1;
                monthIndex = 11;
            } else {
                let daysPassed = Math.floor((gregorianDate - startOfBanglaYear) / (1000 * 60 * 60 * 24));
                for (let i = 0; i < 12; i++) {
                    if (daysPassed < monthDays[i]) {
                        monthIndex = i;
                        banglaDay = daysPassed + 1;
                        break;
                    }
                    daysPassed -= monthDays[i];
                }
            }
            document.querySelectorAll('.bengali-calender').forEach(function(element) {
                element.innerHTML =
                    `${convertToBengaliNumber(banglaDay)} ${banglaMonths[monthIndex]} ${convertToBengaliNumber(banglaYear)}`;
            });

        }

        function arabicDate() {
            moment.locale('en');
            let bnMonth = ['মহররম', 'সফর', 'রবিউল আউয়াল', 'রবিউস সানি', 'জমাদিউল আউয়াল', 'জমাদিউস সানি', 'রজব', 'শা’বান',
                'রমজান', 'শাওয়াল', 'জ্বিলকদ', 'জ্বিলহজ'
            ];
            let hijriDate = moment().format('iYYYY-iMM-iDD');
            let splittedDate = hijriDate.split('-');
            let y = convertToBengaliNumber(splittedDate[0]);
            let m = parseInt(splittedDate[1]);
            let d = convertToBengaliNumber(splittedDate[2]);
            let nd = d + ' ' + bnMonth[m] + ' ' + y;
            document.querySelectorAll('.arabic-date').forEach(function(element) {
                element.innerHTML = nd;
            });
            console.log(document.getElementsByClassName('arabic-date')[0].innerHTML);
            
        }

        function greogorianCalendar() {
            let banglaWeekDays = ['রবিবার', 'সোমবার', 'মঙ্গলবার', 'বুধবার', 'বৃহস্পতিবার', 'শুক্রবার', 'শনিবার'];
            let bnMonth = ["জানুয়ারি", "ফেব্রুয়ারি", "মার্চ", "এপ্রিল", "মে", "জুন", "জুলাই", "আগস্ট", "সেপ্টেম্বর",
                "অক্টোবর", "নভেম্বর", "ডিসেম্বর"
            ];
            let date = new Date();
            let y = convertToBengaliNumber(date.getFullYear());
            let m = parseInt(date.getMonth());
            let d = convertToBengaliNumber(date.getDate());
            let nd = d + ' ' + bnMonth[m] + ' ' + y;
            document.querySelectorAll('.gregorian-calendar').forEach(function(element) {
                element.innerHTML = banglaWeekDays[date.getDay()] + ', ' + nd;
            });
        }
        greogorianCalendar();
        arabicDate();
        getBangladeshiBengaliDate();
    </script>
    <!-- Date Conversion Script End-->
    <script src="{{ asset('public/frontend-assets') }}/assets/contents/js/jquery-1.12.4.min.js"></script>
    <script src="{{ asset('public/frontend-assets') }}/assets/contents/js/bootstrap.min.js"></script>
    <script>
        window.print();
    </script>
</body>

</html>
