<!DOCTYPE html>
<html lang="ar" id="demo" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
    <meta name="description" content="ٌراق اونلاين">
    <meta name="author" content="راق اونلاين">
    <meta name="keywords"
          content="راق اونلاين">

    <!-- Title -->
    <title>راق اونلاين</title>
    <style>
        body {
            font-family: 'Amiri', sans-serif;
        }
    </style>

</head>
<body class="rtl main-body leftmenu" >
@foreach($results as $result)
    @php
        $options = json_decode($result->questions);
    @endphp
    @if($result->page_id == 0)
        <h2> الجنس : {{ \App\Models\UserResult::gender[$options->gender]}} </h2>
        <h2> الحالة الاجتماعية : {{ \App\Models\UserResult::status[$options->status]}} </h2>
        <h2>العمر : {{$options->age}} </h2>
    @else
        <h2>{{$result->page->name}}</h2>
        @foreach($options as $option)
            @php
                $q = \App\Models\Question::findOrFail($option);
            @endphp
            <h3>{{$q->question}}</h3>
        @endforeach

    @endif
@endforeach
</body>
</html>
