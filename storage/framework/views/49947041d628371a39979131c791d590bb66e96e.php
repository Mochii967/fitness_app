<?php $__env->startSection('content'); ?>
    <h1 class="display-2">Calorie Calculator</h1>
    <p class="display-4">
        This tools will give you an estimate as to how many calories you should be eating on your average day. 
        For the weight section you need to enter your weight in kilograms and your height in centimeters.
    </p>
    <?php echo Form::open(['action' => 'PagesController@calculatecalorie', 'method' => 'POST']); ?>

        <div class="form-group">
            <?php echo e(Form::label('weight', 'Weight')); ?>

            <?php echo e(Form::text('weight', '', ['class' => 'form-control', 'placeholder' => 'Weight'])); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('height', 'Height')); ?>

            <?php echo e(Form::text('height', '', ['class' => 'form-control', 'placeholder' => 'height'])); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('sex', 'Sex')); ?>

            <?php echo e(Form::select('sex', ['Male' => 'Male', 'Female' => 'Female'], null, ['placeholder' => 'Sex'])); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('age', 'Age')); ?>

            <?php echo e(Form::number('age', '')); ?>

        </div>
        <?php echo e(Form::submit('Submit', ['class'=>'btn btn-primary'])); ?>

    <?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>