

<?php $__env->startSection('content'); ?>
<div class="max-w-lg mx-auto bg-brown-100 p-6 rounded-lg shadow-md border border-brown-300">
    <h1 class="text-2xl font-bold text-brown-700 mb-4">User Details</h1>
    
    <div class="flex justify-center mb-4">
        <img src="<?php echo e(asset('storage/' . $user->photo)); ?>" width="150" alt="User Photo" class="rounded-full border border-brown-400 shadow-sm">
    </div>
    
    <p class="text-brown-800"><strong>First Name:</strong> <?php echo e($user->first_name); ?></p>
    <p class="text-brown-800"><strong>Last Name:</strong> <?php echo e($user->last_name); ?></p>
    <p class="text-brown-800"><strong>Email:</strong> <?php echo e($user->email); ?></p>
    <p class="text-brown-800"><strong>Bio:</strong> <?php echo e($user->bio ?? 'No Bio Available'); ?></p>
    
    <div class="mt-4">
        <!-- Tombol Update -->
        <a href="<?php echo e(route('users.edit', $user)); ?>" class="inline-block bg-brown-500 text-white px-4 py-2 rounded-md hover:bg-brown-600 mr-2">
            Update
        </a>

        <!-- Tombol Delete -->
        <form action="<?php echo e(route('users.destroy', $user)); ?>" method="POST" class="inline-block">
            <?php echo csrf_field(); ?>
            <?php echo method_field('DELETE'); ?>
            <button type="submit" class="inline-block bg-red-500 text-white px-4 py-2 rounded-md hover:bg-red-600">
                Delete
            </button>
        </form>
    </div>
    
    <a href="<?php echo e(route('users.index')); ?>" class="inline-block mt-4 bg-brown-500 text-white px-4 py-2 rounded-md hover:bg-brown-600">Back to Users</a>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\TUGAS AKHIR\FINPRO\resources\views\show.blade.php ENDPATH**/ ?>