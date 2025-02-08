

<?php $__env->startSection('content'); ?>
<div class="profile-container">
    <h1 class="profile-title">Profile</h1>
    <p class="profile-info"><strong>First Name:</strong> <?php echo e($user->first_name); ?></p>
    <p class="profile-info"><strong>Last Name:</strong> <?php echo e($user->last_name); ?></p>
    <p class="profile-info"><strong>Email:</strong> <?php echo e($user->email); ?></p>
    <p class="profile-info"><strong>Bio:</strong> <?php echo e($user->bio); ?></p>
    <a href="<?php echo e(route('logout')); ?>" class="logout-btn">Logout</a>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('styles'); ?>
<style>
    .profile-container {
        background-color: #D2B48C; /* Coklat muda */
        padding: 30px;
        border-radius: 10px;
        max-width: 600px;
        margin: 0 auto;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .profile-title {
        text-align: center;
        color: #4B3621; /* Coklat gelap */
        font-size: 36px;
        margin-bottom: 20px;
    }

    .profile-info {
        font-size: 18px;
        color: #5C4033; /* Coklat medium */
        margin: 10px 0;
    }

    .profile-info strong {
        color: #3E2723; /* Coklat tua */
    }

    .logout-btn {
        display: block;
        width: 100%;
        background-color: #6D4C41; /* Coklat medium */
        color: white;
        text-align: center;
        padding: 10px;
        font-size: 18px;
        border: none;
        border-radius: 5px;
        margin-top: 20px;
        text-decoration: none;
    }

    .logout-btn:hover {
        background-color: #4E342E; /* Coklat tua */
    }
</style>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\TUGAS AKHIR\FINPRO\resources\views\profile.blade.php ENDPATH**/ ?>