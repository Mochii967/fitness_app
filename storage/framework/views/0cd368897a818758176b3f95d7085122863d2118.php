<?php $__env->startSection('content'); ?>
        <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="card mb-3">
                <h2 class="card-header"><a href="/articles/<?php echo e($article->id); ?>"><?php echo e($article->title); ?></a></h2>
                <div class="card-body">
                    <h4><?php echo e($article->description); ?></h4>
                    <small>This article was written by <?php echo e($article->author); ?> on <?php echo e($article->created_at); ?></small>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>