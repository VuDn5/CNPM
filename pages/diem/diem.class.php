
<?php
require $_SERVER['DOCUMENT_ROOT']. "/CNPM/pages/diem/DB.class.php";
class diem extends DB
{
    function alldiem()
    {
        $con=$this->connect();
        $sql = "select * from diem,sinhvien,monhoc WHERE diem.MSSV=sinhvien.MSSV and sinhvien.MAMH=monhoc.MAMH";
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