<?php $__env->startSection("title", "index computers"); ?>

<?php $__env->startSection("content"); ?>
<div class="content">
    <div>
        <br><br>
        <?php if(count($computers) > 0): ?>
        <ul>
            <?php $__currentLoopData = $computers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $computer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <a href="#"> <li><?php echo e($computer['name']); ?></li> </a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul> 
        <?php else: ?>
        <strong>No computers to show :(</strong>
        <?php endif; ?>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/computers/index.blade.php ENDPATH**/ ?>