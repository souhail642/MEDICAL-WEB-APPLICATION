<?php

//fetch.php

include ('database_connection.php');

$column = array('id_rdv', 'first_name', 'last_name', 'email', 'phone', 'speciality', 'date1', 'hours', 'description');

$query = "SELECT * FROM rdv ";

if(isset($_POST['search']['value']))
{
 $query .= '
 WHERE id_rdv LIKE "%'.$_POST['search']['value'].'%" 
 OR first_name LIKE "%'.$_POST['search']['value'].'%" 
 OR last_name LIKE "%'.$_POST['search']['value'].'%" 
 OR email LIKE "%'.$_POST['search']['value'].'%" 
 OR phone LIKE "%'.$_POST['search']['value'].'%"
 OR speciality LIKE "%'.$_POST['search']['value'].'%"
 OR date1 LIKE "%'.$_POST['search']['value'].'%"
 OR hours LIKE "%'.$_POST['search']['value'].'%"
 OR description LIKE "%'.$_POST['search']['value'].'%" 
 ';
}

if(isset($_POST['order']))
{
 $query .= 'ORDER BY '.$column[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].' ';
}
else
{
 $query .= 'ORDER BY id_rdv DESC ';
}

$query1 = '';

if($_POST['length'] != -1)
{
 $query1 = 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}

$statement = $connect->prepare($query);

$statement->execute();

$number_filter_row = $statement->rowCount();

$statement = $connect->prepare($query . $query1);

$statement->execute();

$result = $statement->fetchAll();

$data = array();

foreach($result as $row)
{
 $sub_array = array();
 $sub_array[] = $row['id_rdv'];
 $sub_array[] = $row['first_name'];
 $sub_array[] = $row['last_name'];
 $sub_array[] = $row['email'];
 $sub_array[] = $row['phone'];
 $sub_array[] = $row['speciality'];
 $sub_array[] = $row['date1'];
 $sub_array[] = $row['hours'];
 $sub_array[] = $row['description'];
 $data[] = $sub_array;
}

function count_all_data($connect)
{
 $query = "SELECT * FROM rdv";
 $statement = $connect->prepare($query);
 $statement->execute();
 return $statement->rowCount();
}

$output = array(
 'draw'    => intval($_POST['draw']),
 'recordsTotal'  => count_all_data($connect),
 'recordsFiltered' => $number_filter_row,
 'data'    => $data
);

echo json_encode($output);

?>