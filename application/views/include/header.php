
<div class="navbar">
      <div class="navbar-inner">
        <div class="container-fluid">
          <a href="<?php echo base_url('login/dashboard') ?>" class="brand">
            <small>
              <i class="icon-leaf"></i>
              DHQ HOSPITAL DIR LOWER
            </small>
          </a><!--/.brand-->

          <ul class="nav ace-nav pull-right">
            
  
            
            <li class="light-blue">
              <a data-toggle="dropdown" href="#" class="dropdown-toggle">
                
                <span class="user-info" style="line-height: 30px;">
                 <?php 
                $name=$this->session->userdata('name');
              if(isset($name)){echo ucfirst($name) ; }  ?>
                </span>
                

                <i class="icon-caret-down"></i>
              </a>

              <ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-closer">
                

                <li>
                  <a href="">
                    <i class="icon-user"></i>
                    Profile
                  </a>
                </li>

                <li class="divider"></li>

                <li>
                  <a href="<?php echo base_url('login/logout') ?>">
                    <i class="icon-off"></i>
                    Logout
                  </a>
                </li>
              </ul>
            </li>
          </ul><!--/.ace-nav-->
        </div><!--/.container-fluid-->
      </div><!--/.navbar-inner-->
    </div>