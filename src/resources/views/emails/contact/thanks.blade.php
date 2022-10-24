@component('mail::message')

<h1>お問い合わせ内容</h1>
<p>名前:{{$name}}</p>
<p>ふりがな：{{$name_kana}}</p>
<p>メールアドレス:{{$mail}}</p>
<h2>内容</h2>
<p>{{$naiyou}}</p>
@endcomponent
