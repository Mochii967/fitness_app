<?php $__env->startSection('content'); ?>
    <a href="/articles" class="btn btn-default">Go Back</a>
    <h1><?php echo e($article->title); ?></h1>
    <div>
        <?php echo $article->body; ?>

    </div>
    <hr>
    <small>Written on <?php echo e($article->created_at); ?> by <?php echo e($article->author); ?></small>
    <hr>
    <?php if(!Auth::guest()): ?>
        <?php if(Auth::user()->id == $article->user_id): ?>
            <a href="/articles/<?php echo e($article->id); ?>/edit" class="btn btn-default">Edit</a>

            <?php echo Form::open(['action' => ['ArticlesController@destroy', $article->id], 'method' => 'POST', 'class' => 'pull-right']); ?>

                <?php echo e(Form::hidden('_method', 'DELETE')); ?>

                <?php echo e(Form::submit('Delete', ['class' => 'btn btn-danger'])); ?>

            <?php echo Form::close(); ?>

        <?php endif; ?>
    <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>