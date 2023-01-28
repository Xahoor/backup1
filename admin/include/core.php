<?php
class core{
    var $db;
    public function __construct($conn)
    {
        $this->db = $conn;
    }
    public function privacy($data){
        try {

            extract($data);

            $old = $this->confirmPassword($opassword);

            if($old){
                $sql = "update admin set email=?, password=? where aid =1";
                $statment = $this->db->prepare($sql);
                $arr = array($email,$npassword);
                $statment->execute($arr);
                

                $message='success';
            }else{
                $message = 'old';
            }
            return $message;
            
        }catch (\Throwable $th) {
            throw $th;
        }
    }





    public function add_vehicle($data){
        try{
            extract($data);
            // echo $_FILES['files']['name'];
            $total_count = count($_FILES['files']['name']);

            $sql = "insert into vehicle set title = ?, modal=?, price=?,color=?, seats=?, year=?, transmission=?, bags=?";

                $statment = $this->db->prepare($sql);
                $d1=array($title,$modal,$price,$color,$seat,$build,$transmission,$bag);
                $statment->execute($d1);


                $find_id = "select * from vehicle where vid=(select max(vid) from vehicle)";
                $state = $this->db->prepare($find_id);
                $state->execute();
                $data = $state->fetch(PDO::FETCH_ASSOC);
                if($data){
                        // echo $id['hid'];
                    $sq = "insert into vehicle_gallery set picture =?, vid=?";
                        $stat = $this->db->prepare($sq);
                    for($x=0; $x<$total_count; $x++){
                        $file = $_FILES["files"]["name"][$x];
                        $basename = pathinfo($file)['filename'];
                        $basename = $basename.rand();   
                        $itemp_name = $_FILES["files"]["tmp_name"][$x];
                        $extension = strtolower(pathinfo($file,PATHINFO_EXTENSION));
                        $basename = $basename.".".$extension;
                        move_uploaded_file($_FILES['files']['tmp_name'][$x], '../../assets/images/'.$basename);

                        $d2 = array($basename,$data['vid']);
                        $stat->execute($d2);
                    }
                    return "success";
                }
               

        }catch (\Throwable $th) {
            throw $th;
        }
    }


















    // privates
    /////////////////////////////////////////////

    private function confirmPassword($old){
        try {
            
            $sql = "select * from admin where password=?";
            $statment = $this->db->prepare($sql);
            $arr = array($old);
            $statment->execute($arr);
            $pass = $statment->fetch(PDO::FETCH_ASSOC);

             return $pass;
        }catch (\Throwable $th){
            throw $th;
        }

    }








}

?>