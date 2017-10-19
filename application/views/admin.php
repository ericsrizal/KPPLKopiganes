    <!DOCTYPE html>  
    <html>  
    <head>  
        <title></title>  
    </head>  
    <body>  
        Welcome <?php echo $this->session->userdata('user'); ?>   
    <br>  
        <?php echo anchor('Login/logout', 'Logout'); ?>  
        <table border = "1">
			<tr>
				<th>Kode</th>
				<th>Nama</th>
				<th>Harga</th>
                <th>Jenis</th>
				<th>Action</th>
			</tr>
			<?php foreach($data as $d){ ?>
			<tr>
                
				<td><?php echo $d['kode']; ?></td>
				<td><?php echo $d['nama']; ?></td>
				<td><?php echo $d['harga']; ?></td>
                <td><?php echo $d['jenis']; ?></td>
				<td align="center">
					<a href="<?php echo base_url()."index.php/Admin_menu/edit_data/".$d['kode']; ?>">Update</a>
					<a href="<?php echo base_url()."index.php/Admin_menu/do_delete/".$d['kode']; ?>">Delete</a>
				</td>
			</tr>
			<?php }?>
		</table>
			<a href ="<?php echo base_url()."index.php/c_cafe/add_data"; ?>">Tambah Data</a>
      
      
    </body>  
    </html>  