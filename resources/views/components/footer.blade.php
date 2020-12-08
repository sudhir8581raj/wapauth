<div {{ $attributes }}>
    <h1>{{$title}}</h1>
    <p>{{$slogan}}</p>
    If you do not have a consistent goal in life, you can not live it in a consistent way. - Marcus Aurelius
    <ul>
        @foreach($getUser as $user)
        <li>{{$user}}</li>
        @endforeach
    </ul>
</div>