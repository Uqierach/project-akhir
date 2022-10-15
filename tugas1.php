<?php 
    // indexed array
    $prodi = array(
      "Teknik Informatika", 
      "Teknik Arsitektur", 
      "Matematika", 
      "Biologi",
    );

    
    // indexed array ends 
    
    // associative array starts
    $kelas = array(
      "Uqie" => "F",
      "Fiki" => "F", 
      "Wafiy" => "A",
    );

    // associative array ends
    
    // multidimesional array starts
    $dataMahasiswa = array(
      array("Uqie", 18, 146), 
      array("Rama", 18, 147), 
      array("Sada", 18, 145),
      array("Fajar", 19, 152),     
    );
    // multidimesional array ends

    
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Tugas 1 - Backend</title>
</head>
<body>
  <main>
    <h1>Macam-macam Array pada PHP</h1>
    
    <ol>
      <li>
        <header>Indexed Array</header>
        <p><i> Indexed Array</i> adalah array yang secara default direpresentasikan dengan nomor indeks. Seluruh elemen dari array ini direpresentasikan dengan nomor indeks yang dimulai dari 0. Array ini dapat berisi string, int, dan object.</p>
        <h4><b>Contoh :</b></h4>

        <p>
          $prodi = array(
            "Teknik Informatika", 
            "Teknik Arsitektur", 
            "Matematika", 
            "Biologi",
          );
        </p>
        <p>
          <?php 
            echo "Saya dari prodi $prodi[0]";
          ?>
        </p>
      </li>
      <li>
        <header>Associative Array</header>
        <p><i>Associative Array</i> adalah array yang setiap elemennya diberi <i>key</i> yang mana setiap elemen tadi dapat diakses dengan <i>key</i> spesifik.</p>
        <h4><b>Contoh :</b></h4>

        <p>
          $kelas = array( 
            "Uqie" => "F",
            "Fiki" => "F", 
            "Wafiy" => "A",
          );
        </p>
        <p>
          <?php 
            echo "Fiki ada di kelas " . $kelas['Fiki'];
          ?>
        </p>
      </li>
      <li>
        <header>Multidimensional Array</header>
        <p><i>Multidimensional Array</i> adalah array yang elemennya dapat berupa array (sub-array) dan elemen dari sub-array tadi juga dapat berupa array lagi dan seterusnya.</p>
        <h4><b>Contoh :</b></h4>

        <p>
          $dataMahasiswa = array(
            array("Uqie", 18, 146), 
            array("Rama", 18, 147), 
            array("Sada", 18, 145),
            array("Fajar", 19, 152),     
          );  
        </p>
        <p>
          <?php 
            echo "Nama  : " . $dataMahasiswa[3][0] . "<br>" 
                ."Usia  : " . $dataMahasiswa[3][1] . "<br>"
                ."NIM   : " . $dataMahasiswa[3][2]; 
          ?>
        </p>
      </li>
    </ol>
  </main>

</body>
</html>