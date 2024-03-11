@include('header');
<pre>{{print_r($data)}} </pre>
<p> day : {{$data['response']['day']['name']}} </p>
@include('footer');