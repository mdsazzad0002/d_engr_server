
<?php
    include 'config.php';
    include '../../conection/index.php';
    $git = new git();
    if(isset($_GET['code'])){
        $git_code =$_GET['code'];

        $gitUser = $git->usertoken($git_code);

    
        // exit();
        // echo $gitUser['id'];

       $git_id = !empty($gitUser['id']) ? $gitUser['id'] : '';
        $git_name = !empty($gitUser['name']) ? $gitUser['name'] : '';
        $git_username = !empty($gitUser['login']) ? $gitUser['login'] : '';
        $git_email = !empty($gitUser['email']) ? $gitUser['email'] : '';
        $git_location = !empty($gitUser['location']) ? $gitUser['location'] : '';
        $git_picture = !empty($gitUser['avatar_url']) ? $gitUser['avatar_url'] : '';
        $git_link  = !empty($gitUser['html_url']) ? $gitUser['html_url'] : '';
        $git_flow_link  = !empty($gitUser['follow']) ? $gitUser['follow'] : '';

        
        
        
        
        if(mysqli_num_rows($con->query("SELECT * FROM `suscription` WHERE  `oauth_uid` = '$git_id' "))==1){
            setcookie('user',$git_id, time() + (86400 * 30), "/");
            header('location:../');
        }else{
            $outPath ='';
            if(!empty($git_picture)){
                $inPath =   $git_picture;
                $outPath = '../../assets/images/'.$git_id.$git_username.'.jpg';
                $outdb=$git_id.$git_username.'.jpg';
                $git->save_image($inPath, $outPath);
        
            }
            $con->query("INSERT `suscription` SET `oauth_uid`='$git_id',`username`='$git_username',`location`='$git_location',`from_source`='github',`name`='$git_name',`email`='$git_email',`file`='$outdb',`expire`='0',`requested`='0',`download_times`='0',`status`='active',`plan`='Free'");
            setcookie('user',$git_id , time() + (86400 * 30), "/");
            header('location:../');
         
        }





     
        


    }else{
        $git->usercode();
    }