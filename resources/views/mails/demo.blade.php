<img style="width:50px; height:50px; object-fit:contain"
    src="{{ URL::asset('./img/logo.jpg') }}"
    alt="logo">
Hello <strong>{{ $mailObj->receiverName }}</strong>,

<p>{{ $mailObj->message }}</p>

Thank You,
<br/>
<i>{{ $mailObj->senderName }}</i>