
@extends('layout')
<body>
<h1>Test here</h1>
@foreach ($test_array as $ta)
 {{ $ta }}
@endforeach
<br>
<a href="page2">page2</a>
</body>
