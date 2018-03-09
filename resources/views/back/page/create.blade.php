@extends('back.page.template')

@section('form-open')
    <form method="post" action="{{ route('pages.store') }}">
@endsection