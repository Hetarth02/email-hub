<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Email</title>
    </head>
    <style>
        * {
            line-height: 1.5;
            font-family: sans-serif;
        }
    </style>
    <body>
        <p>
            This email was sent to you by <a href="mailto:{{ $data['email_from_email'] }}">{{ $data['email_from_email'] }}</a>.
        </p>
        <p>
            {{ $data['email_message'] }}
        </p>
        <small>This service is maintained by Queser.</small>
    </body>
</html>
