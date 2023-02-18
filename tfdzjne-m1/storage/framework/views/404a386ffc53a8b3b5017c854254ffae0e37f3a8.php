

<?php $__env->startSection('content'); ?>

    <div class="containerCart">

        <div class="tablecart d-block">

            <ul class="thname d-flex">
                <li>Название</li>
                <li>Цена</li>
                <li>Количество</li>
            </ul>

            <ul class="tdname d-flex">
                <li>varchar</li>
                <li>int</li>
                <li>int</li>
            </ul>

            <!-- <table>
                <tr><th>Название</th><th>Цена</th><th>Количество</th></tr>
                <tr><td>string</td><td>int</td><td>int</td></tr>
            </table> -->

        </div>

    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /srv/users/mkcmrzzh/tfdzjne-m1/resources/views/cart.blade.php ENDPATH**/ ?>