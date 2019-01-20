<?php $__env->startSection('content'); ?>
    <h1 class="display-2">Fitness Tools</h1>
    <h3 class="display-4">Use your tools to help reach your goals</h3>
    <div class="container">
        <a href="/fitness_tools/bmi" class="btn btn-primary btn-lg">Calculate your BMI</a>
        <a href="/fitness_tools/calorie" class="btn btn-primary btn-lg">Calculate your calorie intake</a>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>