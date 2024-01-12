<?php
$path=mysqli_connect("localhost","root","","student");
$nic=$_REQUEST['id'];
$name=$_REQUEST['name'];
$address=$_REQUEST['address'];
$telephone=$_REQUEST['telephone'];
$course=$_REQUEST['course'];

if(isset($_POST['save']))
{$save="insert into details values 
    ('$nic','$name','$address','$telephone','$course')";
if(mysqli_query($path,$save))
{echo("Data saved successfully");}}

if(isset($_POST['update']))
{$update="update details set name='$name' , address='$address' , telephone='$telephone' , course='$course' where nic='$nic' ";
if(mysqli_query($path,$update))
{echo("Data updated successfully");}}

if(isset($_POST['delete']))
{$delete="Delete from details where nic='$nic' ";
if(mysqli_query($path,$delete))
{echo("Record has been deleted");}}

?>