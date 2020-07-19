<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>登入介面</title>
    <style type="text/css">
        .main{
            margin: 0 auto;
            padding: 10px;
            width: 250px;
            height: 80px;
            background: cornflowerblue;
        }
        .leftbar{
            width: 30%;
            padding-bottom: 15px;
            display: inline-block;
            text-align: right;
        }
        .bottom{
            padding-bottom: 15px;
        }
        .result{
            margin-top: 20px;
            margin-left: 560px;
            width: 400px;
            height: 400px;
        }
    </style>
</head>
<body>

<form action="/get_id" method="get">

    <div id="main" class="main">
        <div>
            <label><div class="leftbar">User Id：</div><input type="text" name="user_id" /></label>
        </div>
        <div class="bottom">
            <div class="leftbar"></div><input type="submit" name="submit" value="Search" />
        </div>

    </div>

</form>
<textarea class="result" name="Content">
    {{json_encode($data)}}
{{--    @foreach ($data->data as $item)--}}
{{--        {{ $item }}--}}
{{--    @endforeach--}}
</textarea>
</body>
</html>
