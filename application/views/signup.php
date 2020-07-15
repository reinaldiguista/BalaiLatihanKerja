<div class="container">
    <div class="row">
        <br>
        <div class="col-xs-12 .col-md-8-centered well">
            <?php echo form_open('Signup/signup_form') ?>
            <fieldset>
                <legend class="text-center">Employee Registration</legend>
                <!-- NIK -->
                <?php echo $this->session->flashdata('msg'); ?>
                <div class="form-group">
                    <div class="row colbox">
                        <div class="col-xs-12 .col-md-8">
                            <label for="nik" class="control-label">NIK</label>
                            <input class="form-control" id="nik" name="nik" placeholder="NIK" type="text" value="<?php echo set_value('nik'); ?>" /> 
                            <span class="text-danger"><?php echo form_error('nik'); ?></span>
                        </div>
                    </div>
                </div>
                <!-- Nama -->
                <div class="form-group">
                    <div class="row colbox">
                        <div class="col-xs-12 .col-md-8">
                            <label for="nama" class="control-label">Nama</label>
                            <input class="form-control" id="nama" name="nama" placeholder="Nama" type="text" value="<?php echo set_value('nama'); ?>" /> 
                            <span class="text-danger"><?php echo form_error('nama'); ?></span>
                        </div>
                    </div>
                </div>
                <!-- Jenis Kelamin -->
                <div class="form-group">
                    <div class="row colbox">
                        <div class="col-xs-12 .col-md-8">
                        
                            <label for="jenis_kelamin" class="control-label">Jenis Kelamin</label>
                            <select name="jenis_kelamin" id="jenis_kelamin" class="form-control"  placeholder="Nama" type="text" value="<?php echo set_value('jenis_kelamin'); ?>">
                                <option>-- Pilih --</option>
                                <option value="Laki-Laki">Laki-Laki</option>
                                <option value="Perempuan">Perempuan</option>
        
                            </select>
                            <span class="text-danger"><?php echo form_error('jenis_kelamin'); ?></span>
                        </div>
                    </div>
                </div>

                <!-- employee address -->
                <div class="form-group">
                    <div class="row colbox">
                        <div class="col-xs-12 .col-md-8">
                            <label for="alamat" class="control-label">Alamat</label>
                            <input class="form-control" id="alamat" name="alamat" placeholder="Alamat" type="text" value="<?php echo set_value('alamat'); ?>" />  
                            <span class="text-danger"><?php echo form_error('alamat'); ?></span>
                        </div>
                    </div>
                </div>
                <!-- employee email -->
                <div class="form-group">
                    <div class="row colbox">
                        <div class="col-xs-12 .col-md-8">
                            <label for="email" class="control-label">Employee Email</label>
                            <input class="form-control" id="email" name="email" placeholder="john@gmail.com" value="<?php echo set_value('email'); ?>" type="email" />  
                            <span class="text-danger"><?php echo form_error('email'); ?></span>
                        </div>
                    </div>
                </div>

            
                <!-- No. Hp -->
                <div class="form-group">
                    <div class="row colbox">
                        <div class="col-xs-12 .col-md-8">
                            <label for="no_hp" class="control-label">No. Hp</label>
                            <input class="form-control" id="no_hp" name="no_hp" placeholder="contoh : 081123456789" type="text" value="<?php echo set_value('no_hp'); ?>" />  
                            <span class="text-danger"><?php echo form_error('no_hp'); ?></span>
                        </div>
                    </div>
                </div>
                <!-- employee password -->
                <div class="form-group">
                    <div class="row colbox">
                        <div class="col-xs-12 .col-md-8">
                            <label for="password" class="control-label">Password</label>
                            <input class="form-control" id="password" name="password" placeholder="Isi Password" type="password" value="<?php echo set_value('password'); ?>"/>  
                            <span class="text-danger"><?php echo form_error('password'); ?></span>
                        </div>
                    </div>
                </div>
                
                <!-- employee confirm password -->
                <div class="form-group">
                    <div class="row colbox">
                        <div class="col-xs-12 .col-md-8">
                            <label for="konfirmasi_password" class="control-label">Konfirmasi Password</label>
                            <input class="form-control" id="konfirmasi_password" name="konfirmasi_password" placeholder="Isi Ulang Password Anda" type="password" value="<?php echo set_value('konfirmasi_password'); ?>"/> 
                            <span class="text-danger"><?php echo form_error('konfirmasi_password'); ?></span>
                        </div>
                    </div>
                </div>
                <br>
                <!-- sigup button -->
                <div class="form-gruop">
                    <div class="row colbox">
                        <div class="col-xs-12 .col-md-8">
                            <input id="btn_signup" name="btn_signup" type="submit" class="btn btn-primary col-xs-12 .col-md-8" value="Daftar Sekarang" />
    
                        </div>
                    </div>
                </div>
            </fieldset>
            <?php echo form_close(); ?>
             <div class="text-center">
                 <br>
                <a href="<?php echo site_url(); ?>Welcome" >Sudah Pernah Mendaftar? Login</a>
            </div>
            
        </div>
    </div>

</div>