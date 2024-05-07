<?php $__env->startSection('content'); ?>
<h1>勤怠履歴</h1>

<table class="table table-striped">
	<thead>
		<tr>
			<th>日付</th>
			<th>勤務開始</th>
			<th>勤務終了</th>
			<th>休憩時間</th>
			<th>勤務時間</th>
		</tr>
	</thead>
	<tbody>
		<?php $__currentLoopData = $attendances; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attendance): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr>
			<td><?php echo e($attendance->created_at->format('Y-m-d')); ?></td>
			<td><?php echo e($attendance->punch_in_at); ?></td>
			<td><?php echo e($attendance->punch_out_at); ?></td>
			<td><?php echo e($attendance->break_time); ?></td>
			<td><?php echo e($attendance->work_time); ?></td>
		</tr>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</tbody>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/resources/views/index.blade.php ENDPATH**/ ?>