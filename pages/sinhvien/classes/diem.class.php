<?php
require 'DB.class.php';
class diem extends DB
{
    function alldiem()
    {
        $con=$this->connect();
        $sql = "select * from diem,sinhvien WHERE diem.MSSV=sinhvien.MSSV ";
        $query=mysqli_query($con,$sql);
        $result=array();
        if($query)
        {
            while ($row=mysqli_fetch_assoc($query))
            {
                $result[]=$row;
            }
        }
        return $result;
    }
    function selectdiem($id)
    {
        $con=$this->connect();
        $sql="select * from diem where MaDiem={$id}";
        $query=mysqli_query($con,$sql);
        $result=array();
        if(mysqli_num_rows($query)>0)
        {
            $row=mysqli_fetch_assoc($query);
            $result[]=$row;
        }
        return $result;
    }
    function dong()
    {
    $dis=$this->close();
        return $dis;
    }
}
?>