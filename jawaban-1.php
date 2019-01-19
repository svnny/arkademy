<?php

function my_profile() {
  $data= [
    'name'=> 'Muhammad Fadkul Huda',
    'address'=> 'Dsn. Prenggan, RT10/RW02, Ds. Polosiri, Kec. Bawen, Kab. Semarang',
    'hobbies'=> [
      'coding'
    ],
    'is_married'=> FALSE,
    'school'=> [
      'highSchool'=> 'SMK Muhammadiyah Salatiga'
    ],
    'skills'=> [
      'PHP'=> [
        'CodeIgniter'
      ],
      'JavaScript'=> [
        'jQuerey'
      ],
      'CSS/HTML'=> [
        'Bootsrap'
      ]
    ]
  ];
  return(json_encode($data));
}

echo my_profile();
