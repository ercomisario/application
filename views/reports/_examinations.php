<div class="row">
            <div class="col-md-12">
                <div class="box box-primary border0 mb0 margesection">
                    <div class="box-header with-border">
                <h3 class="box-title"><i class="fa fa-search"></i>  <?php echo $this->lang->line('examinations')." ".$this->lang->line('report')?></h3>

            </div>
                    <div class="">
                        <ul class="reportlists">
                       

                          
                              <?php
                             if ($this->rbac->hasPrivilege('rank_report', 'can_view')) {
                                ?> 
                                <li class="col-lg-4 col-md-4 col-sm-6 <?php echo set_SubSubmenu('Reports/examinations/rankreport'); ?>"><a href="<?php echo base_url(); ?>admin/examresult/rankreport"><i class="fa fa-file-text-o"></i> <?php echo $this->lang->line('rank')." ".$this->lang->line('report'); ?></a></li>
                                <?php
                            }
                             ?>

                         
                        </ul>
                    </div>
                </div>
            </div>
        </div>