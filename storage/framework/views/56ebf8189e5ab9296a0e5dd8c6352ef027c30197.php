<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>
                    <?php if(auth()->user()->calorie > 0): ?>
                        <p>Your daily calories should be <?php echo e(auth()->user()->calorie); ?></p>
                    <?php endif; ?>
                    <?php if(auth()->user()->bmi > 0): ?>
                        <p>Your BMI is <?php echo e(auth()->user()->bmi); ?></p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">Your articles</div>
        <div class="card-body">
            <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="card mb-2">
                    <h2 class="card-header"><?php echo e($article->title); ?></h2>
                    <div class="card-body">
                        <h4><?php echo e($article->body); ?></h4>
                        <a class="btn btn-primary" href="/articles/<?php echo e($article->id); ?>/edit">Edit/Delete</a>
                        <small><?php echo e($article->created_at); ?></small>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
    <a href="/articles/create" class="btn btn-primary mt-3">Create new article</a>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>