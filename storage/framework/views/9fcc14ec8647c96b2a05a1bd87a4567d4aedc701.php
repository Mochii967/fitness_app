<?php $__env->startSection('content'); ?>
    <h1 class="display-2">Bmi Calculator</h1>
    <p class="display-4">
        This tool will tell you your measured BMI. 
        You need to enter your weight in kilograms and your height in meters
    </p>
    <?php echo Form::open(['action' => 'PagesController@calculatebmi', 'method' => 'POST']); ?>

        <div class="form-group">
            <?php echo e(Form::label('weight', 'Weight')); ?>

            <?php echo e(Form::text('weight', '', ['class' => 'form-control', 'placeholder' => 'Weight'])); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('height', 'Height')); ?>

            <?php echo e(Form::text('height', '', ['class' => 'form-control', 'placeholder' => 'height'])); ?>

        </div>
        <?php echo e(Form::submit('Submit', ['class'=>'btn btn-primary'])); ?>

    <?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>