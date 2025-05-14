   <!-- footer -->
   <footer class="footer">
       <div class="footer__main">
           <div class="row row-eq-height">
               <div class="col-8 col-sm-7 col-md-9 col-lg-4 ">
                   <div class="footer__item"><a class="consult_logo" href="#"><img
                               src="<?php echo e(asset('assets-front')); ?>/img/logo.png" alt="" /></a>
                       <p><?php echo e(__('shard.footer-desc-logo')); ?></p>
                   </div>
               </div>
               <div class="col-sm-6 col-md-4 col-lg-4 col-xl-2 offset-0 offset-sm-0 offset-md-0 offset-lg-0 offset-xl-1 ">
                   <div class="footer__item">

                       <!-- widget-text__widget -->
                       <section class="widget-text__widget widget">
                           <div class="widget-text__content">
                               <ul>
                                   <li><a href="#"><?php echo e(__('shard.term-of-services')); ?></a></li>
                                   <li><a href="#"><?php echo e(__('shard.privacy-policy')); ?></a></li>
                                   <li><a href="#"><?php echo e(__('shard.sitemap')); ?></a></li>
                                   <li><a href="#"><?php echo e(__('shard.help')); ?></a></li>
                               </ul>
                           </div>
                       </section><!-- End / widget-text__widget -->

                   </div>
               </div>
               <div class="col-md-4 col-lg-2 col-xl-2 ">
                   <div class="footer__item">

                       <!-- form-sub -->
                       <div class="form-sub">
                           <h4 class="form-sub__title"><?php echo e(__('shard.our-newsletter')); ?></h4>
                           <form class="form-sub__form">
                               <div class="form-item">
                                   <input class="form-control" type="email"
                                       placeholder="<?php echo e(__('shard.Enter Your Email Address')); ?>" />
                               </div>
                               <div class="form-submit">
                                   <button class="form-button" type="submit"><i class="fa fa-paper-plane"
                                           aria-hidden="true"></i></button>
                               </div>
                           </form>
                       </div><!-- End / form-sub -->

                   </div>
               </div>
               <div class="col-sm-6 col-md-4 col-lg-2 col-xl-2  consult_backToTop">
                   <div class="footer__item"><a href="#" id="back-to-top"> <i class="fa fa-angle-up"
                               aria-hidden="true"> </i><span><?php echo e(__('shard.back-to-top')); ?></span></a></div>
               </div>
           </div>
       </div>
       <div class="footer__copyright">2017 &copy; Copyright Awe7. All rights Reserved.</div>
   </footer><!-- End / footer -->
<?php /**PATH E:\laragon\www\project\resources\views/front/partials/footer.blade.php ENDPATH**/ ?>