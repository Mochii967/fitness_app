<?php $__env->startSection('content'); ?>
    <h1>Edit Post</h1>
    <?php echo Form::open(['action' => ['ArticlesController@update', $article->id], 'method' => 'POST']); ?>

        <div class="form-group">
            <?php echo e(Form::label('title', 'Title')); ?>

            <?php echo e(Form::text('title', $article->title, ['class' => 'form-control', 'placeholder' => 'Title'])); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('body', 'Body')); ?>

            <?php echo e(Form::textarea('body', $article->body, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body Text'])); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('description', 'Description')); ?>

            <?php echo e(Form::text('description', '', ['class' => 'form-control', 'placeholder' => 'Description'])); ?>

        </div>
        <?php echo e(Form::hidden('_method','PUT')); ?>

        <?php echo e(Form::submit('Submit', ['class'=>'btn btn-primary'])); ?>

    <?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>