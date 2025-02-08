

<?php $__env->startSection('content'); ?>
<div class="create-user-container">
    <h1 class="create-user-title">Create New User</h1>

    <?php if($errors->any()): ?>
        <div class="error-messages">
            <strong>Error!</strong> There were some problems with your input.<br>
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>

    <form action="<?php echo e(route('users.store')); ?>" method="POST" enctype="multipart/form-data" class="create-user-form">
        <?php echo csrf_field(); ?>

        <label for="photo" class="form-label">Photo:</label>
        <input type="file" name="photo" class="form-input" required>

        <label for="first_name" class="form-label">First Name:</label>
        <input type="text" name="first_name" class="form-input" required maxlength="255">

        <label for="last_name" class="form-label">Last Name:</label>
        <input type="text" name="last_name" class="form-input" required maxlength="255">

        <label for="email" class="form-label">Email:</label>
        <input type="email" name="email" class="form-input" required>

        <label for="bio" class="form-label">Bio:</label>
        <textarea name="bio" class="form-textarea"></textarea>

        <button type="submit" class="submit-btn">Create User</button>
    </form>

    <a href="<?php echo e(route('users.index')); ?>" class="back-link">Back</a>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('styles'); ?>
<style>
    .create-user-container {
        background-color: #F5F5F5;
        padding: 30px;
        border-radius: 10px;
        max-width: 600px;
        margin: 30px auto;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .create-user-title {
        text-align: center;
        color: #4B3621; /* Coklat gelap */
        font-size: 36px;
        margin-bottom: 20px;
    }

    .error-messages {
        background-color: #FFCDD2; /* Warna merah muda */
        color: #D32F2F; /* Merah */
        padding: 10px;
        border-radius: 5px;
        margin-bottom: 20px;
    }

    .form-label {
        font-size: 18px;
        color: #5C4033; /* Coklat medium */
        margin-bottom: 10px;
        display: block;
    }

    .form-input, .form-textarea {
        width: 100%;
        padding: 12px;
        margin-bottom: 20px;
        border: 1px solid #BCAAA4; /* Warna coklat muda */
        border-radius: 5px;
        font-size: 16px;
        background-color: #F5F5F5;
    }

    .form-input:focus, .form-textarea:focus {
        border-color: #6D4C41; /* Coklat medium */
        outline: none;
    }

    .form-textarea {
        height: 150px;
    }

    .submit-btn {
        width: 100%;
        background-color: #6D4C41; /* Coklat medium */
        color: white;
        padding: 12px;
        font-size: 18px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .submit-btn:hover {
        background-color: #4E342E; /* Coklat tua */
    }

    .back-link {
        display: block;
        text-align: center;
        margin-top: 20px;
        color: #6D4C41;
        text-decoration: none;
        font-size: 18px;
    }

    .back-link:hover {
        text-decoration: underline;
    }
</style>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\TUGAS AKHIR\FINPRO\resources\views\create.blade.php ENDPATH**/ ?>