<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets2/images/Techno Plant logo.png') }}">
    <title>Email</title>
</head>

<body style="background-color: #f0f0f0 ;font-family: Arial, Helvetica, sans-serif">
    {{-- <div><img src="{{ asset('assets2/images/Techno Plant logo.png') }}" style="text-align: center;" alt="logo"></div> --}}
    <div style="width: 600px; margin:20px auto; padding:20px 10px; border:1px solid #f0f0f0; background-color: #fff ">
        <h3>Dear Admin,</h2>
            <p style="font-weight: 400">Hope this email find you will</p>
            <br>
            <p style="font-weight: 400">There is new contact us information as bellow:</p>
            <div style="display: flex; flex-direction: row;">
                <p><b>Name:</b>
                <p style="font-weight: 400; display: inline-block; ">{{ $data['form_name'] }}</p>
                </p>
            </div>
            <div style="display: flex; flex-direction: row;">
                <p><b>Email:</b>
                <p style="font-weight: 400; display: inline-block;">{{ $data['form_email'] }}</p>
                </p>
            </div>
            <div style="display: flex; flex-direction: row;">
                <p><b>Phone:</b>
                <p style="font-weight: 400; display: inline-block;">{{ $data['form_Phone'] }}</p>
                </p>
            </div>
            <div style="display: flex; flex-direction: row;">
                <p><b>Subject:</b>
                <p style="font-weight: 400; display: inline-block;">{{ $data['form_Subject'] }}</p>
                </p>
            </div>
            <div style="display: flex; flex-direction: row;">
                <p><b>Message:</b>
                <p style="font-weight: 400; display: inline-block;">{{ $data['form_message'] }}</p>
                </p>
            </div>
            <br>
            <p>Best Regards.</p>
    </div>


</body>

</html>
