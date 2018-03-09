@extends('back.page.template')

@section('form-open')
    <form method="post" action="{{ route('pages.update', [$page->id]) }}">
        {{ method_field('PUT') }}
@endsection
