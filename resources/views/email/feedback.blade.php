<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width" />
</head>

<body>

    <h2>Сообщение: {{$msg['subject']}}</h2>

    <h3>от: {{$msg['first_name']}} {{$msg['last_name']}}</h3>
    <p>Email: <a href="mailto:{{$msg['email']}}">{{$msg['email']}}</a>

    <p>{!! $msg['text'] !!}</p>

</body>

