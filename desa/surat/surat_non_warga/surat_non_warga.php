<div class="content-wrapper">
	<section class="content-header">
		<h1>Surat Keterangan</h1>
		<ol class="breadcrumb">
			<li><a href="<?= site_url('hom_desa/about')?>"><i class="fa fa-dashboard"></i> Home</a></li>
			<li><a href="<?= site_url('surat')?>"> Daftar Cetak Surat</a></li>
			<li class="active">Surat Keterangan</li>
		</ol>
	</section>
	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<div class="box box-info">
					<div class="box-header with-border">
						<a href="<?=site_url("surat")?>" class="btn btn-social btn-flat btn-info btn-sm btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block"  title="Kembali Ke Daftar Wilayah">
							<i class="fa fa-arrow-circle-left "></i>Kembali Ke Daftar Cetak Surat
           	</a>
					</div>
					<div class="box-body">
						<form id="validasi" action="<?= $form_action?>" method="POST" target="_blank" class="form-horizontal">
							<div class="form-group">
								<label for="nomor"  class="col-sm-3 control-label">Nomor Surat</label>
								<div class="col-sm-8">
									<input  id="nomor" class="form-control input-sm required" type="text" placeholder="Nomor Surat" name="nomor">
									<input type="hidden" name="nik" value="<?= $individu['id']?>">
									<p class="help-block text-red small">Terakhir: <strong><?= $surat_terakhir['no_surat'];?></strong> (tgl: <?= $surat_terakhir['tanggal']?>)</p>
								</div>
							</div>
							<div class="form-group">
								<label for="nama_non_warga"  class="col-sm-3 control-label">Nama</label>
								<div class="col-sm-8">
									<input  id="nama_non_warga" class="form-control input-sm required" type="text" placeholder="Nama" name="nama_non_warga">
								</div>
							</div>
							<div class="form-group">
								<label for="berlaku_dari"  class="col-sm-3 control-label">Identitas (KTP / KK)</label>
								<div class="col-sm-4">
									<input class="form-control input-sm required" placeholder="Nomor KTP" name="nik_non_warga" type="text"/>
								</div>
								<div class="col-sm-4">
									<input class="form-control input-sm required" placeholder="Nomor KK" name="kk_non_warga"  type="text"/>
								</div>
							</div>
							<div class="form-group">
								<label for="lahir"  class="col-sm-3 control-label">Tempat / Tanggal Lahir</label>
								<div class="col-sm-5 col-lg-4">
									<input type="text"  name="tempatlahir" class="form-control input-sm required" placeholder="Tempat Lahir"></input>
								</div>
								<div class="col-sm-3 col-lg-2">
									<div class="input-group input-group-sm date">
										<div class="input-group-addon">
											<i class="fa fa-calendar"></i>
										</div>
										<input title="Pilih Tanggal" class="form-control input-sm datepicker required" name="tanggallahir" type="text"/>
									</div>
								</div>
							</div>
							<div class="form-group">
                <label for="sex" class="col-sm-3 control-label" >Jenis Kelamin / Warga Negara / Agama</label>
                <div class="col-sm-3">
                  <select class="form-control input-sm" name="sex" id="sex">
										<option value="">Pilih Jenis Kelamin</option>
										<?php foreach ($sex as $data): ?>
											<option value="<?= ucwords(strtolower($data['nama']))?>"><?= $data['nama']?></option>
										<?php endforeach;?>
                  </select>
                </div>
                <div class="col-sm-2">
                  <select class="form-control input-sm" name="warga_negara" id="warga_negara">
										<option value="">Pilih Warganegara</option>
										<?php foreach ($warganegara as $data): ?>
											<option value="<?= $data['id']=='3' ? ucwords(strtolower($data['nama'])): strtoupper($data['nama'])?>"><?= $data['nama']?></option>
										<?php endforeach;?>
                  </select>
                </div>
                <div class="col-sm-3">
                  <select class="form-control input-sm" name="agama" id="agama">
										<option value="">Pilih Agama</option>
										<?php foreach ($agama as $data): ?>
											<option value="<?= $data['id']=='7' ? $data['nama'] : ucwords(strtolower($data['nama']))?>"><?= $data['nama']?></option>
										<?php endforeach;?>
                  </select>
                </div>
              </div>
							<div class="form-group">
                <label for="pekerjaan" class="col-sm-3 control-label" >Pekerjaan</label>
                <div class="col-sm-4">
                  <select class="form-control input-sm" name="pekerjaan" id="pekerjaan">
										<option value="">Pilih Pekerjaan</option>
										<?php foreach ($pekerjaan as $data): ?>
											<option value="<?= $data['nama']?>"><?= $data['nama']?></option>
										<?php endforeach;?>
                  </select>
                </div>
              </div>
							<div class="form-group">
								<label for="alamat"  class="col-sm-3 control-label">Tempat Tinggal</label>
								<div class="col-sm-8">
									<input  id="alamat" class="form-control input-sm required" type="text" placeholder="Tempat Tinggal" name="alamat">
								</div>
							</div>
							<div class="form-group">
								<label for="nama_usaha"  class="col-sm-3 control-label">Keterangan</label>
								<div class="col-sm-4">
									<input id="nama_usaha" class="form-control input-sm required" type="text" placeholder="Nama Usaha" name="keterangan">
								</div>
							</div>
							
							<?php include("donjo-app/views/surat/form/_pamong.php"); ?>
						</form>
					</div>
					<?php include("donjo-app/views/surat/form/tombol_cetak.php"); ?>
				</div>
			</div>
		</div>
	</section>
</div>
