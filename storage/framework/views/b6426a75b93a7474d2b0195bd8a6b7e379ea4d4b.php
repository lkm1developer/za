<?php $__currentLoopData = $pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><?php echo e($post->title); ?></td>
        <td><img src="<?php echo e(thumb($post->image)); ?>" alt=""></td>
        <td>
            <input type="checkbox" name="status" value="<?php echo e($post->id); ?>" <?php echo e($post->active ? 'checked' : ''); ?>>
        </td>
        <td><?php echo e($post->created_at->formatLocalized('%c')); ?></td>
        <td>
            <input type="checkbox" name="seen" value="<?php echo e($post->id); ?>" <?php echo e(is_null($post->ingoing) ?  'disabled' : 'checked'); ?>>
        </td>
        <td><?php echo e($post->seo_title); ?></td>
        <td><a class="btn btn-success btn-xs btn-block"target="_blank" href="<?php echo e(route('pages.show', [$post->id])); ?>" role="button" title="<?php echo app('translator')->getFromJson('Show'); ?>"><span class="fa fa-eye"></span></a></td>
        <td><a class="btn btn-warning btn-xs btn-block" href="<?php echo e(route('pages.edit', [$post->id])); ?>" role="button" title="<?php echo app('translator')->getFromJson('Edit'); ?>"><span class="fa fa-edit"></span></a></td>
        <td><a class="btn btn-danger btn-xs " href="<?php echo e(route('pages.destroy', [$post->id])); ?>" role="button" title="<?php echo app('translator')->getFromJson('Destroy'); ?>"><span class="fa fa-remove"></span></a></td>
    </tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

