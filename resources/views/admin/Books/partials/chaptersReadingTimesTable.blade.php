<!DOCTYPE html>
<html>
<head>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }

        th, td {
            padding: 15px;
        }
    </style>
</head>
<body>


<table style="width:75%;margin: 0 auto;">
    <tr>
        <th>رقم الفصل</th>
        <th>تاريخ الأيام المتاحة</th>
    </tr>
    @foreach($chaptersArray as $chapterNumber => $singleChapter)
        <tr>
            <td>{{$chapterNumber+1}}</td>
            <td>
                @foreach($singleChapter as $singleDayShift)
                    {{$singleDayShift}} <br>
            @endforeach
            </br>
        </tr>
    @endforeach
</table>


</body>
</html>
