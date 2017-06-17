<?php $__env->startSection('content'); ?>
<div class="container margin padding ">
    <div class="container">
    <div class="col-md-6 col-md-offset-3">
    <div class="row">
        
        <div class="form-group">
            <label for="comment">Write something new</label>
            <textarea class="form-control"  rows="3" id="comment"></textarea>
        </div> 
        <div class="form-group">
            <button type="button" class="btn btn-primary pull-right">Primary</button>
        </div>
    </div>
    </div>
    </div>
    <br>
<div class="col-md-12">
    <div class="col-md-3">
        <div class="panel panel-primary">
                <div class="panel-heading">User Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                </div>
            </div>     
   
    </div>
    

    <div class="col-md-6">
       <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <!-- <div class="row"> -->
        <div class="panel panel-default">
            <div class="panel-heading"><?php echo e($post->title); ?></div>

            <div class="panel-body">
                <?php echo e($post->body); ?>

            </div>
        </div>
    <!-- </div> -->
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <div class="col-md-3">
        <p>
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type
        </p>      
   
    </div>
    </div> 
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>