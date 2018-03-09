<?php $__env->startSection('css'); ?>
    <style>
        textarea { resize: vertical; }
    </style>
    <link href="<?php echo e(asset('adminlte/plugins/colorbox/colorbox.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main'); ?>

    <?php echo $__env->yieldContent('form-open'); ?>
        <?php echo e(csrf_field()); ?>


        <div class="row">

            <div class="col-md-8">
                <?php if(session('page-ok')): ?>
                    <?php $__env->startComponent('back.components.alert'); ?>
                        <?php $__env->slot('type'); ?>
                            success
                        <?php $__env->endSlot(); ?>
                        <?php echo session('page-ok'); ?>

                    <?php echo $__env->renderComponent(); ?>
                <?php endif; ?>
                <?php echo $__env->make('back.partials.boxinput', [
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
                ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                
                <?php echo $__env->make('back.partials.boxinput', [
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
                ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                <button type="submit" class="btn btn-primary"><?php echo app('translator')->getFromJson('Submit'); ?></button>
            </div>

            <div class="col-md-4">

               

              

                <?php $__env->startComponent('back.components.box'); ?>
                    <?php $__env->slot('type'); ?>
                        success
                    <?php $__env->endSlot(); ?>
                    <?php $__env->slot('boxTitle'); ?>
                        <?php echo app('translator')->getFromJson('Details'); ?>
                    <?php $__env->endSlot(); ?>
                    <?php echo $__env->make('back.partials.input', [
                        'input' => [
                            'name' => 'slug',
                            'value' => isset($page) ? $page->slug : '',
                            'input' => 'text',
                            'title' => __('Slug'),
                            'required' => true,
                        ],
                    ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    <?php echo $__env->make('back.partials.input', [
                        'input' => [
                            'name' => 'active',
                            'value' => isset($page) ? $page->active : false,
                            'input' => 'checkbox',
                            'title' => __('Status'),
                            'label' => __('Active'),
                        ],
                    ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                <?php echo $__env->renderComponent(); ?>

                

                <?php $__env->startComponent('back.components.box'); ?>
                    <?php $__env->slot('type'); ?>
                        info
                    <?php $__env->endSlot(); ?>
                    <?php $__env->slot('boxTitle'); ?>
                        SEO
                    <?php $__env->endSlot(); ?>
                    <?php echo $__env->make('back.partials.input', [
                        'input' => [
                            'name' => 'meta_description',
                            'value' => isset($page) ? $page->meta_description : '',
                            'input' => 'text',
                            'title' => __('META Description'),
                            'input' => 'textarea',
                            'rows' => 3,
                            'required' => true,
                        ]
                    ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    <?php echo $__env->make('back.partials.input', [
                        'input' => [
                            'name' => 'meta_keywords',
                            'value' => isset($page) ? $page->meta_keywords : '',
                            'input' => 'text',
                            'title' => __('META Keywords'),
                            'input' => 'textarea',
                            'rows' => 3,
                            'required' => true,
                        ]
                    ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    <?php echo $__env->make('back.partials.input', [
                        'input' => [
                            'name' => 'seo_title',
                            'value' => isset($page) ? $page->seo_title : '',
                            'input' => 'text',
                            'title' => __('SEO Title'),
                            'required' => true,
                        ],
                    ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                <?php echo $__env->renderComponent(); ?>

        </div>
        </div>
        <!-- /.row -->
    </form>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>

    <script src="<?php echo e(asset('adminlte/plugins/colorbox/jquery.colorbox-min.js')); ?>"></script>
    <script src="<?php echo e(asset('adminlte/plugins/voca/voca.min.js')); ?>"></script>
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

<?php $__env->stopSection(); ?>
<?php echo $__env->make('back.layoutpage', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>