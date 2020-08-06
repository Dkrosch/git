<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
  <link rel="stylesheet" href="">
</head>
<body>
  <?php
$perolehan_medali= array(
        array('Indonesia','emas'),
        array('India','perak'),
        array('Korea Selatan','emas'),
        array('India','perak'),
        array('India','emas'),
        array('Indonesia','perak'),
        array('Indonesia','emas')
    );
  print_r($perolehan_medali);


$arrkey = ['negara','emas','perak','perunggu'];
$hasil = [];
  $sum = 0;
  for ($i = 0; $i < 6; $i++){
      for ($j = 0; $j < 2; $j++){
          if ($perolehan_medali[$i][0]== 'Indonesia'){
              $hasil[0][$arrkey[0]] = 'Indonesia';
          }
          if ($perolehan_medali[$i][0]== 'Indonesia' && $perolehan_medali[$i][1] == 'emas' ){
              $hasil[0][$arrkey[1]] += $sum;
          }else if ($perolehan_medali[$i][0]== 'Indonesia' && $perolehan_medali[$i][1] == 'perak' ){
              $hasil[0][$arrkey[2]] += $sum;
          }else if ($perolehan_medali[$i][0]== 'Indonesia' && $perolehan_medali[$i][1] !== 'perak' && $perolehan_medali[$i][1] !== 'emas'){
              $hasil[0][$arrkey[3]] += $sum;
          }
        
          if ($perolehan_medali[$i][0]== 'India'){
              $hasil[1][$arrkey[0]] = 'India';
          }
          if ($perolehan_medali[$i][0]== 'India' && $perolehan_medali[$i][1] == 'emas' ){
              $hasil[1][$arrkey[1]] += $sum;
          }else if ($perolehan_medali[$i][0]== 'India' && $perolehan_medali[$i][1] == 'perak' ){
              $hasil[1][$arrkey[2]] += $sum;
          }else if ($perolehan_medali[$i][0]== 'India' && $perolehan_medali[$i][1] !== 'perak' && $perolehan_medali[$i][1] !== 'emas'){
              $hasil[1][$arrkey[3]] += $sum;
          }
        
          if ($perolehan_medali[$i][0]== 'Korea Selatan'){
              $hasil[2][$arrkey[0]] = 'Korea Selatan';
          }
          if ($perolehan_medali[$i][0]== 'Korea Selatan' && $perolehan_medali[$i][1] == 'emas' ){
              $hasil[2][$arrkey[1]] += $sum;
          }else if ($perolehan_medali[$i][0]== 'Korea Selatan' && $perolehan_medali[$i][1] == 'perak' ){
              $hasil[2][$arrkey[2]] += $sum;
          }else if ($perolehan_medali[$i][0]== 'Korea Selatan' && $perolehan_medali[$i][1] !== 'perak' && $perolehan_medali[$i][1] !== 'emas'){
              $hasil[2][$arrkey[3]] += $sum;
          }
      }
    } 
  $sum1 = 0;
  $sum2 = 0;
  $sum3 = 0;
  $sum4 = 0;
  $sum5 = 0;
  $sum6 = 0;
  $sum7 = 0;
  $sum8 = 0;
for ($i = 0; $i < 7; $i++){
      for ($j = 0; $j < 2; $j++){
        if ($perolehan_medali[$i][0]== 'Indonesia'){
            $hasil[0][$arrkey[0]] = 'Indonesia';
            if ($perolehan_medali[$i][1] == 'emas' ){
                $hasil[0][$arrkey[1]] += 1;
            }else if ($perolehan_medali[$i][1] == 'perak' ){
                $hasil[0][$arrkey[2]] += 1;
            }else if ($perolehan_medali[$i][1] !== 'perak' && $perolehan_medali[$i][1] !== 'emas'){            
                $hasil[0][$arrkey[3]] += 1;
            }
        }
        if ($perolehan_medali[$i][0]== 'India'){
            $hasil[1][$arrkey[0]] = 'India';
            if ($perolehan_medali[$i][1] == 'emas' ){
                $hasil[1][$arrkey[1]] += 1;
            }else if ($perolehan_medali[$i][1] == 'perak' ){
                $hasil[1][$arrkey[2]] += 1;
            }else if ($perolehan_medali[$i][1] !== 'perak' && $perolehan_medali[$i][1] !== 'emas'){
                $hasil[1][$arrkey[3]] += 1;
            }
        }
        if ($perolehan_medali[$i][0]== 'Korea Selatan'){
            $hasil[2][$arrkey[0]] = 'Korea Selatan';
            if ($perolehan_medali[$i][1] == 'emas' ){
                $hasil[2][$arrkey[1]] += 1;
            }else if ($perolehan_medali[$i][1] == 'perak' ){
                $hasil[2][$arrkey[2]] += 1;
            }else if ($perolehan_medali[$i][1] !== 'perak' && $perolehan_medali[$i][1] !== 'emas'){
                $hasil[2][$arrkey[3]] += 1;
            }
        }
    }
for($i = 0; $i < 3; $i++){
    for($j = 0; $j < 4; $j++){
        if ($hasil[$i][$arrkey[$j]] == ''){
            $hasil[$i][$arrkey[$j]] = 0;
        }
    }
}
print_r($hasil);
?>
</body>
</html>