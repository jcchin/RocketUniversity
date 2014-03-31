<?php

require('gantti.php'); 

date_default_timezone_set('UTC');
setlocale(LC_ALL, 'en_US');

$data = array();

$data[] = array(
  'label' => 'DSM Presentation',
  'start' => '2014-04-01', 
  'end'   => '2014-04-01'
);

$data[] = array(
  'label' => 'Airbag System SRR',
  'start' => '2014-05-12', 
  'end'   => '2014-05-12', 
  'class' => 'important',
);

$data[] = array(
  'label' => 'Risk Reduction 1',
  'start' => '2014-04-29', 
  'end'   => '2014-05-27', 
  'class' => 'important',
);

$data[] = array(
  'label' => 'Launch 1 FRR',
  'start' => '2014-05-27', 
  'end'   => '2014-05-27', 
  'class' => 'important',
);

$data[] = array(
  'label' => 'Launch 1 Window',
  'start' => '2014-06-01', 
  'end'   => '2014-06-07', 
  'class' => 'important',
);

$data[] = array(
  'label' => 'Risk Reduction 2',
  'start' => '2014-06-09', 
  'end'   => '2014-09-22',
  'class' => 'urgent',
);

$data[] = array(
  'label' => 'PDR',
  'start' => '2014-07-14', 
  'end'   => '2014-07-14',
  'class' => 'urgent',
);

$data[] = array(
  'label' => 'Launch 2 FRR',
  'start' => '2014-09-22', 
  'end'   => '2014-09-22',
  'class' => 'urgent',
);

$data[] = array(
  'label' => 'Launch 2 Window',
  'start' => '2014-09-28', 
  'end'   => '2014-10-11',
  'class' => 'urgent',
);

$data[] = array(
  'label' => 'Launch 3 Work',
  'start' => '2014-10-13', 
  'end'   => '2015-03-30',
  'class' => 'urgent',
);

$data[] = array(
  'label' => 'CDR',
  'start' => '2014-12-15', 
  'end'   => '2014-12-15',
  'class' => 'urgent',
);

$data[] = array(
  'label' => 'Launch 3 FRR',
  'start' => '2015-03-30', 
  'end'   => '2015-03-30',
  'class' => 'urgent',
);

$data[] = array(
  'label' => 'Launch 3 Window',
  'start' => '2015-04-05', 
  'end'   => '2015-04-18',
  'class' => 'urgent',
);

$data[] = array(
  'label' => 'Airborne Meeting',
  'start' => '2014-04-28', 
  'end'   => '2014-04-28',
  'class' => 'urgent',
);

$data[] = array(
  'label' => 'Airborne Decision',
  'start' => '2014-05-12', 
  'end'   => '2014-05-12',
  'class' => 'urgent',
);

$data[] = array(
  'label' => 'Airborne Work',
  'start' => '2014-06-01', 
  'end'   => '2014-11-27',
  'class' => 'urgent',
);

$data[] = array(
  'label' => 'Airborne Training',
  'start' => '2014-11-03', 
  'end'   => '2014-11-07',
  'class' => 'urgent',
);

$data[] = array(
  'label' => 'Airborne Integration',
  'start' => '2015-01-01', 
  'end'   => '2015-01-30',
  'class' => 'urgent',
);

$data[] = array(
  'label' => 'Airborne Launch',
  'start' => '2015-02-01', 
  'end'   => '2015-02-21',
  'class' => 'urgent',
);

$gantti = new Gantti($data, array(
  'title'      => 'Rocket U',
  'cellwidth'  => 5,
  'cellheight' => 35
));

echo $gantti;

?>
