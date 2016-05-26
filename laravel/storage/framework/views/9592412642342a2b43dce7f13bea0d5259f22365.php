<?php foreach($arr as $v): ?>
         发布时间:<p><?php echo e($v->h_time); ?></p>
         <img src="houst_img/<?php echo e($v->photo); ?>"><br>
         房源ID:<?php echo e($v->h_id); ?> ------
         发布人ID:<?php echo e($v->u_id); ?><br>
         房屋住址:<?php echo e($v->h_address); ?><br>
         房屋面积:<?php echo e($v->h_area); ?><br>
         可住人数:<?php echo e($v->number); ?><br>
         房屋类型:<?php echo e($v->t_id); ?><br>
         押金:<?php echo e($v->deposit); ?><br>
         租金:<?php echo e($v->pay); ?><br>
         描述:<?php echo e($v->content); ?><br>
         联系方式:<?php echo e($v->phone); ?><br>
         联系人:<?php echo e($v->linkman); ?><br>
<?php endforeach; ?>
