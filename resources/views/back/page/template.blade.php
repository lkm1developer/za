@extends('back.layoutpage')

@section('css')
    <style>
        textarea { resize: vertical; }
    </style>
    <link href="{{ asset('adminlte/plugins/colorbox/colorbox.css') }}" rel="stylesheet">
@endsection

@section('main')

    @yield('form-open')
        {{ csrf_field() }}

        <div class="row">

            <div class="col-md-8">
                @if (session('page-ok'))
                    @component('back.components.alert')
                        @slot('type')
                            success
                        @endslot
                        {!! session('page-ok') !!}
                    @endcomponent
                @endif
                @include('back.partials.boxinput', [
                    'box' => [
                        'type' => 'box-primary',
                        'title' => __('Title'),
                    ],
                    'input' => [
                        'name' => 'title',
                        'value' => isset($page) ? $page->title : '',
                        'input' => 'text',
                        'required' => true,
                    ],
                ])
                
                @include('back.partials.boxinput', [
                    'box' => [
                        'type' => 'box-primary',
                        'title' => __('Body'),
                    ],
                    'input' => [
                        'name' => 'body',
                        'value' => isset($page) ? $page->body : '',
                        'input' => 'textarea',
                        'rows' => 10,
                        'required' => true,
                    ],
                ])
                <button type="submit" class="btn btn-primary">@lang('Submit')</button>
            </div>

            <div class="col-md-4">

               

              

                @component('back.components.box')
                    @slot('type')
                        success
                    @endslot
                    @slot('boxTitle')
                        @lang('Details')
                    @endslot
                    @include('back.partials.input', [
                        'input' => [
                            'name' => 'slug',
                            'value' => isset($page) ? $page->slug : '',
                            'input' => 'text',
                            'title' => __('Slug'),
                            'required' => true,
                        ],
                    ])
                    @include('back.partials.input', [
                        'input' => [
                            'name' => 'active',
                            'value' => isset($page) ? $page->active : false,
                            'input' => 'checkbox',
                            'title' => __('Status'),
                            'label' => __('Active'),
                        ],
                    ])
                @endcomponent

                

                @component('back.components.box')
                    @slot('type')
                        info
                    @endslot
                    @slot('boxTitle')
                        SEO
                    @endslot
                    @include('back.partials.input', [
                        'input' => [
                            'name' => 'meta_description',
                            'value' => isset($page) ? $page->meta_description : '',
                            'input' => 'text',
                            'title' => __('META Description'),
                            'input' => 'textarea',
                            'rows' => 3,
                            'required' => true,
                        ]
                    ])
                    @include('back.partials.input', [
                        'input' => [
                            'name' => 'meta_keywords',
                            'value' => isset($page) ? $page->meta_keywords : '',
                            'input' => 'text',
                            'title' => __('META Keywords'),
                            'input' => 'textarea',
                            'rows' => 3,
                            'required' => true,
                        ]
                    ])
                    @include('back.partials.input', [
                        'input' => [
                            'name' => 'seo_title',
                            'value' => isset($page) ? $page->seo_title : '',
                            'input' => 'text',
                            'title' => __('SEO Title'),
                            'required' => true,
                        ],
                    ])
                @endcomponent

        </div>
        </div>
        <!-- /.row -->
    </form>

@endsection

@section('js')

    <script src="{{ asset('adminlte/plugins/colorbox/jquery.colorbox-min.js') }}"></script>
    <script src="{{ asset('adminlte/plugins/voca/voca.min.js') }}"></script>
    <script src="https://cdn.ckeditor.com/4.7.3/standard/ckeditor.js"></script>
    <script>

        CKEDITOR.replace('body', {customConfig: '/adminlte/js/ckeditor.js'})

        $('.popup_selector').click( function (event) {
            event.preventDefault()
            var updateID = $(this).attr('data-inputid')
            var elfinderUrl = '/elfinder/popup/'
            var triggerUrl = elfinderUrl + updateID
            $.colorbox({
                href: triggerUrl,
                fastIframe: true,
                iframe: true,
                width: '70%',
                height: '70%'
            })
        })

        function processSelectedFile(filePath, requestingField) {
            $('#' + requestingField).val('\\' + filePath)
            $('#img').attr('src', '\\' + filePath)
        }

        $('#slug').keyup(function () {
            $(this).val(v.slugify($(this).val()))
        })

        $('#title').keyup(function () {
            $('#slug').val(v.slugify($(this).val()))
        })

    </script>

@endsection