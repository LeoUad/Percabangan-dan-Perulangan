<!DOCTYPE html>
<html>
<head>
    <title>For Berkalang</title>
</head>
<body>
<pre>
<script language="JavaScript">
    var baris, i, j;
    var nilai = prompt("Tinggi: ", 5);
    var tinggi = parseInt(nilai);

        for (baris = 1; baris <= tinggi; baris++) {
            
            for (i = 1; i <= tinggi - baris; i++) {
                document.write("&nbsp;"); 
            }
            
            for (j = 1; j < 2 * baris; j++) {
                document.write("*");
            }
            
            document.write("<br>");
        }
</script>
</pre>
</body>
</html>