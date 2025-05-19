<!DOCTYPE html>
<html>
<head>
    <title>My PDF Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        h1 {
            color: #008000;
            text-align: center;
        }
        p {
            font-size: 16px;
            line-height: 1.5;
            color: #333;
        }
        .date {
            font-size: 12px;
            text-align: right;
            color: #666;
        }
    </style>
</head>
<body>
    <table >
        <tr style="border: 2px solid #ccc; padding: 8px;" class="border-2 border-b-slate-300 border-t-slate-300 px-2 py-2">
            <th>Positions</th>
        </tr>
        @foreach ($positions as $position)
            <tr style="border: 2px solid #ccc; padding: 8px;"><td>{{ $position->PostName }}</td></tr>
        @endforeach
    </table>
</body>
</html>