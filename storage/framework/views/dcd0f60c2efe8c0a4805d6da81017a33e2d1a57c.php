<?php $__env->startSection('content'); ?>
        <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <h1><?php echo e($article->title); ?></h1>
            <small><?php echo e($article->author); ?></small>
            <hr>
            <p>
                <?php echo e($article->body); ?>

            </p>
            <hr>
            <small><?php echo e($article->created_at); ?></small>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>