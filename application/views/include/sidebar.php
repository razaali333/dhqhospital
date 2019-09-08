  <div class="sidebar" id="sidebar">
        
                
                <!--#sidebar-shortcuts-->

        <ul class="nav nav-list">
           <?php 
                $type=$this->session->userdata('type');?>
          <?php if($type=="Admin"){ ?>
          <li>
            <a href="#" class="dropdown-toggle">
              <i class="icon-text-width"></i>
              <span class="menu-text"> OPD Entry </span>
                            <b class="arrow icon-angle-down"></b>
            </a>
                        <ul class="submenu">
                        <li>
                <a href="<?php echo base_url('login/first_male_opd') ?>">
                  <i class="icon-double-angle-right"></i>
                   First Male OPD Entry
                </a>
              </li>
                 <li>
                <a href="<?php echo base_url('login/second_male_opd') ?>">
                  <i class="icon-double-angle-right"></i>
                   Second Male OPD Entry
                </a>
              </li>
                 <li>
                <a href="<?php echo base_url('login/first_female_opd') ?>">
                  <i class="icon-double-angle-right"></i>
                   First Female OPD Entry
                </a>
              </li>
                 <li>
                <a href="<?php echo base_url('login/second_female_opd') ?>">
                  <i class="icon-double-angle-right"></i>
                   Second Female OPD Entry
                </a>
              </li>
                <li>
                <a href="<?php echo base_url('login/aged_opd') ?>">
                  <i class="icon-double-angle-right"></i>
                   Aged OPD Entry
                </a>
              </li>

               <li>
                <a href="<?php echo base_url('login/staff_opd') ?>">
                  <i class="icon-double-angle-right"></i>
                   Staff OPD Entry
                </a>
              </li>
               <li>
                <a href="<?php echo base_url('login/gyne_opd') ?>">
                  <i class="icon-double-angle-right"></i>
                   Gyne OPD Entry
                </a>
              </li>
               <li>
                <a href="<?php echo base_url('login/casualty_opd') ?>">
                  <i class="icon-double-angle-right"></i>
                   Casulaty OPD Entry
                </a>
              </li>
            </ul>
          </li>
                    <li>
            <a href="#" class="dropdown-toggle">
              <i class="icon-text-width"></i>
              <span class="menu-text"> Other Entry </span>
                            <b class="arrow icon-angle-down"></b>
              </a>
                        <ul class="submenu">
                          <li>
                <a href="<?php echo base_url('other/xray') ?>">
                  <i class="icon-double-angle-right"></i>
                   Xray Entry
                </a>
              </li>
              <li>
                <a href="<?php echo base_url('other/lab') ?>">
                  <i class="icon-double-angle-right"></i>
                   Lab Entry
                </a>
              </li>
              <li>
                <a href="<?php echo base_url('other/ultrasound') ?>">
                  <i class="icon-double-angle-right"></i>
                   Ultrasound Entry
                </a>
              </li>
                        <li>
                <a href="<?php echo base_url('other/ecg') ?>">
                  <i class="icon-double-angle-right"></i>
                   ECG Entry
                </a>
              </li>
                  <li>
                <a href="<?php echo base_url('other/echos') ?>">
                  <i class="icon-double-angle-right"></i>
                   Echo Entry
                </a>
              </li>
              <li>
                <a href="<?php echo base_url('other/ot_entry') ?>">
                  <i class="icon-double-angle-right"></i>
                   OT Entry
                </a>
              </li>
              <li>
                <a href="<?php echo base_url('other/ward_entry') ?>">
                  <i class="icon-double-angle-right"></i>
                   Ward Entry
                </a>
              </li>
               <li>
                <a href="<?php echo base_url('other/lroom_entry') ?>">
                  <i class="icon-double-angle-right"></i>
                   L.ROOM Entry
                </a>
              </li>

               <li>
                <a href="<?php echo base_url('other/ctscan_entry') ?>">
                  <i class="icon-double-angle-right"></i>
                   CT SCAN
                </a>
              </li>
               <li>
                <a href="<?php echo base_url('other/dental_entry') ?>">
                  <i class="icon-double-angle-right"></i>
                   Dental
                </a>
              </li>

              <li>
                <a href="<?php echo base_url('other/ambulance_entry') ?>">
                  <i class="icon-double-angle-right"></i>
                  Ambulance
                </a>
              </li>

               <li>
                <a href="<?php echo base_url('other/physiotherapy_entry') ?>">
                  <i class="icon-double-angle-right"></i>
                  Physiotherapy
                </a>
              </li>
              <li>
                <a href="<?php echo base_url('other/certificate_entry') ?>">
                  <i class="icon-double-angle-right"></i>
                  Medical Certificate
                </a>
              </li>
            </ul>
          </li>
          
                    <li>
            <a href="" class="dropdown-toggle">
              <i class="icon-text-width"></i>
              <span class="menu-text"> Users </span>
                            <b class="arrow icon-angle-down"></b>
            </a>
                        <ul class="submenu">
                        <li>
                <a href="<?php echo base_url('user/index') ?>">
                  <i class="icon-double-angle-right"></i>
                  Add User
                </a>
              </li>
             </ul>
           </li>

               
          
            <li>
            <a href="#" class="dropdown-toggle">
              <i class="icon-text-width"></i>
              <span class="menu-text"> Departement </span>
                            <b class="arrow icon-angle-down"></b>
            </a>
                        <ul class="submenu">
                        <li>
                <a href="<?php echo base_url('departement/index') ?>">
                  <i class="icon-double-angle-right"></i>
                  Add Departement
                </a>
              </li>
            </ul>
           </li>

           <li>
            <a href="#" class="dropdown-toggle">
              <i class="icon-text-width"></i>
              <span class="menu-text">OPD Reports </span>
                            <b class="arrow icon-angle-down"></b>
            </a>
                        <ul class="submenu">
                          <li>
                <a href="<?php echo base_url('report/today_report') ?>">
                  <i class="icon-double-angle-right"></i>
                   Today Report
                </a>
              </li>
                        <li>
                <a href="<?php echo base_url('report/daily_report') ?>">
                  <i class="icon-double-angle-right"></i>
                  OPD Detail Report
                </a>
              </li>
               

                <li>
                <a href="<?php echo base_url('report/monthly_report') ?>">
                  <i class="icon-double-angle-right"></i>
                   OPD Summary Report
                </a>
              </li> 

              <li>
                <a href="<?php echo base_url('report/all_opd_report') ?>">
                  <i class="icon-double-angle-right"></i>
                   OPD  Report All
                </a>
              </li>
                 
             </ul>
           </li>
           <li>
            <a href="#" class="dropdown-toggle">
              <i class="icon-text-width"></i>
              <span class="menu-text">Other Reports </span>
                            <b class="arrow icon-angle-down"></b>
            </a>
                        <ul class="submenu">
                          <li>
                <a href="<?php echo base_url('report/other_today_report') ?>">
                  <i class="icon-double-angle-right"></i>
                   Today Report
                </a>
              </li>
                        <li>
                <a href="<?php echo base_url('report/other_daily_report') ?>">
                  <i class="icon-double-angle-right"></i>
                  Other Detail Report
                </a>
              </li>
               

                <li>
                <a href="<?php echo base_url('report/other_monthly_report') ?>">
                  <i class="icon-double-angle-right"></i>
                   Other Summary Report
                </a>
              </li>
                 
             </ul>
           </li>
            <?php }
              
                else if($type=="First Male OPD")
                {?>
                    <li class="active open">
            <a href="#" class="dropdown-toggle">
              <i class="icon-text-width"></i>
              <span class="menu-text"> OPD Entry </span>
                            <b class="arrow icon-angle-down"></b>
            </a>
                        <ul class="submenu">
                        <li>
                <a href="<?php echo base_url('login/first_male_opd') ?>">
                  <i class="icon-double-angle-right"></i>
                   First Male OPD Entry
                </a>
              </li>
              <li>
                <a href="<?php echo base_url('report/today_report') ?>">
                  <i class="icon-double-angle-right"></i>
                   Today Report
                </a>
              </li>
            </ul>
          </li>
                <?php }
                  else if($type=="Second Male OPD")
                {?>
                    <li class="active open">
            <a href="#" class="dropdown-toggle">
              <i class="icon-text-width"></i>
              <span class="menu-text"> OPD Entry </span>
                            <b class="arrow icon-angle-down"></b>
            </a>
                        <ul class="submenu">
                        <li>
                <a href="<?php echo base_url('login/second_male_opd') ?>">
                  <i class="icon-double-angle-right"></i>
                   Second Male OPD Entry
                </a>
              </li>
              <li>
                <a href="<?php echo base_url('report/today_report') ?>">
                  <i class="icon-double-angle-right"></i>
                   Today Report
                </a>
              </li>
            </ul>
          </li>
                <?php }
                      else if($type=="First Female OPD")
                {?>
                    <li class="active open">
            <a href="#" class="dropdown-toggle">
              <i class="icon-text-width"></i>
              <span class="menu-text"> OPD Entry </span>
                            <b class="arrow icon-angle-down"></b>
            </a>
                        <ul class="submenu">
                        <li>
                <a href="<?php echo base_url('login/first_female_opd') ?>">
                  <i class="icon-double-angle-right"></i>
                   First Female OPD Entry
                </a>
              </li>
              <li>
                <a href="<?php echo base_url('report/today_report') ?>">
                  <i class="icon-double-angle-right"></i>
                   Today Report
                </a>
              </li>
            </ul>
          </li>
                <?php }

                  else if($type=="Second Female OPD")
                {?>
                    <li class="active open">
            <a href="#" class="dropdown-toggle">
              <i class="icon-text-width"></i>
              <span class="menu-text"> OPD Entry </span>
                            <b class="arrow icon-angle-down"></b>
            </a>
                        <ul class="submenu">
                        <li>
                <a href="<?php echo base_url('login/second_female_opd') ?>">
                  <i class="icon-double-angle-right"></i>
                   Second Female OPD Entry
                </a>
              </li>
              <li>
                <a href="<?php echo base_url('report/today_report') ?>">
                  <i class="icon-double-angle-right"></i>
                   Today Report
                </a>
              </li>
            </ul>
          </li>
                <?php }

                    else if($type=="Staff OPD")
                {?>
                    <li class="active open">
            <a href="#" class="dropdown-toggle">
              <i class="icon-text-width"></i>
              <span class="menu-text"> OPD Entry </span>
                            <b class="arrow icon-angle-down"></b>
            </a>
                        <ul class="submenu">
                        <li>
                <a href="<?php echo base_url('login/staff_opd') ?>">
                  <i class="icon-double-angle-right"></i>
                   Staff OPD Entry
                </a>
              </li>
              <li>
                <a href="<?php echo base_url('report/today_report') ?>">
                  <i class="icon-double-angle-right"></i>
                   Today Report
                </a>
              </li>
            </ul>
          </li>
                <?php }
                  else if($type=="Aged OPD")
                {?>
                    <li class="active open">
            <a href="#" class="dropdown-toggle">
              <i class="icon-text-width"></i>
              <span class="menu-text"> OPD Entry </span>
                            <b class="arrow icon-angle-down"></b>
            </a>
                        <ul class="submenu">
                        <li>
                <a href="<?php echo base_url('login/aged_opd') ?>">
                  <i class="icon-double-angle-right"></i>
                   Aged OPD Entry
                </a>
              </li>
              <li>
                <a href="<?php echo base_url('report/today_report') ?>">
                  <i class="icon-double-angle-right"></i>
                   Today Report
                </a>
              </li>
            </ul>
          </li>
                <?php }
                else if($type=="Gyne OPD")
                {?>
                    <li class="active open">
            <a href="#" class="dropdown-toggle">
              <i class="icon-text-width"></i>
              <span class="menu-text"> OPD Entry </span>
                            <b class="arrow icon-angle-down"></b>
            </a>
                        <ul class="submenu">
                        <li>
                <a href="<?php echo base_url('login/gyne_opd') ?>">
                  <i class="icon-double-angle-right"></i>
                   Gyne OPD Entry
                </a>
              </li>
              <li>
                <a href="<?php echo base_url('report/today_report') ?>">
                  <i class="icon-double-angle-right"></i>
                   Today Report
                </a>
              </li>
            </ul>
          </li>
             

           <?php }
                else if($type=="ECG")
                {?>
                    <li class="active open">
            <a href="#" class="dropdown-toggle">
              <i class="icon-text-width"></i>
              <span class="menu-text"> OTHER Entry </span>
                            <b class="arrow icon-angle-down"></b>
            </a>
                        <ul class="submenu">
                        <li>
                <a href="<?php echo base_url('other/ecg') ?>">
                  <i class="icon-double-angle-right"></i>
                   ECG Entry
                </a>
              </li>
               <li>
                <a href="<?php echo base_url('report/other_today_report') ?>">
                  <i class="icon-double-angle-right"></i>
                   Today Report
                </a>
              </li>
            </ul>
          </li>
                <?php }
                else if($type=="sub_admin")
                {?>
             <li class="active open">
            <a href="#" class="dropdown-toggle">
              <i class="icon-text-width"></i>
              <span class="menu-text"> OTHER Entry </span>
                            <b class="arrow icon-angle-down"></b>
            </a>
                        <ul class="submenu">
                        <li>
                <a href="<?php echo base_url('other/ecg') ?>">
                  <i class="icon-double-angle-right"></i>
                   ECG Entry
                </a>
              </li>
               <li>
                <a href="<?php echo base_url('other/echos') ?>">
                  <i class="icon-double-angle-right"></i>
                   ECHO
                </a>
              </li>
              <li>
                <a href="<?php echo base_url('other/ward_entry') ?>">
                  <i class="icon-double-angle-right"></i>
                   WARD
                </a>
              </li>

                  <li>
                <a href="<?php echo base_url('other/ot_entry') ?>">
                  <i class="icon-double-angle-right"></i>
                   OT
                </a>
              </li>
            </ul>
          </li>
            <li>     
           <a href="#" class="dropdown-toggle">
              <i class="icon-text-width"></i>
              <span class="menu-text">Other Reports </span>
                            <b class="arrow icon-angle-down"></b>
            </a>
                        <ul class="submenu">
                          <li>
                <a href="<?php echo base_url('report/other_today_report') ?>">
                  <i class="icon-double-angle-right"></i>
                   Today Report
                </a>
              </li>
                        <li>
                <a href="<?php echo base_url('report/other_daily_report') ?>">
                  <i class="icon-double-angle-right"></i>
                  Other Detail Report
                </a>
              </li>
               

                <li>
                <a href="<?php echo base_url('report/other_monthly_report') ?>">
                  <i class="icon-double-angle-right"></i>
                   Other Summary Report
                </a>
              </li>
                 
             </ul>
           </li>
               <?php
             } 
       
?>

        <div class="sidebar-collapse" id="sidebar-collapse">
          <i class="icon-double-angle-left"></i>
        </div>
      </ul>
      </div>