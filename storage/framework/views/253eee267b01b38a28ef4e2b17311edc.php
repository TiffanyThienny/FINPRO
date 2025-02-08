

<?php $__env->startSection('content'); ?>
<div class="dashboard-container">
    <h1 class="dashboard-title">Dashboard</h1>
    <a href="<?php echo e(route('users.create')); ?>" class="add-user-btn">Add New User</a>

    <table class="user-table">
        <thead>
            <tr>
                <th>No</th>
                <th>Photo</th>
                <th>Full Name</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($index + 1); ?></td>
                    <td><img src="<?php echo e(asset('storage/' . $user->photo)); ?>" width="50"></td>
                    <td><?php echo e($user->first_name); ?> <?php echo e($user->last_name); ?></td>
                    <td><?php echo e($user->email); ?></td>
                    <td>
                        <a href="<?php echo e(route('users.show', $user)); ?>" class="view-btn">View</a>
                        <a href="<?php echo e(route('users.edit', $user)); ?>" class="edit-btn">Edit</a>
                        <form action="<?php echo e(route('users.destroy', $user)); ?>" method="POST" class="delete-form">
                            <?php echo csrf_field(); ?> <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="delete-btn">Delete</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('styles'); ?>
<style>
    .dashboard-container {
        background-color: #F5F5F5;
        padding: 30px;
        border-radius: 10px;
        max-width: 1000px;
        margin: 30px auto;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .dashboard-title {
        text-align: center;
        color: #4B3621; /* Coklat gelap */
        font-size: 36px;
        margin-bottom: 20px;
    }

    .add-user-btn {
        display: block;
        background-color: #6D4C41; /* Coklat medium */
        color: white;
        text-align: center;
        padding: 12px 0;
        font-size: 18px;
        border-radius: 5px;
        text-decoration: none;
        margin-bottom: 20px;
        width: 200px;
        margin: 0 auto;
    }

    .add-user-btn:hover {
        background-color: #4E342E; /* Coklat tua */
    }

    .user-table {
        width: 100%;
        border-collapse: collapse;
    }

    .user-table th, .user-table td {
        padding: 12px;
        text-align: center;
        border: 1px solid #BCAAA4;
    }

    .user-table th {
        background-color: #6D4C41;
        color: white;
    }

    .user-table td img {
        border-radius: 50%;
    }

    .view-btn, .edit-btn, .delete-btn {
        padding: 8px 12px;
        margin: 5px;
        color: white;
        text-decoration: none;
        border-radius: 5px;
        font-size: 16px;
        display: inline-block;
    }

    .view-btn {
        background-color: #4CAF50; /* Green */
    }

    .view-btn:hover {
        background-color: #388E3C;
    }

    .edit-btn {
        background-color: #FF9800; /* Orange */
    }

    .edit-btn:hover {
        background-color: #F57C00;
    }

    .delete-btn {
        background-color: #F44336; /* Red */
    }

    .delete-btn:hover {
        background-color: #D32F2F;
    }

    .delete-form {
        display: inline;
    }
</style>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\TUGAS AKHIR\FINPRO\resources\views\dashboard.blade.php ENDPATH**/ ?>