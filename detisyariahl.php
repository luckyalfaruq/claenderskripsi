<!DOCTYPE html>
<html>

<body>
<div class="col-md-9" style="
    border-left-width: 37px;
    margin-left: 121px;
">
<article class="post blog-single-post">
			<table class="table">
					<tbody>
<?php 
foreach ($data as $datanya) :
?>
					<tr><td>Hari</td><td>:</td><td><?php echo "$datanya[nama_agenda]"; ?></td></tr>
					<tr><td>Tanggal mulai</td><td>:</td><td><?php echo "$datanya[tgl_mulai]";?></td></tr>
					<tr><td>TAnggal selesai</td><td>:</td><td><?php echo "$datanya[tgl_selesai]"; ?></td></tr>
					
					<tr><td>Tempat</td><td>:</td><td><?php echo "$datanya[tempat]"; ?></td></tr>
					<tr><td valign="top">Deskripsi</td><td valign="top"> : </td><td><?php echo "$datanya[deskripsi]"; ?></td></tr>
															
					<tr><td colspan="3">
										<img class="img-thumbnail" src="<?php echo "$datanya[file_lampiran]"; ?>">
									 </td></tr>
										
					<?php 
					// $no++;
				endforeach;
			?>
				</tbody>
				</table>
</article>
	</div>		
</body>
</html>