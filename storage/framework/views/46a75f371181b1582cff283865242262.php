

<?php $__env->startSection('content'); ?>
<div class="max-w-lg mx-auto bg-brown-100 p-6 rounded-lg shadow-md border border-brown-300">
    <h1 class="text-2xl font-bold text-brown-700 mb-4">Edit User</h1>
    
    <?php if($errors->any()): ?>
        <div class="bg-red-200 text-red-700 p-4 rounded-md mb-4">
            <strong>Error!</strong> Please fix the following issues:
            <ul class="list-disc pl-5">
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>
    
    <form action="<?php echo e(route('users.update', $user->id)); ?>" method="POST" enctype="multipart/form-data" class="space-y-4">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        
        <label class="block text-brown-700">Photo:</label>
        <input type="file" name="photo" class="w-full p-2 border rounded-md">
        
        <label class="block text-brown-700">First Name:</label>
        <input type="text" name="first_name" value="<?php echo e($user->first_name); ?>" required maxlength="255" class="w-full p-2 border rounded-md">
        
        <label class="block text-brown-700">Last Name:</label>
        <input type="text" name="last_name" value="<?php echo e($user->last_name); ?>" required maxlength="255" class="w-full p-2 border rounded-md">
        
        <label class="block text-brown-700">Email:</label>
        <input type="email" name="email" value="<?php echo e($user->email); ?>" required class="w-full p-2 border rounded-md">
        
        <label class="block text-brown-700">Bio:</label>
        <textarea name="bio" class="w-full p-2 border rounded-md"><?php echo e($user->bio); ?></textarea>
        
        <button type="submit" class="bg-brown-500 text-white px-4 py-2 rounded-md hover:bg-brown-600">Update User</button>
    </form>
    
    <a href="<?php echo e(route('users.index')); ?>" class="block mt-4 text-brown-600 hover:underline">Back</a>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\TUGAS AKHIR\FINPRO\resources\views\update.blade.php ENDPATH**/ ?>