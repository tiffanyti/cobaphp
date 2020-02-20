<!DOCTYPE html>
<html>
<head>
	<title>Database & MySQL</title>
</head>
<body>
	<h1>database</h1>
	<p>data. data adalah representasi fakta di dunia nyata <br>
		tapi data kan banyak banget ya, cara ngolahnya jg macem2 dan emang kalo manual aja mungkin bisa repot kalo udah banyak</p>

	<p>databases itu data dalam DBMS <br>
		<em>Data Base Management System</em></p>

	<p>aplikasi DBMS misalnya mysql ini (paling terkenal) <br>
		sementara mysql sendiri adalah bahasa interaksi database</p>

<br>
<br>
<br>

	<h1>Mysql</h1>
	<p>untuk Mysql sendiri lebih ke nyoba di command prompt langsung ya, tapi mungkin sedikit teorinya : </p>

	<ul> kita bisa jadi 2 sisi :
		<li>bisa jadi guest, ini cuma bisa liat depannya tapi ya</li>
		<li>bisa jadi server yang bisa macem2 <br>
			kita musti masuk dulu dari command prompt, kalo ngga ntar gasampe kesana</li>
	</ul>

	<p>kita disini stelah bikin database, bikin tabel, baru bisa mulai masukin data kita yang bner2 </p>

	<ul>data yang dimasukin (strukturnya) harus berisi :
		<li>nama field</li>
		<li>tipe data</li>
		<li>atribut pendukung</li>
		<br>
		<li>contoh : <br>
			id : integer primary key auto_increment <br>
			nrp : varchar(9)</li>
		</ul>

	<table style="width: 700px;">untuk beberapa syntax : 
		<tr>
			<th>syntax</th>
			<th>gunanya</th>
		</tr>
		<tr>
			<td>/applications/xampp/xamppfiles/bin/mysql -uroot -p</td>
			<td>buat masuk jadi server</td>
		</tr>
		<tr>
			<td>create database (nama);</td>
			<td>buat database</td>
		</tr>
		<tr>
			<td>use (nama database);</td>
			<td>pake database</td>
		</tr>
		<tr>
			<td>create table (nama);</td>
			<td>buat table</td>
		</tr>
		<tr>
			<td>show tables;</td>
			<td>liat table</td>
		</tr>
		<tr>
			<td>show databases;</td>
			<td>liat database</td>
		</tr>
		<tr>
			<td>drop table (nama);</td>
			<td>hapus table</td>
		</tr>
		<tr>
			<td>insert into (nama tabel) values (struktur yang udah dibikin dan harus urut);</td>
			<td>masukin data table</td>
		</tr>
		<tr>
			<td>update (nama tabel) set (key) = '(values)' where (key) = (values);</td>
			<td>mengubah data tabel</td>
		</tr>
		<tr>
			<td>delete from (nama tabel) where (key) = (values);</td>
			<td>hapus 1 baris data table</td>
		</tr>
	</table>

	<ul>ps :
		<li>kalau sukses ada tulisannya query ok tiap masukin</li>
		<li>kalo masalah kepencet enter, dia bisa selalu di sambung dibawahnya</li>
		<li>jgn lupa titik koma</li>
		<li>kalo mac yg dipake skr, kalo mau buka di prompt entah knp harus langsung, gabisa 1 1</li></ul>
</body>
</html>