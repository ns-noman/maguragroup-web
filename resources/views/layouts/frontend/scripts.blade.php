<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<script src="{{ asset('public/frontend-assets') }}/assets/contents/js/jquery.colorbox.js"></script>
<script src="{{ asset('public/frontend-assets') }}/assets/contents/jPaginate/jquery.paginate.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js" integrity="sha512-T/tUfKSV1bihCnd+MxKD0Hm1uBBroVYBOYSk1knyvQ9VyZJpc/ALb4P0r6ubwVPSGB2GvjeoMAJJImBG12TiaQ==" crossorigin="anonymous"></script>
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
<script>
    $(document).ready(function() {
        $.ajax({
            url: '{{ route("weathers.index") }}',
            method: "get",
            datatype: "json",
            success: function(res){
                let result = ``;
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
                if (res.main.temp) {
                    let src = `http://openweathermap.org/img/w/${res.weather[0].icon}.png`;
                    result +=
                        `<img  alt="weather" height="23" src="${src}">${convertToBengaliNumber(res.main.temp)}<sup>o</sup> সে. আদ্রতা ${convertToBengaliNumber(res.main.humidity)}%`;
                }
                $('.weather').html(result);
            }
        });
    });
</script>


<script>
    $(document).ready(function() {
        var site_url = $(".site_url").attr("data-url");
        $('button[data-toggle=popover]').popover({
            html: true,
            content: function() {
                return $('#popover_content_wrapper').html();
            }
        });
    });

    $(function() {
        // bind change event to select
        $('.news-page-select').on('change', function() {
            var url = $(this).val();
            if (url) {
                window.location = url;
            }
            return false;
        });
    });

    $(document).ready(function() {
        $('.choose-date').on('submit', function(e) {
            var url = $('#url').val();
            var Day = $('#Day').val();
            var Month = $('#Month').val();
            var Year = $('#Year').val();
            FullDate = ('0' + Day).slice(-2) + '-' +
                ('0' + Month).slice(-2) + '-' +
                Year + '/1';
            window.location = url + FullDate;
            e.preventDefault();
        });
    });

    $(document).ready(function() {
        
        $(".iframe").colorbox({iframe: true,width: "80%",height: "100%"});

        var base_url = '{{ route("home.index",[":date"]) }}';
        $picker = $('.datepicker-here');
        var dp = $picker.datepicker({}).on('changeDate', function(e) {
            let dateArr = e.format().split('-');
            let date = dateArr[2]+'-'+dateArr[1]+'-'+dateArr[0];
            base_url = base_url.replace(':date', date);
            window.location.href = base_url;
        });
    });
</script>
