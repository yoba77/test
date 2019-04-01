<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Form Input</title>
    
      <!-- Load librari/plugin jquery nya -->  <script src="js/jquery.min.js" type="text/javascript"></script>
      <!-- Load File javascript config.js -->  <script src="js/config.js" type="text/javascript"></script>
</head>
<body>
	<div class="container">
		<form action="" method="">
			<table>
				<tr>
					<td colspan="2"><h2>Form Input Keterangan Kehadiran</h2></td>
				</tr>
				<tr>
					<td colspan="2">
						<input type="text" name="" value="" placeholder="Input NIP (Number 18 digit)" required>
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<input type="text" name="" value="" placeholder="Nama" required>
					</td>
				</tr>	
				<tr>
					<td colspan="2">
						<input type="text" name="" value="" placeholder="Tanggal Mulai DD/MM/YY" required>
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<input type="text" name="" value="" placeholder="Tanggal Selesai DD/MM/YY" required>
					</td>
				</tr>
				<tr>
					<td colspan="">
						<select name="ket">
                        <option value="">Jenis Keterangan</option>
                                   
	                     </select>
                     </td>
				</tr>
				<tr>
					<td colspan="">
						 <select name="">
	                                <option value="">Sub Jenis Keterangan</option>
                                    
	                     </select>
                     </td>
                </tr>
                <tr>
                	<td colspan="2">
						<input type="text" name="" value="" placeholder="Nomor Surat Cuti/Tugas/Belajar" required>
					</td>
                </tr>
                <tr>
                	<td colspan="2">
                		<textarea placeholder="Keterangan"></textarea>
                	</td>
                </tr>

                <tr>
               		<td colspan="2">
						<input type="text" name="" value="" placeholder="DATE NOW by system DD/MM/YY" required>
					</td>
				</tr>
				<tr>
					<td>
						<input type="submit" value="SIMPAN">
                        <input type="submit" value="UBAH">
                        <input type="submit" value="HAPUS">
					</td>
                    <td>
                        <a href="logout.php">Logout</a>
                    </td>
                </tr>
			</table>
		</form>
	</div>
</body>
</html>