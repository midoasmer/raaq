<!DOCTYPE html>
<html dir="rtl">

<head>
    <title>Result</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
        * {
            font-family: DejaVu Sans !important;
        }

        body {
            font-size: 16px;
            font-family: 'DejaVu Sans', 'Roboto', 'Montserrat', 'Open Sans', sans-serif;
            padding: 10px;
            margin: 10px;

            color: #777;
        }


        body {
            color: #777;
            text-align: right;
        }

        body h1 {

            margin-bottom: 0px;
            padding-bottom: 0px;
            color: #000;
        }

        body h3 {

            margin-top: 10px;
            margin-bottom: 20px;
            color: #555;
        }

        body a {
            color: #06f;
        }

        @page {
            size: a4;
            margin: 0;
            padding: 0;
        }

        .invoice-box table {
            direction: ltr;
            width: 100%;
            text-align: right;
            border: 1px solid;
            font-family: 'DejaVu Sans', 'Roboto', 'Montserrat', 'Open Sans', sans-serif;
        }


        .row {
            display: block;
            padding-left: 24;
            padding-right: 24;
            page-break-before: avoid;
            page-break-after: avoid;
        }

        .column {
            display: block;
            page-break-before: avoid;
            page-break-after: avoid;
        }
    </style>
</head>

<body>

<div class="invoice-box">

    <div>
        <p lang="ar">
        @foreach($results as $result)
            @php
                $options = json_decode($result->questions);
            @endphp
            @if($result->page_id == 0)
                <h1>بيانات عامة</h1>
                <h2> الجنس : {{ \App\Models\UserResult::gender[$options->gender]}} </h2>
                <h2> الحالة الاجتماعية : {{ \App\Models\UserResult::status[$options->status]}} </h2>
                <h2>العمر : {{$options->age}} </h2>
            @else
                <h1>{{$result->page->name}}</h1>
                @foreach($options as $option)
                    @php
                        $q = \App\Models\Question::findOrFail($option);
                    @endphp
                    <h3>{{$q->question}}</h3>
                    @endforeach

                    @endif
                    @endforeach
                    </p>
    </div>
</div>
</body>

</html>


{{--<!DOCTYPE html>--}}
{{--<html lang="ar" id="demo" dir="rtl">--}}

{{--<head>--}}
{{--    <meta charset="utf-8">--}}
{{--    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">--}}
{{--    <meta name="description" content="ٌراق اونلاين">--}}
{{--    <meta name="author" content="راق اونلاين">--}}
{{--    <meta name="keywords"--}}
{{--          content="راق اونلاين">--}}

{{--    <!-- Title -->--}}
{{--    <title>راق اونلاين</title>--}}
{{--    <style>--}}
{{--        body {--}}
{{--            font-family: 'cairo', sans-serif; /* تأكد من استخدام الخط المناسب */--}}
{{--            direction: rtl; /* لتفعيل الاتجاه من اليمين إلى اليسار */--}}
{{--        }--}}
{{--    </style>--}}

{{--</head>--}}
{{--<body class="rtl main-body leftmenu" >--}}
{{--@foreach($results as $result)--}}
{{--    @php--}}
{{--        $options = json_decode($result->questions);--}}
{{--    @endphp--}}
{{--    @if($result->page_id == 0)--}}
{{--        <h2> الجنس : {{ \App\Models\UserResult::gender[$options->gender]}} </h2>--}}
{{--        <h2> الحالة الاجتماعية : {{ \App\Models\UserResult::status[$options->status]}} </h2>--}}
{{--        <h2>العمر : {{$options->age}} </h2>--}}
{{--    @else--}}
{{--        <h2>{{$result->page->name}}</h2>--}}
{{--        @foreach($options as $option)--}}
{{--            @php--}}
{{--                $q = \App\Models\Question::findOrFail($option);--}}
{{--            @endphp--}}
{{--            <h3>{{$q->question}}</h3>--}}
{{--        @endforeach--}}

{{--    @endif--}}
{{--@endforeach--}}
{{--</body>--}}
{{--</html>--}}
